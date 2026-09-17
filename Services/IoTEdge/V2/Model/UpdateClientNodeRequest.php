<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateClientNodeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateClientNodeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelId  边缘推送通道ID
    * nodeId  边缘节点ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelId' => 'string',
            'nodeId' => 'string',
            'body' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateNodeChannelRequestDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelId  边缘推送通道ID
    * nodeId  边缘节点ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelId' => null,
        'nodeId' => null,
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
    * channelId  边缘推送通道ID
    * nodeId  边缘节点ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelId' => 'channel_id',
            'nodeId' => 'node_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelId  边缘推送通道ID
    * nodeId  边缘节点ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'channelId' => 'setChannelId',
            'nodeId' => 'setNodeId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelId  边缘推送通道ID
    * nodeId  边缘节点ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'channelId' => 'getChannelId',
            'nodeId' => 'getNodeId',
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
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
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
        if ($this->container['channelId'] === null) {
            $invalidProperties[] = "'channelId' can't be null";
        }
            if ((mb_strlen($this->container['channelId']) > 64)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['channelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['channelId'])) {
                $invalidProperties[] = "invalid value for 'channelId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['nodeId'])) {
                $invalidProperties[] = "invalid value for 'nodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
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
    * Gets channelId
    *  边缘推送通道ID
    *
    * @return string
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string $channelId 边缘推送通道ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets nodeId
    *  边缘节点ID
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
    * @param string $nodeId 边缘节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateNodeChannelRequestDTO|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateNodeChannelRequestDTO|null $body body
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

