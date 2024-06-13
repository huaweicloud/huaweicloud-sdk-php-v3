<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlinkSqlParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlinkSqlParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlBody  Flink SQL 语句。长度限制：1048576个字符。
    * dependencyJars  Flink SQL 作业依赖的 Jar 包所在的 OBS 路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlBody' => 'string',
            'dependencyJars' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlBody  Flink SQL 语句。长度限制：1048576个字符。
    * dependencyJars  Flink SQL 作业依赖的 Jar 包所在的 OBS 路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlBody' => null,
        'dependencyJars' => null
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
    * sqlBody  Flink SQL 语句。长度限制：1048576个字符。
    * dependencyJars  Flink SQL 作业依赖的 Jar 包所在的 OBS 路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlBody' => 'sql_body',
            'dependencyJars' => 'dependency_jars'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlBody  Flink SQL 语句。长度限制：1048576个字符。
    * dependencyJars  Flink SQL 作业依赖的 Jar 包所在的 OBS 路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlBody' => 'setSqlBody',
            'dependencyJars' => 'setDependencyJars'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlBody  Flink SQL 语句。长度限制：1048576个字符。
    * dependencyJars  Flink SQL 作业依赖的 Jar 包所在的 OBS 路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlBody' => 'getSqlBody',
            'dependencyJars' => 'getDependencyJars'
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
        $this->container['sqlBody'] = isset($data['sqlBody']) ? $data['sqlBody'] : null;
        $this->container['dependencyJars'] = isset($data['dependencyJars']) ? $data['dependencyJars'] : null;
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
    * Gets sqlBody
    *  Flink SQL 语句。长度限制：1048576个字符。
    *
    * @return string|null
    */
    public function getSqlBody()
    {
        return $this->container['sqlBody'];
    }

    /**
    * Sets sqlBody
    *
    * @param string|null $sqlBody Flink SQL 语句。长度限制：1048576个字符。
    *
    * @return $this
    */
    public function setSqlBody($sqlBody)
    {
        $this->container['sqlBody'] = $sqlBody;
        return $this;
    }

    /**
    * Gets dependencyJars
    *  Flink SQL 作业依赖的 Jar 包所在的 OBS 路径。
    *
    * @return string|null
    */
    public function getDependencyJars()
    {
        return $this->container['dependencyJars'];
    }

    /**
    * Sets dependencyJars
    *
    * @param string|null $dependencyJars Flink SQL 作业依赖的 Jar 包所在的 OBS 路径。
    *
    * @return $this
    */
    public function setDependencyJars($dependencyJars)
    {
        $this->container['dependencyJars'] = $dependencyJars;
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

