<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DescribeGroupsRespGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DescribeGroupsResp_group';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'createdAt' => 'object',
            'groupId' => 'string',
            'coordinatorId' => 'int',
            'assignmentStrategy' => 'string',
            'groupDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'createdAt' => 'int64',
        'groupId' => null,
        'coordinatorId' => null,
        'assignmentStrategy' => null,
        'groupDesc' => null
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
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'createdAt' => 'createdAt',
            'groupId' => 'group_id',
            'coordinatorId' => 'coordinator_id',
            'assignmentStrategy' => 'assignment_strategy',
            'groupDesc' => 'group_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'groupId' => 'setGroupId',
            'coordinatorId' => 'setCoordinatorId',
            'assignmentStrategy' => 'setAssignmentStrategy',
            'groupDesc' => 'setGroupDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * assignmentStrategy  **参数解释**： 分区分配策略。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'groupId' => 'getGroupId',
            'coordinatorId' => 'getCoordinatorId',
            'assignmentStrategy' => 'getAssignmentStrategy',
            'groupDesc' => 'getGroupDesc'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['coordinatorId'] = isset($data['coordinatorId']) ? $data['coordinatorId'] : null;
        $this->container['assignmentStrategy'] = isset($data['assignmentStrategy']) ? $data['assignmentStrategy'] : null;
        $this->container['groupDesc'] = isset($data['groupDesc']) ? $data['groupDesc'] : null;
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
    * Gets createdAt
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return object|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param object|null $createdAt **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
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
    * Gets groupDesc
    *  **参数解释**： 消费组描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupDesc()
    {
        return $this->container['groupDesc'];
    }

    /**
    * Sets groupDesc
    *
    * @param string|null $groupDesc **参数解释**： 消费组描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupDesc($groupDesc)
    {
        $this->container['groupDesc'] = $groupDesc;
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

