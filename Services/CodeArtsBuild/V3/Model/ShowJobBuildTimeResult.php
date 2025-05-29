<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobBuildTimeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobBuildTime_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * avgBuildTime  平均构建时长
    * maxBuildTime  最长时间
    * minBuildTime  最短时间
    * chart  每日构建数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'avgBuildTime' => 'double',
            'maxBuildTime' => 'int',
            'minBuildTime' => 'int',
            'chart' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildTimeResultChart[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * avgBuildTime  平均构建时长
    * maxBuildTime  最长时间
    * minBuildTime  最短时间
    * chart  每日构建数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'avgBuildTime' => 'double',
        'maxBuildTime' => 'int64',
        'minBuildTime' => 'int64',
        'chart' => null
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
    * jobId  任务ID
    * avgBuildTime  平均构建时长
    * maxBuildTime  最长时间
    * minBuildTime  最短时间
    * chart  每日构建数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'avgBuildTime' => 'avg_build_time',
            'maxBuildTime' => 'max_build_time',
            'minBuildTime' => 'min_build_time',
            'chart' => 'chart'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * avgBuildTime  平均构建时长
    * maxBuildTime  最长时间
    * minBuildTime  最短时间
    * chart  每日构建数据
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'avgBuildTime' => 'setAvgBuildTime',
            'maxBuildTime' => 'setMaxBuildTime',
            'minBuildTime' => 'setMinBuildTime',
            'chart' => 'setChart'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * avgBuildTime  平均构建时长
    * maxBuildTime  最长时间
    * minBuildTime  最短时间
    * chart  每日构建数据
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'avgBuildTime' => 'getAvgBuildTime',
            'maxBuildTime' => 'getMaxBuildTime',
            'minBuildTime' => 'getMinBuildTime',
            'chart' => 'getChart'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['avgBuildTime'] = isset($data['avgBuildTime']) ? $data['avgBuildTime'] : null;
        $this->container['maxBuildTime'] = isset($data['maxBuildTime']) ? $data['maxBuildTime'] : null;
        $this->container['minBuildTime'] = isset($data['minBuildTime']) ? $data['minBuildTime'] : null;
        $this->container['chart'] = isset($data['chart']) ? $data['chart'] : null;
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
    * Gets jobId
    *  任务ID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets avgBuildTime
    *  平均构建时长
    *
    * @return double|null
    */
    public function getAvgBuildTime()
    {
        return $this->container['avgBuildTime'];
    }

    /**
    * Sets avgBuildTime
    *
    * @param double|null $avgBuildTime 平均构建时长
    *
    * @return $this
    */
    public function setAvgBuildTime($avgBuildTime)
    {
        $this->container['avgBuildTime'] = $avgBuildTime;
        return $this;
    }

    /**
    * Gets maxBuildTime
    *  最长时间
    *
    * @return int|null
    */
    public function getMaxBuildTime()
    {
        return $this->container['maxBuildTime'];
    }

    /**
    * Sets maxBuildTime
    *
    * @param int|null $maxBuildTime 最长时间
    *
    * @return $this
    */
    public function setMaxBuildTime($maxBuildTime)
    {
        $this->container['maxBuildTime'] = $maxBuildTime;
        return $this;
    }

    /**
    * Gets minBuildTime
    *  最短时间
    *
    * @return int|null
    */
    public function getMinBuildTime()
    {
        return $this->container['minBuildTime'];
    }

    /**
    * Sets minBuildTime
    *
    * @param int|null $minBuildTime 最短时间
    *
    * @return $this
    */
    public function setMinBuildTime($minBuildTime)
    {
        $this->container['minBuildTime'] = $minBuildTime;
        return $this;
    }

    /**
    * Gets chart
    *  每日构建数据
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildTimeResultChart[]|null
    */
    public function getChart()
    {
        return $this->container['chart'];
    }

    /**
    * Sets chart
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowJobBuildTimeResultChart[]|null $chart 每日构建数据
    *
    * @return $this
    */
    public function setChart($chart)
    {
        $this->container['chart'] = $chart;
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

