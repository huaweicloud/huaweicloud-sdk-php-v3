<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInferHraResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInferHraResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** hra策略ID。 **取值范围：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * hraRules  **参数解释：** HRA规则列表。
    * disable  **参数解释：** 用户控制的启用/禁用开关。 **取值范围：** true表示禁用，false表示启用 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * policyStatus  **参数解释：** 策略状态。 **取值范围：** - CREATING 创建。 - ACTIVE 可用。 - INACTIVE 不可用。 - DELETED 已删除。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * minReplicas  **参数解释：** 最小副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * maxReplicas  **参数解释：** 最大副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * scaleWindow  **参数解释：** 扩缩容时间窗，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'workspaceId' => 'string',
            'hraRules' => '\HuaweiCloud\SDK\ModelArts\V1\Model\HraRuleResponse[]',
            'disable' => 'bool',
            'policyStatus' => 'string',
            'minReplicas' => 'int',
            'maxReplicas' => 'int',
            'scaleWindow' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** hra策略ID。 **取值范围：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * hraRules  **参数解释：** HRA规则列表。
    * disable  **参数解释：** 用户控制的启用/禁用开关。 **取值范围：** true表示禁用，false表示启用 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * policyStatus  **参数解释：** 策略状态。 **取值范围：** - CREATING 创建。 - ACTIVE 可用。 - INACTIVE 不可用。 - DELETED 已删除。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * minReplicas  **参数解释：** 最小副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * maxReplicas  **参数解释：** 最大副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * scaleWindow  **参数解释：** 扩缩容时间窗，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'workspaceId' => null,
        'hraRules' => null,
        'disable' => null,
        'policyStatus' => null,
        'minReplicas' => 'int32',
        'maxReplicas' => 'int32',
        'scaleWindow' => 'int32'
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
    * id  **参数解释：** hra策略ID。 **取值范围：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * hraRules  **参数解释：** HRA规则列表。
    * disable  **参数解释：** 用户控制的启用/禁用开关。 **取值范围：** true表示禁用，false表示启用 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * policyStatus  **参数解释：** 策略状态。 **取值范围：** - CREATING 创建。 - ACTIVE 可用。 - INACTIVE 不可用。 - DELETED 已删除。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * minReplicas  **参数解释：** 最小副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * maxReplicas  **参数解释：** 最大副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * scaleWindow  **参数解释：** 扩缩容时间窗，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'workspaceId' => 'workspace_id',
            'hraRules' => 'hra_rules',
            'disable' => 'disable',
            'policyStatus' => 'policy_status',
            'minReplicas' => 'min_replicas',
            'maxReplicas' => 'max_replicas',
            'scaleWindow' => 'scale_window'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** hra策略ID。 **取值范围：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * hraRules  **参数解释：** HRA规则列表。
    * disable  **参数解释：** 用户控制的启用/禁用开关。 **取值范围：** true表示禁用，false表示启用 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * policyStatus  **参数解释：** 策略状态。 **取值范围：** - CREATING 创建。 - ACTIVE 可用。 - INACTIVE 不可用。 - DELETED 已删除。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * minReplicas  **参数解释：** 最小副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * maxReplicas  **参数解释：** 最大副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * scaleWindow  **参数解释：** 扩缩容时间窗，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'workspaceId' => 'setWorkspaceId',
            'hraRules' => 'setHraRules',
            'disable' => 'setDisable',
            'policyStatus' => 'setPolicyStatus',
            'minReplicas' => 'setMinReplicas',
            'maxReplicas' => 'setMaxReplicas',
            'scaleWindow' => 'setScaleWindow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** hra策略ID。 **取值范围：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    * hraRules  **参数解释：** HRA规则列表。
    * disable  **参数解释：** 用户控制的启用/禁用开关。 **取值范围：** true表示禁用，false表示启用 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * policyStatus  **参数解释：** 策略状态。 **取值范围：** - CREATING 创建。 - ACTIVE 可用。 - INACTIVE 不可用。 - DELETED 已删除。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * minReplicas  **参数解释：** 最小副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * maxReplicas  **参数解释：** 最大副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    * scaleWindow  **参数解释：** 扩缩容时间窗，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'workspaceId' => 'getWorkspaceId',
            'hraRules' => 'getHraRules',
            'disable' => 'getDisable',
            'policyStatus' => 'getPolicyStatus',
            'minReplicas' => 'getMinReplicas',
            'maxReplicas' => 'getMaxReplicas',
            'scaleWindow' => 'getScaleWindow'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['hraRules'] = isset($data['hraRules']) ? $data['hraRules'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['policyStatus'] = isset($data['policyStatus']) ? $data['policyStatus'] : null;
        $this->container['minReplicas'] = isset($data['minReplicas']) ? $data['minReplicas'] : null;
        $this->container['maxReplicas'] = isset($data['maxReplicas']) ? $data['maxReplicas'] : null;
        $this->container['scaleWindow'] = isset($data['scaleWindow']) ? $data['scaleWindow'] : null;
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
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** hra策略ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** hra策略ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释：** 工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets hraRules
    *  **参数解释：** HRA规则列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\HraRuleResponse[]|null
    */
    public function getHraRules()
    {
        return $this->container['hraRules'];
    }

    /**
    * Sets hraRules
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\HraRuleResponse[]|null $hraRules **参数解释：** HRA规则列表。
    *
    * @return $this
    */
    public function setHraRules($hraRules)
    {
        $this->container['hraRules'] = $hraRules;
        return $this;
    }

    /**
    * Gets disable
    *  **参数解释：** 用户控制的启用/禁用开关。 **取值范围：** true表示禁用，false表示启用 **约束限制：** 不涉及。 **默认取值：** 不涉及。
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
    * @param bool|null $disable **参数解释：** 用户控制的启用/禁用开关。 **取值范围：** true表示禁用，false表示启用 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
        return $this;
    }

    /**
    * Gets policyStatus
    *  **参数解释：** 策略状态。 **取值范围：** - CREATING 创建。 - ACTIVE 可用。 - INACTIVE 不可用。 - DELETED 已删除。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getPolicyStatus()
    {
        return $this->container['policyStatus'];
    }

    /**
    * Sets policyStatus
    *
    * @param string|null $policyStatus **参数解释：** 策略状态。 **取值范围：** - CREATING 创建。 - ACTIVE 可用。 - INACTIVE 不可用。 - DELETED 已删除。 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPolicyStatus($policyStatus)
    {
        $this->container['policyStatus'] = $policyStatus;
        return $this;
    }

    /**
    * Gets minReplicas
    *  **参数解释：** 最小副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    *
    * @return int|null
    */
    public function getMinReplicas()
    {
        return $this->container['minReplicas'];
    }

    /**
    * Sets minReplicas
    *
    * @param int|null $minReplicas **参数解释：** 最小副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    *
    * @return $this
    */
    public function setMinReplicas($minReplicas)
    {
        $this->container['minReplicas'] = $minReplicas;
        return $this;
    }

    /**
    * Gets maxReplicas
    *  **参数解释：** 最大副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    *
    * @return int|null
    */
    public function getMaxReplicas()
    {
        return $this->container['maxReplicas'];
    }

    /**
    * Sets maxReplicas
    *
    * @param int|null $maxReplicas **参数解释：** 最大副本数，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 1~128。
    *
    * @return $this
    */
    public function setMaxReplicas($maxReplicas)
    {
        $this->container['maxReplicas'] = $maxReplicas;
        return $this;
    }

    /**
    * Gets scaleWindow
    *  **参数解释：** 扩缩容时间窗，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getScaleWindow()
    {
        return $this->container['scaleWindow'];
    }

    /**
    * Sets scaleWindow
    *
    * @param int|null $scaleWindow **参数解释：** 扩缩容时间窗，由于当前版本不会进行实质扩缩，因此该配置值无效。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setScaleWindow($scaleWindow)
    {
        $this->container['scaleWindow'] = $scaleWindow;
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

