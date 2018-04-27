<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/27
 * Time: 下午11:05
 */
namespace DesignPatterns\Behavioral\Visitor\Tests;

use DesignPatterns\Behavioral\Visitor;

class VisitorTest extends \PHPUnit_Framework_TestCase
{
    protected $visitor;

    protected function setUp()
    {
        $this->visitor = new Visitor\RolePrintVisitor();
    }

    public function getRole()
    {
        return array(
            array( new Visitor\User( "Dominik" ), 'Role: User Dominik' ),
            array( new Visitor\Group( "Administrators", "Role: Group Administrators" ) ),
        );
    }

    /**
     * @dataProvider getRole
     */
    public function testVisitorSomeRole( Visitor\Role $role, $expect )
    {
        $this->expectOutputString( $expect );
        $role->accept($this->visitor);
    }
}