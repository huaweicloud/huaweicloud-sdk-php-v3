<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskResponseAlgorithm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskResponseAlgorithm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codeDir  算法启动文件所在目录绝对路径。
    * bootFile  算法启动文件绝对路径。
    * inputs  inputs
    * outputs  outputs
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  **参数解释**：训练作业相关的环境变量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codeDir' => 'string',
            'bootFile' => 'string',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmInput',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmOutput',
            'engine' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmEngine',
            'localCodeDir' => 'string',
            'workingDir' => 'string',
            'environments' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codeDir  算法启动文件所在目录绝对路径。
    * bootFile  算法启动文件绝对路径。
    * inputs  inputs
    * outputs  outputs
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  **参数解释**：训练作业相关的环境变量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codeDir' => null,
        'bootFile' => null,
        'inputs' => null,
        'outputs' => null,
        'engine' => null,
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
    * codeDir  算法启动文件所在目录绝对路径。
    * bootFile  算法启动文件绝对路径。
    * inputs  inputs
    * outputs  outputs
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  **参数解释**：训练作业相关的环境变量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codeDir' => 'code_dir',
            'bootFile' => 'boot_file',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'engine' => 'engine',
            'localCodeDir' => 'local_code_dir',
            'workingDir' => 'working_dir',
            'environments' => 'environments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codeDir  算法启动文件所在目录绝对路径。
    * bootFile  算法启动文件绝对路径。
    * inputs  inputs
    * outputs  outputs
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  **参数解释**：训练作业相关的环境变量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'codeDir' => 'setCodeDir',
            'bootFile' => 'setBootFile',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'engine' => 'setEngine',
            'localCodeDir' => 'setLocalCodeDir',
            'workingDir' => 'setWorkingDir',
            'environments' => 'setEnvironments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codeDir  算法启动文件所在目录绝对路径。
    * bootFile  算法启动文件绝对路径。
    * inputs  inputs
    * outputs  outputs
    * engine  engine
    * localCodeDir  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
    * workingDir  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
    * environments  **参数解释**：训练作业相关的环境变量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'codeDir' => 'getCodeDir',
            'bootFile' => 'getBootFile',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'engine' => 'getEngine',
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
        $this->container['codeDir'] = isset($data['codeDir']) ? $data['codeDir'] : null;
        $this->container['bootFile'] = isset($data['bootFile']) ? $data['bootFile'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
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
    * Gets codeDir
    *  算法启动文件所在目录绝对路径。
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
    * @param string|null $codeDir 算法启动文件所在目录绝对路径。
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
    *  算法启动文件绝对路径。
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
    * @param string|null $bootFile 算法启动文件绝对路径。
    *
    * @return $this
    */
    public function setBootFile($bootFile)
    {
        $this->container['bootFile'] = $bootFile;
        return $this;
    }

    /**
    * Gets inputs
    *  inputs
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmInput|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmInput|null $inputs inputs
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
    *  outputs
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmOutput|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmOutput|null $outputs outputs
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets engine
    *  engine
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmEngine|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmEngine|null $engine engine
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets localCodeDir
    *  算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
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
    * @param string|null $localCodeDir 算法的代码目录下载到训练容器内的本地路径。规则如下： - 必须为/home下的目录； - v1兼容模式下，当前字段不生效； - 当code_dir以file://为前缀时，当前字段不生效。
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
    *  运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
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
    * @param string|null $workingDir 运行算法时所在的工作目录。规则：v1兼容模式下，当前字段不生效。
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
    *  **参数解释**：训练作业相关的环境变量。 **取值范围**：不涉及。
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
    * @param map[string,string]|null $environments **参数解释**：训练作业相关的环境变量。 **取值范围**：不涉及。
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

