<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  参数解释: 待执行的SQL语句 示例: desc table1 约束限制:  无 取值范围: 无 默认取值: 无
    * engineType  参数解释: 待提交作业的队列引擎名称，名称只能包含英文字母 示例: hetuEngine 约束限制:  无 取值范围: hetuEngine,spark 默认取值: 无
    * currentCatalog  参数解释: 待提交作业的表默认catalog 示例: dli 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * currentdb  参数解释: SQL语句执行所在的数据库。当创建新数据库时，不需要提供此参数 示例: db1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * queueName  参数解释: 待提交作业的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头 示例: q1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[1,128]范围内的字符串 取值范围: 无 默认取值: 无
    * conf  参数解释: 用户以“key/value”的形式设置用于此作业的配置参数 示例: spark.sql.files.maxRecordsPerFile = 0, spark.sql.shuffle.partitions = 200 约束限制:  元素满足key=value格式的字符串数组 取值范围: 无 默认取值: dli.sql.sqlasync.enabled = true
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'engineType' => 'string',
            'currentCatalog' => 'string',
            'currentdb' => 'string',
            'queueName' => 'string',
            'conf' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  参数解释: 待执行的SQL语句 示例: desc table1 约束限制:  无 取值范围: 无 默认取值: 无
    * engineType  参数解释: 待提交作业的队列引擎名称，名称只能包含英文字母 示例: hetuEngine 约束限制:  无 取值范围: hetuEngine,spark 默认取值: 无
    * currentCatalog  参数解释: 待提交作业的表默认catalog 示例: dli 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * currentdb  参数解释: SQL语句执行所在的数据库。当创建新数据库时，不需要提供此参数 示例: db1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * queueName  参数解释: 待提交作业的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头 示例: q1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[1,128]范围内的字符串 取值范围: 无 默认取值: 无
    * conf  参数解释: 用户以“key/value”的形式设置用于此作业的配置参数 示例: spark.sql.files.maxRecordsPerFile = 0, spark.sql.shuffle.partitions = 200 约束限制:  元素满足key=value格式的字符串数组 取值范围: 无 默认取值: dli.sql.sqlasync.enabled = true
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'engineType' => null,
        'currentCatalog' => null,
        'currentdb' => null,
        'queueName' => null,
        'conf' => null,
        'tags' => null
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
    * sql  参数解释: 待执行的SQL语句 示例: desc table1 约束限制:  无 取值范围: 无 默认取值: 无
    * engineType  参数解释: 待提交作业的队列引擎名称，名称只能包含英文字母 示例: hetuEngine 约束限制:  无 取值范围: hetuEngine,spark 默认取值: 无
    * currentCatalog  参数解释: 待提交作业的表默认catalog 示例: dli 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * currentdb  参数解释: SQL语句执行所在的数据库。当创建新数据库时，不需要提供此参数 示例: db1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * queueName  参数解释: 待提交作业的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头 示例: q1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[1,128]范围内的字符串 取值范围: 无 默认取值: 无
    * conf  参数解释: 用户以“key/value”的形式设置用于此作业的配置参数 示例: spark.sql.files.maxRecordsPerFile = 0, spark.sql.shuffle.partitions = 200 约束限制:  元素满足key=value格式的字符串数组 取值范围: 无 默认取值: dli.sql.sqlasync.enabled = true
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'engineType' => 'engine_type',
            'currentCatalog' => 'current_catalog',
            'currentdb' => 'currentdb',
            'queueName' => 'queue_name',
            'conf' => 'conf',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  参数解释: 待执行的SQL语句 示例: desc table1 约束限制:  无 取值范围: 无 默认取值: 无
    * engineType  参数解释: 待提交作业的队列引擎名称，名称只能包含英文字母 示例: hetuEngine 约束限制:  无 取值范围: hetuEngine,spark 默认取值: 无
    * currentCatalog  参数解释: 待提交作业的表默认catalog 示例: dli 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * currentdb  参数解释: SQL语句执行所在的数据库。当创建新数据库时，不需要提供此参数 示例: db1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * queueName  参数解释: 待提交作业的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头 示例: q1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[1,128]范围内的字符串 取值范围: 无 默认取值: 无
    * conf  参数解释: 用户以“key/value”的形式设置用于此作业的配置参数 示例: spark.sql.files.maxRecordsPerFile = 0, spark.sql.shuffle.partitions = 200 约束限制:  元素满足key=value格式的字符串数组 取值范围: 无 默认取值: dli.sql.sqlasync.enabled = true
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'engineType' => 'setEngineType',
            'currentCatalog' => 'setCurrentCatalog',
            'currentdb' => 'setCurrentdb',
            'queueName' => 'setQueueName',
            'conf' => 'setConf',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  参数解释: 待执行的SQL语句 示例: desc table1 约束限制:  无 取值范围: 无 默认取值: 无
    * engineType  参数解释: 待提交作业的队列引擎名称，名称只能包含英文字母 示例: hetuEngine 约束限制:  无 取值范围: hetuEngine,spark 默认取值: 无
    * currentCatalog  参数解释: 待提交作业的表默认catalog 示例: dli 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * currentdb  参数解释: SQL语句执行所在的数据库。当创建新数据库时，不需要提供此参数 示例: db1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    * queueName  参数解释: 待提交作业的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头 示例: q1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[1,128]范围内的字符串 取值范围: 无 默认取值: 无
    * conf  参数解释: 用户以“key/value”的形式设置用于此作业的配置参数 示例: spark.sql.files.maxRecordsPerFile = 0, spark.sql.shuffle.partitions = 200 约束限制:  元素满足key=value格式的字符串数组 取值范围: 无 默认取值: dli.sql.sqlasync.enabled = true
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'engineType' => 'getEngineType',
            'currentCatalog' => 'getCurrentCatalog',
            'currentdb' => 'getCurrentdb',
            'queueName' => 'getQueueName',
            'conf' => 'getConf',
            'tags' => 'getTags'
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
    const ENGINE_TYPE_HETU_ENGINE = 'hetuEngine';
    const ENGINE_TYPE_SPARK = 'spark';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_HETU_ENGINE,
            self::ENGINE_TYPE_SPARK,
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['currentCatalog'] = isset($data['currentCatalog']) ? $data['currentCatalog'] : null;
        $this->container['currentdb'] = isset($data['currentdb']) ? $data['currentdb'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['conf'] = isset($data['conf']) ? $data['conf'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
            if ((mb_strlen($this->container['sql']) > 500000)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 500000.";
            }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['currentCatalog']) && (mb_strlen($this->container['currentCatalog']) > 128)) {
                $invalidProperties[] = "invalid value for 'currentCatalog', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['currentCatalog']) && (mb_strlen($this->container['currentCatalog']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentCatalog', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentCatalog']) && !preg_match("/^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/", $this->container['currentCatalog'])) {
                $invalidProperties[] = "invalid value for 'currentCatalog', must be conform to the pattern /^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/.";
            }
            if (!is_null($this->container['currentdb']) && (mb_strlen($this->container['currentdb']) > 128)) {
                $invalidProperties[] = "invalid value for 'currentdb', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['currentdb']) && (mb_strlen($this->container['currentdb']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentdb', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentdb']) && !preg_match("/^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/", $this->container['currentdb'])) {
                $invalidProperties[] = "invalid value for 'currentdb', must be conform to the pattern /^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) < 1)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queueName']) && !preg_match("/^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/", $this->container['queueName'])) {
                $invalidProperties[] = "invalid value for 'queueName', must be conform to the pattern /^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/.";
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
    * Gets sql
    *  参数解释: 待执行的SQL语句 示例: desc table1 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql 参数解释: 待执行的SQL语句 示例: desc table1 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets engineType
    *  参数解释: 待提交作业的队列引擎名称，名称只能包含英文字母 示例: hetuEngine 约束限制:  无 取值范围: hetuEngine,spark 默认取值: 无
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 参数解释: 待提交作业的队列引擎名称，名称只能包含英文字母 示例: hetuEngine 约束限制:  无 取值范围: hetuEngine,spark 默认取值: 无
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets currentCatalog
    *  参数解释: 待提交作业的表默认catalog 示例: dli 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getCurrentCatalog()
    {
        return $this->container['currentCatalog'];
    }

    /**
    * Sets currentCatalog
    *
    * @param string|null $currentCatalog 参数解释: 待提交作业的表默认catalog 示例: dli 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setCurrentCatalog($currentCatalog)
    {
        $this->container['currentCatalog'] = $currentCatalog;
        return $this;
    }

    /**
    * Gets currentdb
    *  参数解释: SQL语句执行所在的数据库。当创建新数据库时，不需要提供此参数 示例: db1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getCurrentdb()
    {
        return $this->container['currentdb'];
    }

    /**
    * Sets currentdb
    *
    * @param string|null $currentdb 参数解释: SQL语句执行所在的数据库。当创建新数据库时，不需要提供此参数 示例: db1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[0,128]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setCurrentdb($currentdb)
    {
        $this->container['currentdb'] = $currentdb;
        return $this;
    }

    /**
    * Gets queueName
    *  参数解释: 待提交作业的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头 示例: q1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[1,128]范围内的字符串 取值范围: 无 默认取值: 无
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
    * @param string|null $queueName 参数解释: 待提交作业的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头 示例: q1 约束限制:  匹配正则表达式'^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$'且长度在[1,128]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets conf
    *  参数解释: 用户以“key/value”的形式设置用于此作业的配置参数 示例: spark.sql.files.maxRecordsPerFile = 0, spark.sql.shuffle.partitions = 200 约束限制:  元素满足key=value格式的字符串数组 取值范围: 无 默认取值: dli.sql.sqlasync.enabled = true
    *
    * @return string[]|null
    */
    public function getConf()
    {
        return $this->container['conf'];
    }

    /**
    * Sets conf
    *
    * @param string[]|null $conf 参数解释: 用户以“key/value”的形式设置用于此作业的配置参数 示例: spark.sql.files.maxRecordsPerFile = 0, spark.sql.shuffle.partitions = 200 约束限制:  元素满足key=value格式的字符串数组 取值范围: 无 默认取值: dli.sql.sqlasync.enabled = true
    *
    * @return $this
    */
    public function setConf($conf)
    {
        $this->container['conf'] = $conf;
        return $this;
    }

    /**
    * Gets tags
    *  作业标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 作业标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

