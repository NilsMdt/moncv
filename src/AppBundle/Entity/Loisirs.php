<?php
namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="loisirs")
 * @ApiResource
 */
class Loisirs
{
    
    
    
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
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
   
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}
