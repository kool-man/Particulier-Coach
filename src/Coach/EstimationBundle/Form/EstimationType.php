<?php

namespace Coach\EstimationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Application\Sonata\UserBundle\Form\ContactEstimationType;
class EstimationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $pieces = array('nothing'=>'Pièces','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus');
        $chambres = array('nothing'=>'Chambres','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus');
        $types = array(''=>'Type de bien','1'=>'Maison','2'=>'Appartement');
        $etat_bien = array(''=>'Etat du bien','1'=>'Sans travaux','2'=>'Avec Travaux');
        $annee_construction = array(''=>'Année de construction','1'=>'Avant 1850','2'=>'De 1850 à 1913',
            '3'=>'De 1914 à 1947','4'=>'De 1948 à 1969','5'=>'De 1970 à 1980','6'=>'De 1981 à 1991',
            '7'=>'De 1992 à 2004','8'=>"De 2005 à aujourd'hui",'9'=>'Neuf(première vente)');
        //$proximite = array('1'=>'Bus','2'=>'Métro','3'=>'Tramway','4'=>'Train','5'=>'RER');       
        $builder
            ->add('typeAnnonce','choice',array(
                  'choices'  => $types,
                  'expanded' => false,
                ))
            ->add('etatBien','choice',array(
                  'choices'  => $etat_bien,
                  'expanded' => false,
                ))
            ->add('surface','text',array('required'    => true))    
            ->add('anneeConstruction','choice',array(
                  'choices'  => $annee_construction,
                  'expanded' => false,
                ))    
            ->add('proximite', 'entity', array(
            'class' => 'CoachAnnonceBundle:Proximite',
            'property' => 'name',
            'expanded' => false,
            'multiple' => true,
            'required' => false,
            'attr' => array('class'=>'form-control'),
            ))  
	    ->add('loisirAnnonce', 'entity', array(
            'class' => 'CoachEstimationBundle:loisirAnnonce',
            'property' => 'name',
            'expanded' => false,
            'multiple' => true,
            'required' => false,
            'attr' => array('class'=>'form-control'),
            ))
					
            ->add('nbPieces','choice',array(
                   'label'=>'Pièces :',
                  'choices'  => $pieces,
                  'expanded' => false,
                  'required'    => true
                ))
            ->add('nbChambre','choice',array(
                   'label'=>'Chambres :',
                  'choices'  => $chambres,
                  'expanded' => false,
                  'required'    => true
                ))    
            ->add('adresse','text',array('required'    => true))
            ->add('ville',null,array('required'    => true))
            ->add('cp',null,array('required'    => true))    
            ->add('client', new ContactEstimationType())  
            
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Coach\EstimationBundle\Entity\estimation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coach_estimationbundle_estimation';
    }
}
