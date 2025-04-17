<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  脚本名称，只能包含五种字符：英文字母、数字、中文、中划线和点号，且长度小于等于128个字符。脚本名称不能重复。
    * type  脚本类型 - FlinkSQL: Flink SQL - DLISQL：DLI SQL - SparkSQL: MRS Spark SQL - HiveSQL: MRS Hive SQL - DWSSQL: DWS SQL - RDSSQL: RDS SQL - Shell: Shell 脚本 - PYTHON：Python 脚本 - PRESTO: MRS Presto SQL - ClickHouseSQL: MRS ClickHouse SQL - HetuEngineSQL: MRS HetuEngine SQL - ImpalaSQL: MRS Impala SQL - SparkPython: MRS Spark Python脚本
    * directory  脚本所在目录路径 通过DataArts Studio管理控制台 > 数据开发，左侧列表选择“数据开发 > 脚本开发”。在脚本的目录树上，可以查看到当前已经创建的目录，默认在根目录/。
    * id  脚本id。
    * createUser  脚本创建人
    * connectionName  脚本关联的连接名称。当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、Shell、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，这个参数是必选的。用户可以通过查询连接列表（待下线）接口获取当前系统中已经存在的连接。默认值为空。
    * database  执行SQL语句所关联的数据库，当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，才支持此参数。 - type为DLISQL时，可以通过查看所有数据库接口获取数据库信息。 - type为其他类型的时候，需要通过JDBC方式连上集群，查询数据库信息。默认值为空。
    * queueName  DLI资源队列名称，当type参数值为DLISQL时，才支持此参数。可以通过查询队列列表接口获取队列信息。默认值为空。
    * configuration  用户定义适用于此作业的配置参数，当type参数值为DLISQL时存在。当前支持的配置项列表请参考DLI的conf参数说明。默认值为空。
    * description  描述，长度不能超过255个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'directory' => 'string',
            'id' => 'string',
            'createUser' => 'string',
            'connectionName' => 'string',
            'database' => 'string',
            'queueName' => 'string',
            'configuration' => 'object',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  脚本名称，只能包含五种字符：英文字母、数字、中文、中划线和点号，且长度小于等于128个字符。脚本名称不能重复。
    * type  脚本类型 - FlinkSQL: Flink SQL - DLISQL：DLI SQL - SparkSQL: MRS Spark SQL - HiveSQL: MRS Hive SQL - DWSSQL: DWS SQL - RDSSQL: RDS SQL - Shell: Shell 脚本 - PYTHON：Python 脚本 - PRESTO: MRS Presto SQL - ClickHouseSQL: MRS ClickHouse SQL - HetuEngineSQL: MRS HetuEngine SQL - ImpalaSQL: MRS Impala SQL - SparkPython: MRS Spark Python脚本
    * directory  脚本所在目录路径 通过DataArts Studio管理控制台 > 数据开发，左侧列表选择“数据开发 > 脚本开发”。在脚本的目录树上，可以查看到当前已经创建的目录，默认在根目录/。
    * id  脚本id。
    * createUser  脚本创建人
    * connectionName  脚本关联的连接名称。当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、Shell、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，这个参数是必选的。用户可以通过查询连接列表（待下线）接口获取当前系统中已经存在的连接。默认值为空。
    * database  执行SQL语句所关联的数据库，当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，才支持此参数。 - type为DLISQL时，可以通过查看所有数据库接口获取数据库信息。 - type为其他类型的时候，需要通过JDBC方式连上集群，查询数据库信息。默认值为空。
    * queueName  DLI资源队列名称，当type参数值为DLISQL时，才支持此参数。可以通过查询队列列表接口获取队列信息。默认值为空。
    * configuration  用户定义适用于此作业的配置参数，当type参数值为DLISQL时存在。当前支持的配置项列表请参考DLI的conf参数说明。默认值为空。
    * description  描述，长度不能超过255个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'directory' => null,
        'id' => null,
        'createUser' => null,
        'connectionName' => null,
        'database' => null,
        'queueName' => null,
        'configuration' => null,
        'description' => null
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
    * name  脚本名称，只能包含五种字符：英文字母、数字、中文、中划线和点号，且长度小于等于128个字符。脚本名称不能重复。
    * type  脚本类型 - FlinkSQL: Flink SQL - DLISQL：DLI SQL - SparkSQL: MRS Spark SQL - HiveSQL: MRS Hive SQL - DWSSQL: DWS SQL - RDSSQL: RDS SQL - Shell: Shell 脚本 - PYTHON：Python 脚本 - PRESTO: MRS Presto SQL - ClickHouseSQL: MRS ClickHouse SQL - HetuEngineSQL: MRS HetuEngine SQL - ImpalaSQL: MRS Impala SQL - SparkPython: MRS Spark Python脚本
    * directory  脚本所在目录路径 通过DataArts Studio管理控制台 > 数据开发，左侧列表选择“数据开发 > 脚本开发”。在脚本的目录树上，可以查看到当前已经创建的目录，默认在根目录/。
    * id  脚本id。
    * createUser  脚本创建人
    * connectionName  脚本关联的连接名称。当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、Shell、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，这个参数是必选的。用户可以通过查询连接列表（待下线）接口获取当前系统中已经存在的连接。默认值为空。
    * database  执行SQL语句所关联的数据库，当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，才支持此参数。 - type为DLISQL时，可以通过查看所有数据库接口获取数据库信息。 - type为其他类型的时候，需要通过JDBC方式连上集群，查询数据库信息。默认值为空。
    * queueName  DLI资源队列名称，当type参数值为DLISQL时，才支持此参数。可以通过查询队列列表接口获取队列信息。默认值为空。
    * configuration  用户定义适用于此作业的配置参数，当type参数值为DLISQL时存在。当前支持的配置项列表请参考DLI的conf参数说明。默认值为空。
    * description  描述，长度不能超过255个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'directory' => 'directory',
            'id' => 'id',
            'createUser' => 'create_user',
            'connectionName' => 'connection_name',
            'database' => 'database',
            'queueName' => 'queue_name',
            'configuration' => 'configuration',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  脚本名称，只能包含五种字符：英文字母、数字、中文、中划线和点号，且长度小于等于128个字符。脚本名称不能重复。
    * type  脚本类型 - FlinkSQL: Flink SQL - DLISQL：DLI SQL - SparkSQL: MRS Spark SQL - HiveSQL: MRS Hive SQL - DWSSQL: DWS SQL - RDSSQL: RDS SQL - Shell: Shell 脚本 - PYTHON：Python 脚本 - PRESTO: MRS Presto SQL - ClickHouseSQL: MRS ClickHouse SQL - HetuEngineSQL: MRS HetuEngine SQL - ImpalaSQL: MRS Impala SQL - SparkPython: MRS Spark Python脚本
    * directory  脚本所在目录路径 通过DataArts Studio管理控制台 > 数据开发，左侧列表选择“数据开发 > 脚本开发”。在脚本的目录树上，可以查看到当前已经创建的目录，默认在根目录/。
    * id  脚本id。
    * createUser  脚本创建人
    * connectionName  脚本关联的连接名称。当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、Shell、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，这个参数是必选的。用户可以通过查询连接列表（待下线）接口获取当前系统中已经存在的连接。默认值为空。
    * database  执行SQL语句所关联的数据库，当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，才支持此参数。 - type为DLISQL时，可以通过查看所有数据库接口获取数据库信息。 - type为其他类型的时候，需要通过JDBC方式连上集群，查询数据库信息。默认值为空。
    * queueName  DLI资源队列名称，当type参数值为DLISQL时，才支持此参数。可以通过查询队列列表接口获取队列信息。默认值为空。
    * configuration  用户定义适用于此作业的配置参数，当type参数值为DLISQL时存在。当前支持的配置项列表请参考DLI的conf参数说明。默认值为空。
    * description  描述，长度不能超过255个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'directory' => 'setDirectory',
            'id' => 'setId',
            'createUser' => 'setCreateUser',
            'connectionName' => 'setConnectionName',
            'database' => 'setDatabase',
            'queueName' => 'setQueueName',
            'configuration' => 'setConfiguration',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  脚本名称，只能包含五种字符：英文字母、数字、中文、中划线和点号，且长度小于等于128个字符。脚本名称不能重复。
    * type  脚本类型 - FlinkSQL: Flink SQL - DLISQL：DLI SQL - SparkSQL: MRS Spark SQL - HiveSQL: MRS Hive SQL - DWSSQL: DWS SQL - RDSSQL: RDS SQL - Shell: Shell 脚本 - PYTHON：Python 脚本 - PRESTO: MRS Presto SQL - ClickHouseSQL: MRS ClickHouse SQL - HetuEngineSQL: MRS HetuEngine SQL - ImpalaSQL: MRS Impala SQL - SparkPython: MRS Spark Python脚本
    * directory  脚本所在目录路径 通过DataArts Studio管理控制台 > 数据开发，左侧列表选择“数据开发 > 脚本开发”。在脚本的目录树上，可以查看到当前已经创建的目录，默认在根目录/。
    * id  脚本id。
    * createUser  脚本创建人
    * connectionName  脚本关联的连接名称。当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、Shell、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，这个参数是必选的。用户可以通过查询连接列表（待下线）接口获取当前系统中已经存在的连接。默认值为空。
    * database  执行SQL语句所关联的数据库，当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，才支持此参数。 - type为DLISQL时，可以通过查看所有数据库接口获取数据库信息。 - type为其他类型的时候，需要通过JDBC方式连上集群，查询数据库信息。默认值为空。
    * queueName  DLI资源队列名称，当type参数值为DLISQL时，才支持此参数。可以通过查询队列列表接口获取队列信息。默认值为空。
    * configuration  用户定义适用于此作业的配置参数，当type参数值为DLISQL时存在。当前支持的配置项列表请参考DLI的conf参数说明。默认值为空。
    * description  描述，长度不能超过255个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'directory' => 'getDirectory',
            'id' => 'getId',
            'createUser' => 'getCreateUser',
            'connectionName' => 'getConnectionName',
            'database' => 'getDatabase',
            'queueName' => 'getQueueName',
            'configuration' => 'getConfiguration',
            'description' => 'getDescription'
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
    const TYPE_FLINK_SQL = 'FlinkSQL';
    const TYPE_DLISQL = 'DLISQL';
    const TYPE_SPARK_SQL = 'SparkSQL';
    const TYPE_HIVE_SQL = 'HiveSQL';
    const TYPE_DWSSQL = 'DWSSQL';
    const TYPE_RDSSQL = 'RDSSQL';
    const TYPE_SHELL = 'Shell';
    const TYPE_PYTHON = 'PYTHON';
    const TYPE_PRESTO = 'PRESTO';
    const TYPE_CLICK_HOUSE_SQL = 'ClickHouseSQL';
    const TYPE_HETU_ENGINE_SQL = 'HetuEngineSQL';
    const TYPE_IMPALA_SQL = 'ImpalaSQL';
    const TYPE_SPARK_PYTHON = 'SparkPython';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FLINK_SQL,
            self::TYPE_DLISQL,
            self::TYPE_SPARK_SQL,
            self::TYPE_HIVE_SQL,
            self::TYPE_DWSSQL,
            self::TYPE_RDSSQL,
            self::TYPE_SHELL,
            self::TYPE_PYTHON,
            self::TYPE_PRESTO,
            self::TYPE_CLICK_HOUSE_SQL,
            self::TYPE_HETU_ENGINE_SQL,
            self::TYPE_IMPALA_SQL,
            self::TYPE_SPARK_PYTHON,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['connectionName'] = isset($data['connectionName']) ? $data['connectionName'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
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
    * Gets name
    *  脚本名称，只能包含五种字符：英文字母、数字、中文、中划线和点号，且长度小于等于128个字符。脚本名称不能重复。
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
    * @param string|null $name 脚本名称，只能包含五种字符：英文字母、数字、中文、中划线和点号，且长度小于等于128个字符。脚本名称不能重复。
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
    *  脚本类型 - FlinkSQL: Flink SQL - DLISQL：DLI SQL - SparkSQL: MRS Spark SQL - HiveSQL: MRS Hive SQL - DWSSQL: DWS SQL - RDSSQL: RDS SQL - Shell: Shell 脚本 - PYTHON：Python 脚本 - PRESTO: MRS Presto SQL - ClickHouseSQL: MRS ClickHouse SQL - HetuEngineSQL: MRS HetuEngine SQL - ImpalaSQL: MRS Impala SQL - SparkPython: MRS Spark Python脚本
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
    * @param string|null $type 脚本类型 - FlinkSQL: Flink SQL - DLISQL：DLI SQL - SparkSQL: MRS Spark SQL - HiveSQL: MRS Hive SQL - DWSSQL: DWS SQL - RDSSQL: RDS SQL - Shell: Shell 脚本 - PYTHON：Python 脚本 - PRESTO: MRS Presto SQL - ClickHouseSQL: MRS ClickHouse SQL - HetuEngineSQL: MRS HetuEngine SQL - ImpalaSQL: MRS Impala SQL - SparkPython: MRS Spark Python脚本
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets directory
    *  脚本所在目录路径 通过DataArts Studio管理控制台 > 数据开发，左侧列表选择“数据开发 > 脚本开发”。在脚本的目录树上，可以查看到当前已经创建的目录，默认在根目录/。
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory 脚本所在目录路径 通过DataArts Studio管理控制台 > 数据开发，左侧列表选择“数据开发 > 脚本开发”。在脚本的目录树上，可以查看到当前已经创建的目录，默认在根目录/。
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets id
    *  脚本id。
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
    * @param string|null $id 脚本id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createUser
    *  脚本创建人
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 脚本创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets connectionName
    *  脚本关联的连接名称。当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、Shell、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，这个参数是必选的。用户可以通过查询连接列表（待下线）接口获取当前系统中已经存在的连接。默认值为空。
    *
    * @return string|null
    */
    public function getConnectionName()
    {
        return $this->container['connectionName'];
    }

    /**
    * Sets connectionName
    *
    * @param string|null $connectionName 脚本关联的连接名称。当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、Shell、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，这个参数是必选的。用户可以通过查询连接列表（待下线）接口获取当前系统中已经存在的连接。默认值为空。
    *
    * @return $this
    */
    public function setConnectionName($connectionName)
    {
        $this->container['connectionName'] = $connectionName;
        return $this;
    }

    /**
    * Gets database
    *  执行SQL语句所关联的数据库，当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，才支持此参数。 - type为DLISQL时，可以通过查看所有数据库接口获取数据库信息。 - type为其他类型的时候，需要通过JDBC方式连上集群，查询数据库信息。默认值为空。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 执行SQL语句所关联的数据库，当type参数值为DLISQL、SparkSQL、HiveSQL、DWSSQL、PRESTO、ClickHouseSQL、ImpalaSQL、HetuEngineSQL、RDSSQL其中之一时，才支持此参数。 - type为DLISQL时，可以通过查看所有数据库接口获取数据库信息。 - type为其他类型的时候，需要通过JDBC方式连上集群，查询数据库信息。默认值为空。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets queueName
    *  DLI资源队列名称，当type参数值为DLISQL时，才支持此参数。可以通过查询队列列表接口获取队列信息。默认值为空。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName DLI资源队列名称，当type参数值为DLISQL时，才支持此参数。可以通过查询队列列表接口获取队列信息。默认值为空。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets configuration
    *  用户定义适用于此作业的配置参数，当type参数值为DLISQL时存在。当前支持的配置项列表请参考DLI的conf参数说明。默认值为空。
    *
    * @return object|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param object|null $configuration 用户定义适用于此作业的配置参数，当type参数值为DLISQL时存在。当前支持的配置项列表请参考DLI的conf参数说明。默认值为空。
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
        return $this;
    }

    /**
    * Gets description
    *  描述，长度不能超过255个字符。
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
    * @param string|null $description 描述，长度不能超过255个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

