<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleEventInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleEventInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **约束限制**：  不涉及。
    * createdTime  **参数解释**：  事件创建的时间。  **约束限制**：  不涉及。
    * updateTime  **参数解释**：  事件更新的时间。  **约束限制**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。
    * impact  **参数解释**：  事件对系统的影响。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。
    * reason  **参数解释**：  事件发生的原因。  **约束限制**：  不涉及。
    * level  **参数解释**：  事件的严重级别。  **约束限制**：  不涉及。
    * executeTime  **参数解释**：  事件执行的时间。  **约束限制**：  不涉及。
    * latestExecutionTime  **参数解释**：  事件最近一次执行的时间。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'dbType' => 'string',
            'createdTime' => 'string',
            'updateTime' => 'string',
            'type' => 'string',
            'impact' => 'string',
            'status' => 'string',
            'reason' => 'string',
            'level' => 'string',
            'executeTime' => 'string',
            'latestExecutionTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **约束限制**：  不涉及。
    * createdTime  **参数解释**：  事件创建的时间。  **约束限制**：  不涉及。
    * updateTime  **参数解释**：  事件更新的时间。  **约束限制**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。
    * impact  **参数解释**：  事件对系统的影响。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。
    * reason  **参数解释**：  事件发生的原因。  **约束限制**：  不涉及。
    * level  **参数解释**：  事件的严重级别。  **约束限制**：  不涉及。
    * executeTime  **参数解释**：  事件执行的时间。  **约束限制**：  不涉及。
    * latestExecutionTime  **参数解释**：  事件最近一次执行的时间。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'instanceName' => null,
        'dbType' => null,
        'createdTime' => null,
        'updateTime' => null,
        'type' => null,
        'impact' => null,
        'status' => null,
        'reason' => null,
        'level' => null,
        'executeTime' => null,
        'latestExecutionTime' => null
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
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **约束限制**：  不涉及。
    * createdTime  **参数解释**：  事件创建的时间。  **约束限制**：  不涉及。
    * updateTime  **参数解释**：  事件更新的时间。  **约束限制**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。
    * impact  **参数解释**：  事件对系统的影响。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。
    * reason  **参数解释**：  事件发生的原因。  **约束限制**：  不涉及。
    * level  **参数解释**：  事件的严重级别。  **约束限制**：  不涉及。
    * executeTime  **参数解释**：  事件执行的时间。  **约束限制**：  不涉及。
    * latestExecutionTime  **参数解释**：  事件最近一次执行的时间。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'dbType' => 'db_type',
            'createdTime' => 'created_time',
            'updateTime' => 'update_time',
            'type' => 'type',
            'impact' => 'impact',
            'status' => 'status',
            'reason' => 'reason',
            'level' => 'level',
            'executeTime' => 'execute_time',
            'latestExecutionTime' => 'latest_execution_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **约束限制**：  不涉及。
    * createdTime  **参数解释**：  事件创建的时间。  **约束限制**：  不涉及。
    * updateTime  **参数解释**：  事件更新的时间。  **约束限制**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。
    * impact  **参数解释**：  事件对系统的影响。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。
    * reason  **参数解释**：  事件发生的原因。  **约束限制**：  不涉及。
    * level  **参数解释**：  事件的严重级别。  **约束限制**：  不涉及。
    * executeTime  **参数解释**：  事件执行的时间。  **约束限制**：  不涉及。
    * latestExecutionTime  **参数解释**：  事件最近一次执行的时间。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'dbType' => 'setDbType',
            'createdTime' => 'setCreatedTime',
            'updateTime' => 'setUpdateTime',
            'type' => 'setType',
            'impact' => 'setImpact',
            'status' => 'setStatus',
            'reason' => 'setReason',
            'level' => 'setLevel',
            'executeTime' => 'setExecuteTime',
            'latestExecutionTime' => 'setLatestExecutionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * instanceName  **参数解释**：  实例名称。  **约束限制**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **约束限制**：  不涉及。
    * createdTime  **参数解释**：  事件创建的时间。  **约束限制**：  不涉及。
    * updateTime  **参数解释**：  事件更新的时间。  **约束限制**：  不涉及。
    * type  **参数解释**：  事件类型。  **约束限制**：  不涉及。
    * impact  **参数解释**：  事件对系统的影响。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态。  **约束限制**：  不涉及。
    * reason  **参数解释**：  事件发生的原因。  **约束限制**：  不涉及。
    * level  **参数解释**：  事件的严重级别。  **约束限制**：  不涉及。
    * executeTime  **参数解释**：  事件执行的时间。  **约束限制**：  不涉及。
    * latestExecutionTime  **参数解释**：  事件最近一次执行的时间。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'dbType' => 'getDbType',
            'createdTime' => 'getCreatedTime',
            'updateTime' => 'getUpdateTime',
            'type' => 'getType',
            'impact' => 'getImpact',
            'status' => 'getStatus',
            'reason' => 'getReason',
            'level' => 'getLevel',
            'executeTime' => 'getExecuteTime',
            'latestExecutionTime' => 'getLatestExecutionTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['impact'] = isset($data['impact']) ? $data['impact'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['latestExecutionTime'] = isset($data['latestExecutionTime']) ? $data['latestExecutionTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['dbType'] === null) {
            $invalidProperties[] = "'dbType' can't be null";
        }
        if ($this->container['createdTime'] === null) {
            $invalidProperties[] = "'createdTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['impact'] === null) {
            $invalidProperties[] = "'impact' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
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
    * Gets id
    *  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：  事件ID。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**：  实例ID。  **约束限制**：  不涉及。
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
    *  **参数解释**：  实例名称。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName **参数解释**：  实例名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets dbType
    *  **参数解释**：  数据库类型。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string $dbType **参数解释**：  数据库类型。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets createdTime
    *  **参数解释**：  事件创建的时间。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string $createdTime **参数解释**：  事件创建的时间。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**：  事件更新的时间。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string $updateTime **参数解释**：  事件更新的时间。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  事件类型。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：  事件类型。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets impact
    *  **参数解释**：  事件对系统的影响。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
    * Sets impact
    *
    * @param string $impact **参数解释**：  事件对系统的影响。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setImpact($impact)
    {
        $this->container['impact'] = $impact;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  事件状态。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**：  事件状态。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**：  事件发生的原因。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string $reason **参数解释**：  事件发生的原因。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**：  事件的严重级别。  **约束限制**：  不涉及。
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level **参数解释**：  事件的严重级别。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets executeTime
    *  **参数解释**：  事件执行的时间。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param string|null $executeTime **参数解释**：  事件执行的时间。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets latestExecutionTime
    *  **参数解释**：  事件最近一次执行的时间。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getLatestExecutionTime()
    {
        return $this->container['latestExecutionTime'];
    }

    /**
    * Sets latestExecutionTime
    *
    * @param string|null $latestExecutionTime **参数解释**：  事件最近一次执行的时间。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setLatestExecutionTime($latestExecutionTime)
    {
        $this->container['latestExecutionTime'] = $latestExecutionTime;
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

