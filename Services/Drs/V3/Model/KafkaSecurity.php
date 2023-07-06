<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaSecurity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaSecurity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trustStoreKeyName  证书名称，使用安全认证时必填。
    * trustStoreKey  安全证书base64转码后的值，使用安全认证时必填。
    * trustStorePassword  证书密码，使用安全认证时必填。
    * type  认证类型，PLAINTEXT为无认证，，使用安全认证时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trustStoreKeyName' => 'string',
            'trustStoreKey' => 'string',
            'trustStorePassword' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trustStoreKeyName  证书名称，使用安全认证时必填。
    * trustStoreKey  安全证书base64转码后的值，使用安全认证时必填。
    * trustStorePassword  证书密码，使用安全认证时必填。
    * type  认证类型，PLAINTEXT为无认证，，使用安全认证时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trustStoreKeyName' => null,
        'trustStoreKey' => null,
        'trustStorePassword' => null,
        'type' => null
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
    * trustStoreKeyName  证书名称，使用安全认证时必填。
    * trustStoreKey  安全证书base64转码后的值，使用安全认证时必填。
    * trustStorePassword  证书密码，使用安全认证时必填。
    * type  认证类型，PLAINTEXT为无认证，，使用安全认证时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trustStoreKeyName' => 'trust_store_key_name',
            'trustStoreKey' => 'trust_store_key',
            'trustStorePassword' => 'trust_store_password',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trustStoreKeyName  证书名称，使用安全认证时必填。
    * trustStoreKey  安全证书base64转码后的值，使用安全认证时必填。
    * trustStorePassword  证书密码，使用安全认证时必填。
    * type  认证类型，PLAINTEXT为无认证，，使用安全认证时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'trustStoreKeyName' => 'setTrustStoreKeyName',
            'trustStoreKey' => 'setTrustStoreKey',
            'trustStorePassword' => 'setTrustStorePassword',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trustStoreKeyName  证书名称，使用安全认证时必填。
    * trustStoreKey  安全证书base64转码后的值，使用安全认证时必填。
    * trustStorePassword  证书密码，使用安全认证时必填。
    * type  认证类型，PLAINTEXT为无认证，，使用安全认证时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'trustStoreKeyName' => 'getTrustStoreKeyName',
            'trustStoreKey' => 'getTrustStoreKey',
            'trustStorePassword' => 'getTrustStorePassword',
            'type' => 'getType'
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
    const TYPE_PLAINTEXT = 'PLAINTEXT';
    const TYPE_SASL_SSL = 'SASL_SSL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PLAINTEXT,
            self::TYPE_SASL_SSL,
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
        $this->container['trustStoreKeyName'] = isset($data['trustStoreKeyName']) ? $data['trustStoreKeyName'] : null;
        $this->container['trustStoreKey'] = isset($data['trustStoreKey']) ? $data['trustStoreKey'] : null;
        $this->container['trustStorePassword'] = isset($data['trustStorePassword']) ? $data['trustStorePassword'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets trustStoreKeyName
    *  证书名称，使用安全认证时必填。
    *
    * @return string|null
    */
    public function getTrustStoreKeyName()
    {
        return $this->container['trustStoreKeyName'];
    }

    /**
    * Sets trustStoreKeyName
    *
    * @param string|null $trustStoreKeyName 证书名称，使用安全认证时必填。
    *
    * @return $this
    */
    public function setTrustStoreKeyName($trustStoreKeyName)
    {
        $this->container['trustStoreKeyName'] = $trustStoreKeyName;
        return $this;
    }

    /**
    * Gets trustStoreKey
    *  安全证书base64转码后的值，使用安全认证时必填。
    *
    * @return string|null
    */
    public function getTrustStoreKey()
    {
        return $this->container['trustStoreKey'];
    }

    /**
    * Sets trustStoreKey
    *
    * @param string|null $trustStoreKey 安全证书base64转码后的值，使用安全认证时必填。
    *
    * @return $this
    */
    public function setTrustStoreKey($trustStoreKey)
    {
        $this->container['trustStoreKey'] = $trustStoreKey;
        return $this;
    }

    /**
    * Gets trustStorePassword
    *  证书密码，使用安全认证时必填。
    *
    * @return string|null
    */
    public function getTrustStorePassword()
    {
        return $this->container['trustStorePassword'];
    }

    /**
    * Sets trustStorePassword
    *
    * @param string|null $trustStorePassword 证书密码，使用安全认证时必填。
    *
    * @return $this
    */
    public function setTrustStorePassword($trustStorePassword)
    {
        $this->container['trustStorePassword'] = $trustStorePassword;
        return $this;
    }

    /**
    * Gets type
    *  认证类型，PLAINTEXT为无认证，，使用安全认证时必填。
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
    * @param string|null $type 认证类型，PLAINTEXT为无认证，，使用安全认证时必填。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

