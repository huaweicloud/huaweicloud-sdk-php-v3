<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  训练作业名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * workspaceId  指定作业所处的工作空间，默认值为“0”。
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * annotations  训练作业高级功能配置，可选取值如下： - \"job_template\": \"Template RL\"（异构作业）。 - \"fault-tolerance/job-retry-num\": \"3\"（故障自动重启次数）。 - \"jupyter-lab/enable\": \"true\"（JupyterLab训练应用程序）
    * trainingExperimentReference  trainingExperimentReference
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'workspaceId' => 'string',
            'description' => 'string',
            'annotations' => 'map[string,string]',
            'trainingExperimentReference' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TrainingExperimentRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  训练作业名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * workspaceId  指定作业所处的工作空间，默认值为“0”。
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * annotations  训练作业高级功能配置，可选取值如下： - \"job_template\": \"Template RL\"（异构作业）。 - \"fault-tolerance/job-retry-num\": \"3\"（故障自动重启次数）。 - \"jupyter-lab/enable\": \"true\"（JupyterLab训练应用程序）
    * trainingExperimentReference  trainingExperimentReference
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'workspaceId' => null,
        'description' => null,
        'annotations' => null,
        'trainingExperimentReference' => null
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
    * name  训练作业名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * workspaceId  指定作业所处的工作空间，默认值为“0”。
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * annotations  训练作业高级功能配置，可选取值如下： - \"job_template\": \"Template RL\"（异构作业）。 - \"fault-tolerance/job-retry-num\": \"3\"（故障自动重启次数）。 - \"jupyter-lab/enable\": \"true\"（JupyterLab训练应用程序）
    * trainingExperimentReference  trainingExperimentReference
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'workspaceId' => 'workspace_id',
            'description' => 'description',
            'annotations' => 'annotations',
            'trainingExperimentReference' => 'training_experiment_reference'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  训练作业名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * workspaceId  指定作业所处的工作空间，默认值为“0”。
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * annotations  训练作业高级功能配置，可选取值如下： - \"job_template\": \"Template RL\"（异构作业）。 - \"fault-tolerance/job-retry-num\": \"3\"（故障自动重启次数）。 - \"jupyter-lab/enable\": \"true\"（JupyterLab训练应用程序）
    * trainingExperimentReference  trainingExperimentReference
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'workspaceId' => 'setWorkspaceId',
            'description' => 'setDescription',
            'annotations' => 'setAnnotations',
            'trainingExperimentReference' => 'setTrainingExperimentReference'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  训练作业名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    * workspaceId  指定作业所处的工作空间，默认值为“0”。
    * description  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    * annotations  训练作业高级功能配置，可选取值如下： - \"job_template\": \"Template RL\"（异构作业）。 - \"fault-tolerance/job-retry-num\": \"3\"（故障自动重启次数）。 - \"jupyter-lab/enable\": \"true\"（JupyterLab训练应用程序）
    * trainingExperimentReference  trainingExperimentReference
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'workspaceId' => 'getWorkspaceId',
            'description' => 'getDescription',
            'annotations' => 'getAnnotations',
            'trainingExperimentReference' => 'getTrainingExperimentReference'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['trainingExperimentReference'] = isset($data['trainingExperimentReference']) ? $data['trainingExperimentReference'] : null;
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
    *  训练作业名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
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
    * @param string $name 训练作业名称。限制为1-64位只含数字、字母、下划线和中划线的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets workspaceId
    *  指定作业所处的工作空间，默认值为“0”。
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
    * @param string|null $workspaceId 指定作业所处的工作空间，默认值为“0”。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets description
    *  对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
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
    * @param string|null $description 对训练作业的描述，默认为“NULL”，字符串的长度限制为[0, 256]。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets annotations
    *  训练作业高级功能配置，可选取值如下： - \"job_template\": \"Template RL\"（异构作业）。 - \"fault-tolerance/job-retry-num\": \"3\"（故障自动重启次数）。 - \"jupyter-lab/enable\": \"true\"（JupyterLab训练应用程序）
    *
    * @return map[string,string]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,string]|null $annotations 训练作业高级功能配置，可选取值如下： - \"job_template\": \"Template RL\"（异构作业）。 - \"fault-tolerance/job-retry-num\": \"3\"（故障自动重启次数）。 - \"jupyter-lab/enable\": \"true\"（JupyterLab训练应用程序）
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets trainingExperimentReference
    *  trainingExperimentReference
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TrainingExperimentRequest|null
    */
    public function getTrainingExperimentReference()
    {
        return $this->container['trainingExperimentReference'];
    }

    /**
    * Sets trainingExperimentReference
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TrainingExperimentRequest|null $trainingExperimentReference trainingExperimentReference
    *
    * @return $this
    */
    public function setTrainingExperimentReference($trainingExperimentReference)
    {
        $this->container['trainingExperimentReference'] = $trainingExperimentReference;
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

