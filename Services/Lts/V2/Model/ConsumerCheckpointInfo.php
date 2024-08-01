<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsumerCheckpointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsumerCheckpointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpoint  游标值
    * consumerGroupName  消费组名
    * consumerName  消费者名
    * projectId  项目ID
    * shardId  日志Shard ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpoint' => 'int',
            'consumerGroupName' => 'string',
            'consumerName' => 'string',
            'projectId' => 'string',
            'shardId' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpoint  游标值
    * consumerGroupName  消费组名
    * consumerName  消费者名
    * projectId  项目ID
    * shardId  日志Shard ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpoint' => 'int64',
        'consumerGroupName' => null,
        'consumerName' => null,
        'projectId' => null,
        'shardId' => null,
        'updateTime' => 'int64'
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
    * checkpoint  游标值
    * consumerGroupName  消费组名
    * consumerName  消费者名
    * projectId  项目ID
    * shardId  日志Shard ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpoint' => 'checkpoint',
            'consumerGroupName' => 'consumer_group_name',
            'consumerName' => 'consumer_name',
            'projectId' => 'project_id',
            'shardId' => 'shard_id',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpoint  游标值
    * consumerGroupName  消费组名
    * consumerName  消费者名
    * projectId  项目ID
    * shardId  日志Shard ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpoint' => 'setCheckpoint',
            'consumerGroupName' => 'setConsumerGroupName',
            'consumerName' => 'setConsumerName',
            'projectId' => 'setProjectId',
            'shardId' => 'setShardId',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpoint  游标值
    * consumerGroupName  消费组名
    * consumerName  消费者名
    * projectId  项目ID
    * shardId  日志Shard ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpoint' => 'getCheckpoint',
            'consumerGroupName' => 'getConsumerGroupName',
            'consumerName' => 'getConsumerName',
            'projectId' => 'getProjectId',
            'shardId' => 'getShardId',
            'updateTime' => 'getUpdateTime'
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
        $this->container['checkpoint'] = isset($data['checkpoint']) ? $data['checkpoint'] : null;
        $this->container['consumerGroupName'] = isset($data['consumerGroupName']) ? $data['consumerGroupName'] : null;
        $this->container['consumerName'] = isset($data['consumerName']) ? $data['consumerName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['shardId'] = isset($data['shardId']) ? $data['shardId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets checkpoint
    *  游标值
    *
    * @return int|null
    */
    public function getCheckpoint()
    {
        return $this->container['checkpoint'];
    }

    /**
    * Sets checkpoint
    *
    * @param int|null $checkpoint 游标值
    *
    * @return $this
    */
    public function setCheckpoint($checkpoint)
    {
        $this->container['checkpoint'] = $checkpoint;
        return $this;
    }

    /**
    * Gets consumerGroupName
    *  消费组名
    *
    * @return string|null
    */
    public function getConsumerGroupName()
    {
        return $this->container['consumerGroupName'];
    }

    /**
    * Sets consumerGroupName
    *
    * @param string|null $consumerGroupName 消费组名
    *
    * @return $this
    */
    public function setConsumerGroupName($consumerGroupName)
    {
        $this->container['consumerGroupName'] = $consumerGroupName;
        return $this;
    }

    /**
    * Gets consumerName
    *  消费者名
    *
    * @return string|null
    */
    public function getConsumerName()
    {
        return $this->container['consumerName'];
    }

    /**
    * Sets consumerName
    *
    * @param string|null $consumerName 消费者名
    *
    * @return $this
    */
    public function setConsumerName($consumerName)
    {
        $this->container['consumerName'] = $consumerName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets shardId
    *  日志Shard ID
    *
    * @return string|null
    */
    public function getShardId()
    {
        return $this->container['shardId'];
    }

    /**
    * Sets shardId
    *
    * @param string|null $shardId 日志Shard ID
    *
    * @return $this
    */
    public function setShardId($shardId)
    {
        $this->container['shardId'] = $shardId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

