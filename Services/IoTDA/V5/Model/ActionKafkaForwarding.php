<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionKafkaForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionKafkaForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionName' => 'string',
            'projectId' => 'string',
            'kafkaAddresses' => '\HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]',
            'kafkaTopic' => 'string',
            'kafkaUsername' => 'string',
            'kafkaPassword' => 'string',
            'kafkaMechanism' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionName' => null,
        'projectId' => null,
        'kafkaAddresses' => null,
        'kafkaTopic' => null,
        'kafkaUsername' => null,
        'kafkaPassword' => null,
        'kafkaMechanism' => null
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
            'regionName' => 'region_name',
            'projectId' => 'project_id',
            'kafkaAddresses' => 'kafka_addresses',
            'kafkaTopic' => 'kafka_topic',
            'kafkaUsername' => 'kafka_username',
            'kafkaPassword' => 'kafka_password',
            'kafkaMechanism' => 'kafka_mechanism'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'regionName' => 'setRegionName',
            'projectId' => 'setProjectId',
            'kafkaAddresses' => 'setKafkaAddresses',
            'kafkaTopic' => 'setKafkaTopic',
            'kafkaUsername' => 'setKafkaUsername',
            'kafkaPassword' => 'setKafkaPassword',
            'kafkaMechanism' => 'setKafkaMechanism'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'regionName' => 'getRegionName',
            'projectId' => 'getProjectId',
            'kafkaAddresses' => 'getKafkaAddresses',
            'kafkaTopic' => 'getKafkaTopic',
            'kafkaUsername' => 'getKafkaUsername',
            'kafkaPassword' => 'getKafkaPassword',
            'kafkaMechanism' => 'getKafkaMechanism'
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
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['kafkaAddresses'] = isset($data['kafkaAddresses']) ? $data['kafkaAddresses'] : null;
        $this->container['kafkaTopic'] = isset($data['kafkaTopic']) ? $data['kafkaTopic'] : null;
        $this->container['kafkaUsername'] = isset($data['kafkaUsername']) ? $data['kafkaUsername'] : null;
        $this->container['kafkaPassword'] = isset($data['kafkaPassword']) ? $data['kafkaPassword'] : null;
        $this->container['kafkaMechanism'] = isset($data['kafkaMechanism']) ? $data['kafkaMechanism'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 256)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['kafkaTopic']) && (mb_strlen($this->container['kafkaTopic']) > 256)) {
                $invalidProperties[] = "invalid value for 'kafkaTopic', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['kafkaUsername']) && (mb_strlen($this->container['kafkaUsername']) > 256)) {
                $invalidProperties[] = "invalid value for 'kafkaUsername', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['kafkaPassword']) && (mb_strlen($this->container['kafkaPassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'kafkaPassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['kafkaMechanism']) && !preg_match("/(PAAS|PLAIN)/", $this->container['kafkaMechanism'])) {
                $invalidProperties[] = "invalid value for 'kafkaMechanism', must be conform to the pattern /(PAAS|PLAIN)/.";
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
    * Gets regionName
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 转发kafka消息对应的region区域
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets projectId
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 转发kafka消息对应的projectId信息
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets kafkaAddresses
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]|null
    */
    public function getKafkaAddresses()
    {
        return $this->container['kafkaAddresses'];
    }

    /**
    * Sets kafkaAddresses
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]|null $kafkaAddresses 转发kafka消息对应的地址列表
    *
    * @return $this
    */
    public function setKafkaAddresses($kafkaAddresses)
    {
        $this->container['kafkaAddresses'] = $kafkaAddresses;
        return $this;
    }

    /**
    * Gets kafkaTopic
    *
    * @return string|null
    */
    public function getKafkaTopic()
    {
        return $this->container['kafkaTopic'];
    }

    /**
    * Sets kafkaTopic
    *
    * @param string|null $kafkaTopic 转发kafka消息关联的topic信息。
    *
    * @return $this
    */
    public function setKafkaTopic($kafkaTopic)
    {
        $this->container['kafkaTopic'] = $kafkaTopic;
        return $this;
    }

    /**
    * Gets kafkaUsername
    *
    * @return string|null
    */
    public function getKafkaUsername()
    {
        return $this->container['kafkaUsername'];
    }

    /**
    * Sets kafkaUsername
    *
    * @param string|null $kafkaUsername 转发kafka关联的用户名信息。
    *
    * @return $this
    */
    public function setKafkaUsername($kafkaUsername)
    {
        $this->container['kafkaUsername'] = $kafkaUsername;
        return $this;
    }

    /**
    * Gets kafkaPassword
    *
    * @return string|null
    */
    public function getKafkaPassword()
    {
        return $this->container['kafkaPassword'];
    }

    /**
    * Sets kafkaPassword
    *
    * @param string|null $kafkaPassword 转发kafka关联的密码信息。
    *
    * @return $this
    */
    public function setKafkaPassword($kafkaPassword)
    {
        $this->container['kafkaPassword'] = $kafkaPassword;
        return $this;
    }

    /**
    * Gets kafkaMechanism
    *
    * @return string|null
    */
    public function getKafkaMechanism()
    {
        return $this->container['kafkaMechanism'];
    }

    /**
    * Sets kafkaMechanism
    *
    * @param string|null $kafkaMechanism 转发kafka关联的鉴权机制。 类型说明： PAAS：非SASL鉴权。 PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。
    *
    * @return $this
    */
    public function setKafkaMechanism($kafkaMechanism)
    {
        $this->container['kafkaMechanism'] = $kafkaMechanism;
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

