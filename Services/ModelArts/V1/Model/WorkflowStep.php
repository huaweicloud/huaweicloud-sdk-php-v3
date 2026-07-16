<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowStep';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Workflow工作流节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * type  节点的类型，枚举值如下: - job 训练 - labeling 标注 - release_dataset 数据集发布 - model 模型发布 - service 服务部署 - mrs_job MRS作业 - dataset_import 数据集导入 - create_dataset 创建数据集
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * createdAt  节点的创建时间。
    * title  工作流节点标题。
    * description  节点的描述信息。
    * properties  节点属性。
    * dependSteps  运行依赖的前置节点。
    * conditions  节点执行条件。
    * ifThenSteps  条件节点分支。
    * elseThenSteps  条件节点另一分支。
    * policy  policy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobInput[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobOutput[]',
            'createdAt' => 'string',
            'title' => 'string',
            'description' => 'string',
            'properties' => 'map[string,object]',
            'dependSteps' => 'string[]',
            'conditions' => '\HuaweiCloud\SDK\ModelArts\V1\Model\StepCondition[]',
            'ifThenSteps' => 'string[]',
            'elseThenSteps' => 'string[]',
            'policy' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Workflow工作流节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * type  节点的类型，枚举值如下: - job 训练 - labeling 标注 - release_dataset 数据集发布 - model 模型发布 - service 服务部署 - mrs_job MRS作业 - dataset_import 数据集导入 - create_dataset 创建数据集
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * createdAt  节点的创建时间。
    * title  工作流节点标题。
    * description  节点的描述信息。
    * properties  节点属性。
    * dependSteps  运行依赖的前置节点。
    * conditions  节点执行条件。
    * ifThenSteps  条件节点分支。
    * elseThenSteps  条件节点另一分支。
    * policy  policy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'inputs' => null,
        'outputs' => null,
        'createdAt' => null,
        'title' => null,
        'description' => null,
        'properties' => null,
        'dependSteps' => null,
        'conditions' => null,
        'ifThenSteps' => null,
        'elseThenSteps' => null,
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
    * name  Workflow工作流节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * type  节点的类型，枚举值如下: - job 训练 - labeling 标注 - release_dataset 数据集发布 - model 模型发布 - service 服务部署 - mrs_job MRS作业 - dataset_import 数据集导入 - create_dataset 创建数据集
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * createdAt  节点的创建时间。
    * title  工作流节点标题。
    * description  节点的描述信息。
    * properties  节点属性。
    * dependSteps  运行依赖的前置节点。
    * conditions  节点执行条件。
    * ifThenSteps  条件节点分支。
    * elseThenSteps  条件节点另一分支。
    * policy  policy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'createdAt' => 'created_at',
            'title' => 'title',
            'description' => 'description',
            'properties' => 'properties',
            'dependSteps' => 'depend_steps',
            'conditions' => 'conditions',
            'ifThenSteps' => 'if_then_steps',
            'elseThenSteps' => 'else_then_steps',
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Workflow工作流节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * type  节点的类型，枚举值如下: - job 训练 - labeling 标注 - release_dataset 数据集发布 - model 模型发布 - service 服务部署 - mrs_job MRS作业 - dataset_import 数据集导入 - create_dataset 创建数据集
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * createdAt  节点的创建时间。
    * title  工作流节点标题。
    * description  节点的描述信息。
    * properties  节点属性。
    * dependSteps  运行依赖的前置节点。
    * conditions  节点执行条件。
    * ifThenSteps  条件节点分支。
    * elseThenSteps  条件节点另一分支。
    * policy  policy
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'createdAt' => 'setCreatedAt',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'properties' => 'setProperties',
            'dependSteps' => 'setDependSteps',
            'conditions' => 'setConditions',
            'ifThenSteps' => 'setIfThenSteps',
            'elseThenSteps' => 'setElseThenSteps',
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Workflow工作流节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
    * type  节点的类型，枚举值如下: - job 训练 - labeling 标注 - release_dataset 数据集发布 - model 模型发布 - service 服务部署 - mrs_job MRS作业 - dataset_import 数据集导入 - create_dataset 创建数据集
    * inputs  节点的输入项。
    * outputs  节点的输出项。
    * createdAt  节点的创建时间。
    * title  工作流节点标题。
    * description  节点的描述信息。
    * properties  节点属性。
    * dependSteps  运行依赖的前置节点。
    * conditions  节点执行条件。
    * ifThenSteps  条件节点分支。
    * elseThenSteps  条件节点另一分支。
    * policy  policy
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'createdAt' => 'getCreatedAt',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'properties' => 'getProperties',
            'dependSteps' => 'getDependSteps',
            'conditions' => 'getConditions',
            'ifThenSteps' => 'getIfThenSteps',
            'elseThenSteps' => 'getElseThenSteps',
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
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['dependSteps'] = isset($data['dependSteps']) ? $data['dependSteps'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['ifThenSteps'] = isset($data['ifThenSteps']) ? $data['ifThenSteps'] : null;
        $this->container['elseThenSteps'] = isset($data['elseThenSteps']) ? $data['elseThenSteps'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    *  Workflow工作流节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
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
    * @param string $name Workflow工作流节点的名称，在一个DAG中唯一，1到64位只包含中英文，数字，空格，下划线（_）和中划线（-），并且以中英文开头。
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
    *  节点的类型，枚举值如下: - job 训练 - labeling 标注 - release_dataset 数据集发布 - model 模型发布 - service 服务部署 - mrs_job MRS作业 - dataset_import 数据集导入 - create_dataset 创建数据集
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 节点的类型，枚举值如下: - job 训练 - labeling 标注 - release_dataset 数据集发布 - model 模型发布 - service 服务部署 - mrs_job MRS作业 - dataset_import 数据集导入 - create_dataset 创建数据集
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets inputs
    *  节点的输入项。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobInput[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobInput[]|null $inputs 节点的输入项。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets outputs
    *  节点的输出项。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobOutput[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobOutput[]|null $outputs 节点的输出项。
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets createdAt
    *  节点的创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 节点的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets title
    *  工作流节点标题。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 工作流节点标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  节点的描述信息。
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
    * @param string|null $description 节点的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets properties
    *  节点属性。
    *
    * @return map[string,object]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,object]|null $properties 节点属性。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets dependSteps
    *  运行依赖的前置节点。
    *
    * @return string[]|null
    */
    public function getDependSteps()
    {
        return $this->container['dependSteps'];
    }

    /**
    * Sets dependSteps
    *
    * @param string[]|null $dependSteps 运行依赖的前置节点。
    *
    * @return $this
    */
    public function setDependSteps($dependSteps)
    {
        $this->container['dependSteps'] = $dependSteps;
        return $this;
    }

    /**
    * Gets conditions
    *  节点执行条件。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\StepCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\StepCondition[]|null $conditions 节点执行条件。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets ifThenSteps
    *  条件节点分支。
    *
    * @return string[]|null
    */
    public function getIfThenSteps()
    {
        return $this->container['ifThenSteps'];
    }

    /**
    * Sets ifThenSteps
    *
    * @param string[]|null $ifThenSteps 条件节点分支。
    *
    * @return $this
    */
    public function setIfThenSteps($ifThenSteps)
    {
        $this->container['ifThenSteps'] = $ifThenSteps;
        return $this;
    }

    /**
    * Gets elseThenSteps
    *  条件节点另一分支。
    *
    * @return string[]|null
    */
    public function getElseThenSteps()
    {
        return $this->container['elseThenSteps'];
    }

    /**
    * Sets elseThenSteps
    *
    * @param string[]|null $elseThenSteps 条件节点另一分支。
    *
    * @return $this
    */
    public function setElseThenSteps($elseThenSteps)
    {
        $this->container['elseThenSteps'] = $elseThenSteps;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepPolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowStepPolicy|null $policy policy
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

