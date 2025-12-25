<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableColumnForIsapPipe implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableColumnForIsapPipe';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  表列名称
    * columnDataType  **参数解释**: 列字段数据类型 - ROW 行类型 - MAP_STRING 字符串映射类型 - MAP_DECIMAL 小数映射类型 - TINYINT 微整型 - SMALLINT 小整型 - INT 整型 - BIGINT 长整型 - DECIMAL 精确小数类型 - FLOAT 单精度浮点数 - DOUBLE 双精度浮点数 - CHAR 定长字符串 - VARCHAR 不定长字符串 - STRING 字符串类型 - KEYWORD 关键字类型 - BOOLEAN 布尔类型 - DATE 日期类型 - TIME 时间类型 - TIMESTAMP 时间戳类型 - TIMESTAMP_LTZ 本地时间戳类型  **约束限制** 不涉及  **取值范围**: - ROW - MAP_STRING - MAP_DECIMAL - TINYINT - SMALLINT - INT - BIGINT - DECIMAL - FLOAT - DOUBLE - CHAR - VARCHAR - STRING - KEYWORD - BOOLEAN - DATE - TIME - TIMESTAMP - TIMESTAMP_LTZ  **默认值** 不涉及
    * columnDataTypeSetting  列数据类型设置
    * columnType  **参数解释**: 列字段类型 - PHYSICAL 物理字段 - METADATA 元数据字段 - VIRTUAL_METADATA 虚拟元数据字段 - COMPUTED 计算字段  **约束限制** 不涉及  **取值范围**: - PHYSICAL - METADATA - VIRTUAL_METADATA - COMPUTED  **默认值** 不涉及
    * columnTypeSetting  列类型设置
    * defaultValue  列默认值
    * nullable  列是否可为空
    * array  是否为数组
    * depth  列深度
    * parentName  列名称
    * ownName  列名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'columnDataType' => 'string',
            'columnDataTypeSetting' => 'string',
            'columnType' => 'string',
            'columnTypeSetting' => 'string',
            'defaultValue' => 'string',
            'nullable' => 'bool',
            'array' => 'bool',
            'depth' => 'int',
            'parentName' => 'string',
            'ownName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  表列名称
    * columnDataType  **参数解释**: 列字段数据类型 - ROW 行类型 - MAP_STRING 字符串映射类型 - MAP_DECIMAL 小数映射类型 - TINYINT 微整型 - SMALLINT 小整型 - INT 整型 - BIGINT 长整型 - DECIMAL 精确小数类型 - FLOAT 单精度浮点数 - DOUBLE 双精度浮点数 - CHAR 定长字符串 - VARCHAR 不定长字符串 - STRING 字符串类型 - KEYWORD 关键字类型 - BOOLEAN 布尔类型 - DATE 日期类型 - TIME 时间类型 - TIMESTAMP 时间戳类型 - TIMESTAMP_LTZ 本地时间戳类型  **约束限制** 不涉及  **取值范围**: - ROW - MAP_STRING - MAP_DECIMAL - TINYINT - SMALLINT - INT - BIGINT - DECIMAL - FLOAT - DOUBLE - CHAR - VARCHAR - STRING - KEYWORD - BOOLEAN - DATE - TIME - TIMESTAMP - TIMESTAMP_LTZ  **默认值** 不涉及
    * columnDataTypeSetting  列数据类型设置
    * columnType  **参数解释**: 列字段类型 - PHYSICAL 物理字段 - METADATA 元数据字段 - VIRTUAL_METADATA 虚拟元数据字段 - COMPUTED 计算字段  **约束限制** 不涉及  **取值范围**: - PHYSICAL - METADATA - VIRTUAL_METADATA - COMPUTED  **默认值** 不涉及
    * columnTypeSetting  列类型设置
    * defaultValue  列默认值
    * nullable  列是否可为空
    * array  是否为数组
    * depth  列深度
    * parentName  列名称
    * ownName  列名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'columnDataType' => null,
        'columnDataTypeSetting' => null,
        'columnType' => null,
        'columnTypeSetting' => null,
        'defaultValue' => null,
        'nullable' => null,
        'array' => null,
        'depth' => 'int64',
        'parentName' => null,
        'ownName' => null
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
    * columnName  表列名称
    * columnDataType  **参数解释**: 列字段数据类型 - ROW 行类型 - MAP_STRING 字符串映射类型 - MAP_DECIMAL 小数映射类型 - TINYINT 微整型 - SMALLINT 小整型 - INT 整型 - BIGINT 长整型 - DECIMAL 精确小数类型 - FLOAT 单精度浮点数 - DOUBLE 双精度浮点数 - CHAR 定长字符串 - VARCHAR 不定长字符串 - STRING 字符串类型 - KEYWORD 关键字类型 - BOOLEAN 布尔类型 - DATE 日期类型 - TIME 时间类型 - TIMESTAMP 时间戳类型 - TIMESTAMP_LTZ 本地时间戳类型  **约束限制** 不涉及  **取值范围**: - ROW - MAP_STRING - MAP_DECIMAL - TINYINT - SMALLINT - INT - BIGINT - DECIMAL - FLOAT - DOUBLE - CHAR - VARCHAR - STRING - KEYWORD - BOOLEAN - DATE - TIME - TIMESTAMP - TIMESTAMP_LTZ  **默认值** 不涉及
    * columnDataTypeSetting  列数据类型设置
    * columnType  **参数解释**: 列字段类型 - PHYSICAL 物理字段 - METADATA 元数据字段 - VIRTUAL_METADATA 虚拟元数据字段 - COMPUTED 计算字段  **约束限制** 不涉及  **取值范围**: - PHYSICAL - METADATA - VIRTUAL_METADATA - COMPUTED  **默认值** 不涉及
    * columnTypeSetting  列类型设置
    * defaultValue  列默认值
    * nullable  列是否可为空
    * array  是否为数组
    * depth  列深度
    * parentName  列名称
    * ownName  列名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'columnDataType' => 'column_data_type',
            'columnDataTypeSetting' => 'column_data_type_setting',
            'columnType' => 'column_type',
            'columnTypeSetting' => 'column_type_setting',
            'defaultValue' => 'default_value',
            'nullable' => 'nullable',
            'array' => 'array',
            'depth' => 'depth',
            'parentName' => 'parent_name',
            'ownName' => 'own_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  表列名称
    * columnDataType  **参数解释**: 列字段数据类型 - ROW 行类型 - MAP_STRING 字符串映射类型 - MAP_DECIMAL 小数映射类型 - TINYINT 微整型 - SMALLINT 小整型 - INT 整型 - BIGINT 长整型 - DECIMAL 精确小数类型 - FLOAT 单精度浮点数 - DOUBLE 双精度浮点数 - CHAR 定长字符串 - VARCHAR 不定长字符串 - STRING 字符串类型 - KEYWORD 关键字类型 - BOOLEAN 布尔类型 - DATE 日期类型 - TIME 时间类型 - TIMESTAMP 时间戳类型 - TIMESTAMP_LTZ 本地时间戳类型  **约束限制** 不涉及  **取值范围**: - ROW - MAP_STRING - MAP_DECIMAL - TINYINT - SMALLINT - INT - BIGINT - DECIMAL - FLOAT - DOUBLE - CHAR - VARCHAR - STRING - KEYWORD - BOOLEAN - DATE - TIME - TIMESTAMP - TIMESTAMP_LTZ  **默认值** 不涉及
    * columnDataTypeSetting  列数据类型设置
    * columnType  **参数解释**: 列字段类型 - PHYSICAL 物理字段 - METADATA 元数据字段 - VIRTUAL_METADATA 虚拟元数据字段 - COMPUTED 计算字段  **约束限制** 不涉及  **取值范围**: - PHYSICAL - METADATA - VIRTUAL_METADATA - COMPUTED  **默认值** 不涉及
    * columnTypeSetting  列类型设置
    * defaultValue  列默认值
    * nullable  列是否可为空
    * array  是否为数组
    * depth  列深度
    * parentName  列名称
    * ownName  列名称
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'columnDataType' => 'setColumnDataType',
            'columnDataTypeSetting' => 'setColumnDataTypeSetting',
            'columnType' => 'setColumnType',
            'columnTypeSetting' => 'setColumnTypeSetting',
            'defaultValue' => 'setDefaultValue',
            'nullable' => 'setNullable',
            'array' => 'setArray',
            'depth' => 'setDepth',
            'parentName' => 'setParentName',
            'ownName' => 'setOwnName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  表列名称
    * columnDataType  **参数解释**: 列字段数据类型 - ROW 行类型 - MAP_STRING 字符串映射类型 - MAP_DECIMAL 小数映射类型 - TINYINT 微整型 - SMALLINT 小整型 - INT 整型 - BIGINT 长整型 - DECIMAL 精确小数类型 - FLOAT 单精度浮点数 - DOUBLE 双精度浮点数 - CHAR 定长字符串 - VARCHAR 不定长字符串 - STRING 字符串类型 - KEYWORD 关键字类型 - BOOLEAN 布尔类型 - DATE 日期类型 - TIME 时间类型 - TIMESTAMP 时间戳类型 - TIMESTAMP_LTZ 本地时间戳类型  **约束限制** 不涉及  **取值范围**: - ROW - MAP_STRING - MAP_DECIMAL - TINYINT - SMALLINT - INT - BIGINT - DECIMAL - FLOAT - DOUBLE - CHAR - VARCHAR - STRING - KEYWORD - BOOLEAN - DATE - TIME - TIMESTAMP - TIMESTAMP_LTZ  **默认值** 不涉及
    * columnDataTypeSetting  列数据类型设置
    * columnType  **参数解释**: 列字段类型 - PHYSICAL 物理字段 - METADATA 元数据字段 - VIRTUAL_METADATA 虚拟元数据字段 - COMPUTED 计算字段  **约束限制** 不涉及  **取值范围**: - PHYSICAL - METADATA - VIRTUAL_METADATA - COMPUTED  **默认值** 不涉及
    * columnTypeSetting  列类型设置
    * defaultValue  列默认值
    * nullable  列是否可为空
    * array  是否为数组
    * depth  列深度
    * parentName  列名称
    * ownName  列名称
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'columnDataType' => 'getColumnDataType',
            'columnDataTypeSetting' => 'getColumnDataTypeSetting',
            'columnType' => 'getColumnType',
            'columnTypeSetting' => 'getColumnTypeSetting',
            'defaultValue' => 'getDefaultValue',
            'nullable' => 'getNullable',
            'array' => 'getArray',
            'depth' => 'getDepth',
            'parentName' => 'getParentName',
            'ownName' => 'getOwnName'
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
    const COLUMN_DATA_TYPE_ROW = 'ROW';
    const COLUMN_DATA_TYPE_MAP_STRING = 'MAP_STRING';
    const COLUMN_DATA_TYPE_MAP_DECIMAL = 'MAP_DECIMAL';
    const COLUMN_DATA_TYPE_TINYINT = 'TINYINT';
    const COLUMN_DATA_TYPE_SMALLINT = 'SMALLINT';
    const COLUMN_DATA_TYPE_INT = 'INT';
    const COLUMN_DATA_TYPE_BIGINT = 'BIGINT';
    const COLUMN_DATA_TYPE_DECIMAL = 'DECIMAL';
    const COLUMN_DATA_TYPE_FLOAT = 'FLOAT';
    const COLUMN_DATA_TYPE_DOUBLE = 'DOUBLE';
    const COLUMN_DATA_TYPE_CHAR = 'CHAR';
    const COLUMN_DATA_TYPE_VARCHAR = 'VARCHAR';
    const COLUMN_DATA_TYPE_STRING = 'STRING';
    const COLUMN_DATA_TYPE_BOOLEAN = 'BOOLEAN';
    const COLUMN_DATA_TYPE_DATE = 'DATE';
    const COLUMN_DATA_TYPE_TIME = 'TIME';
    const COLUMN_DATA_TYPE_TIMESTAMP = 'TIMESTAMP';
    const COLUMN_DATA_TYPE_TIMESTAMP_LTZ = 'TIMESTAMP_LTZ';
    const COLUMN_TYPE_PHYSICAL = 'PHYSICAL';
    const COLUMN_TYPE_METADATA = 'METADATA';
    const COLUMN_TYPE_VIRTUAL_METADATA = 'VIRTUAL_METADATA';
    const COLUMN_TYPE_COMPUTED = 'COMPUTED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getColumnDataTypeAllowableValues()
    {
        return [
            self::COLUMN_DATA_TYPE_ROW,
            self::COLUMN_DATA_TYPE_MAP_STRING,
            self::COLUMN_DATA_TYPE_MAP_DECIMAL,
            self::COLUMN_DATA_TYPE_TINYINT,
            self::COLUMN_DATA_TYPE_SMALLINT,
            self::COLUMN_DATA_TYPE_INT,
            self::COLUMN_DATA_TYPE_BIGINT,
            self::COLUMN_DATA_TYPE_DECIMAL,
            self::COLUMN_DATA_TYPE_FLOAT,
            self::COLUMN_DATA_TYPE_DOUBLE,
            self::COLUMN_DATA_TYPE_CHAR,
            self::COLUMN_DATA_TYPE_VARCHAR,
            self::COLUMN_DATA_TYPE_STRING,
            self::COLUMN_DATA_TYPE_BOOLEAN,
            self::COLUMN_DATA_TYPE_DATE,
            self::COLUMN_DATA_TYPE_TIME,
            self::COLUMN_DATA_TYPE_TIMESTAMP,
            self::COLUMN_DATA_TYPE_TIMESTAMP_LTZ,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getColumnTypeAllowableValues()
    {
        return [
            self::COLUMN_TYPE_PHYSICAL,
            self::COLUMN_TYPE_METADATA,
            self::COLUMN_TYPE_VIRTUAL_METADATA,
            self::COLUMN_TYPE_COMPUTED,
        ];
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
        $this->container['columnDataType'] = isset($data['columnDataType']) ? $data['columnDataType'] : null;
        $this->container['columnDataTypeSetting'] = isset($data['columnDataTypeSetting']) ? $data['columnDataTypeSetting'] : null;
        $this->container['columnType'] = isset($data['columnType']) ? $data['columnType'] : null;
        $this->container['columnTypeSetting'] = isset($data['columnTypeSetting']) ? $data['columnTypeSetting'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['nullable'] = isset($data['nullable']) ? $data['nullable'] : null;
        $this->container['array'] = isset($data['array']) ? $data['array'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['ownName'] = isset($data['ownName']) ? $data['ownName'] : null;
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
        if ($this->container['columnDataType'] === null) {
            $invalidProperties[] = "'columnDataType' can't be null";
        }
            $allowedValues = $this->getColumnDataTypeAllowableValues();
                if (!is_null($this->container['columnDataType']) && !in_array($this->container['columnDataType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'columnDataType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['columnDataType']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnDataType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['columnDataType']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnDataType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnDataTypeSetting']) && (mb_strlen($this->container['columnDataTypeSetting']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnDataTypeSetting', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['columnDataTypeSetting']) && (mb_strlen($this->container['columnDataTypeSetting']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnDataTypeSetting', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getColumnTypeAllowableValues();
                if (!is_null($this->container['columnType']) && !in_array($this->container['columnType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'columnType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['columnType']) && (mb_strlen($this->container['columnType']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['columnType']) && (mb_strlen($this->container['columnType']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnTypeSetting']) && (mb_strlen($this->container['columnTypeSetting']) > 65535)) {
                $invalidProperties[] = "invalid value for 'columnTypeSetting', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['columnTypeSetting']) && (mb_strlen($this->container['columnTypeSetting']) < 0)) {
                $invalidProperties[] = "invalid value for 'columnTypeSetting', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 256)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['depth']) && ($this->container['depth'] > 4)) {
                $invalidProperties[] = "invalid value for 'depth', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['depth']) && ($this->container['depth'] < 0)) {
                $invalidProperties[] = "invalid value for 'depth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownName']) && (mb_strlen($this->container['ownName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ownName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ownName']) && (mb_strlen($this->container['ownName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownName', the character length must be bigger than or equal to 1.";
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
    *  表列名称
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
    * @param string $columnName 表列名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets columnDataType
    *  **参数解释**: 列字段数据类型 - ROW 行类型 - MAP_STRING 字符串映射类型 - MAP_DECIMAL 小数映射类型 - TINYINT 微整型 - SMALLINT 小整型 - INT 整型 - BIGINT 长整型 - DECIMAL 精确小数类型 - FLOAT 单精度浮点数 - DOUBLE 双精度浮点数 - CHAR 定长字符串 - VARCHAR 不定长字符串 - STRING 字符串类型 - KEYWORD 关键字类型 - BOOLEAN 布尔类型 - DATE 日期类型 - TIME 时间类型 - TIMESTAMP 时间戳类型 - TIMESTAMP_LTZ 本地时间戳类型  **约束限制** 不涉及  **取值范围**: - ROW - MAP_STRING - MAP_DECIMAL - TINYINT - SMALLINT - INT - BIGINT - DECIMAL - FLOAT - DOUBLE - CHAR - VARCHAR - STRING - KEYWORD - BOOLEAN - DATE - TIME - TIMESTAMP - TIMESTAMP_LTZ  **默认值** 不涉及
    *
    * @return string
    */
    public function getColumnDataType()
    {
        return $this->container['columnDataType'];
    }

    /**
    * Sets columnDataType
    *
    * @param string $columnDataType **参数解释**: 列字段数据类型 - ROW 行类型 - MAP_STRING 字符串映射类型 - MAP_DECIMAL 小数映射类型 - TINYINT 微整型 - SMALLINT 小整型 - INT 整型 - BIGINT 长整型 - DECIMAL 精确小数类型 - FLOAT 单精度浮点数 - DOUBLE 双精度浮点数 - CHAR 定长字符串 - VARCHAR 不定长字符串 - STRING 字符串类型 - KEYWORD 关键字类型 - BOOLEAN 布尔类型 - DATE 日期类型 - TIME 时间类型 - TIMESTAMP 时间戳类型 - TIMESTAMP_LTZ 本地时间戳类型  **约束限制** 不涉及  **取值范围**: - ROW - MAP_STRING - MAP_DECIMAL - TINYINT - SMALLINT - INT - BIGINT - DECIMAL - FLOAT - DOUBLE - CHAR - VARCHAR - STRING - KEYWORD - BOOLEAN - DATE - TIME - TIMESTAMP - TIMESTAMP_LTZ  **默认值** 不涉及
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
    *  列数据类型设置
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
    * @param string|null $columnDataTypeSetting 列数据类型设置
    *
    * @return $this
    */
    public function setColumnDataTypeSetting($columnDataTypeSetting)
    {
        $this->container['columnDataTypeSetting'] = $columnDataTypeSetting;
        return $this;
    }

    /**
    * Gets columnType
    *  **参数解释**: 列字段类型 - PHYSICAL 物理字段 - METADATA 元数据字段 - VIRTUAL_METADATA 虚拟元数据字段 - COMPUTED 计算字段  **约束限制** 不涉及  **取值范围**: - PHYSICAL - METADATA - VIRTUAL_METADATA - COMPUTED  **默认值** 不涉及
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
    * @param string|null $columnType **参数解释**: 列字段类型 - PHYSICAL 物理字段 - METADATA 元数据字段 - VIRTUAL_METADATA 虚拟元数据字段 - COMPUTED 计算字段  **约束限制** 不涉及  **取值范围**: - PHYSICAL - METADATA - VIRTUAL_METADATA - COMPUTED  **默认值** 不涉及
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
    * Gets defaultValue
    *  列默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 列默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets nullable
    *  列是否可为空
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
    * @param bool|null $nullable 列是否可为空
    *
    * @return $this
    */
    public function setNullable($nullable)
    {
        $this->container['nullable'] = $nullable;
        return $this;
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
    * Gets depth
    *  列深度
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
    * @param int|null $depth 列深度
    *
    * @return $this
    */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;
        return $this;
    }

    /**
    * Gets parentName
    *  列名称
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
    * @param string|null $parentName 列名称
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets ownName
    *  列名称
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
    * @param string|null $ownName 列名称
    *
    * @return $this
    */
    public function setOwnName($ownName)
    {
        $this->container['ownName'] = $ownName;
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

