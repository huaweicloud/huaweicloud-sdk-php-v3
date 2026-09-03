<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnSharedInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnSharedInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户ID
    * userName  用户名
    * sharedTime  共享连接创建时间
    * expiredTime  共享连接过期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'userName' => 'string',
            'sharedTime' => 'int',
            'expiredTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户ID
    * userName  用户名
    * sharedTime  共享连接创建时间
    * expiredTime  共享连接过期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'userName' => null,
        'sharedTime' => 'int64',
        'expiredTime' => 'int64'
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
    * userId  用户ID
    * userName  用户名
    * sharedTime  共享连接创建时间
    * expiredTime  共享连接过期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userName' => 'user_name',
            'sharedTime' => 'shared_time',
            'expiredTime' => 'expired_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户ID
    * userName  用户名
    * sharedTime  共享连接创建时间
    * expiredTime  共享连接过期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'sharedTime' => 'setSharedTime',
            'expiredTime' => 'setExpiredTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户ID
    * userName  用户名
    * sharedTime  共享连接创建时间
    * expiredTime  共享连接过期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'sharedTime' => 'getSharedTime',
            'expiredTime' => 'getExpiredTime'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['sharedTime'] = isset($data['sharedTime']) ? $data['sharedTime'] : null;
        $this->container['expiredTime'] = isset($data['expiredTime']) ? $data['expiredTime'] : null;
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
    * Gets userId
    *  用户ID
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
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets sharedTime
    *  共享连接创建时间
    *
    * @return int|null
    */
    public function getSharedTime()
    {
        return $this->container['sharedTime'];
    }

    /**
    * Sets sharedTime
    *
    * @param int|null $sharedTime 共享连接创建时间
    *
    * @return $this
    */
    public function setSharedTime($sharedTime)
    {
        $this->container['sharedTime'] = $sharedTime;
        return $this;
    }

    /**
    * Gets expiredTime
    *  共享连接过期时间
    *
    * @return int|null
    */
    public function getExpiredTime()
    {
        return $this->container['expiredTime'];
    }

    /**
    * Sets expiredTime
    *
    * @param int|null $expiredTime 共享连接过期时间
    *
    * @return $this
    */
    public function setExpiredTime($expiredTime)
    {
        $this->container['expiredTime'] = $expiredTime;
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

