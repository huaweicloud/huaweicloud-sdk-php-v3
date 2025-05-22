<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateAZRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateAZRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newAvailableZones  **参数解释**： 新可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executeImmediately  **参数解释**： 是否立即执行变更。 **约束限制**： 不涉及。 **取值范围**： true：立即执行变更。 false：暂不执行变更。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newAvailableZones' => 'string[]',
            'executeImmediately' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newAvailableZones  **参数解释**： 新可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executeImmediately  **参数解释**： 是否立即执行变更。 **约束限制**： 不涉及。 **取值范围**： true：立即执行变更。 false：暂不执行变更。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newAvailableZones' => null,
        'executeImmediately' => null
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
    * newAvailableZones  **参数解释**： 新可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executeImmediately  **参数解释**： 是否立即执行变更。 **约束限制**： 不涉及。 **取值范围**： true：立即执行变更。 false：暂不执行变更。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newAvailableZones' => 'new_available_zones',
            'executeImmediately' => 'execute_immediately'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newAvailableZones  **参数解释**： 新可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executeImmediately  **参数解释**： 是否立即执行变更。 **约束限制**： 不涉及。 **取值范围**： true：立即执行变更。 false：暂不执行变更。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $setters = [
            'newAvailableZones' => 'setNewAvailableZones',
            'executeImmediately' => 'setExecuteImmediately'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newAvailableZones  **参数解释**： 新可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executeImmediately  **参数解释**： 是否立即执行变更。 **约束限制**： 不涉及。 **取值范围**： true：立即执行变更。 false：暂不执行变更。 **默认取值**： true
    *
    * @var string[]
    */
    protected static $getters = [
            'newAvailableZones' => 'getNewAvailableZones',
            'executeImmediately' => 'getExecuteImmediately'
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
        $this->container['newAvailableZones'] = isset($data['newAvailableZones']) ? $data['newAvailableZones'] : null;
        $this->container['executeImmediately'] = isset($data['executeImmediately']) ? $data['executeImmediately'] : null;
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
    * Gets newAvailableZones
    *  **参数解释**： 新可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getNewAvailableZones()
    {
        return $this->container['newAvailableZones'];
    }

    /**
    * Sets newAvailableZones
    *
    * @param string[]|null $newAvailableZones **参数解释**： 新可用区。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNewAvailableZones($newAvailableZones)
    {
        $this->container['newAvailableZones'] = $newAvailableZones;
        return $this;
    }

    /**
    * Gets executeImmediately
    *  **参数解释**： 是否立即执行变更。 **约束限制**： 不涉及。 **取值范围**： true：立即执行变更。 false：暂不执行变更。 **默认取值**： true
    *
    * @return bool|null
    */
    public function getExecuteImmediately()
    {
        return $this->container['executeImmediately'];
    }

    /**
    * Sets executeImmediately
    *
    * @param bool|null $executeImmediately **参数解释**： 是否立即执行变更。 **约束限制**： 不涉及。 **取值范围**： true：立即执行变更。 false：暂不执行变更。 **默认取值**： true
    *
    * @return $this
    */
    public function setExecuteImmediately($executeImmediately)
    {
        $this->container['executeImmediately'] = $executeImmediately;
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

