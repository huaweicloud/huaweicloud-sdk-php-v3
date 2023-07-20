<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTableReqColumn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTableReqColumn';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  列的名称。
    * type  列的数据类型。
    * description  列的描述信息。
    * isPartitionColumn  表示该列是否为分区列。“true”表示为分区列，“false”为非分区列，默认为“false”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'type' => 'string',
            'description' => 'string',
            'isPartitionColumn' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  列的名称。
    * type  列的数据类型。
    * description  列的描述信息。
    * isPartitionColumn  表示该列是否为分区列。“true”表示为分区列，“false”为非分区列，默认为“false”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'type' => null,
        'description' => null,
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
    * columnName  列的名称。
    * type  列的数据类型。
    * description  列的描述信息。
    * isPartitionColumn  表示该列是否为分区列。“true”表示为分区列，“false”为非分区列，默认为“false”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'type' => 'type',
            'description' => 'description',
            'isPartitionColumn' => 'is_partition_column'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  列的名称。
    * type  列的数据类型。
    * description  列的描述信息。
    * isPartitionColumn  表示该列是否为分区列。“true”表示为分区列，“false”为非分区列，默认为“false”。
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'type' => 'setType',
            'description' => 'setDescription',
            'isPartitionColumn' => 'setIsPartitionColumn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  列的名称。
    * type  列的数据类型。
    * description  列的描述信息。
    * isPartitionColumn  表示该列是否为分区列。“true”表示为分区列，“false”为非分区列，默认为“false”。
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'type' => 'getType',
            'description' => 'getDescription',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['columnName'] === null) {
            $invalidProperties[] = "'columnName' can't be null";
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
    * Gets columnName
    *  列的名称。
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
    * @param string $columnName 列的名称。
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets type
    *  列的数据类型。
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
    * @param string $type 列的数据类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  列的描述信息。
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
    * @param string|null $description 列的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isPartitionColumn
    *  表示该列是否为分区列。“true”表示为分区列，“false”为非分区列，默认为“false”。
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
    * @param bool|null $isPartitionColumn 表示该列是否为分区列。“true”表示为分区列，“false”为非分区列，默认为“false”。
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

