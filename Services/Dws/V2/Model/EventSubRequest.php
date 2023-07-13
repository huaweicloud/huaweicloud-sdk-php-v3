<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventSubRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventSubRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  事件订阅名称
    * sourceType  事件源类型支持cluster，backup，disaster-recovery
    * sourceId  事件源ID
    * category  事件类别支持management，monitor，security，system alarm
    * severity  事件级别支持normal，warning
    * tag  事件标签
    * enable  是否开启订阅 1为开启，0为关闭
    * notificationTarget  消息通知地址
    * notificationTargetName  消息主题名称
    * notificationTargetType  消息通知类型只支持SMN
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sourceType' => 'string',
            'sourceId' => 'string',
            'category' => 'string',
            'severity' => 'string',
            'tag' => 'string',
            'enable' => 'int',
            'notificationTarget' => 'string',
            'notificationTargetName' => 'string',
            'notificationTargetType' => 'string',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  事件订阅名称
    * sourceType  事件源类型支持cluster，backup，disaster-recovery
    * sourceId  事件源ID
    * category  事件类别支持management，monitor，security，system alarm
    * severity  事件级别支持normal，warning
    * tag  事件标签
    * enable  是否开启订阅 1为开启，0为关闭
    * notificationTarget  消息通知地址
    * notificationTargetName  消息主题名称
    * notificationTargetType  消息通知类型只支持SMN
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sourceType' => null,
        'sourceId' => null,
        'category' => null,
        'severity' => null,
        'tag' => null,
        'enable' => 'int32',
        'notificationTarget' => null,
        'notificationTargetName' => null,
        'notificationTargetType' => null,
        'timeZone' => null
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
    * name  事件订阅名称
    * sourceType  事件源类型支持cluster，backup，disaster-recovery
    * sourceId  事件源ID
    * category  事件类别支持management，monitor，security，system alarm
    * severity  事件级别支持normal，warning
    * tag  事件标签
    * enable  是否开启订阅 1为开启，0为关闭
    * notificationTarget  消息通知地址
    * notificationTargetName  消息主题名称
    * notificationTargetType  消息通知类型只支持SMN
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sourceType' => 'source_type',
            'sourceId' => 'source_id',
            'category' => 'category',
            'severity' => 'severity',
            'tag' => 'tag',
            'enable' => 'enable',
            'notificationTarget' => 'notification_target',
            'notificationTargetName' => 'notification_target_name',
            'notificationTargetType' => 'notification_target_type',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  事件订阅名称
    * sourceType  事件源类型支持cluster，backup，disaster-recovery
    * sourceId  事件源ID
    * category  事件类别支持management，monitor，security，system alarm
    * severity  事件级别支持normal，warning
    * tag  事件标签
    * enable  是否开启订阅 1为开启，0为关闭
    * notificationTarget  消息通知地址
    * notificationTargetName  消息主题名称
    * notificationTargetType  消息通知类型只支持SMN
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sourceType' => 'setSourceType',
            'sourceId' => 'setSourceId',
            'category' => 'setCategory',
            'severity' => 'setSeverity',
            'tag' => 'setTag',
            'enable' => 'setEnable',
            'notificationTarget' => 'setNotificationTarget',
            'notificationTargetName' => 'setNotificationTargetName',
            'notificationTargetType' => 'setNotificationTargetType',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  事件订阅名称
    * sourceType  事件源类型支持cluster，backup，disaster-recovery
    * sourceId  事件源ID
    * category  事件类别支持management，monitor，security，system alarm
    * severity  事件级别支持normal，warning
    * tag  事件标签
    * enable  是否开启订阅 1为开启，0为关闭
    * notificationTarget  消息通知地址
    * notificationTargetName  消息主题名称
    * notificationTargetType  消息通知类型只支持SMN
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sourceType' => 'getSourceType',
            'sourceId' => 'getSourceId',
            'category' => 'getCategory',
            'severity' => 'getSeverity',
            'tag' => 'getTag',
            'enable' => 'getEnable',
            'notificationTarget' => 'getNotificationTarget',
            'notificationTargetName' => 'getNotificationTargetName',
            'notificationTargetType' => 'getNotificationTargetType',
            'timeZone' => 'getTimeZone'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['notificationTarget'] = isset($data['notificationTarget']) ? $data['notificationTarget'] : null;
        $this->container['notificationTargetName'] = isset($data['notificationTargetName']) ? $data['notificationTargetName'] : null;
        $this->container['notificationTargetType'] = isset($data['notificationTargetType']) ? $data['notificationTargetType'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
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
        if ($this->container['notificationTarget'] === null) {
            $invalidProperties[] = "'notificationTarget' can't be null";
        }
        if ($this->container['notificationTargetName'] === null) {
            $invalidProperties[] = "'notificationTargetName' can't be null";
        }
        if ($this->container['notificationTargetType'] === null) {
            $invalidProperties[] = "'notificationTargetType' can't be null";
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
    *  事件订阅名称
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
    * @param string $name 事件订阅名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sourceType
    *  事件源类型支持cluster，backup，disaster-recovery
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 事件源类型支持cluster，backup，disaster-recovery
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceId
    *  事件源ID
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 事件源ID
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets category
    *  事件类别支持management，monitor，security，system alarm
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 事件类别支持management，monitor，security，system alarm
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets severity
    *  事件级别支持normal，warning
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 事件级别支持normal，warning
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets tag
    *  事件标签
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 事件标签
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets enable
    *  是否开启订阅 1为开启，0为关闭
    *
    * @return int|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param int|null $enable 是否开启订阅 1为开启，0为关闭
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets notificationTarget
    *  消息通知地址
    *
    * @return string
    */
    public function getNotificationTarget()
    {
        return $this->container['notificationTarget'];
    }

    /**
    * Sets notificationTarget
    *
    * @param string $notificationTarget 消息通知地址
    *
    * @return $this
    */
    public function setNotificationTarget($notificationTarget)
    {
        $this->container['notificationTarget'] = $notificationTarget;
        return $this;
    }

    /**
    * Gets notificationTargetName
    *  消息主题名称
    *
    * @return string
    */
    public function getNotificationTargetName()
    {
        return $this->container['notificationTargetName'];
    }

    /**
    * Sets notificationTargetName
    *
    * @param string $notificationTargetName 消息主题名称
    *
    * @return $this
    */
    public function setNotificationTargetName($notificationTargetName)
    {
        $this->container['notificationTargetName'] = $notificationTargetName;
        return $this;
    }

    /**
    * Gets notificationTargetType
    *  消息通知类型只支持SMN
    *
    * @return string
    */
    public function getNotificationTargetType()
    {
        return $this->container['notificationTargetType'];
    }

    /**
    * Sets notificationTargetType
    *
    * @param string $notificationTargetType 消息通知类型只支持SMN
    *
    * @return $this
    */
    public function setNotificationTargetType($notificationTargetType)
    {
        $this->container['notificationTargetType'] = $notificationTargetType;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

