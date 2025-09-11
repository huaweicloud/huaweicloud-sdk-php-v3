<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  flavor
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => '\HuaweiCloud\SDK\IoTDM\V5\Model\Flavor',
            'chargeMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  flavor
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'chargeMode' => null
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
    * flavor  flavor
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'chargeMode' => 'charge_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  flavor
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'chargeMode' => 'setChargeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  flavor
    * chargeMode  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'chargeMode' => 'getChargeMode'
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['chargeMode']) && !preg_match("/prePaid|postPaid/", $this->container['chargeMode'])) {
                $invalidProperties[] = "invalid value for 'chargeMode', must be conform to the pattern /prePaid|postPaid/.";
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
    *  flavor
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\Flavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\Flavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets chargeMode
    *  **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode **参数说明**：实例的付费方式。 **取值范围**： - prePaid：包年/包月 - postPaid：按需计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
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

