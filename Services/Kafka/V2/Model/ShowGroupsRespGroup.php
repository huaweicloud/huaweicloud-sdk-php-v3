<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupsRespGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupsResp_group';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * members  **参数解释**： 消费者列表。
    * groupMessageOffsets  **参数解释**： 消费进度。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'state' => 'string',
            'coordinatorId' => 'int',
            'members' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupMembers[]',
            'groupMessageOffsets' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupGroupMessageOffsets[]',
            'assignmentStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * members  **参数解释**： 消费者列表。
    * groupMessageOffsets  **参数解释**： 消费进度。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'state' => null,
        'coordinatorId' => null,
        'members' => null,
        'groupMessageOffsets' => null,
        'assignmentStrategy' => null
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
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * members  **参数解释**： 消费者列表。
    * groupMessageOffsets  **参数解释**： 消费进度。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'state' => 'state',
            'coordinatorId' => 'coordinator_id',
            'members' => 'members',
            'groupMessageOffsets' => 'group_message_offsets',
            'assignmentStrategy' => 'assignment_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * members  **参数解释**： 消费者列表。
    * groupMessageOffsets  **参数解释**： 消费进度。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'state' => 'setState',
            'coordinatorId' => 'setCoordinatorId',
            'members' => 'setMembers',
            'groupMessageOffsets' => 'setGroupMessageOffsets',
            'assignmentStrategy' => 'setAssignmentStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * members  **参数解释**： 消费者列表。
    * groupMessageOffsets  **参数解释**： 消费进度。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'state' => 'getState',
            'coordinatorId' => 'getCoordinatorId',
            'members' => 'getMembers',
            'groupMessageOffsets' => 'getGroupMessageOffsets',
            'assignmentStrategy' => 'getAssignmentStrategy'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['coordinatorId'] = isset($data['coordinatorId']) ? $data['coordinatorId'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['groupMessageOffsets'] = isset($data['groupMessageOffsets']) ? $data['groupMessageOffsets'] : null;
        $this->container['assignmentStrategy'] = isset($data['assignmentStrategy']) ? $data['assignmentStrategy'] : null;
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
    * Gets groupId
    *  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets coordinatorId
    *  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCoordinatorId()
    {
        return $this->container['coordinatorId'];
    }

    /**
    * Sets coordinatorId
    *
    * @param int|null $coordinatorId **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCoordinatorId($coordinatorId)
    {
        $this->container['coordinatorId'] = $coordinatorId;
        return $this;
    }

    /**
    * Gets members
    *  **参数解释**： 消费者列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupMembers[]|null
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupMembers[]|null $members **参数解释**： 消费者列表。
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets groupMessageOffsets
    *  **参数解释**： 消费进度。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupGroupMessageOffsets[]|null
    */
    public function getGroupMessageOffsets()
    {
        return $this->container['groupMessageOffsets'];
    }

    /**
    * Sets groupMessageOffsets
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowGroupsRespGroupGroupMessageOffsets[]|null $groupMessageOffsets **参数解释**： 消费进度。
    *
    * @return $this
    */
    public function setGroupMessageOffsets($groupMessageOffsets)
    {
        $this->container['groupMessageOffsets'] = $groupMessageOffsets;
        return $this;
    }

    /**
    * Gets assignmentStrategy
    *  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAssignmentStrategy()
    {
        return $this->container['assignmentStrategy'];
    }

    /**
    * Sets assignmentStrategy
    *
    * @param string|null $assignmentStrategy **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAssignmentStrategy($assignmentStrategy)
    {
        $this->container['assignmentStrategy'] = $assignmentStrategy;
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

