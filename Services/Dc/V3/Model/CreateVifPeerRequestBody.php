<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVifPeerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVifPeerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vifPeer  vifPeer
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vifPeer' => '\HuaweiCloud\SDK\Dc\V3\Model\CreateVifPeer'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vifPeer  vifPeer
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vifPeer' => null
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
    * vifPeer  vifPeer
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vifPeer' => 'vif_peer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vifPeer  vifPeer
    *
    * @var string[]
    */
    protected static $setters = [
            'vifPeer' => 'setVifPeer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vifPeer  vifPeer
    *
    * @var string[]
    */
    protected static $getters = [
            'vifPeer' => 'getVifPeer'
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
        $this->container['vifPeer'] = isset($data['vifPeer']) ? $data['vifPeer'] : null;
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
    * Gets vifPeer
    *  vifPeer
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\CreateVifPeer|null
    */
    public function getVifPeer()
    {
        return $this->container['vifPeer'];
    }

    /**
    * Sets vifPeer
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\CreateVifPeer|null $vifPeer vifPeer
    *
    * @return $this
    */
    public function setVifPeer($vifPeer)
    {
        $this->container['vifPeer'] = $vifPeer;
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

