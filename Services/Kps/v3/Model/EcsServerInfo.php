<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EcsServerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EcsServerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  需要绑定(替换或重置)SSH密钥对的虚拟机id
    * auth  auth
    * disablePassword  - true：禁用虚拟机的ssh登陆。 - false：不禁用虚拟机的ssh登陆。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'auth' => '\HuaweiCloud\SDK\Kps\v3\Model\Auth',
            'disablePassword' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  需要绑定(替换或重置)SSH密钥对的虚拟机id
    * auth  auth
    * disablePassword  - true：禁用虚拟机的ssh登陆。 - false：不禁用虚拟机的ssh登陆。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'auth' => null,
        'disablePassword' => null
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
    * id  需要绑定(替换或重置)SSH密钥对的虚拟机id
    * auth  auth
    * disablePassword  - true：禁用虚拟机的ssh登陆。 - false：不禁用虚拟机的ssh登陆。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'auth' => 'auth',
            'disablePassword' => 'disable_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  需要绑定(替换或重置)SSH密钥对的虚拟机id
    * auth  auth
    * disablePassword  - true：禁用虚拟机的ssh登陆。 - false：不禁用虚拟机的ssh登陆。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'auth' => 'setAuth',
            'disablePassword' => 'setDisablePassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  需要绑定(替换或重置)SSH密钥对的虚拟机id
    * auth  auth
    * disablePassword  - true：禁用虚拟机的ssh登陆。 - false：不禁用虚拟机的ssh登陆。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'auth' => 'getAuth',
            'disablePassword' => 'getDisablePassword'
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
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['disablePassword'] = isset($data['disablePassword']) ? $data['disablePassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  需要绑定(替换或重置)SSH密钥对的虚拟机id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 需要绑定(替换或重置)SSH密钥对的虚拟机id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets auth
    *  auth
    *
    * @return \HuaweiCloud\SDK\Kps\v3\Model\Auth|null
    */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
    * Sets auth
    *
    * @param \HuaweiCloud\SDK\Kps\v3\Model\Auth|null $auth auth
    *
    * @return $this
    */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;
        return $this;
    }

    /**
    * Gets disablePassword
    *  - true：禁用虚拟机的ssh登陆。 - false：不禁用虚拟机的ssh登陆。
    *
    * @return bool|null
    */
    public function getDisablePassword()
    {
        return $this->container['disablePassword'];
    }

    /**
    * Sets disablePassword
    *
    * @param bool|null $disablePassword - true：禁用虚拟机的ssh登陆。 - false：不禁用虚拟机的ssh登陆。
    *
    * @return $this
    */
    public function setDisablePassword($disablePassword)
    {
        $this->container['disablePassword'] = $disablePassword;
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

