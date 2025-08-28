<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopSqlTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopSqlTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlTemplate  SQL模板。
    * sqlSampleString  SQL样本。
    * sqlType  SQL操作类型。
    * dbName  数据库名称。
    * executeNum  总执行次数。
    * totalCost  总耗时(ms)。
    * avgCost  平均耗时(ms)。
    * avgRowsSent  平均返回行数。
    * avgRowsAffected  平均影响行数。
    * avgLockTime  平均锁等待耗时(ms)。
    * totalRowsExamined  总扫描行数。
    * avgRowsExamined  平均扫描行数。
    * totalCostRatio  总耗时占比。
    * totalExaminedRatio  扫描行数占比。
    * executeNumRatio  执行次数占比。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlTemplate' => 'string',
            'sqlSampleString' => 'string',
            'sqlType' => 'string',
            'dbName' => 'string',
            'executeNum' => 'int',
            'totalCost' => 'double',
            'avgCost' => 'double',
            'avgRowsSent' => 'double',
            'avgRowsAffected' => 'double',
            'avgLockTime' => 'double',
            'totalRowsExamined' => 'double',
            'avgRowsExamined' => 'double',
            'totalCostRatio' => 'string',
            'totalExaminedRatio' => 'string',
            'executeNumRatio' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlTemplate  SQL模板。
    * sqlSampleString  SQL样本。
    * sqlType  SQL操作类型。
    * dbName  数据库名称。
    * executeNum  总执行次数。
    * totalCost  总耗时(ms)。
    * avgCost  平均耗时(ms)。
    * avgRowsSent  平均返回行数。
    * avgRowsAffected  平均影响行数。
    * avgLockTime  平均锁等待耗时(ms)。
    * totalRowsExamined  总扫描行数。
    * avgRowsExamined  平均扫描行数。
    * totalCostRatio  总耗时占比。
    * totalExaminedRatio  扫描行数占比。
    * executeNumRatio  执行次数占比。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlTemplate' => null,
        'sqlSampleString' => null,
        'sqlType' => null,
        'dbName' => null,
        'executeNum' => 'int64',
        'totalCost' => 'double',
        'avgCost' => 'double',
        'avgRowsSent' => 'double',
        'avgRowsAffected' => 'double',
        'avgLockTime' => 'double',
        'totalRowsExamined' => 'double',
        'avgRowsExamined' => 'double',
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
    * sqlTemplate  SQL模板。
    * sqlSampleString  SQL样本。
    * sqlType  SQL操作类型。
    * dbName  数据库名称。
    * executeNum  总执行次数。
    * totalCost  总耗时(ms)。
    * avgCost  平均耗时(ms)。
    * avgRowsSent  平均返回行数。
    * avgRowsAffected  平均影响行数。
    * avgLockTime  平均锁等待耗时(ms)。
    * totalRowsExamined  总扫描行数。
    * avgRowsExamined  平均扫描行数。
    * totalCostRatio  总耗时占比。
    * totalExaminedRatio  扫描行数占比。
    * executeNumRatio  执行次数占比。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlTemplate' => 'sql_template',
            'sqlSampleString' => 'sql_sample_string',
            'sqlType' => 'sql_type',
            'dbName' => 'db_name',
            'executeNum' => 'execute_num',
            'totalCost' => 'total_cost',
            'avgCost' => 'avg_cost',
            'avgRowsSent' => 'avg_rows_sent',
            'avgRowsAffected' => 'avg_rows_affected',
            'avgLockTime' => 'avg_lock_time',
            'totalRowsExamined' => 'total_rows_examined',
            'avgRowsExamined' => 'avg_rows_examined',
            'totalCostRatio' => 'total_cost_ratio',
            'totalExaminedRatio' => 'total_examined_ratio',
            'executeNumRatio' => 'execute_num_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlTemplate  SQL模板。
    * sqlSampleString  SQL样本。
    * sqlType  SQL操作类型。
    * dbName  数据库名称。
    * executeNum  总执行次数。
    * totalCost  总耗时(ms)。
    * avgCost  平均耗时(ms)。
    * avgRowsSent  平均返回行数。
    * avgRowsAffected  平均影响行数。
    * avgLockTime  平均锁等待耗时(ms)。
    * totalRowsExamined  总扫描行数。
    * avgRowsExamined  平均扫描行数。
    * totalCostRatio  总耗时占比。
    * totalExaminedRatio  扫描行数占比。
    * executeNumRatio  执行次数占比。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlTemplate' => 'setSqlTemplate',
            'sqlSampleString' => 'setSqlSampleString',
            'sqlType' => 'setSqlType',
            'dbName' => 'setDbName',
            'executeNum' => 'setExecuteNum',
            'totalCost' => 'setTotalCost',
            'avgCost' => 'setAvgCost',
            'avgRowsSent' => 'setAvgRowsSent',
            'avgRowsAffected' => 'setAvgRowsAffected',
            'avgLockTime' => 'setAvgLockTime',
            'totalRowsExamined' => 'setTotalRowsExamined',
            'avgRowsExamined' => 'setAvgRowsExamined',
            'totalCostRatio' => 'setTotalCostRatio',
            'totalExaminedRatio' => 'setTotalExaminedRatio',
            'executeNumRatio' => 'setExecuteNumRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlTemplate  SQL模板。
    * sqlSampleString  SQL样本。
    * sqlType  SQL操作类型。
    * dbName  数据库名称。
    * executeNum  总执行次数。
    * totalCost  总耗时(ms)。
    * avgCost  平均耗时(ms)。
    * avgRowsSent  平均返回行数。
    * avgRowsAffected  平均影响行数。
    * avgLockTime  平均锁等待耗时(ms)。
    * totalRowsExamined  总扫描行数。
    * avgRowsExamined  平均扫描行数。
    * totalCostRatio  总耗时占比。
    * totalExaminedRatio  扫描行数占比。
    * executeNumRatio  执行次数占比。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlTemplate' => 'getSqlTemplate',
            'sqlSampleString' => 'getSqlSampleString',
            'sqlType' => 'getSqlType',
            'dbName' => 'getDbName',
            'executeNum' => 'getExecuteNum',
            'totalCost' => 'getTotalCost',
            'avgCost' => 'getAvgCost',
            'avgRowsSent' => 'getAvgRowsSent',
            'avgRowsAffected' => 'getAvgRowsAffected',
            'avgLockTime' => 'getAvgLockTime',
            'totalRowsExamined' => 'getTotalRowsExamined',
            'avgRowsExamined' => 'getAvgRowsExamined',
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
        $this->container['sqlTemplate'] = isset($data['sqlTemplate']) ? $data['sqlTemplate'] : null;
        $this->container['sqlSampleString'] = isset($data['sqlSampleString']) ? $data['sqlSampleString'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['executeNum'] = isset($data['executeNum']) ? $data['executeNum'] : null;
        $this->container['totalCost'] = isset($data['totalCost']) ? $data['totalCost'] : null;
        $this->container['avgCost'] = isset($data['avgCost']) ? $data['avgCost'] : null;
        $this->container['avgRowsSent'] = isset($data['avgRowsSent']) ? $data['avgRowsSent'] : null;
        $this->container['avgRowsAffected'] = isset($data['avgRowsAffected']) ? $data['avgRowsAffected'] : null;
        $this->container['avgLockTime'] = isset($data['avgLockTime']) ? $data['avgLockTime'] : null;
        $this->container['totalRowsExamined'] = isset($data['totalRowsExamined']) ? $data['totalRowsExamined'] : null;
        $this->container['avgRowsExamined'] = isset($data['avgRowsExamined']) ? $data['avgRowsExamined'] : null;
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
        if ($this->container['sqlTemplate'] === null) {
            $invalidProperties[] = "'sqlTemplate' can't be null";
        }
        if ($this->container['sqlSampleString'] === null) {
            $invalidProperties[] = "'sqlSampleString' can't be null";
        }
        if ($this->container['sqlType'] === null) {
            $invalidProperties[] = "'sqlType' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['executeNum'] === null) {
            $invalidProperties[] = "'executeNum' can't be null";
        }
        if ($this->container['totalCost'] === null) {
            $invalidProperties[] = "'totalCost' can't be null";
        }
        if ($this->container['avgCost'] === null) {
            $invalidProperties[] = "'avgCost' can't be null";
        }
        if ($this->container['avgRowsSent'] === null) {
            $invalidProperties[] = "'avgRowsSent' can't be null";
        }
        if ($this->container['avgRowsAffected'] === null) {
            $invalidProperties[] = "'avgRowsAffected' can't be null";
        }
        if ($this->container['avgLockTime'] === null) {
            $invalidProperties[] = "'avgLockTime' can't be null";
        }
        if ($this->container['totalRowsExamined'] === null) {
            $invalidProperties[] = "'totalRowsExamined' can't be null";
        }
        if ($this->container['avgRowsExamined'] === null) {
            $invalidProperties[] = "'avgRowsExamined' can't be null";
        }
        if ($this->container['totalCostRatio'] === null) {
            $invalidProperties[] = "'totalCostRatio' can't be null";
        }
        if ($this->container['totalExaminedRatio'] === null) {
            $invalidProperties[] = "'totalExaminedRatio' can't be null";
        }
        if ($this->container['executeNumRatio'] === null) {
            $invalidProperties[] = "'executeNumRatio' can't be null";
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
    * Gets sqlTemplate
    *  SQL模板。
    *
    * @return string
    */
    public function getSqlTemplate()
    {
        return $this->container['sqlTemplate'];
    }

    /**
    * Sets sqlTemplate
    *
    * @param string $sqlTemplate SQL模板。
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
    *  SQL样本。
    *
    * @return string
    */
    public function getSqlSampleString()
    {
        return $this->container['sqlSampleString'];
    }

    /**
    * Sets sqlSampleString
    *
    * @param string $sqlSampleString SQL样本。
    *
    * @return $this
    */
    public function setSqlSampleString($sqlSampleString)
    {
        $this->container['sqlSampleString'] = $sqlSampleString;
        return $this;
    }

    /**
    * Gets sqlType
    *  SQL操作类型。
    *
    * @return string
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string $sqlType SQL操作类型。
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称。
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 数据库名称。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets executeNum
    *  总执行次数。
    *
    * @return int
    */
    public function getExecuteNum()
    {
        return $this->container['executeNum'];
    }

    /**
    * Sets executeNum
    *
    * @param int $executeNum 总执行次数。
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
    *  总耗时(ms)。
    *
    * @return double
    */
    public function getTotalCost()
    {
        return $this->container['totalCost'];
    }

    /**
    * Sets totalCost
    *
    * @param double $totalCost 总耗时(ms)。
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
    *  平均耗时(ms)。
    *
    * @return double
    */
    public function getAvgCost()
    {
        return $this->container['avgCost'];
    }

    /**
    * Sets avgCost
    *
    * @param double $avgCost 平均耗时(ms)。
    *
    * @return $this
    */
    public function setAvgCost($avgCost)
    {
        $this->container['avgCost'] = $avgCost;
        return $this;
    }

    /**
    * Gets avgRowsSent
    *  平均返回行数。
    *
    * @return double
    */
    public function getAvgRowsSent()
    {
        return $this->container['avgRowsSent'];
    }

    /**
    * Sets avgRowsSent
    *
    * @param double $avgRowsSent 平均返回行数。
    *
    * @return $this
    */
    public function setAvgRowsSent($avgRowsSent)
    {
        $this->container['avgRowsSent'] = $avgRowsSent;
        return $this;
    }

    /**
    * Gets avgRowsAffected
    *  平均影响行数。
    *
    * @return double
    */
    public function getAvgRowsAffected()
    {
        return $this->container['avgRowsAffected'];
    }

    /**
    * Sets avgRowsAffected
    *
    * @param double $avgRowsAffected 平均影响行数。
    *
    * @return $this
    */
    public function setAvgRowsAffected($avgRowsAffected)
    {
        $this->container['avgRowsAffected'] = $avgRowsAffected;
        return $this;
    }

    /**
    * Gets avgLockTime
    *  平均锁等待耗时(ms)。
    *
    * @return double
    */
    public function getAvgLockTime()
    {
        return $this->container['avgLockTime'];
    }

    /**
    * Sets avgLockTime
    *
    * @param double $avgLockTime 平均锁等待耗时(ms)。
    *
    * @return $this
    */
    public function setAvgLockTime($avgLockTime)
    {
        $this->container['avgLockTime'] = $avgLockTime;
        return $this;
    }

    /**
    * Gets totalRowsExamined
    *  总扫描行数。
    *
    * @return double
    */
    public function getTotalRowsExamined()
    {
        return $this->container['totalRowsExamined'];
    }

    /**
    * Sets totalRowsExamined
    *
    * @param double $totalRowsExamined 总扫描行数。
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
    *  平均扫描行数。
    *
    * @return double
    */
    public function getAvgRowsExamined()
    {
        return $this->container['avgRowsExamined'];
    }

    /**
    * Sets avgRowsExamined
    *
    * @param double $avgRowsExamined 平均扫描行数。
    *
    * @return $this
    */
    public function setAvgRowsExamined($avgRowsExamined)
    {
        $this->container['avgRowsExamined'] = $avgRowsExamined;
        return $this;
    }

    /**
    * Gets totalCostRatio
    *  总耗时占比。
    *
    * @return string
    */
    public function getTotalCostRatio()
    {
        return $this->container['totalCostRatio'];
    }

    /**
    * Sets totalCostRatio
    *
    * @param string $totalCostRatio 总耗时占比。
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
    *  扫描行数占比。
    *
    * @return string
    */
    public function getTotalExaminedRatio()
    {
        return $this->container['totalExaminedRatio'];
    }

    /**
    * Sets totalExaminedRatio
    *
    * @param string $totalExaminedRatio 扫描行数占比。
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
    *  执行次数占比。
    *
    * @return string
    */
    public function getExecuteNumRatio()
    {
        return $this->container['executeNumRatio'];
    }

    /**
    * Sets executeNumRatio
    *
    * @param string $executeNumRatio 执行次数占比。
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

