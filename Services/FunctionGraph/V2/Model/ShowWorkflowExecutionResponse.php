<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWorkflowExecutionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWorkflowExecutionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * headers  函数执行时需要的Header
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * lastUpdateTime  流程实例上次更新时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程实例创建者
    * nodeExecutionDetails  节点执行信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'workflowUrn' => 'string',
            'executionId' => 'string',
            'status' => 'string',
            'headers' => 'object',
            'input' => 'object',
            'output' => 'object',
            'beginTime' => 'string',
            'endTime' => 'string',
            'lastUpdateTime' => 'string',
            'createdBy' => 'string',
            'nodeExecutionDetails' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\NodeExecutionDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * headers  函数执行时需要的Header
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * lastUpdateTime  流程实例上次更新时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程实例创建者
    * nodeExecutionDetails  节点执行信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'workflowUrn' => null,
        'executionId' => null,
        'status' => null,
        'headers' => null,
        'input' => null,
        'output' => null,
        'beginTime' => null,
        'endTime' => null,
        'lastUpdateTime' => null,
        'createdBy' => null,
        'nodeExecutionDetails' => null
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
    * workflowId  流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * headers  函数执行时需要的Header
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * lastUpdateTime  流程实例上次更新时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程实例创建者
    * nodeExecutionDetails  节点执行信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'workflowUrn' => 'workflow_urn',
            'executionId' => 'execution_id',
            'status' => 'status',
            'headers' => 'headers',
            'input' => 'input',
            'output' => 'output',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'lastUpdateTime' => 'last_update_time',
            'createdBy' => 'created_by',
            'nodeExecutionDetails' => 'node_execution_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * headers  函数执行时需要的Header
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * lastUpdateTime  流程实例上次更新时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程实例创建者
    * nodeExecutionDetails  节点执行信息
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'workflowUrn' => 'setWorkflowUrn',
            'executionId' => 'setExecutionId',
            'status' => 'setStatus',
            'headers' => 'setHeaders',
            'input' => 'setInput',
            'output' => 'setOutput',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'createdBy' => 'setCreatedBy',
            'nodeExecutionDetails' => 'setNodeExecutionDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  流程定义ID
    * workflowUrn  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * headers  函数执行时需要的Header
    * input  函数执行时的入参
    * output  函数执行结果
    * beginTime  流程实例创建时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * endTime  流程实例结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * lastUpdateTime  流程实例上次更新时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    * createdBy  流程实例创建者
    * nodeExecutionDetails  节点执行信息
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'workflowUrn' => 'getWorkflowUrn',
            'executionId' => 'getExecutionId',
            'status' => 'getStatus',
            'headers' => 'getHeaders',
            'input' => 'getInput',
            'output' => 'getOutput',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'createdBy' => 'getCreatedBy',
            'nodeExecutionDetails' => 'getNodeExecutionDetails'
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['workflowUrn'] = isset($data['workflowUrn']) ? $data['workflowUrn'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['nodeExecutionDetails'] = isset($data['nodeExecutionDetails']) ? $data['nodeExecutionDetails'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workflowUrn']) && (mb_strlen($this->container['workflowUrn']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowUrn']) && (mb_strlen($this->container['workflowUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be bigger than or equal to 1.";
            }
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

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
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
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 1.";
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
    *  流程定义ID
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
    * @param string|null $workflowId 流程定义ID
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets workflowUrn
    *  函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
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
    * @param string|null $workflowUrn 函数工作流URN, 格式为： urn:fss:<region_id>:<project_id>:workflow:\\<package\\>:<workflow_name>:\\<version\\> 注意： package当前只支持default version当前只支持latest
    *
    * @return $this
    */
    public function setWorkflowUrn($workflowUrn)
    {
        $this->container['workflowUrn'] = $workflowUrn;
        return $this;
    }

    /**
    * Gets executionId
    *  流程执行实例ID
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
    * @param string|null $executionId 流程执行实例ID
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
    *  流程实例执行状态
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
    * @param string|null $status 流程实例执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets headers
    *  函数执行时需要的Header
    *
    * @return object|null
    */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
    * Sets headers
    *
    * @param object|null $headers 函数执行时需要的Header
    *
    * @return $this
    */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
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
    * Gets lastUpdateTime
    *  流程实例上次更新时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 流程实例上次更新时间，格式：yyyy-MM-ddTHH:mm:ssZ，UTC时间
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
    *  流程实例创建者
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
    * @param string|null $createdBy 流程实例创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets nodeExecutionDetails
    *  节点执行信息
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\NodeExecutionDetail[]|null
    */
    public function getNodeExecutionDetails()
    {
        return $this->container['nodeExecutionDetails'];
    }

    /**
    * Sets nodeExecutionDetails
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\NodeExecutionDetail[]|null $nodeExecutionDetails 节点执行信息
    *
    * @return $this
    */
    public function setNodeExecutionDetails($nodeExecutionDetails)
    {
        $this->container['nodeExecutionDetails'] = $nodeExecutionDetails;
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

