<?php

namespace Coach\PanneauBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PanneauType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('telephone')    
            ->add('taille', 'choice', array(
                    'choices'   => array(
                        ''   => 'Taille',
                        'size-1'   => '60*40',
                        'size-2' => '80*60'
                    ),
                    'multiple'  => false,
                    ))
            ->add('oreillets', 'choice', array(
                    'choices'   => array(
                        ''   => 'Oreillets',
                        'sans' => 'Sans Oreillets',
                        'avec'   => 'Avec Oreillets',
                    ),
                    'multiple'  => false,
                    ))
            ->add('quantite')  
            ->add('email')    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coach\PanneauBundle\Entity\Panneau'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coach_panneaubundle_panneau';
    }
}
