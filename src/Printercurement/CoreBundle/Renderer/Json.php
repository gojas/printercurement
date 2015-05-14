<?php

namespace Printercurement\CoreBundle\Renderer;

use Symfony\Component\HttpFoundation\JsonResponse;

class Json extends AbstractRenderer implements RendererInterface
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
                    $this->response[$key][$subKey] = $this->getSerializer()->normalize($subValue, 'json');
                }
            }else{
                $this->response[$key] = $this->getSerializer()->normalize($value, 'json');
            }
        }

        return $this->response;
    }
}
