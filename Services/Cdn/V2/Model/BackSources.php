<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackSources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'backSources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourcesType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS桶类型 **约束限制：** 不涉及 **取值范围：** - private: 私有桶 - public: 公有桶  **默认取值：** public: 公有桶
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourcesType' => 'string',
            'ipOrDomain' => 'string',
            'obsBucketType' => 'string',
            'httpPort' => 'int',
            'httpsPort' => 'int',
            'originProtocol' => 'string',
            'hostName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourcesType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS桶类型 **约束限制：** 不涉及 **取值范围：** - private: 私有桶 - public: 公有桶  **默认取值：** public: 公有桶
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourcesType' => null,
        'ipOrDomain' => null,
        'obsBucketType' => null,
        'httpPort' => 'int32',
        'httpsPort' => 'int32',
        'originProtocol' => null,
        'hostName' => null
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
    * sourcesType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS桶类型 **约束限制：** 不涉及 **取值范围：** - private: 私有桶 - public: 公有桶  **默认取值：** public: 公有桶
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourcesType' => 'sources_type',
            'ipOrDomain' => 'ip_or_domain',
            'obsBucketType' => 'obs_bucket_type',
            'httpPort' => 'http_port',
            'httpsPort' => 'https_port',
            'originProtocol' => 'origin_protocol',
            'hostName' => 'host_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourcesType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS桶类型 **约束限制：** 不涉及 **取值范围：** - private: 私有桶 - public: 公有桶  **默认取值：** public: 公有桶
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    *
    * @var string[]
    */
    protected static $setters = [
            'sourcesType' => 'setSourcesType',
            'ipOrDomain' => 'setIpOrDomain',
            'obsBucketType' => 'setObsBucketType',
            'httpPort' => 'setHttpPort',
            'httpsPort' => 'setHttpsPort',
            'originProtocol' => 'setOriginProtocol',
            'hostName' => 'setHostName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourcesType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS桶类型 **约束限制：** 不涉及 **取值范围：** - private: 私有桶 - public: 公有桶  **默认取值：** public: 公有桶
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * originProtocol  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    *
    * @var string[]
    */
    protected static $getters = [
            'sourcesType' => 'getSourcesType',
            'ipOrDomain' => 'getIpOrDomain',
            'obsBucketType' => 'getObsBucketType',
            'httpPort' => 'getHttpPort',
            'httpsPort' => 'getHttpsPort',
            'originProtocol' => 'getOriginProtocol',
            'hostName' => 'getHostName'
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
        $this->container['sourcesType'] = isset($data['sourcesType']) ? $data['sourcesType'] : null;
        $this->container['ipOrDomain'] = isset($data['ipOrDomain']) ? $data['ipOrDomain'] : null;
        $this->container['obsBucketType'] = isset($data['obsBucketType']) ? $data['obsBucketType'] : null;
        $this->container['httpPort'] = isset($data['httpPort']) ? $data['httpPort'] : null;
        $this->container['httpsPort'] = isset($data['httpsPort']) ? $data['httpsPort'] : null;
        $this->container['originProtocol'] = isset($data['originProtocol']) ? $data['originProtocol'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourcesType'] === null) {
            $invalidProperties[] = "'sourcesType' can't be null";
        }
        if ($this->container['ipOrDomain'] === null) {
            $invalidProperties[] = "'ipOrDomain' can't be null";
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
    * Gets sourcesType
    *  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getSourcesType()
    {
        return $this->container['sourcesType'];
    }

    /**
    * Sets sourcesType
    *
    * @param string $sourcesType **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSourcesType($sourcesType)
    {
        $this->container['sourcesType'] = $sourcesType;
        return $this;
    }

    /**
    * Gets ipOrDomain
    *  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getIpOrDomain()
    {
        return $this->container['ipOrDomain'];
    }

    /**
    * Sets ipOrDomain
    *
    * @param string $ipOrDomain **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIpOrDomain($ipOrDomain)
    {
        $this->container['ipOrDomain'] = $ipOrDomain;
        return $this;
    }

    /**
    * Gets obsBucketType
    *  **参数解释：** OBS桶类型 **约束限制：** 不涉及 **取值范围：** - private: 私有桶 - public: 公有桶  **默认取值：** public: 公有桶
    *
    * @return string|null
    */
    public function getObsBucketType()
    {
        return $this->container['obsBucketType'];
    }

    /**
    * Sets obsBucketType
    *
    * @param string|null $obsBucketType **参数解释：** OBS桶类型 **约束限制：** 不涉及 **取值范围：** - private: 私有桶 - public: 公有桶  **默认取值：** public: 公有桶
    *
    * @return $this
    */
    public function setObsBucketType($obsBucketType)
    {
        $this->container['obsBucketType'] = $obsBucketType;
        return $this;
    }

    /**
    * Gets httpPort
    *  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    *
    * @return int|null
    */
    public function getHttpPort()
    {
        return $this->container['httpPort'];
    }

    /**
    * Sets httpPort
    *
    * @param int|null $httpPort **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    *
    * @return $this
    */
    public function setHttpPort($httpPort)
    {
        $this->container['httpPort'] = $httpPort;
        return $this;
    }

    /**
    * Gets httpsPort
    *  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    *
    * @return int|null
    */
    public function getHttpsPort()
    {
        return $this->container['httpsPort'];
    }

    /**
    * Sets httpsPort
    *
    * @param int|null $httpsPort **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    *
    * @return $this
    */
    public function setHttpsPort($httpsPort)
    {
        $this->container['httpsPort'] = $httpsPort;
        return $this;
    }

    /**
    * Gets originProtocol
    *  **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    *
    * @return string|null
    */
    public function getOriginProtocol()
    {
        return $this->container['originProtocol'];
    }

    /**
    * Sets originProtocol
    *
    * @param string|null $originProtocol **参数解释：** 指定CDN回源时的请求协议 **约束限制：** 不涉及 **取值范围：** - follow: 协议跟随 - http: http协议 - https: https协议  **默认取值：** http: http协议
    *
    * @return $this
    */
    public function setOriginProtocol($originProtocol)
    {
        $this->container['originProtocol'] = $originProtocol;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
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

