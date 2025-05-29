<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobBuildTimeResultChart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobBuildTime_result_chart';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dailyBuildNumber  构建每日编号
    * buildNumber  构建编号
    * buildTime  步骤执行时长，单位s
    * buildResult  构建结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dailyBuildNumber' => 'string',
            'buildNumber' => 'int',
            'buildTime' => 'int',
            'buildResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dailyBuildNumber  构建每日编号
    * buildNumber  构建编号
    * buildTime  步骤执行时长，单位s
    * buildResult  构建结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dailyBuildNumber' => null,
        'buildNumber' => 'int32',
        'buildTime' => null,
        'buildResult' => null
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
    * dailyBuildNumber  构建每日编号
    * buildNumber  构建编号
    * buildTime  步骤执行时长，单位s
    * buildResult  构建结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dailyBuildNumber' => 'daily_build_number',
            'buildNumber' => 'build_number',
            'buildTime' => 'build_time',
            'buildResult' => 'build_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dailyBuildNumber  构建每日编号
    * buildNumber  构建编号
    * buildTime  步骤执行时长，单位s
    * buildResult  构建结果
    *
    * @var string[]
    */
    protected static $setters = [
            'dailyBuildNumber' => 'setDailyBuildNumber',
            'buildNumber' => 'setBuildNumber',
            'buildTime' => 'setBuildTime',
            'buildResult' => 'setBuildResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dailyBuildNumber  构建每日编号
    * buildNumber  构建编号
    * buildTime  步骤执行时长，单位s
    * buildResult  构建结果
    *
    * @var string[]
    */
    protected static $getters = [
            'dailyBuildNumber' => 'getDailyBuildNumber',
            'buildNumber' => 'getBuildNumber',
            'buildTime' => 'getBuildTime',
            'buildResult' => 'getBuildResult'
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
        $this->container['dailyBuildNumber'] = isset($data['dailyBuildNumber']) ? $data['dailyBuildNumber'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['buildTime'] = isset($data['buildTime']) ? $data['buildTime'] : null;
        $this->container['buildResult'] = isset($data['buildResult']) ? $data['buildResult'] : null;
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
    * Gets dailyBuildNumber
    *  构建每日编号
    *
    * @return string|null
    */
    public function getDailyBuildNumber()
    {
        return $this->container['dailyBuildNumber'];
    }

    /**
    * Sets dailyBuildNumber
    *
    * @param string|null $dailyBuildNumber 构建每日编号
    *
    * @return $this
    */
    public function setDailyBuildNumber($dailyBuildNumber)
    {
        $this->container['dailyBuildNumber'] = $dailyBuildNumber;
        return $this;
    }

    /**
    * Gets buildNumber
    *  构建编号
    *
    * @return int|null
    */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
    * Sets buildNumber
    *
    * @param int|null $buildNumber 构建编号
    *
    * @return $this
    */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;
        return $this;
    }

    /**
    * Gets buildTime
    *  步骤执行时长，单位s
    *
    * @return int|null
    */
    public function getBuildTime()
    {
        return $this->container['buildTime'];
    }

    /**
    * Sets buildTime
    *
    * @param int|null $buildTime 步骤执行时长，单位s
    *
    * @return $this
    */
    public function setBuildTime($buildTime)
    {
        $this->container['buildTime'] = $buildTime;
        return $this;
    }

    /**
    * Gets buildResult
    *  构建结果
    *
    * @return string|null
    */
    public function getBuildResult()
    {
        return $this->container['buildResult'];
    }

    /**
    * Sets buildResult
    *
    * @param string|null $buildResult 构建结果
    *
    * @return $this
    */
    public function setBuildResult($buildResult)
    {
        $this->container['buildResult'] = $buildResult;
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

