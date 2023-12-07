<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotificationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotificationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationType  通知类型。
    * notificationName  标识关键操作通知名称。 在不传入该字段的情况下，将查询当前租户所有的关键操作通知。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationType' => 'string',
            'notificationName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationType  通知类型。
    * notificationName  标识关键操作通知名称。 在不传入该字段的情况下，将查询当前租户所有的关键操作通知。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationType' => null,
        'notificationName' => null
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
    * notificationType  通知类型。
    * notificationName  标识关键操作通知名称。 在不传入该字段的情况下，将查询当前租户所有的关键操作通知。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationType' => 'notification_type',
            'notificationName' => 'notification_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationType  通知类型。
    * notificationName  标识关键操作通知名称。 在不传入该字段的情况下，将查询当前租户所有的关键操作通知。
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationType' => 'setNotificationType',
            'notificationName' => 'setNotificationName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationType  通知类型。
    * notificationName  标识关键操作通知名称。 在不传入该字段的情况下，将查询当前租户所有的关键操作通知。
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationType' => 'getNotificationType',
            'notificationName' => 'getNotificationName'
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
    const NOTIFICATION_TYPE_SMN = 'smn';
    const NOTIFICATION_TYPE_FUN = 'fun';
    

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
        $this->container['notificationType'] = isset($data['notificationType']) ? $data['notificationType'] : null;
        $this->container['notificationName'] = isset($data['notificationName']) ? $data['notificationName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['notificationType'] === null) {
            $invalidProperties[] = "'notificationType' can't be null";
        }
            $allowedValues = $this->getNotificationTypeAllowableValues();
                if (!is_null($this->container['notificationType']) && !in_array($this->container['notificationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['notificationName']) && (mb_strlen($this->container['notificationName']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationName']) && (mb_strlen($this->container['notificationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationName', the character length must be bigger than or equal to 1.";
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
    * Gets notificationType
    *  通知类型。
    *
    * @return string
    */
    public function getNotificationType()
    {
        return $this->container['notificationType'];
    }

    /**
    * Sets notificationType
    *
    * @param string $notificationType 通知类型。
    *
    * @return $this
    */
    public function setNotificationType($notificationType)
    {
        $this->container['notificationType'] = $notificationType;
        return $this;
    }

    /**
    * Gets notificationName
    *  标识关键操作通知名称。 在不传入该字段的情况下，将查询当前租户所有的关键操作通知。
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
    * @param string|null $notificationName 标识关键操作通知名称。 在不传入该字段的情况下，将查询当前租户所有的关键操作通知。
    *
    * @return $this
    */
    public function setNotificationName($notificationName)
    {
        $this->container['notificationName'] = $notificationName;
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

