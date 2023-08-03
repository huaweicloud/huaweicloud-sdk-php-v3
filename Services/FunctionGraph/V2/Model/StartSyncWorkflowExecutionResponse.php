<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartSyncWorkflowExecutionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartSyncWorkflowExecutionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionId  流程实例ID
    * status  流程执行最终状态
    * output  函数流的执行结果，JSON格式，仅在status为success时有值
    * errors  流程执行错误信息，仅在status为fail时有值
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionId' => 'string',
            'status' => 'string',
            'output' => 'object',
            'errors' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SyncExecutionNodeErrorDetail[]',
            'beginTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionId  流程实例ID
    * status  流程执行最终状态
    * output  函数流的执行结果，JSON格式，仅在status为success时有值
    * errors  流程执行错误信息，仅在status为fail时有值
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionId' => null,
        'status' => null,
        'output' => null,
        'errors' => null,
        'beginTime' => null,
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
    * executionId  流程实例ID
    * status  流程执行最终状态
    * output  函数流的执行结果，JSON格式，仅在status为success时有值
    * errors  流程执行错误信息，仅在status为fail时有值
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionId' => 'execution_id',
            'status' => 'status',
            'output' => 'output',
            'errors' => 'errors',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionId  流程实例ID
    * status  流程执行最终状态
    * output  函数流的执行结果，JSON格式，仅在status为success时有值
    * errors  流程执行错误信息，仅在status为fail时有值
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @var string[]
    */
    protected static $setters = [
            'executionId' => 'setExecutionId',
            'status' => 'setStatus',
            'output' => 'setOutput',
            'errors' => 'setErrors',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionId  流程实例ID
    * status  流程执行最终状态
    * output  函数流的执行结果，JSON格式，仅在status为success时有值
    * errors  流程执行错误信息，仅在status为fail时有值
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @var string[]
    */
    protected static $getters = [
            'executionId' => 'getExecutionId',
            'status' => 'getStatus',
            'output' => 'getOutput',
            'errors' => 'getErrors',
            'beginTime' => 'getBeginTime',
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
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';
    const STATUS_TIMEOUT = 'timeout';
    

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
            self::STATUS_TIMEOUT,
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
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
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
            if (!is_null($this->container['executionId']) && (mb_strlen($this->container['executionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['executionId']) && (mb_strlen($this->container['executionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
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
    * Gets executionId
    *  流程实例ID
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 流程实例ID
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets status
    *  流程执行最终状态
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
    * @param string|null $status 流程执行最终状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets output
    *  函数流的执行结果，JSON格式，仅在status为success时有值
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
    * @param object|null $output 函数流的执行结果，JSON格式，仅在status为success时有值
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets errors
    *  流程执行错误信息，仅在status为fail时有值
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SyncExecutionNodeErrorDetail[]|null
    */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
    * Sets errors
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SyncExecutionNodeErrorDetail[]|null $errors 流程执行错误信息，仅在status为fail时有值
    *
    * @return $this
    */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;
        return $this;
    }

    /**
    * Gets beginTime
    *  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
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
    *  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
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
    * @param string|null $endTime 流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
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

