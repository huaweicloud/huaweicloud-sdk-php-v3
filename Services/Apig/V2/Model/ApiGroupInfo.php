<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编号
    * name  API分组名称
    * status  状态   - 1： 有效
    * slDomain  系统默认分配的子域名
    * registerTime  创建时间
    * updateTime  最近修改时间
    * onSellStatus  是否已上架云商店： - 1：已上架 - 2：未上架 - 3：审核中  [暂不支持](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk)
    * urlDomains  分组上绑定的独立域名列表
    * slDomainAccessEnabled  调试域名是否可以访问，true表示可以访问，false表示禁止访问
    * slDomains  系统默认分配的子域名列表
    * remark  描述
    * callLimits  流控时长内分组下的API的总访问次数限制，默认不限，请根据服务的负载能力自行设置  暂不支持
    * timeInterval  流控时长  暂不支持
    * timeUnit  流控的时间单位  暂不支持
    * isDefault  是否为默认分组
    * version  分组版本  - V1：全局分组 - V2：应用级分组  暂不支持，默认为V1
    * romaAppId  分组归属的集成应用编号。  分组版本V2时必填。  暂不支持
    * romaAppName  分组归属的集成应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'int',
            'slDomain' => 'string',
            'registerTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'onSellStatus' => 'int',
            'urlDomains' => '\HuaweiCloud\SDK\Apig\V2\Model\UrlDomain[]',
            'slDomainAccessEnabled' => 'bool',
            'slDomains' => 'string[]',
            'remark' => 'string',
            'callLimits' => 'int',
            'timeInterval' => 'int',
            'timeUnit' => 'string',
            'isDefault' => 'int',
            'version' => 'string',
            'romaAppId' => 'string',
            'romaAppName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编号
    * name  API分组名称
    * status  状态   - 1： 有效
    * slDomain  系统默认分配的子域名
    * registerTime  创建时间
    * updateTime  最近修改时间
    * onSellStatus  是否已上架云商店： - 1：已上架 - 2：未上架 - 3：审核中  [暂不支持](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk)
    * urlDomains  分组上绑定的独立域名列表
    * slDomainAccessEnabled  调试域名是否可以访问，true表示可以访问，false表示禁止访问
    * slDomains  系统默认分配的子域名列表
    * remark  描述
    * callLimits  流控时长内分组下的API的总访问次数限制，默认不限，请根据服务的负载能力自行设置  暂不支持
    * timeInterval  流控时长  暂不支持
    * timeUnit  流控的时间单位  暂不支持
    * isDefault  是否为默认分组
    * version  分组版本  - V1：全局分组 - V2：应用级分组  暂不支持，默认为V1
    * romaAppId  分组归属的集成应用编号。  分组版本V2时必填。  暂不支持
    * romaAppName  分组归属的集成应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => 'int32',
        'slDomain' => null,
        'registerTime' => 'date-time',
        'updateTime' => 'date-time',
        'onSellStatus' => 'int32',
        'urlDomains' => null,
        'slDomainAccessEnabled' => null,
        'slDomains' => null,
        'remark' => null,
        'callLimits' => 'int32',
        'timeInterval' => 'int32',
        'timeUnit' => null,
        'isDefault' => 'int32',
        'version' => null,
        'romaAppId' => null,
        'romaAppName' => null
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
    * id  编号
    * name  API分组名称
    * status  状态   - 1： 有效
    * slDomain  系统默认分配的子域名
    * registerTime  创建时间
    * updateTime  最近修改时间
    * onSellStatus  是否已上架云商店： - 1：已上架 - 2：未上架 - 3：审核中  [暂不支持](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk)
    * urlDomains  分组上绑定的独立域名列表
    * slDomainAccessEnabled  调试域名是否可以访问，true表示可以访问，false表示禁止访问
    * slDomains  系统默认分配的子域名列表
    * remark  描述
    * callLimits  流控时长内分组下的API的总访问次数限制，默认不限，请根据服务的负载能力自行设置  暂不支持
    * timeInterval  流控时长  暂不支持
    * timeUnit  流控的时间单位  暂不支持
    * isDefault  是否为默认分组
    * version  分组版本  - V1：全局分组 - V2：应用级分组  暂不支持，默认为V1
    * romaAppId  分组归属的集成应用编号。  分组版本V2时必填。  暂不支持
    * romaAppName  分组归属的集成应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'slDomain' => 'sl_domain',
            'registerTime' => 'register_time',
            'updateTime' => 'update_time',
            'onSellStatus' => 'on_sell_status',
            'urlDomains' => 'url_domains',
            'slDomainAccessEnabled' => 'sl_domain_access_enabled',
            'slDomains' => 'sl_domains',
            'remark' => 'remark',
            'callLimits' => 'call_limits',
            'timeInterval' => 'time_interval',
            'timeUnit' => 'time_unit',
            'isDefault' => 'is_default',
            'version' => 'version',
            'romaAppId' => 'roma_app_id',
            'romaAppName' => 'roma_app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编号
    * name  API分组名称
    * status  状态   - 1： 有效
    * slDomain  系统默认分配的子域名
    * registerTime  创建时间
    * updateTime  最近修改时间
    * onSellStatus  是否已上架云商店： - 1：已上架 - 2：未上架 - 3：审核中  [暂不支持](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk)
    * urlDomains  分组上绑定的独立域名列表
    * slDomainAccessEnabled  调试域名是否可以访问，true表示可以访问，false表示禁止访问
    * slDomains  系统默认分配的子域名列表
    * remark  描述
    * callLimits  流控时长内分组下的API的总访问次数限制，默认不限，请根据服务的负载能力自行设置  暂不支持
    * timeInterval  流控时长  暂不支持
    * timeUnit  流控的时间单位  暂不支持
    * isDefault  是否为默认分组
    * version  分组版本  - V1：全局分组 - V2：应用级分组  暂不支持，默认为V1
    * romaAppId  分组归属的集成应用编号。  分组版本V2时必填。  暂不支持
    * romaAppName  分组归属的集成应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'slDomain' => 'setSlDomain',
            'registerTime' => 'setRegisterTime',
            'updateTime' => 'setUpdateTime',
            'onSellStatus' => 'setOnSellStatus',
            'urlDomains' => 'setUrlDomains',
            'slDomainAccessEnabled' => 'setSlDomainAccessEnabled',
            'slDomains' => 'setSlDomains',
            'remark' => 'setRemark',
            'callLimits' => 'setCallLimits',
            'timeInterval' => 'setTimeInterval',
            'timeUnit' => 'setTimeUnit',
            'isDefault' => 'setIsDefault',
            'version' => 'setVersion',
            'romaAppId' => 'setRomaAppId',
            'romaAppName' => 'setRomaAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编号
    * name  API分组名称
    * status  状态   - 1： 有效
    * slDomain  系统默认分配的子域名
    * registerTime  创建时间
    * updateTime  最近修改时间
    * onSellStatus  是否已上架云商店： - 1：已上架 - 2：未上架 - 3：审核中  [暂不支持](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk)
    * urlDomains  分组上绑定的独立域名列表
    * slDomainAccessEnabled  调试域名是否可以访问，true表示可以访问，false表示禁止访问
    * slDomains  系统默认分配的子域名列表
    * remark  描述
    * callLimits  流控时长内分组下的API的总访问次数限制，默认不限，请根据服务的负载能力自行设置  暂不支持
    * timeInterval  流控时长  暂不支持
    * timeUnit  流控的时间单位  暂不支持
    * isDefault  是否为默认分组
    * version  分组版本  - V1：全局分组 - V2：应用级分组  暂不支持，默认为V1
    * romaAppId  分组归属的集成应用编号。  分组版本V2时必填。  暂不支持
    * romaAppName  分组归属的集成应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'slDomain' => 'getSlDomain',
            'registerTime' => 'getRegisterTime',
            'updateTime' => 'getUpdateTime',
            'onSellStatus' => 'getOnSellStatus',
            'urlDomains' => 'getUrlDomains',
            'slDomainAccessEnabled' => 'getSlDomainAccessEnabled',
            'slDomains' => 'getSlDomains',
            'remark' => 'getRemark',
            'callLimits' => 'getCallLimits',
            'timeInterval' => 'getTimeInterval',
            'timeUnit' => 'getTimeUnit',
            'isDefault' => 'getIsDefault',
            'version' => 'getVersion',
            'romaAppId' => 'getRomaAppId',
            'romaAppName' => 'getRomaAppName'
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
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['slDomain'] = isset($data['slDomain']) ? $data['slDomain'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['onSellStatus'] = isset($data['onSellStatus']) ? $data['onSellStatus'] : null;
        $this->container['urlDomains'] = isset($data['urlDomains']) ? $data['urlDomains'] : null;
        $this->container['slDomainAccessEnabled'] = isset($data['slDomainAccessEnabled']) ? $data['slDomainAccessEnabled'] : null;
        $this->container['slDomains'] = isset($data['slDomains']) ? $data['slDomains'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['callLimits'] = isset($data['callLimits']) ? $data['callLimits'] : null;
        $this->container['timeInterval'] = isset($data['timeInterval']) ? $data['timeInterval'] : null;
        $this->container['timeUnit'] = isset($data['timeUnit']) ? $data['timeUnit'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['romaAppId'] = isset($data['romaAppId']) ? $data['romaAppId'] : null;
        $this->container['romaAppName'] = isset($data['romaAppName']) ? $data['romaAppName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['slDomain'] === null) {
            $invalidProperties[] = "'slDomain' can't be null";
        }
        if ($this->container['registerTime'] === null) {
            $invalidProperties[] = "'registerTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['onSellStatus'] === null) {
            $invalidProperties[] = "'onSellStatus' can't be null";
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
    *  编号
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  API分组名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name API分组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  状态   - 1： 有效
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 状态   - 1： 有效
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets slDomain
    *  系统默认分配的子域名
    *
    * @return string
    */
    public function getSlDomain()
    {
        return $this->container['slDomain'];
    }

    /**
    * Sets slDomain
    *
    * @param string $slDomain 系统默认分配的子域名
    *
    * @return $this
    */
    public function setSlDomain($slDomain)
    {
        $this->container['slDomain'] = $slDomain;
        return $this;
    }

    /**
    * Gets registerTime
    *  创建时间
    *
    * @return \DateTime
    */
    public function getRegisterTime()
    {
        return $this->container['registerTime'];
    }

    /**
    * Sets registerTime
    *
    * @param \DateTime $registerTime 创建时间
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最近修改时间
    *
    * @return \DateTime
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime $updateTime 最近修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets onSellStatus
    *  是否已上架云商店： - 1：已上架 - 2：未上架 - 3：审核中  [暂不支持](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk)
    *
    * @return int
    */
    public function getOnSellStatus()
    {
        return $this->container['onSellStatus'];
    }

    /**
    * Sets onSellStatus
    *
    * @param int $onSellStatus 是否已上架云商店： - 1：已上架 - 2：未上架 - 3：审核中  [暂不支持](tag:cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm,hws_hk)
    *
    * @return $this
    */
    public function setOnSellStatus($onSellStatus)
    {
        $this->container['onSellStatus'] = $onSellStatus;
        return $this;
    }

    /**
    * Gets urlDomains
    *  分组上绑定的独立域名列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\UrlDomain[]|null
    */
    public function getUrlDomains()
    {
        return $this->container['urlDomains'];
    }

    /**
    * Sets urlDomains
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\UrlDomain[]|null $urlDomains 分组上绑定的独立域名列表
    *
    * @return $this
    */
    public function setUrlDomains($urlDomains)
    {
        $this->container['urlDomains'] = $urlDomains;
        return $this;
    }

    /**
    * Gets slDomainAccessEnabled
    *  调试域名是否可以访问，true表示可以访问，false表示禁止访问
    *
    * @return bool|null
    */
    public function getSlDomainAccessEnabled()
    {
        return $this->container['slDomainAccessEnabled'];
    }

    /**
    * Sets slDomainAccessEnabled
    *
    * @param bool|null $slDomainAccessEnabled 调试域名是否可以访问，true表示可以访问，false表示禁止访问
    *
    * @return $this
    */
    public function setSlDomainAccessEnabled($slDomainAccessEnabled)
    {
        $this->container['slDomainAccessEnabled'] = $slDomainAccessEnabled;
        return $this;
    }

    /**
    * Gets slDomains
    *  系统默认分配的子域名列表
    *
    * @return string[]|null
    */
    public function getSlDomains()
    {
        return $this->container['slDomains'];
    }

    /**
    * Sets slDomains
    *
    * @param string[]|null $slDomains 系统默认分配的子域名列表
    *
    * @return $this
    */
    public function setSlDomains($slDomains)
    {
        $this->container['slDomains'] = $slDomains;
        return $this;
    }

    /**
    * Gets remark
    *  描述
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 描述
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets callLimits
    *  流控时长内分组下的API的总访问次数限制，默认不限，请根据服务的负载能力自行设置  暂不支持
    *
    * @return int|null
    */
    public function getCallLimits()
    {
        return $this->container['callLimits'];
    }

    /**
    * Sets callLimits
    *
    * @param int|null $callLimits 流控时长内分组下的API的总访问次数限制，默认不限，请根据服务的负载能力自行设置  暂不支持
    *
    * @return $this
    */
    public function setCallLimits($callLimits)
    {
        $this->container['callLimits'] = $callLimits;
        return $this;
    }

    /**
    * Gets timeInterval
    *  流控时长  暂不支持
    *
    * @return int|null
    */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
    * Sets timeInterval
    *
    * @param int|null $timeInterval 流控时长  暂不支持
    *
    * @return $this
    */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;
        return $this;
    }

    /**
    * Gets timeUnit
    *  流控的时间单位  暂不支持
    *
    * @return string|null
    */
    public function getTimeUnit()
    {
        return $this->container['timeUnit'];
    }

    /**
    * Sets timeUnit
    *
    * @param string|null $timeUnit 流控的时间单位  暂不支持
    *
    * @return $this
    */
    public function setTimeUnit($timeUnit)
    {
        $this->container['timeUnit'] = $timeUnit;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否为默认分组
    *
    * @return int|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param int|null $isDefault 是否为默认分组
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets version
    *  分组版本  - V1：全局分组 - V2：应用级分组  暂不支持，默认为V1
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 分组版本  - V1：全局分组 - V2：应用级分组  暂不支持，默认为V1
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets romaAppId
    *  分组归属的集成应用编号。  分组版本V2时必填。  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppId()
    {
        return $this->container['romaAppId'];
    }

    /**
    * Sets romaAppId
    *
    * @param string|null $romaAppId 分组归属的集成应用编号。  分组版本V2时必填。  暂不支持
    *
    * @return $this
    */
    public function setRomaAppId($romaAppId)
    {
        $this->container['romaAppId'] = $romaAppId;
        return $this;
    }

    /**
    * Gets romaAppName
    *  分组归属的集成应用名称  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppName()
    {
        return $this->container['romaAppName'];
    }

    /**
    * Sets romaAppName
    *
    * @param string|null $romaAppName 分组归属的集成应用名称  暂不支持
    *
    * @return $this
    */
    public function setRomaAppName($romaAppName)
    {
        $this->container['romaAppName'] = $romaAppName;
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

