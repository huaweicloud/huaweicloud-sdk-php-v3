<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableVolumeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableVolumeResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableSize  **参数解释**: 表的大小。 **取值范围**: 不涉及。
    * id  **参数解释**: 表ID。 **取值范围**: 不涉及。
    * tableName  **参数解释**: 表名称。 **取值范围**: 不涉及。
    * tableOwner  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * isPartType  **参数解释**: 表或者索引是否具有分区表的性质。 **取值范围**: 不涉及。
    * isHashClusterKey  **参数解释**: 是否包含hash分区列信息。 **取值范围**: 不涉及。
    * tuples  **参数解释**: 表中行的数目。 **取值范围**: 不涉及。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * averageSize  **参数解释**: 表大小平均值(totalsize/DN个数，该值为平均分布的理想情况下，表在各DN占用空间大小)。 **取值范围**: 不涉及。
    * maxRatio  **参数解释**: 单DN表大小最大值占比（表在各DN占用空间的最大值/totalsize）。 **取值范围**: 不涉及。
    * minRatio  **参数解释**: 单DN表大小最小值占比（表在各DN占用空间的最小值/totalsize）。 **取值范围**: 不涉及。
    * skewSize  **参数解释**: 表分布倾斜值（单DN表大小最大值 - 单DN表大小最小值）。 **取值范围**: 不涉及。
    * skewRatio  **参数解释**: 表分布倾斜率（skewsize/totalsize）。 **取值范围**: 不涉及。
    * skewStddev  **参数解释**: 表分布标准方差（在表大小一定的情况下，该值越大表明表的整体分布情况越倾斜）。。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableSize' => 'string',
            'id' => 'string',
            'tableName' => 'string',
            'tableOwner' => 'string',
            'schemaName' => 'string',
            'databaseName' => 'string',
            'isPartType' => 'bool',
            'isHashClusterKey' => 'bool',
            'tuples' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'averageSize' => 'string',
            'maxRatio' => 'string',
            'minRatio' => 'string',
            'skewSize' => 'string',
            'skewRatio' => 'string',
            'skewStddev' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableSize  **参数解释**: 表的大小。 **取值范围**: 不涉及。
    * id  **参数解释**: 表ID。 **取值范围**: 不涉及。
    * tableName  **参数解释**: 表名称。 **取值范围**: 不涉及。
    * tableOwner  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * isPartType  **参数解释**: 表或者索引是否具有分区表的性质。 **取值范围**: 不涉及。
    * isHashClusterKey  **参数解释**: 是否包含hash分区列信息。 **取值范围**: 不涉及。
    * tuples  **参数解释**: 表中行的数目。 **取值范围**: 不涉及。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * averageSize  **参数解释**: 表大小平均值(totalsize/DN个数，该值为平均分布的理想情况下，表在各DN占用空间大小)。 **取值范围**: 不涉及。
    * maxRatio  **参数解释**: 单DN表大小最大值占比（表在各DN占用空间的最大值/totalsize）。 **取值范围**: 不涉及。
    * minRatio  **参数解释**: 单DN表大小最小值占比（表在各DN占用空间的最小值/totalsize）。 **取值范围**: 不涉及。
    * skewSize  **参数解释**: 表分布倾斜值（单DN表大小最大值 - 单DN表大小最小值）。 **取值范围**: 不涉及。
    * skewRatio  **参数解释**: 表分布倾斜率（skewsize/totalsize）。 **取值范围**: 不涉及。
    * skewStddev  **参数解释**: 表分布标准方差（在表大小一定的情况下，该值越大表明表的整体分布情况越倾斜）。。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableSize' => null,
        'id' => null,
        'tableName' => null,
        'tableOwner' => null,
        'schemaName' => null,
        'databaseName' => null,
        'isPartType' => null,
        'isHashClusterKey' => null,
        'tuples' => null,
        'createTime' => null,
        'updateTime' => null,
        'averageSize' => null,
        'maxRatio' => null,
        'minRatio' => null,
        'skewSize' => null,
        'skewRatio' => null,
        'skewStddev' => null
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
    * tableSize  **参数解释**: 表的大小。 **取值范围**: 不涉及。
    * id  **参数解释**: 表ID。 **取值范围**: 不涉及。
    * tableName  **参数解释**: 表名称。 **取值范围**: 不涉及。
    * tableOwner  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * isPartType  **参数解释**: 表或者索引是否具有分区表的性质。 **取值范围**: 不涉及。
    * isHashClusterKey  **参数解释**: 是否包含hash分区列信息。 **取值范围**: 不涉及。
    * tuples  **参数解释**: 表中行的数目。 **取值范围**: 不涉及。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * averageSize  **参数解释**: 表大小平均值(totalsize/DN个数，该值为平均分布的理想情况下，表在各DN占用空间大小)。 **取值范围**: 不涉及。
    * maxRatio  **参数解释**: 单DN表大小最大值占比（表在各DN占用空间的最大值/totalsize）。 **取值范围**: 不涉及。
    * minRatio  **参数解释**: 单DN表大小最小值占比（表在各DN占用空间的最小值/totalsize）。 **取值范围**: 不涉及。
    * skewSize  **参数解释**: 表分布倾斜值（单DN表大小最大值 - 单DN表大小最小值）。 **取值范围**: 不涉及。
    * skewRatio  **参数解释**: 表分布倾斜率（skewsize/totalsize）。 **取值范围**: 不涉及。
    * skewStddev  **参数解释**: 表分布标准方差（在表大小一定的情况下，该值越大表明表的整体分布情况越倾斜）。。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableSize' => 'table_size',
            'id' => 'id',
            'tableName' => 'table_name',
            'tableOwner' => 'table_owner',
            'schemaName' => 'schema_name',
            'databaseName' => 'database_name',
            'isPartType' => 'is_part_type',
            'isHashClusterKey' => 'is_hash_cluster_key',
            'tuples' => 'tuples',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'averageSize' => 'average_size',
            'maxRatio' => 'max_ratio',
            'minRatio' => 'min_ratio',
            'skewSize' => 'skew_size',
            'skewRatio' => 'skew_ratio',
            'skewStddev' => 'skew_stddev'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableSize  **参数解释**: 表的大小。 **取值范围**: 不涉及。
    * id  **参数解释**: 表ID。 **取值范围**: 不涉及。
    * tableName  **参数解释**: 表名称。 **取值范围**: 不涉及。
    * tableOwner  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * isPartType  **参数解释**: 表或者索引是否具有分区表的性质。 **取值范围**: 不涉及。
    * isHashClusterKey  **参数解释**: 是否包含hash分区列信息。 **取值范围**: 不涉及。
    * tuples  **参数解释**: 表中行的数目。 **取值范围**: 不涉及。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * averageSize  **参数解释**: 表大小平均值(totalsize/DN个数，该值为平均分布的理想情况下，表在各DN占用空间大小)。 **取值范围**: 不涉及。
    * maxRatio  **参数解释**: 单DN表大小最大值占比（表在各DN占用空间的最大值/totalsize）。 **取值范围**: 不涉及。
    * minRatio  **参数解释**: 单DN表大小最小值占比（表在各DN占用空间的最小值/totalsize）。 **取值范围**: 不涉及。
    * skewSize  **参数解释**: 表分布倾斜值（单DN表大小最大值 - 单DN表大小最小值）。 **取值范围**: 不涉及。
    * skewRatio  **参数解释**: 表分布倾斜率（skewsize/totalsize）。 **取值范围**: 不涉及。
    * skewStddev  **参数解释**: 表分布标准方差（在表大小一定的情况下，该值越大表明表的整体分布情况越倾斜）。。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'tableSize' => 'setTableSize',
            'id' => 'setId',
            'tableName' => 'setTableName',
            'tableOwner' => 'setTableOwner',
            'schemaName' => 'setSchemaName',
            'databaseName' => 'setDatabaseName',
            'isPartType' => 'setIsPartType',
            'isHashClusterKey' => 'setIsHashClusterKey',
            'tuples' => 'setTuples',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'averageSize' => 'setAverageSize',
            'maxRatio' => 'setMaxRatio',
            'minRatio' => 'setMinRatio',
            'skewSize' => 'setSkewSize',
            'skewRatio' => 'setSkewRatio',
            'skewStddev' => 'setSkewStddev'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableSize  **参数解释**: 表的大小。 **取值范围**: 不涉及。
    * id  **参数解释**: 表ID。 **取值范围**: 不涉及。
    * tableName  **参数解释**: 表名称。 **取值范围**: 不涉及。
    * tableOwner  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * isPartType  **参数解释**: 表或者索引是否具有分区表的性质。 **取值范围**: 不涉及。
    * isHashClusterKey  **参数解释**: 是否包含hash分区列信息。 **取值范围**: 不涉及。
    * tuples  **参数解释**: 表中行的数目。 **取值范围**: 不涉及。
    * createTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updateTime  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    * averageSize  **参数解释**: 表大小平均值(totalsize/DN个数，该值为平均分布的理想情况下，表在各DN占用空间大小)。 **取值范围**: 不涉及。
    * maxRatio  **参数解释**: 单DN表大小最大值占比（表在各DN占用空间的最大值/totalsize）。 **取值范围**: 不涉及。
    * minRatio  **参数解释**: 单DN表大小最小值占比（表在各DN占用空间的最小值/totalsize）。 **取值范围**: 不涉及。
    * skewSize  **参数解释**: 表分布倾斜值（单DN表大小最大值 - 单DN表大小最小值）。 **取值范围**: 不涉及。
    * skewRatio  **参数解释**: 表分布倾斜率（skewsize/totalsize）。 **取值范围**: 不涉及。
    * skewStddev  **参数解释**: 表分布标准方差（在表大小一定的情况下，该值越大表明表的整体分布情况越倾斜）。。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'tableSize' => 'getTableSize',
            'id' => 'getId',
            'tableName' => 'getTableName',
            'tableOwner' => 'getTableOwner',
            'schemaName' => 'getSchemaName',
            'databaseName' => 'getDatabaseName',
            'isPartType' => 'getIsPartType',
            'isHashClusterKey' => 'getIsHashClusterKey',
            'tuples' => 'getTuples',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'averageSize' => 'getAverageSize',
            'maxRatio' => 'getMaxRatio',
            'minRatio' => 'getMinRatio',
            'skewSize' => 'getSkewSize',
            'skewRatio' => 'getSkewRatio',
            'skewStddev' => 'getSkewStddev'
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
        $this->container['tableSize'] = isset($data['tableSize']) ? $data['tableSize'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tableOwner'] = isset($data['tableOwner']) ? $data['tableOwner'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['isPartType'] = isset($data['isPartType']) ? $data['isPartType'] : null;
        $this->container['isHashClusterKey'] = isset($data['isHashClusterKey']) ? $data['isHashClusterKey'] : null;
        $this->container['tuples'] = isset($data['tuples']) ? $data['tuples'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['averageSize'] = isset($data['averageSize']) ? $data['averageSize'] : null;
        $this->container['maxRatio'] = isset($data['maxRatio']) ? $data['maxRatio'] : null;
        $this->container['minRatio'] = isset($data['minRatio']) ? $data['minRatio'] : null;
        $this->container['skewSize'] = isset($data['skewSize']) ? $data['skewSize'] : null;
        $this->container['skewRatio'] = isset($data['skewRatio']) ? $data['skewRatio'] : null;
        $this->container['skewStddev'] = isset($data['skewStddev']) ? $data['skewStddev'] : null;
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
    * Gets tableSize
    *  **参数解释**: 表的大小。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTableSize()
    {
        return $this->container['tableSize'];
    }

    /**
    * Sets tableSize
    *
    * @param string|null $tableSize **参数解释**: 表的大小。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTableSize($tableSize)
    {
        $this->container['tableSize'] = $tableSize;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**: 表ID。 **取值范围**: 不涉及。
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
    * @param string|null $id **参数解释**: 表ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数解释**: 表名称。 **取值范围**: 不涉及。
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
    * @param string|null $tableName **参数解释**: 表名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tableOwner
    *  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTableOwner()
    {
        return $this->container['tableOwner'];
    }

    /**
    * Sets tableOwner
    *
    * @param string|null $tableOwner **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTableOwner($tableOwner)
    {
        $this->container['tableOwner'] = $tableOwner;
        return $this;
    }

    /**
    * Gets schemaName
    *  **参数解释**: schema名称。 **取值范围**: 不涉及。
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
    * @param string|null $schemaName **参数解释**: schema名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets databaseName
    *  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
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
    * @param string|null $databaseName **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets isPartType
    *  **参数解释**: 表或者索引是否具有分区表的性质。 **取值范围**: 不涉及。
    *
    * @return bool|null
    */
    public function getIsPartType()
    {
        return $this->container['isPartType'];
    }

    /**
    * Sets isPartType
    *
    * @param bool|null $isPartType **参数解释**: 表或者索引是否具有分区表的性质。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIsPartType($isPartType)
    {
        $this->container['isPartType'] = $isPartType;
        return $this;
    }

    /**
    * Gets isHashClusterKey
    *  **参数解释**: 是否包含hash分区列信息。 **取值范围**: 不涉及。
    *
    * @return bool|null
    */
    public function getIsHashClusterKey()
    {
        return $this->container['isHashClusterKey'];
    }

    /**
    * Sets isHashClusterKey
    *
    * @param bool|null $isHashClusterKey **参数解释**: 是否包含hash分区列信息。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIsHashClusterKey($isHashClusterKey)
    {
        $this->container['isHashClusterKey'] = $isHashClusterKey;
        return $this;
    }

    /**
    * Gets tuples
    *  **参数解释**: 表中行的数目。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTuples()
    {
        return $this->container['tuples'];
    }

    /**
    * Sets tuples
    *
    * @param string|null $tuples **参数解释**: 表中行的数目。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTuples($tuples)
    {
        $this->container['tuples'] = $tuples;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释**: 创建时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**: 修改时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime **参数解释**: 修改时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets averageSize
    *  **参数解释**: 表大小平均值(totalsize/DN个数，该值为平均分布的理想情况下，表在各DN占用空间大小)。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getAverageSize()
    {
        return $this->container['averageSize'];
    }

    /**
    * Sets averageSize
    *
    * @param string|null $averageSize **参数解释**: 表大小平均值(totalsize/DN个数，该值为平均分布的理想情况下，表在各DN占用空间大小)。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAverageSize($averageSize)
    {
        $this->container['averageSize'] = $averageSize;
        return $this;
    }

    /**
    * Gets maxRatio
    *  **参数解释**: 单DN表大小最大值占比（表在各DN占用空间的最大值/totalsize）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getMaxRatio()
    {
        return $this->container['maxRatio'];
    }

    /**
    * Sets maxRatio
    *
    * @param string|null $maxRatio **参数解释**: 单DN表大小最大值占比（表在各DN占用空间的最大值/totalsize）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMaxRatio($maxRatio)
    {
        $this->container['maxRatio'] = $maxRatio;
        return $this;
    }

    /**
    * Gets minRatio
    *  **参数解释**: 单DN表大小最小值占比（表在各DN占用空间的最小值/totalsize）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getMinRatio()
    {
        return $this->container['minRatio'];
    }

    /**
    * Sets minRatio
    *
    * @param string|null $minRatio **参数解释**: 单DN表大小最小值占比（表在各DN占用空间的最小值/totalsize）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMinRatio($minRatio)
    {
        $this->container['minRatio'] = $minRatio;
        return $this;
    }

    /**
    * Gets skewSize
    *  **参数解释**: 表分布倾斜值（单DN表大小最大值 - 单DN表大小最小值）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSkewSize()
    {
        return $this->container['skewSize'];
    }

    /**
    * Sets skewSize
    *
    * @param string|null $skewSize **参数解释**: 表分布倾斜值（单DN表大小最大值 - 单DN表大小最小值）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSkewSize($skewSize)
    {
        $this->container['skewSize'] = $skewSize;
        return $this;
    }

    /**
    * Gets skewRatio
    *  **参数解释**: 表分布倾斜率（skewsize/totalsize）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSkewRatio()
    {
        return $this->container['skewRatio'];
    }

    /**
    * Sets skewRatio
    *
    * @param string|null $skewRatio **参数解释**: 表分布倾斜率（skewsize/totalsize）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSkewRatio($skewRatio)
    {
        $this->container['skewRatio'] = $skewRatio;
        return $this;
    }

    /**
    * Gets skewStddev
    *  **参数解释**: 表分布标准方差（在表大小一定的情况下，该值越大表明表的整体分布情况越倾斜）。。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSkewStddev()
    {
        return $this->container['skewStddev'];
    }

    /**
    * Sets skewStddev
    *
    * @param string|null $skewStddev **参数解释**: 表分布标准方差（在表大小一定的情况下，该值越大表明表的整体分布情况越倾斜）。。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSkewStddev($skewStddev)
    {
        $this->container['skewStddev'] = $skewStddev;
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

