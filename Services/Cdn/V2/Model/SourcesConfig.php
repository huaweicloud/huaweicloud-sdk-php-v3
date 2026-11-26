<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourcesConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourcesConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名 - third_bucket: 第三方桶，使用该源站类型需要提交工单申请  **默认取值：** 不涉及
    * originAddr  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 不涉及
    * obsWebHostingStatus  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * bucketAccessKey  **参数解释：** 第三方对象存储访问密钥ID，即AK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketSecretKey  **参数解释：** 第三方对象存储私密访问密钥，即SK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketRegion  **参数解释：** 第三方对象存储区域 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketName  **参数解释：** 第三方对象存储名称 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originType' => 'string',
            'originAddr' => 'string',
            'priority' => 'int',
            'weight' => 'int',
            'obsWebHostingStatus' => 'string',
            'httpPort' => 'int',
            'httpsPort' => 'int',
            'hostName' => 'string',
            'obsBucketType' => 'string',
            'bucketAccessKey' => 'string',
            'bucketSecretKey' => 'string',
            'bucketRegion' => 'string',
            'bucketName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名 - third_bucket: 第三方桶，使用该源站类型需要提交工单申请  **默认取值：** 不涉及
    * originAddr  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 不涉及
    * obsWebHostingStatus  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * bucketAccessKey  **参数解释：** 第三方对象存储访问密钥ID，即AK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketSecretKey  **参数解释：** 第三方对象存储私密访问密钥，即SK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketRegion  **参数解释：** 第三方对象存储区域 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketName  **参数解释：** 第三方对象存储名称 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originType' => null,
        'originAddr' => null,
        'priority' => null,
        'weight' => null,
        'obsWebHostingStatus' => null,
        'httpPort' => null,
        'httpsPort' => null,
        'hostName' => null,
        'obsBucketType' => null,
        'bucketAccessKey' => null,
        'bucketSecretKey' => null,
        'bucketRegion' => null,
        'bucketName' => null
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
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名 - third_bucket: 第三方桶，使用该源站类型需要提交工单申请  **默认取值：** 不涉及
    * originAddr  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 不涉及
    * obsWebHostingStatus  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * bucketAccessKey  **参数解释：** 第三方对象存储访问密钥ID，即AK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketSecretKey  **参数解释：** 第三方对象存储私密访问密钥，即SK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketRegion  **参数解释：** 第三方对象存储区域 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketName  **参数解释：** 第三方对象存储名称 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originType' => 'origin_type',
            'originAddr' => 'origin_addr',
            'priority' => 'priority',
            'weight' => 'weight',
            'obsWebHostingStatus' => 'obs_web_hosting_status',
            'httpPort' => 'http_port',
            'httpsPort' => 'https_port',
            'hostName' => 'host_name',
            'obsBucketType' => 'obs_bucket_type',
            'bucketAccessKey' => 'bucket_access_key',
            'bucketSecretKey' => 'bucket_secret_key',
            'bucketRegion' => 'bucket_region',
            'bucketName' => 'bucket_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名 - third_bucket: 第三方桶，使用该源站类型需要提交工单申请  **默认取值：** 不涉及
    * originAddr  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 不涉及
    * obsWebHostingStatus  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * bucketAccessKey  **参数解释：** 第三方对象存储访问密钥ID，即AK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketSecretKey  **参数解释：** 第三方对象存储私密访问密钥，即SK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketRegion  **参数解释：** 第三方对象存储区域 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketName  **参数解释：** 第三方对象存储名称 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'originType' => 'setOriginType',
            'originAddr' => 'setOriginAddr',
            'priority' => 'setPriority',
            'weight' => 'setWeight',
            'obsWebHostingStatus' => 'setObsWebHostingStatus',
            'httpPort' => 'setHttpPort',
            'httpsPort' => 'setHttpsPort',
            'hostName' => 'setHostName',
            'obsBucketType' => 'setObsBucketType',
            'bucketAccessKey' => 'setBucketAccessKey',
            'bucketSecretKey' => 'setBucketSecretKey',
            'bucketRegion' => 'setBucketRegion',
            'bucketName' => 'setBucketName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名 - third_bucket: 第三方桶，使用该源站类型需要提交工单申请  **默认取值：** 不涉及
    * originAddr  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 不涉及
    * obsWebHostingStatus  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * bucketAccessKey  **参数解释：** 第三方对象存储访问密钥ID，即AK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketSecretKey  **参数解释：** 第三方对象存储私密访问密钥，即SK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketRegion  **参数解释：** 第三方对象存储区域 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    * bucketName  **参数解释：** 第三方对象存储名称 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'originType' => 'getOriginType',
            'originAddr' => 'getOriginAddr',
            'priority' => 'getPriority',
            'weight' => 'getWeight',
            'obsWebHostingStatus' => 'getObsWebHostingStatus',
            'httpPort' => 'getHttpPort',
            'httpsPort' => 'getHttpsPort',
            'hostName' => 'getHostName',
            'obsBucketType' => 'getObsBucketType',
            'bucketAccessKey' => 'getBucketAccessKey',
            'bucketSecretKey' => 'getBucketSecretKey',
            'bucketRegion' => 'getBucketRegion',
            'bucketName' => 'getBucketName'
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
        $this->container['originType'] = isset($data['originType']) ? $data['originType'] : null;
        $this->container['originAddr'] = isset($data['originAddr']) ? $data['originAddr'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['obsWebHostingStatus'] = isset($data['obsWebHostingStatus']) ? $data['obsWebHostingStatus'] : null;
        $this->container['httpPort'] = isset($data['httpPort']) ? $data['httpPort'] : null;
        $this->container['httpsPort'] = isset($data['httpsPort']) ? $data['httpsPort'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['obsBucketType'] = isset($data['obsBucketType']) ? $data['obsBucketType'] : null;
        $this->container['bucketAccessKey'] = isset($data['bucketAccessKey']) ? $data['bucketAccessKey'] : null;
        $this->container['bucketSecretKey'] = isset($data['bucketSecretKey']) ? $data['bucketSecretKey'] : null;
        $this->container['bucketRegion'] = isset($data['bucketRegion']) ? $data['bucketRegion'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['originType'] === null) {
            $invalidProperties[] = "'originType' can't be null";
        }
        if ($this->container['originAddr'] === null) {
            $invalidProperties[] = "'originAddr' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets originType
    *  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名 - third_bucket: 第三方桶，使用该源站类型需要提交工单申请  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getOriginType()
    {
        return $this->container['originType'];
    }

    /**
    * Sets originType
    *
    * @param string $originType **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名 - third_bucket: 第三方桶，使用该源站类型需要提交工单申请  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginType($originType)
    {
        $this->container['originType'] = $originType;
        return $this;
    }

    /**
    * Gets originAddr
    *  **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getOriginAddr()
    {
        return $this->container['originAddr'];
    }

    /**
    * Sets originAddr
    *
    * @param string $originAddr **参数解释：** 源站IP或者域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginAddr($originAddr)
    {
        $this->container['originAddr'] = $originAddr;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 源站优先级 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority **参数解释：** 源站优先级 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 权重 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight **参数解释：** 权重 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets obsWebHostingStatus
    *  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getObsWebHostingStatus()
    {
        return $this->container['obsWebHostingStatus'];
    }

    /**
    * Sets obsWebHostingStatus
    *
    * @param string|null $obsWebHostingStatus **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setObsWebHostingStatus($obsWebHostingStatus)
    {
        $this->container['obsWebHostingStatus'] = $obsWebHostingStatus;
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
    * Gets obsBucketType
    *  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
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
    * @param string|null $obsBucketType **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    *
    * @return $this
    */
    public function setObsBucketType($obsBucketType)
    {
        $this->container['obsBucketType'] = $obsBucketType;
        return $this;
    }

    /**
    * Gets bucketAccessKey
    *  **参数解释：** 第三方对象存储访问密钥ID，即AK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBucketAccessKey()
    {
        return $this->container['bucketAccessKey'];
    }

    /**
    * Sets bucketAccessKey
    *
    * @param string|null $bucketAccessKey **参数解释：** 第三方对象存储访问密钥ID，即AK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBucketAccessKey($bucketAccessKey)
    {
        $this->container['bucketAccessKey'] = $bucketAccessKey;
        return $this;
    }

    /**
    * Gets bucketSecretKey
    *  **参数解释：** 第三方对象存储私密访问密钥，即SK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBucketSecretKey()
    {
        return $this->container['bucketSecretKey'];
    }

    /**
    * Sets bucketSecretKey
    *
    * @param string|null $bucketSecretKey **参数解释：** 第三方对象存储私密访问密钥，即SK **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBucketSecretKey($bucketSecretKey)
    {
        $this->container['bucketSecretKey'] = $bucketSecretKey;
        return $this;
    }

    /**
    * Gets bucketRegion
    *  **参数解释：** 第三方对象存储区域 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBucketRegion()
    {
        return $this->container['bucketRegion'];
    }

    /**
    * Sets bucketRegion
    *
    * @param string|null $bucketRegion **参数解释：** 第三方对象存储区域 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBucketRegion($bucketRegion)
    {
        $this->container['bucketRegion'] = $bucketRegion;
        return $this;
    }

    /**
    * Gets bucketName
    *  **参数解释：** 第三方对象存储名称 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName **参数解释：** 第三方对象存储名称 **约束限制：** 源站类型为第三方桶时必填 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
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

