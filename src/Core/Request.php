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
        if ($this->charset == '') {
            return 'text/xml';
        } else {
            return 'text/xml; charset=' . strtolower($this->charset);
        }
    }

    public function getHTTPBody()
    {
        if ($this->charset == '') {
            $body = '<?xml version="1.0" encoding="' . strtolower($this->charset) . " ?" . ">\n";
        } else {
            $body = '<?xml version="1.0" ?' . ">\n";
        }
        $body .= "<methodCall>\n<methodName>\n";

        /// @todo finish...

        $body .= $this->charsetConverter->encodeEntities($this->methodName, '...', $this->charset);

        $body .= "</methodName>\n<params>\n";

        foreach($this->params as $param) {
            $body .= "<param>" . '...' . "</param>\n";
        }

        $body .= "</params>\n</methodCall>";

        return $body;
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
