<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AopInstanceEventData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AopInstanceEventData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commandType  **参数解释**: 操作流程实例的指令 - ActionInstanceRunCommand 运行流程实例  **约束限制**: 不涉及         **取值范围**: - ActionInstanceRunCommand  **默认值**:  不涉及
    * actionType  **参数解释**: action的类型 - workflow 流程  **约束限制**: 不涉及         **取值范围**: - workflow  **默认值**:  不涉及
    * actionId  **参数解释**: 流程的ID **约束限制**: 不涉及
    * actionInstanceId  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * playbookContext  playbookContext
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commandType' => 'string',
            'actionType' => 'string',
            'actionId' => 'string',
            'actionInstanceId' => 'string',
            'playbookContext' => '\HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookcontextRef'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commandType  **参数解释**: 操作流程实例的指令 - ActionInstanceRunCommand 运行流程实例  **约束限制**: 不涉及         **取值范围**: - ActionInstanceRunCommand  **默认值**:  不涉及
    * actionType  **参数解释**: action的类型 - workflow 流程  **约束限制**: 不涉及         **取值范围**: - workflow  **默认值**:  不涉及
    * actionId  **参数解释**: 流程的ID **约束限制**: 不涉及
    * actionInstanceId  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * playbookContext  playbookContext
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commandType' => null,
        'actionType' => null,
        'actionId' => null,
        'actionInstanceId' => null,
        'playbookContext' => null
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
    * commandType  **参数解释**: 操作流程实例的指令 - ActionInstanceRunCommand 运行流程实例  **约束限制**: 不涉及         **取值范围**: - ActionInstanceRunCommand  **默认值**:  不涉及
    * actionType  **参数解释**: action的类型 - workflow 流程  **约束限制**: 不涉及         **取值范围**: - workflow  **默认值**:  不涉及
    * actionId  **参数解释**: 流程的ID **约束限制**: 不涉及
    * actionInstanceId  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * playbookContext  playbookContext
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commandType' => 'command_type',
            'actionType' => 'action_type',
            'actionId' => 'action_id',
            'actionInstanceId' => 'action_instance_id',
            'playbookContext' => 'playbook_context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commandType  **参数解释**: 操作流程实例的指令 - ActionInstanceRunCommand 运行流程实例  **约束限制**: 不涉及         **取值范围**: - ActionInstanceRunCommand  **默认值**:  不涉及
    * actionType  **参数解释**: action的类型 - workflow 流程  **约束限制**: 不涉及         **取值范围**: - workflow  **默认值**:  不涉及
    * actionId  **参数解释**: 流程的ID **约束限制**: 不涉及
    * actionInstanceId  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * playbookContext  playbookContext
    *
    * @var string[]
    */
    protected static $setters = [
            'commandType' => 'setCommandType',
            'actionType' => 'setActionType',
            'actionId' => 'setActionId',
            'actionInstanceId' => 'setActionInstanceId',
            'playbookContext' => 'setPlaybookContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commandType  **参数解释**: 操作流程实例的指令 - ActionInstanceRunCommand 运行流程实例  **约束限制**: 不涉及         **取值范围**: - ActionInstanceRunCommand  **默认值**:  不涉及
    * actionType  **参数解释**: action的类型 - workflow 流程  **约束限制**: 不涉及         **取值范围**: - workflow  **默认值**:  不涉及
    * actionId  **参数解释**: 流程的ID **约束限制**: 不涉及
    * actionInstanceId  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * playbookContext  playbookContext
    *
    * @var string[]
    */
    protected static $getters = [
            'commandType' => 'getCommandType',
            'actionType' => 'getActionType',
            'actionId' => 'getActionId',
            'actionInstanceId' => 'getActionInstanceId',
            'playbookContext' => 'getPlaybookContext'
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
    const COMMAND_TYPE_ACTION_INSTANCE_RUN_COMMAND = 'ActionInstanceRunCommand';
    const ACTION_TYPE_WORKFLOW = 'workflow';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandTypeAllowableValues()
    {
        return [
            self::COMMAND_TYPE_ACTION_INSTANCE_RUN_COMMAND,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_WORKFLOW,
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
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['actionInstanceId'] = isset($data['actionInstanceId']) ? $data['actionInstanceId'] : null;
        $this->container['playbookContext'] = isset($data['playbookContext']) ? $data['playbookContext'] : null;
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
        if ($this->container['actionType'] === null) {
            $invalidProperties[] = "'actionType' can't be null";
        }
            $allowedValues = $this->getActionTypeAllowableValues();
                if (!is_null($this->container['actionType']) && !in_array($this->container['actionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['actionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['actionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionInstanceId']) && (mb_strlen($this->container['actionInstanceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'actionInstanceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['actionInstanceId']) && (mb_strlen($this->container['actionInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionInstanceId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 操作流程实例的指令 - ActionInstanceRunCommand 运行流程实例  **约束限制**: 不涉及         **取值范围**: - ActionInstanceRunCommand  **默认值**:  不涉及
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
    * @param string $commandType **参数解释**: 操作流程实例的指令 - ActionInstanceRunCommand 运行流程实例  **约束限制**: 不涉及         **取值范围**: - ActionInstanceRunCommand  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setCommandType($commandType)
    {
        $this->container['commandType'] = $commandType;
        return $this;
    }

    /**
    * Gets actionType
    *  **参数解释**: action的类型 - workflow 流程  **约束限制**: 不涉及         **取值范围**: - workflow  **默认值**:  不涉及
    *
    * @return string
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string $actionType **参数解释**: action的类型 - workflow 流程  **约束限制**: 不涉及         **取值范围**: - workflow  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets actionId
    *  **参数解释**: 流程的ID **约束限制**: 不涉及
    *
    * @return string|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string|null $actionId **参数解释**: 流程的ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets actionInstanceId
    *  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    *
    * @return string|null
    */
    public function getActionInstanceId()
    {
        return $this->container['actionInstanceId'];
    }

    /**
    * Sets actionInstanceId
    *
    * @param string|null $actionInstanceId **参数解释**: 流程实例的ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setActionInstanceId($actionInstanceId)
    {
        $this->container['actionInstanceId'] = $actionInstanceId;
        return $this;
    }

    /**
    * Gets playbookContext
    *  playbookContext
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookcontextRef|null
    */
    public function getPlaybookContext()
    {
        return $this->container['playbookContext'];
    }

    /**
    * Sets playbookContext
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\PlaybookcontextRef|null $playbookContext playbookContext
    *
    * @return $this
    */
    public function setPlaybookContext($playbookContext)
    {
        $this->container['playbookContext'] = $playbookContext;
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

