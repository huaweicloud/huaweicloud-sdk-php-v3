<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeExecution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  流程节点执行状态
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  节点启动时间，UTC毫秒时间戳格式
    * endTime  节点结束时间，UTC毫秒时间戳格式
    * errorMessage  节点错误信息，仅在节点出错时非空
    * requestId  流程节点请求ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'input' => 'object',
            'output' => 'object',
            'beginTime' => 'int',
            'endTime' => 'int',
            'errorMessage' => 'object',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  流程节点执行状态
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  节点启动时间，UTC毫秒时间戳格式
    * endTime  节点结束时间，UTC毫秒时间戳格式
    * errorMessage  节点错误信息，仅在节点出错时非空
    * requestId  流程节点请求ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'input' => null,
        'output' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'errorMessage' => null,
        'requestId' => null
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
    * status  流程节点执行状态
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  节点启动时间，UTC毫秒时间戳格式
    * endTime  节点结束时间，UTC毫秒时间戳格式
    * errorMessage  节点错误信息，仅在节点出错时非空
    * requestId  流程节点请求ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'input' => 'input',
            'output' => 'output',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'errorMessage' => 'error_message',
            'requestId' => 'request_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  流程节点执行状态
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  节点启动时间，UTC毫秒时间戳格式
    * endTime  节点结束时间，UTC毫秒时间戳格式
    * errorMessage  节点错误信息，仅在节点出错时非空
    * requestId  流程节点请求ID
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'input' => 'setInput',
            'output' => 'setOutput',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'errorMessage' => 'setErrorMessage',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  流程节点执行状态
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  节点启动时间，UTC毫秒时间戳格式
    * endTime  节点结束时间，UTC毫秒时间戳格式
    * errorMessage  节点错误信息，仅在节点出错时非空
    * requestId  流程节点请求ID
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'input' => 'getInput',
            'output' => 'getOutput',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'errorMessage' => 'getErrorMessage',
            'requestId' => 'getRequestId'
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
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';
    const STATUS_RUNNING = 'running';
    const STATUS_TIMEOUT = 'timeout';
    const STATUS_CANCEL = 'cancel';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_RUNNING,
            self::STATUS_TIMEOUT,
            self::STATUS_CANCEL,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] > 99999999999999999)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be smaller than or equal to 99999999999999999.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 99999999999999999)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 99999999999999999.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
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
    * Gets status
    *  流程节点执行状态
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
    * @param string|null $status 流程节点执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets input
    *  函数执行时的入参
    *
    * @return object|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param object|null $input 函数执行时的入参
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  函数执行结果
    *
    * @return object|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param object|null $output 函数执行结果
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets beginTime
    *  节点启动时间，UTC毫秒时间戳格式
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 节点启动时间，UTC毫秒时间戳格式
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  节点结束时间，UTC毫秒时间戳格式
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 节点结束时间，UTC毫秒时间戳格式
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets errorMessage
    *  节点错误信息，仅在节点出错时非空
    *
    * @return object|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param object|null $errorMessage 节点错误信息，仅在节点出错时非空
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets requestId
    *  流程节点请求ID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 流程节点请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
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

