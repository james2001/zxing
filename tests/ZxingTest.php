<?php
/**
 * Created by PhpStorm.
 * User: Stephane
 * Date: 11/12/2014
 * Time: 20:39.
 */
namespace James2001\Test;

use James2001\Zxing;

class ZxingTest extends \PHPUnit_Framework_TestCase
{
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
        $zxing = new Zxing();
        $this->assertInstanceOf('James2001\Zxing', $zxing);
    }

    public function testFindFirstCode()
    {
        $imagePath = dirname(__FILE__).DIRECTORY_SEPARATOR.'test.jpg';

        $this->zxing->setKey('test;');
        $this->assertEquals('my_first_info', $this->zxing->findFirst($imagePath));
        $this->zxing->setKey('test');
        $this->assertEquals(';my_first_info', $this->zxing->findFirst($imagePath));
        $this->zxing->setKey('');
        $this->assertEquals('test;my_first_info', $this->zxing->findFirst($imagePath));
    }

    public function testFindMultiCode()
    {
        $imagePath = dirname(__FILE__).DIRECTORY_SEPARATOR.'test.jpg';

        $qrValues = [
            'my_first_info',
            'my_second_info',
            'my_third_info',
        ];
        $this->zxing->setKey('test;');
        $this->assertEquals($qrValues, $this->zxing->findMulti($imagePath));

        $qrValues = [
            ';my_first_info',
            ';my_second_info',
            ';my_third_info',
        ];
        $this->zxing->setKey('test');
        $this->assertEquals($qrValues, $this->zxing->findMulti($imagePath));

        $qrValues = [
            'test;my_first_info',
            'test;my_second_info',
            'test;my_third_info',
        ];
        $this->zxing->setKey('');
        $this->assertEquals($qrValues, $this->zxing->findMulti($imagePath));
    }
}
