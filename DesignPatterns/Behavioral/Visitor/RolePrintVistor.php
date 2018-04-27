<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/27
 * Time: 下午9:11
 */
namespace DesignPatterns\Behavioral\Visitor;

class RolePrintVisitor implements RoleVisitorInterface
{

    public function visitGroup( Group $role )
    {
        echo 'Role: ' . $role->getName();
    }

    public function visitUser( User $role )
    {
        echo "Role: " . $role->getName();
    }
}