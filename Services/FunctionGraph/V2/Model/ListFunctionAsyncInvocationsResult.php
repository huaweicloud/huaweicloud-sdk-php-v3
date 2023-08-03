<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFunctionAsyncInvocationsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFunctionAsyncInvocationsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  异步调用请求ID
    * status  异步调用状态，支持5种状态 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * errorMessage  异步调用错误信息，如果执行成功，则返回空
    * errorCode  异步调用错误码，如果执行成功，则返回0
    * startTime  异步调用开始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    * endTime  异步调用结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'status' => 'string',
            'errorMessage' => 'string',
            'errorCode' => 'int',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  异步调用请求ID
    * status  异步调用状态，支持5种状态 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * errorMessage  异步调用错误信息，如果执行成功，则返回空
    * errorCode  异步调用错误码，如果执行成功，则返回0
    * startTime  异步调用开始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    * endTime  异步调用结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'status' => null,
        'errorMessage' => null,
        'errorCode' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time'
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
    * requestId  异步调用请求ID
    * status  异步调用状态，支持5种状态 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * errorMessage  异步调用错误信息，如果执行成功，则返回空
    * errorCode  异步调用错误码，如果执行成功，则返回0
    * startTime  异步调用开始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    * endTime  异步调用结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'status' => 'status',
            'errorMessage' => 'error_message',
            'errorCode' => 'error_code',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  异步调用请求ID
    * status  异步调用状态，支持5种状态 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * errorMessage  异步调用错误信息，如果执行成功，则返回空
    * errorCode  异步调用错误码，如果执行成功，则返回0
    * startTime  异步调用开始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    * endTime  异步调用结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'status' => 'setStatus',
            'errorMessage' => 'setErrorMessage',
            'errorCode' => 'setErrorCode',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  异步调用请求ID
    * status  异步调用状态，支持5种状态 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    * errorMessage  异步调用错误信息，如果执行成功，则返回空
    * errorCode  异步调用错误码，如果执行成功，则返回0
    * startTime  异步调用开始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    * endTime  异步调用结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'status' => 'getStatus',
            'errorMessage' => 'getErrorMessage',
            'errorCode' => 'getErrorCode',
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
    const STATUS_WAIT = 'WAIT';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAIL = 'FAIL';
    const STATUS_DISCARD = 'DISCARD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAIT,
            self::STATUS_RUNNING,
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_DISCARD,
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets requestId
    *  异步调用请求ID
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
    * @param string|null $requestId 异步调用请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets status
    *  异步调用状态，支持5种状态 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
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
    * @param string|null $status 异步调用状态，支持5种状态 WAIT: 等待 RUNNING: 执行中 SUCCESS: 执行成功 FAIL: 执行失败 DISCARD: 请求丢弃
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorMessage
    *  异步调用错误信息，如果执行成功，则返回空
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 异步调用错误信息，如果执行成功，则返回空
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets errorCode
    *  异步调用错误码，如果执行成功，则返回0
    *
    * @return int|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param int|null $errorCode 异步调用错误码，如果执行成功，则返回0
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets startTime
    *  异步调用开始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 异步调用开始时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
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
    *  异步调用结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 异步调用结束时间（格式为YYYY-MM-DD'T'HH:mm:ss,UTC时间）。
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

