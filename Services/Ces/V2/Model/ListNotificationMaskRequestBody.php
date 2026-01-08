<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotificationMaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotificationMaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relationType  relationType
    * alarmIds  **参数解释**： 告警规则ID列表，用于查询对应的告警通知屏蔽。 **约束限制**： 当relation_type为ALARM_RULE、RESOURCE_POLICY_NOTIFICATION时，应通过alarm_ids查询。当relation_type为RESOURCE、EVENT.SYS时，不支持使用alarm_ids查询，此时alarm_ids为空或不选，表示查询所有的RESOURCE、EVENT.SYS类型的告警屏蔽。 **取值范围**： 包含的告警规则ID数量最多不超过100个，最少为0个。 **默认取值**： 不涉及
    * relationIds  （已废弃，不推荐使用）关联编号（目前是告警规则ID）
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * resourceLevel  **参数解释**： 资源层级。 **约束限制**： 不涉及。 **取值范围**： - product: 云产品   - dimension: 子维度 **默认取值**： 不涉及。
    * maskId  **参数解释**： 屏蔽规则ID,可选。 **约束限制**： 不涉及。 **取值范围**： 以nm开头，后跟[0,62]个英文或数字。 **默认取值**： 不涉及。
    * maskName  **参数解释**： 屏蔽规则名称,可选。 **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * maskStatus  **参数解释**： 屏蔽状态,可选。 **约束限制**： 不涉及。 **取值范围**： - MASK_EFFECTIVE：已生效。 - MASK_INEFFECTIVE：未生效。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 资源维度值,提供一个维度的资源ID即可,可选 **约束限制**： 不涉及。 **取值范围**： 长度为[1,700]个字符。 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * dimensions  **参数解释**： 资源的维度信息 **约束限制**： 包含的维度信息数量为[1,4]个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relationType' => '\HuaweiCloud\SDK\Ces\V2\Model\ListRelationType',
            'alarmIds' => 'string[]',
            'relationIds' => 'string[]',
            'metricName' => 'string',
            'resourceLevel' => 'string',
            'maskId' => 'string',
            'maskName' => 'string',
            'maskStatus' => 'string',
            'resourceId' => 'string',
            'namespace' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceDimension[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relationType  relationType
    * alarmIds  **参数解释**： 告警规则ID列表，用于查询对应的告警通知屏蔽。 **约束限制**： 当relation_type为ALARM_RULE、RESOURCE_POLICY_NOTIFICATION时，应通过alarm_ids查询。当relation_type为RESOURCE、EVENT.SYS时，不支持使用alarm_ids查询，此时alarm_ids为空或不选，表示查询所有的RESOURCE、EVENT.SYS类型的告警屏蔽。 **取值范围**： 包含的告警规则ID数量最多不超过100个，最少为0个。 **默认取值**： 不涉及
    * relationIds  （已废弃，不推荐使用）关联编号（目前是告警规则ID）
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * resourceLevel  **参数解释**： 资源层级。 **约束限制**： 不涉及。 **取值范围**： - product: 云产品   - dimension: 子维度 **默认取值**： 不涉及。
    * maskId  **参数解释**： 屏蔽规则ID,可选。 **约束限制**： 不涉及。 **取值范围**： 以nm开头，后跟[0,62]个英文或数字。 **默认取值**： 不涉及。
    * maskName  **参数解释**： 屏蔽规则名称,可选。 **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * maskStatus  **参数解释**： 屏蔽状态,可选。 **约束限制**： 不涉及。 **取值范围**： - MASK_EFFECTIVE：已生效。 - MASK_INEFFECTIVE：未生效。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 资源维度值,提供一个维度的资源ID即可,可选 **约束限制**： 不涉及。 **取值范围**： 长度为[1,700]个字符。 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * dimensions  **参数解释**： 资源的维度信息 **约束限制**： 包含的维度信息数量为[1,4]个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relationType' => null,
        'alarmIds' => null,
        'relationIds' => null,
        'metricName' => null,
        'resourceLevel' => null,
        'maskId' => null,
        'maskName' => null,
        'maskStatus' => null,
        'resourceId' => null,
        'namespace' => null,
        'dimensions' => null
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
    * relationType  relationType
    * alarmIds  **参数解释**： 告警规则ID列表，用于查询对应的告警通知屏蔽。 **约束限制**： 当relation_type为ALARM_RULE、RESOURCE_POLICY_NOTIFICATION时，应通过alarm_ids查询。当relation_type为RESOURCE、EVENT.SYS时，不支持使用alarm_ids查询，此时alarm_ids为空或不选，表示查询所有的RESOURCE、EVENT.SYS类型的告警屏蔽。 **取值范围**： 包含的告警规则ID数量最多不超过100个，最少为0个。 **默认取值**： 不涉及
    * relationIds  （已废弃，不推荐使用）关联编号（目前是告警规则ID）
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * resourceLevel  **参数解释**： 资源层级。 **约束限制**： 不涉及。 **取值范围**： - product: 云产品   - dimension: 子维度 **默认取值**： 不涉及。
    * maskId  **参数解释**： 屏蔽规则ID,可选。 **约束限制**： 不涉及。 **取值范围**： 以nm开头，后跟[0,62]个英文或数字。 **默认取值**： 不涉及。
    * maskName  **参数解释**： 屏蔽规则名称,可选。 **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * maskStatus  **参数解释**： 屏蔽状态,可选。 **约束限制**： 不涉及。 **取值范围**： - MASK_EFFECTIVE：已生效。 - MASK_INEFFECTIVE：未生效。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 资源维度值,提供一个维度的资源ID即可,可选 **约束限制**： 不涉及。 **取值范围**： 长度为[1,700]个字符。 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * dimensions  **参数解释**： 资源的维度信息 **约束限制**： 包含的维度信息数量为[1,4]个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relationType' => 'relation_type',
            'alarmIds' => 'alarm_ids',
            'relationIds' => 'relation_ids',
            'metricName' => 'metric_name',
            'resourceLevel' => 'resource_level',
            'maskId' => 'mask_id',
            'maskName' => 'mask_name',
            'maskStatus' => 'mask_status',
            'resourceId' => 'resource_id',
            'namespace' => 'namespace',
            'dimensions' => 'dimensions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relationType  relationType
    * alarmIds  **参数解释**： 告警规则ID列表，用于查询对应的告警通知屏蔽。 **约束限制**： 当relation_type为ALARM_RULE、RESOURCE_POLICY_NOTIFICATION时，应通过alarm_ids查询。当relation_type为RESOURCE、EVENT.SYS时，不支持使用alarm_ids查询，此时alarm_ids为空或不选，表示查询所有的RESOURCE、EVENT.SYS类型的告警屏蔽。 **取值范围**： 包含的告警规则ID数量最多不超过100个，最少为0个。 **默认取值**： 不涉及
    * relationIds  （已废弃，不推荐使用）关联编号（目前是告警规则ID）
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * resourceLevel  **参数解释**： 资源层级。 **约束限制**： 不涉及。 **取值范围**： - product: 云产品   - dimension: 子维度 **默认取值**： 不涉及。
    * maskId  **参数解释**： 屏蔽规则ID,可选。 **约束限制**： 不涉及。 **取值范围**： 以nm开头，后跟[0,62]个英文或数字。 **默认取值**： 不涉及。
    * maskName  **参数解释**： 屏蔽规则名称,可选。 **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * maskStatus  **参数解释**： 屏蔽状态,可选。 **约束限制**： 不涉及。 **取值范围**： - MASK_EFFECTIVE：已生效。 - MASK_INEFFECTIVE：未生效。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 资源维度值,提供一个维度的资源ID即可,可选 **约束限制**： 不涉及。 **取值范围**： 长度为[1,700]个字符。 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * dimensions  **参数解释**： 资源的维度信息 **约束限制**： 包含的维度信息数量为[1,4]个。
    *
    * @var string[]
    */
    protected static $setters = [
            'relationType' => 'setRelationType',
            'alarmIds' => 'setAlarmIds',
            'relationIds' => 'setRelationIds',
            'metricName' => 'setMetricName',
            'resourceLevel' => 'setResourceLevel',
            'maskId' => 'setMaskId',
            'maskName' => 'setMaskName',
            'maskStatus' => 'setMaskStatus',
            'resourceId' => 'setResourceId',
            'namespace' => 'setNamespace',
            'dimensions' => 'setDimensions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relationType  relationType
    * alarmIds  **参数解释**： 告警规则ID列表，用于查询对应的告警通知屏蔽。 **约束限制**： 当relation_type为ALARM_RULE、RESOURCE_POLICY_NOTIFICATION时，应通过alarm_ids查询。当relation_type为RESOURCE、EVENT.SYS时，不支持使用alarm_ids查询，此时alarm_ids为空或不选，表示查询所有的RESOURCE、EVENT.SYS类型的告警屏蔽。 **取值范围**： 包含的告警规则ID数量最多不超过100个，最少为0个。 **默认取值**： 不涉及
    * relationIds  （已废弃，不推荐使用）关联编号（目前是告警规则ID）
    * metricName  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * resourceLevel  **参数解释**： 资源层级。 **约束限制**： 不涉及。 **取值范围**： - product: 云产品   - dimension: 子维度 **默认取值**： 不涉及。
    * maskId  **参数解释**： 屏蔽规则ID,可选。 **约束限制**： 不涉及。 **取值范围**： 以nm开头，后跟[0,62]个英文或数字。 **默认取值**： 不涉及。
    * maskName  **参数解释**： 屏蔽规则名称,可选。 **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。 **默认取值**： 不涉及。
    * maskStatus  **参数解释**： 屏蔽状态,可选。 **约束限制**： 不涉及。 **取值范围**： - MASK_EFFECTIVE：已生效。 - MASK_INEFFECTIVE：未生效。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 资源维度值,提供一个维度的资源ID即可,可选 **约束限制**： 不涉及。 **取值范围**： 长度为[1,700]个字符。 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * dimensions  **参数解释**： 资源的维度信息 **约束限制**： 包含的维度信息数量为[1,4]个。
    *
    * @var string[]
    */
    protected static $getters = [
            'relationType' => 'getRelationType',
            'alarmIds' => 'getAlarmIds',
            'relationIds' => 'getRelationIds',
            'metricName' => 'getMetricName',
            'resourceLevel' => 'getResourceLevel',
            'maskId' => 'getMaskId',
            'maskName' => 'getMaskName',
            'maskStatus' => 'getMaskStatus',
            'resourceId' => 'getResourceId',
            'namespace' => 'getNamespace',
            'dimensions' => 'getDimensions'
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
    const RESOURCE_LEVEL_DIMENSION = 'dimension';
    const RESOURCE_LEVEL_PRODUCT = 'product';
    const MASK_STATUS_MASK_EFFECTIVE = 'MASK_EFFECTIVE';
    const MASK_STATUS_MASK_INEFFECTIVE = 'MASK_INEFFECTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceLevelAllowableValues()
    {
        return [
            self::RESOURCE_LEVEL_DIMENSION,
            self::RESOURCE_LEVEL_PRODUCT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMaskStatusAllowableValues()
    {
        return [
            self::MASK_STATUS_MASK_EFFECTIVE,
            self::MASK_STATUS_MASK_INEFFECTIVE,
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
        $this->container['relationType'] = isset($data['relationType']) ? $data['relationType'] : null;
        $this->container['alarmIds'] = isset($data['alarmIds']) ? $data['alarmIds'] : null;
        $this->container['relationIds'] = isset($data['relationIds']) ? $data['relationIds'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
        $this->container['maskId'] = isset($data['maskId']) ? $data['maskId'] : null;
        $this->container['maskName'] = isset($data['maskName']) ? $data['maskName'] : null;
        $this->container['maskStatus'] = isset($data['maskStatus']) ? $data['maskStatus'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['relationType'] === null) {
            $invalidProperties[] = "'relationType' can't be null";
        }
        if ($this->container['relationIds'] === null) {
            $invalidProperties[] = "'relationIds' can't be null";
        }
            if (!is_null($this->container['metricName']) && (mb_strlen($this->container['metricName']) > 96)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 96.";
            }
            if (!is_null($this->container['metricName']) && (mb_strlen($this->container['metricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricName']) && !preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['metricName'])) {
                $invalidProperties[] = "invalid value for 'metricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
            $allowedValues = $this->getResourceLevelAllowableValues();
                if (!is_null($this->container['resourceLevel']) && !in_array($this->container['resourceLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['maskId']) && (mb_strlen($this->container['maskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'maskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['maskId']) && (mb_strlen($this->container['maskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'maskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maskId']) && !preg_match("/^nm([0-9A-Za-z]){0,62}$/", $this->container['maskId'])) {
                $invalidProperties[] = "invalid value for 'maskId', must be conform to the pattern /^nm([0-9A-Za-z]){0,62}$/.";
            }
            if (!is_null($this->container['maskName']) && (mb_strlen($this->container['maskName']) > 64)) {
                $invalidProperties[] = "invalid value for 'maskName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['maskName']) && (mb_strlen($this->container['maskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'maskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maskName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['maskName'])) {
                $invalidProperties[] = "invalid value for 'maskName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            $allowedValues = $this->getMaskStatusAllowableValues();
                if (!is_null($this->container['maskStatus']) && !in_array($this->container['maskStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'maskStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['maskStatus']) && (mb_strlen($this->container['maskStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'maskStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['maskStatus']) && (mb_strlen($this->container['maskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'maskStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 700)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 700.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
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
    * Gets relationType
    *  relationType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ListRelationType
    */
    public function getRelationType()
    {
        return $this->container['relationType'];
    }

    /**
    * Sets relationType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ListRelationType $relationType relationType
    *
    * @return $this
    */
    public function setRelationType($relationType)
    {
        $this->container['relationType'] = $relationType;
        return $this;
    }

    /**
    * Gets alarmIds
    *  **参数解释**： 告警规则ID列表，用于查询对应的告警通知屏蔽。 **约束限制**： 当relation_type为ALARM_RULE、RESOURCE_POLICY_NOTIFICATION时，应通过alarm_ids查询。当relation_type为RESOURCE、EVENT.SYS时，不支持使用alarm_ids查询，此时alarm_ids为空或不选，表示查询所有的RESOURCE、EVENT.SYS类型的告警屏蔽。 **取值范围**： 包含的告警规则ID数量最多不超过100个，最少为0个。 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getAlarmIds()
    {
        return $this->container['alarmIds'];
    }

    /**
    * Sets alarmIds
    *
    * @param string[]|null $alarmIds **参数解释**： 告警规则ID列表，用于查询对应的告警通知屏蔽。 **约束限制**： 当relation_type为ALARM_RULE、RESOURCE_POLICY_NOTIFICATION时，应通过alarm_ids查询。当relation_type为RESOURCE、EVENT.SYS时，不支持使用alarm_ids查询，此时alarm_ids为空或不选，表示查询所有的RESOURCE、EVENT.SYS类型的告警屏蔽。 **取值范围**： 包含的告警规则ID数量最多不超过100个，最少为0个。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlarmIds($alarmIds)
    {
        $this->container['alarmIds'] = $alarmIds;
        return $this;
    }

    /**
    * Gets relationIds
    *  （已废弃，不推荐使用）关联编号（目前是告警规则ID）
    *
    * @return string[]
    */
    public function getRelationIds()
    {
        return $this->container['relationIds'];
    }

    /**
    * Sets relationIds
    *
    * @param string[] $relationIds （已废弃，不推荐使用）关联编号（目前是告警规则ID）
    *
    * @return $this
    */
    public function setRelationIds($relationIds)
    {
        $this->container['relationIds'] = $relationIds;
        return $this;
    }

    /**
    * Gets metricName
    *  **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName **参数解释**： 资源的监控指标名称，各服务资源的指标名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为96。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets resourceLevel
    *  **参数解释**： 资源层级。 **约束限制**： 不涉及。 **取值范围**： - product: 云产品   - dimension: 子维度 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getResourceLevel()
    {
        return $this->container['resourceLevel'];
    }

    /**
    * Sets resourceLevel
    *
    * @param string|null $resourceLevel **参数解释**： 资源层级。 **约束限制**： 不涉及。 **取值范围**： - product: 云产品   - dimension: 子维度 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setResourceLevel($resourceLevel)
    {
        $this->container['resourceLevel'] = $resourceLevel;
        return $this;
    }

    /**
    * Gets maskId
    *  **参数解释**： 屏蔽规则ID,可选。 **约束限制**： 不涉及。 **取值范围**： 以nm开头，后跟[0,62]个英文或数字。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaskId()
    {
        return $this->container['maskId'];
    }

    /**
    * Sets maskId
    *
    * @param string|null $maskId **参数解释**： 屏蔽规则ID,可选。 **约束限制**： 不涉及。 **取值范围**： 以nm开头，后跟[0,62]个英文或数字。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaskId($maskId)
    {
        $this->container['maskId'] = $maskId;
        return $this;
    }

    /**
    * Gets maskName
    *  **参数解释**： 屏蔽规则名称,可选。 **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaskName()
    {
        return $this->container['maskName'];
    }

    /**
    * Sets maskName
    *
    * @param string|null $maskName **参数解释**： 屏蔽规则名称,可选。 **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaskName($maskName)
    {
        $this->container['maskName'] = $maskName;
        return $this;
    }

    /**
    * Gets maskStatus
    *  **参数解释**： 屏蔽状态,可选。 **约束限制**： 不涉及。 **取值范围**： - MASK_EFFECTIVE：已生效。 - MASK_INEFFECTIVE：未生效。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaskStatus()
    {
        return $this->container['maskStatus'];
    }

    /**
    * Sets maskStatus
    *
    * @param string|null $maskStatus **参数解释**： 屏蔽状态,可选。 **约束限制**： 不涉及。 **取值范围**： - MASK_EFFECTIVE：已生效。 - MASK_INEFFECTIVE：未生效。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaskStatus($maskStatus)
    {
        $this->container['maskStatus'] = $maskStatus;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**： 资源维度值,提供一个维度的资源ID即可,可选 **约束限制**： 不涉及。 **取值范围**： 长度为[1,700]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**： 资源维度值,提供一个维度的资源ID即可,可选 **约束限制**： 不涉及。 **取值范围**： 长度为[1,700]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensions
    *  **参数解释**： 资源的维度信息 **约束限制**： 包含的维度信息数量为[1,4]个。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceDimension[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceDimension[]|null $dimensions **参数解释**： 资源的维度信息 **约束限制**： 包含的维度信息数量为[1,4]个。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
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

