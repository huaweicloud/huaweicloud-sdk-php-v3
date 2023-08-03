<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTenantMetricResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTenantMetricResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  执行次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * runningCount  运行中数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'duration' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'failCount' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'runningCount' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  执行次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * runningCount  运行中数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'duration' => null,
        'failCount' => null,
        'runningCount' => null
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
    * count  执行次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * runningCount  运行中数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'duration' => 'duration',
            'failCount' => 'fail_count',
            'runningCount' => 'running_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  执行次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * runningCount  运行中数量
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'duration' => 'setDuration',
            'failCount' => 'setFailCount',
            'runningCount' => 'setRunningCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  执行次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * runningCount  运行中数量
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'duration' => 'getDuration',
            'failCount' => 'getFailCount',
            'runningCount' => 'getRunningCount'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['failCount'] = isset($data['failCount']) ? $data['failCount'] : null;
        $this->container['runningCount'] = isset($data['runningCount']) ? $data['runningCount'] : null;
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
    * Gets count
    *  执行次数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $count 执行次数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets duration
    *  平均时延，单位毫秒
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $duration 平均时延，单位毫秒
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets failCount
    *  错误次数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getFailCount()
    {
        return $this->container['failCount'];
    }

    /**
    * Sets failCount
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $failCount 错误次数
    *
    * @return $this
    */
    public function setFailCount($failCount)
    {
        $this->container['failCount'] = $failCount;
        return $this;
    }

    /**
    * Gets runningCount
    *  运行中数量
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getRunningCount()
    {
        return $this->container['runningCount'];
    }

    /**
    * Sets runningCount
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $runningCount 运行中数量
    *
    * @return $this
    */
    public function setRunningCount($runningCount)
    {
        $this->container['runningCount'] = $runningCount;
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

