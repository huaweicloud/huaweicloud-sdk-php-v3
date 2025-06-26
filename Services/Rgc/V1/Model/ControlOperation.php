<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ControlOperation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ControlOperation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationControlStatusId  本次操作控制策略的ID。
    * operationType  操作类型，启用控制策略或禁用控制策略。
    * status  控制策略实施的状态 SUCCEEDED | FAILED | IN_PROGRESS。
    * message  控制策略实施失败的错误信息。
    * startTime  操作开始的时间。
    * endTime  操作结束的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationControlStatusId' => 'string',
            'operationType' => 'string',
            'status' => 'string',
            'message' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationControlStatusId  本次操作控制策略的ID。
    * operationType  操作类型，启用控制策略或禁用控制策略。
    * status  控制策略实施的状态 SUCCEEDED | FAILED | IN_PROGRESS。
    * message  控制策略实施失败的错误信息。
    * startTime  操作开始的时间。
    * endTime  操作结束的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationControlStatusId' => null,
        'operationType' => null,
        'status' => null,
        'message' => null,
        'startTime' => null,
        'endTime' => null
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
    * operationControlStatusId  本次操作控制策略的ID。
    * operationType  操作类型，启用控制策略或禁用控制策略。
    * status  控制策略实施的状态 SUCCEEDED | FAILED | IN_PROGRESS。
    * message  控制策略实施失败的错误信息。
    * startTime  操作开始的时间。
    * endTime  操作结束的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationControlStatusId' => 'operation_control_status_id',
            'operationType' => 'operation_type',
            'status' => 'status',
            'message' => 'message',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationControlStatusId  本次操作控制策略的ID。
    * operationType  操作类型，启用控制策略或禁用控制策略。
    * status  控制策略实施的状态 SUCCEEDED | FAILED | IN_PROGRESS。
    * message  控制策略实施失败的错误信息。
    * startTime  操作开始的时间。
    * endTime  操作结束的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'operationControlStatusId' => 'setOperationControlStatusId',
            'operationType' => 'setOperationType',
            'status' => 'setStatus',
            'message' => 'setMessage',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationControlStatusId  本次操作控制策略的ID。
    * operationType  操作类型，启用控制策略或禁用控制策略。
    * status  控制策略实施的状态 SUCCEEDED | FAILED | IN_PROGRESS。
    * message  控制策略实施失败的错误信息。
    * startTime  操作开始的时间。
    * endTime  操作结束的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'operationControlStatusId' => 'getOperationControlStatusId',
            'operationType' => 'getOperationType',
            'status' => 'getStatus',
            'message' => 'getMessage',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['operationControlStatusId'] = isset($data['operationControlStatusId']) ? $data['operationControlStatusId'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operationControlStatusId']) && (mb_strlen($this->container['operationControlStatusId']) > 64)) {
                $invalidProperties[] = "invalid value for 'operationControlStatusId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operationControlStatusId']) && (mb_strlen($this->container['operationControlStatusId']) < 1)) {
                $invalidProperties[] = "invalid value for 'operationControlStatusId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operationType']) && (mb_strlen($this->container['operationType']) > 64)) {
                $invalidProperties[] = "invalid value for 'operationType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operationType']) && (mb_strlen($this->container['operationType']) < 1)) {
                $invalidProperties[] = "invalid value for 'operationType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 2048)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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
    * Gets operationControlStatusId
    *  本次操作控制策略的ID。
    *
    * @return string|null
    */
    public function getOperationControlStatusId()
    {
        return $this->container['operationControlStatusId'];
    }

    /**
    * Sets operationControlStatusId
    *
    * @param string|null $operationControlStatusId 本次操作控制策略的ID。
    *
    * @return $this
    */
    public function setOperationControlStatusId($operationControlStatusId)
    {
        $this->container['operationControlStatusId'] = $operationControlStatusId;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型，启用控制策略或禁用控制策略。
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 操作类型，启用控制策略或禁用控制策略。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets status
    *  控制策略实施的状态 SUCCEEDED | FAILED | IN_PROGRESS。
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
    * @param string|null $status 控制策略实施的状态 SUCCEEDED | FAILED | IN_PROGRESS。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  控制策略实施失败的错误信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 控制策略实施失败的错误信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets startTime
    *  操作开始的时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 操作开始的时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  操作结束的时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 操作结束的时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

