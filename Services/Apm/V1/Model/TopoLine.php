<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopoLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopoLine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fromNode  开始节点。
    * toNode  结束节点。
    * direction  指向。
    * collector  采集器名称。
    * targetEnvId  环境id。
    * hints  线条上的提示信息。
    * filterValue  过滤值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fromNode' => 'string',
            'toNode' => 'string',
            'direction' => 'string',
            'collector' => 'string',
            'targetEnvId' => 'int',
            'hints' => 'map[string,string]',
            'filterValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fromNode  开始节点。
    * toNode  结束节点。
    * direction  指向。
    * collector  采集器名称。
    * targetEnvId  环境id。
    * hints  线条上的提示信息。
    * filterValue  过滤值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fromNode' => null,
        'toNode' => null,
        'direction' => null,
        'collector' => null,
        'targetEnvId' => 'int64',
        'hints' => null,
        'filterValue' => null
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
    * fromNode  开始节点。
    * toNode  结束节点。
    * direction  指向。
    * collector  采集器名称。
    * targetEnvId  环境id。
    * hints  线条上的提示信息。
    * filterValue  过滤值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fromNode' => 'from_node',
            'toNode' => 'to_node',
            'direction' => 'direction',
            'collector' => 'collector',
            'targetEnvId' => 'target_env_id',
            'hints' => 'hints',
            'filterValue' => 'filter_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fromNode  开始节点。
    * toNode  结束节点。
    * direction  指向。
    * collector  采集器名称。
    * targetEnvId  环境id。
    * hints  线条上的提示信息。
    * filterValue  过滤值。
    *
    * @var string[]
    */
    protected static $setters = [
            'fromNode' => 'setFromNode',
            'toNode' => 'setToNode',
            'direction' => 'setDirection',
            'collector' => 'setCollector',
            'targetEnvId' => 'setTargetEnvId',
            'hints' => 'setHints',
            'filterValue' => 'setFilterValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fromNode  开始节点。
    * toNode  结束节点。
    * direction  指向。
    * collector  采集器名称。
    * targetEnvId  环境id。
    * hints  线条上的提示信息。
    * filterValue  过滤值。
    *
    * @var string[]
    */
    protected static $getters = [
            'fromNode' => 'getFromNode',
            'toNode' => 'getToNode',
            'direction' => 'getDirection',
            'collector' => 'getCollector',
            'targetEnvId' => 'getTargetEnvId',
            'hints' => 'getHints',
            'filterValue' => 'getFilterValue'
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
        $this->container['fromNode'] = isset($data['fromNode']) ? $data['fromNode'] : null;
        $this->container['toNode'] = isset($data['toNode']) ? $data['toNode'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['collector'] = isset($data['collector']) ? $data['collector'] : null;
        $this->container['targetEnvId'] = isset($data['targetEnvId']) ? $data['targetEnvId'] : null;
        $this->container['hints'] = isset($data['hints']) ? $data['hints'] : null;
        $this->container['filterValue'] = isset($data['filterValue']) ? $data['filterValue'] : null;
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
    * Gets fromNode
    *  开始节点。
    *
    * @return string|null
    */
    public function getFromNode()
    {
        return $this->container['fromNode'];
    }

    /**
    * Sets fromNode
    *
    * @param string|null $fromNode 开始节点。
    *
    * @return $this
    */
    public function setFromNode($fromNode)
    {
        $this->container['fromNode'] = $fromNode;
        return $this;
    }

    /**
    * Gets toNode
    *  结束节点。
    *
    * @return string|null
    */
    public function getToNode()
    {
        return $this->container['toNode'];
    }

    /**
    * Sets toNode
    *
    * @param string|null $toNode 结束节点。
    *
    * @return $this
    */
    public function setToNode($toNode)
    {
        $this->container['toNode'] = $toNode;
        return $this;
    }

    /**
    * Gets direction
    *  指向。
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 指向。
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets collector
    *  采集器名称。
    *
    * @return string|null
    */
    public function getCollector()
    {
        return $this->container['collector'];
    }

    /**
    * Sets collector
    *
    * @param string|null $collector 采集器名称。
    *
    * @return $this
    */
    public function setCollector($collector)
    {
        $this->container['collector'] = $collector;
        return $this;
    }

    /**
    * Gets targetEnvId
    *  环境id。
    *
    * @return int|null
    */
    public function getTargetEnvId()
    {
        return $this->container['targetEnvId'];
    }

    /**
    * Sets targetEnvId
    *
    * @param int|null $targetEnvId 环境id。
    *
    * @return $this
    */
    public function setTargetEnvId($targetEnvId)
    {
        $this->container['targetEnvId'] = $targetEnvId;
        return $this;
    }

    /**
    * Gets hints
    *  线条上的提示信息。
    *
    * @return map[string,string]|null
    */
    public function getHints()
    {
        return $this->container['hints'];
    }

    /**
    * Sets hints
    *
    * @param map[string,string]|null $hints 线条上的提示信息。
    *
    * @return $this
    */
    public function setHints($hints)
    {
        $this->container['hints'] = $hints;
        return $this;
    }

    /**
    * Gets filterValue
    *  过滤值。
    *
    * @return string|null
    */
    public function getFilterValue()
    {
        return $this->container['filterValue'];
    }

    /**
    * Sets filterValue
    *
    * @param string|null $filterValue 过滤值。
    *
    * @return $this
    */
    public function setFilterValue($filterValue)
    {
        $this->container['filterValue'] = $filterValue;
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

