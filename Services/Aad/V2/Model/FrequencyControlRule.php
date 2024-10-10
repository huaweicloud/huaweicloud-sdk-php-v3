<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrequencyControlRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrequencyControlRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * producer  判断是否是智能cc生成的规则
    * name  规则名称
    * url  规则应用的url
    * limitNum  限速频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * lockTime  阻断时间，单位为秒，范围为0~65535
    * tagType  限速模式：ip、cookie、header、other、policy、domain、url。 源限速：ip：IP限速，根据IP区分单个Web访问者。cookie：用户限速，根据Cookie键值区分单个Web访问者。header：用户限速，根据Header区分单个Web访问者。other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者。-目的限速：policy: 策略限速、domain: 域名限速、url: url限速
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时
    * tagCondition  tagCondition
    * action  action
    * mode  cc规则防护模式，0：标准(老版本)，只支持对域名的防护路径做限制。1：高级(新版本)，支持对路径、IP、Cookie、Header、Params字段做限制。修改CC规则时必须传mode
    * conditions  cc规则防护规则限速条件
    * unlockNum  放行频率，单位为次，范围为0~2147483647
    * domainAggregation  域名聚合统计
    * regionAggregation  全局计数
    * captchaLockTime  锁定验证时间
    * grayscaleTime  是否灰度生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'producer' => 'int',
            'name' => 'string',
            'url' => 'string',
            'limitNum' => 'string',
            'limitPeriod' => 'string',
            'lockTime' => 'string',
            'tagType' => 'string',
            'tagIndex' => 'string',
            'tagCondition' => '\HuaweiCloud\SDK\Aad\V2\Model\TagCondition',
            'action' => '\HuaweiCloud\SDK\Aad\V2\Model\ActionInfo',
            'mode' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Aad\V2\Model\Condition[]',
            'unlockNum' => 'int',
            'domainAggregation' => 'bool',
            'regionAggregation' => 'bool',
            'captchaLockTime' => 'int',
            'grayscaleTime' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * producer  判断是否是智能cc生成的规则
    * name  规则名称
    * url  规则应用的url
    * limitNum  限速频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * lockTime  阻断时间，单位为秒，范围为0~65535
    * tagType  限速模式：ip、cookie、header、other、policy、domain、url。 源限速：ip：IP限速，根据IP区分单个Web访问者。cookie：用户限速，根据Cookie键值区分单个Web访问者。header：用户限速，根据Header区分单个Web访问者。other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者。-目的限速：policy: 策略限速、domain: 域名限速、url: url限速
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时
    * tagCondition  tagCondition
    * action  action
    * mode  cc规则防护模式，0：标准(老版本)，只支持对域名的防护路径做限制。1：高级(新版本)，支持对路径、IP、Cookie、Header、Params字段做限制。修改CC规则时必须传mode
    * conditions  cc规则防护规则限速条件
    * unlockNum  放行频率，单位为次，范围为0~2147483647
    * domainAggregation  域名聚合统计
    * regionAggregation  全局计数
    * captchaLockTime  锁定验证时间
    * grayscaleTime  是否灰度生效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'producer' => 'int32',
        'name' => null,
        'url' => null,
        'limitNum' => null,
        'limitPeriod' => null,
        'lockTime' => null,
        'tagType' => null,
        'tagIndex' => null,
        'tagCondition' => null,
        'action' => null,
        'mode' => null,
        'conditions' => null,
        'unlockNum' => 'int32',
        'domainAggregation' => null,
        'regionAggregation' => null,
        'captchaLockTime' => 'int32',
        'grayscaleTime' => null
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
    * id  id
    * producer  判断是否是智能cc生成的规则
    * name  规则名称
    * url  规则应用的url
    * limitNum  限速频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * lockTime  阻断时间，单位为秒，范围为0~65535
    * tagType  限速模式：ip、cookie、header、other、policy、domain、url。 源限速：ip：IP限速，根据IP区分单个Web访问者。cookie：用户限速，根据Cookie键值区分单个Web访问者。header：用户限速，根据Header区分单个Web访问者。other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者。-目的限速：policy: 策略限速、domain: 域名限速、url: url限速
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时
    * tagCondition  tagCondition
    * action  action
    * mode  cc规则防护模式，0：标准(老版本)，只支持对域名的防护路径做限制。1：高级(新版本)，支持对路径、IP、Cookie、Header、Params字段做限制。修改CC规则时必须传mode
    * conditions  cc规则防护规则限速条件
    * unlockNum  放行频率，单位为次，范围为0~2147483647
    * domainAggregation  域名聚合统计
    * regionAggregation  全局计数
    * captchaLockTime  锁定验证时间
    * grayscaleTime  是否灰度生效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'producer' => 'producer',
            'name' => 'name',
            'url' => 'url',
            'limitNum' => 'limit_num',
            'limitPeriod' => 'limit_period',
            'lockTime' => 'lock_time',
            'tagType' => 'tag_type',
            'tagIndex' => 'tag_index',
            'tagCondition' => 'tag_condition',
            'action' => 'action',
            'mode' => 'mode',
            'conditions' => 'conditions',
            'unlockNum' => 'unlock_num',
            'domainAggregation' => 'domain_aggregation',
            'regionAggregation' => 'region_aggregation',
            'captchaLockTime' => 'captcha_lock_time',
            'grayscaleTime' => 'grayscale_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * producer  判断是否是智能cc生成的规则
    * name  规则名称
    * url  规则应用的url
    * limitNum  限速频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * lockTime  阻断时间，单位为秒，范围为0~65535
    * tagType  限速模式：ip、cookie、header、other、policy、domain、url。 源限速：ip：IP限速，根据IP区分单个Web访问者。cookie：用户限速，根据Cookie键值区分单个Web访问者。header：用户限速，根据Header区分单个Web访问者。other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者。-目的限速：policy: 策略限速、domain: 域名限速、url: url限速
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时
    * tagCondition  tagCondition
    * action  action
    * mode  cc规则防护模式，0：标准(老版本)，只支持对域名的防护路径做限制。1：高级(新版本)，支持对路径、IP、Cookie、Header、Params字段做限制。修改CC规则时必须传mode
    * conditions  cc规则防护规则限速条件
    * unlockNum  放行频率，单位为次，范围为0~2147483647
    * domainAggregation  域名聚合统计
    * regionAggregation  全局计数
    * captchaLockTime  锁定验证时间
    * grayscaleTime  是否灰度生效
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'producer' => 'setProducer',
            'name' => 'setName',
            'url' => 'setUrl',
            'limitNum' => 'setLimitNum',
            'limitPeriod' => 'setLimitPeriod',
            'lockTime' => 'setLockTime',
            'tagType' => 'setTagType',
            'tagIndex' => 'setTagIndex',
            'tagCondition' => 'setTagCondition',
            'action' => 'setAction',
            'mode' => 'setMode',
            'conditions' => 'setConditions',
            'unlockNum' => 'setUnlockNum',
            'domainAggregation' => 'setDomainAggregation',
            'regionAggregation' => 'setRegionAggregation',
            'captchaLockTime' => 'setCaptchaLockTime',
            'grayscaleTime' => 'setGrayscaleTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * producer  判断是否是智能cc生成的规则
    * name  规则名称
    * url  规则应用的url
    * limitNum  限速频率，单位为次，范围为1~2147483647
    * limitPeriod  限速周期，单位为秒，范围1~3600
    * lockTime  阻断时间，单位为秒，范围为0~65535
    * tagType  限速模式：ip、cookie、header、other、policy、domain、url。 源限速：ip：IP限速，根据IP区分单个Web访问者。cookie：用户限速，根据Cookie键值区分单个Web访问者。header：用户限速，根据Header区分单个Web访问者。other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者。-目的限速：policy: 策略限速、domain: 域名限速、url: url限速
    * tagIndex  用户标识，当限速模式为用户限速(cookie或header)时
    * tagCondition  tagCondition
    * action  action
    * mode  cc规则防护模式，0：标准(老版本)，只支持对域名的防护路径做限制。1：高级(新版本)，支持对路径、IP、Cookie、Header、Params字段做限制。修改CC规则时必须传mode
    * conditions  cc规则防护规则限速条件
    * unlockNum  放行频率，单位为次，范围为0~2147483647
    * domainAggregation  域名聚合统计
    * regionAggregation  全局计数
    * captchaLockTime  锁定验证时间
    * grayscaleTime  是否灰度生效
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'producer' => 'getProducer',
            'name' => 'getName',
            'url' => 'getUrl',
            'limitNum' => 'getLimitNum',
            'limitPeriod' => 'getLimitPeriod',
            'lockTime' => 'getLockTime',
            'tagType' => 'getTagType',
            'tagIndex' => 'getTagIndex',
            'tagCondition' => 'getTagCondition',
            'action' => 'getAction',
            'mode' => 'getMode',
            'conditions' => 'getConditions',
            'unlockNum' => 'getUnlockNum',
            'domainAggregation' => 'getDomainAggregation',
            'regionAggregation' => 'getRegionAggregation',
            'captchaLockTime' => 'getCaptchaLockTime',
            'grayscaleTime' => 'getGrayscaleTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['producer'] = isset($data['producer']) ? $data['producer'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['limitNum'] = isset($data['limitNum']) ? $data['limitNum'] : null;
        $this->container['limitPeriod'] = isset($data['limitPeriod']) ? $data['limitPeriod'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['tagType'] = isset($data['tagType']) ? $data['tagType'] : null;
        $this->container['tagIndex'] = isset($data['tagIndex']) ? $data['tagIndex'] : null;
        $this->container['tagCondition'] = isset($data['tagCondition']) ? $data['tagCondition'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['unlockNum'] = isset($data['unlockNum']) ? $data['unlockNum'] : null;
        $this->container['domainAggregation'] = isset($data['domainAggregation']) ? $data['domainAggregation'] : null;
        $this->container['regionAggregation'] = isset($data['regionAggregation']) ? $data['regionAggregation'] : null;
        $this->container['captchaLockTime'] = isset($data['captchaLockTime']) ? $data['captchaLockTime'] : null;
        $this->container['grayscaleTime'] = isset($data['grayscaleTime']) ? $data['grayscaleTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['unlockNum']) && ($this->container['unlockNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unlockNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unlockNum']) && ($this->container['unlockNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unlockNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['captchaLockTime']) && ($this->container['captchaLockTime'] > 3600)) {
                $invalidProperties[] = "invalid value for 'captchaLockTime', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['captchaLockTime']) && ($this->container['captchaLockTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'captchaLockTime', must be bigger than or equal to 0.";
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
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets producer
    *  判断是否是智能cc生成的规则
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
    * @param int|null $producer 判断是否是智能cc生成的规则
    *
    * @return $this
    */
    public function setProducer($producer)
    {
        $this->container['producer'] = $producer;
        return $this;
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
    * Gets url
    *  规则应用的url
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
    * @param string|null $url 规则应用的url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets limitNum
    *  限速频率，单位为次，范围为1~2147483647
    *
    * @return string|null
    */
    public function getLimitNum()
    {
        return $this->container['limitNum'];
    }

    /**
    * Sets limitNum
    *
    * @param string|null $limitNum 限速频率，单位为次，范围为1~2147483647
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
    * @return string|null
    */
    public function getLimitPeriod()
    {
        return $this->container['limitPeriod'];
    }

    /**
    * Sets limitPeriod
    *
    * @param string|null $limitPeriod 限速周期，单位为秒，范围1~3600
    *
    * @return $this
    */
    public function setLimitPeriod($limitPeriod)
    {
        $this->container['limitPeriod'] = $limitPeriod;
        return $this;
    }

    /**
    * Gets lockTime
    *  阻断时间，单位为秒，范围为0~65535
    *
    * @return string|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param string|null $lockTime 阻断时间，单位为秒，范围为0~65535
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets tagType
    *  限速模式：ip、cookie、header、other、policy、domain、url。 源限速：ip：IP限速，根据IP区分单个Web访问者。cookie：用户限速，根据Cookie键值区分单个Web访问者。header：用户限速，根据Header区分单个Web访问者。other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者。-目的限速：policy: 策略限速、domain: 域名限速、url: url限速
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
    * @param string|null $tagType 限速模式：ip、cookie、header、other、policy、domain、url。 源限速：ip：IP限速，根据IP区分单个Web访问者。cookie：用户限速，根据Cookie键值区分单个Web访问者。header：用户限速，根据Header区分单个Web访问者。other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者。-目的限速：policy: 策略限速、domain: 域名限速、url: url限速
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
    *  用户标识，当限速模式为用户限速(cookie或header)时
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
    * @param string|null $tagIndex 用户标识，当限速模式为用户限速(cookie或header)时
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
    * @return \HuaweiCloud\SDK\Aad\V2\Model\TagCondition|null
    */
    public function getTagCondition()
    {
        return $this->container['tagCondition'];
    }

    /**
    * Sets tagCondition
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\TagCondition|null $tagCondition tagCondition
    *
    * @return $this
    */
    public function setTagCondition($tagCondition)
    {
        $this->container['tagCondition'] = $tagCondition;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\ActionInfo|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\ActionInfo|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets mode
    *  cc规则防护模式，0：标准(老版本)，只支持对域名的防护路径做限制。1：高级(新版本)，支持对路径、IP、Cookie、Header、Params字段做限制。修改CC规则时必须传mode
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode cc规则防护模式，0：标准(老版本)，只支持对域名的防护路径做限制。1：高级(新版本)，支持对路径、IP、Cookie、Header、Params字段做限制。修改CC规则时必须传mode
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
    *  cc规则防护规则限速条件
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\Condition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\Condition[]|null $conditions cc规则防护规则限速条件
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets unlockNum
    *  放行频率，单位为次，范围为0~2147483647
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
    * @param int|null $unlockNum 放行频率，单位为次，范围为0~2147483647
    *
    * @return $this
    */
    public function setUnlockNum($unlockNum)
    {
        $this->container['unlockNum'] = $unlockNum;
        return $this;
    }

    /**
    * Gets domainAggregation
    *  域名聚合统计
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
    * @param bool|null $domainAggregation 域名聚合统计
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
    *  全局计数
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
    * @param bool|null $regionAggregation 全局计数
    *
    * @return $this
    */
    public function setRegionAggregation($regionAggregation)
    {
        $this->container['regionAggregation'] = $regionAggregation;
        return $this;
    }

    /**
    * Gets captchaLockTime
    *  锁定验证时间
    *
    * @return int|null
    */
    public function getCaptchaLockTime()
    {
        return $this->container['captchaLockTime'];
    }

    /**
    * Sets captchaLockTime
    *
    * @param int|null $captchaLockTime 锁定验证时间
    *
    * @return $this
    */
    public function setCaptchaLockTime($captchaLockTime)
    {
        $this->container['captchaLockTime'] = $captchaLockTime;
        return $this;
    }

    /**
    * Gets grayscaleTime
    *  是否灰度生效
    *
    * @return bool|null
    */
    public function getGrayscaleTime()
    {
        return $this->container['grayscaleTime'];
    }

    /**
    * Sets grayscaleTime
    *
    * @param bool|null $grayscaleTime 是否灰度生效
    *
    * @return $this
    */
    public function setGrayscaleTime($grayscaleTime)
    {
        $this->container['grayscaleTime'] = $grayscaleTime;
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

