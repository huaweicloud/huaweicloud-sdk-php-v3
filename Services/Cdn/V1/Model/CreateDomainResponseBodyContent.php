<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDomainResponseBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDomainResponseBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型： - web:网站加速； - download:文件下载加速； - video:点播加速； - wholeSite:全站加速。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站信息
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * rangeStatus  range状态（\"off\"/\"on\"）。
    * followStatus  follow302状态（\"off\"/\"on\"）。
    * originStatus  是否暂停源站回源。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainName' => 'string',
            'businessType' => 'string',
            'serviceArea' => 'string',
            'userDomainId' => 'string',
            'domainStatus' => 'string',
            'cname' => 'string',
            'sources' => '\HuaweiCloud\SDK\Cdn\V1\Model\Sources[]',
            'domainOriginHost' => '\HuaweiCloud\SDK\Cdn\V1\Model\DomainOriginHost',
            'httpsStatus' => 'int',
            'createTime' => 'int',
            'modifyTime' => 'int',
            'disabled' => 'int',
            'locked' => 'int',
            'rangeStatus' => 'string',
            'followStatus' => 'string',
            'originStatus' => 'string',
            'autoRefreshPreheat' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型： - web:网站加速； - download:文件下载加速； - video:点播加速； - wholeSite:全站加速。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站信息
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * rangeStatus  range状态（\"off\"/\"on\"）。
    * followStatus  follow302状态（\"off\"/\"on\"）。
    * originStatus  是否暂停源站回源。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainName' => null,
        'businessType' => null,
        'serviceArea' => null,
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
        'rangeStatus' => null,
        'followStatus' => null,
        'originStatus' => null,
        'autoRefreshPreheat' => 'int32'
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
    * businessType  域名业务类型： - web:网站加速； - download:文件下载加速； - video:点播加速； - wholeSite:全站加速。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站信息
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * rangeStatus  range状态（\"off\"/\"on\"）。
    * followStatus  follow302状态（\"off\"/\"on\"）。
    * originStatus  是否暂停源站回源。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainName' => 'domain_name',
            'businessType' => 'business_type',
            'serviceArea' => 'service_area',
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
            'rangeStatus' => 'range_status',
            'followStatus' => 'follow_status',
            'originStatus' => 'origin_status',
            'autoRefreshPreheat' => 'auto_refresh_preheat'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型： - web:网站加速； - download:文件下载加速； - video:点播加速； - wholeSite:全站加速。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站信息
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * rangeStatus  range状态（\"off\"/\"on\"）。
    * followStatus  follow302状态（\"off\"/\"on\"）。
    * originStatus  是否暂停源站回源。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainName' => 'setDomainName',
            'businessType' => 'setBusinessType',
            'serviceArea' => 'setServiceArea',
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
            'rangeStatus' => 'setRangeStatus',
            'followStatus' => 'setFollowStatus',
            'originStatus' => 'setOriginStatus',
            'autoRefreshPreheat' => 'setAutoRefreshPreheat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  加速域名ID。
    * domainName  加速域名。
    * businessType  域名业务类型： - web:网站加速； - download:文件下载加速； - video:点播加速； - wholeSite:全站加速。
    * serviceArea  域名服务范围，若为mainland_china，则表示服务范围为中国大陆；若为outside_mainland_china，则表示服务范围为中国大陆境外；若为global，则表示服务范围为全球。
    * userDomainId  域名所属用户的domain_id。
    * domainStatus  加速域名状态。取值意义： - online表示“已开启” - offline表示“已停用” - configuring表示“配置中” - configure_failed表示“配置失败” - checking表示“审核中” - check_failed表示“审核未通过” - deleting表示“删除中”。
    * cname  加速域名对应的CNAME。
    * sources  源站信息
    * domainOriginHost  domainOriginHost
    * httpsStatus  是否开启HTTPS加速。
    * createTime  域名创建时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * modifyTime  域名修改时间，相对于UTC 1970-01-01到当前时间相隔的毫秒数。
    * disabled  封禁状态（0代表未禁用；1代表禁用）。
    * locked  锁定状态（0代表未锁定；1代表锁定）。
    * rangeStatus  range状态（\"off\"/\"on\"）。
    * followStatus  follow302状态（\"off\"/\"on\"）。
    * originStatus  是否暂停源站回源。
    * autoRefreshPreheat  自动刷新预热（0代表关闭；1代表打开）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainName' => 'getDomainName',
            'businessType' => 'getBusinessType',
            'serviceArea' => 'getServiceArea',
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
            'rangeStatus' => 'getRangeStatus',
            'followStatus' => 'getFollowStatus',
            'originStatus' => 'getOriginStatus',
            'autoRefreshPreheat' => 'getAutoRefreshPreheat'
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
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
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
        $this->container['rangeStatus'] = isset($data['rangeStatus']) ? $data['rangeStatus'] : null;
        $this->container['followStatus'] = isset($data['followStatus']) ? $data['followStatus'] : null;
        $this->container['originStatus'] = isset($data['originStatus']) ? $data['originStatus'] : null;
        $this->container['autoRefreshPreheat'] = isset($data['autoRefreshPreheat']) ? $data['autoRefreshPreheat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  域名业务类型： - web:网站加速； - download:文件下载加速； - video:点播加速； - wholeSite:全站加速。
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
    * @param string|null $businessType 域名业务类型： - web:网站加速； - download:文件下载加速； - video:点播加速； - wholeSite:全站加速。
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
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
    *  源站信息
    *
    * @return \HuaweiCloud\SDK\Cdn\V1\Model\Sources[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Cdn\V1\Model\Sources[]|null $sources 源站信息
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
    * Gets rangeStatus
    *  range状态（\"off\"/\"on\"）。
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
    * @param string|null $rangeStatus range状态（\"off\"/\"on\"）。
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
    *  follow302状态（\"off\"/\"on\"）。
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
    * @param string|null $followStatus follow302状态（\"off\"/\"on\"）。
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

