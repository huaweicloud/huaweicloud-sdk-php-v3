<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLimitTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLimitTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，如果存在更改，需大于当前时间前俩分钟，当前时间指UTC时，SQL范围必传。
    * endTime  任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间，SQL范围必传。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * taskName  限流任务名，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'keyWords' => 'string',
            'parallelSize' => 'int',
            'taskName' => 'string',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int',
            'databases' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，如果存在更改，需大于当前时间前俩分钟，当前时间指UTC时，SQL范围必传。
    * endTime  任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间，SQL范围必传。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * taskName  限流任务名，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'keyWords' => null,
        'parallelSize' => null,
        'taskName' => null,
        'cpuUtilization' => null,
        'memoryUtilization' => null,
        'databases' => null
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
    * startTime  任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，如果存在更改，需大于当前时间前俩分钟，当前时间指UTC时，SQL范围必传。
    * endTime  任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间，SQL范围必传。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * taskName  限流任务名，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'keyWords' => 'key_words',
            'parallelSize' => 'parallel_size',
            'taskName' => 'task_name',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization',
            'databases' => 'databases'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，如果存在更改，需大于当前时间前俩分钟，当前时间指UTC时，SQL范围必传。
    * endTime  任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间，SQL范围必传。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * taskName  限流任务名，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'keyWords' => 'setKeyWords',
            'parallelSize' => 'setParallelSize',
            'taskName' => 'setTaskName',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization',
            'databases' => 'setDatabases'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，如果存在更改，需大于当前时间前俩分钟，当前时间指UTC时，SQL范围必传。
    * endTime  任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间，SQL范围必传。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * taskName  限流任务名，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'keyWords' => 'getKeyWords',
            'parallelSize' => 'getParallelSize',
            'taskName' => 'getTaskName',
            'cpuUtilization' => 'getCpuUtilization',
            'memoryUtilization' => 'getMemoryUtilization',
            'databases' => 'getDatabases'
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
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
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
    * Gets startTime
    *  任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，如果存在更改，需大于当前时间前俩分钟，当前时间指UTC时，SQL范围必传。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，如果存在更改，需大于当前时间前俩分钟，当前时间指UTC时，SQL范围必传。
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
    *  任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间，SQL范围必传。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间，SQL范围必传。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets keyWords
    *  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    *
    * @return string|null
    */
    public function getKeyWords()
    {
        return $this->container['keyWords'];
    }

    /**
    * Sets keyWords
    *
    * @param string|null $keyWords 关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    *
    * @return $this
    */
    public function setKeyWords($keyWords)
    {
        $this->container['keyWords'] = $keyWords;
        return $this;
    }

    /**
    * Gets parallelSize
    *  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    *
    * @return int|null
    */
    public function getParallelSize()
    {
        return $this->container['parallelSize'];
    }

    /**
    * Sets parallelSize
    *
    * @param int|null $parallelSize 并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    *
    * @return $this
    */
    public function setParallelSize($parallelSize)
    {
        $this->container['parallelSize'] = $parallelSize;
        return $this;
    }

    /**
    * Gets taskName
    *  限流任务名，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 限流任务名，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets cpuUtilization
    *  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    *
    * @return int|null
    */
    public function getCpuUtilization()
    {
        return $this->container['cpuUtilization'];
    }

    /**
    * Sets cpuUtilization
    *
    * @param int|null $cpuUtilization cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    *
    * @return $this
    */
    public function setCpuUtilization($cpuUtilization)
    {
        $this->container['cpuUtilization'] = $cpuUtilization;
        return $this;
    }

    /**
    * Gets memoryUtilization
    *  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    *
    * @return int|null
    */
    public function getMemoryUtilization()
    {
        return $this->container['memoryUtilization'];
    }

    /**
    * Sets memoryUtilization
    *
    * @param int|null $memoryUtilization 内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    *
    * @return $this
    */
    public function setMemoryUtilization($memoryUtilization)
    {
        $this->container['memoryUtilization'] = $memoryUtilization;
        return $this;
    }

    /**
    * Gets databases
    *  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @return string|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string|null $databases CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
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

