<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('required' => true));
        $builder->add('dateDebut', DateType::class, array('required' => true));
        $builder->add('dateFin', DateType::class, array('required' => true));
        $builder->add('lieu', TextType::class, array('required' => true));
        
        $builder->add('save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
        ));
    }
    
    public function getName()
    {
        return 'experience';
    }
    
    public function getDateDebut()
    {return 'experience';
    }
    
    public function getDateFin()
    {return 'experience';
    }
    
    public function getLieu()
    {return 'experience';
    }
}
