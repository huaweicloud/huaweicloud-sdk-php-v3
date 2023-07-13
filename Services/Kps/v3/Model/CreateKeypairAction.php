<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKeypairAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKeypairAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成，长度不能超过64个字节
    * type  SSH密钥对的类型
    * publicKey  导入公钥的字符串信息。
    * scope  租户级或者用户级
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'publicKey' => 'string',
            'scope' => 'string',
            'userId' => 'string',
            'keyProtection' => '\HuaweiCloud\SDK\Kps\v3\Model\KeyProtection'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成，长度不能超过64个字节
    * type  SSH密钥对的类型
    * publicKey  导入公钥的字符串信息。
    * scope  租户级或者用户级
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'publicKey' => null,
        'scope' => null,
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
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成，长度不能超过64个字节
    * type  SSH密钥对的类型
    * publicKey  导入公钥的字符串信息。
    * scope  租户级或者用户级
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'publicKey' => 'public_key',
            'scope' => 'scope',
            'userId' => 'user_id',
            'keyProtection' => 'key_protection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成，长度不能超过64个字节
    * type  SSH密钥对的类型
    * publicKey  导入公钥的字符串信息。
    * scope  租户级或者用户级
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'publicKey' => 'setPublicKey',
            'scope' => 'setScope',
            'userId' => 'setUserId',
            'keyProtection' => 'setKeyProtection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成，长度不能超过64个字节
    * type  SSH密钥对的类型
    * publicKey  导入公钥的字符串信息。
    * scope  租户级或者用户级
    * userId  SSH密钥对所属的用户信息
    * keyProtection  keyProtection
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'publicKey' => 'getPublicKey',
            'scope' => 'getScope',
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
    const TYPE_SSH = 'ssh';
    const TYPE_X509 = 'x509';
    const SCOPE_DOMAIN = 'domain';
    const SCOPE_USER = 'user';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SSH,
            self::TYPE_X509,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_DOMAIN,
            self::SCOPE_USER,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
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
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['publicKey']) && (mb_strlen($this->container['publicKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'publicKey', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['publicKey']) && (mb_strlen($this->container['publicKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicKey', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getScopeAllowableValues();
                if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['userId']) && !preg_match("/^[0-9a-zA-Z]{1,64}$/", $this->container['userId'])) {
                $invalidProperties[] = "invalid value for 'userId', must be conform to the pattern /^[0-9a-zA-Z]{1,64}$/.";
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
    *  SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成，长度不能超过64个字节
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
    * @param string $name SSH密钥对的名称。 - 新创建的密钥对名称不能和已有密钥对的名称相同。 - SSH密钥对名称由英文字母、数字、下划线、中划线组成，长度不能超过64个字节
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  SSH密钥对的类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type SSH密钥对的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets publicKey
    *  导入公钥的字符串信息。
    *
    * @return string|null
    */
    public function getPublicKey()
    {
        return $this->container['publicKey'];
    }

    /**
    * Sets publicKey
    *
    * @param string|null $publicKey 导入公钥的字符串信息。
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets scope
    *  租户级或者用户级
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 租户级或者用户级
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
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
    * @return \HuaweiCloud\SDK\Kps\v3\Model\KeyProtection|null
    */
    public function getKeyProtection()
    {
        return $this->container['keyProtection'];
    }

    /**
    * Sets keyProtection
    *
    * @param \HuaweiCloud\SDK\Kps\v3\Model\KeyProtection|null $keyProtection keyProtection
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

