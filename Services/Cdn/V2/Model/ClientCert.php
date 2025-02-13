<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClientCert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClientCert';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * validation  客户端证书配置开关，1：打开；0：关闭。
    * trustedCert  客户端CA证书的内容，仅支持PEM格式。
    * hosts  客户端CA证书指定的域名。   > 1. 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求。   > 2. 最多可配置100个域名，多个域名用“,”或“|”分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'validation' => 'int',
            'trustedCert' => 'string',
            'hosts' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * validation  客户端证书配置开关，1：打开；0：关闭。
    * trustedCert  客户端CA证书的内容，仅支持PEM格式。
    * hosts  客户端CA证书指定的域名。   > 1. 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求。   > 2. 最多可配置100个域名，多个域名用“,”或“|”分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'validation' => 'int32',
        'trustedCert' => null,
        'hosts' => null
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
    * validation  客户端证书配置开关，1：打开；0：关闭。
    * trustedCert  客户端CA证书的内容，仅支持PEM格式。
    * hosts  客户端CA证书指定的域名。   > 1. 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求。   > 2. 最多可配置100个域名，多个域名用“,”或“|”分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'validation' => 'validation',
            'trustedCert' => 'trusted_cert',
            'hosts' => 'hosts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * validation  客户端证书配置开关，1：打开；0：关闭。
    * trustedCert  客户端CA证书的内容，仅支持PEM格式。
    * hosts  客户端CA证书指定的域名。   > 1. 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求。   > 2. 最多可配置100个域名，多个域名用“,”或“|”分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'validation' => 'setValidation',
            'trustedCert' => 'setTrustedCert',
            'hosts' => 'setHosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * validation  客户端证书配置开关，1：打开；0：关闭。
    * trustedCert  客户端CA证书的内容，仅支持PEM格式。
    * hosts  客户端CA证书指定的域名。   > 1. 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求。   > 2. 最多可配置100个域名，多个域名用“,”或“|”分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'validation' => 'getValidation',
            'trustedCert' => 'getTrustedCert',
            'hosts' => 'getHosts'
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
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['trustedCert'] = isset($data['trustedCert']) ? $data['trustedCert'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['validation'] === null) {
            $invalidProperties[] = "'validation' can't be null";
        }
        if ($this->container['trustedCert'] === null) {
            $invalidProperties[] = "'trustedCert' can't be null";
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
    * Gets validation
    *  客户端证书配置开关，1：打开；0：关闭。
    *
    * @return int
    */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
    * Sets validation
    *
    * @param int $validation 客户端证书配置开关，1：打开；0：关闭。
    *
    * @return $this
    */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;
        return $this;
    }

    /**
    * Gets trustedCert
    *  客户端CA证书的内容，仅支持PEM格式。
    *
    * @return string
    */
    public function getTrustedCert()
    {
        return $this->container['trustedCert'];
    }

    /**
    * Sets trustedCert
    *
    * @param string $trustedCert 客户端CA证书的内容，仅支持PEM格式。
    *
    * @return $this
    */
    public function setTrustedCert($trustedCert)
    {
        $this->container['trustedCert'] = $trustedCert;
        return $this;
    }

    /**
    * Gets hosts
    *  客户端CA证书指定的域名。   > 1. 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求。   > 2. 最多可配置100个域名，多个域名用“,”或“|”分隔。
    *
    * @return string|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string|null $hosts 客户端CA证书指定的域名。   > 1. 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求。   > 2. 最多可配置100个域名，多个域名用“,”或“|”分隔。
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
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

