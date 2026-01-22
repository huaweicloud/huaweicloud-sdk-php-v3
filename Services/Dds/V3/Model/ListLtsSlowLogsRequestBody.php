<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLtsSlowLogsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLtsSlowLogsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **注意：** 开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **说明：** 结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一次查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * operateType  语句类型，取空值，表示查询所有语句类型。
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。 允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    * databaseKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过64个字符。
    * collectionKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过128个字符。
    * maxCostTime  支持根据最大执行时间范围查找日志。 单位：ms
    * minCostTime  支持根据最小执行时间范围查找日志。 单位：ms
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'limit' => 'int',
            'lineNum' => 'string',
            'operateType' => 'string',
            'nodeId' => 'string',
            'keywords' => 'string[]',
            'databaseKeywords' => 'string[]',
            'collectionKeywords' => 'string[]',
            'maxCostTime' => 'int',
            'minCostTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **注意：** 开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **说明：** 结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一次查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * operateType  语句类型，取空值，表示查询所有语句类型。
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。 允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    * databaseKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过64个字符。
    * collectionKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过128个字符。
    * maxCostTime  支持根据最大执行时间范围查找日志。 单位：ms
    * minCostTime  支持根据最小执行时间范围查找日志。 单位：ms
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'limit' => null,
        'lineNum' => null,
        'operateType' => null,
        'nodeId' => null,
        'keywords' => null,
        'databaseKeywords' => null,
        'collectionKeywords' => null,
        'maxCostTime' => null,
        'minCostTime' => null
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
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **注意：** 开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **说明：** 结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一次查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * operateType  语句类型，取空值，表示查询所有语句类型。
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。 允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    * databaseKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过64个字符。
    * collectionKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过128个字符。
    * maxCostTime  支持根据最大执行时间范围查找日志。 单位：ms
    * minCostTime  支持根据最小执行时间范围查找日志。 单位：ms
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'lineNum' => 'line_num',
            'operateType' => 'operate_type',
            'nodeId' => 'node_id',
            'keywords' => 'keywords',
            'databaseKeywords' => 'database_keywords',
            'collectionKeywords' => 'collection_keywords',
            'maxCostTime' => 'max_cost_time',
            'minCostTime' => 'min_cost_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **注意：** 开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **说明：** 结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一次查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * operateType  语句类型，取空值，表示查询所有语句类型。
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。 允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    * databaseKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过64个字符。
    * collectionKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过128个字符。
    * maxCostTime  支持根据最大执行时间范围查找日志。 单位：ms
    * minCostTime  支持根据最小执行时间范围查找日志。 单位：ms
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'lineNum' => 'setLineNum',
            'operateType' => 'setOperateType',
            'nodeId' => 'setNodeId',
            'keywords' => 'setKeywords',
            'databaseKeywords' => 'setDatabaseKeywords',
            'collectionKeywords' => 'setCollectionKeywords',
            'maxCostTime' => 'setMaxCostTime',
            'minCostTime' => 'setMinCostTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **注意：** 开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **说明：** 结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一次查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * operateType  语句类型，取空值，表示查询所有语句类型。
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。 允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    * databaseKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过64个字符。
    * collectionKeywords  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过128个字符。
    * maxCostTime  支持根据最大执行时间范围查找日志。 单位：ms
    * minCostTime  支持根据最小执行时间范围查找日志。 单位：ms
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'lineNum' => 'getLineNum',
            'operateType' => 'getOperateType',
            'nodeId' => 'getNodeId',
            'keywords' => 'getKeywords',
            'databaseKeywords' => 'getDatabaseKeywords',
            'collectionKeywords' => 'getCollectionKeywords',
            'maxCostTime' => 'getMaxCostTime',
            'minCostTime' => 'getMinCostTime'
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
    const OPERATE_TYPE_INSERT = 'insert';
    const OPERATE_TYPE_QUERY = 'query';
    const OPERATE_TYPE_UPDATE = 'update';
    const OPERATE_TYPE_REMOVE = 'remove';
    const OPERATE_TYPE_GETMORE = 'getmore';
    const OPERATE_TYPE_COMMAND = 'command';
    const OPERATE_TYPE_KILLCURSORS = 'killcursors';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateTypeAllowableValues()
    {
        return [
            self::OPERATE_TYPE_INSERT,
            self::OPERATE_TYPE_QUERY,
            self::OPERATE_TYPE_UPDATE,
            self::OPERATE_TYPE_REMOVE,
            self::OPERATE_TYPE_GETMORE,
            self::OPERATE_TYPE_COMMAND,
            self::OPERATE_TYPE_KILLCURSORS,
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['databaseKeywords'] = isset($data['databaseKeywords']) ? $data['databaseKeywords'] : null;
        $this->container['collectionKeywords'] = isset($data['collectionKeywords']) ? $data['collectionKeywords'] : null;
        $this->container['maxCostTime'] = isset($data['maxCostTime']) ? $data['maxCostTime'] : null;
        $this->container['minCostTime'] = isset($data['minCostTime']) ? $data['minCostTime'] : null;
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
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            $allowedValues = $this->getOperateTypeAllowableValues();
                if (!is_null($this->container['operateType']) && !in_array($this->container['operateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateType', must be one of '%s'",
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
    * Gets startTime
    *  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **注意：** 开始时间不得早于当前时间30天。
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
    * @param string $startTime 开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **注意：** 开始时间不得早于当前时间30天。
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
    *  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **说明：** 结束时间不能晚于当前时间。
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
    * @param string $endTime 结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **说明：** 结束时间不能晚于当前时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  表示每次查询的日志条数，最大限制100条。
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
    * @param int $limit 表示每次查询的日志条数，最大限制100条。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets lineNum
    *  日志单行序列号，第一次查询时不需要此参数，下一次查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    *
    * @return string|null
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string|null $lineNum 日志单行序列号，第一次查询时不需要此参数，下一次查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
        return $this;
    }

    /**
    * Gets operateType
    *  语句类型，取空值，表示查询所有语句类型。
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 语句类型，取空值，表示查询所有语句类型。
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。 允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。 允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets keywords
    *  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    *
    * @return string[]|null
    */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
    * Sets keywords
    *
    * @param string[]|null $keywords 根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets databaseKeywords
    *  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过64个字符。
    *
    * @return string[]|null
    */
    public function getDatabaseKeywords()
    {
        return $this->container['databaseKeywords'];
    }

    /**
    * Sets databaseKeywords
    *
    * @param string[]|null $databaseKeywords 根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过64个字符。
    *
    * @return $this
    */
    public function setDatabaseKeywords($databaseKeywords)
    {
        $this->container['databaseKeywords'] = $databaseKeywords;
        return $this;
    }

    /**
    * Gets collectionKeywords
    *  根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过128个字符。
    *
    * @return string[]|null
    */
    public function getCollectionKeywords()
    {
        return $this->container['collectionKeywords'];
    }

    /**
    * Sets collectionKeywords
    *
    * @param string[]|null $collectionKeywords 根据多个数据库表名关键字模糊搜索日志，表示匹配至少一个关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过128个字符。
    *
    * @return $this
    */
    public function setCollectionKeywords($collectionKeywords)
    {
        $this->container['collectionKeywords'] = $collectionKeywords;
        return $this;
    }

    /**
    * Gets maxCostTime
    *  支持根据最大执行时间范围查找日志。 单位：ms
    *
    * @return int|null
    */
    public function getMaxCostTime()
    {
        return $this->container['maxCostTime'];
    }

    /**
    * Sets maxCostTime
    *
    * @param int|null $maxCostTime 支持根据最大执行时间范围查找日志。 单位：ms
    *
    * @return $this
    */
    public function setMaxCostTime($maxCostTime)
    {
        $this->container['maxCostTime'] = $maxCostTime;
        return $this;
    }

    /**
    * Gets minCostTime
    *  支持根据最小执行时间范围查找日志。 单位：ms
    *
    * @return int|null
    */
    public function getMinCostTime()
    {
        return $this->container['minCostTime'];
    }

    /**
    * Sets minCostTime
    *
    * @param int|null $minCostTime 支持根据最小执行时间范围查找日志。 单位：ms
    *
    * @return $this
    */
    public function setMinCostTime($minCostTime)
    {
        $this->container['minCostTime'] = $minCostTime;
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

