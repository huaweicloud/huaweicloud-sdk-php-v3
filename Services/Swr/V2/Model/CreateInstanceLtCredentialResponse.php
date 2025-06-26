<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceLtCredentialResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceLtCredentialResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authToken  访问凭证密码
    * createdAt  创建时间
    * expireDate  过期时间
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authToken' => 'string',
            'createdAt' => 'string',
            'expireDate' => 'string',
            'tokenId' => 'string',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authToken  访问凭证密码
    * createdAt  创建时间
    * expireDate  过期时间
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authToken' => null,
        'createdAt' => null,
        'expireDate' => null,
        'tokenId' => null,
        'userId' => null
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
    * authToken  访问凭证密码
    * createdAt  创建时间
    * expireDate  过期时间
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authToken' => 'auth_token',
            'createdAt' => 'created_at',
            'expireDate' => 'expire_date',
            'tokenId' => 'token_id',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authToken  访问凭证密码
    * createdAt  创建时间
    * expireDate  过期时间
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'authToken' => 'setAuthToken',
            'createdAt' => 'setCreatedAt',
            'expireDate' => 'setExpireDate',
            'tokenId' => 'setTokenId',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authToken  访问凭证密码
    * createdAt  创建时间
    * expireDate  过期时间
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'authToken' => 'getAuthToken',
            'createdAt' => 'getCreatedAt',
            'expireDate' => 'getExpireDate',
            'tokenId' => 'getTokenId',
            'userId' => 'getUserId'
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
        $this->container['authToken'] = isset($data['authToken']) ? $data['authToken'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['expireDate'] = isset($data['expireDate']) ? $data['expireDate'] : null;
        $this->container['tokenId'] = isset($data['tokenId']) ? $data['tokenId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
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
    * Gets authToken
    *  访问凭证密码
    *
    * @return string|null
    */
    public function getAuthToken()
    {
        return $this->container['authToken'];
    }

    /**
    * Sets authToken
    *
    * @param string|null $authToken 访问凭证密码
    *
    * @return $this
    */
    public function setAuthToken($authToken)
    {
        $this->container['authToken'] = $authToken;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets expireDate
    *  过期时间
    *
    * @return string|null
    */
    public function getExpireDate()
    {
        return $this->container['expireDate'];
    }

    /**
    * Sets expireDate
    *
    * @param string|null $expireDate 过期时间
    *
    * @return $this
    */
    public function setExpireDate($expireDate)
    {
        $this->container['expireDate'] = $expireDate;
        return $this;
    }

    /**
    * Gets tokenId
    *  访问凭证ID
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
    * @param string|null $tokenId 访问凭证ID
    *
    * @return $this
    */
    public function setTokenId($tokenId)
    {
        $this->container['tokenId'] = $tokenId;
        return $this;
    }

    /**
    * Gets userId
    *  访问凭证用户名
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 访问凭证用户名
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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

