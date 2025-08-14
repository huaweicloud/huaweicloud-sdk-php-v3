<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserSessionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserSessionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creationTime  会话创建时间
    * ipAddress  用户IP地址
    * sessionId  会话ID
    * sessionNotValidAfter  会话失效时间
    * userAgent  用户客户端信息
    * userId  用户唯一标识ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creationTime' => 'int',
            'ipAddress' => 'string',
            'sessionId' => 'string',
            'sessionNotValidAfter' => 'int',
            'userAgent' => 'string',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creationTime  会话创建时间
    * ipAddress  用户IP地址
    * sessionId  会话ID
    * sessionNotValidAfter  会话失效时间
    * userAgent  用户客户端信息
    * userId  用户唯一标识ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creationTime' => 'int64',
        'ipAddress' => null,
        'sessionId' => null,
        'sessionNotValidAfter' => 'int64',
        'userAgent' => null,
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
    * creationTime  会话创建时间
    * ipAddress  用户IP地址
    * sessionId  会话ID
    * sessionNotValidAfter  会话失效时间
    * userAgent  用户客户端信息
    * userId  用户唯一标识ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creationTime' => 'creation_time',
            'ipAddress' => 'ip_address',
            'sessionId' => 'session_id',
            'sessionNotValidAfter' => 'session_not_valid_after',
            'userAgent' => 'user_agent',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creationTime  会话创建时间
    * ipAddress  用户IP地址
    * sessionId  会话ID
    * sessionNotValidAfter  会话失效时间
    * userAgent  用户客户端信息
    * userId  用户唯一标识ID
    *
    * @var string[]
    */
    protected static $setters = [
            'creationTime' => 'setCreationTime',
            'ipAddress' => 'setIpAddress',
            'sessionId' => 'setSessionId',
            'sessionNotValidAfter' => 'setSessionNotValidAfter',
            'userAgent' => 'setUserAgent',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creationTime  会话创建时间
    * ipAddress  用户IP地址
    * sessionId  会话ID
    * sessionNotValidAfter  会话失效时间
    * userAgent  用户客户端信息
    * userId  用户唯一标识ID
    *
    * @var string[]
    */
    protected static $getters = [
            'creationTime' => 'getCreationTime',
            'ipAddress' => 'getIpAddress',
            'sessionId' => 'getSessionId',
            'sessionNotValidAfter' => 'getSessionNotValidAfter',
            'userAgent' => 'getUserAgent',
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
        $this->container['creationTime'] = isset($data['creationTime']) ? $data['creationTime'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['sessionNotValidAfter'] = isset($data['sessionNotValidAfter']) ? $data['sessionNotValidAfter'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
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
        if ($this->container['creationTime'] === null) {
            $invalidProperties[] = "'creationTime' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['sessionNotValidAfter'] === null) {
            $invalidProperties[] = "'sessionNotValidAfter' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
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
    * Gets creationTime
    *  会话创建时间
    *
    * @return int
    */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
    * Sets creationTime
    *
    * @param int $creationTime 会话创建时间
    *
    * @return $this
    */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;
        return $this;
    }

    /**
    * Gets ipAddress
    *  用户IP地址
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 用户IP地址
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets sessionId
    *  会话ID
    *
    * @return string
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string $sessionId 会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets sessionNotValidAfter
    *  会话失效时间
    *
    * @return int
    */
    public function getSessionNotValidAfter()
    {
        return $this->container['sessionNotValidAfter'];
    }

    /**
    * Sets sessionNotValidAfter
    *
    * @param int $sessionNotValidAfter 会话失效时间
    *
    * @return $this
    */
    public function setSessionNotValidAfter($sessionNotValidAfter)
    {
        $this->container['sessionNotValidAfter'] = $sessionNotValidAfter;
        return $this;
    }

    /**
    * Gets userAgent
    *  用户客户端信息
    *
    * @return string|null
    */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
    * Sets userAgent
    *
    * @param string|null $userAgent 用户客户端信息
    *
    * @return $this
    */
    public function setUserAgent($userAgent)
    {
        $this->container['userAgent'] = $userAgent;
        return $this;
    }

    /**
    * Gets userId
    *  用户唯一标识ID
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 用户唯一标识ID
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

