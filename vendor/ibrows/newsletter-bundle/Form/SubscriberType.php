<?php
namespace Ibrows\Bundle\NewsletterBundle\Form;

use Doctrine\ORM\EntityRepository;
use Ibrows\Bundle\NewsletterBundle\Model\Mandant\MandantInterface;
use Symfony\Component\Form\FormBuilderInterface;

class SubscriberType extends AbstractType
{
    protected $managerName;
    protected $subscriberClass;
    protected $mandant;

    public function __construct($managerName, $subscriberClass, MandantInterface $mandant)
    {
        $this->managerName = $managerName;
        $this->subscriberClass = $subscriberClass;
        $this->mandant = $mandant;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $mandant = $this->mandant;

        $builder
            ->add('subscribers', 'entity', array(
                'em' => $this->managerName,
                'query_builder' => function (EntityRepository $repo) use ($mandant) {
                    $qb = $repo->createQueryBuilder('s');
                    $qb->where('s.mandant = :mandant');
                    $qb->setParameter('mandant', $mandant);
                    $qb->orderBy('s.email');

                    return $qb;
                },
                'class' => $this->subscriberClass,
                'multiple' => true,
                'expanded' => false,
            ))
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ibrows_newsletterbundle_subscriber';
    }

}
