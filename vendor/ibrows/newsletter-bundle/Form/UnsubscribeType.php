<?php

namespace Ibrows\Bundle\NewsletterBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;

class UnsubscribeType extends AbstractType
{
    protected $managerName;
    protected $groupClass;

    public function __construct($managerName, $groupClass)
    {
        $this->managerName = $managerName;
        $this->groupClass = $groupClass;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('groups', 'entity', array(
                'em' => $this->managerName,
                'class' => $this->groupClass,
                'expanded' => true,
                'multiple' => true,
            ))
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ibrows_newsletterbundle_unsubscribe';
    }

}
