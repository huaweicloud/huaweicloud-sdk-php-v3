<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFeatureGatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFeatureGatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  **参数解释：** API类型。 **约束限制：** 该值不可修改 **取值范围：** - Configuration  **默认取值：** 不涉及
    * apiVersion  **参数解释：** API版本。 **约束限制：** 该值不可修改 **取值范围：** - v3.1  **默认取值：** 不涉及
    * spec  **参数解释：** 特性开关详情 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'apiVersion' => 'string',
            'spec' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  **参数解释：** API类型。 **约束限制：** 该值不可修改 **取值范围：** - Configuration  **默认取值：** 不涉及
    * apiVersion  **参数解释：** API版本。 **约束限制：** 该值不可修改 **取值范围：** - v3.1  **默认取值：** 不涉及
    * spec  **参数解释：** 特性开关详情 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'apiVersion' => null,
        'spec' => null
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
    * kind  **参数解释：** API类型。 **约束限制：** 该值不可修改 **取值范围：** - Configuration  **默认取值：** 不涉及
    * apiVersion  **参数解释：** API版本。 **约束限制：** 该值不可修改 **取值范围：** - v3.1  **默认取值：** 不涉及
    * spec  **参数解释：** 特性开关详情 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'apiVersion' => 'apiVersion',
            'spec' => 'spec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  **参数解释：** API类型。 **约束限制：** 该值不可修改 **取值范围：** - Configuration  **默认取值：** 不涉及
    * apiVersion  **参数解释：** API版本。 **约束限制：** 该值不可修改 **取值范围：** - v3.1  **默认取值：** 不涉及
    * spec  **参数解释：** 特性开关详情 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'apiVersion' => 'setApiVersion',
            'spec' => 'setSpec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  **参数解释：** API类型。 **约束限制：** 该值不可修改 **取值范围：** - Configuration  **默认取值：** 不涉及
    * apiVersion  **参数解释：** API版本。 **约束限制：** 该值不可修改 **取值范围：** - v3.1  **默认取值：** 不涉及
    * spec  **参数解释：** 特性开关详情 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'apiVersion' => 'getApiVersion',
            'spec' => 'getSpec'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
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
    * Gets kind
    *  **参数解释：** API类型。 **约束限制：** 该值不可修改 **取值范围：** - Configuration  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind **参数解释：** API类型。 **约束限制：** 该值不可修改 **取值范围：** - Configuration  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets apiVersion
    *  **参数解释：** API版本。 **约束限制：** 该值不可修改 **取值范围：** - v3.1  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion **参数解释：** API版本。 **约束限制：** 该值不可修改 **取值范围：** - v3.1  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets spec
    *  **参数解释：** 特性开关详情 **取值范围**: 不涉及
    *
    * @return map[string,object]|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param map[string,object]|null $spec **参数解释：** 特性开关详情 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
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

