<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryLogKeyWordCountRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryLogKeyWordCountRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间
    * endTime  结束时间
    * stepInterval  步长间隔
    * groupId  日志组ID
    * streamId  日志流ID
    * keyWord  关键词
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'stepInterval' => 'int',
            'groupId' => 'string',
            'streamId' => 'string',
            'keyWord' => 'string',
            'isIterative' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间
    * endTime  结束时间
    * stepInterval  步长间隔
    * groupId  日志组ID
    * streamId  日志流ID
    * keyWord  关键词
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'stepInterval' => 'int64',
        'groupId' => null,
        'streamId' => null,
        'keyWord' => null,
        'isIterative' => null
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
    * startTime  开始时间
    * endTime  结束时间
    * stepInterval  步长间隔
    * groupId  日志组ID
    * streamId  日志流ID
    * keyWord  关键词
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'stepInterval' => 'step_interval',
            'groupId' => 'group_id',
            'streamId' => 'stream_id',
            'keyWord' => 'key_word',
            'isIterative' => 'is_iterative'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间
    * endTime  结束时间
    * stepInterval  步长间隔
    * groupId  日志组ID
    * streamId  日志流ID
    * keyWord  关键词
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'stepInterval' => 'setStepInterval',
            'groupId' => 'setGroupId',
            'streamId' => 'setStreamId',
            'keyWord' => 'setKeyWord',
            'isIterative' => 'setIsIterative'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间
    * endTime  结束时间
    * stepInterval  步长间隔
    * groupId  日志组ID
    * streamId  日志流ID
    * keyWord  关键词
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'stepInterval' => 'getStepInterval',
            'groupId' => 'getGroupId',
            'streamId' => 'getStreamId',
            'keyWord' => 'getKeyWord',
            'isIterative' => 'getIsIterative'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['stepInterval'] = isset($data['stepInterval']) ? $data['stepInterval'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['isIterative'] = isset($data['isIterative']) ? $data['isIterative'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['stepInterval'] === null) {
            $invalidProperties[] = "'stepInterval' can't be null";
        }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['streamId'] === null) {
            $invalidProperties[] = "'streamId' can't be null";
        }
        if ($this->container['keyWord'] === null) {
            $invalidProperties[] = "'keyWord' can't be null";
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
    * Gets startTime
    *  开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets stepInterval
    *  步长间隔
    *
    * @return int
    */
    public function getStepInterval()
    {
        return $this->container['stepInterval'];
    }

    /**
    * Sets stepInterval
    *
    * @param int $stepInterval 步长间隔
    *
    * @return $this
    */
    public function setStepInterval($stepInterval)
    {
        $this->container['stepInterval'] = $stepInterval;
        return $this;
    }

    /**
    * Gets groupId
    *  日志组ID
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 日志组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets streamId
    *  日志流ID
    *
    * @return string
    */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
    * Sets streamId
    *
    * @param string $streamId 日志流ID
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键词
    *
    * @return string
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string $keyWord 关键词
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets isIterative
    *  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    *
    * @return bool|null
    */
    public function getIsIterative()
    {
        return $this->container['isIterative'];
    }

    /**
    * Sets isIterative
    *
    * @param bool|null $isIterative 日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    *
    * @return $this
    */
    public function setIsIterative($isIterative)
    {
        $this->container['isIterative'] = $isIterative;
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

