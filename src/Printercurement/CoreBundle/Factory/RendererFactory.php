<?php

namespace Printercurement\CoreBundle\Factory;

class RendererFactory
{
    public static function build($type)
    {
        $rendererType = ucwords($type);

        $className = "\Printercurement\CoreBundle\Renderer\\$rendererType";

        if(class_exists($className)){
            return new $className();
        }else{
            throw new Exception("Invalid renderer type given.");
        }
    }
}
