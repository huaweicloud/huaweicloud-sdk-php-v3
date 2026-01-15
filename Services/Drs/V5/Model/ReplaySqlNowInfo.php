<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplaySqlNowInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplaySqlNowInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * threadId  会话id
    * createdAt  创建时间
    * modifiedAt  修改时间
    * shardId  分片id
    * schemaName  schema名称
    * sqlStatement  sql语句
    * latency  原始耗时
    * executeLatency  执行耗时
    * targetType  目标库类型
    * targetName  目标库标识
    * status  回放状态。取值： - running：执行中。 - finish：已完成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'threadId' => 'int',
            'createdAt' => 'int',
            'modifiedAt' => 'int',
            'shardId' => 'int',
            'schemaName' => 'string',
            'sqlStatement' => 'string',
            'latency' => 'int',
            'executeLatency' => 'int',
            'targetType' => 'string',
            'targetName' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * threadId  会话id
    * createdAt  创建时间
    * modifiedAt  修改时间
    * shardId  分片id
    * schemaName  schema名称
    * sqlStatement  sql语句
    * latency  原始耗时
    * executeLatency  执行耗时
    * targetType  目标库类型
    * targetName  目标库标识
    * status  回放状态。取值： - running：执行中。 - finish：已完成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'threadId' => 'int64',
        'createdAt' => 'int64',
        'modifiedAt' => 'int64',
        'shardId' => 'int64',
        'schemaName' => null,
        'sqlStatement' => null,
        'latency' => 'int64',
        'executeLatency' => 'int64',
        'targetType' => null,
        'targetName' => null,
        'status' => null
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
    * threadId  会话id
    * createdAt  创建时间
    * modifiedAt  修改时间
    * shardId  分片id
    * schemaName  schema名称
    * sqlStatement  sql语句
    * latency  原始耗时
    * executeLatency  执行耗时
    * targetType  目标库类型
    * targetName  目标库标识
    * status  回放状态。取值： - running：执行中。 - finish：已完成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'threadId' => 'thread_id',
            'createdAt' => 'created_at',
            'modifiedAt' => 'modified_at',
            'shardId' => 'shard_id',
            'schemaName' => 'schema_name',
            'sqlStatement' => 'sql_statement',
            'latency' => 'latency',
            'executeLatency' => 'execute_latency',
            'targetType' => 'target_type',
            'targetName' => 'target_name',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * threadId  会话id
    * createdAt  创建时间
    * modifiedAt  修改时间
    * shardId  分片id
    * schemaName  schema名称
    * sqlStatement  sql语句
    * latency  原始耗时
    * executeLatency  执行耗时
    * targetType  目标库类型
    * targetName  目标库标识
    * status  回放状态。取值： - running：执行中。 - finish：已完成。
    *
    * @var string[]
    */
    protected static $setters = [
            'threadId' => 'setThreadId',
            'createdAt' => 'setCreatedAt',
            'modifiedAt' => 'setModifiedAt',
            'shardId' => 'setShardId',
            'schemaName' => 'setSchemaName',
            'sqlStatement' => 'setSqlStatement',
            'latency' => 'setLatency',
            'executeLatency' => 'setExecuteLatency',
            'targetType' => 'setTargetType',
            'targetName' => 'setTargetName',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * threadId  会话id
    * createdAt  创建时间
    * modifiedAt  修改时间
    * shardId  分片id
    * schemaName  schema名称
    * sqlStatement  sql语句
    * latency  原始耗时
    * executeLatency  执行耗时
    * targetType  目标库类型
    * targetName  目标库标识
    * status  回放状态。取值： - running：执行中。 - finish：已完成。
    *
    * @var string[]
    */
    protected static $getters = [
            'threadId' => 'getThreadId',
            'createdAt' => 'getCreatedAt',
            'modifiedAt' => 'getModifiedAt',
            'shardId' => 'getShardId',
            'schemaName' => 'getSchemaName',
            'sqlStatement' => 'getSqlStatement',
            'latency' => 'getLatency',
            'executeLatency' => 'getExecuteLatency',
            'targetType' => 'getTargetType',
            'targetName' => 'getTargetName',
            'status' => 'getStatus'
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
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['shardId'] = isset($data['shardId']) ? $data['shardId'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
        $this->container['executeLatency'] = isset($data['executeLatency']) ? $data['executeLatency'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetName'] = isset($data['targetName']) ? $data['targetName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['threadId'] === null) {
            $invalidProperties[] = "'threadId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['shardId'] === null) {
            $invalidProperties[] = "'shardId' can't be null";
        }
        if ($this->container['schemaName'] === null) {
            $invalidProperties[] = "'schemaName' can't be null";
        }
        if ($this->container['sqlStatement'] === null) {
            $invalidProperties[] = "'sqlStatement' can't be null";
        }
        if ($this->container['latency'] === null) {
            $invalidProperties[] = "'latency' can't be null";
        }
        if ($this->container['executeLatency'] === null) {
            $invalidProperties[] = "'executeLatency' can't be null";
        }
        if ($this->container['targetType'] === null) {
            $invalidProperties[] = "'targetType' can't be null";
        }
        if ($this->container['targetName'] === null) {
            $invalidProperties[] = "'targetName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets threadId
    *  会话id
    *
    * @return int
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param int $threadId 会话id
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return int
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets modifiedAt
    *  修改时间
    *
    * @return int
    */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
    * Sets modifiedAt
    *
    * @param int $modifiedAt 修改时间
    *
    * @return $this
    */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;
        return $this;
    }

    /**
    * Gets shardId
    *  分片id
    *
    * @return int
    */
    public function getShardId()
    {
        return $this->container['shardId'];
    }

    /**
    * Sets shardId
    *
    * @param int $shardId 分片id
    *
    * @return $this
    */
    public function setShardId($shardId)
    {
        $this->container['shardId'] = $shardId;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名称
    *
    * @return string
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string $schemaName schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  sql语句
    *
    * @return string
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string $sqlStatement sql语句
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets latency
    *  原始耗时
    *
    * @return int
    */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
    * Sets latency
    *
    * @param int $latency 原始耗时
    *
    * @return $this
    */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;
        return $this;
    }

    /**
    * Gets executeLatency
    *  执行耗时
    *
    * @return int
    */
    public function getExecuteLatency()
    {
        return $this->container['executeLatency'];
    }

    /**
    * Sets executeLatency
    *
    * @param int $executeLatency 执行耗时
    *
    * @return $this
    */
    public function setExecuteLatency($executeLatency)
    {
        $this->container['executeLatency'] = $executeLatency;
        return $this;
    }

    /**
    * Gets targetType
    *  目标库类型
    *
    * @return string
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string $targetType 目标库类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetName
    *  目标库标识
    *
    * @return string
    */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
    * Sets targetName
    *
    * @param string $targetName 目标库标识
    *
    * @return $this
    */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;
        return $this;
    }

    /**
    * Gets status
    *  回放状态。取值： - running：执行中。 - finish：已完成。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 回放状态。取值： - running：执行中。 - finish：已完成。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

