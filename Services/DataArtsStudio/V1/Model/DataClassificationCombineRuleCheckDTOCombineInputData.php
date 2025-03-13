<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataClassificationCombineRuleCheckDTOCombineInputData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataClassificationCombineRuleCheckDTO_combine_input_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnContent  字段内容模拟数据
    * columnName  列名模拟数据
    * columnComment  列注释模拟数据
    * tableComment  表注释模拟数据
    * tableName  表名模拟数据
    * databaseName  库名模拟数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnContent' => 'string',
            'columnName' => 'string',
            'columnComment' => 'string',
            'tableComment' => 'string',
            'tableName' => 'string',
            'databaseName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnContent  字段内容模拟数据
    * columnName  列名模拟数据
    * columnComment  列注释模拟数据
    * tableComment  表注释模拟数据
    * tableName  表名模拟数据
    * databaseName  库名模拟数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnContent' => null,
        'columnName' => null,
        'columnComment' => null,
        'tableComment' => null,
        'tableName' => null,
        'databaseName' => null
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
    * columnContent  字段内容模拟数据
    * columnName  列名模拟数据
    * columnComment  列注释模拟数据
    * tableComment  表注释模拟数据
    * tableName  表名模拟数据
    * databaseName  库名模拟数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnContent' => 'column_content',
            'columnName' => 'column_name',
            'columnComment' => 'column_comment',
            'tableComment' => 'table_comment',
            'tableName' => 'table_name',
            'databaseName' => 'database_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnContent  字段内容模拟数据
    * columnName  列名模拟数据
    * columnComment  列注释模拟数据
    * tableComment  表注释模拟数据
    * tableName  表名模拟数据
    * databaseName  库名模拟数据
    *
    * @var string[]
    */
    protected static $setters = [
            'columnContent' => 'setColumnContent',
            'columnName' => 'setColumnName',
            'columnComment' => 'setColumnComment',
            'tableComment' => 'setTableComment',
            'tableName' => 'setTableName',
            'databaseName' => 'setDatabaseName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnContent  字段内容模拟数据
    * columnName  列名模拟数据
    * columnComment  列注释模拟数据
    * tableComment  表注释模拟数据
    * tableName  表名模拟数据
    * databaseName  库名模拟数据
    *
    * @var string[]
    */
    protected static $getters = [
            'columnContent' => 'getColumnContent',
            'columnName' => 'getColumnName',
            'columnComment' => 'getColumnComment',
            'tableComment' => 'getTableComment',
            'tableName' => 'getTableName',
            'databaseName' => 'getDatabaseName'
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
        $this->container['columnContent'] = isset($data['columnContent']) ? $data['columnContent'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['columnComment'] = isset($data['columnComment']) ? $data['columnComment'] : null;
        $this->container['tableComment'] = isset($data['tableComment']) ? $data['tableComment'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['columnContent']) && (mb_strlen($this->container['columnContent']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnContent', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['columnContent']) && (mb_strlen($this->container['columnContent']) < 0)) {
                $invalidProperties[] = "invalid value for 'columnContent', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 0)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['columnComment']) && (mb_strlen($this->container['columnComment']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnComment', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['columnComment']) && (mb_strlen($this->container['columnComment']) < 0)) {
                $invalidProperties[] = "invalid value for 'columnComment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tableComment']) && (mb_strlen($this->container['tableComment']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableComment', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tableComment']) && (mb_strlen($this->container['tableComment']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableComment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 256)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 0)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 0.";
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
    * Gets columnContent
    *  字段内容模拟数据
    *
    * @return string|null
    */
    public function getColumnContent()
    {
        return $this->container['columnContent'];
    }

    /**
    * Sets columnContent
    *
    * @param string|null $columnContent 字段内容模拟数据
    *
    * @return $this
    */
    public function setColumnContent($columnContent)
    {
        $this->container['columnContent'] = $columnContent;
        return $this;
    }

    /**
    * Gets columnName
    *  列名模拟数据
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
    * @param string|null $columnName 列名模拟数据
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets columnComment
    *  列注释模拟数据
    *
    * @return string|null
    */
    public function getColumnComment()
    {
        return $this->container['columnComment'];
    }

    /**
    * Sets columnComment
    *
    * @param string|null $columnComment 列注释模拟数据
    *
    * @return $this
    */
    public function setColumnComment($columnComment)
    {
        $this->container['columnComment'] = $columnComment;
        return $this;
    }

    /**
    * Gets tableComment
    *  表注释模拟数据
    *
    * @return string|null
    */
    public function getTableComment()
    {
        return $this->container['tableComment'];
    }

    /**
    * Sets tableComment
    *
    * @param string|null $tableComment 表注释模拟数据
    *
    * @return $this
    */
    public function setTableComment($tableComment)
    {
        $this->container['tableComment'] = $tableComment;
        return $this;
    }

    /**
    * Gets tableName
    *  表名模拟数据
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
    * @param string|null $tableName 表名模拟数据
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets databaseName
    *  库名模拟数据
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 库名模拟数据
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
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

