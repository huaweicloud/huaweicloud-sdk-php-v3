<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotificationsResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotificationsResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationName  标识关键操作名称。
    * operationType  标识操作类型。 目前支持的操作类型有完整类型(complete)和自定义类型(customized)。 完整类型下，CTS发送通知的对象为已对接服务的所有事件。 自定义类型下，CTS发送通知的对象是在operations列表中指定的事件。
    * agencyName  云服务委托名称。
    * operations  操作事件列表。
    * notifyUserList  通知用户列表，目前最多支持对10个用户组和50个用户发起的操作进行配置。
    * status  标识关键操作通知状态，包括正常(enabled)，停止(disabled)两种状态。
    * topicId  消息通知服务的topic_urn或者函数工作流的func_urn。 - 消息通知服务的topic_urn可以通过消息通知服务的查询主题列表API获取，示例：urn:smn:regionId:f96188c7ccaf4ffba0c9aa149ab2bd57:test_topic_v2。 - 函数工作流的func_urn可以通过函数工作流的获取函数列表API获取，示例：urn:fss:xxxxxxxxx:7aad83af3e8d42e99ac194e8419e2c9b:function:default:test。
    * notificationId  关键操作通知的唯一标识。
    * notificationType  关键操作通知类型，根据topic_id区分为消息通知服务(smn)和函数工作流(fun)。
    * projectId  项目ID。
    * createTime  关键操作通知创建时间戳。
    * filter  filter
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationName' => 'string',
            'operationType' => 'string',
            'agencyName' => 'string',
            'operations' => '\HuaweiCloud\SDK\Cts\V3\Model\Operations[]',
            'notifyUserList' => '\HuaweiCloud\SDK\Cts\V3\Model\NotificationUsers[]',
            'status' => 'string',
            'topicId' => 'string',
            'notificationId' => 'string',
            'notificationType' => 'string',
            'projectId' => 'string',
            'createTime' => 'int',
            'filter' => '\HuaweiCloud\SDK\Cts\V3\Model\Filter'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationName  标识关键操作名称。
    * operationType  标识操作类型。 目前支持的操作类型有完整类型(complete)和自定义类型(customized)。 完整类型下，CTS发送通知的对象为已对接服务的所有事件。 自定义类型下，CTS发送通知的对象是在operations列表中指定的事件。
    * agencyName  云服务委托名称。
    * operations  操作事件列表。
    * notifyUserList  通知用户列表，目前最多支持对10个用户组和50个用户发起的操作进行配置。
    * status  标识关键操作通知状态，包括正常(enabled)，停止(disabled)两种状态。
    * topicId  消息通知服务的topic_urn或者函数工作流的func_urn。 - 消息通知服务的topic_urn可以通过消息通知服务的查询主题列表API获取，示例：urn:smn:regionId:f96188c7ccaf4ffba0c9aa149ab2bd57:test_topic_v2。 - 函数工作流的func_urn可以通过函数工作流的获取函数列表API获取，示例：urn:fss:xxxxxxxxx:7aad83af3e8d42e99ac194e8419e2c9b:function:default:test。
    * notificationId  关键操作通知的唯一标识。
    * notificationType  关键操作通知类型，根据topic_id区分为消息通知服务(smn)和函数工作流(fun)。
    * projectId  项目ID。
    * createTime  关键操作通知创建时间戳。
    * filter  filter
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationName' => null,
        'operationType' => null,
        'agencyName' => null,
        'operations' => null,
        'notifyUserList' => null,
        'status' => null,
        'topicId' => null,
        'notificationId' => null,
        'notificationType' => null,
        'projectId' => null,
        'createTime' => 'int64',
        'filter' => null
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
    * notificationName  标识关键操作名称。
    * operationType  标识操作类型。 目前支持的操作类型有完整类型(complete)和自定义类型(customized)。 完整类型下，CTS发送通知的对象为已对接服务的所有事件。 自定义类型下，CTS发送通知的对象是在operations列表中指定的事件。
    * agencyName  云服务委托名称。
    * operations  操作事件列表。
    * notifyUserList  通知用户列表，目前最多支持对10个用户组和50个用户发起的操作进行配置。
    * status  标识关键操作通知状态，包括正常(enabled)，停止(disabled)两种状态。
    * topicId  消息通知服务的topic_urn或者函数工作流的func_urn。 - 消息通知服务的topic_urn可以通过消息通知服务的查询主题列表API获取，示例：urn:smn:regionId:f96188c7ccaf4ffba0c9aa149ab2bd57:test_topic_v2。 - 函数工作流的func_urn可以通过函数工作流的获取函数列表API获取，示例：urn:fss:xxxxxxxxx:7aad83af3e8d42e99ac194e8419e2c9b:function:default:test。
    * notificationId  关键操作通知的唯一标识。
    * notificationType  关键操作通知类型，根据topic_id区分为消息通知服务(smn)和函数工作流(fun)。
    * projectId  项目ID。
    * createTime  关键操作通知创建时间戳。
    * filter  filter
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationName' => 'notification_name',
            'operationType' => 'operation_type',
            'agencyName' => 'agency_name',
            'operations' => 'operations',
            'notifyUserList' => 'notify_user_list',
            'status' => 'status',
            'topicId' => 'topic_id',
            'notificationId' => 'notification_id',
            'notificationType' => 'notification_type',
            'projectId' => 'project_id',
            'createTime' => 'create_time',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationName  标识关键操作名称。
    * operationType  标识操作类型。 目前支持的操作类型有完整类型(complete)和自定义类型(customized)。 完整类型下，CTS发送通知的对象为已对接服务的所有事件。 自定义类型下，CTS发送通知的对象是在operations列表中指定的事件。
    * agencyName  云服务委托名称。
    * operations  操作事件列表。
    * notifyUserList  通知用户列表，目前最多支持对10个用户组和50个用户发起的操作进行配置。
    * status  标识关键操作通知状态，包括正常(enabled)，停止(disabled)两种状态。
    * topicId  消息通知服务的topic_urn或者函数工作流的func_urn。 - 消息通知服务的topic_urn可以通过消息通知服务的查询主题列表API获取，示例：urn:smn:regionId:f96188c7ccaf4ffba0c9aa149ab2bd57:test_topic_v2。 - 函数工作流的func_urn可以通过函数工作流的获取函数列表API获取，示例：urn:fss:xxxxxxxxx:7aad83af3e8d42e99ac194e8419e2c9b:function:default:test。
    * notificationId  关键操作通知的唯一标识。
    * notificationType  关键操作通知类型，根据topic_id区分为消息通知服务(smn)和函数工作流(fun)。
    * projectId  项目ID。
    * createTime  关键操作通知创建时间戳。
    * filter  filter
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationName' => 'setNotificationName',
            'operationType' => 'setOperationType',
            'agencyName' => 'setAgencyName',
            'operations' => 'setOperations',
            'notifyUserList' => 'setNotifyUserList',
            'status' => 'setStatus',
            'topicId' => 'setTopicId',
            'notificationId' => 'setNotificationId',
            'notificationType' => 'setNotificationType',
            'projectId' => 'setProjectId',
            'createTime' => 'setCreateTime',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationName  标识关键操作名称。
    * operationType  标识操作类型。 目前支持的操作类型有完整类型(complete)和自定义类型(customized)。 完整类型下，CTS发送通知的对象为已对接服务的所有事件。 自定义类型下，CTS发送通知的对象是在operations列表中指定的事件。
    * agencyName  云服务委托名称。
    * operations  操作事件列表。
    * notifyUserList  通知用户列表，目前最多支持对10个用户组和50个用户发起的操作进行配置。
    * status  标识关键操作通知状态，包括正常(enabled)，停止(disabled)两种状态。
    * topicId  消息通知服务的topic_urn或者函数工作流的func_urn。 - 消息通知服务的topic_urn可以通过消息通知服务的查询主题列表API获取，示例：urn:smn:regionId:f96188c7ccaf4ffba0c9aa149ab2bd57:test_topic_v2。 - 函数工作流的func_urn可以通过函数工作流的获取函数列表API获取，示例：urn:fss:xxxxxxxxx:7aad83af3e8d42e99ac194e8419e2c9b:function:default:test。
    * notificationId  关键操作通知的唯一标识。
    * notificationType  关键操作通知类型，根据topic_id区分为消息通知服务(smn)和函数工作流(fun)。
    * projectId  项目ID。
    * createTime  关键操作通知创建时间戳。
    * filter  filter
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationName' => 'getNotificationName',
            'operationType' => 'getOperationType',
            'agencyName' => 'getAgencyName',
            'operations' => 'getOperations',
            'notifyUserList' => 'getNotifyUserList',
            'status' => 'getStatus',
            'topicId' => 'getTopicId',
            'notificationId' => 'getNotificationId',
            'notificationType' => 'getNotificationType',
            'projectId' => 'getProjectId',
            'createTime' => 'getCreateTime',
            'filter' => 'getFilter'
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
    const OPERATION_TYPE_CUSTOMIZED = 'customized';
    const OPERATION_TYPE_COMPLETE = 'complete';
    const AGENCY_NAME_CTS_ADMIN_TRUST = 'cts_admin_trust';
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';
    const NOTIFICATION_TYPE_SMN = 'smn';
    const NOTIFICATION_TYPE_FUN = 'fun';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_CUSTOMIZED,
            self::OPERATION_TYPE_COMPLETE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgencyNameAllowableValues()
    {
        return [
            self::AGENCY_NAME_CTS_ADMIN_TRUST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotificationTypeAllowableValues()
    {
        return [
            self::NOTIFICATION_TYPE_SMN,
            self::NOTIFICATION_TYPE_FUN,
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
        $this->container['notificationName'] = isset($data['notificationName']) ? $data['notificationName'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['notifyUserList'] = isset($data['notifyUserList']) ? $data['notifyUserList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topicId'] = isset($data['topicId']) ? $data['topicId'] : null;
        $this->container['notificationId'] = isset($data['notificationId']) ? $data['notificationId'] : null;
        $this->container['notificationType'] = isset($data['notificationType']) ? $data['notificationType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['notificationName']) && (mb_strlen($this->container['notificationName']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationName']) && (mb_strlen($this->container['notificationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOperationTypeAllowableValues();
                if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAgencyNameAllowableValues();
                if (!is_null($this->container['agencyName']) && !in_array($this->container['agencyName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agencyName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 32)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['topicId']) && (mb_strlen($this->container['topicId']) > 400)) {
                $invalidProperties[] = "invalid value for 'topicId', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['topicId']) && (mb_strlen($this->container['topicId']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notificationId']) && (mb_strlen($this->container['notificationId']) > 40)) {
                $invalidProperties[] = "invalid value for 'notificationId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['notificationId']) && (mb_strlen($this->container['notificationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getNotificationTypeAllowableValues();
                if (!is_null($this->container['notificationType']) && !in_array($this->container['notificationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 946656000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 946656000000.";
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
    * Gets notificationName
    *  标识关键操作名称。
    *
    * @return string|null
    */
    public function getNotificationName()
    {
        return $this->container['notificationName'];
    }

    /**
    * Sets notificationName
    *
    * @param string|null $notificationName 标识关键操作名称。
    *
    * @return $this
    */
    public function setNotificationName($notificationName)
    {
        $this->container['notificationName'] = $notificationName;
        return $this;
    }

    /**
    * Gets operationType
    *  标识操作类型。 目前支持的操作类型有完整类型(complete)和自定义类型(customized)。 完整类型下，CTS发送通知的对象为已对接服务的所有事件。 自定义类型下，CTS发送通知的对象是在operations列表中指定的事件。
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 标识操作类型。 目前支持的操作类型有完整类型(complete)和自定义类型(customized)。 完整类型下，CTS发送通知的对象为已对接服务的所有事件。 自定义类型下，CTS发送通知的对象是在operations列表中指定的事件。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets agencyName
    *  云服务委托名称。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 云服务委托名称。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets operations
    *  操作事件列表。
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\Operations[]|null
    */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
    * Sets operations
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\Operations[]|null $operations 操作事件列表。
    *
    * @return $this
    */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;
        return $this;
    }

    /**
    * Gets notifyUserList
    *  通知用户列表，目前最多支持对10个用户组和50个用户发起的操作进行配置。
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\NotificationUsers[]|null
    */
    public function getNotifyUserList()
    {
        return $this->container['notifyUserList'];
    }

    /**
    * Sets notifyUserList
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\NotificationUsers[]|null $notifyUserList 通知用户列表，目前最多支持对10个用户组和50个用户发起的操作进行配置。
    *
    * @return $this
    */
    public function setNotifyUserList($notifyUserList)
    {
        $this->container['notifyUserList'] = $notifyUserList;
        return $this;
    }

    /**
    * Gets status
    *  标识关键操作通知状态，包括正常(enabled)，停止(disabled)两种状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 标识关键操作通知状态，包括正常(enabled)，停止(disabled)两种状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets topicId
    *  消息通知服务的topic_urn或者函数工作流的func_urn。 - 消息通知服务的topic_urn可以通过消息通知服务的查询主题列表API获取，示例：urn:smn:regionId:f96188c7ccaf4ffba0c9aa149ab2bd57:test_topic_v2。 - 函数工作流的func_urn可以通过函数工作流的获取函数列表API获取，示例：urn:fss:xxxxxxxxx:7aad83af3e8d42e99ac194e8419e2c9b:function:default:test。
    *
    * @return string|null
    */
    public function getTopicId()
    {
        return $this->container['topicId'];
    }

    /**
    * Sets topicId
    *
    * @param string|null $topicId 消息通知服务的topic_urn或者函数工作流的func_urn。 - 消息通知服务的topic_urn可以通过消息通知服务的查询主题列表API获取，示例：urn:smn:regionId:f96188c7ccaf4ffba0c9aa149ab2bd57:test_topic_v2。 - 函数工作流的func_urn可以通过函数工作流的获取函数列表API获取，示例：urn:fss:xxxxxxxxx:7aad83af3e8d42e99ac194e8419e2c9b:function:default:test。
    *
    * @return $this
    */
    public function setTopicId($topicId)
    {
        $this->container['topicId'] = $topicId;
        return $this;
    }

    /**
    * Gets notificationId
    *  关键操作通知的唯一标识。
    *
    * @return string|null
    */
    public function getNotificationId()
    {
        return $this->container['notificationId'];
    }

    /**
    * Sets notificationId
    *
    * @param string|null $notificationId 关键操作通知的唯一标识。
    *
    * @return $this
    */
    public function setNotificationId($notificationId)
    {
        $this->container['notificationId'] = $notificationId;
        return $this;
    }

    /**
    * Gets notificationType
    *  关键操作通知类型，根据topic_id区分为消息通知服务(smn)和函数工作流(fun)。
    *
    * @return string|null
    */
    public function getNotificationType()
    {
        return $this->container['notificationType'];
    }

    /**
    * Sets notificationType
    *
    * @param string|null $notificationType 关键操作通知类型，根据topic_id区分为消息通知服务(smn)和函数工作流(fun)。
    *
    * @return $this
    */
    public function setNotificationType($notificationType)
    {
        $this->container['notificationType'] = $notificationType;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createTime
    *  关键操作通知创建时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 关键操作通知创建时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\Filter|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\Filter|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
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

