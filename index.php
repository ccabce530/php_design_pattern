<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午11:00
 */

require_once __DIR__ . '/vendor/autoload.php';


function goFun( $step, $className )
{
    return function () use ( $step, $className ) {
        return $className::go( $step );
    };
}

function then()
{
    $steps = ['DesignPatterns\Middleware\FirstStep'];
    $prepare = function () { echo "请求向路由器传递,返回响应" . "<br/>"; };

    $go = array_reduce($steps, 'goFun', $prepare);
    $go();
}

then();