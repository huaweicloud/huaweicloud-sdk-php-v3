<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MqttConnectionInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MqttConnectionInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * username  鉴权用户名
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'username' => 'string',
            'trustCerts' => 'object',
            'verifyHostname' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * username  鉴权用户名
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'username' => null,
        'trustCerts' => null,
        'verifyHostname' => null
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
    * username  鉴权用户名
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'username' => 'username',
            'trustCerts' => 'trust_certs',
            'verifyHostname' => 'verify_hostname'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * username  鉴权用户名
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $setters = [
            'username' => 'setUsername',
            'trustCerts' => 'setTrustCerts',
            'verifyHostname' => 'setVerifyHostname'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * username  鉴权用户名
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $getters = [
            'username' => 'getUsername',
            'trustCerts' => 'getTrustCerts',
            'verifyHostname' => 'getVerifyHostname'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['trustCerts'] = isset($data['trustCerts']) ? $data['trustCerts'] : null;
        $this->container['verifyHostname'] = isset($data['verifyHostname']) ? $data['verifyHostname'] : null;
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
    * Gets username
    *  鉴权用户名
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username 鉴权用户名
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets trustCerts
    *  客户端信任证书列表
    *
    * @return object|null
    */
    public function getTrustCerts()
    {
        return $this->container['trustCerts'];
    }

    /**
    * Sets trustCerts
    *
    * @param object|null $trustCerts 客户端信任证书列表
    *
    * @return $this
    */
    public function setTrustCerts($trustCerts)
    {
        $this->container['trustCerts'] = $trustCerts;
        return $this;
    }

    /**
    * Gets verifyHostname
    *  客户端是否开启校验域名
    *
    * @return bool|null
    */
    public function getVerifyHostname()
    {
        return $this->container['verifyHostname'];
    }

    /**
    * Sets verifyHostname
    *
    * @param bool|null $verifyHostname 客户端是否开启校验域名
    *
    * @return $this
    */
    public function setVerifyHostname($verifyHostname)
    {
        $this->container['verifyHostname'] = $verifyHostname;
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

