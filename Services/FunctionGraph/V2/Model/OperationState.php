<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationState';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionMode  Action执行模式，支持串行，并行两种模式，默认串行
    * actions  节点中要执行的操作列表
    * onErrors  错误处理策略
    * id  节点ID，需要在当前函数流中唯一
    * name  节点名称
    * type  节点类型
    * end  是否是结束节点
    * transition  下一步骤节点ID
    * stateDataFilter  stateDataFilter
    * duration  时间等待节点等待时间（秒）,节点类型为Sleep时为必填，节点类型不为Sleep时无效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionMode' => 'string',
            'actions' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\Action[]',
            'onErrors' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\OnError[]',
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'end' => 'bool',
            'transition' => 'string',
            'stateDataFilter' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\StateDataFilter',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionMode  Action执行模式，支持串行，并行两种模式，默认串行
    * actions  节点中要执行的操作列表
    * onErrors  错误处理策略
    * id  节点ID，需要在当前函数流中唯一
    * name  节点名称
    * type  节点类型
    * end  是否是结束节点
    * transition  下一步骤节点ID
    * stateDataFilter  stateDataFilter
    * duration  时间等待节点等待时间（秒）,节点类型为Sleep时为必填，节点类型不为Sleep时无效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionMode' => null,
        'actions' => null,
        'onErrors' => null,
        'id' => null,
        'name' => null,
        'type' => null,
        'end' => null,
        'transition' => null,
        'stateDataFilter' => null,
        'duration' => 'int64'
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
    * actionMode  Action执行模式，支持串行，并行两种模式，默认串行
    * actions  节点中要执行的操作列表
    * onErrors  错误处理策略
    * id  节点ID，需要在当前函数流中唯一
    * name  节点名称
    * type  节点类型
    * end  是否是结束节点
    * transition  下一步骤节点ID
    * stateDataFilter  stateDataFilter
    * duration  时间等待节点等待时间（秒）,节点类型为Sleep时为必填，节点类型不为Sleep时无效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionMode' => 'action_mode',
            'actions' => 'actions',
            'onErrors' => 'on_errors',
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'end' => 'end',
            'transition' => 'transition',
            'stateDataFilter' => 'state_data_filter',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionMode  Action执行模式，支持串行，并行两种模式，默认串行
    * actions  节点中要执行的操作列表
    * onErrors  错误处理策略
    * id  节点ID，需要在当前函数流中唯一
    * name  节点名称
    * type  节点类型
    * end  是否是结束节点
    * transition  下一步骤节点ID
    * stateDataFilter  stateDataFilter
    * duration  时间等待节点等待时间（秒）,节点类型为Sleep时为必填，节点类型不为Sleep时无效
    *
    * @var string[]
    */
    protected static $setters = [
            'actionMode' => 'setActionMode',
            'actions' => 'setActions',
            'onErrors' => 'setOnErrors',
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'end' => 'setEnd',
            'transition' => 'setTransition',
            'stateDataFilter' => 'setStateDataFilter',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionMode  Action执行模式，支持串行，并行两种模式，默认串行
    * actions  节点中要执行的操作列表
    * onErrors  错误处理策略
    * id  节点ID，需要在当前函数流中唯一
    * name  节点名称
    * type  节点类型
    * end  是否是结束节点
    * transition  下一步骤节点ID
    * stateDataFilter  stateDataFilter
    * duration  时间等待节点等待时间（秒）,节点类型为Sleep时为必填，节点类型不为Sleep时无效
    *
    * @var string[]
    */
    protected static $getters = [
            'actionMode' => 'getActionMode',
            'actions' => 'getActions',
            'onErrors' => 'getOnErrors',
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'end' => 'getEnd',
            'transition' => 'getTransition',
            'stateDataFilter' => 'getStateDataFilter',
            'duration' => 'getDuration'
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
    const ACTION_MODE_SEQUENTIAL = 'sequential';
    const ACTION_MODE_PARALLEL = 'parallel';
    const TYPE_OPERATION = 'Operation';
    const TYPE_SLEEP = 'Sleep';
    const TYPE_END = 'End';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionModeAllowableValues()
    {
        return [
            self::ACTION_MODE_SEQUENTIAL,
            self::ACTION_MODE_PARALLEL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OPERATION,
            self::TYPE_SLEEP,
            self::TYPE_END,
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
        $this->container['actionMode'] = isset($data['actionMode']) ? $data['actionMode'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['onErrors'] = isset($data['onErrors']) ? $data['onErrors'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['transition'] = isset($data['transition']) ? $data['transition'] : null;
        $this->container['stateDataFilter'] = isset($data['stateDataFilter']) ? $data['stateDataFilter'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionModeAllowableValues();
                if (!is_null($this->container['actionMode']) && !in_array($this->container['actionMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['actionMode']) && (mb_strlen($this->container['actionMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'actionMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['actionMode']) && (mb_strlen($this->container['actionMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionMode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,256}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([_a-zA-Z0-9().-]|[\\u4e00-\\u9fa5]){1,256}$/.";
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

            if ((mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
        if ($this->container['transition'] === null) {
            $invalidProperties[] = "'transition' can't be null";
        }
            if ((mb_strlen($this->container['transition']) > 256)) {
                $invalidProperties[] = "invalid value for 'transition', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['transition']) < 0)) {
                $invalidProperties[] = "invalid value for 'transition', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 86400)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
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
    * Gets actionMode
    *  Action执行模式，支持串行，并行两种模式，默认串行
    *
    * @return string|null
    */
    public function getActionMode()
    {
        return $this->container['actionMode'];
    }

    /**
    * Sets actionMode
    *
    * @param string|null $actionMode Action执行模式，支持串行，并行两种模式，默认串行
    *
    * @return $this
    */
    public function setActionMode($actionMode)
    {
        $this->container['actionMode'] = $actionMode;
        return $this;
    }

    /**
    * Gets actions
    *  节点中要执行的操作列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\Action[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\Action[] $actions 节点中要执行的操作列表
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets onErrors
    *  错误处理策略
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\OnError[]|null
    */
    public function getOnErrors()
    {
        return $this->container['onErrors'];
    }

    /**
    * Sets onErrors
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\OnError[]|null $onErrors 错误处理策略
    *
    * @return $this
    */
    public function setOnErrors($onErrors)
    {
        $this->container['onErrors'] = $onErrors;
        return $this;
    }

    /**
    * Gets id
    *  节点ID，需要在当前函数流中唯一
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
    * @param string $id 节点ID，需要在当前函数流中唯一
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
    *  节点名称
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
    * @param string $name 节点名称
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
    *  节点类型
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
    * @param string $type 节点类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets end
    *  是否是结束节点
    *
    * @return bool
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param bool $end 是否是结束节点
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets transition
    *  下一步骤节点ID
    *
    * @return string
    */
    public function getTransition()
    {
        return $this->container['transition'];
    }

    /**
    * Sets transition
    *
    * @param string $transition 下一步骤节点ID
    *
    * @return $this
    */
    public function setTransition($transition)
    {
        $this->container['transition'] = $transition;
        return $this;
    }

    /**
    * Gets stateDataFilter
    *  stateDataFilter
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\StateDataFilter|null
    */
    public function getStateDataFilter()
    {
        return $this->container['stateDataFilter'];
    }

    /**
    * Sets stateDataFilter
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\StateDataFilter|null $stateDataFilter stateDataFilter
    *
    * @return $this
    */
    public function setStateDataFilter($stateDataFilter)
    {
        $this->container['stateDataFilter'] = $stateDataFilter;
        return $this;
    }

    /**
    * Gets duration
    *  时间等待节点等待时间（秒）,节点类型为Sleep时为必填，节点类型不为Sleep时无效
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 时间等待节点等待时间（秒）,节点类型为Sleep时为必填，节点类型不为Sleep时无效
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

