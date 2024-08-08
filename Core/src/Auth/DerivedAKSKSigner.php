<?php

namespace HuaweiCloud\SDK\Core\Auth;

use HuaweiCloud\SDK\Core\Exceptions\SdkException;

define('BasicDateFormat', "Ymd\THis\Z");
define('Algorithm', 'V11-HMAC-SHA256');
define('HeaderXDate', 'X-Sdk-Date');
define('HeaderHost', 'host');
define('HeaderAuthorization', 'Authorization');
define('HeaderContentSha256', 'X-Sdk-Content-Sha256');

class DerivedAKSKSigner {
    private $Key = '';
    private $Secret = '';

    private $Region = '';

    private $DerivedAuthServiceName = '';

    public function __construct($credentials = null)
    {
        $this->Key = isset($credentials) ? $credentials->getAk() : null;
        $this->Secret = isset($credentials) ? $credentials->getSk() : null;
        $this->Region = isset($credentials) ? $credentials->getRegion() : null;
        $this->DerivedAuthServiceName = isset($credentials) ? $credentials->getDerivedAuthServiceName() : null;
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
    private function StringToSign($canonicalRequest, $t, $info)
    {
        $date = date_format($t, BasicDateFormat);
        // 请求头hash
        $hash = hash('sha256', $canonicalRequest);
        return "V11-HMAC-SHA256\n$date\n$info\n$hash";
    }

    // Create the HWS Signature.
    private function SignStringToSign($stringToSign, $signingKey)
    {
        return hash_hmac('sha256', $stringToSign, $signingKey);
    }

    // Get the finalized value for the "Authorization" header. The signature parameter is the output from SignStringToSign
    private function AuthHeaderValue($signature, $accessKey, $signedHeaders, $info)
    {
        $signedHeadersString = join(';', $signedHeaders);
        return "V11-HMAC-SHA256 Credential=$accessKey/$info, SignedHeaders=$signedHeadersString, Signature=$signature";
    }

    /**
     * @throws SdkException
     */
    public function Sign($r)
    {
        if (empty($this->Region)) {
            throw new SdkException('regionId is required in credentials when using derived auth');
        }

        if (empty($this->DerivedAuthServiceName)) {
            throw new SdkException('derivedAuthServiceName is required in credentials when using derived auth');
        }
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
        $dateStr = substr($r->headerParams["X-Sdk-Date"], 0, 8);
        $info = $dateStr . "/" . $this->Region . "/" . $this->DerivedAuthServiceName;
        $stringToSign = $this->StringToSign($canonicalRequest, $t, $info);

        $derivationKey = HKDF::getDerKeySHA256($this->Key, $this->Secret, $info);
        $signature = $this->SignStringToSign($stringToSign, $derivationKey);
        $authValue = $this->AuthHeaderValue($signature, $this->Key, $signedHeaders, $info);
        $r->headerParams[HeaderAuthorization] = $authValue;
        $uri = str_replace(['%2F'], ['/'], rawurlencode($r->resourcePath));
        $url = $r->scheme.'://'.$r->host.$uri.$queryString;
        $r->uri = $uri.$queryString;
        $r->url = $url;
        return $r;
    }

}
