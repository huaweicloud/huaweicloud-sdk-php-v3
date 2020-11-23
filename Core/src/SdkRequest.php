<?php

namespace HuaweiCloud\SDK\Core;

class SdkRequest
{
    public $method = '';
    public $scheme = '';
    public $host = '';
    public $resourcePath = ''; // 资源地址，不会带查询参数
    public $uri = '';  // 资源地址加查询参数，统一资源标识符
    public $url = ''; // 统一资源定位符
    public $queryParams = array();
    public $headerParams= array();
    public $body = '';
    public $stream = ''; //格式是否为字节流

    public function __construct($method=null,
                                $scheme=null,
                                $host=null,
                                $resourcePath=null,
                                $uri=null,
                                $url=null,
                                $queryParams=array(),
                                $headerParams=array(),
                                $body=null,
                                $stream=null)
    {
        $this->method = $method;
        $this->scheme = $scheme;
        $this->host = $host;
        $this->resourcePath = $resourcePath;
        $this->uri = $uri;
        $this->url = $url;
        $this->queryParams = $queryParams;
        $this->headerParams = $headerParams;
        $this->body = $body;
        $this->stream = $stream;
    }
}