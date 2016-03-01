<?php

namespace Coach\PageBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BlockLienMiddleAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
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
            ->add('description')
            ->add('url')
            ->add('type')
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
        $types = array("fa-line-chart"=>"fa-line-chart","fa-group"=>"fa-group","fa-cogs"=>"fa-cogs","fa-comments"=>"fa-comments","fa-bar-chart"=>"fa-bar-chart","fa-university"=>"fa-university","fa-area-chart"=>"fa-area-chart");
        $formMapper
            ->add('titre')
            ->add('description')
            ->add('url')
            ->add('type','choice',array(
                   'label'=>'Type de menu',
                  'choices'  => $types,
                  'expanded' => false))   
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
            ->add('page')    
            ->add('description')  
            ->add('url')    
        ;
    }
}
