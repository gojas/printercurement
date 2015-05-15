<?php

namespace Printercurement\CoreBundle\Entity;

abstract class AbstractEntity implements \JsonSerializable
{
    public function jsonSerialize()
    {
        $properties = get_object_vars($this);

        $toSerialize = array();

        foreach($properties as $key => $val){
            $toSerialize[$key] = $val;
        }

        return $toSerialize;
    }
}
