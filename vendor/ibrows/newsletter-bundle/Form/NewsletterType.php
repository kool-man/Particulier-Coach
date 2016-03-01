<?php

namespace Ibrows\Bundle\NewsletterBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

class NewsletterType extends AbstractType
{
    protected $managerName;
    protected $designClass;

    public function __construct($managerName, $designClass)
    {
        $this->managerName = $managerName;
        $this->designClass = $designClass;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject')
            ->add('name')
            ->add('senderMail', 'email')
            ->add('senderName')
            ->add('returnMail', 'email')
            ->add('design', 'entity', array(
                'em' => $this->managerName,
                'class' => $this->designClass,
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'validation_groups' => array('newsletter'),
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ibrows_newsletterbundle_newsletter';
    }

}
