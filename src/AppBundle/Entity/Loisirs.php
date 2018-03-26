<?php
namespace AppBundle\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="loisirs")
 * @ApiResource
 */
class Loisirs {
    
    
    
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
      **/
    private $id;
    
    /**
    * @ORM\Column(type="string")
    **/
    private $name;
    function getId()
    {
        return $this->id;
    }
    function getName()
    {
        return $this->name;
    }
   
    function setId($id)
    {
        $this->id = $id;
    }
    function setName($name)
    {
        $this->name = $name;
    }
   
}