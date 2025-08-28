<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityCheckClusterReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityCheckClusterReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanTime  **参数解释**： 体检时间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器数量 **取值范围**： 不涉及
    * podNum  **参数解释**： pod数量 **取值范围**： 不涉及
    * hostNum  **参数解释**： 节点数量 **取值范围**： 不涉及
    * containerNum  **参数解释**： 容器数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 端口数量 **取值范围**： 不涉及
    * processNum  **参数解释**： 进程数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * localImageVulList  **参数解释**： 本地镜像漏洞列表 **取值范围**： 不涉及
    * baselineDetectionList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    * privilegedContainerList  **参数解释**： 特权容器列表 **取值范围**： 不涉及
    * portList  **参数解释**： 端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 软件列表 **取值范围**： 不涉及
    * processList  **参数解释**： 进程列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanTime' => 'int',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'clusterCategory' => 'string',
            'localImageVulNum' => 'int',
            'riskConfigNum' => 'int',
            'privilegedContainerNum' => 'int',
            'podNum' => 'int',
            'hostNum' => 'int',
            'containerNum' => 'int',
            'portNum' => 'int',
            'processNum' => 'int',
            'appNum' => 'int',
            'localImageVulList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckLocalImageVulInfo[]',
            'baselineDetectionList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckBaseLineDetectionInfo[]',
            'privilegedContainerList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckPrivilegedContainerInfo[]',
            'portList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckPortInfo[]',
            'appList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckAppInfo[]',
            'processList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckProcessInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanTime  **参数解释**： 体检时间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器数量 **取值范围**： 不涉及
    * podNum  **参数解释**： pod数量 **取值范围**： 不涉及
    * hostNum  **参数解释**： 节点数量 **取值范围**： 不涉及
    * containerNum  **参数解释**： 容器数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 端口数量 **取值范围**： 不涉及
    * processNum  **参数解释**： 进程数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * localImageVulList  **参数解释**： 本地镜像漏洞列表 **取值范围**： 不涉及
    * baselineDetectionList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    * privilegedContainerList  **参数解释**： 特权容器列表 **取值范围**： 不涉及
    * portList  **参数解释**： 端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 软件列表 **取值范围**： 不涉及
    * processList  **参数解释**： 进程列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanTime' => 'int64',
        'clusterId' => null,
        'clusterName' => null,
        'clusterCategory' => null,
        'localImageVulNum' => 'int32',
        'riskConfigNum' => 'int32',
        'privilegedContainerNum' => 'int32',
        'podNum' => 'int32',
        'hostNum' => 'int32',
        'containerNum' => 'int32',
        'portNum' => 'int32',
        'processNum' => 'int32',
        'appNum' => 'int32',
        'localImageVulList' => null,
        'baselineDetectionList' => null,
        'privilegedContainerList' => null,
        'portList' => null,
        'appList' => null,
        'processList' => null
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
    * scanTime  **参数解释**： 体检时间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器数量 **取值范围**： 不涉及
    * podNum  **参数解释**： pod数量 **取值范围**： 不涉及
    * hostNum  **参数解释**： 节点数量 **取值范围**： 不涉及
    * containerNum  **参数解释**： 容器数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 端口数量 **取值范围**： 不涉及
    * processNum  **参数解释**： 进程数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * localImageVulList  **参数解释**： 本地镜像漏洞列表 **取值范围**： 不涉及
    * baselineDetectionList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    * privilegedContainerList  **参数解释**： 特权容器列表 **取值范围**： 不涉及
    * portList  **参数解释**： 端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 软件列表 **取值范围**： 不涉及
    * processList  **参数解释**： 进程列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanTime' => 'scan_time',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'clusterCategory' => 'cluster_category',
            'localImageVulNum' => 'local_image_vul_num',
            'riskConfigNum' => 'risk_config_num',
            'privilegedContainerNum' => 'privileged_container_num',
            'podNum' => 'pod_num',
            'hostNum' => 'host_num',
            'containerNum' => 'container_num',
            'portNum' => 'port_num',
            'processNum' => 'process_num',
            'appNum' => 'app_num',
            'localImageVulList' => 'local_image_vul_list',
            'baselineDetectionList' => 'baseline_detection_list',
            'privilegedContainerList' => 'privileged_container_list',
            'portList' => 'port_list',
            'appList' => 'app_list',
            'processList' => 'process_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanTime  **参数解释**： 体检时间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器数量 **取值范围**： 不涉及
    * podNum  **参数解释**： pod数量 **取值范围**： 不涉及
    * hostNum  **参数解释**： 节点数量 **取值范围**： 不涉及
    * containerNum  **参数解释**： 容器数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 端口数量 **取值范围**： 不涉及
    * processNum  **参数解释**： 进程数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * localImageVulList  **参数解释**： 本地镜像漏洞列表 **取值范围**： 不涉及
    * baselineDetectionList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    * privilegedContainerList  **参数解释**： 特权容器列表 **取值范围**： 不涉及
    * portList  **参数解释**： 端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 软件列表 **取值范围**： 不涉及
    * processList  **参数解释**： 进程列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'scanTime' => 'setScanTime',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'clusterCategory' => 'setClusterCategory',
            'localImageVulNum' => 'setLocalImageVulNum',
            'riskConfigNum' => 'setRiskConfigNum',
            'privilegedContainerNum' => 'setPrivilegedContainerNum',
            'podNum' => 'setPodNum',
            'hostNum' => 'setHostNum',
            'containerNum' => 'setContainerNum',
            'portNum' => 'setPortNum',
            'processNum' => 'setProcessNum',
            'appNum' => 'setAppNum',
            'localImageVulList' => 'setLocalImageVulList',
            'baselineDetectionList' => 'setBaselineDetectionList',
            'privilegedContainerList' => 'setPrivilegedContainerList',
            'portList' => 'setPortList',
            'appList' => 'setAppList',
            'processList' => 'setProcessList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanTime  **参数解释**： 体检时间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterCategory  **参数解释**： 集群类型 **取值范围**： - CCE：CCE Standard集群 - Turbo：CCE Turbo集群
    * localImageVulNum  **参数解释**： 本地镜像漏洞风险数量 **取值范围**： 不涉及
    * riskConfigNum  **参数解释**： 基线风险数量 **取值范围**： 不涉及
    * privilegedContainerNum  **参数解释**： 特权容器数量 **取值范围**： 不涉及
    * podNum  **参数解释**： pod数量 **取值范围**： 不涉及
    * hostNum  **参数解释**： 节点数量 **取值范围**： 不涉及
    * containerNum  **参数解释**： 容器数量 **取值范围**： 不涉及
    * portNum  **参数解释**： 端口数量 **取值范围**： 不涉及
    * processNum  **参数解释**： 进程数量 **取值范围**： 不涉及
    * appNum  **参数解释**： 软件数量 **取值范围**： 不涉及
    * localImageVulList  **参数解释**： 本地镜像漏洞列表 **取值范围**： 不涉及
    * baselineDetectionList  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    * privilegedContainerList  **参数解释**： 特权容器列表 **取值范围**： 不涉及
    * portList  **参数解释**： 端口列表 **取值范围**： 不涉及
    * appList  **参数解释**： 软件列表 **取值范围**： 不涉及
    * processList  **参数解释**： 进程列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'scanTime' => 'getScanTime',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'clusterCategory' => 'getClusterCategory',
            'localImageVulNum' => 'getLocalImageVulNum',
            'riskConfigNum' => 'getRiskConfigNum',
            'privilegedContainerNum' => 'getPrivilegedContainerNum',
            'podNum' => 'getPodNum',
            'hostNum' => 'getHostNum',
            'containerNum' => 'getContainerNum',
            'portNum' => 'getPortNum',
            'processNum' => 'getProcessNum',
            'appNum' => 'getAppNum',
            'localImageVulList' => 'getLocalImageVulList',
            'baselineDetectionList' => 'getBaselineDetectionList',
            'privilegedContainerList' => 'getPrivilegedContainerList',
            'portList' => 'getPortList',
            'appList' => 'getAppList',
            'processList' => 'getProcessList'
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
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterCategory'] = isset($data['clusterCategory']) ? $data['clusterCategory'] : null;
        $this->container['localImageVulNum'] = isset($data['localImageVulNum']) ? $data['localImageVulNum'] : null;
        $this->container['riskConfigNum'] = isset($data['riskConfigNum']) ? $data['riskConfigNum'] : null;
        $this->container['privilegedContainerNum'] = isset($data['privilegedContainerNum']) ? $data['privilegedContainerNum'] : null;
        $this->container['podNum'] = isset($data['podNum']) ? $data['podNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['containerNum'] = isset($data['containerNum']) ? $data['containerNum'] : null;
        $this->container['portNum'] = isset($data['portNum']) ? $data['portNum'] : null;
        $this->container['processNum'] = isset($data['processNum']) ? $data['processNum'] : null;
        $this->container['appNum'] = isset($data['appNum']) ? $data['appNum'] : null;
        $this->container['localImageVulList'] = isset($data['localImageVulList']) ? $data['localImageVulList'] : null;
        $this->container['baselineDetectionList'] = isset($data['baselineDetectionList']) ? $data['baselineDetectionList'] : null;
        $this->container['privilegedContainerList'] = isset($data['privilegedContainerList']) ? $data['privilegedContainerList'] : null;
        $this->container['portList'] = isset($data['portList']) ? $data['portList'] : null;
        $this->container['appList'] = isset($data['appList']) ? $data['appList'] : null;
        $this->container['processList'] = isset($data['processList']) ? $data['processList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
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
    * Gets scanTime
    *  **参数解释**： 体检时间 **取值范围**： 不涉及
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
    * @param int|null $scanTime **参数解释**： 体检时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
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
    *  **参数解释**： 特权容器数量 **取值范围**： 不涉及
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
    * @param int|null $privilegedContainerNum **参数解释**： 特权容器数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPrivilegedContainerNum($privilegedContainerNum)
    {
        $this->container['privilegedContainerNum'] = $privilegedContainerNum;
        return $this;
    }

    /**
    * Gets podNum
    *  **参数解释**： pod数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPodNum()
    {
        return $this->container['podNum'];
    }

    /**
    * Sets podNum
    *
    * @param int|null $podNum **参数解释**： pod数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPodNum($podNum)
    {
        $this->container['podNum'] = $podNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**： 节点数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**： 节点数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets containerNum
    *  **参数解释**： 容器数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getContainerNum()
    {
        return $this->container['containerNum'];
    }

    /**
    * Sets containerNum
    *
    * @param int|null $containerNum **参数解释**： 容器数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContainerNum($containerNum)
    {
        $this->container['containerNum'] = $containerNum;
        return $this;
    }

    /**
    * Gets portNum
    *  **参数解释**： 端口数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPortNum()
    {
        return $this->container['portNum'];
    }

    /**
    * Sets portNum
    *
    * @param int|null $portNum **参数解释**： 端口数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPortNum($portNum)
    {
        $this->container['portNum'] = $portNum;
        return $this;
    }

    /**
    * Gets processNum
    *  **参数解释**： 进程数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getProcessNum()
    {
        return $this->container['processNum'];
    }

    /**
    * Sets processNum
    *
    * @param int|null $processNum **参数解释**： 进程数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessNum($processNum)
    {
        $this->container['processNum'] = $processNum;
        return $this;
    }

    /**
    * Gets appNum
    *  **参数解释**： 软件数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAppNum()
    {
        return $this->container['appNum'];
    }

    /**
    * Sets appNum
    *
    * @param int|null $appNum **参数解释**： 软件数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppNum($appNum)
    {
        $this->container['appNum'] = $appNum;
        return $this;
    }

    /**
    * Gets localImageVulList
    *  **参数解释**： 本地镜像漏洞列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckLocalImageVulInfo[]|null
    */
    public function getLocalImageVulList()
    {
        return $this->container['localImageVulList'];
    }

    /**
    * Sets localImageVulList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckLocalImageVulInfo[]|null $localImageVulList **参数解释**： 本地镜像漏洞列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLocalImageVulList($localImageVulList)
    {
        $this->container['localImageVulList'] = $localImageVulList;
        return $this;
    }

    /**
    * Gets baselineDetectionList
    *  **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckBaseLineDetectionInfo[]|null
    */
    public function getBaselineDetectionList()
    {
        return $this->container['baselineDetectionList'];
    }

    /**
    * Sets baselineDetectionList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckBaseLineDetectionInfo[]|null $baselineDetectionList **参数解释**： 基线检测列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setBaselineDetectionList($baselineDetectionList)
    {
        $this->container['baselineDetectionList'] = $baselineDetectionList;
        return $this;
    }

    /**
    * Gets privilegedContainerList
    *  **参数解释**： 特权容器列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckPrivilegedContainerInfo[]|null
    */
    public function getPrivilegedContainerList()
    {
        return $this->container['privilegedContainerList'];
    }

    /**
    * Sets privilegedContainerList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckPrivilegedContainerInfo[]|null $privilegedContainerList **参数解释**： 特权容器列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPrivilegedContainerList($privilegedContainerList)
    {
        $this->container['privilegedContainerList'] = $privilegedContainerList;
        return $this;
    }

    /**
    * Gets portList
    *  **参数解释**： 端口列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckPortInfo[]|null
    */
    public function getPortList()
    {
        return $this->container['portList'];
    }

    /**
    * Sets portList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckPortInfo[]|null $portList **参数解释**： 端口列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPortList($portList)
    {
        $this->container['portList'] = $portList;
        return $this;
    }

    /**
    * Gets appList
    *  **参数解释**： 软件列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckAppInfo[]|null
    */
    public function getAppList()
    {
        return $this->container['appList'];
    }

    /**
    * Sets appList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckAppInfo[]|null $appList **参数解释**： 软件列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppList($appList)
    {
        $this->container['appList'] = $appList;
        return $this;
    }

    /**
    * Gets processList
    *  **参数解释**： 进程列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckProcessInfo[]|null
    */
    public function getProcessList()
    {
        return $this->container['processList'];
    }

    /**
    * Sets processList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterSecurityCheckProcessInfo[]|null $processList **参数解释**： 进程列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessList($processList)
    {
        $this->container['processList'] = $processList;
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

