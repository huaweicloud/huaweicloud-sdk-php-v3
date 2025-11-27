<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientCertificateData  客户端证书
    * clientKeyData  包含来自TLS客户端密钥文件的PEM编码数据
    * token  身份验证令牌
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientCertificateData' => 'string',
            'clientKeyData' => 'string',
            'token' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientCertificateData  客户端证书
    * clientKeyData  包含来自TLS客户端密钥文件的PEM编码数据
    * token  身份验证令牌
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientCertificateData' => null,
        'clientKeyData' => null,
        'token' => null
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
    * clientCertificateData  客户端证书
    * clientKeyData  包含来自TLS客户端密钥文件的PEM编码数据
    * token  身份验证令牌
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientCertificateData' => 'client-certificate-data',
            'clientKeyData' => 'client-key-data',
            'token' => 'token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientCertificateData  客户端证书
    * clientKeyData  包含来自TLS客户端密钥文件的PEM编码数据
    * token  身份验证令牌
    *
    * @var string[]
    */
    protected static $setters = [
            'clientCertificateData' => 'setClientCertificateData',
            'clientKeyData' => 'setClientKeyData',
            'token' => 'setToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientCertificateData  客户端证书
    * clientKeyData  包含来自TLS客户端密钥文件的PEM编码数据
    * token  身份验证令牌
    *
    * @var string[]
    */
    protected static $getters = [
            'clientCertificateData' => 'getClientCertificateData',
            'clientKeyData' => 'getClientKeyData',
            'token' => 'getToken'
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
        $this->container['clientCertificateData'] = isset($data['clientCertificateData']) ? $data['clientCertificateData'] : null;
        $this->container['clientKeyData'] = isset($data['clientKeyData']) ? $data['clientKeyData'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
    * Gets clientCertificateData
    *  客户端证书
    *
    * @return string|null
    */
    public function getClientCertificateData()
    {
        return $this->container['clientCertificateData'];
    }

    /**
    * Sets clientCertificateData
    *
    * @param string|null $clientCertificateData 客户端证书
    *
    * @return $this
    */
    public function setClientCertificateData($clientCertificateData)
    {
        $this->container['clientCertificateData'] = $clientCertificateData;
        return $this;
    }

    /**
    * Gets clientKeyData
    *  包含来自TLS客户端密钥文件的PEM编码数据
    *
    * @return string|null
    */
    public function getClientKeyData()
    {
        return $this->container['clientKeyData'];
    }

    /**
    * Sets clientKeyData
    *
    * @param string|null $clientKeyData 包含来自TLS客户端密钥文件的PEM编码数据
    *
    * @return $this
    */
    public function setClientKeyData($clientKeyData)
    {
        $this->container['clientKeyData'] = $clientKeyData;
        return $this;
    }

    /**
    * Gets token
    *  身份验证令牌
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token 身份验证令牌
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
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

