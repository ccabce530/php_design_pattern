<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午10:28
 */
namespace DesignPatterns\Creational\Singleton;


class Singleton
{
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if ( !self::$instance ) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    private function __clone()
    {

    }


    private function __wakeup()
    {

    }
}