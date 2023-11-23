<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLtsErrorLogsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLtsErrorLogsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一页查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * severity  日志级别，取空值表示查询所有日志级别。
    * searchType  日志查询方式，需结合line_num使用, 以line_num的日志为起始点: - 取值\"backwards\"时，表示查询上一页limit大小的日志 - 取值\"forwards\"时，表示查询下一页limit大小的日志 - 不传默认\"forwards\"
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'limit' => 'int',
            'lineNum' => 'string',
            'severity' => 'string',
            'searchType' => 'string',
            'nodeId' => 'string',
            'keywords' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一页查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * severity  日志级别，取空值表示查询所有日志级别。
    * searchType  日志查询方式，需结合line_num使用, 以line_num的日志为起始点: - 取值\"backwards\"时，表示查询上一页limit大小的日志 - 取值\"forwards\"时，表示查询下一页limit大小的日志 - 不传默认\"forwards\"
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'limit' => null,
        'lineNum' => null,
        'severity' => null,
        'searchType' => null,
        'nodeId' => null,
        'keywords' => null
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
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一页查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * severity  日志级别，取空值表示查询所有日志级别。
    * searchType  日志查询方式，需结合line_num使用, 以line_num的日志为起始点: - 取值\"backwards\"时，表示查询上一页limit大小的日志 - 取值\"forwards\"时，表示查询下一页limit大小的日志 - 不传默认\"forwards\"
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'lineNum' => 'line_num',
            'severity' => 'severity',
            'searchType' => 'search_type',
            'nodeId' => 'node_id',
            'keywords' => 'keywords'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一页查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * severity  日志级别，取空值表示查询所有日志级别。
    * searchType  日志查询方式，需结合line_num使用, 以line_num的日志为起始点: - 取值\"backwards\"时，表示查询上一页limit大小的日志 - 取值\"forwards\"时，表示查询下一页limit大小的日志 - 不传默认\"forwards\"
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'lineNum' => 'setLineNum',
            'severity' => 'setSeverity',
            'searchType' => 'setSearchType',
            'nodeId' => 'setNodeId',
            'keywords' => 'setKeywords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：开始时间不得早于当前时间30天。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：结束时间不能晚于当前时间。
    * limit  表示每次查询的日志条数，最大限制100条。
    * lineNum  日志单行序列号，第一次查询时不需要此参数，下一页查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    * severity  日志级别，取空值表示查询所有日志级别。
    * searchType  日志查询方式，需结合line_num使用, 以line_num的日志为起始点: - 取值\"backwards\"时，表示查询上一页limit大小的日志 - 取值\"forwards\"时，表示查询下一页limit大小的日志 - 不传默认\"forwards\"
    * nodeId  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
    * keywords  根据多个关键字搜索日志全文，表示同时匹配所有关键字。 - 只支持关键字前缀模糊搜索，最多支持10个关键字。 - 每个关键字最大长度不超过512个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'lineNum' => 'getLineNum',
            'severity' => 'getSeverity',
            'searchType' => 'getSearchType',
            'nodeId' => 'getNodeId',
            'keywords' => 'getKeywords'
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
    const SEVERITY_WARNING = 'Warning';
    const SEVERITY_ERROR = 'Error';
    const SEARCH_TYPE_BACKWARDS = 'backwards';
    const SEARCH_TYPE_FORWARDS = 'forwards';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_WARNING,
            self::SEVERITY_ERROR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSearchTypeAllowableValues()
    {
        return [
            self::SEARCH_TYPE_BACKWARDS,
            self::SEARCH_TYPE_FORWARDS,
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['searchType'] = isset($data['searchType']) ? $data['searchType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
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
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSearchTypeAllowableValues();
                if (!is_null($this->container['searchType']) && !in_array($this->container['searchType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'searchType', must be one of '%s'",
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
    *  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：开始时间不得早于当前时间30天。
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
    * @param string $startTime 开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：开始时间不得早于当前时间30天。
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
    *  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：结束时间不能晚于当前时间。
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
    * @param string $endTime 结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。注：结束时间不能晚于当前时间。
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
    *  日志单行序列号，第一次查询时不需要此参数，下一页查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
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
    * @param string|null $lineNum 日志单行序列号，第一次查询时不需要此参数，下一页查询时需要使用，可从上一次查询的返回信息中获取。 说明：当次查询从line_num的下一条日志开始查询，不包含当前line_num日志。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
        return $this;
    }

    /**
    * Gets severity
    *  日志级别，取空值表示查询所有日志级别。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 日志级别，取空值表示查询所有日志级别。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets searchType
    *  日志查询方式，需结合line_num使用, 以line_num的日志为起始点: - 取值\"backwards\"时，表示查询上一页limit大小的日志 - 取值\"forwards\"时，表示查询下一页limit大小的日志 - 不传默认\"forwards\"
    *
    * @return string|null
    */
    public function getSearchType()
    {
        return $this->container['searchType'];
    }

    /**
    * Sets searchType
    *
    * @param string|null $searchType 日志查询方式，需结合line_num使用, 以line_num的日志为起始点: - 取值\"backwards\"时，表示查询上一页limit大小的日志 - 取值\"forwards\"时，表示查询下一页limit大小的日志 - 不传默认\"forwards\"
    *
    * @return $this
    */
    public function setSearchType($searchType)
    {
        $this->container['searchType'] = $searchType;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
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
    * @param string|null $nodeId 节点ID，取空值，表示查询实例下所有允许查询的节点。 使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群实例下面的 shard节点 - 副本集、单节点实例下面的所有节点
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

