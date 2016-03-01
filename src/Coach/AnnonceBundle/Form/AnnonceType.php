<?php

namespace Coach\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
//use Application\Sonata\UserBundle\Form\ContactEstimationType;
use Coach\AnnonceBundle\Form\ContactUserType;
class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $pieces = array(''=>'Pièces','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus');
        $chambres = array(''=>'Chambres','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus');
        $types = array(''=>'Type de bien','1'=>'Maison','2'=>'Appartement','3'=>'Bureau','4'=>'Commerce');
        //$etat_bien = array(''=>'Etat du bien','1'=>'Sans travaux','2'=>'Avec Travaux'); 
        $class_energie = array(''=>'Classe énergie','1'=>'A (moins de 50)','2'=>'B (de 51 à 90)','3'=>'C (de 91 à 150)','4'=>'D (de 151 à 230)','5'=>'E (de 231 à 330)','6'=>'F (de 331 à 450)','7'=>'G (451 et plus)');
        $option_energie = array(''=>'GES','1'=>'A (moins de 5)','2'=>'B (de 6 à 10)','3'=>'C (de 11 à 20)','4'=>'D (de 21 à 35)','5'=>'E (de 36 à 55)','6'=>'F (de 56 à 80)','7'=>'G (plus de 80)');
        $builder
            ->add('description','textarea')
            ->add('titre')
            ->add('pack','hidden')
            //->add('email')
            ->add('cp')
            ->add('adresse','text')
	    ->add('tel1') 
	    ->add('prix','number')
	    ->add('proximite', 'entity', array(
            'class' => 'CoachAnnonceBundle:Proximite',
            'property' => 'name',
            'expanded' => false,
            'multiple' => true,
			'required' => false,
            ))
	    ->add('loisirAnnonce', 'entity', array(
            'class' => 'CoachEstimationBundle:loisirAnnonce',
            'property' => 'name',
            'expanded' => false,
            'multiple' => true,
			'required' => false,
            ))
	    ->add('ville',null,array('required'    => true))
            			
           /*  ->add('civilite','choice',array(
                   'label'=>'Vous êtes :',
                  'choices'  => $civilite,
                  'expanded' => false,
                )) */
            			
            ->add('nbPieces','choice',array(
                   'label'=>'Piéces :',
                  'choices'  => $pieces,
                  'expanded' => false,
                ))
            ->add('nbChambre','choice',array(
                   'label'=>'Chambres :',
                  'choices'  => $chambres,
                  'expanded' => false,
                ))    
           /* ->add('etatBien','choice',array(
                  'choices'  => $etat_bien,
                  'expanded' => false,
                ))*/
            ->add('surface','text',array('required'    => true))    
            ->add('optionAnnonce', 'choice', array('required'    => true,
                         'choices' => $option_energie,
                         'expanded' => false,
            ))
            ->add('classAnnonce', 'choice', array('required'    => true,
			 'label' => 'Class :',
                         'choices' => $class_energie,
                         'expanded' => false,
            ))
            ->add('typeAnnonce','choice',array('required'    => true,
                   'label'=>'Types :',
                  'choices'  => $types,
                  'expanded' => false,
                ))
           /* ->add('mesImages', 'collection', array(
                'type'         => new MesImagesType(),
                'allow_add'    => true,
                'by_reference' => false,
                'allow_delete' => true,
                'prototype' => true
            )) */
            ->add('annonceur', new ContactUserType())
//          ->add('file')   
//          ->add('Publier','submit')   
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coach\AnnonceBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coach_annoncebundle_annonce';
    }
}
