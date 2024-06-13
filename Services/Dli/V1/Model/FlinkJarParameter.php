<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlinkJarParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlinkJarParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mainClass  Flink Jar 作业入口类。
    * mainArgs  Flink Jar 作业入口类参数，多个参数之间空格分隔。
    * mainJar  Flink Jar 作业主类所在 Jar 包的 OBS 路径。
    * dependencyJars  Flink Jar 作业依赖 Jar 包的 OBS 路径数组。示例：[obs://bucket/demo/test1.jar,obs://bucket/demo/test2.jar]
    * dependencyFiles  Flink Jar 作业依赖文件的 OBS 路径数组。示例：[obs://bucket/demo/test1.csv,obs://bucket/demo/test2.csv]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mainClass' => 'string',
            'mainArgs' => 'string',
            'mainJar' => 'string',
            'dependencyJars' => 'string[]',
            'dependencyFiles' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mainClass  Flink Jar 作业入口类。
    * mainArgs  Flink Jar 作业入口类参数，多个参数之间空格分隔。
    * mainJar  Flink Jar 作业主类所在 Jar 包的 OBS 路径。
    * dependencyJars  Flink Jar 作业依赖 Jar 包的 OBS 路径数组。示例：[obs://bucket/demo/test1.jar,obs://bucket/demo/test2.jar]
    * dependencyFiles  Flink Jar 作业依赖文件的 OBS 路径数组。示例：[obs://bucket/demo/test1.csv,obs://bucket/demo/test2.csv]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mainClass' => null,
        'mainArgs' => null,
        'mainJar' => null,
        'dependencyJars' => null,
        'dependencyFiles' => null
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
    * mainClass  Flink Jar 作业入口类。
    * mainArgs  Flink Jar 作业入口类参数，多个参数之间空格分隔。
    * mainJar  Flink Jar 作业主类所在 Jar 包的 OBS 路径。
    * dependencyJars  Flink Jar 作业依赖 Jar 包的 OBS 路径数组。示例：[obs://bucket/demo/test1.jar,obs://bucket/demo/test2.jar]
    * dependencyFiles  Flink Jar 作业依赖文件的 OBS 路径数组。示例：[obs://bucket/demo/test1.csv,obs://bucket/demo/test2.csv]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mainClass' => 'main_class',
            'mainArgs' => 'main_args',
            'mainJar' => 'main_jar',
            'dependencyJars' => 'dependency_jars',
            'dependencyFiles' => 'dependency_files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mainClass  Flink Jar 作业入口类。
    * mainArgs  Flink Jar 作业入口类参数，多个参数之间空格分隔。
    * mainJar  Flink Jar 作业主类所在 Jar 包的 OBS 路径。
    * dependencyJars  Flink Jar 作业依赖 Jar 包的 OBS 路径数组。示例：[obs://bucket/demo/test1.jar,obs://bucket/demo/test2.jar]
    * dependencyFiles  Flink Jar 作业依赖文件的 OBS 路径数组。示例：[obs://bucket/demo/test1.csv,obs://bucket/demo/test2.csv]
    *
    * @var string[]
    */
    protected static $setters = [
            'mainClass' => 'setMainClass',
            'mainArgs' => 'setMainArgs',
            'mainJar' => 'setMainJar',
            'dependencyJars' => 'setDependencyJars',
            'dependencyFiles' => 'setDependencyFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mainClass  Flink Jar 作业入口类。
    * mainArgs  Flink Jar 作业入口类参数，多个参数之间空格分隔。
    * mainJar  Flink Jar 作业主类所在 Jar 包的 OBS 路径。
    * dependencyJars  Flink Jar 作业依赖 Jar 包的 OBS 路径数组。示例：[obs://bucket/demo/test1.jar,obs://bucket/demo/test2.jar]
    * dependencyFiles  Flink Jar 作业依赖文件的 OBS 路径数组。示例：[obs://bucket/demo/test1.csv,obs://bucket/demo/test2.csv]
    *
    * @var string[]
    */
    protected static $getters = [
            'mainClass' => 'getMainClass',
            'mainArgs' => 'getMainArgs',
            'mainJar' => 'getMainJar',
            'dependencyJars' => 'getDependencyJars',
            'dependencyFiles' => 'getDependencyFiles'
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
        $this->container['mainClass'] = isset($data['mainClass']) ? $data['mainClass'] : null;
        $this->container['mainArgs'] = isset($data['mainArgs']) ? $data['mainArgs'] : null;
        $this->container['mainJar'] = isset($data['mainJar']) ? $data['mainJar'] : null;
        $this->container['dependencyJars'] = isset($data['dependencyJars']) ? $data['dependencyJars'] : null;
        $this->container['dependencyFiles'] = isset($data['dependencyFiles']) ? $data['dependencyFiles'] : null;
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
    * Gets mainClass
    *  Flink Jar 作业入口类。
    *
    * @return string|null
    */
    public function getMainClass()
    {
        return $this->container['mainClass'];
    }

    /**
    * Sets mainClass
    *
    * @param string|null $mainClass Flink Jar 作业入口类。
    *
    * @return $this
    */
    public function setMainClass($mainClass)
    {
        $this->container['mainClass'] = $mainClass;
        return $this;
    }

    /**
    * Gets mainArgs
    *  Flink Jar 作业入口类参数，多个参数之间空格分隔。
    *
    * @return string|null
    */
    public function getMainArgs()
    {
        return $this->container['mainArgs'];
    }

    /**
    * Sets mainArgs
    *
    * @param string|null $mainArgs Flink Jar 作业入口类参数，多个参数之间空格分隔。
    *
    * @return $this
    */
    public function setMainArgs($mainArgs)
    {
        $this->container['mainArgs'] = $mainArgs;
        return $this;
    }

    /**
    * Gets mainJar
    *  Flink Jar 作业主类所在 Jar 包的 OBS 路径。
    *
    * @return string|null
    */
    public function getMainJar()
    {
        return $this->container['mainJar'];
    }

    /**
    * Sets mainJar
    *
    * @param string|null $mainJar Flink Jar 作业主类所在 Jar 包的 OBS 路径。
    *
    * @return $this
    */
    public function setMainJar($mainJar)
    {
        $this->container['mainJar'] = $mainJar;
        return $this;
    }

    /**
    * Gets dependencyJars
    *  Flink Jar 作业依赖 Jar 包的 OBS 路径数组。示例：[obs://bucket/demo/test1.jar,obs://bucket/demo/test2.jar]
    *
    * @return string[]|null
    */
    public function getDependencyJars()
    {
        return $this->container['dependencyJars'];
    }

    /**
    * Sets dependencyJars
    *
    * @param string[]|null $dependencyJars Flink Jar 作业依赖 Jar 包的 OBS 路径数组。示例：[obs://bucket/demo/test1.jar,obs://bucket/demo/test2.jar]
    *
    * @return $this
    */
    public function setDependencyJars($dependencyJars)
    {
        $this->container['dependencyJars'] = $dependencyJars;
        return $this;
    }

    /**
    * Gets dependencyFiles
    *  Flink Jar 作业依赖文件的 OBS 路径数组。示例：[obs://bucket/demo/test1.csv,obs://bucket/demo/test2.csv]
    *
    * @return string[]|null
    */
    public function getDependencyFiles()
    {
        return $this->container['dependencyFiles'];
    }

    /**
    * Sets dependencyFiles
    *
    * @param string[]|null $dependencyFiles Flink Jar 作业依赖文件的 OBS 路径数组。示例：[obs://bucket/demo/test1.csv,obs://bucket/demo/test2.csv]
    *
    * @return $this
    */
    public function setDependencyFiles($dependencyFiles)
    {
        $this->container['dependencyFiles'] = $dependencyFiles;
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

