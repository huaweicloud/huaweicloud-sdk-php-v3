<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindPublicReqEipReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindPublicReqEipReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandWidth  bandWidth
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandWidth' => '\HuaweiCloud\SDK\Css\V1\Model\BindPublicReqEipBandWidth',
            'isAutoPay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandWidth  bandWidth
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandWidth' => null,
        'isAutoPay' => 'int32'
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
    * bandWidth  bandWidth
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandWidth' => 'band_width',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandWidth  bandWidth
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $setters = [
            'bandWidth' => 'setBandWidth',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandWidth  bandWidth
    * isAutoPay  isAutoPay
    *
    * @var string[]
    */
    protected static $getters = [
            'bandWidth' => 'getBandWidth',
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['bandWidth'] = isset($data['bandWidth']) ? $data['bandWidth'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bandWidth'] === null) {
            $invalidProperties[] = "'bandWidth' can't be null";
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
    * Gets bandWidth
    *  bandWidth
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\BindPublicReqEipBandWidth
    */
    public function getBandWidth()
    {
        return $this->container['bandWidth'];
    }

    /**
    * Sets bandWidth
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\BindPublicReqEipBandWidth $bandWidth bandWidth
    *
    * @return $this
    */
    public function setBandWidth($bandWidth)
    {
        $this->container['bandWidth'] = $bandWidth;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  isAutoPay
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay isAutoPay
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

