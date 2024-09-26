<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalDcGatewayRegionId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalDcGatewayRegionId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalDcGatewayRegionId  Gdgw的RegionID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalDcGatewayRegionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalDcGatewayRegionId  Gdgw的RegionID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalDcGatewayRegionId' => null
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
    * globalDcGatewayRegionId  Gdgw的RegionID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalDcGatewayRegionId' => 'global_dc_gateway_region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalDcGatewayRegionId  Gdgw的RegionID。
    *
    * @var string[]
    */
    protected static $setters = [
            'globalDcGatewayRegionId' => 'setGlobalDcGatewayRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalDcGatewayRegionId  Gdgw的RegionID。
    *
    * @var string[]
    */
    protected static $getters = [
            'globalDcGatewayRegionId' => 'getGlobalDcGatewayRegionId'
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
        $this->container['globalDcGatewayRegionId'] = isset($data['globalDcGatewayRegionId']) ? $data['globalDcGatewayRegionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['globalDcGatewayRegionId'] === null) {
            $invalidProperties[] = "'globalDcGatewayRegionId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['globalDcGatewayRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayRegionId', the character length must be bigger than or equal to 1.";
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
    * Gets globalDcGatewayRegionId
    *  Gdgw的RegionID。
    *
    * @return string
    */
    public function getGlobalDcGatewayRegionId()
    {
        return $this->container['globalDcGatewayRegionId'];
    }

    /**
    * Sets globalDcGatewayRegionId
    *
    * @param string $globalDcGatewayRegionId Gdgw的RegionID。
    *
    * @return $this
    */
    public function setGlobalDcGatewayRegionId($globalDcGatewayRegionId)
    {
        $this->container['globalDcGatewayRegionId'] = $globalDcGatewayRegionId;
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

