<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLimitTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLimitTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskScope  限流任务范围，目前支持SQL,SESSION级别范围。
    * startTime  任务开始时间,取值范围：非空且大于等于当前时间的前俩分钟，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * endTime  任务结束时间,取值范围：非空且大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * limitType  限流类型：当限流范围为SQL级别时，可选SQL_ID、SQL_TYPE类型，当限流范围为SESSION级别时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  限流类型，当限流类型为SQL_ID类型时，该值为选中模板的sqlId，当限流类型为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，meger五种值，当限流类型为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * taskName  限流任务名，必传，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * sqlModel  CN节点执行过的SQL模板,如果类型为SQLID，则为必传。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔,如果类型为SQL_TYPE，则为必传。
    * nodeInfos  CN节点信息列表，如果类型为SQL_ID，则为必传
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskScope' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'limitType' => 'string',
            'limitTypeValue' => 'string',
            'keyWords' => 'string',
            'taskName' => 'string',
            'sqlModel' => 'string',
            'parallelSize' => 'int',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int',
            'databases' => 'string',
            'nodeInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskScope  限流任务范围，目前支持SQL,SESSION级别范围。
    * startTime  任务开始时间,取值范围：非空且大于等于当前时间的前俩分钟，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * endTime  任务结束时间,取值范围：非空且大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * limitType  限流类型：当限流范围为SQL级别时，可选SQL_ID、SQL_TYPE类型，当限流范围为SESSION级别时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  限流类型，当限流类型为SQL_ID类型时，该值为选中模板的sqlId，当限流类型为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，meger五种值，当限流类型为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * taskName  限流任务名，必传，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * sqlModel  CN节点执行过的SQL模板,如果类型为SQLID，则为必传。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔,如果类型为SQL_TYPE，则为必传。
    * nodeInfos  CN节点信息列表，如果类型为SQL_ID，则为必传
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskScope' => null,
        'startTime' => null,
        'endTime' => null,
        'limitType' => null,
        'limitTypeValue' => null,
        'keyWords' => null,
        'taskName' => null,
        'sqlModel' => null,
        'parallelSize' => null,
        'cpuUtilization' => null,
        'memoryUtilization' => null,
        'databases' => null,
        'nodeInfos' => null
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
    * taskScope  限流任务范围，目前支持SQL,SESSION级别范围。
    * startTime  任务开始时间,取值范围：非空且大于等于当前时间的前俩分钟，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * endTime  任务结束时间,取值范围：非空且大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * limitType  限流类型：当限流范围为SQL级别时，可选SQL_ID、SQL_TYPE类型，当限流范围为SESSION级别时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  限流类型，当限流类型为SQL_ID类型时，该值为选中模板的sqlId，当限流类型为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，meger五种值，当限流类型为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * taskName  限流任务名，必传，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * sqlModel  CN节点执行过的SQL模板,如果类型为SQLID，则为必传。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔,如果类型为SQL_TYPE，则为必传。
    * nodeInfos  CN节点信息列表，如果类型为SQL_ID，则为必传
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskScope' => 'task_scope',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limitType' => 'limit_type',
            'limitTypeValue' => 'limit_type_value',
            'keyWords' => 'key_words',
            'taskName' => 'task_name',
            'sqlModel' => 'sql_model',
            'parallelSize' => 'parallel_size',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization',
            'databases' => 'databases',
            'nodeInfos' => 'node_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskScope  限流任务范围，目前支持SQL,SESSION级别范围。
    * startTime  任务开始时间,取值范围：非空且大于等于当前时间的前俩分钟，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * endTime  任务结束时间,取值范围：非空且大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * limitType  限流类型：当限流范围为SQL级别时，可选SQL_ID、SQL_TYPE类型，当限流范围为SESSION级别时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  限流类型，当限流类型为SQL_ID类型时，该值为选中模板的sqlId，当限流类型为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，meger五种值，当限流类型为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * taskName  限流任务名，必传，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * sqlModel  CN节点执行过的SQL模板,如果类型为SQLID，则为必传。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔,如果类型为SQL_TYPE，则为必传。
    * nodeInfos  CN节点信息列表，如果类型为SQL_ID，则为必传
    *
    * @var string[]
    */
    protected static $setters = [
            'taskScope' => 'setTaskScope',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limitType' => 'setLimitType',
            'limitTypeValue' => 'setLimitTypeValue',
            'keyWords' => 'setKeyWords',
            'taskName' => 'setTaskName',
            'sqlModel' => 'setSqlModel',
            'parallelSize' => 'setParallelSize',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization',
            'databases' => 'setDatabases',
            'nodeInfos' => 'setNodeInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskScope  限流任务范围，目前支持SQL,SESSION级别范围。
    * startTime  任务开始时间,取值范围：非空且大于等于当前时间的前俩分钟，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * endTime  任务结束时间,取值范围：非空且大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    * limitType  限流类型：当限流范围为SQL级别时，可选SQL_ID、SQL_TYPE类型，当限流范围为SESSION级别时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  限流类型，当限流类型为SQL_ID类型时，该值为选中模板的sqlId，当限流类型为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，meger五种值，当限流类型为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。
    * keyWords  关键词，当且仅当类型为SQL_TYPE，必传，多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值 以及非首尾的空格符。
    * taskName  限流任务名，必传，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    * sqlModel  CN节点执行过的SQL模板,如果类型为SQLID，则为必传。
    * parallelSize  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    * cpuUtilization  cpu利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * memoryUtilization  内存利用率阈值，正整数，取值范围[0,100）,如果类型为SESSION_ACTIVE_MAX_COUNT，必传，不支持和cpu利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔,如果类型为SQL_TYPE，则为必传。
    * nodeInfos  CN节点信息列表，如果类型为SQL_ID，则为必传
    *
    * @var string[]
    */
    protected static $getters = [
            'taskScope' => 'getTaskScope',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limitType' => 'getLimitType',
            'limitTypeValue' => 'getLimitTypeValue',
            'keyWords' => 'getKeyWords',
            'taskName' => 'getTaskName',
            'sqlModel' => 'getSqlModel',
            'parallelSize' => 'getParallelSize',
            'cpuUtilization' => 'getCpuUtilization',
            'memoryUtilization' => 'getMemoryUtilization',
            'databases' => 'getDatabases',
            'nodeInfos' => 'getNodeInfos'
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
        $this->container['taskScope'] = isset($data['taskScope']) ? $data['taskScope'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limitType'] = isset($data['limitType']) ? $data['limitType'] : null;
        $this->container['limitTypeValue'] = isset($data['limitTypeValue']) ? $data['limitTypeValue'] : null;
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['sqlModel'] = isset($data['sqlModel']) ? $data['sqlModel'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['nodeInfos'] = isset($data['nodeInfos']) ? $data['nodeInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskScope'] === null) {
            $invalidProperties[] = "'taskScope' can't be null";
        }
        if ($this->container['limitType'] === null) {
            $invalidProperties[] = "'limitType' can't be null";
        }
        if ($this->container['limitTypeValue'] === null) {
            $invalidProperties[] = "'limitTypeValue' can't be null";
        }
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
        if ($this->container['parallelSize'] === null) {
            $invalidProperties[] = "'parallelSize' can't be null";
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
    * Gets taskScope
    *  限流任务范围，目前支持SQL,SESSION级别范围。
    *
    * @return string
    */
    public function getTaskScope()
    {
        return $this->container['taskScope'];
    }

    /**
    * Sets taskScope
    *
    * @param string $taskScope 限流任务范围，目前支持SQL,SESSION级别范围。
    *
    * @return $this
    */
    public function setTaskScope($taskScope)
    {
        $this->container['taskScope'] = $taskScope;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间,取值范围：非空且大于等于当前时间的前俩分钟，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
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
    * @param string|null $startTime 任务开始时间,取值范围：非空且大于等于当前时间的前俩分钟，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
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
    *  任务结束时间,取值范围：非空且大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
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
    * @param string|null $endTime 任务结束时间,取值范围：非空且大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ,当前时间指UTC时间，SQL范围必传。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limitType
    *  限流类型：当限流范围为SQL级别时，可选SQL_ID、SQL_TYPE类型，当限流范围为SESSION级别时，可选SESSION_ACTIVE_MAX_COUNT类型。
    *
    * @return string
    */
    public function getLimitType()
    {
        return $this->container['limitType'];
    }

    /**
    * Sets limitType
    *
    * @param string $limitType 限流类型：当限流范围为SQL级别时，可选SQL_ID、SQL_TYPE类型，当限流范围为SESSION级别时，可选SESSION_ACTIVE_MAX_COUNT类型。
    *
    * @return $this
    */
    public function setLimitType($limitType)
    {
        $this->container['limitType'] = $limitType;
        return $this;
    }

    /**
    * Gets limitTypeValue
    *  限流类型，当限流类型为SQL_ID类型时，该值为选中模板的sqlId，当限流类型为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，meger五种值，当限流类型为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。
    *
    * @return string
    */
    public function getLimitTypeValue()
    {
        return $this->container['limitTypeValue'];
    }

    /**
    * Sets limitTypeValue
    *
    * @param string $limitTypeValue 限流类型，当限流类型为SQL_ID类型时，该值为选中模板的sqlId，当限流类型为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，meger五种值，当限流类型为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。
    *
    * @return $this
    */
    public function setLimitTypeValue($limitTypeValue)
    {
        $this->container['limitTypeValue'] = $limitTypeValue;
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
    * Gets taskName
    *  限流任务名，必传，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 限流任务名，必传，只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets sqlModel
    *  CN节点执行过的SQL模板,如果类型为SQLID，则为必传。
    *
    * @return string|null
    */
    public function getSqlModel()
    {
        return $this->container['sqlModel'];
    }

    /**
    * Sets sqlModel
    *
    * @param string|null $sqlModel CN节点执行过的SQL模板,如果类型为SQLID，则为必传。
    *
    * @return $this
    */
    public function setSqlModel($sqlModel)
    {
        $this->container['sqlModel'] = $sqlModel;
        return $this;
    }

    /**
    * Gets parallelSize
    *  并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    *
    * @return int
    */
    public function getParallelSize()
    {
        return $this->container['parallelSize'];
    }

    /**
    * Sets parallelSize
    *
    * @param int $parallelSize 并发数，大于等于零的正整数，取值范围[0, 2147483647]。
    *
    * @return $this
    */
    public function setParallelSize($parallelSize)
    {
        $this->container['parallelSize'] = $parallelSize;
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
    *  CN节点数据库组,每个数据库字符串以逗号形式隔,如果类型为SQL_TYPE，则为必传。
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
    * @param string|null $databases CN节点数据库组,每个数据库字符串以逗号形式隔,如果类型为SQL_TYPE，则为必传。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets nodeInfos
    *  CN节点信息列表，如果类型为SQL_ID，则为必传
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeOption[]|null
    */
    public function getNodeInfos()
    {
        return $this->container['nodeInfos'];
    }

    /**
    * Sets nodeInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeOption[]|null $nodeInfos CN节点信息列表，如果类型为SQL_ID，则为必传
    *
    * @return $this
    */
    public function setNodeInfos($nodeInfos)
    {
        $this->container['nodeInfos'] = $nodeInfos;
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

