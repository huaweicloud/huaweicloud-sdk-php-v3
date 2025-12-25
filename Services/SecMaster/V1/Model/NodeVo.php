<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * args  相关描述信息
    * nodeId  UUID
    * nodeStatus  nodeStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'args' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ArgsVo[]',
            'nodeId' => 'string',
            'nodeStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NodeStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * args  相关描述信息
    * nodeId  UUID
    * nodeStatus  nodeStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'args' => null,
        'nodeId' => null,
        'nodeStatus' => null
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
    * args  相关描述信息
    * nodeId  UUID
    * nodeStatus  nodeStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'args' => 'args',
            'nodeId' => 'node_id',
            'nodeStatus' => 'node_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * args  相关描述信息
    * nodeId  UUID
    * nodeStatus  nodeStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'args' => 'setArgs',
            'nodeId' => 'setNodeId',
            'nodeStatus' => 'setNodeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * args  相关描述信息
    * nodeId  UUID
    * nodeStatus  nodeStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'args' => 'getArgs',
            'nodeId' => 'getNodeId',
            'nodeStatus' => 'getNodeStatus'
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
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeStatus'] = isset($data['nodeStatus']) ? $data['nodeStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 36.";
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
    * Gets args
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ArgsVo[]|null
    */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
    * Sets args
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ArgsVo[]|null $args 相关描述信息
    *
    * @return $this
    */
    public function setArgs($args)
    {
        $this->container['args'] = $args;
        return $this;
    }

    /**
    * Gets nodeId
    *  UUID
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
    * @param string|null $nodeId UUID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeStatus
    *  nodeStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NodeStatus|null
    */
    public function getNodeStatus()
    {
        return $this->container['nodeStatus'];
    }

    /**
    * Sets nodeStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NodeStatus|null $nodeStatus nodeStatus
    *
    * @return $this
    */
    public function setNodeStatus($nodeStatus)
    {
        $this->container['nodeStatus'] = $nodeStatus;
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

