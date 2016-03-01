<?php

namespace Ibrows\Bundle\NewsletterBundle\Annotation\Wizard;

class AnnotationBag
{

    protected $annotation;
    protected $annotations;

    public function __construct(Annotation $annotation, array $annotations)
    {
        $this->annotation = $annotation;
        $this->annotations = $annotations;
    }

    /**
     * @return Annotation
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * @return array
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

}
