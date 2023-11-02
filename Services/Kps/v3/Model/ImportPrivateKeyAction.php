<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportPrivateKeyAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportPrivateKeyAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成,长度不能超过64个字节。
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'userId' => 'string',
            'keyProtection' => '\HuaweiCloud\SDK\Kps\v3\Model\KeyProtection'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成,长度不能超过64个字节。
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'userId' => null,
        'keyProtection' => null
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
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成,长度不能超过64个字节。
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'userId' => 'user_id',
            'keyProtection' => 'key_protection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成,长度不能超过64个字节。
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'userId' => 'setUserId',
            'keyProtection' => 'setKeyProtection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成,长度不能超过64个字节。
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'userId' => 'getUserId',
            'keyProtection' => 'getKeyProtection'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['keyProtection'] = isset($data['keyProtection']) ? $data['keyProtection'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9_-]{1,255}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9_-]{1,255}$/.";
            }
            if (!is_null($this->container['userId']) && !preg_match("/^[0-9a-zA-Z]{1,64}$/", $this->container['userId'])) {
                $invalidProperties[] = "invalid value for 'userId', must be conform to the pattern /^[0-9a-zA-Z]{1,64}$/.";
            }
        if ($this->container['keyProtection'] === null) {
            $invalidProperties[] = "'keyProtection' can't be null";
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
    * Gets name
    *  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成,长度不能超过64个字节。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成,长度不能超过64个字节。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userId
    *  SSH密钥对所属的用户信息
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId SSH密钥对所属的用户信息
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets keyProtection
    *  keyProtection
    *
    * @return \HuaweiCloud\SDK\Kps\v3\Model\KeyProtection
    */
    public function getKeyProtection()
    {
        return $this->container['keyProtection'];
    }

    /**
    * Sets keyProtection
    *
    * @param \HuaweiCloud\SDK\Kps\v3\Model\KeyProtection $keyProtection keyProtection
    *
    * @return $this
    */
    public function setKeyProtection($keyProtection)
    {
        $this->container['keyProtection'] = $keyProtection;
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

