<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainSourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainSourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  回源、转推协议
    * sourceType  源站地址类型
    * sources  回源、转推地址列表，最少1个，最多10个；格式为：{domain/IP}[:{port}]，port默认值为1935
    * sourcesPriority  多个回源、转推地址的优先级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'sourceType' => 'string',
            'sources' => 'string[]',
            'sourcesPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  回源、转推协议
    * sourceType  源站地址类型
    * sources  回源、转推地址列表，最少1个，最多10个；格式为：{domain/IP}[:{port}]，port默认值为1935
    * sourcesPriority  多个回源、转推地址的优先级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'sourceType' => null,
        'sources' => null,
        'sourcesPriority' => null
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
    * protocol  回源、转推协议
    * sourceType  源站地址类型
    * sources  回源、转推地址列表，最少1个，最多10个；格式为：{domain/IP}[:{port}]，port默认值为1935
    * sourcesPriority  多个回源、转推地址的优先级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'sourceType' => 'source_type',
            'sources' => 'sources',
            'sourcesPriority' => 'sources_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  回源、转推协议
    * sourceType  源站地址类型
    * sources  回源、转推地址列表，最少1个，最多10个；格式为：{domain/IP}[:{port}]，port默认值为1935
    * sourcesPriority  多个回源、转推地址的优先级
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'sourceType' => 'setSourceType',
            'sources' => 'setSources',
            'sourcesPriority' => 'setSourcesPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  回源、转推协议
    * sourceType  源站地址类型
    * sources  回源、转推地址列表，最少1个，最多10个；格式为：{domain/IP}[:{port}]，port默认值为1935
    * sourcesPriority  多个回源、转推地址的优先级
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'sourceType' => 'getSourceType',
            'sources' => 'getSources',
            'sourcesPriority' => 'getSourcesPriority'
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
    const PROTOCOL_RTMP = 'rtmp';
    const PROTOCOL_HTTP = 'http';
    const SOURCE_TYPE_DOMAIN = 'domain';
    const SOURCE_TYPE_IPADDR = 'ipaddr';
    const SOURCE_TYPE_HUAWEI = 'huawei';
    const SOURCES_PRIORITY_FIRST = 'first';
    const SOURCES_PRIORITY_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_RTMP,
            self::PROTOCOL_HTTP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_DOMAIN,
            self::SOURCE_TYPE_IPADDR,
            self::SOURCE_TYPE_HUAWEI,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourcesPriorityAllowableValues()
    {
        return [
            self::SOURCES_PRIORITY_FIRST,
            self::SOURCES_PRIORITY_ALL,
        ];
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : 'huawei';
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['sourcesPriority'] = isset($data['sourcesPriority']) ? $data['sourcesPriority'] : 'first';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSourcesPriorityAllowableValues();
                if (!is_null($this->container['sourcesPriority']) && !in_array($this->container['sourcesPriority'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourcesPriority', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets protocol
    *  回源、转推协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 回源、转推协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets sourceType
    *  源站地址类型
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 源站地址类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sources
    *  回源、转推地址列表，最少1个，最多10个；格式为：{domain/IP}[:{port}]，port默认值为1935
    *
    * @return string[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param string[]|null $sources 回源、转推地址列表，最少1个，最多10个；格式为：{domain/IP}[:{port}]，port默认值为1935
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets sourcesPriority
    *  多个回源、转推地址的优先级
    *
    * @return string|null
    */
    public function getSourcesPriority()
    {
        return $this->container['sourcesPriority'];
    }

    /**
    * Sets sourcesPriority
    *
    * @param string|null $sourcesPriority 多个回源、转推地址的优先级
    *
    * @return $this
    */
    public function setSourcesPriority($sourcesPriority)
    {
        $this->container['sourcesPriority'] = $sourcesPriority;
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

