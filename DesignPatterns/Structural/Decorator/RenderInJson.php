<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午11:27
 */
namespace DesignPatterns\Structural\Decorator;


class RenderInJson extends Decorator
{
    public function renderData()
    {
        // TODO: Implement renderData() method.
        $output = $this->wrapped->renderData();

        return json_encode( $output );
    }
}