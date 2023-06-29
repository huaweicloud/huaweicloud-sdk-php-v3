<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChargeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChargeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。暂不支持。 - postPaid：后付费，即按需计费。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。暂不支持。 - postPaid：后付费，即按需计费。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。暂不支持。 - postPaid：后付费，即按需计费。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeMode' => 'charge_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。暂不支持。 - postPaid：后付费，即按需计费。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeMode' => 'setChargeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeMode  计费模式。 取值范围： - prePaid：预付费，即包年/包月。暂不支持。 - postPaid：后付费，即按需计费。
    *
    * @var string[]
    */
    protected static $getters = [
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
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
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
    * Gets chargeMode
    *  计费模式。 取值范围： - prePaid：预付费，即包年/包月。暂不支持。 - postPaid：后付费，即按需计费。
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode 计费模式。 取值范围： - prePaid：预付费，即包年/包月。暂不支持。 - postPaid：后付费，即按需计费。
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

