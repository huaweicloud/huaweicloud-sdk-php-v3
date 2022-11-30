<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SendVerificationCodeV2Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SendVerificationCodeV2Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * receiverType  发送验证码的类型： 2：发送邮件验证码
    * timeout  发送验证码的超时时间。 如果不填的话，采用系统默认超时时间5分钟。 单位：分钟
    * email  指定发送验证码的邮箱地址。
    * lang  根据该参数的取值选择发送邮件验证码的语言。 zh-cn：中文en-us：英文
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'receiverType' => 'int',
            'timeout' => 'int',
            'email' => 'string',
            'lang' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * receiverType  发送验证码的类型： 2：发送邮件验证码
    * timeout  发送验证码的超时时间。 如果不填的话，采用系统默认超时时间5分钟。 单位：分钟
    * email  指定发送验证码的邮箱地址。
    * lang  根据该参数的取值选择发送邮件验证码的语言。 zh-cn：中文en-us：英文
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'receiverType' => 'int32',
        'timeout' => 'int32',
        'email' => null,
        'lang' => null
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
    * receiverType  发送验证码的类型： 2：发送邮件验证码
    * timeout  发送验证码的超时时间。 如果不填的话，采用系统默认超时时间5分钟。 单位：分钟
    * email  指定发送验证码的邮箱地址。
    * lang  根据该参数的取值选择发送邮件验证码的语言。 zh-cn：中文en-us：英文
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'receiverType' => 'receiver_type',
            'timeout' => 'timeout',
            'email' => 'email',
            'lang' => 'lang'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * receiverType  发送验证码的类型： 2：发送邮件验证码
    * timeout  发送验证码的超时时间。 如果不填的话，采用系统默认超时时间5分钟。 单位：分钟
    * email  指定发送验证码的邮箱地址。
    * lang  根据该参数的取值选择发送邮件验证码的语言。 zh-cn：中文en-us：英文
    *
    * @var string[]
    */
    protected static $setters = [
            'receiverType' => 'setReceiverType',
            'timeout' => 'setTimeout',
            'email' => 'setEmail',
            'lang' => 'setLang'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * receiverType  发送验证码的类型： 2：发送邮件验证码
    * timeout  发送验证码的超时时间。 如果不填的话，采用系统默认超时时间5分钟。 单位：分钟
    * email  指定发送验证码的邮箱地址。
    * lang  根据该参数的取值选择发送邮件验证码的语言。 zh-cn：中文en-us：英文
    *
    * @var string[]
    */
    protected static $getters = [
            'receiverType' => 'getReceiverType',
            'timeout' => 'getTimeout',
            'email' => 'getEmail',
            'lang' => 'getLang'
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
        $this->container['receiverType'] = isset($data['receiverType']) ? $data['receiverType'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['receiverType'] === null) {
            $invalidProperties[] = "'receiverType' can't be null";
        }
            if (($this->container['receiverType'] > 2)) {
                $invalidProperties[] = "invalid value for 'receiverType', must be smaller than or equal to 2.";
            }
            if (($this->container['receiverType'] < 1)) {
                $invalidProperties[] = "invalid value for 'receiverType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
            }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
            if ((mb_strlen($this->container['email']) > 64)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lang']) && (mb_strlen($this->container['lang']) > 16)) {
                $invalidProperties[] = "invalid value for 'lang', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['lang']) && (mb_strlen($this->container['lang']) < 0)) {
                $invalidProperties[] = "invalid value for 'lang', the character length must be bigger than or equal to 0.";
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
    * Gets receiverType
    *  发送验证码的类型： 2：发送邮件验证码
    *
    * @return int
    */
    public function getReceiverType()
    {
        return $this->container['receiverType'];
    }

    /**
    * Sets receiverType
    *
    * @param int $receiverType 发送验证码的类型： 2：发送邮件验证码
    *
    * @return $this
    */
    public function setReceiverType($receiverType)
    {
        $this->container['receiverType'] = $receiverType;
        return $this;
    }

    /**
    * Gets timeout
    *  发送验证码的超时时间。 如果不填的话，采用系统默认超时时间5分钟。 单位：分钟
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
    * @param int|null $timeout 发送验证码的超时时间。 如果不填的话，采用系统默认超时时间5分钟。 单位：分钟
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets email
    *  指定发送验证码的邮箱地址。
    *
    * @return string
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string $email 指定发送验证码的邮箱地址。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets lang
    *  根据该参数的取值选择发送邮件验证码的语言。 zh-cn：中文en-us：英文
    *
    * @return string|null
    */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
    * Sets lang
    *
    * @param string|null $lang 根据该参数的取值选择发送邮件验证码的语言。 zh-cn：中文en-us：英文
    *
    * @return $this
    */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;
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

