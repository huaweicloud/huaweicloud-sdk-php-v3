<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKeyStoreRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKeyStoreRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxyAccessKeyId  访问XKS-Proxy的凭据ID
    * proxySecretAccessKey  访问XKS-Proxy的凭据Key
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxyAccessKeyId' => 'string',
            'proxySecretAccessKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxyAccessKeyId  访问XKS-Proxy的凭据ID
    * proxySecretAccessKey  访问XKS-Proxy的凭据Key
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxyAccessKeyId' => null,
        'proxySecretAccessKey' => null
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
    * proxyAccessKeyId  访问XKS-Proxy的凭据ID
    * proxySecretAccessKey  访问XKS-Proxy的凭据Key
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxyAccessKeyId' => 'proxy_access_key_id',
            'proxySecretAccessKey' => 'proxy_secret_access_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxyAccessKeyId  访问XKS-Proxy的凭据ID
    * proxySecretAccessKey  访问XKS-Proxy的凭据Key
    *
    * @var string[]
    */
    protected static $setters = [
            'proxyAccessKeyId' => 'setProxyAccessKeyId',
            'proxySecretAccessKey' => 'setProxySecretAccessKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxyAccessKeyId  访问XKS-Proxy的凭据ID
    * proxySecretAccessKey  访问XKS-Proxy的凭据Key
    *
    * @var string[]
    */
    protected static $getters = [
            'proxyAccessKeyId' => 'getProxyAccessKeyId',
            'proxySecretAccessKey' => 'getProxySecretAccessKey'
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
        $this->container['proxyAccessKeyId'] = isset($data['proxyAccessKeyId']) ? $data['proxyAccessKeyId'] : null;
        $this->container['proxySecretAccessKey'] = isset($data['proxySecretAccessKey']) ? $data['proxySecretAccessKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['proxyAccessKeyId'] === null) {
            $invalidProperties[] = "'proxyAccessKeyId' can't be null";
        }
        if ($this->container['proxySecretAccessKey'] === null) {
            $invalidProperties[] = "'proxySecretAccessKey' can't be null";
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
    * Gets proxyAccessKeyId
    *  访问XKS-Proxy的凭据ID
    *
    * @return string
    */
    public function getProxyAccessKeyId()
    {
        return $this->container['proxyAccessKeyId'];
    }

    /**
    * Sets proxyAccessKeyId
    *
    * @param string $proxyAccessKeyId 访问XKS-Proxy的凭据ID
    *
    * @return $this
    */
    public function setProxyAccessKeyId($proxyAccessKeyId)
    {
        $this->container['proxyAccessKeyId'] = $proxyAccessKeyId;
        return $this;
    }

    /**
    * Gets proxySecretAccessKey
    *  访问XKS-Proxy的凭据Key
    *
    * @return string
    */
    public function getProxySecretAccessKey()
    {
        return $this->container['proxySecretAccessKey'];
    }

    /**
    * Sets proxySecretAccessKey
    *
    * @param string $proxySecretAccessKey 访问XKS-Proxy的凭据Key
    *
    * @return $this
    */
    public function setProxySecretAccessKey($proxySecretAccessKey)
    {
        $this->container['proxySecretAccessKey'] = $proxySecretAccessKey;
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

