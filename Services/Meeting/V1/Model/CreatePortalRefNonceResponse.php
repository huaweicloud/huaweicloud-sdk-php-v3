<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePortalRefNonceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePortalRefNonceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nonce  用于跳转登录的nonce信息。同一个nonce只能使用一次。 > 通过链接https://meeting.huaweicloud.com/?lang=zh-CN&nonce=xxxxxxxxxxxxx#/login进行免登陆跳转。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nonce' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nonce  用于跳转登录的nonce信息。同一个nonce只能使用一次。 > 通过链接https://meeting.huaweicloud.com/?lang=zh-CN&nonce=xxxxxxxxxxxxx#/login进行免登陆跳转。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nonce' => null
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
    * nonce  用于跳转登录的nonce信息。同一个nonce只能使用一次。 > 通过链接https://meeting.huaweicloud.com/?lang=zh-CN&nonce=xxxxxxxxxxxxx#/login进行免登陆跳转。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nonce' => 'nonce'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nonce  用于跳转登录的nonce信息。同一个nonce只能使用一次。 > 通过链接https://meeting.huaweicloud.com/?lang=zh-CN&nonce=xxxxxxxxxxxxx#/login进行免登陆跳转。
    *
    * @var string[]
    */
    protected static $setters = [
            'nonce' => 'setNonce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nonce  用于跳转登录的nonce信息。同一个nonce只能使用一次。 > 通过链接https://meeting.huaweicloud.com/?lang=zh-CN&nonce=xxxxxxxxxxxxx#/login进行免登陆跳转。
    *
    * @var string[]
    */
    protected static $getters = [
            'nonce' => 'getNonce'
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
        $this->container['nonce'] = isset($data['nonce']) ? $data['nonce'] : null;
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
    * Gets nonce
    *  用于跳转登录的nonce信息。同一个nonce只能使用一次。 > 通过链接https://meeting.huaweicloud.com/?lang=zh-CN&nonce=xxxxxxxxxxxxx#/login进行免登陆跳转。
    *
    * @return string|null
    */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
    * Sets nonce
    *
    * @param string|null $nonce 用于跳转登录的nonce信息。同一个nonce只能使用一次。 > 通过链接https://meeting.huaweicloud.com/?lang=zh-CN&nonce=xxxxxxxxxxxxx#/login进行免登陆跳转。
    *
    * @return $this
    */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;
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

