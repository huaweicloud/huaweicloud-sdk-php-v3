<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAuthorizedNodeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAuthorizedNodeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  边缘节点ID
    * authorizedTime  授权时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'authorizedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  边缘节点ID
    * authorizedTime  授权时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'authorizedTime' => null
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
    * nodeId  边缘节点ID
    * authorizedTime  授权时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'authorizedTime' => 'authorized_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  边缘节点ID
    * authorizedTime  授权时间
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'authorizedTime' => 'setAuthorizedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  边缘节点ID
    * authorizedTime  授权时间
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'authorizedTime' => 'getAuthorizedTime'
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
        $this->container['authorizedTime'] = isset($data['authorizedTime']) ? $data['authorizedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorizedTime']) && (mb_strlen($this->container['authorizedTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'authorizedTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['authorizedTime']) && (mb_strlen($this->container['authorizedTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorizedTime', the character length must be bigger than or equal to 1.";
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
    *  边缘节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 边缘节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets authorizedTime
    *  授权时间
    *
    * @return string|null
    */
    public function getAuthorizedTime()
    {
        return $this->container['authorizedTime'];
    }

    /**
    * Sets authorizedTime
    *
    * @param string|null $authorizedTime 授权时间
    *
    * @return $this
    */
    public function setAuthorizedTime($authorizedTime)
    {
        $this->container['authorizedTime'] = $authorizedTime;
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

