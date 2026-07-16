<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述。
    * dataRequirements  Workflow包含的数据输入项定义。
    * parameters  工作流参数。
    * storages  工作流存储信息。
    * labels  工作流标签。
    * smnSwitch  SMN消息订阅开关。
    * steps  工作流节点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'dataRequirements' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]',
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]',
            'storages' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStorage[]',
            'labels' => 'string[]',
            'smnSwitch' => 'string',
            'steps' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStep[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述。
    * dataRequirements  Workflow包含的数据输入项定义。
    * parameters  工作流参数。
    * storages  工作流存储信息。
    * labels  工作流标签。
    * smnSwitch  SMN消息订阅开关。
    * steps  工作流节点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'dataRequirements' => null,
        'parameters' => null,
        'storages' => null,
        'labels' => null,
        'smnSwitch' => null,
        'steps' => null
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
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述。
    * dataRequirements  Workflow包含的数据输入项定义。
    * parameters  工作流参数。
    * storages  工作流存储信息。
    * labels  工作流标签。
    * smnSwitch  SMN消息订阅开关。
    * steps  工作流节点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'dataRequirements' => 'data_requirements',
            'parameters' => 'parameters',
            'storages' => 'storages',
            'labels' => 'labels',
            'smnSwitch' => 'smn_switch',
            'steps' => 'steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述。
    * dataRequirements  Workflow包含的数据输入项定义。
    * parameters  工作流参数。
    * storages  工作流存储信息。
    * labels  工作流标签。
    * smnSwitch  SMN消息订阅开关。
    * steps  工作流节点。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'dataRequirements' => 'setDataRequirements',
            'parameters' => 'setParameters',
            'storages' => 'setStorages',
            'labels' => 'setLabels',
            'smnSwitch' => 'setSmnSwitch',
            'steps' => 'setSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述。
    * dataRequirements  Workflow包含的数据输入项定义。
    * parameters  工作流参数。
    * storages  工作流存储信息。
    * labels  工作流标签。
    * smnSwitch  SMN消息订阅开关。
    * steps  工作流节点。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'dataRequirements' => 'getDataRequirements',
            'parameters' => 'getParameters',
            'storages' => 'getStorages',
            'labels' => 'getLabels',
            'smnSwitch' => 'getSmnSwitch',
            'steps' => 'getSteps'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataRequirements'] = isset($data['dataRequirements']) ? $data['dataRequirements'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['storages'] = isset($data['storages']) ? $data['storages'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['smnSwitch'] = isset($data['smnSwitch']) ? $data['smnSwitch'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
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
    * Gets name
    *  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
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
    * @param string|null $name 工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  工作流描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 工作流描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dataRequirements
    *  Workflow包含的数据输入项定义。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]|null
    */
    public function getDataRequirements()
    {
        return $this->container['dataRequirements'];
    }

    /**
    * Sets dataRequirements
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]|null $dataRequirements Workflow包含的数据输入项定义。
    *
    * @return $this
    */
    public function setDataRequirements($dataRequirements)
    {
        $this->container['dataRequirements'] = $dataRequirements;
        return $this;
    }

    /**
    * Gets parameters
    *  工作流参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]|null $parameters 工作流参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets storages
    *  工作流存储信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStorage[]|null
    */
    public function getStorages()
    {
        return $this->container['storages'];
    }

    /**
    * Sets storages
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStorage[]|null $storages 工作流存储信息。
    *
    * @return $this
    */
    public function setStorages($storages)
    {
        $this->container['storages'] = $storages;
        return $this;
    }

    /**
    * Gets labels
    *  工作流标签。
    *
    * @return string[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[]|null $labels 工作流标签。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets smnSwitch
    *  SMN消息订阅开关。
    *
    * @return string|null
    */
    public function getSmnSwitch()
    {
        return $this->container['smnSwitch'];
    }

    /**
    * Sets smnSwitch
    *
    * @param string|null $smnSwitch SMN消息订阅开关。
    *
    * @return $this
    */
    public function setSmnSwitch($smnSwitch)
    {
        $this->container['smnSwitch'] = $smnSwitch;
        return $this;
    }

    /**
    * Gets steps
    *  工作流节点。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStep[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStep[]|null $steps 工作流节点。
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
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

