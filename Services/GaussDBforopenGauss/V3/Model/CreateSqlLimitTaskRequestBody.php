<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlLimitTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlLimitTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskScope  **参数解释**: 限流任务范围，目前支持SQL、SESSION级别范围。 **约束限制**: 不涉及。 **取值范围**: - SQL - SESSION  **默认取值**: 不涉及。
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **约束限制**: 如果“limit_type”为SQLID，必传。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。  **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值。 **约束限制**: 不涉及。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，merge。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。  **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE时，必传。 **取值范围**: 多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值以及非首尾的空格符。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数，取值范围[0, 2147483647]。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和CPU利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: 数据库名称，限流只对指定的数据库生效，多个数据库名称用英文逗号分割。 **约束限制**: 当“limit_type”为SQL_TYPE类型时，databases参数必选。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表 **约束限制**: 如果“limit_type”为SQL_ID，则“node_infos”必选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskScope' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'sqlModel' => 'string',
            'limitType' => 'string',
            'limitTypeValue' => 'string',
            'keyWords' => 'string',
            'taskName' => 'string',
            'parallelSize' => 'int',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int',
            'databases' => 'string',
            'nodeInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskScope  **参数解释**: 限流任务范围，目前支持SQL、SESSION级别范围。 **约束限制**: 不涉及。 **取值范围**: - SQL - SESSION  **默认取值**: 不涉及。
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **约束限制**: 如果“limit_type”为SQLID，必传。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。  **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值。 **约束限制**: 不涉及。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，merge。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。  **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE时，必传。 **取值范围**: 多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值以及非首尾的空格符。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数，取值范围[0, 2147483647]。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和CPU利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: 数据库名称，限流只对指定的数据库生效，多个数据库名称用英文逗号分割。 **约束限制**: 当“limit_type”为SQL_TYPE类型时，databases参数必选。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表 **约束限制**: 如果“limit_type”为SQL_ID，则“node_infos”必选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskScope' => null,
        'startTime' => null,
        'endTime' => null,
        'sqlModel' => null,
        'limitType' => null,
        'limitTypeValue' => null,
        'keyWords' => null,
        'taskName' => null,
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
    * taskScope  **参数解释**: 限流任务范围，目前支持SQL、SESSION级别范围。 **约束限制**: 不涉及。 **取值范围**: - SQL - SESSION  **默认取值**: 不涉及。
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **约束限制**: 如果“limit_type”为SQLID，必传。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。  **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值。 **约束限制**: 不涉及。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，merge。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。  **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE时，必传。 **取值范围**: 多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值以及非首尾的空格符。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数，取值范围[0, 2147483647]。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和CPU利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: 数据库名称，限流只对指定的数据库生效，多个数据库名称用英文逗号分割。 **约束限制**: 当“limit_type”为SQL_TYPE类型时，databases参数必选。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表 **约束限制**: 如果“limit_type”为SQL_ID，则“node_infos”必选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskScope' => 'task_scope',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'sqlModel' => 'sql_model',
            'limitType' => 'limit_type',
            'limitTypeValue' => 'limit_type_value',
            'keyWords' => 'key_words',
            'taskName' => 'task_name',
            'parallelSize' => 'parallel_size',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization',
            'databases' => 'databases',
            'nodeInfos' => 'node_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskScope  **参数解释**: 限流任务范围，目前支持SQL、SESSION级别范围。 **约束限制**: 不涉及。 **取值范围**: - SQL - SESSION  **默认取值**: 不涉及。
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **约束限制**: 如果“limit_type”为SQLID，必传。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。  **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值。 **约束限制**: 不涉及。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，merge。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。  **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE时，必传。 **取值范围**: 多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值以及非首尾的空格符。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数，取值范围[0, 2147483647]。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和CPU利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: 数据库名称，限流只对指定的数据库生效，多个数据库名称用英文逗号分割。 **约束限制**: 当“limit_type”为SQL_TYPE类型时，databases参数必选。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表 **约束限制**: 如果“limit_type”为SQL_ID，则“node_infos”必选。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskScope' => 'setTaskScope',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'sqlModel' => 'setSqlModel',
            'limitType' => 'setLimitType',
            'limitTypeValue' => 'setLimitTypeValue',
            'keyWords' => 'setKeyWords',
            'taskName' => 'setTaskName',
            'parallelSize' => 'setParallelSize',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization',
            'databases' => 'setDatabases',
            'nodeInfos' => 'setNodeInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskScope  **参数解释**: 限流任务范围，目前支持SQL、SESSION级别范围。 **约束限制**: 不涉及。 **取值范围**: - SQL - SESSION  **默认取值**: 不涉及。
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **约束限制**: 如果“limit_type”为SQLID，必传。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。  **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值。 **约束限制**: 不涉及。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，merge。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。  **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE时，必传。 **取值范围**: 多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值以及非首尾的空格符。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数，取值范围[0, 2147483647]。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和CPU利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: 数据库名称，限流只对指定的数据库生效，多个数据库名称用英文逗号分割。 **约束限制**: 当“limit_type”为SQL_TYPE类型时，databases参数必选。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表 **约束限制**: 如果“limit_type”为SQL_ID，则“node_infos”必选。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskScope' => 'getTaskScope',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'sqlModel' => 'getSqlModel',
            'limitType' => 'getLimitType',
            'limitTypeValue' => 'getLimitTypeValue',
            'keyWords' => 'getKeyWords',
            'taskName' => 'getTaskName',
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
        $this->container['sqlModel'] = isset($data['sqlModel']) ? $data['sqlModel'] : null;
        $this->container['limitType'] = isset($data['limitType']) ? $data['limitType'] : null;
        $this->container['limitTypeValue'] = isset($data['limitTypeValue']) ? $data['limitTypeValue'] : null;
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
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
    *  **参数解释**: 限流任务范围，目前支持SQL、SESSION级别范围。 **约束限制**: 不涉及。 **取值范围**: - SQL - SESSION  **默认取值**: 不涉及。
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
    * @param string $taskScope **参数解释**: 限流任务范围，目前支持SQL、SESSION级别范围。 **约束限制**: 不涉及。 **取值范围**: - SQL - SESSION  **默认取值**: 不涉及。
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
    *  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
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
    * @param string|null $startTime **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
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
    *  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
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
    * @param string|null $endTime **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 大于任务开始时间，格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets sqlModel
    *  **参数解释**: SQL模板。 **约束限制**: 如果“limit_type”为SQLID，必传。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $sqlModel **参数解释**: SQL模板。 **约束限制**: 如果“limit_type”为SQLID，必传。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSqlModel($sqlModel)
    {
        $this->container['sqlModel'] = $sqlModel;
        return $this;
    }

    /**
    * Gets limitType
    *  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。  **默认取值**: 不涉及。
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
    * @param string $limitType **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。  **默认取值**: 不涉及。
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
    *  **参数解释**: 限流类型值。 **约束限制**: 不涉及。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，merge。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。  **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getLimitTypeValue()
    {
        return $this->container['limitTypeValue'];
    }

    /**
    * Sets limitTypeValue
    *
    * @param string|null $limitTypeValue **参数解释**: 限流类型值。 **约束限制**: 不涉及。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，目前支持select，update，insert，delete，merge。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，只支持CPU_OR_MEMORY一种值。  **默认取值**: 不涉及。
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
    *  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE时，必传。 **取值范围**: 多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值以及非首尾的空格符。 **默认取值**: 不涉及。
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
    * @param string|null $keyWords **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE时，必传。 **取值范围**: 多个关键词以逗号隔开，数量范围为[2，100]个，每个关键词长度范围[2，64]位，关键词不允许包含 \" 或 \\ 或 {} 或 null值以及非首尾的空格符。 **默认取值**: 不涉及。
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
    *  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。 **默认取值**: 不涉及。
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
    * @param string $taskName **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符，最大长度为100个字符。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets parallelSize
    *  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数，取值范围[0, 2147483647]。 **默认取值**: 不涉及。
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
    * @param int $parallelSize **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数，取值范围[0, 2147483647]。 **默认取值**: 不涉及。
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
    *  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
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
    * @param int|null $cpuUtilization **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和内存利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
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
    *  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和CPU利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
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
    * @param int|null $memoryUtilization **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，必传。不支持和CPU利用率阈值同时为0，如果选择只限制CPU、内存中的其中一个，则另一个必须传值0。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
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
    *  **参数解释**: 数据库名称，限流只对指定的数据库生效，多个数据库名称用英文逗号分割。 **约束限制**: 当“limit_type”为SQL_TYPE类型时，databases参数必选。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $databases **参数解释**: 数据库名称，限流只对指定的数据库生效，多个数据库名称用英文逗号分割。 **约束限制**: 当“limit_type”为SQL_TYPE类型时，databases参数必选。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: CN节点信息列表 **约束限制**: 如果“limit_type”为SQL_ID，则“node_infos”必选。
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
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeOption[]|null $nodeInfos **参数解释**: CN节点信息列表 **约束限制**: 如果“limit_type”为SQL_ID，则“node_infos”必选。
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

