<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 下午3:52
 */
namespace DesignPatterns\Middleware;

use Closure;

class FirstStep implements Step
{
    public static function go( Closure $next )
    {
        // TODO: Implement go() method.
        echo '开启session,获取数据' . '<br/>';
        $next();
        echo '保存数据,关闭session' . '<br/>';
    }
}