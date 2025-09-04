<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EdgeNodeCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EdgeNodeCreation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * type  节点所属资源类型：advanced|standard
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    * timeOut  验证码的有效时间单位秒，默认1800秒，范围为1~864000，过期后平台会随机生成。
    * arch  系统架构。包括：arm64，arm32，x86_64。
    * osType  系统类型。包括：generalLinux通用系统，openHarmony。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，资源可叠加。
    * securityLevel  节点的安全等级，MEDIUM表示本地明文存储，HIGH表示本地加密存储。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * basePath  basePath
    * logConfigs  边缘节点在IEF日志配置参数，仅高级版支持。
    * apps  用户预置第三方边缘应用
    * networkAccessPoint  网络接入方式类型
    * hardwareModel  网关型号
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
            'edgeNodeId' => 'string',
            'name' => 'string',
            'type' => 'string',
            'verifyCode' => 'string',
            'timeOut' => 'int',
            'arch' => 'string',
            'osType' => 'string',
            'instanceId' => 'string',
            'spaceId' => 'string',
            'resourceIds' => 'string[]',
            'securityLevel' => 'string',
            'reliabilityLevel' => 'string',
            'storagePeriod' => 'int',
            'aiCardType' => 'string',
            'npuLibraryPath' => 'string',
            'basePath' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\BasePathDTO',
            'logConfigs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\LogConfigDTO[]',
            'apps' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\EdgeAppInstanceDTO[]',
            'networkAccessPoint' => 'string',
            'hardwareModel' => 'string',
            'offlineCacheConfigs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\OfflineCacheConfigsDTO',
            'deviceAuthInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceAuthInfoDTO',
            'deviceDataFormat' => 'string',
            'automaticUpgrade' => 'string',
            'deviceDataRecord' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceDataRecord',
            'metricReport' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * type  节点所属资源类型：advanced|standard
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    * timeOut  验证码的有效时间单位秒，默认1800秒，范围为1~864000，过期后平台会随机生成。
    * arch  系统架构。包括：arm64，arm32，x86_64。
    * osType  系统类型。包括：generalLinux通用系统，openHarmony。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，资源可叠加。
    * securityLevel  节点的安全等级，MEDIUM表示本地明文存储，HIGH表示本地加密存储。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * basePath  basePath
    * logConfigs  边缘节点在IEF日志配置参数，仅高级版支持。
    * apps  用户预置第三方边缘应用
    * networkAccessPoint  网络接入方式类型
    * hardwareModel  网关型号
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
        'edgeNodeId' => null,
        'name' => null,
        'type' => null,
        'verifyCode' => null,
        'timeOut' => null,
        'arch' => null,
        'osType' => null,
        'instanceId' => null,
        'spaceId' => null,
        'resourceIds' => null,
        'securityLevel' => null,
        'reliabilityLevel' => null,
        'storagePeriod' => 'int32',
        'aiCardType' => null,
        'npuLibraryPath' => null,
        'basePath' => null,
        'logConfigs' => null,
        'apps' => null,
        'networkAccessPoint' => null,
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
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * type  节点所属资源类型：advanced|standard
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    * timeOut  验证码的有效时间单位秒，默认1800秒，范围为1~864000，过期后平台会随机生成。
    * arch  系统架构。包括：arm64，arm32，x86_64。
    * osType  系统类型。包括：generalLinux通用系统，openHarmony。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，资源可叠加。
    * securityLevel  节点的安全等级，MEDIUM表示本地明文存储，HIGH表示本地加密存储。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * basePath  basePath
    * logConfigs  边缘节点在IEF日志配置参数，仅高级版支持。
    * apps  用户预置第三方边缘应用
    * networkAccessPoint  网络接入方式类型
    * hardwareModel  网关型号
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
            'edgeNodeId' => 'edge_node_id',
            'name' => 'name',
            'type' => 'type',
            'verifyCode' => 'verify_code',
            'timeOut' => 'time_out',
            'arch' => 'arch',
            'osType' => 'os_type',
            'instanceId' => 'instance_id',
            'spaceId' => 'space_id',
            'resourceIds' => 'resource_ids',
            'securityLevel' => 'security_level',
            'reliabilityLevel' => 'reliability_level',
            'storagePeriod' => 'storage_period',
            'aiCardType' => 'ai_card_type',
            'npuLibraryPath' => 'npu_library_path',
            'basePath' => 'base_path',
            'logConfigs' => 'log_configs',
            'apps' => 'apps',
            'networkAccessPoint' => 'network_access_point',
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
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * type  节点所属资源类型：advanced|standard
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    * timeOut  验证码的有效时间单位秒，默认1800秒，范围为1~864000，过期后平台会随机生成。
    * arch  系统架构。包括：arm64，arm32，x86_64。
    * osType  系统类型。包括：generalLinux通用系统，openHarmony。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，资源可叠加。
    * securityLevel  节点的安全等级，MEDIUM表示本地明文存储，HIGH表示本地加密存储。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * basePath  basePath
    * logConfigs  边缘节点在IEF日志配置参数，仅高级版支持。
    * apps  用户预置第三方边缘应用
    * networkAccessPoint  网络接入方式类型
    * hardwareModel  网关型号
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
            'edgeNodeId' => 'setEdgeNodeId',
            'name' => 'setName',
            'type' => 'setType',
            'verifyCode' => 'setVerifyCode',
            'timeOut' => 'setTimeOut',
            'arch' => 'setArch',
            'osType' => 'setOsType',
            'instanceId' => 'setInstanceId',
            'spaceId' => 'setSpaceId',
            'resourceIds' => 'setResourceIds',
            'securityLevel' => 'setSecurityLevel',
            'reliabilityLevel' => 'setReliabilityLevel',
            'storagePeriod' => 'setStoragePeriod',
            'aiCardType' => 'setAiCardType',
            'npuLibraryPath' => 'setNpuLibraryPath',
            'basePath' => 'setBasePath',
            'logConfigs' => 'setLogConfigs',
            'apps' => 'setApps',
            'networkAccessPoint' => 'setNetworkAccessPoint',
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
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * type  节点所属资源类型：advanced|standard
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    * timeOut  验证码的有效时间单位秒，默认1800秒，范围为1~864000，过期后平台会随机生成。
    * arch  系统架构。包括：arm64，arm32，x86_64。
    * osType  系统类型。包括：generalLinux通用系统，openHarmony。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，资源可叠加。
    * securityLevel  节点的安全等级，MEDIUM表示本地明文存储，HIGH表示本地加密存储。
    * reliabilityLevel  节点的可靠性等级。
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * aiCardType  AI加速卡类型，如华为昇腾AI加速卡NPU、图像处理加速卡GPU。
    * npuLibraryPath  npu驱动动态库路径
    * basePath  basePath
    * logConfigs  边缘节点在IEF日志配置参数，仅高级版支持。
    * apps  用户预置第三方边缘应用
    * networkAccessPoint  网络接入方式类型
    * hardwareModel  网关型号
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
            'edgeNodeId' => 'getEdgeNodeId',
            'name' => 'getName',
            'type' => 'getType',
            'verifyCode' => 'getVerifyCode',
            'timeOut' => 'getTimeOut',
            'arch' => 'getArch',
            'osType' => 'getOsType',
            'instanceId' => 'getInstanceId',
            'spaceId' => 'getSpaceId',
            'resourceIds' => 'getResourceIds',
            'securityLevel' => 'getSecurityLevel',
            'reliabilityLevel' => 'getReliabilityLevel',
            'storagePeriod' => 'getStoragePeriod',
            'aiCardType' => 'getAiCardType',
            'npuLibraryPath' => 'getNpuLibraryPath',
            'basePath' => 'getBasePath',
            'logConfigs' => 'getLogConfigs',
            'apps' => 'getApps',
            'networkAccessPoint' => 'getNetworkAccessPoint',
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
        $this->container['edgeNodeId'] = isset($data['edgeNodeId']) ? $data['edgeNodeId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['verifyCode'] = isset($data['verifyCode']) ? $data['verifyCode'] : null;
        $this->container['timeOut'] = isset($data['timeOut']) ? $data['timeOut'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['reliabilityLevel'] = isset($data['reliabilityLevel']) ? $data['reliabilityLevel'] : null;
        $this->container['storagePeriod'] = isset($data['storagePeriod']) ? $data['storagePeriod'] : null;
        $this->container['aiCardType'] = isset($data['aiCardType']) ? $data['aiCardType'] : null;
        $this->container['npuLibraryPath'] = isset($data['npuLibraryPath']) ? $data['npuLibraryPath'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['logConfigs'] = isset($data['logConfigs']) ? $data['logConfigs'] : null;
        $this->container['apps'] = isset($data['apps']) ? $data['apps'] : null;
        $this->container['networkAccessPoint'] = isset($data['networkAccessPoint']) ? $data['networkAccessPoint'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['type']) < 4)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 4.";
            }
            if (!preg_match("/(advanced|standard|lite)/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /(advanced|standard|lite)/.";
            }
            if (!is_null($this->container['verifyCode']) && (mb_strlen($this->container['verifyCode']) > 36)) {
                $invalidProperties[] = "invalid value for 'verifyCode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['verifyCode']) && (mb_strlen($this->container['verifyCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'verifyCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verifyCode']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['verifyCode'])) {
                $invalidProperties[] = "invalid value for 'verifyCode', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['timeOut']) && ($this->container['timeOut'] > 864000)) {
                $invalidProperties[] = "invalid value for 'timeOut', must be smaller than or equal to 864000.";
            }
            if (!is_null($this->container['timeOut']) && ($this->container['timeOut'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeOut', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) > 16)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) < 4)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['arch']) && !preg_match("/(arm64|x86_64|arm32)/", $this->container['arch'])) {
                $invalidProperties[] = "invalid value for 'arch', must be conform to the pattern /(arm64|x86_64|arm32)/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 32)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 2)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/(generalLinux|openHarmony)/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /(generalLinux|openHarmony)/.";
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
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['spaceId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['spaceId'])) {
                $invalidProperties[] = "invalid value for 'spaceId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
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
            if (!is_null($this->container['aiCardType']) && (mb_strlen($this->container['aiCardType']) > 16)) {
                $invalidProperties[] = "invalid value for 'aiCardType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['aiCardType']) && (mb_strlen($this->container['aiCardType']) < 0)) {
                $invalidProperties[] = "invalid value for 'aiCardType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aiCardType']) && !preg_match("/(NPU|GPU|UNEQUIPPED)/", $this->container['aiCardType'])) {
                $invalidProperties[] = "invalid value for 'aiCardType', must be conform to the pattern /(NPU|GPU|UNEQUIPPED)/.";
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
            if (!is_null($this->container['networkAccessPoint']) && (mb_strlen($this->container['networkAccessPoint']) > 64)) {
                $invalidProperties[] = "invalid value for 'networkAccessPoint', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['networkAccessPoint']) && (mb_strlen($this->container['networkAccessPoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'networkAccessPoint', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['networkAccessPoint']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['networkAccessPoint'])) {
                $invalidProperties[] = "invalid value for 'networkAccessPoint', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
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
    * Gets edgeNodeId
    *  边缘节点ID
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
    * @param string|null $edgeNodeId 边缘节点ID
    *
    * @return $this
    */
    public function setEdgeNodeId($edgeNodeId)
    {
        $this->container['edgeNodeId'] = $edgeNodeId;
        return $this;
    }

    /**
    * Gets name
    *  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  节点所属资源类型：advanced|standard
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 节点所属资源类型：advanced|standard
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets verifyCode
    *  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @return string|null
    */
    public function getVerifyCode()
    {
        return $this->container['verifyCode'];
    }

    /**
    * Sets verifyCode
    *
    * @param string|null $verifyCode 边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @return $this
    */
    public function setVerifyCode($verifyCode)
    {
        $this->container['verifyCode'] = $verifyCode;
        return $this;
    }

    /**
    * Gets timeOut
    *  验证码的有效时间单位秒，默认1800秒，范围为1~864000，过期后平台会随机生成。
    *
    * @return int|null
    */
    public function getTimeOut()
    {
        return $this->container['timeOut'];
    }

    /**
    * Sets timeOut
    *
    * @param int|null $timeOut 验证码的有效时间单位秒，默认1800秒，范围为1~864000，过期后平台会随机生成。
    *
    * @return $this
    */
    public function setTimeOut($timeOut)
    {
        $this->container['timeOut'] = $timeOut;
        return $this;
    }

    /**
    * Gets arch
    *  系统架构。包括：arm64，arm32，x86_64。
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
    * @param string|null $arch 系统架构。包括：arm64，arm32，x86_64。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets osType
    *  系统类型。包括：generalLinux通用系统，openHarmony。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 系统类型。包括：generalLinux通用系统，openHarmony。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
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
    * Gets resourceIds
    *  资源id列表，创建节点时需绑定已购买的资源包，资源可叠加。
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
    * @param string[]|null $resourceIds 资源id列表，创建节点时需绑定已购买的资源包，资源可叠加。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets securityLevel
    *  节点的安全等级，MEDIUM表示本地明文存储，HIGH表示本地加密存储。
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
    * @param string|null $securityLevel 节点的安全等级，MEDIUM表示本地明文存储，HIGH表示本地加密存储。
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
    * Gets logConfigs
    *  边缘节点在IEF日志配置参数，仅高级版支持。
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
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\LogConfigDTO[]|null $logConfigs 边缘节点在IEF日志配置参数，仅高级版支持。
    *
    * @return $this
    */
    public function setLogConfigs($logConfigs)
    {
        $this->container['logConfigs'] = $logConfigs;
        return $this;
    }

    /**
    * Gets apps
    *  用户预置第三方边缘应用
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\EdgeAppInstanceDTO[]|null
    */
    public function getApps()
    {
        return $this->container['apps'];
    }

    /**
    * Sets apps
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\EdgeAppInstanceDTO[]|null $apps 用户预置第三方边缘应用
    *
    * @return $this
    */
    public function setApps($apps)
    {
        $this->container['apps'] = $apps;
        return $this;
    }

    /**
    * Gets networkAccessPoint
    *  网络接入方式类型
    *
    * @return string|null
    */
    public function getNetworkAccessPoint()
    {
        return $this->container['networkAccessPoint'];
    }

    /**
    * Sets networkAccessPoint
    *
    * @param string|null $networkAccessPoint 网络接入方式类型
    *
    * @return $this
    */
    public function setNetworkAccessPoint($networkAccessPoint)
    {
        $this->container['networkAccessPoint'] = $networkAccessPoint;
        return $this;
    }

    /**
    * Gets hardwareModel
    *  网关型号
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
    * @param string|null $hardwareModel 网关型号
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
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceAuthInfoDTO|null
    */
    public function getDeviceAuthInfo()
    {
        return $this->container['deviceAuthInfo'];
    }

    /**
    * Sets deviceAuthInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceAuthInfoDTO|null $deviceAuthInfo deviceAuthInfo
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

