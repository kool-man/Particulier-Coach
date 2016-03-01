<?php

namespace Application\Sonata\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactEstimationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $profession = array('Vendeur'=>'Vendeur','Acheteur'=>'Acheteur');
        $builder
            ->add('nom','text',array('required'    => true))
            ->add('prenom','text',array('required'    => true))
            ->add('email')
            ->add('telephone','text',array('required'    => true))
            ->add('profession', 'choice', array(
                'choices'   => $profession,
                'expanded'  => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\Sonata\UserBundle\Entity\ContactPerson'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_sonata_userbundle_contactestimation';
    }
}
