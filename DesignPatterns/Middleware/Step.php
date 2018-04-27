<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 下午3:51
 */
namespace DesignPatterns\Middleware;

use Closure;

interface Step
{
    public static function go(Closure $next);
}