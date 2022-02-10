<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BankCardInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BankCardInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bankAccount  |参数名称：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。| |参数约束及描述：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。|
    * areacode  |参数名称：国家/区号码。例如：0086：中国大陆区号码。| |参数约束及描述：国家/区号码。例如：0086：中国大陆区号码。|
    * mobile  |参数名称：手机号码。| |参数约束及描述：手机号码。|
    * verificationCode  |参数名称：验证码。| |参数约束及描述：验证码。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bankAccount' => 'string',
            'areacode' => 'string',
            'mobile' => 'string',
            'verificationCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bankAccount  |参数名称：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。| |参数约束及描述：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。|
    * areacode  |参数名称：国家/区号码。例如：0086：中国大陆区号码。| |参数约束及描述：国家/区号码。例如：0086：中国大陆区号码。|
    * mobile  |参数名称：手机号码。| |参数约束及描述：手机号码。|
    * verificationCode  |参数名称：验证码。| |参数约束及描述：验证码。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bankAccount' => null,
        'areacode' => null,
        'mobile' => null,
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
    * bankAccount  |参数名称：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。| |参数约束及描述：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。|
    * areacode  |参数名称：国家/区号码。例如：0086：中国大陆区号码。| |参数约束及描述：国家/区号码。例如：0086：中国大陆区号码。|
    * mobile  |参数名称：手机号码。| |参数约束及描述：手机号码。|
    * verificationCode  |参数名称：验证码。| |参数约束及描述：验证码。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bankAccount' => 'bank_account',
            'areacode' => 'areacode',
            'mobile' => 'mobile',
            'verificationCode' => 'verification_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bankAccount  |参数名称：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。| |参数约束及描述：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。|
    * areacode  |参数名称：国家/区号码。例如：0086：中国大陆区号码。| |参数约束及描述：国家/区号码。例如：0086：中国大陆区号码。|
    * mobile  |参数名称：手机号码。| |参数约束及描述：手机号码。|
    * verificationCode  |参数名称：验证码。| |参数约束及描述：验证码。|
    *
    * @var string[]
    */
    protected static $setters = [
            'bankAccount' => 'setBankAccount',
            'areacode' => 'setAreacode',
            'mobile' => 'setMobile',
            'verificationCode' => 'setVerificationCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bankAccount  |参数名称：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。| |参数约束及描述：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。|
    * areacode  |参数名称：国家/区号码。例如：0086：中国大陆区号码。| |参数约束及描述：国家/区号码。例如：0086：中国大陆区号码。|
    * mobile  |参数名称：手机号码。| |参数约束及描述：手机号码。|
    * verificationCode  |参数名称：验证码。| |参数约束及描述：验证码。|
    *
    * @var string[]
    */
    protected static $getters = [
            'bankAccount' => 'getBankAccount',
            'areacode' => 'getAreacode',
            'mobile' => 'getMobile',
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
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['areacode'] = isset($data['areacode']) ? $data['areacode'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
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
        if ($this->container['bankAccount'] === null) {
            $invalidProperties[] = "'bankAccount' can't be null";
        }
            if ((mb_strlen($this->container['bankAccount']) > 100)) {
                $invalidProperties[] = "invalid value for 'bankAccount', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['bankAccount']) < 1)) {
                $invalidProperties[] = "invalid value for 'bankAccount', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['areacode'] === null) {
            $invalidProperties[] = "'areacode' can't be null";
        }
            if ((mb_strlen($this->container['areacode']) > 10)) {
                $invalidProperties[] = "invalid value for 'areacode', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['areacode']) < 1)) {
                $invalidProperties[] = "invalid value for 'areacode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['mobile'] === null) {
            $invalidProperties[] = "'mobile' can't be null";
        }
            if ((mb_strlen($this->container['mobile']) > 20)) {
                $invalidProperties[] = "invalid value for 'mobile', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['mobile']) < 1)) {
                $invalidProperties[] = "invalid value for 'mobile', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['verificationCode'] === null) {
            $invalidProperties[] = "'verificationCode' can't be null";
        }
            if ((mb_strlen($this->container['verificationCode']) > 6)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be smaller than or equal to 6.";
            }
            if ((mb_strlen($this->container['verificationCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'verificationCode', the character length must be bigger than or equal to 1.";
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
    * Gets bankAccount
    *  |参数名称：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。| |参数约束及描述：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。|
    *
    * @return string
    */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
    * Sets bankAccount
    *
    * @param string $bankAccount |参数名称：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。| |参数约束及描述：银行卡账号。当identifyType为4时，不能为空。银行账号输入规则：^[0-9a-zA-Z]，可以包含特殊横杠（-）字符。|
    *
    * @return $this
    */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;
        return $this;
    }

    /**
    * Gets areacode
    *  |参数名称：国家/区号码。例如：0086：中国大陆区号码。| |参数约束及描述：国家/区号码。例如：0086：中国大陆区号码。|
    *
    * @return string
    */
    public function getAreacode()
    {
        return $this->container['areacode'];
    }

    /**
    * Sets areacode
    *
    * @param string $areacode |参数名称：国家/区号码。例如：0086：中国大陆区号码。| |参数约束及描述：国家/区号码。例如：0086：中国大陆区号码。|
    *
    * @return $this
    */
    public function setAreacode($areacode)
    {
        $this->container['areacode'] = $areacode;
        return $this;
    }

    /**
    * Gets mobile
    *  |参数名称：手机号码。| |参数约束及描述：手机号码。|
    *
    * @return string
    */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
    * Sets mobile
    *
    * @param string $mobile |参数名称：手机号码。| |参数约束及描述：手机号码。|
    *
    * @return $this
    */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;
        return $this;
    }

    /**
    * Gets verificationCode
    *  |参数名称：验证码。| |参数约束及描述：验证码。|
    *
    * @return string
    */
    public function getVerificationCode()
    {
        return $this->container['verificationCode'];
    }

    /**
    * Sets verificationCode
    *
    * @param string $verificationCode |参数名称：验证码。| |参数约束及描述：验证码。|
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

