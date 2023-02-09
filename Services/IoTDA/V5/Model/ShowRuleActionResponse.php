<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRuleActionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRuleActionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionId  规则动作ID，用于唯一标识一条规则动作，在创建规则动作时由物联网平台分配获得，创建时无需携带，由平台统一分配唯一的action_id。
    * ruleId  规则动作对应的的规则触发条件ID。
    * appId  资源空间ID。
    * channel  规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。 [- ROMA_FORWARDING: 转发Roma消息类型。（仅企业版支持）](tag:hws) - INFLUXDB_FORWARDING：转发InfluxDB消息类型。[（仅标准版和企业版支持）](tag:hws) - FUNCTIONGRAPH_FORWARDING：转发FunctionGraph消息类型。[（仅标准版和企业版支持）](tag:hws) [- MRS_KAFKA_FORWARDING：转发MRS_KAFKA消息类型。（仅企业版支持）](tag:hws) [- DMS_ROCKETMQ_FORWARDING：转发RocketMQ消息类型。（仅标准版和企业版支持）](tag:hws)
    * channelDetail  channelDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionId' => 'string',
            'ruleId' => 'string',
            'appId' => 'string',
            'channel' => 'string',
            'channelDetail' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ChannelDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionId  规则动作ID，用于唯一标识一条规则动作，在创建规则动作时由物联网平台分配获得，创建时无需携带，由平台统一分配唯一的action_id。
    * ruleId  规则动作对应的的规则触发条件ID。
    * appId  资源空间ID。
    * channel  规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。 [- ROMA_FORWARDING: 转发Roma消息类型。（仅企业版支持）](tag:hws) - INFLUXDB_FORWARDING：转发InfluxDB消息类型。[（仅标准版和企业版支持）](tag:hws) - FUNCTIONGRAPH_FORWARDING：转发FunctionGraph消息类型。[（仅标准版和企业版支持）](tag:hws) [- MRS_KAFKA_FORWARDING：转发MRS_KAFKA消息类型。（仅企业版支持）](tag:hws) [- DMS_ROCKETMQ_FORWARDING：转发RocketMQ消息类型。（仅标准版和企业版支持）](tag:hws)
    * channelDetail  channelDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionId' => null,
        'ruleId' => null,
        'appId' => null,
        'channel' => null,
        'channelDetail' => null
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
    * actionId  规则动作ID，用于唯一标识一条规则动作，在创建规则动作时由物联网平台分配获得，创建时无需携带，由平台统一分配唯一的action_id。
    * ruleId  规则动作对应的的规则触发条件ID。
    * appId  资源空间ID。
    * channel  规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。 [- ROMA_FORWARDING: 转发Roma消息类型。（仅企业版支持）](tag:hws) - INFLUXDB_FORWARDING：转发InfluxDB消息类型。[（仅标准版和企业版支持）](tag:hws) - FUNCTIONGRAPH_FORWARDING：转发FunctionGraph消息类型。[（仅标准版和企业版支持）](tag:hws) [- MRS_KAFKA_FORWARDING：转发MRS_KAFKA消息类型。（仅企业版支持）](tag:hws) [- DMS_ROCKETMQ_FORWARDING：转发RocketMQ消息类型。（仅标准版和企业版支持）](tag:hws)
    * channelDetail  channelDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionId' => 'action_id',
            'ruleId' => 'rule_id',
            'appId' => 'app_id',
            'channel' => 'channel',
            'channelDetail' => 'channel_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionId  规则动作ID，用于唯一标识一条规则动作，在创建规则动作时由物联网平台分配获得，创建时无需携带，由平台统一分配唯一的action_id。
    * ruleId  规则动作对应的的规则触发条件ID。
    * appId  资源空间ID。
    * channel  规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。 [- ROMA_FORWARDING: 转发Roma消息类型。（仅企业版支持）](tag:hws) - INFLUXDB_FORWARDING：转发InfluxDB消息类型。[（仅标准版和企业版支持）](tag:hws) - FUNCTIONGRAPH_FORWARDING：转发FunctionGraph消息类型。[（仅标准版和企业版支持）](tag:hws) [- MRS_KAFKA_FORWARDING：转发MRS_KAFKA消息类型。（仅企业版支持）](tag:hws) [- DMS_ROCKETMQ_FORWARDING：转发RocketMQ消息类型。（仅标准版和企业版支持）](tag:hws)
    * channelDetail  channelDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'actionId' => 'setActionId',
            'ruleId' => 'setRuleId',
            'appId' => 'setAppId',
            'channel' => 'setChannel',
            'channelDetail' => 'setChannelDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionId  规则动作ID，用于唯一标识一条规则动作，在创建规则动作时由物联网平台分配获得，创建时无需携带，由平台统一分配唯一的action_id。
    * ruleId  规则动作对应的的规则触发条件ID。
    * appId  资源空间ID。
    * channel  规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。 [- ROMA_FORWARDING: 转发Roma消息类型。（仅企业版支持）](tag:hws) - INFLUXDB_FORWARDING：转发InfluxDB消息类型。[（仅标准版和企业版支持）](tag:hws) - FUNCTIONGRAPH_FORWARDING：转发FunctionGraph消息类型。[（仅标准版和企业版支持）](tag:hws) [- MRS_KAFKA_FORWARDING：转发MRS_KAFKA消息类型。（仅企业版支持）](tag:hws) [- DMS_ROCKETMQ_FORWARDING：转发RocketMQ消息类型。（仅标准版和企业版支持）](tag:hws)
    * channelDetail  channelDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'actionId' => 'getActionId',
            'ruleId' => 'getRuleId',
            'appId' => 'getAppId',
            'channel' => 'getChannel',
            'channelDetail' => 'getChannelDetail'
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
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['channelDetail'] = isset($data['channelDetail']) ? $data['channelDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['actionId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['actionId'])) {
                $invalidProperties[] = "invalid value for 'actionId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['ruleId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['ruleId'])) {
                $invalidProperties[] = "invalid value for 'ruleId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['channel']) && !preg_match("/(HTTP_FORWARDING|DIS_FORWARDING|OBS_FORWARDING|AMQP_FORWARDING|DMS_KAFKA_FORWARDING|ROMA_FORWARDING|IoTA_FORWARDING|MQS_FORWARDING|MYSQL_FORWARDING|MQTT_FORWARDING|LTS_FORWARDING|INFLUXDB_FORWARDING|FUNCTIONGRAPH_FORWARDING|MRS_KAFKA_FORWARDING|PULSAR_FORWARDING|DMS_ROCKETMQ_FORWARDING)/", $this->container['channel'])) {
                $invalidProperties[] = "invalid value for 'channel', must be conform to the pattern /(HTTP_FORWARDING|DIS_FORWARDING|OBS_FORWARDING|AMQP_FORWARDING|DMS_KAFKA_FORWARDING|ROMA_FORWARDING|IoTA_FORWARDING|MQS_FORWARDING|MYSQL_FORWARDING|MQTT_FORWARDING|LTS_FORWARDING|INFLUXDB_FORWARDING|FUNCTIONGRAPH_FORWARDING|MRS_KAFKA_FORWARDING|PULSAR_FORWARDING|DMS_ROCKETMQ_FORWARDING)/.";
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
    * Gets actionId
    *  规则动作ID，用于唯一标识一条规则动作，在创建规则动作时由物联网平台分配获得，创建时无需携带，由平台统一分配唯一的action_id。
    *
    * @return string|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string|null $actionId 规则动作ID，用于唯一标识一条规则动作，在创建规则动作时由物联网平台分配获得，创建时无需携带，由平台统一分配唯一的action_id。
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则动作对应的的规则触发条件ID。
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则动作对应的的规则触发条件ID。
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets appId
    *  资源空间ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 资源空间ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets channel
    *  规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。 [- ROMA_FORWARDING: 转发Roma消息类型。（仅企业版支持）](tag:hws) - INFLUXDB_FORWARDING：转发InfluxDB消息类型。[（仅标准版和企业版支持）](tag:hws) - FUNCTIONGRAPH_FORWARDING：转发FunctionGraph消息类型。[（仅标准版和企业版支持）](tag:hws) [- MRS_KAFKA_FORWARDING：转发MRS_KAFKA消息类型。（仅企业版支持）](tag:hws) [- DMS_ROCKETMQ_FORWARDING：转发RocketMQ消息类型。（仅标准版和企业版支持）](tag:hws)
    *
    * @return string|null
    */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
    * Sets channel
    *
    * @param string|null $channel 规则动作的类型，取值范围： - HTTP_FORWARDING：HTTP服务消息类型。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - AMQP_FORWARDING：转发AMQP服务消息类型。 - DMS_KAFKA_FORWARDING：转发kafka消息类型。 [- ROMA_FORWARDING: 转发Roma消息类型。（仅企业版支持）](tag:hws) - INFLUXDB_FORWARDING：转发InfluxDB消息类型。[（仅标准版和企业版支持）](tag:hws) - FUNCTIONGRAPH_FORWARDING：转发FunctionGraph消息类型。[（仅标准版和企业版支持）](tag:hws) [- MRS_KAFKA_FORWARDING：转发MRS_KAFKA消息类型。（仅企业版支持）](tag:hws) [- DMS_ROCKETMQ_FORWARDING：转发RocketMQ消息类型。（仅标准版和企业版支持）](tag:hws)
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
    *  channelDetail
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ChannelDetail|null
    */
    public function getChannelDetail()
    {
        return $this->container['channelDetail'];
    }

    /**
    * Sets channelDetail
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ChannelDetail|null $channelDetail channelDetail
    *
    * @return $this
    */
    public function setChannelDetail($channelDetail)
    {
        $this->container['channelDetail'] = $channelDetail;
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

