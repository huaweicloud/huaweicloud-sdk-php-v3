<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiAppsLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiAppsLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * appId  **参数解释：** APP ID筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestId  **参数解释：** 请求ID精确筛选，返回匹配该request_id的检测日志 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型筛选，可选值：text, image, text_image **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 - text_image: 文本图片混合检测 **默认取值：** 不涉及
    * attackTypes  **参数解释：** 攻击类型筛选，多个用逗号分隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * suggestion  **参数解释：** 执行动作筛选，可选值：pass, block, log, desensitize **约束限制：** 不涉及 **取值范围：** - pass: 放行 - block: 拦截 - log: 记录 - desensitize: 脱敏 **默认取值：** 不涉及
    * appName  **参数解释：** APP名称筛选，按应用名称精确匹配查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 每页数量，默认10，最大1000 **约束限制：** 最大1000 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量，默认0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * marker  **参数解释：** 游标标记，标记到ES的request_id字段，传入时忽略offset参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sortBy  **参数解释：** 排序字段，仅支持timestamp **约束限制：** 仅支持timestamp **取值范围：** - timestamp: 按时间排序 **默认取值：** timestamp
    * sortDirection  **参数解释：** 排序方向，可选值：asc, desc **约束限制：** 不涉及 **取值范围：** - asc: 升序 - desc: 降序 **默认取值：** desc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'appId' => 'string',
            'requestId' => 'string',
            'detectType' => 'string',
            'attackTypes' => 'string[]',
            'suggestion' => 'string',
            'appName' => 'string',
            'from' => 'int',
            'to' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'marker' => 'string',
            'sortBy' => 'string',
            'sortDirection' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * appId  **参数解释：** APP ID筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestId  **参数解释：** 请求ID精确筛选，返回匹配该request_id的检测日志 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型筛选，可选值：text, image, text_image **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 - text_image: 文本图片混合检测 **默认取值：** 不涉及
    * attackTypes  **参数解释：** 攻击类型筛选，多个用逗号分隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * suggestion  **参数解释：** 执行动作筛选，可选值：pass, block, log, desensitize **约束限制：** 不涉及 **取值范围：** - pass: 放行 - block: 拦截 - log: 记录 - desensitize: 脱敏 **默认取值：** 不涉及
    * appName  **参数解释：** APP名称筛选，按应用名称精确匹配查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 每页数量，默认10，最大1000 **约束限制：** 最大1000 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量，默认0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * marker  **参数解释：** 游标标记，标记到ES的request_id字段，传入时忽略offset参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sortBy  **参数解释：** 排序字段，仅支持timestamp **约束限制：** 仅支持timestamp **取值范围：** - timestamp: 按时间排序 **默认取值：** timestamp
    * sortDirection  **参数解释：** 排序方向，可选值：asc, desc **约束限制：** 不涉及 **取值范围：** - asc: 升序 - desc: 降序 **默认取值：** desc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'appId' => null,
        'requestId' => null,
        'detectType' => null,
        'attackTypes' => null,
        'suggestion' => null,
        'appName' => null,
        'from' => 'int64',
        'to' => 'int64',
        'limit' => 'int32',
        'offset' => 'int32',
        'marker' => null,
        'sortBy' => null,
        'sortDirection' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * appId  **参数解释：** APP ID筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestId  **参数解释：** 请求ID精确筛选，返回匹配该request_id的检测日志 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型筛选，可选值：text, image, text_image **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 - text_image: 文本图片混合检测 **默认取值：** 不涉及
    * attackTypes  **参数解释：** 攻击类型筛选，多个用逗号分隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * suggestion  **参数解释：** 执行动作筛选，可选值：pass, block, log, desensitize **约束限制：** 不涉及 **取值范围：** - pass: 放行 - block: 拦截 - log: 记录 - desensitize: 脱敏 **默认取值：** 不涉及
    * appName  **参数解释：** APP名称筛选，按应用名称精确匹配查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 每页数量，默认10，最大1000 **约束限制：** 最大1000 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量，默认0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * marker  **参数解释：** 游标标记，标记到ES的request_id字段，传入时忽略offset参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sortBy  **参数解释：** 排序字段，仅支持timestamp **约束限制：** 仅支持timestamp **取值范围：** - timestamp: 按时间排序 **默认取值：** timestamp
    * sortDirection  **参数解释：** 排序方向，可选值：asc, desc **约束限制：** 不涉及 **取值范围：** - asc: 升序 - desc: 降序 **默认取值：** desc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'appId' => 'app_id',
            'requestId' => 'request_id',
            'detectType' => 'detect_type',
            'attackTypes' => 'attack_types',
            'suggestion' => 'suggestion',
            'appName' => 'app_name',
            'from' => 'from',
            'to' => 'to',
            'limit' => 'limit',
            'offset' => 'offset',
            'marker' => 'marker',
            'sortBy' => 'sort_by',
            'sortDirection' => 'sort_direction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * appId  **参数解释：** APP ID筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestId  **参数解释：** 请求ID精确筛选，返回匹配该request_id的检测日志 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型筛选，可选值：text, image, text_image **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 - text_image: 文本图片混合检测 **默认取值：** 不涉及
    * attackTypes  **参数解释：** 攻击类型筛选，多个用逗号分隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * suggestion  **参数解释：** 执行动作筛选，可选值：pass, block, log, desensitize **约束限制：** 不涉及 **取值范围：** - pass: 放行 - block: 拦截 - log: 记录 - desensitize: 脱敏 **默认取值：** 不涉及
    * appName  **参数解释：** APP名称筛选，按应用名称精确匹配查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 每页数量，默认10，最大1000 **约束限制：** 最大1000 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量，默认0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * marker  **参数解释：** 游标标记，标记到ES的request_id字段，传入时忽略offset参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sortBy  **参数解释：** 排序字段，仅支持timestamp **约束限制：** 仅支持timestamp **取值范围：** - timestamp: 按时间排序 **默认取值：** timestamp
    * sortDirection  **参数解释：** 排序方向，可选值：asc, desc **约束限制：** 不涉及 **取值范围：** - asc: 升序 - desc: 降序 **默认取值：** desc
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'appId' => 'setAppId',
            'requestId' => 'setRequestId',
            'detectType' => 'setDetectType',
            'attackTypes' => 'setAttackTypes',
            'suggestion' => 'setSuggestion',
            'appName' => 'setAppName',
            'from' => 'setFrom',
            'to' => 'setTo',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'marker' => 'setMarker',
            'sortBy' => 'setSortBy',
            'sortDirection' => 'setSortDirection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * appId  **参数解释：** APP ID筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestId  **参数解释：** 请求ID精确筛选，返回匹配该request_id的检测日志 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型筛选，可选值：text, image, text_image **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 - text_image: 文本图片混合检测 **默认取值：** 不涉及
    * attackTypes  **参数解释：** 攻击类型筛选，多个用逗号分隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * suggestion  **参数解释：** 执行动作筛选，可选值：pass, block, log, desensitize **约束限制：** 不涉及 **取值范围：** - pass: 放行 - block: 拦截 - log: 记录 - desensitize: 脱敏 **默认取值：** 不涉及
    * appName  **参数解释：** APP名称筛选，按应用名称精确匹配查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 截止时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 每页数量，默认10，最大1000 **约束限制：** 最大1000 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量，默认0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    * marker  **参数解释：** 游标标记，标记到ES的request_id字段，传入时忽略offset参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sortBy  **参数解释：** 排序字段，仅支持timestamp **约束限制：** 仅支持timestamp **取值范围：** - timestamp: 按时间排序 **默认取值：** timestamp
    * sortDirection  **参数解释：** 排序方向，可选值：asc, desc **约束限制：** 不涉及 **取值范围：** - asc: 升序 - desc: 降序 **默认取值：** desc
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'appId' => 'getAppId',
            'requestId' => 'getRequestId',
            'detectType' => 'getDetectType',
            'attackTypes' => 'getAttackTypes',
            'suggestion' => 'getSuggestion',
            'appName' => 'getAppName',
            'from' => 'getFrom',
            'to' => 'getTo',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'marker' => 'getMarker',
            'sortBy' => 'getSortBy',
            'sortDirection' => 'getSortDirection'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['detectType'] = isset($data['detectType']) ? $data['detectType'] : null;
        $this->container['attackTypes'] = isset($data['attackTypes']) ? $data['attackTypes'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['sortDirection'] = isset($data['sortDirection']) ? $data['sortDirection'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 192)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 192.";
            }
            if (!is_null($this->container['requestId']) && !preg_match("/^[a-zA-Z0-9_-]{1,192}$/", $this->container['requestId'])) {
                $invalidProperties[] = "invalid value for 'requestId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,192}$/.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
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
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets appId
    *  **参数解释：** APP ID筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId **参数解释：** APP ID筛选 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets requestId
    *  **参数解释：** 请求ID精确筛选，返回匹配该request_id的检测日志 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId **参数解释：** 请求ID精确筛选，返回匹配该request_id的检测日志 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets detectType
    *  **参数解释：** 检测类型筛选，可选值：text, image, text_image **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 - text_image: 文本图片混合检测 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDetectType()
    {
        return $this->container['detectType'];
    }

    /**
    * Sets detectType
    *
    * @param string|null $detectType **参数解释：** 检测类型筛选，可选值：text, image, text_image **约束限制：** 不涉及 **取值范围：** - text: 文本检测 - image: 图片检测 - text_image: 文本图片混合检测 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDetectType($detectType)
    {
        $this->container['detectType'] = $detectType;
        return $this;
    }

    /**
    * Gets attackTypes
    *  **参数解释：** 攻击类型筛选，多个用逗号分隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getAttackTypes()
    {
        return $this->container['attackTypes'];
    }

    /**
    * Sets attackTypes
    *
    * @param string[]|null $attackTypes **参数解释：** 攻击类型筛选，多个用逗号分隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAttackTypes($attackTypes)
    {
        $this->container['attackTypes'] = $attackTypes;
        return $this;
    }

    /**
    * Gets suggestion
    *  **参数解释：** 执行动作筛选，可选值：pass, block, log, desensitize **约束限制：** 不涉及 **取值范围：** - pass: 放行 - block: 拦截 - log: 记录 - desensitize: 脱敏 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion **参数解释：** 执行动作筛选，可选值：pass, block, log, desensitize **约束限制：** 不涉及 **取值范围：** - pass: 放行 - block: 拦截 - log: 记录 - desensitize: 脱敏 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释：** APP名称筛选，按应用名称精确匹配查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释：** APP名称筛选，按应用名称精确匹配查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from **参数解释：** 开始时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释：** 截止时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to **参数解释：** 截止时间，时间格式为毫秒时间戳 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 每页数量，默认10，最大1000 **约束限制：** 最大1000 **取值范围：** 1-1000 **默认取值：** 10
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
    * @param int|null $limit **参数解释：** 每页数量，默认10，最大1000 **约束限制：** 最大1000 **取值范围：** 1-1000 **默认取值：** 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量，默认0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量，默认0 **约束限制：** 不涉及 **取值范围：** >=0 **默认取值：** 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释：** 游标标记，标记到ES的request_id字段，传入时忽略offset参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释：** 游标标记，标记到ES的request_id字段，传入时忽略offset参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets sortBy
    *  **参数解释：** 排序字段，仅支持timestamp **约束限制：** 仅支持timestamp **取值范围：** - timestamp: 按时间排序 **默认取值：** timestamp
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy **参数解释：** 排序字段，仅支持timestamp **约束限制：** 仅支持timestamp **取值范围：** - timestamp: 按时间排序 **默认取值：** timestamp
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets sortDirection
    *  **参数解释：** 排序方向，可选值：asc, desc **约束限制：** 不涉及 **取值范围：** - asc: 升序 - desc: 降序 **默认取值：** desc
    *
    * @return string|null
    */
    public function getSortDirection()
    {
        return $this->container['sortDirection'];
    }

    /**
    * Sets sortDirection
    *
    * @param string|null $sortDirection **参数解释：** 排序方向，可选值：asc, desc **约束限制：** 不涉及 **取值范围：** - asc: 升序 - desc: 降序 **默认取值：** desc
    *
    * @return $this
    */
    public function setSortDirection($sortDirection)
    {
        $this->container['sortDirection'] = $sortDirection;
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

