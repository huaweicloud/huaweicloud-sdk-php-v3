<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeploymentFormResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeploymentFormResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * initialNodeNum  初始节点数。
    * solution  解决方案模板名称。
    * shardNum  分片数。
    * replicaNum  副本数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'initialNodeNum' => 'int',
            'solution' => 'string',
            'shardNum' => 'int',
            'replicaNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * initialNodeNum  初始节点数。
    * solution  解决方案模板名称。
    * shardNum  分片数。
    * replicaNum  副本数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'initialNodeNum' => null,
        'solution' => null,
        'shardNum' => null,
        'replicaNum' => null
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
    * initialNodeNum  初始节点数。
    * solution  解决方案模板名称。
    * shardNum  分片数。
    * replicaNum  副本数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'initialNodeNum' => 'initial_node_num',
            'solution' => 'solution',
            'shardNum' => 'shard_num',
            'replicaNum' => 'replica_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * initialNodeNum  初始节点数。
    * solution  解决方案模板名称。
    * shardNum  分片数。
    * replicaNum  副本数。
    *
    * @var string[]
    */
    protected static $setters = [
            'initialNodeNum' => 'setInitialNodeNum',
            'solution' => 'setSolution',
            'shardNum' => 'setShardNum',
            'replicaNum' => 'setReplicaNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * initialNodeNum  初始节点数。
    * solution  解决方案模板名称。
    * shardNum  分片数。
    * replicaNum  副本数。
    *
    * @var string[]
    */
    protected static $getters = [
            'initialNodeNum' => 'getInitialNodeNum',
            'solution' => 'getSolution',
            'shardNum' => 'getShardNum',
            'replicaNum' => 'getReplicaNum'
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
        $this->container['initialNodeNum'] = isset($data['initialNodeNum']) ? $data['initialNodeNum'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['shardNum'] = isset($data['shardNum']) ? $data['shardNum'] : null;
        $this->container['replicaNum'] = isset($data['replicaNum']) ? $data['replicaNum'] : null;
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
    * Gets initialNodeNum
    *  初始节点数。
    *
    * @return int|null
    */
    public function getInitialNodeNum()
    {
        return $this->container['initialNodeNum'];
    }

    /**
    * Sets initialNodeNum
    *
    * @param int|null $initialNodeNum 初始节点数。
    *
    * @return $this
    */
    public function setInitialNodeNum($initialNodeNum)
    {
        $this->container['initialNodeNum'] = $initialNodeNum;
        return $this;
    }

    /**
    * Gets solution
    *  解决方案模板名称。
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution 解决方案模板名称。
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets shardNum
    *  分片数。
    *
    * @return int|null
    */
    public function getShardNum()
    {
        return $this->container['shardNum'];
    }

    /**
    * Sets shardNum
    *
    * @param int|null $shardNum 分片数。
    *
    * @return $this
    */
    public function setShardNum($shardNum)
    {
        $this->container['shardNum'] = $shardNum;
        return $this;
    }

    /**
    * Gets replicaNum
    *  副本数。
    *
    * @return int|null
    */
    public function getReplicaNum()
    {
        return $this->container['replicaNum'];
    }

    /**
    * Sets replicaNum
    *
    * @param int|null $replicaNum 副本数。
    *
    * @return $this
    */
    public function setReplicaNum($replicaNum)
    {
        $this->container['replicaNum'] = $replicaNum;
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

