<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetInstancePasswordBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetInstancePasswordBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newPassword  重置的新密码
    * noPasswordAccess  是否重置为免密码访问缓存实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newPassword' => 'string',
            'noPasswordAccess' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newPassword  重置的新密码
    * noPasswordAccess  是否重置为免密码访问缓存实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newPassword' => null,
        'noPasswordAccess' => null
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
    * newPassword  重置的新密码
    * noPasswordAccess  是否重置为免密码访问缓存实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newPassword' => 'new_password',
            'noPasswordAccess' => 'no_password_access'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newPassword  重置的新密码
    * noPasswordAccess  是否重置为免密码访问缓存实例
    *
    * @var string[]
    */
    protected static $setters = [
            'newPassword' => 'setNewPassword',
            'noPasswordAccess' => 'setNoPasswordAccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newPassword  重置的新密码
    * noPasswordAccess  是否重置为免密码访问缓存实例
    *
    * @var string[]
    */
    protected static $getters = [
            'newPassword' => 'getNewPassword',
            'noPasswordAccess' => 'getNoPasswordAccess'
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
        $this->container['noPasswordAccess'] = isset($data['noPasswordAccess']) ? $data['noPasswordAccess'] : null;
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
    * Gets newPassword
    *  重置的新密码
    *
    * @return string|null
    */
    public function getNewPassword()
    {
        return $this->container['newPassword'];
    }

    /**
    * Sets newPassword
    *
    * @param string|null $newPassword 重置的新密码
    *
    * @return $this
    */
    public function setNewPassword($newPassword)
    {
        $this->container['newPassword'] = $newPassword;
        return $this;
    }

    /**
    * Gets noPasswordAccess
    *  是否重置为免密码访问缓存实例
    *
    * @return bool|null
    */
    public function getNoPasswordAccess()
    {
        return $this->container['noPasswordAccess'];
    }

    /**
    * Sets noPasswordAccess
    *
    * @param bool|null $noPasswordAccess 是否重置为免密码访问缓存实例
    *
    * @return $this
    */
    public function setNoPasswordAccess($noPasswordAccess)
    {
        $this->container['noPasswordAccess'] = $noPasswordAccess;
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

