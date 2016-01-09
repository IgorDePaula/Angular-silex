<?php

namespace ProjetoTest;

require __DIR__."/../../vendor/autoload.php";
use PJenkins\Math\Calc;

class CalcTest extends \PHPUnit_Framework_TestCase
{
private $Calc;
  protected function setUp()
    {
        parent::setUp();        
        $this->Calc = new Calc();
    }
 protected function tearDown()
    {
        $this->Calc = null;        
        parent::tearDown();
    }
 /**
     * @covers PJenkins\Math\Calc::sum
     */
    public function testSum(){
       
       $this->assertEquals(5, $this->Calc->sum(2, 3));
    }
}
