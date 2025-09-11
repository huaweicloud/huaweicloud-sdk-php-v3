<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountRiskTrendStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountRiskTrendStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * generateTime  生成时间
    * riskStatistics  数据列表
    * status  状态  - FINISHED：已完成  - RUNNING：运行中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'generateTime' => 'string',
            'riskStatistics' => '\HuaweiCloud\SDK\Dbss\V1\Model\RiskStatisticsBean[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * generateTime  生成时间
    * riskStatistics  数据列表
    * status  状态  - FINISHED：已完成  - RUNNING：运行中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'generateTime' => null,
        'riskStatistics' => null,
        'status' => null
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
    * generateTime  生成时间
    * riskStatistics  数据列表
    * status  状态  - FINISHED：已完成  - RUNNING：运行中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'generateTime' => 'generate_time',
            'riskStatistics' => 'risk_statistics',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * generateTime  生成时间
    * riskStatistics  数据列表
    * status  状态  - FINISHED：已完成  - RUNNING：运行中
    *
    * @var string[]
    */
    protected static $setters = [
            'generateTime' => 'setGenerateTime',
            'riskStatistics' => 'setRiskStatistics',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * generateTime  生成时间
    * riskStatistics  数据列表
    * status  状态  - FINISHED：已完成  - RUNNING：运行中
    *
    * @var string[]
    */
    protected static $getters = [
            'generateTime' => 'getGenerateTime',
            'riskStatistics' => 'getRiskStatistics',
            'status' => 'getStatus'
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
        $this->container['generateTime'] = isset($data['generateTime']) ? $data['generateTime'] : null;
        $this->container['riskStatistics'] = isset($data['riskStatistics']) ? $data['riskStatistics'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets generateTime
    *  生成时间
    *
    * @return string|null
    */
    public function getGenerateTime()
    {
        return $this->container['generateTime'];
    }

    /**
    * Sets generateTime
    *
    * @param string|null $generateTime 生成时间
    *
    * @return $this
    */
    public function setGenerateTime($generateTime)
    {
        $this->container['generateTime'] = $generateTime;
        return $this;
    }

    /**
    * Gets riskStatistics
    *  数据列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\RiskStatisticsBean[]|null
    */
    public function getRiskStatistics()
    {
        return $this->container['riskStatistics'];
    }

    /**
    * Sets riskStatistics
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\RiskStatisticsBean[]|null $riskStatistics 数据列表
    *
    * @return $this
    */
    public function setRiskStatistics($riskStatistics)
    {
        $this->container['riskStatistics'] = $riskStatistics;
        return $this;
    }

    /**
    * Gets status
    *  状态  - FINISHED：已完成  - RUNNING：运行中
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态  - FINISHED：已完成  - RUNNING：运行中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

