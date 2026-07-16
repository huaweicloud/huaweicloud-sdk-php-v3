<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlgorithmJobConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlgorithmJobConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codeDir  算法的代码目录。如：“/usr/app/”。应与boot_file一同出现。
    * bootFile  算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现。
    * command  自定义镜像算法的容器启动命令。
    * parameters  算法的运行参数。
    * inputs  算法的数据输入。
    * outputs  算法的数据输出。
    * engine  engine
    * parametersCustomization  算法是否允许创建训练作业时自定义超参。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codeDir' => 'string',
            'bootFile' => 'string',
            'command' => 'string',
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Parameters[]',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateInput[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateOutput[]',
            'engine' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateEngine',
            'parametersCustomization' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codeDir  算法的代码目录。如：“/usr/app/”。应与boot_file一同出现。
    * bootFile  算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现。
    * command  自定义镜像算法的容器启动命令。
    * parameters  算法的运行参数。
    * inputs  算法的数据输入。
    * outputs  算法的数据输出。
    * engine  engine
    * parametersCustomization  算法是否允许创建训练作业时自定义超参。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codeDir' => null,
        'bootFile' => null,
        'command' => null,
        'parameters' => null,
        'inputs' => null,
        'outputs' => null,
        'engine' => null,
        'parametersCustomization' => null
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
    * codeDir  算法的代码目录。如：“/usr/app/”。应与boot_file一同出现。
    * bootFile  算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现。
    * command  自定义镜像算法的容器启动命令。
    * parameters  算法的运行参数。
    * inputs  算法的数据输入。
    * outputs  算法的数据输出。
    * engine  engine
    * parametersCustomization  算法是否允许创建训练作业时自定义超参。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codeDir' => 'code_dir',
            'bootFile' => 'boot_file',
            'command' => 'command',
            'parameters' => 'parameters',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'engine' => 'engine',
            'parametersCustomization' => 'parameters_customization'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codeDir  算法的代码目录。如：“/usr/app/”。应与boot_file一同出现。
    * bootFile  算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现。
    * command  自定义镜像算法的容器启动命令。
    * parameters  算法的运行参数。
    * inputs  算法的数据输入。
    * outputs  算法的数据输出。
    * engine  engine
    * parametersCustomization  算法是否允许创建训练作业时自定义超参。
    *
    * @var string[]
    */
    protected static $setters = [
            'codeDir' => 'setCodeDir',
            'bootFile' => 'setBootFile',
            'command' => 'setCommand',
            'parameters' => 'setParameters',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'engine' => 'setEngine',
            'parametersCustomization' => 'setParametersCustomization'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codeDir  算法的代码目录。如：“/usr/app/”。应与boot_file一同出现。
    * bootFile  算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现。
    * command  自定义镜像算法的容器启动命令。
    * parameters  算法的运行参数。
    * inputs  算法的数据输入。
    * outputs  算法的数据输出。
    * engine  engine
    * parametersCustomization  算法是否允许创建训练作业时自定义超参。
    *
    * @var string[]
    */
    protected static $getters = [
            'codeDir' => 'getCodeDir',
            'bootFile' => 'getBootFile',
            'command' => 'getCommand',
            'parameters' => 'getParameters',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'engine' => 'getEngine',
            'parametersCustomization' => 'getParametersCustomization'
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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['parametersCustomization'] = isset($data['parametersCustomization']) ? $data['parametersCustomization'] : null;
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
    *  算法的代码目录。如：“/usr/app/”。应与boot_file一同出现。
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
    * @param string|null $codeDir 算法的代码目录。如：“/usr/app/”。应与boot_file一同出现。
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
    *  算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现。
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
    * @param string|null $bootFile 算法的代码启动文件，需要在代码目录下。如：“/usr/app/boot.py”。应与code_dir一同出现。
    *
    * @return $this
    */
    public function setBootFile($bootFile)
    {
        $this->container['bootFile'] = $bootFile;
        return $this;
    }

    /**
    * Gets command
    *  自定义镜像算法的容器启动命令。
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 自定义镜像算法的容器启动命令。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets parameters
    *  算法的运行参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Parameters[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Parameters[]|null $parameters 算法的运行参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets inputs
    *  算法的数据输入。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateInput[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateInput[]|null $inputs 算法的数据输入。
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
    *  算法的数据输出。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateOutput[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateOutput[]|null $outputs 算法的数据输出。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateEngine|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmCreateEngine|null $engine engine
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets parametersCustomization
    *  算法是否允许创建训练作业时自定义超参。
    *
    * @return bool|null
    */
    public function getParametersCustomization()
    {
        return $this->container['parametersCustomization'];
    }

    /**
    * Sets parametersCustomization
    *
    * @param bool|null $parametersCustomization 算法是否允许创建训练作业时自定义超参。
    *
    * @return $this
    */
    public function setParametersCustomization($parametersCustomization)
    {
        $this->container['parametersCustomization'] = $parametersCustomization;
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

