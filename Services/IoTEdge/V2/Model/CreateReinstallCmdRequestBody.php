<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateReinstallCmdRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateReinstallCmdRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceSecret  边缘节点设备密钥，如果不输入则平台随机生成
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceSecret' => 'string',
            'verifyCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceSecret  边缘节点设备密钥，如果不输入则平台随机生成
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceSecret' => null,
        'verifyCode' => null
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
    * deviceSecret  边缘节点设备密钥，如果不输入则平台随机生成
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceSecret' => 'device_secret',
            'verifyCode' => 'verify_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceSecret  边缘节点设备密钥，如果不输入则平台随机生成
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceSecret' => 'setDeviceSecret',
            'verifyCode' => 'setVerifyCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceSecret  边缘节点设备密钥，如果不输入则平台随机生成
    * verifyCode  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceSecret' => 'getDeviceSecret',
            'verifyCode' => 'getVerifyCode'
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
        $this->container['deviceSecret'] = isset($data['deviceSecret']) ? $data['deviceSecret'] : null;
        $this->container['verifyCode'] = isset($data['verifyCode']) ? $data['verifyCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deviceSecret']) && (mb_strlen($this->container['deviceSecret']) > 32)) {
                $invalidProperties[] = "invalid value for 'deviceSecret', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['deviceSecret']) && (mb_strlen($this->container['deviceSecret']) < 8)) {
                $invalidProperties[] = "invalid value for 'deviceSecret', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['deviceSecret']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['deviceSecret'])) {
                $invalidProperties[] = "invalid value for 'deviceSecret', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['verifyCode']) && (mb_strlen($this->container['verifyCode']) > 36)) {
                $invalidProperties[] = "invalid value for 'verifyCode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['verifyCode']) && (mb_strlen($this->container['verifyCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'verifyCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verifyCode']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['verifyCode'])) {
                $invalidProperties[] = "invalid value for 'verifyCode', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
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
    * Gets deviceSecret
    *  边缘节点设备密钥，如果不输入则平台随机生成
    *
    * @return string|null
    */
    public function getDeviceSecret()
    {
        return $this->container['deviceSecret'];
    }

    /**
    * Sets deviceSecret
    *
    * @param string|null $deviceSecret 边缘节点设备密钥，如果不输入则平台随机生成
    *
    * @return $this
    */
    public function setDeviceSecret($deviceSecret)
    {
        $this->container['deviceSecret'] = $deviceSecret;
        return $this;
    }

    /**
    * Gets verifyCode
    *  边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @return string|null
    */
    public function getVerifyCode()
    {
        return $this->container['verifyCode'];
    }

    /**
    * Sets verifyCode
    *
    * @param string|null $verifyCode 边缘节点注册使用的验证码，如果不输入则平台随机生成。
    *
    * @return $this
    */
    public function setVerifyCode($verifyCode)
    {
        $this->container['verifyCode'] = $verifyCode;
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

