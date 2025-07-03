<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopoNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopoNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeType  节点类型。
    * nodeName  节点名称。
    * nodeId  节点id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeType' => 'string',
            'nodeName' => 'string',
            'nodeId' => 'string',
            'envId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeType  节点类型。
    * nodeName  节点名称。
    * nodeId  节点id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeType' => null,
        'nodeName' => null,
        'nodeId' => null,
        'envId' => 'int64'
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
    * nodeType  节点类型。
    * nodeName  节点名称。
    * nodeId  节点id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeType' => 'node_type',
            'nodeName' => 'node_name',
            'nodeId' => 'node_id',
            'envId' => 'env_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeType  节点类型。
    * nodeName  节点名称。
    * nodeId  节点id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeType' => 'setNodeType',
            'nodeName' => 'setNodeName',
            'nodeId' => 'setNodeId',
            'envId' => 'setEnvId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeType  节点类型。
    * nodeName  节点名称。
    * nodeId  节点id。
    * envId  环境id。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeType' => 'getNodeType',
            'nodeName' => 'getNodeName',
            'nodeId' => 'getNodeId',
            'envId' => 'getEnvId'
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
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
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
    * Gets nodeType
    *  节点类型。
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点id。
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
    * @param string|null $nodeId 节点id。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
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

