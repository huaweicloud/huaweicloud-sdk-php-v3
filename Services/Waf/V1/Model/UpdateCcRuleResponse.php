<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCcRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCcRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称
    * id  Rule ID.
    * policyid  Policy ID.
    * url  当mode值为0时，该参数有返回值。规则应用的URL链接，不包含域名。
    * prefix  路径是否为前缀模式，当防护url以*结束，则为前缀模式。
    * mode  cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    * conditions  cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
    * action  action
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时，需要传该参数。   - 选择cookie时，设置cookie字段名，即用户需要根据网站实际情况配置唯一可识别Web访问者的cookie中的某属性变量名。用户标识的cookie，不支持正则，必须完全匹配。例如：如果网站使用cookie中的某个字段name唯一标识用户，那么可以选取name字段来区分Web访问者。   - 选择header时，设置需要防护的自定义HTTP首部，即用户需要根据网站实际情况配置可识别Web访问者的HTTP首部。
    * tagCondition  tagCondition
    * limitNum  限制频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * unlockNum  放行频率，单位为次，范围为0~2147483647。只有当防护动作类型为dynamic_block时，才需要传该参数。
    * lockTime  阻断时间，单位为秒，范围为0~65535。当“防护动作”选择“阻断”时，可设置阻断后恢复正常访问页面的时间。
    * domainAggregation  是否开启域名聚合统计。
    * regionAggregation  是否开启全局计数。
    * description  规则描述
    * totalNum  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * unaggregation  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * agingTime  规则老化时间，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'policyid' => 'string',
            'url' => 'string',
            'prefix' => 'bool',
            'mode' => 'int',
            'conditions' => '\HuaweiCloud\SDK\Waf\V1\Model\CcCondition[]',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\CcrulesListInfoAction',
            'tagType' => 'string',
            'tagIndex' => 'string',
            'tagCondition' => '\HuaweiCloud\SDK\Waf\V1\Model\CcrulesListInfoTagCondition',
            'limitNum' => 'int',
            'limitPeriod' => 'int',
            'unlockNum' => 'int',
            'lockTime' => 'int',
            'domainAggregation' => 'bool',
            'regionAggregation' => 'bool',
            'description' => 'string',
            'totalNum' => 'int',
            'unaggregation' => 'bool',
            'agingTime' => 'int',
            'producer' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称
    * id  Rule ID.
    * policyid  Policy ID.
    * url  当mode值为0时，该参数有返回值。规则应用的URL链接，不包含域名。
    * prefix  路径是否为前缀模式，当防护url以*结束，则为前缀模式。
    * mode  cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    * conditions  cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
    * action  action
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时，需要传该参数。   - 选择cookie时，设置cookie字段名，即用户需要根据网站实际情况配置唯一可识别Web访问者的cookie中的某属性变量名。用户标识的cookie，不支持正则，必须完全匹配。例如：如果网站使用cookie中的某个字段name唯一标识用户，那么可以选取name字段来区分Web访问者。   - 选择header时，设置需要防护的自定义HTTP首部，即用户需要根据网站实际情况配置可识别Web访问者的HTTP首部。
    * tagCondition  tagCondition
    * limitNum  限制频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * unlockNum  放行频率，单位为次，范围为0~2147483647。只有当防护动作类型为dynamic_block时，才需要传该参数。
    * lockTime  阻断时间，单位为秒，范围为0~65535。当“防护动作”选择“阻断”时，可设置阻断后恢复正常访问页面的时间。
    * domainAggregation  是否开启域名聚合统计。
    * regionAggregation  是否开启全局计数。
    * description  规则描述
    * totalNum  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * unaggregation  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * agingTime  规则老化时间，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'policyid' => null,
        'url' => null,
        'prefix' => null,
        'mode' => null,
        'conditions' => null,
        'action' => null,
        'tagType' => null,
        'tagIndex' => null,
        'tagCondition' => null,
        'limitNum' => null,
        'limitPeriod' => null,
        'unlockNum' => null,
        'lockTime' => null,
        'domainAggregation' => null,
        'regionAggregation' => null,
        'description' => null,
        'totalNum' => null,
        'unaggregation' => null,
        'agingTime' => null,
        'producer' => null
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
    * name  规则名称
    * id  Rule ID.
    * policyid  Policy ID.
    * url  当mode值为0时，该参数有返回值。规则应用的URL链接，不包含域名。
    * prefix  路径是否为前缀模式，当防护url以*结束，则为前缀模式。
    * mode  cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    * conditions  cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
    * action  action
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时，需要传该参数。   - 选择cookie时，设置cookie字段名，即用户需要根据网站实际情况配置唯一可识别Web访问者的cookie中的某属性变量名。用户标识的cookie，不支持正则，必须完全匹配。例如：如果网站使用cookie中的某个字段name唯一标识用户，那么可以选取name字段来区分Web访问者。   - 选择header时，设置需要防护的自定义HTTP首部，即用户需要根据网站实际情况配置可识别Web访问者的HTTP首部。
    * tagCondition  tagCondition
    * limitNum  限制频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * unlockNum  放行频率，单位为次，范围为0~2147483647。只有当防护动作类型为dynamic_block时，才需要传该参数。
    * lockTime  阻断时间，单位为秒，范围为0~65535。当“防护动作”选择“阻断”时，可设置阻断后恢复正常访问页面的时间。
    * domainAggregation  是否开启域名聚合统计。
    * regionAggregation  是否开启全局计数。
    * description  规则描述
    * totalNum  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * unaggregation  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * agingTime  规则老化时间，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'policyid' => 'policyid',
            'url' => 'url',
            'prefix' => 'prefix',
            'mode' => 'mode',
            'conditions' => 'conditions',
            'action' => 'action',
            'tagType' => 'tag_type',
            'tagIndex' => 'tag_index',
            'tagCondition' => 'tag_condition',
            'limitNum' => 'limit_num',
            'limitPeriod' => 'limit_period',
            'unlockNum' => 'unlock_num',
            'lockTime' => 'lock_time',
            'domainAggregation' => 'domain_aggregation',
            'regionAggregation' => 'region_aggregation',
            'description' => 'description',
            'totalNum' => 'total_num',
            'unaggregation' => 'unaggregation',
            'agingTime' => 'aging_time',
            'producer' => 'producer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称
    * id  Rule ID.
    * policyid  Policy ID.
    * url  当mode值为0时，该参数有返回值。规则应用的URL链接，不包含域名。
    * prefix  路径是否为前缀模式，当防护url以*结束，则为前缀模式。
    * mode  cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    * conditions  cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
    * action  action
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时，需要传该参数。   - 选择cookie时，设置cookie字段名，即用户需要根据网站实际情况配置唯一可识别Web访问者的cookie中的某属性变量名。用户标识的cookie，不支持正则，必须完全匹配。例如：如果网站使用cookie中的某个字段name唯一标识用户，那么可以选取name字段来区分Web访问者。   - 选择header时，设置需要防护的自定义HTTP首部，即用户需要根据网站实际情况配置可识别Web访问者的HTTP首部。
    * tagCondition  tagCondition
    * limitNum  限制频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * unlockNum  放行频率，单位为次，范围为0~2147483647。只有当防护动作类型为dynamic_block时，才需要传该参数。
    * lockTime  阻断时间，单位为秒，范围为0~65535。当“防护动作”选择“阻断”时，可设置阻断后恢复正常访问页面的时间。
    * domainAggregation  是否开启域名聚合统计。
    * regionAggregation  是否开启全局计数。
    * description  规则描述
    * totalNum  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * unaggregation  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * agingTime  规则老化时间，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'policyid' => 'setPolicyid',
            'url' => 'setUrl',
            'prefix' => 'setPrefix',
            'mode' => 'setMode',
            'conditions' => 'setConditions',
            'action' => 'setAction',
            'tagType' => 'setTagType',
            'tagIndex' => 'setTagIndex',
            'tagCondition' => 'setTagCondition',
            'limitNum' => 'setLimitNum',
            'limitPeriod' => 'setLimitPeriod',
            'unlockNum' => 'setUnlockNum',
            'lockTime' => 'setLockTime',
            'domainAggregation' => 'setDomainAggregation',
            'regionAggregation' => 'setRegionAggregation',
            'description' => 'setDescription',
            'totalNum' => 'setTotalNum',
            'unaggregation' => 'setUnaggregation',
            'agingTime' => 'setAgingTime',
            'producer' => 'setProducer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称
    * id  Rule ID.
    * policyid  Policy ID.
    * url  当mode值为0时，该参数有返回值。规则应用的URL链接，不包含域名。
    * prefix  路径是否为前缀模式，当防护url以*结束，则为前缀模式。
    * mode  cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    * conditions  cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
    * action  action
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时，需要传该参数。   - 选择cookie时，设置cookie字段名，即用户需要根据网站实际情况配置唯一可识别Web访问者的cookie中的某属性变量名。用户标识的cookie，不支持正则，必须完全匹配。例如：如果网站使用cookie中的某个字段name唯一标识用户，那么可以选取name字段来区分Web访问者。   - 选择header时，设置需要防护的自定义HTTP首部，即用户需要根据网站实际情况配置可识别Web访问者的HTTP首部。
    * tagCondition  tagCondition
    * limitNum  限制频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * unlockNum  放行频率，单位为次，范围为0~2147483647。只有当防护动作类型为dynamic_block时，才需要传该参数。
    * lockTime  阻断时间，单位为秒，范围为0~65535。当“防护动作”选择“阻断”时，可设置阻断后恢复正常访问页面的时间。
    * domainAggregation  是否开启域名聚合统计。
    * regionAggregation  是否开启全局计数。
    * description  规则描述
    * totalNum  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * unaggregation  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * agingTime  规则老化时间，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'policyid' => 'getPolicyid',
            'url' => 'getUrl',
            'prefix' => 'getPrefix',
            'mode' => 'getMode',
            'conditions' => 'getConditions',
            'action' => 'getAction',
            'tagType' => 'getTagType',
            'tagIndex' => 'getTagIndex',
            'tagCondition' => 'getTagCondition',
            'limitNum' => 'getLimitNum',
            'limitPeriod' => 'getLimitPeriod',
            'unlockNum' => 'getUnlockNum',
            'lockTime' => 'getLockTime',
            'domainAggregation' => 'getDomainAggregation',
            'regionAggregation' => 'getRegionAggregation',
            'description' => 'getDescription',
            'totalNum' => 'getTotalNum',
            'unaggregation' => 'getUnaggregation',
            'agingTime' => 'getAgingTime',
            'producer' => 'getProducer'
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
    const TAG_TYPE_IP = 'ip';
    const TAG_TYPE_COOKIE = 'cookie';
    const TAG_TYPE_HEADER = 'header';
    const TAG_TYPE_OTHER = 'other';
    const TAG_TYPE_POLICY = 'policy';
    const TAG_TYPE_DOMAIN = 'domain';
    const TAG_TYPE_URL = 'url';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTagTypeAllowableValues()
    {
        return [
            self::TAG_TYPE_IP,
            self::TAG_TYPE_COOKIE,
            self::TAG_TYPE_HEADER,
            self::TAG_TYPE_OTHER,
            self::TAG_TYPE_POLICY,
            self::TAG_TYPE_DOMAIN,
            self::TAG_TYPE_URL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['tagType'] = isset($data['tagType']) ? $data['tagType'] : null;
        $this->container['tagIndex'] = isset($data['tagIndex']) ? $data['tagIndex'] : null;
        $this->container['tagCondition'] = isset($data['tagCondition']) ? $data['tagCondition'] : null;
        $this->container['limitNum'] = isset($data['limitNum']) ? $data['limitNum'] : null;
        $this->container['limitPeriod'] = isset($data['limitPeriod']) ? $data['limitPeriod'] : null;
        $this->container['unlockNum'] = isset($data['unlockNum']) ? $data['unlockNum'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['domainAggregation'] = isset($data['domainAggregation']) ? $data['domainAggregation'] : null;
        $this->container['regionAggregation'] = isset($data['regionAggregation']) ? $data['regionAggregation'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['unaggregation'] = isset($data['unaggregation']) ? $data['unaggregation'] : null;
        $this->container['agingTime'] = isset($data['agingTime']) ? $data['agingTime'] : null;
        $this->container['producer'] = isset($data['producer']) ? $data['producer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTagTypeAllowableValues();
                if (!is_null($this->container['tagType']) && !in_array($this->container['tagType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tagType', must be one of '%s'",
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
    * Gets name
    *  规则名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  Rule ID.
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id Rule ID.
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyid
    *  Policy ID.
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid Policy ID.
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets url
    *  当mode值为0时，该参数有返回值。规则应用的URL链接，不包含域名。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 当mode值为0时，该参数有返回值。规则应用的URL链接，不包含域名。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets prefix
    *  路径是否为前缀模式，当防护url以*结束，则为前缀模式。
    *
    * @return bool|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param bool|null $prefix 路径是否为前缀模式，当防护url以*结束，则为前缀模式。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets mode
    *  cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    *
    * @return int|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param int|null $mode cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets conditions
    *  cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CcCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CcCondition[]|null $conditions cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CcrulesListInfoAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CcrulesListInfoAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets tagType
    *  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTagType()
    {
        return $this->container['tagType'];
    }

    /**
    * Sets tagType
    *
    * @param string|null $tagType **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTagType($tagType)
    {
        $this->container['tagType'] = $tagType;
        return $this;
    }

    /**
    * Gets tagIndex
    *  用户标识，当限速模式为用户限速(cookie或header)时，需要传该参数。   - 选择cookie时，设置cookie字段名，即用户需要根据网站实际情况配置唯一可识别Web访问者的cookie中的某属性变量名。用户标识的cookie，不支持正则，必须完全匹配。例如：如果网站使用cookie中的某个字段name唯一标识用户，那么可以选取name字段来区分Web访问者。   - 选择header时，设置需要防护的自定义HTTP首部，即用户需要根据网站实际情况配置可识别Web访问者的HTTP首部。
    *
    * @return string|null
    */
    public function getTagIndex()
    {
        return $this->container['tagIndex'];
    }

    /**
    * Sets tagIndex
    *
    * @param string|null $tagIndex 用户标识，当限速模式为用户限速(cookie或header)时，需要传该参数。   - 选择cookie时，设置cookie字段名，即用户需要根据网站实际情况配置唯一可识别Web访问者的cookie中的某属性变量名。用户标识的cookie，不支持正则，必须完全匹配。例如：如果网站使用cookie中的某个字段name唯一标识用户，那么可以选取name字段来区分Web访问者。   - 选择header时，设置需要防护的自定义HTTP首部，即用户需要根据网站实际情况配置可识别Web访问者的HTTP首部。
    *
    * @return $this
    */
    public function setTagIndex($tagIndex)
    {
        $this->container['tagIndex'] = $tagIndex;
        return $this;
    }

    /**
    * Gets tagCondition
    *  tagCondition
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CcrulesListInfoTagCondition|null
    */
    public function getTagCondition()
    {
        return $this->container['tagCondition'];
    }

    /**
    * Sets tagCondition
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CcrulesListInfoTagCondition|null $tagCondition tagCondition
    *
    * @return $this
    */
    public function setTagCondition($tagCondition)
    {
        $this->container['tagCondition'] = $tagCondition;
        return $this;
    }

    /**
    * Gets limitNum
    *  限制频率，单位为次，范围为1~2147483647
    *
    * @return int|null
    */
    public function getLimitNum()
    {
        return $this->container['limitNum'];
    }

    /**
    * Sets limitNum
    *
    * @param int|null $limitNum 限制频率，单位为次，范围为1~2147483647
    *
    * @return $this
    */
    public function setLimitNum($limitNum)
    {
        $this->container['limitNum'] = $limitNum;
        return $this;
    }

    /**
    * Gets limitPeriod
    *  限速周期，单位为秒，范围1~3600
    *
    * @return int|null
    */
    public function getLimitPeriod()
    {
        return $this->container['limitPeriod'];
    }

    /**
    * Sets limitPeriod
    *
    * @param int|null $limitPeriod 限速周期，单位为秒，范围1~3600
    *
    * @return $this
    */
    public function setLimitPeriod($limitPeriod)
    {
        $this->container['limitPeriod'] = $limitPeriod;
        return $this;
    }

    /**
    * Gets unlockNum
    *  放行频率，单位为次，范围为0~2147483647。只有当防护动作类型为dynamic_block时，才需要传该参数。
    *
    * @return int|null
    */
    public function getUnlockNum()
    {
        return $this->container['unlockNum'];
    }

    /**
    * Sets unlockNum
    *
    * @param int|null $unlockNum 放行频率，单位为次，范围为0~2147483647。只有当防护动作类型为dynamic_block时，才需要传该参数。
    *
    * @return $this
    */
    public function setUnlockNum($unlockNum)
    {
        $this->container['unlockNum'] = $unlockNum;
        return $this;
    }

    /**
    * Gets lockTime
    *  阻断时间，单位为秒，范围为0~65535。当“防护动作”选择“阻断”时，可设置阻断后恢复正常访问页面的时间。
    *
    * @return int|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param int|null $lockTime 阻断时间，单位为秒，范围为0~65535。当“防护动作”选择“阻断”时，可设置阻断后恢复正常访问页面的时间。
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets domainAggregation
    *  是否开启域名聚合统计。
    *
    * @return bool|null
    */
    public function getDomainAggregation()
    {
        return $this->container['domainAggregation'];
    }

    /**
    * Sets domainAggregation
    *
    * @param bool|null $domainAggregation 是否开启域名聚合统计。
    *
    * @return $this
    */
    public function setDomainAggregation($domainAggregation)
    {
        $this->container['domainAggregation'] = $domainAggregation;
        return $this;
    }

    /**
    * Gets regionAggregation
    *  是否开启全局计数。
    *
    * @return bool|null
    */
    public function getRegionAggregation()
    {
        return $this->container['regionAggregation'];
    }

    /**
    * Sets regionAggregation
    *
    * @param bool|null $regionAggregation 是否开启全局计数。
    *
    * @return $this
    */
    public function setRegionAggregation($regionAggregation)
    {
        $this->container['regionAggregation'] = $regionAggregation;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets totalNum
    *  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets unaggregation
    *  该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return bool|null
    */
    public function getUnaggregation()
    {
        return $this->container['unaggregation'];
    }

    /**
    * Sets unaggregation
    *
    * @param bool|null $unaggregation 该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return $this
    */
    public function setUnaggregation($unaggregation)
    {
        $this->container['unaggregation'] = $unaggregation;
        return $this;
    }

    /**
    * Gets agingTime
    *  规则老化时间，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return int|null
    */
    public function getAgingTime()
    {
        return $this->container['agingTime'];
    }

    /**
    * Sets agingTime
    *
    * @param int|null $agingTime 规则老化时间，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return $this
    */
    public function setAgingTime($agingTime)
    {
        $this->container['agingTime'] = $agingTime;
        return $this;
    }

    /**
    * Gets producer
    *  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return int|null
    */
    public function getProducer()
    {
        return $this->container['producer'];
    }

    /**
    * Sets producer
    *
    * @param int|null $producer 规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return $this
    */
    public function setProducer($producer)
    {
        $this->container['producer'] = $producer;
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

