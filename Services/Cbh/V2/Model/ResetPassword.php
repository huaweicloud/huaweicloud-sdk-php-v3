<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetPassword implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetPassword';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newPassword  admin用户修改后的新密码，8-32位，大写字母、小写字母、数字和特殊字符。
    * serverId  serverId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newPassword' => 'string',
            'serverId' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newPassword  admin用户修改后的新密码，8-32位，大写字母、小写字母、数字和特殊字符。
    * serverId  serverId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newPassword' => null,
        'serverId' => null
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
    * newPassword  admin用户修改后的新密码，8-32位，大写字母、小写字母、数字和特殊字符。
    * serverId  serverId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newPassword' => 'new_password',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newPassword  admin用户修改后的新密码，8-32位，大写字母、小写字母、数字和特殊字符。
    * serverId  serverId
    *
    * @var string[]
    */
    protected static $setters = [
            'newPassword' => 'setNewPassword',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newPassword  admin用户修改后的新密码，8-32位，大写字母、小写字母、数字和特殊字符。
    * serverId  serverId
    *
    * @var string[]
    */
    protected static $getters = [
            'newPassword' => 'getNewPassword',
            'serverId' => 'getServerId'
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
        $this->container['newPassword'] = isset($data['newPassword']) ? $data['newPassword'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['newPassword'] === null) {
            $invalidProperties[] = "'newPassword' can't be null";
        }
            if ((mb_strlen($this->container['newPassword']) > 64)) {
                $invalidProperties[] = "invalid value for 'newPassword', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['newPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'newPassword', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
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
    * Gets newPassword
    *  admin用户修改后的新密码，8-32位，大写字母、小写字母、数字和特殊字符。
    *
    * @return string
    */
    public function getNewPassword()
    {
        return $this->container['newPassword'];
    }

    /**
    * Sets newPassword
    *
    * @param string $newPassword admin用户修改后的新密码，8-32位，大写字母、小写字母、数字和特殊字符。
    *
    * @return $this
    */
    public function setNewPassword($newPassword)
    {
        $this->container['newPassword'] = $newPassword;
        return $this;
    }

    /**
    * Gets serverId
    *  serverId
    *
    * @return object
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param object $serverId serverId
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

