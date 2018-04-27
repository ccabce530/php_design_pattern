<?php
/**
 * Created by PhpStorm.
 * User: flytzuhan
 * Date: 2018/4/6
 * Time: 上午11:20
 */
namespace DesignPatterns\Structural\Decorator;


class RenderInXml extends Decorator
{
    public function renderData()
    {
        // TODO: Implement renderData() method.
        $output = $this->wrapped->renderData();

        $doc = new \DOMDocument();

        foreach ( $output as $key => $value ) {
            $doc->appendChild( $doc->createElement( $key, $value ) );
        }

        return $doc->saveXML();
    }
}