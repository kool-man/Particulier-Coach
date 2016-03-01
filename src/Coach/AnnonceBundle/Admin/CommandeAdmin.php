<?php

namespace Coach\AnnonceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CommandeAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('reference')
            ->add('typePaiement')
            ->add('montant')
            ->add('nbProducts')
            ->add('prixProducts')
            ->add('accepte')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('reference')
            ->add('typePaiement')
            ->add('montant')
            ->add('nbProducts')
            ->add('prixProducts')
            ->add('accepte')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array()
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('reference')
            ->add('typePaiement')
            ->add('montant')
            ->add('nbProducts')
            ->add('prixProducts')
            ->add('accepte')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('reference')
            ->add('typePaiement')
            ->add('montant')
            ->add('nbProducts')
            ->add('prixProducts')
            ->add('accepte')
        ;
    }
}
