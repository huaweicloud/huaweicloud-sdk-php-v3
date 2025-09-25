<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckClusterReports implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckClusterReports';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**： 体检报告ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * severity  **参数解释**： 风险级别 **取值范围**： - Security：无风险 - Insecurity：有风险
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器告警数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'clusterCategory' => 'string',
            'severity' => 'string',
            'localImageVulNum' => 'int',
            'riskConfigNum' => 'int',
            'privilegedContainerNum' => 'int',
            'scanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**： 体检报告ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * severity  **参数解释**： 风险级别 **取值范围**： - Security：无风险 - Insecurity：有风险
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器告警数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => null,
        'clusterName' => null,
        'clusterId' => null,
        'clusterCategory' => null,
        'severity' => null,
        'localImageVulNum' => 'int32',
        'riskConfigNum' => 'int32',
        'privilegedContainerNum' => 'int32',
        'scanTime' => 'int64'
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
    * reportId  **参数解释**： 体检报告ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * severity  **参数解释**： 风险级别 **取值范围**： - Security：无风险 - Insecurity：有风险
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器告警数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'clusterCategory' => 'cluster_category',
            'severity' => 'severity',
            'localImageVulNum' => 'local_image_vul_num',
            'riskConfigNum' => 'risk_config_num',
            'privilegedContainerNum' => 'privileged_container_num',
            'scanTime' => 'scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**： 体检报告ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * severity  **参数解释**： 风险级别 **取值范围**： - Security：无风险 - Insecurity：有风险
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器告警数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'clusterCategory' => 'setClusterCategory',
            'severity' => 'setSeverity',
            'localImageVulNum' => 'setLocalImageVulNum',
            'riskConfigNum' => 'setRiskConfigNum',
            'privilegedContainerNum' => 'setPrivilegedContainerNum',
            'scanTime' => 'setScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**： 体检报告ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * severity  **参数解释**： 风险级别 **取值范围**： - Security：无风险 - Insecurity：有风险
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器告警数量 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'clusterCategory' => 'getClusterCategory',
            'severity' => 'getSeverity',
            'localImageVulNum' => 'getLocalImageVulNum',
            'riskConfigNum' => 'getRiskConfigNum',
            'privilegedContainerNum' => 'getPrivilegedContainerNum',
            'scanTime' => 'getScanTime'
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterCategory'] = isset($data['clusterCategory']) ? $data['clusterCategory'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['localImageVulNum'] = isset($data['localImageVulNum']) ? $data['localImageVulNum'] : null;
        $this->container['riskConfigNum'] = isset($data['riskConfigNum']) ? $data['riskConfigNum'] : null;
        $this->container['privilegedContainerNum'] = isset($data['privilegedContainerNum']) ? $data['privilegedContainerNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['reportId']) && (mb_strlen($this->container['reportId']) > 256)) {
                $invalidProperties[] = "invalid value for 'reportId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reportId']) && (mb_strlen($this->container['reportId']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
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
    * Gets reportId
    *  **参数解释**： 体检报告ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId **参数解释**： 体检报告ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**： 集群名称 **取值范围**： 不涉及
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
    * @param string|null $clusterName **参数解释**： 集群名称 **取值范围**： 不涉及
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
    *  **参数解释**： 集群ID **取值范围**： 不涉及
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
    * @param string|null $clusterId **参数解释**： 集群ID **取值范围**： 不涉及
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
    *  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
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
    * @param string|null $clusterCategory **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
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
    *  **参数解释**： 风险级别 **取值范围**： - Security：无风险 - Insecurity：有风险
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
    * @param string|null $severity **参数解释**： 风险级别 **取值范围**： - Security：无风险 - Insecurity：有风险
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets localImageVulNum
    *  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLocalImageVulNum()
    {
        return $this->container['localImageVulNum'];
    }

    /**
    * Sets localImageVulNum
    *
    * @param int|null $localImageVulNum **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLocalImageVulNum($localImageVulNum)
    {
        $this->container['localImageVulNum'] = $localImageVulNum;
        return $this;
    }

    /**
    * Gets riskConfigNum
    *  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRiskConfigNum()
    {
        return $this->container['riskConfigNum'];
    }

    /**
    * Sets riskConfigNum
    *
    * @param int|null $riskConfigNum **参数解释**： 基线风险数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRiskConfigNum($riskConfigNum)
    {
        $this->container['riskConfigNum'] = $riskConfigNum;
        return $this;
    }

    /**
    * Gets privilegedContainerNum
    *  **参数解释**： 特权容器告警数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPrivilegedContainerNum()
    {
        return $this->container['privilegedContainerNum'];
    }

    /**
    * Sets privilegedContainerNum
    *
    * @param int|null $privilegedContainerNum **参数解释**： 特权容器告警数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPrivilegedContainerNum($privilegedContainerNum)
    {
        $this->container['privilegedContainerNum'] = $privilegedContainerNum;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**： 最新检测时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
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

