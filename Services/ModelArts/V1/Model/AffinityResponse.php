<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AffinityResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AffinityResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * affinityType  **参数解释：** 节点亲和类型。 **取值范围：** - AFFINITY：亲和。 - ANTI_AFFINITY：反亲和。
    * required  **参数解释：** 是否设置强亲和。 **取值范围：** - true：设置强亲和。 - false：不设置强亲和。
    * selectionMode  **参数解释：** 选择节点方式。 **取值范围：** IP。
    * targets  **参数解释：** 通过上述方式选择的列表，长度不能超过20。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'affinityType' => 'string',
            'required' => 'bool',
            'selectionMode' => 'string',
            'targets' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * affinityType  **参数解释：** 节点亲和类型。 **取值范围：** - AFFINITY：亲和。 - ANTI_AFFINITY：反亲和。
    * required  **参数解释：** 是否设置强亲和。 **取值范围：** - true：设置强亲和。 - false：不设置强亲和。
    * selectionMode  **参数解释：** 选择节点方式。 **取值范围：** IP。
    * targets  **参数解释：** 通过上述方式选择的列表，长度不能超过20。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'affinityType' => null,
        'required' => null,
        'selectionMode' => null,
        'targets' => null
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
    * affinityType  **参数解释：** 节点亲和类型。 **取值范围：** - AFFINITY：亲和。 - ANTI_AFFINITY：反亲和。
    * required  **参数解释：** 是否设置强亲和。 **取值范围：** - true：设置强亲和。 - false：不设置强亲和。
    * selectionMode  **参数解释：** 选择节点方式。 **取值范围：** IP。
    * targets  **参数解释：** 通过上述方式选择的列表，长度不能超过20。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'affinityType' => 'affinity_type',
            'required' => 'required',
            'selectionMode' => 'selection_mode',
            'targets' => 'targets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * affinityType  **参数解释：** 节点亲和类型。 **取值范围：** - AFFINITY：亲和。 - ANTI_AFFINITY：反亲和。
    * required  **参数解释：** 是否设置强亲和。 **取值范围：** - true：设置强亲和。 - false：不设置强亲和。
    * selectionMode  **参数解释：** 选择节点方式。 **取值范围：** IP。
    * targets  **参数解释：** 通过上述方式选择的列表，长度不能超过20。
    *
    * @var string[]
    */
    protected static $setters = [
            'affinityType' => 'setAffinityType',
            'required' => 'setRequired',
            'selectionMode' => 'setSelectionMode',
            'targets' => 'setTargets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * affinityType  **参数解释：** 节点亲和类型。 **取值范围：** - AFFINITY：亲和。 - ANTI_AFFINITY：反亲和。
    * required  **参数解释：** 是否设置强亲和。 **取值范围：** - true：设置强亲和。 - false：不设置强亲和。
    * selectionMode  **参数解释：** 选择节点方式。 **取值范围：** IP。
    * targets  **参数解释：** 通过上述方式选择的列表，长度不能超过20。
    *
    * @var string[]
    */
    protected static $getters = [
            'affinityType' => 'getAffinityType',
            'required' => 'getRequired',
            'selectionMode' => 'getSelectionMode',
            'targets' => 'getTargets'
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
        $this->container['affinityType'] = isset($data['affinityType']) ? $data['affinityType'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['selectionMode'] = isset($data['selectionMode']) ? $data['selectionMode'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['affinityType'] === null) {
            $invalidProperties[] = "'affinityType' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
        }
        if ($this->container['selectionMode'] === null) {
            $invalidProperties[] = "'selectionMode' can't be null";
        }
        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
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
    * Gets affinityType
    *  **参数解释：** 节点亲和类型。 **取值范围：** - AFFINITY：亲和。 - ANTI_AFFINITY：反亲和。
    *
    * @return string
    */
    public function getAffinityType()
    {
        return $this->container['affinityType'];
    }

    /**
    * Sets affinityType
    *
    * @param string $affinityType **参数解释：** 节点亲和类型。 **取值范围：** - AFFINITY：亲和。 - ANTI_AFFINITY：反亲和。
    *
    * @return $this
    */
    public function setAffinityType($affinityType)
    {
        $this->container['affinityType'] = $affinityType;
        return $this;
    }

    /**
    * Gets required
    *  **参数解释：** 是否设置强亲和。 **取值范围：** - true：设置强亲和。 - false：不设置强亲和。
    *
    * @return bool
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool $required **参数解释：** 是否设置强亲和。 **取值范围：** - true：设置强亲和。 - false：不设置强亲和。
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets selectionMode
    *  **参数解释：** 选择节点方式。 **取值范围：** IP。
    *
    * @return string
    */
    public function getSelectionMode()
    {
        return $this->container['selectionMode'];
    }

    /**
    * Sets selectionMode
    *
    * @param string $selectionMode **参数解释：** 选择节点方式。 **取值范围：** IP。
    *
    * @return $this
    */
    public function setSelectionMode($selectionMode)
    {
        $this->container['selectionMode'] = $selectionMode;
        return $this;
    }

    /**
    * Gets targets
    *  **参数解释：** 通过上述方式选择的列表，长度不能超过20。
    *
    * @return map[string,string]
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param map[string,string] $targets **参数解释：** 通过上述方式选择的列表，长度不能超过20。
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
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

