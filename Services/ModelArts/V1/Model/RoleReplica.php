<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleReplica implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleReplica';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * maxReplicas  **参数解释：** 最大副本数。 **取值范围：** 1~128。
    * minReplicas  **参数解释：** 最小副本数。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'maxReplicas' => 'int',
            'minReplicas' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * maxReplicas  **参数解释：** 最大副本数。 **取值范围：** 1~128。
    * minReplicas  **参数解释：** 最小副本数。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'maxReplicas' => 'int32',
        'minReplicas' => 'int32'
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
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * maxReplicas  **参数解释：** 最大副本数。 **取值范围：** 1~128。
    * minReplicas  **参数解释：** 最小副本数。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'maxReplicas' => 'max_replicas',
            'minReplicas' => 'min_replicas'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * maxReplicas  **参数解释：** 最大副本数。 **取值范围：** 1~128。
    * minReplicas  **参数解释：** 最小副本数。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'maxReplicas' => 'setMaxReplicas',
            'minReplicas' => 'setMinReplicas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * maxReplicas  **参数解释：** 最大副本数。 **取值范围：** 1~128。
    * minReplicas  **参数解释：** 最小副本数。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'maxReplicas' => 'getMaxReplicas',
            'minReplicas' => 'getMinReplicas'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['maxReplicas'] = isset($data['maxReplicas']) ? $data['maxReplicas'] : null;
        $this->container['minReplicas'] = isset($data['minReplicas']) ? $data['minReplicas'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets name
    *  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释：** 角色名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets maxReplicas
    *  **参数解释：** 最大副本数。 **取值范围：** 1~128。
    *
    * @return int|null
    */
    public function getMaxReplicas()
    {
        return $this->container['maxReplicas'];
    }

    /**
    * Sets maxReplicas
    *
    * @param int|null $maxReplicas **参数解释：** 最大副本数。 **取值范围：** 1~128。
    *
    * @return $this
    */
    public function setMaxReplicas($maxReplicas)
    {
        $this->container['maxReplicas'] = $maxReplicas;
        return $this;
    }

    /**
    * Gets minReplicas
    *  **参数解释：** 最小副本数。 **取值范围：** 1~128。
    *
    * @return int|null
    */
    public function getMinReplicas()
    {
        return $this->container['minReplicas'];
    }

    /**
    * Sets minReplicas
    *
    * @param int|null $minReplicas **参数解释：** 最小副本数。 **取值范围：** 1~128。
    *
    * @return $this
    */
    public function setMinReplicas($minReplicas)
    {
        $this->container['minReplicas'] = $minReplicas;
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

