<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDomainsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDomainsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  加速域名，采用模糊匹配的方式。（长度限制为1-255字符）。
    * businessType  加速域名的业务类型。取值： - web（网站加速） - download（文件下载加速） - video（点播加速） - wholeSite（全站加速）
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * serviceArea  华为云CDN提供的加速服务范围，包含： - mainland_china 中国大陆 - outside_mainland_china 中国大陆境外 - global 全球。
    * pageSize  每页加速域名的数量，取值范围1-10000，不设值时默认值为30。
    * pageNumber  查询的页码，即：从哪一页开始查询。取值范围1-65535，不设值时默认值为1。
    * showTags  展示标签标识 true：不展示 false：展示。
    * exactMatch  精准匹配 on：开启 off：关闭。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'businessType' => 'string',
            'domainStatus' => 'string',
            'serviceArea' => 'string',
            'pageSize' => 'int',
            'pageNumber' => 'int',
            'showTags' => 'bool',
            'exactMatch' => 'bool',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  加速域名，采用模糊匹配的方式。（长度限制为1-255字符）。
    * businessType  加速域名的业务类型。取值： - web（网站加速） - download（文件下载加速） - video（点播加速） - wholeSite（全站加速）
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * serviceArea  华为云CDN提供的加速服务范围，包含： - mainland_china 中国大陆 - outside_mainland_china 中国大陆境外 - global 全球。
    * pageSize  每页加速域名的数量，取值范围1-10000，不设值时默认值为30。
    * pageNumber  查询的页码，即：从哪一页开始查询。取值范围1-65535，不设值时默认值为1。
    * showTags  展示标签标识 true：不展示 false：展示。
    * exactMatch  精准匹配 on：开启 off：关闭。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'businessType' => null,
        'domainStatus' => null,
        'serviceArea' => null,
        'pageSize' => null,
        'pageNumber' => null,
        'showTags' => null,
        'exactMatch' => null,
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
    * domainName  加速域名，采用模糊匹配的方式。（长度限制为1-255字符）。
    * businessType  加速域名的业务类型。取值： - web（网站加速） - download（文件下载加速） - video（点播加速） - wholeSite（全站加速）
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * serviceArea  华为云CDN提供的加速服务范围，包含： - mainland_china 中国大陆 - outside_mainland_china 中国大陆境外 - global 全球。
    * pageSize  每页加速域名的数量，取值范围1-10000，不设值时默认值为30。
    * pageNumber  查询的页码，即：从哪一页开始查询。取值范围1-65535，不设值时默认值为1。
    * showTags  展示标签标识 true：不展示 false：展示。
    * exactMatch  精准匹配 on：开启 off：关闭。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'businessType' => 'business_type',
            'domainStatus' => 'domain_status',
            'serviceArea' => 'service_area',
            'pageSize' => 'page_size',
            'pageNumber' => 'page_number',
            'showTags' => 'show_tags',
            'exactMatch' => 'exact_match',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  加速域名，采用模糊匹配的方式。（长度限制为1-255字符）。
    * businessType  加速域名的业务类型。取值： - web（网站加速） - download（文件下载加速） - video（点播加速） - wholeSite（全站加速）
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * serviceArea  华为云CDN提供的加速服务范围，包含： - mainland_china 中国大陆 - outside_mainland_china 中国大陆境外 - global 全球。
    * pageSize  每页加速域名的数量，取值范围1-10000，不设值时默认值为30。
    * pageNumber  查询的页码，即：从哪一页开始查询。取值范围1-65535，不设值时默认值为1。
    * showTags  展示标签标识 true：不展示 false：展示。
    * exactMatch  精准匹配 on：开启 off：关闭。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'businessType' => 'setBusinessType',
            'domainStatus' => 'setDomainStatus',
            'serviceArea' => 'setServiceArea',
            'pageSize' => 'setPageSize',
            'pageNumber' => 'setPageNumber',
            'showTags' => 'setShowTags',
            'exactMatch' => 'setExactMatch',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  加速域名，采用模糊匹配的方式。（长度限制为1-255字符）。
    * businessType  加速域名的业务类型。取值： - web（网站加速） - download（文件下载加速） - video（点播加速） - wholeSite（全站加速）
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * serviceArea  华为云CDN提供的加速服务范围，包含： - mainland_china 中国大陆 - outside_mainland_china 中国大陆境外 - global 全球。
    * pageSize  每页加速域名的数量，取值范围1-10000，不设值时默认值为30。
    * pageNumber  查询的页码，即：从哪一页开始查询。取值范围1-65535，不设值时默认值为1。
    * showTags  展示标签标识 true：不展示 false：展示。
    * exactMatch  精准匹配 on：开启 off：关闭。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'businessType' => 'getBusinessType',
            'domainStatus' => 'getDomainStatus',
            'serviceArea' => 'getServiceArea',
            'pageSize' => 'getPageSize',
            'pageNumber' => 'getPageNumber',
            'showTags' => 'getShowTags',
            'exactMatch' => 'getExactMatch',
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
    const DOMAIN_STATUS_ONLINE = 'online';
    const DOMAIN_STATUS_OFFLINE = 'offline';
    const DOMAIN_STATUS_CONFIGURING = 'configuring';
    const DOMAIN_STATUS_CONFIGURE_FAILED = 'configure_failed';
    const DOMAIN_STATUS_CHECKING = 'checking';
    const DOMAIN_STATUS_CHECK_FAILED = 'check_failed';
    const DOMAIN_STATUS_DELETING = 'deleting';
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
    public function getDomainStatusAllowableValues()
    {
        return [
            self::DOMAIN_STATUS_ONLINE,
            self::DOMAIN_STATUS_OFFLINE,
            self::DOMAIN_STATUS_CONFIGURING,
            self::DOMAIN_STATUS_CONFIGURE_FAILED,
            self::DOMAIN_STATUS_CHECKING,
            self::DOMAIN_STATUS_CHECK_FAILED,
            self::DOMAIN_STATUS_DELETING,
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
        $this->container['domainStatus'] = isset($data['domainStatus']) ? $data['domainStatus'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['showTags'] = isset($data['showTags']) ? $data['showTags'] : null;
        $this->container['exactMatch'] = isset($data['exactMatch']) ? $data['exactMatch'] : null;
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
            $allowedValues = $this->getBusinessTypeAllowableValues();
                if (!is_null($this->container['businessType']) && !in_array($this->container['businessType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'businessType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDomainStatusAllowableValues();
                if (!is_null($this->container['domainStatus']) && !in_array($this->container['domainStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'domainStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getServiceAreaAllowableValues();
                if (!is_null($this->container['serviceArea']) && !in_array($this->container['serviceArea'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceArea', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 10000)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageNumber']) && ($this->container['pageNumber'] > 65535)) {
                $invalidProperties[] = "invalid value for 'pageNumber', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['pageNumber']) && ($this->container['pageNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNumber', must be bigger than or equal to 1.";
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
    *  加速域名，采用模糊匹配的方式。（长度限制为1-255字符）。
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
    * @param string|null $domainName 加速域名，采用模糊匹配的方式。（长度限制为1-255字符）。
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
    *  加速域名的业务类型。取值： - web（网站加速） - download（文件下载加速） - video（点播加速） - wholeSite（全站加速）
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
    * @param string|null $businessType 加速域名的业务类型。取值： - web（网站加速） - download（文件下载加速） - video（点播加速） - wholeSite（全站加速）
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
    * Gets serviceArea
    *  华为云CDN提供的加速服务范围，包含： - mainland_china 中国大陆 - outside_mainland_china 中国大陆境外 - global 全球。
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
    * @param string|null $serviceArea 华为云CDN提供的加速服务范围，包含： - mainland_china 中国大陆 - outside_mainland_china 中国大陆境外 - global 全球。
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页加速域名的数量，取值范围1-10000，不设值时默认值为30。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页加速域名的数量，取值范围1-10000，不设值时默认值为30。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNumber
    *  查询的页码，即：从哪一页开始查询。取值范围1-65535，不设值时默认值为1。
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 查询的页码，即：从哪一页开始查询。取值范围1-65535，不设值时默认值为1。
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets showTags
    *  展示标签标识 true：不展示 false：展示。
    *
    * @return bool|null
    */
    public function getShowTags()
    {
        return $this->container['showTags'];
    }

    /**
    * Sets showTags
    *
    * @param bool|null $showTags 展示标签标识 true：不展示 false：展示。
    *
    * @return $this
    */
    public function setShowTags($showTags)
    {
        $this->container['showTags'] = $showTags;
        return $this;
    }

    /**
    * Gets exactMatch
    *  精准匹配 on：开启 off：关闭。
    *
    * @return bool|null
    */
    public function getExactMatch()
    {
        return $this->container['exactMatch'];
    }

    /**
    * Sets exactMatch
    *
    * @param bool|null $exactMatch 精准匹配 on：开启 off：关闭。
    *
    * @return $this
    */
    public function setExactMatch($exactMatch)
    {
        $this->container['exactMatch'] = $exactMatch;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
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
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
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

