<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnsList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * comment  字段注解
    * columnName  字段名称
    * columnType  字段类型
    * seqNumber  字段的顺序
    * primary  字段是否为主键
    * partitionCol  是否对字段进行分割
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'comment' => 'string',
            'columnName' => 'string',
            'columnType' => 'string',
            'seqNumber' => 'int',
            'primary' => 'bool',
            'partitionCol' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * comment  字段注解
    * columnName  字段名称
    * columnType  字段类型
    * seqNumber  字段的顺序
    * primary  字段是否为主键
    * partitionCol  是否对字段进行分割
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'comment' => null,
        'columnName' => null,
        'columnType' => null,
        'seqNumber' => null,
        'primary' => null,
        'partitionCol' => null
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
    * comment  字段注解
    * columnName  字段名称
    * columnType  字段类型
    * seqNumber  字段的顺序
    * primary  字段是否为主键
    * partitionCol  是否对字段进行分割
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'comment' => 'comment',
            'columnName' => 'column_name',
            'columnType' => 'column_type',
            'seqNumber' => 'seq_number',
            'primary' => 'primary',
            'partitionCol' => 'partition_col'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * comment  字段注解
    * columnName  字段名称
    * columnType  字段类型
    * seqNumber  字段的顺序
    * primary  字段是否为主键
    * partitionCol  是否对字段进行分割
    *
    * @var string[]
    */
    protected static $setters = [
            'comment' => 'setComment',
            'columnName' => 'setColumnName',
            'columnType' => 'setColumnType',
            'seqNumber' => 'setSeqNumber',
            'primary' => 'setPrimary',
            'partitionCol' => 'setPartitionCol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * comment  字段注解
    * columnName  字段名称
    * columnType  字段类型
    * seqNumber  字段的顺序
    * primary  字段是否为主键
    * partitionCol  是否对字段进行分割
    *
    * @var string[]
    */
    protected static $getters = [
            'comment' => 'getComment',
            'columnName' => 'getColumnName',
            'columnType' => 'getColumnType',
            'seqNumber' => 'getSeqNumber',
            'primary' => 'getPrimary',
            'partitionCol' => 'getPartitionCol'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['columnType'] = isset($data['columnType']) ? $data['columnType'] : null;
        $this->container['seqNumber'] = isset($data['seqNumber']) ? $data['seqNumber'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['partitionCol'] = isset($data['partitionCol']) ? $data['partitionCol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 128)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 1)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnType']) && (mb_strlen($this->container['columnType']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnType']) && (mb_strlen($this->container['columnType']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['seqNumber']) && ($this->container['seqNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'seqNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['seqNumber']) && ($this->container['seqNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'seqNumber', must be bigger than or equal to 0.";
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
    * Gets comment
    *  字段注解
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 字段注解
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets columnName
    *  字段名称
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 字段名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets columnType
    *  字段类型
    *
    * @return string|null
    */
    public function getColumnType()
    {
        return $this->container['columnType'];
    }

    /**
    * Sets columnType
    *
    * @param string|null $columnType 字段类型
    *
    * @return $this
    */
    public function setColumnType($columnType)
    {
        $this->container['columnType'] = $columnType;
        return $this;
    }

    /**
    * Gets seqNumber
    *  字段的顺序
    *
    * @return int|null
    */
    public function getSeqNumber()
    {
        return $this->container['seqNumber'];
    }

    /**
    * Sets seqNumber
    *
    * @param int|null $seqNumber 字段的顺序
    *
    * @return $this
    */
    public function setSeqNumber($seqNumber)
    {
        $this->container['seqNumber'] = $seqNumber;
        return $this;
    }

    /**
    * Gets primary
    *  字段是否为主键
    *
    * @return bool|null
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param bool|null $primary 字段是否为主键
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
        return $this;
    }

    /**
    * Gets partitionCol
    *  是否对字段进行分割
    *
    * @return bool|null
    */
    public function getPartitionCol()
    {
        return $this->container['partitionCol'];
    }

    /**
    * Sets partitionCol
    *
    * @param bool|null $partitionCol 是否对字段进行分割
    *
    * @return $this
    */
    public function setPartitionCol($partitionCol)
    {
        $this->container['partitionCol'] = $partitionCol;
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

