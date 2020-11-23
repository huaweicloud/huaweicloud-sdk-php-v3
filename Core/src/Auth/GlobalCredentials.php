<?php

namespace HuaweiCloud\SDK\Core\Auth;

use HuaweiCloud\SDK\Core\SdkRequest;

class GlobalCredentials extends Credentials
{
    private $ak;
    private $sk;
    private $securityToken;
    private $domainId;

    /**
     * GlobalCredentials constructor.
     * @param $ak
     * @param $sk
     * @param $securityToken
     * @param $domainId
     */
    public function __construct($ak=null,
                                $sk=null,
                                $domainId=null,
                                $securityToken=null
    ) {
        $this->ak = $ak;
        $this->sk = $sk;
        $this->securityToken = $securityToken;
        $this->domainId = $domainId;
    }

    public function withAk($ak)
    {
        $this->setSk($ak);
        return $this;
    }

    public function withSk($sk)
    {
        $this->setSk($sk);
        return $this;
    }

    public function withDomainId($domainId)
    {
        $this->setDomainId($domainId);
        return $this;
    }

    public function withSecurityToken($securityToken)
    {
        $this->setSecurityToken($securityToken);
        return $this;
    }

    protected static $setters = [
        'ak' => 'setAk',
        'sk' => 'setSk',
        'securityToken' => 'setSecurityToken',
        'domainId' => 'setDomainId'
    ];

    protected static $getters = [
        'ak' => 'getAk',
        'sk' => 'getSk',
        'securityToken' => 'getSecurityToken',
        'domainId' => 'getDomainId'
    ];

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }


    /**
     * @return mixed
     */
    public function getAk()
    {
        return $this->ak;
    }

    /**
     * @param mixed $ak
     */
    public function setAk($ak)
    {
        $this->ak = $ak;
    }

    /**
     * @return mixed
     */
    public function getSk()
    {
        return $this->sk;
    }

    /**
     * @param mixed $sk
     */
    public function setSk($sk)
    {
        $this->sk = $sk;
    }

    /**
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    /**
     * @param string $securityToken
     */
    public function setSecurityToken($securityToken)
    {
        $this->securityToken = $securityToken;
    }

    /**
     * @return string
     */
    public function getDomainId()
    {
        return $this->domainId;
    }

    /**
     * @param string $domainId
     */
    public function setDomainId($domainId)
    {
        $this->domainId = $domainId;
    }

    /**
     * @return array
     */
    public function getUpdatePathParams()
    {
        $pathParams = Array();
        if ($this->domainId){
            $pathParams['project_id'] = $this->domainId;
        }
        return $pathParams;
    }

    /**
     * 后续要用多线程发请求，返回的是一个多线程的对象
     * 现在暂时把接口做好，直接单线程调用signRequest函数
     * @param $request
     * @return mixed
     */
    public function processAuthRequest(SdkRequest $request)
    {
        return $this->signRequest($request);
    }

    public function signRequest(SdkRequest $request)
    {
        $request->headerParams["X-Domain-Id"] = $this->domainId;
        if ($this->securityToken != null) {
            $request->headerParams["X-Security-Token"] = $this->securityToken;
        }
        if(isset($request->headerParams['Content-Type']) and
            strpos($request->headerParams['Content-Type'],
                "application/json")===0) {
            $request->headerParams["X-Sdk-Content-Sha256"] = "UNSIGNED-PAYLOAD";
        }
        $signer = new Signer($this);
        return $signer->sign($request);
    }
}