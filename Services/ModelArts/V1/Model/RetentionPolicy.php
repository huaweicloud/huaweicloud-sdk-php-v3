<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetentionPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetentionPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policy  **参数解释**：作业级库记录自动老化策略。 **约束限制**：   - 仅当平台开启作业老化能力且作业类型为自定义训练作业（kind=job）时生效；   - 与用户级「作业自动老化」开关联动：     - 用户级开关**开启**：该用户下所有作业均参与老化（`policy=disabled` 不能单独豁免）；     - 用户级开关**关闭**：仅 `policy=enabled` 的作业参与老化；未设置或 `disabled` 均不参与。 **取值范围**：   - enabled：开启本作业老化   - disabled：关闭本作业老化（仅在用户级开关关闭时有效） **默认取值**：不传表示未单独设置，跟随用户级开关策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policy  **参数解释**：作业级库记录自动老化策略。 **约束限制**：   - 仅当平台开启作业老化能力且作业类型为自定义训练作业（kind=job）时生效；   - 与用户级「作业自动老化」开关联动：     - 用户级开关**开启**：该用户下所有作业均参与老化（`policy=disabled` 不能单独豁免）；     - 用户级开关**关闭**：仅 `policy=enabled` 的作业参与老化；未设置或 `disabled` 均不参与。 **取值范围**：   - enabled：开启本作业老化   - disabled：关闭本作业老化（仅在用户级开关关闭时有效） **默认取值**：不传表示未单独设置，跟随用户级开关策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policy' => null
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
    * policy  **参数解释**：作业级库记录自动老化策略。 **约束限制**：   - 仅当平台开启作业老化能力且作业类型为自定义训练作业（kind=job）时生效；   - 与用户级「作业自动老化」开关联动：     - 用户级开关**开启**：该用户下所有作业均参与老化（`policy=disabled` 不能单独豁免）；     - 用户级开关**关闭**：仅 `policy=enabled` 的作业参与老化；未设置或 `disabled` 均不参与。 **取值范围**：   - enabled：开启本作业老化   - disabled：关闭本作业老化（仅在用户级开关关闭时有效） **默认取值**：不传表示未单独设置，跟随用户级开关策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policy  **参数解释**：作业级库记录自动老化策略。 **约束限制**：   - 仅当平台开启作业老化能力且作业类型为自定义训练作业（kind=job）时生效；   - 与用户级「作业自动老化」开关联动：     - 用户级开关**开启**：该用户下所有作业均参与老化（`policy=disabled` 不能单独豁免）；     - 用户级开关**关闭**：仅 `policy=enabled` 的作业参与老化；未设置或 `disabled` 均不参与。 **取值范围**：   - enabled：开启本作业老化   - disabled：关闭本作业老化（仅在用户级开关关闭时有效） **默认取值**：不传表示未单独设置，跟随用户级开关策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policy  **参数解释**：作业级库记录自动老化策略。 **约束限制**：   - 仅当平台开启作业老化能力且作业类型为自定义训练作业（kind=job）时生效；   - 与用户级「作业自动老化」开关联动：     - 用户级开关**开启**：该用户下所有作业均参与老化（`policy=disabled` 不能单独豁免）；     - 用户级开关**关闭**：仅 `policy=enabled` 的作业参与老化；未设置或 `disabled` 均不参与。 **取值范围**：   - enabled：开启本作业老化   - disabled：关闭本作业老化（仅在用户级开关关闭时有效） **默认取值**：不传表示未单独设置，跟随用户级开关策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'policy' => 'getPolicy'
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
    const POLICY_ENABLED = 'enabled';
    const POLICY_DISABLED = 'disabled';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPolicyAllowableValues()
    {
        return [
            self::POLICY_ENABLED,
            self::POLICY_DISABLED,
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
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPolicyAllowableValues();
                if (!is_null($this->container['policy']) && !in_array($this->container['policy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets policy
    *  **参数解释**：作业级库记录自动老化策略。 **约束限制**：   - 仅当平台开启作业老化能力且作业类型为自定义训练作业（kind=job）时生效；   - 与用户级「作业自动老化」开关联动：     - 用户级开关**开启**：该用户下所有作业均参与老化（`policy=disabled` 不能单独豁免）；     - 用户级开关**关闭**：仅 `policy=enabled` 的作业参与老化；未设置或 `disabled` 均不参与。 **取值范围**：   - enabled：开启本作业老化   - disabled：关闭本作业老化（仅在用户级开关关闭时有效） **默认取值**：不传表示未单独设置，跟随用户级开关策略。
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy **参数解释**：作业级库记录自动老化策略。 **约束限制**：   - 仅当平台开启作业老化能力且作业类型为自定义训练作业（kind=job）时生效；   - 与用户级「作业自动老化」开关联动：     - 用户级开关**开启**：该用户下所有作业均参与老化（`policy=disabled` 不能单独豁免）；     - 用户级开关**关闭**：仅 `policy=enabled` 的作业参与老化；未设置或 `disabled` 均不参与。 **取值范围**：   - enabled：开启本作业老化   - disabled：关闭本作业老化（仅在用户级开关关闭时有效） **默认取值**：不传表示未单独设置，跟随用户级开关策略。
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
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

