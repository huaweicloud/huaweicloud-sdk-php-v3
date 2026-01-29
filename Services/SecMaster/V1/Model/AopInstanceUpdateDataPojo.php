<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AopInstanceUpdateDataPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AopInstanceUpdateDataPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commandType  **参数解释**: 更新流程实例的指令 - ActionInstanceTerminateCommand 终止流程实例 - ActionInstanceRetryCommand 重试流程实例 - ActionInstanceDebugCommand 更新流程实例的调试结果  **约束限制**: 当command_type=ActionInstanceDebugCommand时task_id和inputdataobject是必填参数         **取值范围**: - ActionInstanceTerminateCommand - ActionInstanceRetryCommand - ActionInstanceDebugCommand  **默认值**:  不涉及
    * taskId  **参数解释**:         更新流程调试实例节点ID **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参数        **取值范围**: 不涉及 **默认值**:  不涉及
    * inputDataobject  **参数解释**: 更新流程调试实例节点参数 **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参 **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commandType' => 'string',
            'taskId' => 'string',
            'inputDataobject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commandType  **参数解释**: 更新流程实例的指令 - ActionInstanceTerminateCommand 终止流程实例 - ActionInstanceRetryCommand 重试流程实例 - ActionInstanceDebugCommand 更新流程实例的调试结果  **约束限制**: 当command_type=ActionInstanceDebugCommand时task_id和inputdataobject是必填参数         **取值范围**: - ActionInstanceTerminateCommand - ActionInstanceRetryCommand - ActionInstanceDebugCommand  **默认值**:  不涉及
    * taskId  **参数解释**:         更新流程调试实例节点ID **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参数        **取值范围**: 不涉及 **默认值**:  不涉及
    * inputDataobject  **参数解释**: 更新流程调试实例节点参数 **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参 **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commandType' => null,
        'taskId' => null,
        'inputDataobject' => null
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
    * commandType  **参数解释**: 更新流程实例的指令 - ActionInstanceTerminateCommand 终止流程实例 - ActionInstanceRetryCommand 重试流程实例 - ActionInstanceDebugCommand 更新流程实例的调试结果  **约束限制**: 当command_type=ActionInstanceDebugCommand时task_id和inputdataobject是必填参数         **取值范围**: - ActionInstanceTerminateCommand - ActionInstanceRetryCommand - ActionInstanceDebugCommand  **默认值**:  不涉及
    * taskId  **参数解释**:         更新流程调试实例节点ID **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参数        **取值范围**: 不涉及 **默认值**:  不涉及
    * inputDataobject  **参数解释**: 更新流程调试实例节点参数 **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参 **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commandType' => 'command_type',
            'taskId' => 'task_id',
            'inputDataobject' => 'input_dataobject'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commandType  **参数解释**: 更新流程实例的指令 - ActionInstanceTerminateCommand 终止流程实例 - ActionInstanceRetryCommand 重试流程实例 - ActionInstanceDebugCommand 更新流程实例的调试结果  **约束限制**: 当command_type=ActionInstanceDebugCommand时task_id和inputdataobject是必填参数         **取值范围**: - ActionInstanceTerminateCommand - ActionInstanceRetryCommand - ActionInstanceDebugCommand  **默认值**:  不涉及
    * taskId  **参数解释**:         更新流程调试实例节点ID **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参数        **取值范围**: 不涉及 **默认值**:  不涉及
    * inputDataobject  **参数解释**: 更新流程调试实例节点参数 **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参 **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'commandType' => 'setCommandType',
            'taskId' => 'setTaskId',
            'inputDataobject' => 'setInputDataobject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commandType  **参数解释**: 更新流程实例的指令 - ActionInstanceTerminateCommand 终止流程实例 - ActionInstanceRetryCommand 重试流程实例 - ActionInstanceDebugCommand 更新流程实例的调试结果  **约束限制**: 当command_type=ActionInstanceDebugCommand时task_id和inputdataobject是必填参数         **取值范围**: - ActionInstanceTerminateCommand - ActionInstanceRetryCommand - ActionInstanceDebugCommand  **默认值**:  不涉及
    * taskId  **参数解释**:         更新流程调试实例节点ID **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参数        **取值范围**: 不涉及 **默认值**:  不涉及
    * inputDataobject  **参数解释**: 更新流程调试实例节点参数 **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参 **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'commandType' => 'getCommandType',
            'taskId' => 'getTaskId',
            'inputDataobject' => 'getInputDataobject'
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
    const COMMAND_TYPE_ACTION_INSTANCE_TERMINATE_COMMAND = 'ActionInstanceTerminateCommand';
    const COMMAND_TYPE_ACTION_INSTANCE_RETRY_COMMAND = 'ActionInstanceRetryCommand';
    const COMMAND_TYPE_ACTION_INSTANCE_DEBUG_COMMAND = 'ActionInstanceDebugCommand';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandTypeAllowableValues()
    {
        return [
            self::COMMAND_TYPE_ACTION_INSTANCE_TERMINATE_COMMAND,
            self::COMMAND_TYPE_ACTION_INSTANCE_RETRY_COMMAND,
            self::COMMAND_TYPE_ACTION_INSTANCE_DEBUG_COMMAND,
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
        $this->container['commandType'] = isset($data['commandType']) ? $data['commandType'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['inputDataobject'] = isset($data['inputDataobject']) ? $data['inputDataobject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['commandType'] === null) {
            $invalidProperties[] = "'commandType' can't be null";
        }
            $allowedValues = $this->getCommandTypeAllowableValues();
                if (!is_null($this->container['commandType']) && !in_array($this->container['commandType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'commandType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['commandType']) > 64)) {
                $invalidProperties[] = "invalid value for 'commandType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['commandType']) < 0)) {
                $invalidProperties[] = "invalid value for 'commandType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inputDataobject']) && (mb_strlen($this->container['inputDataobject']) > 1028)) {
                $invalidProperties[] = "invalid value for 'inputDataobject', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['inputDataobject']) && (mb_strlen($this->container['inputDataobject']) < 0)) {
                $invalidProperties[] = "invalid value for 'inputDataobject', the character length must be bigger than or equal to 0.";
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
    * Gets commandType
    *  **参数解释**: 更新流程实例的指令 - ActionInstanceTerminateCommand 终止流程实例 - ActionInstanceRetryCommand 重试流程实例 - ActionInstanceDebugCommand 更新流程实例的调试结果  **约束限制**: 当command_type=ActionInstanceDebugCommand时task_id和inputdataobject是必填参数         **取值范围**: - ActionInstanceTerminateCommand - ActionInstanceRetryCommand - ActionInstanceDebugCommand  **默认值**:  不涉及
    *
    * @return string
    */
    public function getCommandType()
    {
        return $this->container['commandType'];
    }

    /**
    * Sets commandType
    *
    * @param string $commandType **参数解释**: 更新流程实例的指令 - ActionInstanceTerminateCommand 终止流程实例 - ActionInstanceRetryCommand 重试流程实例 - ActionInstanceDebugCommand 更新流程实例的调试结果  **约束限制**: 当command_type=ActionInstanceDebugCommand时task_id和inputdataobject是必填参数         **取值范围**: - ActionInstanceTerminateCommand - ActionInstanceRetryCommand - ActionInstanceDebugCommand  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setCommandType($commandType)
    {
        $this->container['commandType'] = $commandType;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**:         更新流程调试实例节点ID **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参数        **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**:         更新流程调试实例节点ID **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参数        **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets inputDataobject
    *  **参数解释**: 更新流程调试实例节点参数 **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参 **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getInputDataobject()
    {
        return $this->container['inputDataobject'];
    }

    /**
    * Sets inputDataobject
    *
    * @param string|null $inputDataobject **参数解释**: 更新流程调试实例节点参数 **约束限制**: 当command_type=ActionInstanceDebugCommand时参数为必填参 **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setInputDataobject($inputDataobject)
    {
        $this->container['inputDataobject'] = $inputDataobject;
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

