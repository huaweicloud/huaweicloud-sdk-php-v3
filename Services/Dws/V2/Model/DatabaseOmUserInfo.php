<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseOmUserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseOmUserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * omUserStatus  **参数解释**： 运维账户状态。 **取值范围**： on、off
    * omUserExpiresTime  **参数解释**： 运维账户过期状态。格式是有效的时间戳。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'omUserStatus' => 'string',
            'omUserExpiresTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * omUserStatus  **参数解释**： 运维账户状态。 **取值范围**： on、off
    * omUserExpiresTime  **参数解释**： 运维账户过期状态。格式是有效的时间戳。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'omUserStatus' => null,
        'omUserExpiresTime' => 'int64'
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
    * omUserStatus  **参数解释**： 运维账户状态。 **取值范围**： on、off
    * omUserExpiresTime  **参数解释**： 运维账户过期状态。格式是有效的时间戳。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'omUserStatus' => 'om_user_status',
            'omUserExpiresTime' => 'om_user_expires_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * omUserStatus  **参数解释**： 运维账户状态。 **取值范围**： on、off
    * omUserExpiresTime  **参数解释**： 运维账户过期状态。格式是有效的时间戳。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'omUserStatus' => 'setOmUserStatus',
            'omUserExpiresTime' => 'setOmUserExpiresTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * omUserStatus  **参数解释**： 运维账户状态。 **取值范围**： on、off
    * omUserExpiresTime  **参数解释**： 运维账户过期状态。格式是有效的时间戳。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'omUserStatus' => 'getOmUserStatus',
            'omUserExpiresTime' => 'getOmUserExpiresTime'
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
        $this->container['omUserStatus'] = isset($data['omUserStatus']) ? $data['omUserStatus'] : null;
        $this->container['omUserExpiresTime'] = isset($data['omUserExpiresTime']) ? $data['omUserExpiresTime'] : null;
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
    * Gets omUserStatus
    *  **参数解释**： 运维账户状态。 **取值范围**： on、off
    *
    * @return string|null
    */
    public function getOmUserStatus()
    {
        return $this->container['omUserStatus'];
    }

    /**
    * Sets omUserStatus
    *
    * @param string|null $omUserStatus **参数解释**： 运维账户状态。 **取值范围**： on、off
    *
    * @return $this
    */
    public function setOmUserStatus($omUserStatus)
    {
        $this->container['omUserStatus'] = $omUserStatus;
        return $this;
    }

    /**
    * Gets omUserExpiresTime
    *  **参数解释**： 运维账户过期状态。格式是有效的时间戳。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getOmUserExpiresTime()
    {
        return $this->container['omUserExpiresTime'];
    }

    /**
    * Sets omUserExpiresTime
    *
    * @param int|null $omUserExpiresTime **参数解释**： 运维账户过期状态。格式是有效的时间戳。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOmUserExpiresTime($omUserExpiresTime)
    {
        $this->container['omUserExpiresTime'] = $omUserExpiresTime;
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

