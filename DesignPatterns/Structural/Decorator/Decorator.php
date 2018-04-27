<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午11:17
 */
namespace DesignPatterns\Structural\Decorator;


abstract class Decorator implements RendererInterface
{
    protected $wrapped;

    /**
     * Decorator constructor.
     *
     * @param RendererInterface $wrappable
     */
    public function __construct( RendererInterface $wrappable )
    {
        $this->wrapped = $wrappable;
    }
}