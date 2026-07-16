<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolResourceFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolResourceFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格，比如：modelarts.vm.gpu.tnt004。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * count  **参数解释**：资源规格的保障资源量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性资源量。物理池中该值和count必须一致。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * extendParams  extendParams
    * os  os
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'count' => 'int',
            'maxCount' => 'int',
            'extendParams' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorExtendParams',
            'os' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Os'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格，比如：modelarts.vm.gpu.tnt004。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * count  **参数解释**：资源规格的保障资源量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性资源量。物理池中该值和count必须一致。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * extendParams  extendParams
    * os  os
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'count' => 'int32',
        'maxCount' => 'int32',
        'extendParams' => null,
        'os' => null
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
    * flavor  **参数解释**：资源规格，比如：modelarts.vm.gpu.tnt004。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * count  **参数解释**：资源规格的保障资源量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性资源量。物理池中该值和count必须一致。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * extendParams  extendParams
    * os  os
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'count' => 'count',
            'maxCount' => 'maxCount',
            'extendParams' => 'extendParams',
            'os' => 'os'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释**：资源规格，比如：modelarts.vm.gpu.tnt004。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * count  **参数解释**：资源规格的保障资源量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性资源量。物理池中该值和count必须一致。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * extendParams  extendParams
    * os  os
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'count' => 'setCount',
            'maxCount' => 'setMaxCount',
            'extendParams' => 'setExtendParams',
            'os' => 'setOs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释**：资源规格，比如：modelarts.vm.gpu.tnt004。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * count  **参数解释**：资源规格的保障资源量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性资源量。物理池中该值和count必须一致。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * extendParams  extendParams
    * os  os
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'count' => 'getCount',
            'maxCount' => 'getMaxCount',
            'extendParams' => 'getExtendParams',
            'os' => 'getOs'
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
        $this->container['extendParams'] = isset($data['extendParams']) ? $data['extendParams'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
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
    *  **参数解释**：资源规格，比如：modelarts.vm.gpu.tnt004。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string $flavor **参数解释**：资源规格，比如：modelarts.vm.gpu.tnt004。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：资源规格的保障资源量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param int $count **参数解释**：资源规格的保障资源量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：资源规格的弹性资源量。物理池中该值和count必须一致。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getMaxCount()
    {
        return $this->container['maxCount'];
    }

    /**
    * Sets maxCount
    *
    * @param int|null $maxCount **参数解释**：资源规格的弹性资源量。物理池中该值和count必须一致。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setMaxCount($maxCount)
    {
        $this->container['maxCount'] = $maxCount;
        return $this;
    }

    /**
    * Gets extendParams
    *  extendParams
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorExtendParams|null
    */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
    * Sets extendParams
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorExtendParams|null $extendParams extendParams
    *
    * @return $this
    */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;
        return $this;
    }

    /**
    * Gets os
    *  os
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Os|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Os|null $os os
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
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

