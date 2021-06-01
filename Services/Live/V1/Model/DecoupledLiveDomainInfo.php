<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DecoupledLiveDomainInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DecoupledLiveDomainInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型
    * vendor  CDN厂商
    * region  直播所属直播中心
    * domainCname  直播域名的CName
    * status  直播域名的状态
    * relatedDomain  播放域名关联的推流域名（只有domain_type为pull的时候有效）
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'domainType' => 'string',
            'vendor' => 'string',
            'region' => 'string',
            'domainCname' => 'string',
            'status' => 'string',
            'relatedDomain' => 'string',
            'createTime' => '\DateTime',
            'domainSource' => '\HuaweiCloud\SDK\Live\V1\Model\DomainSourceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型
    * vendor  CDN厂商
    * region  直播所属直播中心
    * domainCname  直播域名的CName
    * status  直播域名的状态
    * relatedDomain  播放域名关联的推流域名（只有domain_type为pull的时候有效）
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'domainType' => null,
        'vendor' => null,
        'region' => null,
        'domainCname' => null,
        'status' => null,
        'relatedDomain' => null,
        'createTime' => 'date-time',
        'domainSource' => null
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
    * domain  直播域名
    * domainType  域名类型
    * vendor  CDN厂商
    * region  直播所属直播中心
    * domainCname  直播域名的CName
    * status  直播域名的状态
    * relatedDomain  播放域名关联的推流域名（只有domain_type为pull的时候有效）
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'domainType' => 'domain_type',
            'vendor' => 'vendor',
            'region' => 'region',
            'domainCname' => 'domain_cname',
            'status' => 'status',
            'relatedDomain' => 'related_domain',
            'createTime' => 'create_time',
            'domainSource' => 'domain_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播域名
    * domainType  域名类型
    * vendor  CDN厂商
    * region  直播所属直播中心
    * domainCname  直播域名的CName
    * status  直播域名的状态
    * relatedDomain  播放域名关联的推流域名（只有domain_type为pull的时候有效）
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'domainType' => 'setDomainType',
            'vendor' => 'setVendor',
            'region' => 'setRegion',
            'domainCname' => 'setDomainCname',
            'status' => 'setStatus',
            'relatedDomain' => 'setRelatedDomain',
            'createTime' => 'setCreateTime',
            'domainSource' => 'setDomainSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播域名
    * domainType  域名类型
    * vendor  CDN厂商
    * region  直播所属直播中心
    * domainCname  直播域名的CName
    * status  直播域名的状态
    * relatedDomain  播放域名关联的推流域名（只有domain_type为pull的时候有效）
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'domainType' => 'getDomainType',
            'vendor' => 'getVendor',
            'region' => 'getRegion',
            'domainCname' => 'getDomainCname',
            'status' => 'getStatus',
            'relatedDomain' => 'getRelatedDomain',
            'createTime' => 'getCreateTime',
            'domainSource' => 'getDomainSource'
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
    const DOMAIN_TYPE_PULL = 'pull';
    const DOMAIN_TYPE_PUSH = 'push';
    const VENDOR_CHINA_NET_CENTER = 'ChinaNetCenter';
    const VENDOR_KING_SOFT = 'KingSoft';
    const VENDOR_TENCENT = 'Tencent';
    const VENDOR_U_CDN = 'uCDN';
    const VENDOR_TENCENT_OUTSIDE = 'TencentOutside';
    const VENDOR_DNION = 'Dnion';
    const VENDOR_BAISHAN = 'Baishan';
    const VENDOR_BAIDU = 'Baidu';
    const VENDOR_ONETHING = 'Onething';
    const STATUS_ON = 'on';
    const STATUS_OFF = 'off';
    const STATUS_CONFIGURING = 'configuring';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDomainTypeAllowableValues()
    {
        return [
            self::DOMAIN_TYPE_PULL,
            self::DOMAIN_TYPE_PUSH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVendorAllowableValues()
    {
        return [
            self::VENDOR_CHINA_NET_CENTER,
            self::VENDOR_KING_SOFT,
            self::VENDOR_TENCENT,
            self::VENDOR_U_CDN,
            self::VENDOR_TENCENT_OUTSIDE,
            self::VENDOR_DNION,
            self::VENDOR_BAISHAN,
            self::VENDOR_BAIDU,
            self::VENDOR_ONETHING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ON,
            self::STATUS_OFF,
            self::STATUS_CONFIGURING,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['domainCname'] = isset($data['domainCname']) ? $data['domainCname'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['relatedDomain'] = isset($data['relatedDomain']) ? $data['relatedDomain'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['domainSource'] = isset($data['domainSource']) ? $data['domainSource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domainType'] === null) {
            $invalidProperties[] = "'domainType' can't be null";
        }
            $allowedValues = $this->getDomainTypeAllowableValues();
                if (!is_null($this->container['domainType']) && !in_array($this->container['domainType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'domainType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
            $allowedValues = $this->getVendorAllowableValues();
                if (!is_null($this->container['vendor']) && !in_array($this->container['vendor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vendor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['domainCname'] === null) {
            $invalidProperties[] = "'domainCname' can't be null";
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

        if ($this->container['relatedDomain'] === null) {
            $invalidProperties[] = "'relatedDomain' can't be null";
        }
            if ((mb_strlen($this->container['relatedDomain']) > 64)) {
                $invalidProperties[] = "invalid value for 'relatedDomain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['relatedDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['domainSource'] === null) {
            $invalidProperties[] = "'domainSource' can't be null";
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
    * Gets domain
    *  直播域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 直播域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets domainType
    *  域名类型
    *
    * @return string
    */
    public function getDomainType()
    {
        return $this->container['domainType'];
    }

    /**
    * Sets domainType
    *
    * @param string $domainType 域名类型
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets vendor
    *  CDN厂商
    *
    * @return string
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string $vendor CDN厂商
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets region
    *  直播所属直播中心
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 直播所属直播中心
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets domainCname
    *  直播域名的CName
    *
    * @return string
    */
    public function getDomainCname()
    {
        return $this->container['domainCname'];
    }

    /**
    * Sets domainCname
    *
    * @param string $domainCname 直播域名的CName
    *
    * @return $this
    */
    public function setDomainCname($domainCname)
    {
        $this->container['domainCname'] = $domainCname;
        return $this;
    }

    /**
    * Gets status
    *  直播域名的状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 直播域名的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets relatedDomain
    *  播放域名关联的推流域名（只有domain_type为pull的时候有效）
    *
    * @return string
    */
    public function getRelatedDomain()
    {
        return $this->container['relatedDomain'];
    }

    /**
    * Sets relatedDomain
    *
    * @param string $relatedDomain 播放域名关联的推流域名（只有domain_type为pull的时候有效）
    *
    * @return $this
    */
    public function setRelatedDomain($relatedDomain)
    {
        $this->container['relatedDomain'] = $relatedDomain;
        return $this;
    }

    /**
    * Gets createTime
    *  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    *
    * @return \DateTime
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime $createTime 域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets domainSource
    *  domainSource
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\DomainSourceInfo
    */
    public function getDomainSource()
    {
        return $this->container['domainSource'];
    }

    /**
    * Sets domainSource
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\DomainSourceInfo $domainSource domainSource
    *
    * @return $this
    */
    public function setDomainSource($domainSource)
    {
        $this->container['domainSource'] = $domainSource;
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

