<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpc  **参数解释**：vpc id。 **取值范围**：不涉及。
    * subnet  **参数解释**：子网id。 **取值范围**：不涉及。
    * securityGroups  **参数解释**：安全组id集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpc' => 'string',
            'subnet' => 'string',
            'securityGroups' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpc  **参数解释**：vpc id。 **取值范围**：不涉及。
    * subnet  **参数解释**：子网id。 **取值范围**：不涉及。
    * securityGroups  **参数解释**：安全组id集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpc' => null,
        'subnet' => null,
        'securityGroups' => null
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
    * vpc  **参数解释**：vpc id。 **取值范围**：不涉及。
    * subnet  **参数解释**：子网id。 **取值范围**：不涉及。
    * securityGroups  **参数解释**：安全组id集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpc' => 'vpc',
            'subnet' => 'subnet',
            'securityGroups' => 'securityGroups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpc  **参数解释**：vpc id。 **取值范围**：不涉及。
    * subnet  **参数解释**：子网id。 **取值范围**：不涉及。
    * securityGroups  **参数解释**：安全组id集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpc' => 'setVpc',
            'subnet' => 'setSubnet',
            'securityGroups' => 'setSecurityGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpc  **参数解释**：vpc id。 **取值范围**：不涉及。
    * subnet  **参数解释**：子网id。 **取值范围**：不涉及。
    * securityGroups  **参数解释**：安全组id集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpc' => 'getVpc',
            'subnet' => 'getSubnet',
            'securityGroups' => 'getSecurityGroups'
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
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['subnet'] = isset($data['subnet']) ? $data['subnet'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
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
    * Gets vpc
    *  **参数解释**：vpc id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string|null $vpc **参数解释**：vpc id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets subnet
    *  **参数解释**：子网id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSubnet()
    {
        return $this->container['subnet'];
    }

    /**
    * Sets subnet
    *
    * @param string|null $subnet **参数解释**：子网id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSubnet($subnet)
    {
        $this->container['subnet'] = $subnet;
        return $this;
    }

    /**
    * Gets securityGroups
    *  **参数解释**：安全组id集合。
    *
    * @return string[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[]|null $securityGroups **参数解释**：安全组id集合。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
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

