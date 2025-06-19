<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConditionInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConditionInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditionIndex  条件索引，用于标识当前处理的是哪个条件
    * conditionMap  条件映射，键为整数，值为字符串列表，用于存储各个条件的信息
    * depParamMap  依赖参数实例的映射
    * statementIndex  声明索引，用于标识当前处理的是哪个声明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditionIndex' => 'int',
            'conditionMap' => 'map[string,string[]]',
            'depParamMap' => 'map[string,\HuaweiCloud\SDK\Cloudtest\V1\Model\DepParamInstance]',
            'statementIndex' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditionIndex  条件索引，用于标识当前处理的是哪个条件
    * conditionMap  条件映射，键为整数，值为字符串列表，用于存储各个条件的信息
    * depParamMap  依赖参数实例的映射
    * statementIndex  声明索引，用于标识当前处理的是哪个声明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditionIndex' => 'int32',
        'conditionMap' => null,
        'depParamMap' => null,
        'statementIndex' => 'int32'
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
    * conditionIndex  条件索引，用于标识当前处理的是哪个条件
    * conditionMap  条件映射，键为整数，值为字符串列表，用于存储各个条件的信息
    * depParamMap  依赖参数实例的映射
    * statementIndex  声明索引，用于标识当前处理的是哪个声明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditionIndex' => 'conditionIndex',
            'conditionMap' => 'conditionMap',
            'depParamMap' => 'depParamMap',
            'statementIndex' => 'statementIndex'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditionIndex  条件索引，用于标识当前处理的是哪个条件
    * conditionMap  条件映射，键为整数，值为字符串列表，用于存储各个条件的信息
    * depParamMap  依赖参数实例的映射
    * statementIndex  声明索引，用于标识当前处理的是哪个声明
    *
    * @var string[]
    */
    protected static $setters = [
            'conditionIndex' => 'setConditionIndex',
            'conditionMap' => 'setConditionMap',
            'depParamMap' => 'setDepParamMap',
            'statementIndex' => 'setStatementIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditionIndex  条件索引，用于标识当前处理的是哪个条件
    * conditionMap  条件映射，键为整数，值为字符串列表，用于存储各个条件的信息
    * depParamMap  依赖参数实例的映射
    * statementIndex  声明索引，用于标识当前处理的是哪个声明
    *
    * @var string[]
    */
    protected static $getters = [
            'conditionIndex' => 'getConditionIndex',
            'conditionMap' => 'getConditionMap',
            'depParamMap' => 'getDepParamMap',
            'statementIndex' => 'getStatementIndex'
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
        $this->container['conditionIndex'] = isset($data['conditionIndex']) ? $data['conditionIndex'] : null;
        $this->container['conditionMap'] = isset($data['conditionMap']) ? $data['conditionMap'] : null;
        $this->container['depParamMap'] = isset($data['depParamMap']) ? $data['depParamMap'] : null;
        $this->container['statementIndex'] = isset($data['statementIndex']) ? $data['statementIndex'] : null;
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
    * Gets conditionIndex
    *  条件索引，用于标识当前处理的是哪个条件
    *
    * @return int|null
    */
    public function getConditionIndex()
    {
        return $this->container['conditionIndex'];
    }

    /**
    * Sets conditionIndex
    *
    * @param int|null $conditionIndex 条件索引，用于标识当前处理的是哪个条件
    *
    * @return $this
    */
    public function setConditionIndex($conditionIndex)
    {
        $this->container['conditionIndex'] = $conditionIndex;
        return $this;
    }

    /**
    * Gets conditionMap
    *  条件映射，键为整数，值为字符串列表，用于存储各个条件的信息
    *
    * @return map[string,string[]]|null
    */
    public function getConditionMap()
    {
        return $this->container['conditionMap'];
    }

    /**
    * Sets conditionMap
    *
    * @param map[string,string[]]|null $conditionMap 条件映射，键为整数，值为字符串列表，用于存储各个条件的信息
    *
    * @return $this
    */
    public function setConditionMap($conditionMap)
    {
        $this->container['conditionMap'] = $conditionMap;
        return $this;
    }

    /**
    * Gets depParamMap
    *  依赖参数实例的映射
    *
    * @return map[string,\HuaweiCloud\SDK\Cloudtest\V1\Model\DepParamInstance]|null
    */
    public function getDepParamMap()
    {
        return $this->container['depParamMap'];
    }

    /**
    * Sets depParamMap
    *
    * @param map[string,\HuaweiCloud\SDK\Cloudtest\V1\Model\DepParamInstance]|null $depParamMap 依赖参数实例的映射
    *
    * @return $this
    */
    public function setDepParamMap($depParamMap)
    {
        $this->container['depParamMap'] = $depParamMap;
        return $this;
    }

    /**
    * Gets statementIndex
    *  声明索引，用于标识当前处理的是哪个声明
    *
    * @return int|null
    */
    public function getStatementIndex()
    {
        return $this->container['statementIndex'];
    }

    /**
    * Sets statementIndex
    *
    * @param int|null $statementIndex 声明索引，用于标识当前处理的是哪个声明
    *
    * @return $this
    */
    public function setStatementIndex($statementIndex)
    {
        $this->container['statementIndex'] = $statementIndex;
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

