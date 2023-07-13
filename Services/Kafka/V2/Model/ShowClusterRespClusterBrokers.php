<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterRespClusterBrokers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterResp_cluster_brokers';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * host  节点IP。
    * port  端口号。
    * brokerId  节点ID。
    * isController  是否为contoller节点。
    * version  服务端版本。
    * registerTime  broker注册时间，为unix时间戳格式。
    * isHealth  Kafka实例节点的连通性是否正常。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'host' => 'string',
            'port' => 'int',
            'brokerId' => 'string',
            'isController' => 'bool',
            'version' => 'string',
            'registerTime' => 'int',
            'isHealth' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * host  节点IP。
    * port  端口号。
    * brokerId  节点ID。
    * isController  是否为contoller节点。
    * version  服务端版本。
    * registerTime  broker注册时间，为unix时间戳格式。
    * isHealth  Kafka实例节点的连通性是否正常。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'host' => null,
        'port' => null,
        'brokerId' => null,
        'isController' => null,
        'version' => null,
        'registerTime' => 'int64',
        'isHealth' => null
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
    * host  节点IP。
    * port  端口号。
    * brokerId  节点ID。
    * isController  是否为contoller节点。
    * version  服务端版本。
    * registerTime  broker注册时间，为unix时间戳格式。
    * isHealth  Kafka实例节点的连通性是否正常。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'host' => 'host',
            'port' => 'port',
            'brokerId' => 'broker_id',
            'isController' => 'is_controller',
            'version' => 'version',
            'registerTime' => 'register_time',
            'isHealth' => 'is_health'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * host  节点IP。
    * port  端口号。
    * brokerId  节点ID。
    * isController  是否为contoller节点。
    * version  服务端版本。
    * registerTime  broker注册时间，为unix时间戳格式。
    * isHealth  Kafka实例节点的连通性是否正常。
    *
    * @var string[]
    */
    protected static $setters = [
            'host' => 'setHost',
            'port' => 'setPort',
            'brokerId' => 'setBrokerId',
            'isController' => 'setIsController',
            'version' => 'setVersion',
            'registerTime' => 'setRegisterTime',
            'isHealth' => 'setIsHealth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * host  节点IP。
    * port  端口号。
    * brokerId  节点ID。
    * isController  是否为contoller节点。
    * version  服务端版本。
    * registerTime  broker注册时间，为unix时间戳格式。
    * isHealth  Kafka实例节点的连通性是否正常。
    *
    * @var string[]
    */
    protected static $getters = [
            'host' => 'getHost',
            'port' => 'getPort',
            'brokerId' => 'getBrokerId',
            'isController' => 'getIsController',
            'version' => 'getVersion',
            'registerTime' => 'getRegisterTime',
            'isHealth' => 'getIsHealth'
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['brokerId'] = isset($data['brokerId']) ? $data['brokerId'] : null;
        $this->container['isController'] = isset($data['isController']) ? $data['isController'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
        $this->container['isHealth'] = isset($data['isHealth']) ? $data['isHealth'] : null;
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
    * Gets host
    *  节点IP。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 节点IP。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets port
    *  端口号。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets brokerId
    *  节点ID。
    *
    * @return string|null
    */
    public function getBrokerId()
    {
        return $this->container['brokerId'];
    }

    /**
    * Sets brokerId
    *
    * @param string|null $brokerId 节点ID。
    *
    * @return $this
    */
    public function setBrokerId($brokerId)
    {
        $this->container['brokerId'] = $brokerId;
        return $this;
    }

    /**
    * Gets isController
    *  是否为contoller节点。
    *
    * @return bool|null
    */
    public function getIsController()
    {
        return $this->container['isController'];
    }

    /**
    * Sets isController
    *
    * @param bool|null $isController 是否为contoller节点。
    *
    * @return $this
    */
    public function setIsController($isController)
    {
        $this->container['isController'] = $isController;
        return $this;
    }

    /**
    * Gets version
    *  服务端版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 服务端版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets registerTime
    *  broker注册时间，为unix时间戳格式。
    *
    * @return int|null
    */
    public function getRegisterTime()
    {
        return $this->container['registerTime'];
    }

    /**
    * Sets registerTime
    *
    * @param int|null $registerTime broker注册时间，为unix时间戳格式。
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
        return $this;
    }

    /**
    * Gets isHealth
    *  Kafka实例节点的连通性是否正常。
    *
    * @return bool|null
    */
    public function getIsHealth()
    {
        return $this->container['isHealth'];
    }

    /**
    * Sets isHealth
    *
    * @param bool|null $isHealth Kafka实例节点的连通性是否正常。
    *
    * @return $this
    */
    public function setIsHealth($isHealth)
    {
        $this->container['isHealth'] = $isHealth;
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

