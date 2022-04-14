<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChannelDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChannelDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpForwarding  httpForwarding
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * amqpForwarding  amqpForwarding
    * dmsKafkaForwarding  dmsKafkaForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * mqsForwarding  mqsForwarding
    * mysqlForwarding  mysqlForwarding
    * mqttForwarding  mqttForwarding
    * ltsForwarding  ltsForwarding
    * influxdbForwarding  influxdbForwarding
    * functiongraphForwarding  functiongraphForwarding
    * mrsKafkaForwarding  mrsKafkaForwarding
    * pulsarForwarding  pulsarForwarding
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\HttpForwarding',
            'disForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DisForwarding',
            'obsForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ObsForwarding',
            'amqpForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\AmqpForwarding',
            'dmsKafkaForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DmsKafkaForwarding',
            'romaForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\RomaForwarding',
            'iotaForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\IoTAForwarding',
            'mqsForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\MqsForwarding',
            'mysqlForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\MysqlForwarding',
            'mqttForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\MqttForwarding',
            'ltsForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\LtsForwarding',
            'influxdbForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\InfluxDBForwarding',
            'functiongraphForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\FunctionGraphForwarding',
            'mrsKafkaForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\MrsKafkaForwarding',
            'pulsarForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\PulsarForwarding'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpForwarding  httpForwarding
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * amqpForwarding  amqpForwarding
    * dmsKafkaForwarding  dmsKafkaForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * mqsForwarding  mqsForwarding
    * mysqlForwarding  mysqlForwarding
    * mqttForwarding  mqttForwarding
    * ltsForwarding  ltsForwarding
    * influxdbForwarding  influxdbForwarding
    * functiongraphForwarding  functiongraphForwarding
    * mrsKafkaForwarding  mrsKafkaForwarding
    * pulsarForwarding  pulsarForwarding
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpForwarding' => null,
        'disForwarding' => null,
        'obsForwarding' => null,
        'amqpForwarding' => null,
        'dmsKafkaForwarding' => null,
        'romaForwarding' => null,
        'iotaForwarding' => null,
        'mqsForwarding' => null,
        'mysqlForwarding' => null,
        'mqttForwarding' => null,
        'ltsForwarding' => null,
        'influxdbForwarding' => null,
        'functiongraphForwarding' => null,
        'mrsKafkaForwarding' => null,
        'pulsarForwarding' => null
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
    * httpForwarding  httpForwarding
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * amqpForwarding  amqpForwarding
    * dmsKafkaForwarding  dmsKafkaForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * mqsForwarding  mqsForwarding
    * mysqlForwarding  mysqlForwarding
    * mqttForwarding  mqttForwarding
    * ltsForwarding  ltsForwarding
    * influxdbForwarding  influxdbForwarding
    * functiongraphForwarding  functiongraphForwarding
    * mrsKafkaForwarding  mrsKafkaForwarding
    * pulsarForwarding  pulsarForwarding
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpForwarding' => 'http_forwarding',
            'disForwarding' => 'dis_forwarding',
            'obsForwarding' => 'obs_forwarding',
            'amqpForwarding' => 'amqp_forwarding',
            'dmsKafkaForwarding' => 'dms_kafka_forwarding',
            'romaForwarding' => 'roma_forwarding',
            'iotaForwarding' => 'iota_forwarding',
            'mqsForwarding' => 'mqs_forwarding',
            'mysqlForwarding' => 'mysql_forwarding',
            'mqttForwarding' => 'mqtt_forwarding',
            'ltsForwarding' => 'lts_forwarding',
            'influxdbForwarding' => 'influxdb_forwarding',
            'functiongraphForwarding' => 'functiongraph_forwarding',
            'mrsKafkaForwarding' => 'mrs_kafka_forwarding',
            'pulsarForwarding' => 'pulsar_forwarding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpForwarding  httpForwarding
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * amqpForwarding  amqpForwarding
    * dmsKafkaForwarding  dmsKafkaForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * mqsForwarding  mqsForwarding
    * mysqlForwarding  mysqlForwarding
    * mqttForwarding  mqttForwarding
    * ltsForwarding  ltsForwarding
    * influxdbForwarding  influxdbForwarding
    * functiongraphForwarding  functiongraphForwarding
    * mrsKafkaForwarding  mrsKafkaForwarding
    * pulsarForwarding  pulsarForwarding
    *
    * @var string[]
    */
    protected static $setters = [
            'httpForwarding' => 'setHttpForwarding',
            'disForwarding' => 'setDisForwarding',
            'obsForwarding' => 'setObsForwarding',
            'amqpForwarding' => 'setAmqpForwarding',
            'dmsKafkaForwarding' => 'setDmsKafkaForwarding',
            'romaForwarding' => 'setRomaForwarding',
            'iotaForwarding' => 'setIotaForwarding',
            'mqsForwarding' => 'setMqsForwarding',
            'mysqlForwarding' => 'setMysqlForwarding',
            'mqttForwarding' => 'setMqttForwarding',
            'ltsForwarding' => 'setLtsForwarding',
            'influxdbForwarding' => 'setInfluxdbForwarding',
            'functiongraphForwarding' => 'setFunctiongraphForwarding',
            'mrsKafkaForwarding' => 'setMrsKafkaForwarding',
            'pulsarForwarding' => 'setPulsarForwarding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpForwarding  httpForwarding
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * amqpForwarding  amqpForwarding
    * dmsKafkaForwarding  dmsKafkaForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * mqsForwarding  mqsForwarding
    * mysqlForwarding  mysqlForwarding
    * mqttForwarding  mqttForwarding
    * ltsForwarding  ltsForwarding
    * influxdbForwarding  influxdbForwarding
    * functiongraphForwarding  functiongraphForwarding
    * mrsKafkaForwarding  mrsKafkaForwarding
    * pulsarForwarding  pulsarForwarding
    *
    * @var string[]
    */
    protected static $getters = [
            'httpForwarding' => 'getHttpForwarding',
            'disForwarding' => 'getDisForwarding',
            'obsForwarding' => 'getObsForwarding',
            'amqpForwarding' => 'getAmqpForwarding',
            'dmsKafkaForwarding' => 'getDmsKafkaForwarding',
            'romaForwarding' => 'getRomaForwarding',
            'iotaForwarding' => 'getIotaForwarding',
            'mqsForwarding' => 'getMqsForwarding',
            'mysqlForwarding' => 'getMysqlForwarding',
            'mqttForwarding' => 'getMqttForwarding',
            'ltsForwarding' => 'getLtsForwarding',
            'influxdbForwarding' => 'getInfluxdbForwarding',
            'functiongraphForwarding' => 'getFunctiongraphForwarding',
            'mrsKafkaForwarding' => 'getMrsKafkaForwarding',
            'pulsarForwarding' => 'getPulsarForwarding'
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
        $this->container['httpForwarding'] = isset($data['httpForwarding']) ? $data['httpForwarding'] : null;
        $this->container['disForwarding'] = isset($data['disForwarding']) ? $data['disForwarding'] : null;
        $this->container['obsForwarding'] = isset($data['obsForwarding']) ? $data['obsForwarding'] : null;
        $this->container['amqpForwarding'] = isset($data['amqpForwarding']) ? $data['amqpForwarding'] : null;
        $this->container['dmsKafkaForwarding'] = isset($data['dmsKafkaForwarding']) ? $data['dmsKafkaForwarding'] : null;
        $this->container['romaForwarding'] = isset($data['romaForwarding']) ? $data['romaForwarding'] : null;
        $this->container['iotaForwarding'] = isset($data['iotaForwarding']) ? $data['iotaForwarding'] : null;
        $this->container['mqsForwarding'] = isset($data['mqsForwarding']) ? $data['mqsForwarding'] : null;
        $this->container['mysqlForwarding'] = isset($data['mysqlForwarding']) ? $data['mysqlForwarding'] : null;
        $this->container['mqttForwarding'] = isset($data['mqttForwarding']) ? $data['mqttForwarding'] : null;
        $this->container['ltsForwarding'] = isset($data['ltsForwarding']) ? $data['ltsForwarding'] : null;
        $this->container['influxdbForwarding'] = isset($data['influxdbForwarding']) ? $data['influxdbForwarding'] : null;
        $this->container['functiongraphForwarding'] = isset($data['functiongraphForwarding']) ? $data['functiongraphForwarding'] : null;
        $this->container['mrsKafkaForwarding'] = isset($data['mrsKafkaForwarding']) ? $data['mrsKafkaForwarding'] : null;
        $this->container['pulsarForwarding'] = isset($data['pulsarForwarding']) ? $data['pulsarForwarding'] : null;
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
    * Gets httpForwarding
    *  httpForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\HttpForwarding|null
    */
    public function getHttpForwarding()
    {
        return $this->container['httpForwarding'];
    }

    /**
    * Sets httpForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\HttpForwarding|null $httpForwarding httpForwarding
    *
    * @return $this
    */
    public function setHttpForwarding($httpForwarding)
    {
        $this->container['httpForwarding'] = $httpForwarding;
        return $this;
    }

    /**
    * Gets disForwarding
    *  disForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DisForwarding|null
    */
    public function getDisForwarding()
    {
        return $this->container['disForwarding'];
    }

    /**
    * Sets disForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DisForwarding|null $disForwarding disForwarding
    *
    * @return $this
    */
    public function setDisForwarding($disForwarding)
    {
        $this->container['disForwarding'] = $disForwarding;
        return $this;
    }

    /**
    * Gets obsForwarding
    *  obsForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ObsForwarding|null
    */
    public function getObsForwarding()
    {
        return $this->container['obsForwarding'];
    }

    /**
    * Sets obsForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ObsForwarding|null $obsForwarding obsForwarding
    *
    * @return $this
    */
    public function setObsForwarding($obsForwarding)
    {
        $this->container['obsForwarding'] = $obsForwarding;
        return $this;
    }

    /**
    * Gets amqpForwarding
    *  amqpForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\AmqpForwarding|null
    */
    public function getAmqpForwarding()
    {
        return $this->container['amqpForwarding'];
    }

    /**
    * Sets amqpForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\AmqpForwarding|null $amqpForwarding amqpForwarding
    *
    * @return $this
    */
    public function setAmqpForwarding($amqpForwarding)
    {
        $this->container['amqpForwarding'] = $amqpForwarding;
        return $this;
    }

    /**
    * Gets dmsKafkaForwarding
    *  dmsKafkaForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DmsKafkaForwarding|null
    */
    public function getDmsKafkaForwarding()
    {
        return $this->container['dmsKafkaForwarding'];
    }

    /**
    * Sets dmsKafkaForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DmsKafkaForwarding|null $dmsKafkaForwarding dmsKafkaForwarding
    *
    * @return $this
    */
    public function setDmsKafkaForwarding($dmsKafkaForwarding)
    {
        $this->container['dmsKafkaForwarding'] = $dmsKafkaForwarding;
        return $this;
    }

    /**
    * Gets romaForwarding
    *  romaForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\RomaForwarding|null
    */
    public function getRomaForwarding()
    {
        return $this->container['romaForwarding'];
    }

    /**
    * Sets romaForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\RomaForwarding|null $romaForwarding romaForwarding
    *
    * @return $this
    */
    public function setRomaForwarding($romaForwarding)
    {
        $this->container['romaForwarding'] = $romaForwarding;
        return $this;
    }

    /**
    * Gets iotaForwarding
    *  iotaForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\IoTAForwarding|null
    */
    public function getIotaForwarding()
    {
        return $this->container['iotaForwarding'];
    }

    /**
    * Sets iotaForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\IoTAForwarding|null $iotaForwarding iotaForwarding
    *
    * @return $this
    */
    public function setIotaForwarding($iotaForwarding)
    {
        $this->container['iotaForwarding'] = $iotaForwarding;
        return $this;
    }

    /**
    * Gets mqsForwarding
    *  mqsForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\MqsForwarding|null
    */
    public function getMqsForwarding()
    {
        return $this->container['mqsForwarding'];
    }

    /**
    * Sets mqsForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\MqsForwarding|null $mqsForwarding mqsForwarding
    *
    * @return $this
    */
    public function setMqsForwarding($mqsForwarding)
    {
        $this->container['mqsForwarding'] = $mqsForwarding;
        return $this;
    }

    /**
    * Gets mysqlForwarding
    *  mysqlForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\MysqlForwarding|null
    */
    public function getMysqlForwarding()
    {
        return $this->container['mysqlForwarding'];
    }

    /**
    * Sets mysqlForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\MysqlForwarding|null $mysqlForwarding mysqlForwarding
    *
    * @return $this
    */
    public function setMysqlForwarding($mysqlForwarding)
    {
        $this->container['mysqlForwarding'] = $mysqlForwarding;
        return $this;
    }

    /**
    * Gets mqttForwarding
    *  mqttForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\MqttForwarding|null
    */
    public function getMqttForwarding()
    {
        return $this->container['mqttForwarding'];
    }

    /**
    * Sets mqttForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\MqttForwarding|null $mqttForwarding mqttForwarding
    *
    * @return $this
    */
    public function setMqttForwarding($mqttForwarding)
    {
        $this->container['mqttForwarding'] = $mqttForwarding;
        return $this;
    }

    /**
    * Gets ltsForwarding
    *  ltsForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\LtsForwarding|null
    */
    public function getLtsForwarding()
    {
        return $this->container['ltsForwarding'];
    }

    /**
    * Sets ltsForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\LtsForwarding|null $ltsForwarding ltsForwarding
    *
    * @return $this
    */
    public function setLtsForwarding($ltsForwarding)
    {
        $this->container['ltsForwarding'] = $ltsForwarding;
        return $this;
    }

    /**
    * Gets influxdbForwarding
    *  influxdbForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\InfluxDBForwarding|null
    */
    public function getInfluxdbForwarding()
    {
        return $this->container['influxdbForwarding'];
    }

    /**
    * Sets influxdbForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\InfluxDBForwarding|null $influxdbForwarding influxdbForwarding
    *
    * @return $this
    */
    public function setInfluxdbForwarding($influxdbForwarding)
    {
        $this->container['influxdbForwarding'] = $influxdbForwarding;
        return $this;
    }

    /**
    * Gets functiongraphForwarding
    *  functiongraphForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\FunctionGraphForwarding|null
    */
    public function getFunctiongraphForwarding()
    {
        return $this->container['functiongraphForwarding'];
    }

    /**
    * Sets functiongraphForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\FunctionGraphForwarding|null $functiongraphForwarding functiongraphForwarding
    *
    * @return $this
    */
    public function setFunctiongraphForwarding($functiongraphForwarding)
    {
        $this->container['functiongraphForwarding'] = $functiongraphForwarding;
        return $this;
    }

    /**
    * Gets mrsKafkaForwarding
    *  mrsKafkaForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\MrsKafkaForwarding|null
    */
    public function getMrsKafkaForwarding()
    {
        return $this->container['mrsKafkaForwarding'];
    }

    /**
    * Sets mrsKafkaForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\MrsKafkaForwarding|null $mrsKafkaForwarding mrsKafkaForwarding
    *
    * @return $this
    */
    public function setMrsKafkaForwarding($mrsKafkaForwarding)
    {
        $this->container['mrsKafkaForwarding'] = $mrsKafkaForwarding;
        return $this;
    }

    /**
    * Gets pulsarForwarding
    *  pulsarForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\PulsarForwarding|null
    */
    public function getPulsarForwarding()
    {
        return $this->container['pulsarForwarding'];
    }

    /**
    * Sets pulsarForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\PulsarForwarding|null $pulsarForwarding pulsarForwarding
    *
    * @return $this
    */
    public function setPulsarForwarding($pulsarForwarding)
    {
        $this->container['pulsarForwarding'] = $pulsarForwarding;
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

