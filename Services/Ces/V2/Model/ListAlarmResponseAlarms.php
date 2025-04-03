<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmResponseAlarms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmResponse_alarms';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  告警规则id，以al开头，包含22个数字或字母
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * policies  告警策略
    * resources  资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  type
    * enabled  告警开关
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID，不填时会使用默认的企业项目ID
    * alarmTemplateId  告警规则关联告警模板ID
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  resourceLevel
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'namespace' => 'string',
            'policies' => '\HuaweiCloud\SDK\Ces\V2\Model\Policy[]',
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourcesInListResp[]',
            'type' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmType',
            'enabled' => 'bool',
            'notificationEnabled' => 'bool',
            'alarmNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'okNotifications' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'notificationBeginTime' => 'string',
            'notificationEndTime' => 'string',
            'enterpriseProjectId' => 'string',
            'alarmTemplateId' => 'string',
            'productName' => 'string',
            'resourceLevel' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceLevel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  告警规则id，以al开头，包含22个数字或字母
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * policies  告警策略
    * resources  资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  type
    * enabled  告警开关
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID，不填时会使用默认的企业项目ID
    * alarmTemplateId  告警规则关联告警模板ID
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  resourceLevel
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
        'enterpriseProjectId' => null,
        'alarmTemplateId' => null,
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
    * alarmId  告警规则id，以al开头，包含22个数字或字母
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * policies  告警策略
    * resources  资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  type
    * enabled  告警开关
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID，不填时会使用默认的企业项目ID
    * alarmTemplateId  告警规则关联告警模板ID
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  resourceLevel
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
            'enterpriseProjectId' => 'enterprise_project_id',
            'alarmTemplateId' => 'alarm_template_id',
            'productName' => 'product_name',
            'resourceLevel' => 'resource_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  告警规则id，以al开头，包含22个数字或字母
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * policies  告警策略
    * resources  资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  type
    * enabled  告警开关
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID，不填时会使用默认的企业项目ID
    * alarmTemplateId  告警规则关联告警模板ID
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  resourceLevel
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
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'alarmTemplateId' => 'setAlarmTemplateId',
            'productName' => 'setProductName',
            'resourceLevel' => 'setResourceLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  告警规则id，以al开头，包含22个数字或字母
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * description  告警描述，长度0-256
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * policies  告警策略
    * resources  资源列表，关联资源需要使用查询告警规则资源接口获取
    * type  type
    * enabled  告警开关
    * notificationEnabled  是否开启告警通知
    * alarmNotifications  告警触发的动作
    * okNotifications  告警恢复触发的动作
    * notificationBeginTime  告警通知开启时间
    * notificationEndTime  告警通知关闭时间
    * enterpriseProjectId  企业项目ID，不填时会使用默认的企业项目ID
    * alarmTemplateId  告警规则关联告警模板ID
    * productName  产品层级跨纬规则创建时需要指明的规则产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  resourceLevel
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
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'alarmTemplateId' => 'getAlarmTemplateId',
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['alarmTemplateId'] = isset($data['alarmTemplateId']) ? $data['alarmTemplateId'] : null;
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
            if (!is_null($this->container['alarmId']) && !preg_match("/^al([0-9A-Za-z]){22}$/", $this->container['alarmId'])) {
                $invalidProperties[] = "invalid value for 'alarmId', must be conform to the pattern /^al([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/.";
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
    *  告警规则id，以al开头，包含22个数字或字母
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
    * @param string|null $alarmId 告警规则id，以al开头，包含22个数字或字母
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
    *  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
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
    * @param string|null $name 告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
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
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
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
    *  资源列表，关联资源需要使用查询告警规则资源接口获取
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourcesInListResp[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourcesInListResp[]|null $resources 资源列表，关联资源需要使用查询告警规则资源接口获取
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
    *  type
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmType|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmType|null $type type
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
    *  告警开关
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
    * @param bool|null $enabled 告警开关
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
    *  是否开启告警通知
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
    * @param bool|null $notificationEnabled 是否开启告警通知
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
    *  企业项目ID，不填时会使用默认的企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID，不填时会使用默认的企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets alarmTemplateId
    *  告警规则关联告警模板ID
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
    * @param string|null $alarmTemplateId 告警规则关联告警模板ID
    *
    * @return $this
    */
    public function setAlarmTemplateId($alarmTemplateId)
    {
        $this->container['alarmTemplateId'] = $alarmTemplateId;
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
    *  resourceLevel
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceLevel|null
    */
    public function getResourceLevel()
    {
        return $this->container['resourceLevel'];
    }

    /**
    * Sets resourceLevel
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceLevel|null $resourceLevel resourceLevel
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

