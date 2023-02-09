<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnMapping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnMapping';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  **参数说明**：数据库的列名
    * jsonKey  **参数说明**：流转数据的属性名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'jsonKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  **参数说明**：数据库的列名
    * jsonKey  **参数说明**：流转数据的属性名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'jsonKey' => null
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
    * columnName  **参数说明**：数据库的列名
    * jsonKey  **参数说明**：流转数据的属性名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'jsonKey' => 'json_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  **参数说明**：数据库的列名
    * jsonKey  **参数说明**：流转数据的属性名
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'jsonKey' => 'setJsonKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  **参数说明**：数据库的列名
    * jsonKey  **参数说明**：流转数据的属性名
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'jsonKey' => 'getJsonKey'
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['jsonKey'] = isset($data['jsonKey']) ? $data['jsonKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['columnName'] === null) {
            $invalidProperties[] = "'columnName' can't be null";
        }
            if ((mb_strlen($this->container['columnName']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['jsonKey'] === null) {
            $invalidProperties[] = "'jsonKey' can't be null";
        }
            if ((mb_strlen($this->container['jsonKey']) > 256)) {
                $invalidProperties[] = "invalid value for 'jsonKey', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['jsonKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'jsonKey', the character length must be bigger than or equal to 1.";
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
    * Gets columnName
    *  **参数说明**：数据库的列名
    *
    * @return string
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string $columnName **参数说明**：数据库的列名
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets jsonKey
    *  **参数说明**：流转数据的属性名
    *
    * @return string
    */
    public function getJsonKey()
    {
        return $this->container['jsonKey'];
    }

    /**
    * Sets jsonKey
    *
    * @param string $jsonKey **参数说明**：流转数据的属性名
    *
    * @return $this
    */
    public function setJsonKey($jsonKey)
    {
        $this->container['jsonKey'] = $jsonKey;
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

