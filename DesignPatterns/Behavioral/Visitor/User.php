<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/27
 * Time: 下午11:00
 */
namespace DesignPatterns\Behavioral\Visitor;

class User
{
    /**
     * @var string
     */
    protected $name;

    /**
     * User constructor.
     * @param string $name
     */
    public function __construct( $name )
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "User: " . $this->name;
    }
}