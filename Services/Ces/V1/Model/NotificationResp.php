<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotificationResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotificationResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 告警通知类型。 **取值范围**： 取值如下： notification：SMN通知； autoscaling：AS通知。
    * notificationList  **参数解释**： 告警状态发生变化时，被通知对象的列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'notificationList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 告警通知类型。 **取值范围**： 取值如下： notification：SMN通知； autoscaling：AS通知。
    * notificationList  **参数解释**： 告警状态发生变化时，被通知对象的列表。
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
    * type  **参数解释**： 告警通知类型。 **取值范围**： 取值如下： notification：SMN通知； autoscaling：AS通知。
    * notificationList  **参数解释**： 告警状态发生变化时，被通知对象的列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'notificationList' => 'notificationList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 告警通知类型。 **取值范围**： 取值如下： notification：SMN通知； autoscaling：AS通知。
    * notificationList  **参数解释**： 告警状态发生变化时，被通知对象的列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'notificationList' => 'setNotificationList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 告警通知类型。 **取值范围**： 取值如下： notification：SMN通知； autoscaling：AS通知。
    * notificationList  **参数解释**： 告警状态发生变化时，被通知对象的列表。
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
            if (!is_null($this->container['type']) && !preg_match("/^(notification|autoscaling|groupwatch|ecsRecovery)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(notification|autoscaling|groupwatch|ecsRecovery)$/.";
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
    *  **参数解释**： 告警通知类型。 **取值范围**： 取值如下： notification：SMN通知； autoscaling：AS通知。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 告警通知类型。 **取值范围**： 取值如下： notification：SMN通知； autoscaling：AS通知。
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
    *  **参数解释**： 告警状态发生变化时，被通知对象的列表。
    *
    * @return string[]|null
    */
    public function getNotificationList()
    {
        return $this->container['notificationList'];
    }

    /**
    * Sets notificationList
    *
    * @param string[]|null $notificationList **参数解释**： 告警状态发生变化时，被通知对象的列表。
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

