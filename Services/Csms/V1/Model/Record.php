<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Record implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Record';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  凭据名称。
    * triggerEventType  凭据类型  取值 ： COMMON ：通用凭据 RDS ：RDS凭据
    * createTime  事件通知记录的创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * notificationTargetName  事件通知的对象名称。
    * notificationTargetId  事件通知的对象ID。
    * notificationContent  凭据的描述信息。
    * notificationStatus  凭据类型  取值 ： SUCCESS ：事件通知成功。         FAIL ：事件通知失败。         INVALID ：事件通知配置主题信息无效或不正确，无法触发通知。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'triggerEventType' => 'string',
            'createTime' => 'int',
            'secretName' => 'string',
            'secretType' => 'string',
            'notificationTargetName' => 'string',
            'notificationTargetId' => 'string',
            'notificationContent' => 'string',
            'notificationStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  凭据名称。
    * triggerEventType  凭据类型  取值 ： COMMON ：通用凭据 RDS ：RDS凭据
    * createTime  事件通知记录的创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * notificationTargetName  事件通知的对象名称。
    * notificationTargetId  事件通知的对象ID。
    * notificationContent  凭据的描述信息。
    * notificationStatus  凭据类型  取值 ： SUCCESS ：事件通知成功。         FAIL ：事件通知失败。         INVALID ：事件通知配置主题信息无效或不正确，无法触发通知。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'triggerEventType' => null,
        'createTime' => 'int64',
        'secretName' => null,
        'secretType' => null,
        'notificationTargetName' => null,
        'notificationTargetId' => null,
        'notificationContent' => null,
        'notificationStatus' => null
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
    * eventName  凭据名称。
    * triggerEventType  凭据类型  取值 ： COMMON ：通用凭据 RDS ：RDS凭据
    * createTime  事件通知记录的创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * notificationTargetName  事件通知的对象名称。
    * notificationTargetId  事件通知的对象ID。
    * notificationContent  凭据的描述信息。
    * notificationStatus  凭据类型  取值 ： SUCCESS ：事件通知成功。         FAIL ：事件通知失败。         INVALID ：事件通知配置主题信息无效或不正确，无法触发通知。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'triggerEventType' => 'trigger_event_type',
            'createTime' => 'create_time',
            'secretName' => 'secret_name',
            'secretType' => 'secret_type',
            'notificationTargetName' => 'notification_target_name',
            'notificationTargetId' => 'notification_target_id',
            'notificationContent' => 'notification_content',
            'notificationStatus' => 'notification_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  凭据名称。
    * triggerEventType  凭据类型  取值 ： COMMON ：通用凭据 RDS ：RDS凭据
    * createTime  事件通知记录的创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * notificationTargetName  事件通知的对象名称。
    * notificationTargetId  事件通知的对象ID。
    * notificationContent  凭据的描述信息。
    * notificationStatus  凭据类型  取值 ： SUCCESS ：事件通知成功。         FAIL ：事件通知失败。         INVALID ：事件通知配置主题信息无效或不正确，无法触发通知。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'triggerEventType' => 'setTriggerEventType',
            'createTime' => 'setCreateTime',
            'secretName' => 'setSecretName',
            'secretType' => 'setSecretType',
            'notificationTargetName' => 'setNotificationTargetName',
            'notificationTargetId' => 'setNotificationTargetId',
            'notificationContent' => 'setNotificationContent',
            'notificationStatus' => 'setNotificationStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  凭据名称。
    * triggerEventType  凭据类型  取值 ： COMMON ：通用凭据 RDS ：RDS凭据
    * createTime  事件通知记录的创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * notificationTargetName  事件通知的对象名称。
    * notificationTargetId  事件通知的对象ID。
    * notificationContent  凭据的描述信息。
    * notificationStatus  凭据类型  取值 ： SUCCESS ：事件通知成功。         FAIL ：事件通知失败。         INVALID ：事件通知配置主题信息无效或不正确，无法触发通知。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'triggerEventType' => 'getTriggerEventType',
            'createTime' => 'getCreateTime',
            'secretName' => 'getSecretName',
            'secretType' => 'getSecretType',
            'notificationTargetName' => 'getNotificationTargetName',
            'notificationTargetId' => 'getNotificationTargetId',
            'notificationContent' => 'getNotificationContent',
            'notificationStatus' => 'getNotificationStatus'
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
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['triggerEventType'] = isset($data['triggerEventType']) ? $data['triggerEventType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['notificationTargetName'] = isset($data['notificationTargetName']) ? $data['notificationTargetName'] : null;
        $this->container['notificationTargetId'] = isset($data['notificationTargetId']) ? $data['notificationTargetId'] : null;
        $this->container['notificationContent'] = isset($data['notificationContent']) ? $data['notificationContent'] : null;
        $this->container['notificationStatus'] = isset($data['notificationStatus']) ? $data['notificationStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eventName']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['eventName'])) {
                $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['triggerEventType']) && (mb_strlen($this->container['triggerEventType']) > 20)) {
                $invalidProperties[] = "invalid value for 'triggerEventType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['triggerEventType']) && (mb_strlen($this->container['triggerEventType']) < 6)) {
                $invalidProperties[] = "invalid value for 'triggerEventType', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['secretName']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['secretName'])) {
                $invalidProperties[] = "invalid value for 'secretName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['secretType']) && (mb_strlen($this->container['secretType']) > 20)) {
                $invalidProperties[] = "invalid value for 'secretType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['secretType']) && (mb_strlen($this->container['secretType']) < 6)) {
                $invalidProperties[] = "invalid value for 'secretType', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['notificationTargetName']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['notificationTargetName'])) {
                $invalidProperties[] = "invalid value for 'notificationTargetName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['notificationTargetId']) && !preg_match("/^[a-zA-Z0-9\\-._:]{1,256}$/", $this->container['notificationTargetId'])) {
                $invalidProperties[] = "invalid value for 'notificationTargetId', must be conform to the pattern /^[a-zA-Z0-9\\-._:]{1,256}$/.";
            }
            if (!is_null($this->container['notificationContent']) && (mb_strlen($this->container['notificationContent']) > 255)) {
                $invalidProperties[] = "invalid value for 'notificationContent', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['notificationContent']) && (mb_strlen($this->container['notificationContent']) < 0)) {
                $invalidProperties[] = "invalid value for 'notificationContent', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notificationStatus']) && (mb_strlen($this->container['notificationStatus']) > 20)) {
                $invalidProperties[] = "invalid value for 'notificationStatus', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['notificationStatus']) && (mb_strlen($this->container['notificationStatus']) < 6)) {
                $invalidProperties[] = "invalid value for 'notificationStatus', the character length must be bigger than or equal to 6.";
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
    *  凭据名称。
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 凭据名称。
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets triggerEventType
    *  凭据类型  取值 ： COMMON ：通用凭据 RDS ：RDS凭据
    *
    * @return string|null
    */
    public function getTriggerEventType()
    {
        return $this->container['triggerEventType'];
    }

    /**
    * Sets triggerEventType
    *
    * @param string|null $triggerEventType 凭据类型  取值 ： COMMON ：通用凭据 RDS ：RDS凭据
    *
    * @return $this
    */
    public function setTriggerEventType($triggerEventType)
    {
        $this->container['triggerEventType'] = $triggerEventType;
        return $this;
    }

    /**
    * Gets createTime
    *  事件通知记录的创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
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
    * @param int|null $createTime 事件通知记录的创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets secretName
    *  凭据名称。
    *
    * @return string|null
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string|null $secretName 凭据名称。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets secretType
    *  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    *
    * @return string|null
    */
    public function getSecretType()
    {
        return $this->container['secretType'];
    }

    /**
    * Sets secretType
    *
    * @param string|null $secretType 凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    *
    * @return $this
    */
    public function setSecretType($secretType)
    {
        $this->container['secretType'] = $secretType;
        return $this;
    }

    /**
    * Gets notificationTargetName
    *  事件通知的对象名称。
    *
    * @return string|null
    */
    public function getNotificationTargetName()
    {
        return $this->container['notificationTargetName'];
    }

    /**
    * Sets notificationTargetName
    *
    * @param string|null $notificationTargetName 事件通知的对象名称。
    *
    * @return $this
    */
    public function setNotificationTargetName($notificationTargetName)
    {
        $this->container['notificationTargetName'] = $notificationTargetName;
        return $this;
    }

    /**
    * Gets notificationTargetId
    *  事件通知的对象ID。
    *
    * @return string|null
    */
    public function getNotificationTargetId()
    {
        return $this->container['notificationTargetId'];
    }

    /**
    * Sets notificationTargetId
    *
    * @param string|null $notificationTargetId 事件通知的对象ID。
    *
    * @return $this
    */
    public function setNotificationTargetId($notificationTargetId)
    {
        $this->container['notificationTargetId'] = $notificationTargetId;
        return $this;
    }

    /**
    * Gets notificationContent
    *  凭据的描述信息。
    *
    * @return string|null
    */
    public function getNotificationContent()
    {
        return $this->container['notificationContent'];
    }

    /**
    * Sets notificationContent
    *
    * @param string|null $notificationContent 凭据的描述信息。
    *
    * @return $this
    */
    public function setNotificationContent($notificationContent)
    {
        $this->container['notificationContent'] = $notificationContent;
        return $this;
    }

    /**
    * Gets notificationStatus
    *  凭据类型  取值 ： SUCCESS ：事件通知成功。         FAIL ：事件通知失败。         INVALID ：事件通知配置主题信息无效或不正确，无法触发通知。
    *
    * @return string|null
    */
    public function getNotificationStatus()
    {
        return $this->container['notificationStatus'];
    }

    /**
    * Sets notificationStatus
    *
    * @param string|null $notificationStatus 凭据类型  取值 ： SUCCESS ：事件通知成功。         FAIL ：事件通知失败。         INVALID ：事件通知配置主题信息无效或不正确，无法触发通知。
    *
    * @return $this
    */
    public function setNotificationStatus($notificationStatus)
    {
        $this->container['notificationStatus'] = $notificationStatus;
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

