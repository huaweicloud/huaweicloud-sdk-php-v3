<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplayingSqlResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplayingSqlResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemaName  库名或shema名称
    * sqlStatement  SQL语句
    * latency  原始执行耗时
    * executeLatency  回放执行耗时
    * status  执行状态
    * client  客户端IP
    * connectionId  连接ID
    * replayStartTime  回放开始时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemaName' => 'string',
            'sqlStatement' => 'string',
            'latency' => 'int',
            'executeLatency' => 'int',
            'status' => 'string',
            'client' => 'string',
            'connectionId' => 'string',
            'replayStartTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemaName  库名或shema名称
    * sqlStatement  SQL语句
    * latency  原始执行耗时
    * executeLatency  回放执行耗时
    * status  执行状态
    * client  客户端IP
    * connectionId  连接ID
    * replayStartTime  回放开始时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemaName' => null,
        'sqlStatement' => null,
        'latency' => 'int32',
        'executeLatency' => 'int32',
        'status' => null,
        'client' => null,
        'connectionId' => null,
        'replayStartTime' => null
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
    * schemaName  库名或shema名称
    * sqlStatement  SQL语句
    * latency  原始执行耗时
    * executeLatency  回放执行耗时
    * status  执行状态
    * client  客户端IP
    * connectionId  连接ID
    * replayStartTime  回放开始时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemaName' => 'schema_name',
            'sqlStatement' => 'sql_statement',
            'latency' => 'latency',
            'executeLatency' => 'execute_latency',
            'status' => 'status',
            'client' => 'client',
            'connectionId' => 'connection_id',
            'replayStartTime' => 'replay_start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemaName  库名或shema名称
    * sqlStatement  SQL语句
    * latency  原始执行耗时
    * executeLatency  回放执行耗时
    * status  执行状态
    * client  客户端IP
    * connectionId  连接ID
    * replayStartTime  回放开始时间
    *
    * @var string[]
    */
    protected static $setters = [
            'schemaName' => 'setSchemaName',
            'sqlStatement' => 'setSqlStatement',
            'latency' => 'setLatency',
            'executeLatency' => 'setExecuteLatency',
            'status' => 'setStatus',
            'client' => 'setClient',
            'connectionId' => 'setConnectionId',
            'replayStartTime' => 'setReplayStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemaName  库名或shema名称
    * sqlStatement  SQL语句
    * latency  原始执行耗时
    * executeLatency  回放执行耗时
    * status  执行状态
    * client  客户端IP
    * connectionId  连接ID
    * replayStartTime  回放开始时间
    *
    * @var string[]
    */
    protected static $getters = [
            'schemaName' => 'getSchemaName',
            'sqlStatement' => 'getSqlStatement',
            'latency' => 'getLatency',
            'executeLatency' => 'getExecuteLatency',
            'status' => 'getStatus',
            'client' => 'getClient',
            'connectionId' => 'getConnectionId',
            'replayStartTime' => 'getReplayStartTime'
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
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
        $this->container['executeLatency'] = isset($data['executeLatency']) ? $data['executeLatency'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['replayStartTime'] = isset($data['replayStartTime']) ? $data['replayStartTime'] : null;
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
    * Gets schemaName
    *  库名或shema名称
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName 库名或shema名称
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
    *  SQL语句
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement SQL语句
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
    *  原始执行耗时
    *
    * @return int|null
    */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
    * Sets latency
    *
    * @param int|null $latency 原始执行耗时
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
    *  回放执行耗时
    *
    * @return int|null
    */
    public function getExecuteLatency()
    {
        return $this->container['executeLatency'];
    }

    /**
    * Sets executeLatency
    *
    * @param int|null $executeLatency 回放执行耗时
    *
    * @return $this
    */
    public function setExecuteLatency($executeLatency)
    {
        $this->container['executeLatency'] = $executeLatency;
        return $this;
    }

    /**
    * Gets status
    *  执行状态
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
    * @param string|null $status 执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets client
    *  客户端IP
    *
    * @return string|null
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string|null $client 客户端IP
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets connectionId
    *  连接ID
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets replayStartTime
    *  回放开始时间
    *
    * @return string|null
    */
    public function getReplayStartTime()
    {
        return $this->container['replayStartTime'];
    }

    /**
    * Sets replayStartTime
    *
    * @param string|null $replayStartTime 回放开始时间
    *
    * @return $this
    */
    public function setReplayStartTime($replayStartTime)
    {
        $this->container['replayStartTime'] = $replayStartTime;
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

