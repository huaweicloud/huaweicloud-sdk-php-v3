<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRedislogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRedislogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * queryTime  日期偏移量，表示从过去的n天开始查询，例如：传入0则表示查询今天的日志，传入7则表示查询过去7天的日志。当前支持0，1，3，7。
    * logType  返回日志的类型，当前仅支持Redis运行日志，类型为run
    * replicationId  副本ID，可以从分片与副本中查询对应节点的副本ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'queryTime' => 'int',
            'logType' => 'string',
            'replicationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * queryTime  日期偏移量，表示从过去的n天开始查询，例如：传入0则表示查询今天的日志，传入7则表示查询过去7天的日志。当前支持0，1，3，7。
    * logType  返回日志的类型，当前仅支持Redis运行日志，类型为run
    * replicationId  副本ID，可以从分片与副本中查询对应节点的副本ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'queryTime' => null,
        'logType' => null,
        'replicationId' => null
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
    * instanceId  实例ID。
    * queryTime  日期偏移量，表示从过去的n天开始查询，例如：传入0则表示查询今天的日志，传入7则表示查询过去7天的日志。当前支持0，1，3，7。
    * logType  返回日志的类型，当前仅支持Redis运行日志，类型为run
    * replicationId  副本ID，可以从分片与副本中查询对应节点的副本ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'queryTime' => 'query_time',
            'logType' => 'log_type',
            'replicationId' => 'replication_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * queryTime  日期偏移量，表示从过去的n天开始查询，例如：传入0则表示查询今天的日志，传入7则表示查询过去7天的日志。当前支持0，1，3，7。
    * logType  返回日志的类型，当前仅支持Redis运行日志，类型为run
    * replicationId  副本ID，可以从分片与副本中查询对应节点的副本ID
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'queryTime' => 'setQueryTime',
            'logType' => 'setLogType',
            'replicationId' => 'setReplicationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * queryTime  日期偏移量，表示从过去的n天开始查询，例如：传入0则表示查询今天的日志，传入7则表示查询过去7天的日志。当前支持0，1，3，7。
    * logType  返回日志的类型，当前仅支持Redis运行日志，类型为run
    * replicationId  副本ID，可以从分片与副本中查询对应节点的副本ID
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'queryTime' => 'getQueryTime',
            'logType' => 'getLogType',
            'replicationId' => 'getReplicationId'
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
    const QUERY_TIME_0 = 0;
    const QUERY_TIME_1 = 1;
    const QUERY_TIME_3 = 3;
    const QUERY_TIME_7 = 7;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueryTimeAllowableValues()
    {
        return [
            self::QUERY_TIME_0,
            self::QUERY_TIME_1,
            self::QUERY_TIME_3,
            self::QUERY_TIME_7,
        ];
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['replicationId'] = isset($data['replicationId']) ? $data['replicationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            $allowedValues = $this->getQueryTimeAllowableValues();
                if (!is_null($this->container['queryTime']) && !in_array($this->container['queryTime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queryTime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['logType'] === null) {
            $invalidProperties[] = "'logType' can't be null";
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets queryTime
    *  日期偏移量，表示从过去的n天开始查询，例如：传入0则表示查询今天的日志，传入7则表示查询过去7天的日志。当前支持0，1，3，7。
    *
    * @return int|null
    */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
    * Sets queryTime
    *
    * @param int|null $queryTime 日期偏移量，表示从过去的n天开始查询，例如：传入0则表示查询今天的日志，传入7则表示查询过去7天的日志。当前支持0，1，3，7。
    *
    * @return $this
    */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;
        return $this;
    }

    /**
    * Gets logType
    *  返回日志的类型，当前仅支持Redis运行日志，类型为run
    *
    * @return string
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string $logType 返回日志的类型，当前仅支持Redis运行日志，类型为run
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets replicationId
    *  副本ID，可以从分片与副本中查询对应节点的副本ID
    *
    * @return string|null
    */
    public function getReplicationId()
    {
        return $this->container['replicationId'];
    }

    /**
    * Sets replicationId
    *
    * @param string|null $replicationId 副本ID，可以从分片与副本中查询对应节点的副本ID
    *
    * @return $this
    */
    public function setReplicationId($replicationId)
    {
        $this->container['replicationId'] = $replicationId;
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

