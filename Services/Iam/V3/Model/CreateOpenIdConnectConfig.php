<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOpenIdConnectConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOpenIdConnectConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessMode  访问方式: program_console: 支持编程访问和管理控制台访问方式; program: 支持编程访问方式
    * idpUrl  OpenID Connect身份提供商标识, 对应ID token 中 iss
    * clientId  在OpenID Connect身份提供商注册的客户端ID
    * authorizationEndpoint  OpenID Connect身份提供商授权地址;编程访问和管理控制台访问方式必选，编程访问方式不可选
    * scope  授权请求信息范围，编程访问和管理控制台访问方式必选，编程访问方式不可选，可选值：openid 、email、profile，IDP自定义scope，字符集a-zA-Z_0-9 ，1-10个可选值组合空格分割，至少包括openid，顺序无关，总长度最长255字符，例如：\"openid\"、\"openid email\"、\"openid profile\" 、\"openid email profile\"
    * responseType  授权请求返回的类型；id_token ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * responseMode  授权请求返回方式， form_post 或 fragment ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * signingKey  OpenID Connect身份提供商ID Token签名的公钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessMode' => 'string',
            'idpUrl' => 'string',
            'clientId' => 'string',
            'authorizationEndpoint' => 'string',
            'scope' => 'string',
            'responseType' => 'string',
            'responseMode' => 'string',
            'signingKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessMode  访问方式: program_console: 支持编程访问和管理控制台访问方式; program: 支持编程访问方式
    * idpUrl  OpenID Connect身份提供商标识, 对应ID token 中 iss
    * clientId  在OpenID Connect身份提供商注册的客户端ID
    * authorizationEndpoint  OpenID Connect身份提供商授权地址;编程访问和管理控制台访问方式必选，编程访问方式不可选
    * scope  授权请求信息范围，编程访问和管理控制台访问方式必选，编程访问方式不可选，可选值：openid 、email、profile，IDP自定义scope，字符集a-zA-Z_0-9 ，1-10个可选值组合空格分割，至少包括openid，顺序无关，总长度最长255字符，例如：\"openid\"、\"openid email\"、\"openid profile\" 、\"openid email profile\"
    * responseType  授权请求返回的类型；id_token ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * responseMode  授权请求返回方式， form_post 或 fragment ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * signingKey  OpenID Connect身份提供商ID Token签名的公钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessMode' => null,
        'idpUrl' => null,
        'clientId' => null,
        'authorizationEndpoint' => null,
        'scope' => null,
        'responseType' => null,
        'responseMode' => null,
        'signingKey' => null
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
    * accessMode  访问方式: program_console: 支持编程访问和管理控制台访问方式; program: 支持编程访问方式
    * idpUrl  OpenID Connect身份提供商标识, 对应ID token 中 iss
    * clientId  在OpenID Connect身份提供商注册的客户端ID
    * authorizationEndpoint  OpenID Connect身份提供商授权地址;编程访问和管理控制台访问方式必选，编程访问方式不可选
    * scope  授权请求信息范围，编程访问和管理控制台访问方式必选，编程访问方式不可选，可选值：openid 、email、profile，IDP自定义scope，字符集a-zA-Z_0-9 ，1-10个可选值组合空格分割，至少包括openid，顺序无关，总长度最长255字符，例如：\"openid\"、\"openid email\"、\"openid profile\" 、\"openid email profile\"
    * responseType  授权请求返回的类型；id_token ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * responseMode  授权请求返回方式， form_post 或 fragment ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * signingKey  OpenID Connect身份提供商ID Token签名的公钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessMode' => 'access_mode',
            'idpUrl' => 'idp_url',
            'clientId' => 'client_id',
            'authorizationEndpoint' => 'authorization_endpoint',
            'scope' => 'scope',
            'responseType' => 'response_type',
            'responseMode' => 'response_mode',
            'signingKey' => 'signing_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessMode  访问方式: program_console: 支持编程访问和管理控制台访问方式; program: 支持编程访问方式
    * idpUrl  OpenID Connect身份提供商标识, 对应ID token 中 iss
    * clientId  在OpenID Connect身份提供商注册的客户端ID
    * authorizationEndpoint  OpenID Connect身份提供商授权地址;编程访问和管理控制台访问方式必选，编程访问方式不可选
    * scope  授权请求信息范围，编程访问和管理控制台访问方式必选，编程访问方式不可选，可选值：openid 、email、profile，IDP自定义scope，字符集a-zA-Z_0-9 ，1-10个可选值组合空格分割，至少包括openid，顺序无关，总长度最长255字符，例如：\"openid\"、\"openid email\"、\"openid profile\" 、\"openid email profile\"
    * responseType  授权请求返回的类型；id_token ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * responseMode  授权请求返回方式， form_post 或 fragment ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * signingKey  OpenID Connect身份提供商ID Token签名的公钥
    *
    * @var string[]
    */
    protected static $setters = [
            'accessMode' => 'setAccessMode',
            'idpUrl' => 'setIdpUrl',
            'clientId' => 'setClientId',
            'authorizationEndpoint' => 'setAuthorizationEndpoint',
            'scope' => 'setScope',
            'responseType' => 'setResponseType',
            'responseMode' => 'setResponseMode',
            'signingKey' => 'setSigningKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessMode  访问方式: program_console: 支持编程访问和管理控制台访问方式; program: 支持编程访问方式
    * idpUrl  OpenID Connect身份提供商标识, 对应ID token 中 iss
    * clientId  在OpenID Connect身份提供商注册的客户端ID
    * authorizationEndpoint  OpenID Connect身份提供商授权地址;编程访问和管理控制台访问方式必选，编程访问方式不可选
    * scope  授权请求信息范围，编程访问和管理控制台访问方式必选，编程访问方式不可选，可选值：openid 、email、profile，IDP自定义scope，字符集a-zA-Z_0-9 ，1-10个可选值组合空格分割，至少包括openid，顺序无关，总长度最长255字符，例如：\"openid\"、\"openid email\"、\"openid profile\" 、\"openid email profile\"
    * responseType  授权请求返回的类型；id_token ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * responseMode  授权请求返回方式， form_post 或 fragment ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    * signingKey  OpenID Connect身份提供商ID Token签名的公钥
    *
    * @var string[]
    */
    protected static $getters = [
            'accessMode' => 'getAccessMode',
            'idpUrl' => 'getIdpUrl',
            'clientId' => 'getClientId',
            'authorizationEndpoint' => 'getAuthorizationEndpoint',
            'scope' => 'getScope',
            'responseType' => 'getResponseType',
            'responseMode' => 'getResponseMode',
            'signingKey' => 'getSigningKey'
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
    const RESPONSE_TYPE_ID_TOKEN = 'id_token';
    const RESPONSE_MODE_FRAGMENT = 'fragment';
    const RESPONSE_MODE_FORM_POST = 'form_post';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResponseTypeAllowableValues()
    {
        return [
            self::RESPONSE_TYPE_ID_TOKEN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResponseModeAllowableValues()
    {
        return [
            self::RESPONSE_MODE_FRAGMENT,
            self::RESPONSE_MODE_FORM_POST,
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
        $this->container['accessMode'] = isset($data['accessMode']) ? $data['accessMode'] : null;
        $this->container['idpUrl'] = isset($data['idpUrl']) ? $data['idpUrl'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['authorizationEndpoint'] = isset($data['authorizationEndpoint']) ? $data['authorizationEndpoint'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['responseType'] = isset($data['responseType']) ? $data['responseType'] : null;
        $this->container['responseMode'] = isset($data['responseMode']) ? $data['responseMode'] : null;
        $this->container['signingKey'] = isset($data['signingKey']) ? $data['signingKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessMode'] === null) {
            $invalidProperties[] = "'accessMode' can't be null";
        }
        if ($this->container['idpUrl'] === null) {
            $invalidProperties[] = "'idpUrl' can't be null";
        }
            if ((mb_strlen($this->container['idpUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'idpUrl', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['idpUrl']) < 10)) {
                $invalidProperties[] = "invalid value for 'idpUrl', the character length must be bigger than or equal to 10.";
            }
        if ($this->container['clientId'] === null) {
            $invalidProperties[] = "'clientId' can't be null";
        }
            if ((mb_strlen($this->container['clientId']) > 255)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['clientId']) < 5)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['authorizationEndpoint']) && (mb_strlen($this->container['authorizationEndpoint']) > 255)) {
                $invalidProperties[] = "invalid value for 'authorizationEndpoint', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['authorizationEndpoint']) && (mb_strlen($this->container['authorizationEndpoint']) < 10)) {
                $invalidProperties[] = "invalid value for 'authorizationEndpoint', the character length must be bigger than or equal to 10.";
            }
            $allowedValues = $this->getResponseTypeAllowableValues();
                if (!is_null($this->container['responseType']) && !in_array($this->container['responseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'responseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getResponseModeAllowableValues();
                if (!is_null($this->container['responseMode']) && !in_array($this->container['responseMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'responseMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['signingKey'] === null) {
            $invalidProperties[] = "'signingKey' can't be null";
        }
            if ((mb_strlen($this->container['signingKey']) > 30000)) {
                $invalidProperties[] = "invalid value for 'signingKey', the character length must be smaller than or equal to 30000.";
            }
            if ((mb_strlen($this->container['signingKey']) < 10)) {
                $invalidProperties[] = "invalid value for 'signingKey', the character length must be bigger than or equal to 10.";
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
    * Gets accessMode
    *  访问方式: program_console: 支持编程访问和管理控制台访问方式; program: 支持编程访问方式
    *
    * @return string
    */
    public function getAccessMode()
    {
        return $this->container['accessMode'];
    }

    /**
    * Sets accessMode
    *
    * @param string $accessMode 访问方式: program_console: 支持编程访问和管理控制台访问方式; program: 支持编程访问方式
    *
    * @return $this
    */
    public function setAccessMode($accessMode)
    {
        $this->container['accessMode'] = $accessMode;
        return $this;
    }

    /**
    * Gets idpUrl
    *  OpenID Connect身份提供商标识, 对应ID token 中 iss
    *
    * @return string
    */
    public function getIdpUrl()
    {
        return $this->container['idpUrl'];
    }

    /**
    * Sets idpUrl
    *
    * @param string $idpUrl OpenID Connect身份提供商标识, 对应ID token 中 iss
    *
    * @return $this
    */
    public function setIdpUrl($idpUrl)
    {
        $this->container['idpUrl'] = $idpUrl;
        return $this;
    }

    /**
    * Gets clientId
    *  在OpenID Connect身份提供商注册的客户端ID
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
    * @param string $clientId 在OpenID Connect身份提供商注册的客户端ID
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets authorizationEndpoint
    *  OpenID Connect身份提供商授权地址;编程访问和管理控制台访问方式必选，编程访问方式不可选
    *
    * @return string|null
    */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorizationEndpoint'];
    }

    /**
    * Sets authorizationEndpoint
    *
    * @param string|null $authorizationEndpoint OpenID Connect身份提供商授权地址;编程访问和管理控制台访问方式必选，编程访问方式不可选
    *
    * @return $this
    */
    public function setAuthorizationEndpoint($authorizationEndpoint)
    {
        $this->container['authorizationEndpoint'] = $authorizationEndpoint;
        return $this;
    }

    /**
    * Gets scope
    *  授权请求信息范围，编程访问和管理控制台访问方式必选，编程访问方式不可选，可选值：openid 、email、profile，IDP自定义scope，字符集a-zA-Z_0-9 ，1-10个可选值组合空格分割，至少包括openid，顺序无关，总长度最长255字符，例如：\"openid\"、\"openid email\"、\"openid profile\" 、\"openid email profile\"
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 授权请求信息范围，编程访问和管理控制台访问方式必选，编程访问方式不可选，可选值：openid 、email、profile，IDP自定义scope，字符集a-zA-Z_0-9 ，1-10个可选值组合空格分割，至少包括openid，顺序无关，总长度最长255字符，例如：\"openid\"、\"openid email\"、\"openid profile\" 、\"openid email profile\"
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets responseType
    *  授权请求返回的类型；id_token ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    *
    * @return string|null
    */
    public function getResponseType()
    {
        return $this->container['responseType'];
    }

    /**
    * Sets responseType
    *
    * @param string|null $responseType 授权请求返回的类型；id_token ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    *
    * @return $this
    */
    public function setResponseType($responseType)
    {
        $this->container['responseType'] = $responseType;
        return $this;
    }

    /**
    * Gets responseMode
    *  授权请求返回方式， form_post 或 fragment ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    *
    * @return string|null
    */
    public function getResponseMode()
    {
        return $this->container['responseMode'];
    }

    /**
    * Sets responseMode
    *
    * @param string|null $responseMode 授权请求返回方式， form_post 或 fragment ；编程访问和管理控制台访问方式必选，编程访问方式不可选
    *
    * @return $this
    */
    public function setResponseMode($responseMode)
    {
        $this->container['responseMode'] = $responseMode;
        return $this;
    }

    /**
    * Gets signingKey
    *  OpenID Connect身份提供商ID Token签名的公钥
    *
    * @return string
    */
    public function getSigningKey()
    {
        return $this->container['signingKey'];
    }

    /**
    * Sets signingKey
    *
    * @param string $signingKey OpenID Connect身份提供商ID Token签名的公钥
    *
    * @return $this
    */
    public function setSigningKey($signingKey)
    {
        $this->container['signingKey'] = $signingKey;
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

