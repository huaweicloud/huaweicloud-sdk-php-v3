<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeConstraints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeConstraints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * other  其他节点限制
    * master  master
    * core  core
    * task  task
    * coreSeparate  coreSeparate
    * coreCombine  coreCombine
    * taskSeparate  taskSeparate
    * taskCombine  taskCombine
    * nodeGroupTask  nodeGroupTask
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'other' => 'map[string,object]',
            'master' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint',
            'core' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint',
            'task' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint',
            'coreSeparate' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint',
            'coreCombine' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint',
            'taskSeparate' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint',
            'taskCombine' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint',
            'nodeGroupTask' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * other  其他节点限制
    * master  master
    * core  core
    * task  task
    * coreSeparate  coreSeparate
    * coreCombine  coreCombine
    * taskSeparate  taskSeparate
    * taskCombine  taskCombine
    * nodeGroupTask  nodeGroupTask
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'other' => null,
        'master' => null,
        'core' => null,
        'task' => null,
        'coreSeparate' => null,
        'coreCombine' => null,
        'taskSeparate' => null,
        'taskCombine' => null,
        'nodeGroupTask' => null
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
    * other  其他节点限制
    * master  master
    * core  core
    * task  task
    * coreSeparate  coreSeparate
    * coreCombine  coreCombine
    * taskSeparate  taskSeparate
    * taskCombine  taskCombine
    * nodeGroupTask  nodeGroupTask
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'other' => 'other',
            'master' => 'master',
            'core' => 'core',
            'task' => 'task',
            'coreSeparate' => 'core_separate',
            'coreCombine' => 'core_combine',
            'taskSeparate' => 'task_separate',
            'taskCombine' => 'task_combine',
            'nodeGroupTask' => 'node_group_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * other  其他节点限制
    * master  master
    * core  core
    * task  task
    * coreSeparate  coreSeparate
    * coreCombine  coreCombine
    * taskSeparate  taskSeparate
    * taskCombine  taskCombine
    * nodeGroupTask  nodeGroupTask
    *
    * @var string[]
    */
    protected static $setters = [
            'other' => 'setOther',
            'master' => 'setMaster',
            'core' => 'setCore',
            'task' => 'setTask',
            'coreSeparate' => 'setCoreSeparate',
            'coreCombine' => 'setCoreCombine',
            'taskSeparate' => 'setTaskSeparate',
            'taskCombine' => 'setTaskCombine',
            'nodeGroupTask' => 'setNodeGroupTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * other  其他节点限制
    * master  master
    * core  core
    * task  task
    * coreSeparate  coreSeparate
    * coreCombine  coreCombine
    * taskSeparate  taskSeparate
    * taskCombine  taskCombine
    * nodeGroupTask  nodeGroupTask
    *
    * @var string[]
    */
    protected static $getters = [
            'other' => 'getOther',
            'master' => 'getMaster',
            'core' => 'getCore',
            'task' => 'getTask',
            'coreSeparate' => 'getCoreSeparate',
            'coreCombine' => 'getCoreCombine',
            'taskSeparate' => 'getTaskSeparate',
            'taskCombine' => 'getTaskCombine',
            'nodeGroupTask' => 'getNodeGroupTask'
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
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['master'] = isset($data['master']) ? $data['master'] : null;
        $this->container['core'] = isset($data['core']) ? $data['core'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['coreSeparate'] = isset($data['coreSeparate']) ? $data['coreSeparate'] : null;
        $this->container['coreCombine'] = isset($data['coreCombine']) ? $data['coreCombine'] : null;
        $this->container['taskSeparate'] = isset($data['taskSeparate']) ? $data['taskSeparate'] : null;
        $this->container['taskCombine'] = isset($data['taskCombine']) ? $data['taskCombine'] : null;
        $this->container['nodeGroupTask'] = isset($data['nodeGroupTask']) ? $data['nodeGroupTask'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets other
    *  其他节点限制
    *
    * @return map[string,object]|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param map[string,object]|null $other 其他节点限制
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
        return $this;
    }

    /**
    * Gets master
    *  master
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getMaster()
    {
        return $this->container['master'];
    }

    /**
    * Sets master
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $master master
    *
    * @return $this
    */
    public function setMaster($master)
    {
        $this->container['master'] = $master;
        return $this;
    }

    /**
    * Gets core
    *  core
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getCore()
    {
        return $this->container['core'];
    }

    /**
    * Sets core
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $core core
    *
    * @return $this
    */
    public function setCore($core)
    {
        $this->container['core'] = $core;
        return $this;
    }

    /**
    * Gets task
    *  task
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $task task
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets coreSeparate
    *  coreSeparate
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getCoreSeparate()
    {
        return $this->container['coreSeparate'];
    }

    /**
    * Sets coreSeparate
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $coreSeparate coreSeparate
    *
    * @return $this
    */
    public function setCoreSeparate($coreSeparate)
    {
        $this->container['coreSeparate'] = $coreSeparate;
        return $this;
    }

    /**
    * Gets coreCombine
    *  coreCombine
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getCoreCombine()
    {
        return $this->container['coreCombine'];
    }

    /**
    * Sets coreCombine
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $coreCombine coreCombine
    *
    * @return $this
    */
    public function setCoreCombine($coreCombine)
    {
        $this->container['coreCombine'] = $coreCombine;
        return $this;
    }

    /**
    * Gets taskSeparate
    *  taskSeparate
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getTaskSeparate()
    {
        return $this->container['taskSeparate'];
    }

    /**
    * Sets taskSeparate
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $taskSeparate taskSeparate
    *
    * @return $this
    */
    public function setTaskSeparate($taskSeparate)
    {
        $this->container['taskSeparate'] = $taskSeparate;
        return $this;
    }

    /**
    * Gets taskCombine
    *  taskCombine
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getTaskCombine()
    {
        return $this->container['taskCombine'];
    }

    /**
    * Sets taskCombine
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $taskCombine taskCombine
    *
    * @return $this
    */
    public function setTaskCombine($taskCombine)
    {
        $this->container['taskCombine'] = $taskCombine;
        return $this;
    }

    /**
    * Gets nodeGroupTask
    *  nodeGroupTask
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null
    */
    public function getNodeGroupTask()
    {
        return $this->container['nodeGroupTask'];
    }

    /**
    * Sets nodeGroupTask
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraint|null $nodeGroupTask nodeGroupTask
    *
    * @return $this
    */
    public function setNodeGroupTask($nodeGroupTask)
    {
        $this->container['nodeGroupTask'] = $nodeGroupTask;
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

