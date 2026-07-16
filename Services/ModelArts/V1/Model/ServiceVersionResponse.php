<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceVersionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceVersionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 版本id。 **取值范围：** 不涉及。
    * version  **参数解释：** 版本号。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * predictUrl  **参数解释：** 推理请求的访问地址。 **取值范围：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * instanceGroups  **参数解释：** 服务部署信息。
    * ltsStrategy  **参数解释：** 日志策略。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略
    * ltsStatus  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * ltsEventStatus  **参数解释：** 部署对接lts k8s事件状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * logConfigs  **参数解释：** 服务日志配置信息。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'version' => 'string',
            'description' => 'string',
            'predictUrl' => 'string',
            'runtimeConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfigResponse',
            'upgradeConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfigResponse',
            'instanceGroups' => '\HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfigResponse[]',
            'ltsStrategy' => 'string',
            'ltsStatus' => 'string',
            'ltsEventStatus' => 'string',
            'logConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LogConfigResponse[]',
            'deployTimeoutMinutes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 版本id。 **取值范围：** 不涉及。
    * version  **参数解释：** 版本号。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * predictUrl  **参数解释：** 推理请求的访问地址。 **取值范围：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * instanceGroups  **参数解释：** 服务部署信息。
    * ltsStrategy  **参数解释：** 日志策略。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略
    * ltsStatus  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * ltsEventStatus  **参数解释：** 部署对接lts k8s事件状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * logConfigs  **参数解释：** 服务日志配置信息。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'version' => null,
        'description' => null,
        'predictUrl' => null,
        'runtimeConfig' => null,
        'upgradeConfig' => null,
        'instanceGroups' => null,
        'ltsStrategy' => null,
        'ltsStatus' => null,
        'ltsEventStatus' => null,
        'logConfigs' => null,
        'deployTimeoutMinutes' => 'int32'
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
    * id  **参数解释：** 版本id。 **取值范围：** 不涉及。
    * version  **参数解释：** 版本号。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * predictUrl  **参数解释：** 推理请求的访问地址。 **取值范围：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * instanceGroups  **参数解释：** 服务部署信息。
    * ltsStrategy  **参数解释：** 日志策略。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略
    * ltsStatus  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * ltsEventStatus  **参数解释：** 部署对接lts k8s事件状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * logConfigs  **参数解释：** 服务日志配置信息。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'version' => 'version',
            'description' => 'description',
            'predictUrl' => 'predict_url',
            'runtimeConfig' => 'runtime_config',
            'upgradeConfig' => 'upgrade_config',
            'instanceGroups' => 'instance_groups',
            'ltsStrategy' => 'lts_strategy',
            'ltsStatus' => 'lts_status',
            'ltsEventStatus' => 'lts_event_status',
            'logConfigs' => 'log_configs',
            'deployTimeoutMinutes' => 'deploy_timeout_minutes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 版本id。 **取值范围：** 不涉及。
    * version  **参数解释：** 版本号。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * predictUrl  **参数解释：** 推理请求的访问地址。 **取值范围：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * instanceGroups  **参数解释：** 服务部署信息。
    * ltsStrategy  **参数解释：** 日志策略。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略
    * ltsStatus  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * ltsEventStatus  **参数解释：** 部署对接lts k8s事件状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * logConfigs  **参数解释：** 服务日志配置信息。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'version' => 'setVersion',
            'description' => 'setDescription',
            'predictUrl' => 'setPredictUrl',
            'runtimeConfig' => 'setRuntimeConfig',
            'upgradeConfig' => 'setUpgradeConfig',
            'instanceGroups' => 'setInstanceGroups',
            'ltsStrategy' => 'setLtsStrategy',
            'ltsStatus' => 'setLtsStatus',
            'ltsEventStatus' => 'setLtsEventStatus',
            'logConfigs' => 'setLogConfigs',
            'deployTimeoutMinutes' => 'setDeployTimeoutMinutes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 版本id。 **取值范围：** 不涉及。
    * version  **参数解释：** 版本号。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * predictUrl  **参数解释：** 推理请求的访问地址。 **取值范围：** 不涉及。
    * runtimeConfig  runtimeConfig
    * upgradeConfig  upgradeConfig
    * instanceGroups  **参数解释：** 服务部署信息。
    * ltsStrategy  **参数解释：** 日志策略。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略
    * ltsStatus  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * ltsEventStatus  **参数解释：** 部署对接lts k8s事件状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * logConfigs  **参数解释：** 服务日志配置信息。
    * deployTimeoutMinutes  **参数解释：** 部署超时时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'version' => 'getVersion',
            'description' => 'getDescription',
            'predictUrl' => 'getPredictUrl',
            'runtimeConfig' => 'getRuntimeConfig',
            'upgradeConfig' => 'getUpgradeConfig',
            'instanceGroups' => 'getInstanceGroups',
            'ltsStrategy' => 'getLtsStrategy',
            'ltsStatus' => 'getLtsStatus',
            'ltsEventStatus' => 'getLtsEventStatus',
            'logConfigs' => 'getLogConfigs',
            'deployTimeoutMinutes' => 'getDeployTimeoutMinutes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['predictUrl'] = isset($data['predictUrl']) ? $data['predictUrl'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['upgradeConfig'] = isset($data['upgradeConfig']) ? $data['upgradeConfig'] : null;
        $this->container['instanceGroups'] = isset($data['instanceGroups']) ? $data['instanceGroups'] : null;
        $this->container['ltsStrategy'] = isset($data['ltsStrategy']) ? $data['ltsStrategy'] : null;
        $this->container['ltsStatus'] = isset($data['ltsStatus']) ? $data['ltsStatus'] : null;
        $this->container['ltsEventStatus'] = isset($data['ltsEventStatus']) ? $data['ltsEventStatus'] : null;
        $this->container['logConfigs'] = isset($data['logConfigs']) ? $data['logConfigs'] : null;
        $this->container['deployTimeoutMinutes'] = isset($data['deployTimeoutMinutes']) ? $data['deployTimeoutMinutes'] : null;
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
    * Gets id
    *  **参数解释：** 版本id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 版本id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 版本号。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释：** 版本号。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets predictUrl
    *  **参数解释：** 推理请求的访问地址。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPredictUrl()
    {
        return $this->container['predictUrl'];
    }

    /**
    * Sets predictUrl
    *
    * @param string|null $predictUrl **参数解释：** 推理请求的访问地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPredictUrl($predictUrl)
    {
        $this->container['predictUrl'] = $predictUrl;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  runtimeConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfigResponse|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RuntimeConfigResponse|null $runtimeConfig runtimeConfig
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets upgradeConfig
    *  upgradeConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfigResponse|null
    */
    public function getUpgradeConfig()
    {
        return $this->container['upgradeConfig'];
    }

    /**
    * Sets upgradeConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UpgradeConfigResponse|null $upgradeConfig upgradeConfig
    *
    * @return $this
    */
    public function setUpgradeConfig($upgradeConfig)
    {
        $this->container['upgradeConfig'] = $upgradeConfig;
        return $this;
    }

    /**
    * Gets instanceGroups
    *  **参数解释：** 服务部署信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfigResponse[]|null
    */
    public function getInstanceGroups()
    {
        return $this->container['instanceGroups'];
    }

    /**
    * Sets instanceGroups
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\GroupConfigResponse[]|null $instanceGroups **参数解释：** 服务部署信息。
    *
    * @return $this
    */
    public function setInstanceGroups($instanceGroups)
    {
        $this->container['instanceGroups'] = $instanceGroups;
        return $this;
    }

    /**
    * Gets ltsStrategy
    *  **参数解释：** 日志策略。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略
    *
    * @return string|null
    */
    public function getLtsStrategy()
    {
        return $this->container['ltsStrategy'];
    }

    /**
    * Sets ltsStrategy
    *
    * @param string|null $ltsStrategy **参数解释：** 日志策略。 **取值范围：** - POOL：使用资源池日志插件配置的日志流。 - AUTO_CREATE：自动创建日志流。 - DEFAULT: 由系统决定日志策略
    *
    * @return $this
    */
    public function setLtsStrategy($ltsStrategy)
    {
        $this->container['ltsStrategy'] = $ltsStrategy;
        return $this;
    }

    /**
    * Gets ltsStatus
    *  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getLtsStatus()
    {
        return $this->container['ltsStatus'];
    }

    /**
    * Sets ltsStatus
    *
    * @param string|null $ltsStatus **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setLtsStatus($ltsStatus)
    {
        $this->container['ltsStatus'] = $ltsStatus;
        return $this;
    }

    /**
    * Gets ltsEventStatus
    *  **参数解释：** 部署对接lts k8s事件状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getLtsEventStatus()
    {
        return $this->container['ltsEventStatus'];
    }

    /**
    * Sets ltsEventStatus
    *
    * @param string|null $ltsEventStatus **参数解释：** 部署对接lts k8s事件状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setLtsEventStatus($ltsEventStatus)
    {
        $this->container['ltsEventStatus'] = $ltsEventStatus;
        return $this;
    }

    /**
    * Gets logConfigs
    *  **参数解释：** 服务日志配置信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LogConfigResponse[]|null
    */
    public function getLogConfigs()
    {
        return $this->container['logConfigs'];
    }

    /**
    * Sets logConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LogConfigResponse[]|null $logConfigs **参数解释：** 服务日志配置信息。
    *
    * @return $this
    */
    public function setLogConfigs($logConfigs)
    {
        $this->container['logConfigs'] = $logConfigs;
        return $this;
    }

    /**
    * Gets deployTimeoutMinutes
    *  **参数解释：** 部署超时时间。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDeployTimeoutMinutes()
    {
        return $this->container['deployTimeoutMinutes'];
    }

    /**
    * Sets deployTimeoutMinutes
    *
    * @param int|null $deployTimeoutMinutes **参数解释：** 部署超时时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDeployTimeoutMinutes($deployTimeoutMinutes)
    {
        $this->container['deployTimeoutMinutes'] = $deployTimeoutMinutes;
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

