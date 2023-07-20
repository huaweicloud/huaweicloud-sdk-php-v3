<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLogGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLogGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creationTime  创建该日志组的时间， 毫秒级。
    * logGroupName  日志组的名称。
    * logGroupId  日志组ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creationTime' => 'int',
            'logGroupName' => 'string',
            'logGroupId' => 'string',
            'ttlInDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creationTime  创建该日志组的时间， 毫秒级。
    * logGroupName  日志组的名称。
    * logGroupId  日志组ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creationTime' => 'int64',
        'logGroupName' => null,
        'logGroupId' => null,
        'ttlInDays' => 'int32'
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
    * creationTime  创建该日志组的时间， 毫秒级。
    * logGroupName  日志组的名称。
    * logGroupId  日志组ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creationTime' => 'creation_time',
            'logGroupName' => 'log_group_name',
            'logGroupId' => 'log_group_id',
            'ttlInDays' => 'ttl_in_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creationTime  创建该日志组的时间， 毫秒级。
    * logGroupName  日志组的名称。
    * logGroupId  日志组ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $setters = [
            'creationTime' => 'setCreationTime',
            'logGroupName' => 'setLogGroupName',
            'logGroupId' => 'setLogGroupId',
            'ttlInDays' => 'setTtlInDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creationTime  创建该日志组的时间， 毫秒级。
    * logGroupName  日志组的名称。
    * logGroupId  日志组ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $getters = [
            'creationTime' => 'getCreationTime',
            'logGroupName' => 'getLogGroupName',
            'logGroupId' => 'getLogGroupId',
            'ttlInDays' => 'getTtlInDays'
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
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['ttlInDays'] = isset($data['ttlInDays']) ? $data['ttlInDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) > 100)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) < 5)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 19)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 19)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 19.";
            }
            if (!is_null($this->container['ttlInDays']) && ($this->container['ttlInDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['ttlInDays']) && ($this->container['ttlInDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be bigger than or equal to 1.";
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
    *  创建该日志组的时间， 毫秒级。
    *
    * @return int|null
    */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
    * Sets creationTime
    *
    * @param int|null $creationTime 创建该日志组的时间， 毫秒级。
    *
    * @return $this
    */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组的名称。
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组的名称。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组ID。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets ttlInDays
    *  日志存储时间（天）。
    *
    * @return int|null
    */
    public function getTtlInDays()
    {
        return $this->container['ttlInDays'];
    }

    /**
    * Sets ttlInDays
    *
    * @param int|null $ttlInDays 日志存储时间（天）。
    *
    * @return $this
    */
    public function setTtlInDays($ttlInDays)
    {
        $this->container['ttlInDays'] = $ttlInDays;
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

