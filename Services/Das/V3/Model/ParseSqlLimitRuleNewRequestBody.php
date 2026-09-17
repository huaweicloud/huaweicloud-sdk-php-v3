<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParseSqlLimitRuleNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParseSqlLimitRuleNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originalSql  原始SQL语句
    * engineType  数据库引擎类型
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    * type  SQL类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originalSql' => 'string',
            'engineType' => 'string',
            'useTemplate' => 'bool',
            'keepOperators' => 'bool',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originalSql  原始SQL语句
    * engineType  数据库引擎类型
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    * type  SQL类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originalSql' => null,
        'engineType' => null,
        'useTemplate' => null,
        'keepOperators' => null,
        'type' => null
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
    * originalSql  原始SQL语句
    * engineType  数据库引擎类型
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    * type  SQL类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originalSql' => 'original_sql',
            'engineType' => 'engine_type',
            'useTemplate' => 'use_template',
            'keepOperators' => 'keep_operators',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originalSql  原始SQL语句
    * engineType  数据库引擎类型
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    * type  SQL类型
    *
    * @var string[]
    */
    protected static $setters = [
            'originalSql' => 'setOriginalSql',
            'engineType' => 'setEngineType',
            'useTemplate' => 'setUseTemplate',
            'keepOperators' => 'setKeepOperators',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originalSql  原始SQL语句
    * engineType  数据库引擎类型
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    * type  SQL类型
    *
    * @var string[]
    */
    protected static $getters = [
            'originalSql' => 'getOriginalSql',
            'engineType' => 'getEngineType',
            'useTemplate' => 'getUseTemplate',
            'keepOperators' => 'getKeepOperators',
            'type' => 'getType'
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
        $this->container['originalSql'] = isset($data['originalSql']) ? $data['originalSql'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['useTemplate'] = isset($data['useTemplate']) ? $data['useTemplate'] : null;
        $this->container['keepOperators'] = isset($data['keepOperators']) ? $data['keepOperators'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['originalSql'] === null) {
            $invalidProperties[] = "'originalSql' can't be null";
        }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
        if ($this->container['useTemplate'] === null) {
            $invalidProperties[] = "'useTemplate' can't be null";
        }
        if ($this->container['keepOperators'] === null) {
            $invalidProperties[] = "'keepOperators' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets originalSql
    *  原始SQL语句
    *
    * @return string
    */
    public function getOriginalSql()
    {
        return $this->container['originalSql'];
    }

    /**
    * Sets originalSql
    *
    * @param string $originalSql 原始SQL语句
    *
    * @return $this
    */
    public function setOriginalSql($originalSql)
    {
        $this->container['originalSql'] = $originalSql;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets useTemplate
    *  是否校验SQL语句
    *
    * @return bool
    */
    public function getUseTemplate()
    {
        return $this->container['useTemplate'];
    }

    /**
    * Sets useTemplate
    *
    * @param bool $useTemplate 是否校验SQL语句
    *
    * @return $this
    */
    public function setUseTemplate($useTemplate)
    {
        $this->container['useTemplate'] = $useTemplate;
        return $this;
    }

    /**
    * Gets keepOperators
    *  是否保留操作符
    *
    * @return bool
    */
    public function getKeepOperators()
    {
        return $this->container['keepOperators'];
    }

    /**
    * Sets keepOperators
    *
    * @param bool $keepOperators 是否保留操作符
    *
    * @return $this
    */
    public function setKeepOperators($keepOperators)
    {
        $this->container['keepOperators'] = $keepOperators;
        return $this;
    }

    /**
    * Gets type
    *  SQL类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type SQL类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

