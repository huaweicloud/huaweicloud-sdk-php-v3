<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssuableTimeStatsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssuableTimeStatsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeEstimate  合并请求时间估计
    * totalTimeSpent  合并请求总时长
    * humanTimeEstimate  合并请求人类时间估计
    * humanTotalTimeSpent  合并请求人类总时长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeEstimate' => 'int',
            'totalTimeSpent' => 'int',
            'humanTimeEstimate' => 'string',
            'humanTotalTimeSpent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeEstimate  合并请求时间估计
    * totalTimeSpent  合并请求总时长
    * humanTimeEstimate  合并请求人类时间估计
    * humanTotalTimeSpent  合并请求人类总时长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeEstimate' => 'int32',
        'totalTimeSpent' => 'int32',
        'humanTimeEstimate' => null,
        'humanTotalTimeSpent' => null
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
    * timeEstimate  合并请求时间估计
    * totalTimeSpent  合并请求总时长
    * humanTimeEstimate  合并请求人类时间估计
    * humanTotalTimeSpent  合并请求人类总时长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeEstimate' => 'time_estimate',
            'totalTimeSpent' => 'total_time_spent',
            'humanTimeEstimate' => 'human_time_estimate',
            'humanTotalTimeSpent' => 'human_total_time_spent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeEstimate  合并请求时间估计
    * totalTimeSpent  合并请求总时长
    * humanTimeEstimate  合并请求人类时间估计
    * humanTotalTimeSpent  合并请求人类总时长
    *
    * @var string[]
    */
    protected static $setters = [
            'timeEstimate' => 'setTimeEstimate',
            'totalTimeSpent' => 'setTotalTimeSpent',
            'humanTimeEstimate' => 'setHumanTimeEstimate',
            'humanTotalTimeSpent' => 'setHumanTotalTimeSpent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeEstimate  合并请求时间估计
    * totalTimeSpent  合并请求总时长
    * humanTimeEstimate  合并请求人类时间估计
    * humanTotalTimeSpent  合并请求人类总时长
    *
    * @var string[]
    */
    protected static $getters = [
            'timeEstimate' => 'getTimeEstimate',
            'totalTimeSpent' => 'getTotalTimeSpent',
            'humanTimeEstimate' => 'getHumanTimeEstimate',
            'humanTotalTimeSpent' => 'getHumanTotalTimeSpent'
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
        $this->container['timeEstimate'] = isset($data['timeEstimate']) ? $data['timeEstimate'] : null;
        $this->container['totalTimeSpent'] = isset($data['totalTimeSpent']) ? $data['totalTimeSpent'] : null;
        $this->container['humanTimeEstimate'] = isset($data['humanTimeEstimate']) ? $data['humanTimeEstimate'] : null;
        $this->container['humanTotalTimeSpent'] = isset($data['humanTotalTimeSpent']) ? $data['humanTotalTimeSpent'] : null;
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
    * Gets timeEstimate
    *  合并请求时间估计
    *
    * @return int|null
    */
    public function getTimeEstimate()
    {
        return $this->container['timeEstimate'];
    }

    /**
    * Sets timeEstimate
    *
    * @param int|null $timeEstimate 合并请求时间估计
    *
    * @return $this
    */
    public function setTimeEstimate($timeEstimate)
    {
        $this->container['timeEstimate'] = $timeEstimate;
        return $this;
    }

    /**
    * Gets totalTimeSpent
    *  合并请求总时长
    *
    * @return int|null
    */
    public function getTotalTimeSpent()
    {
        return $this->container['totalTimeSpent'];
    }

    /**
    * Sets totalTimeSpent
    *
    * @param int|null $totalTimeSpent 合并请求总时长
    *
    * @return $this
    */
    public function setTotalTimeSpent($totalTimeSpent)
    {
        $this->container['totalTimeSpent'] = $totalTimeSpent;
        return $this;
    }

    /**
    * Gets humanTimeEstimate
    *  合并请求人类时间估计
    *
    * @return string|null
    */
    public function getHumanTimeEstimate()
    {
        return $this->container['humanTimeEstimate'];
    }

    /**
    * Sets humanTimeEstimate
    *
    * @param string|null $humanTimeEstimate 合并请求人类时间估计
    *
    * @return $this
    */
    public function setHumanTimeEstimate($humanTimeEstimate)
    {
        $this->container['humanTimeEstimate'] = $humanTimeEstimate;
        return $this;
    }

    /**
    * Gets humanTotalTimeSpent
    *  合并请求人类总时长
    *
    * @return string|null
    */
    public function getHumanTotalTimeSpent()
    {
        return $this->container['humanTotalTimeSpent'];
    }

    /**
    * Sets humanTotalTimeSpent
    *
    * @param string|null $humanTotalTimeSpent 合并请求人类总时长
    *
    * @return $this
    */
    public function setHumanTotalTimeSpent($humanTotalTimeSpent)
    {
        $this->container['humanTotalTimeSpent'] = $humanTotalTimeSpent;
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

