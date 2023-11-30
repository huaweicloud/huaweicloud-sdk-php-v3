<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startOffset  日志起始偏移
    * endOffset  日志结束偏移
    * limit  最大日志行数
    * sort  排序规则[\"asc\",\"desc\"]
    * level  level
    * jobRunId  jobRunId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startOffset' => 'int',
            'endOffset' => 'int',
            'limit' => 'int',
            'sort' => 'string',
            'level' => 'string',
            'jobRunId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startOffset  日志起始偏移
    * endOffset  日志结束偏移
    * limit  最大日志行数
    * sort  排序规则[\"asc\",\"desc\"]
    * level  level
    * jobRunId  jobRunId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startOffset' => 'int64',
        'endOffset' => 'int64',
        'limit' => 'int64',
        'sort' => null,
        'level' => null,
        'jobRunId' => null
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
    * startOffset  日志起始偏移
    * endOffset  日志结束偏移
    * limit  最大日志行数
    * sort  排序规则[\"asc\",\"desc\"]
    * level  level
    * jobRunId  jobRunId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startOffset' => 'start_offset',
            'endOffset' => 'end_offset',
            'limit' => 'limit',
            'sort' => 'sort',
            'level' => 'level',
            'jobRunId' => 'job_run_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startOffset  日志起始偏移
    * endOffset  日志结束偏移
    * limit  最大日志行数
    * sort  排序规则[\"asc\",\"desc\"]
    * level  level
    * jobRunId  jobRunId
    *
    * @var string[]
    */
    protected static $setters = [
            'startOffset' => 'setStartOffset',
            'endOffset' => 'setEndOffset',
            'limit' => 'setLimit',
            'sort' => 'setSort',
            'level' => 'setLevel',
            'jobRunId' => 'setJobRunId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startOffset  日志起始偏移
    * endOffset  日志结束偏移
    * limit  最大日志行数
    * sort  排序规则[\"asc\",\"desc\"]
    * level  level
    * jobRunId  jobRunId
    *
    * @var string[]
    */
    protected static $getters = [
            'startOffset' => 'getStartOffset',
            'endOffset' => 'getEndOffset',
            'limit' => 'getLimit',
            'sort' => 'getSort',
            'level' => 'getLevel',
            'jobRunId' => 'getJobRunId'
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
        $this->container['startOffset'] = isset($data['startOffset']) ? $data['startOffset'] : null;
        $this->container['endOffset'] = isset($data['endOffset']) ? $data['endOffset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['jobRunId'] = isset($data['jobRunId']) ? $data['jobRunId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['sort'] === null) {
            $invalidProperties[] = "'sort' can't be null";
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
    * Gets startOffset
    *  日志起始偏移
    *
    * @return int|null
    */
    public function getStartOffset()
    {
        return $this->container['startOffset'];
    }

    /**
    * Sets startOffset
    *
    * @param int|null $startOffset 日志起始偏移
    *
    * @return $this
    */
    public function setStartOffset($startOffset)
    {
        $this->container['startOffset'] = $startOffset;
        return $this;
    }

    /**
    * Gets endOffset
    *  日志结束偏移
    *
    * @return int|null
    */
    public function getEndOffset()
    {
        return $this->container['endOffset'];
    }

    /**
    * Sets endOffset
    *
    * @param int|null $endOffset 日志结束偏移
    *
    * @return $this
    */
    public function setEndOffset($endOffset)
    {
        $this->container['endOffset'] = $endOffset;
        return $this;
    }

    /**
    * Gets limit
    *  最大日志行数
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 最大日志行数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sort
    *  排序规则[\"asc\",\"desc\"]
    *
    * @return string
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string $sort 排序规则[\"asc\",\"desc\"]
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets level
    *  level
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level level
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets jobRunId
    *  jobRunId
    *
    * @return string|null
    */
    public function getJobRunId()
    {
        return $this->container['jobRunId'];
    }

    /**
    * Sets jobRunId
    *
    * @param string|null $jobRunId jobRunId
    *
    * @return $this
    */
    public function setJobRunId($jobRunId)
    {
        $this->container['jobRunId'] = $jobRunId;
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
