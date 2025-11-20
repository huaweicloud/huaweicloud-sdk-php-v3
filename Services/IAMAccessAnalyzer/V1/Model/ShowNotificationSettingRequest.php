<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNotificationSettingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNotificationSettingRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationSettingId  消息通知配置的唯一标识符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationSettingId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationSettingId  消息通知配置的唯一标识符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationSettingId' => null
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
    * notificationSettingId  消息通知配置的唯一标识符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationSettingId' => 'notification_setting_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationSettingId  消息通知配置的唯一标识符。
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationSettingId' => 'setNotificationSettingId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationSettingId  消息通知配置的唯一标识符。
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationSettingId' => 'getNotificationSettingId'
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
        $this->container['notificationSettingId'] = isset($data['notificationSettingId']) ? $data['notificationSettingId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['notificationSettingId'] === null) {
            $invalidProperties[] = "'notificationSettingId' can't be null";
        }
            if ((mb_strlen($this->container['notificationSettingId']) > 36)) {
                $invalidProperties[] = "invalid value for 'notificationSettingId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['notificationSettingId']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationSettingId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['notificationSettingId'])) {
                $invalidProperties[] = "invalid value for 'notificationSettingId', must be conform to the pattern /^[\\w-]+$/.";
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
    * Gets notificationSettingId
    *  消息通知配置的唯一标识符。
    *
    * @return string
    */
    public function getNotificationSettingId()
    {
        return $this->container['notificationSettingId'];
    }

    /**
    * Sets notificationSettingId
    *
    * @param string $notificationSettingId 消息通知配置的唯一标识符。
    *
    * @return $this
    */
    public function setNotificationSettingId($notificationSettingId)
    {
        $this->container['notificationSettingId'] = $notificationSettingId;
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

