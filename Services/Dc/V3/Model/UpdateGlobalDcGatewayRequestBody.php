<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateGlobalDcGatewayRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateGlobalDcGatewayRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalDcGateway  globalDcGateway
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalDcGateway' => '\HuaweiCloud\SDK\Dc\V3\Model\UpdateGlobalDcGateway'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalDcGateway  globalDcGateway
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalDcGateway' => null
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
    * globalDcGateway  globalDcGateway
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalDcGateway' => 'global_dc_gateway'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalDcGateway  globalDcGateway
    *
    * @var string[]
    */
    protected static $setters = [
            'globalDcGateway' => 'setGlobalDcGateway'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalDcGateway  globalDcGateway
    *
    * @var string[]
    */
    protected static $getters = [
            'globalDcGateway' => 'getGlobalDcGateway'
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
        $this->container['globalDcGateway'] = isset($data['globalDcGateway']) ? $data['globalDcGateway'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['globalDcGateway'] === null) {
            $invalidProperties[] = "'globalDcGateway' can't be null";
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
    * Gets globalDcGateway
    *  globalDcGateway
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\UpdateGlobalDcGateway
    */
    public function getGlobalDcGateway()
    {
        return $this->container['globalDcGateway'];
    }

    /**
    * Sets globalDcGateway
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\UpdateGlobalDcGateway $globalDcGateway globalDcGateway
    *
    * @return $this
    */
    public function setGlobalDcGateway($globalDcGateway)
    {
        $this->container['globalDcGateway'] = $globalDcGateway;
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
