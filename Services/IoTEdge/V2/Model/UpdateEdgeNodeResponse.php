<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEdgeNodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEdgeNodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logConfigs  边缘节点在IEF的日志配置
    * haConfig  haConfig
    * edgeNodeId  边缘节点Id
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceSpecTypes  节点所购买的资源类型的列表
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点主机ip
    * name  边缘节点名称
    * state  边缘节点状态
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * createTime  边缘节点创建时间
    * updateTime  边缘节点更新时间
    * osName  边缘节点操作系统名称
    * arch  边缘节点操作系统架构
    * hostName  边缘节点主机名
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * containerVersion  容器运行时版本
    * type  节点所属资源类型：advanced|standard
    * securityLevel  节点的安全等级，MEDIUM边缘节数据上报不进行加密，HIGH对数据上报进行加密。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * basePath  basePath
    * hardwareModel  注册节点网关配置
    * offlineCacheConfigs  offlineCacheConfigs
    * deviceAuthInfo  deviceAuthInfo
    * deviceDataFormat  节点使用的数据格式，默认为iotda物模型1.0格式，可以选择属性平铺数据格式flat_json
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logConfigs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\LogConfigDTO[]',
            'haConfig' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\HaConfigDTO',
            'edgeNodeId' => 'string',
            'instanceId' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'spaceId' => 'string',
            'resourceSpecTypes' => 'string[]',
            'resourceIds' => 'string[]',
            'ips' => 'string[]',
            'name' => 'string',
            'state' => 'string',
            'softwareVersion' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'osName' => 'string',
            'arch' => 'string',
            'hostName' => 'string',
            'nics' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\Nic[]',
            'specification' => 'string',
            'aiCardType' => 'string',
            'npuLibraryPath' => 'string',
            'containerVersion' => 'string',
            'type' => 'string',
            'securityLevel' => 'string',
            'reliabilityLevel' => 'string',
            'storagePeriod' => 'int',
            'basePath' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\BasePathDTO',
            'hardwareModel' => 'string',
            'offlineCacheConfigs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\OfflineCacheConfigsDTO',
            'deviceAuthInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceAuthInfoDisplayDTO',
            'deviceDataFormat' => 'string',
            'automaticUpgrade' => 'string',
            'deviceDataRecord' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceDataRecord',
            'metricReport' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logConfigs  边缘节点在IEF的日志配置
    * haConfig  haConfig
    * edgeNodeId  边缘节点Id
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceSpecTypes  节点所购买的资源类型的列表
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点主机ip
    * name  边缘节点名称
    * state  边缘节点状态
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * createTime  边缘节点创建时间
    * updateTime  边缘节点更新时间
    * osName  边缘节点操作系统名称
    * arch  边缘节点操作系统架构
    * hostName  边缘节点主机名
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * containerVersion  容器运行时版本
    * type  节点所属资源类型：advanced|standard
    * securityLevel  节点的安全等级，MEDIUM边缘节数据上报不进行加密，HIGH对数据上报进行加密。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * basePath  basePath
    * hardwareModel  注册节点网关配置
    * offlineCacheConfigs  offlineCacheConfigs
    * deviceAuthInfo  deviceAuthInfo
    * deviceDataFormat  节点使用的数据格式，默认为iotda物模型1.0格式，可以选择属性平铺数据格式flat_json
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logConfigs' => null,
        'haConfig' => null,
        'edgeNodeId' => null,
        'instanceId' => null,
        'productId' => null,
        'productName' => null,
        'spaceId' => null,
        'resourceSpecTypes' => null,
        'resourceIds' => null,
        'ips' => null,
        'name' => null,
        'state' => null,
        'softwareVersion' => null,
        'createTime' => null,
        'updateTime' => null,
        'osName' => null,
        'arch' => null,
        'hostName' => null,
        'nics' => null,
        'specification' => null,
        'aiCardType' => null,
        'npuLibraryPath' => null,
        'containerVersion' => null,
        'type' => null,
        'securityLevel' => null,
        'reliabilityLevel' => null,
        'storagePeriod' => 'int32',
        'basePath' => null,
        'hardwareModel' => null,
        'offlineCacheConfigs' => null,
        'deviceAuthInfo' => null,
        'deviceDataFormat' => null,
        'automaticUpgrade' => null,
        'deviceDataRecord' => null,
        'metricReport' => null
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
    * logConfigs  边缘节点在IEF的日志配置
    * haConfig  haConfig
    * edgeNodeId  边缘节点Id
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceSpecTypes  节点所购买的资源类型的列表
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点主机ip
    * name  边缘节点名称
    * state  边缘节点状态
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * createTime  边缘节点创建时间
    * updateTime  边缘节点更新时间
    * osName  边缘节点操作系统名称
    * arch  边缘节点操作系统架构
    * hostName  边缘节点主机名
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * containerVersion  容器运行时版本
    * type  节点所属资源类型：advanced|standard
    * securityLevel  节点的安全等级，MEDIUM边缘节数据上报不进行加密，HIGH对数据上报进行加密。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * basePath  basePath
    * hardwareModel  注册节点网关配置
    * offlineCacheConfigs  offlineCacheConfigs
    * deviceAuthInfo  deviceAuthInfo
    * deviceDataFormat  节点使用的数据格式，默认为iotda物模型1.0格式，可以选择属性平铺数据格式flat_json
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logConfigs' => 'log_configs',
            'haConfig' => 'ha_config',
            'edgeNodeId' => 'edge_node_id',
            'instanceId' => 'instance_id',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'spaceId' => 'space_id',
            'resourceSpecTypes' => 'resource_spec_types',
            'resourceIds' => 'resource_ids',
            'ips' => 'ips',
            'name' => 'name',
            'state' => 'state',
            'softwareVersion' => 'software_version',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'osName' => 'os_name',
            'arch' => 'arch',
            'hostName' => 'host_name',
            'nics' => 'nics',
            'specification' => 'specification',
            'aiCardType' => 'ai_card_type',
            'npuLibraryPath' => 'npu_library_path',
            'containerVersion' => 'container_version',
            'type' => 'type',
            'securityLevel' => 'security_level',
            'reliabilityLevel' => 'reliability_level',
            'storagePeriod' => 'storage_period',
            'basePath' => 'base_path',
            'hardwareModel' => 'hardware_model',
            'offlineCacheConfigs' => 'offline_cache_configs',
            'deviceAuthInfo' => 'device_auth_info',
            'deviceDataFormat' => 'device_data_format',
            'automaticUpgrade' => 'automatic_upgrade',
            'deviceDataRecord' => 'device_data_record',
            'metricReport' => 'metric_report'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logConfigs  边缘节点在IEF的日志配置
    * haConfig  haConfig
    * edgeNodeId  边缘节点Id
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceSpecTypes  节点所购买的资源类型的列表
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点主机ip
    * name  边缘节点名称
    * state  边缘节点状态
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * createTime  边缘节点创建时间
    * updateTime  边缘节点更新时间
    * osName  边缘节点操作系统名称
    * arch  边缘节点操作系统架构
    * hostName  边缘节点主机名
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * containerVersion  容器运行时版本
    * type  节点所属资源类型：advanced|standard
    * securityLevel  节点的安全等级，MEDIUM边缘节数据上报不进行加密，HIGH对数据上报进行加密。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * basePath  basePath
    * hardwareModel  注册节点网关配置
    * offlineCacheConfigs  offlineCacheConfigs
    * deviceAuthInfo  deviceAuthInfo
    * deviceDataFormat  节点使用的数据格式，默认为iotda物模型1.0格式，可以选择属性平铺数据格式flat_json
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    *
    * @var string[]
    */
    protected static $setters = [
            'logConfigs' => 'setLogConfigs',
            'haConfig' => 'setHaConfig',
            'edgeNodeId' => 'setEdgeNodeId',
            'instanceId' => 'setInstanceId',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'spaceId' => 'setSpaceId',
            'resourceSpecTypes' => 'setResourceSpecTypes',
            'resourceIds' => 'setResourceIds',
            'ips' => 'setIps',
            'name' => 'setName',
            'state' => 'setState',
            'softwareVersion' => 'setSoftwareVersion',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'osName' => 'setOsName',
            'arch' => 'setArch',
            'hostName' => 'setHostName',
            'nics' => 'setNics',
            'specification' => 'setSpecification',
            'aiCardType' => 'setAiCardType',
            'npuLibraryPath' => 'setNpuLibraryPath',
            'containerVersion' => 'setContainerVersion',
            'type' => 'setType',
            'securityLevel' => 'setSecurityLevel',
            'reliabilityLevel' => 'setReliabilityLevel',
            'storagePeriod' => 'setStoragePeriod',
            'basePath' => 'setBasePath',
            'hardwareModel' => 'setHardwareModel',
            'offlineCacheConfigs' => 'setOfflineCacheConfigs',
            'deviceAuthInfo' => 'setDeviceAuthInfo',
            'deviceDataFormat' => 'setDeviceDataFormat',
            'automaticUpgrade' => 'setAutomaticUpgrade',
            'deviceDataRecord' => 'setDeviceDataRecord',
            'metricReport' => 'setMetricReport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logConfigs  边缘节点在IEF的日志配置
    * haConfig  haConfig
    * edgeNodeId  边缘节点Id
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceSpecTypes  节点所购买的资源类型的列表
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点主机ip
    * name  边缘节点名称
    * state  边缘节点状态
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    * createTime  边缘节点创建时间
    * updateTime  边缘节点更新时间
    * osName  边缘节点操作系统名称
    * arch  边缘节点操作系统架构
    * hostName  边缘节点主机名
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * containerVersion  容器运行时版本
    * type  节点所属资源类型：advanced|standard
    * securityLevel  节点的安全等级，MEDIUM边缘节数据上报不进行加密，HIGH对数据上报进行加密。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * basePath  basePath
    * hardwareModel  注册节点网关配置
    * offlineCacheConfigs  offlineCacheConfigs
    * deviceAuthInfo  deviceAuthInfo
    * deviceDataFormat  节点使用的数据格式，默认为iotda物模型1.0格式，可以选择属性平铺数据格式flat_json
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    *
    * @var string[]
    */
    protected static $getters = [
            'logConfigs' => 'getLogConfigs',
            'haConfig' => 'getHaConfig',
            'edgeNodeId' => 'getEdgeNodeId',
            'instanceId' => 'getInstanceId',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'spaceId' => 'getSpaceId',
            'resourceSpecTypes' => 'getResourceSpecTypes',
            'resourceIds' => 'getResourceIds',
            'ips' => 'getIps',
            'name' => 'getName',
            'state' => 'getState',
            'softwareVersion' => 'getSoftwareVersion',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'osName' => 'getOsName',
            'arch' => 'getArch',
            'hostName' => 'getHostName',
            'nics' => 'getNics',
            'specification' => 'getSpecification',
            'aiCardType' => 'getAiCardType',
            'npuLibraryPath' => 'getNpuLibraryPath',
            'containerVersion' => 'getContainerVersion',
            'type' => 'getType',
            'securityLevel' => 'getSecurityLevel',
            'reliabilityLevel' => 'getReliabilityLevel',
            'storagePeriod' => 'getStoragePeriod',
            'basePath' => 'getBasePath',
            'hardwareModel' => 'getHardwareModel',
            'offlineCacheConfigs' => 'getOfflineCacheConfigs',
            'deviceAuthInfo' => 'getDeviceAuthInfo',
            'deviceDataFormat' => 'getDeviceDataFormat',
            'automaticUpgrade' => 'getAutomaticUpgrade',
            'deviceDataRecord' => 'getDeviceDataRecord',
            'metricReport' => 'getMetricReport'
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
        $this->container['logConfigs'] = isset($data['logConfigs']) ? $data['logConfigs'] : null;
        $this->container['haConfig'] = isset($data['haConfig']) ? $data['haConfig'] : null;
        $this->container['edgeNodeId'] = isset($data['edgeNodeId']) ? $data['edgeNodeId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['resourceSpecTypes'] = isset($data['resourceSpecTypes']) ? $data['resourceSpecTypes'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['softwareVersion'] = isset($data['softwareVersion']) ? $data['softwareVersion'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['aiCardType'] = isset($data['aiCardType']) ? $data['aiCardType'] : null;
        $this->container['npuLibraryPath'] = isset($data['npuLibraryPath']) ? $data['npuLibraryPath'] : null;
        $this->container['containerVersion'] = isset($data['containerVersion']) ? $data['containerVersion'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['reliabilityLevel'] = isset($data['reliabilityLevel']) ? $data['reliabilityLevel'] : null;
        $this->container['storagePeriod'] = isset($data['storagePeriod']) ? $data['storagePeriod'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['hardwareModel'] = isset($data['hardwareModel']) ? $data['hardwareModel'] : null;
        $this->container['offlineCacheConfigs'] = isset($data['offlineCacheConfigs']) ? $data['offlineCacheConfigs'] : null;
        $this->container['deviceAuthInfo'] = isset($data['deviceAuthInfo']) ? $data['deviceAuthInfo'] : null;
        $this->container['deviceDataFormat'] = isset($data['deviceDataFormat']) ? $data['deviceDataFormat'] : null;
        $this->container['automaticUpgrade'] = isset($data['automaticUpgrade']) ? $data['automaticUpgrade'] : null;
        $this->container['deviceDataRecord'] = isset($data['deviceDataRecord']) ? $data['deviceDataRecord'] : null;
        $this->container['metricReport'] = isset($data['metricReport']) ? $data['metricReport'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['edgeNodeId']) && (mb_strlen($this->container['edgeNodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeNodeId']) && (mb_strlen($this->container['edgeNodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['edgeNodeId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['edgeNodeId'])) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-f0-9-]{1,36}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-f0-9-]{1,36}$/.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 36)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productId']) && !preg_match("/^[a-f0-9-]{1,36}$/", $this->container['productId'])) {
                $invalidProperties[] = "invalid value for 'productId', must be conform to the pattern /^[a-f0-9-]{1,36}$/.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 64)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 1)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productName']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/", $this->container['productName'])) {
                $invalidProperties[] = "invalid value for 'productName', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['spaceId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['spaceId'])) {
                $invalidProperties[] = "invalid value for 'spaceId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 4)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['softwareVersion']) && (mb_strlen($this->container['softwareVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'softwareVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['softwareVersion']) && (mb_strlen($this->container['softwareVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'softwareVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['softwareVersion']) && !preg_match("/^[A-Za-z0-9-_$]*$/", $this->container['softwareVersion'])) {
                $invalidProperties[] = "invalid value for 'softwareVersion', must be conform to the pattern /^[A-Za-z0-9-_$]*$/.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 64)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 1)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) > 16)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) < 4)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) > 64)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) < 0)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aiCardType']) && (mb_strlen($this->container['aiCardType']) > 16)) {
                $invalidProperties[] = "invalid value for 'aiCardType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['aiCardType']) && (mb_strlen($this->container['aiCardType']) < 0)) {
                $invalidProperties[] = "invalid value for 'aiCardType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['npuLibraryPath']) && (mb_strlen($this->container['npuLibraryPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'npuLibraryPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['npuLibraryPath']) && (mb_strlen($this->container['npuLibraryPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'npuLibraryPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['npuLibraryPath']) && !preg_match("/^\/([a-zA-Z_0-9-]+\/)*$/", $this->container['npuLibraryPath'])) {
                $invalidProperties[] = "invalid value for 'npuLibraryPath', must be conform to the pattern /^\/([a-zA-Z_0-9-]+\/)*$/.";
            }
            if (!is_null($this->container['containerVersion']) && (mb_strlen($this->container['containerVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'containerVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['containerVersion']) && (mb_strlen($this->container['containerVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 4)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['securityLevel']) && (mb_strlen($this->container['securityLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'securityLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['securityLevel']) && (mb_strlen($this->container['securityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['securityLevel']) && !preg_match("/(MEDIUM|HIGH)/", $this->container['securityLevel'])) {
                $invalidProperties[] = "invalid value for 'securityLevel', must be conform to the pattern /(MEDIUM|HIGH)/.";
            }
            if (!is_null($this->container['reliabilityLevel']) && (mb_strlen($this->container['reliabilityLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'reliabilityLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['reliabilityLevel']) && (mb_strlen($this->container['reliabilityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'reliabilityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reliabilityLevel']) && !preg_match("/(MEDIUM|LOW)/", $this->container['reliabilityLevel'])) {
                $invalidProperties[] = "invalid value for 'reliabilityLevel', must be conform to the pattern /(MEDIUM|LOW)/.";
            }
            if (!is_null($this->container['storagePeriod']) && ($this->container['storagePeriod'] > 7)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['storagePeriod']) && ($this->container['storagePeriod'] < 0)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hardwareModel']) && (mb_strlen($this->container['hardwareModel']) > 1024)) {
                $invalidProperties[] = "invalid value for 'hardwareModel', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['hardwareModel']) && (mb_strlen($this->container['hardwareModel']) < 0)) {
                $invalidProperties[] = "invalid value for 'hardwareModel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceDataFormat']) && (mb_strlen($this->container['deviceDataFormat']) > 16)) {
                $invalidProperties[] = "invalid value for 'deviceDataFormat', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['deviceDataFormat']) && (mb_strlen($this->container['deviceDataFormat']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceDataFormat', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceDataFormat']) && !preg_match("/(iotda_1.0|flat_json)/", $this->container['deviceDataFormat'])) {
                $invalidProperties[] = "invalid value for 'deviceDataFormat', must be conform to the pattern /(iotda_1.0|flat_json)/.";
            }
            if (!is_null($this->container['automaticUpgrade']) && (mb_strlen($this->container['automaticUpgrade']) > 16)) {
                $invalidProperties[] = "invalid value for 'automaticUpgrade', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['automaticUpgrade']) && (mb_strlen($this->container['automaticUpgrade']) < 0)) {
                $invalidProperties[] = "invalid value for 'automaticUpgrade', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['automaticUpgrade']) && !preg_match("/(OFF|IMMEDIATE)/", $this->container['automaticUpgrade'])) {
                $invalidProperties[] = "invalid value for 'automaticUpgrade', must be conform to the pattern /(OFF|IMMEDIATE)/.";
            }
            if (!is_null($this->container['metricReport']) && (mb_strlen($this->container['metricReport']) > 16)) {
                $invalidProperties[] = "invalid value for 'metricReport', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['metricReport']) && (mb_strlen($this->container['metricReport']) < 0)) {
                $invalidProperties[] = "invalid value for 'metricReport', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['metricReport']) && !preg_match("/(off|on)/", $this->container['metricReport'])) {
                $invalidProperties[] = "invalid value for 'metricReport', must be conform to the pattern /(off|on)/.";
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
    * Gets logConfigs
    *  边缘节点在IEF的日志配置
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\LogConfigDTO[]|null
    */
    public function getLogConfigs()
    {
        return $this->container['logConfigs'];
    }

    /**
    * Sets logConfigs
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\LogConfigDTO[]|null $logConfigs 边缘节点在IEF的日志配置
    *
    * @return $this
    */
    public function setLogConfigs($logConfigs)
    {
        $this->container['logConfigs'] = $logConfigs;
        return $this;
    }

    /**
    * Gets haConfig
    *  haConfig
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\HaConfigDTO|null
    */
    public function getHaConfig()
    {
        return $this->container['haConfig'];
    }

    /**
    * Sets haConfig
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\HaConfigDTO|null $haConfig haConfig
    *
    * @return $this
    */
    public function setHaConfig($haConfig)
    {
        $this->container['haConfig'] = $haConfig;
        return $this;
    }

    /**
    * Gets edgeNodeId
    *  边缘节点Id
    *
    * @return string|null
    */
    public function getEdgeNodeId()
    {
        return $this->container['edgeNodeId'];
    }

    /**
    * Sets edgeNodeId
    *
    * @param string|null $edgeNodeId 边缘节点Id
    *
    * @return $this
    */
    public function setEdgeNodeId($edgeNodeId)
    {
        $this->container['edgeNodeId'] = $edgeNodeId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets productId
    *  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 边缘节点关联的产品ID，用于唯一标识一个产品模型。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  边缘节点关联的产品名称。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 边缘节点关联的产品名称。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets spaceId
    *  资源空间id，对应IOTDA云服务接口参数中的app_id。
    *
    * @return string|null
    */
    public function getSpaceId()
    {
        return $this->container['spaceId'];
    }

    /**
    * Sets spaceId
    *
    * @param string|null $spaceId 资源空间id，对应IOTDA云服务接口参数中的app_id。
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
        return $this;
    }

    /**
    * Gets resourceSpecTypes
    *  节点所购买的资源类型的列表
    *
    * @return string[]|null
    */
    public function getResourceSpecTypes()
    {
        return $this->container['resourceSpecTypes'];
    }

    /**
    * Sets resourceSpecTypes
    *
    * @param string[]|null $resourceSpecTypes 节点所购买的资源类型的列表
    *
    * @return $this
    */
    public function setResourceSpecTypes($resourceSpecTypes)
    {
        $this->container['resourceSpecTypes'] = $resourceSpecTypes;
        return $this;
    }

    /**
    * Gets resourceIds
    *  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets ips
    *  边缘节点主机ip
    *
    * @return string[]|null
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param string[]|null $ips 边缘节点主机ip
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
        return $this;
    }

    /**
    * Gets name
    *  边缘节点名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 边缘节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  边缘节点状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 边缘节点状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets softwareVersion
    *  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return string|null
    */
    public function getSoftwareVersion()
    {
        return $this->container['softwareVersion'];
    }

    /**
    * Sets softwareVersion
    *
    * @param string|null $softwareVersion 边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return $this
    */
    public function setSoftwareVersion($softwareVersion)
    {
        $this->container['softwareVersion'] = $softwareVersion;
        return $this;
    }

    /**
    * Gets createTime
    *  边缘节点创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 边缘节点创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  边缘节点更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 边缘节点更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets osName
    *  边缘节点操作系统名称
    *
    * @return string|null
    */
    public function getOsName()
    {
        return $this->container['osName'];
    }

    /**
    * Sets osName
    *
    * @param string|null $osName 边缘节点操作系统名称
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets arch
    *  边缘节点操作系统架构
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch 边缘节点操作系统架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets hostName
    *  边缘节点主机名
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
    * @param string|null $hostName 边缘节点主机名
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets nics
    *  边缘节点网络网卡信息
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\Nic[]|null
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\Nic[]|null $nics 边缘节点网络网卡信息
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets specification
    *  网络规格，如4 cores | 3867 MB
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 网络规格，如4 cores | 3867 MB
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets aiCardType
    *  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    *
    * @return string|null
    */
    public function getAiCardType()
    {
        return $this->container['aiCardType'];
    }

    /**
    * Sets aiCardType
    *
    * @param string|null $aiCardType AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    *
    * @return $this
    */
    public function setAiCardType($aiCardType)
    {
        $this->container['aiCardType'] = $aiCardType;
        return $this;
    }

    /**
    * Gets npuLibraryPath
    *  npu驱动动态库路径
    *
    * @return string|null
    */
    public function getNpuLibraryPath()
    {
        return $this->container['npuLibraryPath'];
    }

    /**
    * Sets npuLibraryPath
    *
    * @param string|null $npuLibraryPath npu驱动动态库路径
    *
    * @return $this
    */
    public function setNpuLibraryPath($npuLibraryPath)
    {
        $this->container['npuLibraryPath'] = $npuLibraryPath;
        return $this;
    }

    /**
    * Gets containerVersion
    *  容器运行时版本
    *
    * @return string|null
    */
    public function getContainerVersion()
    {
        return $this->container['containerVersion'];
    }

    /**
    * Sets containerVersion
    *
    * @param string|null $containerVersion 容器运行时版本
    *
    * @return $this
    */
    public function setContainerVersion($containerVersion)
    {
        $this->container['containerVersion'] = $containerVersion;
        return $this;
    }

    /**
    * Gets type
    *  节点所属资源类型：advanced|standard
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
    * @param string|null $type 节点所属资源类型：advanced|standard
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets securityLevel
    *  节点的安全等级，MEDIUM边缘节数据上报不进行加密，HIGH对数据上报进行加密。
    *
    * @return string|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param string|null $securityLevel 节点的安全等级，MEDIUM边缘节数据上报不进行加密，HIGH对数据上报进行加密。
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
        return $this;
    }

    /**
    * Gets reliabilityLevel
    *  节点的可靠性等级。
    *
    * @return string|null
    */
    public function getReliabilityLevel()
    {
        return $this->container['reliabilityLevel'];
    }

    /**
    * Sets reliabilityLevel
    *
    * @param string|null $reliabilityLevel 节点的可靠性等级。
    *
    * @return $this
    */
    public function setReliabilityLevel($reliabilityLevel)
    {
        $this->container['reliabilityLevel'] = $reliabilityLevel;
        return $this;
    }

    /**
    * Gets storagePeriod
    *  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    *
    * @return int|null
    */
    public function getStoragePeriod()
    {
        return $this->container['storagePeriod'];
    }

    /**
    * Sets storagePeriod
    *
    * @param int|null $storagePeriod 节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    *
    * @return $this
    */
    public function setStoragePeriod($storagePeriod)
    {
        $this->container['storagePeriod'] = $storagePeriod;
        return $this;
    }

    /**
    * Gets basePath
    *  basePath
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\BasePathDTO|null
    */
    public function getBasePath()
    {
        return $this->container['basePath'];
    }

    /**
    * Sets basePath
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\BasePathDTO|null $basePath basePath
    *
    * @return $this
    */
    public function setBasePath($basePath)
    {
        $this->container['basePath'] = $basePath;
        return $this;
    }

    /**
    * Gets hardwareModel
    *  注册节点网关配置
    *
    * @return string|null
    */
    public function getHardwareModel()
    {
        return $this->container['hardwareModel'];
    }

    /**
    * Sets hardwareModel
    *
    * @param string|null $hardwareModel 注册节点网关配置
    *
    * @return $this
    */
    public function setHardwareModel($hardwareModel)
    {
        $this->container['hardwareModel'] = $hardwareModel;
        return $this;
    }

    /**
    * Gets offlineCacheConfigs
    *  offlineCacheConfigs
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\OfflineCacheConfigsDTO|null
    */
    public function getOfflineCacheConfigs()
    {
        return $this->container['offlineCacheConfigs'];
    }

    /**
    * Sets offlineCacheConfigs
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\OfflineCacheConfigsDTO|null $offlineCacheConfigs offlineCacheConfigs
    *
    * @return $this
    */
    public function setOfflineCacheConfigs($offlineCacheConfigs)
    {
        $this->container['offlineCacheConfigs'] = $offlineCacheConfigs;
        return $this;
    }

    /**
    * Gets deviceAuthInfo
    *  deviceAuthInfo
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceAuthInfoDisplayDTO|null
    */
    public function getDeviceAuthInfo()
    {
        return $this->container['deviceAuthInfo'];
    }

    /**
    * Sets deviceAuthInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceAuthInfoDisplayDTO|null $deviceAuthInfo deviceAuthInfo
    *
    * @return $this
    */
    public function setDeviceAuthInfo($deviceAuthInfo)
    {
        $this->container['deviceAuthInfo'] = $deviceAuthInfo;
        return $this;
    }

    /**
    * Gets deviceDataFormat
    *  节点使用的数据格式，默认为iotda物模型1.0格式，可以选择属性平铺数据格式flat_json
    *
    * @return string|null
    */
    public function getDeviceDataFormat()
    {
        return $this->container['deviceDataFormat'];
    }

    /**
    * Sets deviceDataFormat
    *
    * @param string|null $deviceDataFormat 节点使用的数据格式，默认为iotda物模型1.0格式，可以选择属性平铺数据格式flat_json
    *
    * @return $this
    */
    public function setDeviceDataFormat($deviceDataFormat)
    {
        $this->container['deviceDataFormat'] = $deviceDataFormat;
        return $this;
    }

    /**
    * Gets automaticUpgrade
    *  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    *
    * @return string|null
    */
    public function getAutomaticUpgrade()
    {
        return $this->container['automaticUpgrade'];
    }

    /**
    * Sets automaticUpgrade
    *
    * @param string|null $automaticUpgrade 自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    *
    * @return $this
    */
    public function setAutomaticUpgrade($automaticUpgrade)
    {
        $this->container['automaticUpgrade'] = $automaticUpgrade;
        return $this;
    }

    /**
    * Gets deviceDataRecord
    *  deviceDataRecord
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceDataRecord|null
    */
    public function getDeviceDataRecord()
    {
        return $this->container['deviceDataRecord'];
    }

    /**
    * Sets deviceDataRecord
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceDataRecord|null $deviceDataRecord deviceDataRecord
    *
    * @return $this
    */
    public function setDeviceDataRecord($deviceDataRecord)
    {
        $this->container['deviceDataRecord'] = $deviceDataRecord;
        return $this;
    }

    /**
    * Gets metricReport
    *  omagent监控运维工具是否上报指标
    *
    * @return string|null
    */
    public function getMetricReport()
    {
        return $this->container['metricReport'];
    }

    /**
    * Sets metricReport
    *
    * @param string|null $metricReport omagent监控运维工具是否上报指标
    *
    * @return $this
    */
    public function setMetricReport($metricReport)
    {
        $this->container['metricReport'] = $metricReport;
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

