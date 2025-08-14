<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CceIntegrationProtectionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CceIntegrationProtectionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterType  **参数解释**: cce集群类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - existing：存量集群。 - adding：新增集群。  **默认取值**: 不涉及
    * clusterId  集群id
    * clusterName  集群名称
    * chargingMode  **参数解释**: 付费模式 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - on_demand：按需。 - free_security_check：免费安全体检。  **默认取值**: 不涉及
    * cceProtectionType  **参数解释**: cce防护类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - cluster_level：集群级别防护。 - node_level：节点级别防护。  **默认取值**: 不涉及
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterType' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'chargingMode' => 'string',
            'cceProtectionType' => 'string',
            'preferPacketCycle' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterType  **参数解释**: cce集群类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - existing：存量集群。 - adding：新增集群。  **默认取值**: 不涉及
    * clusterId  集群id
    * clusterName  集群名称
    * chargingMode  **参数解释**: 付费模式 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - on_demand：按需。 - free_security_check：免费安全体检。  **默认取值**: 不涉及
    * cceProtectionType  **参数解释**: cce防护类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - cluster_level：集群级别防护。 - node_level：节点级别防护。  **默认取值**: 不涉及
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterType' => null,
        'clusterId' => null,
        'clusterName' => null,
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
    * clusterType  **参数解释**: cce集群类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - existing：存量集群。 - adding：新增集群。  **默认取值**: 不涉及
    * clusterId  集群id
    * clusterName  集群名称
    * chargingMode  **参数解释**: 付费模式 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - on_demand：按需。 - free_security_check：免费安全体检。  **默认取值**: 不涉及
    * cceProtectionType  **参数解释**: cce防护类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - cluster_level：集群级别防护。 - node_level：节点级别防护。  **默认取值**: 不涉及
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterType' => 'cluster_type',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'chargingMode' => 'charging_mode',
            'cceProtectionType' => 'cce_protection_type',
            'preferPacketCycle' => 'prefer_packet_cycle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterType  **参数解释**: cce集群类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - existing：存量集群。 - adding：新增集群。  **默认取值**: 不涉及
    * clusterId  集群id
    * clusterName  集群名称
    * chargingMode  **参数解释**: 付费模式 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - on_demand：按需。 - free_security_check：免费安全体检。  **默认取值**: 不涉及
    * cceProtectionType  **参数解释**: cce防护类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - cluster_level：集群级别防护。 - node_level：节点级别防护。  **默认取值**: 不涉及
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterType' => 'setClusterType',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'chargingMode' => 'setChargingMode',
            'cceProtectionType' => 'setCceProtectionType',
            'preferPacketCycle' => 'setPreferPacketCycle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterType  **参数解释**: cce集群类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - existing：存量集群。 - adding：新增集群。  **默认取值**: 不涉及
    * clusterId  集群id
    * clusterName  集群名称
    * chargingMode  **参数解释**: 付费模式 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - on_demand：按需。 - free_security_check：免费安全体检。  **默认取值**: 不涉及
    * cceProtectionType  **参数解释**: cce防护类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - cluster_level：集群级别防护。 - node_level：节点级别防护。  **默认取值**: 不涉及
    * preferPacketCycle  优先使用包周期配额；默认false
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterType' => 'getClusterType',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
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
    const CLUSTER_TYPE_EXISTING = 'existing';
    const CLUSTER_TYPE_ADDING = 'adding';
    const CHARGING_MODE_ON_DEMAND = 'on_demand';
    const CHARGING_MODE_FREE_SECURITY_CHECK = 'free_security_check';
    const CCE_PROTECTION_TYPE_CLUSTER_LEVEL = 'cluster_level';
    const CCE_PROTECTION_TYPE_NODE_LEVEL = 'node_level';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterTypeAllowableValues()
    {
        return [
            self::CLUSTER_TYPE_EXISTING,
            self::CLUSTER_TYPE_ADDING,
        ];
    }

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
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
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
            $allowedValues = $this->getClusterTypeAllowableValues();
                if (!is_null($this->container['clusterType']) && !in_array($this->container['clusterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['clusterType']) && !preg_match("/^.*$/", $this->container['clusterType'])) {
                $invalidProperties[] = "invalid value for 'clusterType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
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
    * Gets clusterType
    *  **参数解释**: cce集群类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - existing：存量集群。 - adding：新增集群。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType **参数解释**: cce集群类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - existing：存量集群。 - adding：新增集群。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
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
    * @param string|null $clusterId 集群id
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
    *  集群名称
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**: 付费模式 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - on_demand：按需。 - free_security_check：免费安全体检。  **默认取值**: 不涉及
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
    * @param string|null $chargingMode **参数解释**: 付费模式 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - on_demand：按需。 - free_security_check：免费安全体检。  **默认取值**: 不涉及
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
    *  **参数解释**: cce防护类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - cluster_level：集群级别防护。 - node_level：节点级别防护。  **默认取值**: 不涉及
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
    * @param string|null $cceProtectionType **参数解释**: cce防护类型 **约束限制**: 不涉及 **取值范围**: 包含如下两种： - cluster_level：集群级别防护。 - node_level：节点级别防护。  **默认取值**: 不涉及
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

