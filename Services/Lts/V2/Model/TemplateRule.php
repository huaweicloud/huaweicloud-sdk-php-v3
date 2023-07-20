<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  结构化类型，只支持custom_regex,json,split,nginx
    * param  具体结构化规则，每种结构化类型都有自己独有的结构，具体结构如下： 手动正则为json字符串，包含keyObject对象和regex_rules对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，regex_rules对象为正则表达式字符串，整体例子为{\\\"keyObject\\\":{\\\"1\\\":\\\"date\\\",\\\"2\\\":\\\"num\\\"},\\\"regex_rules\\\":\\\"^(?<date>[^/]+)(?:[^ ]* ){8}(?<num>\\\\\\\\d+)\\\"}； json方式时param为一个json字符串，包含keyObject对象和layers对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，layers为最大解析层数，当前最大值为4，整体例子为{\\\"keyObject\\\":{\\\"metadata.dimention\\\":\\\"dimention\\\",\\\"metadata.value\\\":\\\"\\\",\\\"metadata.unit\\\":\\\"\\\",\\\"collectionTime\\\":\\\"\\\"},\\\"layers\\\":3}； 分隔符方式时为json字符串，包含keyObject对象和tokenizer对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，tokenizer对象为所用分隔符，整体例子为{\\\"keyObject\\\":{\\\"0\\\":\\\"field1\\\",\\\"1\\\":\\\"field2\\\",\\\"2\\\":\\\"field3\\\",\\\"3\\\":\\\"field4\\\",\\\"4\\\":\\\"field5\\\",\\\"5\\\":\\\"field6\\\",\\\"6\\\":\\\"field7\\\",\\\"7\\\":\\\"field8\\\",\\\"8\\\":\\\"field9\\\"},\\\"tokenizer\\\":\\\" \\\"}； nginx方式时为json字符串，包含keyObject对象，regex对象，field_names对象及log_format对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，regex为正则表达式字符串，field_names对象为demo_fields数组中各元素的field_name的拼接字符串，每个field_name以','分隔，log_format对象为nginx日志格式化方式，具体方式参考https://support.huaweicloud.com/usermanual-lts/lts_0820.html#lts_0820__section1151119552549进行配置，整体例子为\"{\\\"keyObject\\\":{\\\"http_host\\\":\\\"host\\\",\\\"remote_addr\\\":\\\"\\\",\\\"request_method\\\":\\\"\\\",\\\"request_uri\\\":\\\"\\\",\\\"time_local\\\":\\\"\\\"},\\\"regex\\\":\\\"(\\\\\\\\d+/\\\\\\\\S+/\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+)\\\\\\\\s+\\\\\\\\S+\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+\\\\\\\"([^\\\\\\\"]*)\\\\\\\".*\\\",\\\"fieldNames\\\":\\\"time_local,remote_addr,request_method,http_host,request_uri\\\",\\\"log_format\\\":\\\"log_format upstreaminfo '$time_local $remote_addr  $request_method $http_host \\\\\\\"$request_uri\\\\\\\"';\\\"}\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'param' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  结构化类型，只支持custom_regex,json,split,nginx
    * param  具体结构化规则，每种结构化类型都有自己独有的结构，具体结构如下： 手动正则为json字符串，包含keyObject对象和regex_rules对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，regex_rules对象为正则表达式字符串，整体例子为{\\\"keyObject\\\":{\\\"1\\\":\\\"date\\\",\\\"2\\\":\\\"num\\\"},\\\"regex_rules\\\":\\\"^(?<date>[^/]+)(?:[^ ]* ){8}(?<num>\\\\\\\\d+)\\\"}； json方式时param为一个json字符串，包含keyObject对象和layers对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，layers为最大解析层数，当前最大值为4，整体例子为{\\\"keyObject\\\":{\\\"metadata.dimention\\\":\\\"dimention\\\",\\\"metadata.value\\\":\\\"\\\",\\\"metadata.unit\\\":\\\"\\\",\\\"collectionTime\\\":\\\"\\\"},\\\"layers\\\":3}； 分隔符方式时为json字符串，包含keyObject对象和tokenizer对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，tokenizer对象为所用分隔符，整体例子为{\\\"keyObject\\\":{\\\"0\\\":\\\"field1\\\",\\\"1\\\":\\\"field2\\\",\\\"2\\\":\\\"field3\\\",\\\"3\\\":\\\"field4\\\",\\\"4\\\":\\\"field5\\\",\\\"5\\\":\\\"field6\\\",\\\"6\\\":\\\"field7\\\",\\\"7\\\":\\\"field8\\\",\\\"8\\\":\\\"field9\\\"},\\\"tokenizer\\\":\\\" \\\"}； nginx方式时为json字符串，包含keyObject对象，regex对象，field_names对象及log_format对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，regex为正则表达式字符串，field_names对象为demo_fields数组中各元素的field_name的拼接字符串，每个field_name以','分隔，log_format对象为nginx日志格式化方式，具体方式参考https://support.huaweicloud.com/usermanual-lts/lts_0820.html#lts_0820__section1151119552549进行配置，整体例子为\"{\\\"keyObject\\\":{\\\"http_host\\\":\\\"host\\\",\\\"remote_addr\\\":\\\"\\\",\\\"request_method\\\":\\\"\\\",\\\"request_uri\\\":\\\"\\\",\\\"time_local\\\":\\\"\\\"},\\\"regex\\\":\\\"(\\\\\\\\d+/\\\\\\\\S+/\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+)\\\\\\\\s+\\\\\\\\S+\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+\\\\\\\"([^\\\\\\\"]*)\\\\\\\".*\\\",\\\"fieldNames\\\":\\\"time_local,remote_addr,request_method,http_host,request_uri\\\",\\\"log_format\\\":\\\"log_format upstreaminfo '$time_local $remote_addr  $request_method $http_host \\\\\\\"$request_uri\\\\\\\"';\\\"}\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'param' => null
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
    * type  结构化类型，只支持custom_regex,json,split,nginx
    * param  具体结构化规则，每种结构化类型都有自己独有的结构，具体结构如下： 手动正则为json字符串，包含keyObject对象和regex_rules对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，regex_rules对象为正则表达式字符串，整体例子为{\\\"keyObject\\\":{\\\"1\\\":\\\"date\\\",\\\"2\\\":\\\"num\\\"},\\\"regex_rules\\\":\\\"^(?<date>[^/]+)(?:[^ ]* ){8}(?<num>\\\\\\\\d+)\\\"}； json方式时param为一个json字符串，包含keyObject对象和layers对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，layers为最大解析层数，当前最大值为4，整体例子为{\\\"keyObject\\\":{\\\"metadata.dimention\\\":\\\"dimention\\\",\\\"metadata.value\\\":\\\"\\\",\\\"metadata.unit\\\":\\\"\\\",\\\"collectionTime\\\":\\\"\\\"},\\\"layers\\\":3}； 分隔符方式时为json字符串，包含keyObject对象和tokenizer对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，tokenizer对象为所用分隔符，整体例子为{\\\"keyObject\\\":{\\\"0\\\":\\\"field1\\\",\\\"1\\\":\\\"field2\\\",\\\"2\\\":\\\"field3\\\",\\\"3\\\":\\\"field4\\\",\\\"4\\\":\\\"field5\\\",\\\"5\\\":\\\"field6\\\",\\\"6\\\":\\\"field7\\\",\\\"7\\\":\\\"field8\\\",\\\"8\\\":\\\"field9\\\"},\\\"tokenizer\\\":\\\" \\\"}； nginx方式时为json字符串，包含keyObject对象，regex对象，field_names对象及log_format对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，regex为正则表达式字符串，field_names对象为demo_fields数组中各元素的field_name的拼接字符串，每个field_name以','分隔，log_format对象为nginx日志格式化方式，具体方式参考https://support.huaweicloud.com/usermanual-lts/lts_0820.html#lts_0820__section1151119552549进行配置，整体例子为\"{\\\"keyObject\\\":{\\\"http_host\\\":\\\"host\\\",\\\"remote_addr\\\":\\\"\\\",\\\"request_method\\\":\\\"\\\",\\\"request_uri\\\":\\\"\\\",\\\"time_local\\\":\\\"\\\"},\\\"regex\\\":\\\"(\\\\\\\\d+/\\\\\\\\S+/\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+)\\\\\\\\s+\\\\\\\\S+\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+\\\\\\\"([^\\\\\\\"]*)\\\\\\\".*\\\",\\\"fieldNames\\\":\\\"time_local,remote_addr,request_method,http_host,request_uri\\\",\\\"log_format\\\":\\\"log_format upstreaminfo '$time_local $remote_addr  $request_method $http_host \\\\\\\"$request_uri\\\\\\\"';\\\"}\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'param' => 'param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  结构化类型，只支持custom_regex,json,split,nginx
    * param  具体结构化规则，每种结构化类型都有自己独有的结构，具体结构如下： 手动正则为json字符串，包含keyObject对象和regex_rules对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，regex_rules对象为正则表达式字符串，整体例子为{\\\"keyObject\\\":{\\\"1\\\":\\\"date\\\",\\\"2\\\":\\\"num\\\"},\\\"regex_rules\\\":\\\"^(?<date>[^/]+)(?:[^ ]* ){8}(?<num>\\\\\\\\d+)\\\"}； json方式时param为一个json字符串，包含keyObject对象和layers对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，layers为最大解析层数，当前最大值为4，整体例子为{\\\"keyObject\\\":{\\\"metadata.dimention\\\":\\\"dimention\\\",\\\"metadata.value\\\":\\\"\\\",\\\"metadata.unit\\\":\\\"\\\",\\\"collectionTime\\\":\\\"\\\"},\\\"layers\\\":3}； 分隔符方式时为json字符串，包含keyObject对象和tokenizer对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，tokenizer对象为所用分隔符，整体例子为{\\\"keyObject\\\":{\\\"0\\\":\\\"field1\\\",\\\"1\\\":\\\"field2\\\",\\\"2\\\":\\\"field3\\\",\\\"3\\\":\\\"field4\\\",\\\"4\\\":\\\"field5\\\",\\\"5\\\":\\\"field6\\\",\\\"6\\\":\\\"field7\\\",\\\"7\\\":\\\"field8\\\",\\\"8\\\":\\\"field9\\\"},\\\"tokenizer\\\":\\\" \\\"}； nginx方式时为json字符串，包含keyObject对象，regex对象，field_names对象及log_format对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，regex为正则表达式字符串，field_names对象为demo_fields数组中各元素的field_name的拼接字符串，每个field_name以','分隔，log_format对象为nginx日志格式化方式，具体方式参考https://support.huaweicloud.com/usermanual-lts/lts_0820.html#lts_0820__section1151119552549进行配置，整体例子为\"{\\\"keyObject\\\":{\\\"http_host\\\":\\\"host\\\",\\\"remote_addr\\\":\\\"\\\",\\\"request_method\\\":\\\"\\\",\\\"request_uri\\\":\\\"\\\",\\\"time_local\\\":\\\"\\\"},\\\"regex\\\":\\\"(\\\\\\\\d+/\\\\\\\\S+/\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+)\\\\\\\\s+\\\\\\\\S+\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+\\\\\\\"([^\\\\\\\"]*)\\\\\\\".*\\\",\\\"fieldNames\\\":\\\"time_local,remote_addr,request_method,http_host,request_uri\\\",\\\"log_format\\\":\\\"log_format upstreaminfo '$time_local $remote_addr  $request_method $http_host \\\\\\\"$request_uri\\\\\\\"';\\\"}\"
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'param' => 'setParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  结构化类型，只支持custom_regex,json,split,nginx
    * param  具体结构化规则，每种结构化类型都有自己独有的结构，具体结构如下： 手动正则为json字符串，包含keyObject对象和regex_rules对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，regex_rules对象为正则表达式字符串，整体例子为{\\\"keyObject\\\":{\\\"1\\\":\\\"date\\\",\\\"2\\\":\\\"num\\\"},\\\"regex_rules\\\":\\\"^(?<date>[^/]+)(?:[^ ]* ){8}(?<num>\\\\\\\\d+)\\\"}； json方式时param为一个json字符串，包含keyObject对象和layers对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，layers为最大解析层数，当前最大值为4，整体例子为{\\\"keyObject\\\":{\\\"metadata.dimention\\\":\\\"dimention\\\",\\\"metadata.value\\\":\\\"\\\",\\\"metadata.unit\\\":\\\"\\\",\\\"collectionTime\\\":\\\"\\\"},\\\"layers\\\":3}； 分隔符方式时为json字符串，包含keyObject对象和tokenizer对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，tokenizer对象为所用分隔符，整体例子为{\\\"keyObject\\\":{\\\"0\\\":\\\"field1\\\",\\\"1\\\":\\\"field2\\\",\\\"2\\\":\\\"field3\\\",\\\"3\\\":\\\"field4\\\",\\\"4\\\":\\\"field5\\\",\\\"5\\\":\\\"field6\\\",\\\"6\\\":\\\"field7\\\",\\\"7\\\":\\\"field8\\\",\\\"8\\\":\\\"field9\\\"},\\\"tokenizer\\\":\\\" \\\"}； nginx方式时为json字符串，包含keyObject对象，regex对象，field_names对象及log_format对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，regex为正则表达式字符串，field_names对象为demo_fields数组中各元素的field_name的拼接字符串，每个field_name以','分隔，log_format对象为nginx日志格式化方式，具体方式参考https://support.huaweicloud.com/usermanual-lts/lts_0820.html#lts_0820__section1151119552549进行配置，整体例子为\"{\\\"keyObject\\\":{\\\"http_host\\\":\\\"host\\\",\\\"remote_addr\\\":\\\"\\\",\\\"request_method\\\":\\\"\\\",\\\"request_uri\\\":\\\"\\\",\\\"time_local\\\":\\\"\\\"},\\\"regex\\\":\\\"(\\\\\\\\d+/\\\\\\\\S+/\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+)\\\\\\\\s+\\\\\\\\S+\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+\\\\\\\"([^\\\\\\\"]*)\\\\\\\".*\\\",\\\"fieldNames\\\":\\\"time_local,remote_addr,request_method,http_host,request_uri\\\",\\\"log_format\\\":\\\"log_format upstreaminfo '$time_local $remote_addr  $request_method $http_host \\\\\\\"$request_uri\\\\\\\"';\\\"}\"
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'param' => 'getParam'
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
    const TYPE_CUSTOM_REGEX = 'custom_regex';
    const TYPE_JSON = 'json';
    const TYPE_SPLIT = 'split';
    const TYPE_NGINX = 'nginx';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CUSTOM_REGEX,
            self::TYPE_JSON,
            self::TYPE_SPLIT,
            self::TYPE_NGINX,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['param'] === null) {
            $invalidProperties[] = "'param' can't be null";
        }
            if ((mb_strlen($this->container['param']) > 5000)) {
                $invalidProperties[] = "invalid value for 'param', the character length must be smaller than or equal to 5000.";
            }
            if ((mb_strlen($this->container['param']) < 1)) {
                $invalidProperties[] = "invalid value for 'param', the character length must be bigger than or equal to 1.";
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
    * Gets type
    *  结构化类型，只支持custom_regex,json,split,nginx
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 结构化类型，只支持custom_regex,json,split,nginx
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets param
    *  具体结构化规则，每种结构化类型都有自己独有的结构，具体结构如下： 手动正则为json字符串，包含keyObject对象和regex_rules对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，regex_rules对象为正则表达式字符串，整体例子为{\\\"keyObject\\\":{\\\"1\\\":\\\"date\\\",\\\"2\\\":\\\"num\\\"},\\\"regex_rules\\\":\\\"^(?<date>[^/]+)(?:[^ ]* ){8}(?<num>\\\\\\\\d+)\\\"}； json方式时param为一个json字符串，包含keyObject对象和layers对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，layers为最大解析层数，当前最大值为4，整体例子为{\\\"keyObject\\\":{\\\"metadata.dimention\\\":\\\"dimention\\\",\\\"metadata.value\\\":\\\"\\\",\\\"metadata.unit\\\":\\\"\\\",\\\"collectionTime\\\":\\\"\\\"},\\\"layers\\\":3}； 分隔符方式时为json字符串，包含keyObject对象和tokenizer对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，tokenizer对象为所用分隔符，整体例子为{\\\"keyObject\\\":{\\\"0\\\":\\\"field1\\\",\\\"1\\\":\\\"field2\\\",\\\"2\\\":\\\"field3\\\",\\\"3\\\":\\\"field4\\\",\\\"4\\\":\\\"field5\\\",\\\"5\\\":\\\"field6\\\",\\\"6\\\":\\\"field7\\\",\\\"7\\\":\\\"field8\\\",\\\"8\\\":\\\"field9\\\"},\\\"tokenizer\\\":\\\" \\\"}； nginx方式时为json字符串，包含keyObject对象，regex对象，field_names对象及log_format对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，regex为正则表达式字符串，field_names对象为demo_fields数组中各元素的field_name的拼接字符串，每个field_name以','分隔，log_format对象为nginx日志格式化方式，具体方式参考https://support.huaweicloud.com/usermanual-lts/lts_0820.html#lts_0820__section1151119552549进行配置，整体例子为\"{\\\"keyObject\\\":{\\\"http_host\\\":\\\"host\\\",\\\"remote_addr\\\":\\\"\\\",\\\"request_method\\\":\\\"\\\",\\\"request_uri\\\":\\\"\\\",\\\"time_local\\\":\\\"\\\"},\\\"regex\\\":\\\"(\\\\\\\\d+/\\\\\\\\S+/\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+)\\\\\\\\s+\\\\\\\\S+\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+\\\\\\\"([^\\\\\\\"]*)\\\\\\\".*\\\",\\\"fieldNames\\\":\\\"time_local,remote_addr,request_method,http_host,request_uri\\\",\\\"log_format\\\":\\\"log_format upstreaminfo '$time_local $remote_addr  $request_method $http_host \\\\\\\"$request_uri\\\\\\\"';\\\"}\"
    *
    * @return string
    */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
    * Sets param
    *
    * @param string $param 具体结构化规则，每种结构化类型都有自己独有的结构，具体结构如下： 手动正则为json字符串，包含keyObject对象和regex_rules对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，regex_rules对象为正则表达式字符串，整体例子为{\\\"keyObject\\\":{\\\"1\\\":\\\"date\\\",\\\"2\\\":\\\"num\\\"},\\\"regex_rules\\\":\\\"^(?<date>[^/]+)(?:[^ ]* ){8}(?<num>\\\\\\\\d+)\\\"}； json方式时param为一个json字符串，包含keyObject对象和layers对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，layers为最大解析层数，当前最大值为4，整体例子为{\\\"keyObject\\\":{\\\"metadata.dimention\\\":\\\"dimention\\\",\\\"metadata.value\\\":\\\"\\\",\\\"metadata.unit\\\":\\\"\\\",\\\"collectionTime\\\":\\\"\\\"},\\\"layers\\\":3}； 分隔符方式时为json字符串，包含keyObject对象和tokenizer对象，keyObject内为键值对，键为demo_fields数组中元素的index，值为field_name，tokenizer对象为所用分隔符，整体例子为{\\\"keyObject\\\":{\\\"0\\\":\\\"field1\\\",\\\"1\\\":\\\"field2\\\",\\\"2\\\":\\\"field3\\\",\\\"3\\\":\\\"field4\\\",\\\"4\\\":\\\"field5\\\",\\\"5\\\":\\\"field6\\\",\\\"6\\\":\\\"field7\\\",\\\"7\\\":\\\"field8\\\",\\\"8\\\":\\\"field9\\\"},\\\"tokenizer\\\":\\\" \\\"}； nginx方式时为json字符串，包含keyObject对象，regex对象，field_names对象及log_format对象，keyObject内为键值对，键为demo_fields数组中元素的field_name，值为user_defined_name，regex为正则表达式字符串，field_names对象为demo_fields数组中各元素的field_name的拼接字符串，每个field_name以','分隔，log_format对象为nginx日志格式化方式，具体方式参考https://support.huaweicloud.com/usermanual-lts/lts_0820.html#lts_0820__section1151119552549进行配置，整体例子为\"{\\\"keyObject\\\":{\\\"http_host\\\":\\\"host\\\",\\\"remote_addr\\\":\\\"\\\",\\\"request_method\\\":\\\"\\\",\\\"request_uri\\\":\\\"\\\",\\\"time_local\\\":\\\"\\\"},\\\"regex\\\":\\\"(\\\\\\\\d+/\\\\\\\\S+/\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+:\\\\\\\\d+)\\\\\\\\s+\\\\\\\\S+\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+(\\\\\\\\S*)\\\\\\\\s+\\\\\\\"([^\\\\\\\"]*)\\\\\\\".*\\\",\\\"fieldNames\\\":\\\"time_local,remote_addr,request_method,http_host,request_uri\\\",\\\"log_format\\\":\\\"log_format upstreaminfo '$time_local $remote_addr  $request_method $http_host \\\\\\\"$request_uri\\\\\\\"';\\\"}\"
    *
    * @return $this
    */
    public function setParam($param)
    {
        $this->container['param'] = $param;
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

