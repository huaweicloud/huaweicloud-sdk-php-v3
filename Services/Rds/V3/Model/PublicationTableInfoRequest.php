<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicationTableInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicationTableInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  表名。  表名长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * schema  命名空间。默认值dbo。
    * columns  发布的字段（不传或为空说明选择所有字段）。  字段名称长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * primaryKey  主键。
    * filterStatement  筛选语句。不能包含英文单引号'。
    * filter  filter
    * articleProperties  articleProperties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'schema' => 'string',
            'columns' => 'string[]',
            'primaryKey' => 'string[]',
            'filterStatement' => 'string',
            'filter' => '\HuaweiCloud\SDK\Rds\V3\Model\PublicationTableFilterInfoRequest',
            'articleProperties' => '\HuaweiCloud\SDK\Rds\V3\Model\ArticlePropertiesRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  表名。  表名长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * schema  命名空间。默认值dbo。
    * columns  发布的字段（不传或为空说明选择所有字段）。  字段名称长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * primaryKey  主键。
    * filterStatement  筛选语句。不能包含英文单引号'。
    * filter  filter
    * articleProperties  articleProperties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'schema' => null,
        'columns' => null,
        'primaryKey' => null,
        'filterStatement' => null,
        'filter' => null,
        'articleProperties' => null
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
    * tableName  表名。  表名长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * schema  命名空间。默认值dbo。
    * columns  发布的字段（不传或为空说明选择所有字段）。  字段名称长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * primaryKey  主键。
    * filterStatement  筛选语句。不能包含英文单引号'。
    * filter  filter
    * articleProperties  articleProperties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'schema' => 'schema',
            'columns' => 'columns',
            'primaryKey' => 'primary_key',
            'filterStatement' => 'filter_statement',
            'filter' => 'filter',
            'articleProperties' => 'article_properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  表名。  表名长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * schema  命名空间。默认值dbo。
    * columns  发布的字段（不传或为空说明选择所有字段）。  字段名称长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * primaryKey  主键。
    * filterStatement  筛选语句。不能包含英文单引号'。
    * filter  filter
    * articleProperties  articleProperties
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'schema' => 'setSchema',
            'columns' => 'setColumns',
            'primaryKey' => 'setPrimaryKey',
            'filterStatement' => 'setFilterStatement',
            'filter' => 'setFilter',
            'articleProperties' => 'setArticleProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  表名。  表名长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * schema  命名空间。默认值dbo。
    * columns  发布的字段（不传或为空说明选择所有字段）。  字段名称长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    * primaryKey  主键。
    * filterStatement  筛选语句。不能包含英文单引号'。
    * filter  filter
    * articleProperties  articleProperties
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'schema' => 'getSchema',
            'columns' => 'getColumns',
            'primaryKey' => 'getPrimaryKey',
            'filterStatement' => 'getFilterStatement',
            'filter' => 'getFilter',
            'articleProperties' => 'getArticleProperties'
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
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['primaryKey'] = isset($data['primaryKey']) ? $data['primaryKey'] : null;
        $this->container['filterStatement'] = isset($data['filterStatement']) ? $data['filterStatement'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['articleProperties'] = isset($data['articleProperties']) ? $data['articleProperties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
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
    *  表名。  表名长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名。  表名长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets schema
    *  命名空间。默认值dbo。
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema 命名空间。默认值dbo。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets columns
    *  发布的字段（不传或为空说明选择所有字段）。  字段名称长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    *
    * @return string[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param string[]|null $columns 发布的字段（不传或为空说明选择所有字段）。  字段名称长度可在1～64个字符之间，由字母、数字或下划线组成，不能包含其他特殊字符
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets primaryKey
    *  主键。
    *
    * @return string[]|null
    */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
    * Sets primaryKey
    *
    * @param string[]|null $primaryKey 主键。
    *
    * @return $this
    */
    public function setPrimaryKey($primaryKey)
    {
        $this->container['primaryKey'] = $primaryKey;
        return $this;
    }

    /**
    * Gets filterStatement
    *  筛选语句。不能包含英文单引号'。
    *
    * @return string|null
    */
    public function getFilterStatement()
    {
        return $this->container['filterStatement'];
    }

    /**
    * Sets filterStatement
    *
    * @param string|null $filterStatement 筛选语句。不能包含英文单引号'。
    *
    * @return $this
    */
    public function setFilterStatement($filterStatement)
    {
        $this->container['filterStatement'] = $filterStatement;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableFilterInfoRequest|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PublicationTableFilterInfoRequest|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets articleProperties
    *  articleProperties
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ArticlePropertiesRequest|null
    */
    public function getArticleProperties()
    {
        return $this->container['articleProperties'];
    }

    /**
    * Sets articleProperties
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ArticlePropertiesRequest|null $articleProperties articleProperties
    *
    * @return $this
    */
    public function setArticleProperties($articleProperties)
    {
        $this->container['articleProperties'] = $articleProperties;
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

