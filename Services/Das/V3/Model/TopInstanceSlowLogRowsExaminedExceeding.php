<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopInstanceSlowLogRowsExaminedExceeding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopInstanceSlowLog_rows_examined_exceeding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  SQL模板ID
    * template  SQL模板
    * databases  数据库名称
    * times  执行次数
    * avgQueryTime  平均执行时间
    * maxQueryTime  最大执行时间
    * avgRowsExamined  平均扫描行数
    * sumRowsExamined  最大执行时间
    * avgRowsSent  平均返回行数
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
            'sumRowsExamined' => 'double',
            'avgRowsSent' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  SQL模板ID
    * template  SQL模板
    * databases  数据库名称
    * times  执行次数
    * avgQueryTime  平均执行时间
    * maxQueryTime  最大执行时间
    * avgRowsExamined  平均扫描行数
    * sumRowsExamined  最大执行时间
    * avgRowsSent  平均返回行数
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
        'sumRowsExamined' => 'double',
        'avgRowsSent' => 'double'
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
    * template  SQL模板
    * databases  数据库名称
    * times  执行次数
    * avgQueryTime  平均执行时间
    * maxQueryTime  最大执行时间
    * avgRowsExamined  平均扫描行数
    * sumRowsExamined  最大执行时间
    * avgRowsSent  平均返回行数
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
            'sumRowsExamined' => 'sum_rows_examined',
            'avgRowsSent' => 'avg_rows_sent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  SQL模板ID
    * template  SQL模板
    * databases  数据库名称
    * times  执行次数
    * avgQueryTime  平均执行时间
    * maxQueryTime  最大执行时间
    * avgRowsExamined  平均扫描行数
    * sumRowsExamined  最大执行时间
    * avgRowsSent  平均返回行数
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
            'sumRowsExamined' => 'setSumRowsExamined',
            'avgRowsSent' => 'setAvgRowsSent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  SQL模板ID
    * template  SQL模板
    * databases  数据库名称
    * times  执行次数
    * avgQueryTime  平均执行时间
    * maxQueryTime  最大执行时间
    * avgRowsExamined  平均扫描行数
    * sumRowsExamined  最大执行时间
    * avgRowsSent  平均返回行数
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
            'sumRowsExamined' => 'getSumRowsExamined',
            'avgRowsSent' => 'getAvgRowsSent'
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
        $this->container['sumRowsExamined'] = isset($data['sumRowsExamined']) ? $data['sumRowsExamined'] : null;
        $this->container['avgRowsSent'] = isset($data['avgRowsSent']) ? $data['avgRowsSent'] : null;
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
    * Gets template
    *  SQL模板
    *
    * @return string|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string|null $template SQL模板
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
    *  数据库名称
    *
    * @return string[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string[]|null $databases 数据库名称
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
    *  执行次数
    *
    * @return int|null
    */
    public function getTimes()
    {
        return $this->container['times'];
    }

    /**
    * Sets times
    *
    * @param int|null $times 执行次数
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
    *  平均执行时间
    *
    * @return double|null
    */
    public function getAvgQueryTime()
    {
        return $this->container['avgQueryTime'];
    }

    /**
    * Sets avgQueryTime
    *
    * @param double|null $avgQueryTime 平均执行时间
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
    *  最大执行时间
    *
    * @return double|null
    */
    public function getMaxQueryTime()
    {
        return $this->container['maxQueryTime'];
    }

    /**
    * Sets maxQueryTime
    *
    * @param double|null $maxQueryTime 最大执行时间
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
    * Gets sumRowsExamined
    *  最大执行时间
    *
    * @return double|null
    */
    public function getSumRowsExamined()
    {
        return $this->container['sumRowsExamined'];
    }

    /**
    * Sets sumRowsExamined
    *
    * @param double|null $sumRowsExamined 最大执行时间
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

