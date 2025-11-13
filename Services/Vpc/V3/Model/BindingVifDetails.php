<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindingVifDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindingVifDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * primaryInterface  参数解释：表示该网卡是否为云服务器的主网卡。取值范围：true，主网卡；false，非主网卡。
    * portFilter  参数解释：表示该网络服务提供端口过滤特性，如安全组和反MAC/IP欺骗。取值范围：true，提供端口过滤特性；false，未提供端口过滤特性。
    * ovsHybridPlug  参数解释：是否为ovs/bridge混合模式。取值范围：true，ovs/bridge混合模式；false，非ovs/bridge混合模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primaryInterface' => 'bool',
            'portFilter' => 'bool',
            'ovsHybridPlug' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primaryInterface  参数解释：表示该网卡是否为云服务器的主网卡。取值范围：true，主网卡；false，非主网卡。
    * portFilter  参数解释：表示该网络服务提供端口过滤特性，如安全组和反MAC/IP欺骗。取值范围：true，提供端口过滤特性；false，未提供端口过滤特性。
    * ovsHybridPlug  参数解释：是否为ovs/bridge混合模式。取值范围：true，ovs/bridge混合模式；false，非ovs/bridge混合模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primaryInterface' => null,
        'portFilter' => null,
        'ovsHybridPlug' => null
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
    * primaryInterface  参数解释：表示该网卡是否为云服务器的主网卡。取值范围：true，主网卡；false，非主网卡。
    * portFilter  参数解释：表示该网络服务提供端口过滤特性，如安全组和反MAC/IP欺骗。取值范围：true，提供端口过滤特性；false，未提供端口过滤特性。
    * ovsHybridPlug  参数解释：是否为ovs/bridge混合模式。取值范围：true，ovs/bridge混合模式；false，非ovs/bridge混合模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primaryInterface' => 'primary_interface',
            'portFilter' => 'port_filter',
            'ovsHybridPlug' => 'ovs_hybrid_plug'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primaryInterface  参数解释：表示该网卡是否为云服务器的主网卡。取值范围：true，主网卡；false，非主网卡。
    * portFilter  参数解释：表示该网络服务提供端口过滤特性，如安全组和反MAC/IP欺骗。取值范围：true，提供端口过滤特性；false，未提供端口过滤特性。
    * ovsHybridPlug  参数解释：是否为ovs/bridge混合模式。取值范围：true，ovs/bridge混合模式；false，非ovs/bridge混合模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'primaryInterface' => 'setPrimaryInterface',
            'portFilter' => 'setPortFilter',
            'ovsHybridPlug' => 'setOvsHybridPlug'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primaryInterface  参数解释：表示该网卡是否为云服务器的主网卡。取值范围：true，主网卡；false，非主网卡。
    * portFilter  参数解释：表示该网络服务提供端口过滤特性，如安全组和反MAC/IP欺骗。取值范围：true，提供端口过滤特性；false，未提供端口过滤特性。
    * ovsHybridPlug  参数解释：是否为ovs/bridge混合模式。取值范围：true，ovs/bridge混合模式；false，非ovs/bridge混合模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'primaryInterface' => 'getPrimaryInterface',
            'portFilter' => 'getPortFilter',
            'ovsHybridPlug' => 'getOvsHybridPlug'
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
        $this->container['primaryInterface'] = isset($data['primaryInterface']) ? $data['primaryInterface'] : null;
        $this->container['portFilter'] = isset($data['portFilter']) ? $data['portFilter'] : null;
        $this->container['ovsHybridPlug'] = isset($data['ovsHybridPlug']) ? $data['ovsHybridPlug'] : null;
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
    * Gets primaryInterface
    *  参数解释：表示该网卡是否为云服务器的主网卡。取值范围：true，主网卡；false，非主网卡。
    *
    * @return bool|null
    */
    public function getPrimaryInterface()
    {
        return $this->container['primaryInterface'];
    }

    /**
    * Sets primaryInterface
    *
    * @param bool|null $primaryInterface 参数解释：表示该网卡是否为云服务器的主网卡。取值范围：true，主网卡；false，非主网卡。
    *
    * @return $this
    */
    public function setPrimaryInterface($primaryInterface)
    {
        $this->container['primaryInterface'] = $primaryInterface;
        return $this;
    }

    /**
    * Gets portFilter
    *  参数解释：表示该网络服务提供端口过滤特性，如安全组和反MAC/IP欺骗。取值范围：true，提供端口过滤特性；false，未提供端口过滤特性。
    *
    * @return bool|null
    */
    public function getPortFilter()
    {
        return $this->container['portFilter'];
    }

    /**
    * Sets portFilter
    *
    * @param bool|null $portFilter 参数解释：表示该网络服务提供端口过滤特性，如安全组和反MAC/IP欺骗。取值范围：true，提供端口过滤特性；false，未提供端口过滤特性。
    *
    * @return $this
    */
    public function setPortFilter($portFilter)
    {
        $this->container['portFilter'] = $portFilter;
        return $this;
    }

    /**
    * Gets ovsHybridPlug
    *  参数解释：是否为ovs/bridge混合模式。取值范围：true，ovs/bridge混合模式；false，非ovs/bridge混合模式。
    *
    * @return bool|null
    */
    public function getOvsHybridPlug()
    {
        return $this->container['ovsHybridPlug'];
    }

    /**
    * Sets ovsHybridPlug
    *
    * @param bool|null $ovsHybridPlug 参数解释：是否为ovs/bridge混合模式。取值范围：true，ovs/bridge混合模式；false，非ovs/bridge混合模式。
    *
    * @return $this
    */
    public function setOvsHybridPlug($ovsHybridPlug)
    {
        $this->container['ovsHybridPlug'] = $ovsHybridPlug;
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

