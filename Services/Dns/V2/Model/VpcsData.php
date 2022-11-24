<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcsData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  vpc的ID，uuid形式的一个资源标识。
    * inboundEndpointCount  vpc下入站终端节点的数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'inboundEndpointCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  vpc的ID，uuid形式的一个资源标识。
    * inboundEndpointCount  vpc下入站终端节点的数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'inboundEndpointCount' => 'int32'
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
    * id  vpc的ID，uuid形式的一个资源标识。
    * inboundEndpointCount  vpc下入站终端节点的数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'inboundEndpointCount' => 'inbound_endpoint_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  vpc的ID，uuid形式的一个资源标识。
    * inboundEndpointCount  vpc下入站终端节点的数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'inboundEndpointCount' => 'setInboundEndpointCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  vpc的ID，uuid形式的一个资源标识。
    * inboundEndpointCount  vpc下入站终端节点的数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'inboundEndpointCount' => 'getInboundEndpointCount'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inboundEndpointCount'] = isset($data['inboundEndpointCount']) ? $data['inboundEndpointCount'] : null;
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
    * Gets id
    *  vpc的ID，uuid形式的一个资源标识。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id vpc的ID，uuid形式的一个资源标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets inboundEndpointCount
    *  vpc下入站终端节点的数量。
    *
    * @return int|null
    */
    public function getInboundEndpointCount()
    {
        return $this->container['inboundEndpointCount'];
    }

    /**
    * Sets inboundEndpointCount
    *
    * @param int|null $inboundEndpointCount vpc下入站终端节点的数量。
    *
    * @return $this
    */
    public function setInboundEndpointCount($inboundEndpointCount)
    {
        $this->container['inboundEndpointCount'] = $inboundEndpointCount;
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

