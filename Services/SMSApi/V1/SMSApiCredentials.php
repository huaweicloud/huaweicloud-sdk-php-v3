<?php


namespace HuaweiCloud\SDK\SMSApi\V1;


use HuaweiCloud\SDK\Core\Auth\Credentials;
use HuaweiCloud\SDK\Core\Auth\Signer;
use HuaweiCloud\SDK\Core\SdkRequest;

class SMSApiCredentials extends Credentials
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

    public function processAuthRequest(SdkRequest $request)
    {
        // The processing is the same as that of other language SDKs. The Host parameter is added.
        if (!isset($request->headerParams['Host']) || empty($request->headers['Host'])) {
            $request->headerParams['Host'] = $request->host;
        }

        // When the batchSendSms interface automatically generates SMSApiClient, it is considered as the multipart type.
        // Content-Type is cleared in the SDK framework code selectHeadersForMultipart. This parameter is added back here. Otherwise, the api invoking will fail.
        if (!isset($request->headerParams['Content-Type'])  and $request->resourcePath == "/sms/batchSendSms/v1") {
            $request->headerParams['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        $signer = new Signer($this);
        return $signer->sign($request);
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