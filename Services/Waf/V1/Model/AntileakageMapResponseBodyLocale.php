<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AntileakageMapResponseBodyLocale implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AntileakageMapResponseBody_locale';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  **参数解释：** 响应码拦截，用于捕获和处理特定HTTP响应码的机制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * idCard  **参数解释：** 身份证号，用于识别个人身份的唯一编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sensitive  **参数解释：** 敏感信息过滤，用于检测和处理敏感信息的模块 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * phone  **参数解释：** 电话号码，用于联系的数字编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCode  **参数解释：** 选项涉及的各种响应码，示例值400，401,404 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * email  **参数解释：** 电子邮箱，用于电子通信的地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'idCard' => 'string',
            'sensitive' => 'string',
            'phone' => 'string',
            'responseCode' => 'string',
            'email' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  **参数解释：** 响应码拦截，用于捕获和处理特定HTTP响应码的机制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * idCard  **参数解释：** 身份证号，用于识别个人身份的唯一编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sensitive  **参数解释：** 敏感信息过滤，用于检测和处理敏感信息的模块 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * phone  **参数解释：** 电话号码，用于联系的数字编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCode  **参数解释：** 选项涉及的各种响应码，示例值400，401,404 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * email  **参数解释：** 电子邮箱，用于电子通信的地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'idCard' => null,
        'sensitive' => null,
        'phone' => null,
        'responseCode' => null,
        'email' => null
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
    * code  **参数解释：** 响应码拦截，用于捕获和处理特定HTTP响应码的机制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * idCard  **参数解释：** 身份证号，用于识别个人身份的唯一编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sensitive  **参数解释：** 敏感信息过滤，用于检测和处理敏感信息的模块 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * phone  **参数解释：** 电话号码，用于联系的数字编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCode  **参数解释：** 选项涉及的各种响应码，示例值400，401,404 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * email  **参数解释：** 电子邮箱，用于电子通信的地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'idCard' => 'id_card',
            'sensitive' => 'sensitive',
            'phone' => 'phone',
            'responseCode' => 'responseCode',
            'email' => 'email'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  **参数解释：** 响应码拦截，用于捕获和处理特定HTTP响应码的机制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * idCard  **参数解释：** 身份证号，用于识别个人身份的唯一编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sensitive  **参数解释：** 敏感信息过滤，用于检测和处理敏感信息的模块 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * phone  **参数解释：** 电话号码，用于联系的数字编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCode  **参数解释：** 选项涉及的各种响应码，示例值400，401,404 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * email  **参数解释：** 电子邮箱，用于电子通信的地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'idCard' => 'setIdCard',
            'sensitive' => 'setSensitive',
            'phone' => 'setPhone',
            'responseCode' => 'setResponseCode',
            'email' => 'setEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  **参数解释：** 响应码拦截，用于捕获和处理特定HTTP响应码的机制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * idCard  **参数解释：** 身份证号，用于识别个人身份的唯一编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sensitive  **参数解释：** 敏感信息过滤，用于检测和处理敏感信息的模块 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * phone  **参数解释：** 电话号码，用于联系的数字编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCode  **参数解释：** 选项涉及的各种响应码，示例值400，401,404 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * email  **参数解释：** 电子邮箱，用于电子通信的地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'idCard' => 'getIdCard',
            'sensitive' => 'getSensitive',
            'phone' => 'getPhone',
            'responseCode' => 'getResponseCode',
            'email' => 'getEmail'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['idCard'] = isset($data['idCard']) ? $data['idCard'] : null;
        $this->container['sensitive'] = isset($data['sensitive']) ? $data['sensitive'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
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
    * Gets code
    *  **参数解释：** 响应码拦截，用于捕获和处理特定HTTP响应码的机制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释：** 响应码拦截，用于捕获和处理特定HTTP响应码的机制 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets idCard
    *  **参数解释：** 身份证号，用于识别个人身份的唯一编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getIdCard()
    {
        return $this->container['idCard'];
    }

    /**
    * Sets idCard
    *
    * @param string|null $idCard **参数解释：** 身份证号，用于识别个人身份的唯一编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIdCard($idCard)
    {
        $this->container['idCard'] = $idCard;
        return $this;
    }

    /**
    * Gets sensitive
    *  **参数解释：** 敏感信息过滤，用于检测和处理敏感信息的模块 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSensitive()
    {
        return $this->container['sensitive'];
    }

    /**
    * Sets sensitive
    *
    * @param string|null $sensitive **参数解释：** 敏感信息过滤，用于检测和处理敏感信息的模块 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSensitive($sensitive)
    {
        $this->container['sensitive'] = $sensitive;
        return $this;
    }

    /**
    * Gets phone
    *  **参数解释：** 电话号码，用于联系的数字编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone **参数解释：** 电话号码，用于联系的数字编码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets responseCode
    *  **参数解释：** 选项涉及的各种响应码，示例值400，401,404 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
    * Sets responseCode
    *
    * @param string|null $responseCode **参数解释：** 选项涉及的各种响应码，示例值400，401,404 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;
        return $this;
    }

    /**
    * Gets email
    *  **参数解释：** 电子邮箱，用于电子通信的地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email **参数解释：** 电子邮箱，用于电子通信的地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
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

