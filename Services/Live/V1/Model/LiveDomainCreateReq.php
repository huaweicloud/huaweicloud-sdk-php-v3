<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveDomainCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveDomainCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * region  直播所属的直播中心
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球加速区域
    * enterpriseProjectId  企业项目ID
    * pullProtocol  域名支持的拉流协议；仅domain_type为pull时生效。若不填写此字段，视为默认支持FLV、RTMP拉流协议 - flv_rtmp表示支持FLV、RTMP协议 - hls表示支持HLS协议
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'domainType' => 'string',
            'region' => 'string',
            'serviceArea' => 'string',
            'enterpriseProjectId' => 'string',
            'pullProtocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * region  直播所属的直播中心
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球加速区域
    * enterpriseProjectId  企业项目ID
    * pullProtocol  域名支持的拉流协议；仅domain_type为pull时生效。若不填写此字段，视为默认支持FLV、RTMP拉流协议 - flv_rtmp表示支持FLV、RTMP协议 - hls表示支持HLS协议
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'domainType' => null,
        'region' => null,
        'serviceArea' => null,
        'enterpriseProjectId' => null,
        'pullProtocol' => null
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
    * region  直播所属的直播中心
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球加速区域
    * enterpriseProjectId  企业项目ID
    * pullProtocol  域名支持的拉流协议；仅domain_type为pull时生效。若不填写此字段，视为默认支持FLV、RTMP拉流协议 - flv_rtmp表示支持FLV、RTMP协议 - hls表示支持HLS协议
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'domainType' => 'domain_type',
            'region' => 'region',
            'serviceArea' => 'service_area',
            'enterpriseProjectId' => 'enterprise_project_id',
            'pullProtocol' => 'pull_protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * region  直播所属的直播中心
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球加速区域
    * enterpriseProjectId  企业项目ID
    * pullProtocol  域名支持的拉流协议；仅domain_type为pull时生效。若不填写此字段，视为默认支持FLV、RTMP拉流协议 - flv_rtmp表示支持FLV、RTMP协议 - hls表示支持HLS协议
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'domainType' => 'setDomainType',
            'region' => 'setRegion',
            'serviceArea' => 'setServiceArea',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'pullProtocol' => 'setPullProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播域名
    * domainType  域名类型 - pull表示播放域名 - push表示推流域名
    * region  直播所属的直播中心
    * serviceArea  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球加速区域
    * enterpriseProjectId  企业项目ID
    * pullProtocol  域名支持的拉流协议；仅domain_type为pull时生效。若不填写此字段，视为默认支持FLV、RTMP拉流协议 - flv_rtmp表示支持FLV、RTMP协议 - hls表示支持HLS协议
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'domainType' => 'getDomainType',
            'region' => 'getRegion',
            'serviceArea' => 'getServiceArea',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'pullProtocol' => 'getPullProtocol'
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
    const SERVICE_AREA_MAINLAND_CHINA = 'mainland_china';
    const SERVICE_AREA_OUTSIDE_MAINLAND_CHINA = 'outside_mainland_china';
    const SERVICE_AREA__GLOBAL = 'global';
    const PULL_PROTOCOL_FLV_RTMP = 'flv_rtmp';
    const PULL_PROTOCOL_HLS = 'hls';
    

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
    public function getServiceAreaAllowableValues()
    {
        return [
            self::SERVICE_AREA_MAINLAND_CHINA,
            self::SERVICE_AREA_OUTSIDE_MAINLAND_CHINA,
            self::SERVICE_AREA__GLOBAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPullProtocolAllowableValues()
    {
        return [
            self::PULL_PROTOCOL_FLV_RTMP,
            self::PULL_PROTOCOL_HLS,
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['pullProtocol'] = isset($data['pullProtocol']) ? $data['pullProtocol'] : null;
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

        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getServiceAreaAllowableValues();
                if (!is_null($this->container['serviceArea']) && !in_array($this->container['serviceArea'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceArea', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPullProtocolAllowableValues();
                if (!is_null($this->container['pullProtocol']) && !in_array($this->container['pullProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pullProtocol', must be one of '%s'",
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
    *  域名类型 - pull表示播放域名 - push表示推流域名
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
    * @param string $domainType 域名类型 - pull表示播放域名 - push表示推流域名
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets region
    *  直播所属的直播中心
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
    * @param string $region 直播所属的直播中心
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets serviceArea
    *  域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球加速区域
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
    * @param string|null $serviceArea 域名应用区域 - mainland_china表示中国大陆区域 - outside_mainland_china表示中国大陆以外区域 - global表示全球加速区域
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets pullProtocol
    *  域名支持的拉流协议；仅domain_type为pull时生效。若不填写此字段，视为默认支持FLV、RTMP拉流协议 - flv_rtmp表示支持FLV、RTMP协议 - hls表示支持HLS协议
    *
    * @return string|null
    */
    public function getPullProtocol()
    {
        return $this->container['pullProtocol'];
    }

    /**
    * Sets pullProtocol
    *
    * @param string|null $pullProtocol 域名支持的拉流协议；仅domain_type为pull时生效。若不填写此字段，视为默认支持FLV、RTMP拉流协议 - flv_rtmp表示支持FLV、RTMP协议 - hls表示支持HLS协议
    *
    * @return $this
    */
    public function setPullProtocol($pullProtocol)
    {
        $this->container['pullProtocol'] = $pullProtocol;
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

