<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSubscriptionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSubscriptionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remark  订阅者备注。订阅者备注的最大长度为128byte。
    * verificationCode  订阅终端收到的验证码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remark' => 'string',
            'verificationCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remark  订阅者备注。订阅者备注的最大长度为128byte。
    * verificationCode  订阅终端收到的验证码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remark' => null,
        'verificationCode' => null
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
    * remark  订阅者备注。订阅者备注的最大长度为128byte。
    * verificationCode  订阅终端收到的验证码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remark' => 'remark',
            'verificationCode' => 'verification_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remark  订阅者备注。订阅者备注的最大长度为128byte。
    * verificationCode  订阅终端收到的验证码。
    *
    * @var string[]
    */
    protected static $setters = [
            'remark' => 'setRemark',
            'verificationCode' => 'setVerificationCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remark  订阅者备注。订阅者备注的最大长度为128byte。
    * verificationCode  订阅终端收到的验证码。
    *
    * @var string[]
    */
    protected static $getters = [
            'remark' => 'getRemark',
            'verificationCode' => 'getVerificationCode'
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
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['verificationCode'] = isset($data['verificationCode']) ? $data['verificationCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 128)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 1)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) > 6)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) < 6)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be bigger than or equal to 6.";
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
    * Gets remark
    *  订阅者备注。订阅者备注的最大长度为128byte。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 订阅者备注。订阅者备注的最大长度为128byte。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets verificationCode
    *  订阅终端收到的验证码。
    *
    * @return string|null
    */
    public function getVerificationCode()
    {
        return $this->container['verificationCode'];
    }

    /**
    * Sets verificationCode
    *
    * @param string|null $verificationCode 订阅终端收到的验证码。
    *
    * @return $this
    */
    public function setVerificationCode($verificationCode)
    {
        $this->container['verificationCode'] = $verificationCode;
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

