<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduledTaskV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduledTaskV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  **参数解释**：  任务创建时间。  **取值范围**： 不涉及。
    * endTime  **参数解释**：  任务结束时间。  **取值范围**： 不涉及。
    * instanceId  **参数解释**：  任务绑定的实例ID。  **取值范围**： 不涉及。
    * projectId  **参数解释**：  租户项目ID。  **取值范围**： 不涉及。
    * proxyId  **参数解释**：  任务使用的数据库代理ID。  **取值范围**： 不涉及。
    * proxyName  **参数解释**：  任务使用的数据库代理名称。  **取值范围**： 不涉及。
    * startTime  **参数解释**：  任务开始时间。  **取值范围**： 不涉及。
    * taskId  **参数解释**：  任务ID，此参数是任务的唯一标识。  **取值范围**： 不涉及。
    * taskName  **参数解释**：  任务名称。  **取值范围**： 不涉及。
    * taskStatus  **参数解释**：  任务状态。  **取值范围**： - RUNNING：任务正在执行。 - SUCCESS：任务执行成功。 - FAIL：任务执行失败。 - CANCELED：任务被取消。 - WAITING：任务等待执行。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'endTime' => 'int',
            'instanceId' => 'string',
            'projectId' => 'string',
            'proxyId' => 'string',
            'proxyName' => 'string',
            'startTime' => 'int',
            'taskId' => 'string',
            'taskName' => 'string',
            'taskStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  **参数解释**：  任务创建时间。  **取值范围**： 不涉及。
    * endTime  **参数解释**：  任务结束时间。  **取值范围**： 不涉及。
    * instanceId  **参数解释**：  任务绑定的实例ID。  **取值范围**： 不涉及。
    * projectId  **参数解释**：  租户项目ID。  **取值范围**： 不涉及。
    * proxyId  **参数解释**：  任务使用的数据库代理ID。  **取值范围**： 不涉及。
    * proxyName  **参数解释**：  任务使用的数据库代理名称。  **取值范围**： 不涉及。
    * startTime  **参数解释**：  任务开始时间。  **取值范围**： 不涉及。
    * taskId  **参数解释**：  任务ID，此参数是任务的唯一标识。  **取值范围**： 不涉及。
    * taskName  **参数解释**：  任务名称。  **取值范围**： 不涉及。
    * taskStatus  **参数解释**：  任务状态。  **取值范围**： - RUNNING：任务正在执行。 - SUCCESS：任务执行成功。 - FAIL：任务执行失败。 - CANCELED：任务被取消。 - WAITING：任务等待执行。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'endTime' => 'int64',
        'instanceId' => null,
        'projectId' => null,
        'proxyId' => null,
        'proxyName' => null,
        'startTime' => 'int64',
        'taskId' => null,
        'taskName' => null,
        'taskStatus' => null
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
    * createTime  **参数解释**：  任务创建时间。  **取值范围**： 不涉及。
    * endTime  **参数解释**：  任务结束时间。  **取值范围**： 不涉及。
    * instanceId  **参数解释**：  任务绑定的实例ID。  **取值范围**： 不涉及。
    * projectId  **参数解释**：  租户项目ID。  **取值范围**： 不涉及。
    * proxyId  **参数解释**：  任务使用的数据库代理ID。  **取值范围**： 不涉及。
    * proxyName  **参数解释**：  任务使用的数据库代理名称。  **取值范围**： 不涉及。
    * startTime  **参数解释**：  任务开始时间。  **取值范围**： 不涉及。
    * taskId  **参数解释**：  任务ID，此参数是任务的唯一标识。  **取值范围**： 不涉及。
    * taskName  **参数解释**：  任务名称。  **取值范围**： 不涉及。
    * taskStatus  **参数解释**：  任务状态。  **取值范围**： - RUNNING：任务正在执行。 - SUCCESS：任务执行成功。 - FAIL：任务执行失败。 - CANCELED：任务被取消。 - WAITING：任务等待执行。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'proxyId' => 'proxy_id',
            'proxyName' => 'proxy_name',
            'startTime' => 'start_time',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'taskStatus' => 'task_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  **参数解释**：  任务创建时间。  **取值范围**： 不涉及。
    * endTime  **参数解释**：  任务结束时间。  **取值范围**： 不涉及。
    * instanceId  **参数解释**：  任务绑定的实例ID。  **取值范围**： 不涉及。
    * projectId  **参数解释**：  租户项目ID。  **取值范围**： 不涉及。
    * proxyId  **参数解释**：  任务使用的数据库代理ID。  **取值范围**： 不涉及。
    * proxyName  **参数解释**：  任务使用的数据库代理名称。  **取值范围**： 不涉及。
    * startTime  **参数解释**：  任务开始时间。  **取值范围**： 不涉及。
    * taskId  **参数解释**：  任务ID，此参数是任务的唯一标识。  **取值范围**： 不涉及。
    * taskName  **参数解释**：  任务名称。  **取值范围**： 不涉及。
    * taskStatus  **参数解释**：  任务状态。  **取值范围**： - RUNNING：任务正在执行。 - SUCCESS：任务执行成功。 - FAIL：任务执行失败。 - CANCELED：任务被取消。 - WAITING：任务等待执行。
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'proxyId' => 'setProxyId',
            'proxyName' => 'setProxyName',
            'startTime' => 'setStartTime',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'taskStatus' => 'setTaskStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  **参数解释**：  任务创建时间。  **取值范围**： 不涉及。
    * endTime  **参数解释**：  任务结束时间。  **取值范围**： 不涉及。
    * instanceId  **参数解释**：  任务绑定的实例ID。  **取值范围**： 不涉及。
    * projectId  **参数解释**：  租户项目ID。  **取值范围**： 不涉及。
    * proxyId  **参数解释**：  任务使用的数据库代理ID。  **取值范围**： 不涉及。
    * proxyName  **参数解释**：  任务使用的数据库代理名称。  **取值范围**： 不涉及。
    * startTime  **参数解释**：  任务开始时间。  **取值范围**： 不涉及。
    * taskId  **参数解释**：  任务ID，此参数是任务的唯一标识。  **取值范围**： 不涉及。
    * taskName  **参数解释**：  任务名称。  **取值范围**： 不涉及。
    * taskStatus  **参数解释**：  任务状态。  **取值范围**： - RUNNING：任务正在执行。 - SUCCESS：任务执行成功。 - FAIL：任务执行失败。 - CANCELED：任务被取消。 - WAITING：任务等待执行。
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'proxyId' => 'getProxyId',
            'proxyName' => 'getProxyName',
            'startTime' => 'getStartTime',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'taskStatus' => 'getTaskStatus'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['proxyId'] = isset($data['proxyId']) ? $data['proxyId'] : null;
        $this->container['proxyName'] = isset($data['proxyName']) ? $data['proxyName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
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
    * Gets createTime
    *  **参数解释**：  任务创建时间。  **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**：  任务创建时间。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：  任务结束时间。  **取值范围**： 不涉及。
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
    * @param int|null $endTime **参数解释**：  任务结束时间。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  任务绑定的实例ID。  **取值范围**： 不涉及。
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
    * @param string|null $instanceId **参数解释**：  任务绑定的实例ID。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：  租户项目ID。  **取值范围**： 不涉及。
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
    * @param string|null $projectId **参数解释**：  租户项目ID。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets proxyId
    *  **参数解释**：  任务使用的数据库代理ID。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProxyId()
    {
        return $this->container['proxyId'];
    }

    /**
    * Sets proxyId
    *
    * @param string|null $proxyId **参数解释**：  任务使用的数据库代理ID。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProxyId($proxyId)
    {
        $this->container['proxyId'] = $proxyId;
        return $this;
    }

    /**
    * Gets proxyName
    *  **参数解释**：  任务使用的数据库代理名称。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProxyName()
    {
        return $this->container['proxyName'];
    }

    /**
    * Sets proxyName
    *
    * @param string|null $proxyName **参数解释**：  任务使用的数据库代理名称。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProxyName($proxyName)
    {
        $this->container['proxyName'] = $proxyName;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：  任务开始时间。  **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**：  任务开始时间。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**：  任务ID，此参数是任务的唯一标识。  **取值范围**： 不涉及。
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
    * @param string|null $taskId **参数解释**：  任务ID，此参数是任务的唯一标识。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**：  任务名称。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**：  任务名称。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskStatus
    *  **参数解释**：  任务状态。  **取值范围**： - RUNNING：任务正在执行。 - SUCCESS：任务执行成功。 - FAIL：任务执行失败。 - CANCELED：任务被取消。 - WAITING：任务等待执行。
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
    * @param string|null $taskStatus **参数解释**：  任务状态。  **取值范围**： - RUNNING：任务正在执行。 - SUCCESS：任务执行成功。 - FAIL：任务执行失败。 - CANCELED：任务被取消。 - WAITING：任务等待执行。
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
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

