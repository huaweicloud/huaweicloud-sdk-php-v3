<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePeerLinkRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePeerLinkRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalDcGatewayId  全域接入网关ID
    * peerLinkId  全域接入网关对等体
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalDcGatewayId' => 'string',
            'peerLinkId' => 'string',
            'body' => '\HuaweiCloud\SDK\Dc\V3\Model\UpdateExternalPeerLinkRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalDcGatewayId  全域接入网关ID
    * peerLinkId  全域接入网关对等体
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalDcGatewayId' => null,
        'peerLinkId' => null,
        'body' => null
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
    * globalDcGatewayId  全域接入网关ID
    * peerLinkId  全域接入网关对等体
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalDcGatewayId' => 'global_dc_gateway_id',
            'peerLinkId' => 'peer_link_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalDcGatewayId  全域接入网关ID
    * peerLinkId  全域接入网关对等体
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'globalDcGatewayId' => 'setGlobalDcGatewayId',
            'peerLinkId' => 'setPeerLinkId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalDcGatewayId  全域接入网关ID
    * peerLinkId  全域接入网关对等体
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'globalDcGatewayId' => 'getGlobalDcGatewayId',
            'peerLinkId' => 'getPeerLinkId',
            'body' => 'getBody'
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
        $this->container['globalDcGatewayId'] = isset($data['globalDcGatewayId']) ? $data['globalDcGatewayId'] : null;
        $this->container['peerLinkId'] = isset($data['peerLinkId']) ? $data['peerLinkId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['globalDcGatewayId'] === null) {
            $invalidProperties[] = "'globalDcGatewayId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalDcGatewayId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['peerLinkId'] === null) {
            $invalidProperties[] = "'peerLinkId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['peerLinkId'])) {
                $invalidProperties[] = "invalid value for 'peerLinkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets globalDcGatewayId
    *  全域接入网关ID
    *
    * @return string
    */
    public function getGlobalDcGatewayId()
    {
        return $this->container['globalDcGatewayId'];
    }

    /**
    * Sets globalDcGatewayId
    *
    * @param string $globalDcGatewayId 全域接入网关ID
    *
    * @return $this
    */
    public function setGlobalDcGatewayId($globalDcGatewayId)
    {
        $this->container['globalDcGatewayId'] = $globalDcGatewayId;
        return $this;
    }

    /**
    * Gets peerLinkId
    *  全域接入网关对等体
    *
    * @return string
    */
    public function getPeerLinkId()
    {
        return $this->container['peerLinkId'];
    }

    /**
    * Sets peerLinkId
    *
    * @param string $peerLinkId 全域接入网关对等体
    *
    * @return $this
    */
    public function setPeerLinkId($peerLinkId)
    {
        $this->container['peerLinkId'] = $peerLinkId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\UpdateExternalPeerLinkRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\UpdateExternalPeerLinkRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

