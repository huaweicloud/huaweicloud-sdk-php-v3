<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SendSlideVerifyCodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SendSlideVerifyCodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shadowImage  抠出图形后的原背景图。通过“data:url”方式来定义图片。
    * cutImage  抠出的图形。
    * pointY  抠出图形的Y轴座标。
    * token  验证码Token字符串。
    * expire  验证码有效时间，单位：秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shadowImage' => 'string',
            'cutImage' => 'string',
            'pointY' => 'int',
            'token' => 'string',
            'expire' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shadowImage  抠出图形后的原背景图。通过“data:url”方式来定义图片。
    * cutImage  抠出的图形。
    * pointY  抠出图形的Y轴座标。
    * token  验证码Token字符串。
    * expire  验证码有效时间，单位：秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shadowImage' => null,
        'cutImage' => null,
        'pointY' => null,
        'token' => null,
        'expire' => null
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
    * shadowImage  抠出图形后的原背景图。通过“data:url”方式来定义图片。
    * cutImage  抠出的图形。
    * pointY  抠出图形的Y轴座标。
    * token  验证码Token字符串。
    * expire  验证码有效时间，单位：秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shadowImage' => 'shadowImage',
            'cutImage' => 'cutImage',
            'pointY' => 'pointY',
            'token' => 'token',
            'expire' => 'expire'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shadowImage  抠出图形后的原背景图。通过“data:url”方式来定义图片。
    * cutImage  抠出的图形。
    * pointY  抠出图形的Y轴座标。
    * token  验证码Token字符串。
    * expire  验证码有效时间，单位：秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'shadowImage' => 'setShadowImage',
            'cutImage' => 'setCutImage',
            'pointY' => 'setPointY',
            'token' => 'setToken',
            'expire' => 'setExpire'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shadowImage  抠出图形后的原背景图。通过“data:url”方式来定义图片。
    * cutImage  抠出的图形。
    * pointY  抠出图形的Y轴座标。
    * token  验证码Token字符串。
    * expire  验证码有效时间，单位：秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'shadowImage' => 'getShadowImage',
            'cutImage' => 'getCutImage',
            'pointY' => 'getPointY',
            'token' => 'getToken',
            'expire' => 'getExpire'
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
        $this->container['shadowImage'] = isset($data['shadowImage']) ? $data['shadowImage'] : null;
        $this->container['cutImage'] = isset($data['cutImage']) ? $data['cutImage'] : null;
        $this->container['pointY'] = isset($data['pointY']) ? $data['pointY'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
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
    * Gets shadowImage
    *  抠出图形后的原背景图。通过“data:url”方式来定义图片。
    *
    * @return string|null
    */
    public function getShadowImage()
    {
        return $this->container['shadowImage'];
    }

    /**
    * Sets shadowImage
    *
    * @param string|null $shadowImage 抠出图形后的原背景图。通过“data:url”方式来定义图片。
    *
    * @return $this
    */
    public function setShadowImage($shadowImage)
    {
        $this->container['shadowImage'] = $shadowImage;
        return $this;
    }

    /**
    * Gets cutImage
    *  抠出的图形。
    *
    * @return string|null
    */
    public function getCutImage()
    {
        return $this->container['cutImage'];
    }

    /**
    * Sets cutImage
    *
    * @param string|null $cutImage 抠出的图形。
    *
    * @return $this
    */
    public function setCutImage($cutImage)
    {
        $this->container['cutImage'] = $cutImage;
        return $this;
    }

    /**
    * Gets pointY
    *  抠出图形的Y轴座标。
    *
    * @return int|null
    */
    public function getPointY()
    {
        return $this->container['pointY'];
    }

    /**
    * Sets pointY
    *
    * @param int|null $pointY 抠出图形的Y轴座标。
    *
    * @return $this
    */
    public function setPointY($pointY)
    {
        $this->container['pointY'] = $pointY;
        return $this;
    }

    /**
    * Gets token
    *  验证码Token字符串。
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
    * @param string|null $token 验证码Token字符串。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets expire
    *  验证码有效时间，单位：秒。
    *
    * @return int|null
    */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
    * Sets expire
    *
    * @param int|null $expire 验证码有效时间，单位：秒。
    *
    * @return $this
    */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;
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

