<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache LICENSE, Version 2.0 (the
 * "LICENSE"); you may not use this file except in compliance
 * with the LICENSE.  You may obtain a copy of the LICENSE at.
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

namespace HuaweiCloud\SDK\Core\Http;

class HttpHandler
{
    private $requestHandlers = [];
    private $responseHandlers = [];

    /**
     * HttpHandler constructor.
     *
     * @param array $requestHandlers
     * @param array $responseHandlers
     */
    public function __construct(array $requestHandlers = null,
                                array $responseHandlers = null
    ) {
        $this->requestHandlers = isset($requestHandlers) ? $requestHandlers :
            [function () {}];
        $this->responseHandlers = isset($responseHandlers) ?
            $responseHandlers : [function () {}];
    }

    public function addRequestHandlers($requestHandler)
    {
        $this->requestHandlers[] = $requestHandler;
    }

    public function addResponseHandlers($responseHandler)
    {
        $this->responseHandlers[] = $responseHandler;
    }

    public function processRequest($argsMap)
    {
        foreach ($this->requestHandlers as $handler) {
            $handler($argsMap);
        }
    }

    public function processResponse($argsMap)
    {
        foreach ($this->responseHandlers as $handler) {
            $handler($argsMap);
        }
    }
}
