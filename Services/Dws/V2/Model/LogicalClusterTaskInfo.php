<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogicalClusterTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogicalClusterTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  任务类型
    * logicalClusterName  逻辑集群名称
    * startTime  任务开始时间
    * endTime  任务结束时间
    * result  任务执行结果
    * log  任务执行日志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'logicalClusterName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'result' => 'string',
            'log' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  任务类型
    * logicalClusterName  逻辑集群名称
    * startTime  任务开始时间
    * endTime  任务结束时间
    * result  任务执行结果
    * log  任务执行日志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'logicalClusterName' => null,
        'startTime' => null,
        'endTime' => null,
        'result' => null,
        'log' => null
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
    * type  任务类型
    * logicalClusterName  逻辑集群名称
    * startTime  任务开始时间
    * endTime  任务结束时间
    * result  任务执行结果
    * log  任务执行日志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'logicalClusterName' => 'logical_cluster_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'result' => 'result',
            'log' => 'log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  任务类型
    * logicalClusterName  逻辑集群名称
    * startTime  任务开始时间
    * endTime  任务结束时间
    * result  任务执行结果
    * log  任务执行日志
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'logicalClusterName' => 'setLogicalClusterName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'result' => 'setResult',
            'log' => 'setLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  任务类型
    * logicalClusterName  逻辑集群名称
    * startTime  任务开始时间
    * endTime  任务结束时间
    * result  任务执行结果
    * log  任务执行日志
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'logicalClusterName' => 'getLogicalClusterName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'result' => 'getResult',
            'log' => 'getLog'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
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
    * Gets type
    *  任务类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  逻辑集群名称
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName 逻辑集群名称
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  任务结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets result
    *  任务执行结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 任务执行结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets log
    *  任务执行日志
    *
    * @return string|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param string|null $log 任务执行日志
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
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

