<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConnectionDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConnectionDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dasConnInfo  dasConnInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dasConnInfo' => '\HuaweiCloud\SDK\Das\V3\Model\DasConnInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dasConnInfo  dasConnInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dasConnInfo' => null
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
    * dasConnInfo  dasConnInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dasConnInfo' => 'das_conn_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dasConnInfo  dasConnInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'dasConnInfo' => 'setDasConnInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dasConnInfo  dasConnInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'dasConnInfo' => 'getDasConnInfo'
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
        $this->container['dasConnInfo'] = isset($data['dasConnInfo']) ? $data['dasConnInfo'] : null;
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
    * Gets dasConnInfo
    *  dasConnInfo
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DasConnInfo|null
    */
    public function getDasConnInfo()
    {
        return $this->container['dasConnInfo'];
    }

    /**
    * Sets dasConnInfo
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DasConnInfo|null $dasConnInfo dasConnInfo
    *
    * @return $this
    */
    public function setDasConnInfo($dasConnInfo)
    {
        $this->container['dasConnInfo'] = $dasConnInfo;
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

