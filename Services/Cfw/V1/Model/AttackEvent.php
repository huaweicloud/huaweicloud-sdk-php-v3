<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * changed  **参数解释**： 变化数量 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'changed' => 'int',
            'deny' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * changed  **参数解释**： 变化数量 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'changed' => 'int32',
        'deny' => 'int32',
        'total' => 'int32'
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
    * changed  **参数解释**： 变化数量 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'changed' => 'changed',
            'deny' => 'deny',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * changed  **参数解释**： 变化数量 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'changed' => 'setChanged',
            'deny' => 'setDeny',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * changed  **参数解释**： 变化数量 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'changed' => 'getChanged',
            'deny' => 'getDeny',
            'total' => 'getTotal'
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
        $this->container['changed'] = isset($data['changed']) ? $data['changed'] : null;
        $this->container['deny'] = isset($data['deny']) ? $data['deny'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets changed
    *  **参数解释**： 变化数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getChanged()
    {
        return $this->container['changed'];
    }

    /**
    * Sets changed
    *
    * @param int|null $changed **参数解释**： 变化数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setChanged($changed)
    {
        $this->container['changed'] = $changed;
        return $this;
    }

    /**
    * Gets deny
    *  **参数解释**： 阻断数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDeny()
    {
        return $this->container['deny'];
    }

    /**
    * Sets deny
    *
    * @param int|null $deny **参数解释**： 阻断数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDeny($deny)
    {
        $this->container['deny'] = $deny;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

