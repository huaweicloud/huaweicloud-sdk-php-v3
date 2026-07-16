<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HraRuleUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HraRuleUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则ID，在[创建HRA策略](CreateInferHra.xml)时即可在返回体中获取，也可通过[获取推理单元配比检测信息](ShowInferHra.xml)获取当前用户拥有的HRA策略，其中id字段即为规则ID。
    * operate  **参数解释：** 操作类型。 **取值范围：** - UPDATE：修改HRA策略规则。 - DELETE：删除HRA策略规则。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'operate' => 'string',
            'scalerType' => 'string',
            'sloInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SloInfo[]',
            'metrics' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Metrics[]',
            'roleReplica' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RoleReplica[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则ID，在[创建HRA策略](CreateInferHra.xml)时即可在返回体中获取，也可通过[获取推理单元配比检测信息](ShowInferHra.xml)获取当前用户拥有的HRA策略，其中id字段即为规则ID。
    * operate  **参数解释：** 操作类型。 **取值范围：** - UPDATE：修改HRA策略规则。 - DELETE：删除HRA策略规则。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'operate' => null,
        'scalerType' => null,
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
    * id  规则ID，在[创建HRA策略](CreateInferHra.xml)时即可在返回体中获取，也可通过[获取推理单元配比检测信息](ShowInferHra.xml)获取当前用户拥有的HRA策略，其中id字段即为规则ID。
    * operate  **参数解释：** 操作类型。 **取值范围：** - UPDATE：修改HRA策略规则。 - DELETE：删除HRA策略规则。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'operate' => 'operate',
            'scalerType' => 'scaler_type',
            'sloInfo' => 'slo_info',
            'metrics' => 'metrics',
            'roleReplica' => 'role_replica'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则ID，在[创建HRA策略](CreateInferHra.xml)时即可在返回体中获取，也可通过[获取推理单元配比检测信息](ShowInferHra.xml)获取当前用户拥有的HRA策略，其中id字段即为规则ID。
    * operate  **参数解释：** 操作类型。 **取值范围：** - UPDATE：修改HRA策略规则。 - DELETE：删除HRA策略规则。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'operate' => 'setOperate',
            'scalerType' => 'setScalerType',
            'sloInfo' => 'setSloInfo',
            'metrics' => 'setMetrics',
            'roleReplica' => 'setRoleReplica'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则ID，在[创建HRA策略](CreateInferHra.xml)时即可在返回体中获取，也可通过[获取推理单元配比检测信息](ShowInferHra.xml)获取当前用户拥有的HRA策略，其中id字段即为规则ID。
    * operate  **参数解释：** 操作类型。 **取值范围：** - UPDATE：修改HRA策略规则。 - DELETE：删除HRA策略规则。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * scalerType  **参数解释：** 扩缩容类型。 **取值范围：** - SIMULATOR_ALGO：模拟器算法扩缩容类型。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * sloInfo  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    * metrics  **参数解释：** 指标信息。 **取值范围：** 不涉及。
    * roleReplica  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。 **取值范围：** 1~128。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'operate' => 'getOperate',
            'scalerType' => 'getScalerType',
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
        $this->container['operate'] = isset($data['operate']) ? $data['operate'] : null;
        $this->container['scalerType'] = isset($data['scalerType']) ? $data['scalerType'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['operate'] === null) {
            $invalidProperties[] = "'operate' can't be null";
        }
            if ((mb_strlen($this->container['operate']) > 64)) {
                $invalidProperties[] = "invalid value for 'operate', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['operate']) < 0)) {
                $invalidProperties[] = "invalid value for 'operate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scalerType']) && (mb_strlen($this->container['scalerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalerType']) && (mb_strlen($this->container['scalerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scalerType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['sloInfo'] === null) {
            $invalidProperties[] = "'sloInfo' can't be null";
        }
        if ($this->container['metrics'] === null) {
            $invalidProperties[] = "'metrics' can't be null";
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
    *  规则ID，在[创建HRA策略](CreateInferHra.xml)时即可在返回体中获取，也可通过[获取推理单元配比检测信息](ShowInferHra.xml)获取当前用户拥有的HRA策略，其中id字段即为规则ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 规则ID，在[创建HRA策略](CreateInferHra.xml)时即可在返回体中获取，也可通过[获取推理单元配比检测信息](ShowInferHra.xml)获取当前用户拥有的HRA策略，其中id字段即为规则ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operate
    *  **参数解释：** 操作类型。 **取值范围：** - UPDATE：修改HRA策略规则。 - DELETE：删除HRA策略规则。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getOperate()
    {
        return $this->container['operate'];
    }

    /**
    * Sets operate
    *
    * @param string $operate **参数解释：** 操作类型。 **取值范围：** - UPDATE：修改HRA策略规则。 - DELETE：删除HRA策略规则。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOperate($operate)
    {
        $this->container['operate'] = $operate;
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
    * Gets sloInfo
    *  **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SloInfo[]
    */
    public function getSloInfo()
    {
        return $this->container['sloInfo'];
    }

    /**
    * Sets sloInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SloInfo[] $sloInfo **参数解释：** SLO配置参数信息。 **取值范围：** 不涉及。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Metrics[]
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Metrics[] $metrics **参数解释：** 指标信息。 **取值范围：** 不涉及。
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
    *  **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。 **取值范围：** 1~128。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RoleReplica[]|null $roleReplica **参数解释：** 角色扩缩策略（不会进行实质扩缩，因此该配置值无效）。 **取值范围：** 1~128。
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

