<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TplCmp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TplCmp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  SQL模板ID
    * sqlTemplate  SQL模板
    * sqlSampleString  SQL样例
    * dbNames  数据库列表
    * dbName  数据库名称
    * sqlType  SQL类型
    * executeNum  执行次数
    * totalCost  总执行耗时 ms
    * avgCost  平均执行耗时 ms
    * maxCost  最大执行耗时 ms
    * avgRowsSent  平均返回行数
    * maxRowsSent  最大返回行数
    * avgRowsAffected  平均影响行数
    * maxRowsAffected  最大影响行数
    * avgLockTime  平均锁等待时间
    * maxLockTime  最大锁等待时间
    * totalRowsExamined  总扫描行数
    * avgRowsExamined  平均扫描行数
    * maxRowsExamined  最大扫描行数
    * totalCostRatio  执行耗时占比
    * totalExaminedRatio  扫描行数占比
    * executeNumRatio  执行次数占比
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'sqlTemplate' => 'string',
            'sqlSampleString' => 'string',
            'dbNames' => 'string[]',
            'dbName' => 'string',
            'sqlType' => 'string',
            'executeNum' => 'int',
            'totalCost' => 'double',
            'avgCost' => 'double',
            'maxCost' => 'double',
            'avgRowsSent' => 'double',
            'maxRowsSent' => 'double',
            'avgRowsAffected' => 'double',
            'maxRowsAffected' => 'double',
            'avgLockTime' => 'double',
            'maxLockTime' => 'double',
            'totalRowsExamined' => 'double',
            'avgRowsExamined' => 'double',
            'maxRowsExamined' => 'double',
            'totalCostRatio' => 'string',
            'totalExaminedRatio' => 'string',
            'executeNumRatio' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  SQL模板ID
    * sqlTemplate  SQL模板
    * sqlSampleString  SQL样例
    * dbNames  数据库列表
    * dbName  数据库名称
    * sqlType  SQL类型
    * executeNum  执行次数
    * totalCost  总执行耗时 ms
    * avgCost  平均执行耗时 ms
    * maxCost  最大执行耗时 ms
    * avgRowsSent  平均返回行数
    * maxRowsSent  最大返回行数
    * avgRowsAffected  平均影响行数
    * maxRowsAffected  最大影响行数
    * avgLockTime  平均锁等待时间
    * maxLockTime  最大锁等待时间
    * totalRowsExamined  总扫描行数
    * avgRowsExamined  平均扫描行数
    * maxRowsExamined  最大扫描行数
    * totalCostRatio  执行耗时占比
    * totalExaminedRatio  扫描行数占比
    * executeNumRatio  执行次数占比
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'sqlTemplate' => null,
        'sqlSampleString' => null,
        'dbNames' => null,
        'dbName' => null,
        'sqlType' => null,
        'executeNum' => 'int64',
        'totalCost' => 'double',
        'avgCost' => 'double',
        'maxCost' => 'double',
        'avgRowsSent' => 'double',
        'maxRowsSent' => 'double',
        'avgRowsAffected' => 'double',
        'maxRowsAffected' => 'double',
        'avgLockTime' => 'double',
        'maxLockTime' => 'double',
        'totalRowsExamined' => 'double',
        'avgRowsExamined' => 'double',
        'maxRowsExamined' => 'double',
        'totalCostRatio' => null,
        'totalExaminedRatio' => null,
        'executeNumRatio' => null
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
    * templateId  SQL模板ID
    * sqlTemplate  SQL模板
    * sqlSampleString  SQL样例
    * dbNames  数据库列表
    * dbName  数据库名称
    * sqlType  SQL类型
    * executeNum  执行次数
    * totalCost  总执行耗时 ms
    * avgCost  平均执行耗时 ms
    * maxCost  最大执行耗时 ms
    * avgRowsSent  平均返回行数
    * maxRowsSent  最大返回行数
    * avgRowsAffected  平均影响行数
    * maxRowsAffected  最大影响行数
    * avgLockTime  平均锁等待时间
    * maxLockTime  最大锁等待时间
    * totalRowsExamined  总扫描行数
    * avgRowsExamined  平均扫描行数
    * maxRowsExamined  最大扫描行数
    * totalCostRatio  执行耗时占比
    * totalExaminedRatio  扫描行数占比
    * executeNumRatio  执行次数占比
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'sqlTemplate' => 'sql_template',
            'sqlSampleString' => 'sql_sample_string',
            'dbNames' => 'db_names',
            'dbName' => 'db_name',
            'sqlType' => 'sql_type',
            'executeNum' => 'execute_num',
            'totalCost' => 'total_cost',
            'avgCost' => 'avg_cost',
            'maxCost' => 'max_cost',
            'avgRowsSent' => 'avg_rows_sent',
            'maxRowsSent' => 'max_rows_sent',
            'avgRowsAffected' => 'avg_rows_affected',
            'maxRowsAffected' => 'max_rows_affected',
            'avgLockTime' => 'avg_lock_time',
            'maxLockTime' => 'max_lock_time',
            'totalRowsExamined' => 'total_rows_examined',
            'avgRowsExamined' => 'avg_rows_examined',
            'maxRowsExamined' => 'max_rows_examined',
            'totalCostRatio' => 'total_cost_ratio',
            'totalExaminedRatio' => 'total_examined_ratio',
            'executeNumRatio' => 'execute_num_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  SQL模板ID
    * sqlTemplate  SQL模板
    * sqlSampleString  SQL样例
    * dbNames  数据库列表
    * dbName  数据库名称
    * sqlType  SQL类型
    * executeNum  执行次数
    * totalCost  总执行耗时 ms
    * avgCost  平均执行耗时 ms
    * maxCost  最大执行耗时 ms
    * avgRowsSent  平均返回行数
    * maxRowsSent  最大返回行数
    * avgRowsAffected  平均影响行数
    * maxRowsAffected  最大影响行数
    * avgLockTime  平均锁等待时间
    * maxLockTime  最大锁等待时间
    * totalRowsExamined  总扫描行数
    * avgRowsExamined  平均扫描行数
    * maxRowsExamined  最大扫描行数
    * totalCostRatio  执行耗时占比
    * totalExaminedRatio  扫描行数占比
    * executeNumRatio  执行次数占比
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'sqlTemplate' => 'setSqlTemplate',
            'sqlSampleString' => 'setSqlSampleString',
            'dbNames' => 'setDbNames',
            'dbName' => 'setDbName',
            'sqlType' => 'setSqlType',
            'executeNum' => 'setExecuteNum',
            'totalCost' => 'setTotalCost',
            'avgCost' => 'setAvgCost',
            'maxCost' => 'setMaxCost',
            'avgRowsSent' => 'setAvgRowsSent',
            'maxRowsSent' => 'setMaxRowsSent',
            'avgRowsAffected' => 'setAvgRowsAffected',
            'maxRowsAffected' => 'setMaxRowsAffected',
            'avgLockTime' => 'setAvgLockTime',
            'maxLockTime' => 'setMaxLockTime',
            'totalRowsExamined' => 'setTotalRowsExamined',
            'avgRowsExamined' => 'setAvgRowsExamined',
            'maxRowsExamined' => 'setMaxRowsExamined',
            'totalCostRatio' => 'setTotalCostRatio',
            'totalExaminedRatio' => 'setTotalExaminedRatio',
            'executeNumRatio' => 'setExecuteNumRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  SQL模板ID
    * sqlTemplate  SQL模板
    * sqlSampleString  SQL样例
    * dbNames  数据库列表
    * dbName  数据库名称
    * sqlType  SQL类型
    * executeNum  执行次数
    * totalCost  总执行耗时 ms
    * avgCost  平均执行耗时 ms
    * maxCost  最大执行耗时 ms
    * avgRowsSent  平均返回行数
    * maxRowsSent  最大返回行数
    * avgRowsAffected  平均影响行数
    * maxRowsAffected  最大影响行数
    * avgLockTime  平均锁等待时间
    * maxLockTime  最大锁等待时间
    * totalRowsExamined  总扫描行数
    * avgRowsExamined  平均扫描行数
    * maxRowsExamined  最大扫描行数
    * totalCostRatio  执行耗时占比
    * totalExaminedRatio  扫描行数占比
    * executeNumRatio  执行次数占比
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'sqlTemplate' => 'getSqlTemplate',
            'sqlSampleString' => 'getSqlSampleString',
            'dbNames' => 'getDbNames',
            'dbName' => 'getDbName',
            'sqlType' => 'getSqlType',
            'executeNum' => 'getExecuteNum',
            'totalCost' => 'getTotalCost',
            'avgCost' => 'getAvgCost',
            'maxCost' => 'getMaxCost',
            'avgRowsSent' => 'getAvgRowsSent',
            'maxRowsSent' => 'getMaxRowsSent',
            'avgRowsAffected' => 'getAvgRowsAffected',
            'maxRowsAffected' => 'getMaxRowsAffected',
            'avgLockTime' => 'getAvgLockTime',
            'maxLockTime' => 'getMaxLockTime',
            'totalRowsExamined' => 'getTotalRowsExamined',
            'avgRowsExamined' => 'getAvgRowsExamined',
            'maxRowsExamined' => 'getMaxRowsExamined',
            'totalCostRatio' => 'getTotalCostRatio',
            'totalExaminedRatio' => 'getTotalExaminedRatio',
            'executeNumRatio' => 'getExecuteNumRatio'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['sqlTemplate'] = isset($data['sqlTemplate']) ? $data['sqlTemplate'] : null;
        $this->container['sqlSampleString'] = isset($data['sqlSampleString']) ? $data['sqlSampleString'] : null;
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['executeNum'] = isset($data['executeNum']) ? $data['executeNum'] : null;
        $this->container['totalCost'] = isset($data['totalCost']) ? $data['totalCost'] : null;
        $this->container['avgCost'] = isset($data['avgCost']) ? $data['avgCost'] : null;
        $this->container['maxCost'] = isset($data['maxCost']) ? $data['maxCost'] : null;
        $this->container['avgRowsSent'] = isset($data['avgRowsSent']) ? $data['avgRowsSent'] : null;
        $this->container['maxRowsSent'] = isset($data['maxRowsSent']) ? $data['maxRowsSent'] : null;
        $this->container['avgRowsAffected'] = isset($data['avgRowsAffected']) ? $data['avgRowsAffected'] : null;
        $this->container['maxRowsAffected'] = isset($data['maxRowsAffected']) ? $data['maxRowsAffected'] : null;
        $this->container['avgLockTime'] = isset($data['avgLockTime']) ? $data['avgLockTime'] : null;
        $this->container['maxLockTime'] = isset($data['maxLockTime']) ? $data['maxLockTime'] : null;
        $this->container['totalRowsExamined'] = isset($data['totalRowsExamined']) ? $data['totalRowsExamined'] : null;
        $this->container['avgRowsExamined'] = isset($data['avgRowsExamined']) ? $data['avgRowsExamined'] : null;
        $this->container['maxRowsExamined'] = isset($data['maxRowsExamined']) ? $data['maxRowsExamined'] : null;
        $this->container['totalCostRatio'] = isset($data['totalCostRatio']) ? $data['totalCostRatio'] : null;
        $this->container['totalExaminedRatio'] = isset($data['totalExaminedRatio']) ? $data['totalExaminedRatio'] : null;
        $this->container['executeNumRatio'] = isset($data['executeNumRatio']) ? $data['executeNumRatio'] : null;
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
    * Gets templateId
    *  SQL模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId SQL模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets sqlTemplate
    *  SQL模板
    *
    * @return string|null
    */
    public function getSqlTemplate()
    {
        return $this->container['sqlTemplate'];
    }

    /**
    * Sets sqlTemplate
    *
    * @param string|null $sqlTemplate SQL模板
    *
    * @return $this
    */
    public function setSqlTemplate($sqlTemplate)
    {
        $this->container['sqlTemplate'] = $sqlTemplate;
        return $this;
    }

    /**
    * Gets sqlSampleString
    *  SQL样例
    *
    * @return string|null
    */
    public function getSqlSampleString()
    {
        return $this->container['sqlSampleString'];
    }

    /**
    * Sets sqlSampleString
    *
    * @param string|null $sqlSampleString SQL样例
    *
    * @return $this
    */
    public function setSqlSampleString($sqlSampleString)
    {
        $this->container['sqlSampleString'] = $sqlSampleString;
        return $this;
    }

    /**
    * Gets dbNames
    *  数据库列表
    *
    * @return string[]|null
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string[]|null $dbNames 数据库列表
    *
    * @return $this
    */
    public function setDbNames($dbNames)
    {
        $this->container['dbNames'] = $dbNames;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
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
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets sqlType
    *  SQL类型
    *
    * @return string|null
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string|null $sqlType SQL类型
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets executeNum
    *  执行次数
    *
    * @return int|null
    */
    public function getExecuteNum()
    {
        return $this->container['executeNum'];
    }

    /**
    * Sets executeNum
    *
    * @param int|null $executeNum 执行次数
    *
    * @return $this
    */
    public function setExecuteNum($executeNum)
    {
        $this->container['executeNum'] = $executeNum;
        return $this;
    }

    /**
    * Gets totalCost
    *  总执行耗时 ms
    *
    * @return double|null
    */
    public function getTotalCost()
    {
        return $this->container['totalCost'];
    }

    /**
    * Sets totalCost
    *
    * @param double|null $totalCost 总执行耗时 ms
    *
    * @return $this
    */
    public function setTotalCost($totalCost)
    {
        $this->container['totalCost'] = $totalCost;
        return $this;
    }

    /**
    * Gets avgCost
    *  平均执行耗时 ms
    *
    * @return double|null
    */
    public function getAvgCost()
    {
        return $this->container['avgCost'];
    }

    /**
    * Sets avgCost
    *
    * @param double|null $avgCost 平均执行耗时 ms
    *
    * @return $this
    */
    public function setAvgCost($avgCost)
    {
        $this->container['avgCost'] = $avgCost;
        return $this;
    }

    /**
    * Gets maxCost
    *  最大执行耗时 ms
    *
    * @return double|null
    */
    public function getMaxCost()
    {
        return $this->container['maxCost'];
    }

    /**
    * Sets maxCost
    *
    * @param double|null $maxCost 最大执行耗时 ms
    *
    * @return $this
    */
    public function setMaxCost($maxCost)
    {
        $this->container['maxCost'] = $maxCost;
        return $this;
    }

    /**
    * Gets avgRowsSent
    *  平均返回行数
    *
    * @return double|null
    */
    public function getAvgRowsSent()
    {
        return $this->container['avgRowsSent'];
    }

    /**
    * Sets avgRowsSent
    *
    * @param double|null $avgRowsSent 平均返回行数
    *
    * @return $this
    */
    public function setAvgRowsSent($avgRowsSent)
    {
        $this->container['avgRowsSent'] = $avgRowsSent;
        return $this;
    }

    /**
    * Gets maxRowsSent
    *  最大返回行数
    *
    * @return double|null
    */
    public function getMaxRowsSent()
    {
        return $this->container['maxRowsSent'];
    }

    /**
    * Sets maxRowsSent
    *
    * @param double|null $maxRowsSent 最大返回行数
    *
    * @return $this
    */
    public function setMaxRowsSent($maxRowsSent)
    {
        $this->container['maxRowsSent'] = $maxRowsSent;
        return $this;
    }

    /**
    * Gets avgRowsAffected
    *  平均影响行数
    *
    * @return double|null
    */
    public function getAvgRowsAffected()
    {
        return $this->container['avgRowsAffected'];
    }

    /**
    * Sets avgRowsAffected
    *
    * @param double|null $avgRowsAffected 平均影响行数
    *
    * @return $this
    */
    public function setAvgRowsAffected($avgRowsAffected)
    {
        $this->container['avgRowsAffected'] = $avgRowsAffected;
        return $this;
    }

    /**
    * Gets maxRowsAffected
    *  最大影响行数
    *
    * @return double|null
    */
    public function getMaxRowsAffected()
    {
        return $this->container['maxRowsAffected'];
    }

    /**
    * Sets maxRowsAffected
    *
    * @param double|null $maxRowsAffected 最大影响行数
    *
    * @return $this
    */
    public function setMaxRowsAffected($maxRowsAffected)
    {
        $this->container['maxRowsAffected'] = $maxRowsAffected;
        return $this;
    }

    /**
    * Gets avgLockTime
    *  平均锁等待时间
    *
    * @return double|null
    */
    public function getAvgLockTime()
    {
        return $this->container['avgLockTime'];
    }

    /**
    * Sets avgLockTime
    *
    * @param double|null $avgLockTime 平均锁等待时间
    *
    * @return $this
    */
    public function setAvgLockTime($avgLockTime)
    {
        $this->container['avgLockTime'] = $avgLockTime;
        return $this;
    }

    /**
    * Gets maxLockTime
    *  最大锁等待时间
    *
    * @return double|null
    */
    public function getMaxLockTime()
    {
        return $this->container['maxLockTime'];
    }

    /**
    * Sets maxLockTime
    *
    * @param double|null $maxLockTime 最大锁等待时间
    *
    * @return $this
    */
    public function setMaxLockTime($maxLockTime)
    {
        $this->container['maxLockTime'] = $maxLockTime;
        return $this;
    }

    /**
    * Gets totalRowsExamined
    *  总扫描行数
    *
    * @return double|null
    */
    public function getTotalRowsExamined()
    {
        return $this->container['totalRowsExamined'];
    }

    /**
    * Sets totalRowsExamined
    *
    * @param double|null $totalRowsExamined 总扫描行数
    *
    * @return $this
    */
    public function setTotalRowsExamined($totalRowsExamined)
    {
        $this->container['totalRowsExamined'] = $totalRowsExamined;
        return $this;
    }

    /**
    * Gets avgRowsExamined
    *  平均扫描行数
    *
    * @return double|null
    */
    public function getAvgRowsExamined()
    {
        return $this->container['avgRowsExamined'];
    }

    /**
    * Sets avgRowsExamined
    *
    * @param double|null $avgRowsExamined 平均扫描行数
    *
    * @return $this
    */
    public function setAvgRowsExamined($avgRowsExamined)
    {
        $this->container['avgRowsExamined'] = $avgRowsExamined;
        return $this;
    }

    /**
    * Gets maxRowsExamined
    *  最大扫描行数
    *
    * @return double|null
    */
    public function getMaxRowsExamined()
    {
        return $this->container['maxRowsExamined'];
    }

    /**
    * Sets maxRowsExamined
    *
    * @param double|null $maxRowsExamined 最大扫描行数
    *
    * @return $this
    */
    public function setMaxRowsExamined($maxRowsExamined)
    {
        $this->container['maxRowsExamined'] = $maxRowsExamined;
        return $this;
    }

    /**
    * Gets totalCostRatio
    *  执行耗时占比
    *
    * @return string|null
    */
    public function getTotalCostRatio()
    {
        return $this->container['totalCostRatio'];
    }

    /**
    * Sets totalCostRatio
    *
    * @param string|null $totalCostRatio 执行耗时占比
    *
    * @return $this
    */
    public function setTotalCostRatio($totalCostRatio)
    {
        $this->container['totalCostRatio'] = $totalCostRatio;
        return $this;
    }

    /**
    * Gets totalExaminedRatio
    *  扫描行数占比
    *
    * @return string|null
    */
    public function getTotalExaminedRatio()
    {
        return $this->container['totalExaminedRatio'];
    }

    /**
    * Sets totalExaminedRatio
    *
    * @param string|null $totalExaminedRatio 扫描行数占比
    *
    * @return $this
    */
    public function setTotalExaminedRatio($totalExaminedRatio)
    {
        $this->container['totalExaminedRatio'] = $totalExaminedRatio;
        return $this;
    }

    /**
    * Gets executeNumRatio
    *  执行次数占比
    *
    * @return string|null
    */
    public function getExecuteNumRatio()
    {
        return $this->container['executeNumRatio'];
    }

    /**
    * Sets executeNumRatio
    *
    * @param string|null $executeNumRatio 执行次数占比
    *
    * @return $this
    */
    public function setExecuteNumRatio($executeNumRatio)
    {
        $this->container['executeNumRatio'] = $executeNumRatio;
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

