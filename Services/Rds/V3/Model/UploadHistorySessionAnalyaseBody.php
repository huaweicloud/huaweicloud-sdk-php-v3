<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadHistorySessionAnalyaseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadHistorySessionAnalyaseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  类型。 session    表示下载历史会话 wait_event    表示下载历史等待事件 top_sql    表示下载历史top sql
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  类型。 session    表示下载历史会话 wait_event    表示下载历史等待事件 top_sql    表示下载历史top sql
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * type  类型。 session    表示下载历史会话 wait_event    表示下载历史等待事件 top_sql    表示下载历史top sql
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  类型。 session    表示下载历史会话 wait_event    表示下载历史等待事件 top_sql    表示下载历史top sql
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  类型。 session    表示下载历史会话 wait_event    表示下载历史等待事件 top_sql    表示下载历史top sql
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets type
    *  类型。 session    表示下载历史会话 wait_event    表示下载历史等待事件 top_sql    表示下载历史top sql
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 类型。 session    表示下载历史会话 wait_event    表示下载历史等待事件 top_sql    表示下载历史top sql
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

