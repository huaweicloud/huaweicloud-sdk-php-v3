<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNewConfigsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNewConfigsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trafficLimitedList  流量限制列表
    * httpLimitedList  HTTP限制列表
    * connectionLimitedList  连接数限制列表
    * extendDdosConfig  扩展配置列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trafficLimitedList' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\TriggerBpsDict[]',
            'httpLimitedList' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\TriggerQpsDict[]',
            'connectionLimitedList' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\CleanLimitDict[]',
            'extendDdosConfig' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\ExtendDDoSSet[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trafficLimitedList  流量限制列表
    * httpLimitedList  HTTP限制列表
    * connectionLimitedList  连接数限制列表
    * extendDdosConfig  扩展配置列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trafficLimitedList' => null,
        'httpLimitedList' => null,
        'connectionLimitedList' => null,
        'extendDdosConfig' => null
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
    * trafficLimitedList  流量限制列表
    * httpLimitedList  HTTP限制列表
    * connectionLimitedList  连接数限制列表
    * extendDdosConfig  扩展配置列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trafficLimitedList' => 'traffic_limited_list',
            'httpLimitedList' => 'http_limited_list',
            'connectionLimitedList' => 'connection_limited_list',
            'extendDdosConfig' => 'extend_ddos_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trafficLimitedList  流量限制列表
    * httpLimitedList  HTTP限制列表
    * connectionLimitedList  连接数限制列表
    * extendDdosConfig  扩展配置列表
    *
    * @var string[]
    */
    protected static $setters = [
            'trafficLimitedList' => 'setTrafficLimitedList',
            'httpLimitedList' => 'setHttpLimitedList',
            'connectionLimitedList' => 'setConnectionLimitedList',
            'extendDdosConfig' => 'setExtendDdosConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trafficLimitedList  流量限制列表
    * httpLimitedList  HTTP限制列表
    * connectionLimitedList  连接数限制列表
    * extendDdosConfig  扩展配置列表
    *
    * @var string[]
    */
    protected static $getters = [
            'trafficLimitedList' => 'getTrafficLimitedList',
            'httpLimitedList' => 'getHttpLimitedList',
            'connectionLimitedList' => 'getConnectionLimitedList',
            'extendDdosConfig' => 'getExtendDdosConfig'
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
        $this->container['trafficLimitedList'] = isset($data['trafficLimitedList']) ? $data['trafficLimitedList'] : null;
        $this->container['httpLimitedList'] = isset($data['httpLimitedList']) ? $data['httpLimitedList'] : null;
        $this->container['connectionLimitedList'] = isset($data['connectionLimitedList']) ? $data['connectionLimitedList'] : null;
        $this->container['extendDdosConfig'] = isset($data['extendDdosConfig']) ? $data['extendDdosConfig'] : null;
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
    * Gets trafficLimitedList
    *  流量限制列表
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\TriggerBpsDict[]|null
    */
    public function getTrafficLimitedList()
    {
        return $this->container['trafficLimitedList'];
    }

    /**
    * Sets trafficLimitedList
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\TriggerBpsDict[]|null $trafficLimitedList 流量限制列表
    *
    * @return $this
    */
    public function setTrafficLimitedList($trafficLimitedList)
    {
        $this->container['trafficLimitedList'] = $trafficLimitedList;
        return $this;
    }

    /**
    * Gets httpLimitedList
    *  HTTP限制列表
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\TriggerQpsDict[]|null
    */
    public function getHttpLimitedList()
    {
        return $this->container['httpLimitedList'];
    }

    /**
    * Sets httpLimitedList
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\TriggerQpsDict[]|null $httpLimitedList HTTP限制列表
    *
    * @return $this
    */
    public function setHttpLimitedList($httpLimitedList)
    {
        $this->container['httpLimitedList'] = $httpLimitedList;
        return $this;
    }

    /**
    * Gets connectionLimitedList
    *  连接数限制列表
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\CleanLimitDict[]|null
    */
    public function getConnectionLimitedList()
    {
        return $this->container['connectionLimitedList'];
    }

    /**
    * Sets connectionLimitedList
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\CleanLimitDict[]|null $connectionLimitedList 连接数限制列表
    *
    * @return $this
    */
    public function setConnectionLimitedList($connectionLimitedList)
    {
        $this->container['connectionLimitedList'] = $connectionLimitedList;
        return $this;
    }

    /**
    * Gets extendDdosConfig
    *  扩展配置列表
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\ExtendDDoSSet[]|null
    */
    public function getExtendDdosConfig()
    {
        return $this->container['extendDdosConfig'];
    }

    /**
    * Sets extendDdosConfig
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\ExtendDDoSSet[]|null $extendDdosConfig 扩展配置列表
    *
    * @return $this
    */
    public function setExtendDdosConfig($extendDdosConfig)
    {
        $this->container['extendDdosConfig'] = $extendDdosConfig;
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

