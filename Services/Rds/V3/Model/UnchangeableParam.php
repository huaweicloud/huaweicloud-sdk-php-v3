<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnchangeableParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnchangeableParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”，当前仅MySQL 8.0支持。 取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lowerCaseTableNames' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”，当前仅MySQL 8.0支持。 取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lowerCaseTableNames' => null
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
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”，当前仅MySQL 8.0支持。 取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lowerCaseTableNames' => 'lower_case_table_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”，当前仅MySQL 8.0支持。 取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @var string[]
    */
    protected static $setters = [
            'lowerCaseTableNames' => 'setLowerCaseTableNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”，当前仅MySQL 8.0支持。 取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @var string[]
    */
    protected static $getters = [
            'lowerCaseTableNames' => 'getLowerCaseTableNames'
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
        $this->container['lowerCaseTableNames'] = isset($data['lowerCaseTableNames']) ? $data['lowerCaseTableNames'] : null;
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
    * Gets lowerCaseTableNames
    *  表名大小写是否敏感，默认值是“1”，当前仅MySQL 8.0支持。 取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @return string|null
    */
    public function getLowerCaseTableNames()
    {
        return $this->container['lowerCaseTableNames'];
    }

    /**
    * Sets lowerCaseTableNames
    *
    * @param string|null $lowerCaseTableNames 表名大小写是否敏感，默认值是“1”，当前仅MySQL 8.0支持。 取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @return $this
    */
    public function setLowerCaseTableNames($lowerCaseTableNames)
    {
        $this->container['lowerCaseTableNames'] = $lowerCaseTableNames;
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

