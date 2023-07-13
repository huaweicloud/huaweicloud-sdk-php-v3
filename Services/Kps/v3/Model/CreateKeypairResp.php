<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKeypairResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKeypairResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型
    * publicKey  SSH密钥对对应的publicKey信息
    * privateKey  SSH密钥对对应的privateKey信息 - 创建SSH密钥对时，响应中包括private_key的信息。 - 导入SSH密钥对时，响应中不包括private_key的信息。
    * fingerprint  SSH密钥对应指纹信息
    * userId  SSH密钥对所属的用户信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'publicKey' => 'string',
            'privateKey' => 'string',
            'fingerprint' => 'string',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型
    * publicKey  SSH密钥对对应的publicKey信息
    * privateKey  SSH密钥对对应的privateKey信息 - 创建SSH密钥对时，响应中包括private_key的信息。 - 导入SSH密钥对时，响应中不包括private_key的信息。
    * fingerprint  SSH密钥对应指纹信息
    * userId  SSH密钥对所属的用户信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'publicKey' => null,
        'privateKey' => null,
        'fingerprint' => null,
        'userId' => null
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
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型
    * publicKey  SSH密钥对对应的publicKey信息
    * privateKey  SSH密钥对对应的privateKey信息 - 创建SSH密钥对时，响应中包括private_key的信息。 - 导入SSH密钥对时，响应中不包括private_key的信息。
    * fingerprint  SSH密钥对应指纹信息
    * userId  SSH密钥对所属的用户信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'publicKey' => 'public_key',
            'privateKey' => 'private_key',
            'fingerprint' => 'fingerprint',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型
    * publicKey  SSH密钥对对应的publicKey信息
    * privateKey  SSH密钥对对应的privateKey信息 - 创建SSH密钥对时，响应中包括private_key的信息。 - 导入SSH密钥对时，响应中不包括private_key的信息。
    * fingerprint  SSH密钥对应指纹信息
    * userId  SSH密钥对所属的用户信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'publicKey' => 'setPublicKey',
            'privateKey' => 'setPrivateKey',
            'fingerprint' => 'setFingerprint',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型
    * publicKey  SSH密钥对对应的publicKey信息
    * privateKey  SSH密钥对对应的privateKey信息 - 创建SSH密钥对时，响应中包括private_key的信息。 - 导入SSH密钥对时，响应中不包括private_key的信息。
    * fingerprint  SSH密钥对应指纹信息
    * userId  SSH密钥对所属的用户信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'publicKey' => 'getPublicKey',
            'privateKey' => 'getPrivateKey',
            'fingerprint' => 'getFingerprint',
            'userId' => 'getUserId'
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
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/^[A-Za-z0-9_-]{1,255}$/", $this->container['name'])) {
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
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) > 65535)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) > 255)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) < 0)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be bigger than or equal to 0.";
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
    *  SSH密钥对的名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name SSH密钥对的名称
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
    *  SSH密钥对对应的publicKey信息
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
    * @param string|null $publicKey SSH密钥对对应的publicKey信息
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets privateKey
    *  SSH密钥对对应的privateKey信息 - 创建SSH密钥对时，响应中包括private_key的信息。 - 导入SSH密钥对时，响应中不包括private_key的信息。
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey SSH密钥对对应的privateKey信息 - 创建SSH密钥对时，响应中包括private_key的信息。 - 导入SSH密钥对时，响应中不包括private_key的信息。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets fingerprint
    *  SSH密钥对应指纹信息
    *
    * @return string|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string|null $fingerprint SSH密钥对应指纹信息
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
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

