<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CacheRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CacheRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * matchType  **参数解释：** 匹配类型 **约束限制：** 不涉及 **取值范围：** - all: 匹配所有文件 - file_extension: 按文件后缀匹配 - catalog: 按目录匹配 - full_path: 全路径匹配 - home_page: 按首页匹配  **默认取值：** 不涉及
    * matchValue  **参数解释：** 缓存规则匹配内容 **约束限制：** - 当match_type为all时，置空 - 当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”或“;”分隔，如.jpg,.zip,.exe，并且输入的文件名后缀总数不超过100个，总字符不超过1000 - 当match_type为catalog时，为目录路径，输入要求以“/”作为首字符， 以“,”或“;”分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个，总字符不超过255 - 当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，单条全路径缓存规则里仅支持配置一个全路径，如/test/index.html或/test/\\*.jpg，不可配置/_* - 当match_type为home_page时，置空  **取值范围：** 不涉及 **默认取值：** 不涉及
    * ttl  **参数解释：** 资源在CDN节点的缓存过期时间，单位由ttl_unit参数指定 **约束限制：** 最大支持365天 **取值范围：** 不涉及 **默认取值：** 0
    * ttlUnit  **参数解释：** 缓存过期时间单位 **约束限制：** 不涉及 **取值范围：** - s: 秒 - m: 分 - h: 小时 - d: 天  **默认取值：** 不涉及
    * priority  **参数解释：** 缓存规则的优先级，数值越大，优先级越高 **约束限制：** 优先级不能相同 **取值范围：** 1-1000 **默认取值：** 不涉及
    * followOrigin  **参数解释：** 缓存过期时间来源，设置CDN节点的缓存遵循源站还是CDN侧的配置 **约束限制：** 不涉及 **取值范围：** - on: CDN节点的缓存过期时间遵循源站的设置 - off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间” - min_ttl: CDN节点的缓存过期时间取缓存规则和源站二者的最小值  **默认取值：** off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间”
    * forceCache  **参数解释：** 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段 **约束限制：** 强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节 **取值范围：** - on: 打开强制缓存 - off: 关闭强制缓存  **默认取值：** off: 关闭强制缓存
    * urlParameterType  **参数解释：** URL参数 **约束限制：** 不涉及 **取值范围：** - del_params: 忽略指定URL参数 - reserve_params: 保留指定URL参数 - ignore_url_params: 忽略全部URL参数 - full_url: 使用完整URL参数  **默认取值：** full_url: 使用完整URL参数
    * urlParameterValue  **参数解释：** URL参数值 **约束限制：** - 最多配置30条参数值 - 以“,”或“;”分隔 - 当url_parameter_type为del_params或reserve_params时必填  **取值范围：** 不涉及 **默认取值：** 不涉及
    * staleWhileRevalidate  **参数解释：** 如果您的源站的Cache-Control头部设置了stale-while-revalidate=***（***为时间），可以在CDN侧开启SWR开关，当CDN节点缓存的资源过期后，如果客户端请求该资源时过期时间没有超过stale-while-revalidate设置的时间，浏览器仍然返回已缓存的资源，同时cdn节点会回源请求最新的资源并缓存，用户再次请求时就会得到最新的资源。 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** off: 关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'matchType' => 'string',
            'matchValue' => 'string',
            'ttl' => 'int',
            'ttlUnit' => 'string',
            'priority' => 'int',
            'followOrigin' => 'string',
            'forceCache' => 'string',
            'urlParameterType' => 'string',
            'urlParameterValue' => 'string',
            'staleWhileRevalidate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * matchType  **参数解释：** 匹配类型 **约束限制：** 不涉及 **取值范围：** - all: 匹配所有文件 - file_extension: 按文件后缀匹配 - catalog: 按目录匹配 - full_path: 全路径匹配 - home_page: 按首页匹配  **默认取值：** 不涉及
    * matchValue  **参数解释：** 缓存规则匹配内容 **约束限制：** - 当match_type为all时，置空 - 当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”或“;”分隔，如.jpg,.zip,.exe，并且输入的文件名后缀总数不超过100个，总字符不超过1000 - 当match_type为catalog时，为目录路径，输入要求以“/”作为首字符， 以“,”或“;”分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个，总字符不超过255 - 当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，单条全路径缓存规则里仅支持配置一个全路径，如/test/index.html或/test/\\*.jpg，不可配置/_* - 当match_type为home_page时，置空  **取值范围：** 不涉及 **默认取值：** 不涉及
    * ttl  **参数解释：** 资源在CDN节点的缓存过期时间，单位由ttl_unit参数指定 **约束限制：** 最大支持365天 **取值范围：** 不涉及 **默认取值：** 0
    * ttlUnit  **参数解释：** 缓存过期时间单位 **约束限制：** 不涉及 **取值范围：** - s: 秒 - m: 分 - h: 小时 - d: 天  **默认取值：** 不涉及
    * priority  **参数解释：** 缓存规则的优先级，数值越大，优先级越高 **约束限制：** 优先级不能相同 **取值范围：** 1-1000 **默认取值：** 不涉及
    * followOrigin  **参数解释：** 缓存过期时间来源，设置CDN节点的缓存遵循源站还是CDN侧的配置 **约束限制：** 不涉及 **取值范围：** - on: CDN节点的缓存过期时间遵循源站的设置 - off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间” - min_ttl: CDN节点的缓存过期时间取缓存规则和源站二者的最小值  **默认取值：** off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间”
    * forceCache  **参数解释：** 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段 **约束限制：** 强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节 **取值范围：** - on: 打开强制缓存 - off: 关闭强制缓存  **默认取值：** off: 关闭强制缓存
    * urlParameterType  **参数解释：** URL参数 **约束限制：** 不涉及 **取值范围：** - del_params: 忽略指定URL参数 - reserve_params: 保留指定URL参数 - ignore_url_params: 忽略全部URL参数 - full_url: 使用完整URL参数  **默认取值：** full_url: 使用完整URL参数
    * urlParameterValue  **参数解释：** URL参数值 **约束限制：** - 最多配置30条参数值 - 以“,”或“;”分隔 - 当url_parameter_type为del_params或reserve_params时必填  **取值范围：** 不涉及 **默认取值：** 不涉及
    * staleWhileRevalidate  **参数解释：** 如果您的源站的Cache-Control头部设置了stale-while-revalidate=***（***为时间），可以在CDN侧开启SWR开关，当CDN节点缓存的资源过期后，如果客户端请求该资源时过期时间没有超过stale-while-revalidate设置的时间，浏览器仍然返回已缓存的资源，同时cdn节点会回源请求最新的资源并缓存，用户再次请求时就会得到最新的资源。 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** off: 关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'matchType' => null,
        'matchValue' => null,
        'ttl' => null,
        'ttlUnit' => null,
        'priority' => null,
        'followOrigin' => null,
        'forceCache' => null,
        'urlParameterType' => null,
        'urlParameterValue' => null,
        'staleWhileRevalidate' => null
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
    * matchType  **参数解释：** 匹配类型 **约束限制：** 不涉及 **取值范围：** - all: 匹配所有文件 - file_extension: 按文件后缀匹配 - catalog: 按目录匹配 - full_path: 全路径匹配 - home_page: 按首页匹配  **默认取值：** 不涉及
    * matchValue  **参数解释：** 缓存规则匹配内容 **约束限制：** - 当match_type为all时，置空 - 当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”或“;”分隔，如.jpg,.zip,.exe，并且输入的文件名后缀总数不超过100个，总字符不超过1000 - 当match_type为catalog时，为目录路径，输入要求以“/”作为首字符， 以“,”或“;”分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个，总字符不超过255 - 当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，单条全路径缓存规则里仅支持配置一个全路径，如/test/index.html或/test/\\*.jpg，不可配置/_* - 当match_type为home_page时，置空  **取值范围：** 不涉及 **默认取值：** 不涉及
    * ttl  **参数解释：** 资源在CDN节点的缓存过期时间，单位由ttl_unit参数指定 **约束限制：** 最大支持365天 **取值范围：** 不涉及 **默认取值：** 0
    * ttlUnit  **参数解释：** 缓存过期时间单位 **约束限制：** 不涉及 **取值范围：** - s: 秒 - m: 分 - h: 小时 - d: 天  **默认取值：** 不涉及
    * priority  **参数解释：** 缓存规则的优先级，数值越大，优先级越高 **约束限制：** 优先级不能相同 **取值范围：** 1-1000 **默认取值：** 不涉及
    * followOrigin  **参数解释：** 缓存过期时间来源，设置CDN节点的缓存遵循源站还是CDN侧的配置 **约束限制：** 不涉及 **取值范围：** - on: CDN节点的缓存过期时间遵循源站的设置 - off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间” - min_ttl: CDN节点的缓存过期时间取缓存规则和源站二者的最小值  **默认取值：** off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间”
    * forceCache  **参数解释：** 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段 **约束限制：** 强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节 **取值范围：** - on: 打开强制缓存 - off: 关闭强制缓存  **默认取值：** off: 关闭强制缓存
    * urlParameterType  **参数解释：** URL参数 **约束限制：** 不涉及 **取值范围：** - del_params: 忽略指定URL参数 - reserve_params: 保留指定URL参数 - ignore_url_params: 忽略全部URL参数 - full_url: 使用完整URL参数  **默认取值：** full_url: 使用完整URL参数
    * urlParameterValue  **参数解释：** URL参数值 **约束限制：** - 最多配置30条参数值 - 以“,”或“;”分隔 - 当url_parameter_type为del_params或reserve_params时必填  **取值范围：** 不涉及 **默认取值：** 不涉及
    * staleWhileRevalidate  **参数解释：** 如果您的源站的Cache-Control头部设置了stale-while-revalidate=***（***为时间），可以在CDN侧开启SWR开关，当CDN节点缓存的资源过期后，如果客户端请求该资源时过期时间没有超过stale-while-revalidate设置的时间，浏览器仍然返回已缓存的资源，同时cdn节点会回源请求最新的资源并缓存，用户再次请求时就会得到最新的资源。 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** off: 关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'matchType' => 'match_type',
            'matchValue' => 'match_value',
            'ttl' => 'ttl',
            'ttlUnit' => 'ttl_unit',
            'priority' => 'priority',
            'followOrigin' => 'follow_origin',
            'forceCache' => 'force_cache',
            'urlParameterType' => 'url_parameter_type',
            'urlParameterValue' => 'url_parameter_value',
            'staleWhileRevalidate' => 'stale_while_revalidate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * matchType  **参数解释：** 匹配类型 **约束限制：** 不涉及 **取值范围：** - all: 匹配所有文件 - file_extension: 按文件后缀匹配 - catalog: 按目录匹配 - full_path: 全路径匹配 - home_page: 按首页匹配  **默认取值：** 不涉及
    * matchValue  **参数解释：** 缓存规则匹配内容 **约束限制：** - 当match_type为all时，置空 - 当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”或“;”分隔，如.jpg,.zip,.exe，并且输入的文件名后缀总数不超过100个，总字符不超过1000 - 当match_type为catalog时，为目录路径，输入要求以“/”作为首字符， 以“,”或“;”分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个，总字符不超过255 - 当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，单条全路径缓存规则里仅支持配置一个全路径，如/test/index.html或/test/\\*.jpg，不可配置/_* - 当match_type为home_page时，置空  **取值范围：** 不涉及 **默认取值：** 不涉及
    * ttl  **参数解释：** 资源在CDN节点的缓存过期时间，单位由ttl_unit参数指定 **约束限制：** 最大支持365天 **取值范围：** 不涉及 **默认取值：** 0
    * ttlUnit  **参数解释：** 缓存过期时间单位 **约束限制：** 不涉及 **取值范围：** - s: 秒 - m: 分 - h: 小时 - d: 天  **默认取值：** 不涉及
    * priority  **参数解释：** 缓存规则的优先级，数值越大，优先级越高 **约束限制：** 优先级不能相同 **取值范围：** 1-1000 **默认取值：** 不涉及
    * followOrigin  **参数解释：** 缓存过期时间来源，设置CDN节点的缓存遵循源站还是CDN侧的配置 **约束限制：** 不涉及 **取值范围：** - on: CDN节点的缓存过期时间遵循源站的设置 - off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间” - min_ttl: CDN节点的缓存过期时间取缓存规则和源站二者的最小值  **默认取值：** off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间”
    * forceCache  **参数解释：** 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段 **约束限制：** 强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节 **取值范围：** - on: 打开强制缓存 - off: 关闭强制缓存  **默认取值：** off: 关闭强制缓存
    * urlParameterType  **参数解释：** URL参数 **约束限制：** 不涉及 **取值范围：** - del_params: 忽略指定URL参数 - reserve_params: 保留指定URL参数 - ignore_url_params: 忽略全部URL参数 - full_url: 使用完整URL参数  **默认取值：** full_url: 使用完整URL参数
    * urlParameterValue  **参数解释：** URL参数值 **约束限制：** - 最多配置30条参数值 - 以“,”或“;”分隔 - 当url_parameter_type为del_params或reserve_params时必填  **取值范围：** 不涉及 **默认取值：** 不涉及
    * staleWhileRevalidate  **参数解释：** 如果您的源站的Cache-Control头部设置了stale-while-revalidate=***（***为时间），可以在CDN侧开启SWR开关，当CDN节点缓存的资源过期后，如果客户端请求该资源时过期时间没有超过stale-while-revalidate设置的时间，浏览器仍然返回已缓存的资源，同时cdn节点会回源请求最新的资源并缓存，用户再次请求时就会得到最新的资源。 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** off: 关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'matchType' => 'setMatchType',
            'matchValue' => 'setMatchValue',
            'ttl' => 'setTtl',
            'ttlUnit' => 'setTtlUnit',
            'priority' => 'setPriority',
            'followOrigin' => 'setFollowOrigin',
            'forceCache' => 'setForceCache',
            'urlParameterType' => 'setUrlParameterType',
            'urlParameterValue' => 'setUrlParameterValue',
            'staleWhileRevalidate' => 'setStaleWhileRevalidate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * matchType  **参数解释：** 匹配类型 **约束限制：** 不涉及 **取值范围：** - all: 匹配所有文件 - file_extension: 按文件后缀匹配 - catalog: 按目录匹配 - full_path: 全路径匹配 - home_page: 按首页匹配  **默认取值：** 不涉及
    * matchValue  **参数解释：** 缓存规则匹配内容 **约束限制：** - 当match_type为all时，置空 - 当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”或“;”分隔，如.jpg,.zip,.exe，并且输入的文件名后缀总数不超过100个，总字符不超过1000 - 当match_type为catalog时，为目录路径，输入要求以“/”作为首字符， 以“,”或“;”分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个，总字符不超过255 - 当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，单条全路径缓存规则里仅支持配置一个全路径，如/test/index.html或/test/\\*.jpg，不可配置/_* - 当match_type为home_page时，置空  **取值范围：** 不涉及 **默认取值：** 不涉及
    * ttl  **参数解释：** 资源在CDN节点的缓存过期时间，单位由ttl_unit参数指定 **约束限制：** 最大支持365天 **取值范围：** 不涉及 **默认取值：** 0
    * ttlUnit  **参数解释：** 缓存过期时间单位 **约束限制：** 不涉及 **取值范围：** - s: 秒 - m: 分 - h: 小时 - d: 天  **默认取值：** 不涉及
    * priority  **参数解释：** 缓存规则的优先级，数值越大，优先级越高 **约束限制：** 优先级不能相同 **取值范围：** 1-1000 **默认取值：** 不涉及
    * followOrigin  **参数解释：** 缓存过期时间来源，设置CDN节点的缓存遵循源站还是CDN侧的配置 **约束限制：** 不涉及 **取值范围：** - on: CDN节点的缓存过期时间遵循源站的设置 - off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间” - min_ttl: CDN节点的缓存过期时间取缓存规则和源站二者的最小值  **默认取值：** off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间”
    * forceCache  **参数解释：** 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段 **约束限制：** 强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节 **取值范围：** - on: 打开强制缓存 - off: 关闭强制缓存  **默认取值：** off: 关闭强制缓存
    * urlParameterType  **参数解释：** URL参数 **约束限制：** 不涉及 **取值范围：** - del_params: 忽略指定URL参数 - reserve_params: 保留指定URL参数 - ignore_url_params: 忽略全部URL参数 - full_url: 使用完整URL参数  **默认取值：** full_url: 使用完整URL参数
    * urlParameterValue  **参数解释：** URL参数值 **约束限制：** - 最多配置30条参数值 - 以“,”或“;”分隔 - 当url_parameter_type为del_params或reserve_params时必填  **取值范围：** 不涉及 **默认取值：** 不涉及
    * staleWhileRevalidate  **参数解释：** 如果您的源站的Cache-Control头部设置了stale-while-revalidate=***（***为时间），可以在CDN侧开启SWR开关，当CDN节点缓存的资源过期后，如果客户端请求该资源时过期时间没有超过stale-while-revalidate设置的时间，浏览器仍然返回已缓存的资源，同时cdn节点会回源请求最新的资源并缓存，用户再次请求时就会得到最新的资源。 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** off: 关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'matchType' => 'getMatchType',
            'matchValue' => 'getMatchValue',
            'ttl' => 'getTtl',
            'ttlUnit' => 'getTtlUnit',
            'priority' => 'getPriority',
            'followOrigin' => 'getFollowOrigin',
            'forceCache' => 'getForceCache',
            'urlParameterType' => 'getUrlParameterType',
            'urlParameterValue' => 'getUrlParameterValue',
            'staleWhileRevalidate' => 'getStaleWhileRevalidate'
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
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['matchValue'] = isset($data['matchValue']) ? $data['matchValue'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['ttlUnit'] = isset($data['ttlUnit']) ? $data['ttlUnit'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['followOrigin'] = isset($data['followOrigin']) ? $data['followOrigin'] : null;
        $this->container['forceCache'] = isset($data['forceCache']) ? $data['forceCache'] : null;
        $this->container['urlParameterType'] = isset($data['urlParameterType']) ? $data['urlParameterType'] : null;
        $this->container['urlParameterValue'] = isset($data['urlParameterValue']) ? $data['urlParameterValue'] : null;
        $this->container['staleWhileRevalidate'] = isset($data['staleWhileRevalidate']) ? $data['staleWhileRevalidate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['matchType'] === null) {
            $invalidProperties[] = "'matchType' can't be null";
        }
        if ($this->container['ttlUnit'] === null) {
            $invalidProperties[] = "'ttlUnit' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets matchType
    *  **参数解释：** 匹配类型 **约束限制：** 不涉及 **取值范围：** - all: 匹配所有文件 - file_extension: 按文件后缀匹配 - catalog: 按目录匹配 - full_path: 全路径匹配 - home_page: 按首页匹配  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string $matchType **参数解释：** 匹配类型 **约束限制：** 不涉及 **取值范围：** - all: 匹配所有文件 - file_extension: 按文件后缀匹配 - catalog: 按目录匹配 - full_path: 全路径匹配 - home_page: 按首页匹配  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets matchValue
    *  **参数解释：** 缓存规则匹配内容 **约束限制：** - 当match_type为all时，置空 - 当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”或“;”分隔，如.jpg,.zip,.exe，并且输入的文件名后缀总数不超过100个，总字符不超过1000 - 当match_type为catalog时，为目录路径，输入要求以“/”作为首字符， 以“,”或“;”分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个，总字符不超过255 - 当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，单条全路径缓存规则里仅支持配置一个全路径，如/test/index.html或/test/\\*.jpg，不可配置/_* - 当match_type为home_page时，置空  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getMatchValue()
    {
        return $this->container['matchValue'];
    }

    /**
    * Sets matchValue
    *
    * @param string|null $matchValue **参数解释：** 缓存规则匹配内容 **约束限制：** - 当match_type为all时，置空 - 当match_type为file_extension时，为文件后缀，输入首字符为“.”，以“,”或“;”分隔，如.jpg,.zip,.exe，并且输入的文件名后缀总数不超过100个，总字符不超过1000 - 当match_type为catalog时，为目录路径，输入要求以“/”作为首字符， 以“,”或“;”分隔，如/test/folder01,/test/folder02，并且输入的目录路径总数不超过20个，总字符不超过255 - 当match_type为full_path时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，单条全路径缓存规则里仅支持配置一个全路径，如/test/index.html或/test/\\*.jpg，不可配置/_* - 当match_type为home_page时，置空  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMatchValue($matchValue)
    {
        $this->container['matchValue'] = $matchValue;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数解释：** 资源在CDN节点的缓存过期时间，单位由ttl_unit参数指定 **约束限制：** 最大支持365天 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl **参数解释：** 资源在CDN节点的缓存过期时间，单位由ttl_unit参数指定 **约束限制：** 最大支持365天 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets ttlUnit
    *  **参数解释：** 缓存过期时间单位 **约束限制：** 不涉及 **取值范围：** - s: 秒 - m: 分 - h: 小时 - d: 天  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getTtlUnit()
    {
        return $this->container['ttlUnit'];
    }

    /**
    * Sets ttlUnit
    *
    * @param string $ttlUnit **参数解释：** 缓存过期时间单位 **约束限制：** 不涉及 **取值范围：** - s: 秒 - m: 分 - h: 小时 - d: 天  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTtlUnit($ttlUnit)
    {
        $this->container['ttlUnit'] = $ttlUnit;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释：** 缓存规则的优先级，数值越大，优先级越高 **约束限制：** 优先级不能相同 **取值范围：** 1-1000 **默认取值：** 不涉及
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority **参数解释：** 缓存规则的优先级，数值越大，优先级越高 **约束限制：** 优先级不能相同 **取值范围：** 1-1000 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets followOrigin
    *  **参数解释：** 缓存过期时间来源，设置CDN节点的缓存遵循源站还是CDN侧的配置 **约束限制：** 不涉及 **取值范围：** - on: CDN节点的缓存过期时间遵循源站的设置 - off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间” - min_ttl: CDN节点的缓存过期时间取缓存规则和源站二者的最小值  **默认取值：** off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间”
    *
    * @return string|null
    */
    public function getFollowOrigin()
    {
        return $this->container['followOrigin'];
    }

    /**
    * Sets followOrigin
    *
    * @param string|null $followOrigin **参数解释：** 缓存过期时间来源，设置CDN节点的缓存遵循源站还是CDN侧的配置 **约束限制：** 不涉及 **取值范围：** - on: CDN节点的缓存过期时间遵循源站的设置 - off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间” - min_ttl: CDN节点的缓存过期时间取缓存规则和源站二者的最小值  **默认取值：** off: CDN节点的缓存过期时间遵循“缓存规则”中的“缓存过期时间”
    *
    * @return $this
    */
    public function setFollowOrigin($followOrigin)
    {
        $this->container['followOrigin'] = $followOrigin;
        return $this;
    }

    /**
    * Gets forceCache
    *  **参数解释：** 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段 **约束限制：** 强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节 **取值范围：** - on: 打开强制缓存 - off: 关闭强制缓存  **默认取值：** off: 关闭强制缓存
    *
    * @return string|null
    */
    public function getForceCache()
    {
        return $this->container['forceCache'];
    }

    /**
    * Sets forceCache
    *
    * @param string|null $forceCache **参数解释：** 强制缓存：CDN节点缓存过期时间是否忽略源站响应头Cache-Control中的no-cache、private、no-store字段 **约束限制：** 强制缓存与缓存过期时间来源功能配合使用，具体使用限制及配置效果请参考CDN用户指南的配置节点缓存规则章节 **取值范围：** - on: 打开强制缓存 - off: 关闭强制缓存  **默认取值：** off: 关闭强制缓存
    *
    * @return $this
    */
    public function setForceCache($forceCache)
    {
        $this->container['forceCache'] = $forceCache;
        return $this;
    }

    /**
    * Gets urlParameterType
    *  **参数解释：** URL参数 **约束限制：** 不涉及 **取值范围：** - del_params: 忽略指定URL参数 - reserve_params: 保留指定URL参数 - ignore_url_params: 忽略全部URL参数 - full_url: 使用完整URL参数  **默认取值：** full_url: 使用完整URL参数
    *
    * @return string|null
    */
    public function getUrlParameterType()
    {
        return $this->container['urlParameterType'];
    }

    /**
    * Sets urlParameterType
    *
    * @param string|null $urlParameterType **参数解释：** URL参数 **约束限制：** 不涉及 **取值范围：** - del_params: 忽略指定URL参数 - reserve_params: 保留指定URL参数 - ignore_url_params: 忽略全部URL参数 - full_url: 使用完整URL参数  **默认取值：** full_url: 使用完整URL参数
    *
    * @return $this
    */
    public function setUrlParameterType($urlParameterType)
    {
        $this->container['urlParameterType'] = $urlParameterType;
        return $this;
    }

    /**
    * Gets urlParameterValue
    *  **参数解释：** URL参数值 **约束限制：** - 最多配置30条参数值 - 以“,”或“;”分隔 - 当url_parameter_type为del_params或reserve_params时必填  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getUrlParameterValue()
    {
        return $this->container['urlParameterValue'];
    }

    /**
    * Sets urlParameterValue
    *
    * @param string|null $urlParameterValue **参数解释：** URL参数值 **约束限制：** - 最多配置30条参数值 - 以“,”或“;”分隔 - 当url_parameter_type为del_params或reserve_params时必填  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUrlParameterValue($urlParameterValue)
    {
        $this->container['urlParameterValue'] = $urlParameterValue;
        return $this;
    }

    /**
    * Gets staleWhileRevalidate
    *  **参数解释：** 如果您的源站的Cache-Control头部设置了stale-while-revalidate=***（***为时间），可以在CDN侧开启SWR开关，当CDN节点缓存的资源过期后，如果客户端请求该资源时过期时间没有超过stale-while-revalidate设置的时间，浏览器仍然返回已缓存的资源，同时cdn节点会回源请求最新的资源并缓存，用户再次请求时就会得到最新的资源。 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** off: 关闭
    *
    * @return string|null
    */
    public function getStaleWhileRevalidate()
    {
        return $this->container['staleWhileRevalidate'];
    }

    /**
    * Sets staleWhileRevalidate
    *
    * @param string|null $staleWhileRevalidate **参数解释：** 如果您的源站的Cache-Control头部设置了stale-while-revalidate=***（***为时间），可以在CDN侧开启SWR开关，当CDN节点缓存的资源过期后，如果客户端请求该资源时过期时间没有超过stale-while-revalidate设置的时间，浏览器仍然返回已缓存的资源，同时cdn节点会回源请求最新的资源并缓存，用户再次请求时就会得到最新的资源。 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** off: 关闭
    *
    * @return $this
    */
    public function setStaleWhileRevalidate($staleWhileRevalidate)
    {
        $this->container['staleWhileRevalidate'] = $staleWhileRevalidate;
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

