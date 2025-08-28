<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopSqlTrendItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopSqlTrendItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeAt  执行时间点，毫秒时间戳。表示统计数据的时间范围为execute_at到execute_at + interval_millis。
    * queryTimeIn100ms  执行耗时小于100ms。
    * queryTimeIn500ms  执行耗时100ms-500ms。
    * queryTimeIn1s  执行耗时500ms-1000ms
    * queryTimeOver1s  执行耗时大于1000ms。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeAt' => 'int',
            'queryTimeIn100ms' => 'int',
            'queryTimeIn500ms' => 'int',
            'queryTimeIn1s' => 'int',
            'queryTimeOver1s' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeAt  执行时间点，毫秒时间戳。表示统计数据的时间范围为execute_at到execute_at + interval_millis。
    * queryTimeIn100ms  执行耗时小于100ms。
    * queryTimeIn500ms  执行耗时100ms-500ms。
    * queryTimeIn1s  执行耗时500ms-1000ms
    * queryTimeOver1s  执行耗时大于1000ms。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeAt' => 'int64',
        'queryTimeIn100ms' => 'int64',
        'queryTimeIn500ms' => 'int64',
        'queryTimeIn1s' => 'int64',
        'queryTimeOver1s' => 'int64'
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
    * executeAt  执行时间点，毫秒时间戳。表示统计数据的时间范围为execute_at到execute_at + interval_millis。
    * queryTimeIn100ms  执行耗时小于100ms。
    * queryTimeIn500ms  执行耗时100ms-500ms。
    * queryTimeIn1s  执行耗时500ms-1000ms
    * queryTimeOver1s  执行耗时大于1000ms。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeAt' => 'execute_at',
            'queryTimeIn100ms' => 'query_time_in_100ms',
            'queryTimeIn500ms' => 'query_time_in_500ms',
            'queryTimeIn1s' => 'query_time_in_1s',
            'queryTimeOver1s' => 'query_time_over_1s'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeAt  执行时间点，毫秒时间戳。表示统计数据的时间范围为execute_at到execute_at + interval_millis。
    * queryTimeIn100ms  执行耗时小于100ms。
    * queryTimeIn500ms  执行耗时100ms-500ms。
    * queryTimeIn1s  执行耗时500ms-1000ms
    * queryTimeOver1s  执行耗时大于1000ms。
    *
    * @var string[]
    */
    protected static $setters = [
            'executeAt' => 'setExecuteAt',
            'queryTimeIn100ms' => 'setQueryTimeIn100ms',
            'queryTimeIn500ms' => 'setQueryTimeIn500ms',
            'queryTimeIn1s' => 'setQueryTimeIn1s',
            'queryTimeOver1s' => 'setQueryTimeOver1s'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeAt  执行时间点，毫秒时间戳。表示统计数据的时间范围为execute_at到execute_at + interval_millis。
    * queryTimeIn100ms  执行耗时小于100ms。
    * queryTimeIn500ms  执行耗时100ms-500ms。
    * queryTimeIn1s  执行耗时500ms-1000ms
    * queryTimeOver1s  执行耗时大于1000ms。
    *
    * @var string[]
    */
    protected static $getters = [
            'executeAt' => 'getExecuteAt',
            'queryTimeIn100ms' => 'getQueryTimeIn100ms',
            'queryTimeIn500ms' => 'getQueryTimeIn500ms',
            'queryTimeIn1s' => 'getQueryTimeIn1s',
            'queryTimeOver1s' => 'getQueryTimeOver1s'
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
        $this->container['executeAt'] = isset($data['executeAt']) ? $data['executeAt'] : null;
        $this->container['queryTimeIn100ms'] = isset($data['queryTimeIn100ms']) ? $data['queryTimeIn100ms'] : null;
        $this->container['queryTimeIn500ms'] = isset($data['queryTimeIn500ms']) ? $data['queryTimeIn500ms'] : null;
        $this->container['queryTimeIn1s'] = isset($data['queryTimeIn1s']) ? $data['queryTimeIn1s'] : null;
        $this->container['queryTimeOver1s'] = isset($data['queryTimeOver1s']) ? $data['queryTimeOver1s'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['executeAt'] === null) {
            $invalidProperties[] = "'executeAt' can't be null";
        }
        if ($this->container['queryTimeIn100ms'] === null) {
            $invalidProperties[] = "'queryTimeIn100ms' can't be null";
        }
        if ($this->container['queryTimeIn500ms'] === null) {
            $invalidProperties[] = "'queryTimeIn500ms' can't be null";
        }
        if ($this->container['queryTimeIn1s'] === null) {
            $invalidProperties[] = "'queryTimeIn1s' can't be null";
        }
        if ($this->container['queryTimeOver1s'] === null) {
            $invalidProperties[] = "'queryTimeOver1s' can't be null";
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
    * Gets executeAt
    *  执行时间点，毫秒时间戳。表示统计数据的时间范围为execute_at到execute_at + interval_millis。
    *
    * @return int
    */
    public function getExecuteAt()
    {
        return $this->container['executeAt'];
    }

    /**
    * Sets executeAt
    *
    * @param int $executeAt 执行时间点，毫秒时间戳。表示统计数据的时间范围为execute_at到execute_at + interval_millis。
    *
    * @return $this
    */
    public function setExecuteAt($executeAt)
    {
        $this->container['executeAt'] = $executeAt;
        return $this;
    }

    /**
    * Gets queryTimeIn100ms
    *  执行耗时小于100ms。
    *
    * @return int
    */
    public function getQueryTimeIn100ms()
    {
        return $this->container['queryTimeIn100ms'];
    }

    /**
    * Sets queryTimeIn100ms
    *
    * @param int $queryTimeIn100ms 执行耗时小于100ms。
    *
    * @return $this
    */
    public function setQueryTimeIn100ms($queryTimeIn100ms)
    {
        $this->container['queryTimeIn100ms'] = $queryTimeIn100ms;
        return $this;
    }

    /**
    * Gets queryTimeIn500ms
    *  执行耗时100ms-500ms。
    *
    * @return int
    */
    public function getQueryTimeIn500ms()
    {
        return $this->container['queryTimeIn500ms'];
    }

    /**
    * Sets queryTimeIn500ms
    *
    * @param int $queryTimeIn500ms 执行耗时100ms-500ms。
    *
    * @return $this
    */
    public function setQueryTimeIn500ms($queryTimeIn500ms)
    {
        $this->container['queryTimeIn500ms'] = $queryTimeIn500ms;
        return $this;
    }

    /**
    * Gets queryTimeIn1s
    *  执行耗时500ms-1000ms
    *
    * @return int
    */
    public function getQueryTimeIn1s()
    {
        return $this->container['queryTimeIn1s'];
    }

    /**
    * Sets queryTimeIn1s
    *
    * @param int $queryTimeIn1s 执行耗时500ms-1000ms
    *
    * @return $this
    */
    public function setQueryTimeIn1s($queryTimeIn1s)
    {
        $this->container['queryTimeIn1s'] = $queryTimeIn1s;
        return $this;
    }

    /**
    * Gets queryTimeOver1s
    *  执行耗时大于1000ms。
    *
    * @return int
    */
    public function getQueryTimeOver1s()
    {
        return $this->container['queryTimeOver1s'];
    }

    /**
    * Sets queryTimeOver1s
    *
    * @param int $queryTimeOver1s 执行耗时大于1000ms。
    *
    * @return $this
    */
    public function setQueryTimeOver1s($queryTimeOver1s)
    {
        $this->container['queryTimeOver1s'] = $queryTimeOver1s;
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

