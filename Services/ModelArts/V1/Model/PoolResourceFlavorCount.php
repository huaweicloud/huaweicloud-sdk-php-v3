<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolResourceFlavorCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolResourceFlavorCount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格ID。 **取值范围**：不涉及。
    * count  **参数解释**：资源池中资源规格实例数量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源池中资源规格实例弹性数量。物理池中该值和count相同。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中期望创建的资源规格实例的az分布。
    * nodePool  **参数解释**：节点池ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'count' => 'int',
            'maxCount' => 'int',
            'azs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolNodeAz[]',
            'nodePool' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格ID。 **取值范围**：不涉及。
    * count  **参数解释**：资源池中资源规格实例数量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源池中资源规格实例弹性数量。物理池中该值和count相同。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中期望创建的资源规格实例的az分布。
    * nodePool  **参数解释**：节点池ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'count' => 'int32',
        'maxCount' => 'int32',
        'azs' => null,
        'nodePool' => null
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
    * flavor  **参数解释**：资源规格ID。 **取值范围**：不涉及。
    * count  **参数解释**：资源池中资源规格实例数量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源池中资源规格实例弹性数量。物理池中该值和count相同。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中期望创建的资源规格实例的az分布。
    * nodePool  **参数解释**：节点池ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'count' => 'count',
            'maxCount' => 'maxCount',
            'azs' => 'azs',
            'nodePool' => 'nodePool'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释**：资源规格ID。 **取值范围**：不涉及。
    * count  **参数解释**：资源池中资源规格实例数量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源池中资源规格实例弹性数量。物理池中该值和count相同。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中期望创建的资源规格实例的az分布。
    * nodePool  **参数解释**：节点池ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'count' => 'setCount',
            'maxCount' => 'setMaxCount',
            'azs' => 'setAzs',
            'nodePool' => 'setNodePool'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释**：资源规格ID。 **取值范围**：不涉及。
    * count  **参数解释**：资源池中资源规格实例数量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源池中资源规格实例弹性数量。物理池中该值和count相同。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中期望创建的资源规格实例的az分布。
    * nodePool  **参数解释**：节点池ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'count' => 'getCount',
            'maxCount' => 'getMaxCount',
            'azs' => 'getAzs',
            'nodePool' => 'getNodePool'
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['maxCount'] = isset($data['maxCount']) ? $data['maxCount'] : null;
        $this->container['azs'] = isset($data['azs']) ? $data['azs'] : null;
        $this->container['nodePool'] = isset($data['nodePool']) ? $data['nodePool'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['maxCount'] === null) {
            $invalidProperties[] = "'maxCount' can't be null";
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
    * Gets flavor
    *  **参数解释**：资源规格ID。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor **参数解释**：资源规格ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：资源池中资源规格实例数量。 **取值范围**：不涉及。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count **参数解释**：资源池中资源规格实例数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets maxCount
    *  **参数解释**：资源池中资源规格实例弹性数量。物理池中该值和count相同。 **取值范围**：不涉及。
    *
    * @return int
    */
    public function getMaxCount()
    {
        return $this->container['maxCount'];
    }

    /**
    * Sets maxCount
    *
    * @param int $maxCount **参数解释**：资源池中资源规格实例弹性数量。物理池中该值和count相同。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMaxCount($maxCount)
    {
        $this->container['maxCount'] = $maxCount;
        return $this;
    }

    /**
    * Gets azs
    *  **参数解释**：资源池中期望创建的资源规格实例的az分布。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolNodeAz[]|null
    */
    public function getAzs()
    {
        return $this->container['azs'];
    }

    /**
    * Sets azs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolNodeAz[]|null $azs **参数解释**：资源池中期望创建的资源规格实例的az分布。
    *
    * @return $this
    */
    public function setAzs($azs)
    {
        $this->container['azs'] = $azs;
        return $this;
    }

    /**
    * Gets nodePool
    *  **参数解释**：节点池ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getNodePool()
    {
        return $this->container['nodePool'];
    }

    /**
    * Sets nodePool
    *
    * @param string|null $nodePool **参数解释**：节点池ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNodePool($nodePool)
    {
        $this->container['nodePool'] = $nodePool;
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

