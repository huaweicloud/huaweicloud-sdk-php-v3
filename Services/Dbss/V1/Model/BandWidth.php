<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandWidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandWidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargemode  计费类型
    * productid  带宽对应产品ID
    * sharetype  共享类型，目前仅支持PER
    * size  带宽，按需1-100M，包年包月1-300M
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargemode' => 'string',
            'productid' => 'string',
            'sharetype' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargemode  计费类型
    * productid  带宽对应产品ID
    * sharetype  共享类型，目前仅支持PER
    * size  带宽，按需1-100M，包年包月1-300M
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargemode' => null,
        'productid' => null,
        'sharetype' => null,
        'size' => 'int32'
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
    * chargemode  计费类型
    * productid  带宽对应产品ID
    * sharetype  共享类型，目前仅支持PER
    * size  带宽，按需1-100M，包年包月1-300M
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargemode' => 'chargemode',
            'productid' => 'productid',
            'sharetype' => 'sharetype',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargemode  计费类型
    * productid  带宽对应产品ID
    * sharetype  共享类型，目前仅支持PER
    * size  带宽，按需1-100M，包年包月1-300M
    *
    * @var string[]
    */
    protected static $setters = [
            'chargemode' => 'setChargemode',
            'productid' => 'setProductid',
            'sharetype' => 'setSharetype',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargemode  计费类型
    * productid  带宽对应产品ID
    * sharetype  共享类型，目前仅支持PER
    * size  带宽，按需1-100M，包年包月1-300M
    *
    * @var string[]
    */
    protected static $getters = [
            'chargemode' => 'getChargemode',
            'productid' => 'getProductid',
            'sharetype' => 'getSharetype',
            'size' => 'getSize'
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
        $this->container['chargemode'] = isset($data['chargemode']) ? $data['chargemode'] : null;
        $this->container['productid'] = isset($data['productid']) ? $data['productid'] : null;
        $this->container['sharetype'] = isset($data['sharetype']) ? $data['sharetype'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    * Gets chargemode
    *  计费类型
    *
    * @return string|null
    */
    public function getChargemode()
    {
        return $this->container['chargemode'];
    }

    /**
    * Sets chargemode
    *
    * @param string|null $chargemode 计费类型
    *
    * @return $this
    */
    public function setChargemode($chargemode)
    {
        $this->container['chargemode'] = $chargemode;
        return $this;
    }

    /**
    * Gets productid
    *  带宽对应产品ID
    *
    * @return string|null
    */
    public function getProductid()
    {
        return $this->container['productid'];
    }

    /**
    * Sets productid
    *
    * @param string|null $productid 带宽对应产品ID
    *
    * @return $this
    */
    public function setProductid($productid)
    {
        $this->container['productid'] = $productid;
        return $this;
    }

    /**
    * Gets sharetype
    *  共享类型，目前仅支持PER
    *
    * @return string|null
    */
    public function getSharetype()
    {
        return $this->container['sharetype'];
    }

    /**
    * Sets sharetype
    *
    * @param string|null $sharetype 共享类型，目前仅支持PER
    *
    * @return $this
    */
    public function setSharetype($sharetype)
    {
        $this->container['sharetype'] = $sharetype;
        return $this;
    }

    /**
    * Gets size
    *  带宽，按需1-100M，包年包月1-300M
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 带宽，按需1-100M，包年包月1-300M
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

