<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBestPracticeStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBestPracticeStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationId  操作Id
    * status  状态：进行中，成功，成败
    * percentageComplete  检测进度
    * errorMessages  错误消息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationId' => 'string',
            'status' => 'string',
            'percentageComplete' => 'int',
            'errorMessages' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationId  操作Id
    * status  状态：进行中，成功，成败
    * percentageComplete  检测进度
    * errorMessages  错误消息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationId' => null,
        'status' => null,
        'percentageComplete' => 'int32',
        'errorMessages' => null
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
    * operationId  操作Id
    * status  状态：进行中，成功，成败
    * percentageComplete  检测进度
    * errorMessages  错误消息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationId' => 'operation_id',
            'status' => 'status',
            'percentageComplete' => 'percentage_complete',
            'errorMessages' => 'error_messages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationId  操作Id
    * status  状态：进行中，成功，成败
    * percentageComplete  检测进度
    * errorMessages  错误消息
    *
    * @var string[]
    */
    protected static $setters = [
            'operationId' => 'setOperationId',
            'status' => 'setStatus',
            'percentageComplete' => 'setPercentageComplete',
            'errorMessages' => 'setErrorMessages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationId  操作Id
    * status  状态：进行中，成功，成败
    * percentageComplete  检测进度
    * errorMessages  错误消息
    *
    * @var string[]
    */
    protected static $getters = [
            'operationId' => 'getOperationId',
            'status' => 'getStatus',
            'percentageComplete' => 'getPercentageComplete',
            'errorMessages' => 'getErrorMessages'
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
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['percentageComplete'] = isset($data['percentageComplete']) ? $data['percentageComplete'] : null;
        $this->container['errorMessages'] = isset($data['errorMessages']) ? $data['errorMessages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['percentageComplete']) && ($this->container['percentageComplete'] > 100)) {
                $invalidProperties[] = "invalid value for 'percentageComplete', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['percentageComplete']) && ($this->container['percentageComplete'] < 0)) {
                $invalidProperties[] = "invalid value for 'percentageComplete', must be bigger than or equal to 0.";
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
    * Gets operationId
    *  操作Id
    *
    * @return string|null
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string|null $operationId 操作Id
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
        return $this;
    }

    /**
    * Gets status
    *  状态：进行中，成功，成败
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
    * @param string|null $status 状态：进行中，成功，成败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets percentageComplete
    *  检测进度
    *
    * @return int|null
    */
    public function getPercentageComplete()
    {
        return $this->container['percentageComplete'];
    }

    /**
    * Sets percentageComplete
    *
    * @param int|null $percentageComplete 检测进度
    *
    * @return $this
    */
    public function setPercentageComplete($percentageComplete)
    {
        $this->container['percentageComplete'] = $percentageComplete;
        return $this;
    }

    /**
    * Gets errorMessages
    *  错误消息
    *
    * @return string[]|null
    */
    public function getErrorMessages()
    {
        return $this->container['errorMessages'];
    }

    /**
    * Sets errorMessages
    *
    * @param string[]|null $errorMessages 错误消息
    *
    * @return $this
    */
    public function setErrorMessages($errorMessages)
    {
        $this->container['errorMessages'] = $errorMessages;
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

