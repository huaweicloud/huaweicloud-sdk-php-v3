<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataRequirementResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataRequirementResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：训练数据的名称。 **取值范围**：不涉及。
    * type  **参数解释**：数据来源类型。 **取值范围**：枚举值如下： - dataset：数据集 - obs：OBS - swr：SWR - model_list：AI应用列表 - label_task：标注任务 - service：在线服务
    * conditions  **参数解释**：数据约束条件。
    * value  **参数解释**：数据的值。
    * usedSteps  **参数解释**：使用了这条数据的工作流节点。
    * delay  **参数解释**：延时参数标记。 **取值范围**： - true：延时 - false：不延时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'conditions' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ConstraintResp[]',
            'value' => 'map[string,object]',
            'usedSteps' => 'string[]',
            'delay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：训练数据的名称。 **取值范围**：不涉及。
    * type  **参数解释**：数据来源类型。 **取值范围**：枚举值如下： - dataset：数据集 - obs：OBS - swr：SWR - model_list：AI应用列表 - label_task：标注任务 - service：在线服务
    * conditions  **参数解释**：数据约束条件。
    * value  **参数解释**：数据的值。
    * usedSteps  **参数解释**：使用了这条数据的工作流节点。
    * delay  **参数解释**：延时参数标记。 **取值范围**： - true：延时 - false：不延时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'conditions' => null,
        'value' => null,
        'usedSteps' => null,
        'delay' => null
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
    * name  **参数解释**：训练数据的名称。 **取值范围**：不涉及。
    * type  **参数解释**：数据来源类型。 **取值范围**：枚举值如下： - dataset：数据集 - obs：OBS - swr：SWR - model_list：AI应用列表 - label_task：标注任务 - service：在线服务
    * conditions  **参数解释**：数据约束条件。
    * value  **参数解释**：数据的值。
    * usedSteps  **参数解释**：使用了这条数据的工作流节点。
    * delay  **参数解释**：延时参数标记。 **取值范围**： - true：延时 - false：不延时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'conditions' => 'conditions',
            'value' => 'value',
            'usedSteps' => 'used_steps',
            'delay' => 'delay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：训练数据的名称。 **取值范围**：不涉及。
    * type  **参数解释**：数据来源类型。 **取值范围**：枚举值如下： - dataset：数据集 - obs：OBS - swr：SWR - model_list：AI应用列表 - label_task：标注任务 - service：在线服务
    * conditions  **参数解释**：数据约束条件。
    * value  **参数解释**：数据的值。
    * usedSteps  **参数解释**：使用了这条数据的工作流节点。
    * delay  **参数解释**：延时参数标记。 **取值范围**： - true：延时 - false：不延时
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'conditions' => 'setConditions',
            'value' => 'setValue',
            'usedSteps' => 'setUsedSteps',
            'delay' => 'setDelay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：训练数据的名称。 **取值范围**：不涉及。
    * type  **参数解释**：数据来源类型。 **取值范围**：枚举值如下： - dataset：数据集 - obs：OBS - swr：SWR - model_list：AI应用列表 - label_task：标注任务 - service：在线服务
    * conditions  **参数解释**：数据约束条件。
    * value  **参数解释**：数据的值。
    * usedSteps  **参数解释**：使用了这条数据的工作流节点。
    * delay  **参数解释**：延时参数标记。 **取值范围**： - true：延时 - false：不延时
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'conditions' => 'getConditions',
            'value' => 'getValue',
            'usedSteps' => 'getUsedSteps',
            'delay' => 'getDelay'
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
    const TYPE_DATASET = 'dataset：数据集';
    const TYPE_OBSOBS = 'obs：OBS文件';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DATASET,
            self::TYPE_OBSOBS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['usedSteps'] = isset($data['usedSteps']) ? $data['usedSteps'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets name
    *  **参数解释**：训练数据的名称。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：训练数据的名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：数据来源类型。 **取值范围**：枚举值如下： - dataset：数据集 - obs：OBS - swr：SWR - model_list：AI应用列表 - label_task：标注任务 - service：在线服务
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：数据来源类型。 **取值范围**：枚举值如下： - dataset：数据集 - obs：OBS - swr：SWR - model_list：AI应用列表 - label_task：标注任务 - service：在线服务
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets conditions
    *  **参数解释**：数据约束条件。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ConstraintResp[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ConstraintResp[]|null $conditions **参数解释**：数据约束条件。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**：数据的值。
    *
    * @return map[string,object]|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param map[string,object]|null $value **参数解释**：数据的值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets usedSteps
    *  **参数解释**：使用了这条数据的工作流节点。
    *
    * @return string[]|null
    */
    public function getUsedSteps()
    {
        return $this->container['usedSteps'];
    }

    /**
    * Sets usedSteps
    *
    * @param string[]|null $usedSteps **参数解释**：使用了这条数据的工作流节点。
    *
    * @return $this
    */
    public function setUsedSteps($usedSteps)
    {
        $this->container['usedSteps'] = $usedSteps;
        return $this;
    }

    /**
    * Gets delay
    *  **参数解释**：延时参数标记。 **取值范围**： - true：延时 - false：不延时
    *
    * @return bool|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param bool|null $delay **参数解释**：延时参数标记。 **取值范围**： - true：延时 - false：不延时
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
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

