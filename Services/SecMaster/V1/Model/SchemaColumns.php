<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchemaColumns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Schema_columns';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * array  是否为数组
    * columnDataType  列数据类型，例如 TIMESTAMP 或 INT
    * columnDataTypeSetting  数据类型设置
    * columnName  列名称
    * columnSequenceNumber  列顺序号
    * columnType  列类型，例如 PHYSICAL
    * columnTypeSetting  列类型设置
    * depth  深度
    * nullable  是否允许为空
    * ownName  自有名称
    * parentName  父名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'array' => 'bool',
            'columnDataType' => 'string',
            'columnDataTypeSetting' => 'string',
            'columnName' => 'string',
            'columnSequenceNumber' => 'int',
            'columnType' => 'string',
            'columnTypeSetting' => 'string',
            'depth' => 'int',
            'nullable' => 'bool',
            'ownName' => 'string',
            'parentName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * array  是否为数组
    * columnDataType  列数据类型，例如 TIMESTAMP 或 INT
    * columnDataTypeSetting  数据类型设置
    * columnName  列名称
    * columnSequenceNumber  列顺序号
    * columnType  列类型，例如 PHYSICAL
    * columnTypeSetting  列类型设置
    * depth  深度
    * nullable  是否允许为空
    * ownName  自有名称
    * parentName  父名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'array' => null,
        'columnDataType' => null,
        'columnDataTypeSetting' => null,
        'columnName' => null,
        'columnSequenceNumber' => null,
        'columnType' => null,
        'columnTypeSetting' => null,
        'depth' => null,
        'nullable' => null,
        'ownName' => null,
        'parentName' => null
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
    * array  是否为数组
    * columnDataType  列数据类型，例如 TIMESTAMP 或 INT
    * columnDataTypeSetting  数据类型设置
    * columnName  列名称
    * columnSequenceNumber  列顺序号
    * columnType  列类型，例如 PHYSICAL
    * columnTypeSetting  列类型设置
    * depth  深度
    * nullable  是否允许为空
    * ownName  自有名称
    * parentName  父名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'array' => 'array',
            'columnDataType' => 'column_data_type',
            'columnDataTypeSetting' => 'column_data_type_setting',
            'columnName' => 'column_name',
            'columnSequenceNumber' => 'column_sequence_number',
            'columnType' => 'column_type',
            'columnTypeSetting' => 'column_type_setting',
            'depth' => 'depth',
            'nullable' => 'nullable',
            'ownName' => 'own_name',
            'parentName' => 'parent_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * array  是否为数组
    * columnDataType  列数据类型，例如 TIMESTAMP 或 INT
    * columnDataTypeSetting  数据类型设置
    * columnName  列名称
    * columnSequenceNumber  列顺序号
    * columnType  列类型，例如 PHYSICAL
    * columnTypeSetting  列类型设置
    * depth  深度
    * nullable  是否允许为空
    * ownName  自有名称
    * parentName  父名称
    *
    * @var string[]
    */
    protected static $setters = [
            'array' => 'setArray',
            'columnDataType' => 'setColumnDataType',
            'columnDataTypeSetting' => 'setColumnDataTypeSetting',
            'columnName' => 'setColumnName',
            'columnSequenceNumber' => 'setColumnSequenceNumber',
            'columnType' => 'setColumnType',
            'columnTypeSetting' => 'setColumnTypeSetting',
            'depth' => 'setDepth',
            'nullable' => 'setNullable',
            'ownName' => 'setOwnName',
            'parentName' => 'setParentName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * array  是否为数组
    * columnDataType  列数据类型，例如 TIMESTAMP 或 INT
    * columnDataTypeSetting  数据类型设置
    * columnName  列名称
    * columnSequenceNumber  列顺序号
    * columnType  列类型，例如 PHYSICAL
    * columnTypeSetting  列类型设置
    * depth  深度
    * nullable  是否允许为空
    * ownName  自有名称
    * parentName  父名称
    *
    * @var string[]
    */
    protected static $getters = [
            'array' => 'getArray',
            'columnDataType' => 'getColumnDataType',
            'columnDataTypeSetting' => 'getColumnDataTypeSetting',
            'columnName' => 'getColumnName',
            'columnSequenceNumber' => 'getColumnSequenceNumber',
            'columnType' => 'getColumnType',
            'columnTypeSetting' => 'getColumnTypeSetting',
            'depth' => 'getDepth',
            'nullable' => 'getNullable',
            'ownName' => 'getOwnName',
            'parentName' => 'getParentName'
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
        $this->container['array'] = isset($data['array']) ? $data['array'] : null;
        $this->container['columnDataType'] = isset($data['columnDataType']) ? $data['columnDataType'] : null;
        $this->container['columnDataTypeSetting'] = isset($data['columnDataTypeSetting']) ? $data['columnDataTypeSetting'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['columnSequenceNumber'] = isset($data['columnSequenceNumber']) ? $data['columnSequenceNumber'] : null;
        $this->container['columnType'] = isset($data['columnType']) ? $data['columnType'] : null;
        $this->container['columnTypeSetting'] = isset($data['columnTypeSetting']) ? $data['columnTypeSetting'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['nullable'] = isset($data['nullable']) ? $data['nullable'] : null;
        $this->container['ownName'] = isset($data['ownName']) ? $data['ownName'] : null;
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['columnDataType']) && (mb_strlen($this->container['columnDataType']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnDataType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnDataType']) && (mb_strlen($this->container['columnDataType']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnDataType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnDataTypeSetting']) && (mb_strlen($this->container['columnDataTypeSetting']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnDataTypeSetting', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnDataTypeSetting']) && (mb_strlen($this->container['columnDataTypeSetting']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnDataTypeSetting', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['columnTypeSetting']) && (mb_strlen($this->container['columnTypeSetting']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnTypeSetting', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnTypeSetting']) && (mb_strlen($this->container['columnTypeSetting']) < 0)) {
                $invalidProperties[] = "invalid value for 'columnTypeSetting', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ownName']) && (mb_strlen($this->container['ownName']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownName']) && (mb_strlen($this->container['ownName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be bigger than or equal to 1.";
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
    * Gets array
    *  是否为数组
    *
    * @return bool|null
    */
    public function getArray()
    {
        return $this->container['array'];
    }

    /**
    * Sets array
    *
    * @param bool|null $array 是否为数组
    *
    * @return $this
    */
    public function setArray($array)
    {
        $this->container['array'] = $array;
        return $this;
    }

    /**
    * Gets columnDataType
    *  列数据类型，例如 TIMESTAMP 或 INT
    *
    * @return string|null
    */
    public function getColumnDataType()
    {
        return $this->container['columnDataType'];
    }

    /**
    * Sets columnDataType
    *
    * @param string|null $columnDataType 列数据类型，例如 TIMESTAMP 或 INT
    *
    * @return $this
    */
    public function setColumnDataType($columnDataType)
    {
        $this->container['columnDataType'] = $columnDataType;
        return $this;
    }

    /**
    * Gets columnDataTypeSetting
    *  数据类型设置
    *
    * @return string|null
    */
    public function getColumnDataTypeSetting()
    {
        return $this->container['columnDataTypeSetting'];
    }

    /**
    * Sets columnDataTypeSetting
    *
    * @param string|null $columnDataTypeSetting 数据类型设置
    *
    * @return $this
    */
    public function setColumnDataTypeSetting($columnDataTypeSetting)
    {
        $this->container['columnDataTypeSetting'] = $columnDataTypeSetting;
        return $this;
    }

    /**
    * Gets columnName
    *  列名称
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
    * @param string|null $columnName 列名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets columnSequenceNumber
    *  列顺序号
    *
    * @return int|null
    */
    public function getColumnSequenceNumber()
    {
        return $this->container['columnSequenceNumber'];
    }

    /**
    * Sets columnSequenceNumber
    *
    * @param int|null $columnSequenceNumber 列顺序号
    *
    * @return $this
    */
    public function setColumnSequenceNumber($columnSequenceNumber)
    {
        $this->container['columnSequenceNumber'] = $columnSequenceNumber;
        return $this;
    }

    /**
    * Gets columnType
    *  列类型，例如 PHYSICAL
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
    * @param string|null $columnType 列类型，例如 PHYSICAL
    *
    * @return $this
    */
    public function setColumnType($columnType)
    {
        $this->container['columnType'] = $columnType;
        return $this;
    }

    /**
    * Gets columnTypeSetting
    *  列类型设置
    *
    * @return string|null
    */
    public function getColumnTypeSetting()
    {
        return $this->container['columnTypeSetting'];
    }

    /**
    * Sets columnTypeSetting
    *
    * @param string|null $columnTypeSetting 列类型设置
    *
    * @return $this
    */
    public function setColumnTypeSetting($columnTypeSetting)
    {
        $this->container['columnTypeSetting'] = $columnTypeSetting;
        return $this;
    }

    /**
    * Gets depth
    *  深度
    *
    * @return int|null
    */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
    * Sets depth
    *
    * @param int|null $depth 深度
    *
    * @return $this
    */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;
        return $this;
    }

    /**
    * Gets nullable
    *  是否允许为空
    *
    * @return bool|null
    */
    public function getNullable()
    {
        return $this->container['nullable'];
    }

    /**
    * Sets nullable
    *
    * @param bool|null $nullable 是否允许为空
    *
    * @return $this
    */
    public function setNullable($nullable)
    {
        $this->container['nullable'] = $nullable;
        return $this;
    }

    /**
    * Gets ownName
    *  自有名称
    *
    * @return string|null
    */
    public function getOwnName()
    {
        return $this->container['ownName'];
    }

    /**
    * Sets ownName
    *
    * @param string|null $ownName 自有名称
    *
    * @return $this
    */
    public function setOwnName($ownName)
    {
        $this->container['ownName'] = $ownName;
        return $this;
    }

    /**
    * Gets parentName
    *  父名称
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName 父名称
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
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

