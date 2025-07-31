<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Notification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Notification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  通知类型。notification为SMN通知，contact为云账号联系人，contactGroup为通知组。autoscaling为AS通知，只在AS中使用，不推荐客户使用。groupwatch、ecsRecovery及iecAction，已废弃，不推荐使用。
    * notificationList  告警状态发生变化时，被通知对象的列表。topicUrn可从SMN获取，具体操作请参考查询Topic列表。当type为notification时，notification_list列表不能为空；当type为autoscaling时，列表必须为[]。 说明：若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notification_list值保持一致。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'notificationList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  通知类型。notification为SMN通知，contact为云账号联系人，contactGroup为通知组。autoscaling为AS通知，只在AS中使用，不推荐客户使用。groupwatch、ecsRecovery及iecAction，已废弃，不推荐使用。
    * notificationList  告警状态发生变化时，被通知对象的列表。topicUrn可从SMN获取，具体操作请参考查询Topic列表。当type为notification时，notification_list列表不能为空；当type为autoscaling时，列表必须为[]。 说明：若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notification_list值保持一致。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'notificationList' => null
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
    * type  通知类型。notification为SMN通知，contact为云账号联系人，contactGroup为通知组。autoscaling为AS通知，只在AS中使用，不推荐客户使用。groupwatch、ecsRecovery及iecAction，已废弃，不推荐使用。
    * notificationList  告警状态发生变化时，被通知对象的列表。topicUrn可从SMN获取，具体操作请参考查询Topic列表。当type为notification时，notification_list列表不能为空；当type为autoscaling时，列表必须为[]。 说明：若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notification_list值保持一致。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'notificationList' => 'notification_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  通知类型。notification为SMN通知，contact为云账号联系人，contactGroup为通知组。autoscaling为AS通知，只在AS中使用，不推荐客户使用。groupwatch、ecsRecovery及iecAction，已废弃，不推荐使用。
    * notificationList  告警状态发生变化时，被通知对象的列表。topicUrn可从SMN获取，具体操作请参考查询Topic列表。当type为notification时，notification_list列表不能为空；当type为autoscaling时，列表必须为[]。 说明：若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notification_list值保持一致。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'notificationList' => 'setNotificationList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  通知类型。notification为SMN通知，contact为云账号联系人，contactGroup为通知组。autoscaling为AS通知，只在AS中使用，不推荐客户使用。groupwatch、ecsRecovery及iecAction，已废弃，不推荐使用。
    * notificationList  告警状态发生变化时，被通知对象的列表。topicUrn可从SMN获取，具体操作请参考查询Topic列表。当type为notification时，notification_list列表不能为空；当type为autoscaling时，列表必须为[]。 说明：若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notification_list值保持一致。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'notificationList' => 'getNotificationList'
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
    const TYPE_NOTIFICATION = 'notification';
    const TYPE_AUTOSCALING = 'autoscaling';
    const TYPE_GROUPWATCH = 'groupwatch';
    const TYPE_ECS_RECOVERY = 'ecsRecovery';
    const TYPE_CONTACT = 'contact';
    const TYPE_CONTACT_GROUP = 'contactGroup';
    const TYPE_IEC_ACTION = 'iecAction';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NOTIFICATION,
            self::TYPE_AUTOSCALING,
            self::TYPE_GROUPWATCH,
            self::TYPE_ECS_RECOVERY,
            self::TYPE_CONTACT,
            self::TYPE_CONTACT_GROUP,
            self::TYPE_IEC_ACTION,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['notificationList'] = isset($data['notificationList']) ? $data['notificationList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['notificationList'] === null) {
            $invalidProperties[] = "'notificationList' can't be null";
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
    * Gets type
    *  通知类型。notification为SMN通知，contact为云账号联系人，contactGroup为通知组。autoscaling为AS通知，只在AS中使用，不推荐客户使用。groupwatch、ecsRecovery及iecAction，已废弃，不推荐使用。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 通知类型。notification为SMN通知，contact为云账号联系人，contactGroup为通知组。autoscaling为AS通知，只在AS中使用，不推荐客户使用。groupwatch、ecsRecovery及iecAction，已废弃，不推荐使用。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets notificationList
    *  告警状态发生变化时，被通知对象的列表。topicUrn可从SMN获取，具体操作请参考查询Topic列表。当type为notification时，notification_list列表不能为空；当type为autoscaling时，列表必须为[]。 说明：若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notification_list值保持一致。
    *
    * @return string[]
    */
    public function getNotificationList()
    {
        return $this->container['notificationList'];
    }

    /**
    * Sets notificationList
    *
    * @param string[] $notificationList 告警状态发生变化时，被通知对象的列表。topicUrn可从SMN获取，具体操作请参考查询Topic列表。当type为notification时，notification_list列表不能为空；当type为autoscaling时，列表必须为[]。 说明：若alarm_action_enabled为true，对应的alarm_actions、ok_actions至少有一个不能为空。若alarm_actions、ok_actions同时存在时，notification_list值保持一致。
    *
    * @return $this
    */
    public function setNotificationList($notificationList)
    {
        $this->container['notificationList'] = $notificationList;
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

