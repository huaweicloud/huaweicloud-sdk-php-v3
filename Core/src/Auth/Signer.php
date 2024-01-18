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

namespace HuaweiCloud\SDK\Core\Auth;

define('BasicDateFormat', "Ymd\THis\Z");
define('Algorithm', 'SDK-HMAC-SHA256');
define('HeaderXDate', 'X-Sdk-Date');
define('HeaderHost', 'host');
define('HeaderAuthorization', 'Authorization');
define('HeaderContentSha256', 'X-Sdk-Content-Sha256');

class Signer
{
    private $Key = '';
    private $Secret = '';

    public function __construct($credentials = null)
    {
        $this->Key = isset($credentials) ? $credentials->getAk() : null;
        $this->Secret = isset($credentials) ?$credentials->getSk() : null;
    }

    /**
     * @param string $Key
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
    }

    /**
     * @param string $Secret
     */
    public function setSecret($Secret)
    {
        $this->Secret = $Secret;
    }

    private function findHeader($request, $header)
    {
        foreach ($request->headerParams as $key => $value) {
            if (!strcasecmp($key, $header)) {
                return $value;
            }
        }

        return null;
    }

    private function CanonicalRequest($request, $signedHeaders)
    {
        $CanonicalURI = $this->CanonicalURI($request);
        $CanonicalQueryString = $this->CanonicalQueryString($request);
        $canonicalHeaders = $this->CanonicalHeaders($request, $signedHeaders);
        $signedHeadersString = join(';', $signedHeaders);
        $hash = $this->findHeader($request, HeaderContentSha256);
        if (!$hash) {
            $hash = hash('sha256', $request->body);
        }

        return "$request->method\n$CanonicalURI\n$CanonicalQueryString\n$canonicalHeaders\n$signedHeadersString\n$hash";
    }

    // CanonicalURI returns request uri
    private function CanonicalURI($r)
    {
        $pattens = explode('/', $r->resourcePath);
        $uri = [];
        foreach ($pattens as $v) {
            array_push($uri, str_replace(['+', '%7E'], ['%20', '~'], urlencode(($v))));
        }
        $urlpath = join('/', $uri);
        if ('/' != substr($urlpath, -1)) {
            $urlpath = $urlpath.'/';
        }

        return $urlpath;
    }

    // CanonicalQueryString
    private function CanonicalQueryString($r)
    {
        $keys = [];
        foreach ($r->queryParams as $key => $value) {
            array_push($keys, $key);
        }
        sort($keys);
        $a = [];
        foreach ($keys as $key) {
            $k = str_replace(['+', '%7E'], ['%20', '~'], urlencode($key));
            $value = $r->queryParams[$key];
            if (is_array($value)) {
                sort($value);
                foreach ($value as $v) {
                    $kv = "$k=".str_replace(['+', '%7E'], ['%20',
                            '~', ], urlencode($v));
                    array_push($a, $kv);
                }
            } else {
                if (!is_string($value)) {
                    $value = json_encode($value);
                }
                $kv = "$k=" . str_replace(['+', '%7E'], ['%20',
                        '~',], urlencode($value));
                array_push($a, $kv);
            }
        }

        return join('&', $a);
    }

    // CanonicalHeaders
    private function CanonicalHeaders($r, $signedHeaders)
    {
        $headers = [];
        foreach ($r->headerParams as $key => $value) {
            $headers[strtolower($key)] = trim($value);
        }
        $a = [];
        foreach ($signedHeaders as $key) {
            array_push($a, $key.':'.$headers[$key]);
        }

        return join("\n", $a)."\n";
    }

    // SignedHeaders
    private function SignedHeaders($r)
    {
        $a = [];
        foreach ($r->headerParams as $key => $value) {
            array_push($a, strtolower($key));
        }
        sort($a);

        return $a;
    }

    // Create a "String to Sign".
    private function StringToSign($canonicalRequest, $t)
    {
        $date = date_format($t, BasicDateFormat);
        $hash = hash('sha256', $canonicalRequest);

        return "SDK-HMAC-SHA256\n$date\n$hash";
    }

    // Create the HWS Signature.
    private function SignStringToSign($stringToSign, $signingKey)
    {
        return hash_hmac('sha256', $stringToSign, $signingKey);
    }

    // Get the finalized value for the "Authorization" header. The signature parameter is the output from SignStringToSign
    private function AuthHeaderValue($signature, $accessKey, $signedHeaders)
    {
        $signedHeadersString = join(';', $signedHeaders);

        return "SDK-HMAC-SHA256 Access=$accessKey, SignedHeaders=$signedHeadersString, Signature=$signature";
    }

    public function Sign($r)
    {
        $date = $this->findHeader($r, HeaderXDate);
        if ($date) {
            $t = date_create_from_format(BasicDateFormat, $r->headerParams[HeaderXDate], timezone_open("UTC"));
        }
        if (empty($t)) {
            $t = date_create(null, timezone_open("UTC"));
            $r->headerParams[HeaderXDate] = date_format($t, BasicDateFormat);
        }
        $queryString = $this->CanonicalQueryString($r);
        if ('' != $queryString) {
            $queryString = '?'.$queryString;
        }
        $signedHeaders = $this->SignedHeaders($r);
        $canonicalRequest = $this->CanonicalRequest($r, $signedHeaders);
        $stringToSign = $this->StringToSign($canonicalRequest, $t);
        $signature = $this->SignStringToSign($stringToSign, $this->Secret);
        $authValue = $this->AuthHeaderValue($signature, $this->Key, $signedHeaders);
        $r->headerParams[HeaderAuthorization] = $authValue;
        $uri = str_replace(['%2F'], ['/'], rawurlencode($r->resourcePath));
        $url = $r->scheme.'://'.$r->host.$uri.$queryString;
        $r->uri = $uri.$queryString;
        $r->url = $url;

        return $r;
    }
}
