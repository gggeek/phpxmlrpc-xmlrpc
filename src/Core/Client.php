<?php

namespace PhpXmlRpcNG\Core;

use PhpHttpRpc\Core\Client as BaseClient;

class Client extends BaseClient
{
    protected function getRpcRequestClass()
    {
        return '\PhpXmlRpcNG\Core\Request';
    }
}
