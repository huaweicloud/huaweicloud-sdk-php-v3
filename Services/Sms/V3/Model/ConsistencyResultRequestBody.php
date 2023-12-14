<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsistencyResultRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsistencyResultRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consistencyResult  校验结果
    * finishedTime  检验完成时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consistencyResult' => '\HuaweiCloud\SDK\Sms\V3\Model\ConsistencyResult[]',
            'finishedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consistencyResult  校验结果
    * finishedTime  检验完成时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consistencyResult' => null,
        'finishedTime' => 'int64'
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
    * consistencyResult  校验结果
    * finishedTime  检验完成时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consistencyResult' => 'consistency_result',
            'finishedTime' => 'finished_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consistencyResult  校验结果
    * finishedTime  检验完成时间
    *
    * @var string[]
    */
    protected static $setters = [
            'consistencyResult' => 'setConsistencyResult',
            'finishedTime' => 'setFinishedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consistencyResult  校验结果
    * finishedTime  检验完成时间
    *
    * @var string[]
    */
    protected static $getters = [
            'consistencyResult' => 'getConsistencyResult',
            'finishedTime' => 'getFinishedTime'
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
        $this->container['consistencyResult'] = isset($data['consistencyResult']) ? $data['consistencyResult'] : null;
        $this->container['finishedTime'] = isset($data['finishedTime']) ? $data['finishedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['consistencyResult'] === null) {
            $invalidProperties[] = "'consistencyResult' can't be null";
        }
        if ($this->container['finishedTime'] === null) {
            $invalidProperties[] = "'finishedTime' can't be null";
        }
            if (($this->container['finishedTime'] > 100000000000)) {
                $invalidProperties[] = "invalid value for 'finishedTime', must be smaller than or equal to 100000000000.";
            }
            if (($this->container['finishedTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'finishedTime', must be bigger than or equal to 0.";
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
    * Gets consistencyResult
    *  校验结果
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\ConsistencyResult[]
    */
    public function getConsistencyResult()
    {
        return $this->container['consistencyResult'];
    }

    /**
    * Sets consistencyResult
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\ConsistencyResult[] $consistencyResult 校验结果
    *
    * @return $this
    */
    public function setConsistencyResult($consistencyResult)
    {
        $this->container['consistencyResult'] = $consistencyResult;
        return $this;
    }

    /**
    * Gets finishedTime
    *  检验完成时间
    *
    * @return int
    */
    public function getFinishedTime()
    {
        return $this->container['finishedTime'];
    }

    /**
    * Sets finishedTime
    *
    * @param int $finishedTime 检验完成时间
    *
    * @return $this
    */
    public function setFinishedTime($finishedTime)
    {
        $this->container['finishedTime'] = $finishedTime;
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

