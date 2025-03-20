<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotificationObjConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotificationObjConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationEndpointType  通知对象类型（排班/个人/工单责任人/群组）
    * scheduleScene  排班场景ID
    * scheduleRole  排班角色ID
    * scheduleRoleName  排班角色名称
    * recipients  消息通知接收人，对于群组通知而言其对应的是被@的群成员
    * groupType  群组类型（企业微信/钉钉/飞书）
    * groupId  群组ID
    * groupName  群组名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationEndpointType' => 'string',
            'scheduleScene' => 'string',
            'scheduleRole' => 'string',
            'scheduleRoleName' => 'string',
            'recipients' => 'string',
            'groupType' => 'string',
            'groupId' => 'string',
            'groupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationEndpointType  通知对象类型（排班/个人/工单责任人/群组）
    * scheduleScene  排班场景ID
    * scheduleRole  排班角色ID
    * scheduleRoleName  排班角色名称
    * recipients  消息通知接收人，对于群组通知而言其对应的是被@的群成员
    * groupType  群组类型（企业微信/钉钉/飞书）
    * groupId  群组ID
    * groupName  群组名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationEndpointType' => null,
        'scheduleScene' => null,
        'scheduleRole' => null,
        'scheduleRoleName' => null,
        'recipients' => null,
        'groupType' => null,
        'groupId' => null,
        'groupName' => null
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
    * notificationEndpointType  通知对象类型（排班/个人/工单责任人/群组）
    * scheduleScene  排班场景ID
    * scheduleRole  排班角色ID
    * scheduleRoleName  排班角色名称
    * recipients  消息通知接收人，对于群组通知而言其对应的是被@的群成员
    * groupType  群组类型（企业微信/钉钉/飞书）
    * groupId  群组ID
    * groupName  群组名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationEndpointType' => 'notification_endpoint_type',
            'scheduleScene' => 'schedule_scene',
            'scheduleRole' => 'schedule_role',
            'scheduleRoleName' => 'schedule_role_name',
            'recipients' => 'recipients',
            'groupType' => 'group_type',
            'groupId' => 'group_id',
            'groupName' => 'group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationEndpointType  通知对象类型（排班/个人/工单责任人/群组）
    * scheduleScene  排班场景ID
    * scheduleRole  排班角色ID
    * scheduleRoleName  排班角色名称
    * recipients  消息通知接收人，对于群组通知而言其对应的是被@的群成员
    * groupType  群组类型（企业微信/钉钉/飞书）
    * groupId  群组ID
    * groupName  群组名称
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationEndpointType' => 'setNotificationEndpointType',
            'scheduleScene' => 'setScheduleScene',
            'scheduleRole' => 'setScheduleRole',
            'scheduleRoleName' => 'setScheduleRoleName',
            'recipients' => 'setRecipients',
            'groupType' => 'setGroupType',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationEndpointType  通知对象类型（排班/个人/工单责任人/群组）
    * scheduleScene  排班场景ID
    * scheduleRole  排班角色ID
    * scheduleRoleName  排班角色名称
    * recipients  消息通知接收人，对于群组通知而言其对应的是被@的群成员
    * groupType  群组类型（企业微信/钉钉/飞书）
    * groupId  群组ID
    * groupName  群组名称
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationEndpointType' => 'getNotificationEndpointType',
            'scheduleScene' => 'getScheduleScene',
            'scheduleRole' => 'getScheduleRole',
            'scheduleRoleName' => 'getScheduleRoleName',
            'recipients' => 'getRecipients',
            'groupType' => 'getGroupType',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName'
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
        $this->container['notificationEndpointType'] = isset($data['notificationEndpointType']) ? $data['notificationEndpointType'] : null;
        $this->container['scheduleScene'] = isset($data['scheduleScene']) ? $data['scheduleScene'] : null;
        $this->container['scheduleRole'] = isset($data['scheduleRole']) ? $data['scheduleRole'] : null;
        $this->container['scheduleRoleName'] = isset($data['scheduleRoleName']) ? $data['scheduleRoleName'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['notificationEndpointType']) && (mb_strlen($this->container['notificationEndpointType']) > 128)) {
                $invalidProperties[] = "invalid value for 'notificationEndpointType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['notificationEndpointType']) && (mb_strlen($this->container['notificationEndpointType']) < 0)) {
                $invalidProperties[] = "invalid value for 'notificationEndpointType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleScene']) && (mb_strlen($this->container['scheduleScene']) > 128)) {
                $invalidProperties[] = "invalid value for 'scheduleScene', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scheduleScene']) && (mb_strlen($this->container['scheduleScene']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleScene', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleRole']) && (mb_strlen($this->container['scheduleRole']) > 128)) {
                $invalidProperties[] = "invalid value for 'scheduleRole', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scheduleRole']) && (mb_strlen($this->container['scheduleRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleRole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleRoleName']) && (mb_strlen($this->container['scheduleRoleName']) > 128)) {
                $invalidProperties[] = "invalid value for 'scheduleRoleName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scheduleRoleName']) && (mb_strlen($this->container['scheduleRoleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleRoleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recipients']) && (mb_strlen($this->container['recipients']) > 1000000)) {
                $invalidProperties[] = "invalid value for 'recipients', the character length must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['recipients']) && (mb_strlen($this->container['recipients']) < 0)) {
                $invalidProperties[] = "invalid value for 'recipients', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupType']) && (mb_strlen($this->container['groupType']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupType']) && (mb_strlen($this->container['groupType']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
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
    * Gets notificationEndpointType
    *  通知对象类型（排班/个人/工单责任人/群组）
    *
    * @return string|null
    */
    public function getNotificationEndpointType()
    {
        return $this->container['notificationEndpointType'];
    }

    /**
    * Sets notificationEndpointType
    *
    * @param string|null $notificationEndpointType 通知对象类型（排班/个人/工单责任人/群组）
    *
    * @return $this
    */
    public function setNotificationEndpointType($notificationEndpointType)
    {
        $this->container['notificationEndpointType'] = $notificationEndpointType;
        return $this;
    }

    /**
    * Gets scheduleScene
    *  排班场景ID
    *
    * @return string|null
    */
    public function getScheduleScene()
    {
        return $this->container['scheduleScene'];
    }

    /**
    * Sets scheduleScene
    *
    * @param string|null $scheduleScene 排班场景ID
    *
    * @return $this
    */
    public function setScheduleScene($scheduleScene)
    {
        $this->container['scheduleScene'] = $scheduleScene;
        return $this;
    }

    /**
    * Gets scheduleRole
    *  排班角色ID
    *
    * @return string|null
    */
    public function getScheduleRole()
    {
        return $this->container['scheduleRole'];
    }

    /**
    * Sets scheduleRole
    *
    * @param string|null $scheduleRole 排班角色ID
    *
    * @return $this
    */
    public function setScheduleRole($scheduleRole)
    {
        $this->container['scheduleRole'] = $scheduleRole;
        return $this;
    }

    /**
    * Gets scheduleRoleName
    *  排班角色名称
    *
    * @return string|null
    */
    public function getScheduleRoleName()
    {
        return $this->container['scheduleRoleName'];
    }

    /**
    * Sets scheduleRoleName
    *
    * @param string|null $scheduleRoleName 排班角色名称
    *
    * @return $this
    */
    public function setScheduleRoleName($scheduleRoleName)
    {
        $this->container['scheduleRoleName'] = $scheduleRoleName;
        return $this;
    }

    /**
    * Gets recipients
    *  消息通知接收人，对于群组通知而言其对应的是被@的群成员
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
    * @param string|null $recipients 消息通知接收人，对于群组通知而言其对应的是被@的群成员
    *
    * @return $this
    */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;
        return $this;
    }

    /**
    * Gets groupType
    *  群组类型（企业微信/钉钉/飞书）
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType 群组类型（企业微信/钉钉/飞书）
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets groupId
    *  群组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 群组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  群组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 群组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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

