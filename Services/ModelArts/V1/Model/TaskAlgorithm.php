<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskAlgorithm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Task_algorithm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobConfig  jobConfig
    * codeDir  **参数解释**：算法的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * engine  engine
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业环境变量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmJobConfig',
            'codeDir' => 'string',
            'bootFile' => 'string',
            'engine' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmEngine',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmInputs[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmOutputs[]',
            'localCodeDir' => 'string',
            'workingDir' => 'string',
            'environments' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobConfig  jobConfig
    * codeDir  **参数解释**：算法的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * engine  engine
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业环境变量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobConfig' => null,
        'codeDir' => null,
        'bootFile' => null,
        'engine' => null,
        'inputs' => null,
        'outputs' => null,
        'localCodeDir' => null,
        'workingDir' => null,
        'environments' => null
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
    * jobConfig  jobConfig
    * codeDir  **参数解释**：算法的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * engine  engine
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业环境变量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobConfig' => 'job_config',
            'codeDir' => 'code_dir',
            'bootFile' => 'boot_file',
            'engine' => 'engine',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'localCodeDir' => 'local_code_dir',
            'workingDir' => 'working_dir',
            'environments' => 'environments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobConfig  jobConfig
    * codeDir  **参数解释**：算法的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * engine  engine
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业环境变量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobConfig' => 'setJobConfig',
            'codeDir' => 'setCodeDir',
            'bootFile' => 'setBootFile',
            'engine' => 'setEngine',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'localCodeDir' => 'setLocalCodeDir',
            'workingDir' => 'setWorkingDir',
            'environments' => 'setEnvironments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobConfig  jobConfig
    * codeDir  **参数解释**：算法的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * bootFile  **参数解释**：算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * engine  engine
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * localCodeDir  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * workingDir  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * environments  **参数解释**：训练作业环境变量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobConfig' => 'getJobConfig',
            'codeDir' => 'getCodeDir',
            'bootFile' => 'getBootFile',
            'engine' => 'getEngine',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'localCodeDir' => 'getLocalCodeDir',
            'workingDir' => 'getWorkingDir',
            'environments' => 'getEnvironments'
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
        $this->container['jobConfig'] = isset($data['jobConfig']) ? $data['jobConfig'] : null;
        $this->container['codeDir'] = isset($data['codeDir']) ? $data['codeDir'] : null;
        $this->container['bootFile'] = isset($data['bootFile']) ? $data['bootFile'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['localCodeDir'] = isset($data['localCodeDir']) ? $data['localCodeDir'] : null;
        $this->container['workingDir'] = isset($data['workingDir']) ? $data['workingDir'] : null;
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
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
    * Gets jobConfig
    *  jobConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmJobConfig|null
    */
    public function getJobConfig()
    {
        return $this->container['jobConfig'];
    }

    /**
    * Sets jobConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmJobConfig|null $jobConfig jobConfig
    *
    * @return $this
    */
    public function setJobConfig($jobConfig)
    {
        $this->container['jobConfig'] = $jobConfig;
        return $this;
    }

    /**
    * Gets codeDir
    *  **参数解释**：算法的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getCodeDir()
    {
        return $this->container['codeDir'];
    }

    /**
    * Sets codeDir
    *
    * @param string|null $codeDir **参数解释**：算法的代码目录。如：“/usr/app/”。 **约束限制**：应与boot_file一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCodeDir($codeDir)
    {
        $this->container['codeDir'] = $codeDir;
        return $this;
    }

    /**
    * Gets bootFile
    *  **参数解释**：算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getBootFile()
    {
        return $this->container['bootFile'];
    }

    /**
    * Sets bootFile
    *
    * @param string|null $bootFile **参数解释**：算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。 **约束限制**：应与code_dir一同出现。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setBootFile($bootFile)
    {
        $this->container['bootFile'] = $bootFile;
        return $this;
    }

    /**
    * Gets engine
    *  engine
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmEngine|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmEngine|null $engine engine
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets inputs
    *  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmInputs[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmInputs[]|null $inputs **参数解释**：算法的数据输入。 **约束限制**：不涉及。
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
    *  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmOutputs[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmOutputs[]|null $outputs **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets localCodeDir
    *  **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getLocalCodeDir()
    {
        return $this->container['localCodeDir'];
    }

    /**
    * Sets localCodeDir
    *
    * @param string|null $localCodeDir **参数解释**：算法的代码目录下载到训练容器内的本地路径。 **约束限制**： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setLocalCodeDir($localCodeDir)
    {
        $this->container['localCodeDir'] = $localCodeDir;
        return $this;
    }

    /**
    * Gets workingDir
    *  **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getWorkingDir()
    {
        return $this->container['workingDir'];
    }

    /**
    * Sets workingDir
    *
    * @param string|null $workingDir **参数解释**：运行算法时所在的工作目录。 **约束限制**：v1兼容模式下，当前字段不生效。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setWorkingDir($workingDir)
    {
        $this->container['workingDir'] = $workingDir;
        return $this;
    }

    /**
    * Gets environments
    *  **参数解释**：训练作业环境变量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return map[string,string]|null
    */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
    * Sets environments
    *
    * @param map[string,string]|null $environments **参数解释**：训练作业环境变量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;
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

