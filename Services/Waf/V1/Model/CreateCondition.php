<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：** - url: 路径 - custom_geoip: 客户端IP所属的地理位置 - robot: 已知特征爬虫 - user-agent: User Agent - ip: IPv4 - ipv6: IPv6 - params: Params - cookie: Cookie - referer: Referer - header: Header - method: Method - request_line: Request Line - request: Request - protocol: Protocol - request_body: Request Body  **默认取值：** 不涉及
    * index  **参数解释：** 子字段 **约束限制：** 随字段类型变化 **取值范围：** - custom_geoip:    - v4：ipv4   - v6：ipv6   - any：ipv4或ipv6 - ip/ipv6:    - null：客户端IP   - x-forwarded-for：请求header中X-Forwarded-For记录的IP   - $remote_addr：TCP连接IP   - $remote_sockaddr：3层源IP - params/cookie/header：   - check_all_indexes_logic为null： 可自定义子字段名称   - check_all_indexes_logic不为null：必须为null - 其他字段类型：不支持，默认为null  **默认取值：** 不涉及
    * logicOperation  **参数解释：** 匹配逻辑 **约束限制：** 匹配逻辑根据字段类型变化 **取值范围：** - url/user-agent/referer:    - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - custom_geoip:    - belong: 属于   - not_belong: 不属于 - robot:    - match: 匹配   - not_match: 不匹配 - ip/ipv6:   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - equal: 等于   - not_equal: 不等于 - params/cookie/header:   - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - num_equal: 数字等于   - num_not_equal: 数字不等于   - num_greater: 数字大于   - num_less: 数字小于   - exist: 存在   - not_exist: 不存在   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - method/protocol:   - equal: 等于   - not_equal: 不等于 - request_line:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于 - request:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - request_body:   - contain: 包含   - contain_any: 包含任意一个   - not_contain: 不包含   - not_contain_all: 不包含全部   - regular_match: 正则匹配   - regular_not_match: 正则不匹配  **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数 **取值范围：** 匹配内容字符串长度范围：[1, 4096] 内容格式根据参数category和logic_operation变化： - logic_operation为数值比较类型：纯数字 - url: URL格式；仅支持单个匹配内容 - custom_geoip: 客户端IP所属国家或省份，多个位置以|分隔，比如：\"BJ|SH\" - robot: 已知特征爬虫列表，可选择多个   - crawler_engine：搜索引擎   - crawler_scanner：扫描器   - crawler_script：脚本工具   - crawler_other：其他爬虫 - ip: IPv4 - ipv6: IPv6 - referer: 例如：http://test.com - params：不包含& - user-agent/cookie/header/request_body: 无限制 - method: HTTP协议支持的method，字母大写 - protocol:    - http   - https  **默认取值：** 不涉及
    * checkAllIndexesLogic  **参数解释：** 需要检查所有子字段或检查任意子字段时传此参数 **约束限制：** 仅当category为params/cookie/header时支持 **取值范围：** - 1：所有子字段 - 2：任意子字段  **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'index' => 'string',
            'logicOperation' => 'string',
            'contents' => 'string[]',
            'checkAllIndexesLogic' => 'int',
            'valueListId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：** - url: 路径 - custom_geoip: 客户端IP所属的地理位置 - robot: 已知特征爬虫 - user-agent: User Agent - ip: IPv4 - ipv6: IPv6 - params: Params - cookie: Cookie - referer: Referer - header: Header - method: Method - request_line: Request Line - request: Request - protocol: Protocol - request_body: Request Body  **默认取值：** 不涉及
    * index  **参数解释：** 子字段 **约束限制：** 随字段类型变化 **取值范围：** - custom_geoip:    - v4：ipv4   - v6：ipv6   - any：ipv4或ipv6 - ip/ipv6:    - null：客户端IP   - x-forwarded-for：请求header中X-Forwarded-For记录的IP   - $remote_addr：TCP连接IP   - $remote_sockaddr：3层源IP - params/cookie/header：   - check_all_indexes_logic为null： 可自定义子字段名称   - check_all_indexes_logic不为null：必须为null - 其他字段类型：不支持，默认为null  **默认取值：** 不涉及
    * logicOperation  **参数解释：** 匹配逻辑 **约束限制：** 匹配逻辑根据字段类型变化 **取值范围：** - url/user-agent/referer:    - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - custom_geoip:    - belong: 属于   - not_belong: 不属于 - robot:    - match: 匹配   - not_match: 不匹配 - ip/ipv6:   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - equal: 等于   - not_equal: 不等于 - params/cookie/header:   - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - num_equal: 数字等于   - num_not_equal: 数字不等于   - num_greater: 数字大于   - num_less: 数字小于   - exist: 存在   - not_exist: 不存在   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - method/protocol:   - equal: 等于   - not_equal: 不等于 - request_line:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于 - request:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - request_body:   - contain: 包含   - contain_any: 包含任意一个   - not_contain: 不包含   - not_contain_all: 不包含全部   - regular_match: 正则匹配   - regular_not_match: 正则不匹配  **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数 **取值范围：** 匹配内容字符串长度范围：[1, 4096] 内容格式根据参数category和logic_operation变化： - logic_operation为数值比较类型：纯数字 - url: URL格式；仅支持单个匹配内容 - custom_geoip: 客户端IP所属国家或省份，多个位置以|分隔，比如：\"BJ|SH\" - robot: 已知特征爬虫列表，可选择多个   - crawler_engine：搜索引擎   - crawler_scanner：扫描器   - crawler_script：脚本工具   - crawler_other：其他爬虫 - ip: IPv4 - ipv6: IPv6 - referer: 例如：http://test.com - params：不包含& - user-agent/cookie/header/request_body: 无限制 - method: HTTP协议支持的method，字母大写 - protocol:    - http   - https  **默认取值：** 不涉及
    * checkAllIndexesLogic  **参数解释：** 需要检查所有子字段或检查任意子字段时传此参数 **约束限制：** 仅当category为params/cookie/header时支持 **取值范围：** - 1：所有子字段 - 2：任意子字段  **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'index' => null,
        'logicOperation' => null,
        'contents' => null,
        'checkAllIndexesLogic' => null,
        'valueListId' => null
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
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：** - url: 路径 - custom_geoip: 客户端IP所属的地理位置 - robot: 已知特征爬虫 - user-agent: User Agent - ip: IPv4 - ipv6: IPv6 - params: Params - cookie: Cookie - referer: Referer - header: Header - method: Method - request_line: Request Line - request: Request - protocol: Protocol - request_body: Request Body  **默认取值：** 不涉及
    * index  **参数解释：** 子字段 **约束限制：** 随字段类型变化 **取值范围：** - custom_geoip:    - v4：ipv4   - v6：ipv6   - any：ipv4或ipv6 - ip/ipv6:    - null：客户端IP   - x-forwarded-for：请求header中X-Forwarded-For记录的IP   - $remote_addr：TCP连接IP   - $remote_sockaddr：3层源IP - params/cookie/header：   - check_all_indexes_logic为null： 可自定义子字段名称   - check_all_indexes_logic不为null：必须为null - 其他字段类型：不支持，默认为null  **默认取值：** 不涉及
    * logicOperation  **参数解释：** 匹配逻辑 **约束限制：** 匹配逻辑根据字段类型变化 **取值范围：** - url/user-agent/referer:    - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - custom_geoip:    - belong: 属于   - not_belong: 不属于 - robot:    - match: 匹配   - not_match: 不匹配 - ip/ipv6:   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - equal: 等于   - not_equal: 不等于 - params/cookie/header:   - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - num_equal: 数字等于   - num_not_equal: 数字不等于   - num_greater: 数字大于   - num_less: 数字小于   - exist: 存在   - not_exist: 不存在   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - method/protocol:   - equal: 等于   - not_equal: 不等于 - request_line:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于 - request:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - request_body:   - contain: 包含   - contain_any: 包含任意一个   - not_contain: 不包含   - not_contain_all: 不包含全部   - regular_match: 正则匹配   - regular_not_match: 正则不匹配  **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数 **取值范围：** 匹配内容字符串长度范围：[1, 4096] 内容格式根据参数category和logic_operation变化： - logic_operation为数值比较类型：纯数字 - url: URL格式；仅支持单个匹配内容 - custom_geoip: 客户端IP所属国家或省份，多个位置以|分隔，比如：\"BJ|SH\" - robot: 已知特征爬虫列表，可选择多个   - crawler_engine：搜索引擎   - crawler_scanner：扫描器   - crawler_script：脚本工具   - crawler_other：其他爬虫 - ip: IPv4 - ipv6: IPv6 - referer: 例如：http://test.com - params：不包含& - user-agent/cookie/header/request_body: 无限制 - method: HTTP协议支持的method，字母大写 - protocol:    - http   - https  **默认取值：** 不涉及
    * checkAllIndexesLogic  **参数解释：** 需要检查所有子字段或检查任意子字段时传此参数 **约束限制：** 仅当category为params/cookie/header时支持 **取值范围：** - 1：所有子字段 - 2：任意子字段  **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'index' => 'index',
            'logicOperation' => 'logic_operation',
            'contents' => 'contents',
            'checkAllIndexesLogic' => 'check_all_indexes_logic',
            'valueListId' => 'value_list_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：** - url: 路径 - custom_geoip: 客户端IP所属的地理位置 - robot: 已知特征爬虫 - user-agent: User Agent - ip: IPv4 - ipv6: IPv6 - params: Params - cookie: Cookie - referer: Referer - header: Header - method: Method - request_line: Request Line - request: Request - protocol: Protocol - request_body: Request Body  **默认取值：** 不涉及
    * index  **参数解释：** 子字段 **约束限制：** 随字段类型变化 **取值范围：** - custom_geoip:    - v4：ipv4   - v6：ipv6   - any：ipv4或ipv6 - ip/ipv6:    - null：客户端IP   - x-forwarded-for：请求header中X-Forwarded-For记录的IP   - $remote_addr：TCP连接IP   - $remote_sockaddr：3层源IP - params/cookie/header：   - check_all_indexes_logic为null： 可自定义子字段名称   - check_all_indexes_logic不为null：必须为null - 其他字段类型：不支持，默认为null  **默认取值：** 不涉及
    * logicOperation  **参数解释：** 匹配逻辑 **约束限制：** 匹配逻辑根据字段类型变化 **取值范围：** - url/user-agent/referer:    - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - custom_geoip:    - belong: 属于   - not_belong: 不属于 - robot:    - match: 匹配   - not_match: 不匹配 - ip/ipv6:   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - equal: 等于   - not_equal: 不等于 - params/cookie/header:   - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - num_equal: 数字等于   - num_not_equal: 数字不等于   - num_greater: 数字大于   - num_less: 数字小于   - exist: 存在   - not_exist: 不存在   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - method/protocol:   - equal: 等于   - not_equal: 不等于 - request_line:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于 - request:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - request_body:   - contain: 包含   - contain_any: 包含任意一个   - not_contain: 不包含   - not_contain_all: 不包含全部   - regular_match: 正则匹配   - regular_not_match: 正则不匹配  **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数 **取值范围：** 匹配内容字符串长度范围：[1, 4096] 内容格式根据参数category和logic_operation变化： - logic_operation为数值比较类型：纯数字 - url: URL格式；仅支持单个匹配内容 - custom_geoip: 客户端IP所属国家或省份，多个位置以|分隔，比如：\"BJ|SH\" - robot: 已知特征爬虫列表，可选择多个   - crawler_engine：搜索引擎   - crawler_scanner：扫描器   - crawler_script：脚本工具   - crawler_other：其他爬虫 - ip: IPv4 - ipv6: IPv6 - referer: 例如：http://test.com - params：不包含& - user-agent/cookie/header/request_body: 无限制 - method: HTTP协议支持的method，字母大写 - protocol:    - http   - https  **默认取值：** 不涉及
    * checkAllIndexesLogic  **参数解释：** 需要检查所有子字段或检查任意子字段时传此参数 **约束限制：** 仅当category为params/cookie/header时支持 **取值范围：** - 1：所有子字段 - 2：任意子字段  **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'index' => 'setIndex',
            'logicOperation' => 'setLogicOperation',
            'contents' => 'setContents',
            'checkAllIndexesLogic' => 'setCheckAllIndexesLogic',
            'valueListId' => 'setValueListId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：** - url: 路径 - custom_geoip: 客户端IP所属的地理位置 - robot: 已知特征爬虫 - user-agent: User Agent - ip: IPv4 - ipv6: IPv6 - params: Params - cookie: Cookie - referer: Referer - header: Header - method: Method - request_line: Request Line - request: Request - protocol: Protocol - request_body: Request Body  **默认取值：** 不涉及
    * index  **参数解释：** 子字段 **约束限制：** 随字段类型变化 **取值范围：** - custom_geoip:    - v4：ipv4   - v6：ipv6   - any：ipv4或ipv6 - ip/ipv6:    - null：客户端IP   - x-forwarded-for：请求header中X-Forwarded-For记录的IP   - $remote_addr：TCP连接IP   - $remote_sockaddr：3层源IP - params/cookie/header：   - check_all_indexes_logic为null： 可自定义子字段名称   - check_all_indexes_logic不为null：必须为null - 其他字段类型：不支持，默认为null  **默认取值：** 不涉及
    * logicOperation  **参数解释：** 匹配逻辑 **约束限制：** 匹配逻辑根据字段类型变化 **取值范围：** - url/user-agent/referer:    - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - custom_geoip:    - belong: 属于   - not_belong: 不属于 - robot:    - match: 匹配   - not_match: 不匹配 - ip/ipv6:   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - equal: 等于   - not_equal: 不等于 - params/cookie/header:   - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - num_equal: 数字等于   - num_not_equal: 数字不等于   - num_greater: 数字大于   - num_less: 数字小于   - exist: 存在   - not_exist: 不存在   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - method/protocol:   - equal: 等于   - not_equal: 不等于 - request_line:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于 - request:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - request_body:   - contain: 包含   - contain_any: 包含任意一个   - not_contain: 不包含   - not_contain_all: 不包含全部   - regular_match: 正则匹配   - regular_not_match: 正则不匹配  **默认取值：** 不涉及
    * contents  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数 **取值范围：** 匹配内容字符串长度范围：[1, 4096] 内容格式根据参数category和logic_operation变化： - logic_operation为数值比较类型：纯数字 - url: URL格式；仅支持单个匹配内容 - custom_geoip: 客户端IP所属国家或省份，多个位置以|分隔，比如：\"BJ|SH\" - robot: 已知特征爬虫列表，可选择多个   - crawler_engine：搜索引擎   - crawler_scanner：扫描器   - crawler_script：脚本工具   - crawler_other：其他爬虫 - ip: IPv4 - ipv6: IPv6 - referer: 例如：http://test.com - params：不包含& - user-agent/cookie/header/request_body: 无限制 - method: HTTP协议支持的method，字母大写 - protocol:    - http   - https  **默认取值：** 不涉及
    * checkAllIndexesLogic  **参数解释：** 需要检查所有子字段或检查任意子字段时传此参数 **约束限制：** 仅当category为params/cookie/header时支持 **取值范围：** - 1：所有子字段 - 2：任意子字段  **默认取值：** 不涉及
    * valueListId  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'index' => 'getIndex',
            'logicOperation' => 'getLogicOperation',
            'contents' => 'getContents',
            'checkAllIndexesLogic' => 'getCheckAllIndexesLogic',
            'valueListId' => 'getValueListId'
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
    const CATEGORY_URL = 'url';
    const CATEGORY_CUSTOM_GEO = 'custom_geo';
    const CATEGORY_ROBOT = 'robot';
    const CATEGORY_USER_AGENT = 'user-agent';
    const CATEGORY_IP = 'ip';
    const CATEGORY_IPV6 = 'ipv6';
    const CATEGORY_PARAMS = 'params';
    const CATEGORY_COOKIE = 'cookie';
    const CATEGORY_REFERER = 'referer';
    const CATEGORY_HEADER = 'header';
    const CATEGORY_METHOD = 'method';
    const CATEGORY_REQUEST_LINE = 'request_line';
    const CATEGORY_REQUEST = 'request';
    const CATEGORY_PROTOCOL = 'protocol';
    const CATEGORY_REQUEST_BODY = 'request_body';
    const LOGIC_OPERATION_LEN_EQUAL = 'len_equal';
    const LOGIC_OPERATION_LEN_NOT_EQUAL = 'len_not_equal';
    const LOGIC_OPERATION_LEN_GREATER = 'len_greater';
    const LOGIC_OPERATION_LEN_LESS = 'len_less';
    const LOGIC_OPERATION_LEN_GREATER_EQUAL = 'len_greater_equal';
    const LOGIC_OPERATION_LEN_LESS_EQUAL = 'len_less_equal';
    const LOGIC_OPERATION_REGULAR_MATCH = 'regular_match';
    const LOGIC_OPERATION_REGULAR_NOT_MATCH = 'regular_not_match';
    const LOGIC_OPERATION_MATCH = 'match';
    const LOGIC_OPERATION_NOT_MATCH = 'not_match';
    const LOGIC_OPERATION_NUM_EQUAL = 'num_equal';
    const LOGIC_OPERATION_NUM_NOT_EQUAL = 'num_not_equal';
    const LOGIC_OPERATION_NUM_GREATER = 'num_greater';
    const LOGIC_OPERATION_NUM_LESS = 'num_less';
    const LOGIC_OPERATION_EXIST = 'exist';
    const LOGIC_OPERATION_NOT_EXIST = 'not_exist';
    const LOGIC_OPERATION_EQUAL = 'equal';
    const LOGIC_OPERATION_NOT_EQUAL = 'not_equal';
    const LOGIC_OPERATION_EQUAL_ANY = 'equal_any';
    const LOGIC_OPERATION_NOT_EQUAL_ALL = 'not_equal_all';
    const LOGIC_OPERATION_PREFIX = 'prefix';
    const LOGIC_OPERATION_PREFIX_ANY = 'prefix_any';
    const LOGIC_OPERATION_NOT_PREFIX = 'not_prefix';
    const LOGIC_OPERATION_NOT_PREFIX_ALL = 'not_prefix_all';
    const LOGIC_OPERATION_SUFFIX = 'suffix';
    const LOGIC_OPERATION_SUFFIX_ANY = 'suffix_any';
    const LOGIC_OPERATION_NOT_SUFFIX = 'not_suffix';
    const LOGIC_OPERATION_NOT_SUFFIX_ALL = 'not_suffix_all';
    const LOGIC_OPERATION_CONTAIN = 'contain';
    const LOGIC_OPERATION_CONTAIN_ANY = 'contain_any';
    const LOGIC_OPERATION_NOT_CONTAIN = 'not_contain';
    const LOGIC_OPERATION_NOT_CONTAIN_ALL = 'not_contain_all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_URL,
            self::CATEGORY_CUSTOM_GEO,
            self::CATEGORY_ROBOT,
            self::CATEGORY_USER_AGENT,
            self::CATEGORY_IP,
            self::CATEGORY_IPV6,
            self::CATEGORY_PARAMS,
            self::CATEGORY_COOKIE,
            self::CATEGORY_REFERER,
            self::CATEGORY_HEADER,
            self::CATEGORY_METHOD,
            self::CATEGORY_REQUEST_LINE,
            self::CATEGORY_REQUEST,
            self::CATEGORY_PROTOCOL,
            self::CATEGORY_REQUEST_BODY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogicOperationAllowableValues()
    {
        return [
            self::LOGIC_OPERATION_LEN_EQUAL,
            self::LOGIC_OPERATION_LEN_NOT_EQUAL,
            self::LOGIC_OPERATION_LEN_GREATER,
            self::LOGIC_OPERATION_LEN_LESS,
            self::LOGIC_OPERATION_LEN_GREATER_EQUAL,
            self::LOGIC_OPERATION_LEN_LESS_EQUAL,
            self::LOGIC_OPERATION_REGULAR_MATCH,
            self::LOGIC_OPERATION_REGULAR_NOT_MATCH,
            self::LOGIC_OPERATION_MATCH,
            self::LOGIC_OPERATION_NOT_MATCH,
            self::LOGIC_OPERATION_NUM_EQUAL,
            self::LOGIC_OPERATION_NUM_NOT_EQUAL,
            self::LOGIC_OPERATION_NUM_GREATER,
            self::LOGIC_OPERATION_NUM_LESS,
            self::LOGIC_OPERATION_EXIST,
            self::LOGIC_OPERATION_NOT_EXIST,
            self::LOGIC_OPERATION_EQUAL,
            self::LOGIC_OPERATION_NOT_EQUAL,
            self::LOGIC_OPERATION_EQUAL_ANY,
            self::LOGIC_OPERATION_NOT_EQUAL_ALL,
            self::LOGIC_OPERATION_PREFIX,
            self::LOGIC_OPERATION_PREFIX_ANY,
            self::LOGIC_OPERATION_NOT_PREFIX,
            self::LOGIC_OPERATION_NOT_PREFIX_ALL,
            self::LOGIC_OPERATION_SUFFIX,
            self::LOGIC_OPERATION_SUFFIX_ANY,
            self::LOGIC_OPERATION_NOT_SUFFIX,
            self::LOGIC_OPERATION_NOT_SUFFIX_ALL,
            self::LOGIC_OPERATION_CONTAIN,
            self::LOGIC_OPERATION_CONTAIN_ANY,
            self::LOGIC_OPERATION_NOT_CONTAIN,
            self::LOGIC_OPERATION_NOT_CONTAIN_ALL,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['logicOperation'] = isset($data['logicOperation']) ? $data['logicOperation'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['checkAllIndexesLogic'] = isset($data['checkAllIndexesLogic']) ? $data['checkAllIndexesLogic'] : null;
        $this->container['valueListId'] = isset($data['valueListId']) ? $data['valueListId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['logicOperation'] === null) {
            $invalidProperties[] = "'logicOperation' can't be null";
        }
            $allowedValues = $this->getLogicOperationAllowableValues();
                if (!is_null($this->container['logicOperation']) && !in_array($this->container['logicOperation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logicOperation', must be one of '%s'",
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
    * Gets category
    *  **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：** - url: 路径 - custom_geoip: 客户端IP所属的地理位置 - robot: 已知特征爬虫 - user-agent: User Agent - ip: IPv4 - ipv6: IPv6 - params: Params - cookie: Cookie - referer: Referer - header: Header - method: Method - request_line: Request Line - request: Request - protocol: Protocol - request_body: Request Body  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释：** 字段类型 **约束限制：** 不涉及 **取值范围：** - url: 路径 - custom_geoip: 客户端IP所属的地理位置 - robot: 已知特征爬虫 - user-agent: User Agent - ip: IPv4 - ipv6: IPv6 - params: Params - cookie: Cookie - referer: Referer - header: Header - method: Method - request_line: Request Line - request: Request - protocol: Protocol - request_body: Request Body  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets index
    *  **参数解释：** 子字段 **约束限制：** 随字段类型变化 **取值范围：** - custom_geoip:    - v4：ipv4   - v6：ipv6   - any：ipv4或ipv6 - ip/ipv6:    - null：客户端IP   - x-forwarded-for：请求header中X-Forwarded-For记录的IP   - $remote_addr：TCP连接IP   - $remote_sockaddr：3层源IP - params/cookie/header：   - check_all_indexes_logic为null： 可自定义子字段名称   - check_all_indexes_logic不为null：必须为null - 其他字段类型：不支持，默认为null  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param string|null $index **参数解释：** 子字段 **约束限制：** 随字段类型变化 **取值范围：** - custom_geoip:    - v4：ipv4   - v6：ipv6   - any：ipv4或ipv6 - ip/ipv6:    - null：客户端IP   - x-forwarded-for：请求header中X-Forwarded-For记录的IP   - $remote_addr：TCP连接IP   - $remote_sockaddr：3层源IP - params/cookie/header：   - check_all_indexes_logic为null： 可自定义子字段名称   - check_all_indexes_logic不为null：必须为null - 其他字段类型：不支持，默认为null  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets logicOperation
    *  **参数解释：** 匹配逻辑 **约束限制：** 匹配逻辑根据字段类型变化 **取值范围：** - url/user-agent/referer:    - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - custom_geoip:    - belong: 属于   - not_belong: 不属于 - robot:    - match: 匹配   - not_match: 不匹配 - ip/ipv6:   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - equal: 等于   - not_equal: 不等于 - params/cookie/header:   - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - num_equal: 数字等于   - num_not_equal: 数字不等于   - num_greater: 数字大于   - num_less: 数字小于   - exist: 存在   - not_exist: 不存在   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - method/protocol:   - equal: 等于   - not_equal: 不等于 - request_line:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于 - request:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - request_body:   - contain: 包含   - contain_any: 包含任意一个   - not_contain: 不包含   - not_contain_all: 不包含全部   - regular_match: 正则匹配   - regular_not_match: 正则不匹配  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getLogicOperation()
    {
        return $this->container['logicOperation'];
    }

    /**
    * Sets logicOperation
    *
    * @param string $logicOperation **参数解释：** 匹配逻辑 **约束限制：** 匹配逻辑根据字段类型变化 **取值范围：** - url/user-agent/referer:    - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - custom_geoip:    - belong: 属于   - not_belong: 不属于 - robot:    - match: 匹配   - not_match: 不匹配 - ip/ipv6:   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - equal: 等于   - not_equal: 不等于 - params/cookie/header:   - contain_any: 包含任意一个   - not_contain_all: 不包含全部   - equal_any: 等于任意一个   - not_equal_all: 不等于全部   - prefix_any: 前缀匹配任意一个   - not_prefix_all: 前缀不匹配全部   - suffix_any: 后缀匹配任意一个   - not_suffix_all: 后缀不匹配全部   - contain: 包含   - not_contain: 不包含   - equal: 等于   - not_equal: 不等于   - prefix: 前缀匹配   - not_prefix: 前缀不匹配   - suffix: 后缀匹配   - not_suffix: 后缀不匹配   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - num_equal: 数字等于   - num_not_equal: 数字不等于   - num_greater: 数字大于   - num_less: 数字小于   - exist: 存在   - not_exist: 不存在   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - method/protocol:   - equal: 等于   - not_equal: 不等于 - request_line:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于 - request:   - len_equal: 长度等于   - len_not_equal: 长度不等于   - len_greater: 长度大于   - len_less: 长度小于   - len_greater_equal: 长度大于等于   - len_less_equal: 长度小于等于   - regular_match: 正则匹配   - regular_not_match: 正则不匹配 - request_body:   - contain: 包含   - contain_any: 包含任意一个   - not_contain: 不包含   - not_contain_all: 不包含全部   - regular_match: 正则匹配   - regular_not_match: 正则不匹配  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLogicOperation($logicOperation)
    {
        $this->container['logicOperation'] = $logicOperation;
        return $this;
    }

    /**
    * Gets contents
    *  **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数 **取值范围：** 匹配内容字符串长度范围：[1, 4096] 内容格式根据参数category和logic_operation变化： - logic_operation为数值比较类型：纯数字 - url: URL格式；仅支持单个匹配内容 - custom_geoip: 客户端IP所属国家或省份，多个位置以|分隔，比如：\"BJ|SH\" - robot: 已知特征爬虫列表，可选择多个   - crawler_engine：搜索引擎   - crawler_scanner：扫描器   - crawler_script：脚本工具   - crawler_other：其他爬虫 - ip: IPv4 - ipv6: IPv6 - referer: 例如：http://test.com - params：不包含& - user-agent/cookie/header/request_body: 无限制 - method: HTTP协议支持的method，字母大写 - protocol:    - http   - https  **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param string[]|null $contents **参数解释：** 条件列表逻辑匹配内容 **约束限制：** 当logic_operation参数不以any或者all结尾时，需要传该参数 **取值范围：** 匹配内容字符串长度范围：[1, 4096] 内容格式根据参数category和logic_operation变化： - logic_operation为数值比较类型：纯数字 - url: URL格式；仅支持单个匹配内容 - custom_geoip: 客户端IP所属国家或省份，多个位置以|分隔，比如：\"BJ|SH\" - robot: 已知特征爬虫列表，可选择多个   - crawler_engine：搜索引擎   - crawler_scanner：扫描器   - crawler_script：脚本工具   - crawler_other：其他爬虫 - ip: IPv4 - ipv6: IPv6 - referer: 例如：http://test.com - params：不包含& - user-agent/cookie/header/request_body: 无限制 - method: HTTP协议支持的method，字母大写 - protocol:    - http   - https  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets checkAllIndexesLogic
    *  **参数解释：** 需要检查所有子字段或检查任意子字段时传此参数 **约束限制：** 仅当category为params/cookie/header时支持 **取值范围：** - 1：所有子字段 - 2：任意子字段  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCheckAllIndexesLogic()
    {
        return $this->container['checkAllIndexesLogic'];
    }

    /**
    * Sets checkAllIndexesLogic
    *
    * @param int|null $checkAllIndexesLogic **参数解释：** 需要检查所有子字段或检查任意子字段时传此参数 **约束限制：** 仅当category为params/cookie/header时支持 **取值范围：** - 1：所有子字段 - 2：任意子字段  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCheckAllIndexesLogic($checkAllIndexesLogic)
    {
        $this->container['checkAllIndexesLogic'] = $checkAllIndexesLogic;
        return $this;
    }

    /**
    * Gets valueListId
    *  **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getValueListId()
    {
        return $this->container['valueListId'];
    }

    /**
    * Sets valueListId
    *
    * @param string|null $valueListId **参数解释：** 引用表ID **约束限制：** 当logic_operation参数以any或者all结尾时，需要传该参数；引用表类型要与category类型保持一致 **取值范围：** 通过ListValueList接口获取引用表ID  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setValueListId($valueListId)
    {
        $this->container['valueListId'] = $valueListId;
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

