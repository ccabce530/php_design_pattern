<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/27
 * Time: 下午9:08
 */
namespace DesignPatterns\Behavioral\Visitor;

interface RoleVisitorInterface
{
    /**
     * 访问 User 对象
     * @param \DesignPatterns\Behavioral\Visitor\User $role
     */
    public function visitUser( User $role );

    /**
     * 访问 Group 对象
     * @param \DesignPatterns\Behavioral\Visitor\Group $role
     */
    public function visitGroup( Group $role );
}