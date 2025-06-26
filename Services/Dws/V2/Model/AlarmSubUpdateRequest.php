<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmSubUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmSubUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型，支持SMN。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'enable' => 'int',
            'alarmLevel' => 'string',
            'notificationTarget' => 'string',
            'notificationTargetName' => 'string',
            'notificationTargetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型，支持SMN。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'enable' => null,
        'alarmLevel' => null,
        'notificationTarget' => null,
        'notificationTargetName' => null,
        'notificationTargetType' => null
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
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型，支持SMN。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'enable' => 'enable',
            'alarmLevel' => 'alarm_level',
            'notificationTarget' => 'notification_target',
            'notificationTargetName' => 'notification_target_name',
            'notificationTargetType' => 'notification_target_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型，支持SMN。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'enable' => 'setEnable',
            'alarmLevel' => 'setAlarmLevel',
            'notificationTarget' => 'setNotificationTarget',
            'notificationTargetName' => 'setNotificationTargetName',
            'notificationTargetType' => 'setNotificationTargetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型，支持SMN。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'enable' => 'getEnable',
            'alarmLevel' => 'getAlarmLevel',
            'notificationTarget' => 'getNotificationTarget',
            'notificationTargetName' => 'getNotificationTargetName',
            'notificationTargetType' => 'getNotificationTargetType'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['notificationTarget'] = isset($data['notificationTarget']) ? $data['notificationTarget'] : null;
        $this->container['notificationTargetName'] = isset($data['notificationTargetName']) ? $data['notificationTargetName'] : null;
        $this->container['notificationTargetType'] = isset($data['notificationTargetType']) ? $data['notificationTargetType'] : null;
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
    *  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
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
    * @param string $name **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enable
    *  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
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
    * @param int|null $enable **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel **参数解释**： 告警级别。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets notificationTarget
    *  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
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
    * @param string $notificationTarget **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
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
    *  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
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
    * @param string $notificationTargetName **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 消息主题类型，支持SMN。 **取值范围**： 不涉及。
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
    * @param string $notificationTargetType **参数解释**： 消息主题类型，支持SMN。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNotificationTargetType($notificationTargetType)
    {
        $this->container['notificationTargetType'] = $notificationTargetType;
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

