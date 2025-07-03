<?php

namespace HuaweiCloud\SDK\IdentityCenterOIDC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTokenReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTokenReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientId  客户端的唯一标识
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * code  从授权服务接收的授权代码。执行授权授予请求以获取对令牌的访问权限时需要此参数
    * deviceCode  仅在为设备代码授权类型调用此API时使用
    * grantType  请求的授权类型。支持授权码、设备代码、客户端凭证和刷新令牌等授权类型
    * redirectUri  将接收授权代码的应用程序的位置。用户授权服务将请求发送到此位置
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * scopes  客户端定义的作用域列表，表示客户端想要获取的权限。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientId' => 'string',
            'clientSecret' => 'string',
            'code' => 'string',
            'deviceCode' => 'string',
            'grantType' => 'string',
            'redirectUri' => 'string',
            'refreshToken' => 'string',
            'scopes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientId  客户端的唯一标识
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * code  从授权服务接收的授权代码。执行授权授予请求以获取对令牌的访问权限时需要此参数
    * deviceCode  仅在为设备代码授权类型调用此API时使用
    * grantType  请求的授权类型。支持授权码、设备代码、客户端凭证和刷新令牌等授权类型
    * redirectUri  将接收授权代码的应用程序的位置。用户授权服务将请求发送到此位置
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * scopes  客户端定义的作用域列表，表示客户端想要获取的权限。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientId' => null,
        'clientSecret' => null,
        'code' => null,
        'deviceCode' => null,
        'grantType' => null,
        'redirectUri' => null,
        'refreshToken' => null,
        'scopes' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * clientId  客户端的唯一标识
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * code  从授权服务接收的授权代码。执行授权授予请求以获取对令牌的访问权限时需要此参数
    * deviceCode  仅在为设备代码授权类型调用此API时使用
    * grantType  请求的授权类型。支持授权码、设备代码、客户端凭证和刷新令牌等授权类型
    * redirectUri  将接收授权代码的应用程序的位置。用户授权服务将请求发送到此位置
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * scopes  客户端定义的作用域列表，表示客户端想要获取的权限。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientId' => 'client_id',
            'clientSecret' => 'client_secret',
            'code' => 'code',
            'deviceCode' => 'device_code',
            'grantType' => 'grant_type',
            'redirectUri' => 'redirect_uri',
            'refreshToken' => 'refresh_token',
            'scopes' => 'scopes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientId  客户端的唯一标识
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * code  从授权服务接收的授权代码。执行授权授予请求以获取对令牌的访问权限时需要此参数
    * deviceCode  仅在为设备代码授权类型调用此API时使用
    * grantType  请求的授权类型。支持授权码、设备代码、客户端凭证和刷新令牌等授权类型
    * redirectUri  将接收授权代码的应用程序的位置。用户授权服务将请求发送到此位置
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * scopes  客户端定义的作用域列表，表示客户端想要获取的权限。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @var string[]
    */
    protected static $setters = [
            'clientId' => 'setClientId',
            'clientSecret' => 'setClientSecret',
            'code' => 'setCode',
            'deviceCode' => 'setDeviceCode',
            'grantType' => 'setGrantType',
            'redirectUri' => 'setRedirectUri',
            'refreshToken' => 'setRefreshToken',
            'scopes' => 'setScopes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientId  客户端的唯一标识
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * code  从授权服务接收的授权代码。执行授权授予请求以获取对令牌的访问权限时需要此参数
    * deviceCode  仅在为设备代码授权类型调用此API时使用
    * grantType  请求的授权类型。支持授权码、设备代码、客户端凭证和刷新令牌等授权类型
    * redirectUri  将接收授权代码的应用程序的位置。用户授权服务将请求发送到此位置
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * scopes  客户端定义的作用域列表，表示客户端想要获取的权限。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @var string[]
    */
    protected static $getters = [
            'clientId' => 'getClientId',
            'clientSecret' => 'getClientSecret',
            'code' => 'getCode',
            'deviceCode' => 'getDeviceCode',
            'grantType' => 'getGrantType',
            'redirectUri' => 'getRedirectUri',
            'refreshToken' => 'getRefreshToken',
            'scopes' => 'getScopes'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const GRANT_TYPE_AUTHORIZATION_CODE = 'authorization_code';
    const GRANT_TYPE_URNIETFPARAMSOAUTHGRANT_TYPEDEVICE_CODE = 'urn:ietf:params:oauth:grant-type:device_code';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGrantTypeAllowableValues()
    {
        return [
            self::GRANT_TYPE_AUTHORIZATION_CODE,
            self::GRANT_TYPE_URNIETFPARAMSOAUTHGRANT_TYPEDEVICE_CODE,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['deviceCode'] = isset($data['deviceCode']) ? $data['deviceCode'] : null;
        $this->container['grantType'] = isset($data['grantType']) ? $data['grantType'] : null;
        $this->container['redirectUri'] = isset($data['redirectUri']) ? $data['redirectUri'] : null;
        $this->container['refreshToken'] = isset($data['refreshToken']) ? $data['refreshToken'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clientId'] === null) {
            $invalidProperties[] = "'clientId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\.]{1,10240}$/", $this->container['clientId'])) {
                $invalidProperties[] = "invalid value for 'clientId', must be conform to the pattern /^[a-zA-Z0-9_\\-\\.]{1,10240}$/.";
            }
        if ($this->container['clientSecret'] === null) {
            $invalidProperties[] = "'clientSecret' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\.]{1,10240}$/", $this->container['clientSecret'])) {
                $invalidProperties[] = "invalid value for 'clientSecret', must be conform to the pattern /^[a-zA-Z0-9_\\-\\.]{1,10240}$/.";
            }
            if (!is_null($this->container['code']) && !preg_match("/^[a-z0-9]{1,64}$/", $this->container['code'])) {
                $invalidProperties[] = "invalid value for 'code', must be conform to the pattern /^[a-z0-9]{1,64}$/.";
            }
            if (!is_null($this->container['deviceCode']) && !preg_match("/^[a-z0-9]{1,64}$/", $this->container['deviceCode'])) {
                $invalidProperties[] = "invalid value for 'deviceCode', must be conform to the pattern /^[a-z0-9]{1,64}$/.";
            }
        if ($this->container['grantType'] === null) {
            $invalidProperties[] = "'grantType' can't be null";
        }
            $allowedValues = $this->getGrantTypeAllowableValues();
                if (!is_null($this->container['grantType']) && !in_array($this->container['grantType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'grantType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['redirectUri']) && !preg_match("/^[a-zA-z]+:\/\/[^\\s]*$/", $this->container['redirectUri'])) {
                $invalidProperties[] = "invalid value for 'redirectUri', must be conform to the pattern /^[a-zA-z]+:\/\/[^\\s]*$/.";
            }
            if (!is_null($this->container['refreshToken']) && !preg_match("/^[a-z0-9]{1,16}$/", $this->container['refreshToken'])) {
                $invalidProperties[] = "invalid value for 'refreshToken', must be conform to the pattern /^[a-z0-9]{1,16}$/.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets clientId
    *  客户端的唯一标识
    *
    * @return string
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string $clientId 客户端的唯一标识
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets clientSecret
    *  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    *
    * @return string
    */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
    * Sets clientSecret
    *
    * @param string $clientSecret 为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    *
    * @return $this
    */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;
        return $this;
    }

    /**
    * Gets code
    *  从授权服务接收的授权代码。执行授权授予请求以获取对令牌的访问权限时需要此参数
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 从授权服务接收的授权代码。执行授权授予请求以获取对令牌的访问权限时需要此参数
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets deviceCode
    *  仅在为设备代码授权类型调用此API时使用
    *
    * @return string|null
    */
    public function getDeviceCode()
    {
        return $this->container['deviceCode'];
    }

    /**
    * Sets deviceCode
    *
    * @param string|null $deviceCode 仅在为设备代码授权类型调用此API时使用
    *
    * @return $this
    */
    public function setDeviceCode($deviceCode)
    {
        $this->container['deviceCode'] = $deviceCode;
        return $this;
    }

    /**
    * Gets grantType
    *  请求的授权类型。支持授权码、设备代码、客户端凭证和刷新令牌等授权类型
    *
    * @return string
    */
    public function getGrantType()
    {
        return $this->container['grantType'];
    }

    /**
    * Sets grantType
    *
    * @param string $grantType 请求的授权类型。支持授权码、设备代码、客户端凭证和刷新令牌等授权类型
    *
    * @return $this
    */
    public function setGrantType($grantType)
    {
        $this->container['grantType'] = $grantType;
        return $this;
    }

    /**
    * Gets redirectUri
    *  将接收授权代码的应用程序的位置。用户授权服务将请求发送到此位置
    *
    * @return string|null
    */
    public function getRedirectUri()
    {
        return $this->container['redirectUri'];
    }

    /**
    * Sets redirectUri
    *
    * @param string|null $redirectUri 将接收授权代码的应用程序的位置。用户授权服务将请求发送到此位置
    *
    * @return $this
    */
    public function setRedirectUri($redirectUri)
    {
        $this->container['redirectUri'] = $redirectUri;
        return $this;
    }

    /**
    * Gets refreshToken
    *  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    *
    * @return string|null
    */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
    * Sets refreshToken
    *
    * @param string|null $refreshToken 刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    *
    * @return $this
    */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;
        return $this;
    }

    /**
    * Gets scopes
    *  客户端定义的作用域列表，表示客户端想要获取的权限。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @return string[]|null
    */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
    * Sets scopes
    *
    * @param string[]|null $scopes 客户端定义的作用域列表，表示客户端想要获取的权限。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @return $this
    */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

