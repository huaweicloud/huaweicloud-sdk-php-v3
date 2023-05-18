<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidateTokenReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidateTokenReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * token  Access Token。
    * needGenNewToken  是否生成新的Token。 * true：生成新的token值 * false：不生成新的token值
    * needAccountInfo  是否需要返回用户帐号信息（帐号、用户名称等信息）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'token' => 'string',
            'needGenNewToken' => 'bool',
            'needAccountInfo' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * token  Access Token。
    * needGenNewToken  是否生成新的Token。 * true：生成新的token值 * false：不生成新的token值
    * needAccountInfo  是否需要返回用户帐号信息（帐号、用户名称等信息）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'token' => 'password',
        'needGenNewToken' => null,
        'needAccountInfo' => null
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
    * token  Access Token。
    * needGenNewToken  是否生成新的Token。 * true：生成新的token值 * false：不生成新的token值
    * needAccountInfo  是否需要返回用户帐号信息（帐号、用户名称等信息）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'token' => 'token',
            'needGenNewToken' => 'needGenNewToken',
            'needAccountInfo' => 'needAccountInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * token  Access Token。
    * needGenNewToken  是否生成新的Token。 * true：生成新的token值 * false：不生成新的token值
    * needAccountInfo  是否需要返回用户帐号信息（帐号、用户名称等信息）。
    *
    * @var string[]
    */
    protected static $setters = [
            'token' => 'setToken',
            'needGenNewToken' => 'setNeedGenNewToken',
            'needAccountInfo' => 'setNeedAccountInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * token  Access Token。
    * needGenNewToken  是否生成新的Token。 * true：生成新的token值 * false：不生成新的token值
    * needAccountInfo  是否需要返回用户帐号信息（帐号、用户名称等信息）。
    *
    * @var string[]
    */
    protected static $getters = [
            'token' => 'getToken',
            'needGenNewToken' => 'getNeedGenNewToken',
            'needAccountInfo' => 'getNeedAccountInfo'
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
        $this->container['needGenNewToken'] = isset($data['needGenNewToken']) ? $data['needGenNewToken'] : false;
        $this->container['needAccountInfo'] = isset($data['needAccountInfo']) ? $data['needAccountInfo'] : true;
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
        if ($this->container['needGenNewToken'] === null) {
            $invalidProperties[] = "'needGenNewToken' can't be null";
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
    *  Access Token。
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
    * @param string $token Access Token。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets needGenNewToken
    *  是否生成新的Token。 * true：生成新的token值 * false：不生成新的token值
    *
    * @return bool
    */
    public function getNeedGenNewToken()
    {
        return $this->container['needGenNewToken'];
    }

    /**
    * Sets needGenNewToken
    *
    * @param bool $needGenNewToken 是否生成新的Token。 * true：生成新的token值 * false：不生成新的token值
    *
    * @return $this
    */
    public function setNeedGenNewToken($needGenNewToken)
    {
        $this->container['needGenNewToken'] = $needGenNewToken;
        return $this;
    }

    /**
    * Gets needAccountInfo
    *  是否需要返回用户帐号信息（帐号、用户名称等信息）。
    *
    * @return bool|null
    */
    public function getNeedAccountInfo()
    {
        return $this->container['needAccountInfo'];
    }

    /**
    * Sets needAccountInfo
    *
    * @param bool|null $needAccountInfo 是否需要返回用户帐号信息（帐号、用户名称等信息）。
    *
    * @return $this
    */
    public function setNeedAccountInfo($needAccountInfo)
    {
        $this->container['needAccountInfo'] = $needAccountInfo;
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

