<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaResourcesResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaResourcesResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  **参数解释** : HSS配额的资源ID **取值范围** : 字符长度1-128位
    * version  **参数解释**： 资源规格编码 **取值范围**： 包含如下6种。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * quotaStatus  **参数解释**： 配额状态 **取值范围**： 包含如下3种。 - normal : 正常 - expired : 已过期 - freeze : 已冻结
    * usedStatus  **参数解释**： 使用状态 **取值范围**： 包含如下2种。 - idle : 空闲 - used : 使用中
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * chargingMode  **参数解释**： 计费模式 **取值范围**: - packet_cycle ：包周期。 - on_demand ：按需。
    * tags  **参数解释**： 标签 **取值范围**: 不涉及
    * expireTime  **参数解释**： 过期时间 **取值范围**: -1到9223372036854775807，-1表示没有到期时间
    * createTime  **参数解释**： 创建时间 **取值范围**: 0到9223372036854775807
    * sharedQuota  **参数解释**： 是否共享配额 **取值范围**: - shared：共享的 - unshared：非共享的
    * enterpriseProjectId  **参数解释**: 主机所属的企业项目ID。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。 **取值范围**: 字符长度1-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'version' => 'string',
            'quotaStatus' => 'string',
            'usedStatus' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'chargingMode' => 'string',
            'tags' => '\HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]',
            'expireTime' => 'int',
            'createTime' => 'int',
            'sharedQuota' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  **参数解释** : HSS配额的资源ID **取值范围** : 字符长度1-128位
    * version  **参数解释**： 资源规格编码 **取值范围**： 包含如下6种。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * quotaStatus  **参数解释**： 配额状态 **取值范围**： 包含如下3种。 - normal : 正常 - expired : 已过期 - freeze : 已冻结
    * usedStatus  **参数解释**： 使用状态 **取值范围**： 包含如下2种。 - idle : 空闲 - used : 使用中
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * chargingMode  **参数解释**： 计费模式 **取值范围**: - packet_cycle ：包周期。 - on_demand ：按需。
    * tags  **参数解释**： 标签 **取值范围**: 不涉及
    * expireTime  **参数解释**： 过期时间 **取值范围**: -1到9223372036854775807，-1表示没有到期时间
    * createTime  **参数解释**： 创建时间 **取值范围**: 0到9223372036854775807
    * sharedQuota  **参数解释**： 是否共享配额 **取值范围**: - shared：共享的 - unshared：非共享的
    * enterpriseProjectId  **参数解释**: 主机所属的企业项目ID。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。 **取值范围**: 字符长度1-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'version' => null,
        'quotaStatus' => null,
        'usedStatus' => null,
        'hostId' => null,
        'hostName' => null,
        'chargingMode' => null,
        'tags' => null,
        'expireTime' => 'int64',
        'createTime' => 'int64',
        'sharedQuota' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null
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
    * resourceId  **参数解释** : HSS配额的资源ID **取值范围** : 字符长度1-128位
    * version  **参数解释**： 资源规格编码 **取值范围**： 包含如下6种。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * quotaStatus  **参数解释**： 配额状态 **取值范围**： 包含如下3种。 - normal : 正常 - expired : 已过期 - freeze : 已冻结
    * usedStatus  **参数解释**： 使用状态 **取值范围**： 包含如下2种。 - idle : 空闲 - used : 使用中
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * chargingMode  **参数解释**： 计费模式 **取值范围**: - packet_cycle ：包周期。 - on_demand ：按需。
    * tags  **参数解释**： 标签 **取值范围**: 不涉及
    * expireTime  **参数解释**： 过期时间 **取值范围**: -1到9223372036854775807，-1表示没有到期时间
    * createTime  **参数解释**： 创建时间 **取值范围**: 0到9223372036854775807
    * sharedQuota  **参数解释**： 是否共享配额 **取值范围**: - shared：共享的 - unshared：非共享的
    * enterpriseProjectId  **参数解释**: 主机所属的企业项目ID。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。 **取值范围**: 字符长度1-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'version' => 'version',
            'quotaStatus' => 'quota_status',
            'usedStatus' => 'used_status',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'chargingMode' => 'charging_mode',
            'tags' => 'tags',
            'expireTime' => 'expire_time',
            'createTime' => 'create_time',
            'sharedQuota' => 'shared_quota',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  **参数解释** : HSS配额的资源ID **取值范围** : 字符长度1-128位
    * version  **参数解释**： 资源规格编码 **取值范围**： 包含如下6种。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * quotaStatus  **参数解释**： 配额状态 **取值范围**： 包含如下3种。 - normal : 正常 - expired : 已过期 - freeze : 已冻结
    * usedStatus  **参数解释**： 使用状态 **取值范围**： 包含如下2种。 - idle : 空闲 - used : 使用中
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * chargingMode  **参数解释**： 计费模式 **取值范围**: - packet_cycle ：包周期。 - on_demand ：按需。
    * tags  **参数解释**： 标签 **取值范围**: 不涉及
    * expireTime  **参数解释**： 过期时间 **取值范围**: -1到9223372036854775807，-1表示没有到期时间
    * createTime  **参数解释**： 创建时间 **取值范围**: 0到9223372036854775807
    * sharedQuota  **参数解释**： 是否共享配额 **取值范围**: - shared：共享的 - unshared：非共享的
    * enterpriseProjectId  **参数解释**: 主机所属的企业项目ID。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。 **取值范围**: 字符长度1-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'version' => 'setVersion',
            'quotaStatus' => 'setQuotaStatus',
            'usedStatus' => 'setUsedStatus',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'chargingMode' => 'setChargingMode',
            'tags' => 'setTags',
            'expireTime' => 'setExpireTime',
            'createTime' => 'setCreateTime',
            'sharedQuota' => 'setSharedQuota',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  **参数解释** : HSS配额的资源ID **取值范围** : 字符长度1-128位
    * version  **参数解释**： 资源规格编码 **取值范围**： 包含如下6种。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * quotaStatus  **参数解释**： 配额状态 **取值范围**： 包含如下3种。 - normal : 正常 - expired : 已过期 - freeze : 已冻结
    * usedStatus  **参数解释**： 使用状态 **取值范围**： 包含如下2种。 - idle : 空闲 - used : 使用中
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * chargingMode  **参数解释**： 计费模式 **取值范围**: - packet_cycle ：包周期。 - on_demand ：按需。
    * tags  **参数解释**： 标签 **取值范围**: 不涉及
    * expireTime  **参数解释**： 过期时间 **取值范围**: -1到9223372036854775807，-1表示没有到期时间
    * createTime  **参数解释**： 创建时间 **取值范围**: 0到9223372036854775807
    * sharedQuota  **参数解释**： 是否共享配额 **取值范围**: - shared：共享的 - unshared：非共享的
    * enterpriseProjectId  **参数解释**: 主机所属的企业项目ID。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。 **取值范围**: 字符长度1-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'version' => 'getVersion',
            'quotaStatus' => 'getQuotaStatus',
            'usedStatus' => 'getUsedStatus',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'chargingMode' => 'getChargingMode',
            'tags' => 'getTags',
            'expireTime' => 'getExpireTime',
            'createTime' => 'getCreateTime',
            'sharedQuota' => 'getSharedQuota',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['quotaStatus'] = isset($data['quotaStatus']) ? $data['quotaStatus'] : null;
        $this->container['usedStatus'] = isset($data['usedStatus']) ? $data['usedStatus'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['sharedQuota'] = isset($data['sharedQuota']) ? $data['sharedQuota'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['quotaStatus']) && (mb_strlen($this->container['quotaStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'quotaStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['quotaStatus']) && (mb_strlen($this->container['quotaStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'quotaStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['usedStatus']) && (mb_strlen($this->container['usedStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'usedStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['usedStatus']) && (mb_strlen($this->container['usedStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'usedStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sharedQuota']) && (mb_strlen($this->container['sharedQuota']) > 64)) {
                $invalidProperties[] = "invalid value for 'sharedQuota', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sharedQuota']) && (mb_strlen($this->container['sharedQuota']) < 1)) {
                $invalidProperties[] = "invalid value for 'sharedQuota', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
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
    * Gets resourceId
    *  **参数解释** : HSS配额的资源ID **取值范围** : 字符长度1-128位
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释** : HSS配额的资源ID **取值范围** : 字符长度1-128位
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 资源规格编码 **取值范围**： 包含如下6种。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**： 资源规格编码 **取值范围**： 包含如下6种。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets quotaStatus
    *  **参数解释**： 配额状态 **取值范围**： 包含如下3种。 - normal : 正常 - expired : 已过期 - freeze : 已冻结
    *
    * @return string|null
    */
    public function getQuotaStatus()
    {
        return $this->container['quotaStatus'];
    }

    /**
    * Sets quotaStatus
    *
    * @param string|null $quotaStatus **参数解释**： 配额状态 **取值范围**： 包含如下3种。 - normal : 正常 - expired : 已过期 - freeze : 已冻结
    *
    * @return $this
    */
    public function setQuotaStatus($quotaStatus)
    {
        $this->container['quotaStatus'] = $quotaStatus;
        return $this;
    }

    /**
    * Gets usedStatus
    *  **参数解释**： 使用状态 **取值范围**： 包含如下2种。 - idle : 空闲 - used : 使用中
    *
    * @return string|null
    */
    public function getUsedStatus()
    {
        return $this->container['usedStatus'];
    }

    /**
    * Sets usedStatus
    *
    * @param string|null $usedStatus **参数解释**： 使用状态 **取值范围**： 包含如下2种。 - idle : 空闲 - used : 使用中
    *
    * @return $this
    */
    public function setUsedStatus($usedStatus)
    {
        $this->container['usedStatus'] = $usedStatus;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**： 计费模式 **取值范围**: - packet_cycle ：包周期。 - on_demand ：按需。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**： 计费模式 **取值范围**: - packet_cycle ：包周期。 - on_demand ：按需。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 标签 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]|null $tags **参数解释**： 标签 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释**： 过期时间 **取值范围**: -1到9223372036854775807，-1表示没有到期时间
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime **参数解释**： 过期时间 **取值范围**: -1到9223372036854775807，-1表示没有到期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 创建时间 **取值范围**: 0到9223372036854775807
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
    * @param int|null $createTime **参数解释**： 创建时间 **取值范围**: 0到9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets sharedQuota
    *  **参数解释**： 是否共享配额 **取值范围**: - shared：共享的 - unshared：非共享的
    *
    * @return string|null
    */
    public function getSharedQuota()
    {
        return $this->container['sharedQuota'];
    }

    /**
    * Sets sharedQuota
    *
    * @param string|null $sharedQuota **参数解释**： 是否共享配额 **取值范围**: - shared：共享的 - unshared：非共享的
    *
    * @return $this
    */
    public function setSharedQuota($sharedQuota)
    {
        $this->container['sharedQuota'] = $sharedQuota;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**: 主机所属的企业项目ID。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。 **取值范围**: 字符长度1-256位
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
    * @param string|null $enterpriseProjectId **参数解释**: 主机所属的企业项目ID。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName **参数解释**: 所属企业项目名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
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

