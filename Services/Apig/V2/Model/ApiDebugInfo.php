<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiDebugInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiDebugInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * body  请求消息体，最长2097152字节
    * header  头域参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写 - mode为MARKET或CONSUMER时，不支持取值为\"X-Auth-Token\"和\"Authorization\"，不区分大小写 > 头域名称在使用前会被规范化，如：\"x-MY-hEaDer\"会被规范化为\"X-My-Header\"
    * method  API的请求方法
    * mode  调试模式 - DEVELOPER 调试尚未发布的API定义 - MARKET [调试云商店已购买的API](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER 调试指定运行环境下的API定义 > DEVELOPER模式，接口调用者必须是API拥有者。    [MARKET模式，接口调用者必须是API购买者或拥有者。](tag:hws)    CONSUMER模式，接口调用者必须有API在指定环境上的授权信息或是API拥有者。
    * path  API的请求路径，需以\"/\"开头，最大长度1024 > 须符合路径规范，百分号编码格式可被正确解码
    * query  查询参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、下划线、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写
    * scheme  API的请求协议 - HTTP - HTTPS
    * appKey  调试请求使用的APP的key
    * appSecret  调试请求使用的APP的密钥
    * domain  API的访问域名，如果使用自定义入方向端口的特性时，需要带上端口信息，用冒号分隔，例如test.com:8080。 API的访问域名未提供时根据mode的取值使用如下默认值： - DEVELOPER API分组的子域名 - MARKET [云商店为API分组分配的域名](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER API分组的子域名
    * stage  调试请求指定的运行环境，仅在mode为CONSUMER时有效，未提供时有如下默认值: - CONSUMER RELEASE
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'body' => 'string',
            'header' => 'map[string,string[]]',
            'method' => 'string',
            'mode' => 'string',
            'path' => 'string',
            'query' => 'map[string,string[]]',
            'scheme' => 'string',
            'appKey' => 'string',
            'appSecret' => 'string',
            'domain' => 'string',
            'stage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * body  请求消息体，最长2097152字节
    * header  头域参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写 - mode为MARKET或CONSUMER时，不支持取值为\"X-Auth-Token\"和\"Authorization\"，不区分大小写 > 头域名称在使用前会被规范化，如：\"x-MY-hEaDer\"会被规范化为\"X-My-Header\"
    * method  API的请求方法
    * mode  调试模式 - DEVELOPER 调试尚未发布的API定义 - MARKET [调试云商店已购买的API](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER 调试指定运行环境下的API定义 > DEVELOPER模式，接口调用者必须是API拥有者。    [MARKET模式，接口调用者必须是API购买者或拥有者。](tag:hws)    CONSUMER模式，接口调用者必须有API在指定环境上的授权信息或是API拥有者。
    * path  API的请求路径，需以\"/\"开头，最大长度1024 > 须符合路径规范，百分号编码格式可被正确解码
    * query  查询参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、下划线、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写
    * scheme  API的请求协议 - HTTP - HTTPS
    * appKey  调试请求使用的APP的key
    * appSecret  调试请求使用的APP的密钥
    * domain  API的访问域名，如果使用自定义入方向端口的特性时，需要带上端口信息，用冒号分隔，例如test.com:8080。 API的访问域名未提供时根据mode的取值使用如下默认值： - DEVELOPER API分组的子域名 - MARKET [云商店为API分组分配的域名](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER API分组的子域名
    * stage  调试请求指定的运行环境，仅在mode为CONSUMER时有效，未提供时有如下默认值: - CONSUMER RELEASE
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'body' => null,
        'header' => null,
        'method' => null,
        'mode' => null,
        'path' => null,
        'query' => null,
        'scheme' => null,
        'appKey' => null,
        'appSecret' => null,
        'domain' => null,
        'stage' => null
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
    * body  请求消息体，最长2097152字节
    * header  头域参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写 - mode为MARKET或CONSUMER时，不支持取值为\"X-Auth-Token\"和\"Authorization\"，不区分大小写 > 头域名称在使用前会被规范化，如：\"x-MY-hEaDer\"会被规范化为\"X-My-Header\"
    * method  API的请求方法
    * mode  调试模式 - DEVELOPER 调试尚未发布的API定义 - MARKET [调试云商店已购买的API](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER 调试指定运行环境下的API定义 > DEVELOPER模式，接口调用者必须是API拥有者。    [MARKET模式，接口调用者必须是API购买者或拥有者。](tag:hws)    CONSUMER模式，接口调用者必须有API在指定环境上的授权信息或是API拥有者。
    * path  API的请求路径，需以\"/\"开头，最大长度1024 > 须符合路径规范，百分号编码格式可被正确解码
    * query  查询参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、下划线、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写
    * scheme  API的请求协议 - HTTP - HTTPS
    * appKey  调试请求使用的APP的key
    * appSecret  调试请求使用的APP的密钥
    * domain  API的访问域名，如果使用自定义入方向端口的特性时，需要带上端口信息，用冒号分隔，例如test.com:8080。 API的访问域名未提供时根据mode的取值使用如下默认值： - DEVELOPER API分组的子域名 - MARKET [云商店为API分组分配的域名](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER API分组的子域名
    * stage  调试请求指定的运行环境，仅在mode为CONSUMER时有效，未提供时有如下默认值: - CONSUMER RELEASE
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'body' => 'body',
            'header' => 'header',
            'method' => 'method',
            'mode' => 'mode',
            'path' => 'path',
            'query' => 'query',
            'scheme' => 'scheme',
            'appKey' => 'app_key',
            'appSecret' => 'app_secret',
            'domain' => 'domain',
            'stage' => 'stage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * body  请求消息体，最长2097152字节
    * header  头域参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写 - mode为MARKET或CONSUMER时，不支持取值为\"X-Auth-Token\"和\"Authorization\"，不区分大小写 > 头域名称在使用前会被规范化，如：\"x-MY-hEaDer\"会被规范化为\"X-My-Header\"
    * method  API的请求方法
    * mode  调试模式 - DEVELOPER 调试尚未发布的API定义 - MARKET [调试云商店已购买的API](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER 调试指定运行环境下的API定义 > DEVELOPER模式，接口调用者必须是API拥有者。    [MARKET模式，接口调用者必须是API购买者或拥有者。](tag:hws)    CONSUMER模式，接口调用者必须有API在指定环境上的授权信息或是API拥有者。
    * path  API的请求路径，需以\"/\"开头，最大长度1024 > 须符合路径规范，百分号编码格式可被正确解码
    * query  查询参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、下划线、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写
    * scheme  API的请求协议 - HTTP - HTTPS
    * appKey  调试请求使用的APP的key
    * appSecret  调试请求使用的APP的密钥
    * domain  API的访问域名，如果使用自定义入方向端口的特性时，需要带上端口信息，用冒号分隔，例如test.com:8080。 API的访问域名未提供时根据mode的取值使用如下默认值： - DEVELOPER API分组的子域名 - MARKET [云商店为API分组分配的域名](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER API分组的子域名
    * stage  调试请求指定的运行环境，仅在mode为CONSUMER时有效，未提供时有如下默认值: - CONSUMER RELEASE
    *
    * @var string[]
    */
    protected static $setters = [
            'body' => 'setBody',
            'header' => 'setHeader',
            'method' => 'setMethod',
            'mode' => 'setMode',
            'path' => 'setPath',
            'query' => 'setQuery',
            'scheme' => 'setScheme',
            'appKey' => 'setAppKey',
            'appSecret' => 'setAppSecret',
            'domain' => 'setDomain',
            'stage' => 'setStage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * body  请求消息体，最长2097152字节
    * header  头域参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写 - mode为MARKET或CONSUMER时，不支持取值为\"X-Auth-Token\"和\"Authorization\"，不区分大小写 > 头域名称在使用前会被规范化，如：\"x-MY-hEaDer\"会被规范化为\"X-My-Header\"
    * method  API的请求方法
    * mode  调试模式 - DEVELOPER 调试尚未发布的API定义 - MARKET [调试云商店已购买的API](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER 调试指定运行环境下的API定义 > DEVELOPER模式，接口调用者必须是API拥有者。    [MARKET模式，接口调用者必须是API购买者或拥有者。](tag:hws)    CONSUMER模式，接口调用者必须有API在指定环境上的授权信息或是API拥有者。
    * path  API的请求路径，需以\"/\"开头，最大长度1024 > 须符合路径规范，百分号编码格式可被正确解码
    * query  查询参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、下划线、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写
    * scheme  API的请求协议 - HTTP - HTTPS
    * appKey  调试请求使用的APP的key
    * appSecret  调试请求使用的APP的密钥
    * domain  API的访问域名，如果使用自定义入方向端口的特性时，需要带上端口信息，用冒号分隔，例如test.com:8080。 API的访问域名未提供时根据mode的取值使用如下默认值： - DEVELOPER API分组的子域名 - MARKET [云商店为API分组分配的域名](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER API分组的子域名
    * stage  调试请求指定的运行环境，仅在mode为CONSUMER时有效，未提供时有如下默认值: - CONSUMER RELEASE
    *
    * @var string[]
    */
    protected static $getters = [
            'body' => 'getBody',
            'header' => 'getHeader',
            'method' => 'getMethod',
            'mode' => 'getMode',
            'path' => 'getPath',
            'query' => 'getQuery',
            'scheme' => 'getScheme',
            'appKey' => 'getAppKey',
            'appSecret' => 'getAppSecret',
            'domain' => 'getDomain',
            'stage' => 'getStage'
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
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';
    const METHOD_HEAD = 'HEAD';
    const METHOD_PATCH = 'PATCH';
    const METHOD_OPTIONS = 'OPTIONS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_GET,
            self::METHOD_POST,
            self::METHOD_PUT,
            self::METHOD_DELETE,
            self::METHOD_HEAD,
            self::METHOD_PATCH,
            self::METHOD_OPTIONS,
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['appSecret'] = isset($data['appSecret']) ? $data['appSecret'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
            $allowedValues = $this->getMethodAllowableValues();
                if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['scheme'] === null) {
            $invalidProperties[] = "'scheme' can't be null";
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
    * Gets body
    *  请求消息体，最长2097152字节
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body 请求消息体，最长2097152字节
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets header
    *  头域参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写 - mode为MARKET或CONSUMER时，不支持取值为\"X-Auth-Token\"和\"Authorization\"，不区分大小写 > 头域名称在使用前会被规范化，如：\"x-MY-hEaDer\"会被规范化为\"X-My-Header\"
    *
    * @return map[string,string[]]|null
    */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
    * Sets header
    *
    * @param map[string,string[]]|null $header 头域参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写 - mode为MARKET或CONSUMER时，不支持取值为\"X-Auth-Token\"和\"Authorization\"，不区分大小写 > 头域名称在使用前会被规范化，如：\"x-MY-hEaDer\"会被规范化为\"X-My-Header\"
    *
    * @return $this
    */
    public function setHeader($header)
    {
        $this->container['header'] = $header;
        return $this;
    }

    /**
    * Gets method
    *  API的请求方法
    *
    * @return string
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string $method API的请求方法
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets mode
    *  调试模式 - DEVELOPER 调试尚未发布的API定义 - MARKET [调试云商店已购买的API](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER 调试指定运行环境下的API定义 > DEVELOPER模式，接口调用者必须是API拥有者。    [MARKET模式，接口调用者必须是API购买者或拥有者。](tag:hws)    CONSUMER模式，接口调用者必须有API在指定环境上的授权信息或是API拥有者。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 调试模式 - DEVELOPER 调试尚未发布的API定义 - MARKET [调试云商店已购买的API](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER 调试指定运行环境下的API定义 > DEVELOPER模式，接口调用者必须是API拥有者。    [MARKET模式，接口调用者必须是API购买者或拥有者。](tag:hws)    CONSUMER模式，接口调用者必须有API在指定环境上的授权信息或是API拥有者。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets path
    *  API的请求路径，需以\"/\"开头，最大长度1024 > 须符合路径规范，百分号编码格式可被正确解码
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path API的请求路径，需以\"/\"开头，最大长度1024 > 须符合路径规范，百分号编码格式可被正确解码
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets query
    *  查询参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、下划线、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写
    *
    * @return map[string,string[]]|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param map[string,string[]]|null $query 查询参数，每个参数值为字符串数组，每个参数名称有如下约束： - 英文字母、数字、点、下划线、中连线组成 - 必须以英文字母开头，最长32字节 - 不支持以\"X-Apig-\"或\"X-Sdk-\"开头，不区分大小写 - 不支持取值为\"X-Stage\"，不区分大小写
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets scheme
    *  API的请求协议 - HTTP - HTTPS
    *
    * @return string
    */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
    * Sets scheme
    *
    * @param string $scheme API的请求协议 - HTTP - HTTPS
    *
    * @return $this
    */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;
        return $this;
    }

    /**
    * Gets appKey
    *  调试请求使用的APP的key
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey 调试请求使用的APP的key
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets appSecret
    *  调试请求使用的APP的密钥
    *
    * @return string|null
    */
    public function getAppSecret()
    {
        return $this->container['appSecret'];
    }

    /**
    * Sets appSecret
    *
    * @param string|null $appSecret 调试请求使用的APP的密钥
    *
    * @return $this
    */
    public function setAppSecret($appSecret)
    {
        $this->container['appSecret'] = $appSecret;
        return $this;
    }

    /**
    * Gets domain
    *  API的访问域名，如果使用自定义入方向端口的特性时，需要带上端口信息，用冒号分隔，例如test.com:8080。 API的访问域名未提供时根据mode的取值使用如下默认值： - DEVELOPER API分组的子域名 - MARKET [云商店为API分组分配的域名](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER API分组的子域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain API的访问域名，如果使用自定义入方向端口的特性时，需要带上端口信息，用冒号分隔，例如test.com:8080。 API的访问域名未提供时根据mode的取值使用如下默认值： - DEVELOPER API分组的子域名 - MARKET [云商店为API分组分配的域名](tag:hws)[暂未使用](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk) - CONSUMER API分组的子域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets stage
    *  调试请求指定的运行环境，仅在mode为CONSUMER时有效，未提供时有如下默认值: - CONSUMER RELEASE
    *
    * @return string|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string|null $stage 调试请求指定的运行环境，仅在mode为CONSUMER时有效，未提供时有如下默认值: - CONSUMER RELEASE
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
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

