<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **取值范围**：  不涉及。
    * jobId  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * jobName  **参数解释**：  任务名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：    - Pending：表示待执行。   - Running：表示运行中。   - Completed：表示已完成。
    * subTaskList  **参数解释**：  任务详情列表。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'jobId' => 'string',
            'jobName' => 'string',
            'status' => 'string',
            'subTaskList' => '\HuaweiCloud\SDK\GaussDB\V3\Model\SubTaskInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **取值范围**：  不涉及。
    * jobId  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * jobName  **参数解释**：  任务名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：    - Pending：表示待执行。   - Running：表示运行中。   - Completed：表示已完成。
    * subTaskList  **参数解释**：  任务详情列表。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'jobId' => null,
        'jobName' => null,
        'status' => null,
        'subTaskList' => null
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
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **取值范围**：  不涉及。
    * jobId  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * jobName  **参数解释**：  任务名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：    - Pending：表示待执行。   - Running：表示运行中。   - Completed：表示已完成。
    * subTaskList  **参数解释**：  任务详情列表。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'status' => 'status',
            'subTaskList' => 'sub_task_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **取值范围**：  不涉及。
    * jobId  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * jobName  **参数解释**：  任务名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：    - Pending：表示待执行。   - Running：表示运行中。   - Completed：表示已完成。
    * subTaskList  **参数解释**：  任务详情列表。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'status' => 'setStatus',
            'subTaskList' => 'setSubTaskList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **取值范围**：  不涉及。
    * jobId  **参数解释**：  任务ID。  **取值范围**：  不涉及。
    * jobName  **参数解释**：  任务名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：    - Pending：表示待执行。   - Running：表示运行中。   - Completed：表示已完成。
    * subTaskList  **参数解释**：  任务详情列表。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'status' => 'getStatus',
            'subTaskList' => 'getSubTaskList'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subTaskList'] = isset($data['subTaskList']) ? $data['subTaskList'] : null;
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
    * Gets instanceId
    *  **参数解释**：  实例ID。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  实例ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**：  实例名称。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**：  实例名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**：  任务ID。  **取值范围**：  不涉及。
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
    * @param string|null $jobId **参数解释**：  任务ID。  **取值范围**：  不涉及。
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
    *  **参数解释**：  任务名称。  **取值范围**：  不涉及。
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
    * @param string|null $jobName **参数解释**：  任务名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  任务状态。  **取值范围**：    - Pending：表示待执行。   - Running：表示运行中。   - Completed：表示已完成。
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
    * @param string|null $status **参数解释**：  任务状态。  **取值范围**：    - Pending：表示待执行。   - Running：表示运行中。   - Completed：表示已完成。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subTaskList
    *  **参数解释**：  任务详情列表。  **取值范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\SubTaskInfo[]|null
    */
    public function getSubTaskList()
    {
        return $this->container['subTaskList'];
    }

    /**
    * Sets subTaskList
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\SubTaskInfo[]|null $subTaskList **参数解释**：  任务详情列表。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSubTaskList($subTaskList)
    {
        $this->container['subTaskList'] = $subTaskList;
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

