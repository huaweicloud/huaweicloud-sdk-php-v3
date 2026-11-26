<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourcesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourcesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  **参数解释：** 加速域名ID，系统自动生成，创建域名时无需传入此参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不能配置内网IP **取值范围：** 不涉及 **默认取值：** 不涉及
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * activeStandby  **参数解释：** 设置主/备源站，主源站优先级高于备源站，CDN节点回源时优先回到主源站 >- 主源站优先级默认为70，备源站优先级默认为30。  **约束限制：** 与priority二者至少传一个，同时存在时以priority为准 **取值范围：** - 1: 主源站 - 0: 备源站  **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级，数值越大优先级越高，创建域名时可用于替代active_standby指定源站优先级 **约束限制：** - 与active_standby二者至少传一个，同时存在时以priority为准 - 不同优先级数量不超过6个  **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重，值越大回源到该源站的次数越多。多个优先级相同的源站，由权重决定回源到各个源站的比例 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 50
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * enableObsWebHosting  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'ipOrDomain' => 'string',
            'originType' => 'string',
            'obsBucketType' => 'string',
            'activeStandby' => 'int',
            'priority' => 'int',
            'weight' => 'int',
            'hostName' => 'string',
            'enableObsWebHosting' => 'int',
            'httpPort' => 'int',
            'httpsPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  **参数解释：** 加速域名ID，系统自动生成，创建域名时无需传入此参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不能配置内网IP **取值范围：** 不涉及 **默认取值：** 不涉及
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * activeStandby  **参数解释：** 设置主/备源站，主源站优先级高于备源站，CDN节点回源时优先回到主源站 >- 主源站优先级默认为70，备源站优先级默认为30。  **约束限制：** 与priority二者至少传一个，同时存在时以priority为准 **取值范围：** - 1: 主源站 - 0: 备源站  **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级，数值越大优先级越高，创建域名时可用于替代active_standby指定源站优先级 **约束限制：** - 与active_standby二者至少传一个，同时存在时以priority为准 - 不同优先级数量不超过6个  **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重，值越大回源到该源站的次数越多。多个优先级相同的源站，由权重决定回源到各个源站的比例 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 50
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * enableObsWebHosting  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'ipOrDomain' => null,
        'originType' => null,
        'obsBucketType' => null,
        'activeStandby' => null,
        'priority' => null,
        'weight' => null,
        'hostName' => null,
        'enableObsWebHosting' => 'int32',
        'httpPort' => null,
        'httpsPort' => null
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
    * domainId  **参数解释：** 加速域名ID，系统自动生成，创建域名时无需传入此参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不能配置内网IP **取值范围：** 不涉及 **默认取值：** 不涉及
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * activeStandby  **参数解释：** 设置主/备源站，主源站优先级高于备源站，CDN节点回源时优先回到主源站 >- 主源站优先级默认为70，备源站优先级默认为30。  **约束限制：** 与priority二者至少传一个，同时存在时以priority为准 **取值范围：** - 1: 主源站 - 0: 备源站  **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级，数值越大优先级越高，创建域名时可用于替代active_standby指定源站优先级 **约束限制：** - 与active_standby二者至少传一个，同时存在时以priority为准 - 不同优先级数量不超过6个  **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重，值越大回源到该源站的次数越多。多个优先级相同的源站，由权重决定回源到各个源站的比例 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 50
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * enableObsWebHosting  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'ipOrDomain' => 'ip_or_domain',
            'originType' => 'origin_type',
            'obsBucketType' => 'obs_bucket_type',
            'activeStandby' => 'active_standby',
            'priority' => 'priority',
            'weight' => 'weight',
            'hostName' => 'host_name',
            'enableObsWebHosting' => 'enable_obs_web_hosting',
            'httpPort' => 'http_port',
            'httpsPort' => 'https_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  **参数解释：** 加速域名ID，系统自动生成，创建域名时无需传入此参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不能配置内网IP **取值范围：** 不涉及 **默认取值：** 不涉及
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * activeStandby  **参数解释：** 设置主/备源站，主源站优先级高于备源站，CDN节点回源时优先回到主源站 >- 主源站优先级默认为70，备源站优先级默认为30。  **约束限制：** 与priority二者至少传一个，同时存在时以priority为准 **取值范围：** - 1: 主源站 - 0: 备源站  **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级，数值越大优先级越高，创建域名时可用于替代active_standby指定源站优先级 **约束限制：** - 与active_standby二者至少传一个，同时存在时以priority为准 - 不同优先级数量不超过6个  **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重，值越大回源到该源站的次数越多。多个优先级相同的源站，由权重决定回源到各个源站的比例 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 50
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * enableObsWebHosting  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'ipOrDomain' => 'setIpOrDomain',
            'originType' => 'setOriginType',
            'obsBucketType' => 'setObsBucketType',
            'activeStandby' => 'setActiveStandby',
            'priority' => 'setPriority',
            'weight' => 'setWeight',
            'hostName' => 'setHostName',
            'enableObsWebHosting' => 'setEnableObsWebHosting',
            'httpPort' => 'setHttpPort',
            'httpsPort' => 'setHttpsPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  **参数解释：** 加速域名ID，系统自动生成，创建域名时无需传入此参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipOrDomain  **参数解释：** 源站IP或者域名 **约束限制：** 不能配置内网IP **取值范围：** 不涉及 **默认取值：** 不涉及
    * originType  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    * obsBucketType  **参数解释：** OBS回源鉴权开关，适用于OBS桶源站场景，如果桶需要带鉴权访问，则需要打开OBS回源鉴权开关。如此，CDN节点回源时会携带鉴权信息，鉴权信息与OBS桶不匹配时，回源失败，避免非授权的请求盗刷流量 **约束限制：** 源站类型是“OBS桶域名”时需要传该参数 **取值范围：** - private: 开启回源鉴权开关 - public: 关闭回源鉴权开关  **默认取值：** public: 关闭回源鉴权开关
    * activeStandby  **参数解释：** 设置主/备源站，主源站优先级高于备源站，CDN节点回源时优先回到主源站 >- 主源站优先级默认为70，备源站优先级默认为30。  **约束限制：** 与priority二者至少传一个，同时存在时以priority为准 **取值范围：** - 1: 主源站 - 0: 备源站  **默认取值：** 不涉及
    * priority  **参数解释：** 源站优先级，数值越大优先级越高，创建域名时可用于替代active_standby指定源站优先级 **约束限制：** - 与active_standby二者至少传一个，同时存在时以priority为准 - 不同优先级数量不超过6个  **取值范围：** 1-1000 **默认取值：** 不涉及
    * weight  **参数解释：** 权重，值越大回源到该源站的次数越多。多个优先级相同的源站，由权重决定回源到各个源站的比例 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 50
    * hostName  **参数解释：** 回源HOST **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 加速域名
    * enableObsWebHosting  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    * httpPort  **参数解释：** HTTP端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 80
    * httpsPort  **参数解释：** HTTPS端口 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 443
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'ipOrDomain' => 'getIpOrDomain',
            'originType' => 'getOriginType',
            'obsBucketType' => 'getObsBucketType',
            'activeStandby' => 'getActiveStandby',
            'priority' => 'getPriority',
            'weight' => 'getWeight',
            'hostName' => 'getHostName',
            'enableObsWebHosting' => 'getEnableObsWebHosting',
            'httpPort' => 'getHttpPort',
            'httpsPort' => 'getHttpsPort'
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
    const ORIGIN_TYPE_IPADDR = 'ipaddr';
    const ORIGIN_TYPE_DOMAIN = 'domain';
    const ORIGIN_TYPE_OBS_BUCKET = 'obs_bucket';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginTypeAllowableValues()
    {
        return [
            self::ORIGIN_TYPE_IPADDR,
            self::ORIGIN_TYPE_DOMAIN,
            self::ORIGIN_TYPE_OBS_BUCKET,
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ipOrDomain'] = isset($data['ipOrDomain']) ? $data['ipOrDomain'] : null;
        $this->container['originType'] = isset($data['originType']) ? $data['originType'] : null;
        $this->container['obsBucketType'] = isset($data['obsBucketType']) ? $data['obsBucketType'] : null;
        $this->container['activeStandby'] = isset($data['activeStandby']) ? $data['activeStandby'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['enableObsWebHosting'] = isset($data['enableObsWebHosting']) ? $data['enableObsWebHosting'] : null;
        $this->container['httpPort'] = isset($data['httpPort']) ? $data['httpPort'] : null;
        $this->container['httpsPort'] = isset($data['httpsPort']) ? $data['httpsPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ipOrDomain'] === null) {
            $invalidProperties[] = "'ipOrDomain' can't be null";
        }
        if ($this->container['originType'] === null) {
            $invalidProperties[] = "'originType' can't be null";
        }
            $allowedValues = $this->getOriginTypeAllowableValues();
                if (!is_null($this->container['originType']) && !in_array($this->container['originType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'originType', must be one of '%s'",
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
    * Gets domainId
    *  **参数解释：** 加速域名ID，系统自动生成，创建域名时无需传入此参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释：** 加速域名ID，系统自动生成，创建域名时无需传入此参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ipOrDomain
    *  **参数解释：** 源站IP或者域名 **约束限制：** 不能配置内网IP **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string $ipOrDomain **参数解释：** 源站IP或者域名 **约束限制：** 不能配置内网IP **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIpOrDomain($ipOrDomain)
    {
        $this->container['ipOrDomain'] = $ipOrDomain;
        return $this;
    }

    /**
    * Gets originType
    *  **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
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
    * @param string $originType **参数解释：** 源站类型 **约束限制：** 不涉及 **取值范围：** - ipaddr: 源站IP - domain: 源站域名 - obs_bucket: OBS桶域名  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginType($originType)
    {
        $this->container['originType'] = $originType;
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
    * Gets activeStandby
    *  **参数解释：** 设置主/备源站，主源站优先级高于备源站，CDN节点回源时优先回到主源站 >- 主源站优先级默认为70，备源站优先级默认为30。  **约束限制：** 与priority二者至少传一个，同时存在时以priority为准 **取值范围：** - 1: 主源站 - 0: 备源站  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getActiveStandby()
    {
        return $this->container['activeStandby'];
    }

    /**
    * Sets activeStandby
    *
    * @param int|null $activeStandby **参数解释：** 设置主/备源站，主源站优先级高于备源站，CDN节点回源时优先回到主源站 >- 主源站优先级默认为70，备源站优先级默认为30。  **约束限制：** 与priority二者至少传一个，同时存在时以priority为准 **取值范围：** - 1: 主源站 - 0: 备源站  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setActiveStandby($activeStandby)
    {
        $this->container['activeStandby'] = $activeStandby;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 源站优先级，数值越大优先级越高，创建域名时可用于替代active_standby指定源站优先级 **约束限制：** - 与active_standby二者至少传一个，同时存在时以priority为准 - 不同优先级数量不超过6个  **取值范围：** 1-1000 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority **参数解释：** 源站优先级，数值越大优先级越高，创建域名时可用于替代active_standby指定源站优先级 **约束限制：** - 与active_standby二者至少传一个，同时存在时以priority为准 - 不同优先级数量不超过6个  **取值范围：** 1-1000 **默认取值：** 不涉及
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
    *  **参数解释：** 权重，值越大回源到该源站的次数越多。多个优先级相同的源站，由权重决定回源到各个源站的比例 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 50
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
    * @param int|null $weight **参数解释：** 权重，值越大回源到该源站的次数越多。多个优先级相同的源站，由权重决定回源到各个源站的比例 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 50
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
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
    * Gets enableObsWebHosting
    *  **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    *
    * @return int|null
    */
    public function getEnableObsWebHosting()
    {
        return $this->container['enableObsWebHosting'];
    }

    /**
    * Sets enableObsWebHosting
    *
    * @param int|null $enableObsWebHosting **参数解释：** 是否开启静态网站托管功能，如果您的源站是OBS桶域名且配置了静态网站托管，开启该功能后，客户端即可访问静态网站托管页面 > 开启该功能后将自动给桶源站地址加上website字段，如果地址中已有website字段，该参数不生效 **约束限制：** - 源站类型为obs_bucket时需要传该参数 - 只有当源站OBS桶已经开启静态网站托管时，才可开启，否则将导致业务异常  **取值范围：** - 0: 关闭 - 1: 开启  **默认取值：** 0: 关闭
    *
    * @return $this
    */
    public function setEnableObsWebHosting($enableObsWebHosting)
    {
        $this->container['enableObsWebHosting'] = $enableObsWebHosting;
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

