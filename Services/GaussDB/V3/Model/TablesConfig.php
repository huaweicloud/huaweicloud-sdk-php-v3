<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TablesConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TablesConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  表名。
    * tableConfig  表配置值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'tableConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  表名。
    * tableConfig  表配置值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'tableConfig' => null
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
    * tableName  表名。
    * tableConfig  表配置值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'tableConfig' => 'table_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  表名。
    * tableConfig  表配置值。
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'tableConfig' => 'setTableConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  表名。
    * tableConfig  表配置值。
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'tableConfig' => 'getTableConfig'
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tableConfig'] = isset($data['tableConfig']) ? $data['tableConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tableConfig']) && (mb_strlen($this->container['tableConfig']) > 1024)) {
                $invalidProperties[] = "invalid value for 'tableConfig', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['tableConfig']) && (mb_strlen($this->container['tableConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableConfig', the character length must be bigger than or equal to 0.";
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
    * Gets tableName
    *  表名。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tableConfig
    *  表配置值。
    *
    * @return string|null
    */
    public function getTableConfig()
    {
        return $this->container['tableConfig'];
    }

    /**
    * Sets tableConfig
    *
    * @param string|null $tableConfig 表配置值。
    *
    * @return $this
    */
    public function setTableConfig($tableConfig)
    {
        $this->container['tableConfig'] = $tableConfig;
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

