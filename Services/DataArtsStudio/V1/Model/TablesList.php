<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TablesList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TablesList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  表名称
    * tableId  表id
    * tableNameCn  表的中文名称
    * columns  表中字段
    * dwId  数据连接id
    * dwName  数据连接名称
    * dwType  数据连接类型
    * databaseName  数据库名称
    * schemaName  schema名称
    * lifeCycle  表的生命周期
    * description  表的描述
    * userId  用户id
    * userName  用户名称
    * projectId  数据连接id
    * createTime  表的创建时间
    * tableSize  表的大小
    * totalCount  当前查询条件下表的总记录数
    * isValid  表是否合规
    * extraSetting  表的额外设置
    * partitioned  是否进行数据分区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'tableId' => 'string',
            'tableNameCn' => 'string',
            'columns' => 'string',
            'dwId' => 'string',
            'dwName' => 'string',
            'dwType' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'lifeCycle' => 'int',
            'description' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'projectId' => 'string',
            'createTime' => 'string',
            'tableSize' => 'int',
            'totalCount' => 'int',
            'isValid' => 'int',
            'extraSetting' => 'string',
            'partitioned' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  表名称
    * tableId  表id
    * tableNameCn  表的中文名称
    * columns  表中字段
    * dwId  数据连接id
    * dwName  数据连接名称
    * dwType  数据连接类型
    * databaseName  数据库名称
    * schemaName  schema名称
    * lifeCycle  表的生命周期
    * description  表的描述
    * userId  用户id
    * userName  用户名称
    * projectId  数据连接id
    * createTime  表的创建时间
    * tableSize  表的大小
    * totalCount  当前查询条件下表的总记录数
    * isValid  表是否合规
    * extraSetting  表的额外设置
    * partitioned  是否进行数据分区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'tableId' => null,
        'tableNameCn' => null,
        'columns' => null,
        'dwId' => null,
        'dwName' => null,
        'dwType' => null,
        'databaseName' => null,
        'schemaName' => null,
        'lifeCycle' => null,
        'description' => null,
        'userId' => null,
        'userName' => null,
        'projectId' => null,
        'createTime' => null,
        'tableSize' => null,
        'totalCount' => null,
        'isValid' => null,
        'extraSetting' => null,
        'partitioned' => null
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
    * tableName  表名称
    * tableId  表id
    * tableNameCn  表的中文名称
    * columns  表中字段
    * dwId  数据连接id
    * dwName  数据连接名称
    * dwType  数据连接类型
    * databaseName  数据库名称
    * schemaName  schema名称
    * lifeCycle  表的生命周期
    * description  表的描述
    * userId  用户id
    * userName  用户名称
    * projectId  数据连接id
    * createTime  表的创建时间
    * tableSize  表的大小
    * totalCount  当前查询条件下表的总记录数
    * isValid  表是否合规
    * extraSetting  表的额外设置
    * partitioned  是否进行数据分区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'tableId' => 'table_id',
            'tableNameCn' => 'table_name_cn',
            'columns' => 'columns',
            'dwId' => 'dw_id',
            'dwName' => 'dw_name',
            'dwType' => 'dw_type',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'lifeCycle' => 'life_cycle',
            'description' => 'description',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'projectId' => 'project_id',
            'createTime' => 'create_time',
            'tableSize' => 'table_size',
            'totalCount' => 'total_count',
            'isValid' => 'is_valid',
            'extraSetting' => 'extra_setting',
            'partitioned' => 'partitioned'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  表名称
    * tableId  表id
    * tableNameCn  表的中文名称
    * columns  表中字段
    * dwId  数据连接id
    * dwName  数据连接名称
    * dwType  数据连接类型
    * databaseName  数据库名称
    * schemaName  schema名称
    * lifeCycle  表的生命周期
    * description  表的描述
    * userId  用户id
    * userName  用户名称
    * projectId  数据连接id
    * createTime  表的创建时间
    * tableSize  表的大小
    * totalCount  当前查询条件下表的总记录数
    * isValid  表是否合规
    * extraSetting  表的额外设置
    * partitioned  是否进行数据分区
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'tableId' => 'setTableId',
            'tableNameCn' => 'setTableNameCn',
            'columns' => 'setColumns',
            'dwId' => 'setDwId',
            'dwName' => 'setDwName',
            'dwType' => 'setDwType',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'lifeCycle' => 'setLifeCycle',
            'description' => 'setDescription',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'projectId' => 'setProjectId',
            'createTime' => 'setCreateTime',
            'tableSize' => 'setTableSize',
            'totalCount' => 'setTotalCount',
            'isValid' => 'setIsValid',
            'extraSetting' => 'setExtraSetting',
            'partitioned' => 'setPartitioned'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  表名称
    * tableId  表id
    * tableNameCn  表的中文名称
    * columns  表中字段
    * dwId  数据连接id
    * dwName  数据连接名称
    * dwType  数据连接类型
    * databaseName  数据库名称
    * schemaName  schema名称
    * lifeCycle  表的生命周期
    * description  表的描述
    * userId  用户id
    * userName  用户名称
    * projectId  数据连接id
    * createTime  表的创建时间
    * tableSize  表的大小
    * totalCount  当前查询条件下表的总记录数
    * isValid  表是否合规
    * extraSetting  表的额外设置
    * partitioned  是否进行数据分区
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'tableId' => 'getTableId',
            'tableNameCn' => 'getTableNameCn',
            'columns' => 'getColumns',
            'dwId' => 'getDwId',
            'dwName' => 'getDwName',
            'dwType' => 'getDwType',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'lifeCycle' => 'getLifeCycle',
            'description' => 'getDescription',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'projectId' => 'getProjectId',
            'createTime' => 'getCreateTime',
            'tableSize' => 'getTableSize',
            'totalCount' => 'getTotalCount',
            'isValid' => 'getIsValid',
            'extraSetting' => 'getExtraSetting',
            'partitioned' => 'getPartitioned'
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
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['tableNameCn'] = isset($data['tableNameCn']) ? $data['tableNameCn'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['lifeCycle'] = isset($data['lifeCycle']) ? $data['lifeCycle'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['tableSize'] = isset($data['tableSize']) ? $data['tableSize'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['extraSetting'] = isset($data['extraSetting']) ? $data['extraSetting'] : null;
        $this->container['partitioned'] = isset($data['partitioned']) ? $data['partitioned'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableNameCn']) && (mb_strlen($this->container['tableNameCn']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableNameCn', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableNameCn']) && (mb_strlen($this->container['tableNameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableNameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columns']) && (mb_strlen($this->container['columns']) > 128)) {
                $invalidProperties[] = "invalid value for 'columns', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columns']) && (mb_strlen($this->container['columns']) < 1)) {
                $invalidProperties[] = "invalid value for 'columns', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dwName']) && (mb_strlen($this->container['dwName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwName']) && (mb_strlen($this->container['dwName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dwType']) && (mb_strlen($this->container['dwType']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwType']) && (mb_strlen($this->container['dwType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 128)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lifeCycle']) && ($this->container['lifeCycle'] > 1)) {
                $invalidProperties[] = "invalid value for 'lifeCycle', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['lifeCycle']) && ($this->container['lifeCycle'] < 0)) {
                $invalidProperties[] = "invalid value for 'lifeCycle', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 128)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableSize']) && ($this->container['tableSize'] > 4096)) {
                $invalidProperties[] = "invalid value for 'tableSize', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['tableSize']) && ($this->container['tableSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'tableSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isValid']) && ($this->container['isValid'] > 1)) {
                $invalidProperties[] = "invalid value for 'isValid', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isValid']) && ($this->container['isValid'] < 0)) {
                $invalidProperties[] = "invalid value for 'isValid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['extraSetting']) && (mb_strlen($this->container['extraSetting']) > 128)) {
                $invalidProperties[] = "invalid value for 'extraSetting', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['extraSetting']) && (mb_strlen($this->container['extraSetting']) < 1)) {
                $invalidProperties[] = "invalid value for 'extraSetting', the character length must be bigger than or equal to 1.";
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
    *  表名称
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
    * @param string|null $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tableId
    *  表id
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表id
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets tableNameCn
    *  表的中文名称
    *
    * @return string|null
    */
    public function getTableNameCn()
    {
        return $this->container['tableNameCn'];
    }

    /**
    * Sets tableNameCn
    *
    * @param string|null $tableNameCn 表的中文名称
    *
    * @return $this
    */
    public function setTableNameCn($tableNameCn)
    {
        $this->container['tableNameCn'] = $tableNameCn;
        return $this;
    }

    /**
    * Gets columns
    *  表中字段
    *
    * @return string|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param string|null $columns 表中字段
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets dwId
    *  数据连接id
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接id
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets dwName
    *  数据连接名称
    *
    * @return string|null
    */
    public function getDwName()
    {
        return $this->container['dwName'];
    }

    /**
    * Sets dwName
    *
    * @param string|null $dwName 数据连接名称
    *
    * @return $this
    */
    public function setDwName($dwName)
    {
        $this->container['dwName'] = $dwName;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称
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
    * @param string|null $databaseName 数据库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名称
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
    * @param string|null $schemaName schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets lifeCycle
    *  表的生命周期
    *
    * @return int|null
    */
    public function getLifeCycle()
    {
        return $this->container['lifeCycle'];
    }

    /**
    * Sets lifeCycle
    *
    * @param int|null $lifeCycle 表的生命周期
    *
    * @return $this
    */
    public function setLifeCycle($lifeCycle)
    {
        $this->container['lifeCycle'] = $lifeCycle;
        return $this;
    }

    /**
    * Gets description
    *  表的描述
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
    * @param string|null $description 表的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets projectId
    *  数据连接id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 数据连接id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createTime
    *  表的创建时间
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
    * @param string|null $createTime 表的创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets tableSize
    *  表的大小
    *
    * @return int|null
    */
    public function getTableSize()
    {
        return $this->container['tableSize'];
    }

    /**
    * Sets tableSize
    *
    * @param int|null $tableSize 表的大小
    *
    * @return $this
    */
    public function setTableSize($tableSize)
    {
        $this->container['tableSize'] = $tableSize;
        return $this;
    }

    /**
    * Gets totalCount
    *  当前查询条件下表的总记录数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 当前查询条件下表的总记录数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets isValid
    *  表是否合规
    *
    * @return int|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param int|null $isValid 表是否合规
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets extraSetting
    *  表的额外设置
    *
    * @return string|null
    */
    public function getExtraSetting()
    {
        return $this->container['extraSetting'];
    }

    /**
    * Sets extraSetting
    *
    * @param string|null $extraSetting 表的额外设置
    *
    * @return $this
    */
    public function setExtraSetting($extraSetting)
    {
        $this->container['extraSetting'] = $extraSetting;
        return $this;
    }

    /**
    * Gets partitioned
    *  是否进行数据分区
    *
    * @return bool|null
    */
    public function getPartitioned()
    {
        return $this->container['partitioned'];
    }

    /**
    * Sets partitioned
    *
    * @param bool|null $partitioned 是否进行数据分区
    *
    * @return $this
    */
    public function setPartitioned($partitioned)
    {
        $this->container['partitioned'] = $partitioned;
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

