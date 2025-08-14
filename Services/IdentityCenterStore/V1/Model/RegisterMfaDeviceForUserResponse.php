<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterMfaDeviceForUserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterMfaDeviceForUserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identityStoreId  身份源的全局唯一标识符（ID）
    * userId  身份源中用户唯一标识符（ID）
    * workFlow  注册MFA需要的一次性随机字符
    * redirectUrl  MFA注册重定向地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identityStoreId' => 'string',
            'userId' => 'string',
            'workFlow' => 'string',
            'redirectUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identityStoreId  身份源的全局唯一标识符（ID）
    * userId  身份源中用户唯一标识符（ID）
    * workFlow  注册MFA需要的一次性随机字符
    * redirectUrl  MFA注册重定向地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identityStoreId' => null,
        'userId' => null,
        'workFlow' => null,
        'redirectUrl' => null
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
    * identityStoreId  身份源的全局唯一标识符（ID）
    * userId  身份源中用户唯一标识符（ID）
    * workFlow  注册MFA需要的一次性随机字符
    * redirectUrl  MFA注册重定向地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identityStoreId' => 'identity_store_id',
            'userId' => 'user_id',
            'workFlow' => 'work_flow',
            'redirectUrl' => 'redirect_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identityStoreId  身份源的全局唯一标识符（ID）
    * userId  身份源中用户唯一标识符（ID）
    * workFlow  注册MFA需要的一次性随机字符
    * redirectUrl  MFA注册重定向地址
    *
    * @var string[]
    */
    protected static $setters = [
            'identityStoreId' => 'setIdentityStoreId',
            'userId' => 'setUserId',
            'workFlow' => 'setWorkFlow',
            'redirectUrl' => 'setRedirectUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identityStoreId  身份源的全局唯一标识符（ID）
    * userId  身份源中用户唯一标识符（ID）
    * workFlow  注册MFA需要的一次性随机字符
    * redirectUrl  MFA注册重定向地址
    *
    * @var string[]
    */
    protected static $getters = [
            'identityStoreId' => 'getIdentityStoreId',
            'userId' => 'getUserId',
            'workFlow' => 'getWorkFlow',
            'redirectUrl' => 'getRedirectUrl'
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
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['workFlow'] = isset($data['workFlow']) ? $data['workFlow'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
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
    * Gets identityStoreId
    *  身份源的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string|null $identityStoreId 身份源的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
        return $this;
    }

    /**
    * Gets userId
    *  身份源中用户唯一标识符（ID）
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
    * @param string|null $userId 身份源中用户唯一标识符（ID）
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets workFlow
    *  注册MFA需要的一次性随机字符
    *
    * @return string|null
    */
    public function getWorkFlow()
    {
        return $this->container['workFlow'];
    }

    /**
    * Sets workFlow
    *
    * @param string|null $workFlow 注册MFA需要的一次性随机字符
    *
    * @return $this
    */
    public function setWorkFlow($workFlow)
    {
        $this->container['workFlow'] = $workFlow;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  MFA注册重定向地址
    *
    * @return string|null
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string|null $redirectUrl MFA注册重定向地址
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
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

