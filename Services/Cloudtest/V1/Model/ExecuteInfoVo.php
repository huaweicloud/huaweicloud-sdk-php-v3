<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  执行开始时间
    * timestamp  执行开始时间时间戳
    * duration  执行时长
    * userId  用户ID
    * userName  用户名称
    * executeTimes  执行次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'timestamp' => 'int',
            'duration' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'executeTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  执行开始时间
    * timestamp  执行开始时间时间戳
    * duration  执行时长
    * userId  用户ID
    * userName  用户名称
    * executeTimes  执行次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'timestamp' => 'int64',
        'duration' => null,
        'userId' => null,
        'userName' => null,
        'executeTimes' => 'int32'
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
    * time  执行开始时间
    * timestamp  执行开始时间时间戳
    * duration  执行时长
    * userId  用户ID
    * userName  用户名称
    * executeTimes  执行次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'timestamp' => 'timestamp',
            'duration' => 'duration',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'executeTimes' => 'execute_times'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  执行开始时间
    * timestamp  执行开始时间时间戳
    * duration  执行时长
    * userId  用户ID
    * userName  用户名称
    * executeTimes  执行次数
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'timestamp' => 'setTimestamp',
            'duration' => 'setDuration',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'executeTimes' => 'setExecuteTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  执行开始时间
    * timestamp  执行开始时间时间戳
    * duration  执行时长
    * userId  用户ID
    * userName  用户名称
    * executeTimes  执行次数
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'timestamp' => 'getTimestamp',
            'duration' => 'getDuration',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'executeTimes' => 'getExecuteTimes'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['executeTimes'] = isset($data['executeTimes']) ? $data['executeTimes'] : null;
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
    * Gets time
    *  执行开始时间
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 执行开始时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets timestamp
    *  执行开始时间时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 执行开始时间时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets duration
    *  执行时长
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration 执行时长
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
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
    *  用户名称
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
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets executeTimes
    *  执行次数
    *
    * @return int|null
    */
    public function getExecuteTimes()
    {
        return $this->container['executeTimes'];
    }

    /**
    * Sets executeTimes
    *
    * @param int|null $executeTimes 执行次数
    *
    * @return $this
    */
    public function setExecuteTimes($executeTimes)
    {
        $this->container['executeTimes'] = $executeTimes;
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

