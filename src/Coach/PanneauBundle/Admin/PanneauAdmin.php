<?php

namespace Coach\PanneauBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PanneauAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titre')
            ->add('format')
            ->add('oreillets')
            ->add('quantite')
            ->add('prix')
            ->add('ligne1')
            ->add('ligne2')
            ->add('description')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titre')
            ->add('format')
            ->add('oreillets')
            ->add('quantite')
            ->add('prix')
            ->add('ligne1')
            ->add('ligne2')
            ->add('description')
            
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
        $oreillets = array("60 x 40 cm ou 80 x 60 cm"=>"60 x 40 cm ou 80 x 60 cm","120 x 40 cm ou 160 x 60 cm"=>"120 x 40 cm ou 160 x 60 cm");
        $formMapper
            ->add('format')
            ->add('oreillets','choice',array(
                   'label'=>'Oreillets',
                  'choices'  => $oreillets,
                  'expanded' => false))    
            ->add('quantite')
            ->add('prix')
            ->add('ligne1')
            ->add('ligne2')
            ->add('description')
            ->add('titre')
            ->add('image')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('format')
            ->add('oreillets')
            ->add('quantite')
            ->add('prix')
            ->add('ligne1')
            ->add('ligne2')
            ->add('description')
            ->add('titre')
            ->add('image')
        ;
    }
}
