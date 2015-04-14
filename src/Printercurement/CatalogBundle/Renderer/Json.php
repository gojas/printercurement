<?php

namespace Printercurement\CatalogBundle\Renderer;

use Symfony\Component\HttpFoundation\JsonResponse;

class Json extends AbstractRenderer
{
    /**
     * @var array
     */
    protected $response = array();

    public function assign($key, $value)
    {
        $this->content[$key] = $value;

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
                    $this->response[$subKey] = $this->getSerializer()->serialize($subValue, 'json');
                }
            }else{
                $this->response[$key] = $this->getSerializer()->serialize($value, 'json');
            }
        }

        return $this->response;
    }
}
