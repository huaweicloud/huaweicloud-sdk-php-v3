<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCcRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCcRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称
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
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'mode' => 'int',
            'conditions' => '\HuaweiCloud\SDK\Waf\V1\Model\CcCondition[]',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\CreateCcRuleRequestBodyAction',
            'tagType' => 'string',
            'tagIndex' => 'string',
            'tagCondition' => '\HuaweiCloud\SDK\Waf\V1\Model\CcrulesListInfoTagCondition',
            'limitNum' => 'int',
            'limitPeriod' => 'int',
            'unlockNum' => 'int',
            'lockTime' => 'int',
            'domainAggregation' => 'bool',
            'regionAggregation' => 'bool',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称
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
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
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
        'description' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
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
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称
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
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
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
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称
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
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
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
            'description' => 'getDescription'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['tagType'] === null) {
            $invalidProperties[] = "'tagType' can't be null";
        }
            $allowedValues = $this->getTagTypeAllowableValues();
                if (!is_null($this->container['tagType']) && !in_array($this->container['tagType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tagType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['limitNum'] === null) {
            $invalidProperties[] = "'limitNum' can't be null";
        }
        if ($this->container['limitPeriod'] === null) {
            $invalidProperties[] = "'limitPeriod' can't be null";
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
    * Gets mode
    *  cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
    *
    * @return int
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param int $mode cc规则防护模式，对应console上的mode，现在只支持创建高级cc规则防护模式。   - 0：标准，只支持对域名的防护路径做限制。  - 1：高级，支持对路径、IP、Cookie、Header、Params字段做限制。
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CcCondition[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CcCondition[] $conditions cc规则防护规则限速条件，当cc防护规则为高级模式（mode参数值为1）时，该参数必填。
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CreateCcRuleRequestBodyAction
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CreateCcRuleRequestBodyAction $action action
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
    * @return string
    */
    public function getTagType()
    {
        return $this->container['tagType'];
    }

    /**
    * Sets tagType
    *
    * @param string $tagType **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
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
    * @return int
    */
    public function getLimitNum()
    {
        return $this->container['limitNum'];
    }

    /**
    * Sets limitNum
    *
    * @param int $limitNum 限制频率，单位为次，范围为1~2147483647
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
    * @return int
    */
    public function getLimitPeriod()
    {
        return $this->container['limitPeriod'];
    }

    /**
    * Sets limitPeriod
    *
    * @param int $limitPeriod 限速周期，单位为秒，范围1~3600
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

