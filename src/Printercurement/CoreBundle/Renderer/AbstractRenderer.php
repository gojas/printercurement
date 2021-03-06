<?php

namespace Printercurement\CoreBundle\Renderer;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

abstract class AbstractRenderer implements RendererInterface
{
    /**
     * Return serializer used for entity serialization
     *
     * @return Serializer
     */
    public function getSerializer()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());

        return new Serializer($normalizers, $encoders);
    }
}
