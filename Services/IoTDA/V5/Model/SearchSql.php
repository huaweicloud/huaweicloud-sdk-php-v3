<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchSql implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchSql';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  搜索sql语句，具体使用方法见类SQL语法使用说明章节
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  搜索sql语句，具体使用方法见类SQL语法使用说明章节
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null
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
    * sql  搜索sql语句，具体使用方法见类SQL语法使用说明章节
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  搜索sql语句，具体使用方法见类SQL语法使用说明章节
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  搜索sql语句，具体使用方法见类SQL语法使用说明章节
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql'
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
            if ((mb_strlen($this->container['sql']) > 400)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 400.";
            }
            if ((mb_strlen($this->container['sql']) < 1)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#()., &%@!*=<>:-]{1,400}$/", $this->container['sql'])) {
                $invalidProperties[] = "invalid value for 'sql', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#()., &%@!*=<>:-]{1,400}$/.";
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
    * Gets sql
    *  搜索sql语句，具体使用方法见类SQL语法使用说明章节
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql 搜索sql语句，具体使用方法见类SQL语法使用说明章节
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
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

