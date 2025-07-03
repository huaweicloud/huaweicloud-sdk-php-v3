<?php

namespace HuaweiCloud\SDK\IdentityCenterOIDC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TokenInfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TokenInfoDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessToken  用于访问分配给用户的IAM身份中心资源的不透明令牌
    * expiresIn  访问令牌的过期时间（以秒为单位）
    * idToken  用于表明用户身份的不透明令牌
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * tokenType  用于通知客户端返回的令牌是访问令牌，目前为BearerToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessToken' => 'string',
            'expiresIn' => 'int',
            'idToken' => 'string',
            'refreshToken' => 'string',
            'tokenType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessToken  用于访问分配给用户的IAM身份中心资源的不透明令牌
    * expiresIn  访问令牌的过期时间（以秒为单位）
    * idToken  用于表明用户身份的不透明令牌
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * tokenType  用于通知客户端返回的令牌是访问令牌，目前为BearerToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessToken' => null,
        'expiresIn' => 'int32',
        'idToken' => null,
        'refreshToken' => null,
        'tokenType' => null
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
    * accessToken  用于访问分配给用户的IAM身份中心资源的不透明令牌
    * expiresIn  访问令牌的过期时间（以秒为单位）
    * idToken  用于表明用户身份的不透明令牌
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * tokenType  用于通知客户端返回的令牌是访问令牌，目前为BearerToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessToken' => 'access_token',
            'expiresIn' => 'expires_in',
            'idToken' => 'id_token',
            'refreshToken' => 'refresh_token',
            'tokenType' => 'token_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessToken  用于访问分配给用户的IAM身份中心资源的不透明令牌
    * expiresIn  访问令牌的过期时间（以秒为单位）
    * idToken  用于表明用户身份的不透明令牌
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * tokenType  用于通知客户端返回的令牌是访问令牌，目前为BearerToken
    *
    * @var string[]
    */
    protected static $setters = [
            'accessToken' => 'setAccessToken',
            'expiresIn' => 'setExpiresIn',
            'idToken' => 'setIdToken',
            'refreshToken' => 'setRefreshToken',
            'tokenType' => 'setTokenType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessToken  用于访问分配给用户的IAM身份中心资源的不透明令牌
    * expiresIn  访问令牌的过期时间（以秒为单位）
    * idToken  用于表明用户身份的不透明令牌
    * refreshToken  刷新令牌，此令牌可在访问令牌过期后获取新的访问令牌
    * tokenType  用于通知客户端返回的令牌是访问令牌，目前为BearerToken
    *
    * @var string[]
    */
    protected static $getters = [
            'accessToken' => 'getAccessToken',
            'expiresIn' => 'getExpiresIn',
            'idToken' => 'getIdToken',
            'refreshToken' => 'getRefreshToken',
            'tokenType' => 'getTokenType'
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
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['expiresIn'] = isset($data['expiresIn']) ? $data['expiresIn'] : null;
        $this->container['idToken'] = isset($data['idToken']) ? $data['idToken'] : null;
        $this->container['refreshToken'] = isset($data['refreshToken']) ? $data['refreshToken'] : null;
        $this->container['tokenType'] = isset($data['tokenType']) ? $data['tokenType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets accessToken
    *  用于访问分配给用户的IAM身份中心资源的不透明令牌
    *
    * @return string|null
    */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
    * Sets accessToken
    *
    * @param string|null $accessToken 用于访问分配给用户的IAM身份中心资源的不透明令牌
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
    * Gets expiresIn
    *  访问令牌的过期时间（以秒为单位）
    *
    * @return int|null
    */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
    * Sets expiresIn
    *
    * @param int|null $expiresIn 访问令牌的过期时间（以秒为单位）
    *
    * @return $this
    */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;
        return $this;
    }

    /**
    * Gets idToken
    *  用于表明用户身份的不透明令牌
    *
    * @return string|null
    */
    public function getIdToken()
    {
        return $this->container['idToken'];
    }

    /**
    * Sets idToken
    *
    * @param string|null $idToken 用于表明用户身份的不透明令牌
    *
    * @return $this
    */
    public function setIdToken($idToken)
    {
        $this->container['idToken'] = $idToken;
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
    * Gets tokenType
    *  用于通知客户端返回的令牌是访问令牌，目前为BearerToken
    *
    * @return string|null
    */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
    * Sets tokenType
    *
    * @param string|null $tokenType 用于通知客户端返回的令牌是访问令牌，目前为BearerToken
    *
    * @return $this
    */
    public function setTokenType($tokenType)
    {
        $this->container['tokenType'] = $tokenType;
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

