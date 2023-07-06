<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncType  该列在实时同步场景下的类型。取值： - config：当该列作为数据过滤高级设置的关联列时，需要填写，同时如果该列是主建或优化查询所需的索引，则需要填写primary_key_for_data_filtering或index_for_data_filtering。（注意：是否同步该列到目标库由“filtered”属性控制，与库级、模式级、表级控制方式不同。）
    * primaryKeyForDataFiltering  该列是否在数据过滤高级设置场景下为主键，如果是主建则填该列列名，否则不填。
    * indexForDataFiltering  优化查询所需的索引，将会为缓存数据增加索引，不会影响源表，当该列作为数据过滤高级设置的关联索引时，需要填写，否则不填。
    * name  该列在目标库的名称（列名映射），当该列为“附加列”时须与数据库表级对象中列名保持一致。
    * type  该列字段的数据类型。 列过滤：填写源列字段的数据类型。 附加列：新填充的列指定字段的数据类型，根据不同操作类型来决定取值范围与约束。取值： - 以默认值方式，支持：int,long,varchar(256),datetime,timestamp。 - 以create_time为列，支持：long,datetime,timestamp。 - 以update_time为列，支持：long,datetime,timestamp。 - 以表达式为列，支持：varchar(256)，且列值仅为：concat(__current_database, '@', __current_table) - 以serverName@database@table为列，支持：varchar(256)。
    * primaryKeyForColumnFiltering  该列是否在列映射场景下为主键，如果是主建则填PRI，否则填空。
    * filtered  该列是否进列过滤，不能与附加列additional同时使用。取值： - true：表示同步该列。 - false：表示过滤该列不同步。
    * additional  该列是否为附加列，当该列为附加列时：name必须与表级对象中列名一致，并且不能与列过滤filtered同时使用。
    * operationType  操作类型，以特定的操作类型填充新加的列。取值： - 以默认值方式：\"operation_type\":\"ADDITIONALCOLUMN,default_value\" - 以create_time为列：\"operation_type\":\"ADDITIONALCOLUMN,create_time\" - 以update_time为列：\"operation_type\":\"ADDITIONALCOLUMN,update_time\" - 以表达式为列：\"operation_type\":\"ADDITIONALCOLUMN,expression\" - 以serverName@database@table为列：\"operation_type\":\"ADDITIONALCOLUMN,server_database_table\"
    * value  附加列的值。约束： - 当操作类型仅“以默认值方式”，“以serverName@database@table为列”时，才支持输入对应字段类型的值。 - 当操作类型为“以表达式为列”时，该字段为固定值\"concat(__current_database, '@', __current_table)\"，不需要填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncType' => 'string',
            'primaryKeyForDataFiltering' => 'string',
            'indexForDataFiltering' => 'string',
            'name' => 'string',
            'type' => 'string',
            'primaryKeyForColumnFiltering' => 'string',
            'filtered' => 'bool',
            'additional' => 'bool',
            'operationType' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncType  该列在实时同步场景下的类型。取值： - config：当该列作为数据过滤高级设置的关联列时，需要填写，同时如果该列是主建或优化查询所需的索引，则需要填写primary_key_for_data_filtering或index_for_data_filtering。（注意：是否同步该列到目标库由“filtered”属性控制，与库级、模式级、表级控制方式不同。）
    * primaryKeyForDataFiltering  该列是否在数据过滤高级设置场景下为主键，如果是主建则填该列列名，否则不填。
    * indexForDataFiltering  优化查询所需的索引，将会为缓存数据增加索引，不会影响源表，当该列作为数据过滤高级设置的关联索引时，需要填写，否则不填。
    * name  该列在目标库的名称（列名映射），当该列为“附加列”时须与数据库表级对象中列名保持一致。
    * type  该列字段的数据类型。 列过滤：填写源列字段的数据类型。 附加列：新填充的列指定字段的数据类型，根据不同操作类型来决定取值范围与约束。取值： - 以默认值方式，支持：int,long,varchar(256),datetime,timestamp。 - 以create_time为列，支持：long,datetime,timestamp。 - 以update_time为列，支持：long,datetime,timestamp。 - 以表达式为列，支持：varchar(256)，且列值仅为：concat(__current_database, '@', __current_table) - 以serverName@database@table为列，支持：varchar(256)。
    * primaryKeyForColumnFiltering  该列是否在列映射场景下为主键，如果是主建则填PRI，否则填空。
    * filtered  该列是否进列过滤，不能与附加列additional同时使用。取值： - true：表示同步该列。 - false：表示过滤该列不同步。
    * additional  该列是否为附加列，当该列为附加列时：name必须与表级对象中列名一致，并且不能与列过滤filtered同时使用。
    * operationType  操作类型，以特定的操作类型填充新加的列。取值： - 以默认值方式：\"operation_type\":\"ADDITIONALCOLUMN,default_value\" - 以create_time为列：\"operation_type\":\"ADDITIONALCOLUMN,create_time\" - 以update_time为列：\"operation_type\":\"ADDITIONALCOLUMN,update_time\" - 以表达式为列：\"operation_type\":\"ADDITIONALCOLUMN,expression\" - 以serverName@database@table为列：\"operation_type\":\"ADDITIONALCOLUMN,server_database_table\"
    * value  附加列的值。约束： - 当操作类型仅“以默认值方式”，“以serverName@database@table为列”时，才支持输入对应字段类型的值。 - 当操作类型为“以表达式为列”时，该字段为固定值\"concat(__current_database, '@', __current_table)\"，不需要填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncType' => null,
        'primaryKeyForDataFiltering' => null,
        'indexForDataFiltering' => null,
        'name' => null,
        'type' => null,
        'primaryKeyForColumnFiltering' => null,
        'filtered' => null,
        'additional' => null,
        'operationType' => null,
        'value' => null
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
    * syncType  该列在实时同步场景下的类型。取值： - config：当该列作为数据过滤高级设置的关联列时，需要填写，同时如果该列是主建或优化查询所需的索引，则需要填写primary_key_for_data_filtering或index_for_data_filtering。（注意：是否同步该列到目标库由“filtered”属性控制，与库级、模式级、表级控制方式不同。）
    * primaryKeyForDataFiltering  该列是否在数据过滤高级设置场景下为主键，如果是主建则填该列列名，否则不填。
    * indexForDataFiltering  优化查询所需的索引，将会为缓存数据增加索引，不会影响源表，当该列作为数据过滤高级设置的关联索引时，需要填写，否则不填。
    * name  该列在目标库的名称（列名映射），当该列为“附加列”时须与数据库表级对象中列名保持一致。
    * type  该列字段的数据类型。 列过滤：填写源列字段的数据类型。 附加列：新填充的列指定字段的数据类型，根据不同操作类型来决定取值范围与约束。取值： - 以默认值方式，支持：int,long,varchar(256),datetime,timestamp。 - 以create_time为列，支持：long,datetime,timestamp。 - 以update_time为列，支持：long,datetime,timestamp。 - 以表达式为列，支持：varchar(256)，且列值仅为：concat(__current_database, '@', __current_table) - 以serverName@database@table为列，支持：varchar(256)。
    * primaryKeyForColumnFiltering  该列是否在列映射场景下为主键，如果是主建则填PRI，否则填空。
    * filtered  该列是否进列过滤，不能与附加列additional同时使用。取值： - true：表示同步该列。 - false：表示过滤该列不同步。
    * additional  该列是否为附加列，当该列为附加列时：name必须与表级对象中列名一致，并且不能与列过滤filtered同时使用。
    * operationType  操作类型，以特定的操作类型填充新加的列。取值： - 以默认值方式：\"operation_type\":\"ADDITIONALCOLUMN,default_value\" - 以create_time为列：\"operation_type\":\"ADDITIONALCOLUMN,create_time\" - 以update_time为列：\"operation_type\":\"ADDITIONALCOLUMN,update_time\" - 以表达式为列：\"operation_type\":\"ADDITIONALCOLUMN,expression\" - 以serverName@database@table为列：\"operation_type\":\"ADDITIONALCOLUMN,server_database_table\"
    * value  附加列的值。约束： - 当操作类型仅“以默认值方式”，“以serverName@database@table为列”时，才支持输入对应字段类型的值。 - 当操作类型为“以表达式为列”时，该字段为固定值\"concat(__current_database, '@', __current_table)\"，不需要填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncType' => 'sync_type',
            'primaryKeyForDataFiltering' => 'primary_key_for_data_filtering',
            'indexForDataFiltering' => 'index_for_data_filtering',
            'name' => 'name',
            'type' => 'type',
            'primaryKeyForColumnFiltering' => 'primary_key_for_column_filtering',
            'filtered' => 'filtered',
            'additional' => 'additional',
            'operationType' => 'operation_type',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncType  该列在实时同步场景下的类型。取值： - config：当该列作为数据过滤高级设置的关联列时，需要填写，同时如果该列是主建或优化查询所需的索引，则需要填写primary_key_for_data_filtering或index_for_data_filtering。（注意：是否同步该列到目标库由“filtered”属性控制，与库级、模式级、表级控制方式不同。）
    * primaryKeyForDataFiltering  该列是否在数据过滤高级设置场景下为主键，如果是主建则填该列列名，否则不填。
    * indexForDataFiltering  优化查询所需的索引，将会为缓存数据增加索引，不会影响源表，当该列作为数据过滤高级设置的关联索引时，需要填写，否则不填。
    * name  该列在目标库的名称（列名映射），当该列为“附加列”时须与数据库表级对象中列名保持一致。
    * type  该列字段的数据类型。 列过滤：填写源列字段的数据类型。 附加列：新填充的列指定字段的数据类型，根据不同操作类型来决定取值范围与约束。取值： - 以默认值方式，支持：int,long,varchar(256),datetime,timestamp。 - 以create_time为列，支持：long,datetime,timestamp。 - 以update_time为列，支持：long,datetime,timestamp。 - 以表达式为列，支持：varchar(256)，且列值仅为：concat(__current_database, '@', __current_table) - 以serverName@database@table为列，支持：varchar(256)。
    * primaryKeyForColumnFiltering  该列是否在列映射场景下为主键，如果是主建则填PRI，否则填空。
    * filtered  该列是否进列过滤，不能与附加列additional同时使用。取值： - true：表示同步该列。 - false：表示过滤该列不同步。
    * additional  该列是否为附加列，当该列为附加列时：name必须与表级对象中列名一致，并且不能与列过滤filtered同时使用。
    * operationType  操作类型，以特定的操作类型填充新加的列。取值： - 以默认值方式：\"operation_type\":\"ADDITIONALCOLUMN,default_value\" - 以create_time为列：\"operation_type\":\"ADDITIONALCOLUMN,create_time\" - 以update_time为列：\"operation_type\":\"ADDITIONALCOLUMN,update_time\" - 以表达式为列：\"operation_type\":\"ADDITIONALCOLUMN,expression\" - 以serverName@database@table为列：\"operation_type\":\"ADDITIONALCOLUMN,server_database_table\"
    * value  附加列的值。约束： - 当操作类型仅“以默认值方式”，“以serverName@database@table为列”时，才支持输入对应字段类型的值。 - 当操作类型为“以表达式为列”时，该字段为固定值\"concat(__current_database, '@', __current_table)\"，不需要填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'syncType' => 'setSyncType',
            'primaryKeyForDataFiltering' => 'setPrimaryKeyForDataFiltering',
            'indexForDataFiltering' => 'setIndexForDataFiltering',
            'name' => 'setName',
            'type' => 'setType',
            'primaryKeyForColumnFiltering' => 'setPrimaryKeyForColumnFiltering',
            'filtered' => 'setFiltered',
            'additional' => 'setAdditional',
            'operationType' => 'setOperationType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncType  该列在实时同步场景下的类型。取值： - config：当该列作为数据过滤高级设置的关联列时，需要填写，同时如果该列是主建或优化查询所需的索引，则需要填写primary_key_for_data_filtering或index_for_data_filtering。（注意：是否同步该列到目标库由“filtered”属性控制，与库级、模式级、表级控制方式不同。）
    * primaryKeyForDataFiltering  该列是否在数据过滤高级设置场景下为主键，如果是主建则填该列列名，否则不填。
    * indexForDataFiltering  优化查询所需的索引，将会为缓存数据增加索引，不会影响源表，当该列作为数据过滤高级设置的关联索引时，需要填写，否则不填。
    * name  该列在目标库的名称（列名映射），当该列为“附加列”时须与数据库表级对象中列名保持一致。
    * type  该列字段的数据类型。 列过滤：填写源列字段的数据类型。 附加列：新填充的列指定字段的数据类型，根据不同操作类型来决定取值范围与约束。取值： - 以默认值方式，支持：int,long,varchar(256),datetime,timestamp。 - 以create_time为列，支持：long,datetime,timestamp。 - 以update_time为列，支持：long,datetime,timestamp。 - 以表达式为列，支持：varchar(256)，且列值仅为：concat(__current_database, '@', __current_table) - 以serverName@database@table为列，支持：varchar(256)。
    * primaryKeyForColumnFiltering  该列是否在列映射场景下为主键，如果是主建则填PRI，否则填空。
    * filtered  该列是否进列过滤，不能与附加列additional同时使用。取值： - true：表示同步该列。 - false：表示过滤该列不同步。
    * additional  该列是否为附加列，当该列为附加列时：name必须与表级对象中列名一致，并且不能与列过滤filtered同时使用。
    * operationType  操作类型，以特定的操作类型填充新加的列。取值： - 以默认值方式：\"operation_type\":\"ADDITIONALCOLUMN,default_value\" - 以create_time为列：\"operation_type\":\"ADDITIONALCOLUMN,create_time\" - 以update_time为列：\"operation_type\":\"ADDITIONALCOLUMN,update_time\" - 以表达式为列：\"operation_type\":\"ADDITIONALCOLUMN,expression\" - 以serverName@database@table为列：\"operation_type\":\"ADDITIONALCOLUMN,server_database_table\"
    * value  附加列的值。约束： - 当操作类型仅“以默认值方式”，“以serverName@database@table为列”时，才支持输入对应字段类型的值。 - 当操作类型为“以表达式为列”时，该字段为固定值\"concat(__current_database, '@', __current_table)\"，不需要填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'syncType' => 'getSyncType',
            'primaryKeyForDataFiltering' => 'getPrimaryKeyForDataFiltering',
            'indexForDataFiltering' => 'getIndexForDataFiltering',
            'name' => 'getName',
            'type' => 'getType',
            'primaryKeyForColumnFiltering' => 'getPrimaryKeyForColumnFiltering',
            'filtered' => 'getFiltered',
            'additional' => 'getAdditional',
            'operationType' => 'getOperationType',
            'value' => 'getValue'
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
        $this->container['syncType'] = isset($data['syncType']) ? $data['syncType'] : null;
        $this->container['primaryKeyForDataFiltering'] = isset($data['primaryKeyForDataFiltering']) ? $data['primaryKeyForDataFiltering'] : null;
        $this->container['indexForDataFiltering'] = isset($data['indexForDataFiltering']) ? $data['indexForDataFiltering'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['primaryKeyForColumnFiltering'] = isset($data['primaryKeyForColumnFiltering']) ? $data['primaryKeyForColumnFiltering'] : null;
        $this->container['filtered'] = isset($data['filtered']) ? $data['filtered'] : null;
        $this->container['additional'] = isset($data['additional']) ? $data['additional'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets syncType
    *  该列在实时同步场景下的类型。取值： - config：当该列作为数据过滤高级设置的关联列时，需要填写，同时如果该列是主建或优化查询所需的索引，则需要填写primary_key_for_data_filtering或index_for_data_filtering。（注意：是否同步该列到目标库由“filtered”属性控制，与库级、模式级、表级控制方式不同。）
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
    * @param string|null $syncType 该列在实时同步场景下的类型。取值： - config：当该列作为数据过滤高级设置的关联列时，需要填写，同时如果该列是主建或优化查询所需的索引，则需要填写primary_key_for_data_filtering或index_for_data_filtering。（注意：是否同步该列到目标库由“filtered”属性控制，与库级、模式级、表级控制方式不同。）
    *
    * @return $this
    */
    public function setSyncType($syncType)
    {
        $this->container['syncType'] = $syncType;
        return $this;
    }

    /**
    * Gets primaryKeyForDataFiltering
    *  该列是否在数据过滤高级设置场景下为主键，如果是主建则填该列列名，否则不填。
    *
    * @return string|null
    */
    public function getPrimaryKeyForDataFiltering()
    {
        return $this->container['primaryKeyForDataFiltering'];
    }

    /**
    * Sets primaryKeyForDataFiltering
    *
    * @param string|null $primaryKeyForDataFiltering 该列是否在数据过滤高级设置场景下为主键，如果是主建则填该列列名，否则不填。
    *
    * @return $this
    */
    public function setPrimaryKeyForDataFiltering($primaryKeyForDataFiltering)
    {
        $this->container['primaryKeyForDataFiltering'] = $primaryKeyForDataFiltering;
        return $this;
    }

    /**
    * Gets indexForDataFiltering
    *  优化查询所需的索引，将会为缓存数据增加索引，不会影响源表，当该列作为数据过滤高级设置的关联索引时，需要填写，否则不填。
    *
    * @return string|null
    */
    public function getIndexForDataFiltering()
    {
        return $this->container['indexForDataFiltering'];
    }

    /**
    * Sets indexForDataFiltering
    *
    * @param string|null $indexForDataFiltering 优化查询所需的索引，将会为缓存数据增加索引，不会影响源表，当该列作为数据过滤高级设置的关联索引时，需要填写，否则不填。
    *
    * @return $this
    */
    public function setIndexForDataFiltering($indexForDataFiltering)
    {
        $this->container['indexForDataFiltering'] = $indexForDataFiltering;
        return $this;
    }

    /**
    * Gets name
    *  该列在目标库的名称（列名映射），当该列为“附加列”时须与数据库表级对象中列名保持一致。
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
    * @param string|null $name 该列在目标库的名称（列名映射），当该列为“附加列”时须与数据库表级对象中列名保持一致。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  该列字段的数据类型。 列过滤：填写源列字段的数据类型。 附加列：新填充的列指定字段的数据类型，根据不同操作类型来决定取值范围与约束。取值： - 以默认值方式，支持：int,long,varchar(256),datetime,timestamp。 - 以create_time为列，支持：long,datetime,timestamp。 - 以update_time为列，支持：long,datetime,timestamp。 - 以表达式为列，支持：varchar(256)，且列值仅为：concat(__current_database, '@', __current_table) - 以serverName@database@table为列，支持：varchar(256)。
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
    * @param string|null $type 该列字段的数据类型。 列过滤：填写源列字段的数据类型。 附加列：新填充的列指定字段的数据类型，根据不同操作类型来决定取值范围与约束。取值： - 以默认值方式，支持：int,long,varchar(256),datetime,timestamp。 - 以create_time为列，支持：long,datetime,timestamp。 - 以update_time为列，支持：long,datetime,timestamp。 - 以表达式为列，支持：varchar(256)，且列值仅为：concat(__current_database, '@', __current_table) - 以serverName@database@table为列，支持：varchar(256)。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets primaryKeyForColumnFiltering
    *  该列是否在列映射场景下为主键，如果是主建则填PRI，否则填空。
    *
    * @return string|null
    */
    public function getPrimaryKeyForColumnFiltering()
    {
        return $this->container['primaryKeyForColumnFiltering'];
    }

    /**
    * Sets primaryKeyForColumnFiltering
    *
    * @param string|null $primaryKeyForColumnFiltering 该列是否在列映射场景下为主键，如果是主建则填PRI，否则填空。
    *
    * @return $this
    */
    public function setPrimaryKeyForColumnFiltering($primaryKeyForColumnFiltering)
    {
        $this->container['primaryKeyForColumnFiltering'] = $primaryKeyForColumnFiltering;
        return $this;
    }

    /**
    * Gets filtered
    *  该列是否进列过滤，不能与附加列additional同时使用。取值： - true：表示同步该列。 - false：表示过滤该列不同步。
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
    * @param bool|null $filtered 该列是否进列过滤，不能与附加列additional同时使用。取值： - true：表示同步该列。 - false：表示过滤该列不同步。
    *
    * @return $this
    */
    public function setFiltered($filtered)
    {
        $this->container['filtered'] = $filtered;
        return $this;
    }

    /**
    * Gets additional
    *  该列是否为附加列，当该列为附加列时：name必须与表级对象中列名一致，并且不能与列过滤filtered同时使用。
    *
    * @return bool|null
    */
    public function getAdditional()
    {
        return $this->container['additional'];
    }

    /**
    * Sets additional
    *
    * @param bool|null $additional 该列是否为附加列，当该列为附加列时：name必须与表级对象中列名一致，并且不能与列过滤filtered同时使用。
    *
    * @return $this
    */
    public function setAdditional($additional)
    {
        $this->container['additional'] = $additional;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型，以特定的操作类型填充新加的列。取值： - 以默认值方式：\"operation_type\":\"ADDITIONALCOLUMN,default_value\" - 以create_time为列：\"operation_type\":\"ADDITIONALCOLUMN,create_time\" - 以update_time为列：\"operation_type\":\"ADDITIONALCOLUMN,update_time\" - 以表达式为列：\"operation_type\":\"ADDITIONALCOLUMN,expression\" - 以serverName@database@table为列：\"operation_type\":\"ADDITIONALCOLUMN,server_database_table\"
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 操作类型，以特定的操作类型填充新加的列。取值： - 以默认值方式：\"operation_type\":\"ADDITIONALCOLUMN,default_value\" - 以create_time为列：\"operation_type\":\"ADDITIONALCOLUMN,create_time\" - 以update_time为列：\"operation_type\":\"ADDITIONALCOLUMN,update_time\" - 以表达式为列：\"operation_type\":\"ADDITIONALCOLUMN,expression\" - 以serverName@database@table为列：\"operation_type\":\"ADDITIONALCOLUMN,server_database_table\"
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets value
    *  附加列的值。约束： - 当操作类型仅“以默认值方式”，“以serverName@database@table为列”时，才支持输入对应字段类型的值。 - 当操作类型为“以表达式为列”时，该字段为固定值\"concat(__current_database, '@', __current_table)\"，不需要填写。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 附加列的值。约束： - 当操作类型仅“以默认值方式”，“以serverName@database@table为列”时，才支持输入对应字段类型的值。 - 当操作类型为“以表达式为列”时，该字段为固定值\"concat(__current_database, '@', __current_table)\"，不需要填写。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

