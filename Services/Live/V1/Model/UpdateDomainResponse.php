<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDomainResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDomainResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CName
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
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
            'domainSource' => '\HuaweiCloud\SDK\Live\V1\Model\DomainSourceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CName
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
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
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CName
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
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
            'domainSource' => 'domain_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CName
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
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
            'domainSource' => 'setDomainSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * domainCname  直播域名的CName
    * region  直播所属直播中心
    * status  直播域名的状态
    * createTime  域名创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间
    * domainSource  domainSource
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
        $this->container['domainCname'] = isset($data['domainCname']) ? $data['domainCname'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    *  直播域名的CName
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
    * @param string|null $domainCname 直播域名的CName
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
    * Gets domainSource
    *  domainSource
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\DomainSourceInfo|null
    */
    public function getDomainSource()
    {
        return $this->container['domainSource'];
    }

    /**
    * Sets domainSource
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\DomainSourceInfo|null $domainSource domainSource
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

