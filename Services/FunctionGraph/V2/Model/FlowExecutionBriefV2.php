<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowExecutionBriefV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowExecutionBriefV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  函数流ID
    * executionId  函数流执行ID
    * status  函数流执行状态
    * beginTime  开始时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * endTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * lastUpdateTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * createdBy  createdBy
    * workflowUrn  函数流执行urn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'executionId' => 'string',
            'status' => 'string',
            'beginTime' => '\DateTime',
            'endTime' => '\DateTime',
            'lastUpdateTime' => '\DateTime',
            'createdBy' => 'string',
            'workflowUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  函数流ID
    * executionId  函数流执行ID
    * status  函数流执行状态
    * beginTime  开始时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * endTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * lastUpdateTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * createdBy  createdBy
    * workflowUrn  函数流执行urn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'executionId' => null,
        'status' => null,
        'beginTime' => 'date-time',
        'endTime' => 'date-time',
        'lastUpdateTime' => 'date-time',
        'createdBy' => null,
        'workflowUrn' => null
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
    * workflowId  函数流ID
    * executionId  函数流执行ID
    * status  函数流执行状态
    * beginTime  开始时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * endTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * lastUpdateTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * createdBy  createdBy
    * workflowUrn  函数流执行urn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'executionId' => 'execution_id',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'lastUpdateTime' => 'last_update_time',
            'createdBy' => 'created_by',
            'workflowUrn' => 'workflow_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  函数流ID
    * executionId  函数流执行ID
    * status  函数流执行状态
    * beginTime  开始时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * endTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * lastUpdateTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * createdBy  createdBy
    * workflowUrn  函数流执行urn
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'executionId' => 'setExecutionId',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'createdBy' => 'setCreatedBy',
            'workflowUrn' => 'setWorkflowUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  函数流ID
    * executionId  函数流执行ID
    * status  函数流执行状态
    * beginTime  开始时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * endTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * lastUpdateTime  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    * createdBy  createdBy
    * workflowUrn  函数流执行urn
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'executionId' => 'getExecutionId',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'createdBy' => 'getCreatedBy',
            'workflowUrn' => 'getWorkflowUrn'
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
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_RECOVERED = 'recovered';
    const STATUS_RETRYING = 'retrying';
    const STATUS_STOPPING = 'stopping';
    

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
            self::STATUS_SCHEDULED,
            self::STATUS_RECOVERED,
            self::STATUS_RETRYING,
            self::STATUS_STOPPING,
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['workflowUrn'] = isset($data['workflowUrn']) ? $data['workflowUrn'] : null;
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
    * Gets workflowId
    *  函数流ID
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId 函数流ID
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets executionId
    *  函数流执行ID
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
    * @param string|null $executionId 函数流执行ID
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
    *  函数流执行状态
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
    * @param string|null $status 函数流执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    *
    * @return \DateTime|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param \DateTime|null $beginTime 开始时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
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
    *  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
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
    * @param \DateTime|null $endTime 结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    *
    * @return \DateTime|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param \DateTime|null $lastUpdateTime 结束时间（格式为yyyy-MM-dd'T'HH:mm:ss'Z',UTC时间）。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets workflowUrn
    *  函数流执行urn
    *
    * @return string|null
    */
    public function getWorkflowUrn()
    {
        return $this->container['workflowUrn'];
    }

    /**
    * Sets workflowUrn
    *
    * @param string|null $workflowUrn 函数流执行urn
    *
    * @return $this
    */
    public function setWorkflowUrn($workflowUrn)
    {
        $this->container['workflowUrn'] = $workflowUrn;
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

