<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InfluxDB2ConnectionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InfluxDB2ConnectionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * token  鉴权token
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'token' => 'string',
            'trustCerts' => 'object',
            'verifyHostname' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * token  鉴权token
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'token' => null,
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
    * token  鉴权token
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'token' => 'token',
            'trustCerts' => 'trust_certs',
            'verifyHostname' => 'verify_hostname'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * token  鉴权token
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $setters = [
            'token' => 'setToken',
            'trustCerts' => 'setTrustCerts',
            'verifyHostname' => 'setVerifyHostname'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * token  鉴权token
    * trustCerts  客户端信任证书列表
    * verifyHostname  客户端是否开启校验域名
    *
    * @var string[]
    */
    protected static $getters = [
            'token' => 'getToken',
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
            if ((mb_strlen($this->container['token']) > 128)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['token']) < 1)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_=-]*$/", $this->container['token'])) {
                $invalidProperties[] = "invalid value for 'token', must be conform to the pattern /^[a-zA-Z0-9_=-]*$/.";
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
    * Gets token
    *  鉴权token
    *
    * @return string
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string $token 鉴权token
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
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

