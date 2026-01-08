<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OneClickAlarmPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OneClickAlarmPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmPolicyId  **参数解释**： 告警策略ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符，只能包含字母、数字、- **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * period  period
    * filter  **参数解释**： 聚合方式。         **约束限制**： period为1（原始值）时filter字段不生效，默认为average。period大于1时filter才起作用。 **取值范围**： - average：平均值 - variance：方差 - min：最小值 - max：最大值 - sum：求和 **默认取值**： 不涉及。
    * comparisonOperator  **参数解释**： 阈值符号。 **约束限制**： 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=。 **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。 **默认取值**： 不涉及。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。    **约束限制**： 单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。           **默认取值**： 不涉及。
    * hierarchicalValue  hierarchicalValue
    * unit  **参数解释**： 数据的单位。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。         **默认取值**： 不涉及。
    * count  **参数解释**： 告警连续触发次数。     **约束限制**： 不涉及。 **取值范围**： 事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180。          **默认取值**： 不涉及。
    * suppressDuration  suppressDuration
    * level  **参数解释**： 告警级别。    **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示         **默认取值**： 2
    * enabled  **参数解释** 是否启用一键告警 **约束限制** 不涉及 **取值范围** - true:开启 - false：关闭 **默认取值** true
    * selectedUnit  **参数解释**： 用户在页面中选择的指标单位， 用于后续指标数据回显和计算。字符串最大长度为64。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。        **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmPolicyId' => 'string',
            'metricName' => 'string',
            'period' => '\HuaweiCloud\SDK\Ces\V2\Model\Period',
            'filter' => 'string',
            'comparisonOperator' => 'string',
            'value' => 'double',
            'hierarchicalValue' => '\HuaweiCloud\SDK\Ces\V2\Model\HierarchicalValue',
            'unit' => 'string',
            'count' => 'int',
            'suppressDuration' => '\HuaweiCloud\SDK\Ces\V2\Model\SuppressDuration',
            'level' => 'int',
            'enabled' => 'bool',
            'selectedUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmPolicyId  **参数解释**： 告警策略ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符，只能包含字母、数字、- **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * period  period
    * filter  **参数解释**： 聚合方式。         **约束限制**： period为1（原始值）时filter字段不生效，默认为average。period大于1时filter才起作用。 **取值范围**： - average：平均值 - variance：方差 - min：最小值 - max：最大值 - sum：求和 **默认取值**： 不涉及。
    * comparisonOperator  **参数解释**： 阈值符号。 **约束限制**： 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=。 **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。 **默认取值**： 不涉及。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。    **约束限制**： 单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。           **默认取值**： 不涉及。
    * hierarchicalValue  hierarchicalValue
    * unit  **参数解释**： 数据的单位。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。         **默认取值**： 不涉及。
    * count  **参数解释**： 告警连续触发次数。     **约束限制**： 不涉及。 **取值范围**： 事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180。          **默认取值**： 不涉及。
    * suppressDuration  suppressDuration
    * level  **参数解释**： 告警级别。    **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示         **默认取值**： 2
    * enabled  **参数解释** 是否启用一键告警 **约束限制** 不涉及 **取值范围** - true:开启 - false：关闭 **默认取值** true
    * selectedUnit  **参数解释**： 用户在页面中选择的指标单位， 用于后续指标数据回显和计算。字符串最大长度为64。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。        **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmPolicyId' => null,
        'metricName' => null,
        'period' => null,
        'filter' => null,
        'comparisonOperator' => null,
        'value' => 'double',
        'hierarchicalValue' => null,
        'unit' => null,
        'count' => 'int32',
        'suppressDuration' => null,
        'level' => null,
        'enabled' => null,
        'selectedUnit' => null
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
    * alarmPolicyId  **参数解释**： 告警策略ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符，只能包含字母、数字、- **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * period  period
    * filter  **参数解释**： 聚合方式。         **约束限制**： period为1（原始值）时filter字段不生效，默认为average。period大于1时filter才起作用。 **取值范围**： - average：平均值 - variance：方差 - min：最小值 - max：最大值 - sum：求和 **默认取值**： 不涉及。
    * comparisonOperator  **参数解释**： 阈值符号。 **约束限制**： 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=。 **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。 **默认取值**： 不涉及。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。    **约束限制**： 单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。           **默认取值**： 不涉及。
    * hierarchicalValue  hierarchicalValue
    * unit  **参数解释**： 数据的单位。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。         **默认取值**： 不涉及。
    * count  **参数解释**： 告警连续触发次数。     **约束限制**： 不涉及。 **取值范围**： 事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180。          **默认取值**： 不涉及。
    * suppressDuration  suppressDuration
    * level  **参数解释**： 告警级别。    **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示         **默认取值**： 2
    * enabled  **参数解释** 是否启用一键告警 **约束限制** 不涉及 **取值范围** - true:开启 - false：关闭 **默认取值** true
    * selectedUnit  **参数解释**： 用户在页面中选择的指标单位， 用于后续指标数据回显和计算。字符串最大长度为64。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。        **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmPolicyId' => 'alarm_policy_id',
            'metricName' => 'metric_name',
            'period' => 'period',
            'filter' => 'filter',
            'comparisonOperator' => 'comparison_operator',
            'value' => 'value',
            'hierarchicalValue' => 'hierarchical_value',
            'unit' => 'unit',
            'count' => 'count',
            'suppressDuration' => 'suppress_duration',
            'level' => 'level',
            'enabled' => 'enabled',
            'selectedUnit' => 'selected_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmPolicyId  **参数解释**： 告警策略ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符，只能包含字母、数字、- **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * period  period
    * filter  **参数解释**： 聚合方式。         **约束限制**： period为1（原始值）时filter字段不生效，默认为average。period大于1时filter才起作用。 **取值范围**： - average：平均值 - variance：方差 - min：最小值 - max：最大值 - sum：求和 **默认取值**： 不涉及。
    * comparisonOperator  **参数解释**： 阈值符号。 **约束限制**： 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=。 **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。 **默认取值**： 不涉及。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。    **约束限制**： 单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。           **默认取值**： 不涉及。
    * hierarchicalValue  hierarchicalValue
    * unit  **参数解释**： 数据的单位。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。         **默认取值**： 不涉及。
    * count  **参数解释**： 告警连续触发次数。     **约束限制**： 不涉及。 **取值范围**： 事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180。          **默认取值**： 不涉及。
    * suppressDuration  suppressDuration
    * level  **参数解释**： 告警级别。    **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示         **默认取值**： 2
    * enabled  **参数解释** 是否启用一键告警 **约束限制** 不涉及 **取值范围** - true:开启 - false：关闭 **默认取值** true
    * selectedUnit  **参数解释**： 用户在页面中选择的指标单位， 用于后续指标数据回显和计算。字符串最大长度为64。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。        **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmPolicyId' => 'setAlarmPolicyId',
            'metricName' => 'setMetricName',
            'period' => 'setPeriod',
            'filter' => 'setFilter',
            'comparisonOperator' => 'setComparisonOperator',
            'value' => 'setValue',
            'hierarchicalValue' => 'setHierarchicalValue',
            'unit' => 'setUnit',
            'count' => 'setCount',
            'suppressDuration' => 'setSuppressDuration',
            'level' => 'setLevel',
            'enabled' => 'setEnabled',
            'selectedUnit' => 'setSelectedUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmPolicyId  **参数解释**： 告警策略ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符，只能包含字母、数字、- **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * period  period
    * filter  **参数解释**： 聚合方式。         **约束限制**： period为1（原始值）时filter字段不生效，默认为average。period大于1时filter才起作用。 **取值范围**： - average：平均值 - variance：方差 - min：最小值 - max：最大值 - sum：求和 **默认取值**： 不涉及。
    * comparisonOperator  **参数解释**： 阈值符号。 **约束限制**： 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=。 **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。 **默认取值**： 不涉及。
    * value  **参数解释**： 告警阈值。具体阈值取值请参见[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。    **约束限制**： 单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。           **默认取值**： 不涉及。
    * hierarchicalValue  hierarchicalValue
    * unit  **参数解释**： 数据的单位。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。         **默认取值**： 不涉及。
    * count  **参数解释**： 告警连续触发次数。     **约束限制**： 不涉及。 **取值范围**： 事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180。          **默认取值**： 不涉及。
    * suppressDuration  suppressDuration
    * level  **参数解释**： 告警级别。    **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示         **默认取值**： 2
    * enabled  **参数解释** 是否启用一键告警 **约束限制** 不涉及 **取值范围** - true:开启 - false：关闭 **默认取值** true
    * selectedUnit  **参数解释**： 用户在页面中选择的指标单位， 用于后续指标数据回显和计算。字符串最大长度为64。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。        **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmPolicyId' => 'getAlarmPolicyId',
            'metricName' => 'getMetricName',
            'period' => 'getPeriod',
            'filter' => 'getFilter',
            'comparisonOperator' => 'getComparisonOperator',
            'value' => 'getValue',
            'hierarchicalValue' => 'getHierarchicalValue',
            'unit' => 'getUnit',
            'count' => 'getCount',
            'suppressDuration' => 'getSuppressDuration',
            'level' => 'getLevel',
            'enabled' => 'getEnabled',
            'selectedUnit' => 'getSelectedUnit'
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
        $this->container['alarmPolicyId'] = isset($data['alarmPolicyId']) ? $data['alarmPolicyId'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['comparisonOperator'] = isset($data['comparisonOperator']) ? $data['comparisonOperator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['hierarchicalValue'] = isset($data['hierarchicalValue']) ? $data['hierarchicalValue'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['suppressDuration'] = isset($data['suppressDuration']) ? $data['suppressDuration'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['selectedUnit'] = isset($data['selectedUnit']) ? $data['selectedUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmPolicyId'] === null) {
            $invalidProperties[] = "'alarmPolicyId' can't be null";
        }
            if ((mb_strlen($this->container['alarmPolicyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmPolicyId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['alarmPolicyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmPolicyId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]|[0-9]|-)+$/", $this->container['alarmPolicyId'])) {
                $invalidProperties[] = "invalid value for 'alarmPolicyId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|-)+$/.";
            }
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
            if ((mb_strlen($this->container['metricName']) > 96)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 96.";
            }
            if ((mb_strlen($this->container['metricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['metricName'])) {
                $invalidProperties[] = "invalid value for 'metricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
            if (!preg_match("/^(average|variance|min|max|sum)$/", $this->container['filter'])) {
                $invalidProperties[] = "invalid value for 'filter', must be conform to the pattern /^(average|variance|min|max|sum)$/.";
            }
        if ($this->container['comparisonOperator'] === null) {
            $invalidProperties[] = "'comparisonOperator' can't be null";
        }
            if (!preg_match("/^(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave)$/", $this->container['comparisonOperator'])) {
                $invalidProperties[] = "invalid value for 'comparisonOperator', must be conform to the pattern /^(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave)$/.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if (($this->container['value'] > 1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 1.7976931348623156E+108.";
            }
            if (($this->container['value'] < -1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to -1.7976931348623156E+108.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
            if (($this->container['count'] > 180)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 180.";
            }
            if (($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] > 4)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 1)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 1.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
            if (!is_null($this->container['selectedUnit']) && (mb_strlen($this->container['selectedUnit']) > 64)) {
                $invalidProperties[] = "invalid value for 'selectedUnit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['selectedUnit']) && (mb_strlen($this->container['selectedUnit']) < 0)) {
                $invalidProperties[] = "invalid value for 'selectedUnit', the character length must be bigger than or equal to 0.";
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
    * Gets alarmPolicyId
    *  **参数解释**： 告警策略ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符，只能包含字母、数字、- **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getAlarmPolicyId()
    {
        return $this->container['alarmPolicyId'];
    }

    /**
    * Sets alarmPolicyId
    *
    * @param string $alarmPolicyId **参数解释**： 告警策略ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符，只能包含字母、数字、- **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmPolicyId($alarmPolicyId)
    {
        $this->container['alarmPolicyId'] = $alarmPolicyId;
        return $this;
    }

    /**
    * Gets metricName
    *  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets period
    *  period
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Period
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Period $period period
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets filter
    *  **参数解释**： 聚合方式。         **约束限制**： period为1（原始值）时filter字段不生效，默认为average。period大于1时filter才起作用。 **取值范围**： - average：平均值 - variance：方差 - min：最小值 - max：最大值 - sum：求和 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string $filter **参数解释**： 聚合方式。         **约束限制**： period为1（原始值）时filter字段不生效，默认为average。period大于1时filter才起作用。 **取值范围**： - average：平均值 - variance：方差 - min：最小值 - max：最大值 - sum：求和 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets comparisonOperator
    *  **参数解释**： 阈值符号。 **约束限制**： 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=。 **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getComparisonOperator()
    {
        return $this->container['comparisonOperator'];
    }

    /**
    * Sets comparisonOperator
    *
    * @param string $comparisonOperator **参数解释**： 阈值符号。 **约束限制**： 指标告警可以使用的阈值符号有>、>=、<、<=、=、!=、cycle_decrease、cycle_increase、cycle_wave； 事件告警可以使用的阈值符号为>、>=、<、<=、=、!=。 **取值范围**： 支持的值为(>|<|>=|<=|=|!=|cycle_decrease|cycle_increase|cycle_wave);cycle_decrease为环比下降,cycle_increase为环比上升,cycle_wave为环比波动。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->container['comparisonOperator'] = $comparisonOperator;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 告警阈值。具体阈值取值请参见[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。    **约束限制**： 单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。           **默认取值**： 不涉及。
    *
    * @return double
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double $value **参数解释**： 告警阈值。具体阈值取值请参见[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。    **约束限制**： 单一阈值时value和alarm_level配对使用，当hierarchical_value和value同时使用时以hierarchical_value为准。 **取值范围**： 最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets hierarchicalValue
    *  hierarchicalValue
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\HierarchicalValue|null
    */
    public function getHierarchicalValue()
    {
        return $this->container['hierarchicalValue'];
    }

    /**
    * Sets hierarchicalValue
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\HierarchicalValue|null $hierarchicalValue hierarchicalValue
    *
    * @return $this
    */
    public function setHierarchicalValue($hierarchicalValue)
    {
        $this->container['hierarchicalValue'] = $hierarchicalValue;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**： 数据的单位。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。         **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit **参数解释**： 数据的单位。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。         **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 告警连续触发次数。     **约束限制**： 不涉及。 **取值范围**： 事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180。          **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count **参数解释**： 告警连续触发次数。     **约束限制**： 不涉及。 **取值范围**： 事件告警时参数值为1~180（包括1和180）；指标告警和站点告警时，次数采用枚举值，枚举值分别为：1、2、3、4、5、10、15、30、60、90、120、180。          **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets suppressDuration
    *  suppressDuration
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\SuppressDuration|null
    */
    public function getSuppressDuration()
    {
        return $this->container['suppressDuration'];
    }

    /**
    * Sets suppressDuration
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\SuppressDuration|null $suppressDuration suppressDuration
    *
    * @return $this
    */
    public function setSuppressDuration($suppressDuration)
    {
        $this->container['suppressDuration'] = $suppressDuration;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 告警级别。    **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示         **默认取值**： 2
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level **参数解释**： 告警级别。    **约束限制**： 不涉及。 **取值范围**： 只能为1、2、3、4。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示         **默认取值**： 2
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释** 是否启用一键告警 **约束限制** 不涉及 **取值范围** - true:开启 - false：关闭 **默认取值** true
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled **参数解释** 是否启用一键告警 **约束限制** 不涉及 **取值范围** - true:开启 - false：关闭 **默认取值** true
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets selectedUnit
    *  **参数解释**： 用户在页面中选择的指标单位， 用于后续指标数据回显和计算。字符串最大长度为64。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。        **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSelectedUnit()
    {
        return $this->container['selectedUnit'];
    }

    /**
    * Sets selectedUnit
    *
    * @param string|null $selectedUnit **参数解释**： 用户在页面中选择的指标单位， 用于后续指标数据回显和计算。字符串最大长度为64。    **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。        **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSelectedUnit($selectedUnit)
    {
        $this->container['selectedUnit'] = $selectedUnit;
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

