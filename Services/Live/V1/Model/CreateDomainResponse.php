<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDomainResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDomainResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CNAME
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * statusDescribe  状态描述
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球区域
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'domainType' => 'string',
            'domainCname' => 'string',
            'region' => 'string',
            'status' => 'string',
            'createTime' => '\DateTime',
            'statusDescribe' => 'string',
            'serviceArea' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CNAME
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * statusDescribe  状态描述
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球区域
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'domainType' => null,
        'domainCname' => null,
        'region' => null,
        'status' => null,
        'createTime' => 'date-time',
        'statusDescribe' => null,
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
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CNAME
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * statusDescribe  状态描述
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球区域
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'domainType' => 'domain_type',
            'domainCname' => 'domain_cname',
            'region' => 'region',
            'status' => 'status',
            'createTime' => 'create_time',
            'statusDescribe' => 'status_describe',
            'serviceArea' => 'service_area'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CNAME
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * statusDescribe  状态描述
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球区域
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'domainType' => 'setDomainType',
            'domainCname' => 'setDomainCname',
            'region' => 'setRegion',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'statusDescribe' => 'setStatusDescribe',
            'serviceArea' => 'setServiceArea'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CNAME
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * statusDescribe  状态描述
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球区域
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'domainType' => 'getDomainType',
            'domainCname' => 'getDomainCname',
            'region' => 'getRegion',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'statusDescribe' => 'getStatusDescribe',
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
    const DOMAIN_TYPE_PULL = 'pull';
    const DOMAIN_TYPE_PUSH = 'push';
    const STATUS_ON = 'on';
    const STATUS_OFF = 'off';
    const STATUS_CONFIGURING = 'configuring';
    const STATUS_DISABLE = 'disable';
    const SERVICE_AREA_MAINLAND_CHINA = 'mainland_china';
    const SERVICE_AREA_OUTSIDE_MAINLAND_CHINA = 'outside_mainland_china';
    const SERVICE_AREA__GLOBAL = 'global';
    

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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ON,
            self::STATUS_OFF,
            self::STATUS_CONFIGURING,
            self::STATUS_DISABLE,
        ];
    }

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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['domainCname'] = isset($data['domainCname']) ? $data['domainCname'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['statusDescribe'] = isset($data['statusDescribe']) ? $data['statusDescribe'] : null;
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
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDomainTypeAllowableValues();
                if (!is_null($this->container['domainType']) && !in_array($this->container['domainType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'domainType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['statusDescribe']) && (mb_strlen($this->container['statusDescribe']) > 256)) {
                $invalidProperties[] = "invalid value for 'statusDescribe', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['statusDescribe']) && (mb_strlen($this->container['statusDescribe']) < 0)) {
                $invalidProperties[] = "invalid value for 'statusDescribe', the character length must be bigger than or equal to 0.";
            }
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
    * Gets domain
    *  直播域名
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
    * @param string|null $domain 直播域名
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
    *  域名类型 - pull表示播放域名 - push表示推流域名
    *
    * @return string|null
    */
    public function getDomainType()
    {
        return $this->container['domainType'];
    }

    /**
    * Sets domainType
    *
    * @param string|null $domainType 域名类型 - pull表示播放域名 - push表示推流域名
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets domainCname
    *  直播域名的CNAME
    *
    * @return string|null
    */
    public function getDomainCname()
    {
        return $this->container['domainCname'];
    }

    /**
    * Sets domainCname
    *
    * @param string|null $domainCname 直播域名的CNAME
    *
    * @return $this
    */
    public function setDomainCname($domainCname)
    {
        $this->container['domainCname'] = $domainCname;
        return $this;
    }

    /**
    * Gets region
    *  直播所属直播中心
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 直播所属直播中心
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets status
    *  直播域名的状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 直播域名的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets statusDescribe
    *  状态描述
    *
    * @return string|null
    */
    public function getStatusDescribe()
    {
        return $this->container['statusDescribe'];
    }

    /**
    * Sets statusDescribe
    *
    * @param string|null $statusDescribe 状态描述
    *
    * @return $this
    */
    public function setStatusDescribe($statusDescribe)
    {
        $this->container['statusDescribe'] = $statusDescribe;
        return $this;
    }

    /**
    * Gets serviceArea
    *  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球区域
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
    * @param string|null $serviceArea 域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球区域
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

