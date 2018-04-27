<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午10:32
 */
namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf( 'DesignPatterns\Creational\Singleton\Singleton', $firstCall );

        $secondCall = Singleton::getInstance();
        $this->assertSame( $firstCall, $secondCall );
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();

        $relf = new \ReflectionObject( $obj );

        $method = $relf->getMethod( '__construct' );
        $this->assertTrue( $method->isPrivate() );
    }
}