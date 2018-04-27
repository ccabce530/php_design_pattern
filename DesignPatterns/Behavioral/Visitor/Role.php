<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/27
 * Time: 下午10:53
 */
namespace DesignPatterns\Behavioral\Visitor;

abstract class Role
{
    public function accept( RoleVisitorInterface $visitor )
    {
        $kclass = get_called_class();
        preg_match( '#([^\\\\]+)$#', $kclass, $extract );

        $visitingMethod = 'visit' . $extract[1];
        if ( !method_exists( __NAMESPACE__ . '\RoleVisitorInterface', $visitingMethod ) ) {
            throw new \InvalidArgumentException( "The visitor you provide cannot visit a $kclass instance" );
        }

        call_user_func( array( $visitor, $visitingMethod ), $this );
    }
}