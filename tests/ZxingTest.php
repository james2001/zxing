<?php
/**
 * Created by PhpStorm.
 * User: Stephane
 * Date: 11/12/2014
 * Time: 20:39
 */

namespace James2001\Test;


use James2001\Zxing;

class ZxingTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Zxing
     */
    private $zxing;

    public function __construct()
    {
        $this->zxing = new Zxing('test;');
    }

    public function testConstruct()
    {
        $zxing = new Zxing('test;');
        $this->assertInstanceOf('James2001\Zxing', $zxing);
    }

    public function testFindCode()
    {
        $imagePath = dirname(__FILE__) .DIRECTORY_SEPARATOR.'test.jpg';
        $this->assertEquals('my_info',$this->zxing->findFirst($imagePath));
        $this->zxing->setKey('test');
        $this->assertEquals(';my_info',$this->zxing->findFirst($imagePath));
    }
}

