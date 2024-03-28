<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiGroupCommonInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiGroupCommonInfo';

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
            'slDomainAccessEnabled' => 'bool'
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
        'slDomainAccessEnabled' => null
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
            'slDomainAccessEnabled' => 'sl_domain_access_enabled'
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
            'slDomainAccessEnabled' => 'setSlDomainAccessEnabled'
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
            'slDomainAccessEnabled' => 'getSlDomainAccessEnabled'
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

