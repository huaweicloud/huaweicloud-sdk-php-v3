<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  **参数解释**： 事件名称，值为系统产生的事件名称或用户自定义上报的事件名称。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符。 **默认取值**： 不涉及。
    * eventType  **参数解释**： 事件类型。 **约束限制**： 不涉及。 **取值范围**： 值为EVENT.SYS或EVENT.CUSTOM。 - EVENT.SYS：系统事件。 - EVENT.CUSTOM：自定义事件。 **默认取值**： 不涉及。
    * subEventType  **参数解释**： 事件子类。 **约束限制**： 不涉及。 **取值范围**： 枚举类型 - SUB_EVENT.OPS: 运维事件 - SUB_EVENT.PLAN: 计划事件 - SUB_EVENT.CUSTOM: 自定义事件 **默认取值**： 不涉及。
    * eventSource  **参数解释**： 事件来源，取值为各云服务的命名空间。云服务的命名空间请参考“[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)”。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。 正则匹配：以字母开头，中间有一个点，包含字母、数字、下划线的字符串。 **默认取值**： 不涉及。
    * eventLevel  **参数解释**： 事件的级别。 **约束限制**： 不涉及。 **取值范围**： 值为Critical、Major、Minor、Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示 **默认取值**： 不涉及。
    * eventUser  **参数解释**： 上报事件监控数据时用户的名称，也可为projectID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 正则匹配：由零个或多个字母、数字、下划线、横线、斜杠、空格、@ 符号或点号组成的字符串。 **默认取值**： 不涉及。
    * eventState  **参数解释**： 事件的状态。 **约束限制**： 不涉及。 **取值范围**： 值为normal、warning、incident。 - normal: 正常 - warning: 警告 - incident: 故障 **默认取值**： 不涉及。
    * from  **参数解释**： 查询数据起始时间，UNIX时间戳，单位毫秒。例如：1605952700911。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询数据截止时间，UNIX时间戳，单位毫秒。 **约束限制**： 其中from必须小于to。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * start  **参数解释**： 分页起始值。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * limit  **参数解释**： 单次查询的条数限制，用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 大小为[1,100]的整数 **默认取值**： 100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'eventType' => 'string',
            'subEventType' => 'string',
            'eventSource' => 'string',
            'eventLevel' => 'string',
            'eventUser' => 'string',
            'eventState' => 'string',
            'from' => 'int',
            'to' => 'int',
            'start' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  **参数解释**： 事件名称，值为系统产生的事件名称或用户自定义上报的事件名称。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符。 **默认取值**： 不涉及。
    * eventType  **参数解释**： 事件类型。 **约束限制**： 不涉及。 **取值范围**： 值为EVENT.SYS或EVENT.CUSTOM。 - EVENT.SYS：系统事件。 - EVENT.CUSTOM：自定义事件。 **默认取值**： 不涉及。
    * subEventType  **参数解释**： 事件子类。 **约束限制**： 不涉及。 **取值范围**： 枚举类型 - SUB_EVENT.OPS: 运维事件 - SUB_EVENT.PLAN: 计划事件 - SUB_EVENT.CUSTOM: 自定义事件 **默认取值**： 不涉及。
    * eventSource  **参数解释**： 事件来源，取值为各云服务的命名空间。云服务的命名空间请参考“[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)”。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。 正则匹配：以字母开头，中间有一个点，包含字母、数字、下划线的字符串。 **默认取值**： 不涉及。
    * eventLevel  **参数解释**： 事件的级别。 **约束限制**： 不涉及。 **取值范围**： 值为Critical、Major、Minor、Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示 **默认取值**： 不涉及。
    * eventUser  **参数解释**： 上报事件监控数据时用户的名称，也可为projectID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 正则匹配：由零个或多个字母、数字、下划线、横线、斜杠、空格、@ 符号或点号组成的字符串。 **默认取值**： 不涉及。
    * eventState  **参数解释**： 事件的状态。 **约束限制**： 不涉及。 **取值范围**： 值为normal、warning、incident。 - normal: 正常 - warning: 警告 - incident: 故障 **默认取值**： 不涉及。
    * from  **参数解释**： 查询数据起始时间，UNIX时间戳，单位毫秒。例如：1605952700911。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询数据截止时间，UNIX时间戳，单位毫秒。 **约束限制**： 其中from必须小于to。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * start  **参数解释**： 分页起始值。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * limit  **参数解释**： 单次查询的条数限制，用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 大小为[1,100]的整数 **默认取值**： 100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'eventType' => null,
        'subEventType' => null,
        'eventSource' => null,
        'eventLevel' => null,
        'eventUser' => null,
        'eventState' => null,
        'from' => 'int64',
        'to' => 'int64',
        'start' => 'int64',
        'limit' => 'int32'
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
    * eventName  **参数解释**： 事件名称，值为系统产生的事件名称或用户自定义上报的事件名称。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符。 **默认取值**： 不涉及。
    * eventType  **参数解释**： 事件类型。 **约束限制**： 不涉及。 **取值范围**： 值为EVENT.SYS或EVENT.CUSTOM。 - EVENT.SYS：系统事件。 - EVENT.CUSTOM：自定义事件。 **默认取值**： 不涉及。
    * subEventType  **参数解释**： 事件子类。 **约束限制**： 不涉及。 **取值范围**： 枚举类型 - SUB_EVENT.OPS: 运维事件 - SUB_EVENT.PLAN: 计划事件 - SUB_EVENT.CUSTOM: 自定义事件 **默认取值**： 不涉及。
    * eventSource  **参数解释**： 事件来源，取值为各云服务的命名空间。云服务的命名空间请参考“[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)”。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。 正则匹配：以字母开头，中间有一个点，包含字母、数字、下划线的字符串。 **默认取值**： 不涉及。
    * eventLevel  **参数解释**： 事件的级别。 **约束限制**： 不涉及。 **取值范围**： 值为Critical、Major、Minor、Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示 **默认取值**： 不涉及。
    * eventUser  **参数解释**： 上报事件监控数据时用户的名称，也可为projectID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 正则匹配：由零个或多个字母、数字、下划线、横线、斜杠、空格、@ 符号或点号组成的字符串。 **默认取值**： 不涉及。
    * eventState  **参数解释**： 事件的状态。 **约束限制**： 不涉及。 **取值范围**： 值为normal、warning、incident。 - normal: 正常 - warning: 警告 - incident: 故障 **默认取值**： 不涉及。
    * from  **参数解释**： 查询数据起始时间，UNIX时间戳，单位毫秒。例如：1605952700911。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询数据截止时间，UNIX时间戳，单位毫秒。 **约束限制**： 其中from必须小于to。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * start  **参数解释**： 分页起始值。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * limit  **参数解释**： 单次查询的条数限制，用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 大小为[1,100]的整数 **默认取值**： 100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'eventType' => 'event_type',
            'subEventType' => 'sub_event_type',
            'eventSource' => 'event_source',
            'eventLevel' => 'event_level',
            'eventUser' => 'event_user',
            'eventState' => 'event_state',
            'from' => 'from',
            'to' => 'to',
            'start' => 'start',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  **参数解释**： 事件名称，值为系统产生的事件名称或用户自定义上报的事件名称。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符。 **默认取值**： 不涉及。
    * eventType  **参数解释**： 事件类型。 **约束限制**： 不涉及。 **取值范围**： 值为EVENT.SYS或EVENT.CUSTOM。 - EVENT.SYS：系统事件。 - EVENT.CUSTOM：自定义事件。 **默认取值**： 不涉及。
    * subEventType  **参数解释**： 事件子类。 **约束限制**： 不涉及。 **取值范围**： 枚举类型 - SUB_EVENT.OPS: 运维事件 - SUB_EVENT.PLAN: 计划事件 - SUB_EVENT.CUSTOM: 自定义事件 **默认取值**： 不涉及。
    * eventSource  **参数解释**： 事件来源，取值为各云服务的命名空间。云服务的命名空间请参考“[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)”。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。 正则匹配：以字母开头，中间有一个点，包含字母、数字、下划线的字符串。 **默认取值**： 不涉及。
    * eventLevel  **参数解释**： 事件的级别。 **约束限制**： 不涉及。 **取值范围**： 值为Critical、Major、Minor、Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示 **默认取值**： 不涉及。
    * eventUser  **参数解释**： 上报事件监控数据时用户的名称，也可为projectID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 正则匹配：由零个或多个字母、数字、下划线、横线、斜杠、空格、@ 符号或点号组成的字符串。 **默认取值**： 不涉及。
    * eventState  **参数解释**： 事件的状态。 **约束限制**： 不涉及。 **取值范围**： 值为normal、warning、incident。 - normal: 正常 - warning: 警告 - incident: 故障 **默认取值**： 不涉及。
    * from  **参数解释**： 查询数据起始时间，UNIX时间戳，单位毫秒。例如：1605952700911。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询数据截止时间，UNIX时间戳，单位毫秒。 **约束限制**： 其中from必须小于to。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * start  **参数解释**： 分页起始值。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * limit  **参数解释**： 单次查询的条数限制，用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 大小为[1,100]的整数 **默认取值**： 100
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'eventType' => 'setEventType',
            'subEventType' => 'setSubEventType',
            'eventSource' => 'setEventSource',
            'eventLevel' => 'setEventLevel',
            'eventUser' => 'setEventUser',
            'eventState' => 'setEventState',
            'from' => 'setFrom',
            'to' => 'setTo',
            'start' => 'setStart',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  **参数解释**： 事件名称，值为系统产生的事件名称或用户自定义上报的事件名称。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符。 **默认取值**： 不涉及。
    * eventType  **参数解释**： 事件类型。 **约束限制**： 不涉及。 **取值范围**： 值为EVENT.SYS或EVENT.CUSTOM。 - EVENT.SYS：系统事件。 - EVENT.CUSTOM：自定义事件。 **默认取值**： 不涉及。
    * subEventType  **参数解释**： 事件子类。 **约束限制**： 不涉及。 **取值范围**： 枚举类型 - SUB_EVENT.OPS: 运维事件 - SUB_EVENT.PLAN: 计划事件 - SUB_EVENT.CUSTOM: 自定义事件 **默认取值**： 不涉及。
    * eventSource  **参数解释**： 事件来源，取值为各云服务的命名空间。云服务的命名空间请参考“[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)”。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。 正则匹配：以字母开头，中间有一个点，包含字母、数字、下划线的字符串。 **默认取值**： 不涉及。
    * eventLevel  **参数解释**： 事件的级别。 **约束限制**： 不涉及。 **取值范围**： 值为Critical、Major、Minor、Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示 **默认取值**： 不涉及。
    * eventUser  **参数解释**： 上报事件监控数据时用户的名称，也可为projectID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 正则匹配：由零个或多个字母、数字、下划线、横线、斜杠、空格、@ 符号或点号组成的字符串。 **默认取值**： 不涉及。
    * eventState  **参数解释**： 事件的状态。 **约束限制**： 不涉及。 **取值范围**： 值为normal、warning、incident。 - normal: 正常 - warning: 警告 - incident: 故障 **默认取值**： 不涉及。
    * from  **参数解释**： 查询数据起始时间，UNIX时间戳，单位毫秒。例如：1605952700911。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * to  **参数解释**： 查询数据截止时间，UNIX时间戳，单位毫秒。 **约束限制**： 其中from必须小于to。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * start  **参数解释**： 分页起始值。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * limit  **参数解释**： 单次查询的条数限制，用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 大小为[1,100]的整数 **默认取值**： 100
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'eventType' => 'getEventType',
            'subEventType' => 'getSubEventType',
            'eventSource' => 'getEventSource',
            'eventLevel' => 'getEventLevel',
            'eventUser' => 'getEventUser',
            'eventState' => 'getEventState',
            'from' => 'getFrom',
            'to' => 'getTo',
            'start' => 'getStart',
            'limit' => 'getLimit'
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
    const EVENT_TYPE_EVENT_SYS = 'EVENT.SYS';
    const EVENT_TYPE_EVENT_CUSTOM = 'EVENT.CUSTOM';
    const SUB_EVENT_TYPE_SUB_EVENT_OPS = 'SUB_EVENT.OPS';
    const SUB_EVENT_TYPE_SUB_EVENT_PLAN = 'SUB_EVENT.PLAN';
    const SUB_EVENT_TYPE_SUB_EVENT_CUSTOM = 'SUB_EVENT.CUSTOM';
    const EVENT_LEVEL_CRITICAL = 'Critical';
    const EVENT_LEVEL_MAJOR = 'Major';
    const EVENT_LEVEL_INFO = 'Info';
    const EVENT_LEVEL_MINOR = 'Minor';
    const EVENT_STATE_NORMAL = 'normal';
    const EVENT_STATE_WARNING = 'warning';
    const EVENT_STATE_INCIDENT = 'incident';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_EVENT_SYS,
            self::EVENT_TYPE_EVENT_CUSTOM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubEventTypeAllowableValues()
    {
        return [
            self::SUB_EVENT_TYPE_SUB_EVENT_OPS,
            self::SUB_EVENT_TYPE_SUB_EVENT_PLAN,
            self::SUB_EVENT_TYPE_SUB_EVENT_CUSTOM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventLevelAllowableValues()
    {
        return [
            self::EVENT_LEVEL_CRITICAL,
            self::EVENT_LEVEL_MAJOR,
            self::EVENT_LEVEL_INFO,
            self::EVENT_LEVEL_MINOR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventStateAllowableValues()
    {
        return [
            self::EVENT_STATE_NORMAL,
            self::EVENT_STATE_WARNING,
            self::EVENT_STATE_INCIDENT,
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
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['subEventType'] = isset($data['subEventType']) ? $data['subEventType'] : null;
        $this->container['eventSource'] = isset($data['eventSource']) ? $data['eventSource'] : null;
        $this->container['eventLevel'] = isset($data['eventLevel']) ? $data['eventLevel'] : null;
        $this->container['eventUser'] = isset($data['eventUser']) ? $data['eventUser'] : null;
        $this->container['eventState'] = isset($data['eventState']) ? $data['eventState'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
            if ((mb_strlen($this->container['eventName']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
            $allowedValues = $this->getEventTypeAllowableValues();
                if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSubEventTypeAllowableValues();
                if (!is_null($this->container['subEventType']) && !in_array($this->container['subEventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subEventType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['eventSource']) && (mb_strlen($this->container['eventSource']) > 32)) {
                $invalidProperties[] = "invalid value for 'eventSource', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['eventSource']) && (mb_strlen($this->container['eventSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventSource', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getEventLevelAllowableValues();
                if (!is_null($this->container['eventLevel']) && !in_array($this->container['eventLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['eventUser']) && (mb_strlen($this->container['eventUser']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventUser', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventUser']) && (mb_strlen($this->container['eventUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventUser', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getEventStateAllowableValues();
                if (!is_null($this->container['eventState']) && !in_array($this->container['eventState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['from']) && ($this->container['from'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 1111111111111)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 1111111111111.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 1111111111111)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 1111111111111.";
            }
            if (!is_null($this->container['start']) && ($this->container['start'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'start', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['start']) && ($this->container['start'] < 0)) {
                $invalidProperties[] = "invalid value for 'start', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets eventName
    *  **参数解释**： 事件名称，值为系统产生的事件名称或用户自定义上报的事件名称。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName **参数解释**： 事件名称，值为系统产生的事件名称或用户自定义上报的事件名称。 **约束限制**： 不涉及。 **取值范围**： 长度为[1,64]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**： 事件类型。 **约束限制**： 不涉及。 **取值范围**： 值为EVENT.SYS或EVENT.CUSTOM。 - EVENT.SYS：系统事件。 - EVENT.CUSTOM：自定义事件。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType **参数解释**： 事件类型。 **约束限制**： 不涉及。 **取值范围**： 值为EVENT.SYS或EVENT.CUSTOM。 - EVENT.SYS：系统事件。 - EVENT.CUSTOM：自定义事件。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets subEventType
    *  **参数解释**： 事件子类。 **约束限制**： 不涉及。 **取值范围**： 枚举类型 - SUB_EVENT.OPS: 运维事件 - SUB_EVENT.PLAN: 计划事件 - SUB_EVENT.CUSTOM: 自定义事件 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSubEventType()
    {
        return $this->container['subEventType'];
    }

    /**
    * Sets subEventType
    *
    * @param string|null $subEventType **参数解释**： 事件子类。 **约束限制**： 不涉及。 **取值范围**： 枚举类型 - SUB_EVENT.OPS: 运维事件 - SUB_EVENT.PLAN: 计划事件 - SUB_EVENT.CUSTOM: 自定义事件 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSubEventType($subEventType)
    {
        $this->container['subEventType'] = $subEventType;
        return $this;
    }

    /**
    * Gets eventSource
    *  **参数解释**： 事件来源，取值为各云服务的命名空间。云服务的命名空间请参考“[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)”。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。 正则匹配：以字母开头，中间有一个点，包含字母、数字、下划线的字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEventSource()
    {
        return $this->container['eventSource'];
    }

    /**
    * Sets eventSource
    *
    * @param string|null $eventSource **参数解释**： 事件来源，取值为各云服务的命名空间。云服务的命名空间请参考“[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)”。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,32]个字符。 正则匹配：以字母开头，中间有一个点，包含字母、数字、下划线的字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEventSource($eventSource)
    {
        $this->container['eventSource'] = $eventSource;
        return $this;
    }

    /**
    * Gets eventLevel
    *  **参数解释**： 事件的级别。 **约束限制**： 不涉及。 **取值范围**： 值为Critical、Major、Minor、Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEventLevel()
    {
        return $this->container['eventLevel'];
    }

    /**
    * Sets eventLevel
    *
    * @param string|null $eventLevel **参数解释**： 事件的级别。 **约束限制**： 不涉及。 **取值范围**： 值为Critical、Major、Minor、Info。 - Critical: 紧急 - Major: 重要 - Minor: 次要 - Info: 提示 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEventLevel($eventLevel)
    {
        $this->container['eventLevel'] = $eventLevel;
        return $this;
    }

    /**
    * Gets eventUser
    *  **参数解释**： 上报事件监控数据时用户的名称，也可为projectID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 正则匹配：由零个或多个字母、数字、下划线、横线、斜杠、空格、@ 符号或点号组成的字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEventUser()
    {
        return $this->container['eventUser'];
    }

    /**
    * Sets eventUser
    *
    * @param string|null $eventUser **参数解释**： 上报事件监控数据时用户的名称，也可为projectID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,64]个字符。 正则匹配：由零个或多个字母、数字、下划线、横线、斜杠、空格、@ 符号或点号组成的字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEventUser($eventUser)
    {
        $this->container['eventUser'] = $eventUser;
        return $this;
    }

    /**
    * Gets eventState
    *  **参数解释**： 事件的状态。 **约束限制**： 不涉及。 **取值范围**： 值为normal、warning、incident。 - normal: 正常 - warning: 警告 - incident: 故障 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEventState()
    {
        return $this->container['eventState'];
    }

    /**
    * Sets eventState
    *
    * @param string|null $eventState **参数解释**： 事件的状态。 **约束限制**： 不涉及。 **取值范围**： 值为normal、warning、incident。 - normal: 正常 - warning: 警告 - incident: 故障 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEventState($eventState)
    {
        $this->container['eventState'] = $eventState;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释**： 查询数据起始时间，UNIX时间戳，单位毫秒。例如：1605952700911。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $from **参数解释**： 查询数据起始时间，UNIX时间戳，单位毫秒。例如：1605952700911。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 查询数据截止时间，UNIX时间戳，单位毫秒。 **约束限制**： 其中from必须小于to。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $to **参数解释**： 查询数据截止时间，UNIX时间戳，单位毫秒。 **约束限制**： 其中from必须小于to。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets start
    *  **参数解释**： 分页起始值。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start **参数解释**： 分页起始值。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 单次查询的条数限制，用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 大小为[1,100]的整数 **默认取值**： 100
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
    * @param int|null $limit **参数解释**： 单次查询的条数限制，用于限制结果数据条数。 **约束限制**： 不涉及。 **取值范围**： 大小为[1,100]的整数 **默认取值**： 100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

