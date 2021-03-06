<?php

namespace Printercurement\CoreBundle\Renderer;

use Symfony\Component\HttpFoundation\JsonResponse;

class Xml extends AbstractRenderer implements RendererInterface
{
    /**
     * @var array
     */
    protected $response = array();

    public function assign($key, $value)
    {
        $this->response[$key] = $value;

        return $this;
    }

    public function render()
    {
        return new JsonResponse($this->serializeResponse());
    }

    public function serializeResponse()
    {
        foreach($this->response as $key => $value){
            if(is_array($value)){
                foreach($value as $subKey => $subValue){
                    $this->response[$key][$subKey] = $this->getSerializer()->serialize($subValue, 'xml');
                }
            }else{
                $this->response[$key] = $this->getSerializer()->serialize($value, 'xml');
            }
        }

        return $this->response;
    }
}
