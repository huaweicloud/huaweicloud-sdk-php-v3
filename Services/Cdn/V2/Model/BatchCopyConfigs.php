<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCopyConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCopyConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetDomain  目标域名列表,多个域名以逗号（半角）分隔,域名数最大10个。
    * sourceDomain  原域名
    * configList  需要复制的域名配置项,多个配置项以逗号（半角）分隔，支持复制的配置项： - originRequestHeader（回源请求头） - httpResponseHeader（HTTP header配置） - cacheUrlParamsConfig（URL参数） - urlAuth（URL鉴权配置） - userAgentBlackAndWhiteList（User-Agent黑白名单） - ipv6Accelerate（IPv6开关） - rangeStatus（Range回源） - cacheRules（缓存规则） - followOrigin（缓存遵循源站） - privateBucketRetrieval（私有桶回源） - follow302Status（回源跟随） - sources（源站配置） - compress（智能压缩） - referer（防盗链） - ipBlackAndWhiteList（IP黑白名单）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetDomain' => 'string',
            'sourceDomain' => 'string',
            'configList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetDomain  目标域名列表,多个域名以逗号（半角）分隔,域名数最大10个。
    * sourceDomain  原域名
    * configList  需要复制的域名配置项,多个配置项以逗号（半角）分隔，支持复制的配置项： - originRequestHeader（回源请求头） - httpResponseHeader（HTTP header配置） - cacheUrlParamsConfig（URL参数） - urlAuth（URL鉴权配置） - userAgentBlackAndWhiteList（User-Agent黑白名单） - ipv6Accelerate（IPv6开关） - rangeStatus（Range回源） - cacheRules（缓存规则） - followOrigin（缓存遵循源站） - privateBucketRetrieval（私有桶回源） - follow302Status（回源跟随） - sources（源站配置） - compress（智能压缩） - referer（防盗链） - ipBlackAndWhiteList（IP黑白名单）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetDomain' => null,
        'sourceDomain' => null,
        'configList' => null
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
    * targetDomain  目标域名列表,多个域名以逗号（半角）分隔,域名数最大10个。
    * sourceDomain  原域名
    * configList  需要复制的域名配置项,多个配置项以逗号（半角）分隔，支持复制的配置项： - originRequestHeader（回源请求头） - httpResponseHeader（HTTP header配置） - cacheUrlParamsConfig（URL参数） - urlAuth（URL鉴权配置） - userAgentBlackAndWhiteList（User-Agent黑白名单） - ipv6Accelerate（IPv6开关） - rangeStatus（Range回源） - cacheRules（缓存规则） - followOrigin（缓存遵循源站） - privateBucketRetrieval（私有桶回源） - follow302Status（回源跟随） - sources（源站配置） - compress（智能压缩） - referer（防盗链） - ipBlackAndWhiteList（IP黑白名单）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetDomain' => 'target_domain',
            'sourceDomain' => 'source_domain',
            'configList' => 'config_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetDomain  目标域名列表,多个域名以逗号（半角）分隔,域名数最大10个。
    * sourceDomain  原域名
    * configList  需要复制的域名配置项,多个配置项以逗号（半角）分隔，支持复制的配置项： - originRequestHeader（回源请求头） - httpResponseHeader（HTTP header配置） - cacheUrlParamsConfig（URL参数） - urlAuth（URL鉴权配置） - userAgentBlackAndWhiteList（User-Agent黑白名单） - ipv6Accelerate（IPv6开关） - rangeStatus（Range回源） - cacheRules（缓存规则） - followOrigin（缓存遵循源站） - privateBucketRetrieval（私有桶回源） - follow302Status（回源跟随） - sources（源站配置） - compress（智能压缩） - referer（防盗链） - ipBlackAndWhiteList（IP黑白名单）
    *
    * @var string[]
    */
    protected static $setters = [
            'targetDomain' => 'setTargetDomain',
            'sourceDomain' => 'setSourceDomain',
            'configList' => 'setConfigList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetDomain  目标域名列表,多个域名以逗号（半角）分隔,域名数最大10个。
    * sourceDomain  原域名
    * configList  需要复制的域名配置项,多个配置项以逗号（半角）分隔，支持复制的配置项： - originRequestHeader（回源请求头） - httpResponseHeader（HTTP header配置） - cacheUrlParamsConfig（URL参数） - urlAuth（URL鉴权配置） - userAgentBlackAndWhiteList（User-Agent黑白名单） - ipv6Accelerate（IPv6开关） - rangeStatus（Range回源） - cacheRules（缓存规则） - followOrigin（缓存遵循源站） - privateBucketRetrieval（私有桶回源） - follow302Status（回源跟随） - sources（源站配置） - compress（智能压缩） - referer（防盗链） - ipBlackAndWhiteList（IP黑白名单）
    *
    * @var string[]
    */
    protected static $getters = [
            'targetDomain' => 'getTargetDomain',
            'sourceDomain' => 'getSourceDomain',
            'configList' => 'getConfigList'
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
        $this->container['targetDomain'] = isset($data['targetDomain']) ? $data['targetDomain'] : null;
        $this->container['sourceDomain'] = isset($data['sourceDomain']) ? $data['sourceDomain'] : null;
        $this->container['configList'] = isset($data['configList']) ? $data['configList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetDomain'] === null) {
            $invalidProperties[] = "'targetDomain' can't be null";
        }
            if ((mb_strlen($this->container['targetDomain']) > 750)) {
                $invalidProperties[] = "invalid value for 'targetDomain', the character length must be smaller than or equal to 750.";
            }
            if ((mb_strlen($this->container['targetDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sourceDomain'] === null) {
            $invalidProperties[] = "'sourceDomain' can't be null";
        }
            if ((mb_strlen($this->container['sourceDomain']) > 75)) {
                $invalidProperties[] = "invalid value for 'sourceDomain', the character length must be smaller than or equal to 75.";
            }
            if ((mb_strlen($this->container['sourceDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['configList'] === null) {
            $invalidProperties[] = "'configList' can't be null";
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
    * Gets targetDomain
    *  目标域名列表,多个域名以逗号（半角）分隔,域名数最大10个。
    *
    * @return string
    */
    public function getTargetDomain()
    {
        return $this->container['targetDomain'];
    }

    /**
    * Sets targetDomain
    *
    * @param string $targetDomain 目标域名列表,多个域名以逗号（半角）分隔,域名数最大10个。
    *
    * @return $this
    */
    public function setTargetDomain($targetDomain)
    {
        $this->container['targetDomain'] = $targetDomain;
        return $this;
    }

    /**
    * Gets sourceDomain
    *  原域名
    *
    * @return string
    */
    public function getSourceDomain()
    {
        return $this->container['sourceDomain'];
    }

    /**
    * Sets sourceDomain
    *
    * @param string $sourceDomain 原域名
    *
    * @return $this
    */
    public function setSourceDomain($sourceDomain)
    {
        $this->container['sourceDomain'] = $sourceDomain;
        return $this;
    }

    /**
    * Gets configList
    *  需要复制的域名配置项,多个配置项以逗号（半角）分隔，支持复制的配置项： - originRequestHeader（回源请求头） - httpResponseHeader（HTTP header配置） - cacheUrlParamsConfig（URL参数） - urlAuth（URL鉴权配置） - userAgentBlackAndWhiteList（User-Agent黑白名单） - ipv6Accelerate（IPv6开关） - rangeStatus（Range回源） - cacheRules（缓存规则） - followOrigin（缓存遵循源站） - privateBucketRetrieval（私有桶回源） - follow302Status（回源跟随） - sources（源站配置） - compress（智能压缩） - referer（防盗链） - ipBlackAndWhiteList（IP黑白名单）
    *
    * @return string[]
    */
    public function getConfigList()
    {
        return $this->container['configList'];
    }

    /**
    * Sets configList
    *
    * @param string[] $configList 需要复制的域名配置项,多个配置项以逗号（半角）分隔，支持复制的配置项： - originRequestHeader（回源请求头） - httpResponseHeader（HTTP header配置） - cacheUrlParamsConfig（URL参数） - urlAuth（URL鉴权配置） - userAgentBlackAndWhiteList（User-Agent黑白名单） - ipv6Accelerate（IPv6开关） - rangeStatus（Range回源） - cacheRules（缓存规则） - followOrigin（缓存遵循源站） - privateBucketRetrieval（私有桶回源） - follow302Status（回源跟随） - sources（源站配置） - compress（智能压缩） - referer（防盗链） - ipBlackAndWhiteList（IP黑白名单）
    *
    * @return $this
    */
    public function setConfigList($configList)
    {
        $this->container['configList'] = $configList;
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

