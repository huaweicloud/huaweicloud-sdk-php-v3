<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogicalClusterPlanVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogicalClusterPlanVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 增删逻辑集群计划ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名字。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 逻辑集群节点个数。 **取值范围**： 不涉及。
    * planType  **参数解释**： 逻辑集群增删计划类型，取值范围为 (once|periodicity)，表示单次或周期性。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群增删计划状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * startTime  **参数解释**： 逻辑集群增删计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 逻辑集群增删计划结束时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 逻辑集群增删计划更新时间。 **取值范围**： 不涉及。
    * user  **参数解释**： 逻辑集群增删计划绑定的用户。 **取值范围**： 不涉及。
    * actions  **参数解释**： 任务信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'logicalClusterName' => 'string',
            'nodeNum' => 'int',
            'planType' => 'string',
            'status' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'updateTime' => 'string',
            'user' => 'string',
            'actions' => '\HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterPlanActions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 增删逻辑集群计划ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名字。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 逻辑集群节点个数。 **取值范围**： 不涉及。
    * planType  **参数解释**： 逻辑集群增删计划类型，取值范围为 (once|periodicity)，表示单次或周期性。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群增删计划状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * startTime  **参数解释**： 逻辑集群增删计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 逻辑集群增删计划结束时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 逻辑集群增删计划更新时间。 **取值范围**： 不涉及。
    * user  **参数解释**： 逻辑集群增删计划绑定的用户。 **取值范围**： 不涉及。
    * actions  **参数解释**： 任务信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'logicalClusterName' => null,
        'nodeNum' => 'int32',
        'planType' => null,
        'status' => null,
        'startTime' => null,
        'endTime' => null,
        'updateTime' => null,
        'user' => null,
        'actions' => null
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
    * id  **参数解释**： 增删逻辑集群计划ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名字。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 逻辑集群节点个数。 **取值范围**： 不涉及。
    * planType  **参数解释**： 逻辑集群增删计划类型，取值范围为 (once|periodicity)，表示单次或周期性。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群增删计划状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * startTime  **参数解释**： 逻辑集群增删计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 逻辑集群增删计划结束时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 逻辑集群增删计划更新时间。 **取值范围**： 不涉及。
    * user  **参数解释**： 逻辑集群增删计划绑定的用户。 **取值范围**： 不涉及。
    * actions  **参数解释**： 任务信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'logicalClusterName' => 'logical_cluster_name',
            'nodeNum' => 'node_num',
            'planType' => 'plan_type',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'updateTime' => 'update_time',
            'user' => 'user',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 增删逻辑集群计划ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名字。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 逻辑集群节点个数。 **取值范围**： 不涉及。
    * planType  **参数解释**： 逻辑集群增删计划类型，取值范围为 (once|periodicity)，表示单次或周期性。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群增删计划状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * startTime  **参数解释**： 逻辑集群增删计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 逻辑集群增删计划结束时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 逻辑集群增删计划更新时间。 **取值范围**： 不涉及。
    * user  **参数解释**： 逻辑集群增删计划绑定的用户。 **取值范围**： 不涉及。
    * actions  **参数解释**： 任务信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'logicalClusterName' => 'setLogicalClusterName',
            'nodeNum' => 'setNodeNum',
            'planType' => 'setPlanType',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'updateTime' => 'setUpdateTime',
            'user' => 'setUser',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 增删逻辑集群计划ID。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名字。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 逻辑集群节点个数。 **取值范围**： 不涉及。
    * planType  **参数解释**： 逻辑集群增删计划类型，取值范围为 (once|periodicity)，表示单次或周期性。 **取值范围**： 不涉及。
    * status  **参数解释**： 逻辑集群增删计划状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * startTime  **参数解释**： 逻辑集群增删计划开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 逻辑集群增删计划结束时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 逻辑集群增删计划更新时间。 **取值范围**： 不涉及。
    * user  **参数解释**： 逻辑集群增删计划绑定的用户。 **取值范围**： 不涉及。
    * actions  **参数解释**： 任务信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'logicalClusterName' => 'getLogicalClusterName',
            'nodeNum' => 'getNodeNum',
            'planType' => 'getPlanType',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'updateTime' => 'getUpdateTime',
            'user' => 'getUser',
            'actions' => 'getActions'
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
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['planType'] = isset($data['planType']) ? $data['planType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
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
    * Gets id
    *  **参数解释**： 增删逻辑集群计划ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 增删逻辑集群计划ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  **参数解释**： 逻辑集群名字。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName **参数解释**： 逻辑集群名字。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets nodeNum
    *  **参数解释**： 逻辑集群节点个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum **参数解释**： 逻辑集群节点个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets planType
    *  **参数解释**： 逻辑集群增删计划类型，取值范围为 (once|periodicity)，表示单次或周期性。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPlanType()
    {
        return $this->container['planType'];
    }

    /**
    * Sets planType
    *
    * @param string|null $planType **参数解释**： 逻辑集群增删计划类型，取值范围为 (once|periodicity)，表示单次或周期性。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPlanType($planType)
    {
        $this->container['planType'] = $planType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 逻辑集群增删计划状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
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
    * @param string|null $status **参数解释**： 逻辑集群增删计划状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 逻辑集群增删计划开始时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 逻辑集群增删计划开始时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 逻辑集群增删计划结束时间。 **取值范围**： 不涉及。
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
    * @param string|null $endTime **参数解释**： 逻辑集群增删计划结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 逻辑集群增删计划更新时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime **参数解释**： 逻辑集群增删计划更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**： 逻辑集群增删计划绑定的用户。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user **参数解释**： 逻辑集群增删计划绑定的用户。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释**： 任务信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterPlanActions[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterPlanActions[]|null $actions **参数解释**： 任务信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

