<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityCheckClusterReportsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityCheckClusterReportsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * clusterName  **参数解释**： 集群名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群  **默认取值**： 不涉及
    * severity  **参数解释**： 风险级别 **约束限制**： 不涉及 **取值范围**： - Security：无风险 - Insecurity：有风险  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'clusterCategory' => 'string',
            'severity' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * clusterName  **参数解释**： 集群名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群  **默认取值**： 不涉及
    * severity  **参数解释**： 风险级别 **约束限制**： 不涉及 **取值范围**： - Security：无风险 - Insecurity：有风险  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'clusterName' => null,
        'clusterId' => null,
        'clusterCategory' => null,
        'severity' => null
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
    * clusterName  **参数解释**： 集群名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群  **默认取值**： 不涉及
    * severity  **参数解释**： 风险级别 **约束限制**： 不涉及 **取值范围**： - Security：无风险 - Insecurity：有风险  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'clusterCategory' => 'cluster_category',
            'severity' => 'severity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * clusterName  **参数解释**： 集群名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群  **默认取值**： 不涉及
    * severity  **参数解释**： 风险级别 **约束限制**： 不涉及 **取值范围**： - Security：无风险 - Insecurity：有风险  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'clusterCategory' => 'setClusterCategory',
            'severity' => 'setSeverity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * clusterName  **参数解释**： 集群名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群  **默认取值**： 不涉及
    * severity  **参数解释**： 风险级别 **约束限制**： 不涉及 **取值范围**： - Security：无风险 - Insecurity：有风险  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'clusterCategory' => 'getClusterCategory',
            'severity' => 'getSeverity'
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
    const CLUSTER_CATEGORY_CCE = 'CCE';
    const CLUSTER_CATEGORY_TURBO = 'Turbo';
    const SEVERITY_SECURITY = 'Security';
    const SEVERITY_INSECURITY = 'Insecurity';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterCategoryAllowableValues()
    {
        return [
            self::CLUSTER_CATEGORY_CCE,
            self::CLUSTER_CATEGORY_TURBO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_SECURITY,
            self::SEVERITY_INSECURITY,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterCategory'] = isset($data['clusterCategory']) ? $data['clusterCategory'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
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
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^[a-zA-Z0-9]+(?:[-][a-zA-Z0-9]+)*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[a-zA-Z0-9]+(?:[-][a-zA-Z0-9]+)*$/.";
            }
            $allowedValues = $this->getClusterCategoryAllowableValues();
                if (!is_null($this->container['clusterCategory']) && !in_array($this->container['clusterCategory'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterCategory', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['clusterCategory']) && (mb_strlen($this->container['clusterCategory']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterCategory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterCategory']) && (mb_strlen($this->container['clusterCategory']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterCategory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterCategory']) && !preg_match("/^CCE|Turbo$/", $this->container['clusterCategory'])) {
                $invalidProperties[] = "invalid value for 'clusterCategory', must be conform to the pattern /^CCE|Turbo$/.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severity']) && !preg_match("/^Security|Insecurity$/", $this->container['severity'])) {
                $invalidProperties[] = "invalid value for 'severity', must be conform to the pattern /^Security|Insecurity$/.";
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
    * Gets clusterName
    *  **参数解释**： 集群名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
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
    * @param string|null $clusterName **参数解释**： 集群名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
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
    * @param string|null $clusterId **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterCategory
    *  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getClusterCategory()
    {
        return $this->container['clusterCategory'];
    }

    /**
    * Sets clusterCategory
    *
    * @param string|null $clusterCategory **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterCategory($clusterCategory)
    {
        $this->container['clusterCategory'] = $clusterCategory;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 风险级别 **约束限制**： 不涉及 **取值范围**： - Security：无风险 - Insecurity：有风险  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 风险级别 **约束限制**： 不涉及 **取值范围**： - Security：无风险 - Insecurity：有风险  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
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

