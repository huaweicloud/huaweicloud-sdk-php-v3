<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Actions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Actions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * originRequestHeader  **参数解释：** CDN节点回源时，改写用户回源请求URL的HTTP头部信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** 配置节点响应给客户端的头部信息，配置响应消息后，用户请求加速域名下的资源时，CDN返回给用户的消息中将包含该域名配置的响应头信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * accessControl  accessControl
    * requestLimitRules  requestLimitRules
    * originRequestUrlRewrite  originRequestUrlRewrite
    * cacheRule  cacheRule
    * requestUrlRewrite  requestUrlRewrite
    * browserCacheRule  browserCacheRule
    * errorCodeCache  errorCodeCache
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flexibleOrigin' => '\HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOriginsEngine[]',
            'originRequestHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]',
            'httpResponseHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]',
            'accessControl' => '\HuaweiCloud\SDK\Cdn\V2\Model\AccessControl',
            'requestLimitRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRulesEngine',
            'originRequestUrlRewrite' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewriteEngine',
            'cacheRule' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheRulesEngine',
            'requestUrlRewrite' => '\HuaweiCloud\SDK\Cdn\V2\Model\RequestUrlRewriteEngine',
            'browserCacheRule' => '\HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRulesEngine',
            'errorCodeCache' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCacheEngine'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * originRequestHeader  **参数解释：** CDN节点回源时，改写用户回源请求URL的HTTP头部信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** 配置节点响应给客户端的头部信息，配置响应消息后，用户请求加速域名下的资源时，CDN返回给用户的消息中将包含该域名配置的响应头信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * accessControl  accessControl
    * requestLimitRules  requestLimitRules
    * originRequestUrlRewrite  originRequestUrlRewrite
    * cacheRule  cacheRule
    * requestUrlRewrite  requestUrlRewrite
    * browserCacheRule  browserCacheRule
    * errorCodeCache  errorCodeCache
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flexibleOrigin' => null,
        'originRequestHeader' => null,
        'httpResponseHeader' => null,
        'accessControl' => null,
        'requestLimitRules' => null,
        'originRequestUrlRewrite' => null,
        'cacheRule' => null,
        'requestUrlRewrite' => null,
        'browserCacheRule' => null,
        'errorCodeCache' => null
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
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * originRequestHeader  **参数解释：** CDN节点回源时，改写用户回源请求URL的HTTP头部信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** 配置节点响应给客户端的头部信息，配置响应消息后，用户请求加速域名下的资源时，CDN返回给用户的消息中将包含该域名配置的响应头信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * accessControl  accessControl
    * requestLimitRules  requestLimitRules
    * originRequestUrlRewrite  originRequestUrlRewrite
    * cacheRule  cacheRule
    * requestUrlRewrite  requestUrlRewrite
    * browserCacheRule  browserCacheRule
    * errorCodeCache  errorCodeCache
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flexibleOrigin' => 'flexible_origin',
            'originRequestHeader' => 'origin_request_header',
            'httpResponseHeader' => 'http_response_header',
            'accessControl' => 'access_control',
            'requestLimitRules' => 'request_limit_rules',
            'originRequestUrlRewrite' => 'origin_request_url_rewrite',
            'cacheRule' => 'cache_rule',
            'requestUrlRewrite' => 'request_url_rewrite',
            'browserCacheRule' => 'browser_cache_rule',
            'errorCodeCache' => 'error_code_cache'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * originRequestHeader  **参数解释：** CDN节点回源时，改写用户回源请求URL的HTTP头部信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** 配置节点响应给客户端的头部信息，配置响应消息后，用户请求加速域名下的资源时，CDN返回给用户的消息中将包含该域名配置的响应头信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * accessControl  accessControl
    * requestLimitRules  requestLimitRules
    * originRequestUrlRewrite  originRequestUrlRewrite
    * cacheRule  cacheRule
    * requestUrlRewrite  requestUrlRewrite
    * browserCacheRule  browserCacheRule
    * errorCodeCache  errorCodeCache
    *
    * @var string[]
    */
    protected static $setters = [
            'flexibleOrigin' => 'setFlexibleOrigin',
            'originRequestHeader' => 'setOriginRequestHeader',
            'httpResponseHeader' => 'setHttpResponseHeader',
            'accessControl' => 'setAccessControl',
            'requestLimitRules' => 'setRequestLimitRules',
            'originRequestUrlRewrite' => 'setOriginRequestUrlRewrite',
            'cacheRule' => 'setCacheRule',
            'requestUrlRewrite' => 'setRequestUrlRewrite',
            'browserCacheRule' => 'setBrowserCacheRule',
            'errorCodeCache' => 'setErrorCodeCache'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flexibleOrigin  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    * originRequestHeader  **参数解释：** CDN节点回源时，改写用户回源请求URL的HTTP头部信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * httpResponseHeader  **参数解释：** 配置节点响应给客户端的头部信息，配置响应消息后，用户请求加速域名下的资源时，CDN返回给用户的消息中将包含该域名配置的响应头信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    * accessControl  accessControl
    * requestLimitRules  requestLimitRules
    * originRequestUrlRewrite  originRequestUrlRewrite
    * cacheRule  cacheRule
    * requestUrlRewrite  requestUrlRewrite
    * browserCacheRule  browserCacheRule
    * errorCodeCache  errorCodeCache
    *
    * @var string[]
    */
    protected static $getters = [
            'flexibleOrigin' => 'getFlexibleOrigin',
            'originRequestHeader' => 'getOriginRequestHeader',
            'httpResponseHeader' => 'getHttpResponseHeader',
            'accessControl' => 'getAccessControl',
            'requestLimitRules' => 'getRequestLimitRules',
            'originRequestUrlRewrite' => 'getOriginRequestUrlRewrite',
            'cacheRule' => 'getCacheRule',
            'requestUrlRewrite' => 'getRequestUrlRewrite',
            'browserCacheRule' => 'getBrowserCacheRule',
            'errorCodeCache' => 'getErrorCodeCache'
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
        $this->container['flexibleOrigin'] = isset($data['flexibleOrigin']) ? $data['flexibleOrigin'] : null;
        $this->container['originRequestHeader'] = isset($data['originRequestHeader']) ? $data['originRequestHeader'] : null;
        $this->container['httpResponseHeader'] = isset($data['httpResponseHeader']) ? $data['httpResponseHeader'] : null;
        $this->container['accessControl'] = isset($data['accessControl']) ? $data['accessControl'] : null;
        $this->container['requestLimitRules'] = isset($data['requestLimitRules']) ? $data['requestLimitRules'] : null;
        $this->container['originRequestUrlRewrite'] = isset($data['originRequestUrlRewrite']) ? $data['originRequestUrlRewrite'] : null;
        $this->container['cacheRule'] = isset($data['cacheRule']) ? $data['cacheRule'] : null;
        $this->container['requestUrlRewrite'] = isset($data['requestUrlRewrite']) ? $data['requestUrlRewrite'] : null;
        $this->container['browserCacheRule'] = isset($data['browserCacheRule']) ? $data['browserCacheRule'] : null;
        $this->container['errorCodeCache'] = isset($data['errorCodeCache']) ? $data['errorCodeCache'] : null;
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
    * Gets flexibleOrigin
    *  **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOriginsEngine[]|null
    */
    public function getFlexibleOrigin()
    {
        return $this->container['flexibleOrigin'];
    }

    /**
    * Sets flexibleOrigin
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOriginsEngine[]|null $flexibleOrigin **参数解释：** 高级回源，实现根据不同的资源类型或路径回源到不同源站 **约束限制：** 最多配置20条
    *
    * @return $this
    */
    public function setFlexibleOrigin($flexibleOrigin)
    {
        $this->container['flexibleOrigin'] = $flexibleOrigin;
        return $this;
    }

    /**
    * Gets originRequestHeader
    *  **参数解释：** CDN节点回源时，改写用户回源请求URL的HTTP头部信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null
    */
    public function getOriginRequestHeader()
    {
        return $this->container['originRequestHeader'];
    }

    /**
    * Sets originRequestHeader
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null $originRequestHeader **参数解释：** CDN节点回源时，改写用户回源请求URL的HTTP头部信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    *
    * @return $this
    */
    public function setOriginRequestHeader($originRequestHeader)
    {
        $this->container['originRequestHeader'] = $originRequestHeader;
        return $this;
    }

    /**
    * Gets httpResponseHeader
    *  **参数解释：** 配置节点响应给客户端的头部信息，配置响应消息后，用户请求加速域名下的资源时，CDN返回给用户的消息中将包含该域名配置的响应头信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null $httpResponseHeader **参数解释：** 配置节点响应给客户端的头部信息，配置响应消息后，用户请求加速域名下的资源时，CDN返回给用户的消息中将包含该域名配置的响应头信息 **约束限制：** - 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息 - 如果域名在后台配置了特殊请求头，需要将对应的请求头一并传入
    *
    * @return $this
    */
    public function setHttpResponseHeader($httpResponseHeader)
    {
        $this->container['httpResponseHeader'] = $httpResponseHeader;
        return $this;
    }

    /**
    * Gets accessControl
    *  accessControl
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\AccessControl|null
    */
    public function getAccessControl()
    {
        return $this->container['accessControl'];
    }

    /**
    * Sets accessControl
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\AccessControl|null $accessControl accessControl
    *
    * @return $this
    */
    public function setAccessControl($accessControl)
    {
        $this->container['accessControl'] = $accessControl;
        return $this;
    }

    /**
    * Gets requestLimitRules
    *  requestLimitRules
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRulesEngine|null
    */
    public function getRequestLimitRules()
    {
        return $this->container['requestLimitRules'];
    }

    /**
    * Sets requestLimitRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRulesEngine|null $requestLimitRules requestLimitRules
    *
    * @return $this
    */
    public function setRequestLimitRules($requestLimitRules)
    {
        $this->container['requestLimitRules'] = $requestLimitRules;
        return $this;
    }

    /**
    * Gets originRequestUrlRewrite
    *  originRequestUrlRewrite
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewriteEngine|null
    */
    public function getOriginRequestUrlRewrite()
    {
        return $this->container['originRequestUrlRewrite'];
    }

    /**
    * Sets originRequestUrlRewrite
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewriteEngine|null $originRequestUrlRewrite originRequestUrlRewrite
    *
    * @return $this
    */
    public function setOriginRequestUrlRewrite($originRequestUrlRewrite)
    {
        $this->container['originRequestUrlRewrite'] = $originRequestUrlRewrite;
        return $this;
    }

    /**
    * Gets cacheRule
    *  cacheRule
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CacheRulesEngine|null
    */
    public function getCacheRule()
    {
        return $this->container['cacheRule'];
    }

    /**
    * Sets cacheRule
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheRulesEngine|null $cacheRule cacheRule
    *
    * @return $this
    */
    public function setCacheRule($cacheRule)
    {
        $this->container['cacheRule'] = $cacheRule;
        return $this;
    }

    /**
    * Gets requestUrlRewrite
    *  requestUrlRewrite
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RequestUrlRewriteEngine|null
    */
    public function getRequestUrlRewrite()
    {
        return $this->container['requestUrlRewrite'];
    }

    /**
    * Sets requestUrlRewrite
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RequestUrlRewriteEngine|null $requestUrlRewrite requestUrlRewrite
    *
    * @return $this
    */
    public function setRequestUrlRewrite($requestUrlRewrite)
    {
        $this->container['requestUrlRewrite'] = $requestUrlRewrite;
        return $this;
    }

    /**
    * Gets browserCacheRule
    *  browserCacheRule
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRulesEngine|null
    */
    public function getBrowserCacheRule()
    {
        return $this->container['browserCacheRule'];
    }

    /**
    * Sets browserCacheRule
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRulesEngine|null $browserCacheRule browserCacheRule
    *
    * @return $this
    */
    public function setBrowserCacheRule($browserCacheRule)
    {
        $this->container['browserCacheRule'] = $browserCacheRule;
        return $this;
    }

    /**
    * Gets errorCodeCache
    *  errorCodeCache
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCacheEngine|null
    */
    public function getErrorCodeCache()
    {
        return $this->container['errorCodeCache'];
    }

    /**
    * Sets errorCodeCache
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCacheEngine|null $errorCodeCache errorCodeCache
    *
    * @return $this
    */
    public function setErrorCodeCache($errorCodeCache)
    {
        $this->container['errorCodeCache'] = $errorCodeCache;
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

