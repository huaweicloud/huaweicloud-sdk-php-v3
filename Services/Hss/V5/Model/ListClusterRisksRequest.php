<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterRisksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterRisksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * riskType  风险类型，包含如下   - risk_assessment : 风险评估   - benchmark ：安全合规
    * riskStatus  风险状态，包含如下，该字段不传值则查询全部数据：   - risky：有风险
    * clusterId  集群id
    * clusterName  集群名称
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'riskType' => 'string',
            'riskStatus' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'riskName' => 'string',
            'riskLevel' => 'string',
            'riskCategory' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * riskType  风险类型，包含如下   - risk_assessment : 风险评估   - benchmark ：安全合规
    * riskStatus  风险状态，包含如下，该字段不传值则查询全部数据：   - risky：有风险
    * clusterId  集群id
    * clusterName  集群名称
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'riskType' => null,
        'riskStatus' => null,
        'clusterId' => null,
        'clusterName' => null,
        'riskName' => null,
        'riskLevel' => null,
        'riskCategory' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * riskType  风险类型，包含如下   - risk_assessment : 风险评估   - benchmark ：安全合规
    * riskStatus  风险状态，包含如下，该字段不传值则查询全部数据：   - risky：有风险
    * clusterId  集群id
    * clusterName  集群名称
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'riskType' => 'risk_type',
            'riskStatus' => 'risk_status',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'riskName' => 'risk_name',
            'riskLevel' => 'risk_level',
            'riskCategory' => 'risk_category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * riskType  风险类型，包含如下   - risk_assessment : 风险评估   - benchmark ：安全合规
    * riskStatus  风险状态，包含如下，该字段不传值则查询全部数据：   - risky：有风险
    * clusterId  集群id
    * clusterName  集群名称
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'riskType' => 'setRiskType',
            'riskStatus' => 'setRiskStatus',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'riskName' => 'setRiskName',
            'riskLevel' => 'setRiskLevel',
            'riskCategory' => 'setRiskCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * riskType  风险类型，包含如下   - risk_assessment : 风险评估   - benchmark ：安全合规
    * riskStatus  风险状态，包含如下，该字段不传值则查询全部数据：   - risky：有风险
    * clusterId  集群id
    * clusterName  集群名称
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'riskType' => 'getRiskType',
            'riskStatus' => 'getRiskStatus',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'riskName' => 'getRiskName',
            'riskLevel' => 'getRiskLevel',
            'riskCategory' => 'getRiskCategory'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['riskType'] = isset($data['riskType']) ? $data['riskType'] : null;
        $this->container['riskStatus'] = isset($data['riskStatus']) ? $data['riskStatus'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['riskName'] = isset($data['riskName']) ? $data['riskName'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['riskCategory'] = isset($data['riskCategory']) ? $data['riskCategory'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['riskType']) && (mb_strlen($this->container['riskType']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskType']) && (mb_strlen($this->container['riskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskType']) && !preg_match("/^risk_assessment|benchmark$/", $this->container['riskType'])) {
                $invalidProperties[] = "invalid value for 'riskType', must be conform to the pattern /^risk_assessment|benchmark$/.";
            }
            if (!is_null($this->container['riskStatus']) && (mb_strlen($this->container['riskStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskStatus']) && (mb_strlen($this->container['riskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskStatus']) && !preg_match("/^risky$/", $this->container['riskStatus'])) {
                $invalidProperties[] = "invalid value for 'riskStatus', must be conform to the pattern /^risky$/.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskName']) && (mb_strlen($this->container['riskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'riskName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['riskName']) && (mb_strlen($this->container['riskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskLevel']) && !preg_match("/^high|medium|low|tips$/", $this->container['riskLevel'])) {
                $invalidProperties[] = "invalid value for 'riskLevel', must be conform to the pattern /^high|medium|low|tips$/.";
            }
            if (!is_null($this->container['riskCategory']) && (mb_strlen($this->container['riskCategory']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskCategory', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskCategory']) && (mb_strlen($this->container['riskCategory']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskCategory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskCategory']) && !preg_match("/^control_plane|access_control|network|workload|secrets|node_escape$/", $this->container['riskCategory'])) {
                $invalidProperties[] = "invalid value for 'riskCategory', must be conform to the pattern /^control_plane|access_control|network|workload|secrets|node_escape$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets riskType
    *  风险类型，包含如下   - risk_assessment : 风险评估   - benchmark ：安全合规
    *
    * @return string|null
    */
    public function getRiskType()
    {
        return $this->container['riskType'];
    }

    /**
    * Sets riskType
    *
    * @param string|null $riskType 风险类型，包含如下   - risk_assessment : 风险评估   - benchmark ：安全合规
    *
    * @return $this
    */
    public function setRiskType($riskType)
    {
        $this->container['riskType'] = $riskType;
        return $this;
    }

    /**
    * Gets riskStatus
    *  风险状态，包含如下，该字段不传值则查询全部数据：   - risky：有风险
    *
    * @return string|null
    */
    public function getRiskStatus()
    {
        return $this->container['riskStatus'];
    }

    /**
    * Sets riskStatus
    *
    * @param string|null $riskStatus 风险状态，包含如下，该字段不传值则查询全部数据：   - risky：有风险
    *
    * @return $this
    */
    public function setRiskStatus($riskStatus)
    {
        $this->container['riskStatus'] = $riskStatus;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets riskName
    *  风险名称
    *
    * @return string|null
    */
    public function getRiskName()
    {
        return $this->container['riskName'];
    }

    /**
    * Sets riskName
    *
    * @param string|null $riskName 风险名称
    *
    * @return $this
    */
    public function setRiskName($riskName)
    {
        $this->container['riskName'] = $riskName;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets riskCategory
    *  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @return string|null
    */
    public function getRiskCategory()
    {
        return $this->container['riskCategory'];
    }

    /**
    * Sets riskCategory
    *
    * @param string|null $riskCategory 风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @return $this
    */
    public function setRiskCategory($riskCategory)
    {
        $this->container['riskCategory'] = $riskCategory;
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

