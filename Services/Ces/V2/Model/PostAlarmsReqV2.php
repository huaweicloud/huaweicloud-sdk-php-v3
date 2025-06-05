<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostAlarmsReqV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostAlarmsReqV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceGroupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * resources  资源列表，告警规则类型为全部资源、资源分组时，资源维度值传空；告警规则类型为指定资源时，资源维度值必填，可以同时指定监控多个资源。
    * policies  告警策略，当alarm_template_id字段为空时必填，不为空时不填
    * type  type
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID
    * enabled  是否开启告警规则。true:开启，false:关闭。
    * notificationEnabled  是否开启告警通知。true:开启，false:关闭。
    * alarmTemplateId  告警规则关联告警模板ID，如果传了，告警规则关联的策略会和告警模板策略联动变化
    * tags  租户标签列表
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则创建时需要指明为产品层级规则，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'namespace' => 'string',
            'resourceGroupId' => 'string',
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\Dimension[][]',
            'policies' => '\HuaweiCloud\SDK\Ces\V2\Model\Policy[]',
            'type' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmType',
            'alarmNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'okNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'notificationBeginTime' => 'string',
            'notificationEndTime' => 'string',
            'enterpriseProjectId' => 'string',
            'enabled' => 'bool',
            'notificationEnabled' => 'bool',
            'alarmTemplateId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceTag[]',
            'productName' => 'string',
            'resourceLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceGroupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * resources  资源列表，告警规则类型为全部资源、资源分组时，资源维度值传空；告警规则类型为指定资源时，资源维度值必填，可以同时指定监控多个资源。
    * policies  告警策略，当alarm_template_id字段为空时必填，不为空时不填
    * type  type
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID
    * enabled  是否开启告警规则。true:开启，false:关闭。
    * notificationEnabled  是否开启告警通知。true:开启，false:关闭。
    * alarmTemplateId  告警规则关联告警模板ID，如果传了，告警规则关联的策略会和告警模板策略联动变化
    * tags  租户标签列表
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则创建时需要指明为产品层级规则，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'namespace' => null,
        'resourceGroupId' => null,
        'resources' => null,
        'policies' => null,
        'type' => null,
        'alarmNotifications' => null,
        'okNotifications' => null,
        'notificationBeginTime' => null,
        'notificationEndTime' => null,
        'enterpriseProjectId' => null,
        'enabled' => null,
        'notificationEnabled' => null,
        'alarmTemplateId' => null,
        'tags' => null,
        'productName' => null,
        'resourceLevel' => null
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
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceGroupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * resources  资源列表，告警规则类型为全部资源、资源分组时，资源维度值传空；告警规则类型为指定资源时，资源维度值必填，可以同时指定监控多个资源。
    * policies  告警策略，当alarm_template_id字段为空时必填，不为空时不填
    * type  type
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID
    * enabled  是否开启告警规则。true:开启，false:关闭。
    * notificationEnabled  是否开启告警通知。true:开启，false:关闭。
    * alarmTemplateId  告警规则关联告警模板ID，如果传了，告警规则关联的策略会和告警模板策略联动变化
    * tags  租户标签列表
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则创建时需要指明为产品层级规则，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'namespace' => 'namespace',
            'resourceGroupId' => 'resource_group_id',
            'resources' => 'resources',
            'policies' => 'policies',
            'type' => 'type',
            'alarmNotifications' => 'alarm_notifications',
            'okNotifications' => 'ok_notifications',
            'notificationBeginTime' => 'notification_begin_time',
            'notificationEndTime' => 'notification_end_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enabled' => 'enabled',
            'notificationEnabled' => 'notification_enabled',
            'alarmTemplateId' => 'alarm_template_id',
            'tags' => 'tags',
            'productName' => 'product_name',
            'resourceLevel' => 'resource_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceGroupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * resources  资源列表，告警规则类型为全部资源、资源分组时，资源维度值传空；告警规则类型为指定资源时，资源维度值必填，可以同时指定监控多个资源。
    * policies  告警策略，当alarm_template_id字段为空时必填，不为空时不填
    * type  type
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID
    * enabled  是否开启告警规则。true:开启，false:关闭。
    * notificationEnabled  是否开启告警通知。true:开启，false:关闭。
    * alarmTemplateId  告警规则关联告警模板ID，如果传了，告警规则关联的策略会和告警模板策略联动变化
    * tags  租户标签列表
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则创建时需要指明为产品层级规则，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'namespace' => 'setNamespace',
            'resourceGroupId' => 'setResourceGroupId',
            'resources' => 'setResources',
            'policies' => 'setPolicies',
            'type' => 'setType',
            'alarmNotifications' => 'setAlarmNotifications',
            'okNotifications' => 'setOkNotifications',
            'notificationBeginTime' => 'setNotificationBeginTime',
            'notificationEndTime' => 'setNotificationEndTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enabled' => 'setEnabled',
            'notificationEnabled' => 'setNotificationEnabled',
            'alarmTemplateId' => 'setAlarmTemplateId',
            'tags' => 'setTags',
            'productName' => 'setProductName',
            'resourceLevel' => 'setResourceLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceGroupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * resources  资源列表，告警规则类型为全部资源、资源分组时，资源维度值传空；告警规则类型为指定资源时，资源维度值必填，可以同时指定监控多个资源。
    * policies  告警策略，当alarm_template_id字段为空时必填，不为空时不填
    * type  type
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID
    * enabled  是否开启告警规则。true:开启，false:关闭。
    * notificationEnabled  是否开启告警通知。true:开启，false:关闭。
    * alarmTemplateId  告警规则关联告警模板ID，如果传了，告警规则关联的策略会和告警模板策略联动变化
    * tags  租户标签列表
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则创建时需要指明为产品层级规则，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'namespace' => 'getNamespace',
            'resourceGroupId' => 'getResourceGroupId',
            'resources' => 'getResources',
            'policies' => 'getPolicies',
            'type' => 'getType',
            'alarmNotifications' => 'getAlarmNotifications',
            'okNotifications' => 'getOkNotifications',
            'notificationBeginTime' => 'getNotificationBeginTime',
            'notificationEndTime' => 'getNotificationEndTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enabled' => 'getEnabled',
            'notificationEnabled' => 'getNotificationEnabled',
            'alarmTemplateId' => 'getAlarmTemplateId',
            'tags' => 'getTags',
            'productName' => 'getProductName',
            'resourceLevel' => 'getResourceLevel'
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
    const RESOURCE_LEVEL_PRODUCT = 'product';
    const RESOURCE_LEVEL_DIMENSION = 'dimension';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceLevelAllowableValues()
    {
        return [
            self::RESOURCE_LEVEL_PRODUCT,
            self::RESOURCE_LEVEL_DIMENSION,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['resourceGroupId'] = isset($data['resourceGroupId']) ? $data['resourceGroupId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['alarmNotifications'] = isset($data['alarmNotifications']) ? $data['alarmNotifications'] : null;
        $this->container['okNotifications'] = isset($data['okNotifications']) ? $data['okNotifications'] : null;
        $this->container['notificationBeginTime'] = isset($data['notificationBeginTime']) ? $data['notificationBeginTime'] : null;
        $this->container['notificationEndTime'] = isset($data['notificationEndTime']) ? $data['notificationEndTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['notificationEnabled'] = isset($data['notificationEnabled']) ? $data['notificationEnabled'] : null;
        $this->container['alarmTemplateId'] = isset($data['alarmTemplateId']) ? $data['alarmTemplateId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!preg_match("/^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/.";
            }
            if (!is_null($this->container['resourceGroupId']) && (mb_strlen($this->container['resourceGroupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'resourceGroupId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['resourceGroupId']) && (mb_strlen($this->container['resourceGroupId']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceGroupId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceGroupId']) && !preg_match("/^rg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['resourceGroupId'])) {
                $invalidProperties[] = "invalid value for 'resourceGroupId', must be conform to the pattern /^rg([a-z]|[A-Z]|[0-9]){22}$/.";
            }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['notificationEnabled'] === null) {
            $invalidProperties[] = "'notificationEnabled' can't be null";
        }
            if (!is_null($this->container['alarmTemplateId']) && (mb_strlen($this->container['alarmTemplateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmTemplateId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alarmTemplateId']) && (mb_strlen($this->container['alarmTemplateId']) < 2)) {
                $invalidProperties[] = "invalid value for 'alarmTemplateId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['alarmTemplateId']) && !preg_match("/^at([0-9A-Za-z])+$/", $this->container['alarmTemplateId'])) {
                $invalidProperties[] = "invalid value for 'alarmTemplateId', must be conform to the pattern /^at([0-9A-Za-z])+$/.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 128)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceLevelAllowableValues();
                if (!is_null($this->container['resourceLevel']) && !in_array($this->container['resourceLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceLevel', must be one of '%s'",
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
    * Gets name
    *  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
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
    *  告警描述，长度0-256
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
    * @param string|null $description 告警描述，长度0-256
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
    *  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets resourceGroupId
    *  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    *
    * @return string|null
    */
    public function getResourceGroupId()
    {
        return $this->container['resourceGroupId'];
    }

    /**
    * Sets resourceGroupId
    *
    * @param string|null $resourceGroupId 资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    *
    * @return $this
    */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->container['resourceGroupId'] = $resourceGroupId;
        return $this;
    }

    /**
    * Gets resources
    *  资源列表，告警规则类型为全部资源、资源分组时，资源维度值传空；告警规则类型为指定资源时，资源维度值必填，可以同时指定监控多个资源。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Dimension[][]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Dimension[][] $resources 资源列表，告警规则类型为全部资源、资源分组时，资源维度值传空；告警规则类型为指定资源时，资源维度值必填，可以同时指定监控多个资源。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets policies
    *  告警策略，当alarm_template_id字段为空时必填，不为空时不填
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
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Policy[]|null $policies 告警策略，当alarm_template_id字段为空时必填，不为空时不填
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmType
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmType $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets alarmNotifications
    *  告警触发的动作
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
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $alarmNotifications 告警触发的动作
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
    *  告警恢复触发的动作
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
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $okNotifications 告警恢复触发的动作
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
    *  告警通知开启时间
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
    * @param string|null $notificationBeginTime 告警通知开启时间
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
    *  告警通知关闭时间
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
    * @param string|null $notificationEndTime 告警通知关闭时间
    *
    * @return $this
    */
    public function setNotificationEndTime($notificationEndTime)
    {
        $this->container['notificationEndTime'] = $notificationEndTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enabled
    *  是否开启告警规则。true:开启，false:关闭。
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
    * @param bool $enabled 是否开启告警规则。true:开启，false:关闭。
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
    *  是否开启告警通知。true:开启，false:关闭。
    *
    * @return bool
    */
    public function getNotificationEnabled()
    {
        return $this->container['notificationEnabled'];
    }

    /**
    * Sets notificationEnabled
    *
    * @param bool $notificationEnabled 是否开启告警通知。true:开启，false:关闭。
    *
    * @return $this
    */
    public function setNotificationEnabled($notificationEnabled)
    {
        $this->container['notificationEnabled'] = $notificationEnabled;
        return $this;
    }

    /**
    * Gets alarmTemplateId
    *  告警规则关联告警模板ID，如果传了，告警规则关联的策略会和告警模板策略联动变化
    *
    * @return string|null
    */
    public function getAlarmTemplateId()
    {
        return $this->container['alarmTemplateId'];
    }

    /**
    * Sets alarmTemplateId
    *
    * @param string|null $alarmTemplateId 告警规则关联告警模板ID，如果传了，告警规则关联的策略会和告警模板策略联动变化
    *
    * @return $this
    */
    public function setAlarmTemplateId($alarmTemplateId)
    {
        $this->container['alarmTemplateId'] = $alarmTemplateId;
        return $this;
    }

    /**
    * Gets tags
    *  租户标签列表
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceTag[]|null $tags 租户标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets productName
    *  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets resourceLevel
    *  产品层级跨纬规则创建时需要指明为产品层级规则，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
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
    * @param string|null $resourceLevel 产品层级跨纬规则创建时需要指明为产品层级规则，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @return $this
    */
    public function setResourceLevel($resourceLevel)
    {
        $this->container['resourceLevel'] = $resourceLevel;
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

