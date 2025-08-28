<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowSqlTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowSqlTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlTemplate  SQL模板。
    * sqlTemplateId  SQL模板ID。
    * sqlSample  SQL样本。
    * sqlSampleUser  SQL样本执行用户。
    * dbNames  库名。
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(ms)。
    * maxExecuteTime  最大执行耗时(ms)。
    * avgLockWaitTime  平均锁等待时间(ms)。
    * maxLockWaitTime  最大锁等待时间(ms)。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlTemplate' => 'string',
            'sqlTemplateId' => 'string',
            'sqlSample' => 'string',
            'sqlSampleUser' => 'string',
            'dbNames' => 'string[]',
            'executeCount' => 'int',
            'avgExecuteTime' => 'double',
            'maxExecuteTime' => 'double',
            'avgLockWaitTime' => 'double',
            'maxLockWaitTime' => 'double',
            'avgRowsExamined' => 'double',
            'maxRowsExamined' => 'double',
            'avgRowsSent' => 'double',
            'maxRowsSent' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlTemplate  SQL模板。
    * sqlTemplateId  SQL模板ID。
    * sqlSample  SQL样本。
    * sqlSampleUser  SQL样本执行用户。
    * dbNames  库名。
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(ms)。
    * maxExecuteTime  最大执行耗时(ms)。
    * avgLockWaitTime  平均锁等待时间(ms)。
    * maxLockWaitTime  最大锁等待时间(ms)。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlTemplate' => null,
        'sqlTemplateId' => null,
        'sqlSample' => null,
        'sqlSampleUser' => null,
        'dbNames' => null,
        'executeCount' => 'int64',
        'avgExecuteTime' => 'double',
        'maxExecuteTime' => 'double',
        'avgLockWaitTime' => 'double',
        'maxLockWaitTime' => 'double',
        'avgRowsExamined' => 'double',
        'maxRowsExamined' => 'double',
        'avgRowsSent' => 'double',
        'maxRowsSent' => 'double'
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
    * sqlTemplateId  SQL模板ID。
    * sqlSample  SQL样本。
    * sqlSampleUser  SQL样本执行用户。
    * dbNames  库名。
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(ms)。
    * maxExecuteTime  最大执行耗时(ms)。
    * avgLockWaitTime  平均锁等待时间(ms)。
    * maxLockWaitTime  最大锁等待时间(ms)。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlTemplate' => 'sql_template',
            'sqlTemplateId' => 'sql_template_id',
            'sqlSample' => 'sql_sample',
            'sqlSampleUser' => 'sql_sample_user',
            'dbNames' => 'db_names',
            'executeCount' => 'execute_count',
            'avgExecuteTime' => 'avg_execute_time',
            'maxExecuteTime' => 'max_execute_time',
            'avgLockWaitTime' => 'avg_lock_wait_time',
            'maxLockWaitTime' => 'max_lock_wait_time',
            'avgRowsExamined' => 'avg_rows_examined',
            'maxRowsExamined' => 'max_rows_examined',
            'avgRowsSent' => 'avg_rows_sent',
            'maxRowsSent' => 'max_rows_sent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlTemplate  SQL模板。
    * sqlTemplateId  SQL模板ID。
    * sqlSample  SQL样本。
    * sqlSampleUser  SQL样本执行用户。
    * dbNames  库名。
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(ms)。
    * maxExecuteTime  最大执行耗时(ms)。
    * avgLockWaitTime  平均锁等待时间(ms)。
    * maxLockWaitTime  最大锁等待时间(ms)。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlTemplate' => 'setSqlTemplate',
            'sqlTemplateId' => 'setSqlTemplateId',
            'sqlSample' => 'setSqlSample',
            'sqlSampleUser' => 'setSqlSampleUser',
            'dbNames' => 'setDbNames',
            'executeCount' => 'setExecuteCount',
            'avgExecuteTime' => 'setAvgExecuteTime',
            'maxExecuteTime' => 'setMaxExecuteTime',
            'avgLockWaitTime' => 'setAvgLockWaitTime',
            'maxLockWaitTime' => 'setMaxLockWaitTime',
            'avgRowsExamined' => 'setAvgRowsExamined',
            'maxRowsExamined' => 'setMaxRowsExamined',
            'avgRowsSent' => 'setAvgRowsSent',
            'maxRowsSent' => 'setMaxRowsSent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlTemplate  SQL模板。
    * sqlTemplateId  SQL模板ID。
    * sqlSample  SQL样本。
    * sqlSampleUser  SQL样本执行用户。
    * dbNames  库名。
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(ms)。
    * maxExecuteTime  最大执行耗时(ms)。
    * avgLockWaitTime  平均锁等待时间(ms)。
    * maxLockWaitTime  最大锁等待时间(ms)。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlTemplate' => 'getSqlTemplate',
            'sqlTemplateId' => 'getSqlTemplateId',
            'sqlSample' => 'getSqlSample',
            'sqlSampleUser' => 'getSqlSampleUser',
            'dbNames' => 'getDbNames',
            'executeCount' => 'getExecuteCount',
            'avgExecuteTime' => 'getAvgExecuteTime',
            'maxExecuteTime' => 'getMaxExecuteTime',
            'avgLockWaitTime' => 'getAvgLockWaitTime',
            'maxLockWaitTime' => 'getMaxLockWaitTime',
            'avgRowsExamined' => 'getAvgRowsExamined',
            'maxRowsExamined' => 'getMaxRowsExamined',
            'avgRowsSent' => 'getAvgRowsSent',
            'maxRowsSent' => 'getMaxRowsSent'
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
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['sqlSample'] = isset($data['sqlSample']) ? $data['sqlSample'] : null;
        $this->container['sqlSampleUser'] = isset($data['sqlSampleUser']) ? $data['sqlSampleUser'] : null;
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['executeCount'] = isset($data['executeCount']) ? $data['executeCount'] : null;
        $this->container['avgExecuteTime'] = isset($data['avgExecuteTime']) ? $data['avgExecuteTime'] : null;
        $this->container['maxExecuteTime'] = isset($data['maxExecuteTime']) ? $data['maxExecuteTime'] : null;
        $this->container['avgLockWaitTime'] = isset($data['avgLockWaitTime']) ? $data['avgLockWaitTime'] : null;
        $this->container['maxLockWaitTime'] = isset($data['maxLockWaitTime']) ? $data['maxLockWaitTime'] : null;
        $this->container['avgRowsExamined'] = isset($data['avgRowsExamined']) ? $data['avgRowsExamined'] : null;
        $this->container['maxRowsExamined'] = isset($data['maxRowsExamined']) ? $data['maxRowsExamined'] : null;
        $this->container['avgRowsSent'] = isset($data['avgRowsSent']) ? $data['avgRowsSent'] : null;
        $this->container['maxRowsSent'] = isset($data['maxRowsSent']) ? $data['maxRowsSent'] : null;
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
        if ($this->container['sqlTemplateId'] === null) {
            $invalidProperties[] = "'sqlTemplateId' can't be null";
        }
        if ($this->container['dbNames'] === null) {
            $invalidProperties[] = "'dbNames' can't be null";
        }
        if ($this->container['executeCount'] === null) {
            $invalidProperties[] = "'executeCount' can't be null";
        }
        if ($this->container['avgExecuteTime'] === null) {
            $invalidProperties[] = "'avgExecuteTime' can't be null";
        }
        if ($this->container['maxExecuteTime'] === null) {
            $invalidProperties[] = "'maxExecuteTime' can't be null";
        }
        if ($this->container['avgLockWaitTime'] === null) {
            $invalidProperties[] = "'avgLockWaitTime' can't be null";
        }
        if ($this->container['maxLockWaitTime'] === null) {
            $invalidProperties[] = "'maxLockWaitTime' can't be null";
        }
        if ($this->container['avgRowsExamined'] === null) {
            $invalidProperties[] = "'avgRowsExamined' can't be null";
        }
        if ($this->container['maxRowsExamined'] === null) {
            $invalidProperties[] = "'maxRowsExamined' can't be null";
        }
        if ($this->container['avgRowsSent'] === null) {
            $invalidProperties[] = "'avgRowsSent' can't be null";
        }
        if ($this->container['maxRowsSent'] === null) {
            $invalidProperties[] = "'maxRowsSent' can't be null";
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
    * Gets sqlTemplateId
    *  SQL模板ID。
    *
    * @return string
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string $sqlTemplateId SQL模板ID。
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets sqlSample
    *  SQL样本。
    *
    * @return string|null
    */
    public function getSqlSample()
    {
        return $this->container['sqlSample'];
    }

    /**
    * Sets sqlSample
    *
    * @param string|null $sqlSample SQL样本。
    *
    * @return $this
    */
    public function setSqlSample($sqlSample)
    {
        $this->container['sqlSample'] = $sqlSample;
        return $this;
    }

    /**
    * Gets sqlSampleUser
    *  SQL样本执行用户。
    *
    * @return string|null
    */
    public function getSqlSampleUser()
    {
        return $this->container['sqlSampleUser'];
    }

    /**
    * Sets sqlSampleUser
    *
    * @param string|null $sqlSampleUser SQL样本执行用户。
    *
    * @return $this
    */
    public function setSqlSampleUser($sqlSampleUser)
    {
        $this->container['sqlSampleUser'] = $sqlSampleUser;
        return $this;
    }

    /**
    * Gets dbNames
    *  库名。
    *
    * @return string[]
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string[] $dbNames 库名。
    *
    * @return $this
    */
    public function setDbNames($dbNames)
    {
        $this->container['dbNames'] = $dbNames;
        return $this;
    }

    /**
    * Gets executeCount
    *  执行次数。
    *
    * @return int
    */
    public function getExecuteCount()
    {
        return $this->container['executeCount'];
    }

    /**
    * Sets executeCount
    *
    * @param int $executeCount 执行次数。
    *
    * @return $this
    */
    public function setExecuteCount($executeCount)
    {
        $this->container['executeCount'] = $executeCount;
        return $this;
    }

    /**
    * Gets avgExecuteTime
    *  平均执行耗时(ms)。
    *
    * @return double
    */
    public function getAvgExecuteTime()
    {
        return $this->container['avgExecuteTime'];
    }

    /**
    * Sets avgExecuteTime
    *
    * @param double $avgExecuteTime 平均执行耗时(ms)。
    *
    * @return $this
    */
    public function setAvgExecuteTime($avgExecuteTime)
    {
        $this->container['avgExecuteTime'] = $avgExecuteTime;
        return $this;
    }

    /**
    * Gets maxExecuteTime
    *  最大执行耗时(ms)。
    *
    * @return double
    */
    public function getMaxExecuteTime()
    {
        return $this->container['maxExecuteTime'];
    }

    /**
    * Sets maxExecuteTime
    *
    * @param double $maxExecuteTime 最大执行耗时(ms)。
    *
    * @return $this
    */
    public function setMaxExecuteTime($maxExecuteTime)
    {
        $this->container['maxExecuteTime'] = $maxExecuteTime;
        return $this;
    }

    /**
    * Gets avgLockWaitTime
    *  平均锁等待时间(ms)。
    *
    * @return double
    */
    public function getAvgLockWaitTime()
    {
        return $this->container['avgLockWaitTime'];
    }

    /**
    * Sets avgLockWaitTime
    *
    * @param double $avgLockWaitTime 平均锁等待时间(ms)。
    *
    * @return $this
    */
    public function setAvgLockWaitTime($avgLockWaitTime)
    {
        $this->container['avgLockWaitTime'] = $avgLockWaitTime;
        return $this;
    }

    /**
    * Gets maxLockWaitTime
    *  最大锁等待时间(ms)。
    *
    * @return double
    */
    public function getMaxLockWaitTime()
    {
        return $this->container['maxLockWaitTime'];
    }

    /**
    * Sets maxLockWaitTime
    *
    * @param double $maxLockWaitTime 最大锁等待时间(ms)。
    *
    * @return $this
    */
    public function setMaxLockWaitTime($maxLockWaitTime)
    {
        $this->container['maxLockWaitTime'] = $maxLockWaitTime;
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
    * Gets maxRowsExamined
    *  最大扫描行数。
    *
    * @return double
    */
    public function getMaxRowsExamined()
    {
        return $this->container['maxRowsExamined'];
    }

    /**
    * Sets maxRowsExamined
    *
    * @param double $maxRowsExamined 最大扫描行数。
    *
    * @return $this
    */
    public function setMaxRowsExamined($maxRowsExamined)
    {
        $this->container['maxRowsExamined'] = $maxRowsExamined;
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
    * Gets maxRowsSent
    *  最大返回行数。
    *
    * @return double
    */
    public function getMaxRowsSent()
    {
        return $this->container['maxRowsSent'];
    }

    /**
    * Sets maxRowsSent
    *
    * @param double $maxRowsSent 最大返回行数。
    *
    * @return $this
    */
    public function setMaxRowsSent($maxRowsSent)
    {
        $this->container['maxRowsSent'] = $maxRowsSent;
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

