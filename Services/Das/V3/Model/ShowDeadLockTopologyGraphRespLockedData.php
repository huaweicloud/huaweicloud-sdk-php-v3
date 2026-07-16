<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockTopologyGraphRespLockedData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockTopologyGraphResp_locked_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldIndex  字段序号
    * hex  十六进制原始值
    * decoded  可读解码值
    * columnName  列名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldIndex' => 'int',
            'hex' => 'string',
            'decoded' => 'string',
            'columnName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldIndex  字段序号
    * hex  十六进制原始值
    * decoded  可读解码值
    * columnName  列名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldIndex' => 'int64',
        'hex' => null,
        'decoded' => null,
        'columnName' => null
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
    * fieldIndex  字段序号
    * hex  十六进制原始值
    * decoded  可读解码值
    * columnName  列名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldIndex' => 'field_index',
            'hex' => 'hex',
            'decoded' => 'decoded',
            'columnName' => 'column_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldIndex  字段序号
    * hex  十六进制原始值
    * decoded  可读解码值
    * columnName  列名
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldIndex' => 'setFieldIndex',
            'hex' => 'setHex',
            'decoded' => 'setDecoded',
            'columnName' => 'setColumnName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldIndex  字段序号
    * hex  十六进制原始值
    * decoded  可读解码值
    * columnName  列名
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldIndex' => 'getFieldIndex',
            'hex' => 'getHex',
            'decoded' => 'getDecoded',
            'columnName' => 'getColumnName'
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
        $this->container['fieldIndex'] = isset($data['fieldIndex']) ? $data['fieldIndex'] : null;
        $this->container['hex'] = isset($data['hex']) ? $data['hex'] : null;
        $this->container['decoded'] = isset($data['decoded']) ? $data['decoded'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fieldIndex'] === null) {
            $invalidProperties[] = "'fieldIndex' can't be null";
        }
        if ($this->container['hex'] === null) {
            $invalidProperties[] = "'hex' can't be null";
        }
        if ($this->container['decoded'] === null) {
            $invalidProperties[] = "'decoded' can't be null";
        }
        if ($this->container['columnName'] === null) {
            $invalidProperties[] = "'columnName' can't be null";
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
    * Gets fieldIndex
    *  字段序号
    *
    * @return int
    */
    public function getFieldIndex()
    {
        return $this->container['fieldIndex'];
    }

    /**
    * Sets fieldIndex
    *
    * @param int $fieldIndex 字段序号
    *
    * @return $this
    */
    public function setFieldIndex($fieldIndex)
    {
        $this->container['fieldIndex'] = $fieldIndex;
        return $this;
    }

    /**
    * Gets hex
    *  十六进制原始值
    *
    * @return string
    */
    public function getHex()
    {
        return $this->container['hex'];
    }

    /**
    * Sets hex
    *
    * @param string $hex 十六进制原始值
    *
    * @return $this
    */
    public function setHex($hex)
    {
        $this->container['hex'] = $hex;
        return $this;
    }

    /**
    * Gets decoded
    *  可读解码值
    *
    * @return string
    */
    public function getDecoded()
    {
        return $this->container['decoded'];
    }

    /**
    * Sets decoded
    *
    * @param string $decoded 可读解码值
    *
    * @return $this
    */
    public function setDecoded($decoded)
    {
        $this->container['decoded'] = $decoded;
        return $this;
    }

    /**
    * Gets columnName
    *  列名
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
    * @param string $columnName 列名
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
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

