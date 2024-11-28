<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecretTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecretTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * secretName  凭据名称。
    * rotationFuncUrn  FunctionGraph函数的urn。
    * taskStatus  任务状态。
    * attemptNums  任务尝试次数。
    * operateType  轮转类型。
    * taskTime  任务创建时间。
    * taskErrorCode  任务错误码。
    * taskErrorMsg  任务错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'secretName' => 'string',
            'rotationFuncUrn' => 'string',
            'taskStatus' => 'string',
            'attemptNums' => 'int',
            'operateType' => 'string',
            'taskTime' => 'int',
            'taskErrorCode' => 'string',
            'taskErrorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * secretName  凭据名称。
    * rotationFuncUrn  FunctionGraph函数的urn。
    * taskStatus  任务状态。
    * attemptNums  任务尝试次数。
    * operateType  轮转类型。
    * taskTime  任务创建时间。
    * taskErrorCode  任务错误码。
    * taskErrorMsg  任务错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'secretName' => null,
        'rotationFuncUrn' => null,
        'taskStatus' => null,
        'attemptNums' => 'int32',
        'operateType' => null,
        'taskTime' => 'int64',
        'taskErrorCode' => null,
        'taskErrorMsg' => null
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
    * taskId  任务ID
    * secretName  凭据名称。
    * rotationFuncUrn  FunctionGraph函数的urn。
    * taskStatus  任务状态。
    * attemptNums  任务尝试次数。
    * operateType  轮转类型。
    * taskTime  任务创建时间。
    * taskErrorCode  任务错误码。
    * taskErrorMsg  任务错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'secretName' => 'secret_name',
            'rotationFuncUrn' => 'rotation_func_urn',
            'taskStatus' => 'task_status',
            'attemptNums' => 'attempt_nums',
            'operateType' => 'operate_type',
            'taskTime' => 'task_time',
            'taskErrorCode' => 'task_error_code',
            'taskErrorMsg' => 'task_error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * secretName  凭据名称。
    * rotationFuncUrn  FunctionGraph函数的urn。
    * taskStatus  任务状态。
    * attemptNums  任务尝试次数。
    * operateType  轮转类型。
    * taskTime  任务创建时间。
    * taskErrorCode  任务错误码。
    * taskErrorMsg  任务错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'secretName' => 'setSecretName',
            'rotationFuncUrn' => 'setRotationFuncUrn',
            'taskStatus' => 'setTaskStatus',
            'attemptNums' => 'setAttemptNums',
            'operateType' => 'setOperateType',
            'taskTime' => 'setTaskTime',
            'taskErrorCode' => 'setTaskErrorCode',
            'taskErrorMsg' => 'setTaskErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * secretName  凭据名称。
    * rotationFuncUrn  FunctionGraph函数的urn。
    * taskStatus  任务状态。
    * attemptNums  任务尝试次数。
    * operateType  轮转类型。
    * taskTime  任务创建时间。
    * taskErrorCode  任务错误码。
    * taskErrorMsg  任务错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'secretName' => 'getSecretName',
            'rotationFuncUrn' => 'getRotationFuncUrn',
            'taskStatus' => 'getTaskStatus',
            'attemptNums' => 'getAttemptNums',
            'operateType' => 'getOperateType',
            'taskTime' => 'getTaskTime',
            'taskErrorCode' => 'getTaskErrorCode',
            'taskErrorMsg' => 'getTaskErrorMsg'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['rotationFuncUrn'] = isset($data['rotationFuncUrn']) ? $data['rotationFuncUrn'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['attemptNums'] = isset($data['attemptNums']) ? $data['attemptNums'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['taskTime'] = isset($data['taskTime']) ? $data['taskTime'] : null;
        $this->container['taskErrorCode'] = isset($data['taskErrorCode']) ? $data['taskErrorCode'] : null;
        $this->container['taskErrorMsg'] = isset($data['taskErrorMsg']) ? $data['taskErrorMsg'] : null;
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
    * Gets taskId
    *  任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets secretName
    *  凭据名称。
    *
    * @return string|null
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string|null $secretName 凭据名称。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets rotationFuncUrn
    *  FunctionGraph函数的urn。
    *
    * @return string|null
    */
    public function getRotationFuncUrn()
    {
        return $this->container['rotationFuncUrn'];
    }

    /**
    * Sets rotationFuncUrn
    *
    * @param string|null $rotationFuncUrn FunctionGraph函数的urn。
    *
    * @return $this
    */
    public function setRotationFuncUrn($rotationFuncUrn)
    {
        $this->container['rotationFuncUrn'] = $rotationFuncUrn;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态。
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 任务状态。
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets attemptNums
    *  任务尝试次数。
    *
    * @return int|null
    */
    public function getAttemptNums()
    {
        return $this->container['attemptNums'];
    }

    /**
    * Sets attemptNums
    *
    * @param int|null $attemptNums 任务尝试次数。
    *
    * @return $this
    */
    public function setAttemptNums($attemptNums)
    {
        $this->container['attemptNums'] = $attemptNums;
        return $this;
    }

    /**
    * Gets operateType
    *  轮转类型。
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 轮转类型。
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets taskTime
    *  任务创建时间。
    *
    * @return int|null
    */
    public function getTaskTime()
    {
        return $this->container['taskTime'];
    }

    /**
    * Sets taskTime
    *
    * @param int|null $taskTime 任务创建时间。
    *
    * @return $this
    */
    public function setTaskTime($taskTime)
    {
        $this->container['taskTime'] = $taskTime;
        return $this;
    }

    /**
    * Gets taskErrorCode
    *  任务错误码。
    *
    * @return string|null
    */
    public function getTaskErrorCode()
    {
        return $this->container['taskErrorCode'];
    }

    /**
    * Sets taskErrorCode
    *
    * @param string|null $taskErrorCode 任务错误码。
    *
    * @return $this
    */
    public function setTaskErrorCode($taskErrorCode)
    {
        $this->container['taskErrorCode'] = $taskErrorCode;
        return $this;
    }

    /**
    * Gets taskErrorMsg
    *  任务错误信息。
    *
    * @return string|null
    */
    public function getTaskErrorMsg()
    {
        return $this->container['taskErrorMsg'];
    }

    /**
    * Sets taskErrorMsg
    *
    * @param string|null $taskErrorMsg 任务错误信息。
    *
    * @return $this
    */
    public function setTaskErrorMsg($taskErrorMsg)
    {
        $this->container['taskErrorMsg'] = $taskErrorMsg;
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

