<?php

namespace Coach\CoachingBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CoachingAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titre')         
            ->add('page')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titre')
            ->add('point1')
            ->add('point2')  
            ->add('point3')    
            ->add('page')
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
        $types = array("icon-1.jpg"=>"Icone Immeuble","icon-2.jpg"=>"Icone But",
            "icon-3.jpg"=>"Icone Statistique","icon-4.jpg"=>"Icone Revenu",
            "icon-5.jpg"=>"Icone Profile","icon-6.jpg"=>"Icone Calcul",
            "icon-7.jpg"=>"Icone Rendez-vous","icon-8.jpg"=>"Icone Multi-Plateforme",
            "icon-9.jpg"=>"Icone Smart","icon-10.jpg"=>"Icone PC");
        $formMapper
            ->add('titre')
            ->add('icone','choice',array(
                   'label'=>'Type de menu',
                  'choices'  => $types,
                  'expanded' => false))     
            ->add('point1')
            ->add('point2')
            ->add('point3')
            ->add('point4')
            ->add('point5')
            ->add('point6')
            ->add('point7')
            ->add('point8')    
            ->add('page')    
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('createdAt')
            ->add('updatedAt')
            ->add('titre')
            ->add('icone')
            ->add('point1')
            ->add('point2')
            ->add('point3')
            ->add('point4')
            ->add('point5')
            ->add('point6')
            ->add('point7')
            ->add('point8')
            ->add('page')
        ;
    }
}
