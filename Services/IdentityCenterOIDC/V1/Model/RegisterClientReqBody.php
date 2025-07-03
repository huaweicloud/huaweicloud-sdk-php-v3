<?php

namespace HuaweiCloud\SDK\IdentityCenterOIDC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterClientReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterClientReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientName  客户端名称
    * clientType  客户端的类型。该服务仅支持public作为客户端类型
    * tokenEndpointAuthMethod  向令牌端点发送请求时所需的身份验证方法
    * scopes  客户端定义的作用域列表。授权后，此列表用于在授予访问令牌时限制权限
    * grantTypes  客户端可以在令牌端点使用的OAuth2.0授权类型数组
    * responseTypes  客户端可以在授权端点使用的OAuth2.0授权类型数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientName' => 'string',
            'clientType' => 'string',
            'tokenEndpointAuthMethod' => 'string',
            'scopes' => 'string[]',
            'grantTypes' => 'string[]',
            'responseTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientName  客户端名称
    * clientType  客户端的类型。该服务仅支持public作为客户端类型
    * tokenEndpointAuthMethod  向令牌端点发送请求时所需的身份验证方法
    * scopes  客户端定义的作用域列表。授权后，此列表用于在授予访问令牌时限制权限
    * grantTypes  客户端可以在令牌端点使用的OAuth2.0授权类型数组
    * responseTypes  客户端可以在授权端点使用的OAuth2.0授权类型数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientName' => null,
        'clientType' => null,
        'tokenEndpointAuthMethod' => null,
        'scopes' => null,
        'grantTypes' => null,
        'responseTypes' => null
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
    * clientName  客户端名称
    * clientType  客户端的类型。该服务仅支持public作为客户端类型
    * tokenEndpointAuthMethod  向令牌端点发送请求时所需的身份验证方法
    * scopes  客户端定义的作用域列表。授权后，此列表用于在授予访问令牌时限制权限
    * grantTypes  客户端可以在令牌端点使用的OAuth2.0授权类型数组
    * responseTypes  客户端可以在授权端点使用的OAuth2.0授权类型数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientName' => 'client_name',
            'clientType' => 'client_type',
            'tokenEndpointAuthMethod' => 'token_endpoint_auth_method',
            'scopes' => 'scopes',
            'grantTypes' => 'grant_types',
            'responseTypes' => 'response_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientName  客户端名称
    * clientType  客户端的类型。该服务仅支持public作为客户端类型
    * tokenEndpointAuthMethod  向令牌端点发送请求时所需的身份验证方法
    * scopes  客户端定义的作用域列表。授权后，此列表用于在授予访问令牌时限制权限
    * grantTypes  客户端可以在令牌端点使用的OAuth2.0授权类型数组
    * responseTypes  客户端可以在授权端点使用的OAuth2.0授权类型数组
    *
    * @var string[]
    */
    protected static $setters = [
            'clientName' => 'setClientName',
            'clientType' => 'setClientType',
            'tokenEndpointAuthMethod' => 'setTokenEndpointAuthMethod',
            'scopes' => 'setScopes',
            'grantTypes' => 'setGrantTypes',
            'responseTypes' => 'setResponseTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientName  客户端名称
    * clientType  客户端的类型。该服务仅支持public作为客户端类型
    * tokenEndpointAuthMethod  向令牌端点发送请求时所需的身份验证方法
    * scopes  客户端定义的作用域列表。授权后，此列表用于在授予访问令牌时限制权限
    * grantTypes  客户端可以在令牌端点使用的OAuth2.0授权类型数组
    * responseTypes  客户端可以在授权端点使用的OAuth2.0授权类型数组
    *
    * @var string[]
    */
    protected static $getters = [
            'clientName' => 'getClientName',
            'clientType' => 'getClientType',
            'tokenEndpointAuthMethod' => 'getTokenEndpointAuthMethod',
            'scopes' => 'getScopes',
            'grantTypes' => 'getGrantTypes',
            'responseTypes' => 'getResponseTypes'
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
    const CLIENT_TYPE__PUBLIC = 'public';
    const TOKEN_ENDPOINT_AUTH_METHOD_CLIENT_SECRET_POST = 'client_secret_post';
    const GRANT_TYPES_URNIETFPARAMSOAUTHGRANT_TYPEDEVICE_CODE = 'urn:ietf:params:oauth:grant-type:device_code';
    const GRANT_TYPES_AUTHORIZATION_CODE = 'authorization_code';
    const RESPONSE_TYPES_CODE = 'code';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClientTypeAllowableValues()
    {
        return [
            self::CLIENT_TYPE__PUBLIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTokenEndpointAuthMethodAllowableValues()
    {
        return [
            self::TOKEN_ENDPOINT_AUTH_METHOD_CLIENT_SECRET_POST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGrantTypesAllowableValues()
    {
        return [
            self::GRANT_TYPES_URNIETFPARAMSOAUTHGRANT_TYPEDEVICE_CODE,
            self::GRANT_TYPES_AUTHORIZATION_CODE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResponseTypesAllowableValues()
    {
        return [
            self::RESPONSE_TYPES_CODE,
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
        $this->container['clientName'] = isset($data['clientName']) ? $data['clientName'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
        $this->container['tokenEndpointAuthMethod'] = isset($data['tokenEndpointAuthMethod']) ? $data['tokenEndpointAuthMethod'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['grantTypes'] = isset($data['grantTypes']) ? $data['grantTypes'] : null;
        $this->container['responseTypes'] = isset($data['responseTypes']) ? $data['responseTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clientName'] === null) {
            $invalidProperties[] = "'clientName' can't be null";
        }
            if ((mb_strlen($this->container['clientName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'clientName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['clientName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r]*/", $this->container['clientName'])) {
                $invalidProperties[] = "invalid value for 'clientName', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r]*/.";
            }
        if ($this->container['clientType'] === null) {
            $invalidProperties[] = "'clientType' can't be null";
        }
            $allowedValues = $this->getClientTypeAllowableValues();
                if (!is_null($this->container['clientType']) && !in_array($this->container['clientType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clientType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['tokenEndpointAuthMethod'] === null) {
            $invalidProperties[] = "'tokenEndpointAuthMethod' can't be null";
        }
            $allowedValues = $this->getTokenEndpointAuthMethodAllowableValues();
                if (!is_null($this->container['tokenEndpointAuthMethod']) && !in_array($this->container['tokenEndpointAuthMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tokenEndpointAuthMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['grantTypes'] === null) {
            $invalidProperties[] = "'grantTypes' can't be null";
        }
        if ($this->container['responseTypes'] === null) {
            $invalidProperties[] = "'responseTypes' can't be null";
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
    * Gets clientName
    *  客户端名称
    *
    * @return string
    */
    public function getClientName()
    {
        return $this->container['clientName'];
    }

    /**
    * Sets clientName
    *
    * @param string $clientName 客户端名称
    *
    * @return $this
    */
    public function setClientName($clientName)
    {
        $this->container['clientName'] = $clientName;
        return $this;
    }

    /**
    * Gets clientType
    *  客户端的类型。该服务仅支持public作为客户端类型
    *
    * @return string
    */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
    * Sets clientType
    *
    * @param string $clientType 客户端的类型。该服务仅支持public作为客户端类型
    *
    * @return $this
    */
    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;
        return $this;
    }

    /**
    * Gets tokenEndpointAuthMethod
    *  向令牌端点发送请求时所需的身份验证方法
    *
    * @return string
    */
    public function getTokenEndpointAuthMethod()
    {
        return $this->container['tokenEndpointAuthMethod'];
    }

    /**
    * Sets tokenEndpointAuthMethod
    *
    * @param string $tokenEndpointAuthMethod 向令牌端点发送请求时所需的身份验证方法
    *
    * @return $this
    */
    public function setTokenEndpointAuthMethod($tokenEndpointAuthMethod)
    {
        $this->container['tokenEndpointAuthMethod'] = $tokenEndpointAuthMethod;
        return $this;
    }

    /**
    * Gets scopes
    *  客户端定义的作用域列表。授权后，此列表用于在授予访问令牌时限制权限
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
    * @param string[]|null $scopes 客户端定义的作用域列表。授权后，此列表用于在授予访问令牌时限制权限
    *
    * @return $this
    */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;
        return $this;
    }

    /**
    * Gets grantTypes
    *  客户端可以在令牌端点使用的OAuth2.0授权类型数组
    *
    * @return string[]
    */
    public function getGrantTypes()
    {
        return $this->container['grantTypes'];
    }

    /**
    * Sets grantTypes
    *
    * @param string[] $grantTypes 客户端可以在令牌端点使用的OAuth2.0授权类型数组
    *
    * @return $this
    */
    public function setGrantTypes($grantTypes)
    {
        $this->container['grantTypes'] = $grantTypes;
        return $this;
    }

    /**
    * Gets responseTypes
    *  客户端可以在授权端点使用的OAuth2.0授权类型数组
    *
    * @return string[]
    */
    public function getResponseTypes()
    {
        return $this->container['responseTypes'];
    }

    /**
    * Sets responseTypes
    *
    * @param string[] $responseTypes 客户端可以在授权端点使用的OAuth2.0授权类型数组
    *
    * @return $this
    */
    public function setResponseTypes($responseTypes)
    {
        $this->container['responseTypes'] = $responseTypes;
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

