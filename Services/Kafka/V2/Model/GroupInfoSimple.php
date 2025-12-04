<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupInfoSimple implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupInfoSimple';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组ID。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组的描述信息。 **取值范围**： 不涉及。
    * lag  **参数解释**： 堆积数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'int',
            'groupId' => 'string',
            'state' => 'string',
            'coordinatorId' => 'int',
            'groupDesc' => 'string',
            'lag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组ID。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组的描述信息。 **取值范围**： 不涉及。
    * lag  **参数解释**： 堆积数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => 'int64',
        'groupId' => null,
        'state' => null,
        'coordinatorId' => null,
        'groupDesc' => null,
        'lag' => 'int64'
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
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组ID。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组的描述信息。 **取值范围**： 不涉及。
    * lag  **参数解释**： 堆积数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'createdAt',
            'groupId' => 'group_id',
            'state' => 'state',
            'coordinatorId' => 'coordinator_id',
            'groupDesc' => 'group_desc',
            'lag' => 'lag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组ID。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组的描述信息。 **取值范围**： 不涉及。
    * lag  **参数解释**： 堆积数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'groupId' => 'setGroupId',
            'state' => 'setState',
            'coordinatorId' => 'setCoordinatorId',
            'groupDesc' => 'setGroupDesc',
            'lag' => 'setLag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 消费组ID。 **取值范围**： 不涉及。
    * state  **参数解释**： 消费组状态。 **取值范围**： - Dead：消费组内没有任何成员，且没有任何元数据。 - Empty：消费组内没有任何成员，存在元数据。 - PreparingRebalance：准备开启rebalance。 - CompletingRebalance：所有成员加入group。 - Stable：消费组内成员可正常消费。
    * coordinatorId  **参数解释**： 协调器编号。 **取值范围**： 不涉及。
    * groupDesc  **参数解释**： 消费组的描述信息。 **取值范围**： 不涉及。
    * lag  **参数解释**： 堆积数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'groupId' => 'getGroupId',
            'state' => 'getState',
            'coordinatorId' => 'getCoordinatorId',
            'groupDesc' => 'getGroupDesc',
            'lag' => 'getLag'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['coordinatorId'] = isset($data['coordinatorId']) ? $data['coordinatorId'] : null;
        $this->container['groupDesc'] = isset($data['groupDesc']) ? $data['groupDesc'] : null;
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : null;
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
    * Gets createdAt
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt **参数解释**： 创建时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 消费组ID。 **取值范围**： 不涉及。
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
    * @param string|null $groupId **参数解释**： 消费组ID。 **取值范围**： 不涉及。
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
    * Gets groupDesc
    *  **参数解释**： 消费组的描述信息。 **取值范围**： 不涉及。
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
    * @param string|null $groupDesc **参数解释**： 消费组的描述信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupDesc($groupDesc)
    {
        $this->container['groupDesc'] = $groupDesc;
        return $this;
    }

    /**
    * Gets lag
    *  **参数解释**： 堆积数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getLag()
    {
        return $this->container['lag'];
    }

    /**
    * Sets lag
    *
    * @param int|null $lag **参数解释**： 堆积数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLag($lag)
    {
        $this->container['lag'] = $lag;
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

