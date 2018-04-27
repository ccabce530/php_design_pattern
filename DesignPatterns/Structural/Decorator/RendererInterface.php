<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午11:12
 */
namespace DesignPatterns\Structural\Decorator;


interface RendererInterface
{
    /**
     * render data
     *
     * @return mixed
     */
    public function renderData();
}