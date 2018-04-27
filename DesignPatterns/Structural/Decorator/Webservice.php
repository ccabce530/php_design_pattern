<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午11:13
 */
namespace DesignPatterns\Structural\Decorator;


class Webservice implements RendererInterface
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * Webservice constructor.
     *
     * @param $data mixed
     */
    public function __construct( $data )
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function renderData()
    {
        // TODO: Implement renderData() method.
        return $this->data;
    }
}