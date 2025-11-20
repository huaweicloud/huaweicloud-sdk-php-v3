<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Shards implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Shards';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataNodeId  物理分片所在RDS的ID。
    * physicalDbName  物理分片名称。
    * status  物理分片运行状态。
    * shardIndex  物理分片序号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataNodeId' => 'string',
            'physicalDbName' => 'string',
            'status' => 'string',
            'shardIndex' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataNodeId  物理分片所在RDS的ID。
    * physicalDbName  物理分片名称。
    * status  物理分片运行状态。
    * shardIndex  物理分片序号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataNodeId' => null,
        'physicalDbName' => null,
        'status' => null,
        'shardIndex' => null
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
    * dataNodeId  物理分片所在RDS的ID。
    * physicalDbName  物理分片名称。
    * status  物理分片运行状态。
    * shardIndex  物理分片序号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataNodeId' => 'data_node_id',
            'physicalDbName' => 'physical_db_name',
            'status' => 'status',
            'shardIndex' => 'shard_index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataNodeId  物理分片所在RDS的ID。
    * physicalDbName  物理分片名称。
    * status  物理分片运行状态。
    * shardIndex  物理分片序号。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataNodeId' => 'setDataNodeId',
            'physicalDbName' => 'setPhysicalDbName',
            'status' => 'setStatus',
            'shardIndex' => 'setShardIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataNodeId  物理分片所在RDS的ID。
    * physicalDbName  物理分片名称。
    * status  物理分片运行状态。
    * shardIndex  物理分片序号。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataNodeId' => 'getDataNodeId',
            'physicalDbName' => 'getPhysicalDbName',
            'status' => 'getStatus',
            'shardIndex' => 'getShardIndex'
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
        $this->container['dataNodeId'] = isset($data['dataNodeId']) ? $data['dataNodeId'] : null;
        $this->container['physicalDbName'] = isset($data['physicalDbName']) ? $data['physicalDbName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['shardIndex'] = isset($data['shardIndex']) ? $data['shardIndex'] : null;
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
    * Gets dataNodeId
    *  物理分片所在RDS的ID。
    *
    * @return string|null
    */
    public function getDataNodeId()
    {
        return $this->container['dataNodeId'];
    }

    /**
    * Sets dataNodeId
    *
    * @param string|null $dataNodeId 物理分片所在RDS的ID。
    *
    * @return $this
    */
    public function setDataNodeId($dataNodeId)
    {
        $this->container['dataNodeId'] = $dataNodeId;
        return $this;
    }

    /**
    * Gets physicalDbName
    *  物理分片名称。
    *
    * @return string|null
    */
    public function getPhysicalDbName()
    {
        return $this->container['physicalDbName'];
    }

    /**
    * Sets physicalDbName
    *
    * @param string|null $physicalDbName 物理分片名称。
    *
    * @return $this
    */
    public function setPhysicalDbName($physicalDbName)
    {
        $this->container['physicalDbName'] = $physicalDbName;
        return $this;
    }

    /**
    * Gets status
    *  物理分片运行状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 物理分片运行状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets shardIndex
    *  物理分片序号。
    *
    * @return int|null
    */
    public function getShardIndex()
    {
        return $this->container['shardIndex'];
    }

    /**
    * Sets shardIndex
    *
    * @param int|null $shardIndex 物理分片序号。
    *
    * @return $this
    */
    public function setShardIndex($shardIndex)
    {
        $this->container['shardIndex'] = $shardIndex;
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

