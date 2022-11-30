<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache LICENSE, Version 2.0 (the
 * "LICENSE"); you may not use this file except in compliance
 * with the LICENSE.  You may obtain a copy of the LICENSE at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the LICENSE is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the LICENSE for the
 * specific language governing permissions and limitations
 * under the LICENSE.
 */

namespace HuaweiCloud\SDK\Core;

class SdkRequest
{
    public $method = '';
    public $scheme = '';
    public $host = '';
    public $resourcePath = '';
    public $uri = '';
    public $url = '';
    public $queryParams = [];
    public $headerParams = [];
    public $body = '';
    public $stream = '';

    public function __construct($method = null,
                                $scheme = null,
                                $host = null,
                                $resourcePath = null,
                                $uri = null,
                                $url = null,
                                $queryParams = [],
                                $headerParams = [],
                                $body = null,
                                $stream = null)
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
