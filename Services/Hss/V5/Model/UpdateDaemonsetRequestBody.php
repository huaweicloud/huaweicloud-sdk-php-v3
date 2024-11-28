<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDaemonsetRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDaemonsetRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentVersion  agent版本
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    * invokedService  调用服务，标识cce免费体检报告，cce调用传参为cce:   - hss：hss服务    - cce：cce服务
    * chargingMode  付费模式:   - on_demand:按需    - free_security_check:免费安全体检
    * cceProtectionType  cce防护类型:   - cluster_level:集群级别防护    - node_level:节点级别防护
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentVersion' => 'string',
            'clusterName' => 'string',
            'autoUpgrade' => 'bool',
            'runtimeInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]',
            'scheduleInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\UpdateDaemonsetRequestBodyScheduleInfo',
            'invokedService' => 'string',
            'chargingMode' => 'string',
            'cceProtectionType' => 'string',
            'preferPacketCycle' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentVersion  agent版本
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    * invokedService  调用服务，标识cce免费体检报告，cce调用传参为cce:   - hss：hss服务    - cce：cce服务
    * chargingMode  付费模式:   - on_demand:按需    - free_security_check:免费安全体检
    * cceProtectionType  cce防护类型:   - cluster_level:集群级别防护    - node_level:节点级别防护
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentVersion' => null,
        'clusterName' => null,
        'autoUpgrade' => null,
        'runtimeInfo' => null,
        'scheduleInfo' => null,
        'invokedService' => null,
        'chargingMode' => null,
        'cceProtectionType' => null,
        'preferPacketCycle' => null
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
    * agentVersion  agent版本
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    * invokedService  调用服务，标识cce免费体检报告，cce调用传参为cce:   - hss：hss服务    - cce：cce服务
    * chargingMode  付费模式:   - on_demand:按需    - free_security_check:免费安全体检
    * cceProtectionType  cce防护类型:   - cluster_level:集群级别防护    - node_level:节点级别防护
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentVersion' => 'agent_version',
            'clusterName' => 'cluster_name',
            'autoUpgrade' => 'auto_upgrade',
            'runtimeInfo' => 'runtime_info',
            'scheduleInfo' => 'schedule_info',
            'invokedService' => 'invoked_service',
            'chargingMode' => 'charging_mode',
            'cceProtectionType' => 'cce_protection_type',
            'preferPacketCycle' => 'prefer_packet_cycle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentVersion  agent版本
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    * invokedService  调用服务，标识cce免费体检报告，cce调用传参为cce:   - hss：hss服务    - cce：cce服务
    * chargingMode  付费模式:   - on_demand:按需    - free_security_check:免费安全体检
    * cceProtectionType  cce防护类型:   - cluster_level:集群级别防护    - node_level:节点级别防护
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $setters = [
            'agentVersion' => 'setAgentVersion',
            'clusterName' => 'setClusterName',
            'autoUpgrade' => 'setAutoUpgrade',
            'runtimeInfo' => 'setRuntimeInfo',
            'scheduleInfo' => 'setScheduleInfo',
            'invokedService' => 'setInvokedService',
            'chargingMode' => 'setChargingMode',
            'cceProtectionType' => 'setCceProtectionType',
            'preferPacketCycle' => 'setPreferPacketCycle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentVersion  agent版本
    * clusterName  集群名称
    * autoUpgrade  开启agent自动升级
    * runtimeInfo  容器运行时配置
    * scheduleInfo  scheduleInfo
    * invokedService  调用服务，标识cce免费体检报告，cce调用传参为cce:   - hss：hss服务    - cce：cce服务
    * chargingMode  付费模式:   - on_demand:按需    - free_security_check:免费安全体检
    * cceProtectionType  cce防护类型:   - cluster_level:集群级别防护    - node_level:节点级别防护
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $getters = [
            'agentVersion' => 'getAgentVersion',
            'clusterName' => 'getClusterName',
            'autoUpgrade' => 'getAutoUpgrade',
            'runtimeInfo' => 'getRuntimeInfo',
            'scheduleInfo' => 'getScheduleInfo',
            'invokedService' => 'getInvokedService',
            'chargingMode' => 'getChargingMode',
            'cceProtectionType' => 'getCceProtectionType',
            'preferPacketCycle' => 'getPreferPacketCycle'
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
    const CHARGING_MODE_ON_DEMAND = 'on_demand';
    const CHARGING_MODE_FREE_SECURITY_CHECK = 'free_security_check';
    const CCE_PROTECTION_TYPE_CLUSTER_LEVEL = 'cluster_level';
    const CCE_PROTECTION_TYPE_NODE_LEVEL = 'node_level';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_ON_DEMAND,
            self::CHARGING_MODE_FREE_SECURITY_CHECK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCceProtectionTypeAllowableValues()
    {
        return [
            self::CCE_PROTECTION_TYPE_CLUSTER_LEVEL,
            self::CCE_PROTECTION_TYPE_NODE_LEVEL,
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
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['autoUpgrade'] = isset($data['autoUpgrade']) ? $data['autoUpgrade'] : null;
        $this->container['runtimeInfo'] = isset($data['runtimeInfo']) ? $data['runtimeInfo'] : null;
        $this->container['scheduleInfo'] = isset($data['scheduleInfo']) ? $data['scheduleInfo'] : null;
        $this->container['invokedService'] = isset($data['invokedService']) ? $data['invokedService'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['cceProtectionType'] = isset($data['cceProtectionType']) ? $data['cceProtectionType'] : null;
        $this->container['preferPacketCycle'] = isset($data['preferPacketCycle']) ? $data['preferPacketCycle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && !preg_match("/^.*$/", $this->container['agentVersion'])) {
                $invalidProperties[] = "invalid value for 'agentVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['invokedService']) && !preg_match("/^.*$/", $this->container['invokedService'])) {
                $invalidProperties[] = "invalid value for 'invokedService', must be conform to the pattern /^.*$/.";
            }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargingMode']) && !preg_match("/^.*$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^.*$/.";
            }
            $allowedValues = $this->getCceProtectionTypeAllowableValues();
                if (!is_null($this->container['cceProtectionType']) && !in_array($this->container['cceProtectionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cceProtectionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['cceProtectionType']) && !preg_match("/^.*$/", $this->container['cceProtectionType'])) {
                $invalidProperties[] = "invalid value for 'cceProtectionType', must be conform to the pattern /^.*$/.";
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
    * Gets agentVersion
    *  agent版本
    *
    * @return string|null
    */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
    * Sets agentVersion
    *
    * @param string|null $agentVersion agent版本
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
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
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets autoUpgrade
    *  开启agent自动升级
    *
    * @return bool|null
    */
    public function getAutoUpgrade()
    {
        return $this->container['autoUpgrade'];
    }

    /**
    * Sets autoUpgrade
    *
    * @param bool|null $autoUpgrade 开启agent自动升级
    *
    * @return $this
    */
    public function setAutoUpgrade($autoUpgrade)
    {
        $this->container['autoUpgrade'] = $autoUpgrade;
        return $this;
    }

    /**
    * Gets runtimeInfo
    *  容器运行时配置
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]|null
    */
    public function getRuntimeInfo()
    {
        return $this->container['runtimeInfo'];
    }

    /**
    * Sets runtimeInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]|null $runtimeInfo 容器运行时配置
    *
    * @return $this
    */
    public function setRuntimeInfo($runtimeInfo)
    {
        $this->container['runtimeInfo'] = $runtimeInfo;
        return $this;
    }

    /**
    * Gets scheduleInfo
    *  scheduleInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\UpdateDaemonsetRequestBodyScheduleInfo|null
    */
    public function getScheduleInfo()
    {
        return $this->container['scheduleInfo'];
    }

    /**
    * Sets scheduleInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\UpdateDaemonsetRequestBodyScheduleInfo|null $scheduleInfo scheduleInfo
    *
    * @return $this
    */
    public function setScheduleInfo($scheduleInfo)
    {
        $this->container['scheduleInfo'] = $scheduleInfo;
        return $this;
    }

    /**
    * Gets invokedService
    *  调用服务，标识cce免费体检报告，cce调用传参为cce:   - hss：hss服务    - cce：cce服务
    *
    * @return string|null
    */
    public function getInvokedService()
    {
        return $this->container['invokedService'];
    }

    /**
    * Sets invokedService
    *
    * @param string|null $invokedService 调用服务，标识cce免费体检报告，cce调用传参为cce:   - hss：hss服务    - cce：cce服务
    *
    * @return $this
    */
    public function setInvokedService($invokedService)
    {
        $this->container['invokedService'] = $invokedService;
        return $this;
    }

    /**
    * Gets chargingMode
    *  付费模式:   - on_demand:按需    - free_security_check:免费安全体检
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 付费模式:   - on_demand:按需    - free_security_check:免费安全体检
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets cceProtectionType
    *  cce防护类型:   - cluster_level:集群级别防护    - node_level:节点级别防护
    *
    * @return string|null
    */
    public function getCceProtectionType()
    {
        return $this->container['cceProtectionType'];
    }

    /**
    * Sets cceProtectionType
    *
    * @param string|null $cceProtectionType cce防护类型:   - cluster_level:集群级别防护    - node_level:节点级别防护
    *
    * @return $this
    */
    public function setCceProtectionType($cceProtectionType)
    {
        $this->container['cceProtectionType'] = $cceProtectionType;
        return $this;
    }

    /**
    * Gets preferPacketCycle
    *  优先使用包周期配额；默认false
    *
    * @return bool|null
    */
    public function getPreferPacketCycle()
    {
        return $this->container['preferPacketCycle'];
    }

    /**
    * Sets preferPacketCycle
    *
    * @param bool|null $preferPacketCycle 优先使用包周期配额；默认false
    *
    * @return $this
    */
    public function setPreferPacketCycle($preferPacketCycle)
    {
        $this->container['preferPacketCycle'] = $preferPacketCycle;
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

