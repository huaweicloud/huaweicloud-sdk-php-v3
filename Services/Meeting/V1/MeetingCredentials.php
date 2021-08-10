<?php


namespace HuaweiCloud\SDK\Meeting\V1;


use HuaweiCloud\SDK\Core\Auth\Credentials;
use HuaweiCloud\SDK\Core\Exceptions\SdkException;
use HuaweiCloud\SDK\Core\Http\HttpClient;
use HuaweiCloud\SDK\Core\Http\HttpConfig;
use HuaweiCloud\SDK\Core\SdkRequest;
use HuaweiCloud\SDK\Core\Utils\CommonUtils;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;

class MeetingCredentials extends Credentials
{
    private $token = null;
    private $userName;
    private $userPassword;
    private $lastTokenDate = 0;
    private static $EXPIRE_HOUR_HALF = 12;
    private static $CLIENT_TYPE_API = 72;


    public function processAuthRequest(SdkRequest $request)
    {
        $requestUrl = $request->resourcePath;
        try {
            if (null == $this->userName || null == $this->userPassword) {
                throw new SdkException("Input your user name and password");
            }
        } catch (SdkException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
        $exp = time() - $this->lastTokenDate;
        if (null == $this->token || $exp > self::$EXPIRE_HOUR_HALF * 60 * 60) {
            $validToken = $this->createToken($request);
            $request->headerParams["X-Access-Token"] = $validToken;
        }else{
            $request->headerParams["X-Access-Token"] = $this->token;
        }
        $queryString = CommonUtils::CanonicalQueryString($request);
        if ('' != $queryString) {
            $queryString = '?' . $queryString;
        }
        $uri = str_replace(['%2F'], ['/'], rawurlencode($requestUrl));
        $url = $request->scheme . '://' . $request->host . $uri . $queryString;
        $request->uri = $uri . $queryString;
        $request->url = $url;
        return $request;
    }

    private function createToken($request)
    {
        $baseStr = "Basic " . base64_encode($this->userName . ":" . $this->userPassword);
        $authReqStr = json_encode(array("account" => $this->userName, "clientType" => self::$CLIENT_TYPE_API));
        $sdkRequest = new SdkRequest("POST", "https", $request->host, "/v1/usg/acs/auth/account",
            "/v1/usg/acs/auth/account", $request->scheme . '://' . $request->host . "/v1/usg/acs/auth/account",
            [], ["Authorization" => $baseStr, "Content-Type" => "application/json; charset=UTF-8"], $authReqStr, false);
        $httpConfig = new HttpConfig();
        $httpConfig->setIgnoreSslVerification(true);
        $httpClient = new HttpClient($httpConfig);
        $response = $httpClient->doRequestSync($sdkRequest);
        $responseBody = $response->getBody();
        $returnData = ObjectSerializer::deserialize((string)$responseBody, 'HuaweiCloud\SDK\Meeting\V1\Model\CreateTokenResponse');
        $this->token = $returnData->getAccessToken();
        $this->lastTokenDate = time();
        return $this->token;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    public function withUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    public function getUserPassword()
    {
        return $this->userPassword;
    }

    public function setUserPassword($userPassword): void
    {
        $this->userPassword = $userPassword;
    }

    public function withUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
        return $this;
    }

    public function setToken($token): void
    {
        $this->token = $token;
    }

    public function withToken($token)
    {
        $this->token = $token;
        return $this;
    }
}