<?php

namespace Printercurement\CoreBundle\Security\Firewall;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Firewall\ExceptionListener as BaseExceptionListener;

class ExceptionListener extends BaseExceptionListener
{
    protected function setTargetPath(Request $request)
    {
        // Do not save target path for XHR requests
        // You can add any more logic here you want
        // Note that non-GET requests are already ignored
        if ($request->isXmlHttpRequest()) {
            return;
        }

        //why this... well, our application will be based on angularJS which uses # for routing
        $httpRequest = $request->server->get('REQUEST_URI');
        $request->server->set('REQUEST_URI','/#'.$httpRequest);

        $request->initialize($request->query->all(), $request->request->all(), $request->attributes->all(), $request->cookies->all(), $request->files->all(), $request->server->all(), $request->getContent());

        parent::setTargetPath($request);
    }
}