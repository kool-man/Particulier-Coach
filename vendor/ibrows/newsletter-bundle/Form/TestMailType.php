<?php

namespace Ibrows\Bundle\NewsletterBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;

class TestMailType extends AbstractType
{
    protected $subscribers;
    protected $defaultMail;

    public function __construct(array $subscribers, $defaultMail = null)
    {
        $this->subscribers = $subscribers;
        $this->defaultMail = $defaultMail;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array('data' => $this->defaultMail))
            ->add('subscriber', 'choice', array(
                'choices' => $this->subscribers
            ))
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ibrows_newsletterbundle_testmail';
    }
}
