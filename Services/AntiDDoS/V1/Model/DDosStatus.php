<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DDosStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DDosStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * networkType  EIP所属类型，可选范围： - EIP：未绑定到ECS的EIP或绑定到ECS的EIP - ELB：绑定到ELB的EIP
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * blackholeEndtime  黑洞结束时间
    * protectType  防护类型
    * trafficThreshold  流量阈值
    * httpThreshold  http流量阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'floatingIpId' => 'string',
            'floatingIpAddress' => 'string',
            'networkType' => 'string',
            'status' => 'string',
            'blackholeEndtime' => 'int',
            'protectType' => 'string',
            'trafficThreshold' => 'int',
            'httpThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * networkType  EIP所属类型，可选范围： - EIP：未绑定到ECS的EIP或绑定到ECS的EIP - ELB：绑定到ELB的EIP
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * blackholeEndtime  黑洞结束时间
    * protectType  防护类型
    * trafficThreshold  流量阈值
    * httpThreshold  http流量阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'floatingIpId' => null,
        'floatingIpAddress' => null,
        'networkType' => null,
        'status' => null,
        'blackholeEndtime' => 'int64',
        'protectType' => null,
        'trafficThreshold' => 'int64',
        'httpThreshold' => 'int64'
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
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * networkType  EIP所属类型，可选范围： - EIP：未绑定到ECS的EIP或绑定到ECS的EIP - ELB：绑定到ELB的EIP
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * blackholeEndtime  黑洞结束时间
    * protectType  防护类型
    * trafficThreshold  流量阈值
    * httpThreshold  http流量阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'floatingIpId' => 'floating_ip_id',
            'floatingIpAddress' => 'floating_ip_address',
            'networkType' => 'network_type',
            'status' => 'status',
            'blackholeEndtime' => 'blackhole_endtime',
            'protectType' => 'protect_type',
            'trafficThreshold' => 'traffic_threshold',
            'httpThreshold' => 'http_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * networkType  EIP所属类型，可选范围： - EIP：未绑定到ECS的EIP或绑定到ECS的EIP - ELB：绑定到ELB的EIP
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * blackholeEndtime  黑洞结束时间
    * protectType  防护类型
    * trafficThreshold  流量阈值
    * httpThreshold  http流量阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'floatingIpId' => 'setFloatingIpId',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'networkType' => 'setNetworkType',
            'status' => 'setStatus',
            'blackholeEndtime' => 'setBlackholeEndtime',
            'protectType' => 'setProtectType',
            'trafficThreshold' => 'setTrafficThreshold',
            'httpThreshold' => 'setHttpThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * networkType  EIP所属类型，可选范围： - EIP：未绑定到ECS的EIP或绑定到ECS的EIP - ELB：绑定到ELB的EIP
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * blackholeEndtime  黑洞结束时间
    * protectType  防护类型
    * trafficThreshold  流量阈值
    * httpThreshold  http流量阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'floatingIpId' => 'getFloatingIpId',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'networkType' => 'getNetworkType',
            'status' => 'getStatus',
            'blackholeEndtime' => 'getBlackholeEndtime',
            'protectType' => 'getProtectType',
            'trafficThreshold' => 'getTrafficThreshold',
            'httpThreshold' => 'getHttpThreshold'
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
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['blackholeEndtime'] = isset($data['blackholeEndtime']) ? $data['blackholeEndtime'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['trafficThreshold'] = isset($data['trafficThreshold']) ? $data['trafficThreshold'] : null;
        $this->container['httpThreshold'] = isset($data['httpThreshold']) ? $data['httpThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['floatingIpId'] === null) {
            $invalidProperties[] = "'floatingIpId' can't be null";
        }
        if ($this->container['floatingIpAddress'] === null) {
            $invalidProperties[] = "'floatingIpAddress' can't be null";
        }
        if ($this->container['networkType'] === null) {
            $invalidProperties[] = "'networkType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['blackholeEndtime'] === null) {
            $invalidProperties[] = "'blackholeEndtime' can't be null";
        }
        if ($this->container['protectType'] === null) {
            $invalidProperties[] = "'protectType' can't be null";
        }
        if ($this->container['trafficThreshold'] === null) {
            $invalidProperties[] = "'trafficThreshold' can't be null";
        }
        if ($this->container['httpThreshold'] === null) {
            $invalidProperties[] = "'httpThreshold' can't be null";
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
    * Gets floatingIpId
    *  EIP的ID
    *
    * @return string
    */
    public function getFloatingIpId()
    {
        return $this->container['floatingIpId'];
    }

    /**
    * Sets floatingIpId
    *
    * @param string $floatingIpId EIP的ID
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets floatingIpAddress
    *  浮动IP地址
    *
    * @return string
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string $floatingIpAddress 浮动IP地址
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets networkType
    *  EIP所属类型，可选范围： - EIP：未绑定到ECS的EIP或绑定到ECS的EIP - ELB：绑定到ELB的EIP
    *
    * @return string
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string $networkType EIP所属类型，可选范围： - EIP：未绑定到ECS的EIP或绑定到ECS的EIP - ELB：绑定到ELB的EIP
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets status
    *  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets blackholeEndtime
    *  黑洞结束时间
    *
    * @return int
    */
    public function getBlackholeEndtime()
    {
        return $this->container['blackholeEndtime'];
    }

    /**
    * Sets blackholeEndtime
    *
    * @param int $blackholeEndtime 黑洞结束时间
    *
    * @return $this
    */
    public function setBlackholeEndtime($blackholeEndtime)
    {
        $this->container['blackholeEndtime'] = $blackholeEndtime;
        return $this;
    }

    /**
    * Gets protectType
    *  防护类型
    *
    * @return string
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string $protectType 防护类型
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets trafficThreshold
    *  流量阈值
    *
    * @return int
    */
    public function getTrafficThreshold()
    {
        return $this->container['trafficThreshold'];
    }

    /**
    * Sets trafficThreshold
    *
    * @param int $trafficThreshold 流量阈值
    *
    * @return $this
    */
    public function setTrafficThreshold($trafficThreshold)
    {
        $this->container['trafficThreshold'] = $trafficThreshold;
        return $this;
    }

    /**
    * Gets httpThreshold
    *  http流量阈值
    *
    * @return int
    */
    public function getHttpThreshold()
    {
        return $this->container['httpThreshold'];
    }

    /**
    * Sets httpThreshold
    *
    * @param int $httpThreshold http流量阈值
    *
    * @return $this
    */
    public function setHttpThreshold($httpThreshold)
    {
        $this->container['httpThreshold'] = $httpThreshold;
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

