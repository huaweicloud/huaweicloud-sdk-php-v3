<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SendSmVerificationCodeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SendSmVerificationCodeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mobilePhone  接受短信验证码的手机号码。
    * timeout  超时时间，默认值为10分钟。 单位：分钟
    * language  发送的短信的语言。 zh-cn: 中文en-us: 英语 默认为偏好设置的默认语言。
    * smTemplateArgs  短信发送模板中的变量，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mobilePhone' => 'string',
            'timeout' => 'int',
            'language' => 'string',
            'smTemplateArgs' => '\HuaweiCloud\SDK\Bss\V2\Model\TemplateArgs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mobilePhone  接受短信验证码的手机号码。
    * timeout  超时时间，默认值为10分钟。 单位：分钟
    * language  发送的短信的语言。 zh-cn: 中文en-us: 英语 默认为偏好设置的默认语言。
    * smTemplateArgs  短信发送模板中的变量，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mobilePhone' => null,
        'timeout' => 'int32',
        'language' => null,
        'smTemplateArgs' => null
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
    * mobilePhone  接受短信验证码的手机号码。
    * timeout  超时时间，默认值为10分钟。 单位：分钟
    * language  发送的短信的语言。 zh-cn: 中文en-us: 英语 默认为偏好设置的默认语言。
    * smTemplateArgs  短信发送模板中的变量，具体参见表1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mobilePhone' => 'mobile_phone',
            'timeout' => 'timeout',
            'language' => 'language',
            'smTemplateArgs' => 'sm_template_args'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mobilePhone  接受短信验证码的手机号码。
    * timeout  超时时间，默认值为10分钟。 单位：分钟
    * language  发送的短信的语言。 zh-cn: 中文en-us: 英语 默认为偏好设置的默认语言。
    * smTemplateArgs  短信发送模板中的变量，具体参见表1。
    *
    * @var string[]
    */
    protected static $setters = [
            'mobilePhone' => 'setMobilePhone',
            'timeout' => 'setTimeout',
            'language' => 'setLanguage',
            'smTemplateArgs' => 'setSmTemplateArgs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mobilePhone  接受短信验证码的手机号码。
    * timeout  超时时间，默认值为10分钟。 单位：分钟
    * language  发送的短信的语言。 zh-cn: 中文en-us: 英语 默认为偏好设置的默认语言。
    * smTemplateArgs  短信发送模板中的变量，具体参见表1。
    *
    * @var string[]
    */
    protected static $getters = [
            'mobilePhone' => 'getMobilePhone',
            'timeout' => 'getTimeout',
            'language' => 'getLanguage',
            'smTemplateArgs' => 'getSmTemplateArgs'
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
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : 10;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['smTemplateArgs'] = isset($data['smTemplateArgs']) ? $data['smTemplateArgs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mobilePhone'] === null) {
            $invalidProperties[] = "'mobilePhone' can't be null";
        }
            if ((mb_strlen($this->container['mobilePhone']) > 20)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['mobilePhone']) < 1)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 100)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 0)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 5)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 0)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['smTemplateArgs'] === null) {
            $invalidProperties[] = "'smTemplateArgs' can't be null";
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
    * Gets mobilePhone
    *  接受短信验证码的手机号码。
    *
    * @return string
    */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
    * Sets mobilePhone
    *
    * @param string $mobilePhone 接受短信验证码的手机号码。
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
        return $this;
    }

    /**
    * Gets timeout
    *  超时时间，默认值为10分钟。 单位：分钟
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 超时时间，默认值为10分钟。 单位：分钟
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets language
    *  发送的短信的语言。 zh-cn: 中文en-us: 英语 默认为偏好设置的默认语言。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 发送的短信的语言。 zh-cn: 中文en-us: 英语 默认为偏好设置的默认语言。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets smTemplateArgs
    *  短信发送模板中的变量，具体参见表1。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\TemplateArgs[]
    */
    public function getSmTemplateArgs()
    {
        return $this->container['smTemplateArgs'];
    }

    /**
    * Sets smTemplateArgs
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\TemplateArgs[] $smTemplateArgs 短信发送模板中的变量，具体参见表1。
    *
    * @return $this
    */
    public function setSmTemplateArgs($smTemplateArgs)
    {
        $this->container['smTemplateArgs'] = $smTemplateArgs;
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

