<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncMode  集群和karmada控制面之间的同步模式
    * clusterGroupId  容器舰队id
    * manageType  集群类型，取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * ruleNamespaces  集群包含的RuleNamespace列表
    * apiEndpoint  apiserver地址
    * secretRef  secretRef
    * insecureSkipTlsVerification  是否跳过https校验
    * proxyUrl  代理链接
    * provider  提供商
    * type  类型
    * category  类别
    * enableDistMgt  CCE Turbo集群是否支持管理边缘基础设施。
    * region  区域
    * country  国家
    * city  城市
    * projectId  项目id
    * projectName  项目名
    * zone  地区
    * taints  污点
    * isDownloadedCert  是否已经下载过证书
    * policyId  策略管理id
    * operatorNamespace  集群所属domainID
    * connectProxyEndpoints  连接代理服务器的终端节点服务ID列表，仅非华为云集群返回该字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncMode' => 'string',
            'clusterGroupId' => 'string',
            'manageType' => 'string',
            'ruleNamespaces' => '\HuaweiCloud\SDK\Ucs\V1\Model\RuleNamespace[]',
            'apiEndpoint' => 'string',
            'secretRef' => '\HuaweiCloud\SDK\Ucs\V1\Model\LocalSecretReference',
            'insecureSkipTlsVerification' => 'bool',
            'proxyUrl' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'category' => 'string',
            'enableDistMgt' => 'bool',
            'region' => 'string',
            'country' => 'string',
            'city' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'zone' => 'string',
            'taints' => '\HuaweiCloud\SDK\Ucs\V1\Model\Taint[]',
            'isDownloadedCert' => 'bool',
            'policyId' => 'string',
            'operatorNamespace' => 'string',
            'connectProxyEndpoints' => '\HuaweiCloud\SDK\Ucs\V1\Model\ConnectEndpoint[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncMode  集群和karmada控制面之间的同步模式
    * clusterGroupId  容器舰队id
    * manageType  集群类型，取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * ruleNamespaces  集群包含的RuleNamespace列表
    * apiEndpoint  apiserver地址
    * secretRef  secretRef
    * insecureSkipTlsVerification  是否跳过https校验
    * proxyUrl  代理链接
    * provider  提供商
    * type  类型
    * category  类别
    * enableDistMgt  CCE Turbo集群是否支持管理边缘基础设施。
    * region  区域
    * country  国家
    * city  城市
    * projectId  项目id
    * projectName  项目名
    * zone  地区
    * taints  污点
    * isDownloadedCert  是否已经下载过证书
    * policyId  策略管理id
    * operatorNamespace  集群所属domainID
    * connectProxyEndpoints  连接代理服务器的终端节点服务ID列表，仅非华为云集群返回该字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncMode' => null,
        'clusterGroupId' => null,
        'manageType' => null,
        'ruleNamespaces' => null,
        'apiEndpoint' => null,
        'secretRef' => null,
        'insecureSkipTlsVerification' => null,
        'proxyUrl' => null,
        'provider' => null,
        'type' => null,
        'category' => null,
        'enableDistMgt' => null,
        'region' => null,
        'country' => null,
        'city' => null,
        'projectId' => null,
        'projectName' => null,
        'zone' => null,
        'taints' => null,
        'isDownloadedCert' => null,
        'policyId' => null,
        'operatorNamespace' => null,
        'connectProxyEndpoints' => null
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
    * syncMode  集群和karmada控制面之间的同步模式
    * clusterGroupId  容器舰队id
    * manageType  集群类型，取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * ruleNamespaces  集群包含的RuleNamespace列表
    * apiEndpoint  apiserver地址
    * secretRef  secretRef
    * insecureSkipTlsVerification  是否跳过https校验
    * proxyUrl  代理链接
    * provider  提供商
    * type  类型
    * category  类别
    * enableDistMgt  CCE Turbo集群是否支持管理边缘基础设施。
    * region  区域
    * country  国家
    * city  城市
    * projectId  项目id
    * projectName  项目名
    * zone  地区
    * taints  污点
    * isDownloadedCert  是否已经下载过证书
    * policyId  策略管理id
    * operatorNamespace  集群所属domainID
    * connectProxyEndpoints  连接代理服务器的终端节点服务ID列表，仅非华为云集群返回该字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncMode' => 'syncMode',
            'clusterGroupId' => 'clusterGroupID',
            'manageType' => 'manageType',
            'ruleNamespaces' => 'ruleNamespaces',
            'apiEndpoint' => 'apiEndpoint',
            'secretRef' => 'secretRef',
            'insecureSkipTlsVerification' => 'insecureSkipTLSVerification',
            'proxyUrl' => 'proxyURL',
            'provider' => 'provider',
            'type' => 'type',
            'category' => 'category',
            'enableDistMgt' => 'enableDistMgt',
            'region' => 'region',
            'country' => 'country',
            'city' => 'city',
            'projectId' => 'projectID',
            'projectName' => 'projectName',
            'zone' => 'zone',
            'taints' => 'taints',
            'isDownloadedCert' => 'IsDownloadedCert',
            'policyId' => 'policyId',
            'operatorNamespace' => 'operatorNamespace',
            'connectProxyEndpoints' => 'connectProxyEndpoints'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncMode  集群和karmada控制面之间的同步模式
    * clusterGroupId  容器舰队id
    * manageType  集群类型，取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * ruleNamespaces  集群包含的RuleNamespace列表
    * apiEndpoint  apiserver地址
    * secretRef  secretRef
    * insecureSkipTlsVerification  是否跳过https校验
    * proxyUrl  代理链接
    * provider  提供商
    * type  类型
    * category  类别
    * enableDistMgt  CCE Turbo集群是否支持管理边缘基础设施。
    * region  区域
    * country  国家
    * city  城市
    * projectId  项目id
    * projectName  项目名
    * zone  地区
    * taints  污点
    * isDownloadedCert  是否已经下载过证书
    * policyId  策略管理id
    * operatorNamespace  集群所属domainID
    * connectProxyEndpoints  连接代理服务器的终端节点服务ID列表，仅非华为云集群返回该字段
    *
    * @var string[]
    */
    protected static $setters = [
            'syncMode' => 'setSyncMode',
            'clusterGroupId' => 'setClusterGroupId',
            'manageType' => 'setManageType',
            'ruleNamespaces' => 'setRuleNamespaces',
            'apiEndpoint' => 'setApiEndpoint',
            'secretRef' => 'setSecretRef',
            'insecureSkipTlsVerification' => 'setInsecureSkipTlsVerification',
            'proxyUrl' => 'setProxyUrl',
            'provider' => 'setProvider',
            'type' => 'setType',
            'category' => 'setCategory',
            'enableDistMgt' => 'setEnableDistMgt',
            'region' => 'setRegion',
            'country' => 'setCountry',
            'city' => 'setCity',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'zone' => 'setZone',
            'taints' => 'setTaints',
            'isDownloadedCert' => 'setIsDownloadedCert',
            'policyId' => 'setPolicyId',
            'operatorNamespace' => 'setOperatorNamespace',
            'connectProxyEndpoints' => 'setConnectProxyEndpoints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncMode  集群和karmada控制面之间的同步模式
    * clusterGroupId  容器舰队id
    * manageType  集群类型，取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * ruleNamespaces  集群包含的RuleNamespace列表
    * apiEndpoint  apiserver地址
    * secretRef  secretRef
    * insecureSkipTlsVerification  是否跳过https校验
    * proxyUrl  代理链接
    * provider  提供商
    * type  类型
    * category  类别
    * enableDistMgt  CCE Turbo集群是否支持管理边缘基础设施。
    * region  区域
    * country  国家
    * city  城市
    * projectId  项目id
    * projectName  项目名
    * zone  地区
    * taints  污点
    * isDownloadedCert  是否已经下载过证书
    * policyId  策略管理id
    * operatorNamespace  集群所属domainID
    * connectProxyEndpoints  连接代理服务器的终端节点服务ID列表，仅非华为云集群返回该字段
    *
    * @var string[]
    */
    protected static $getters = [
            'syncMode' => 'getSyncMode',
            'clusterGroupId' => 'getClusterGroupId',
            'manageType' => 'getManageType',
            'ruleNamespaces' => 'getRuleNamespaces',
            'apiEndpoint' => 'getApiEndpoint',
            'secretRef' => 'getSecretRef',
            'insecureSkipTlsVerification' => 'getInsecureSkipTlsVerification',
            'proxyUrl' => 'getProxyUrl',
            'provider' => 'getProvider',
            'type' => 'getType',
            'category' => 'getCategory',
            'enableDistMgt' => 'getEnableDistMgt',
            'region' => 'getRegion',
            'country' => 'getCountry',
            'city' => 'getCity',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'zone' => 'getZone',
            'taints' => 'getTaints',
            'isDownloadedCert' => 'getIsDownloadedCert',
            'policyId' => 'getPolicyId',
            'operatorNamespace' => 'getOperatorNamespace',
            'connectProxyEndpoints' => 'getConnectProxyEndpoints'
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
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['clusterGroupId'] = isset($data['clusterGroupId']) ? $data['clusterGroupId'] : null;
        $this->container['manageType'] = isset($data['manageType']) ? $data['manageType'] : null;
        $this->container['ruleNamespaces'] = isset($data['ruleNamespaces']) ? $data['ruleNamespaces'] : null;
        $this->container['apiEndpoint'] = isset($data['apiEndpoint']) ? $data['apiEndpoint'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
        $this->container['insecureSkipTlsVerification'] = isset($data['insecureSkipTlsVerification']) ? $data['insecureSkipTlsVerification'] : null;
        $this->container['proxyUrl'] = isset($data['proxyUrl']) ? $data['proxyUrl'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['enableDistMgt'] = isset($data['enableDistMgt']) ? $data['enableDistMgt'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['isDownloadedCert'] = isset($data['isDownloadedCert']) ? $data['isDownloadedCert'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['operatorNamespace'] = isset($data['operatorNamespace']) ? $data['operatorNamespace'] : null;
        $this->container['connectProxyEndpoints'] = isset($data['connectProxyEndpoints']) ? $data['connectProxyEndpoints'] : null;
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
    * Gets syncMode
    *  集群和karmada控制面之间的同步模式
    *
    * @return string|null
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string|null $syncMode 集群和karmada控制面之间的同步模式
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
        return $this;
    }

    /**
    * Gets clusterGroupId
    *  容器舰队id
    *
    * @return string|null
    */
    public function getClusterGroupId()
    {
        return $this->container['clusterGroupId'];
    }

    /**
    * Sets clusterGroupId
    *
    * @param string|null $clusterGroupId 容器舰队id
    *
    * @return $this
    */
    public function setClusterGroupId($clusterGroupId)
    {
        $this->container['clusterGroupId'] = $clusterGroupId;
        return $this;
    }

    /**
    * Gets manageType
    *  集群类型，取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    *
    * @return string|null
    */
    public function getManageType()
    {
        return $this->container['manageType'];
    }

    /**
    * Sets manageType
    *
    * @param string|null $manageType 集群类型，取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    *
    * @return $this
    */
    public function setManageType($manageType)
    {
        $this->container['manageType'] = $manageType;
        return $this;
    }

    /**
    * Gets ruleNamespaces
    *  集群包含的RuleNamespace列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\RuleNamespace[]|null
    */
    public function getRuleNamespaces()
    {
        return $this->container['ruleNamespaces'];
    }

    /**
    * Sets ruleNamespaces
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\RuleNamespace[]|null $ruleNamespaces 集群包含的RuleNamespace列表
    *
    * @return $this
    */
    public function setRuleNamespaces($ruleNamespaces)
    {
        $this->container['ruleNamespaces'] = $ruleNamespaces;
        return $this;
    }

    /**
    * Gets apiEndpoint
    *  apiserver地址
    *
    * @return string|null
    */
    public function getApiEndpoint()
    {
        return $this->container['apiEndpoint'];
    }

    /**
    * Sets apiEndpoint
    *
    * @param string|null $apiEndpoint apiserver地址
    *
    * @return $this
    */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->container['apiEndpoint'] = $apiEndpoint;
        return $this;
    }

    /**
    * Gets secretRef
    *  secretRef
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\LocalSecretReference|null
    */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
    * Sets secretRef
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\LocalSecretReference|null $secretRef secretRef
    *
    * @return $this
    */
    public function setSecretRef($secretRef)
    {
        $this->container['secretRef'] = $secretRef;
        return $this;
    }

    /**
    * Gets insecureSkipTlsVerification
    *  是否跳过https校验
    *
    * @return bool|null
    */
    public function getInsecureSkipTlsVerification()
    {
        return $this->container['insecureSkipTlsVerification'];
    }

    /**
    * Sets insecureSkipTlsVerification
    *
    * @param bool|null $insecureSkipTlsVerification 是否跳过https校验
    *
    * @return $this
    */
    public function setInsecureSkipTlsVerification($insecureSkipTlsVerification)
    {
        $this->container['insecureSkipTlsVerification'] = $insecureSkipTlsVerification;
        return $this;
    }

    /**
    * Gets proxyUrl
    *  代理链接
    *
    * @return string|null
    */
    public function getProxyUrl()
    {
        return $this->container['proxyUrl'];
    }

    /**
    * Sets proxyUrl
    *
    * @param string|null $proxyUrl 代理链接
    *
    * @return $this
    */
    public function setProxyUrl($proxyUrl)
    {
        $this->container['proxyUrl'] = $proxyUrl;
        return $this;
    }

    /**
    * Gets provider
    *  提供商
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 提供商
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets category
    *  类别
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets enableDistMgt
    *  CCE Turbo集群是否支持管理边缘基础设施。
    *
    * @return bool|null
    */
    public function getEnableDistMgt()
    {
        return $this->container['enableDistMgt'];
    }

    /**
    * Sets enableDistMgt
    *
    * @param bool|null $enableDistMgt CCE Turbo集群是否支持管理边缘基础设施。
    *
    * @return $this
    */
    public function setEnableDistMgt($enableDistMgt)
    {
        $this->container['enableDistMgt'] = $enableDistMgt;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets country
    *  国家
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country 国家
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets city
    *  城市
    *
    * @return string|null
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string|null $city 城市
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets zone
    *  地区
    *
    * @return string|null
    */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
    * Sets zone
    *
    * @param string|null $zone 地区
    *
    * @return $this
    */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;
        return $this;
    }

    /**
    * Gets taints
    *  污点
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Taint[]|null
    */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
    * Sets taints
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Taint[]|null $taints 污点
    *
    * @return $this
    */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;
        return $this;
    }

    /**
    * Gets isDownloadedCert
    *  是否已经下载过证书
    *
    * @return bool|null
    */
    public function getIsDownloadedCert()
    {
        return $this->container['isDownloadedCert'];
    }

    /**
    * Sets isDownloadedCert
    *
    * @param bool|null $isDownloadedCert 是否已经下载过证书
    *
    * @return $this
    */
    public function setIsDownloadedCert($isDownloadedCert)
    {
        $this->container['isDownloadedCert'] = $isDownloadedCert;
        return $this;
    }

    /**
    * Gets policyId
    *  策略管理id
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略管理id
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets operatorNamespace
    *  集群所属domainID
    *
    * @return string|null
    */
    public function getOperatorNamespace()
    {
        return $this->container['operatorNamespace'];
    }

    /**
    * Sets operatorNamespace
    *
    * @param string|null $operatorNamespace 集群所属domainID
    *
    * @return $this
    */
    public function setOperatorNamespace($operatorNamespace)
    {
        $this->container['operatorNamespace'] = $operatorNamespace;
        return $this;
    }

    /**
    * Gets connectProxyEndpoints
    *  连接代理服务器的终端节点服务ID列表，仅非华为云集群返回该字段
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ConnectEndpoint[]|null
    */
    public function getConnectProxyEndpoints()
    {
        return $this->container['connectProxyEndpoints'];
    }

    /**
    * Sets connectProxyEndpoints
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ConnectEndpoint[]|null $connectProxyEndpoints 连接代理服务器的终端节点服务ID列表，仅非华为云集群返回该字段
    *
    * @return $this
    */
    public function setConnectProxyEndpoints($connectProxyEndpoints)
    {
        $this->container['connectProxyEndpoints'] = $connectProxyEndpoints;
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

