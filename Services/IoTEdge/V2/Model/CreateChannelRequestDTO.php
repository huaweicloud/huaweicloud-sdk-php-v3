<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateChannelRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateChannelRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelId  推送通道ID,非必填，若用户不填，则系统自动生成
    * channel  通道
    * name  推送通道名称
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelId' => 'string',
            'channel' => 'string',
            'name' => 'string',
            'description' => 'string',
            'endpoint' => 'string',
            'mqttChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateMqttChannelDetail',
            'iotdbChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateIoTDBChannelDetail',
            'influxdb2ChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\CreateInfluxDB2ChannelDetail',
            'pulsarChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\CreatePulsarChannelDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelId  推送通道ID,非必填，若用户不填，则系统自动生成
    * channel  通道
    * name  推送通道名称
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelId' => null,
        'channel' => null,
        'name' => null,
        'description' => null,
        'endpoint' => null,
        'mqttChannelDetail' => null,
        'iotdbChannelDetail' => null,
        'influxdb2ChannelDetail' => null,
        'pulsarChannelDetail' => null
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
    * channelId  推送通道ID,非必填，若用户不填，则系统自动生成
    * channel  通道
    * name  推送通道名称
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelId' => 'channel_id',
            'channel' => 'channel',
            'name' => 'name',
            'description' => 'description',
            'endpoint' => 'endpoint',
            'mqttChannelDetail' => 'mqtt_channel_detail',
            'iotdbChannelDetail' => 'iotdb_channel_detail',
            'influxdb2ChannelDetail' => 'influxdb2_channel_detail',
            'pulsarChannelDetail' => 'pulsar_channel_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelId  推送通道ID,非必填，若用户不填，则系统自动生成
    * channel  通道
    * name  推送通道名称
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'channelId' => 'setChannelId',
            'channel' => 'setChannel',
            'name' => 'setName',
            'description' => 'setDescription',
            'endpoint' => 'setEndpoint',
            'mqttChannelDetail' => 'setMqttChannelDetail',
            'iotdbChannelDetail' => 'setIotdbChannelDetail',
            'influxdb2ChannelDetail' => 'setInfluxdb2ChannelDetail',
            'pulsarChannelDetail' => 'setPulsarChannelDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelId  推送通道ID,非必填，若用户不填，则系统自动生成
    * channel  通道
    * name  推送通道名称
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'channelId' => 'getChannelId',
            'channel' => 'getChannel',
            'name' => 'getName',
            'description' => 'getDescription',
            'endpoint' => 'getEndpoint',
            'mqttChannelDetail' => 'getMqttChannelDetail',
            'iotdbChannelDetail' => 'getIotdbChannelDetail',
            'influxdb2ChannelDetail' => 'getInfluxdb2ChannelDetail',
            'pulsarChannelDetail' => 'getPulsarChannelDetail'
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
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['mqttChannelDetail'] = isset($data['mqttChannelDetail']) ? $data['mqttChannelDetail'] : null;
        $this->container['iotdbChannelDetail'] = isset($data['iotdbChannelDetail']) ? $data['iotdbChannelDetail'] : null;
        $this->container['influxdb2ChannelDetail'] = isset($data['influxdb2ChannelDetail']) ? $data['influxdb2ChannelDetail'] : null;
        $this->container['pulsarChannelDetail'] = isset($data['pulsarChannelDetail']) ? $data['pulsarChannelDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) > 64)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['channelId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['channelId'])) {
                $invalidProperties[] = "invalid value for 'channelId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
            if (!preg_match("/(MQTT|IoTDB|InfluxDB2|Pulsar)/", $this->container['channel'])) {
                $invalidProperties[] = "invalid value for 'channel', must be conform to the pattern /(MQTT|IoTDB|InfluxDB2|Pulsar)/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!\\-\\s\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
            if ((mb_strlen($this->container['endpoint']) > 256)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['endpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^((ssl|http|https|pulsar\\+ssl)?:\/\/){0,1}[0-9A-Za-z\\.:]+:([0-9]|[1-9]\\d|[1-9]\\d{2}|[1-9]\\d{3}|[1-5]\\d{4}|6[0-4]\\d{3}|65[0-4]\\d{2}|655[0-2]\\d|6553[0-5])$/", $this->container['endpoint'])) {
                $invalidProperties[] = "invalid value for 'endpoint', must be conform to the pattern /^((ssl|http|https|pulsar\\+ssl)?:\/\/){0,1}[0-9A-Za-z\\.:]+:([0-9]|[1-9]\\d|[1-9]\\d{2}|[1-9]\\d{3}|[1-5]\\d{4}|6[0-4]\\d{3}|65[0-4]\\d{2}|655[0-2]\\d|6553[0-5])$/.";
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
    * Gets channelId
    *  推送通道ID,非必填，若用户不填，则系统自动生成
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId 推送通道ID,非必填，若用户不填，则系统自动生成
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets channel
    *  通道
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
    * @param string $channel 通道
    *
    * @return $this
    */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;
        return $this;
    }

    /**
    * Gets name
    *  推送通道名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 推送通道名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  推送通道描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 推送通道描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets endpoint
    *  推送的地址
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 推送的地址
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets mqttChannelDetail
    *  mqttChannelDetail
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\CreateMqttChannelDetail|null
    */
    public function getMqttChannelDetail()
    {
        return $this->container['mqttChannelDetail'];
    }

    /**
    * Sets mqttChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\CreateMqttChannelDetail|null $mqttChannelDetail mqttChannelDetail
    *
    * @return $this
    */
    public function setMqttChannelDetail($mqttChannelDetail)
    {
        $this->container['mqttChannelDetail'] = $mqttChannelDetail;
        return $this;
    }

    /**
    * Gets iotdbChannelDetail
    *  iotdbChannelDetail
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\CreateIoTDBChannelDetail|null
    */
    public function getIotdbChannelDetail()
    {
        return $this->container['iotdbChannelDetail'];
    }

    /**
    * Sets iotdbChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\CreateIoTDBChannelDetail|null $iotdbChannelDetail iotdbChannelDetail
    *
    * @return $this
    */
    public function setIotdbChannelDetail($iotdbChannelDetail)
    {
        $this->container['iotdbChannelDetail'] = $iotdbChannelDetail;
        return $this;
    }

    /**
    * Gets influxdb2ChannelDetail
    *  influxdb2ChannelDetail
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\CreateInfluxDB2ChannelDetail|null
    */
    public function getInfluxdb2ChannelDetail()
    {
        return $this->container['influxdb2ChannelDetail'];
    }

    /**
    * Sets influxdb2ChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\CreateInfluxDB2ChannelDetail|null $influxdb2ChannelDetail influxdb2ChannelDetail
    *
    * @return $this
    */
    public function setInfluxdb2ChannelDetail($influxdb2ChannelDetail)
    {
        $this->container['influxdb2ChannelDetail'] = $influxdb2ChannelDetail;
        return $this;
    }

    /**
    * Gets pulsarChannelDetail
    *  pulsarChannelDetail
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\CreatePulsarChannelDetail|null
    */
    public function getPulsarChannelDetail()
    {
        return $this->container['pulsarChannelDetail'];
    }

    /**
    * Sets pulsarChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\CreatePulsarChannelDetail|null $pulsarChannelDetail pulsarChannelDetail
    *
    * @return $this
    */
    public function setPulsarChannelDetail($pulsarChannelDetail)
    {
        $this->container['pulsarChannelDetail'] = $pulsarChannelDetail;
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

