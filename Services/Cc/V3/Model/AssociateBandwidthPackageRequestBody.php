<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateBandwidthPackageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateBandwidthPackageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidthPackage  bandwidthPackage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthPackage' => '\HuaweiCloud\SDK\Cc\V3\Model\AssociateBandwidthPackage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidthPackage  bandwidthPackage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthPackage' => null
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
    * bandwidthPackage  bandwidthPackage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthPackage' => 'bandwidth_package'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidthPackage  bandwidthPackage
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthPackage' => 'setBandwidthPackage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidthPackage  bandwidthPackage
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthPackage' => 'getBandwidthPackage'
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
        $this->container['bandwidthPackage'] = isset($data['bandwidthPackage']) ? $data['bandwidthPackage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bandwidthPackage'] === null) {
            $invalidProperties[] = "'bandwidthPackage' can't be null";
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
    * Gets bandwidthPackage
    *  bandwidthPackage
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AssociateBandwidthPackage
    */
    public function getBandwidthPackage()
    {
        return $this->container['bandwidthPackage'];
    }

    /**
    * Sets bandwidthPackage
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AssociateBandwidthPackage $bandwidthPackage bandwidthPackage
    *
    * @return $this
    */
    public function setBandwidthPackage($bandwidthPackage)
    {
        $this->container['bandwidthPackage'] = $bandwidthPackage;
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

