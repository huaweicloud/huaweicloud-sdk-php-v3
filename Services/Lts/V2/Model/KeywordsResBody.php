<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeywordsResBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeywordsResBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * keywords  关键词
    * condition  条件
    * number  行数
    * searchTimeRange  查询执行任务时最近数据的时间范围，最大值为60
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'keywords' => 'string',
            'condition' => 'string',
            'number' => 'int',
            'searchTimeRange' => 'int',
            'searchTimeRangeUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * keywords  关键词
    * condition  条件
    * number  行数
    * searchTimeRange  查询执行任务时最近数据的时间范围，最大值为60
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logStreamId' => null,
        'logStreamName' => null,
        'logGroupId' => null,
        'logGroupName' => null,
        'keywords' => null,
        'condition' => null,
        'number' => 'int32',
        'searchTimeRange' => 'int32',
        'searchTimeRangeUnit' => null
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
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * keywords  关键词
    * condition  条件
    * number  行数
    * searchTimeRange  查询执行任务时最近数据的时间范围，最大值为60
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'keywords' => 'keywords',
            'condition' => 'condition',
            'number' => 'number',
            'searchTimeRange' => 'search_time_range',
            'searchTimeRangeUnit' => 'search_time_range_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * keywords  关键词
    * condition  条件
    * number  行数
    * searchTimeRange  查询执行任务时最近数据的时间范围，最大值为60
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $setters = [
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'keywords' => 'setKeywords',
            'condition' => 'setCondition',
            'number' => 'setNumber',
            'searchTimeRange' => 'setSearchTimeRange',
            'searchTimeRangeUnit' => 'setSearchTimeRangeUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * keywords  关键词
    * condition  条件
    * number  行数
    * searchTimeRange  查询执行任务时最近数据的时间范围，最大值为60
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $getters = [
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'keywords' => 'getKeywords',
            'condition' => 'getCondition',
            'number' => 'getNumber',
            'searchTimeRange' => 'getSearchTimeRange',
            'searchTimeRangeUnit' => 'getSearchTimeRangeUnit'
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
    const CONDITION_GREATER_THAN_OR_EQUAL_TO = '>=';
    const CONDITION_LESS_THAN_OR_EQUAL_TO = '<=';
    const CONDITION_LESS_THAN = '<';
    const CONDITION_GREATER_THAN = '>';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION_GREATER_THAN_OR_EQUAL_TO,
            self::CONDITION_LESS_THAN_OR_EQUAL_TO,
            self::CONDITION_LESS_THAN,
            self::CONDITION_GREATER_THAN,
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
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['searchTimeRange'] = isset($data['searchTimeRange']) ? $data['searchTimeRange'] : null;
        $this->container['searchTimeRangeUnit'] = isset($data['searchTimeRangeUnit']) ? $data['searchTimeRangeUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keywords']) && (mb_strlen($this->container['keywords']) > 1024)) {
                $invalidProperties[] = "invalid value for 'keywords', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['keywords']) && (mb_strlen($this->container['keywords']) < 1)) {
                $invalidProperties[] = "invalid value for 'keywords', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getConditionAllowableValues();
                if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets logStreamId
    *  日志流id
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流id
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组id
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组id
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets keywords
    *  关键词
    *
    * @return string|null
    */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
    * Sets keywords
    *
    * @param string|null $keywords 关键词
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets condition
    *  条件
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 条件
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets number
    *  行数
    *
    * @return int|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param int|null $number 行数
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets searchTimeRange
    *  查询执行任务时最近数据的时间范围，最大值为60
    *
    * @return int|null
    */
    public function getSearchTimeRange()
    {
        return $this->container['searchTimeRange'];
    }

    /**
    * Sets searchTimeRange
    *
    * @param int|null $searchTimeRange 查询执行任务时最近数据的时间范围，最大值为60
    *
    * @return $this
    */
    public function setSearchTimeRange($searchTimeRange)
    {
        $this->container['searchTimeRange'] = $searchTimeRange;
        return $this;
    }

    /**
    * Gets searchTimeRangeUnit
    *  查询时间单位
    *
    * @return string|null
    */
    public function getSearchTimeRangeUnit()
    {
        return $this->container['searchTimeRangeUnit'];
    }

    /**
    * Sets searchTimeRangeUnit
    *
    * @param string|null $searchTimeRangeUnit 查询时间单位
    *
    * @return $this
    */
    public function setSearchTimeRangeUnit($searchTimeRangeUnit)
    {
        $this->container['searchTimeRangeUnit'] = $searchTimeRangeUnit;
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

