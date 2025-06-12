<?php

namespace HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyCredentials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyCredentials';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKeyId  用于临时安全凭证的标识符
    * expiration  临时安全凭证到期的日期
    * secretAccessKey  用于对请求进行签名的密钥
    * sessionToken  用于临时凭证的令牌
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKeyId' => 'string',
            'expiration' => 'int',
            'secretAccessKey' => 'string',
            'sessionToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKeyId  用于临时安全凭证的标识符
    * expiration  临时安全凭证到期的日期
    * secretAccessKey  用于对请求进行签名的密钥
    * sessionToken  用于临时凭证的令牌
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKeyId' => null,
        'expiration' => 'int64',
        'secretAccessKey' => null,
        'sessionToken' => null
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
    * accessKeyId  用于临时安全凭证的标识符
    * expiration  临时安全凭证到期的日期
    * secretAccessKey  用于对请求进行签名的密钥
    * sessionToken  用于临时凭证的令牌
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKeyId' => 'access_key_id',
            'expiration' => 'expiration',
            'secretAccessKey' => 'secret_access_key',
            'sessionToken' => 'session_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKeyId  用于临时安全凭证的标识符
    * expiration  临时安全凭证到期的日期
    * secretAccessKey  用于对请求进行签名的密钥
    * sessionToken  用于临时凭证的令牌
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKeyId' => 'setAccessKeyId',
            'expiration' => 'setExpiration',
            'secretAccessKey' => 'setSecretAccessKey',
            'sessionToken' => 'setSessionToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKeyId  用于临时安全凭证的标识符
    * expiration  临时安全凭证到期的日期
    * secretAccessKey  用于对请求进行签名的密钥
    * sessionToken  用于临时凭证的令牌
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKeyId' => 'getAccessKeyId',
            'expiration' => 'getExpiration',
            'secretAccessKey' => 'getSecretAccessKey',
            'sessionToken' => 'getSessionToken'
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
        $this->container['accessKeyId'] = isset($data['accessKeyId']) ? $data['accessKeyId'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['secretAccessKey'] = isset($data['secretAccessKey']) ? $data['secretAccessKey'] : null;
        $this->container['sessionToken'] = isset($data['sessionToken']) ? $data['sessionToken'] : null;
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
    * Gets accessKeyId
    *  用于临时安全凭证的标识符
    *
    * @return string|null
    */
    public function getAccessKeyId()
    {
        return $this->container['accessKeyId'];
    }

    /**
    * Sets accessKeyId
    *
    * @param string|null $accessKeyId 用于临时安全凭证的标识符
    *
    * @return $this
    */
    public function setAccessKeyId($accessKeyId)
    {
        $this->container['accessKeyId'] = $accessKeyId;
        return $this;
    }

    /**
    * Gets expiration
    *  临时安全凭证到期的日期
    *
    * @return int|null
    */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
    * Sets expiration
    *
    * @param int|null $expiration 临时安全凭证到期的日期
    *
    * @return $this
    */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;
        return $this;
    }

    /**
    * Gets secretAccessKey
    *  用于对请求进行签名的密钥
    *
    * @return string|null
    */
    public function getSecretAccessKey()
    {
        return $this->container['secretAccessKey'];
    }

    /**
    * Sets secretAccessKey
    *
    * @param string|null $secretAccessKey 用于对请求进行签名的密钥
    *
    * @return $this
    */
    public function setSecretAccessKey($secretAccessKey)
    {
        $this->container['secretAccessKey'] = $secretAccessKey;
        return $this;
    }

    /**
    * Gets sessionToken
    *  用于临时凭证的令牌
    *
    * @return string|null
    */
    public function getSessionToken()
    {
        return $this->container['sessionToken'];
    }

    /**
    * Sets sessionToken
    *
    * @param string|null $sessionToken 用于临时凭证的令牌
    *
    * @return $this
    */
    public function setSessionToken($sessionToken)
    {
        $this->container['sessionToken'] = $sessionToken;
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

