<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIpsRules1Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIpsRules1Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * affectedApplicationLike  攻击对象
    * createTime  创建时间
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ipsCveLike  cve
    * ipsGroup  ips组
    * ipsId  ips规则id
    * ipsLevel  ips等级
    * ipsNameLike  ips规则名称
    * ipsRulesTypeLike  ips规则类型
    * ipsStatus  ips规则状态
    * isUpdatedIpsRuleQueried  是否查新更新规则
    * limit  分页查询数据量限制
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * offset  查询偏移量
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'affectedApplicationLike' => 'int',
            'createTime' => 'int',
            'fwInstanceId' => 'string',
            'ipsCveLike' => 'int',
            'ipsGroup' => 'int',
            'ipsId' => 'string',
            'ipsLevel' => 'int',
            'ipsNameLike' => 'string',
            'ipsRulesTypeLike' => 'int',
            'ipsStatus' => 'string',
            'isUpdatedIpsRuleQueried' => 'bool',
            'limit' => 'int',
            'objectId' => 'string',
            'offset' => 'int',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * affectedApplicationLike  攻击对象
    * createTime  创建时间
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ipsCveLike  cve
    * ipsGroup  ips组
    * ipsId  ips规则id
    * ipsLevel  ips等级
    * ipsNameLike  ips规则名称
    * ipsRulesTypeLike  ips规则类型
    * ipsStatus  ips规则状态
    * isUpdatedIpsRuleQueried  是否查新更新规则
    * limit  分页查询数据量限制
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * offset  查询偏移量
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'affectedApplicationLike' => 'int32',
        'createTime' => 'int32',
        'fwInstanceId' => null,
        'ipsCveLike' => 'int32',
        'ipsGroup' => 'int32',
        'ipsId' => null,
        'ipsLevel' => 'int32',
        'ipsNameLike' => null,
        'ipsRulesTypeLike' => 'int32',
        'ipsStatus' => null,
        'isUpdatedIpsRuleQueried' => null,
        'limit' => 'int32',
        'objectId' => null,
        'offset' => 'int32',
        'projectId' => null,
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
    * affectedApplicationLike  攻击对象
    * createTime  创建时间
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ipsCveLike  cve
    * ipsGroup  ips组
    * ipsId  ips规则id
    * ipsLevel  ips等级
    * ipsNameLike  ips规则名称
    * ipsRulesTypeLike  ips规则类型
    * ipsStatus  ips规则状态
    * isUpdatedIpsRuleQueried  是否查新更新规则
    * limit  分页查询数据量限制
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * offset  查询偏移量
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'affectedApplicationLike' => 'affected_application_like',
            'createTime' => 'create_time',
            'fwInstanceId' => 'fw_instance_id',
            'ipsCveLike' => 'ips_cve_like',
            'ipsGroup' => 'ips_group',
            'ipsId' => 'ips_id',
            'ipsLevel' => 'ips_level',
            'ipsNameLike' => 'ips_name_like',
            'ipsRulesTypeLike' => 'ips_rules_type_like',
            'ipsStatus' => 'ips_status',
            'isUpdatedIpsRuleQueried' => 'is_updated_ips_rule_queried',
            'limit' => 'limit',
            'objectId' => 'object_id',
            'offset' => 'offset',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * affectedApplicationLike  攻击对象
    * createTime  创建时间
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ipsCveLike  cve
    * ipsGroup  ips组
    * ipsId  ips规则id
    * ipsLevel  ips等级
    * ipsNameLike  ips规则名称
    * ipsRulesTypeLike  ips规则类型
    * ipsStatus  ips规则状态
    * isUpdatedIpsRuleQueried  是否查新更新规则
    * limit  分页查询数据量限制
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * offset  查询偏移量
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @var string[]
    */
    protected static $setters = [
            'affectedApplicationLike' => 'setAffectedApplicationLike',
            'createTime' => 'setCreateTime',
            'fwInstanceId' => 'setFwInstanceId',
            'ipsCveLike' => 'setIpsCveLike',
            'ipsGroup' => 'setIpsGroup',
            'ipsId' => 'setIpsId',
            'ipsLevel' => 'setIpsLevel',
            'ipsNameLike' => 'setIpsNameLike',
            'ipsRulesTypeLike' => 'setIpsRulesTypeLike',
            'ipsStatus' => 'setIpsStatus',
            'isUpdatedIpsRuleQueried' => 'setIsUpdatedIpsRuleQueried',
            'limit' => 'setLimit',
            'objectId' => 'setObjectId',
            'offset' => 'setOffset',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * affectedApplicationLike  攻击对象
    * createTime  创建时间
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * ipsCveLike  cve
    * ipsGroup  ips组
    * ipsId  ips规则id
    * ipsLevel  ips等级
    * ipsNameLike  ips规则名称
    * ipsRulesTypeLike  ips规则类型
    * ipsStatus  ips规则状态
    * isUpdatedIpsRuleQueried  是否查新更新规则
    * limit  分页查询数据量限制
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * offset  查询偏移量
    * projectId  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @var string[]
    */
    protected static $getters = [
            'affectedApplicationLike' => 'getAffectedApplicationLike',
            'createTime' => 'getCreateTime',
            'fwInstanceId' => 'getFwInstanceId',
            'ipsCveLike' => 'getIpsCveLike',
            'ipsGroup' => 'getIpsGroup',
            'ipsId' => 'getIpsId',
            'ipsLevel' => 'getIpsLevel',
            'ipsNameLike' => 'getIpsNameLike',
            'ipsRulesTypeLike' => 'getIpsRulesTypeLike',
            'ipsStatus' => 'getIpsStatus',
            'isUpdatedIpsRuleQueried' => 'getIsUpdatedIpsRuleQueried',
            'limit' => 'getLimit',
            'objectId' => 'getObjectId',
            'offset' => 'getOffset',
            'projectId' => 'getProjectId',
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
        $this->container['affectedApplicationLike'] = isset($data['affectedApplicationLike']) ? $data['affectedApplicationLike'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['ipsCveLike'] = isset($data['ipsCveLike']) ? $data['ipsCveLike'] : null;
        $this->container['ipsGroup'] = isset($data['ipsGroup']) ? $data['ipsGroup'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['ipsLevel'] = isset($data['ipsLevel']) ? $data['ipsLevel'] : null;
        $this->container['ipsNameLike'] = isset($data['ipsNameLike']) ? $data['ipsNameLike'] : null;
        $this->container['ipsRulesTypeLike'] = isset($data['ipsRulesTypeLike']) ? $data['ipsRulesTypeLike'] : null;
        $this->container['ipsStatus'] = isset($data['ipsStatus']) ? $data['ipsStatus'] : null;
        $this->container['isUpdatedIpsRuleQueried'] = isset($data['isUpdatedIpsRuleQueried']) ? $data['isUpdatedIpsRuleQueried'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 1024)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1024.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets affectedApplicationLike
    *  攻击对象
    *
    * @return int|null
    */
    public function getAffectedApplicationLike()
    {
        return $this->container['affectedApplicationLike'];
    }

    /**
    * Sets affectedApplicationLike
    *
    * @param int|null $affectedApplicationLike 攻击对象
    *
    * @return $this
    */
    public function setAffectedApplicationLike($affectedApplicationLike)
    {
        $this->container['affectedApplicationLike'] = $affectedApplicationLike;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets ipsCveLike
    *  cve
    *
    * @return int|null
    */
    public function getIpsCveLike()
    {
        return $this->container['ipsCveLike'];
    }

    /**
    * Sets ipsCveLike
    *
    * @param int|null $ipsCveLike cve
    *
    * @return $this
    */
    public function setIpsCveLike($ipsCveLike)
    {
        $this->container['ipsCveLike'] = $ipsCveLike;
        return $this;
    }

    /**
    * Gets ipsGroup
    *  ips组
    *
    * @return int|null
    */
    public function getIpsGroup()
    {
        return $this->container['ipsGroup'];
    }

    /**
    * Sets ipsGroup
    *
    * @param int|null $ipsGroup ips组
    *
    * @return $this
    */
    public function setIpsGroup($ipsGroup)
    {
        $this->container['ipsGroup'] = $ipsGroup;
        return $this;
    }

    /**
    * Gets ipsId
    *  ips规则id
    *
    * @return string|null
    */
    public function getIpsId()
    {
        return $this->container['ipsId'];
    }

    /**
    * Sets ipsId
    *
    * @param string|null $ipsId ips规则id
    *
    * @return $this
    */
    public function setIpsId($ipsId)
    {
        $this->container['ipsId'] = $ipsId;
        return $this;
    }

    /**
    * Gets ipsLevel
    *  ips等级
    *
    * @return int|null
    */
    public function getIpsLevel()
    {
        return $this->container['ipsLevel'];
    }

    /**
    * Sets ipsLevel
    *
    * @param int|null $ipsLevel ips等级
    *
    * @return $this
    */
    public function setIpsLevel($ipsLevel)
    {
        $this->container['ipsLevel'] = $ipsLevel;
        return $this;
    }

    /**
    * Gets ipsNameLike
    *  ips规则名称
    *
    * @return string|null
    */
    public function getIpsNameLike()
    {
        return $this->container['ipsNameLike'];
    }

    /**
    * Sets ipsNameLike
    *
    * @param string|null $ipsNameLike ips规则名称
    *
    * @return $this
    */
    public function setIpsNameLike($ipsNameLike)
    {
        $this->container['ipsNameLike'] = $ipsNameLike;
        return $this;
    }

    /**
    * Gets ipsRulesTypeLike
    *  ips规则类型
    *
    * @return int|null
    */
    public function getIpsRulesTypeLike()
    {
        return $this->container['ipsRulesTypeLike'];
    }

    /**
    * Sets ipsRulesTypeLike
    *
    * @param int|null $ipsRulesTypeLike ips规则类型
    *
    * @return $this
    */
    public function setIpsRulesTypeLike($ipsRulesTypeLike)
    {
        $this->container['ipsRulesTypeLike'] = $ipsRulesTypeLike;
        return $this;
    }

    /**
    * Gets ipsStatus
    *  ips规则状态
    *
    * @return string|null
    */
    public function getIpsStatus()
    {
        return $this->container['ipsStatus'];
    }

    /**
    * Sets ipsStatus
    *
    * @param string|null $ipsStatus ips规则状态
    *
    * @return $this
    */
    public function setIpsStatus($ipsStatus)
    {
        $this->container['ipsStatus'] = $ipsStatus;
        return $this;
    }

    /**
    * Gets isUpdatedIpsRuleQueried
    *  是否查新更新规则
    *
    * @return bool|null
    */
    public function getIsUpdatedIpsRuleQueried()
    {
        return $this->container['isUpdatedIpsRuleQueried'];
    }

    /**
    * Sets isUpdatedIpsRuleQueried
    *
    * @param bool|null $isUpdatedIpsRuleQueried 是否查新更新规则
    *
    * @return $this
    */
    public function setIsUpdatedIpsRuleQueried($isUpdatedIpsRuleQueried)
    {
        $this->container['isUpdatedIpsRuleQueried'] = $isUpdatedIpsRuleQueried;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询数据量限制
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 分页查询数据量限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 查询偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，可以从调API处获取，也可以从控制台获取。可通过[项目ID获取方式](cfw_02_0015.xml)获取
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
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
    * @param string|null $enterpriseProjectId 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
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

