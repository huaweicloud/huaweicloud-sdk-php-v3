<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UCSTaskSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UCSTaskSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  所属job的ID
    * target  执行目标
    * targetType  执行目标类型
    * waitTimeOut  Task执行等待时间，单位：秒
    * type  Task类别
    * runway  执行方式：parallel和serial二选一
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'target' => 'string',
            'targetType' => 'string',
            'waitTimeOut' => 'int',
            'type' => 'string',
            'runway' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  所属job的ID
    * target  执行目标
    * targetType  执行目标类型
    * waitTimeOut  Task执行等待时间，单位：秒
    * type  Task类别
    * runway  执行方式：parallel和serial二选一
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'target' => null,
        'targetType' => null,
        'waitTimeOut' => 'int32',
        'type' => null,
        'runway' => null
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
    * jobId  所属job的ID
    * target  执行目标
    * targetType  执行目标类型
    * waitTimeOut  Task执行等待时间，单位：秒
    * type  Task类别
    * runway  执行方式：parallel和serial二选一
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'jobID',
            'target' => 'target',
            'targetType' => 'targetType',
            'waitTimeOut' => 'waitTimeOut',
            'type' => 'type',
            'runway' => 'runway'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  所属job的ID
    * target  执行目标
    * targetType  执行目标类型
    * waitTimeOut  Task执行等待时间，单位：秒
    * type  Task类别
    * runway  执行方式：parallel和serial二选一
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'target' => 'setTarget',
            'targetType' => 'setTargetType',
            'waitTimeOut' => 'setWaitTimeOut',
            'type' => 'setType',
            'runway' => 'setRunway'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  所属job的ID
    * target  执行目标
    * targetType  执行目标类型
    * waitTimeOut  Task执行等待时间，单位：秒
    * type  Task类别
    * runway  执行方式：parallel和serial二选一
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'target' => 'getTarget',
            'targetType' => 'getTargetType',
            'waitTimeOut' => 'getWaitTimeOut',
            'type' => 'getType',
            'runway' => 'getRunway'
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['waitTimeOut'] = isset($data['waitTimeOut']) ? $data['waitTimeOut'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['runway'] = isset($data['runway']) ? $data['runway'] : null;
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
    *  所属job的ID
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
    * @param string|null $jobId 所属job的ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets target
    *  执行目标
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target 执行目标
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets targetType
    *  执行目标类型
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 执行目标类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets waitTimeOut
    *  Task执行等待时间，单位：秒
    *
    * @return int|null
    */
    public function getWaitTimeOut()
    {
        return $this->container['waitTimeOut'];
    }

    /**
    * Sets waitTimeOut
    *
    * @param int|null $waitTimeOut Task执行等待时间，单位：秒
    *
    * @return $this
    */
    public function setWaitTimeOut($waitTimeOut)
    {
        $this->container['waitTimeOut'] = $waitTimeOut;
        return $this;
    }

    /**
    * Gets type
    *  Task类别
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type Task类别
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets runway
    *  执行方式：parallel和serial二选一
    *
    * @return string|null
    */
    public function getRunway()
    {
        return $this->container['runway'];
    }

    /**
    * Sets runway
    *
    * @param string|null $runway 执行方式：parallel和serial二选一
    *
    * @return $this
    */
    public function setRunway($runway)
    {
        $this->container['runway'] = $runway;
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

