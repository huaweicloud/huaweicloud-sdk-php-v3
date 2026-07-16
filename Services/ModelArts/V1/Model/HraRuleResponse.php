<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HraRuleResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HraRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 规则ID，在创建HRA策略时即可在返回体中获取，也可通过查询推理单元配比检测信息获取当前用户拥有的HRA策略，其中id字段即为规则ID。 **约束限制：** 不涉及。 **取值范围：** 规则ID。 **默认取值：** 不涉及。
    * name  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * disable  **参数解释：** 规则是否禁用。 **取值范围：** - true：禁用。 - false：不禁用。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * ruleStatus  **参数解释：** HRA规则状态。 **取值范围：** - CREATING：创建。 - CONFIG_SUCCESS：配置HRA策略成功。 - EXECUTE_SUCCESS：执行HRA策略成功。 - DELETED：删除。 - FAILED：失败。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'disable' => 'bool',
            'scalerType' => 'string',
            'ruleStatus' => 'string',
            'sloInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SloInfo[]',
            'metrics' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Metrics[]',
            'roleReplica' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RoleReplica[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 规则ID，在创建HRA策略时即可在返回体中获取，也可通过查询推理单元配比检测信息获取当前用户拥有的HRA策略，其中id字段即为规则ID。 **约束限制：** 不涉及。 **取值范围：** 规则ID。 **默认取值：** 不涉及。
    * name  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * disable  **参数解释：** 规则是否禁用。 **取值范围：** - true：禁用。 - false：不禁用。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * ruleStatus  **参数解释：** HRA规则状态。 **取值范围：** - CREATING：创建。 - CONFIG_SUCCESS：配置HRA策略成功。 - EXECUTE_SUCCESS：执行HRA策略成功。 - DELETED：删除。 - FAILED：失败。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'disable' => null,
        'scalerType' => null,
        'ruleStatus' => null,
        'sloInfo' => null,
        'metrics' => null,
        'roleReplica' => null
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
    * id  **参数解释：** 规则ID，在创建HRA策略时即可在返回体中获取，也可通过查询推理单元配比检测信息获取当前用户拥有的HRA策略，其中id字段即为规则ID。 **约束限制：** 不涉及。 **取值范围：** 规则ID。 **默认取值：** 不涉及。
    * name  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * disable  **参数解释：** 规则是否禁用。 **取值范围：** - true：禁用。 - false：不禁用。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * ruleStatus  **参数解释：** HRA规则状态。 **取值范围：** - CREATING：创建。 - CONFIG_SUCCESS：配置HRA策略成功。 - EXECUTE_SUCCESS：执行HRA策略成功。 - DELETED：删除。 - FAILED：失败。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'disable' => 'disable',
            'scalerType' => 'scaler_type',
            'ruleStatus' => 'rule_status',
            'sloInfo' => 'slo_info',
            'metrics' => 'metrics',
            'roleReplica' => 'role_replica'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 规则ID，在创建HRA策略时即可在返回体中获取，也可通过查询推理单元配比检测信息获取当前用户拥有的HRA策略，其中id字段即为规则ID。 **约束限制：** 不涉及。 **取值范围：** 规则ID。 **默认取值：** 不涉及。
    * name  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * disable  **参数解释：** 规则是否禁用。 **取值范围：** - true：禁用。 - false：不禁用。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * ruleStatus  **参数解释：** HRA规则状态。 **取值范围：** - CREATING：创建。 - CONFIG_SUCCESS：配置HRA策略成功。 - EXECUTE_SUCCESS：执行HRA策略成功。 - DELETED：删除。 - FAILED：失败。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'disable' => 'setDisable',
            'scalerType' => 'setScalerType',
            'ruleStatus' => 'setRuleStatus',
            'sloInfo' => 'setSloInfo',
            'metrics' => 'setMetrics',
            'roleReplica' => 'setRoleReplica'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 规则ID，在创建HRA策略时即可在返回体中获取，也可通过查询推理单元配比检测信息获取当前用户拥有的HRA策略，其中id字段即为规则ID。 **约束限制：** 不涉及。 **取值范围：** 规则ID。 **默认取值：** 不涉及。
    * name  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * disable  **参数解释：** 规则是否禁用。 **取值范围：** - true：禁用。 - false：不禁用。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * ruleStatus  **参数解释：** HRA规则状态。 **取值范围：** - CREATING：创建。 - CONFIG_SUCCESS：配置HRA策略成功。 - EXECUTE_SUCCESS：执行HRA策略成功。 - DELETED：删除。 - FAILED：失败。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'disable' => 'getDisable',
            'scalerType' => 'getScalerType',
            'ruleStatus' => 'getRuleStatus',
            'sloInfo' => 'getSloInfo',
            'metrics' => 'getMetrics',
            'roleReplica' => 'getRoleReplica'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['scalerType'] = isset($data['scalerType']) ? $data['scalerType'] : null;
        $this->container['ruleStatus'] = isset($data['ruleStatus']) ? $data['ruleStatus'] : null;
        $this->container['sloInfo'] = isset($data['sloInfo']) ? $data['sloInfo'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['roleReplica'] = isset($data['roleReplica']) ? $data['roleReplica'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scalerType']) && (mb_strlen($this->container['scalerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalerType']) && (mb_strlen($this->container['scalerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scalerType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleStatus']) && (mb_strlen($this->container['ruleStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleStatus']) && (mb_strlen($this->container['ruleStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleStatus', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释：** 规则ID，在创建HRA策略时即可在返回体中获取，也可通过查询推理单元配比检测信息获取当前用户拥有的HRA策略，其中id字段即为规则ID。 **约束限制：** 不涉及。 **取值范围：** 规则ID。 **默认取值：** 不涉及。
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
    * @param string|null $id **参数解释：** 规则ID，在创建HRA策略时即可在返回体中获取，也可通过查询推理单元配比检测信息获取当前用户拥有的HRA策略，其中id字段即为规则ID。 **约束限制：** 不涉及。 **取值范围：** 规则ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 规则名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 规则名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets disable
    *  **参数解释：** 规则是否禁用。 **取值范围：** - true：禁用。 - false：不禁用。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
    * Sets disable
    *
    * @param bool|null $disable **参数解释：** 规则是否禁用。 **取值范围：** - true：禁用。 - false：不禁用。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
        return $this;
    }

    /**
    * Gets scalerType
    *  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getScalerType()
    {
        return $this->container['scalerType'];
    }

    /**
    * Sets scalerType
    *
    * @param string|null $scalerType **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setScalerType($scalerType)
    {
        $this->container['scalerType'] = $scalerType;
        return $this;
    }

    /**
    * Gets ruleStatus
    *  **参数解释：** HRA规则状态。 **取值范围：** - CREATING：创建。 - CONFIG_SUCCESS：配置HRA策略成功。 - EXECUTE_SUCCESS：执行HRA策略成功。 - DELETED：删除。 - FAILED：失败。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRuleStatus()
    {
        return $this->container['ruleStatus'];
    }

    /**
    * Sets ruleStatus
    *
    * @param string|null $ruleStatus **参数解释：** HRA规则状态。 **取值范围：** - CREATING：创建。 - CONFIG_SUCCESS：配置HRA策略成功。 - EXECUTE_SUCCESS：执行HRA策略成功。 - DELETED：删除。 - FAILED：失败。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRuleStatus($ruleStatus)
    {
        $this->container['ruleStatus'] = $ruleStatus;
        return $this;
    }

    /**
    * Gets sloInfo
    *  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SloInfo[]|null
    */
    public function getSloInfo()
    {
        return $this->container['sloInfo'];
    }

    /**
    * Sets sloInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SloInfo[]|null $sloInfo **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSloInfo($sloInfo)
    {
        $this->container['sloInfo'] = $sloInfo;
        return $this;
    }

    /**
    * Gets metrics
    *  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Metrics[]|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Metrics[]|null $metrics **参数解释：** 指标信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets roleReplica
    *  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RoleReplica[]|null
    */
    public function getRoleReplica()
    {
        return $this->container['roleReplica'];
    }

    /**
    * Sets roleReplica
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RoleReplica[]|null $roleReplica **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。
    *
    * @return $this
    */
    public function setRoleReplica($roleReplica)
    {
        $this->container['roleReplica'] = $roleReplica;
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

