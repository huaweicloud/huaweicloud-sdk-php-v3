<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HangUpClientsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HangUpClientsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  节点id
    * clientAddrs  要kill的会话addr列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'clientAddrs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  节点id
    * clientAddrs  要kill的会话addr列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'clientAddrs' => null
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
    * nodeId  节点id
    * clientAddrs  要kill的会话addr列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'clientAddrs' => 'client_addrs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  节点id
    * clientAddrs  要kill的会话addr列表
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'clientAddrs' => 'setClientAddrs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  节点id
    * clientAddrs  要kill的会话addr列表
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'clientAddrs' => 'getClientAddrs'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['clientAddrs'] = isset($data['clientAddrs']) ? $data['clientAddrs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['clientAddrs'] === null) {
            $invalidProperties[] = "'clientAddrs' can't be null";
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
    * Gets nodeId
    *  节点id
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets clientAddrs
    *  要kill的会话addr列表
    *
    * @return string[]
    */
    public function getClientAddrs()
    {
        return $this->container['clientAddrs'];
    }

    /**
    * Sets clientAddrs
    *
    * @param string[] $clientAddrs 要kill的会话addr列表
    *
    * @return $this
    */
    public function setClientAddrs($clientAddrs)
    {
        $this->container['clientAddrs'] = $clientAddrs;
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

