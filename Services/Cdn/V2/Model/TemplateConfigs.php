<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpResponseHeader  httpResponseHeader
    * cacheRules  cacheRules
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpResponseHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]',
            'cacheRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]',
            'originFollow302Status' => 'string',
            'compress' => '\HuaweiCloud\SDK\Cdn\V2\Model\Compress',
            'originRangeStatus' => 'string',
            'ipFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFilter',
            'referer' => '\HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig',
            'userAgentFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter',
            'flowLimitStrategy' => '\HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpResponseHeader  httpResponseHeader
    * cacheRules  cacheRules
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpResponseHeader' => null,
        'cacheRules' => null,
        'originFollow302Status' => null,
        'compress' => null,
        'originRangeStatus' => null,
        'ipFilter' => null,
        'referer' => null,
        'userAgentFilter' => null,
        'flowLimitStrategy' => null
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
    * httpResponseHeader  httpResponseHeader
    * cacheRules  cacheRules
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpResponseHeader' => 'http_response_header',
            'cacheRules' => 'cache_rules',
            'originFollow302Status' => 'origin_follow302_status',
            'compress' => 'compress',
            'originRangeStatus' => 'origin_range_status',
            'ipFilter' => 'ip_filter',
            'referer' => 'referer',
            'userAgentFilter' => 'user_agent_filter',
            'flowLimitStrategy' => 'flow_limit_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpResponseHeader  httpResponseHeader
    * cacheRules  cacheRules
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'httpResponseHeader' => 'setHttpResponseHeader',
            'cacheRules' => 'setCacheRules',
            'originFollow302Status' => 'setOriginFollow302Status',
            'compress' => 'setCompress',
            'originRangeStatus' => 'setOriginRangeStatus',
            'ipFilter' => 'setIpFilter',
            'referer' => 'setReferer',
            'userAgentFilter' => 'setUserAgentFilter',
            'flowLimitStrategy' => 'setFlowLimitStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpResponseHeader  httpResponseHeader
    * cacheRules  cacheRules
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'httpResponseHeader' => 'getHttpResponseHeader',
            'cacheRules' => 'getCacheRules',
            'originFollow302Status' => 'getOriginFollow302Status',
            'compress' => 'getCompress',
            'originRangeStatus' => 'getOriginRangeStatus',
            'ipFilter' => 'getIpFilter',
            'referer' => 'getReferer',
            'userAgentFilter' => 'getUserAgentFilter',
            'flowLimitStrategy' => 'getFlowLimitStrategy'
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
        $this->container['httpResponseHeader'] = isset($data['httpResponseHeader']) ? $data['httpResponseHeader'] : null;
        $this->container['cacheRules'] = isset($data['cacheRules']) ? $data['cacheRules'] : null;
        $this->container['originFollow302Status'] = isset($data['originFollow302Status']) ? $data['originFollow302Status'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['originRangeStatus'] = isset($data['originRangeStatus']) ? $data['originRangeStatus'] : null;
        $this->container['ipFilter'] = isset($data['ipFilter']) ? $data['ipFilter'] : null;
        $this->container['referer'] = isset($data['referer']) ? $data['referer'] : null;
        $this->container['userAgentFilter'] = isset($data['userAgentFilter']) ? $data['userAgentFilter'] : null;
        $this->container['flowLimitStrategy'] = isset($data['flowLimitStrategy']) ? $data['flowLimitStrategy'] : null;
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
    * Gets httpResponseHeader
    *  httpResponseHeader
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null
    */
    public function getHttpResponseHeader()
    {
        return $this->container['httpResponseHeader'];
    }

    /**
    * Sets httpResponseHeader
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null $httpResponseHeader httpResponseHeader
    *
    * @return $this
    */
    public function setHttpResponseHeader($httpResponseHeader)
    {
        $this->container['httpResponseHeader'] = $httpResponseHeader;
        return $this;
    }

    /**
    * Gets cacheRules
    *  cacheRules
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null
    */
    public function getCacheRules()
    {
        return $this->container['cacheRules'];
    }

    /**
    * Sets cacheRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null $cacheRules cacheRules
    *
    * @return $this
    */
    public function setCacheRules($cacheRules)
    {
        $this->container['cacheRules'] = $cacheRules;
        return $this;
    }

    /**
    * Gets originFollow302Status
    *  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getOriginFollow302Status()
    {
        return $this->container['originFollow302Status'];
    }

    /**
    * Sets originFollow302Status
    *
    * @param string|null $originFollow302Status **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginFollow302Status($originFollow302Status)
    {
        $this->container['originFollow302Status'] = $originFollow302Status;
        return $this;
    }

    /**
    * Gets compress
    *  compress
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Compress|null
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Compress|null $compress compress
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
        return $this;
    }

    /**
    * Gets originRangeStatus
    *  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getOriginRangeStatus()
    {
        return $this->container['originRangeStatus'];
    }

    /**
    * Sets originRangeStatus
    *
    * @param string|null $originRangeStatus **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginRangeStatus($originRangeStatus)
    {
        $this->container['originRangeStatus'] = $originRangeStatus;
        return $this;
    }

    /**
    * Gets ipFilter
    *  ipFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null
    */
    public function getIpFilter()
    {
        return $this->container['ipFilter'];
    }

    /**
    * Sets ipFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null $ipFilter ipFilter
    *
    * @return $this
    */
    public function setIpFilter($ipFilter)
    {
        $this->container['ipFilter'] = $ipFilter;
        return $this;
    }

    /**
    * Gets referer
    *  referer
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig|null
    */
    public function getReferer()
    {
        return $this->container['referer'];
    }

    /**
    * Sets referer
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig|null $referer referer
    *
    * @return $this
    */
    public function setReferer($referer)
    {
        $this->container['referer'] = $referer;
        return $this;
    }

    /**
    * Gets userAgentFilter
    *  userAgentFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter|null
    */
    public function getUserAgentFilter()
    {
        return $this->container['userAgentFilter'];
    }

    /**
    * Sets userAgentFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter|null $userAgentFilter userAgentFilter
    *
    * @return $this
    */
    public function setUserAgentFilter($userAgentFilter)
    {
        $this->container['userAgentFilter'] = $userAgentFilter;
        return $this;
    }

    /**
    * Gets flowLimitStrategy
    *  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null
    */
    public function getFlowLimitStrategy()
    {
        return $this->container['flowLimitStrategy'];
    }

    /**
    * Sets flowLimitStrategy
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null $flowLimitStrategy **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setFlowLimitStrategy($flowLimitStrategy)
    {
        $this->container['flowLimitStrategy'] = $flowLimitStrategy;
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

