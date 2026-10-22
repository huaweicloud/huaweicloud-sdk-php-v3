<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountSnapshotChainsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountSnapshotChainsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照链对应的云硬盘所在的可用区。  **约束限制** 不涉及。 **取值范围** 不涉及。         **默认取值** 不涉及。
    * category  **参数解释** 快照链的类型。 **约束限制** 不涉及。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。  **默认取值** 不涉及。
    * id  **参数解释** 快照链ID。 可通过[查询快照链列表](ListSnapshotChains.xml)接口获取快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。  **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeId' => 'string',
            'availabilityZone' => 'string',
            'category' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照链对应的云硬盘所在的可用区。  **约束限制** 不涉及。 **取值范围** 不涉及。         **默认取值** 不涉及。
    * category  **参数解释** 快照链的类型。 **约束限制** 不涉及。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。  **默认取值** 不涉及。
    * id  **参数解释** 快照链ID。 可通过[查询快照链列表](ListSnapshotChains.xml)接口获取快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。  **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeId' => null,
        'availabilityZone' => null,
        'category' => null,
        'id' => null
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
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照链对应的云硬盘所在的可用区。  **约束限制** 不涉及。 **取值范围** 不涉及。         **默认取值** 不涉及。
    * category  **参数解释** 快照链的类型。 **约束限制** 不涉及。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。  **默认取值** 不涉及。
    * id  **参数解释** 快照链ID。 可通过[查询快照链列表](ListSnapshotChains.xml)接口获取快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。  **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeId' => 'volume_id',
            'availabilityZone' => 'availability_zone',
            'category' => 'category',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照链对应的云硬盘所在的可用区。  **约束限制** 不涉及。 **取值范围** 不涉及。         **默认取值** 不涉及。
    * category  **参数解释** 快照链的类型。 **约束限制** 不涉及。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。  **默认取值** 不涉及。
    * id  **参数解释** 快照链ID。 可通过[查询快照链列表](ListSnapshotChains.xml)接口获取快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。  **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeId' => 'setVolumeId',
            'availabilityZone' => 'setAvailabilityZone',
            'category' => 'setCategory',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeId  **参数解释** 快照链所属的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照链对应的云硬盘所在的可用区。  **约束限制** 不涉及。 **取值范围** 不涉及。         **默认取值** 不涉及。
    * category  **参数解释** 快照链的类型。 **约束限制** 不涉及。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。  **默认取值** 不涉及。
    * id  **参数解释** 快照链ID。 可通过[查询快照链列表](ListSnapshotChains.xml)接口获取快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。  **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeId' => 'getVolumeId',
            'availabilityZone' => 'getAvailabilityZone',
            'category' => 'getCategory',
            'id' => 'getId'
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
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets volumeId
    *  **参数解释** 快照链所属的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param string|null $volumeId **参数解释** 快照链所属的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释** 快照链对应的云硬盘所在的可用区。  **约束限制** 不涉及。 **取值范围** 不涉及。         **默认取值** 不涉及。
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
    * @param string|null $availabilityZone **参数解释** 快照链对应的云硬盘所在的可用区。  **约束限制** 不涉及。 **取值范围** 不涉及。         **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释** 快照链的类型。 **约束限制** 不涉及。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。  **默认取值** 不涉及。
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
    * @param string|null $category **参数解释** 快照链的类型。 **约束限制** 不涉及。 **取值范围** 当前快照链支持\"standard\"、\"standard_copy\"两种类型。  **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释** 快照链ID。 可通过[查询快照链列表](ListSnapshotChains.xml)接口获取快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。  **默认取值** 不涉及。
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
    * @param string|null $id **参数解释** 快照链ID。 可通过[查询快照链列表](ListSnapshotChains.xml)接口获取快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。  **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

