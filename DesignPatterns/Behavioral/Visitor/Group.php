<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/27
 * Time: 下午11:03
 */
namespace DesignPatterns\Behavioral\Visitor;

class Group extends Role
{
    protected $name;

    public function __construct( $name )
    {
        $this->name = $name;
    }

    public function getName()
    {
        return "Group: " . $this->name;
    }
}