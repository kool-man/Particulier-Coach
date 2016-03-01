<?php

namespace Coach\AnnonceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AnnonceAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('description')
            ->add('titre')
            ->add('surface')
            ->add('prix')
            ->add('nbPieces')
            ->add('nbChambre')    
            ->add('nbParking')
            ->add('optionAnnonce')
            ->add('classAnnonce')
            ->add('typeAnnonce')  
            ->add('enabled')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('description')
            ->add('titre')
            ->add('surface')
            ->add('prix')
            ->add('nbPieces')
            ->add('nbChambre')    
            ->add('nbParking')
            ->add('optionAnnonce')
            ->add('classAnnonce')
            ->add('typeAnnonce')       
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $pieces = array('nothing'=>'Pièces','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus');
        $chambres = array('nothing'=>'Chambres','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus');
        $parking = array('nothing'=>'Parking','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5 et plus');
        $civilite = array('nothing'=>'Vous êtes','1'=>'Vendeur','2'=>'Acheteur','3'=>'Vendeur & Acheteur','4'=>'Simple Visiteur');
        //$proximite = array('1'=>'Bus','2'=>'Métro','3'=>'Tramway','4'=>'Train','5'=>'RER');
         $formMapper
            ->add('description','textarea')
            ->add('titre')
            ->add('surface')
            ->add('nom')
            ->add('email')
            ->add('cp')
            ->add('ville')    
            ->add('prix','text')
            ->add('proximite', 'entity', array(
            'class' => 'CoachAnnonceBundle:Proximite',
            'property' => 'name',
            'expanded' => true,
            'multiple' => true
            ))
            ->add('civilite','choice',array(
                   'label'=>'Vous êtes :',
                  'choices'  => $civilite,
                  'expanded' => false,
                ))    
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
            ->add('nbParking','choice',array(
                   'label'=>'Parking :',
                  'choices'  => $parking,
                  'expanded' => false,
                ))
            ->add('optionAnnonce', 'entity', array(
            'class' => 'CoachAnnonceBundle:OptionAnnonce',
            'property' => 'description'
            ))
            ->add('classAnnonce', 'entity', array(
            'class' => 'CoachAnnonceBundle:ClassAnnonce',
            'property' => 'name'
            ))
            ->add('typeAnnonce', 'entity', array(
            'class' => 'CoachAnnonceBundle:TypeAnnonce',
            'property' => 'description'
            ))
            ->add('enabled')
            ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            
            ->add('description')
            ->add('titre')
            ->add('surface')
            ->add('prix')
            ->add('nbPieces')
            ->add('nbChambre')    
            ->add('nbParking')
            ->add('optionAnnonce')
            ->add('classAnnonce')
            ->add('typeAnnonce') 
            ->add('enabled')
        ;
    }
}
