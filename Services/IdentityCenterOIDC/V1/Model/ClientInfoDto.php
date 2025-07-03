<?php

namespace HuaweiCloud\SDK\IdentityCenterOIDC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClientInfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClientInfoDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizationEndpoint  客户端可以请求授权的端点
    * clientId  客户端应用唯一标识
    * clientIdIssuedAt  客户端标识符和客户端密钥的注册时间
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * clientSecretExpiresAt  客户端标识符和客户端密钥失效的时间
    * tokenEndpoint  客户端可以在其中获取访问令牌的端点
    * scopes  服务器为客户端注册的作用域列表。后续授权访问令牌时，权限都应该限制在此作用域列表的子集范围内
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizationEndpoint' => 'string',
            'clientId' => 'string',
            'clientIdIssuedAt' => 'int',
            'clientSecret' => 'string',
            'clientSecretExpiresAt' => 'int',
            'tokenEndpoint' => 'string',
            'scopes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizationEndpoint  客户端可以请求授权的端点
    * clientId  客户端应用唯一标识
    * clientIdIssuedAt  客户端标识符和客户端密钥的注册时间
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * clientSecretExpiresAt  客户端标识符和客户端密钥失效的时间
    * tokenEndpoint  客户端可以在其中获取访问令牌的端点
    * scopes  服务器为客户端注册的作用域列表。后续授权访问令牌时，权限都应该限制在此作用域列表的子集范围内
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizationEndpoint' => null,
        'clientId' => null,
        'clientIdIssuedAt' => 'int64',
        'clientSecret' => null,
        'clientSecretExpiresAt' => 'int64',
        'tokenEndpoint' => null,
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
    * authorizationEndpoint  客户端可以请求授权的端点
    * clientId  客户端应用唯一标识
    * clientIdIssuedAt  客户端标识符和客户端密钥的注册时间
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * clientSecretExpiresAt  客户端标识符和客户端密钥失效的时间
    * tokenEndpoint  客户端可以在其中获取访问令牌的端点
    * scopes  服务器为客户端注册的作用域列表。后续授权访问令牌时，权限都应该限制在此作用域列表的子集范围内
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizationEndpoint' => 'authorization_endpoint',
            'clientId' => 'client_id',
            'clientIdIssuedAt' => 'client_id_issued_at',
            'clientSecret' => 'client_secret',
            'clientSecretExpiresAt' => 'client_secret_expires_at',
            'tokenEndpoint' => 'token_endpoint',
            'scopes' => 'scopes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizationEndpoint  客户端可以请求授权的端点
    * clientId  客户端应用唯一标识
    * clientIdIssuedAt  客户端标识符和客户端密钥的注册时间
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * clientSecretExpiresAt  客户端标识符和客户端密钥失效的时间
    * tokenEndpoint  客户端可以在其中获取访问令牌的端点
    * scopes  服务器为客户端注册的作用域列表。后续授权访问令牌时，权限都应该限制在此作用域列表的子集范围内
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizationEndpoint' => 'setAuthorizationEndpoint',
            'clientId' => 'setClientId',
            'clientIdIssuedAt' => 'setClientIdIssuedAt',
            'clientSecret' => 'setClientSecret',
            'clientSecretExpiresAt' => 'setClientSecretExpiresAt',
            'tokenEndpoint' => 'setTokenEndpoint',
            'scopes' => 'setScopes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizationEndpoint  客户端可以请求授权的端点
    * clientId  客户端应用唯一标识
    * clientIdIssuedAt  客户端标识符和客户端密钥的注册时间
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * clientSecretExpiresAt  客户端标识符和客户端密钥失效的时间
    * tokenEndpoint  客户端可以在其中获取访问令牌的端点
    * scopes  服务器为客户端注册的作用域列表。后续授权访问令牌时，权限都应该限制在此作用域列表的子集范围内
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizationEndpoint' => 'getAuthorizationEndpoint',
            'clientId' => 'getClientId',
            'clientIdIssuedAt' => 'getClientIdIssuedAt',
            'clientSecret' => 'getClientSecret',
            'clientSecretExpiresAt' => 'getClientSecretExpiresAt',
            'tokenEndpoint' => 'getTokenEndpoint',
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
        $this->container['authorizationEndpoint'] = isset($data['authorizationEndpoint']) ? $data['authorizationEndpoint'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientIdIssuedAt'] = isset($data['clientIdIssuedAt']) ? $data['clientIdIssuedAt'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['clientSecretExpiresAt'] = isset($data['clientSecretExpiresAt']) ? $data['clientSecretExpiresAt'] : null;
        $this->container['tokenEndpoint'] = isset($data['tokenEndpoint']) ? $data['tokenEndpoint'] : null;
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
        if ($this->container['authorizationEndpoint'] === null) {
            $invalidProperties[] = "'authorizationEndpoint' can't be null";
        }
        if ($this->container['clientId'] === null) {
            $invalidProperties[] = "'clientId' can't be null";
        }
        if ($this->container['clientIdIssuedAt'] === null) {
            $invalidProperties[] = "'clientIdIssuedAt' can't be null";
        }
        if ($this->container['clientSecret'] === null) {
            $invalidProperties[] = "'clientSecret' can't be null";
        }
        if ($this->container['clientSecretExpiresAt'] === null) {
            $invalidProperties[] = "'clientSecretExpiresAt' can't be null";
        }
        if ($this->container['tokenEndpoint'] === null) {
            $invalidProperties[] = "'tokenEndpoint' can't be null";
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
    * Gets authorizationEndpoint
    *  客户端可以请求授权的端点
    *
    * @return string
    */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorizationEndpoint'];
    }

    /**
    * Sets authorizationEndpoint
    *
    * @param string $authorizationEndpoint 客户端可以请求授权的端点
    *
    * @return $this
    */
    public function setAuthorizationEndpoint($authorizationEndpoint)
    {
        $this->container['authorizationEndpoint'] = $authorizationEndpoint;
        return $this;
    }

    /**
    * Gets clientId
    *  客户端应用唯一标识
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
    * @param string $clientId 客户端应用唯一标识
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets clientIdIssuedAt
    *  客户端标识符和客户端密钥的注册时间
    *
    * @return int
    */
    public function getClientIdIssuedAt()
    {
        return $this->container['clientIdIssuedAt'];
    }

    /**
    * Sets clientIdIssuedAt
    *
    * @param int $clientIdIssuedAt 客户端标识符和客户端密钥的注册时间
    *
    * @return $this
    */
    public function setClientIdIssuedAt($clientIdIssuedAt)
    {
        $this->container['clientIdIssuedAt'] = $clientIdIssuedAt;
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
    * Gets clientSecretExpiresAt
    *  客户端标识符和客户端密钥失效的时间
    *
    * @return int
    */
    public function getClientSecretExpiresAt()
    {
        return $this->container['clientSecretExpiresAt'];
    }

    /**
    * Sets clientSecretExpiresAt
    *
    * @param int $clientSecretExpiresAt 客户端标识符和客户端密钥失效的时间
    *
    * @return $this
    */
    public function setClientSecretExpiresAt($clientSecretExpiresAt)
    {
        $this->container['clientSecretExpiresAt'] = $clientSecretExpiresAt;
        return $this;
    }

    /**
    * Gets tokenEndpoint
    *  客户端可以在其中获取访问令牌的端点
    *
    * @return string
    */
    public function getTokenEndpoint()
    {
        return $this->container['tokenEndpoint'];
    }

    /**
    * Sets tokenEndpoint
    *
    * @param string $tokenEndpoint 客户端可以在其中获取访问令牌的端点
    *
    * @return $this
    */
    public function setTokenEndpoint($tokenEndpoint)
    {
        $this->container['tokenEndpoint'] = $tokenEndpoint;
        return $this;
    }

    /**
    * Gets scopes
    *  服务器为客户端注册的作用域列表。后续授权访问令牌时，权限都应该限制在此作用域列表的子集范围内
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
    * @param string[]|null $scopes 服务器为客户端注册的作用域列表。后续授权访问令牌时，权限都应该限制在此作用域列表的子集范围内
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

