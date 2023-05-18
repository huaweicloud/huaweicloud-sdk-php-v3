<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PasswordEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PasswordEntry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceRole  会议角色。 - chair: 会议主持人 - general: 普通与会者
    * password  会议中角色的密码（明文）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conferenceRole' => 'string',
            'password' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceRole  会议角色。 - chair: 会议主持人 - general: 普通与会者
    * password  会议中角色的密码（明文）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conferenceRole' => null,
        'password' => null
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
    * conferenceRole  会议角色。 - chair: 会议主持人 - general: 普通与会者
    * password  会议中角色的密码（明文）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conferenceRole' => 'conferenceRole',
            'password' => 'password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceRole  会议角色。 - chair: 会议主持人 - general: 普通与会者
    * password  会议中角色的密码（明文）。
    *
    * @var string[]
    */
    protected static $setters = [
            'conferenceRole' => 'setConferenceRole',
            'password' => 'setPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceRole  会议角色。 - chair: 会议主持人 - general: 普通与会者
    * password  会议中角色的密码（明文）。
    *
    * @var string[]
    */
    protected static $getters = [
            'conferenceRole' => 'getConferenceRole',
            'password' => 'getPassword'
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
        $this->container['conferenceRole'] = isset($data['conferenceRole']) ? $data['conferenceRole'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
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
    * Gets conferenceRole
    *  会议角色。 - chair: 会议主持人 - general: 普通与会者
    *
    * @return string|null
    */
    public function getConferenceRole()
    {
        return $this->container['conferenceRole'];
    }

    /**
    * Sets conferenceRole
    *
    * @param string|null $conferenceRole 会议角色。 - chair: 会议主持人 - general: 普通与会者
    *
    * @return $this
    */
    public function setConferenceRole($conferenceRole)
    {
        $this->container['conferenceRole'] = $conferenceRole;
        return $this;
    }

    /**
    * Gets password
    *  会议中角色的密码（明文）。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 会议中角色的密码（明文）。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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

