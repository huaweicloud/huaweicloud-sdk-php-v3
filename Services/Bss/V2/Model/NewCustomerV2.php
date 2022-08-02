<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NewCustomerV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NewCustomerV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerName  企业子账号登录名。
    * mobilePhone  企业管理员的手机号码。如果use_pri_mobile_phone取值为Y，则这个参数无效，否则必选。
    * usePriMobilePhone  是否使用企业主账号手机号码作为子账号手机号码： Y：是N：否（默认值） 当为Y时，mobile_phone输入无效。
    * password  企业子账号的登录密码。
    * verificationCode  验证码，只有输入企业子账号的手机号的情况下，才需要填写该字段。 具体请参见发送短信验证码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerName' => 'string',
            'mobilePhone' => 'string',
            'usePriMobilePhone' => 'string',
            'password' => 'string',
            'verificationCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerName  企业子账号登录名。
    * mobilePhone  企业管理员的手机号码。如果use_pri_mobile_phone取值为Y，则这个参数无效，否则必选。
    * usePriMobilePhone  是否使用企业主账号手机号码作为子账号手机号码： Y：是N：否（默认值） 当为Y时，mobile_phone输入无效。
    * password  企业子账号的登录密码。
    * verificationCode  验证码，只有输入企业子账号的手机号的情况下，才需要填写该字段。 具体请参见发送短信验证码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerName' => null,
        'mobilePhone' => null,
        'usePriMobilePhone' => null,
        'password' => null,
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
    * customerName  企业子账号登录名。
    * mobilePhone  企业管理员的手机号码。如果use_pri_mobile_phone取值为Y，则这个参数无效，否则必选。
    * usePriMobilePhone  是否使用企业主账号手机号码作为子账号手机号码： Y：是N：否（默认值） 当为Y时，mobile_phone输入无效。
    * password  企业子账号的登录密码。
    * verificationCode  验证码，只有输入企业子账号的手机号的情况下，才需要填写该字段。 具体请参见发送短信验证码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerName' => 'customer_name',
            'mobilePhone' => 'mobile_phone',
            'usePriMobilePhone' => 'use_pri_mobile_phone',
            'password' => 'password',
            'verificationCode' => 'verification_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerName  企业子账号登录名。
    * mobilePhone  企业管理员的手机号码。如果use_pri_mobile_phone取值为Y，则这个参数无效，否则必选。
    * usePriMobilePhone  是否使用企业主账号手机号码作为子账号手机号码： Y：是N：否（默认值） 当为Y时，mobile_phone输入无效。
    * password  企业子账号的登录密码。
    * verificationCode  验证码，只有输入企业子账号的手机号的情况下，才需要填写该字段。 具体请参见发送短信验证码。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerName' => 'setCustomerName',
            'mobilePhone' => 'setMobilePhone',
            'usePriMobilePhone' => 'setUsePriMobilePhone',
            'password' => 'setPassword',
            'verificationCode' => 'setVerificationCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerName  企业子账号登录名。
    * mobilePhone  企业管理员的手机号码。如果use_pri_mobile_phone取值为Y，则这个参数无效，否则必选。
    * usePriMobilePhone  是否使用企业主账号手机号码作为子账号手机号码： Y：是N：否（默认值） 当为Y时，mobile_phone输入无效。
    * password  企业子账号的登录密码。
    * verificationCode  验证码，只有输入企业子账号的手机号的情况下，才需要填写该字段。 具体请参见发送短信验证码。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerName' => 'getCustomerName',
            'mobilePhone' => 'getMobilePhone',
            'usePriMobilePhone' => 'getUsePriMobilePhone',
            'password' => 'getPassword',
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
        $this->container['customerName'] = isset($data['customerName']) ? $data['customerName'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['usePriMobilePhone'] = isset($data['usePriMobilePhone']) ? $data['usePriMobilePhone'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
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
        if ($this->container['customerName'] === null) {
            $invalidProperties[] = "'customerName' can't be null";
        }
            if ((mb_strlen($this->container['customerName']) > 32)) {
                $invalidProperties[] = "invalid value for 'customerName', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['customerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) > 20)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usePriMobilePhone']) && (mb_strlen($this->container['usePriMobilePhone']) > 10)) {
                $invalidProperties[] = "invalid value for 'usePriMobilePhone', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['usePriMobilePhone']) && (mb_strlen($this->container['usePriMobilePhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'usePriMobilePhone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 32)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['password']) < 8)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) > 6)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['verificationCode']) && (mb_strlen($this->container['verificationCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be bigger than or equal to 0.";
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
    * Gets customerName
    *  企业子账号登录名。
    *
    * @return string
    */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
    * Sets customerName
    *
    * @param string $customerName 企业子账号登录名。
    *
    * @return $this
    */
    public function setCustomerName($customerName)
    {
        $this->container['customerName'] = $customerName;
        return $this;
    }

    /**
    * Gets mobilePhone
    *  企业管理员的手机号码。如果use_pri_mobile_phone取值为Y，则这个参数无效，否则必选。
    *
    * @return string|null
    */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
    * Sets mobilePhone
    *
    * @param string|null $mobilePhone 企业管理员的手机号码。如果use_pri_mobile_phone取值为Y，则这个参数无效，否则必选。
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
        return $this;
    }

    /**
    * Gets usePriMobilePhone
    *  是否使用企业主账号手机号码作为子账号手机号码： Y：是N：否（默认值） 当为Y时，mobile_phone输入无效。
    *
    * @return string|null
    */
    public function getUsePriMobilePhone()
    {
        return $this->container['usePriMobilePhone'];
    }

    /**
    * Sets usePriMobilePhone
    *
    * @param string|null $usePriMobilePhone 是否使用企业主账号手机号码作为子账号手机号码： Y：是N：否（默认值） 当为Y时，mobile_phone输入无效。
    *
    * @return $this
    */
    public function setUsePriMobilePhone($usePriMobilePhone)
    {
        $this->container['usePriMobilePhone'] = $usePriMobilePhone;
        return $this;
    }

    /**
    * Gets password
    *  企业子账号的登录密码。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 企业子账号的登录密码。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets verificationCode
    *  验证码，只有输入企业子账号的手机号的情况下，才需要填写该字段。 具体请参见发送短信验证码。
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
    * @param string|null $verificationCode 验证码，只有输入企业子账号的手机号的情况下，才需要填写该字段。 具体请参见发送短信验证码。
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

