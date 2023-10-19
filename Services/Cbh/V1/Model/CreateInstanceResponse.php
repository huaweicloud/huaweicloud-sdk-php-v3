<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceKey  云堡垒机实例key。
    * slaveInstanceKey  云堡垒机备机实例key。（当前字段未启用，返回默认值null）
    * requestInfo  返回创建云堡垒机实例信息。
    * jobId  job任务ID。（当前字段未启用，返回默认值null）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceKey' => 'int',
            'slaveInstanceKey' => 'int',
            'requestInfo' => 'int',
            'jobId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceKey  云堡垒机实例key。
    * slaveInstanceKey  云堡垒机备机实例key。（当前字段未启用，返回默认值null）
    * requestInfo  返回创建云堡垒机实例信息。
    * jobId  job任务ID。（当前字段未启用，返回默认值null）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceKey' => null,
        'slaveInstanceKey' => null,
        'requestInfo' => null,
        'jobId' => null
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
    * instanceKey  云堡垒机实例key。
    * slaveInstanceKey  云堡垒机备机实例key。（当前字段未启用，返回默认值null）
    * requestInfo  返回创建云堡垒机实例信息。
    * jobId  job任务ID。（当前字段未启用，返回默认值null）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceKey' => 'instance_key',
            'slaveInstanceKey' => 'slave_instance_key',
            'requestInfo' => 'request_info',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceKey  云堡垒机实例key。
    * slaveInstanceKey  云堡垒机备机实例key。（当前字段未启用，返回默认值null）
    * requestInfo  返回创建云堡垒机实例信息。
    * jobId  job任务ID。（当前字段未启用，返回默认值null）
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceKey' => 'setInstanceKey',
            'slaveInstanceKey' => 'setSlaveInstanceKey',
            'requestInfo' => 'setRequestInfo',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceKey  云堡垒机实例key。
    * slaveInstanceKey  云堡垒机备机实例key。（当前字段未启用，返回默认值null）
    * requestInfo  返回创建云堡垒机实例信息。
    * jobId  job任务ID。（当前字段未启用，返回默认值null）
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceKey' => 'getInstanceKey',
            'slaveInstanceKey' => 'getSlaveInstanceKey',
            'requestInfo' => 'getRequestInfo',
            'jobId' => 'getJobId'
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
        $this->container['instanceKey'] = isset($data['instanceKey']) ? $data['instanceKey'] : null;
        $this->container['slaveInstanceKey'] = isset($data['slaveInstanceKey']) ? $data['slaveInstanceKey'] : null;
        $this->container['requestInfo'] = isset($data['requestInfo']) ? $data['requestInfo'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
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
    * Gets instanceKey
    *  云堡垒机实例key。
    *
    * @return int|null
    */
    public function getInstanceKey()
    {
        return $this->container['instanceKey'];
    }

    /**
    * Sets instanceKey
    *
    * @param int|null $instanceKey 云堡垒机实例key。
    *
    * @return $this
    */
    public function setInstanceKey($instanceKey)
    {
        $this->container['instanceKey'] = $instanceKey;
        return $this;
    }

    /**
    * Gets slaveInstanceKey
    *  云堡垒机备机实例key。（当前字段未启用，返回默认值null）
    *
    * @return int|null
    */
    public function getSlaveInstanceKey()
    {
        return $this->container['slaveInstanceKey'];
    }

    /**
    * Sets slaveInstanceKey
    *
    * @param int|null $slaveInstanceKey 云堡垒机备机实例key。（当前字段未启用，返回默认值null）
    *
    * @return $this
    */
    public function setSlaveInstanceKey($slaveInstanceKey)
    {
        $this->container['slaveInstanceKey'] = $slaveInstanceKey;
        return $this;
    }

    /**
    * Gets requestInfo
    *  返回创建云堡垒机实例信息。
    *
    * @return int|null
    */
    public function getRequestInfo()
    {
        return $this->container['requestInfo'];
    }

    /**
    * Sets requestInfo
    *
    * @param int|null $requestInfo 返回创建云堡垒机实例信息。
    *
    * @return $this
    */
    public function setRequestInfo($requestInfo)
    {
        $this->container['requestInfo'] = $requestInfo;
        return $this;
    }

    /**
    * Gets jobId
    *  job任务ID。（当前字段未启用，返回默认值null）
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId job任务ID。（当前字段未启用，返回默认值null）
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

