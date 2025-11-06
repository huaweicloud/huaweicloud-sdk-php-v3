<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnableOneClickAlarmRequestBodyOneClickUpdateAlarms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnableOneClickAlarmRequestBody_one_click_update_alarms';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警规则id。     **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22个数字或字母。           **默认取值**： 不涉及。
    * name  **参数解释**： 此字段已废弃。告警名称。      **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1，128]个字符。           **默认取值**： 不涉及。
    * description  **参数解释**： 此字段已废弃。告警描述。     **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。        **默认取值**： 不涉及。
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * policies  告警策略
    * resources  此字段已废弃。资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  **参数解释**： 此字段已废弃。告警规则类型 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - ALL_INSTANCE：全部资源指标告警。 - RESOURCE_GROUP：资源分组指标告警。 - MULTI_INSTANCE：指定资源指标告警。 - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：健康检查告警。 **默认取值**： 不涉及。
    * enabled  **参数解释**： 是否开启告警规则。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * notificationEnabled  **参数解释**： 是否开启告警通知。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * alarmNotifications  **参数解释**： 触发告警时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * okNotifications  **参数解释**： 告警恢复时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * notificationBeginTime  **参数解释**： 告警通知开启时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationEndTime  **参数解释**： 告警通知关闭时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationManner  **参数解释**： 此字段已废弃。通知方式。NOTIFICATION_POLICY表示通知策略，NOTIFICATION_GROUP表示通知组，TOPIC_SUBSCRIPTION表示主题订阅。一键告警是否开启告警通知，以外层notification_manner参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： 枚举值：NOTIFICATION_POLICY、NOTIFICATION_GROUP、TOPIC_SUBSCRIPTION。长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationPolicyIds  **参数解释**： 此字段已废弃。关联的通知策略ID列表。一键告警是否开启告警通知，以外层notification_policy_ids参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： ^([a-z]|[A-Z]|[0-9]|-){2,64}$。长度为[2,64]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'namespace' => 'string',
            'policies' => '\HuaweiCloud\SDK\Ces\V2\Model\Policy[]',
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\Dimension[][]',
            'type' => 'string',
            'enabled' => 'bool',
            'notificationEnabled' => 'bool',
            'alarmNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'okNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'notificationBeginTime' => 'string',
            'notificationEndTime' => 'string',
            'notificationManner' => 'string',
            'notificationPolicyIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警规则id。     **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22个数字或字母。           **默认取值**： 不涉及。
    * name  **参数解释**： 此字段已废弃。告警名称。      **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1，128]个字符。           **默认取值**： 不涉及。
    * description  **参数解释**： 此字段已废弃。告警描述。     **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。        **默认取值**： 不涉及。
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * policies  告警策略
    * resources  此字段已废弃。资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  **参数解释**： 此字段已废弃。告警规则类型 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - ALL_INSTANCE：全部资源指标告警。 - RESOURCE_GROUP：资源分组指标告警。 - MULTI_INSTANCE：指定资源指标告警。 - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：健康检查告警。 **默认取值**： 不涉及。
    * enabled  **参数解释**： 是否开启告警规则。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * notificationEnabled  **参数解释**： 是否开启告警通知。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * alarmNotifications  **参数解释**： 触发告警时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * okNotifications  **参数解释**： 告警恢复时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * notificationBeginTime  **参数解释**： 告警通知开启时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationEndTime  **参数解释**： 告警通知关闭时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationManner  **参数解释**： 此字段已废弃。通知方式。NOTIFICATION_POLICY表示通知策略，NOTIFICATION_GROUP表示通知组，TOPIC_SUBSCRIPTION表示主题订阅。一键告警是否开启告警通知，以外层notification_manner参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： 枚举值：NOTIFICATION_POLICY、NOTIFICATION_GROUP、TOPIC_SUBSCRIPTION。长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationPolicyIds  **参数解释**： 此字段已废弃。关联的通知策略ID列表。一键告警是否开启告警通知，以外层notification_policy_ids参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： ^([a-z]|[A-Z]|[0-9]|-){2,64}$。长度为[2,64]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'name' => null,
        'description' => null,
        'namespace' => null,
        'policies' => null,
        'resources' => null,
        'type' => null,
        'enabled' => null,
        'notificationEnabled' => null,
        'alarmNotifications' => null,
        'okNotifications' => null,
        'notificationBeginTime' => null,
        'notificationEndTime' => null,
        'notificationManner' => null,
        'notificationPolicyIds' => null
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
    * alarmId  **参数解释**： 告警规则id。     **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22个数字或字母。           **默认取值**： 不涉及。
    * name  **参数解释**： 此字段已废弃。告警名称。      **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1，128]个字符。           **默认取值**： 不涉及。
    * description  **参数解释**： 此字段已废弃。告警描述。     **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。        **默认取值**： 不涉及。
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * policies  告警策略
    * resources  此字段已废弃。资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  **参数解释**： 此字段已废弃。告警规则类型 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - ALL_INSTANCE：全部资源指标告警。 - RESOURCE_GROUP：资源分组指标告警。 - MULTI_INSTANCE：指定资源指标告警。 - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：健康检查告警。 **默认取值**： 不涉及。
    * enabled  **参数解释**： 是否开启告警规则。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * notificationEnabled  **参数解释**： 是否开启告警通知。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * alarmNotifications  **参数解释**： 触发告警时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * okNotifications  **参数解释**： 告警恢复时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * notificationBeginTime  **参数解释**： 告警通知开启时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationEndTime  **参数解释**： 告警通知关闭时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationManner  **参数解释**： 此字段已废弃。通知方式。NOTIFICATION_POLICY表示通知策略，NOTIFICATION_GROUP表示通知组，TOPIC_SUBSCRIPTION表示主题订阅。一键告警是否开启告警通知，以外层notification_manner参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： 枚举值：NOTIFICATION_POLICY、NOTIFICATION_GROUP、TOPIC_SUBSCRIPTION。长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationPolicyIds  **参数解释**： 此字段已废弃。关联的通知策略ID列表。一键告警是否开启告警通知，以外层notification_policy_ids参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： ^([a-z]|[A-Z]|[0-9]|-){2,64}$。长度为[2,64]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarm_id',
            'name' => 'name',
            'description' => 'description',
            'namespace' => 'namespace',
            'policies' => 'policies',
            'resources' => 'resources',
            'type' => 'type',
            'enabled' => 'enabled',
            'notificationEnabled' => 'notification_enabled',
            'alarmNotifications' => 'alarm_notifications',
            'okNotifications' => 'ok_notifications',
            'notificationBeginTime' => 'notification_begin_time',
            'notificationEndTime' => 'notification_end_time',
            'notificationManner' => 'notification_manner',
            'notificationPolicyIds' => 'notification_policy_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  **参数解释**： 告警规则id。     **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22个数字或字母。           **默认取值**： 不涉及。
    * name  **参数解释**： 此字段已废弃。告警名称。      **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1，128]个字符。           **默认取值**： 不涉及。
    * description  **参数解释**： 此字段已废弃。告警描述。     **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。        **默认取值**： 不涉及。
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * policies  告警策略
    * resources  此字段已废弃。资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  **参数解释**： 此字段已废弃。告警规则类型 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - ALL_INSTANCE：全部资源指标告警。 - RESOURCE_GROUP：资源分组指标告警。 - MULTI_INSTANCE：指定资源指标告警。 - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：健康检查告警。 **默认取值**： 不涉及。
    * enabled  **参数解释**： 是否开启告警规则。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * notificationEnabled  **参数解释**： 是否开启告警通知。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * alarmNotifications  **参数解释**： 触发告警时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * okNotifications  **参数解释**： 告警恢复时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * notificationBeginTime  **参数解释**： 告警通知开启时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationEndTime  **参数解释**： 告警通知关闭时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationManner  **参数解释**： 此字段已废弃。通知方式。NOTIFICATION_POLICY表示通知策略，NOTIFICATION_GROUP表示通知组，TOPIC_SUBSCRIPTION表示主题订阅。一键告警是否开启告警通知，以外层notification_manner参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： 枚举值：NOTIFICATION_POLICY、NOTIFICATION_GROUP、TOPIC_SUBSCRIPTION。长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationPolicyIds  **参数解释**： 此字段已废弃。关联的通知策略ID列表。一键告警是否开启告警通知，以外层notification_policy_ids参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： ^([a-z]|[A-Z]|[0-9]|-){2,64}$。长度为[2,64]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'name' => 'setName',
            'description' => 'setDescription',
            'namespace' => 'setNamespace',
            'policies' => 'setPolicies',
            'resources' => 'setResources',
            'type' => 'setType',
            'enabled' => 'setEnabled',
            'notificationEnabled' => 'setNotificationEnabled',
            'alarmNotifications' => 'setAlarmNotifications',
            'okNotifications' => 'setOkNotifications',
            'notificationBeginTime' => 'setNotificationBeginTime',
            'notificationEndTime' => 'setNotificationEndTime',
            'notificationManner' => 'setNotificationManner',
            'notificationPolicyIds' => 'setNotificationPolicyIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  **参数解释**： 告警规则id。     **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22个数字或字母。           **默认取值**： 不涉及。
    * name  **参数解释**： 此字段已废弃。告警名称。      **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1，128]个字符。           **默认取值**： 不涉及。
    * description  **参数解释**： 此字段已废弃。告警描述。     **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。        **默认取值**： 不涉及。
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * policies  告警策略
    * resources  此字段已废弃。资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  **参数解释**： 此字段已废弃。告警规则类型 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - ALL_INSTANCE：全部资源指标告警。 - RESOURCE_GROUP：资源分组指标告警。 - MULTI_INSTANCE：指定资源指标告警。 - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：健康检查告警。 **默认取值**： 不涉及。
    * enabled  **参数解释**： 是否开启告警规则。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * notificationEnabled  **参数解释**： 是否开启告警通知。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    * alarmNotifications  **参数解释**： 触发告警时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * okNotifications  **参数解释**： 告警恢复时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    * notificationBeginTime  **参数解释**： 告警通知开启时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationEndTime  **参数解释**： 告警通知关闭时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationManner  **参数解释**： 此字段已废弃。通知方式。NOTIFICATION_POLICY表示通知策略，NOTIFICATION_GROUP表示通知组，TOPIC_SUBSCRIPTION表示主题订阅。一键告警是否开启告警通知，以外层notification_manner参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： 枚举值：NOTIFICATION_POLICY、NOTIFICATION_GROUP、TOPIC_SUBSCRIPTION。长度为[1,64]个字符。           **默认取值**： 不涉及。
    * notificationPolicyIds  **参数解释**： 此字段已废弃。关联的通知策略ID列表。一键告警是否开启告警通知，以外层notification_policy_ids参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： ^([a-z]|[A-Z]|[0-9]|-){2,64}$。长度为[2,64]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'name' => 'getName',
            'description' => 'getDescription',
            'namespace' => 'getNamespace',
            'policies' => 'getPolicies',
            'resources' => 'getResources',
            'type' => 'getType',
            'enabled' => 'getEnabled',
            'notificationEnabled' => 'getNotificationEnabled',
            'alarmNotifications' => 'getAlarmNotifications',
            'okNotifications' => 'getOkNotifications',
            'notificationBeginTime' => 'getNotificationBeginTime',
            'notificationEndTime' => 'getNotificationEndTime',
            'notificationManner' => 'getNotificationManner',
            'notificationPolicyIds' => 'getNotificationPolicyIds'
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
    const TYPE_EVENT_SYS = 'EVENT.SYS';
    const TYPE_EVENT_CUSTOM = 'EVENT.CUSTOM';
    const TYPE_DNS_HEALTH_CHECK = 'DNSHealthCheck';
    const TYPE_RESOURCE_GROUP = 'RESOURCE_GROUP';
    const TYPE_MULTI_INSTANCE = 'MULTI_INSTANCE';
    const TYPE_ALL_INSTANCE = 'ALL_INSTANCE';
    const NOTIFICATION_MANNER_NOTIFICATION_POLICY = 'NOTIFICATION_POLICY';
    const NOTIFICATION_MANNER_NOTIFICATION_GROUP = 'NOTIFICATION_GROUP';
    const NOTIFICATION_MANNER_TOPIC_SUBSCRIPTION = 'TOPIC_SUBSCRIPTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EVENT_SYS,
            self::TYPE_EVENT_CUSTOM,
            self::TYPE_DNS_HEALTH_CHECK,
            self::TYPE_RESOURCE_GROUP,
            self::TYPE_MULTI_INSTANCE,
            self::TYPE_ALL_INSTANCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotificationMannerAllowableValues()
    {
        return [
            self::NOTIFICATION_MANNER_NOTIFICATION_POLICY,
            self::NOTIFICATION_MANNER_NOTIFICATION_GROUP,
            self::NOTIFICATION_MANNER_TOPIC_SUBSCRIPTION,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['notificationEnabled'] = isset($data['notificationEnabled']) ? $data['notificationEnabled'] : null;
        $this->container['alarmNotifications'] = isset($data['alarmNotifications']) ? $data['alarmNotifications'] : null;
        $this->container['okNotifications'] = isset($data['okNotifications']) ? $data['okNotifications'] : null;
        $this->container['notificationBeginTime'] = isset($data['notificationBeginTime']) ? $data['notificationBeginTime'] : null;
        $this->container['notificationEndTime'] = isset($data['notificationEndTime']) ? $data['notificationEndTime'] : null;
        $this->container['notificationManner'] = isset($data['notificationManner']) ? $data['notificationManner'] : null;
        $this->container['notificationPolicyIds'] = isset($data['notificationPolicyIds']) ? $data['notificationPolicyIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alarmId']) && !preg_match("/^al([0-9A-Za-z]){22}$/", $this->container['alarmId'])) {
                $invalidProperties[] = "invalid value for 'alarmId', must be conform to the pattern /^al([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && !preg_match("/^(EVENT.SYS|EVENT.CUSTOM|DNSHealthCheck|RESOURCE_GROUP|MULTI_INSTANCE|ALL_INSTANCE)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(EVENT.SYS|EVENT.CUSTOM|DNSHealthCheck|RESOURCE_GROUP|MULTI_INSTANCE|ALL_INSTANCE)$/.";
            }
            if (!is_null($this->container['notificationBeginTime']) && (mb_strlen($this->container['notificationBeginTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationBeginTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationBeginTime']) && (mb_strlen($this->container['notificationBeginTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationBeginTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationBeginTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['notificationBeginTime'])) {
                $invalidProperties[] = "invalid value for 'notificationBeginTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
            }
            if (!is_null($this->container['notificationEndTime']) && (mb_strlen($this->container['notificationEndTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationEndTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationEndTime']) && (mb_strlen($this->container['notificationEndTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationEndTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationEndTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['notificationEndTime'])) {
                $invalidProperties[] = "invalid value for 'notificationEndTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
            }
            $allowedValues = $this->getNotificationMannerAllowableValues();
                if (!is_null($this->container['notificationManner']) && !in_array($this->container['notificationManner'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationManner', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['notificationManner']) && (mb_strlen($this->container['notificationManner']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationManner', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationManner']) && (mb_strlen($this->container['notificationManner']) < 0)) {
                $invalidProperties[] = "invalid value for 'notificationManner', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： 告警规则id。     **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22个数字或字母。           **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId **参数解释**： 告警规则id。     **约束限制**： 不涉及。 **取值范围**： 以al开头，后跟22个数字或字母。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 此字段已废弃。告警名称。      **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1，128]个字符。           **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 此字段已废弃。告警名称。      **约束限制**： 不涉及。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度[1，128]个字符。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 此字段已废弃。告警描述。     **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。        **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 此字段已废弃。告警描述。     **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。        **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets namespace
    *  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
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
    * @param string|null $namespace 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets policies
    *  告警策略
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Policy[]|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Policy[]|null $policies 告警策略
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
        return $this;
    }

    /**
    * Gets resources
    *  此字段已废弃。资源列表，关联资源需要使用查询告警规则资源接口获取
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Dimension[][]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Dimension[][]|null $resources 此字段已废弃。资源列表，关联资源需要使用查询告警规则资源接口获取
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 此字段已废弃。告警规则类型 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - ALL_INSTANCE：全部资源指标告警。 - RESOURCE_GROUP：资源分组指标告警。 - MULTI_INSTANCE：指定资源指标告警。 - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：健康检查告警。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 此字段已废弃。告警规则类型 **约束限制**： 不涉及。 **取值范围**： 枚举值。 - ALL_INSTANCE：全部资源指标告警。 - RESOURCE_GROUP：资源分组指标告警。 - MULTI_INSTANCE：指定资源指标告警。 - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：健康检查告警。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**： 是否开启告警规则。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**： 是否开启告警规则。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets notificationEnabled
    *  **参数解释**： 是否开启告警通知。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    *
    * @return bool|null
    */
    public function getNotificationEnabled()
    {
        return $this->container['notificationEnabled'];
    }

    /**
    * Sets notificationEnabled
    *
    * @param bool|null $notificationEnabled **参数解释**： 是否开启告警通知。     **约束限制**： 不涉及。 **取值范围**： 布尔值。 - true:开启。 - false:关闭。 **默认取值**： true
    *
    * @return $this
    */
    public function setNotificationEnabled($notificationEnabled)
    {
        $this->container['notificationEnabled'] = $notificationEnabled;
        return $this;
    }

    /**
    * Gets alarmNotifications
    *  **参数解释**： 触发告警时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null
    */
    public function getAlarmNotifications()
    {
        return $this->container['alarmNotifications'];
    }

    /**
    * Sets alarmNotifications
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $alarmNotifications **参数解释**： 触发告警时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    *
    * @return $this
    */
    public function setAlarmNotifications($alarmNotifications)
    {
        $this->container['alarmNotifications'] = $alarmNotifications;
        return $this;
    }

    /**
    * Gets okNotifications
    *  **参数解释**： 告警恢复时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null
    */
    public function getOkNotifications()
    {
        return $this->container['okNotifications'];
    }

    /**
    * Sets okNotifications
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $okNotifications **参数解释**： 告警恢复时，通知组/主题订阅的信息。 **约束限制**： 包含的通知信息的数量最多为10个，最少为0个。
    *
    * @return $this
    */
    public function setOkNotifications($okNotifications)
    {
        $this->container['okNotifications'] = $okNotifications;
        return $this;
    }

    /**
    * Gets notificationBeginTime
    *  **参数解释**： 告警通知开启时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getNotificationBeginTime()
    {
        return $this->container['notificationBeginTime'];
    }

    /**
    * Sets notificationBeginTime
    *
    * @param string|null $notificationBeginTime **参数解释**： 告警通知开启时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNotificationBeginTime($notificationBeginTime)
    {
        $this->container['notificationBeginTime'] = $notificationBeginTime;
        return $this;
    }

    /**
    * Gets notificationEndTime
    *  **参数解释**： 告警通知关闭时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getNotificationEndTime()
    {
        return $this->container['notificationEndTime'];
    }

    /**
    * Sets notificationEndTime
    *
    * @param string|null $notificationEndTime **参数解释**： 告警通知关闭时间。    **约束限制**： 不涉及。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNotificationEndTime($notificationEndTime)
    {
        $this->container['notificationEndTime'] = $notificationEndTime;
        return $this;
    }

    /**
    * Gets notificationManner
    *  **参数解释**： 此字段已废弃。通知方式。NOTIFICATION_POLICY表示通知策略，NOTIFICATION_GROUP表示通知组，TOPIC_SUBSCRIPTION表示主题订阅。一键告警是否开启告警通知，以外层notification_manner参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： 枚举值：NOTIFICATION_POLICY、NOTIFICATION_GROUP、TOPIC_SUBSCRIPTION。长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getNotificationManner()
    {
        return $this->container['notificationManner'];
    }

    /**
    * Sets notificationManner
    *
    * @param string|null $notificationManner **参数解释**： 此字段已废弃。通知方式。NOTIFICATION_POLICY表示通知策略，NOTIFICATION_GROUP表示通知组，TOPIC_SUBSCRIPTION表示主题订阅。一键告警是否开启告警通知，以外层notification_manner参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： 枚举值：NOTIFICATION_POLICY、NOTIFICATION_GROUP、TOPIC_SUBSCRIPTION。长度为[1,64]个字符。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNotificationManner($notificationManner)
    {
        $this->container['notificationManner'] = $notificationManner;
        return $this;
    }

    /**
    * Gets notificationPolicyIds
    *  **参数解释**： 此字段已废弃。关联的通知策略ID列表。一键告警是否开启告警通知，以外层notification_policy_ids参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： ^([a-z]|[A-Z]|[0-9]|-){2,64}$。长度为[2,64]个字符。           **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getNotificationPolicyIds()
    {
        return $this->container['notificationPolicyIds'];
    }

    /**
    * Sets notificationPolicyIds
    *
    * @param string[]|null $notificationPolicyIds **参数解释**： 此字段已废弃。关联的通知策略ID列表。一键告警是否开启告警通知，以外层notification_policy_ids参数为准，内层字段废弃。 **约束限制**： 不涉及。 **取值范围**： ^([a-z]|[A-Z]|[0-9]|-){2,64}$。长度为[2,64]个字符。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNotificationPolicyIds($notificationPolicyIds)
    {
        $this->container['notificationPolicyIds'] = $notificationPolicyIds;
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

