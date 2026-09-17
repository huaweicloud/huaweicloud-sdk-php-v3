<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowLogPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowLogPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  节点ID，实例节点的唯一标识
    * nodeName  节点名称
    * trendData  趋势数量列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'nodeName' => 'string',
            'trendData' => '\HuaweiCloud\SDK\Das\V3\Model\SlowLogTrendPoint[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  节点ID，实例节点的唯一标识
    * nodeName  节点名称
    * trendData  趋势数量列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'nodeName' => null,
        'trendData' => null
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
    * nodeId  节点ID，实例节点的唯一标识
    * nodeName  节点名称
    * trendData  趋势数量列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'trendData' => 'trend_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  节点ID，实例节点的唯一标识
    * nodeName  节点名称
    * trendData  趋势数量列表
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'trendData' => 'setTrendData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  节点ID，实例节点的唯一标识
    * nodeName  节点名称
    * trendData  趋势数量列表
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'trendData' => 'getTrendData'
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
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['trendData'] = isset($data['trendData']) ? $data['trendData'] : null;
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
    * Gets nodeId
    *  节点ID，实例节点的唯一标识
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
    * @param string|null $nodeId 节点ID，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称
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
    * @param string|null $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets trendData
    *  趋势数量列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowLogTrendPoint[]|null
    */
    public function getTrendData()
    {
        return $this->container['trendData'];
    }

    /**
    * Sets trendData
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowLogTrendPoint[]|null $trendData 趋势数量列表
    *
    * @return $this
    */
    public function setTrendData($trendData)
    {
        $this->container['trendData'] = $trendData;
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

