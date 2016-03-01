<?php

namespace Ibrows\Bundle\NewsletterBundle\Annotation\Wizard;

/**
 * @Annotation
 */
class Annotation
{
    public $name;
    public $number;
    public $validationMethod;
    public $isValid;

    protected $annotationBag;
    protected $isCurrentMethod = false;

    public function setIsCurrentMethod($flag = true)
    {
        $this->isCurrentMethod = (bool) $flag;
    }

    public function isCurrentMethod()
    {
        return $this->isCurrentMethod;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getValidationMethod()
    {
        return $this->validationMethod;
    }

    public function isValid()
    {
        return $this->isValid;
    }

    public function setIsValid($flag = true)
    {
        $this->isValid = (bool) $flag;
    }

    public function setAnnotationBag(AnnotationBag $annotationBag)
    {
        $this->annotationBag = $annotationBag;
    }

    public function getAnnotationBag()
    {
        return $this->annotationBag;
    }
}
