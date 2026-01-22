<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CredentialsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CredentialsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKeyId  临时安全凭证的AK。
    * expiration  临时安全凭证的失效时间。
    * secretAccessKey  临时安全凭证的SK。
    * securityToken  临时安全凭证的security_token。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKeyId' => 'string',
            'expiration' => '\DateTime',
            'secretAccessKey' => 'string',
            'securityToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKeyId  临时安全凭证的AK。
    * expiration  临时安全凭证的失效时间。
    * secretAccessKey  临时安全凭证的SK。
    * securityToken  临时安全凭证的security_token。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKeyId' => null,
        'expiration' => 'date-time',
        'secretAccessKey' => null,
        'securityToken' => null
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
    * accessKeyId  临时安全凭证的AK。
    * expiration  临时安全凭证的失效时间。
    * secretAccessKey  临时安全凭证的SK。
    * securityToken  临时安全凭证的security_token。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKeyId' => 'access_key_id',
            'expiration' => 'expiration',
            'secretAccessKey' => 'secret_access_key',
            'securityToken' => 'security_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKeyId  临时安全凭证的AK。
    * expiration  临时安全凭证的失效时间。
    * secretAccessKey  临时安全凭证的SK。
    * securityToken  临时安全凭证的security_token。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKeyId' => 'setAccessKeyId',
            'expiration' => 'setExpiration',
            'secretAccessKey' => 'setSecretAccessKey',
            'securityToken' => 'setSecurityToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKeyId  临时安全凭证的AK。
    * expiration  临时安全凭证的失效时间。
    * secretAccessKey  临时安全凭证的SK。
    * securityToken  临时安全凭证的security_token。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKeyId' => 'getAccessKeyId',
            'expiration' => 'getExpiration',
            'secretAccessKey' => 'getSecretAccessKey',
            'securityToken' => 'getSecurityToken'
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
        $this->container['securityToken'] = isset($data['securityToken']) ? $data['securityToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessKeyId'] === null) {
            $invalidProperties[] = "'accessKeyId' can't be null";
        }
            if ((mb_strlen($this->container['accessKeyId']) > 20)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['accessKeyId']) < 20)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be bigger than or equal to 20.";
            }
        if ($this->container['expiration'] === null) {
            $invalidProperties[] = "'expiration' can't be null";
        }
        if ($this->container['secretAccessKey'] === null) {
            $invalidProperties[] = "'secretAccessKey' can't be null";
        }
            if ((mb_strlen($this->container['secretAccessKey']) > 40)) {
                $invalidProperties[] = "invalid value for 'secretAccessKey', the character length must be smaller than or equal to 40.";
            }
            if ((mb_strlen($this->container['secretAccessKey']) < 40)) {
                $invalidProperties[] = "invalid value for 'secretAccessKey', the character length must be bigger than or equal to 40.";
            }
        if ($this->container['securityToken'] === null) {
            $invalidProperties[] = "'securityToken' can't be null";
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
    * Gets accessKeyId
    *  临时安全凭证的AK。
    *
    * @return string
    */
    public function getAccessKeyId()
    {
        return $this->container['accessKeyId'];
    }

    /**
    * Sets accessKeyId
    *
    * @param string $accessKeyId 临时安全凭证的AK。
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
    *  临时安全凭证的失效时间。
    *
    * @return \DateTime
    */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
    * Sets expiration
    *
    * @param \DateTime $expiration 临时安全凭证的失效时间。
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
    *  临时安全凭证的SK。
    *
    * @return string
    */
    public function getSecretAccessKey()
    {
        return $this->container['secretAccessKey'];
    }

    /**
    * Sets secretAccessKey
    *
    * @param string $secretAccessKey 临时安全凭证的SK。
    *
    * @return $this
    */
    public function setSecretAccessKey($secretAccessKey)
    {
        $this->container['secretAccessKey'] = $secretAccessKey;
        return $this;
    }

    /**
    * Gets securityToken
    *  临时安全凭证的security_token。
    *
    * @return string
    */
    public function getSecurityToken()
    {
        return $this->container['securityToken'];
    }

    /**
    * Sets securityToken
    *
    * @param string $securityToken 临时安全凭证的security_token。
    *
    * @return $this
    */
    public function setSecurityToken($securityToken)
    {
        $this->container['securityToken'] = $securityToken;
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

