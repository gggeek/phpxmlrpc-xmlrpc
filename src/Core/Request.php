<?php

namespace PhpXmlRpcNG\Core;

use PhpHttpRpc\Core\Request as BaseRequest;

class Request extends BaseRequest
{
    public function __construct($methodName, array $params = array())
    {
        // strip out param names, since xmlrpc only uses positional params
        parent::__construct($methodName, array_keys($params));
    }

    protected function getContentType()
    {
        return 'application/json';
    }

    public function getHTTPBody()
    {
        /// @todo
    }

    /**
     * Builds and returns an appropriate Response object from the http data.
     *
     * @param Request $request
     * @param string $body
     * @param array $headers
     * @param array $options Allowed keys: 'debug', 'returnType', 'useExceptions'
     * @return Response
     */
    public function parseHTTPResponse($request, $body, array $headers = array(), array $options = array())
    {
        /// @todo
    }
}
