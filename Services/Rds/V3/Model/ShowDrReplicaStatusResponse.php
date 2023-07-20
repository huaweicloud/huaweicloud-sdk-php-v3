<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDrReplicaStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDrReplicaStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'replicaState' => 'string',
            'walWriteReceiveDelayInMb' => 'string',
            'walWriteReplayDelayInMb' => 'string',
            'walReceiveReplayDelayInMs' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'replicaState' => null,
        'walWriteReceiveDelayInMb' => null,
        'walWriteReplayDelayInMb' => null,
        'walReceiveReplayDelayInMs' => null
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
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'replicaState' => 'replica_state',
            'walWriteReceiveDelayInMb' => 'wal_write_receive_delay_in_mb',
            'walWriteReplayDelayInMb' => 'wal_write_replay_delay_in_mb',
            'walReceiveReplayDelayInMs' => 'wal_receive_replay_delay_in_ms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'replicaState' => 'setReplicaState',
            'walWriteReceiveDelayInMb' => 'setWalWriteReceiveDelayInMb',
            'walWriteReplayDelayInMb' => 'setWalWriteReplayDelayInMb',
            'walReceiveReplayDelayInMs' => 'setWalReceiveReplayDelayInMs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * replicaState  同步状态，取值范围是0或-1，0表示正常，-1表示异常。
    * walWriteReceiveDelayInMb  发送延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前接收wal日志位点的差值。
    * walWriteReplayDelayInMb  端到端延迟大小（MB），即主实例当前wal日志写入位点与灾备实例当前回放wal日志位点的差值。
    * walReceiveReplayDelayInMs  回放延迟时间（ms），即数据在灾备上回放的延迟时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'replicaState' => 'getReplicaState',
            'walWriteReceiveDelayInMb' => 'getWalWriteReceiveDelayInMb',
            'walWriteReplayDelayInMb' => 'getWalWriteReplayDelayInMb',
            'walReceiveReplayDelayInMs' => 'getWalReceiveReplayDelayInMs'
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
        $this->container['replicaState'] = isset($data['replicaState']) ? $data['replicaState'] : null;
        $this->container['walWriteReceiveDelayInMb'] = isset($data['walWriteReceiveDelayInMb']) ? $data['walWriteReceiveDelayInMb'] : null;
        $this->container['walWriteReplayDelayInMb'] = isset($data['walWriteReplayDelayInMb']) ? $data['walWriteReplayDelayInMb'] : null;
        $this->container['walReceiveReplayDelayInMs'] = isset($data['walReceiveReplayDelayInMs']) ? $data['walReceiveReplayDelayInMs'] : null;
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

