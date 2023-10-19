<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalDcGatewayPeerLinkId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalDcGatewayPeerLinkId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalDcGatewayPeerLinkId  资源ID标识符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalDcGatewayPeerLinkId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalDcGatewayPeerLinkId  资源ID标识符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalDcGatewayPeerLinkId' => null
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
    * globalDcGatewayPeerLinkId  资源ID标识符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalDcGatewayPeerLinkId' => 'global_dc_gateway_peer_link_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalDcGatewayPeerLinkId  资源ID标识符。
    *
    * @var string[]
    */
    protected static $setters = [
            'globalDcGatewayPeerLinkId' => 'setGlobalDcGatewayPeerLinkId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalDcGatewayPeerLinkId  资源ID标识符。
    *
    * @var string[]
    */
    protected static $getters = [
            'globalDcGatewayPeerLinkId' => 'getGlobalDcGatewayPeerLinkId'
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
        $this->container['globalDcGatewayPeerLinkId'] = isset($data['globalDcGatewayPeerLinkId']) ? $data['globalDcGatewayPeerLinkId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['globalDcGatewayPeerLinkId']) && (mb_strlen($this->container['globalDcGatewayPeerLinkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayPeerLinkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalDcGatewayPeerLinkId']) && (mb_strlen($this->container['globalDcGatewayPeerLinkId']) < 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayPeerLinkId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['globalDcGatewayPeerLinkId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['globalDcGatewayPeerLinkId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayPeerLinkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
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
    * Gets globalDcGatewayPeerLinkId
    *  资源ID标识符。
    *
    * @return string|null
    */
    public function getGlobalDcGatewayPeerLinkId()
    {
        return $this->container['globalDcGatewayPeerLinkId'];
    }

    /**
    * Sets globalDcGatewayPeerLinkId
    *
    * @param string|null $globalDcGatewayPeerLinkId 资源ID标识符。
    *
    * @return $this
    */
    public function setGlobalDcGatewayPeerLinkId($globalDcGatewayPeerLinkId)
    {
        $this->container['globalDcGatewayPeerLinkId'] = $globalDcGatewayPeerLinkId;
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

