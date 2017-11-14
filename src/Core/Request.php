<?php

namespace PhpXmlRpcNG\Core;

use PhpHttpRpc\Core\Request as BaseRequest;

class Request extends BaseRequest
{
    protected $contentType = 'text/xml';

    public function __construct($methodName, array $params = array())
    {
        // strip out param names, since xmlrpc only uses positional params
        parent::__construct($methodName, array_keys($params));
    }

    public function getHTTPBody()
    {
        /// @todo
    }
}
