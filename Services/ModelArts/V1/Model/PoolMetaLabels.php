<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolMetaLabels implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolMetaLabels';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osModelartsName  **参数解释**：资源池的显示名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * osModelartsNodePrefix  **参数解释**：自定义节点前缀，可选值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsResourceId  **参数解释**：资源池计费使用的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：资源池所属的租户ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：资源池所属的租户项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsEnterpriseProjectId  **参数解释**：资源池所属的企业项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolBiz  **参数解释**：资源池商业类型，public是公共池，private个人专属池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsCreateFrom  **参数解释**：资源池创建来源，比如admin-console，标记来自admin创建，console标记来自ma console。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsNobilling  **参数解释**：资源池是否计费。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderName  **参数解释**：资源池关联的上一次订单作业记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsRegion  **参数解释**：资源池所属区域。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osModelartsName' => 'string',
            'osModelartsWorkspaceId' => 'string',
            'osModelartsNodePrefix' => 'string',
            'osModelartsResourceId' => 'string',
            'osModelartsTenantDomainId' => 'string',
            'osModelartsTenantProjectId' => 'string',
            'osModelartsEnterpriseProjectId' => 'string',
            'osModelartsPoolBiz' => 'string',
            'osModelartsCreateFrom' => 'string',
            'osModelartsNobilling' => 'string',
            'osModelartsOrderName' => 'string',
            'osModelartsRegion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osModelartsName  **参数解释**：资源池的显示名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * osModelartsNodePrefix  **参数解释**：自定义节点前缀，可选值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsResourceId  **参数解释**：资源池计费使用的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：资源池所属的租户ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：资源池所属的租户项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsEnterpriseProjectId  **参数解释**：资源池所属的企业项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolBiz  **参数解释**：资源池商业类型，public是公共池，private个人专属池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsCreateFrom  **参数解释**：资源池创建来源，比如admin-console，标记来自admin创建，console标记来自ma console。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsNobilling  **参数解释**：资源池是否计费。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderName  **参数解释**：资源池关联的上一次订单作业记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsRegion  **参数解释**：资源池所属区域。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osModelartsName' => null,
        'osModelartsWorkspaceId' => null,
        'osModelartsNodePrefix' => null,
        'osModelartsResourceId' => null,
        'osModelartsTenantDomainId' => null,
        'osModelartsTenantProjectId' => null,
        'osModelartsEnterpriseProjectId' => null,
        'osModelartsPoolBiz' => null,
        'osModelartsCreateFrom' => null,
        'osModelartsNobilling' => null,
        'osModelartsOrderName' => null,
        'osModelartsRegion' => null
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
    * osModelartsName  **参数解释**：资源池的显示名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * osModelartsNodePrefix  **参数解释**：自定义节点前缀，可选值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsResourceId  **参数解释**：资源池计费使用的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：资源池所属的租户ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：资源池所属的租户项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsEnterpriseProjectId  **参数解释**：资源池所属的企业项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolBiz  **参数解释**：资源池商业类型，public是公共池，private个人专属池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsCreateFrom  **参数解释**：资源池创建来源，比如admin-console，标记来自admin创建，console标记来自ma console。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsNobilling  **参数解释**：资源池是否计费。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderName  **参数解释**：资源池关联的上一次订单作业记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsRegion  **参数解释**：资源池所属区域。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osModelartsName' => 'os.modelarts/name',
            'osModelartsWorkspaceId' => 'os.modelarts/workspace.id',
            'osModelartsNodePrefix' => 'os.modelarts/node.prefix',
            'osModelartsResourceId' => 'os.modelarts/resource.id',
            'osModelartsTenantDomainId' => 'os.modelarts/tenant.domain.id',
            'osModelartsTenantProjectId' => 'os.modelarts/tenant.project.id',
            'osModelartsEnterpriseProjectId' => 'os.modelarts/enterprise.project.id',
            'osModelartsPoolBiz' => 'os.modelarts.pool/biz',
            'osModelartsCreateFrom' => 'os.modelarts/create-from',
            'osModelartsNobilling' => 'os.modelarts/nobilling',
            'osModelartsOrderName' => 'os.modelarts/order.name',
            'osModelartsRegion' => 'os.modelarts/region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osModelartsName  **参数解释**：资源池的显示名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * osModelartsNodePrefix  **参数解释**：自定义节点前缀，可选值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsResourceId  **参数解释**：资源池计费使用的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：资源池所属的租户ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：资源池所属的租户项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsEnterpriseProjectId  **参数解释**：资源池所属的企业项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolBiz  **参数解释**：资源池商业类型，public是公共池，private个人专属池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsCreateFrom  **参数解释**：资源池创建来源，比如admin-console，标记来自admin创建，console标记来自ma console。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsNobilling  **参数解释**：资源池是否计费。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderName  **参数解释**：资源池关联的上一次订单作业记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsRegion  **参数解释**：资源池所属区域。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'osModelartsName' => 'setOsModelartsName',
            'osModelartsWorkspaceId' => 'setOsModelartsWorkspaceId',
            'osModelartsNodePrefix' => 'setOsModelartsNodePrefix',
            'osModelartsResourceId' => 'setOsModelartsResourceId',
            'osModelartsTenantDomainId' => 'setOsModelartsTenantDomainId',
            'osModelartsTenantProjectId' => 'setOsModelartsTenantProjectId',
            'osModelartsEnterpriseProjectId' => 'setOsModelartsEnterpriseProjectId',
            'osModelartsPoolBiz' => 'setOsModelartsPoolBiz',
            'osModelartsCreateFrom' => 'setOsModelartsCreateFrom',
            'osModelartsNobilling' => 'setOsModelartsNobilling',
            'osModelartsOrderName' => 'setOsModelartsOrderName',
            'osModelartsRegion' => 'setOsModelartsRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osModelartsName  **参数解释**：资源池的显示名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * osModelartsNodePrefix  **参数解释**：自定义节点前缀，可选值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsResourceId  **参数解释**：资源池计费使用的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantDomainId  **参数解释**：资源池所属的租户ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsTenantProjectId  **参数解释**：资源池所属的租户项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsEnterpriseProjectId  **参数解释**：资源池所属的企业项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsPoolBiz  **参数解释**：资源池商业类型，public是公共池，private个人专属池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsCreateFrom  **参数解释**：资源池创建来源，比如admin-console，标记来自admin创建，console标记来自ma console。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsNobilling  **参数解释**：资源池是否计费。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderName  **参数解释**：资源池关联的上一次订单作业记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsRegion  **参数解释**：资源池所属区域。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'osModelartsName' => 'getOsModelartsName',
            'osModelartsWorkspaceId' => 'getOsModelartsWorkspaceId',
            'osModelartsNodePrefix' => 'getOsModelartsNodePrefix',
            'osModelartsResourceId' => 'getOsModelartsResourceId',
            'osModelartsTenantDomainId' => 'getOsModelartsTenantDomainId',
            'osModelartsTenantProjectId' => 'getOsModelartsTenantProjectId',
            'osModelartsEnterpriseProjectId' => 'getOsModelartsEnterpriseProjectId',
            'osModelartsPoolBiz' => 'getOsModelartsPoolBiz',
            'osModelartsCreateFrom' => 'getOsModelartsCreateFrom',
            'osModelartsNobilling' => 'getOsModelartsNobilling',
            'osModelartsOrderName' => 'getOsModelartsOrderName',
            'osModelartsRegion' => 'getOsModelartsRegion'
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
        $this->container['osModelartsName'] = isset($data['osModelartsName']) ? $data['osModelartsName'] : null;
        $this->container['osModelartsWorkspaceId'] = isset($data['osModelartsWorkspaceId']) ? $data['osModelartsWorkspaceId'] : null;
        $this->container['osModelartsNodePrefix'] = isset($data['osModelartsNodePrefix']) ? $data['osModelartsNodePrefix'] : null;
        $this->container['osModelartsResourceId'] = isset($data['osModelartsResourceId']) ? $data['osModelartsResourceId'] : null;
        $this->container['osModelartsTenantDomainId'] = isset($data['osModelartsTenantDomainId']) ? $data['osModelartsTenantDomainId'] : null;
        $this->container['osModelartsTenantProjectId'] = isset($data['osModelartsTenantProjectId']) ? $data['osModelartsTenantProjectId'] : null;
        $this->container['osModelartsEnterpriseProjectId'] = isset($data['osModelartsEnterpriseProjectId']) ? $data['osModelartsEnterpriseProjectId'] : null;
        $this->container['osModelartsPoolBiz'] = isset($data['osModelartsPoolBiz']) ? $data['osModelartsPoolBiz'] : null;
        $this->container['osModelartsCreateFrom'] = isset($data['osModelartsCreateFrom']) ? $data['osModelartsCreateFrom'] : null;
        $this->container['osModelartsNobilling'] = isset($data['osModelartsNobilling']) ? $data['osModelartsNobilling'] : null;
        $this->container['osModelartsOrderName'] = isset($data['osModelartsOrderName']) ? $data['osModelartsOrderName'] : null;
        $this->container['osModelartsRegion'] = isset($data['osModelartsRegion']) ? $data['osModelartsRegion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['osModelartsName']) && (mb_strlen($this->container['osModelartsName']) > 64)) {
                $invalidProperties[] = "invalid value for 'osModelartsName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osModelartsName']) && (mb_strlen($this->container['osModelartsName']) < 4)) {
                $invalidProperties[] = "invalid value for 'osModelartsName', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['osModelartsName']) && !preg_match("/^[a-z][-a-z0-9]{2,62}[a-z0-9]$/", $this->container['osModelartsName'])) {
                $invalidProperties[] = "invalid value for 'osModelartsName', must be conform to the pattern /^[a-z][-a-z0-9]{2,62}[a-z0-9]$/.";
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
    * Gets osModelartsName
    *  **参数解释**：资源池的显示名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsName()
    {
        return $this->container['osModelartsName'];
    }

    /**
    * Sets osModelartsName
    *
    * @param string|null $osModelartsName **参数解释**：资源池的显示名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsName($osModelartsName)
    {
        $this->container['osModelartsName'] = $osModelartsName;
        return $this;
    }

    /**
    * Gets osModelartsWorkspaceId
    *  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return string|null
    */
    public function getOsModelartsWorkspaceId()
    {
        return $this->container['osModelartsWorkspaceId'];
    }

    /**
    * Sets osModelartsWorkspaceId
    *
    * @param string|null $osModelartsWorkspaceId **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return $this
    */
    public function setOsModelartsWorkspaceId($osModelartsWorkspaceId)
    {
        $this->container['osModelartsWorkspaceId'] = $osModelartsWorkspaceId;
        return $this;
    }

    /**
    * Gets osModelartsNodePrefix
    *  **参数解释**：自定义节点前缀，可选值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodePrefix()
    {
        return $this->container['osModelartsNodePrefix'];
    }

    /**
    * Sets osModelartsNodePrefix
    *
    * @param string|null $osModelartsNodePrefix **参数解释**：自定义节点前缀，可选值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodePrefix($osModelartsNodePrefix)
    {
        $this->container['osModelartsNodePrefix'] = $osModelartsNodePrefix;
        return $this;
    }

    /**
    * Gets osModelartsResourceId
    *  **参数解释**：资源池计费使用的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsResourceId()
    {
        return $this->container['osModelartsResourceId'];
    }

    /**
    * Sets osModelartsResourceId
    *
    * @param string|null $osModelartsResourceId **参数解释**：资源池计费使用的资源ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsResourceId($osModelartsResourceId)
    {
        $this->container['osModelartsResourceId'] = $osModelartsResourceId;
        return $this;
    }

    /**
    * Gets osModelartsTenantDomainId
    *  **参数解释**：资源池所属的租户ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsTenantDomainId()
    {
        return $this->container['osModelartsTenantDomainId'];
    }

    /**
    * Sets osModelartsTenantDomainId
    *
    * @param string|null $osModelartsTenantDomainId **参数解释**：资源池所属的租户ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsTenantDomainId($osModelartsTenantDomainId)
    {
        $this->container['osModelartsTenantDomainId'] = $osModelartsTenantDomainId;
        return $this;
    }

    /**
    * Gets osModelartsTenantProjectId
    *  **参数解释**：资源池所属的租户项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsTenantProjectId()
    {
        return $this->container['osModelartsTenantProjectId'];
    }

    /**
    * Sets osModelartsTenantProjectId
    *
    * @param string|null $osModelartsTenantProjectId **参数解释**：资源池所属的租户项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsTenantProjectId($osModelartsTenantProjectId)
    {
        $this->container['osModelartsTenantProjectId'] = $osModelartsTenantProjectId;
        return $this;
    }

    /**
    * Gets osModelartsEnterpriseProjectId
    *  **参数解释**：资源池所属的企业项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsEnterpriseProjectId()
    {
        return $this->container['osModelartsEnterpriseProjectId'];
    }

    /**
    * Sets osModelartsEnterpriseProjectId
    *
    * @param string|null $osModelartsEnterpriseProjectId **参数解释**：资源池所属的企业项目ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsEnterpriseProjectId($osModelartsEnterpriseProjectId)
    {
        $this->container['osModelartsEnterpriseProjectId'] = $osModelartsEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets osModelartsPoolBiz
    *  **参数解释**：资源池商业类型，public是公共池，private个人专属池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsPoolBiz()
    {
        return $this->container['osModelartsPoolBiz'];
    }

    /**
    * Sets osModelartsPoolBiz
    *
    * @param string|null $osModelartsPoolBiz **参数解释**：资源池商业类型，public是公共池，private个人专属池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsPoolBiz($osModelartsPoolBiz)
    {
        $this->container['osModelartsPoolBiz'] = $osModelartsPoolBiz;
        return $this;
    }

    /**
    * Gets osModelartsCreateFrom
    *  **参数解释**：资源池创建来源，比如admin-console，标记来自admin创建，console标记来自ma console。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsCreateFrom()
    {
        return $this->container['osModelartsCreateFrom'];
    }

    /**
    * Sets osModelartsCreateFrom
    *
    * @param string|null $osModelartsCreateFrom **参数解释**：资源池创建来源，比如admin-console，标记来自admin创建，console标记来自ma console。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsCreateFrom($osModelartsCreateFrom)
    {
        $this->container['osModelartsCreateFrom'] = $osModelartsCreateFrom;
        return $this;
    }

    /**
    * Gets osModelartsNobilling
    *  **参数解释**：资源池是否计费。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNobilling()
    {
        return $this->container['osModelartsNobilling'];
    }

    /**
    * Sets osModelartsNobilling
    *
    * @param string|null $osModelartsNobilling **参数解释**：资源池是否计费。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNobilling($osModelartsNobilling)
    {
        $this->container['osModelartsNobilling'] = $osModelartsNobilling;
        return $this;
    }

    /**
    * Gets osModelartsOrderName
    *  **参数解释**：资源池关联的上一次订单作业记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsOrderName()
    {
        return $this->container['osModelartsOrderName'];
    }

    /**
    * Sets osModelartsOrderName
    *
    * @param string|null $osModelartsOrderName **参数解释**：资源池关联的上一次订单作业记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsOrderName($osModelartsOrderName)
    {
        $this->container['osModelartsOrderName'] = $osModelartsOrderName;
        return $this;
    }

    /**
    * Gets osModelartsRegion
    *  **参数解释**：资源池所属区域。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsRegion()
    {
        return $this->container['osModelartsRegion'];
    }

    /**
    * Sets osModelartsRegion
    *
    * @param string|null $osModelartsRegion **参数解释**：资源池所属区域。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsRegion($osModelartsRegion)
    {
        $this->container['osModelartsRegion'] = $osModelartsRegion;
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

