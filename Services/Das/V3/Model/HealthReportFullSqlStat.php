<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportFullSqlStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportFullSqlStat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectFullSql  是否收集全量SQL。
    * executeTopTemplates  全量SQL Top总执行次数列表。
    * sumRowsExaminedTopTemplates  全量SQL Top总扫描行数列表。
    * avgCostTopTemplates  全量SQL Top平均执行耗时列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectFullSql' => 'bool',
            'executeTopTemplates' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]',
            'sumRowsExaminedTopTemplates' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]',
            'avgCostTopTemplates' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]',
            'analyzeSuccess' => 'bool',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectFullSql  是否收集全量SQL。
    * executeTopTemplates  全量SQL Top总执行次数列表。
    * sumRowsExaminedTopTemplates  全量SQL Top总扫描行数列表。
    * avgCostTopTemplates  全量SQL Top平均执行耗时列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectFullSql' => null,
        'executeTopTemplates' => null,
        'sumRowsExaminedTopTemplates' => null,
        'avgCostTopTemplates' => null,
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
    * collectFullSql  是否收集全量SQL。
    * executeTopTemplates  全量SQL Top总执行次数列表。
    * sumRowsExaminedTopTemplates  全量SQL Top总扫描行数列表。
    * avgCostTopTemplates  全量SQL Top平均执行耗时列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectFullSql' => 'collect_full_sql',
            'executeTopTemplates' => 'execute_top_templates',
            'sumRowsExaminedTopTemplates' => 'sum_rows_examined_top_templates',
            'avgCostTopTemplates' => 'avg_cost_top_templates',
            'analyzeSuccess' => 'analyze_success',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectFullSql  是否收集全量SQL。
    * executeTopTemplates  全量SQL Top总执行次数列表。
    * sumRowsExaminedTopTemplates  全量SQL Top总扫描行数列表。
    * avgCostTopTemplates  全量SQL Top平均执行耗时列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'collectFullSql' => 'setCollectFullSql',
            'executeTopTemplates' => 'setExecuteTopTemplates',
            'sumRowsExaminedTopTemplates' => 'setSumRowsExaminedTopTemplates',
            'avgCostTopTemplates' => 'setAvgCostTopTemplates',
            'analyzeSuccess' => 'setAnalyzeSuccess',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectFullSql  是否收集全量SQL。
    * executeTopTemplates  全量SQL Top总执行次数列表。
    * sumRowsExaminedTopTemplates  全量SQL Top总扫描行数列表。
    * avgCostTopTemplates  全量SQL Top平均执行耗时列表。
    * analyzeSuccess  统计分析是否成功。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'collectFullSql' => 'getCollectFullSql',
            'executeTopTemplates' => 'getExecuteTopTemplates',
            'sumRowsExaminedTopTemplates' => 'getSumRowsExaminedTopTemplates',
            'avgCostTopTemplates' => 'getAvgCostTopTemplates',
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
        $this->container['collectFullSql'] = isset($data['collectFullSql']) ? $data['collectFullSql'] : null;
        $this->container['executeTopTemplates'] = isset($data['executeTopTemplates']) ? $data['executeTopTemplates'] : null;
        $this->container['sumRowsExaminedTopTemplates'] = isset($data['sumRowsExaminedTopTemplates']) ? $data['sumRowsExaminedTopTemplates'] : null;
        $this->container['avgCostTopTemplates'] = isset($data['avgCostTopTemplates']) ? $data['avgCostTopTemplates'] : null;
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
        if ($this->container['collectFullSql'] === null) {
            $invalidProperties[] = "'collectFullSql' can't be null";
        }
        if ($this->container['executeTopTemplates'] === null) {
            $invalidProperties[] = "'executeTopTemplates' can't be null";
        }
        if ($this->container['sumRowsExaminedTopTemplates'] === null) {
            $invalidProperties[] = "'sumRowsExaminedTopTemplates' can't be null";
        }
        if ($this->container['avgCostTopTemplates'] === null) {
            $invalidProperties[] = "'avgCostTopTemplates' can't be null";
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
    * Gets collectFullSql
    *  是否收集全量SQL。
    *
    * @return bool
    */
    public function getCollectFullSql()
    {
        return $this->container['collectFullSql'];
    }

    /**
    * Sets collectFullSql
    *
    * @param bool $collectFullSql 是否收集全量SQL。
    *
    * @return $this
    */
    public function setCollectFullSql($collectFullSql)
    {
        $this->container['collectFullSql'] = $collectFullSql;
        return $this;
    }

    /**
    * Gets executeTopTemplates
    *  全量SQL Top总执行次数列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]
    */
    public function getExecuteTopTemplates()
    {
        return $this->container['executeTopTemplates'];
    }

    /**
    * Sets executeTopTemplates
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[] $executeTopTemplates 全量SQL Top总执行次数列表。
    *
    * @return $this
    */
    public function setExecuteTopTemplates($executeTopTemplates)
    {
        $this->container['executeTopTemplates'] = $executeTopTemplates;
        return $this;
    }

    /**
    * Gets sumRowsExaminedTopTemplates
    *  全量SQL Top总扫描行数列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]
    */
    public function getSumRowsExaminedTopTemplates()
    {
        return $this->container['sumRowsExaminedTopTemplates'];
    }

    /**
    * Sets sumRowsExaminedTopTemplates
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[] $sumRowsExaminedTopTemplates 全量SQL Top总扫描行数列表。
    *
    * @return $this
    */
    public function setSumRowsExaminedTopTemplates($sumRowsExaminedTopTemplates)
    {
        $this->container['sumRowsExaminedTopTemplates'] = $sumRowsExaminedTopTemplates;
        return $this;
    }

    /**
    * Gets avgCostTopTemplates
    *  全量SQL Top平均执行耗时列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[]
    */
    public function getAvgCostTopTemplates()
    {
        return $this->container['avgCostTopTemplates'];
    }

    /**
    * Sets avgCostTopTemplates
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSqlTemplate[] $avgCostTopTemplates 全量SQL Top平均执行耗时列表。
    *
    * @return $this
    */
    public function setAvgCostTopTemplates($avgCostTopTemplates)
    {
        $this->container['avgCostTopTemplates'] = $avgCostTopTemplates;
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

