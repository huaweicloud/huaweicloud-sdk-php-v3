<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainsDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainsDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站配置。
    * httpsStatus  是否开启HTTPS加速。 0：代表未开启HTTPS加速； 1：代表开启HTTPS加速，且回源方式为协议跟随； 2：代表开启HTTPS加速，且回源方式为HTTP； 3：代表开启HTTPS加速，且回源方式为HTTPS。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * updateTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainName' => 'string',
            'businessType' => 'string',
            'domainStatus' => 'string',
            'cname' => 'string',
            'sources' => '\HuaweiCloud\SDK\Cdn\V2\Model\SourcesDomainConfig[]',
            'httpsStatus' => 'int',
            'createTime' => 'int',
            'updateTime' => 'int',
            'disabled' => 'int',
            'locked' => 'int',
            'serviceArea' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站配置。
    * httpsStatus  是否开启HTTPS加速。 0：代表未开启HTTPS加速； 1：代表开启HTTPS加速，且回源方式为协议跟随； 2：代表开启HTTPS加速，且回源方式为HTTP； 3：代表开启HTTPS加速，且回源方式为HTTPS。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * updateTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainName' => null,
        'businessType' => null,
        'domainStatus' => null,
        'cname' => null,
        'sources' => null,
        'httpsStatus' => 'int32',
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'disabled' => 'int32',
        'locked' => 'int32',
        'serviceArea' => null
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
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站配置。
    * httpsStatus  是否开启HTTPS加速。 0：代表未开启HTTPS加速； 1：代表开启HTTPS加速，且回源方式为协议跟随； 2：代表开启HTTPS加速，且回源方式为HTTP； 3：代表开启HTTPS加速，且回源方式为HTTPS。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * updateTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainName' => 'domain_name',
            'businessType' => 'business_type',
            'domainStatus' => 'domain_status',
            'cname' => 'cname',
            'sources' => 'sources',
            'httpsStatus' => 'https_status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'disabled' => 'disabled',
            'locked' => 'locked',
            'serviceArea' => 'service_area'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站配置。
    * httpsStatus  是否开启HTTPS加速。 0：代表未开启HTTPS加速； 1：代表开启HTTPS加速，且回源方式为协议跟随； 2：代表开启HTTPS加速，且回源方式为HTTP； 3：代表开启HTTPS加速，且回源方式为HTTPS。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * updateTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainName' => 'setDomainName',
            'businessType' => 'setBusinessType',
            'domainStatus' => 'setDomainStatus',
            'cname' => 'setCname',
            'sources' => 'setSources',
            'httpsStatus' => 'setHttpsStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'disabled' => 'setDisabled',
            'locked' => 'setLocked',
            'serviceArea' => 'setServiceArea'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站配置。
    * httpsStatus  是否开启HTTPS加速。 0：代表未开启HTTPS加速； 1：代表开启HTTPS加速，且回源方式为协议跟随； 2：代表开启HTTPS加速，且回源方式为HTTP； 3：代表开启HTTPS加速，且回源方式为HTTPS。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * updateTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainName' => 'getDomainName',
            'businessType' => 'getBusinessType',
            'domainStatus' => 'getDomainStatus',
            'cname' => 'getCname',
            'sources' => 'getSources',
            'httpsStatus' => 'getHttpsStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'disabled' => 'getDisabled',
            'locked' => 'getLocked',
            'serviceArea' => 'getServiceArea'
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
    const SERVICE_AREA_MAINLAND_CHINA = 'mainland_china';
    const SERVICE_AREA_OUTSIDE_MAINLAND_CHINA = 'outside_mainland_china';
    const SERVICE_AREA__GLOBAL = 'global';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceAreaAllowableValues()
    {
        return [
            self::SERVICE_AREA_MAINLAND_CHINA,
            self::SERVICE_AREA_OUTSIDE_MAINLAND_CHINA,
            self::SERVICE_AREA__GLOBAL,
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['domainStatus'] = isset($data['domainStatus']) ? $data['domainStatus'] : null;
        $this->container['cname'] = isset($data['cname']) ? $data['cname'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['httpsStatus'] = isset($data['httpsStatus']) ? $data['httpsStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getServiceAreaAllowableValues();
                if (!is_null($this->container['serviceArea']) && !in_array($this->container['serviceArea'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceArea', must be one of '%s'",
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
    * Gets id
    *  加速域名ID。
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
    * @param string|null $id 加速域名ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainName
    *  加速域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 加速域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets businessType
    *  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets domainStatus
    *  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    *
    * @return string|null
    */
    public function getDomainStatus()
    {
        return $this->container['domainStatus'];
    }

    /**
    * Sets domainStatus
    *
    * @param string|null $domainStatus 加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    *
    * @return $this
    */
    public function setDomainStatus($domainStatus)
    {
        $this->container['domainStatus'] = $domainStatus;
        return $this;
    }

    /**
    * Gets cname
    *  加速域名对应的CNAME。
    *
    * @return string|null
    */
    public function getCname()
    {
        return $this->container['cname'];
    }

    /**
    * Sets cname
    *
    * @param string|null $cname 加速域名对应的CNAME。
    *
    * @return $this
    */
    public function setCname($cname)
    {
        $this->container['cname'] = $cname;
        return $this;
    }

    /**
    * Gets sources
    *  源站配置。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\SourcesDomainConfig[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\SourcesDomainConfig[]|null $sources 源站配置。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets httpsStatus
    *  是否开启HTTPS加速。 0：代表未开启HTTPS加速； 1：代表开启HTTPS加速，且回源方式为协议跟随； 2：代表开启HTTPS加速，且回源方式为HTTP； 3：代表开启HTTPS加速，且回源方式为HTTPS。
    *
    * @return int|null
    */
    public function getHttpsStatus()
    {
        return $this->container['httpsStatus'];
    }

    /**
    * Sets httpsStatus
    *
    * @param int|null $httpsStatus 是否开启HTTPS加速。 0：代表未开启HTTPS加速； 1：代表开启HTTPS加速，且回源方式为协议跟随； 2：代表开启HTTPS加速，且回源方式为HTTP； 3：代表开启HTTPS加速，且回源方式为HTTPS。
    *
    * @return $this
    */
    public function setHttpsStatus($httpsStatus)
    {
        $this->container['httpsStatus'] = $httpsStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets disabled
    *  封禁状态（0代表未禁用；1代表禁用）。
    *
    * @return int|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param int|null $disabled 封禁状态（0代表未禁用；1代表禁用）。
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets locked
    *  锁定状态（0代表未锁定；1代表锁定）。
    *
    * @return int|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param int|null $locked 锁定状态（0代表未锁定；1代表锁定）。
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets serviceArea
    *  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    *
    * @return string|null
    */
    public function getServiceArea()
    {
        return $this->container['serviceArea'];
    }

    /**
    * Sets serviceArea
    *
    * @param string|null $serviceArea 华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
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

