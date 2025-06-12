<?php


namespace HuaweiCloud\SDK\IdentityCenterPortalAPI\V1;


use HuaweiCloud\SDK\Core\Auth\Credentials;
use HuaweiCloud\SDK\Core\Utils\CommonUtils;
use HuaweiCloud\SDK\Core\SdkRequest;

class IdentityCenterPortalAPICredentials  extends Credentials
{
    protected static $setters = [
        'ak' => 'setAk',
        'sk' => 'setSk'
    ];

    protected static $getters = [
        'ak' => 'setAk',
        'sk' => 'setSk',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }
    //  Implement unauthenticated request. The PortalAPI interface is not authenticated through AK/SK, Token authentication is performed internally within the service.
    public function processAuthRequest(SdkRequest $request)
    {
        $requestUrl = $request->resourcePath;

        $queryString = CommonUtils::CanonicalQueryString($request);
        if ('' != $queryString) {
            $queryString = '?' . $queryString;
        }
        $uri = str_replace(['%2F'], ['/'], rawurlencode($requestUrl));
        $url = $request->scheme . '://' . $request->host . $uri . $queryString;
        $request->uri = $uri.$queryString;
        $request->url = $url;
        return $request;
    }

    public function getAk()
    {
        return $this->ak;
    }

    public function withAk($ak)
    {
        $this->ak = $ak;
        return $this;
    }

    public function setAk($ak): void
    {
        $this->ak = $ak;
    }

    public function getSk()
    {
        return $this->sk;
    }

    public function setSk($sk): void
    {
        $this->sk = $sk;
    }

    public function withSk($sk)
    {
        $this->sk = $sk;
        return $this;
    }
}