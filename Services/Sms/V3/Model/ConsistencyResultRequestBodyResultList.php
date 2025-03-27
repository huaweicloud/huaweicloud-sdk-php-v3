<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsistencyResultRequestBodyResultList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsistencyResultRequestBody_result_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * finishedTime  校验完成时间
    * checkResult  校验结果
    * consistencyResult  校验结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'finishedTime' => 'int',
            'checkResult' => 'string',
            'consistencyResult' => '\HuaweiCloud\SDK\Sms\V3\Model\ConsistencyResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * finishedTime  校验完成时间
    * checkResult  校验结果
    * consistencyResult  校验结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'finishedTime' => 'int64',
        'checkResult' => null,
        'consistencyResult' => null
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
    * finishedTime  校验完成时间
    * checkResult  校验结果
    * consistencyResult  校验结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'finishedTime' => 'finished_time',
            'checkResult' => 'check_result',
            'consistencyResult' => 'consistency_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * finishedTime  校验完成时间
    * checkResult  校验结果
    * consistencyResult  校验结果
    *
    * @var string[]
    */
    protected static $setters = [
            'finishedTime' => 'setFinishedTime',
            'checkResult' => 'setCheckResult',
            'consistencyResult' => 'setConsistencyResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * finishedTime  校验完成时间
    * checkResult  校验结果
    * consistencyResult  校验结果
    *
    * @var string[]
    */
    protected static $getters = [
            'finishedTime' => 'getFinishedTime',
            'checkResult' => 'getCheckResult',
            'consistencyResult' => 'getConsistencyResult'
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
        $this->container['finishedTime'] = isset($data['finishedTime']) ? $data['finishedTime'] : null;
        $this->container['checkResult'] = isset($data['checkResult']) ? $data['checkResult'] : null;
        $this->container['consistencyResult'] = isset($data['consistencyResult']) ? $data['consistencyResult'] : null;
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
    * Gets finishedTime
    *  校验完成时间
    *
    * @return int|null
    */
    public function getFinishedTime()
    {
        return $this->container['finishedTime'];
    }

    /**
    * Sets finishedTime
    *
    * @param int|null $finishedTime 校验完成时间
    *
    * @return $this
    */
    public function setFinishedTime($finishedTime)
    {
        $this->container['finishedTime'] = $finishedTime;
        return $this;
    }

    /**
    * Gets checkResult
    *  校验结果
    *
    * @return string|null
    */
    public function getCheckResult()
    {
        return $this->container['checkResult'];
    }

    /**
    * Sets checkResult
    *
    * @param string|null $checkResult 校验结果
    *
    * @return $this
    */
    public function setCheckResult($checkResult)
    {
        $this->container['checkResult'] = $checkResult;
        return $this;
    }

    /**
    * Gets consistencyResult
    *  校验结果
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\ConsistencyResult[]|null
    */
    public function getConsistencyResult()
    {
        return $this->container['consistencyResult'];
    }

    /**
    * Sets consistencyResult
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\ConsistencyResult[]|null $consistencyResult 校验结果
    *
    * @return $this
    */
    public function setConsistencyResult($consistencyResult)
    {
        $this->container['consistencyResult'] = $consistencyResult;
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

