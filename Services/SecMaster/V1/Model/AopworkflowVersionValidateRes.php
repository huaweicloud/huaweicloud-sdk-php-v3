<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AopworkflowVersionValidateRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AopworkflowVersionValidateRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  **参数解释**: 流程的校验类型 - BASIC 基础校验 - CIRCLE 环路校验 - APP_PARAMS 参数校验  **约束限制**: 不涉及         **取值范围**: - BASIC - CIRCLE - APP_PARAMS  **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * aopworkflowId  **参数解释**: 流程的ID **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'taskconfig' => 'string',
            'taskflow' => 'string',
            'aopworkflowId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  **参数解释**: 流程的校验类型 - BASIC 基础校验 - CIRCLE 环路校验 - APP_PARAMS 参数校验  **约束限制**: 不涉及         **取值范围**: - BASIC - CIRCLE - APP_PARAMS  **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * aopworkflowId  **参数解释**: 流程的ID **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'taskconfig' => null,
        'taskflow' => null,
        'aopworkflowId' => null
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
    * mode  **参数解释**: 流程的校验类型 - BASIC 基础校验 - CIRCLE 环路校验 - APP_PARAMS 参数校验  **约束限制**: 不涉及         **取值范围**: - BASIC - CIRCLE - APP_PARAMS  **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * aopworkflowId  **参数解释**: 流程的ID **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'taskconfig' => 'taskconfig',
            'taskflow' => 'taskflow',
            'aopworkflowId' => 'aopworkflow_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  **参数解释**: 流程的校验类型 - BASIC 基础校验 - CIRCLE 环路校验 - APP_PARAMS 参数校验  **约束限制**: 不涉及         **取值范围**: - BASIC - CIRCLE - APP_PARAMS  **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * aopworkflowId  **参数解释**: 流程的ID **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'taskconfig' => 'setTaskconfig',
            'taskflow' => 'setTaskflow',
            'aopworkflowId' => 'setAopworkflowId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  **参数解释**: 流程的校验类型 - BASIC 基础校验 - CIRCLE 环路校验 - APP_PARAMS 参数校验  **约束限制**: 不涉及         **取值范围**: - BASIC - CIRCLE - APP_PARAMS  **默认值**:  不涉及
    * taskconfig  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * taskflow  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    * aopworkflowId  **参数解释**: 流程的ID **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'taskconfig' => 'getTaskconfig',
            'taskflow' => 'getTaskflow',
            'aopworkflowId' => 'getAopworkflowId'
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
    const MODE_BASIC = 'BASIC';
    const MODE_CIRCLE = 'CIRCLE';
    const MODE_APP_PARAMS = 'APP_PARAMS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_BASIC,
            self::MODE_CIRCLE,
            self::MODE_APP_PARAMS,
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['taskconfig'] = isset($data['taskconfig']) ? $data['taskconfig'] : null;
        $this->container['taskflow'] = isset($data['taskflow']) ? $data['taskflow'] : null;
        $this->container['aopworkflowId'] = isset($data['aopworkflowId']) ? $data['aopworkflowId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['mode']) > 64)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['mode']) < 1)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['taskconfig'] === null) {
            $invalidProperties[] = "'taskconfig' can't be null";
        }
            if ((mb_strlen($this->container['taskconfig']) > 65535)) {
                $invalidProperties[] = "invalid value for 'taskconfig', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['taskconfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskconfig', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['taskflow'] === null) {
            $invalidProperties[] = "'taskflow' can't be null";
        }
            if ((mb_strlen($this->container['taskflow']) > 65535)) {
                $invalidProperties[] = "invalid value for 'taskflow', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['taskflow']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskflow', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['aopworkflowId'] === null) {
            $invalidProperties[] = "'aopworkflowId' can't be null";
        }
            if ((mb_strlen($this->container['aopworkflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopworkflowId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['aopworkflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'aopworkflowId', the character length must be bigger than or equal to 1.";
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
    * Gets mode
    *  **参数解释**: 流程的校验类型 - BASIC 基础校验 - CIRCLE 环路校验 - APP_PARAMS 参数校验  **约束限制**: 不涉及         **取值范围**: - BASIC - CIRCLE - APP_PARAMS  **默认值**:  不涉及
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode **参数解释**: 流程的校验类型 - BASIC 基础校验 - CIRCLE 环路校验 - APP_PARAMS 参数校验  **约束限制**: 不涉及         **取值范围**: - BASIC - CIRCLE - APP_PARAMS  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets taskconfig
    *  **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string
    */
    public function getTaskconfig()
    {
        return $this->container['taskconfig'];
    }

    /**
    * Sets taskconfig
    *
    * @param string $taskconfig **参数解释**: 流程拓扑图的参数配置 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskconfig($taskconfig)
    {
        $this->container['taskconfig'] = $taskconfig;
        return $this;
    }

    /**
    * Gets taskflow
    *  **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string
    */
    public function getTaskflow()
    {
        return $this->container['taskflow'];
    }

    /**
    * Sets taskflow
    *
    * @param string $taskflow **参数解释**: 流程的拓扑图的BASE64编码 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setTaskflow($taskflow)
    {
        $this->container['taskflow'] = $taskflow;
        return $this;
    }

    /**
    * Gets aopworkflowId
    *  **参数解释**: 流程的ID **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string
    */
    public function getAopworkflowId()
    {
        return $this->container['aopworkflowId'];
    }

    /**
    * Sets aopworkflowId
    *
    * @param string $aopworkflowId **参数解释**: 流程的ID **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setAopworkflowId($aopworkflowId)
    {
        $this->container['aopworkflowId'] = $aopworkflowId;
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

