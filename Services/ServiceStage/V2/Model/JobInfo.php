<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdBy  创建者。
    * executionStatus  执行状态。
    * jobDesc  工作描述。
    * jobId  工作ID。
    * jobName  工作名称。
    * jobType  类别。
    * orderId  排序ID。
    * projectId  创建租户的项目ID。
    * serviceInstanceId  实例ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdBy' => 'string',
            'executionStatus' => 'string',
            'jobDesc' => 'string',
            'jobId' => 'string',
            'jobName' => 'string',
            'jobType' => 'string',
            'orderId' => 'string',
            'projectId' => 'string',
            'serviceInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdBy  创建者。
    * executionStatus  执行状态。
    * jobDesc  工作描述。
    * jobId  工作ID。
    * jobName  工作名称。
    * jobType  类别。
    * orderId  排序ID。
    * projectId  创建租户的项目ID。
    * serviceInstanceId  实例ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdBy' => null,
        'executionStatus' => null,
        'jobDesc' => null,
        'jobId' => null,
        'jobName' => null,
        'jobType' => null,
        'orderId' => null,
        'projectId' => null,
        'serviceInstanceId' => null
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
    * createdBy  创建者。
    * executionStatus  执行状态。
    * jobDesc  工作描述。
    * jobId  工作ID。
    * jobName  工作名称。
    * jobType  类别。
    * orderId  排序ID。
    * projectId  创建租户的项目ID。
    * serviceInstanceId  实例ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdBy' => 'CREATED_BY',
            'executionStatus' => 'EXECUTION_STATUS',
            'jobDesc' => 'JOB_DESC',
            'jobId' => 'JOB_ID',
            'jobName' => 'JOB_NAME',
            'jobType' => 'JOB_TYPE',
            'orderId' => 'ORDER_ID',
            'projectId' => 'PROJECT_ID',
            'serviceInstanceId' => 'SERVICE_INSTANCE_ID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdBy  创建者。
    * executionStatus  执行状态。
    * jobDesc  工作描述。
    * jobId  工作ID。
    * jobName  工作名称。
    * jobType  类别。
    * orderId  排序ID。
    * projectId  创建租户的项目ID。
    * serviceInstanceId  实例ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'createdBy' => 'setCreatedBy',
            'executionStatus' => 'setExecutionStatus',
            'jobDesc' => 'setJobDesc',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'jobType' => 'setJobType',
            'orderId' => 'setOrderId',
            'projectId' => 'setProjectId',
            'serviceInstanceId' => 'setServiceInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdBy  创建者。
    * executionStatus  执行状态。
    * jobDesc  工作描述。
    * jobId  工作ID。
    * jobName  工作名称。
    * jobType  类别。
    * orderId  排序ID。
    * projectId  创建租户的项目ID。
    * serviceInstanceId  实例ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'createdBy' => 'getCreatedBy',
            'executionStatus' => 'getExecutionStatus',
            'jobDesc' => 'getJobDesc',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'jobType' => 'getJobType',
            'orderId' => 'getOrderId',
            'projectId' => 'getProjectId',
            'serviceInstanceId' => 'getServiceInstanceId'
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
    const EXECUTION_STATUS_RUNNING = 'RUNNING';
    const EXECUTION_STATUS_FAILED = 'FAILED';
    const EXECUTION_STATUS_SUCCEEDED = 'SUCCEEDED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExecutionStatusAllowableValues()
    {
        return [
            self::EXECUTION_STATUS_RUNNING,
            self::EXECUTION_STATUS_FAILED,
            self::EXECUTION_STATUS_SUCCEEDED,
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
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['executionStatus'] = isset($data['executionStatus']) ? $data['executionStatus'] : null;
        $this->container['jobDesc'] = isset($data['jobDesc']) ? $data['jobDesc'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['serviceInstanceId'] = isset($data['serviceInstanceId']) ? $data['serviceInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getExecutionStatusAllowableValues();
                if (!is_null($this->container['executionStatus']) && !in_array($this->container['executionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'executionStatus', must be one of '%s'",
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
    * Gets createdBy
    *  创建者。
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
    * @param string|null $createdBy 创建者。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets executionStatus
    *  执行状态。
    *
    * @return string|null
    */
    public function getExecutionStatus()
    {
        return $this->container['executionStatus'];
    }

    /**
    * Sets executionStatus
    *
    * @param string|null $executionStatus 执行状态。
    *
    * @return $this
    */
    public function setExecutionStatus($executionStatus)
    {
        $this->container['executionStatus'] = $executionStatus;
        return $this;
    }

    /**
    * Gets jobDesc
    *  工作描述。
    *
    * @return string|null
    */
    public function getJobDesc()
    {
        return $this->container['jobDesc'];
    }

    /**
    * Sets jobDesc
    *
    * @param string|null $jobDesc 工作描述。
    *
    * @return $this
    */
    public function setJobDesc($jobDesc)
    {
        $this->container['jobDesc'] = $jobDesc;
        return $this;
    }

    /**
    * Gets jobId
    *  工作ID。
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
    * @param string|null $jobId 工作ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  工作名称。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 工作名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobType
    *  类别。
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 类别。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets orderId
    *  排序ID。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 排序ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets projectId
    *  创建租户的项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 创建租户的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets serviceInstanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getServiceInstanceId()
    {
        return $this->container['serviceInstanceId'];
    }

    /**
    * Sets serviceInstanceId
    *
    * @param string|null $serviceInstanceId 实例ID。
    *
    * @return $this
    */
    public function setServiceInstanceId($serviceInstanceId)
    {
        $this->container['serviceInstanceId'] = $serviceInstanceId;
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

