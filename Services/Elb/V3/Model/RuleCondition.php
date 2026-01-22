<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释**：匹配项的名称。  **约束限制**：同一个rule内的conditions列表中所有key必须相同。  **取值范围**： - 当转发规则类别type为HOST_NAME、PATH、METHOD、SOURCE_IP时，该字段固定为空字符串。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。key的长度限制1-40字符，只允许包含字母、数字和-_。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。key的长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写。  **默认取值**：不涉及
    * value  **参数解释**：匹配项的值。  **约束限制**：同一个rule内的conditions列表中所有value不允许重复。  **取值范围**： - 当转发规则类别type为HOST_NAME时，key固定为空字符串，value表示域名的值。value长度1-128字符，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头，\\*只能出现在开头且必须以\\*.开始。 - 当转发规则类别type为PATH时，key固定为空字符串，value表示请求路径的值。value长度1-128字符。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。value长度限制1-128字符，不支持空格，双引号，支持以下通配符：*（匹配0个或更多字符）和？（正好匹配1个字符）。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。value长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写，支持通配符：*（匹配0个或更多字符）和？（正好匹配1个字符） - 当转发规则类别type为METHOD时，key固定为空字符串，value表示请求方式。value取值范围为：GET, PUT,POST,DELETE, PATCH, HEAD, OPTIONS。  - 当转发规则类别type为SOURCE_IP时，key固定为空字符串，value表示请求源地址。value为CIDR格式，支持ipv4，ipv6。例如192.168.0.2/32，2049::49/64。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释**：匹配项的名称。  **约束限制**：同一个rule内的conditions列表中所有key必须相同。  **取值范围**： - 当转发规则类别type为HOST_NAME、PATH、METHOD、SOURCE_IP时，该字段固定为空字符串。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。key的长度限制1-40字符，只允许包含字母、数字和-_。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。key的长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写。  **默认取值**：不涉及
    * value  **参数解释**：匹配项的值。  **约束限制**：同一个rule内的conditions列表中所有value不允许重复。  **取值范围**： - 当转发规则类别type为HOST_NAME时，key固定为空字符串，value表示域名的值。value长度1-128字符，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头，\\*只能出现在开头且必须以\\*.开始。 - 当转发规则类别type为PATH时，key固定为空字符串，value表示请求路径的值。value长度1-128字符。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。value长度限制1-128字符，不支持空格，双引号，支持以下通配符：*（匹配0个或更多字符）和？（正好匹配1个字符）。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。value长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写，支持通配符：*（匹配0个或更多字符）和？（正好匹配1个字符） - 当转发规则类别type为METHOD时，key固定为空字符串，value表示请求方式。value取值范围为：GET, PUT,POST,DELETE, PATCH, HEAD, OPTIONS。  - 当转发规则类别type为SOURCE_IP时，key固定为空字符串，value表示请求源地址。value为CIDR格式，支持ipv4，ipv6。例如192.168.0.2/32，2049::49/64。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null
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
    * key  **参数解释**：匹配项的名称。  **约束限制**：同一个rule内的conditions列表中所有key必须相同。  **取值范围**： - 当转发规则类别type为HOST_NAME、PATH、METHOD、SOURCE_IP时，该字段固定为空字符串。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。key的长度限制1-40字符，只允许包含字母、数字和-_。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。key的长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写。  **默认取值**：不涉及
    * value  **参数解释**：匹配项的值。  **约束限制**：同一个rule内的conditions列表中所有value不允许重复。  **取值范围**： - 当转发规则类别type为HOST_NAME时，key固定为空字符串，value表示域名的值。value长度1-128字符，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头，\\*只能出现在开头且必须以\\*.开始。 - 当转发规则类别type为PATH时，key固定为空字符串，value表示请求路径的值。value长度1-128字符。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。value长度限制1-128字符，不支持空格，双引号，支持以下通配符：*（匹配0个或更多字符）和？（正好匹配1个字符）。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。value长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写，支持通配符：*（匹配0个或更多字符）和？（正好匹配1个字符） - 当转发规则类别type为METHOD时，key固定为空字符串，value表示请求方式。value取值范围为：GET, PUT,POST,DELETE, PATCH, HEAD, OPTIONS。  - 当转发规则类别type为SOURCE_IP时，key固定为空字符串，value表示请求源地址。value为CIDR格式，支持ipv4，ipv6。例如192.168.0.2/32，2049::49/64。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释**：匹配项的名称。  **约束限制**：同一个rule内的conditions列表中所有key必须相同。  **取值范围**： - 当转发规则类别type为HOST_NAME、PATH、METHOD、SOURCE_IP时，该字段固定为空字符串。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。key的长度限制1-40字符，只允许包含字母、数字和-_。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。key的长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写。  **默认取值**：不涉及
    * value  **参数解释**：匹配项的值。  **约束限制**：同一个rule内的conditions列表中所有value不允许重复。  **取值范围**： - 当转发规则类别type为HOST_NAME时，key固定为空字符串，value表示域名的值。value长度1-128字符，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头，\\*只能出现在开头且必须以\\*.开始。 - 当转发规则类别type为PATH时，key固定为空字符串，value表示请求路径的值。value长度1-128字符。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。value长度限制1-128字符，不支持空格，双引号，支持以下通配符：*（匹配0个或更多字符）和？（正好匹配1个字符）。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。value长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写，支持通配符：*（匹配0个或更多字符）和？（正好匹配1个字符） - 当转发规则类别type为METHOD时，key固定为空字符串，value表示请求方式。value取值范围为：GET, PUT,POST,DELETE, PATCH, HEAD, OPTIONS。  - 当转发规则类别type为SOURCE_IP时，key固定为空字符串，value表示请求源地址。value为CIDR格式，支持ipv4，ipv6。例如192.168.0.2/32，2049::49/64。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释**：匹配项的名称。  **约束限制**：同一个rule内的conditions列表中所有key必须相同。  **取值范围**： - 当转发规则类别type为HOST_NAME、PATH、METHOD、SOURCE_IP时，该字段固定为空字符串。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。key的长度限制1-40字符，只允许包含字母、数字和-_。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。key的长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写。  **默认取值**：不涉及
    * value  **参数解释**：匹配项的值。  **约束限制**：同一个rule内的conditions列表中所有value不允许重复。  **取值范围**： - 当转发规则类别type为HOST_NAME时，key固定为空字符串，value表示域名的值。value长度1-128字符，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头，\\*只能出现在开头且必须以\\*.开始。 - 当转发规则类别type为PATH时，key固定为空字符串，value表示请求路径的值。value长度1-128字符。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。value长度限制1-128字符，不支持空格，双引号，支持以下通配符：*（匹配0个或更多字符）和？（正好匹配1个字符）。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。value长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写，支持通配符：*（匹配0个或更多字符）和？（正好匹配1个字符） - 当转发规则类别type为METHOD时，key固定为空字符串，value表示请求方式。value取值范围为：GET, PUT,POST,DELETE, PATCH, HEAD, OPTIONS。  - 当转发规则类别type为SOURCE_IP时，key固定为空字符串，value表示请求源地址。value为CIDR格式，支持ipv4，ipv6。例如192.168.0.2/32，2049::49/64。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 128)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 128)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
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
    * Gets key
    *  **参数解释**：匹配项的名称。  **约束限制**：同一个rule内的conditions列表中所有key必须相同。  **取值范围**： - 当转发规则类别type为HOST_NAME、PATH、METHOD、SOURCE_IP时，该字段固定为空字符串。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。key的长度限制1-40字符，只允许包含字母、数字和-_。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。key的长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写。  **默认取值**：不涉及
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key **参数解释**：匹配项的名称。  **约束限制**：同一个rule内的conditions列表中所有key必须相同。  **取值范围**： - 当转发规则类别type为HOST_NAME、PATH、METHOD、SOURCE_IP时，该字段固定为空字符串。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。key的长度限制1-40字符，只允许包含字母、数字和-_。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。key的长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**：匹配项的值。  **约束限制**：同一个rule内的conditions列表中所有value不允许重复。  **取值范围**： - 当转发规则类别type为HOST_NAME时，key固定为空字符串，value表示域名的值。value长度1-128字符，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头，\\*只能出现在开头且必须以\\*.开始。 - 当转发规则类别type为PATH时，key固定为空字符串，value表示请求路径的值。value长度1-128字符。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。value长度限制1-128字符，不支持空格，双引号，支持以下通配符：*（匹配0个或更多字符）和？（正好匹配1个字符）。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。value长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写，支持通配符：*（匹配0个或更多字符）和？（正好匹配1个字符） - 当转发规则类别type为METHOD时，key固定为空字符串，value表示请求方式。value取值范围为：GET, PUT,POST,DELETE, PATCH, HEAD, OPTIONS。  - 当转发规则类别type为SOURCE_IP时，key固定为空字符串，value表示请求源地址。value为CIDR格式，支持ipv4，ipv6。例如192.168.0.2/32，2049::49/64。  **默认取值**：不涉及
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value **参数解释**：匹配项的值。  **约束限制**：同一个rule内的conditions列表中所有value不允许重复。  **取值范围**： - 当转发规则类别type为HOST_NAME时，key固定为空字符串，value表示域名的值。value长度1-128字符，字符串只能包含英文字母、数字、-.\\*，必须以字母、数字或\\*开头，\\*只能出现在开头且必须以\\*.开始。 - 当转发规则类别type为PATH时，key固定为空字符串，value表示请求路径的值。value长度1-128字符。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以\"/\"开头。 - 当转发规则类别type为HEADER时，key表示请求头参数的名称，value表示请求头参数的值。value长度限制1-128字符，不支持空格，双引号，支持以下通配符：*（匹配0个或更多字符）和？（正好匹配1个字符）。 - 当转发规则类别type为QUERY_STRING时，key表示查询参数的名称，value表示查询参数的值。value长度限制为1-128字符，不支持空格，中括号，大括号，尖括号，反斜杠，双引号，'#'，'&'，'|'，‘%’，‘~’，字母区分大小写，支持通配符：*（匹配0个或更多字符）和？（正好匹配1个字符） - 当转发规则类别type为METHOD时，key固定为空字符串，value表示请求方式。value取值范围为：GET, PUT,POST,DELETE, PATCH, HEAD, OPTIONS。  - 当转发规则类别type为SOURCE_IP时，key固定为空字符串，value表示请求源地址。value为CIDR格式，支持ipv4，ipv6。例如192.168.0.2/32，2049::49/64。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

