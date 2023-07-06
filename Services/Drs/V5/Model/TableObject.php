<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncType  该表在实时同步场景下的类型。取值： - config：仅当该表作为数据过滤高级设置的关联表时，需要填写，此时该表以及该表下的columns“不会”被同步到目标库，name、all、filtered、filter_conditions属性不生效，columns需要填写被关联的相关对象，config_conditions需要填写数据过滤高级设置的配置条件。（注意：如果需要同步该表级对象，则在下级对象中填写sync_type值为config。）
    * type  对象类型。取值： - table：表。 - view：视图。 - procedure：存储过程。
    * name  该表在目标库的名称（表名映射）。
    * all  是否整表迁移或同步。注意： 1.当该表不需要做列过滤、列映射时，填true，如果需要做列过滤、列映射则填false； 2.当该表需要做附加列时，需要填true，并且在columns里填写附加列信息； 3.当该表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息、config_conditions填写数据过滤高级设置的配置条件；
    * dbAliasName  一对多情况下，表级上对库名的映射。
    * schemaAliasName  一对多情况下，表级上对schema名的映射。
    * filtered  该表是否进行数据过滤。
    * filterConditions  该表数据的过滤条件，生成加工规则值为SQL条件语句，长度限制512。
    * configConditions  该表数据过滤高级设置的配置条件，当该表作为联表查询时填写，生成加工规则值为SQL条件语句，长度限制512。
    * isSynchronized  是否已经进行同步。
    * columns  需要同步/映射/过滤/新增的列，当需要列过滤、列映射、附加列功能时填写，仅在实时同步任务中生效，当整表同步为false时需要填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncType' => 'string',
            'type' => 'string',
            'name' => 'string',
            'all' => 'bool',
            'dbAliasName' => 'string',
            'schemaAliasName' => 'string',
            'filtered' => 'bool',
            'filterConditions' => 'string[]',
            'configConditions' => 'string[]',
            'isSynchronized' => 'bool',
            'columns' => 'map[string,\HuaweiCloud\SDK\Drs\V5\Model\ColumnObject]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncType  该表在实时同步场景下的类型。取值： - config：仅当该表作为数据过滤高级设置的关联表时，需要填写，此时该表以及该表下的columns“不会”被同步到目标库，name、all、filtered、filter_conditions属性不生效，columns需要填写被关联的相关对象，config_conditions需要填写数据过滤高级设置的配置条件。（注意：如果需要同步该表级对象，则在下级对象中填写sync_type值为config。）
    * type  对象类型。取值： - table：表。 - view：视图。 - procedure：存储过程。
    * name  该表在目标库的名称（表名映射）。
    * all  是否整表迁移或同步。注意： 1.当该表不需要做列过滤、列映射时，填true，如果需要做列过滤、列映射则填false； 2.当该表需要做附加列时，需要填true，并且在columns里填写附加列信息； 3.当该表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息、config_conditions填写数据过滤高级设置的配置条件；
    * dbAliasName  一对多情况下，表级上对库名的映射。
    * schemaAliasName  一对多情况下，表级上对schema名的映射。
    * filtered  该表是否进行数据过滤。
    * filterConditions  该表数据的过滤条件，生成加工规则值为SQL条件语句，长度限制512。
    * configConditions  该表数据过滤高级设置的配置条件，当该表作为联表查询时填写，生成加工规则值为SQL条件语句，长度限制512。
    * isSynchronized  是否已经进行同步。
    * columns  需要同步/映射/过滤/新增的列，当需要列过滤、列映射、附加列功能时填写，仅在实时同步任务中生效，当整表同步为false时需要填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncType' => null,
        'type' => null,
        'name' => null,
        'all' => null,
        'dbAliasName' => null,
        'schemaAliasName' => null,
        'filtered' => null,
        'filterConditions' => null,
        'configConditions' => null,
        'isSynchronized' => null,
        'columns' => null
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
    * syncType  该表在实时同步场景下的类型。取值： - config：仅当该表作为数据过滤高级设置的关联表时，需要填写，此时该表以及该表下的columns“不会”被同步到目标库，name、all、filtered、filter_conditions属性不生效，columns需要填写被关联的相关对象，config_conditions需要填写数据过滤高级设置的配置条件。（注意：如果需要同步该表级对象，则在下级对象中填写sync_type值为config。）
    * type  对象类型。取值： - table：表。 - view：视图。 - procedure：存储过程。
    * name  该表在目标库的名称（表名映射）。
    * all  是否整表迁移或同步。注意： 1.当该表不需要做列过滤、列映射时，填true，如果需要做列过滤、列映射则填false； 2.当该表需要做附加列时，需要填true，并且在columns里填写附加列信息； 3.当该表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息、config_conditions填写数据过滤高级设置的配置条件；
    * dbAliasName  一对多情况下，表级上对库名的映射。
    * schemaAliasName  一对多情况下，表级上对schema名的映射。
    * filtered  该表是否进行数据过滤。
    * filterConditions  该表数据的过滤条件，生成加工规则值为SQL条件语句，长度限制512。
    * configConditions  该表数据过滤高级设置的配置条件，当该表作为联表查询时填写，生成加工规则值为SQL条件语句，长度限制512。
    * isSynchronized  是否已经进行同步。
    * columns  需要同步/映射/过滤/新增的列，当需要列过滤、列映射、附加列功能时填写，仅在实时同步任务中生效，当整表同步为false时需要填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncType' => 'sync_type',
            'type' => 'type',
            'name' => 'name',
            'all' => 'all',
            'dbAliasName' => 'db_alias_name',
            'schemaAliasName' => 'schema_alias_name',
            'filtered' => 'filtered',
            'filterConditions' => 'filter_conditions',
            'configConditions' => 'config_conditions',
            'isSynchronized' => 'is_synchronized',
            'columns' => 'columns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncType  该表在实时同步场景下的类型。取值： - config：仅当该表作为数据过滤高级设置的关联表时，需要填写，此时该表以及该表下的columns“不会”被同步到目标库，name、all、filtered、filter_conditions属性不生效，columns需要填写被关联的相关对象，config_conditions需要填写数据过滤高级设置的配置条件。（注意：如果需要同步该表级对象，则在下级对象中填写sync_type值为config。）
    * type  对象类型。取值： - table：表。 - view：视图。 - procedure：存储过程。
    * name  该表在目标库的名称（表名映射）。
    * all  是否整表迁移或同步。注意： 1.当该表不需要做列过滤、列映射时，填true，如果需要做列过滤、列映射则填false； 2.当该表需要做附加列时，需要填true，并且在columns里填写附加列信息； 3.当该表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息、config_conditions填写数据过滤高级设置的配置条件；
    * dbAliasName  一对多情况下，表级上对库名的映射。
    * schemaAliasName  一对多情况下，表级上对schema名的映射。
    * filtered  该表是否进行数据过滤。
    * filterConditions  该表数据的过滤条件，生成加工规则值为SQL条件语句，长度限制512。
    * configConditions  该表数据过滤高级设置的配置条件，当该表作为联表查询时填写，生成加工规则值为SQL条件语句，长度限制512。
    * isSynchronized  是否已经进行同步。
    * columns  需要同步/映射/过滤/新增的列，当需要列过滤、列映射、附加列功能时填写，仅在实时同步任务中生效，当整表同步为false时需要填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'syncType' => 'setSyncType',
            'type' => 'setType',
            'name' => 'setName',
            'all' => 'setAll',
            'dbAliasName' => 'setDbAliasName',
            'schemaAliasName' => 'setSchemaAliasName',
            'filtered' => 'setFiltered',
            'filterConditions' => 'setFilterConditions',
            'configConditions' => 'setConfigConditions',
            'isSynchronized' => 'setIsSynchronized',
            'columns' => 'setColumns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncType  该表在实时同步场景下的类型。取值： - config：仅当该表作为数据过滤高级设置的关联表时，需要填写，此时该表以及该表下的columns“不会”被同步到目标库，name、all、filtered、filter_conditions属性不生效，columns需要填写被关联的相关对象，config_conditions需要填写数据过滤高级设置的配置条件。（注意：如果需要同步该表级对象，则在下级对象中填写sync_type值为config。）
    * type  对象类型。取值： - table：表。 - view：视图。 - procedure：存储过程。
    * name  该表在目标库的名称（表名映射）。
    * all  是否整表迁移或同步。注意： 1.当该表不需要做列过滤、列映射时，填true，如果需要做列过滤、列映射则填false； 2.当该表需要做附加列时，需要填true，并且在columns里填写附加列信息； 3.当该表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息、config_conditions填写数据过滤高级设置的配置条件；
    * dbAliasName  一对多情况下，表级上对库名的映射。
    * schemaAliasName  一对多情况下，表级上对schema名的映射。
    * filtered  该表是否进行数据过滤。
    * filterConditions  该表数据的过滤条件，生成加工规则值为SQL条件语句，长度限制512。
    * configConditions  该表数据过滤高级设置的配置条件，当该表作为联表查询时填写，生成加工规则值为SQL条件语句，长度限制512。
    * isSynchronized  是否已经进行同步。
    * columns  需要同步/映射/过滤/新增的列，当需要列过滤、列映射、附加列功能时填写，仅在实时同步任务中生效，当整表同步为false时需要填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'syncType' => 'getSyncType',
            'type' => 'getType',
            'name' => 'getName',
            'all' => 'getAll',
            'dbAliasName' => 'getDbAliasName',
            'schemaAliasName' => 'getSchemaAliasName',
            'filtered' => 'getFiltered',
            'filterConditions' => 'getFilterConditions',
            'configConditions' => 'getConfigConditions',
            'isSynchronized' => 'getIsSynchronized',
            'columns' => 'getColumns'
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
    const TYPE_TABLE = 'table';
    const TYPE_VIEW = 'view';
    const TYPE_PROCEDURE = 'procedure';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TABLE,
            self::TYPE_VIEW,
            self::TYPE_PROCEDURE,
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
        $this->container['syncType'] = isset($data['syncType']) ? $data['syncType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
        $this->container['dbAliasName'] = isset($data['dbAliasName']) ? $data['dbAliasName'] : null;
        $this->container['schemaAliasName'] = isset($data['schemaAliasName']) ? $data['schemaAliasName'] : null;
        $this->container['filtered'] = isset($data['filtered']) ? $data['filtered'] : null;
        $this->container['filterConditions'] = isset($data['filterConditions']) ? $data['filterConditions'] : null;
        $this->container['configConditions'] = isset($data['configConditions']) ? $data['configConditions'] : null;
        $this->container['isSynchronized'] = isset($data['isSynchronized']) ? $data['isSynchronized'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets syncType
    *  该表在实时同步场景下的类型。取值： - config：仅当该表作为数据过滤高级设置的关联表时，需要填写，此时该表以及该表下的columns“不会”被同步到目标库，name、all、filtered、filter_conditions属性不生效，columns需要填写被关联的相关对象，config_conditions需要填写数据过滤高级设置的配置条件。（注意：如果需要同步该表级对象，则在下级对象中填写sync_type值为config。）
    *
    * @return string|null
    */
    public function getSyncType()
    {
        return $this->container['syncType'];
    }

    /**
    * Sets syncType
    *
    * @param string|null $syncType 该表在实时同步场景下的类型。取值： - config：仅当该表作为数据过滤高级设置的关联表时，需要填写，此时该表以及该表下的columns“不会”被同步到目标库，name、all、filtered、filter_conditions属性不生效，columns需要填写被关联的相关对象，config_conditions需要填写数据过滤高级设置的配置条件。（注意：如果需要同步该表级对象，则在下级对象中填写sync_type值为config。）
    *
    * @return $this
    */
    public function setSyncType($syncType)
    {
        $this->container['syncType'] = $syncType;
        return $this;
    }

    /**
    * Gets type
    *  对象类型。取值： - table：表。 - view：视图。 - procedure：存储过程。
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
    * @param string|null $type 对象类型。取值： - table：表。 - view：视图。 - procedure：存储过程。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  该表在目标库的名称（表名映射）。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 该表在目标库的名称（表名映射）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets all
    *  是否整表迁移或同步。注意： 1.当该表不需要做列过滤、列映射时，填true，如果需要做列过滤、列映射则填false； 2.当该表需要做附加列时，需要填true，并且在columns里填写附加列信息； 3.当该表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息、config_conditions填写数据过滤高级设置的配置条件；
    *
    * @return bool|null
    */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
    * Sets all
    *
    * @param bool|null $all 是否整表迁移或同步。注意： 1.当该表不需要做列过滤、列映射时，填true，如果需要做列过滤、列映射则填false； 2.当该表需要做附加列时，需要填true，并且在columns里填写附加列信息； 3.当该表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息、config_conditions填写数据过滤高级设置的配置条件；
    *
    * @return $this
    */
    public function setAll($all)
    {
        $this->container['all'] = $all;
        return $this;
    }

    /**
    * Gets dbAliasName
    *  一对多情况下，表级上对库名的映射。
    *
    * @return string|null
    */
    public function getDbAliasName()
    {
        return $this->container['dbAliasName'];
    }

    /**
    * Sets dbAliasName
    *
    * @param string|null $dbAliasName 一对多情况下，表级上对库名的映射。
    *
    * @return $this
    */
    public function setDbAliasName($dbAliasName)
    {
        $this->container['dbAliasName'] = $dbAliasName;
        return $this;
    }

    /**
    * Gets schemaAliasName
    *  一对多情况下，表级上对schema名的映射。
    *
    * @return string|null
    */
    public function getSchemaAliasName()
    {
        return $this->container['schemaAliasName'];
    }

    /**
    * Sets schemaAliasName
    *
    * @param string|null $schemaAliasName 一对多情况下，表级上对schema名的映射。
    *
    * @return $this
    */
    public function setSchemaAliasName($schemaAliasName)
    {
        $this->container['schemaAliasName'] = $schemaAliasName;
        return $this;
    }

    /**
    * Gets filtered
    *  该表是否进行数据过滤。
    *
    * @return bool|null
    */
    public function getFiltered()
    {
        return $this->container['filtered'];
    }

    /**
    * Sets filtered
    *
    * @param bool|null $filtered 该表是否进行数据过滤。
    *
    * @return $this
    */
    public function setFiltered($filtered)
    {
        $this->container['filtered'] = $filtered;
        return $this;
    }

    /**
    * Gets filterConditions
    *  该表数据的过滤条件，生成加工规则值为SQL条件语句，长度限制512。
    *
    * @return string[]|null
    */
    public function getFilterConditions()
    {
        return $this->container['filterConditions'];
    }

    /**
    * Sets filterConditions
    *
    * @param string[]|null $filterConditions 该表数据的过滤条件，生成加工规则值为SQL条件语句，长度限制512。
    *
    * @return $this
    */
    public function setFilterConditions($filterConditions)
    {
        $this->container['filterConditions'] = $filterConditions;
        return $this;
    }

    /**
    * Gets configConditions
    *  该表数据过滤高级设置的配置条件，当该表作为联表查询时填写，生成加工规则值为SQL条件语句，长度限制512。
    *
    * @return string[]|null
    */
    public function getConfigConditions()
    {
        return $this->container['configConditions'];
    }

    /**
    * Sets configConditions
    *
    * @param string[]|null $configConditions 该表数据过滤高级设置的配置条件，当该表作为联表查询时填写，生成加工规则值为SQL条件语句，长度限制512。
    *
    * @return $this
    */
    public function setConfigConditions($configConditions)
    {
        $this->container['configConditions'] = $configConditions;
        return $this;
    }

    /**
    * Gets isSynchronized
    *  是否已经进行同步。
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
    * @param bool|null $isSynchronized 是否已经进行同步。
    *
    * @return $this
    */
    public function setIsSynchronized($isSynchronized)
    {
        $this->container['isSynchronized'] = $isSynchronized;
        return $this;
    }

    /**
    * Gets columns
    *  需要同步/映射/过滤/新增的列，当需要列过滤、列映射、附加列功能时填写，仅在实时同步任务中生效，当整表同步为false时需要填写。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V5\Model\ColumnObject]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V5\Model\ColumnObject]|null $columns 需要同步/映射/过滤/新增的列，当需要列过滤、列映射、附加列功能时填写，仅在实时同步任务中生效，当整表同步为false时需要填写。
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
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

