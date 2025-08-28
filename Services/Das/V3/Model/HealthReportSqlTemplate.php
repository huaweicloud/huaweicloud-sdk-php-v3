<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportSqlTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportSqlTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模版ID。
    * template  模版内容。
    * databases  数据库列表。
    * times  执行次数。
    * avgQueryTime  平均执行时间。
    * maxQueryTime  最大执行时间。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * sumRowsExamined  总扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'template' => 'string',
            'databases' => 'string[]',
            'times' => 'int',
            'avgQueryTime' => 'double',
            'maxQueryTime' => 'double',
            'avgRowsExamined' => 'double',
            'maxRowsExamined' => 'double',
            'sumRowsExamined' => 'double',
            'avgRowsSent' => 'double',
            'maxRowsSent' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模版ID。
    * template  模版内容。
    * databases  数据库列表。
    * times  执行次数。
    * avgQueryTime  平均执行时间。
    * maxQueryTime  最大执行时间。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * sumRowsExamined  总扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'template' => null,
        'databases' => null,
        'times' => 'int64',
        'avgQueryTime' => 'double',
        'maxQueryTime' => 'double',
        'avgRowsExamined' => 'double',
        'maxRowsExamined' => 'double',
        'sumRowsExamined' => 'double',
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
    * templateId  模版ID。
    * template  模版内容。
    * databases  数据库列表。
    * times  执行次数。
    * avgQueryTime  平均执行时间。
    * maxQueryTime  最大执行时间。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * sumRowsExamined  总扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'template' => 'template',
            'databases' => 'databases',
            'times' => 'times',
            'avgQueryTime' => 'avg_query_time',
            'maxQueryTime' => 'max_query_time',
            'avgRowsExamined' => 'avg_rows_examined',
            'maxRowsExamined' => 'max_rows_examined',
            'sumRowsExamined' => 'sum_rows_examined',
            'avgRowsSent' => 'avg_rows_sent',
            'maxRowsSent' => 'max_rows_sent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模版ID。
    * template  模版内容。
    * databases  数据库列表。
    * times  执行次数。
    * avgQueryTime  平均执行时间。
    * maxQueryTime  最大执行时间。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * sumRowsExamined  总扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'template' => 'setTemplate',
            'databases' => 'setDatabases',
            'times' => 'setTimes',
            'avgQueryTime' => 'setAvgQueryTime',
            'maxQueryTime' => 'setMaxQueryTime',
            'avgRowsExamined' => 'setAvgRowsExamined',
            'maxRowsExamined' => 'setMaxRowsExamined',
            'sumRowsExamined' => 'setSumRowsExamined',
            'avgRowsSent' => 'setAvgRowsSent',
            'maxRowsSent' => 'setMaxRowsSent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模版ID。
    * template  模版内容。
    * databases  数据库列表。
    * times  执行次数。
    * avgQueryTime  平均执行时间。
    * maxQueryTime  最大执行时间。
    * avgRowsExamined  平均扫描行数。
    * maxRowsExamined  最大扫描行数。
    * sumRowsExamined  总扫描行数。
    * avgRowsSent  平均返回行数。
    * maxRowsSent  最大返回行数。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'template' => 'getTemplate',
            'databases' => 'getDatabases',
            'times' => 'getTimes',
            'avgQueryTime' => 'getAvgQueryTime',
            'maxQueryTime' => 'getMaxQueryTime',
            'avgRowsExamined' => 'getAvgRowsExamined',
            'maxRowsExamined' => 'getMaxRowsExamined',
            'sumRowsExamined' => 'getSumRowsExamined',
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['times'] = isset($data['times']) ? $data['times'] : null;
        $this->container['avgQueryTime'] = isset($data['avgQueryTime']) ? $data['avgQueryTime'] : null;
        $this->container['maxQueryTime'] = isset($data['maxQueryTime']) ? $data['maxQueryTime'] : null;
        $this->container['avgRowsExamined'] = isset($data['avgRowsExamined']) ? $data['avgRowsExamined'] : null;
        $this->container['maxRowsExamined'] = isset($data['maxRowsExamined']) ? $data['maxRowsExamined'] : null;
        $this->container['sumRowsExamined'] = isset($data['sumRowsExamined']) ? $data['sumRowsExamined'] : null;
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
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
        if ($this->container['databases'] === null) {
            $invalidProperties[] = "'databases' can't be null";
        }
        if ($this->container['times'] === null) {
            $invalidProperties[] = "'times' can't be null";
        }
        if ($this->container['avgQueryTime'] === null) {
            $invalidProperties[] = "'avgQueryTime' can't be null";
        }
        if ($this->container['maxQueryTime'] === null) {
            $invalidProperties[] = "'maxQueryTime' can't be null";
        }
        if ($this->container['avgRowsExamined'] === null) {
            $invalidProperties[] = "'avgRowsExamined' can't be null";
        }
        if ($this->container['maxRowsExamined'] === null) {
            $invalidProperties[] = "'maxRowsExamined' can't be null";
        }
        if ($this->container['sumRowsExamined'] === null) {
            $invalidProperties[] = "'sumRowsExamined' can't be null";
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
    * Gets templateId
    *  模版ID。
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 模版ID。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets template
    *  模版内容。
    *
    * @return string
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string $template 模版内容。
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets databases
    *  数据库列表。
    *
    * @return string[]
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string[] $databases 数据库列表。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets times
    *  执行次数。
    *
    * @return int
    */
    public function getTimes()
    {
        return $this->container['times'];
    }

    /**
    * Sets times
    *
    * @param int $times 执行次数。
    *
    * @return $this
    */
    public function setTimes($times)
    {
        $this->container['times'] = $times;
        return $this;
    }

    /**
    * Gets avgQueryTime
    *  平均执行时间。
    *
    * @return double
    */
    public function getAvgQueryTime()
    {
        return $this->container['avgQueryTime'];
    }

    /**
    * Sets avgQueryTime
    *
    * @param double $avgQueryTime 平均执行时间。
    *
    * @return $this
    */
    public function setAvgQueryTime($avgQueryTime)
    {
        $this->container['avgQueryTime'] = $avgQueryTime;
        return $this;
    }

    /**
    * Gets maxQueryTime
    *  最大执行时间。
    *
    * @return double
    */
    public function getMaxQueryTime()
    {
        return $this->container['maxQueryTime'];
    }

    /**
    * Sets maxQueryTime
    *
    * @param double $maxQueryTime 最大执行时间。
    *
    * @return $this
    */
    public function setMaxQueryTime($maxQueryTime)
    {
        $this->container['maxQueryTime'] = $maxQueryTime;
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
    * Gets sumRowsExamined
    *  总扫描行数。
    *
    * @return double
    */
    public function getSumRowsExamined()
    {
        return $this->container['sumRowsExamined'];
    }

    /**
    * Sets sumRowsExamined
    *
    * @param double $sumRowsExamined 总扫描行数。
    *
    * @return $this
    */
    public function setSumRowsExamined($sumRowsExamined)
    {
        $this->container['sumRowsExamined'] = $sumRowsExamined;
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

