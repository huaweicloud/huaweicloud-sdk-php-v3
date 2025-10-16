<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  加速域名。（ 由字母（A-Z，a-z，大小写等价）、数字（0-9）和连接符（-）组成，各级域名之间用（.）连接，域名长度不超过75个字符。连接符（-）不能作为域名的开头或结尾字符。）
    * businessType  域名业务类型，若为web，则表示类型为网页加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示业务类型为全站加速。
    * sources  源站配置。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示添加加速域名到该企业项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'businessType' => 'string',
            'sources' => '\HuaweiCloud\SDK\Cdn\V2\Model\SourcesRequestBody[]',
            'serviceArea' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  加速域名。（ 由字母（A-Z，a-z，大小写等价）、数字（0-9）和连接符（-）组成，各级域名之间用（.）连接，域名长度不超过75个字符。连接符（-）不能作为域名的开头或结尾字符。）
    * businessType  域名业务类型，若为web，则表示类型为网页加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示业务类型为全站加速。
    * sources  源站配置。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示添加加速域名到该企业项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'businessType' => null,
        'sources' => null,
        'serviceArea' => null,
        'enterpriseProjectId' => null
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
    * domainName  加速域名。（ 由字母（A-Z，a-z，大小写等价）、数字（0-9）和连接符（-）组成，各级域名之间用（.）连接，域名长度不超过75个字符。连接符（-）不能作为域名的开头或结尾字符。）
    * businessType  域名业务类型，若为web，则表示类型为网页加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示业务类型为全站加速。
    * sources  源站配置。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示添加加速域名到该企业项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'businessType' => 'business_type',
            'sources' => 'sources',
            'serviceArea' => 'service_area',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  加速域名。（ 由字母（A-Z，a-z，大小写等价）、数字（0-9）和连接符（-）组成，各级域名之间用（.）连接，域名长度不超过75个字符。连接符（-）不能作为域名的开头或结尾字符。）
    * businessType  域名业务类型，若为web，则表示类型为网页加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示业务类型为全站加速。
    * sources  源站配置。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示添加加速域名到该企业项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'businessType' => 'setBusinessType',
            'sources' => 'setSources',
            'serviceArea' => 'setServiceArea',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  加速域名。（ 由字母（A-Z，a-z，大小写等价）、数字（0-9）和连接符（-）组成，各级域名之间用（.）连接，域名长度不超过75个字符。连接符（-）不能作为域名的开头或结尾字符。）
    * businessType  域名业务类型，若为web，则表示类型为网页加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示业务类型为全站加速。
    * sources  源站配置。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示添加加速域名到该企业项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'businessType' => 'getBusinessType',
            'sources' => 'getSources',
            'serviceArea' => 'getServiceArea',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const BUSINESS_TYPE_WEB = 'web';
    const BUSINESS_TYPE_DOWNLOAD = 'download';
    const BUSINESS_TYPE_VIDEO = 'video';
    const BUSINESS_TYPE_WHOLE_SITE = 'wholeSite';
    const SERVICE_AREA_MAINLAND_CHINA = 'mainland_china';
    const SERVICE_AREA_OUTSIDE_MAINLAND_CHINA = 'outside_mainland_china';
    const SERVICE_AREA__GLOBAL = 'global';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBusinessTypeAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_WEB,
            self::BUSINESS_TYPE_DOWNLOAD,
            self::BUSINESS_TYPE_VIDEO,
            self::BUSINESS_TYPE_WHOLE_SITE,
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 75)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 75.";
            }
        if ($this->container['businessType'] === null) {
            $invalidProperties[] = "'businessType' can't be null";
        }
            $allowedValues = $this->getBusinessTypeAllowableValues();
                if (!is_null($this->container['businessType']) && !in_array($this->container['businessType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'businessType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sources'] === null) {
            $invalidProperties[] = "'sources' can't be null";
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
    * Gets domainName
    *  加速域名。（ 由字母（A-Z，a-z，大小写等价）、数字（0-9）和连接符（-）组成，各级域名之间用（.）连接，域名长度不超过75个字符。连接符（-）不能作为域名的开头或结尾字符。）
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 加速域名。（ 由字母（A-Z，a-z，大小写等价）、数字（0-9）和连接符（-）组成，各级域名之间用（.）连接，域名长度不超过75个字符。连接符（-）不能作为域名的开头或结尾字符。）
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
    *  域名业务类型，若为web，则表示类型为网页加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示业务类型为全站加速。
    *
    * @return string
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string $businessType 域名业务类型，若为web，则表示类型为网页加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示业务类型为全站加速。
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets sources
    *  源站配置。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\SourcesRequestBody[]
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\SourcesRequestBody[] $sources 源站配置。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets serviceArea
    *  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
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
    * @param string|null $serviceArea 域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
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
    *  当用户开启企业项目功能时，该参数生效，表示添加加速域名到该企业项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
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
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示添加加速域名到该企业项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

