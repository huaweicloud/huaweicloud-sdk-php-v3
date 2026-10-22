<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotChains implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotChains';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释** 快照链ID。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 快照链所属云硬盘的可用区。 **取值范围** 不涉及。
    * snapshotCount  **参数解释** 快照链上的快照个数。 **取值范围** 大于等于0。
    * capacity  **参数解释** 快照链的大小。 **取值范围** 大于等于0。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照链的类型。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。
    * createdAt  **参数解释** 创建时间。 **取值范围** 不涉及。
    * updatedAt  **参数解释** 更新时间。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'availabilityZone' => 'string',
            'snapshotCount' => 'int',
            'capacity' => 'float',
            'projectId' => 'string',
            'volumeId' => 'string',
            'category' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释** 快照链ID。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 快照链所属云硬盘的可用区。 **取值范围** 不涉及。
    * snapshotCount  **参数解释** 快照链上的快照个数。 **取值范围** 大于等于0。
    * capacity  **参数解释** 快照链的大小。 **取值范围** 大于等于0。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照链的类型。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。
    * createdAt  **参数解释** 创建时间。 **取值范围** 不涉及。
    * updatedAt  **参数解释** 更新时间。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'availabilityZone' => null,
        'snapshotCount' => 'int32',
        'capacity' => 'float',
        'projectId' => null,
        'volumeId' => null,
        'category' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  **参数解释** 快照链ID。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 快照链所属云硬盘的可用区。 **取值范围** 不涉及。
    * snapshotCount  **参数解释** 快照链上的快照个数。 **取值范围** 大于等于0。
    * capacity  **参数解释** 快照链的大小。 **取值范围** 大于等于0。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照链的类型。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。
    * createdAt  **参数解释** 创建时间。 **取值范围** 不涉及。
    * updatedAt  **参数解释** 更新时间。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'availabilityZone' => 'availability_zone',
            'snapshotCount' => 'snapshot_count',
            'capacity' => 'capacity',
            'projectId' => 'project_id',
            'volumeId' => 'volume_id',
            'category' => 'category',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释** 快照链ID。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 快照链所属云硬盘的可用区。 **取值范围** 不涉及。
    * snapshotCount  **参数解释** 快照链上的快照个数。 **取值范围** 大于等于0。
    * capacity  **参数解释** 快照链的大小。 **取值范围** 大于等于0。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照链的类型。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。
    * createdAt  **参数解释** 创建时间。 **取值范围** 不涉及。
    * updatedAt  **参数解释** 更新时间。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'availabilityZone' => 'setAvailabilityZone',
            'snapshotCount' => 'setSnapshotCount',
            'capacity' => 'setCapacity',
            'projectId' => 'setProjectId',
            'volumeId' => 'setVolumeId',
            'category' => 'setCategory',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释** 快照链ID。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 快照链所属云硬盘的可用区。 **取值范围** 不涉及。
    * snapshotCount  **参数解释** 快照链上的快照个数。 **取值范围** 大于等于0。
    * capacity  **参数解释** 快照链的大小。 **取值范围** 大于等于0。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照链的类型。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。
    * createdAt  **参数解释** 创建时间。 **取值范围** 不涉及。
    * updatedAt  **参数解释** 更新时间。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'availabilityZone' => 'getAvailabilityZone',
            'snapshotCount' => 'getSnapshotCount',
            'capacity' => 'getCapacity',
            'projectId' => 'getProjectId',
            'volumeId' => 'getVolumeId',
            'category' => 'getCategory',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['snapshotCount'] = isset($data['snapshotCount']) ? $data['snapshotCount'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    *  **参数解释** 快照链ID。 **取值范围** 不涉及。
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
    * @param string|null $id **参数解释** 快照链ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释** 快照链所属云硬盘的可用区。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释** 快照链所属云硬盘的可用区。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets snapshotCount
    *  **参数解释** 快照链上的快照个数。 **取值范围** 大于等于0。
    *
    * @return int|null
    */
    public function getSnapshotCount()
    {
        return $this->container['snapshotCount'];
    }

    /**
    * Sets snapshotCount
    *
    * @param int|null $snapshotCount **参数解释** 快照链上的快照个数。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setSnapshotCount($snapshotCount)
    {
        $this->container['snapshotCount'] = $snapshotCount;
        return $this;
    }

    /**
    * Gets capacity
    *  **参数解释** 快照链的大小。 **取值范围** 大于等于0。
    *
    * @return float|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param float|null $capacity **参数解释** 快照链的大小。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释** 项目ID。 **取值范围** 不涉及。
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
    * @param string|null $projectId **参数解释** 项目ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets volumeId
    *  **参数解释** 快照链所属的云硬盘ID。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string|null $volumeId **参数解释** 快照链所属的云硬盘ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释** 快照链的类型。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释** 快照链的类型。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释** 创建时间。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释** 创建时间。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释** 更新时间。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释** 更新时间。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

