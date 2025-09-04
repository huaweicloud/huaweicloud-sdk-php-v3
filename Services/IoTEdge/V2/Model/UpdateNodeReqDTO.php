<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNodeReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNodeReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * logConfigs  边缘节点在IEF日志配置参数
    * haConfig  haConfig
    * hardwareModel  网关型号
    * npuLibraryPath  npu驱动动态库路径
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'storagePeriod' => 'int',
            'logConfigs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\LogConfigDTO[]',
            'haConfig' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\HaConfigDTO',
            'hardwareModel' => 'string',
            'npuLibraryPath' => 'string',
            'automaticUpgrade' => 'string',
            'deviceDataRecord' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DeviceDataRecord',
            'metricReport' => 'string',
            'offlineCacheConfigs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateOfflineCacheConfigsDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * logConfigs  边缘节点在IEF日志配置参数
    * haConfig  haConfig
    * hardwareModel  网关型号
    * npuLibraryPath  npu驱动动态库路径
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'storagePeriod' => 'int32',
        'logConfigs' => null,
        'haConfig' => null,
        'hardwareModel' => null,
        'npuLibraryPath' => null,
        'automaticUpgrade' => null,
        'deviceDataRecord' => null,
        'metricReport' => null,
        'offlineCacheConfigs' => null
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
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * logConfigs  边缘节点在IEF日志配置参数
    * haConfig  haConfig
    * hardwareModel  网关型号
    * npuLibraryPath  npu驱动动态库路径
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'storagePeriod' => 'storage_period',
            'logConfigs' => 'log_configs',
            'haConfig' => 'ha_config',
            'hardwareModel' => 'hardware_model',
            'npuLibraryPath' => 'npu_library_path',
            'automaticUpgrade' => 'automatic_upgrade',
            'deviceDataRecord' => 'device_data_record',
            'metricReport' => 'metric_report',
            'offlineCacheConfigs' => 'offline_cache_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * logConfigs  边缘节点在IEF日志配置参数
    * haConfig  haConfig
    * hardwareModel  网关型号
    * npuLibraryPath  npu驱动动态库路径
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'storagePeriod' => 'setStoragePeriod',
            'logConfigs' => 'setLogConfigs',
            'haConfig' => 'setHaConfig',
            'hardwareModel' => 'setHardwareModel',
            'npuLibraryPath' => 'setNpuLibraryPath',
            'automaticUpgrade' => 'setAutomaticUpgrade',
            'deviceDataRecord' => 'setDeviceDataRecord',
            'metricReport' => 'setMetricReport',
            'offlineCacheConfigs' => 'setOfflineCacheConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    * storagePeriod  节点的存储周期，默认0天，取值范围0~7天，0天则不存储。
    * logConfigs  边缘节点在IEF日志配置参数
    * haConfig  haConfig
    * hardwareModel  网关型号
    * npuLibraryPath  npu驱动动态库路径
    * automaticUpgrade  自动升级系统应用的节点开关，默认为关闭：OFF，IMMEDIATE表示节点开关打开
    * deviceDataRecord  deviceDataRecord
    * metricReport  omagent监控运维工具是否上报指标
    * offlineCacheConfigs  offlineCacheConfigs
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'storagePeriod' => 'getStoragePeriod',
            'logConfigs' => 'getLogConfigs',
            'haConfig' => 'getHaConfig',
            'hardwareModel' => 'getHardwareModel',
            'npuLibraryPath' => 'getNpuLibraryPath',
            'automaticUpgrade' => 'getAutomaticUpgrade',
            'deviceDataRecord' => 'getDeviceDataRecord',
            'metricReport' => 'getMetricReport',
            'offlineCacheConfigs' => 'getOfflineCacheConfigs'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['storagePeriod'] = isset($data['storagePeriod']) ? $data['storagePeriod'] : null;
        $this->container['logConfigs'] = isset($data['logConfigs']) ? $data['logConfigs'] : null;
        $this->container['haConfig'] = isset($data['haConfig']) ? $data['haConfig'] : null;
        $this->container['hardwareModel'] = isset($data['hardwareModel']) ? $data['hardwareModel'] : null;
        $this->container['npuLibraryPath'] = isset($data['npuLibraryPath']) ? $data['npuLibraryPath'] : null;
        $this->container['automaticUpgrade'] = isset($data['automaticUpgrade']) ? $data['automaticUpgrade'] : null;
        $this->container['deviceDataRecord'] = isset($data['deviceDataRecord']) ? $data['deviceDataRecord'] : null;
        $this->container['metricReport'] = isset($data['metricReport']) ? $data['metricReport'] : null;
        $this->container['offlineCacheConfigs'] = isset($data['offlineCacheConfigs']) ? $data['offlineCacheConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
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
            if (!is_null($this->container['npuLibraryPath']) && (mb_strlen($this->container['npuLibraryPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'npuLibraryPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['npuLibraryPath']) && (mb_strlen($this->container['npuLibraryPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'npuLibraryPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['npuLibraryPath']) && !preg_match("/^\/([a-zA-Z_0-9-]+\/)*$/", $this->container['npuLibraryPath'])) {
                $invalidProperties[] = "invalid value for 'npuLibraryPath', must be conform to the pattern /^\/([a-zA-Z_0-9-]+\/)*$/.";
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
    * Gets name
    *  边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
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
    * @param string|null $name 边缘节点名称，只允许中、数字、英文大小写、中划线、下划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets logConfigs
    *  边缘节点在IEF日志配置参数
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
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\LogConfigDTO[]|null $logConfigs 边缘节点在IEF日志配置参数
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
    * Gets offlineCacheConfigs
    *  offlineCacheConfigs
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateOfflineCacheConfigsDTO|null
    */
    public function getOfflineCacheConfigs()
    {
        return $this->container['offlineCacheConfigs'];
    }

    /**
    * Sets offlineCacheConfigs
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateOfflineCacheConfigsDTO|null $offlineCacheConfigs offlineCacheConfigs
    *
    * @return $this
    */
    public function setOfflineCacheConfigs($offlineCacheConfigs)
    {
        $this->container['offlineCacheConfigs'] = $offlineCacheConfigs;
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

