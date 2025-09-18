<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NewExtensionExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NewExtension_execution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * target  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * sha256  **参数解释**： sha256。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'target' => 'string',
            'type' => 'string',
            'sha256' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * target  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * sha256  **参数解释**： sha256。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'target' => null,
        'type' => null,
        'sha256' => null
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
    * target  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * sha256  **参数解释**： sha256。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'target' => 'target',
            'type' => 'type',
            'sha256' => 'sha256'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * target  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * sha256  **参数解释**： sha256。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'target' => 'setTarget',
            'type' => 'setType',
            'sha256' => 'setSha256'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * target  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * type  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    * sha256  **参数解释**： sha256。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'target' => 'getTarget',
            'type' => 'getType',
            'sha256' => 'getSha256'
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
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
    * Gets target
    *  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target **参数解释**： 插件类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 插件类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 插件类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets sha256
    *  **参数解释**： sha256。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
    * Sets sha256
    *
    * @param string|null $sha256 **参数解释**： sha256。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;
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

