<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryLtsLogParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryLtsLogParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * labels  日志过滤条件集合，不同日志来源所需字段不同。
    * isCount  日志条数统计。默认为false(不统计)，true为统计日志条数。
    * keywords  支持关键词精确搜索。关键词指相邻两个分词符之间的单词,例：error
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。line_num应在start_time 和 end_time 之间。
    * time  若已开启自定义时间功能，需要使用该字段进行分页查询。
    * isDesc  顺序或者倒序查询, 默认为false(顺序查询)
    * searchType  首次查询为 “init”, 分页查询时为 “forwards”或者“backwards”, 默认为首次查询“init”, 与 is_desc 参数配合进行分页查询。
    * limit  表示每次查询的日志条数，不填时默认为50，建议您设置为100。
    * highlight  日志关键词高亮显示，默认为true（高亮显示），false为取消高亮显示。
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    * query  使用带管道符的sql分析语句进行查询，需要query参数is_analysis_query为true时生效。
    * isAnalysisQuery  是否为带管道符的sql分析语句。当该参数为true时，将依照body体中的query参数内容进行查询，且body体中除start_time与end_time以外的参数失效，分页、排序、查询结果条数等功能请依照sql语法规则实现。查询结果的响应体不同于未启用时的查询方式，将以默认列存的形式返回查询结果。当前仅对内测用户开放。响应示例：{\"analysisLogs\":[{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"}]}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'labels' => 'map[string,string]',
            'isCount' => 'bool',
            'keywords' => 'string',
            'lineNum' => 'string',
            'time' => 'string',
            'isDesc' => 'bool',
            'searchType' => 'string',
            'limit' => 'int',
            'highlight' => 'bool',
            'isIterative' => 'bool',
            'query' => 'string',
            'isAnalysisQuery' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * labels  日志过滤条件集合，不同日志来源所需字段不同。
    * isCount  日志条数统计。默认为false(不统计)，true为统计日志条数。
    * keywords  支持关键词精确搜索。关键词指相邻两个分词符之间的单词,例：error
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。line_num应在start_time 和 end_time 之间。
    * time  若已开启自定义时间功能，需要使用该字段进行分页查询。
    * isDesc  顺序或者倒序查询, 默认为false(顺序查询)
    * searchType  首次查询为 “init”, 分页查询时为 “forwards”或者“backwards”, 默认为首次查询“init”, 与 is_desc 参数配合进行分页查询。
    * limit  表示每次查询的日志条数，不填时默认为50，建议您设置为100。
    * highlight  日志关键词高亮显示，默认为true（高亮显示），false为取消高亮显示。
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    * query  使用带管道符的sql分析语句进行查询，需要query参数is_analysis_query为true时生效。
    * isAnalysisQuery  是否为带管道符的sql分析语句。当该参数为true时，将依照body体中的query参数内容进行查询，且body体中除start_time与end_time以外的参数失效，分页、排序、查询结果条数等功能请依照sql语法规则实现。查询结果的响应体不同于未启用时的查询方式，将以默认列存的形式返回查询结果。当前仅对内测用户开放。响应示例：{\"analysisLogs\":[{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"}]}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'labels' => null,
        'isCount' => null,
        'keywords' => null,
        'lineNum' => null,
        'time' => null,
        'isDesc' => null,
        'searchType' => null,
        'limit' => 'int32',
        'highlight' => null,
        'isIterative' => null,
        'query' => null,
        'isAnalysisQuery' => null
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
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * labels  日志过滤条件集合，不同日志来源所需字段不同。
    * isCount  日志条数统计。默认为false(不统计)，true为统计日志条数。
    * keywords  支持关键词精确搜索。关键词指相邻两个分词符之间的单词,例：error
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。line_num应在start_time 和 end_time 之间。
    * time  若已开启自定义时间功能，需要使用该字段进行分页查询。
    * isDesc  顺序或者倒序查询, 默认为false(顺序查询)
    * searchType  首次查询为 “init”, 分页查询时为 “forwards”或者“backwards”, 默认为首次查询“init”, 与 is_desc 参数配合进行分页查询。
    * limit  表示每次查询的日志条数，不填时默认为50，建议您设置为100。
    * highlight  日志关键词高亮显示，默认为true（高亮显示），false为取消高亮显示。
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    * query  使用带管道符的sql分析语句进行查询，需要query参数is_analysis_query为true时生效。
    * isAnalysisQuery  是否为带管道符的sql分析语句。当该参数为true时，将依照body体中的query参数内容进行查询，且body体中除start_time与end_time以外的参数失效，分页、排序、查询结果条数等功能请依照sql语法规则实现。查询结果的响应体不同于未启用时的查询方式，将以默认列存的形式返回查询结果。当前仅对内测用户开放。响应示例：{\"analysisLogs\":[{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"}]}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'labels' => 'labels',
            'isCount' => 'is_count',
            'keywords' => 'keywords',
            'lineNum' => 'line_num',
            'time' => '__time__',
            'isDesc' => 'is_desc',
            'searchType' => 'search_type',
            'limit' => 'limit',
            'highlight' => 'highlight',
            'isIterative' => 'is_iterative',
            'query' => 'query',
            'isAnalysisQuery' => 'is_analysis_query'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * labels  日志过滤条件集合，不同日志来源所需字段不同。
    * isCount  日志条数统计。默认为false(不统计)，true为统计日志条数。
    * keywords  支持关键词精确搜索。关键词指相邻两个分词符之间的单词,例：error
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。line_num应在start_time 和 end_time 之间。
    * time  若已开启自定义时间功能，需要使用该字段进行分页查询。
    * isDesc  顺序或者倒序查询, 默认为false(顺序查询)
    * searchType  首次查询为 “init”, 分页查询时为 “forwards”或者“backwards”, 默认为首次查询“init”, 与 is_desc 参数配合进行分页查询。
    * limit  表示每次查询的日志条数，不填时默认为50，建议您设置为100。
    * highlight  日志关键词高亮显示，默认为true（高亮显示），false为取消高亮显示。
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    * query  使用带管道符的sql分析语句进行查询，需要query参数is_analysis_query为true时生效。
    * isAnalysisQuery  是否为带管道符的sql分析语句。当该参数为true时，将依照body体中的query参数内容进行查询，且body体中除start_time与end_time以外的参数失效，分页、排序、查询结果条数等功能请依照sql语法规则实现。查询结果的响应体不同于未启用时的查询方式，将以默认列存的形式返回查询结果。当前仅对内测用户开放。响应示例：{\"analysisLogs\":[{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"}]}
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'labels' => 'setLabels',
            'isCount' => 'setIsCount',
            'keywords' => 'setKeywords',
            'lineNum' => 'setLineNum',
            'time' => 'setTime',
            'isDesc' => 'setIsDesc',
            'searchType' => 'setSearchType',
            'limit' => 'setLimit',
            'highlight' => 'setHighlight',
            'isIterative' => 'setIsIterative',
            'query' => 'setQuery',
            'isAnalysisQuery' => 'setIsAnalysisQuery'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索结束时间（UTC时间，毫秒级）。
    * labels  日志过滤条件集合，不同日志来源所需字段不同。
    * isCount  日志条数统计。默认为false(不统计)，true为统计日志条数。
    * keywords  支持关键词精确搜索。关键词指相邻两个分词符之间的单词,例：error
    * lineNum  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。line_num应在start_time 和 end_time 之间。
    * time  若已开启自定义时间功能，需要使用该字段进行分页查询。
    * isDesc  顺序或者倒序查询, 默认为false(顺序查询)
    * searchType  首次查询为 “init”, 分页查询时为 “forwards”或者“backwards”, 默认为首次查询“init”, 与 is_desc 参数配合进行分页查询。
    * limit  表示每次查询的日志条数，不填时默认为50，建议您设置为100。
    * highlight  日志关键词高亮显示，默认为true（高亮显示），false为取消高亮显示。
    * isIterative  日志迭代查询，默认为false（不开启迭代），true为开启迭代。
    * query  使用带管道符的sql分析语句进行查询，需要query参数is_analysis_query为true时生效。
    * isAnalysisQuery  是否为带管道符的sql分析语句。当该参数为true时，将依照body体中的query参数内容进行查询，且body体中除start_time与end_time以外的参数失效，分页、排序、查询结果条数等功能请依照sql语法规则实现。查询结果的响应体不同于未启用时的查询方式，将以默认列存的形式返回查询结果。当前仅对内测用户开放。响应示例：{\"analysisLogs\":[{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"}]}
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'labels' => 'getLabels',
            'isCount' => 'getIsCount',
            'keywords' => 'getKeywords',
            'lineNum' => 'getLineNum',
            'time' => 'getTime',
            'isDesc' => 'getIsDesc',
            'searchType' => 'getSearchType',
            'limit' => 'getLimit',
            'highlight' => 'getHighlight',
            'isIterative' => 'getIsIterative',
            'query' => 'getQuery',
            'isAnalysisQuery' => 'getIsAnalysisQuery'
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
    const SEARCH_TYPE_FORWARDS = 'forwards';
    const SEARCH_TYPE_BACKWARDS = 'backwards';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSearchTypeAllowableValues()
    {
        return [
            self::SEARCH_TYPE_FORWARDS,
            self::SEARCH_TYPE_BACKWARDS,
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
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['isCount'] = isset($data['isCount']) ? $data['isCount'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['isDesc'] = isset($data['isDesc']) ? $data['isDesc'] : null;
        $this->container['searchType'] = isset($data['searchType']) ? $data['searchType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['highlight'] = isset($data['highlight']) ? $data['highlight'] : null;
        $this->container['isIterative'] = isset($data['isIterative']) ? $data['isIterative'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['isAnalysisQuery'] = isset($data['isAnalysisQuery']) ? $data['isAnalysisQuery'] : null;
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
            if ((mb_strlen($this->container['startTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 13.";
            }
            if ((mb_strlen($this->container['startTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 13.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 13.";
            }
            if ((mb_strlen($this->container['endTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['lineNum']) && (mb_strlen($this->container['lineNum']) > 19)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['lineNum']) && (mb_strlen($this->container['lineNum']) < 19)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be bigger than or equal to 19.";
            }
            $allowedValues = $this->getSearchTypeAllowableValues();
                if (!is_null($this->container['searchType']) && !in_array($this->container['searchType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'searchType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 5000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    *  搜索起始时间（UTC时间，毫秒级）。
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
    * @param string $startTime 搜索起始时间（UTC时间，毫秒级）。
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
    *  搜索结束时间（UTC时间，毫秒级）。
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
    * @param string $endTime 搜索结束时间（UTC时间，毫秒级）。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets labels
    *  日志过滤条件集合，不同日志来源所需字段不同。
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels 日志过滤条件集合，不同日志来源所需字段不同。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets isCount
    *  日志条数统计。默认为false(不统计)，true为统计日志条数。
    *
    * @return bool|null
    */
    public function getIsCount()
    {
        return $this->container['isCount'];
    }

    /**
    * Sets isCount
    *
    * @param bool|null $isCount 日志条数统计。默认为false(不统计)，true为统计日志条数。
    *
    * @return $this
    */
    public function setIsCount($isCount)
    {
        $this->container['isCount'] = $isCount;
        return $this;
    }

    /**
    * Gets keywords
    *  支持关键词精确搜索。关键词指相邻两个分词符之间的单词,例：error
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
    * @param string|null $keywords 支持关键词精确搜索。关键词指相邻两个分词符之间的单词,例：error
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets lineNum
    *  日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。line_num应在start_time 和 end_time 之间。
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
    * @param string|null $lineNum 日志单行序列号，第一次查询时不需要此参数，后续分页查询时需要使用，可从上次查询的返回信息中获取。line_num应在start_time 和 end_time 之间。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
        return $this;
    }

    /**
    * Gets time
    *  若已开启自定义时间功能，需要使用该字段进行分页查询。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 若已开启自定义时间功能，需要使用该字段进行分页查询。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets isDesc
    *  顺序或者倒序查询, 默认为false(顺序查询)
    *
    * @return bool|null
    */
    public function getIsDesc()
    {
        return $this->container['isDesc'];
    }

    /**
    * Sets isDesc
    *
    * @param bool|null $isDesc 顺序或者倒序查询, 默认为false(顺序查询)
    *
    * @return $this
    */
    public function setIsDesc($isDesc)
    {
        $this->container['isDesc'] = $isDesc;
        return $this;
    }

    /**
    * Gets searchType
    *  首次查询为 “init”, 分页查询时为 “forwards”或者“backwards”, 默认为首次查询“init”, 与 is_desc 参数配合进行分页查询。
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
    * @param string|null $searchType 首次查询为 “init”, 分页查询时为 “forwards”或者“backwards”, 默认为首次查询“init”, 与 is_desc 参数配合进行分页查询。
    *
    * @return $this
    */
    public function setSearchType($searchType)
    {
        $this->container['searchType'] = $searchType;
        return $this;
    }

    /**
    * Gets limit
    *  表示每次查询的日志条数，不填时默认为50，建议您设置为100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 表示每次查询的日志条数，不填时默认为50，建议您设置为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets highlight
    *  日志关键词高亮显示，默认为true（高亮显示），false为取消高亮显示。
    *
    * @return bool|null
    */
    public function getHighlight()
    {
        return $this->container['highlight'];
    }

    /**
    * Sets highlight
    *
    * @param bool|null $highlight 日志关键词高亮显示，默认为true（高亮显示），false为取消高亮显示。
    *
    * @return $this
    */
    public function setHighlight($highlight)
    {
        $this->container['highlight'] = $highlight;
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
    * Gets query
    *  使用带管道符的sql分析语句进行查询，需要query参数is_analysis_query为true时生效。
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 使用带管道符的sql分析语句进行查询，需要query参数is_analysis_query为true时生效。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets isAnalysisQuery
    *  是否为带管道符的sql分析语句。当该参数为true时，将依照body体中的query参数内容进行查询，且body体中除start_time与end_time以外的参数失效，分页、排序、查询结果条数等功能请依照sql语法规则实现。查询结果的响应体不同于未启用时的查询方式，将以默认列存的形式返回查询结果。当前仅对内测用户开放。响应示例：{\"analysisLogs\":[{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"}]}
    *
    * @return bool|null
    */
    public function getIsAnalysisQuery()
    {
        return $this->container['isAnalysisQuery'];
    }

    /**
    * Sets isAnalysisQuery
    *
    * @param bool|null $isAnalysisQuery 是否为带管道符的sql分析语句。当该参数为true时，将依照body体中的query参数内容进行查询，且body体中除start_time与end_time以外的参数失效，分页、排序、查询结果条数等功能请依照sql语法规则实现。查询结果的响应体不同于未启用时的查询方式，将以默认列存的形式返回查询结果。当前仅对内测用户开放。响应示例：{\"analysisLogs\":[{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"},{\"field1\":\"1\",\"field2\":\"2\",\"field3\":\"3\"}]}
    *
    * @return $this
    */
    public function setIsAnalysisQuery($isAnalysisQuery)
    {
        $this->container['isAnalysisQuery'] = $isAnalysisQuery;
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

