<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Formations;

class DefaultController extends Controller
{
    /**
     * @Route("/cv/{name}/{firstname}", name="homepage")
     * @Template()
     */
     
    public function indexAction ($name="Marandet",$firstname="Nils")
    {
    
       $forms=$this->getDoctrine()->getRepository("AppBundle:Formations")->findAll();
       $loisirs=$this->getDoctrine()->getRepository("AppBundle:Loisirs")->findAll();
       
   return array(
       'name' => $name, 
       'firstname' => $firstname,
       'Formations' => $forms,
       'Loisirs' => $loisirs,
       );
   
   
    
    }
     /**
     * @Route("/insert", name="insert")
     * @Template()
     */
    public function insertAction()
    {

$form = new Formations();
$form -> setName('Ma formation');
$form -> setLieu('Mon lieu');
$form -> setDateDebut(new \DateTime());
$form -> setDateFin(new \DateTime());
$eManager = $this ->getDoctrine()->getManager();
$eManager ->persist($form);
$eManager ->flush();
        return array();
        
    }
     /**
     * @Route("/admin)")
     */
     public function adminAction()
     {
        return new Response('<html><body>Admin page!</body></html>');
     }
}
   
 
   
    


