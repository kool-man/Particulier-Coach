<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Coach\AnnonceBundle\CoachAnnonceBundle(),
            new Coach\FrontBundle\CoachFrontBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
            new Coach\NewsletterBundle\CoachNewsletterBundle(),
            //new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            //new Ibrows\Bundle\NewsletterBundle\IbrowsNewsletterBundle(),
            //new Hype\MailchimpBundle\HypeMailchimpBundle(),
            // Application Bundles
            //new Application\Sonata\PageBundle\ApplicationSonataPageBundle(),
            new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            new Application\Sonata\NotificationBundle\ApplicationSonataNotificationBundle(),
            // Vendor specifics bundles
            //new Sonata\PageBundle\SonataPageBundle(),
            new Sonata\CacheBundle\SonataCacheBundle(),
            new Sonata\SeoBundle\SonataSeoBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
            new Sonata\NotificationBundle\SonataNotificationBundle(),
            //new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
            //new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            //new Sonata\FormatterBundle\SonataFormatterBundle(),
            new Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle,
	    new Coach\PackBundle\CoachPackBundle(),
            new Coach\PageBundle\CoachPageBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Coach\PanneauBundle\CoachPanneauBundle(),
            new Coach\CoachingBundle\CoachCoachingBundle(),
            new Coach\EstimationBundle\CoachEstimationBundle(),
            new Coach\ReservationBundle\CoachReservationBundle(),
            new Gregwar\CaptchaBundle\GregwarCaptchaBundle(),
	    new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            new Coach\ConseilsBundle\CoachConseilsBundle(),
            );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new CoreSphere\ConsoleBundle\CoreSphereConsoleBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
