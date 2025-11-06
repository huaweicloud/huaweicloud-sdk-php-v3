<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberAccess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberAccess';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessLevel  **参数解释：** 访问级别。 **约束限制：** 不涉及。
    * notificationLevel  **参数解释：** 通知级别。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessLevel' => 'int',
            'notificationLevel' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessLevel  **参数解释：** 访问级别。 **约束限制：** 不涉及。
    * notificationLevel  **参数解释：** 通知级别。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessLevel' => null,
        'notificationLevel' => null
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
    * accessLevel  **参数解释：** 访问级别。 **约束限制：** 不涉及。
    * notificationLevel  **参数解释：** 通知级别。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessLevel' => 'access_level',
            'notificationLevel' => 'notification_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessLevel  **参数解释：** 访问级别。 **约束限制：** 不涉及。
    * notificationLevel  **参数解释：** 通知级别。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessLevel' => 'setAccessLevel',
            'notificationLevel' => 'setNotificationLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessLevel  **参数解释：** 访问级别。 **约束限制：** 不涉及。
    * notificationLevel  **参数解释：** 通知级别。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessLevel' => 'getAccessLevel',
            'notificationLevel' => 'getNotificationLevel'
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
        $this->container['accessLevel'] = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->container['notificationLevel'] = isset($data['notificationLevel']) ? $data['notificationLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessLevel']) && ($this->container['accessLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'accessLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationLevel']) && ($this->container['notificationLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'notificationLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['notificationLevel']) && ($this->container['notificationLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'notificationLevel', must be bigger than or equal to 1.";
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
    * Gets accessLevel
    *  **参数解释：** 访问级别。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getAccessLevel()
    {
        return $this->container['accessLevel'];
    }

    /**
    * Sets accessLevel
    *
    * @param int|null $accessLevel **参数解释：** 访问级别。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setAccessLevel($accessLevel)
    {
        $this->container['accessLevel'] = $accessLevel;
        return $this;
    }

    /**
    * Gets notificationLevel
    *  **参数解释：** 通知级别。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getNotificationLevel()
    {
        return $this->container['notificationLevel'];
    }

    /**
    * Sets notificationLevel
    *
    * @param int|null $notificationLevel **参数解释：** 通知级别。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setNotificationLevel($notificationLevel)
    {
        $this->container['notificationLevel'] = $notificationLevel;
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

