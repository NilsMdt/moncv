<?php
use AppBundle\Entity\Formations;

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
$entity= new Formations();
$entity->setLieu("Grenoble");
$this->assertEquals("grenoble", $entity->getLieu());

    }
}