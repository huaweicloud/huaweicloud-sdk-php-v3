<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAlarmSubResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAlarmSubResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 告警订阅ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型。 **取值范围**： 不涉及。
    * language  **参数解释**： 语言。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： 时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'enable' => 'int',
            'alarmLevel' => 'string',
            'projectId' => 'string',
            'nameSpace' => 'string',
            'notificationTarget' => 'string',
            'notificationTargetName' => 'string',
            'notificationTargetType' => 'string',
            'language' => 'string',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 告警订阅ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型。 **取值范围**： 不涉及。
    * language  **参数解释**： 语言。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： 时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'enable' => null,
        'alarmLevel' => null,
        'projectId' => null,
        'nameSpace' => null,
        'notificationTarget' => null,
        'notificationTargetName' => null,
        'notificationTargetType' => null,
        'language' => null,
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
    * id  **参数解释**： 告警订阅ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型。 **取值范围**： 不涉及。
    * language  **参数解释**： 语言。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： 时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'enable' => 'enable',
            'alarmLevel' => 'alarm_level',
            'projectId' => 'project_id',
            'nameSpace' => 'name_space',
            'notificationTarget' => 'notification_target',
            'notificationTargetName' => 'notification_target_name',
            'notificationTargetType' => 'notification_target_type',
            'language' => 'language',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 告警订阅ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型。 **取值范围**： 不涉及。
    * language  **参数解释**： 语言。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： 时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'enable' => 'setEnable',
            'alarmLevel' => 'setAlarmLevel',
            'projectId' => 'setProjectId',
            'nameSpace' => 'setNameSpace',
            'notificationTarget' => 'setNotificationTarget',
            'notificationTargetName' => 'setNotificationTargetName',
            'notificationTargetType' => 'setNotificationTargetType',
            'language' => 'setLanguage',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 告警订阅ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
    * enable  **参数解释**： 是否开启订阅。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * notificationTarget  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    * notificationTargetName  **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
    * notificationTargetType  **参数解释**： 消息主题类型。 **取值范围**： 不涉及。
    * language  **参数解释**： 语言。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： 时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'enable' => 'getEnable',
            'alarmLevel' => 'getAlarmLevel',
            'projectId' => 'getProjectId',
            'nameSpace' => 'getNameSpace',
            'notificationTarget' => 'getNotificationTarget',
            'notificationTargetName' => 'getNotificationTargetName',
            'notificationTargetType' => 'getNotificationTargetType',
            'language' => 'getLanguage',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['nameSpace'] = isset($data['nameSpace']) ? $data['nameSpace'] : null;
        $this->container['notificationTarget'] = isset($data['notificationTarget']) ? $data['notificationTarget'] : null;
        $this->container['notificationTargetName'] = isset($data['notificationTargetName']) ? $data['notificationTargetName'] : null;
        $this->container['notificationTargetType'] = isset($data['notificationTargetType']) ? $data['notificationTargetType'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
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
    * Gets id
    *  **参数解释**： 告警订阅ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 告警订阅ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 告警订阅名称。 **取值范围**： 不涉及。
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
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 不涉及。
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
    * @param string|null $projectId **参数解释**： 项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets nameSpace
    *  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNameSpace()
    {
        return $this->container['nameSpace'];
    }

    /**
    * Sets nameSpace
    *
    * @param string|null $nameSpace **参数解释**： 所属服务。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNameSpace($nameSpace)
    {
        $this->container['nameSpace'] = $nameSpace;
        return $this;
    }

    /**
    * Gets notificationTarget
    *  **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNotificationTarget()
    {
        return $this->container['notificationTarget'];
    }

    /**
    * Sets notificationTarget
    *
    * @param string|null $notificationTarget **参数解释**： 消息主题地址。 **取值范围**： 不涉及。
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
    * @return string|null
    */
    public function getNotificationTargetName()
    {
        return $this->container['notificationTargetName'];
    }

    /**
    * Sets notificationTargetName
    *
    * @param string|null $notificationTargetName **参数解释**： 消息主题名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 消息主题类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNotificationTargetType()
    {
        return $this->container['notificationTargetType'];
    }

    /**
    * Sets notificationTargetType
    *
    * @param string|null $notificationTargetType **参数解释**： 消息主题类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNotificationTargetType($notificationTargetType)
    {
        $this->container['notificationTargetType'] = $notificationTargetType;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释**： 语言。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释**： 语言。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets timeZone
    *  **参数解释**： 时区。 **取值范围**： 不涉及。
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
    * @param string|null $timeZone **参数解释**： 时区。 **取值范围**： 不涉及。
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

