<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PcrTestRecordConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PcrTestRecordConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名的置信度
    * samplingTime  核酸检测采样时间的置信度
    * testTime  核酸检测结果更新时间的置信度
    * testResult  核酸检测结果的置信度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'float',
            'samplingTime' => 'float',
            'testTime' => 'float',
            'testResult' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名的置信度
    * samplingTime  核酸检测采样时间的置信度
    * testTime  核酸检测结果更新时间的置信度
    * testResult  核酸检测结果的置信度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => 'float',
        'samplingTime' => 'float',
        'testTime' => 'float',
        'testResult' => 'float'
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
    * name  姓名的置信度
    * samplingTime  核酸检测采样时间的置信度
    * testTime  核酸检测结果更新时间的置信度
    * testResult  核酸检测结果的置信度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'samplingTime' => 'sampling_time',
            'testTime' => 'test_time',
            'testResult' => 'test_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名的置信度
    * samplingTime  核酸检测采样时间的置信度
    * testTime  核酸检测结果更新时间的置信度
    * testResult  核酸检测结果的置信度
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'samplingTime' => 'setSamplingTime',
            'testTime' => 'setTestTime',
            'testResult' => 'setTestResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名的置信度
    * samplingTime  核酸检测采样时间的置信度
    * testTime  核酸检测结果更新时间的置信度
    * testResult  核酸检测结果的置信度
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'samplingTime' => 'getSamplingTime',
            'testTime' => 'getTestTime',
            'testResult' => 'getTestResult'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['samplingTime'] = isset($data['samplingTime']) ? $data['samplingTime'] : null;
        $this->container['testTime'] = isset($data['testTime']) ? $data['testTime'] : null;
        $this->container['testResult'] = isset($data['testResult']) ? $data['testResult'] : null;
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
    * Gets name
    *  姓名的置信度
    *
    * @return float|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param float|null $name 姓名的置信度
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets samplingTime
    *  核酸检测采样时间的置信度
    *
    * @return float|null
    */
    public function getSamplingTime()
    {
        return $this->container['samplingTime'];
    }

    /**
    * Sets samplingTime
    *
    * @param float|null $samplingTime 核酸检测采样时间的置信度
    *
    * @return $this
    */
    public function setSamplingTime($samplingTime)
    {
        $this->container['samplingTime'] = $samplingTime;
        return $this;
    }

    /**
    * Gets testTime
    *  核酸检测结果更新时间的置信度
    *
    * @return float|null
    */
    public function getTestTime()
    {
        return $this->container['testTime'];
    }

    /**
    * Sets testTime
    *
    * @param float|null $testTime 核酸检测结果更新时间的置信度
    *
    * @return $this
    */
    public function setTestTime($testTime)
    {
        $this->container['testTime'] = $testTime;
        return $this;
    }

    /**
    * Gets testResult
    *  核酸检测结果的置信度
    *
    * @return float|null
    */
    public function getTestResult()
    {
        return $this->container['testResult'];
    }

    /**
    * Sets testResult
    *
    * @param float|null $testResult 核酸检测结果的置信度
    *
    * @return $this
    */
    public function setTestResult($testResult)
    {
        $this->container['testResult'] = $testResult;
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

