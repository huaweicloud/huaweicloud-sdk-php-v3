<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportSlowLogStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportSlowLogStat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectSlowLog  是否收集慢SQL。
    * topExecuteSlowLogs  慢SQL Top执行次数列表。
    * topAvgQueryTimeSlowLogs  慢SQL Top平均执行时间列表。
    * topMaxQueryTimeSlowLogs  慢SQL Top最大执行时间列表。
    * rowsExaminedExceeding  慢SQL Top扫描返回比列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectSlowLog' => 'bool',
            'topExecuteSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]',
            'topAvgQueryTimeSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]',
            'topMaxQueryTimeSlowLogs' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]',
            'rowsExaminedExceeding' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]',
            'analyzeSuccess' => 'bool',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectSlowLog  是否收集慢SQL。
    * topExecuteSlowLogs  慢SQL Top执行次数列表。
    * topAvgQueryTimeSlowLogs  慢SQL Top平均执行时间列表。
    * topMaxQueryTimeSlowLogs  慢SQL Top最大执行时间列表。
    * rowsExaminedExceeding  慢SQL Top扫描返回比列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectSlowLog' => null,
        'topExecuteSlowLogs' => null,
        'topAvgQueryTimeSlowLogs' => null,
        'topMaxQueryTimeSlowLogs' => null,
        'rowsExaminedExceeding' => null,
        'analyzeSuccess' => null,
        'errorMessage' => null
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
    * collectSlowLog  是否收集慢SQL。
    * topExecuteSlowLogs  慢SQL Top执行次数列表。
    * topAvgQueryTimeSlowLogs  慢SQL Top平均执行时间列表。
    * topMaxQueryTimeSlowLogs  慢SQL Top最大执行时间列表。
    * rowsExaminedExceeding  慢SQL Top扫描返回比列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectSlowLog' => 'collect_slow_log',
            'topExecuteSlowLogs' => 'top_execute_slow_logs',
            'topAvgQueryTimeSlowLogs' => 'top_avg_query_time_slow_logs',
            'topMaxQueryTimeSlowLogs' => 'top_max_query_time_slow_logs',
            'rowsExaminedExceeding' => 'rows_examined_exceeding',
            'analyzeSuccess' => 'analyze_success',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectSlowLog  是否收集慢SQL。
    * topExecuteSlowLogs  慢SQL Top执行次数列表。
    * topAvgQueryTimeSlowLogs  慢SQL Top平均执行时间列表。
    * topMaxQueryTimeSlowLogs  慢SQL Top最大执行时间列表。
    * rowsExaminedExceeding  慢SQL Top扫描返回比列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'collectSlowLog' => 'setCollectSlowLog',
            'topExecuteSlowLogs' => 'setTopExecuteSlowLogs',
            'topAvgQueryTimeSlowLogs' => 'setTopAvgQueryTimeSlowLogs',
            'topMaxQueryTimeSlowLogs' => 'setTopMaxQueryTimeSlowLogs',
            'rowsExaminedExceeding' => 'setRowsExaminedExceeding',
            'analyzeSuccess' => 'setAnalyzeSuccess',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectSlowLog  是否收集慢SQL。
    * topExecuteSlowLogs  慢SQL Top执行次数列表。
    * topAvgQueryTimeSlowLogs  慢SQL Top平均执行时间列表。
    * topMaxQueryTimeSlowLogs  慢SQL Top最大执行时间列表。
    * rowsExaminedExceeding  慢SQL Top扫描返回比列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'collectSlowLog' => 'getCollectSlowLog',
            'topExecuteSlowLogs' => 'getTopExecuteSlowLogs',
            'topAvgQueryTimeSlowLogs' => 'getTopAvgQueryTimeSlowLogs',
            'topMaxQueryTimeSlowLogs' => 'getTopMaxQueryTimeSlowLogs',
            'rowsExaminedExceeding' => 'getRowsExaminedExceeding',
            'analyzeSuccess' => 'getAnalyzeSuccess',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['collectSlowLog'] = isset($data['collectSlowLog']) ? $data['collectSlowLog'] : null;
        $this->container['topExecuteSlowLogs'] = isset($data['topExecuteSlowLogs']) ? $data['topExecuteSlowLogs'] : null;
        $this->container['topAvgQueryTimeSlowLogs'] = isset($data['topAvgQueryTimeSlowLogs']) ? $data['topAvgQueryTimeSlowLogs'] : null;
        $this->container['topMaxQueryTimeSlowLogs'] = isset($data['topMaxQueryTimeSlowLogs']) ? $data['topMaxQueryTimeSlowLogs'] : null;
        $this->container['rowsExaminedExceeding'] = isset($data['rowsExaminedExceeding']) ? $data['rowsExaminedExceeding'] : null;
        $this->container['analyzeSuccess'] = isset($data['analyzeSuccess']) ? $data['analyzeSuccess'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['collectSlowLog'] === null) {
            $invalidProperties[] = "'collectSlowLog' can't be null";
        }
        if ($this->container['topExecuteSlowLogs'] === null) {
            $invalidProperties[] = "'topExecuteSlowLogs' can't be null";
        }
        if ($this->container['topAvgQueryTimeSlowLogs'] === null) {
            $invalidProperties[] = "'topAvgQueryTimeSlowLogs' can't be null";
        }
        if ($this->container['topMaxQueryTimeSlowLogs'] === null) {
            $invalidProperties[] = "'topMaxQueryTimeSlowLogs' can't be null";
        }
        if ($this->container['rowsExaminedExceeding'] === null) {
            $invalidProperties[] = "'rowsExaminedExceeding' can't be null";
        }
        if ($this->container['analyzeSuccess'] === null) {
            $invalidProperties[] = "'analyzeSuccess' can't be null";
        }
        if ($this->container['errorMessage'] === null) {
            $invalidProperties[] = "'errorMessage' can't be null";
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
    * Gets collectSlowLog
    *  是否收集慢SQL。
    *
    * @return bool
    */
    public function getCollectSlowLog()
    {
        return $this->container['collectSlowLog'];
    }

    /**
    * Sets collectSlowLog
    *
    * @param bool $collectSlowLog 是否收集慢SQL。
    *
    * @return $this
    */
    public function setCollectSlowLog($collectSlowLog)
    {
        $this->container['collectSlowLog'] = $collectSlowLog;
        return $this;
    }

    /**
    * Gets topExecuteSlowLogs
    *  慢SQL Top执行次数列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]
    */
    public function getTopExecuteSlowLogs()
    {
        return $this->container['topExecuteSlowLogs'];
    }

    /**
    * Sets topExecuteSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[] $topExecuteSlowLogs 慢SQL Top执行次数列表。
    *
    * @return $this
    */
    public function setTopExecuteSlowLogs($topExecuteSlowLogs)
    {
        $this->container['topExecuteSlowLogs'] = $topExecuteSlowLogs;
        return $this;
    }

    /**
    * Gets topAvgQueryTimeSlowLogs
    *  慢SQL Top平均执行时间列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]
    */
    public function getTopAvgQueryTimeSlowLogs()
    {
        return $this->container['topAvgQueryTimeSlowLogs'];
    }

    /**
    * Sets topAvgQueryTimeSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[] $topAvgQueryTimeSlowLogs 慢SQL Top平均执行时间列表。
    *
    * @return $this
    */
    public function setTopAvgQueryTimeSlowLogs($topAvgQueryTimeSlowLogs)
    {
        $this->container['topAvgQueryTimeSlowLogs'] = $topAvgQueryTimeSlowLogs;
        return $this;
    }

    /**
    * Gets topMaxQueryTimeSlowLogs
    *  慢SQL Top最大执行时间列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]
    */
    public function getTopMaxQueryTimeSlowLogs()
    {
        return $this->container['topMaxQueryTimeSlowLogs'];
    }

    /**
    * Sets topMaxQueryTimeSlowLogs
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[] $topMaxQueryTimeSlowLogs 慢SQL Top最大执行时间列表。
    *
    * @return $this
    */
    public function setTopMaxQueryTimeSlowLogs($topMaxQueryTimeSlowLogs)
    {
        $this->container['topMaxQueryTimeSlowLogs'] = $topMaxQueryTimeSlowLogs;
        return $this;
    }

    /**
    * Gets rowsExaminedExceeding
    *  慢SQL Top扫描返回比列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]
    */
    public function getRowsExaminedExceeding()
    {
        return $this->container['rowsExaminedExceeding'];
    }

    /**
    * Sets rowsExaminedExceeding
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[] $rowsExaminedExceeding 慢SQL Top扫描返回比列表。
    *
    * @return $this
    */
    public function setRowsExaminedExceeding($rowsExaminedExceeding)
    {
        $this->container['rowsExaminedExceeding'] = $rowsExaminedExceeding;
        return $this;
    }

    /**
    * Gets analyzeSuccess
    *  统计分析是否成功。
    *
    * @return bool
    */
    public function getAnalyzeSuccess()
    {
        return $this->container['analyzeSuccess'];
    }

    /**
    * Sets analyzeSuccess
    *
    * @param bool $analyzeSuccess 统计分析是否成功。
    *
    * @return $this
    */
    public function setAnalyzeSuccess($analyzeSuccess)
    {
        $this->container['analyzeSuccess'] = $analyzeSuccess;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

