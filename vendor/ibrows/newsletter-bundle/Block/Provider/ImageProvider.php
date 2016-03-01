<?php

namespace Ibrows\Bundle\NewsletterBundle\Block\Provider;

use Ibrows\Bundle\NewsletterBundle\Model\Block\BlockInterface;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

class ImageProvider extends AbstractProvider
{
    protected $request;
    protected $uploadDirectory;
    protected $publicPath;
    protected $width = null;

    const PROVIDER_OPTION_FILENAME = 'filename';

    public function __construct(Request $request, $uploadDirectory, $publicPath)
    {
        if (!is_dir($uploadDirectory)) {
            $filesystem = new Filesystem();
            $filesystem->mkdir($uploadDirectory);
        }

        if (!is_writable($uploadDirectory)) {
            throw new \InvalidArgumentException("No write access on directory $uploadDirectory");
        }

        $this->request = $request;
        $this->uploadDirectory = realpath($uploadDirectory);
        $this->publicPath = $publicPath;
    }

    public function updateClonedBlock(BlockInterface $block)
    {
        $newFilename = md5($this->getFilename($block).uniqid());
        $oldFilePath = $this->getFilePath($block);
        $this->setFilename($block, $newFilename);

        $filesystem = new Filesystem();
        $filesystem->copy($oldFilePath, $this->getFilePath($block));
    }

    public function getBlockDisplayContent(BlockInterface $block)
    {
        $filePath = $this->getFilePath($block);
        if ($filePath && file_exists($filePath)) {
            return '<img src="'. $this->getPublicPath($block) .'">';
        }

        return 'No image found';
    }

    public function getBlockEditContent(BlockInterface $block)
    {
        $string = '';

        $filePath = $this->getFilePath($block);
        if ($filePath && file_exists($filePath)) {
            $string .= '<div>'. $this->getBlockDisplayContent($block) .'</div>';
        }

        $string .= '
            <div><input type="file" name="block['. $block->getId() .']"></div>
        ';

        return $string;
    }

    public function updateBlock(BlockInterface $block, $update)
    {
        if (!$update instanceof UploadedFile) {
            return false;
        }

        if (!$update->isValid()) {
            return false;
        }

        $filename = md5($update->getFilename().uniqid());
        $block->setProviderOption(self::PROVIDER_OPTION_FILENAME, $filename);
        $update->move($this->uploadDirectory, $filename);

        $filePath = $this->getFilePath($block);

        list($orgWidth, $orgHeight, $type) = getimagesize($filePath);

        if ($this->width === null)
                return;

        $newWidth = $this->width;
        $newHeight = round($orgHeight/$orgWidth*$newWidth);
        if ($newWidth > $orgWidth)
                return;

        $newImage = imagecreatetruecolor($newWidth, $newHeight);

        switch ($type) {
            case IMAGETYPE_JPEG2000:
            case IMAGETYPE_JPEG:
                $orgImage = imagecreatefromjpeg($filePath);
                break;
            case IMAGETYPE_GIF:
                $orgImage = imagecreatefromgif($filePath);
                break;
            case IMAGETYPE_WBMP:
                $orgImage = imagecreatefromwbmp($filePath);
                break;
            case IMAGETYPE_PNG:
                $orgImage = imagecreatefrompng($filePath);
                break;
            case IMAGETYPE_XBM:
                $orgImage = imagecreatefromxbm($filePath);
                break;
            default:
                throw new \InvalidArgumentException('image type is not supported');
        }

        imagecopyresampled($newImage, $orgImage, 0, 0, 0, 0, $newWidth, $newHeight, $orgWidth, $orgHeight);
        imagepng($newImage, $filePath);
    }

    protected function getFilePath(BlockInterface $block)
    {
        $filename = $this->getFilename($block);
        if (!$filename) {
            return null;
        }

        return $this->uploadDirectory.'/'. $filename;
    }

    protected function getPublicPath(BlockInterface $block)
    {
        $filename = $this->getFilename($block);
        if (!$filename) {
            return null;
        }

        return $this->request->getSchemeAndHttpHost().'/'.$this->request->getBasePath().'/'.$this->publicPath.'/'. $filename;
    }

    protected function getFilename(BlockInterface $block)
    {
        return $block->getProviderOption(self::PROVIDER_OPTION_FILENAME);
    }

    protected function setFilename(BlockInterface $block, $filename)
    {
        return $block->setProviderOption(self::PROVIDER_OPTION_FILENAME, $filename);
    }
}
