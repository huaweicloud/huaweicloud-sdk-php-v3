<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdvancedConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdvancedConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deployTimeoutMinutes  **参数解释：** 部署超时时间
    * upgradeConfig  upgradeConfig
    * serviceSecret  serviceSecret
    * dynamicRoutingEnable  **参数解释：** 智能路由开关
    * strategy  **参数解释：** 智能路由策略
    * emsEnable  **参数解释：** EMS加速开关
    * metricApiScheme  **参数解释：** 智能路由指标采集scheme
    * metricApiPort  **参数解释：** 智能路由指标采集端口
    * metricApiPath  **参数解释：** 智能路由指标采集地址
    * customMetricsPath  **参数解释：** 自定义监控采集指标地址
    * port  **参数解释：** 容器端口
    * protocol  **参数解释：** 容器请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。 - TCP：传输控制协议。 - NA：不使用任何协议。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deployTimeoutMinutes' => 'string',
            'upgradeConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfig',
            'serviceSecret' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecret',
            'dynamicRoutingEnable' => 'bool',
            'strategy' => 'string',
            'emsEnable' => 'bool',
            'metricApiScheme' => 'string',
            'metricApiPort' => 'string',
            'metricApiPath' => 'string',
            'customMetricsPath' => 'string',
            'port' => 'int',
            'protocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deployTimeoutMinutes  **参数解释：** 部署超时时间
    * upgradeConfig  upgradeConfig
    * serviceSecret  serviceSecret
    * dynamicRoutingEnable  **参数解释：** 智能路由开关
    * strategy  **参数解释：** 智能路由策略
    * emsEnable  **参数解释：** EMS加速开关
    * metricApiScheme  **参数解释：** 智能路由指标采集scheme
    * metricApiPort  **参数解释：** 智能路由指标采集端口
    * metricApiPath  **参数解释：** 智能路由指标采集地址
    * customMetricsPath  **参数解释：** 自定义监控采集指标地址
    * port  **参数解释：** 容器端口
    * protocol  **参数解释：** 容器请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。 - TCP：传输控制协议。 - NA：不使用任何协议。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deployTimeoutMinutes' => null,
        'upgradeConfig' => null,
        'serviceSecret' => null,
        'dynamicRoutingEnable' => null,
        'strategy' => null,
        'emsEnable' => null,
        'metricApiScheme' => null,
        'metricApiPort' => null,
        'metricApiPath' => null,
        'customMetricsPath' => null,
        'port' => 'int32',
        'protocol' => null
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
    * deployTimeoutMinutes  **参数解释：** 部署超时时间
    * upgradeConfig  upgradeConfig
    * serviceSecret  serviceSecret
    * dynamicRoutingEnable  **参数解释：** 智能路由开关
    * strategy  **参数解释：** 智能路由策略
    * emsEnable  **参数解释：** EMS加速开关
    * metricApiScheme  **参数解释：** 智能路由指标采集scheme
    * metricApiPort  **参数解释：** 智能路由指标采集端口
    * metricApiPath  **参数解释：** 智能路由指标采集地址
    * customMetricsPath  **参数解释：** 自定义监控采集指标地址
    * port  **参数解释：** 容器端口
    * protocol  **参数解释：** 容器请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。 - TCP：传输控制协议。 - NA：不使用任何协议。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deployTimeoutMinutes' => 'deploy_timeout_minutes',
            'upgradeConfig' => 'upgrade_config',
            'serviceSecret' => 'service_secret',
            'dynamicRoutingEnable' => 'dynamic_routing_enable',
            'strategy' => 'strategy',
            'emsEnable' => 'ems_enable',
            'metricApiScheme' => 'metric_api_scheme',
            'metricApiPort' => 'metric_api_port',
            'metricApiPath' => 'metric_api_path',
            'customMetricsPath' => 'custom_metrics_path',
            'port' => 'port',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deployTimeoutMinutes  **参数解释：** 部署超时时间
    * upgradeConfig  upgradeConfig
    * serviceSecret  serviceSecret
    * dynamicRoutingEnable  **参数解释：** 智能路由开关
    * strategy  **参数解释：** 智能路由策略
    * emsEnable  **参数解释：** EMS加速开关
    * metricApiScheme  **参数解释：** 智能路由指标采集scheme
    * metricApiPort  **参数解释：** 智能路由指标采集端口
    * metricApiPath  **参数解释：** 智能路由指标采集地址
    * customMetricsPath  **参数解释：** 自定义监控采集指标地址
    * port  **参数解释：** 容器端口
    * protocol  **参数解释：** 容器请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。 - TCP：传输控制协议。 - NA：不使用任何协议。
    *
    * @var string[]
    */
    protected static $setters = [
            'deployTimeoutMinutes' => 'setDeployTimeoutMinutes',
            'upgradeConfig' => 'setUpgradeConfig',
            'serviceSecret' => 'setServiceSecret',
            'dynamicRoutingEnable' => 'setDynamicRoutingEnable',
            'strategy' => 'setStrategy',
            'emsEnable' => 'setEmsEnable',
            'metricApiScheme' => 'setMetricApiScheme',
            'metricApiPort' => 'setMetricApiPort',
            'metricApiPath' => 'setMetricApiPath',
            'customMetricsPath' => 'setCustomMetricsPath',
            'port' => 'setPort',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deployTimeoutMinutes  **参数解释：** 部署超时时间
    * upgradeConfig  upgradeConfig
    * serviceSecret  serviceSecret
    * dynamicRoutingEnable  **参数解释：** 智能路由开关
    * strategy  **参数解释：** 智能路由策略
    * emsEnable  **参数解释：** EMS加速开关
    * metricApiScheme  **参数解释：** 智能路由指标采集scheme
    * metricApiPort  **参数解释：** 智能路由指标采集端口
    * metricApiPath  **参数解释：** 智能路由指标采集地址
    * customMetricsPath  **参数解释：** 自定义监控采集指标地址
    * port  **参数解释：** 容器端口
    * protocol  **参数解释：** 容器请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。 - TCP：传输控制协议。 - NA：不使用任何协议。
    *
    * @var string[]
    */
    protected static $getters = [
            'deployTimeoutMinutes' => 'getDeployTimeoutMinutes',
            'upgradeConfig' => 'getUpgradeConfig',
            'serviceSecret' => 'getServiceSecret',
            'dynamicRoutingEnable' => 'getDynamicRoutingEnable',
            'strategy' => 'getStrategy',
            'emsEnable' => 'getEmsEnable',
            'metricApiScheme' => 'getMetricApiScheme',
            'metricApiPort' => 'getMetricApiPort',
            'metricApiPath' => 'getMetricApiPath',
            'customMetricsPath' => 'getCustomMetricsPath',
            'port' => 'getPort',
            'protocol' => 'getProtocol'
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
        $this->container['deployTimeoutMinutes'] = isset($data['deployTimeoutMinutes']) ? $data['deployTimeoutMinutes'] : null;
        $this->container['upgradeConfig'] = isset($data['upgradeConfig']) ? $data['upgradeConfig'] : null;
        $this->container['serviceSecret'] = isset($data['serviceSecret']) ? $data['serviceSecret'] : null;
        $this->container['dynamicRoutingEnable'] = isset($data['dynamicRoutingEnable']) ? $data['dynamicRoutingEnable'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['emsEnable'] = isset($data['emsEnable']) ? $data['emsEnable'] : null;
        $this->container['metricApiScheme'] = isset($data['metricApiScheme']) ? $data['metricApiScheme'] : null;
        $this->container['metricApiPort'] = isset($data['metricApiPort']) ? $data['metricApiPort'] : null;
        $this->container['metricApiPath'] = isset($data['metricApiPath']) ? $data['metricApiPath'] : null;
        $this->container['customMetricsPath'] = isset($data['customMetricsPath']) ? $data['customMetricsPath'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['upgradeConfig'] === null) {
            $invalidProperties[] = "'upgradeConfig' can't be null";
        }
            if (!is_null($this->container['metricApiPort']) && (mb_strlen($this->container['metricApiPort']) > 10)) {
                $invalidProperties[] = "invalid value for 'metricApiPort', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['metricApiPort']) && (mb_strlen($this->container['metricApiPort']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricApiPort', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
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
    * Gets deployTimeoutMinutes
    *  **参数解释：** 部署超时时间
    *
    * @return string|null
    */
    public function getDeployTimeoutMinutes()
    {
        return $this->container['deployTimeoutMinutes'];
    }

    /**
    * Sets deployTimeoutMinutes
    *
    * @param string|null $deployTimeoutMinutes **参数解释：** 部署超时时间
    *
    * @return $this
    */
    public function setDeployTimeoutMinutes($deployTimeoutMinutes)
    {
        $this->container['deployTimeoutMinutes'] = $deployTimeoutMinutes;
        return $this;
    }

    /**
    * Gets upgradeConfig
    *  upgradeConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfig
    */
    public function getUpgradeConfig()
    {
        return $this->container['upgradeConfig'];
    }

    /**
    * Sets upgradeConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfig $upgradeConfig upgradeConfig
    *
    * @return $this
    */
    public function setUpgradeConfig($upgradeConfig)
    {
        $this->container['upgradeConfig'] = $upgradeConfig;
        return $this;
    }

    /**
    * Gets serviceSecret
    *  serviceSecret
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecret|null
    */
    public function getServiceSecret()
    {
        return $this->container['serviceSecret'];
    }

    /**
    * Sets serviceSecret
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceSecret|null $serviceSecret serviceSecret
    *
    * @return $this
    */
    public function setServiceSecret($serviceSecret)
    {
        $this->container['serviceSecret'] = $serviceSecret;
        return $this;
    }

    /**
    * Gets dynamicRoutingEnable
    *  **参数解释：** 智能路由开关
    *
    * @return bool|null
    */
    public function getDynamicRoutingEnable()
    {
        return $this->container['dynamicRoutingEnable'];
    }

    /**
    * Sets dynamicRoutingEnable
    *
    * @param bool|null $dynamicRoutingEnable **参数解释：** 智能路由开关
    *
    * @return $this
    */
    public function setDynamicRoutingEnable($dynamicRoutingEnable)
    {
        $this->container['dynamicRoutingEnable'] = $dynamicRoutingEnable;
        return $this;
    }

    /**
    * Gets strategy
    *  **参数解释：** 智能路由策略
    *
    * @return string|null
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param string|null $strategy **参数解释：** 智能路由策略
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets emsEnable
    *  **参数解释：** EMS加速开关
    *
    * @return bool|null
    */
    public function getEmsEnable()
    {
        return $this->container['emsEnable'];
    }

    /**
    * Sets emsEnable
    *
    * @param bool|null $emsEnable **参数解释：** EMS加速开关
    *
    * @return $this
    */
    public function setEmsEnable($emsEnable)
    {
        $this->container['emsEnable'] = $emsEnable;
        return $this;
    }

    /**
    * Gets metricApiScheme
    *  **参数解释：** 智能路由指标采集scheme
    *
    * @return string|null
    */
    public function getMetricApiScheme()
    {
        return $this->container['metricApiScheme'];
    }

    /**
    * Sets metricApiScheme
    *
    * @param string|null $metricApiScheme **参数解释：** 智能路由指标采集scheme
    *
    * @return $this
    */
    public function setMetricApiScheme($metricApiScheme)
    {
        $this->container['metricApiScheme'] = $metricApiScheme;
        return $this;
    }

    /**
    * Gets metricApiPort
    *  **参数解释：** 智能路由指标采集端口
    *
    * @return string|null
    */
    public function getMetricApiPort()
    {
        return $this->container['metricApiPort'];
    }

    /**
    * Sets metricApiPort
    *
    * @param string|null $metricApiPort **参数解释：** 智能路由指标采集端口
    *
    * @return $this
    */
    public function setMetricApiPort($metricApiPort)
    {
        $this->container['metricApiPort'] = $metricApiPort;
        return $this;
    }

    /**
    * Gets metricApiPath
    *  **参数解释：** 智能路由指标采集地址
    *
    * @return string|null
    */
    public function getMetricApiPath()
    {
        return $this->container['metricApiPath'];
    }

    /**
    * Sets metricApiPath
    *
    * @param string|null $metricApiPath **参数解释：** 智能路由指标采集地址
    *
    * @return $this
    */
    public function setMetricApiPath($metricApiPath)
    {
        $this->container['metricApiPath'] = $metricApiPath;
        return $this;
    }

    /**
    * Gets customMetricsPath
    *  **参数解释：** 自定义监控采集指标地址
    *
    * @return string|null
    */
    public function getCustomMetricsPath()
    {
        return $this->container['customMetricsPath'];
    }

    /**
    * Sets customMetricsPath
    *
    * @param string|null $customMetricsPath **参数解释：** 自定义监控采集指标地址
    *
    * @return $this
    */
    public function setCustomMetricsPath($customMetricsPath)
    {
        $this->container['customMetricsPath'] = $customMetricsPath;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释：** 容器端口
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port **参数解释：** 容器端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释：** 容器请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。 - TCP：传输控制协议。 - NA：不使用任何协议。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol **参数解释：** 容器请求协议。当选择WSS与WS时，服务接口会升级为WebSocket。开启WebSocket时，不支持同时设置“服务流量限制”。 **取值范围：** - HTTP：HTTP协议。 - HTTPS：HTTPS协议。 - WSS：WebSocket Secure协议。 - WS：WebSocket协议。 - TCP：传输控制协议。 - NA：不使用任何协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

