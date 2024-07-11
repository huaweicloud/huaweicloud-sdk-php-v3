<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyPullSourcesConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyPullSourcesConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playDomain  直播播放域名
    * sourceType  回源方式。  包含如下取值： - domain: 回源客户源站，源站地址是域名格式。回源域名，可配置多个，如果回源失败，将按照配置顺序进行轮循。 - ipaddr: 回源客户源站，源站地址是IP格式。回源IP，可配置多个，如果回源失败，将按照配置顺序进行轮循。同时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl字段填该域名，否则按当前IP作为HOST。 - huawei: 回源华为源站，域名创建后的默认值。
    * sources  回源域名列表，最多可配置10个。 - 当回源方式是“domain”时，此参数必选，域名配置多个时，如果回源失败，将按照配置顺序进行轮循。 - 当回源方式是“ipaddr”时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl 字段填该域名，否则按当前IP作为HOST。
    * sourcesIp  回源IP地址列表，最多可配置10个。当回源方式是“ipaddr”时，此参数必选，IP配置多个时，如果回源失败，将按照配置顺序进行轮循。
    * sourcePort  回源端口。
    * scheme  回源协议，回源方式非“huawei”时必选。  包含如下取值： - http - rtmp
    * additionalArgs  回源客户源站时在URL携带的参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playDomain' => 'string',
            'sourceType' => 'string',
            'sources' => 'string[]',
            'sourcesIp' => 'string[]',
            'sourcePort' => 'int',
            'scheme' => 'string',
            'additionalArgs' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playDomain  直播播放域名
    * sourceType  回源方式。  包含如下取值： - domain: 回源客户源站，源站地址是域名格式。回源域名，可配置多个，如果回源失败，将按照配置顺序进行轮循。 - ipaddr: 回源客户源站，源站地址是IP格式。回源IP，可配置多个，如果回源失败，将按照配置顺序进行轮循。同时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl字段填该域名，否则按当前IP作为HOST。 - huawei: 回源华为源站，域名创建后的默认值。
    * sources  回源域名列表，最多可配置10个。 - 当回源方式是“domain”时，此参数必选，域名配置多个时，如果回源失败，将按照配置顺序进行轮循。 - 当回源方式是“ipaddr”时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl 字段填该域名，否则按当前IP作为HOST。
    * sourcesIp  回源IP地址列表，最多可配置10个。当回源方式是“ipaddr”时，此参数必选，IP配置多个时，如果回源失败，将按照配置顺序进行轮循。
    * sourcePort  回源端口。
    * scheme  回源协议，回源方式非“huawei”时必选。  包含如下取值： - http - rtmp
    * additionalArgs  回源客户源站时在URL携带的参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playDomain' => null,
        'sourceType' => null,
        'sources' => null,
        'sourcesIp' => null,
        'sourcePort' => null,
        'scheme' => null,
        'additionalArgs' => null
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
    * playDomain  直播播放域名
    * sourceType  回源方式。  包含如下取值： - domain: 回源客户源站，源站地址是域名格式。回源域名，可配置多个，如果回源失败，将按照配置顺序进行轮循。 - ipaddr: 回源客户源站，源站地址是IP格式。回源IP，可配置多个，如果回源失败，将按照配置顺序进行轮循。同时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl字段填该域名，否则按当前IP作为HOST。 - huawei: 回源华为源站，域名创建后的默认值。
    * sources  回源域名列表，最多可配置10个。 - 当回源方式是“domain”时，此参数必选，域名配置多个时，如果回源失败，将按照配置顺序进行轮循。 - 当回源方式是“ipaddr”时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl 字段填该域名，否则按当前IP作为HOST。
    * sourcesIp  回源IP地址列表，最多可配置10个。当回源方式是“ipaddr”时，此参数必选，IP配置多个时，如果回源失败，将按照配置顺序进行轮循。
    * sourcePort  回源端口。
    * scheme  回源协议，回源方式非“huawei”时必选。  包含如下取值： - http - rtmp
    * additionalArgs  回源客户源站时在URL携带的参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playDomain' => 'play_domain',
            'sourceType' => 'source_type',
            'sources' => 'sources',
            'sourcesIp' => 'sources_ip',
            'sourcePort' => 'source_port',
            'scheme' => 'scheme',
            'additionalArgs' => 'additional_args'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playDomain  直播播放域名
    * sourceType  回源方式。  包含如下取值： - domain: 回源客户源站，源站地址是域名格式。回源域名，可配置多个，如果回源失败，将按照配置顺序进行轮循。 - ipaddr: 回源客户源站，源站地址是IP格式。回源IP，可配置多个，如果回源失败，将按照配置顺序进行轮循。同时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl字段填该域名，否则按当前IP作为HOST。 - huawei: 回源华为源站，域名创建后的默认值。
    * sources  回源域名列表，最多可配置10个。 - 当回源方式是“domain”时，此参数必选，域名配置多个时，如果回源失败，将按照配置顺序进行轮循。 - 当回源方式是“ipaddr”时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl 字段填该域名，否则按当前IP作为HOST。
    * sourcesIp  回源IP地址列表，最多可配置10个。当回源方式是“ipaddr”时，此参数必选，IP配置多个时，如果回源失败，将按照配置顺序进行轮循。
    * sourcePort  回源端口。
    * scheme  回源协议，回源方式非“huawei”时必选。  包含如下取值： - http - rtmp
    * additionalArgs  回源客户源站时在URL携带的参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'playDomain' => 'setPlayDomain',
            'sourceType' => 'setSourceType',
            'sources' => 'setSources',
            'sourcesIp' => 'setSourcesIp',
            'sourcePort' => 'setSourcePort',
            'scheme' => 'setScheme',
            'additionalArgs' => 'setAdditionalArgs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playDomain  直播播放域名
    * sourceType  回源方式。  包含如下取值： - domain: 回源客户源站，源站地址是域名格式。回源域名，可配置多个，如果回源失败，将按照配置顺序进行轮循。 - ipaddr: 回源客户源站，源站地址是IP格式。回源IP，可配置多个，如果回源失败，将按照配置顺序进行轮循。同时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl字段填该域名，否则按当前IP作为HOST。 - huawei: 回源华为源站，域名创建后的默认值。
    * sources  回源域名列表，最多可配置10个。 - 当回源方式是“domain”时，此参数必选，域名配置多个时，如果回源失败，将按照配置顺序进行轮循。 - 当回源方式是“ipaddr”时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl 字段填该域名，否则按当前IP作为HOST。
    * sourcesIp  回源IP地址列表，最多可配置10个。当回源方式是“ipaddr”时，此参数必选，IP配置多个时，如果回源失败，将按照配置顺序进行轮循。
    * sourcePort  回源端口。
    * scheme  回源协议，回源方式非“huawei”时必选。  包含如下取值： - http - rtmp
    * additionalArgs  回源客户源站时在URL携带的参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'playDomain' => 'getPlayDomain',
            'sourceType' => 'getSourceType',
            'sources' => 'getSources',
            'sourcesIp' => 'getSourcesIp',
            'sourcePort' => 'getSourcePort',
            'scheme' => 'getScheme',
            'additionalArgs' => 'getAdditionalArgs'
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
    const SOURCE_TYPE_DOMAIN = 'domain';
    const SOURCE_TYPE_IPADDR = 'ipaddr';
    const SOURCE_TYPE_HUAWEI = 'huawei';
    const SCHEME_HTTP = 'http';
    const SCHEME_RTMP = 'rtmp';
    

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
    public function getSchemeAllowableValues()
    {
        return [
            self::SCHEME_HTTP,
            self::SCHEME_RTMP,
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
        $this->container['playDomain'] = isset($data['playDomain']) ? $data['playDomain'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['sourcesIp'] = isset($data['sourcesIp']) ? $data['sourcesIp'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['additionalArgs'] = isset($data['additionalArgs']) ? $data['additionalArgs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['playDomain'] === null) {
            $invalidProperties[] = "'playDomain' can't be null";
        }
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sourcePort']) && ($this->container['sourcePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'sourcePort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['sourcePort']) && ($this->container['sourcePort'] < 1)) {
                $invalidProperties[] = "invalid value for 'sourcePort', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSchemeAllowableValues();
                if (!is_null($this->container['scheme']) && !in_array($this->container['scheme'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheme', must be one of '%s'",
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
    * Gets playDomain
    *  直播播放域名
    *
    * @return string
    */
    public function getPlayDomain()
    {
        return $this->container['playDomain'];
    }

    /**
    * Sets playDomain
    *
    * @param string $playDomain 直播播放域名
    *
    * @return $this
    */
    public function setPlayDomain($playDomain)
    {
        $this->container['playDomain'] = $playDomain;
        return $this;
    }

    /**
    * Gets sourceType
    *  回源方式。  包含如下取值： - domain: 回源客户源站，源站地址是域名格式。回源域名，可配置多个，如果回源失败，将按照配置顺序进行轮循。 - ipaddr: 回源客户源站，源站地址是IP格式。回源IP，可配置多个，如果回源失败，将按照配置顺序进行轮循。同时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl字段填该域名，否则按当前IP作为HOST。 - huawei: 回源华为源站，域名创建后的默认值。
    *
    * @return string
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string $sourceType 回源方式。  包含如下取值： - domain: 回源客户源站，源站地址是域名格式。回源域名，可配置多个，如果回源失败，将按照配置顺序进行轮循。 - ipaddr: 回源客户源站，源站地址是IP格式。回源IP，可配置多个，如果回源失败，将按照配置顺序进行轮循。同时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl字段填该域名，否则按当前IP作为HOST。 - huawei: 回源华为源站，域名创建后的默认值。
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
    *  回源域名列表，最多可配置10个。 - 当回源方式是“domain”时，此参数必选，域名配置多个时，如果回源失败，将按照配置顺序进行轮循。 - 当回源方式是“ipaddr”时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl 字段填该域名，否则按当前IP作为HOST。
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
    * @param string[]|null $sources 回源域名列表，最多可配置10个。 - 当回源方式是“domain”时，此参数必选，域名配置多个时，如果回源失败，将按照配置顺序进行轮循。 - 当回源方式是“ipaddr”时，最多可以配置一个回源域名，如果配置，回源时httpflv HOST头填该域名，RTMP tcurl 字段填该域名，否则按当前IP作为HOST。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets sourcesIp
    *  回源IP地址列表，最多可配置10个。当回源方式是“ipaddr”时，此参数必选，IP配置多个时，如果回源失败，将按照配置顺序进行轮循。
    *
    * @return string[]|null
    */
    public function getSourcesIp()
    {
        return $this->container['sourcesIp'];
    }

    /**
    * Sets sourcesIp
    *
    * @param string[]|null $sourcesIp 回源IP地址列表，最多可配置10个。当回源方式是“ipaddr”时，此参数必选，IP配置多个时，如果回源失败，将按照配置顺序进行轮循。
    *
    * @return $this
    */
    public function setSourcesIp($sourcesIp)
    {
        $this->container['sourcesIp'] = $sourcesIp;
        return $this;
    }

    /**
    * Gets sourcePort
    *  回源端口。
    *
    * @return int|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param int|null $sourcePort 回源端口。
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets scheme
    *  回源协议，回源方式非“huawei”时必选。  包含如下取值： - http - rtmp
    *
    * @return string|null
    */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
    * Sets scheme
    *
    * @param string|null $scheme 回源协议，回源方式非“huawei”时必选。  包含如下取值： - http - rtmp
    *
    * @return $this
    */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;
        return $this;
    }

    /**
    * Gets additionalArgs
    *  回源客户源站时在URL携带的参数。
    *
    * @return map[string,string]|null
    */
    public function getAdditionalArgs()
    {
        return $this->container['additionalArgs'];
    }

    /**
    * Sets additionalArgs
    *
    * @param map[string,string]|null $additionalArgs 回源客户源站时在URL携带的参数。
    *
    * @return $this
    */
    public function setAdditionalArgs($additionalArgs)
    {
        $this->container['additionalArgs'] = $additionalArgs;
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

