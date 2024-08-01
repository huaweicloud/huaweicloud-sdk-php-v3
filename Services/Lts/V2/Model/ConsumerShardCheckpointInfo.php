<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsumerShardCheckpointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsumerShardCheckpointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shardId  日志Shard ID
    * checkpoint  游标值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shardId' => 'string',
            'checkpoint' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shardId  日志Shard ID
    * checkpoint  游标值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shardId' => null,
        'checkpoint' => 'int64'
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
    * shardId  日志Shard ID
    * checkpoint  游标值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shardId' => 'shard_id',
            'checkpoint' => 'checkpoint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shardId  日志Shard ID
    * checkpoint  游标值
    *
    * @var string[]
    */
    protected static $setters = [
            'shardId' => 'setShardId',
            'checkpoint' => 'setCheckpoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shardId  日志Shard ID
    * checkpoint  游标值
    *
    * @var string[]
    */
    protected static $getters = [
            'shardId' => 'getShardId',
            'checkpoint' => 'getCheckpoint'
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
        $this->container['shardId'] = isset($data['shardId']) ? $data['shardId'] : null;
        $this->container['checkpoint'] = isset($data['checkpoint']) ? $data['checkpoint'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shardId'] === null) {
            $invalidProperties[] = "'shardId' can't be null";
        }
        if ($this->container['checkpoint'] === null) {
            $invalidProperties[] = "'checkpoint' can't be null";
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
    * Gets shardId
    *  日志Shard ID
    *
    * @return string
    */
    public function getShardId()
    {
        return $this->container['shardId'];
    }

    /**
    * Sets shardId
    *
    * @param string $shardId 日志Shard ID
    *
    * @return $this
    */
    public function setShardId($shardId)
    {
        $this->container['shardId'] = $shardId;
        return $this;
    }

    /**
    * Gets checkpoint
    *  游标值
    *
    * @return int
    */
    public function getCheckpoint()
    {
        return $this->container['checkpoint'];
    }

    /**
    * Sets checkpoint
    *
    * @param int $checkpoint 游标值
    *
    * @return $this
    */
    public function setCheckpoint($checkpoint)
    {
        $this->container['checkpoint'] = $checkpoint;
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

