<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoteMirrorSyncInfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoteMirrorSyncInfoDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * username  **参数解释：** 用户名(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * password  **参数解释：** 密码(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * endpointUuid  **参数解释：** 拓展点uuid。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forceFetch  **参数解释：** 允许强制同步。 **约束限制：** 不涉及。 **取值范围：** - true，强制同步。 - false，不强制同步。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'username' => 'string',
            'password' => 'string',
            'endpointUuid' => 'string',
            'forceFetch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * username  **参数解释：** 用户名(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * password  **参数解释：** 密码(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * endpointUuid  **参数解释：** 拓展点uuid。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forceFetch  **参数解释：** 允许强制同步。 **约束限制：** 不涉及。 **取值范围：** - true，强制同步。 - false，不强制同步。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'username' => null,
        'password' => null,
        'endpointUuid' => null,
        'forceFetch' => null
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
    * username  **参数解释：** 用户名(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * password  **参数解释：** 密码(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * endpointUuid  **参数解释：** 拓展点uuid。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forceFetch  **参数解释：** 允许强制同步。 **约束限制：** 不涉及。 **取值范围：** - true，强制同步。 - false，不强制同步。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'username' => 'username',
            'password' => 'password',
            'endpointUuid' => 'endpoint_uuid',
            'forceFetch' => 'force_fetch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * username  **参数解释：** 用户名(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * password  **参数解释：** 密码(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * endpointUuid  **参数解释：** 拓展点uuid。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forceFetch  **参数解释：** 允许强制同步。 **约束限制：** 不涉及。 **取值范围：** - true，强制同步。 - false，不强制同步。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'username' => 'setUsername',
            'password' => 'setPassword',
            'endpointUuid' => 'setEndpointUuid',
            'forceFetch' => 'setForceFetch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * username  **参数解释：** 用户名(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * password  **参数解释：** 密码(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * endpointUuid  **参数解释：** 拓展点uuid。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forceFetch  **参数解释：** 允许强制同步。 **约束限制：** 不涉及。 **取值范围：** - true，强制同步。 - false，不强制同步。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'username' => 'getUsername',
            'password' => 'getPassword',
            'endpointUuid' => 'getEndpointUuid',
            'forceFetch' => 'getForceFetch'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['endpointUuid'] = isset($data['endpointUuid']) ? $data['endpointUuid'] : null;
        $this->container['forceFetch'] = isset($data['forceFetch']) ? $data['forceFetch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 500)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 0)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 500)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 0)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endpointUuid']) && (mb_strlen($this->container['endpointUuid']) > 100)) {
                $invalidProperties[] = "invalid value for 'endpointUuid', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['endpointUuid']) && (mb_strlen($this->container['endpointUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'endpointUuid', the character length must be bigger than or equal to 0.";
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
    * Gets username
    *  **参数解释：** 用户名(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数解释：** 用户名(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释：** 密码(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
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
    * @param string|null $password **参数解释：** 密码(需要base64加密)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets endpointUuid
    *  **参数解释：** 拓展点uuid。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getEndpointUuid()
    {
        return $this->container['endpointUuid'];
    }

    /**
    * Sets endpointUuid
    *
    * @param string|null $endpointUuid **参数解释：** 拓展点uuid。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEndpointUuid($endpointUuid)
    {
        $this->container['endpointUuid'] = $endpointUuid;
        return $this;
    }

    /**
    * Gets forceFetch
    *  **参数解释：** 允许强制同步。 **约束限制：** 不涉及。 **取值范围：** - true，强制同步。 - false，不强制同步。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getForceFetch()
    {
        return $this->container['forceFetch'];
    }

    /**
    * Sets forceFetch
    *
    * @param bool|null $forceFetch **参数解释：** 允许强制同步。 **约束限制：** 不涉及。 **取值范围：** - true，强制同步。 - false，不强制同步。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setForceFetch($forceFetch)
    {
        $this->container['forceFetch'] = $forceFetch;
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

