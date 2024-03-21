<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableColumnDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableColumnDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  字段名称
    * description  字段描述
    * type  字段类型
    * isPartitionColumn  是否是分区字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'description' => 'string',
            'type' => 'string',
            'isPartitionColumn' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  字段名称
    * description  字段描述
    * type  字段类型
    * isPartitionColumn  是否是分区字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'description' => null,
        'type' => null,
        'isPartitionColumn' => null
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
    * columnName  字段名称
    * description  字段描述
    * type  字段类型
    * isPartitionColumn  是否是分区字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'description' => 'description',
            'type' => 'type',
            'isPartitionColumn' => 'is_partition_column'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  字段名称
    * description  字段描述
    * type  字段类型
    * isPartitionColumn  是否是分区字段
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'description' => 'setDescription',
            'type' => 'setType',
            'isPartitionColumn' => 'setIsPartitionColumn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  字段名称
    * description  字段描述
    * type  字段类型
    * isPartitionColumn  是否是分区字段
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'description' => 'getDescription',
            'type' => 'getType',
            'isPartitionColumn' => 'getIsPartitionColumn'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isPartitionColumn'] = isset($data['isPartitionColumn']) ? $data['isPartitionColumn'] : null;
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
    * Gets description
    *  字段描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 字段描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  字段类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 字段类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isPartitionColumn
    *  是否是分区字段
    *
    * @return bool|null
    */
    public function getIsPartitionColumn()
    {
        return $this->container['isPartitionColumn'];
    }

    /**
    * Sets isPartitionColumn
    *
    * @param bool|null $isPartitionColumn 是否是分区字段
    *
    * @return $this
    */
    public function setIsPartitionColumn($isPartitionColumn)
    {
        $this->container['isPartitionColumn'] = $isPartitionColumn;
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

