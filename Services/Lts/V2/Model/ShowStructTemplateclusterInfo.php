<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStructTemplateclusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStructTemplateclusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  测试
    * kafkaBootstrapServers  测试
    * kafkaSslEnable  测试
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'kafkaBootstrapServers' => 'string',
            'kafkaSslEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  测试
    * kafkaBootstrapServers  测试
    * kafkaSslEnable  测试
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'kafkaBootstrapServers' => null,
        'kafkaSslEnable' => null
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
    * clusterName  测试
    * kafkaBootstrapServers  测试
    * kafkaSslEnable  测试
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'kafkaBootstrapServers' => 'kafka_bootstrap_servers',
            'kafkaSslEnable' => 'kafka_ssl_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  测试
    * kafkaBootstrapServers  测试
    * kafkaSslEnable  测试
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'kafkaBootstrapServers' => 'setKafkaBootstrapServers',
            'kafkaSslEnable' => 'setKafkaSslEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  测试
    * kafkaBootstrapServers  测试
    * kafkaSslEnable  测试
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'kafkaBootstrapServers' => 'getKafkaBootstrapServers',
            'kafkaSslEnable' => 'getKafkaSslEnable'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['kafkaBootstrapServers'] = isset($data['kafkaBootstrapServers']) ? $data['kafkaBootstrapServers'] : null;
        $this->container['kafkaSslEnable'] = isset($data['kafkaSslEnable']) ? $data['kafkaSslEnable'] : null;
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
    * Gets clusterName
    *  测试
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 测试
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets kafkaBootstrapServers
    *  测试
    *
    * @return string|null
    */
    public function getKafkaBootstrapServers()
    {
        return $this->container['kafkaBootstrapServers'];
    }

    /**
    * Sets kafkaBootstrapServers
    *
    * @param string|null $kafkaBootstrapServers 测试
    *
    * @return $this
    */
    public function setKafkaBootstrapServers($kafkaBootstrapServers)
    {
        $this->container['kafkaBootstrapServers'] = $kafkaBootstrapServers;
        return $this;
    }

    /**
    * Gets kafkaSslEnable
    *  测试
    *
    * @return bool|null
    */
    public function getKafkaSslEnable()
    {
        return $this->container['kafkaSslEnable'];
    }

    /**
    * Sets kafkaSslEnable
    *
    * @param bool|null $kafkaSslEnable 测试
    *
    * @return $this
    */
    public function setKafkaSslEnable($kafkaSslEnable)
    {
        $this->container['kafkaSslEnable'] = $kafkaSslEnable;
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

