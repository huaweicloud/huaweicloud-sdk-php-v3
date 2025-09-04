<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEdgeNodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEdgeNodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * type  节点所属资源类型：advanced|standard
    * installerVersion  安装文件版本
    * basePath  basePath
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    * hardwareModel  注册节点网关配置
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
            'instanceId' => 'string',
            'spaceId' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'state' => 'string',
            'type' => 'string',
            'installerVersion' => 'string',
            'basePath' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\BasePathDTO',
            'resourceIds' => 'string[]',
            'ips' => 'string[]',
            'createTime' => 'string',
            'hardwareModel' => 'string',
            'deviceDataFormat' => 'string',
            'automaticUpgrade' => 'string',
            'deviceDataRecord' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceDataRecord',
            'metricReport' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * type  节点所属资源类型：advanced|standard
    * installerVersion  安装文件版本
    * basePath  basePath
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    * hardwareModel  注册节点网关配置
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
        'instanceId' => null,
        'spaceId' => null,
        'productId' => null,
        'productName' => null,
        'state' => null,
        'type' => null,
        'installerVersion' => null,
        'basePath' => null,
        'resourceIds' => null,
        'ips' => null,
        'createTime' => null,
        'hardwareModel' => null,
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
    * name  边缘节点名称
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * type  节点所属资源类型：advanced|standard
    * installerVersion  安装文件版本
    * basePath  basePath
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    * hardwareModel  注册节点网关配置
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
            'instanceId' => 'instance_id',
            'spaceId' => 'space_id',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'state' => 'state',
            'type' => 'type',
            'installerVersion' => 'installer_version',
            'basePath' => 'base_path',
            'resourceIds' => 'resource_ids',
            'ips' => 'ips',
            'createTime' => 'create_time',
            'hardwareModel' => 'hardware_model',
            'deviceDataFormat' => 'device_data_format',
            'automaticUpgrade' => 'automatic_upgrade',
            'deviceDataRecord' => 'device_data_record',
            'metricReport' => 'metric_report'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * type  节点所属资源类型：advanced|standard
    * installerVersion  安装文件版本
    * basePath  basePath
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    * hardwareModel  注册节点网关配置
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
            'instanceId' => 'setInstanceId',
            'spaceId' => 'setSpaceId',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'state' => 'setState',
            'type' => 'setType',
            'installerVersion' => 'setInstallerVersion',
            'basePath' => 'setBasePath',
            'resourceIds' => 'setResourceIds',
            'ips' => 'setIps',
            'createTime' => 'setCreateTime',
            'hardwareModel' => 'setHardwareModel',
            'deviceDataFormat' => 'setDeviceDataFormat',
            'automaticUpgrade' => 'setAutomaticUpgrade',
            'deviceDataRecord' => 'setDeviceDataRecord',
            'metricReport' => 'setMetricReport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeNodeId  边缘节点ID
    * name  边缘节点名称
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * spaceId  资源空间id，对应IOTDA云服务接口参数中的app_id。
    * productId  边缘节点关联的产品ID，用于唯一标识一个产品模型。
    * productName  边缘节点关联的产品名称。
    * state  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    * type  节点所属资源类型：advanced|standard
    * installerVersion  安装文件版本
    * basePath  basePath
    * resourceIds  资源id列表，创建节点时需绑定已购买的资源包，可以叠加节点功能。
    * ips  边缘节点ip列表
    * createTime  边缘节点创建时间
    * hardwareModel  注册节点网关配置
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
            'instanceId' => 'getInstanceId',
            'spaceId' => 'getSpaceId',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'state' => 'getState',
            'type' => 'getType',
            'installerVersion' => 'getInstallerVersion',
            'basePath' => 'getBasePath',
            'resourceIds' => 'getResourceIds',
            'ips' => 'getIps',
            'createTime' => 'getCreateTime',
            'hardwareModel' => 'getHardwareModel',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['installerVersion'] = isset($data['installerVersion']) ? $data['installerVersion'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['hardwareModel'] = isset($data['hardwareModel']) ? $data['hardwareModel'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
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
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 4)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 4)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['installerVersion']) && (mb_strlen($this->container['installerVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'installerVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['installerVersion']) && (mb_strlen($this->container['installerVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'installerVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['automaticUpgrade']) && (mb_strlen($this->container['automaticUpgrade']) > 16)) {
                $invalidProperties[] = "invalid value for 'automaticUpgrade', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['automaticUpgrade']) && (mb_strlen($this->container['automaticUpgrade']) < 0)) {
                $invalidProperties[] = "invalid value for 'automaticUpgrade', the character length must be bigger than or equal to 0.";
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
    * Gets state
    *  边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
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
    * @param string|null $state 边缘节点状态UNINSTALLED|INSTALLED|OFFLINE|ONLINE|DELETING|FROZEN
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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
    * Gets installerVersion
    *  安装文件版本
    *
    * @return string|null
    */
    public function getInstallerVersion()
    {
        return $this->container['installerVersion'];
    }

    /**
    * Sets installerVersion
    *
    * @param string|null $installerVersion 安装文件版本
    *
    * @return $this
    */
    public function setInstallerVersion($installerVersion)
    {
        $this->container['installerVersion'] = $installerVersion;
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
    *  边缘节点ip列表
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
    * @param string[]|null $ips 边缘节点ip列表
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
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

