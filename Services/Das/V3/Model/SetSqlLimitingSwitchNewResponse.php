<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetSqlLimitingSwitchNewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetSqlLimitingSwitchNewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOn  开关状态
    * retry  是否需要重试
    * errorMsg  错误信息
    * status  状态
    * detailStatus  详细状态
    * failReason  失败原因
    * jobId  工作流ID
    * jobStatus  工作流状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOn' => 'string',
            'retry' => 'bool',
            'errorMsg' => 'string',
            'status' => 'bool',
            'detailStatus' => 'string',
            'failReason' => 'string',
            'jobId' => 'string',
            'jobStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOn  开关状态
    * retry  是否需要重试
    * errorMsg  错误信息
    * status  状态
    * detailStatus  详细状态
    * failReason  失败原因
    * jobId  工作流ID
    * jobStatus  工作流状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOn' => null,
        'retry' => null,
        'errorMsg' => null,
        'status' => null,
        'detailStatus' => null,
        'failReason' => null,
        'jobId' => null,
        'jobStatus' => null
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
    * switchOn  开关状态
    * retry  是否需要重试
    * errorMsg  错误信息
    * status  状态
    * detailStatus  详细状态
    * failReason  失败原因
    * jobId  工作流ID
    * jobStatus  工作流状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOn' => 'switch_on',
            'retry' => 'retry',
            'errorMsg' => 'error_msg',
            'status' => 'status',
            'detailStatus' => 'detail_status',
            'failReason' => 'fail_reason',
            'jobId' => 'job_id',
            'jobStatus' => 'job_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOn  开关状态
    * retry  是否需要重试
    * errorMsg  错误信息
    * status  状态
    * detailStatus  详细状态
    * failReason  失败原因
    * jobId  工作流ID
    * jobStatus  工作流状态
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOn' => 'setSwitchOn',
            'retry' => 'setRetry',
            'errorMsg' => 'setErrorMsg',
            'status' => 'setStatus',
            'detailStatus' => 'setDetailStatus',
            'failReason' => 'setFailReason',
            'jobId' => 'setJobId',
            'jobStatus' => 'setJobStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOn  开关状态
    * retry  是否需要重试
    * errorMsg  错误信息
    * status  状态
    * detailStatus  详细状态
    * failReason  失败原因
    * jobId  工作流ID
    * jobStatus  工作流状态
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOn' => 'getSwitchOn',
            'retry' => 'getRetry',
            'errorMsg' => 'getErrorMsg',
            'status' => 'getStatus',
            'detailStatus' => 'getDetailStatus',
            'failReason' => 'getFailReason',
            'jobId' => 'getJobId',
            'jobStatus' => 'getJobStatus'
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
        $this->container['switchOn'] = isset($data['switchOn']) ? $data['switchOn'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['detailStatus'] = isset($data['detailStatus']) ? $data['detailStatus'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
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
    * Gets switchOn
    *  开关状态
    *
    * @return string|null
    */
    public function getSwitchOn()
    {
        return $this->container['switchOn'];
    }

    /**
    * Sets switchOn
    *
    * @param string|null $switchOn 开关状态
    *
    * @return $this
    */
    public function setSwitchOn($switchOn)
    {
        $this->container['switchOn'] = $switchOn;
        return $this;
    }

    /**
    * Gets retry
    *  是否需要重试
    *
    * @return bool|null
    */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
    * Sets retry
    *
    * @param bool|null $retry 是否需要重试
    *
    * @return $this
    */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets detailStatus
    *  详细状态
    *
    * @return string|null
    */
    public function getDetailStatus()
    {
        return $this->container['detailStatus'];
    }

    /**
    * Sets detailStatus
    *
    * @param string|null $detailStatus 详细状态
    *
    * @return $this
    */
    public function setDetailStatus($detailStatus)
    {
        $this->container['detailStatus'] = $detailStatus;
        return $this;
    }

    /**
    * Gets failReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets jobId
    *  工作流ID
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
    * @param string|null $jobId 工作流ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobStatus
    *  工作流状态
    *
    * @return string|null
    */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
    * Sets jobStatus
    *
    * @param string|null $jobStatus 工作流状态
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
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

