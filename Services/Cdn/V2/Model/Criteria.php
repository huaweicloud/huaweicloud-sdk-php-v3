<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Criteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Criteria';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * matchTargetType  **参数解释：** 匹配目标类型 **约束限制：** 不涉及 **取值范围：** - schema: 客户端请求使用的协议类型 - method: 客户端请求IP使用的请求方法 - path: 客户端请求URL路径 - arg: 客户端请求URL中的查询参数 - extension: 客户端请求IP内容的文件后缀 - filename: 客户端请求IP内容的文件名称 - header: HTTP请求头部 - clientip: 客户端请求IP的客户端IP - clientip_version: 客户端请求IP的客户端IP版本 - ua: 客户端请求IP头中的User-Agent - ngx_variable: Nginx变量 **默认取值：** 不涉及
    * matchTargetName  **参数解释：** 匹配目标名称 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema、method、path、extension、filename、ua时，该值为空 - 当匹配目标类型为arg时表示查询参数名，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为header时表示请求头的名称，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为clientip时表示ip来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为clientip_version时表示ip版本来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为ngx_variable时表示Nginx变量名，仅支持$protocol、$arg_、$http_、$scheme、$uri、$ssl_protocol、$ssl_server_name、$remote_addr、$http2、$request_method、$sent_http_ **默认取值：** 不涉及
    * matchType  **参数解释：** 匹配算法 **约束限制：** 不涉及 **取值范围：** contains：包含匹配，匹配到match_pattern任意一个条件即匹配成功 **默认取值：** 不涉及
    * matchPattern  **参数解释：** 匹配内容 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema时，取值：HTTP，HTTPS - 当匹配目标类型为method时，取值：GET，PUT，POST，DELETE，HEAD，OPTIONS，PATCH，TRACE，CONNECT - 当匹配目标类型为clientip_version时，取值：IPv4，IPv6 - 当匹配目标类型为path和ua时，支持配置通配符“*” **默认取值：** 不涉及
    * negate  **参数解释：** 是否取反，与match_type配合使用。例：negate配置为true，match_type配置为contains，则实际业务逻辑将转换为not_contains **约束限制：** 不涉及 **取值范围：** - true: 取反 - false: 不取反 **默认取值：** false: 不取反
    * caseSensitive  **参数解释：** 是否区分大小写 **约束限制：** 不涉及 **取值范围：** - true: 区分大小写 - false: 不区分大小写 **默认取值：** false: 不区分大小写
    * logic  **参数解释：** 嵌套条件逻辑运算符 **约束限制：** 不涉及 **取值范围：** - and: 与关系 - or: 或关系 **默认取值：** 不涉及
    * subCriteria  **参数解释：** 嵌套条件列表 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'matchTargetType' => 'string',
            'matchTargetName' => 'string',
            'matchType' => 'string',
            'matchPattern' => 'string[]',
            'negate' => 'bool',
            'caseSensitive' => 'bool',
            'logic' => 'string',
            'subCriteria' => '\HuaweiCloud\SDK\Cdn\V2\Model\Criteria[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * matchTargetType  **参数解释：** 匹配目标类型 **约束限制：** 不涉及 **取值范围：** - schema: 客户端请求使用的协议类型 - method: 客户端请求IP使用的请求方法 - path: 客户端请求URL路径 - arg: 客户端请求URL中的查询参数 - extension: 客户端请求IP内容的文件后缀 - filename: 客户端请求IP内容的文件名称 - header: HTTP请求头部 - clientip: 客户端请求IP的客户端IP - clientip_version: 客户端请求IP的客户端IP版本 - ua: 客户端请求IP头中的User-Agent - ngx_variable: Nginx变量 **默认取值：** 不涉及
    * matchTargetName  **参数解释：** 匹配目标名称 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema、method、path、extension、filename、ua时，该值为空 - 当匹配目标类型为arg时表示查询参数名，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为header时表示请求头的名称，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为clientip时表示ip来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为clientip_version时表示ip版本来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为ngx_variable时表示Nginx变量名，仅支持$protocol、$arg_、$http_、$scheme、$uri、$ssl_protocol、$ssl_server_name、$remote_addr、$http2、$request_method、$sent_http_ **默认取值：** 不涉及
    * matchType  **参数解释：** 匹配算法 **约束限制：** 不涉及 **取值范围：** contains：包含匹配，匹配到match_pattern任意一个条件即匹配成功 **默认取值：** 不涉及
    * matchPattern  **参数解释：** 匹配内容 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema时，取值：HTTP，HTTPS - 当匹配目标类型为method时，取值：GET，PUT，POST，DELETE，HEAD，OPTIONS，PATCH，TRACE，CONNECT - 当匹配目标类型为clientip_version时，取值：IPv4，IPv6 - 当匹配目标类型为path和ua时，支持配置通配符“*” **默认取值：** 不涉及
    * negate  **参数解释：** 是否取反，与match_type配合使用。例：negate配置为true，match_type配置为contains，则实际业务逻辑将转换为not_contains **约束限制：** 不涉及 **取值范围：** - true: 取反 - false: 不取反 **默认取值：** false: 不取反
    * caseSensitive  **参数解释：** 是否区分大小写 **约束限制：** 不涉及 **取值范围：** - true: 区分大小写 - false: 不区分大小写 **默认取值：** false: 不区分大小写
    * logic  **参数解释：** 嵌套条件逻辑运算符 **约束限制：** 不涉及 **取值范围：** - and: 与关系 - or: 或关系 **默认取值：** 不涉及
    * subCriteria  **参数解释：** 嵌套条件列表 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'matchTargetType' => null,
        'matchTargetName' => null,
        'matchType' => null,
        'matchPattern' => null,
        'negate' => null,
        'caseSensitive' => null,
        'logic' => null,
        'subCriteria' => null
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
    * matchTargetType  **参数解释：** 匹配目标类型 **约束限制：** 不涉及 **取值范围：** - schema: 客户端请求使用的协议类型 - method: 客户端请求IP使用的请求方法 - path: 客户端请求URL路径 - arg: 客户端请求URL中的查询参数 - extension: 客户端请求IP内容的文件后缀 - filename: 客户端请求IP内容的文件名称 - header: HTTP请求头部 - clientip: 客户端请求IP的客户端IP - clientip_version: 客户端请求IP的客户端IP版本 - ua: 客户端请求IP头中的User-Agent - ngx_variable: Nginx变量 **默认取值：** 不涉及
    * matchTargetName  **参数解释：** 匹配目标名称 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema、method、path、extension、filename、ua时，该值为空 - 当匹配目标类型为arg时表示查询参数名，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为header时表示请求头的名称，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为clientip时表示ip来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为clientip_version时表示ip版本来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为ngx_variable时表示Nginx变量名，仅支持$protocol、$arg_、$http_、$scheme、$uri、$ssl_protocol、$ssl_server_name、$remote_addr、$http2、$request_method、$sent_http_ **默认取值：** 不涉及
    * matchType  **参数解释：** 匹配算法 **约束限制：** 不涉及 **取值范围：** contains：包含匹配，匹配到match_pattern任意一个条件即匹配成功 **默认取值：** 不涉及
    * matchPattern  **参数解释：** 匹配内容 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema时，取值：HTTP，HTTPS - 当匹配目标类型为method时，取值：GET，PUT，POST，DELETE，HEAD，OPTIONS，PATCH，TRACE，CONNECT - 当匹配目标类型为clientip_version时，取值：IPv4，IPv6 - 当匹配目标类型为path和ua时，支持配置通配符“*” **默认取值：** 不涉及
    * negate  **参数解释：** 是否取反，与match_type配合使用。例：negate配置为true，match_type配置为contains，则实际业务逻辑将转换为not_contains **约束限制：** 不涉及 **取值范围：** - true: 取反 - false: 不取反 **默认取值：** false: 不取反
    * caseSensitive  **参数解释：** 是否区分大小写 **约束限制：** 不涉及 **取值范围：** - true: 区分大小写 - false: 不区分大小写 **默认取值：** false: 不区分大小写
    * logic  **参数解释：** 嵌套条件逻辑运算符 **约束限制：** 不涉及 **取值范围：** - and: 与关系 - or: 或关系 **默认取值：** 不涉及
    * subCriteria  **参数解释：** 嵌套条件列表 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'matchTargetType' => 'match_target_type',
            'matchTargetName' => 'match_target_name',
            'matchType' => 'match_type',
            'matchPattern' => 'match_pattern',
            'negate' => 'negate',
            'caseSensitive' => 'case_sensitive',
            'logic' => 'logic',
            'subCriteria' => 'sub_criteria'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * matchTargetType  **参数解释：** 匹配目标类型 **约束限制：** 不涉及 **取值范围：** - schema: 客户端请求使用的协议类型 - method: 客户端请求IP使用的请求方法 - path: 客户端请求URL路径 - arg: 客户端请求URL中的查询参数 - extension: 客户端请求IP内容的文件后缀 - filename: 客户端请求IP内容的文件名称 - header: HTTP请求头部 - clientip: 客户端请求IP的客户端IP - clientip_version: 客户端请求IP的客户端IP版本 - ua: 客户端请求IP头中的User-Agent - ngx_variable: Nginx变量 **默认取值：** 不涉及
    * matchTargetName  **参数解释：** 匹配目标名称 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema、method、path、extension、filename、ua时，该值为空 - 当匹配目标类型为arg时表示查询参数名，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为header时表示请求头的名称，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为clientip时表示ip来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为clientip_version时表示ip版本来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为ngx_variable时表示Nginx变量名，仅支持$protocol、$arg_、$http_、$scheme、$uri、$ssl_protocol、$ssl_server_name、$remote_addr、$http2、$request_method、$sent_http_ **默认取值：** 不涉及
    * matchType  **参数解释：** 匹配算法 **约束限制：** 不涉及 **取值范围：** contains：包含匹配，匹配到match_pattern任意一个条件即匹配成功 **默认取值：** 不涉及
    * matchPattern  **参数解释：** 匹配内容 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema时，取值：HTTP，HTTPS - 当匹配目标类型为method时，取值：GET，PUT，POST，DELETE，HEAD，OPTIONS，PATCH，TRACE，CONNECT - 当匹配目标类型为clientip_version时，取值：IPv4，IPv6 - 当匹配目标类型为path和ua时，支持配置通配符“*” **默认取值：** 不涉及
    * negate  **参数解释：** 是否取反，与match_type配合使用。例：negate配置为true，match_type配置为contains，则实际业务逻辑将转换为not_contains **约束限制：** 不涉及 **取值范围：** - true: 取反 - false: 不取反 **默认取值：** false: 不取反
    * caseSensitive  **参数解释：** 是否区分大小写 **约束限制：** 不涉及 **取值范围：** - true: 区分大小写 - false: 不区分大小写 **默认取值：** false: 不区分大小写
    * logic  **参数解释：** 嵌套条件逻辑运算符 **约束限制：** 不涉及 **取值范围：** - and: 与关系 - or: 或关系 **默认取值：** 不涉及
    * subCriteria  **参数解释：** 嵌套条件列表 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'matchTargetType' => 'setMatchTargetType',
            'matchTargetName' => 'setMatchTargetName',
            'matchType' => 'setMatchType',
            'matchPattern' => 'setMatchPattern',
            'negate' => 'setNegate',
            'caseSensitive' => 'setCaseSensitive',
            'logic' => 'setLogic',
            'subCriteria' => 'setSubCriteria'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * matchTargetType  **参数解释：** 匹配目标类型 **约束限制：** 不涉及 **取值范围：** - schema: 客户端请求使用的协议类型 - method: 客户端请求IP使用的请求方法 - path: 客户端请求URL路径 - arg: 客户端请求URL中的查询参数 - extension: 客户端请求IP内容的文件后缀 - filename: 客户端请求IP内容的文件名称 - header: HTTP请求头部 - clientip: 客户端请求IP的客户端IP - clientip_version: 客户端请求IP的客户端IP版本 - ua: 客户端请求IP头中的User-Agent - ngx_variable: Nginx变量 **默认取值：** 不涉及
    * matchTargetName  **参数解释：** 匹配目标名称 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema、method、path、extension、filename、ua时，该值为空 - 当匹配目标类型为arg时表示查询参数名，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为header时表示请求头的名称，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为clientip时表示ip来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为clientip_version时表示ip版本来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为ngx_variable时表示Nginx变量名，仅支持$protocol、$arg_、$http_、$scheme、$uri、$ssl_protocol、$ssl_server_name、$remote_addr、$http2、$request_method、$sent_http_ **默认取值：** 不涉及
    * matchType  **参数解释：** 匹配算法 **约束限制：** 不涉及 **取值范围：** contains：包含匹配，匹配到match_pattern任意一个条件即匹配成功 **默认取值：** 不涉及
    * matchPattern  **参数解释：** 匹配内容 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema时，取值：HTTP，HTTPS - 当匹配目标类型为method时，取值：GET，PUT，POST，DELETE，HEAD，OPTIONS，PATCH，TRACE，CONNECT - 当匹配目标类型为clientip_version时，取值：IPv4，IPv6 - 当匹配目标类型为path和ua时，支持配置通配符“*” **默认取值：** 不涉及
    * negate  **参数解释：** 是否取反，与match_type配合使用。例：negate配置为true，match_type配置为contains，则实际业务逻辑将转换为not_contains **约束限制：** 不涉及 **取值范围：** - true: 取反 - false: 不取反 **默认取值：** false: 不取反
    * caseSensitive  **参数解释：** 是否区分大小写 **约束限制：** 不涉及 **取值范围：** - true: 区分大小写 - false: 不区分大小写 **默认取值：** false: 不区分大小写
    * logic  **参数解释：** 嵌套条件逻辑运算符 **约束限制：** 不涉及 **取值范围：** - and: 与关系 - or: 或关系 **默认取值：** 不涉及
    * subCriteria  **参数解释：** 嵌套条件列表 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'matchTargetType' => 'getMatchTargetType',
            'matchTargetName' => 'getMatchTargetName',
            'matchType' => 'getMatchType',
            'matchPattern' => 'getMatchPattern',
            'negate' => 'getNegate',
            'caseSensitive' => 'getCaseSensitive',
            'logic' => 'getLogic',
            'subCriteria' => 'getSubCriteria'
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
        $this->container['matchTargetType'] = isset($data['matchTargetType']) ? $data['matchTargetType'] : null;
        $this->container['matchTargetName'] = isset($data['matchTargetName']) ? $data['matchTargetName'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['matchPattern'] = isset($data['matchPattern']) ? $data['matchPattern'] : null;
        $this->container['negate'] = isset($data['negate']) ? $data['negate'] : null;
        $this->container['caseSensitive'] = isset($data['caseSensitive']) ? $data['caseSensitive'] : null;
        $this->container['logic'] = isset($data['logic']) ? $data['logic'] : null;
        $this->container['subCriteria'] = isset($data['subCriteria']) ? $data['subCriteria'] : null;
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
    * Gets matchTargetType
    *  **参数解释：** 匹配目标类型 **约束限制：** 不涉及 **取值范围：** - schema: 客户端请求使用的协议类型 - method: 客户端请求IP使用的请求方法 - path: 客户端请求URL路径 - arg: 客户端请求URL中的查询参数 - extension: 客户端请求IP内容的文件后缀 - filename: 客户端请求IP内容的文件名称 - header: HTTP请求头部 - clientip: 客户端请求IP的客户端IP - clientip_version: 客户端请求IP的客户端IP版本 - ua: 客户端请求IP头中的User-Agent - ngx_variable: Nginx变量 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMatchTargetType()
    {
        return $this->container['matchTargetType'];
    }

    /**
    * Sets matchTargetType
    *
    * @param string|null $matchTargetType **参数解释：** 匹配目标类型 **约束限制：** 不涉及 **取值范围：** - schema: 客户端请求使用的协议类型 - method: 客户端请求IP使用的请求方法 - path: 客户端请求URL路径 - arg: 客户端请求URL中的查询参数 - extension: 客户端请求IP内容的文件后缀 - filename: 客户端请求IP内容的文件名称 - header: HTTP请求头部 - clientip: 客户端请求IP的客户端IP - clientip_version: 客户端请求IP的客户端IP版本 - ua: 客户端请求IP头中的User-Agent - ngx_variable: Nginx变量 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchTargetType($matchTargetType)
    {
        $this->container['matchTargetType'] = $matchTargetType;
        return $this;
    }

    /**
    * Gets matchTargetName
    *  **参数解释：** 匹配目标名称 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema、method、path、extension、filename、ua时，该值为空 - 当匹配目标类型为arg时表示查询参数名，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为header时表示请求头的名称，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为clientip时表示ip来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为clientip_version时表示ip版本来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为ngx_variable时表示Nginx变量名，仅支持$protocol、$arg_、$http_、$scheme、$uri、$ssl_protocol、$ssl_server_name、$remote_addr、$http2、$request_method、$sent_http_ **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMatchTargetName()
    {
        return $this->container['matchTargetName'];
    }

    /**
    * Sets matchTargetName
    *
    * @param string|null $matchTargetName **参数解释：** 匹配目标名称 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema、method、path、extension、filename、ua时，该值为空 - 当匹配目标类型为arg时表示查询参数名，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为header时表示请求头的名称，长度1-100，由数字，大小写字母，中划线和下划线组成，只能以字母开头 - 当匹配目标类型为clientip时表示ip来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为clientip_version时表示ip版本来源，取值：connect：建联IP；xff：x-forwarded-for头 - 当匹配目标类型为ngx_variable时表示Nginx变量名，仅支持$protocol、$arg_、$http_、$scheme、$uri、$ssl_protocol、$ssl_server_name、$remote_addr、$http2、$request_method、$sent_http_ **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchTargetName($matchTargetName)
    {
        $this->container['matchTargetName'] = $matchTargetName;
        return $this;
    }

    /**
    * Gets matchType
    *  **参数解释：** 匹配算法 **约束限制：** 不涉及 **取值范围：** contains：包含匹配，匹配到match_pattern任意一个条件即匹配成功 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string|null $matchType **参数解释：** 匹配算法 **约束限制：** 不涉及 **取值范围：** contains：包含匹配，匹配到match_pattern任意一个条件即匹配成功 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets matchPattern
    *  **参数解释：** 匹配内容 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema时，取值：HTTP，HTTPS - 当匹配目标类型为method时，取值：GET，PUT，POST，DELETE，HEAD，OPTIONS，PATCH，TRACE，CONNECT - 当匹配目标类型为clientip_version时，取值：IPv4，IPv6 - 当匹配目标类型为path和ua时，支持配置通配符“*” **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getMatchPattern()
    {
        return $this->container['matchPattern'];
    }

    /**
    * Sets matchPattern
    *
    * @param string[]|null $matchPattern **参数解释：** 匹配内容 **约束限制：** 不涉及 **取值范围：** - 当匹配目标类型为schema时，取值：HTTP，HTTPS - 当匹配目标类型为method时，取值：GET，PUT，POST，DELETE，HEAD，OPTIONS，PATCH，TRACE，CONNECT - 当匹配目标类型为clientip_version时，取值：IPv4，IPv6 - 当匹配目标类型为path和ua时，支持配置通配符“*” **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchPattern($matchPattern)
    {
        $this->container['matchPattern'] = $matchPattern;
        return $this;
    }

    /**
    * Gets negate
    *  **参数解释：** 是否取反，与match_type配合使用。例：negate配置为true，match_type配置为contains，则实际业务逻辑将转换为not_contains **约束限制：** 不涉及 **取值范围：** - true: 取反 - false: 不取反 **默认取值：** false: 不取反
    *
    * @return bool|null
    */
    public function getNegate()
    {
        return $this->container['negate'];
    }

    /**
    * Sets negate
    *
    * @param bool|null $negate **参数解释：** 是否取反，与match_type配合使用。例：negate配置为true，match_type配置为contains，则实际业务逻辑将转换为not_contains **约束限制：** 不涉及 **取值范围：** - true: 取反 - false: 不取反 **默认取值：** false: 不取反
    *
    * @return $this
    */
    public function setNegate($negate)
    {
        $this->container['negate'] = $negate;
        return $this;
    }

    /**
    * Gets caseSensitive
    *  **参数解释：** 是否区分大小写 **约束限制：** 不涉及 **取值范围：** - true: 区分大小写 - false: 不区分大小写 **默认取值：** false: 不区分大小写
    *
    * @return bool|null
    */
    public function getCaseSensitive()
    {
        return $this->container['caseSensitive'];
    }

    /**
    * Sets caseSensitive
    *
    * @param bool|null $caseSensitive **参数解释：** 是否区分大小写 **约束限制：** 不涉及 **取值范围：** - true: 区分大小写 - false: 不区分大小写 **默认取值：** false: 不区分大小写
    *
    * @return $this
    */
    public function setCaseSensitive($caseSensitive)
    {
        $this->container['caseSensitive'] = $caseSensitive;
        return $this;
    }

    /**
    * Gets logic
    *  **参数解释：** 嵌套条件逻辑运算符 **约束限制：** 不涉及 **取值范围：** - and: 与关系 - or: 或关系 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLogic()
    {
        return $this->container['logic'];
    }

    /**
    * Sets logic
    *
    * @param string|null $logic **参数解释：** 嵌套条件逻辑运算符 **约束限制：** 不涉及 **取值范围：** - and: 与关系 - or: 或关系 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLogic($logic)
    {
        $this->container['logic'] = $logic;
        return $this;
    }

    /**
    * Gets subCriteria
    *  **参数解释：** 嵌套条件列表 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Criteria[]|null
    */
    public function getSubCriteria()
    {
        return $this->container['subCriteria'];
    }

    /**
    * Sets subCriteria
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Criteria[]|null $subCriteria **参数解释：** 嵌套条件列表 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setSubCriteria($subCriteria)
    {
        $this->container['subCriteria'] = $subCriteria;
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

