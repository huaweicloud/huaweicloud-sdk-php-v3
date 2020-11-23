<?php

namespace HuaweiCloud\SDK\Core\Auth;

define("BasicDateFormat", "Ymd\THis\Z");
define("Algorithm", "SDK-HMAC-SHA256");
define("HeaderXDate", "X-Sdk-Date");
define("HeaderHost", "host");
define("HeaderAuthorization", "Authorization");
define("HeaderContentSha256", "X-Sdk-Content-Sha256");

class Signer
{
    private $Key = '';
    private $Secret = '';

    /**
     * Signer constructor.
     * @param string $Key
     * @param string $Secret
     */
    public function __construct($credentials)
    {
        $this->Key = $credentials->getAk();
        $this->Secret = $credentials->getSk();
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
        $signedHeadersString = join(";", $signedHeaders);
        $hash = $this->findHeader($request, HeaderContentSha256);
        if (!$hash) {
            $hash = hash("sha256", $request->body);
        }
        return "$request->method\n$CanonicalURI\n$CanonicalQueryString\n$canonicalHeaders\n$signedHeadersString\n$hash";
    }

// CanonicalURI returns request uri
    private function CanonicalURI($r)
    {
        $pattens = explode("/", $r->resourcePath);
        $uri = array();
        foreach ($pattens as $v) {
            array_push($uri, str_replace(array('+', "%7E"), array('%20', "~")
                , urlencode(($v))));
        }
        $urlpath = join("/", $uri);
        if (substr($urlpath, -1) != "/") {
            $urlpath = $urlpath . "/";
        }
        return $urlpath;
    }

// CanonicalQueryString
    private function CanonicalQueryString($r)
    {
        $keys = array();
        foreach ($r->queryParams as $key => $value) {
            array_push($keys, $key);
        }
        sort($keys);
        $a = array();
        foreach ($keys as $key) {
            $k = str_replace(array('+', "%7E"), array('%20', "~"), urlencode
            ($key));
            $value = $r->queryParams[$key];
            if (is_array($value)) {
                sort($value);
                foreach ($value as $v) {
                    $kv = "$k=" . str_replace(array('+', "%7E"), array('%20',
                            "~"), urlencode($v));
                    array_push($a, $kv);
                }
            } else {
                $kv = "$k=" . str_replace(array('+', "%7E"), array('%20',
                        "~"), urlencode($value));
                array_push($a, $kv);
            }
        }
        return join("&", $a);
    }

// CanonicalHeaders
    private function CanonicalHeaders($r, $signedHeaders)
    {
        $headers = array();
        foreach ($r->headerParams as $key => $value) {
            $headers[strtolower($key)] = trim($value);
        }
        $a = array();
        foreach ($signedHeaders as $key) {
            array_push($a, $key . ':' . $headers[$key]);
        }
        return join("\n", $a) . "\n";
    }

    private function curlHeaders($r)
    {
        $header = array();
        foreach ($r->headerParams as $key => $value) {
            array_push($header, strtolower($key) . ':' . trim($value));
        }
        return $header;
    }

// SignedHeaders
    private function SignedHeaders($r)
    {
        $a = array();
        foreach ($r->headerParams as $key => $value) {
            array_push($a, strtolower($key));
        }
        sort($a);
        return $a;
    }

// Create a "String to Sign".
    private function StringToSign($canonicalRequest, $t)
    {
        date_default_timezone_set('UTC');
        $date = date(BasicDateFormat, $t);
        $hash = hash("sha256", $canonicalRequest);
        return "SDK-HMAC-SHA256\n$date\n$hash";
    }

// Create the HWS Signature.
    private function SignStringToSign($stringToSign, $signingKey)
    {
        return hash_hmac("sha256", $stringToSign, $signingKey);
    }

// Get the finalized value for the "Authorization" header. The signature parameter is the output from SignStringToSign
    private function AuthHeaderValue($signature, $accessKey, $signedHeaders)
    {
        $signedHeadersString = join(";", $signedHeaders);
        return "SDK-HMAC-SHA256 Access=$accessKey, SignedHeaders=$signedHeadersString, Signature=$signature";
    }

    public function Sign($r)
    {
        date_default_timezone_set('UTC');
        $date = $this->findHeader($r, HeaderXDate);
        if ($date) {
            $t = date_timestamp_get(date_create_from_format(BasicDateFormat, $date));
        }
        if (!@$t) {
            $t = time();
            $r->headerParams[HeaderXDate] = date(BasicDateFormat, $t);
        }
        $queryString = $this->CanonicalQueryString($r);
        if ($queryString != "") {
            $queryString = "?" . $queryString;
        }
        $signedHeaders = $this->SignedHeaders($r);
        $canonicalRequest = $this->CanonicalRequest($r, $signedHeaders);
        $stringToSign = $this->StringToSign($canonicalRequest, $t);
        $signature = $this->SignStringToSign($stringToSign, $this->Secret);
        $authValue = $this->AuthHeaderValue($signature, $this->Key, $signedHeaders);
        $r->headerParams[HeaderAuthorization] = $authValue;
        $uri = str_replace(array("%2F"), array("/"), rawurlencode($r->resourcePath));
        $url = $r->scheme . '://' . $r->host . $uri . $queryString;
        $r->uri = $uri . $queryString;
        $r->url = $url;
        return $r;
    }
}