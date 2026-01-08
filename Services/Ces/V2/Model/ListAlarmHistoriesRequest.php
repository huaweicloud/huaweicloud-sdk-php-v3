<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmHistoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmHistoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警ID列表。告警ID：以al开头，后跟22位由字母或数字组成的字符串。 **约束限制**： 列表最大长度为50。
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由之前的 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **约束限制**： 不涉及。 **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。 **默认取值**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **约束限制**： 不涉及。 **取值范围**： 最大128字符长度。 **默认取值**： 不涉及。
    * status  **参数解释**： 告警规则状态列表。 **取值范围**： 告警规则状态：枚举值。 - ok：已解决 - alarm：告警中 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 已解决（手动） **约束限制**： 包含的告警规则状态对象数量为[0,3]
    * level  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 告警资源ID。 **约束限制**： 不涉及。 **取值范围**： 多维度情况按字母升序排列并使用逗号分隔。长度为[0,2048]个字符。 **默认取值**： 不涉及。
    * from  **参数解释**： 查询告警记录的起始更新时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询告警记录的截止更新时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值 - event: 查询事件类型告警 - metric: 查询指标类型告警。 **默认取值**： 不涉及。
    * createTimeFrom  **参数解释**： 查询告警记录的起始创建时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * createTimeTo  **参数解释**： 查询告警记录的截止创建时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为0，最大值为1000000000 **默认取值**： 0
    * limit  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为1，最大值为100 **默认取值**： 100
    * orderBy  **参数解释**： 按关键字排序。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - first_alarm_time: 告警产生时间 - update_time: 更新时间 - alarm_level: 告警级别 - record_id: 表记录主键 **默认取值**： update_time
    * maskStatus  **参数解释**： 告警规则屏蔽状态 **约束限制**： 不涉及。 **取值范围**： - UN_MASKED 活跃告警 - MASKED 屏蔽告警 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string[]',
            'recordId' => 'string',
            'name' => 'string',
            'status' => 'string[]',
            'level' => 'int',
            'namespace' => 'string',
            'resourceId' => 'string',
            'from' => 'string',
            'to' => 'string',
            'alarmType' => 'string',
            'createTimeFrom' => 'string',
            'createTimeTo' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'orderBy' => 'string',
            'maskStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警ID列表。告警ID：以al开头，后跟22位由字母或数字组成的字符串。 **约束限制**： 列表最大长度为50。
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由之前的 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **约束限制**： 不涉及。 **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。 **默认取值**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **约束限制**： 不涉及。 **取值范围**： 最大128字符长度。 **默认取值**： 不涉及。
    * status  **参数解释**： 告警规则状态列表。 **取值范围**： 告警规则状态：枚举值。 - ok：已解决 - alarm：告警中 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 已解决（手动） **约束限制**： 包含的告警规则状态对象数量为[0,3]
    * level  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 告警资源ID。 **约束限制**： 不涉及。 **取值范围**： 多维度情况按字母升序排列并使用逗号分隔。长度为[0,2048]个字符。 **默认取值**： 不涉及。
    * from  **参数解释**： 查询告警记录的起始更新时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询告警记录的截止更新时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值 - event: 查询事件类型告警 - metric: 查询指标类型告警。 **默认取值**： 不涉及。
    * createTimeFrom  **参数解释**： 查询告警记录的起始创建时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * createTimeTo  **参数解释**： 查询告警记录的截止创建时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为0，最大值为1000000000 **默认取值**： 0
    * limit  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为1，最大值为100 **默认取值**： 100
    * orderBy  **参数解释**： 按关键字排序。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - first_alarm_time: 告警产生时间 - update_time: 更新时间 - alarm_level: 告警级别 - record_id: 表记录主键 **默认取值**： update_time
    * maskStatus  **参数解释**： 告警规则屏蔽状态 **约束限制**： 不涉及。 **取值范围**： - UN_MASKED 活跃告警 - MASKED 屏蔽告警 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'recordId' => null,
        'name' => null,
        'status' => null,
        'level' => null,
        'namespace' => null,
        'resourceId' => null,
        'from' => null,
        'to' => null,
        'alarmType' => null,
        'createTimeFrom' => null,
        'createTimeTo' => null,
        'offset' => null,
        'limit' => null,
        'orderBy' => null,
        'maskStatus' => null
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
    * alarmId  **参数解释**： 告警ID列表。告警ID：以al开头，后跟22位由字母或数字组成的字符串。 **约束限制**： 列表最大长度为50。
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由之前的 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **约束限制**： 不涉及。 **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。 **默认取值**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **约束限制**： 不涉及。 **取值范围**： 最大128字符长度。 **默认取值**： 不涉及。
    * status  **参数解释**： 告警规则状态列表。 **取值范围**： 告警规则状态：枚举值。 - ok：已解决 - alarm：告警中 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 已解决（手动） **约束限制**： 包含的告警规则状态对象数量为[0,3]
    * level  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 告警资源ID。 **约束限制**： 不涉及。 **取值范围**： 多维度情况按字母升序排列并使用逗号分隔。长度为[0,2048]个字符。 **默认取值**： 不涉及。
    * from  **参数解释**： 查询告警记录的起始更新时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询告警记录的截止更新时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值 - event: 查询事件类型告警 - metric: 查询指标类型告警。 **默认取值**： 不涉及。
    * createTimeFrom  **参数解释**： 查询告警记录的起始创建时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * createTimeTo  **参数解释**： 查询告警记录的截止创建时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为0，最大值为1000000000 **默认取值**： 0
    * limit  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为1，最大值为100 **默认取值**： 100
    * orderBy  **参数解释**： 按关键字排序。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - first_alarm_time: 告警产生时间 - update_time: 更新时间 - alarm_level: 告警级别 - record_id: 表记录主键 **默认取值**： update_time
    * maskStatus  **参数解释**： 告警规则屏蔽状态 **约束限制**： 不涉及。 **取值范围**： - UN_MASKED 活跃告警 - MASKED 屏蔽告警 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarm_id',
            'recordId' => 'record_id',
            'name' => 'name',
            'status' => 'status',
            'level' => 'level',
            'namespace' => 'namespace',
            'resourceId' => 'resource_id',
            'from' => 'from',
            'to' => 'to',
            'alarmType' => 'alarm_type',
            'createTimeFrom' => 'create_time_from',
            'createTimeTo' => 'create_time_to',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderBy' => 'order_by',
            'maskStatus' => 'mask_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  **参数解释**： 告警ID列表。告警ID：以al开头，后跟22位由字母或数字组成的字符串。 **约束限制**： 列表最大长度为50。
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由之前的 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **约束限制**： 不涉及。 **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。 **默认取值**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **约束限制**： 不涉及。 **取值范围**： 最大128字符长度。 **默认取值**： 不涉及。
    * status  **参数解释**： 告警规则状态列表。 **取值范围**： 告警规则状态：枚举值。 - ok：已解决 - alarm：告警中 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 已解决（手动） **约束限制**： 包含的告警规则状态对象数量为[0,3]
    * level  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 告警资源ID。 **约束限制**： 不涉及。 **取值范围**： 多维度情况按字母升序排列并使用逗号分隔。长度为[0,2048]个字符。 **默认取值**： 不涉及。
    * from  **参数解释**： 查询告警记录的起始更新时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询告警记录的截止更新时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值 - event: 查询事件类型告警 - metric: 查询指标类型告警。 **默认取值**： 不涉及。
    * createTimeFrom  **参数解释**： 查询告警记录的起始创建时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * createTimeTo  **参数解释**： 查询告警记录的截止创建时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为0，最大值为1000000000 **默认取值**： 0
    * limit  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为1，最大值为100 **默认取值**： 100
    * orderBy  **参数解释**： 按关键字排序。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - first_alarm_time: 告警产生时间 - update_time: 更新时间 - alarm_level: 告警级别 - record_id: 表记录主键 **默认取值**： update_time
    * maskStatus  **参数解释**： 告警规则屏蔽状态 **约束限制**： 不涉及。 **取值范围**： - UN_MASKED 活跃告警 - MASKED 屏蔽告警 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'recordId' => 'setRecordId',
            'name' => 'setName',
            'status' => 'setStatus',
            'level' => 'setLevel',
            'namespace' => 'setNamespace',
            'resourceId' => 'setResourceId',
            'from' => 'setFrom',
            'to' => 'setTo',
            'alarmType' => 'setAlarmType',
            'createTimeFrom' => 'setCreateTimeFrom',
            'createTimeTo' => 'setCreateTimeTo',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderBy' => 'setOrderBy',
            'maskStatus' => 'setMaskStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  **参数解释**： 告警ID列表。告警ID：以al开头，后跟22位由字母或数字组成的字符串。 **约束限制**： 列表最大长度为50。
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由之前的 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **约束限制**： 不涉及。 **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。 **默认取值**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **约束限制**： 不涉及。 **取值范围**： 最大128字符长度。 **默认取值**： 不涉及。
    * status  **参数解释**： 告警规则状态列表。 **取值范围**： 告警规则状态：枚举值。 - ok：已解决 - alarm：告警中 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 已解决（手动） **约束限制**： 包含的告警规则状态对象数量为[0,3]
    * level  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及。
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * resourceId  **参数解释**： 告警资源ID。 **约束限制**： 不涉及。 **取值范围**： 多维度情况按字母升序排列并使用逗号分隔。长度为[0,2048]个字符。 **默认取值**： 不涉及。
    * from  **参数解释**： 查询告警记录的起始更新时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询告警记录的截止更新时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * alarmType  **参数解释**： 告警类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值 - event: 查询事件类型告警 - metric: 查询指标类型告警。 **默认取值**： 不涉及。
    * createTimeFrom  **参数解释**： 查询告警记录的起始创建时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * createTimeTo  **参数解释**： 查询告警记录的截止创建时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为0，最大值为1000000000 **默认取值**： 0
    * limit  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为1，最大值为100 **默认取值**： 100
    * orderBy  **参数解释**： 按关键字排序。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - first_alarm_time: 告警产生时间 - update_time: 更新时间 - alarm_level: 告警级别 - record_id: 表记录主键 **默认取值**： update_time
    * maskStatus  **参数解释**： 告警规则屏蔽状态 **约束限制**： 不涉及。 **取值范围**： - UN_MASKED 活跃告警 - MASKED 屏蔽告警 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'recordId' => 'getRecordId',
            'name' => 'getName',
            'status' => 'getStatus',
            'level' => 'getLevel',
            'namespace' => 'getNamespace',
            'resourceId' => 'getResourceId',
            'from' => 'getFrom',
            'to' => 'getTo',
            'alarmType' => 'getAlarmType',
            'createTimeFrom' => 'getCreateTimeFrom',
            'createTimeTo' => 'getCreateTimeTo',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderBy' => 'getOrderBy',
            'maskStatus' => 'getMaskStatus'
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
    const STATUS_OK = 'ok';
    const STATUS_ALARM = 'alarm';
    const STATUS_INVALID = 'invalid';
    const STATUS_INSUFFICIENT_DATA = 'insufficient_data';
    const STATUS_OK_MANUAL = 'ok_manual';
    const ALARM_TYPE_EVENT = 'event';
    const ALARM_TYPE_METRIC = 'metric';
    const ORDER_BY_FIRST_ALARM_TIME = 'first_alarm_time';
    const ORDER_BY_UPDATE_TIME = 'update_time';
    const ORDER_BY_ALARM_LEVEL = 'alarm_level';
    const ORDER_BY_RECORD_ID = 'record_id';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_ALARM,
            self::STATUS_INVALID,
            self::STATUS_INSUFFICIENT_DATA,
            self::STATUS_OK_MANUAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmTypeAllowableValues()
    {
        return [
            self::ALARM_TYPE_EVENT,
            self::ALARM_TYPE_METRIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_FIRST_ALARM_TIME,
            self::ORDER_BY_UPDATE_TIME,
            self::ORDER_BY_ALARM_LEVEL,
            self::ORDER_BY_RECORD_ID,
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
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['createTimeFrom'] = isset($data['createTimeFrom']) ? $data['createTimeFrom'] : null;
        $this->container['createTimeTo'] = isset($data['createTimeTo']) ? $data['createTimeTo'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['maskStatus'] = isset($data['maskStatus']) ? $data['maskStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) > 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) < 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['recordId']) && !preg_match("/^ah([0-9A-Za-z]){22}$/", $this->container['recordId'])) {
                $invalidProperties[] = "invalid value for 'recordId', must be conform to the pattern /^ah([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] > 4)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 1)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 1.";
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
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 2048)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/^([a-z]|[A-Z]|[0-9]|_|-|:|,|\\*|\\.|\/|#|\\(|\\))+$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|_|-|:|,|\\*|\\.|\/|#|\\(|\\))+$/.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) > 64)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) < 0)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) > 64)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) < 0)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAlarmTypeAllowableValues();
                if (!is_null($this->container['alarmType']) && !in_array($this->container['alarmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createTimeFrom']) && (mb_strlen($this->container['createTimeFrom']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTimeFrom', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTimeFrom']) && (mb_strlen($this->container['createTimeFrom']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeFrom', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeTo']) && (mb_strlen($this->container['createTimeTo']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTimeTo', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTimeTo']) && (mb_strlen($this->container['createTimeTo']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeTo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['maskStatus']) && !preg_match("/^(UN_MASKED|MASKED)$/", $this->container['maskStatus'])) {
                $invalidProperties[] = "invalid value for 'maskStatus', must be conform to the pattern /^(UN_MASKED|MASKED)$/.";
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
    * Gets alarmId
    *  **参数解释**： 告警ID列表。告警ID：以al开头，后跟22位由字母或数字组成的字符串。 **约束限制**： 列表最大长度为50。
    *
    * @return string[]|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string[]|null $alarmId **参数解释**： 告警ID列表。告警ID：以al开头，后跟22位由字母或数字组成的字符串。 **约束限制**： 列表最大长度为50。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets recordId
    *  **参数解释**： 告警流水号。优化告警流水号生成规则，由之前的 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **约束限制**： 不涉及。 **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId **参数解释**： 告警流水号。优化告警流水号生成规则，由之前的 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **约束限制**： 不涉及。 **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 告警规则名称。 **约束限制**： 不涉及。 **取值范围**： 最大128字符长度。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 告警规则名称。 **约束限制**： 不涉及。 **取值范围**： 最大128字符长度。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 告警规则状态列表。 **取值范围**： 告警规则状态：枚举值。 - ok：已解决 - alarm：告警中 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 已解决（手动） **约束限制**： 包含的告警规则状态对象数量为[0,3]
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status **参数解释**： 告警规则状态列表。 **取值范围**： 告警规则状态：枚举值。 - ok：已解决 - alarm：告警中 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 已解决（手动） **约束限制**： 包含的告警规则状态对象数量为[0,3]
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及。
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
    * @param int|null $level **参数解释**： 告警级别。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - 1：紧急 - 2：重要 - 3：次要 - 4：提示 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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
    * Gets resourceId
    *  **参数解释**： 告警资源ID。 **约束限制**： 不涉及。 **取值范围**： 多维度情况按字母升序排列并使用逗号分隔。长度为[0,2048]个字符。 **默认取值**： 不涉及。
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
    * @param string|null $resourceId **参数解释**： 告警资源ID。 **约束限制**： 不涉及。 **取值范围**： 多维度情况按字母升序排列并使用逗号分隔。长度为[0,2048]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释**： 查询告警记录的起始更新时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string|null $from **参数解释**： 查询告警记录的起始更新时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
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
    *  **参数解释**： 查询告警记录的截止更新时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string|null $to **参数解释**： 查询告警记录的截止更新时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets alarmType
    *  **参数解释**： 告警类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值 - event: 查询事件类型告警 - metric: 查询指标类型告警。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string|null $alarmType **参数解释**： 告警类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值 - event: 查询事件类型告警 - metric: 查询指标类型告警。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets createTimeFrom
    *  **参数解释**： 查询告警记录的起始创建时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCreateTimeFrom()
    {
        return $this->container['createTimeFrom'];
    }

    /**
    * Sets createTimeFrom
    *
    * @param string|null $createTimeFrom **参数解释**： 查询告警记录的起始创建时间，例如：2022-02-10T10:05:46+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTimeFrom($createTimeFrom)
    {
        $this->container['createTimeFrom'] = $createTimeFrom;
        return $this;
    }

    /**
    * Gets createTimeTo
    *  **参数解释**： 查询告警记录的截止创建时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCreateTimeTo()
    {
        return $this->container['createTimeTo'];
    }

    /**
    * Sets createTimeTo
    *
    * @param string|null $createTimeTo **参数解释**： 查询告警记录的截止创建时间，例如：2022-02-10T10:05:47+08:00。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTimeTo($createTimeTo)
    {
        $this->container['createTimeTo'] = $createTimeTo;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为0，最大值为1000000000 **默认取值**： 0
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
    * @param int|null $offset **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为0，最大值为1000000000 **默认取值**： 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为1，最大值为100 **默认取值**： 100
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
    * @param int|null $limit **参数解释**： 分页偏移量。 **约束限制**： 不涉及。 **取值范围**： 整数，最小值为1，最大值为100 **默认取值**： 100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets orderBy
    *  **参数解释**： 按关键字排序。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - first_alarm_time: 告警产生时间 - update_time: 更新时间 - alarm_level: 告警级别 - record_id: 表记录主键 **默认取值**： update_time
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy **参数解释**： 按关键字排序。 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - first_alarm_time: 告警产生时间 - update_time: 更新时间 - alarm_level: 告警级别 - record_id: 表记录主键 **默认取值**： update_time
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets maskStatus
    *  **参数解释**： 告警规则屏蔽状态 **约束限制**： 不涉及。 **取值范围**： - UN_MASKED 活跃告警 - MASKED 屏蔽告警 **默认取值**： 不涉及
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
    * @param string|null $maskStatus **参数解释**： 告警规则屏蔽状态 **约束限制**： 不涉及。 **取值范围**： - UN_MASKED 活跃告警 - MASKED 屏蔽告警 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMaskStatus($maskStatus)
    {
        $this->container['maskStatus'] = $maskStatus;
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

