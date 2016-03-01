<?php

namespace Coach\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MesImagesType7 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {	/* ->add('name') */
        $builder
		 
        ->add('file','file',array('required'=>false))        
        /*  ->add('Publier','submit') */
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coach\AnnonceBundle\Entity\MesImages'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coach_annoncebundle_mesimages7';
    }
}
