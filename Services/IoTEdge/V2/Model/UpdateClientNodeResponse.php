<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateClientNodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateClientNodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channel  通道
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    * createTime  创建时间
    * updateTime  更新时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channel' => 'string',
            'description' => 'string',
            'endpoint' => 'string',
            'mqttChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\MqttNodeChannelDetailDTO',
            'iotdbChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\IoTDBNodeChannelDetailDTO',
            'influxdb2ChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\InfluxDB2NodeChannelDetailDTO',
            'pulsarChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\PulsarNodeChannelDetailDTO',
            'createTime' => 'string',
            'updateTime' => 'string',
            'synchronizedTime' => 'string',
            'synchronizedStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channel  通道
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    * createTime  创建时间
    * updateTime  更新时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channel' => null,
        'description' => null,
        'endpoint' => null,
        'mqttChannelDetail' => null,
        'iotdbChannelDetail' => null,
        'influxdb2ChannelDetail' => null,
        'pulsarChannelDetail' => null,
        'createTime' => null,
        'updateTime' => null,
        'synchronizedTime' => null,
        'synchronizedStatus' => null
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
    * channel  通道
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    * createTime  创建时间
    * updateTime  更新时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channel' => 'channel',
            'description' => 'description',
            'endpoint' => 'endpoint',
            'mqttChannelDetail' => 'mqtt_channel_detail',
            'iotdbChannelDetail' => 'iotdb_channel_detail',
            'influxdb2ChannelDetail' => 'influxdb2_channel_detail',
            'pulsarChannelDetail' => 'pulsar_channel_detail',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'synchronizedTime' => 'synchronized_time',
            'synchronizedStatus' => 'synchronized_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channel  通道
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    * createTime  创建时间
    * updateTime  更新时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $setters = [
            'channel' => 'setChannel',
            'description' => 'setDescription',
            'endpoint' => 'setEndpoint',
            'mqttChannelDetail' => 'setMqttChannelDetail',
            'iotdbChannelDetail' => 'setIotdbChannelDetail',
            'influxdb2ChannelDetail' => 'setInfluxdb2ChannelDetail',
            'pulsarChannelDetail' => 'setPulsarChannelDetail',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'synchronizedTime' => 'setSynchronizedTime',
            'synchronizedStatus' => 'setSynchronizedStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channel  通道
    * description  推送通道描述
    * endpoint  推送的地址
    * mqttChannelDetail  mqttChannelDetail
    * iotdbChannelDetail  iotdbChannelDetail
    * influxdb2ChannelDetail  influxdb2ChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    * createTime  创建时间
    * updateTime  更新时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $getters = [
            'channel' => 'getChannel',
            'description' => 'getDescription',
            'endpoint' => 'getEndpoint',
            'mqttChannelDetail' => 'getMqttChannelDetail',
            'iotdbChannelDetail' => 'getIotdbChannelDetail',
            'influxdb2ChannelDetail' => 'getInfluxdb2ChannelDetail',
            'pulsarChannelDetail' => 'getPulsarChannelDetail',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'synchronizedTime' => 'getSynchronizedTime',
            'synchronizedStatus' => 'getSynchronizedStatus'
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
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['mqttChannelDetail'] = isset($data['mqttChannelDetail']) ? $data['mqttChannelDetail'] : null;
        $this->container['iotdbChannelDetail'] = isset($data['iotdbChannelDetail']) ? $data['iotdbChannelDetail'] : null;
        $this->container['influxdb2ChannelDetail'] = isset($data['influxdb2ChannelDetail']) ? $data['influxdb2ChannelDetail'] : null;
        $this->container['pulsarChannelDetail'] = isset($data['pulsarChannelDetail']) ? $data['pulsarChannelDetail'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['synchronizedTime'] = isset($data['synchronizedTime']) ? $data['synchronizedTime'] : null;
        $this->container['synchronizedStatus'] = isset($data['synchronizedStatus']) ? $data['synchronizedStatus'] : null;
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
    * Gets channel
    *  通道
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
    * @param string|null $channel 通道
    *
    * @return $this
    */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;
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
    * @return string|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string|null $endpoint 推送的地址
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
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\MqttNodeChannelDetailDTO|null
    */
    public function getMqttChannelDetail()
    {
        return $this->container['mqttChannelDetail'];
    }

    /**
    * Sets mqttChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\MqttNodeChannelDetailDTO|null $mqttChannelDetail mqttChannelDetail
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
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\IoTDBNodeChannelDetailDTO|null
    */
    public function getIotdbChannelDetail()
    {
        return $this->container['iotdbChannelDetail'];
    }

    /**
    * Sets iotdbChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\IoTDBNodeChannelDetailDTO|null $iotdbChannelDetail iotdbChannelDetail
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
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\InfluxDB2NodeChannelDetailDTO|null
    */
    public function getInfluxdb2ChannelDetail()
    {
        return $this->container['influxdb2ChannelDetail'];
    }

    /**
    * Sets influxdb2ChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\InfluxDB2NodeChannelDetailDTO|null $influxdb2ChannelDetail influxdb2ChannelDetail
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
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\PulsarNodeChannelDetailDTO|null
    */
    public function getPulsarChannelDetail()
    {
        return $this->container['pulsarChannelDetail'];
    }

    /**
    * Sets pulsarChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\PulsarNodeChannelDetailDTO|null $pulsarChannelDetail pulsarChannelDetail
    *
    * @return $this
    */
    public function setPulsarChannelDetail($pulsarChannelDetail)
    {
        $this->container['pulsarChannelDetail'] = $pulsarChannelDetail;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets synchronizedTime
    *  下发时间，表示通道是否已经同步到了节点
    *
    * @return string|null
    */
    public function getSynchronizedTime()
    {
        return $this->container['synchronizedTime'];
    }

    /**
    * Sets synchronizedTime
    *
    * @param string|null $synchronizedTime 下发时间，表示通道是否已经同步到了节点
    *
    * @return $this
    */
    public function setSynchronizedTime($synchronizedTime)
    {
        $this->container['synchronizedTime'] = $synchronizedTime;
        return $this;
    }

    /**
    * Gets synchronizedStatus
    *  下发状态，表示是否已同步到了节点
    *
    * @return bool|null
    */
    public function getSynchronizedStatus()
    {
        return $this->container['synchronizedStatus'];
    }

    /**
    * Sets synchronizedStatus
    *
    * @param bool|null $synchronizedStatus 下发状态，表示是否已同步到了节点
    *
    * @return $this
    */
    public function setSynchronizedStatus($synchronizedStatus)
    {
        $this->container['synchronizedStatus'] = $synchronizedStatus;
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

