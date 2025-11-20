<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PartitionSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Partition_spec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostNetwork  hostNetwork
    * containerNetwork  **参数解释**： 分区容器子网 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * publicBorderGroup  **参数解释**： 群组，IES边缘场景为可用区ID，中心区统一为“center”。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * category  **参数解释**： 可用区分类 **约束限制**： 不涉及 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\PartitionSpecHostNetwork',
            'containerNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\PartitionSpecContainerNetwork[]',
            'publicBorderGroup' => 'string',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostNetwork  hostNetwork
    * containerNetwork  **参数解释**： 分区容器子网 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * publicBorderGroup  **参数解释**： 群组，IES边缘场景为可用区ID，中心区统一为“center”。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * category  **参数解释**： 可用区分类 **约束限制**： 不涉及 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostNetwork' => null,
        'containerNetwork' => null,
        'publicBorderGroup' => null,
        'category' => null
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
    * hostNetwork  hostNetwork
    * containerNetwork  **参数解释**： 分区容器子网 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * publicBorderGroup  **参数解释**： 群组，IES边缘场景为可用区ID，中心区统一为“center”。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * category  **参数解释**： 可用区分类 **约束限制**： 不涉及 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostNetwork' => 'hostNetwork',
            'containerNetwork' => 'containerNetwork',
            'publicBorderGroup' => 'publicBorderGroup',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostNetwork  hostNetwork
    * containerNetwork  **参数解释**： 分区容器子网 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * publicBorderGroup  **参数解释**： 群组，IES边缘场景为可用区ID，中心区统一为“center”。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * category  **参数解释**： 可用区分类 **约束限制**： 不涉及 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostNetwork' => 'setHostNetwork',
            'containerNetwork' => 'setContainerNetwork',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostNetwork  hostNetwork
    * containerNetwork  **参数解释**： 分区容器子网 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * publicBorderGroup  **参数解释**： 群组，IES边缘场景为可用区ID，中心区统一为“center”。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * category  **参数解释**： 可用区分类 **约束限制**： 不涉及 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostNetwork' => 'getHostNetwork',
            'containerNetwork' => 'getContainerNetwork',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'category' => 'getCategory'
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
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['containerNetwork'] = isset($data['containerNetwork']) ? $data['containerNetwork'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
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
    * Gets hostNetwork
    *  hostNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\PartitionSpecHostNetwork|null
    */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
    * Sets hostNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\PartitionSpecHostNetwork|null $hostNetwork hostNetwork
    *
    * @return $this
    */
    public function setHostNetwork($hostNetwork)
    {
        $this->container['hostNetwork'] = $hostNetwork;
        return $this;
    }

    /**
    * Gets containerNetwork
    *  **参数解释**： 分区容器子网 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\PartitionSpecContainerNetwork[]|null
    */
    public function getContainerNetwork()
    {
        return $this->container['containerNetwork'];
    }

    /**
    * Sets containerNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\PartitionSpecContainerNetwork[]|null $containerNetwork **参数解释**： 分区容器子网 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setContainerNetwork($containerNetwork)
    {
        $this->container['containerNetwork'] = $containerNetwork;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  **参数解释**： 群组，IES边缘场景为可用区ID，中心区统一为“center”。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup **参数解释**： 群组，IES边缘场景为可用区ID，中心区统一为“center”。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 可用区分类 **约束限制**： 不涉及 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区  **默认取值**： 不涉及
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
    * @param string|null $category **参数解释**： 可用区分类 **约束限制**： 不涉及 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

