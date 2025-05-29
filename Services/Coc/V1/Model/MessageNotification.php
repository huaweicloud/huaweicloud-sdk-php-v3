<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MessageNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MessageNotification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policy  通知策略
    * notificationEndpointType  通知对象类型
    * scheduleSceneId  排班场景ID
    * scheduleRoleId  排班角色ID
    * recipients  消息接收人
    * protocol  通知渠道
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policy' => 'string',
            'notificationEndpointType' => 'string',
            'scheduleSceneId' => 'string',
            'scheduleRoleId' => 'string',
            'recipients' => 'string',
            'protocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policy  通知策略
    * notificationEndpointType  通知对象类型
    * scheduleSceneId  排班场景ID
    * scheduleRoleId  排班角色ID
    * recipients  消息接收人
    * protocol  通知渠道
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policy' => null,
        'notificationEndpointType' => null,
        'scheduleSceneId' => null,
        'scheduleRoleId' => null,
        'recipients' => null,
        'protocol' => null
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
    * policy  通知策略
    * notificationEndpointType  通知对象类型
    * scheduleSceneId  排班场景ID
    * scheduleRoleId  排班角色ID
    * recipients  消息接收人
    * protocol  通知渠道
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policy' => 'policy',
            'notificationEndpointType' => 'notification_endpoint_type',
            'scheduleSceneId' => 'schedule_scene_id',
            'scheduleRoleId' => 'schedule_role_id',
            'recipients' => 'recipients',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policy  通知策略
    * notificationEndpointType  通知对象类型
    * scheduleSceneId  排班场景ID
    * scheduleRoleId  排班角色ID
    * recipients  消息接收人
    * protocol  通知渠道
    *
    * @var string[]
    */
    protected static $setters = [
            'policy' => 'setPolicy',
            'notificationEndpointType' => 'setNotificationEndpointType',
            'scheduleSceneId' => 'setScheduleSceneId',
            'scheduleRoleId' => 'setScheduleRoleId',
            'recipients' => 'setRecipients',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policy  通知策略
    * notificationEndpointType  通知对象类型
    * scheduleSceneId  排班场景ID
    * scheduleRoleId  排班角色ID
    * recipients  消息接收人
    * protocol  通知渠道
    *
    * @var string[]
    */
    protected static $getters = [
            'policy' => 'getPolicy',
            'notificationEndpointType' => 'getNotificationEndpointType',
            'scheduleSceneId' => 'getScheduleSceneId',
            'scheduleRoleId' => 'getScheduleRoleId',
            'recipients' => 'getRecipients',
            'protocol' => 'getProtocol'
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
    const NOTIFICATION_ENDPOINT_TYPE_USER = 'USER';
    const NOTIFICATION_ENDPOINT_TYPE_ON_CALL = 'ON_CALL';
    const PROTOCOL__DEFAULT = 'DEFAULT';
    const PROTOCOL_NONE = 'NONE';
    const PROTOCOL_SMS = 'SMS';
    const PROTOCOL_EMAIL = 'EMAIL';
    const PROTOCOL_DINGDING = 'DINGDING';
    const PROTOCOL_LARK = 'LARK';
    const PROTOCOL_WELINK = 'WELINK';
    const PROTOCOL_CALLNOTIFY = 'CALLNOTIFY';
    const PROTOCOL_WECHAT = 'WECHAT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotificationEndpointTypeAllowableValues()
    {
        return [
            self::NOTIFICATION_ENDPOINT_TYPE_USER,
            self::NOTIFICATION_ENDPOINT_TYPE_ON_CALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL__DEFAULT,
            self::PROTOCOL_NONE,
            self::PROTOCOL_SMS,
            self::PROTOCOL_EMAIL,
            self::PROTOCOL_DINGDING,
            self::PROTOCOL_LARK,
            self::PROTOCOL_WELINK,
            self::PROTOCOL_CALLNOTIFY,
            self::PROTOCOL_WECHAT,
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
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['notificationEndpointType'] = isset($data['notificationEndpointType']) ? $data['notificationEndpointType'] : null;
        $this->container['scheduleSceneId'] = isset($data['scheduleSceneId']) ? $data['scheduleSceneId'] : null;
        $this->container['scheduleRoleId'] = isset($data['scheduleRoleId']) ? $data['scheduleRoleId'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) > 128)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) < 0)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['notificationEndpointType'] === null) {
            $invalidProperties[] = "'notificationEndpointType' can't be null";
        }
            $allowedValues = $this->getNotificationEndpointTypeAllowableValues();
                if (!is_null($this->container['notificationEndpointType']) && !in_array($this->container['notificationEndpointType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationEndpointType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['notificationEndpointType']) > 32)) {
                $invalidProperties[] = "invalid value for 'notificationEndpointType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['notificationEndpointType']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationEndpointType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scheduleSceneId']) && (mb_strlen($this->container['scheduleSceneId']) > 128)) {
                $invalidProperties[] = "invalid value for 'scheduleSceneId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scheduleSceneId']) && (mb_strlen($this->container['scheduleSceneId']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleSceneId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleRoleId']) && (mb_strlen($this->container['scheduleRoleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'scheduleRoleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scheduleRoleId']) && (mb_strlen($this->container['scheduleRoleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleRoleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recipients']) && (mb_strlen($this->container['recipients']) > 3200)) {
                $invalidProperties[] = "invalid value for 'recipients', the character length must be smaller than or equal to 3200.";
            }
            if (!is_null($this->container['recipients']) && (mb_strlen($this->container['recipients']) < 0)) {
                $invalidProperties[] = "invalid value for 'recipients', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 32)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
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
    * Gets policy
    *  通知策略
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy 通知策略
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets notificationEndpointType
    *  通知对象类型
    *
    * @return string
    */
    public function getNotificationEndpointType()
    {
        return $this->container['notificationEndpointType'];
    }

    /**
    * Sets notificationEndpointType
    *
    * @param string $notificationEndpointType 通知对象类型
    *
    * @return $this
    */
    public function setNotificationEndpointType($notificationEndpointType)
    {
        $this->container['notificationEndpointType'] = $notificationEndpointType;
        return $this;
    }

    /**
    * Gets scheduleSceneId
    *  排班场景ID
    *
    * @return string|null
    */
    public function getScheduleSceneId()
    {
        return $this->container['scheduleSceneId'];
    }

    /**
    * Sets scheduleSceneId
    *
    * @param string|null $scheduleSceneId 排班场景ID
    *
    * @return $this
    */
    public function setScheduleSceneId($scheduleSceneId)
    {
        $this->container['scheduleSceneId'] = $scheduleSceneId;
        return $this;
    }

    /**
    * Gets scheduleRoleId
    *  排班角色ID
    *
    * @return string|null
    */
    public function getScheduleRoleId()
    {
        return $this->container['scheduleRoleId'];
    }

    /**
    * Sets scheduleRoleId
    *
    * @param string|null $scheduleRoleId 排班角色ID
    *
    * @return $this
    */
    public function setScheduleRoleId($scheduleRoleId)
    {
        $this->container['scheduleRoleId'] = $scheduleRoleId;
        return $this;
    }

    /**
    * Gets recipients
    *  消息接收人
    *
    * @return string|null
    */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
    * Sets recipients
    *
    * @param string|null $recipients 消息接收人
    *
    * @return $this
    */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;
        return $this;
    }

    /**
    * Gets protocol
    *  通知渠道
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 通知渠道
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

