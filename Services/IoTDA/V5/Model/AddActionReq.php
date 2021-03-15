<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddActionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddActionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'channel' => 'string',
            'channelDetail' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ChannelDetail',
            'batch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'channel' => null,
        'channelDetail' => null,
        'batch' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'channel' => 'channel',
            'channelDetail' => 'channel_detail',
            'batch' => 'batch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'channel' => 'setChannel',
            'channelDetail' => 'setChannelDetail',
            'batch' => 'setBatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'channel' => 'getChannel',
            'channelDetail' => 'getChannelDetail',
            'batch' => 'getBatch'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['channelDetail'] = isset($data['channelDetail']) ? $data['channelDetail'] : null;
        $this->container['batch'] = isset($data['batch']) ? $data['batch'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleId'] === null) {
            $invalidProperties[] = "'ruleId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['ruleId'])) {
                $invalidProperties[] = "invalid value for 'ruleId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
            if (!preg_match("/(HTTP_FORWARDING|DIS_FORWARDING|OBS_FORWARDING|AMQP_FORWARDING|DMS_KAFKA_FORWARDING|ROMA_FORWARDING|IoTA_FORWARDING|MQS_FORWARDING|MYSQL_FORWARDING|MQTT_FORWARDING|LTS_FORWARDING|INFLUXDB_FORWARDING|FUNCTIONGRAPH_FORWARDING|MRS_KAFKA_FORWARDING)/", $this->container['channel'])) {
                $invalidProperties[] = "invalid value for 'channel', must be conform to the pattern /(HTTP_FORWARDING|DIS_FORWARDING|OBS_FORWARDING|AMQP_FORWARDING|DMS_KAFKA_FORWARDING|ROMA_FORWARDING|IoTA_FORWARDING|MQS_FORWARDING|MYSQL_FORWARDING|MQTT_FORWARDING|LTS_FORWARDING|INFLUXDB_FORWARDING|FUNCTIONGRAPH_FORWARDING|MRS_KAFKA_FORWARDING)/.";
            }
        if ($this->container['channelDetail'] === null) {
            $invalidProperties[] = "'channelDetail' can't be null";
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
    * Gets ruleId
    *
    * @return string
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string $ruleId 规则触发条件ID，用于唯一标识一条规则触发条件，在创建规则时由物联网平台分配获得。
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets channel
    *
    * @return string
    */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
    * Sets channel
    *
    * @param string $channel 规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。
    *
    * @return $this
    */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;
        return $this;
    }

    /**
    * Gets channelDetail
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ChannelDetail
    */
    public function getChannelDetail()
    {
        return $this->container['channelDetail'];
    }

    /**
    * Sets channelDetail
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ChannelDetail $channelDetail channelDetail
    *
    * @return $this
    */
    public function setChannelDetail($channelDetail)
    {
        $this->container['channelDetail'] = $channelDetail;
        return $this;
    }

    /**
    * Gets batch
    *
    * @return bool|null
    */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
    * Sets batch
    *
    * @param bool|null $batch 是否支持批量接收推送消息。
    *
    * @return $this
    */
    public function setBatch($batch)
    {
        $this->container['batch'] = $batch;
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

