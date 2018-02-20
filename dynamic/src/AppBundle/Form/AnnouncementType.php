<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnouncementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('label')
            ->add('pricePerHourPerUser')
            ->add('description')
            ->add('enabled')
            ->add('addressOut')
            ->add('elevatorOut')
            ->add('volumeOut')
            ->add('volumeScaleOut')
            ->add('parkingOut')
            ->add('addressIn')
            ->add('elevatorIn')
            ->add('volumeIn')
            ->add('volumeScaleIn')
            ->add('parkingIn')
            ->add('dealDays')
            ->add('user');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Announcement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_announcement';
    }


}
