<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision()
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }
 
    public function testEsPar()
    {
        $result = $this->calculator->espar(2);
        $this->assertEquals(0, $result);
    }
 
    public function testNoEsPar()
    {
        $result = $this->calculator->espar(3);
        $this->assertNotEquals(0, $result);
    }
 
}
