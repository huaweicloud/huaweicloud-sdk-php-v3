<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBearerTokenResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBearerTokenResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creationTime  创建时间
    * expirationTime  过期时间
    * token  访问令牌
    * tokenId  访问令牌的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creationTime' => 'float',
            'expirationTime' => 'float',
            'token' => 'string',
            'tokenId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creationTime  创建时间
    * expirationTime  过期时间
    * token  访问令牌
    * tokenId  访问令牌的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creationTime' => null,
        'expirationTime' => null,
        'token' => null,
        'tokenId' => null
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
    * creationTime  创建时间
    * expirationTime  过期时间
    * token  访问令牌
    * tokenId  访问令牌的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creationTime' => 'creation_time',
            'expirationTime' => 'expiration_time',
            'token' => 'token',
            'tokenId' => 'token_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creationTime  创建时间
    * expirationTime  过期时间
    * token  访问令牌
    * tokenId  访问令牌的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $setters = [
            'creationTime' => 'setCreationTime',
            'expirationTime' => 'setExpirationTime',
            'token' => 'setToken',
            'tokenId' => 'setTokenId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creationTime  创建时间
    * expirationTime  过期时间
    * token  访问令牌
    * tokenId  访问令牌的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $getters = [
            'creationTime' => 'getCreationTime',
            'expirationTime' => 'getExpirationTime',
            'token' => 'getToken',
            'tokenId' => 'getTokenId'
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
        $this->container['creationTime'] = isset($data['creationTime']) ? $data['creationTime'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['tokenId'] = isset($data['tokenId']) ? $data['tokenId'] : null;
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
    * Gets creationTime
    *  创建时间
    *
    * @return float|null
    */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
    * Sets creationTime
    *
    * @param float|null $creationTime 创建时间
    *
    * @return $this
    */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;
        return $this;
    }

    /**
    * Gets expirationTime
    *  过期时间
    *
    * @return float|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param float|null $expirationTime 过期时间
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets token
    *  访问令牌
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token 访问令牌
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets tokenId
    *  访问令牌的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getTokenId()
    {
        return $this->container['tokenId'];
    }

    /**
    * Sets tokenId
    *
    * @param string|null $tokenId 访问令牌的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setTokenId($tokenId)
    {
        $this->container['tokenId'] = $tokenId;
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

