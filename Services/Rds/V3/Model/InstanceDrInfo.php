<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDrInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDrInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  容灾关系id
    * status  容灾搭建状态
    * failedMessage  失败消息
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    * masterInstanceId  主实例ID
    * masterRegion  主实例所在region
    * slaveInstanceId  灾备实例ID
    * slaveRegion  灾备实例所在region
    * buildProcess  搭建流程。master表示配置主实例容灾能力流程。slave表示配置灾备实例容灾能力流程。
    * time  灾备搭建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'failedMessage' => 'string',
            'replicaState' => 'string',
            'walWriteReceiveDelayInMb' => 'string',
            'walWriteReplayDelayInMb' => 'string',
            'walReceiveReplayDelayInMs' => 'string',
            'masterInstanceId' => 'string',
            'masterRegion' => 'string',
            'slaveInstanceId' => 'string',
            'slaveRegion' => 'string',
            'buildProcess' => 'string',
            'time' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  容灾关系id
    * status  容灾搭建状态
    * failedMessage  失败消息
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    * masterInstanceId  主实例ID
    * masterRegion  主实例所在region
    * slaveInstanceId  灾备实例ID
    * slaveRegion  灾备实例所在region
    * buildProcess  搭建流程。master表示配置主实例容灾能力流程。slave表示配置灾备实例容灾能力流程。
    * time  灾备搭建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'failedMessage' => null,
        'replicaState' => null,
        'walWriteReceiveDelayInMb' => null,
        'walWriteReplayDelayInMb' => null,
        'walReceiveReplayDelayInMs' => null,
        'masterInstanceId' => null,
        'masterRegion' => null,
        'slaveInstanceId' => null,
        'slaveRegion' => null,
        'buildProcess' => null,
        'time' => 'int64'
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
    * id  容灾关系id
    * status  容灾搭建状态
    * failedMessage  失败消息
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    * masterInstanceId  主实例ID
    * masterRegion  主实例所在region
    * slaveInstanceId  灾备实例ID
    * slaveRegion  灾备实例所在region
    * buildProcess  搭建流程。master表示配置主实例容灾能力流程。slave表示配置灾备实例容灾能力流程。
    * time  灾备搭建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'failedMessage' => 'failed_message',
            'replicaState' => 'replica_state',
            'walWriteReceiveDelayInMb' => 'wal_write_receive_delay_in_mb',
            'walWriteReplayDelayInMb' => 'wal_write_replay_delay_in_mb',
            'walReceiveReplayDelayInMs' => 'wal_receive_replay_delay_in_ms',
            'masterInstanceId' => 'master_instance_id',
            'masterRegion' => 'master_region',
            'slaveInstanceId' => 'slave_instance_id',
            'slaveRegion' => 'slave_region',
            'buildProcess' => 'build_process',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  容灾关系id
    * status  容灾搭建状态
    * failedMessage  失败消息
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    * masterInstanceId  主实例ID
    * masterRegion  主实例所在region
    * slaveInstanceId  灾备实例ID
    * slaveRegion  灾备实例所在region
    * buildProcess  搭建流程。master表示配置主实例容灾能力流程。slave表示配置灾备实例容灾能力流程。
    * time  灾备搭建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'failedMessage' => 'setFailedMessage',
            'replicaState' => 'setReplicaState',
            'walWriteReceiveDelayInMb' => 'setWalWriteReceiveDelayInMb',
            'walWriteReplayDelayInMb' => 'setWalWriteReplayDelayInMb',
            'walReceiveReplayDelayInMs' => 'setWalReceiveReplayDelayInMs',
            'masterInstanceId' => 'setMasterInstanceId',
            'masterRegion' => 'setMasterRegion',
            'slaveInstanceId' => 'setSlaveInstanceId',
            'slaveRegion' => 'setSlaveRegion',
            'buildProcess' => 'setBuildProcess',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  容灾关系id
    * status  容灾搭建状态
    * failedMessage  失败消息
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    * masterInstanceId  主实例ID
    * masterRegion  主实例所在region
    * slaveInstanceId  灾备实例ID
    * slaveRegion  灾备实例所在region
    * buildProcess  搭建流程。master表示配置主实例容灾能力流程。slave表示配置灾备实例容灾能力流程。
    * time  灾备搭建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'failedMessage' => 'getFailedMessage',
            'replicaState' => 'getReplicaState',
            'walWriteReceiveDelayInMb' => 'getWalWriteReceiveDelayInMb',
            'walWriteReplayDelayInMb' => 'getWalWriteReplayDelayInMb',
            'walReceiveReplayDelayInMs' => 'getWalReceiveReplayDelayInMs',
            'masterInstanceId' => 'getMasterInstanceId',
            'masterRegion' => 'getMasterRegion',
            'slaveInstanceId' => 'getSlaveInstanceId',
            'slaveRegion' => 'getSlaveRegion',
            'buildProcess' => 'getBuildProcess',
            'time' => 'getTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedMessage'] = isset($data['failedMessage']) ? $data['failedMessage'] : null;
        $this->container['replicaState'] = isset($data['replicaState']) ? $data['replicaState'] : null;
        $this->container['walWriteReceiveDelayInMb'] = isset($data['walWriteReceiveDelayInMb']) ? $data['walWriteReceiveDelayInMb'] : null;
        $this->container['walWriteReplayDelayInMb'] = isset($data['walWriteReplayDelayInMb']) ? $data['walWriteReplayDelayInMb'] : null;
        $this->container['walReceiveReplayDelayInMs'] = isset($data['walReceiveReplayDelayInMs']) ? $data['walReceiveReplayDelayInMs'] : null;
        $this->container['masterInstanceId'] = isset($data['masterInstanceId']) ? $data['masterInstanceId'] : null;
        $this->container['masterRegion'] = isset($data['masterRegion']) ? $data['masterRegion'] : null;
        $this->container['slaveInstanceId'] = isset($data['slaveInstanceId']) ? $data['slaveInstanceId'] : null;
        $this->container['slaveRegion'] = isset($data['slaveRegion']) ? $data['slaveRegion'] : null;
        $this->container['buildProcess'] = isset($data['buildProcess']) ? $data['buildProcess'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['masterInstanceId'] === null) {
            $invalidProperties[] = "'masterInstanceId' can't be null";
        }
        if ($this->container['masterRegion'] === null) {
            $invalidProperties[] = "'masterRegion' can't be null";
        }
        if ($this->container['slaveInstanceId'] === null) {
            $invalidProperties[] = "'slaveInstanceId' can't be null";
        }
        if ($this->container['slaveRegion'] === null) {
            $invalidProperties[] = "'slaveRegion' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
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
    * Gets id
    *  容灾关系id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 容灾关系id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  容灾搭建状态
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
    * @param string $status 容灾搭建状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedMessage
    *  失败消息
    *
    * @return string|null
    */
    public function getFailedMessage()
    {
        return $this->container['failedMessage'];
    }

    /**
    * Sets failedMessage
    *
    * @param string|null $failedMessage 失败消息
    *
    * @return $this
    */
    public function setFailedMessage($failedMessage)
    {
        $this->container['failedMessage'] = $failedMessage;
        return $this;
    }

    /**
    * Gets replicaState
    *  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    *
    * @return string|null
    */
    public function getReplicaState()
    {
        return $this->container['replicaState'];
    }

    /**
    * Sets replicaState
    *
    * @param string|null $replicaState 同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    *
    * @return $this
    */
    public function setReplicaState($replicaState)
    {
        $this->container['replicaState'] = $replicaState;
        return $this;
    }

    /**
    * Gets walWriteReceiveDelayInMb
    *  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    *
    * @return string|null
    */
    public function getWalWriteReceiveDelayInMb()
    {
        return $this->container['walWriteReceiveDelayInMb'];
    }

    /**
    * Sets walWriteReceiveDelayInMb
    *
    * @param string|null $walWriteReceiveDelayInMb 发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    *
    * @return $this
    */
    public function setWalWriteReceiveDelayInMb($walWriteReceiveDelayInMb)
    {
        $this->container['walWriteReceiveDelayInMb'] = $walWriteReceiveDelayInMb;
        return $this;
    }

    /**
    * Gets walWriteReplayDelayInMb
    *  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    *
    * @return string|null
    */
    public function getWalWriteReplayDelayInMb()
    {
        return $this->container['walWriteReplayDelayInMb'];
    }

    /**
    * Sets walWriteReplayDelayInMb
    *
    * @param string|null $walWriteReplayDelayInMb 端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    *
    * @return $this
    */
    public function setWalWriteReplayDelayInMb($walWriteReplayDelayInMb)
    {
        $this->container['walWriteReplayDelayInMb'] = $walWriteReplayDelayInMb;
        return $this;
    }

    /**
    * Gets walReceiveReplayDelayInMs
    *  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    *
    * @return string|null
    */
    public function getWalReceiveReplayDelayInMs()
    {
        return $this->container['walReceiveReplayDelayInMs'];
    }

    /**
    * Sets walReceiveReplayDelayInMs
    *
    * @param string|null $walReceiveReplayDelayInMs 回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    *
    * @return $this
    */
    public function setWalReceiveReplayDelayInMs($walReceiveReplayDelayInMs)
    {
        $this->container['walReceiveReplayDelayInMs'] = $walReceiveReplayDelayInMs;
        return $this;
    }

    /**
    * Gets masterInstanceId
    *  主实例ID
    *
    * @return string
    */
    public function getMasterInstanceId()
    {
        return $this->container['masterInstanceId'];
    }

    /**
    * Sets masterInstanceId
    *
    * @param string $masterInstanceId 主实例ID
    *
    * @return $this
    */
    public function setMasterInstanceId($masterInstanceId)
    {
        $this->container['masterInstanceId'] = $masterInstanceId;
        return $this;
    }

    /**
    * Gets masterRegion
    *  主实例所在region
    *
    * @return string
    */
    public function getMasterRegion()
    {
        return $this->container['masterRegion'];
    }

    /**
    * Sets masterRegion
    *
    * @param string $masterRegion 主实例所在region
    *
    * @return $this
    */
    public function setMasterRegion($masterRegion)
    {
        $this->container['masterRegion'] = $masterRegion;
        return $this;
    }

    /**
    * Gets slaveInstanceId
    *  灾备实例ID
    *
    * @return string
    */
    public function getSlaveInstanceId()
    {
        return $this->container['slaveInstanceId'];
    }

    /**
    * Sets slaveInstanceId
    *
    * @param string $slaveInstanceId 灾备实例ID
    *
    * @return $this
    */
    public function setSlaveInstanceId($slaveInstanceId)
    {
        $this->container['slaveInstanceId'] = $slaveInstanceId;
        return $this;
    }

    /**
    * Gets slaveRegion
    *  灾备实例所在region
    *
    * @return string
    */
    public function getSlaveRegion()
    {
        return $this->container['slaveRegion'];
    }

    /**
    * Sets slaveRegion
    *
    * @param string $slaveRegion 灾备实例所在region
    *
    * @return $this
    */
    public function setSlaveRegion($slaveRegion)
    {
        $this->container['slaveRegion'] = $slaveRegion;
        return $this;
    }

    /**
    * Gets buildProcess
    *  搭建流程。master表示配置主实例容灾能力流程。slave表示配置灾备实例容灾能力流程。
    *
    * @return string|null
    */
    public function getBuildProcess()
    {
        return $this->container['buildProcess'];
    }

    /**
    * Sets buildProcess
    *
    * @param string|null $buildProcess 搭建流程。master表示配置主实例容灾能力流程。slave表示配置灾备实例容灾能力流程。
    *
    * @return $this
    */
    public function setBuildProcess($buildProcess)
    {
        $this->container['buildProcess'] = $buildProcess;
        return $this;
    }

    /**
    * Gets time
    *  灾备搭建时间
    *
    * @return int
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int $time 灾备搭建时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

