<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSpecialUserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSpecialUserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释：** 租户是否可以查询总请求时长 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询总请求时长 - 0：表示租户不可以查询总请求时长 **默认取值：** 不涉及
    * metric  **参数解释：** 进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fluxMetric  **参数解释：** 流量进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cy  **参数解释：** 租户是否是开放国家及地区界面 **约束限制：** 不涉及 **取值范围：** - 1：表示租户开放国家及地区界面 - 0：表示租户不用开放国家及地区界面 **默认取值：** 不涉及
    * h6  **参数解释：** 租户是否可以查询ipv6流量、https流量 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询ipv6流量、https流量 - 0：表示租户不可以查询ipv6流量、https流量 **默认取值：** 不涉及
    * c  **参数解释：** 租户是否可以查询具体的状态码详情 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询具体的状态码详情 - 0：表示租户不可以查询具体的状态码详情 **默认取值：** 不涉及
    * sc  **参数解释：** 查询查询top url时是否返回http状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户查询top url时返回http状态码 - 0：表示租户查询top url时不返回http状态码 **默认取值：** 不涉及
    * bhc  **参数解释：** 租户是否可以查询回源状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询回源状态码 - 0：表示租户不可以查询回源状态码 **默认取值：** 不涉及
    * pi  **参数解释：** 租户是否可以查询protocol和IPVersion **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询protocol和IPVersion - 0：表示租户不可以查询protocol和IPVersion **默认取值：** 不涉及
    * exp5  **参数解释：** 租户是否可以导出5分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以导出5分钟粒度数据 - 0：表示租户不可以导出5分钟粒度数据 **默认取值：** 不涉及
    * m1  **参数解释：** 租户是否可以查询1分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1分钟粒度数据 - 0：表示租户不可以查询1分钟粒度数据 **默认取值：** 不涉及
    * isMonthM5  **参数解释：** 租户是否可以查询1个月5分钟粒度统计数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1个月5分钟粒度统计数据 - 0：表示租户不可以查询1个月5分钟粒度统计数据 **默认取值：** 不涉及
    * expAgy  **参数解释：** 租户是否可以在租户界面指定下载链接可用范围 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以在租户界面指定下载链接可用范围 - 0：表示租户不可以在租户界面指定下载链接可用范围 **默认取值：** 不涉及
    * cesReportSite  **参数解释：** 租户是否可以上报到国际站CES **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以上报到国际站CES - 0：表示租户不可以上报到国际站CES **默认取值：** 不涉及
    * float  **参数解释：** 租户是否按上浮系数展示数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户按上浮系数展示数据 - 0：表示租户不按上浮系数展示数据 **默认取值：** 不涉及
    * isShowUpBw  **参数解释：** 租户是否允许查询入网带宽 **约束限制：** 不涉及 **取值范围：** - 1：表示租户允许查询入网带宽 - 0：表示租户不可以查询入网带宽 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'int',
            'metric' => 'int',
            'fluxMetric' => 'int',
            'cy' => 'int',
            'h6' => 'int',
            'c' => 'int',
            'sc' => 'int',
            'bhc' => 'int',
            'pi' => 'int',
            'exp5' => 'int',
            'm1' => 'int',
            'isMonthM5' => 'int',
            'expAgy' => 'int',
            'cesReportSite' => 'int',
            'float' => 'int',
            'isShowUpBw' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释：** 租户是否可以查询总请求时长 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询总请求时长 - 0：表示租户不可以查询总请求时长 **默认取值：** 不涉及
    * metric  **参数解释：** 进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fluxMetric  **参数解释：** 流量进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cy  **参数解释：** 租户是否是开放国家及地区界面 **约束限制：** 不涉及 **取值范围：** - 1：表示租户开放国家及地区界面 - 0：表示租户不用开放国家及地区界面 **默认取值：** 不涉及
    * h6  **参数解释：** 租户是否可以查询ipv6流量、https流量 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询ipv6流量、https流量 - 0：表示租户不可以查询ipv6流量、https流量 **默认取值：** 不涉及
    * c  **参数解释：** 租户是否可以查询具体的状态码详情 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询具体的状态码详情 - 0：表示租户不可以查询具体的状态码详情 **默认取值：** 不涉及
    * sc  **参数解释：** 查询查询top url时是否返回http状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户查询top url时返回http状态码 - 0：表示租户查询top url时不返回http状态码 **默认取值：** 不涉及
    * bhc  **参数解释：** 租户是否可以查询回源状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询回源状态码 - 0：表示租户不可以查询回源状态码 **默认取值：** 不涉及
    * pi  **参数解释：** 租户是否可以查询protocol和IPVersion **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询protocol和IPVersion - 0：表示租户不可以查询protocol和IPVersion **默认取值：** 不涉及
    * exp5  **参数解释：** 租户是否可以导出5分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以导出5分钟粒度数据 - 0：表示租户不可以导出5分钟粒度数据 **默认取值：** 不涉及
    * m1  **参数解释：** 租户是否可以查询1分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1分钟粒度数据 - 0：表示租户不可以查询1分钟粒度数据 **默认取值：** 不涉及
    * isMonthM5  **参数解释：** 租户是否可以查询1个月5分钟粒度统计数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1个月5分钟粒度统计数据 - 0：表示租户不可以查询1个月5分钟粒度统计数据 **默认取值：** 不涉及
    * expAgy  **参数解释：** 租户是否可以在租户界面指定下载链接可用范围 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以在租户界面指定下载链接可用范围 - 0：表示租户不可以在租户界面指定下载链接可用范围 **默认取值：** 不涉及
    * cesReportSite  **参数解释：** 租户是否可以上报到国际站CES **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以上报到国际站CES - 0：表示租户不可以上报到国际站CES **默认取值：** 不涉及
    * float  **参数解释：** 租户是否按上浮系数展示数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户按上浮系数展示数据 - 0：表示租户不按上浮系数展示数据 **默认取值：** 不涉及
    * isShowUpBw  **参数解释：** 租户是否允许查询入网带宽 **约束限制：** 不涉及 **取值范围：** - 1：表示租户允许查询入网带宽 - 0：表示租户不可以查询入网带宽 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => 'int64',
        'metric' => 'int64',
        'fluxMetric' => 'int64',
        'cy' => 'int64',
        'h6' => 'int64',
        'c' => 'int64',
        'sc' => 'int64',
        'bhc' => 'int64',
        'pi' => 'int64',
        'exp5' => 'int64',
        'm1' => 'int64',
        'isMonthM5' => 'int64',
        'expAgy' => 'int64',
        'cesReportSite' => 'int64',
        'float' => 'int64',
        'isShowUpBw' => 'int64'
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
    * status  **参数解释：** 租户是否可以查询总请求时长 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询总请求时长 - 0：表示租户不可以查询总请求时长 **默认取值：** 不涉及
    * metric  **参数解释：** 进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fluxMetric  **参数解释：** 流量进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cy  **参数解释：** 租户是否是开放国家及地区界面 **约束限制：** 不涉及 **取值范围：** - 1：表示租户开放国家及地区界面 - 0：表示租户不用开放国家及地区界面 **默认取值：** 不涉及
    * h6  **参数解释：** 租户是否可以查询ipv6流量、https流量 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询ipv6流量、https流量 - 0：表示租户不可以查询ipv6流量、https流量 **默认取值：** 不涉及
    * c  **参数解释：** 租户是否可以查询具体的状态码详情 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询具体的状态码详情 - 0：表示租户不可以查询具体的状态码详情 **默认取值：** 不涉及
    * sc  **参数解释：** 查询查询top url时是否返回http状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户查询top url时返回http状态码 - 0：表示租户查询top url时不返回http状态码 **默认取值：** 不涉及
    * bhc  **参数解释：** 租户是否可以查询回源状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询回源状态码 - 0：表示租户不可以查询回源状态码 **默认取值：** 不涉及
    * pi  **参数解释：** 租户是否可以查询protocol和IPVersion **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询protocol和IPVersion - 0：表示租户不可以查询protocol和IPVersion **默认取值：** 不涉及
    * exp5  **参数解释：** 租户是否可以导出5分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以导出5分钟粒度数据 - 0：表示租户不可以导出5分钟粒度数据 **默认取值：** 不涉及
    * m1  **参数解释：** 租户是否可以查询1分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1分钟粒度数据 - 0：表示租户不可以查询1分钟粒度数据 **默认取值：** 不涉及
    * isMonthM5  **参数解释：** 租户是否可以查询1个月5分钟粒度统计数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1个月5分钟粒度统计数据 - 0：表示租户不可以查询1个月5分钟粒度统计数据 **默认取值：** 不涉及
    * expAgy  **参数解释：** 租户是否可以在租户界面指定下载链接可用范围 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以在租户界面指定下载链接可用范围 - 0：表示租户不可以在租户界面指定下载链接可用范围 **默认取值：** 不涉及
    * cesReportSite  **参数解释：** 租户是否可以上报到国际站CES **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以上报到国际站CES - 0：表示租户不可以上报到国际站CES **默认取值：** 不涉及
    * float  **参数解释：** 租户是否按上浮系数展示数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户按上浮系数展示数据 - 0：表示租户不按上浮系数展示数据 **默认取值：** 不涉及
    * isShowUpBw  **参数解释：** 租户是否允许查询入网带宽 **约束限制：** 不涉及 **取值范围：** - 1：表示租户允许查询入网带宽 - 0：表示租户不可以查询入网带宽 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'metric' => 'metric',
            'fluxMetric' => 'flux_metric',
            'cy' => 'cy',
            'h6' => 'h6',
            'c' => 'c',
            'sc' => 'sc',
            'bhc' => 'bhc',
            'pi' => 'pi',
            'exp5' => 'exp5',
            'm1' => 'm1',
            'isMonthM5' => 'is_month_m5',
            'expAgy' => 'exp_agy',
            'cesReportSite' => 'ces_report_site',
            'float' => 'float',
            'isShowUpBw' => 'is_show_up_bw'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释：** 租户是否可以查询总请求时长 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询总请求时长 - 0：表示租户不可以查询总请求时长 **默认取值：** 不涉及
    * metric  **参数解释：** 进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fluxMetric  **参数解释：** 流量进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cy  **参数解释：** 租户是否是开放国家及地区界面 **约束限制：** 不涉及 **取值范围：** - 1：表示租户开放国家及地区界面 - 0：表示租户不用开放国家及地区界面 **默认取值：** 不涉及
    * h6  **参数解释：** 租户是否可以查询ipv6流量、https流量 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询ipv6流量、https流量 - 0：表示租户不可以查询ipv6流量、https流量 **默认取值：** 不涉及
    * c  **参数解释：** 租户是否可以查询具体的状态码详情 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询具体的状态码详情 - 0：表示租户不可以查询具体的状态码详情 **默认取值：** 不涉及
    * sc  **参数解释：** 查询查询top url时是否返回http状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户查询top url时返回http状态码 - 0：表示租户查询top url时不返回http状态码 **默认取值：** 不涉及
    * bhc  **参数解释：** 租户是否可以查询回源状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询回源状态码 - 0：表示租户不可以查询回源状态码 **默认取值：** 不涉及
    * pi  **参数解释：** 租户是否可以查询protocol和IPVersion **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询protocol和IPVersion - 0：表示租户不可以查询protocol和IPVersion **默认取值：** 不涉及
    * exp5  **参数解释：** 租户是否可以导出5分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以导出5分钟粒度数据 - 0：表示租户不可以导出5分钟粒度数据 **默认取值：** 不涉及
    * m1  **参数解释：** 租户是否可以查询1分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1分钟粒度数据 - 0：表示租户不可以查询1分钟粒度数据 **默认取值：** 不涉及
    * isMonthM5  **参数解释：** 租户是否可以查询1个月5分钟粒度统计数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1个月5分钟粒度统计数据 - 0：表示租户不可以查询1个月5分钟粒度统计数据 **默认取值：** 不涉及
    * expAgy  **参数解释：** 租户是否可以在租户界面指定下载链接可用范围 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以在租户界面指定下载链接可用范围 - 0：表示租户不可以在租户界面指定下载链接可用范围 **默认取值：** 不涉及
    * cesReportSite  **参数解释：** 租户是否可以上报到国际站CES **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以上报到国际站CES - 0：表示租户不可以上报到国际站CES **默认取值：** 不涉及
    * float  **参数解释：** 租户是否按上浮系数展示数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户按上浮系数展示数据 - 0：表示租户不按上浮系数展示数据 **默认取值：** 不涉及
    * isShowUpBw  **参数解释：** 租户是否允许查询入网带宽 **约束限制：** 不涉及 **取值范围：** - 1：表示租户允许查询入网带宽 - 0：表示租户不可以查询入网带宽 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'metric' => 'setMetric',
            'fluxMetric' => 'setFluxMetric',
            'cy' => 'setCy',
            'h6' => 'setH6',
            'c' => 'setC',
            'sc' => 'setSc',
            'bhc' => 'setBhc',
            'pi' => 'setPi',
            'exp5' => 'setExp5',
            'm1' => 'setM1',
            'isMonthM5' => 'setIsMonthM5',
            'expAgy' => 'setExpAgy',
            'cesReportSite' => 'setCesReportSite',
            'float' => 'setFloat',
            'isShowUpBw' => 'setIsShowUpBw'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释：** 租户是否可以查询总请求时长 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询总请求时长 - 0：表示租户不可以查询总请求时长 **默认取值：** 不涉及
    * metric  **参数解释：** 进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * fluxMetric  **参数解释：** 流量进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cy  **参数解释：** 租户是否是开放国家及地区界面 **约束限制：** 不涉及 **取值范围：** - 1：表示租户开放国家及地区界面 - 0：表示租户不用开放国家及地区界面 **默认取值：** 不涉及
    * h6  **参数解释：** 租户是否可以查询ipv6流量、https流量 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询ipv6流量、https流量 - 0：表示租户不可以查询ipv6流量、https流量 **默认取值：** 不涉及
    * c  **参数解释：** 租户是否可以查询具体的状态码详情 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询具体的状态码详情 - 0：表示租户不可以查询具体的状态码详情 **默认取值：** 不涉及
    * sc  **参数解释：** 查询查询top url时是否返回http状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户查询top url时返回http状态码 - 0：表示租户查询top url时不返回http状态码 **默认取值：** 不涉及
    * bhc  **参数解释：** 租户是否可以查询回源状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询回源状态码 - 0：表示租户不可以查询回源状态码 **默认取值：** 不涉及
    * pi  **参数解释：** 租户是否可以查询protocol和IPVersion **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询protocol和IPVersion - 0：表示租户不可以查询protocol和IPVersion **默认取值：** 不涉及
    * exp5  **参数解释：** 租户是否可以导出5分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以导出5分钟粒度数据 - 0：表示租户不可以导出5分钟粒度数据 **默认取值：** 不涉及
    * m1  **参数解释：** 租户是否可以查询1分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1分钟粒度数据 - 0：表示租户不可以查询1分钟粒度数据 **默认取值：** 不涉及
    * isMonthM5  **参数解释：** 租户是否可以查询1个月5分钟粒度统计数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1个月5分钟粒度统计数据 - 0：表示租户不可以查询1个月5分钟粒度统计数据 **默认取值：** 不涉及
    * expAgy  **参数解释：** 租户是否可以在租户界面指定下载链接可用范围 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以在租户界面指定下载链接可用范围 - 0：表示租户不可以在租户界面指定下载链接可用范围 **默认取值：** 不涉及
    * cesReportSite  **参数解释：** 租户是否可以上报到国际站CES **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以上报到国际站CES - 0：表示租户不可以上报到国际站CES **默认取值：** 不涉及
    * float  **参数解释：** 租户是否按上浮系数展示数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户按上浮系数展示数据 - 0：表示租户不按上浮系数展示数据 **默认取值：** 不涉及
    * isShowUpBw  **参数解释：** 租户是否允许查询入网带宽 **约束限制：** 不涉及 **取值范围：** - 1：表示租户允许查询入网带宽 - 0：表示租户不可以查询入网带宽 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'metric' => 'getMetric',
            'fluxMetric' => 'getFluxMetric',
            'cy' => 'getCy',
            'h6' => 'getH6',
            'c' => 'getC',
            'sc' => 'getSc',
            'bhc' => 'getBhc',
            'pi' => 'getPi',
            'exp5' => 'getExp5',
            'm1' => 'getM1',
            'isMonthM5' => 'getIsMonthM5',
            'expAgy' => 'getExpAgy',
            'cesReportSite' => 'getCesReportSite',
            'float' => 'getFloat',
            'isShowUpBw' => 'getIsShowUpBw'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['fluxMetric'] = isset($data['fluxMetric']) ? $data['fluxMetric'] : null;
        $this->container['cy'] = isset($data['cy']) ? $data['cy'] : null;
        $this->container['h6'] = isset($data['h6']) ? $data['h6'] : null;
        $this->container['c'] = isset($data['c']) ? $data['c'] : null;
        $this->container['sc'] = isset($data['sc']) ? $data['sc'] : null;
        $this->container['bhc'] = isset($data['bhc']) ? $data['bhc'] : null;
        $this->container['pi'] = isset($data['pi']) ? $data['pi'] : null;
        $this->container['exp5'] = isset($data['exp5']) ? $data['exp5'] : null;
        $this->container['m1'] = isset($data['m1']) ? $data['m1'] : null;
        $this->container['isMonthM5'] = isset($data['isMonthM5']) ? $data['isMonthM5'] : null;
        $this->container['expAgy'] = isset($data['expAgy']) ? $data['expAgy'] : null;
        $this->container['cesReportSite'] = isset($data['cesReportSite']) ? $data['cesReportSite'] : null;
        $this->container['float'] = isset($data['float']) ? $data['float'] : null;
        $this->container['isShowUpBw'] = isset($data['isShowUpBw']) ? $data['isShowUpBw'] : null;
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
    * Gets status
    *  **参数解释：** 租户是否可以查询总请求时长 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询总请求时长 - 0：表示租户不可以查询总请求时长 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 租户是否可以查询总请求时长 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询总请求时长 - 0：表示租户不可以查询总请求时长 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets metric
    *  **参数解释：** 进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param int|null $metric **参数解释：** 进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets fluxMetric
    *  **参数解释：** 流量进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getFluxMetric()
    {
        return $this->container['fluxMetric'];
    }

    /**
    * Sets fluxMetric
    *
    * @param int|null $fluxMetric **参数解释：** 流量进制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFluxMetric($fluxMetric)
    {
        $this->container['fluxMetric'] = $fluxMetric;
        return $this;
    }

    /**
    * Gets cy
    *  **参数解释：** 租户是否是开放国家及地区界面 **约束限制：** 不涉及 **取值范围：** - 1：表示租户开放国家及地区界面 - 0：表示租户不用开放国家及地区界面 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCy()
    {
        return $this->container['cy'];
    }

    /**
    * Sets cy
    *
    * @param int|null $cy **参数解释：** 租户是否是开放国家及地区界面 **约束限制：** 不涉及 **取值范围：** - 1：表示租户开放国家及地区界面 - 0：表示租户不用开放国家及地区界面 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCy($cy)
    {
        $this->container['cy'] = $cy;
        return $this;
    }

    /**
    * Gets h6
    *  **参数解释：** 租户是否可以查询ipv6流量、https流量 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询ipv6流量、https流量 - 0：表示租户不可以查询ipv6流量、https流量 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getH6()
    {
        return $this->container['h6'];
    }

    /**
    * Sets h6
    *
    * @param int|null $h6 **参数解释：** 租户是否可以查询ipv6流量、https流量 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询ipv6流量、https流量 - 0：表示租户不可以查询ipv6流量、https流量 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setH6($h6)
    {
        $this->container['h6'] = $h6;
        return $this;
    }

    /**
    * Gets c
    *  **参数解释：** 租户是否可以查询具体的状态码详情 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询具体的状态码详情 - 0：表示租户不可以查询具体的状态码详情 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
    * Sets c
    *
    * @param int|null $c **参数解释：** 租户是否可以查询具体的状态码详情 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询具体的状态码详情 - 0：表示租户不可以查询具体的状态码详情 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setC($c)
    {
        $this->container['c'] = $c;
        return $this;
    }

    /**
    * Gets sc
    *  **参数解释：** 查询查询top url时是否返回http状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户查询top url时返回http状态码 - 0：表示租户查询top url时不返回http状态码 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getSc()
    {
        return $this->container['sc'];
    }

    /**
    * Sets sc
    *
    * @param int|null $sc **参数解释：** 查询查询top url时是否返回http状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户查询top url时返回http状态码 - 0：表示租户查询top url时不返回http状态码 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSc($sc)
    {
        $this->container['sc'] = $sc;
        return $this;
    }

    /**
    * Gets bhc
    *  **参数解释：** 租户是否可以查询回源状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询回源状态码 - 0：表示租户不可以查询回源状态码 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getBhc()
    {
        return $this->container['bhc'];
    }

    /**
    * Sets bhc
    *
    * @param int|null $bhc **参数解释：** 租户是否可以查询回源状态码 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询回源状态码 - 0：表示租户不可以查询回源状态码 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBhc($bhc)
    {
        $this->container['bhc'] = $bhc;
        return $this;
    }

    /**
    * Gets pi
    *  **参数解释：** 租户是否可以查询protocol和IPVersion **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询protocol和IPVersion - 0：表示租户不可以查询protocol和IPVersion **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getPi()
    {
        return $this->container['pi'];
    }

    /**
    * Sets pi
    *
    * @param int|null $pi **参数解释：** 租户是否可以查询protocol和IPVersion **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询protocol和IPVersion - 0：表示租户不可以查询protocol和IPVersion **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPi($pi)
    {
        $this->container['pi'] = $pi;
        return $this;
    }

    /**
    * Gets exp5
    *  **参数解释：** 租户是否可以导出5分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以导出5分钟粒度数据 - 0：表示租户不可以导出5分钟粒度数据 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getExp5()
    {
        return $this->container['exp5'];
    }

    /**
    * Sets exp5
    *
    * @param int|null $exp5 **参数解释：** 租户是否可以导出5分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以导出5分钟粒度数据 - 0：表示租户不可以导出5分钟粒度数据 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExp5($exp5)
    {
        $this->container['exp5'] = $exp5;
        return $this;
    }

    /**
    * Gets m1
    *  **参数解释：** 租户是否可以查询1分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1分钟粒度数据 - 0：表示租户不可以查询1分钟粒度数据 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getM1()
    {
        return $this->container['m1'];
    }

    /**
    * Sets m1
    *
    * @param int|null $m1 **参数解释：** 租户是否可以查询1分钟粒度数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1分钟粒度数据 - 0：表示租户不可以查询1分钟粒度数据 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setM1($m1)
    {
        $this->container['m1'] = $m1;
        return $this;
    }

    /**
    * Gets isMonthM5
    *  **参数解释：** 租户是否可以查询1个月5分钟粒度统计数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1个月5分钟粒度统计数据 - 0：表示租户不可以查询1个月5分钟粒度统计数据 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getIsMonthM5()
    {
        return $this->container['isMonthM5'];
    }

    /**
    * Sets isMonthM5
    *
    * @param int|null $isMonthM5 **参数解释：** 租户是否可以查询1个月5分钟粒度统计数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以查询1个月5分钟粒度统计数据 - 0：表示租户不可以查询1个月5分钟粒度统计数据 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIsMonthM5($isMonthM5)
    {
        $this->container['isMonthM5'] = $isMonthM5;
        return $this;
    }

    /**
    * Gets expAgy
    *  **参数解释：** 租户是否可以在租户界面指定下载链接可用范围 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以在租户界面指定下载链接可用范围 - 0：表示租户不可以在租户界面指定下载链接可用范围 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getExpAgy()
    {
        return $this->container['expAgy'];
    }

    /**
    * Sets expAgy
    *
    * @param int|null $expAgy **参数解释：** 租户是否可以在租户界面指定下载链接可用范围 **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以在租户界面指定下载链接可用范围 - 0：表示租户不可以在租户界面指定下载链接可用范围 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExpAgy($expAgy)
    {
        $this->container['expAgy'] = $expAgy;
        return $this;
    }

    /**
    * Gets cesReportSite
    *  **参数解释：** 租户是否可以上报到国际站CES **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以上报到国际站CES - 0：表示租户不可以上报到国际站CES **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCesReportSite()
    {
        return $this->container['cesReportSite'];
    }

    /**
    * Sets cesReportSite
    *
    * @param int|null $cesReportSite **参数解释：** 租户是否可以上报到国际站CES **约束限制：** 不涉及 **取值范围：** - 1：表示租户可以上报到国际站CES - 0：表示租户不可以上报到国际站CES **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCesReportSite($cesReportSite)
    {
        $this->container['cesReportSite'] = $cesReportSite;
        return $this;
    }

    /**
    * Gets float
    *  **参数解释：** 租户是否按上浮系数展示数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户按上浮系数展示数据 - 0：表示租户不按上浮系数展示数据 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getFloat()
    {
        return $this->container['float'];
    }

    /**
    * Sets float
    *
    * @param int|null $float **参数解释：** 租户是否按上浮系数展示数据 **约束限制：** 不涉及 **取值范围：** - 1：表示租户按上浮系数展示数据 - 0：表示租户不按上浮系数展示数据 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFloat($float)
    {
        $this->container['float'] = $float;
        return $this;
    }

    /**
    * Gets isShowUpBw
    *  **参数解释：** 租户是否允许查询入网带宽 **约束限制：** 不涉及 **取值范围：** - 1：表示租户允许查询入网带宽 - 0：表示租户不可以查询入网带宽 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getIsShowUpBw()
    {
        return $this->container['isShowUpBw'];
    }

    /**
    * Sets isShowUpBw
    *
    * @param int|null $isShowUpBw **参数解释：** 租户是否允许查询入网带宽 **约束限制：** 不涉及 **取值范围：** - 1：表示租户允许查询入网带宽 - 0：表示租户不可以查询入网带宽 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIsShowUpBw($isShowUpBw)
    {
        $this->container['isShowUpBw'] = $isShowUpBw;
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

