<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataFilterObjectResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataFilterObjectResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchId  数据过滤对象信息批次ID，与父级DataFilterRuleResp的batch_id关联，用于追溯对象归属的批次
    * id  数据过滤对象的唯一标识符，由对象层级结构（库名、表名、对象类型等）组合生成
    * parentId  父级过滤对象的标识符，用于表示对象之间的层级归属关系（如列归属于表、表归属于库）。
    * objectName  数据过滤对象的名称，按object_type不同可为库名、表名或列名。
    * objectAliasName  数据过滤对象的映射名称（别名），在目标端数据库对象名与源端不一致时使用。
    * objectType  数据过滤对象的层级类型，标识当前过滤规则粒度级别。
    * dbName  数据过滤对象所属的数据库名称。
    * schemaName  数据过滤对象所属的schema名。
    * tableName  数据过滤对象所属的表名。
    * isDataFilter  标记该对象是否启用数据过滤。
    * dataFilterType  数据过滤的类型，标识使用的过滤策略。
    * filterCondition  数据过滤条件
    * isSynchronized  数据过滤条件是否已同步
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchId' => 'int',
            'id' => 'string',
            'parentId' => 'string',
            'objectName' => 'string',
            'objectAliasName' => 'string',
            'objectType' => 'string',
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'isDataFilter' => 'string',
            'dataFilterType' => 'string',
            'filterCondition' => 'string',
            'isSynchronized' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchId  数据过滤对象信息批次ID，与父级DataFilterRuleResp的batch_id关联，用于追溯对象归属的批次
    * id  数据过滤对象的唯一标识符，由对象层级结构（库名、表名、对象类型等）组合生成
    * parentId  父级过滤对象的标识符，用于表示对象之间的层级归属关系（如列归属于表、表归属于库）。
    * objectName  数据过滤对象的名称，按object_type不同可为库名、表名或列名。
    * objectAliasName  数据过滤对象的映射名称（别名），在目标端数据库对象名与源端不一致时使用。
    * objectType  数据过滤对象的层级类型，标识当前过滤规则粒度级别。
    * dbName  数据过滤对象所属的数据库名称。
    * schemaName  数据过滤对象所属的schema名。
    * tableName  数据过滤对象所属的表名。
    * isDataFilter  标记该对象是否启用数据过滤。
    * dataFilterType  数据过滤的类型，标识使用的过滤策略。
    * filterCondition  数据过滤条件
    * isSynchronized  数据过滤条件是否已同步
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchId' => 'int64',
        'id' => null,
        'parentId' => null,
        'objectName' => null,
        'objectAliasName' => null,
        'objectType' => null,
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null,
        'isDataFilter' => null,
        'dataFilterType' => null,
        'filterCondition' => null,
        'isSynchronized' => null
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
    * batchId  数据过滤对象信息批次ID，与父级DataFilterRuleResp的batch_id关联，用于追溯对象归属的批次
    * id  数据过滤对象的唯一标识符，由对象层级结构（库名、表名、对象类型等）组合生成
    * parentId  父级过滤对象的标识符，用于表示对象之间的层级归属关系（如列归属于表、表归属于库）。
    * objectName  数据过滤对象的名称，按object_type不同可为库名、表名或列名。
    * objectAliasName  数据过滤对象的映射名称（别名），在目标端数据库对象名与源端不一致时使用。
    * objectType  数据过滤对象的层级类型，标识当前过滤规则粒度级别。
    * dbName  数据过滤对象所属的数据库名称。
    * schemaName  数据过滤对象所属的schema名。
    * tableName  数据过滤对象所属的表名。
    * isDataFilter  标记该对象是否启用数据过滤。
    * dataFilterType  数据过滤的类型，标识使用的过滤策略。
    * filterCondition  数据过滤条件
    * isSynchronized  数据过滤条件是否已同步
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchId' => 'batch_id',
            'id' => 'id',
            'parentId' => 'parent_id',
            'objectName' => 'object_name',
            'objectAliasName' => 'object_alias_name',
            'objectType' => 'object_type',
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'isDataFilter' => 'is_data_filter',
            'dataFilterType' => 'data_filter_type',
            'filterCondition' => 'filter_condition',
            'isSynchronized' => 'is_synchronized'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchId  数据过滤对象信息批次ID，与父级DataFilterRuleResp的batch_id关联，用于追溯对象归属的批次
    * id  数据过滤对象的唯一标识符，由对象层级结构（库名、表名、对象类型等）组合生成
    * parentId  父级过滤对象的标识符，用于表示对象之间的层级归属关系（如列归属于表、表归属于库）。
    * objectName  数据过滤对象的名称，按object_type不同可为库名、表名或列名。
    * objectAliasName  数据过滤对象的映射名称（别名），在目标端数据库对象名与源端不一致时使用。
    * objectType  数据过滤对象的层级类型，标识当前过滤规则粒度级别。
    * dbName  数据过滤对象所属的数据库名称。
    * schemaName  数据过滤对象所属的schema名。
    * tableName  数据过滤对象所属的表名。
    * isDataFilter  标记该对象是否启用数据过滤。
    * dataFilterType  数据过滤的类型，标识使用的过滤策略。
    * filterCondition  数据过滤条件
    * isSynchronized  数据过滤条件是否已同步
    *
    * @var string[]
    */
    protected static $setters = [
            'batchId' => 'setBatchId',
            'id' => 'setId',
            'parentId' => 'setParentId',
            'objectName' => 'setObjectName',
            'objectAliasName' => 'setObjectAliasName',
            'objectType' => 'setObjectType',
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'isDataFilter' => 'setIsDataFilter',
            'dataFilterType' => 'setDataFilterType',
            'filterCondition' => 'setFilterCondition',
            'isSynchronized' => 'setIsSynchronized'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchId  数据过滤对象信息批次ID，与父级DataFilterRuleResp的batch_id关联，用于追溯对象归属的批次
    * id  数据过滤对象的唯一标识符，由对象层级结构（库名、表名、对象类型等）组合生成
    * parentId  父级过滤对象的标识符，用于表示对象之间的层级归属关系（如列归属于表、表归属于库）。
    * objectName  数据过滤对象的名称，按object_type不同可为库名、表名或列名。
    * objectAliasName  数据过滤对象的映射名称（别名），在目标端数据库对象名与源端不一致时使用。
    * objectType  数据过滤对象的层级类型，标识当前过滤规则粒度级别。
    * dbName  数据过滤对象所属的数据库名称。
    * schemaName  数据过滤对象所属的schema名。
    * tableName  数据过滤对象所属的表名。
    * isDataFilter  标记该对象是否启用数据过滤。
    * dataFilterType  数据过滤的类型，标识使用的过滤策略。
    * filterCondition  数据过滤条件
    * isSynchronized  数据过滤条件是否已同步
    *
    * @var string[]
    */
    protected static $getters = [
            'batchId' => 'getBatchId',
            'id' => 'getId',
            'parentId' => 'getParentId',
            'objectName' => 'getObjectName',
            'objectAliasName' => 'getObjectAliasName',
            'objectType' => 'getObjectType',
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'isDataFilter' => 'getIsDataFilter',
            'dataFilterType' => 'getDataFilterType',
            'filterCondition' => 'getFilterCondition',
            'isSynchronized' => 'getIsSynchronized'
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
    const IS_DATA_FILTER_TRUE = 'true';
    const IS_DATA_FILTER_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsDataFilterAllowableValues()
    {
        return [
            self::IS_DATA_FILTER_TRUE,
            self::IS_DATA_FILTER_FALSE,
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
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['objectAliasName'] = isset($data['objectAliasName']) ? $data['objectAliasName'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['isDataFilter'] = isset($data['isDataFilter']) ? $data['isDataFilter'] : null;
        $this->container['dataFilterType'] = isset($data['dataFilterType']) ? $data['dataFilterType'] : null;
        $this->container['filterCondition'] = isset($data['filterCondition']) ? $data['filterCondition'] : null;
        $this->container['isSynchronized'] = isset($data['isSynchronized']) ? $data['isSynchronized'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getIsDataFilterAllowableValues();
                if (!is_null($this->container['isDataFilter']) && !in_array($this->container['isDataFilter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isDataFilter', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets batchId
    *  数据过滤对象信息批次ID，与父级DataFilterRuleResp的batch_id关联，用于追溯对象归属的批次
    *
    * @return int|null
    */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
    * Sets batchId
    *
    * @param int|null $batchId 数据过滤对象信息批次ID，与父级DataFilterRuleResp的batch_id关联，用于追溯对象归属的批次
    *
    * @return $this
    */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;
        return $this;
    }

    /**
    * Gets id
    *  数据过滤对象的唯一标识符，由对象层级结构（库名、表名、对象类型等）组合生成
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 数据过滤对象的唯一标识符，由对象层级结构（库名、表名、对象类型等）组合生成
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentId
    *  父级过滤对象的标识符，用于表示对象之间的层级归属关系（如列归属于表、表归属于库）。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父级过滤对象的标识符，用于表示对象之间的层级归属关系（如列归属于表、表归属于库）。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets objectName
    *  数据过滤对象的名称，按object_type不同可为库名、表名或列名。
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 数据过滤对象的名称，按object_type不同可为库名、表名或列名。
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets objectAliasName
    *  数据过滤对象的映射名称（别名），在目标端数据库对象名与源端不一致时使用。
    *
    * @return string|null
    */
    public function getObjectAliasName()
    {
        return $this->container['objectAliasName'];
    }

    /**
    * Sets objectAliasName
    *
    * @param string|null $objectAliasName 数据过滤对象的映射名称（别名），在目标端数据库对象名与源端不一致时使用。
    *
    * @return $this
    */
    public function setObjectAliasName($objectAliasName)
    {
        $this->container['objectAliasName'] = $objectAliasName;
        return $this;
    }

    /**
    * Gets objectType
    *  数据过滤对象的层级类型，标识当前过滤规则粒度级别。
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 数据过滤对象的层级类型，标识当前过滤规则粒度级别。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets dbName
    *  数据过滤对象所属的数据库名称。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据过滤对象所属的数据库名称。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schemaName
    *  数据过滤对象所属的schema名。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName 数据过滤对象所属的schema名。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  数据过滤对象所属的表名。
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
    * @param string|null $tableName 数据过滤对象所属的表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets isDataFilter
    *  标记该对象是否启用数据过滤。
    *
    * @return string|null
    */
    public function getIsDataFilter()
    {
        return $this->container['isDataFilter'];
    }

    /**
    * Sets isDataFilter
    *
    * @param string|null $isDataFilter 标记该对象是否启用数据过滤。
    *
    * @return $this
    */
    public function setIsDataFilter($isDataFilter)
    {
        $this->container['isDataFilter'] = $isDataFilter;
        return $this;
    }

    /**
    * Gets dataFilterType
    *  数据过滤的类型，标识使用的过滤策略。
    *
    * @return string|null
    */
    public function getDataFilterType()
    {
        return $this->container['dataFilterType'];
    }

    /**
    * Sets dataFilterType
    *
    * @param string|null $dataFilterType 数据过滤的类型，标识使用的过滤策略。
    *
    * @return $this
    */
    public function setDataFilterType($dataFilterType)
    {
        $this->container['dataFilterType'] = $dataFilterType;
        return $this;
    }

    /**
    * Gets filterCondition
    *  数据过滤条件
    *
    * @return string|null
    */
    public function getFilterCondition()
    {
        return $this->container['filterCondition'];
    }

    /**
    * Sets filterCondition
    *
    * @param string|null $filterCondition 数据过滤条件
    *
    * @return $this
    */
    public function setFilterCondition($filterCondition)
    {
        $this->container['filterCondition'] = $filterCondition;
        return $this;
    }

    /**
    * Gets isSynchronized
    *  数据过滤条件是否已同步
    *
    * @return bool|null
    */
    public function getIsSynchronized()
    {
        return $this->container['isSynchronized'];
    }

    /**
    * Sets isSynchronized
    *
    * @param bool|null $isSynchronized 数据过滤条件是否已同步
    *
    * @return $this
    */
    public function setIsSynchronized($isSynchronized)
    {
        $this->container['isSynchronized'] = $isSynchronized;
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

