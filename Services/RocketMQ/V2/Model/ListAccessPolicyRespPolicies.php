<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAccessPolicyRespPolicies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAccessPolicyResp_policies';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKey  用户名。
    * secretKey  密钥。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * perm  权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKey' => 'string',
            'secretKey' => 'string',
            'whiteRemoteAddress' => 'string',
            'admin' => 'bool',
            'perm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKey  用户名。
    * secretKey  密钥。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * perm  权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKey' => null,
        'secretKey' => null,
        'whiteRemoteAddress' => null,
        'admin' => null,
        'perm' => null
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
    * accessKey  用户名。
    * secretKey  密钥。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * perm  权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'whiteRemoteAddress' => 'white_remote_address',
            'admin' => 'admin',
            'perm' => 'perm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKey  用户名。
    * secretKey  密钥。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * perm  权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'whiteRemoteAddress' => 'setWhiteRemoteAddress',
            'admin' => 'setAdmin',
            'perm' => 'setPerm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKey  用户名。
    * secretKey  密钥。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * perm  权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'whiteRemoteAddress' => 'getWhiteRemoteAddress',
            'admin' => 'getAdmin',
            'perm' => 'getPerm'
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
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['whiteRemoteAddress'] = isset($data['whiteRemoteAddress']) ? $data['whiteRemoteAddress'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['perm'] = isset($data['perm']) ? $data['perm'] : null;
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
    * Gets accessKey
    *  用户名。
    *
    * @return string|null
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string|null $accessKey 用户名。
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets secretKey
    *  密钥。
    *
    * @return string|null
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string|null $secretKey 密钥。
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets whiteRemoteAddress
    *  IP白名单。
    *
    * @return string|null
    */
    public function getWhiteRemoteAddress()
    {
        return $this->container['whiteRemoteAddress'];
    }

    /**
    * Sets whiteRemoteAddress
    *
    * @param string|null $whiteRemoteAddress IP白名单。
    *
    * @return $this
    */
    public function setWhiteRemoteAddress($whiteRemoteAddress)
    {
        $this->container['whiteRemoteAddress'] = $whiteRemoteAddress;
        return $this;
    }

    /**
    * Gets admin
    *  是否为管理员。
    *
    * @return bool|null
    */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
    * Sets admin
    *
    * @param bool|null $admin 是否为管理员。
    *
    * @return $this
    */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;
        return $this;
    }

    /**
    * Gets perm
    *  权限。
    *
    * @return string|null
    */
    public function getPerm()
    {
        return $this->container['perm'];
    }

    /**
    * Sets perm
    *
    * @param string|null $perm 权限。
    *
    * @return $this
    */
    public function setPerm($perm)
    {
        $this->container['perm'] = $perm;
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

