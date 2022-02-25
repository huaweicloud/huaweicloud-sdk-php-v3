<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainsWithPort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainsWithPort';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”
    * cname  加速域名对应的CNAME。
    * sources  源站域名或源站IP，源站为IP类型时，仅支持IPv4，如需传入多个源站IP，以多个源站对象传入，除IP其他参数请保持一致，主源站最多支持15个源站IP对象，备源站最多支持15个源站IP对象；源站为域名类型时仅支持1个源站对象。不支持IP源站和域名源站混用。
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    * rangeStatus  Range回源状态。
    * followStatus  回源跟随状态。
    * originStatus  是否暂停源站回源。
    * bannedReason  域名禁用原因
    * lockedReason  域名锁定原因
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainName' => 'string',
            'businessType' => 'string',
            'userDomainId' => 'string',
            'domainStatus' => 'string',
            'cname' => 'string',
            'sources' => '\HuaweiCloud\SDK\Cdn\V1\Model\SourceWithPort[]',
            'domainOriginHost' => '\HuaweiCloud\SDK\Cdn\V1\Model\DomainOriginHost',
            'httpsStatus' => 'int',
            'createTime' => 'int',
            'modifyTime' => 'int',
            'disabled' => 'int',
            'locked' => 'int',
            'autoRefreshPreheat' => 'int',
            'serviceArea' => 'string',
            'rangeStatus' => 'string',
            'followStatus' => 'string',
            'originStatus' => 'string',
            'bannedReason' => 'string',
            'lockedReason' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”
    * cname  加速域名对应的CNAME。
    * sources  源站域名或源站IP，源站为IP类型时，仅支持IPv4，如需传入多个源站IP，以多个源站对象传入，除IP其他参数请保持一致，主源站最多支持15个源站IP对象，备源站最多支持15个源站IP对象；源站为域名类型时仅支持1个源站对象。不支持IP源站和域名源站混用。
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    * rangeStatus  Range回源状态。
    * followStatus  回源跟随状态。
    * originStatus  是否暂停源站回源。
    * bannedReason  域名禁用原因
    * lockedReason  域名锁定原因
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainName' => null,
        'businessType' => null,
        'userDomainId' => null,
        'domainStatus' => null,
        'cname' => null,
        'sources' => null,
        'domainOriginHost' => null,
        'httpsStatus' => 'int32',
        'createTime' => 'int64',
        'modifyTime' => 'int64',
        'disabled' => 'int32',
        'locked' => 'int32',
        'autoRefreshPreheat' => 'int32',
        'serviceArea' => null,
        'rangeStatus' => null,
        'followStatus' => null,
        'originStatus' => null,
        'bannedReason' => null,
        'lockedReason' => null,
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
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”
    * cname  加速域名对应的CNAME。
    * sources  源站域名或源站IP，源站为IP类型时，仅支持IPv4，如需传入多个源站IP，以多个源站对象传入，除IP其他参数请保持一致，主源站最多支持15个源站IP对象，备源站最多支持15个源站IP对象；源站为域名类型时仅支持1个源站对象。不支持IP源站和域名源站混用。
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    * rangeStatus  Range回源状态。
    * followStatus  回源跟随状态。
    * originStatus  是否暂停源站回源。
    * bannedReason  域名禁用原因
    * lockedReason  域名锁定原因
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainName' => 'domain_name',
            'businessType' => 'business_type',
            'userDomainId' => 'user_domain_id',
            'domainStatus' => 'domain_status',
            'cname' => 'cname',
            'sources' => 'sources',
            'domainOriginHost' => 'domain_origin_host',
            'httpsStatus' => 'https_status',
            'createTime' => 'create_time',
            'modifyTime' => 'modify_time',
            'disabled' => 'disabled',
            'locked' => 'locked',
            'autoRefreshPreheat' => 'auto_refresh_preheat',
            'serviceArea' => 'service_area',
            'rangeStatus' => 'range_status',
            'followStatus' => 'follow_status',
            'originStatus' => 'origin_status',
            'bannedReason' => 'banned_reason',
            'lockedReason' => 'locked_reason',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”
    * cname  加速域名对应的CNAME。
    * sources  源站域名或源站IP，源站为IP类型时，仅支持IPv4，如需传入多个源站IP，以多个源站对象传入，除IP其他参数请保持一致，主源站最多支持15个源站IP对象，备源站最多支持15个源站IP对象；源站为域名类型时仅支持1个源站对象。不支持IP源站和域名源站混用。
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    * rangeStatus  Range回源状态。
    * followStatus  回源跟随状态。
    * originStatus  是否暂停源站回源。
    * bannedReason  域名禁用原因
    * lockedReason  域名锁定原因
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainName' => 'setDomainName',
            'businessType' => 'setBusinessType',
            'userDomainId' => 'setUserDomainId',
            'domainStatus' => 'setDomainStatus',
            'cname' => 'setCname',
            'sources' => 'setSources',
            'domainOriginHost' => 'setDomainOriginHost',
            'httpsStatus' => 'setHttpsStatus',
            'createTime' => 'setCreateTime',
            'modifyTime' => 'setModifyTime',
            'disabled' => 'setDisabled',
            'locked' => 'setLocked',
            'autoRefreshPreheat' => 'setAutoRefreshPreheat',
            'serviceArea' => 'setServiceArea',
            'rangeStatus' => 'setRangeStatus',
            'followStatus' => 'setFollowStatus',
            'originStatus' => 'setOriginStatus',
            'bannedReason' => 'setBannedReason',
            'lockedReason' => 'setLockedReason',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型，若为web，则表示类型为网站加速；若为download，则表示业务类型为文件下载加速；若为video，则表示业务类型为点播加速；若为wholeSite，则表示类型为全站加速。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”
    * cname  加速域名对应的CNAME。
    * sources  源站域名或源站IP，源站为IP类型时，仅支持IPv4，如需传入多个源站IP，以多个源站对象传入，除IP其他参数请保持一致，主源站最多支持15个源站IP对象，备源站最多支持15个源站IP对象；源站为域名类型时仅支持1个源站对象。不支持IP源站和域名源站混用。
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    * serviceArea  华为云CDN提供的加速服务范围，包含：mainland_china中国大陆、outside_mainland_china中国大陆境外、global全球。
    * rangeStatus  Range回源状态。
    * followStatus  回源跟随状态。
    * originStatus  是否暂停源站回源。
    * bannedReason  域名禁用原因
    * lockedReason  域名锁定原因
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainName' => 'getDomainName',
            'businessType' => 'getBusinessType',
            'userDomainId' => 'getUserDomainId',
            'domainStatus' => 'getDomainStatus',
            'cname' => 'getCname',
            'sources' => 'getSources',
            'domainOriginHost' => 'getDomainOriginHost',
            'httpsStatus' => 'getHttpsStatus',
            'createTime' => 'getCreateTime',
            'modifyTime' => 'getModifyTime',
            'disabled' => 'getDisabled',
            'locked' => 'getLocked',
            'autoRefreshPreheat' => 'getAutoRefreshPreheat',
            'serviceArea' => 'getServiceArea',
            'rangeStatus' => 'getRangeStatus',
            'followStatus' => 'getFollowStatus',
            'originStatus' => 'getOriginStatus',
            'bannedReason' => 'getBannedReason',
            'lockedReason' => 'getLockedReason',
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
        $this->container['userDomainId'] = isset($data['userDomainId']) ? $data['userDomainId'] : null;
        $this->container['domainStatus'] = isset($data['domainStatus']) ? $data['domainStatus'] : null;
        $this->container['cname'] = isset($data['cname']) ? $data['cname'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['domainOriginHost'] = isset($data['domainOriginHost']) ? $data['domainOriginHost'] : null;
        $this->container['httpsStatus'] = isset($data['httpsStatus']) ? $data['httpsStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['modifyTime'] = isset($data['modifyTime']) ? $data['modifyTime'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['autoRefreshPreheat'] = isset($data['autoRefreshPreheat']) ? $data['autoRefreshPreheat'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['rangeStatus'] = isset($data['rangeStatus']) ? $data['rangeStatus'] : null;
        $this->container['followStatus'] = isset($data['followStatus']) ? $data['followStatus'] : null;
        $this->container['originStatus'] = isset($data['originStatus']) ? $data['originStatus'] : null;
        $this->container['bannedReason'] = isset($data['bannedReason']) ? $data['bannedReason'] : null;
        $this->container['lockedReason'] = isset($data['lockedReason']) ? $data['lockedReason'] : null;
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
    * Gets userDomainId
    *  域名所属用户的domain_id。
    *
    * @return string|null
    */
    public function getUserDomainId()
    {
        return $this->container['userDomainId'];
    }

    /**
    * Sets userDomainId
    *
    * @param string|null $userDomainId 域名所属用户的domain_id。
    *
    * @return $this
    */
    public function setUserDomainId($userDomainId)
    {
        $this->container['userDomainId'] = $userDomainId;
        return $this;
    }

    /**
    * Gets domainStatus
    *  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”
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
    * @param string|null $domainStatus 加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”
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
    *  源站域名或源站IP，源站为IP类型时，仅支持IPv4，如需传入多个源站IP，以多个源站对象传入，除IP其他参数请保持一致，主源站最多支持15个源站IP对象，备源站最多支持15个源站IP对象；源站为域名类型时仅支持1个源站对象。不支持IP源站和域名源站混用。
    *
    * @return \HuaweiCloud\SDK\Cdn\V1\Model\SourceWithPort[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Cdn\V1\Model\SourceWithPort[]|null $sources 源站域名或源站IP，源站为IP类型时，仅支持IPv4，如需传入多个源站IP，以多个源站对象传入，除IP其他参数请保持一致，主源站最多支持15个源站IP对象，备源站最多支持15个源站IP对象；源站为域名类型时仅支持1个源站对象。不支持IP源站和域名源站混用。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets domainOriginHost
    *  domainOriginHost
    *
    * @return \HuaweiCloud\SDK\Cdn\V1\Model\DomainOriginHost|null
    */
    public function getDomainOriginHost()
    {
        return $this->container['domainOriginHost'];
    }

    /**
    * Sets domainOriginHost
    *
    * @param \HuaweiCloud\SDK\Cdn\V1\Model\DomainOriginHost|null $domainOriginHost domainOriginHost
    *
    * @return $this
    */
    public function setDomainOriginHost($domainOriginHost)
    {
        $this->container['domainOriginHost'] = $domainOriginHost;
        return $this;
    }

    /**
    * Gets httpsStatus
    *  是否开启HTTPS加速。
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
    * @param int|null $httpsStatus 是否开启HTTPS加速。
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
    * Gets modifyTime
    *  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return int|null
    */
    public function getModifyTime()
    {
        return $this->container['modifyTime'];
    }

    /**
    * Sets modifyTime
    *
    * @param int|null $modifyTime 域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    *
    * @return $this
    */
    public function setModifyTime($modifyTime)
    {
        $this->container['modifyTime'] = $modifyTime;
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
    * Gets autoRefreshPreheat
    *  自动刷新预热（0代表关闭；1代表打开）
    *
    * @return int|null
    */
    public function getAutoRefreshPreheat()
    {
        return $this->container['autoRefreshPreheat'];
    }

    /**
    * Sets autoRefreshPreheat
    *
    * @param int|null $autoRefreshPreheat 自动刷新预热（0代表关闭；1代表打开）
    *
    * @return $this
    */
    public function setAutoRefreshPreheat($autoRefreshPreheat)
    {
        $this->container['autoRefreshPreheat'] = $autoRefreshPreheat;
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
    * Gets rangeStatus
    *  Range回源状态。
    *
    * @return string|null
    */
    public function getRangeStatus()
    {
        return $this->container['rangeStatus'];
    }

    /**
    * Sets rangeStatus
    *
    * @param string|null $rangeStatus Range回源状态。
    *
    * @return $this
    */
    public function setRangeStatus($rangeStatus)
    {
        $this->container['rangeStatus'] = $rangeStatus;
        return $this;
    }

    /**
    * Gets followStatus
    *  回源跟随状态。
    *
    * @return string|null
    */
    public function getFollowStatus()
    {
        return $this->container['followStatus'];
    }

    /**
    * Sets followStatus
    *
    * @param string|null $followStatus 回源跟随状态。
    *
    * @return $this
    */
    public function setFollowStatus($followStatus)
    {
        $this->container['followStatus'] = $followStatus;
        return $this;
    }

    /**
    * Gets originStatus
    *  是否暂停源站回源。
    *
    * @return string|null
    */
    public function getOriginStatus()
    {
        return $this->container['originStatus'];
    }

    /**
    * Sets originStatus
    *
    * @param string|null $originStatus 是否暂停源站回源。
    *
    * @return $this
    */
    public function setOriginStatus($originStatus)
    {
        $this->container['originStatus'] = $originStatus;
        return $this;
    }

    /**
    * Gets bannedReason
    *  域名禁用原因
    *
    * @return string|null
    */
    public function getBannedReason()
    {
        return $this->container['bannedReason'];
    }

    /**
    * Sets bannedReason
    *
    * @param string|null $bannedReason 域名禁用原因
    *
    * @return $this
    */
    public function setBannedReason($bannedReason)
    {
        $this->container['bannedReason'] = $bannedReason;
        return $this;
    }

    /**
    * Gets lockedReason
    *  域名锁定原因
    *
    * @return string|null
    */
    public function getLockedReason()
    {
        return $this->container['lockedReason'];
    }

    /**
    * Sets lockedReason
    *
    * @param string|null $lockedReason 域名锁定原因
    *
    * @return $this
    */
    public function setLockedReason($lockedReason)
    {
        $this->container['lockedReason'] = $lockedReason;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
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
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，不传表示查询默认项目。注意：当使用子账号调用接口时，该参数必传。
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

