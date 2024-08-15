<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInsertHeaderConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInsertHeaderConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  参数解释：请求头参数名。  约束限制：不能是以下字符： connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority、x-forwarded-host、x-forwarded-for、x-forwarded-for-port、x-forwarded-tls-certificate-id、x-forwarded-tls-protocol、x-forwarded-tls-cipher、x-forwarded-elb-ip、x-forwarded-port、x-forwarded-elb-id、x-forwarded-elb-vip、x-real-ip、x-forwarded-proto、x-nuwa-trace-ne-in、x-nuwa-trace-ne-out。  取值范围：1-40个字符，字母a-z（不区分大小写）、数字，短划线-和下划线_。
    * valueType  参数解释：请求头参数类别。  取值范围：USER_DEFINED,REFERENCE_HEADER,SYSTEM_DEFINED。
    * value  参数解释：请求头参数的值。  约束限制：当value_type为SYSTEM_DEFINED时，value只可从CLIENT-PORT,CLIENT-IP, ELB-PROTOCOL, ELB-ID, ELB-PORT, ELB-EIP, ELB-VIP中取值。  取值范围：1-128个字符，支持ascii码值32<=ch<=127范围内可打印字符，*和英文问号?。不能以空格开头或结尾。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'valueType' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  参数解释：请求头参数名。  约束限制：不能是以下字符： connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority、x-forwarded-host、x-forwarded-for、x-forwarded-for-port、x-forwarded-tls-certificate-id、x-forwarded-tls-protocol、x-forwarded-tls-cipher、x-forwarded-elb-ip、x-forwarded-port、x-forwarded-elb-id、x-forwarded-elb-vip、x-real-ip、x-forwarded-proto、x-nuwa-trace-ne-in、x-nuwa-trace-ne-out。  取值范围：1-40个字符，字母a-z（不区分大小写）、数字，短划线-和下划线_。
    * valueType  参数解释：请求头参数类别。  取值范围：USER_DEFINED,REFERENCE_HEADER,SYSTEM_DEFINED。
    * value  参数解释：请求头参数的值。  约束限制：当value_type为SYSTEM_DEFINED时，value只可从CLIENT-PORT,CLIENT-IP, ELB-PROTOCOL, ELB-ID, ELB-PORT, ELB-EIP, ELB-VIP中取值。  取值范围：1-128个字符，支持ascii码值32<=ch<=127范围内可打印字符，*和英文问号?。不能以空格开头或结尾。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'valueType' => null,
        'value' => null
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
    * key  参数解释：请求头参数名。  约束限制：不能是以下字符： connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority、x-forwarded-host、x-forwarded-for、x-forwarded-for-port、x-forwarded-tls-certificate-id、x-forwarded-tls-protocol、x-forwarded-tls-cipher、x-forwarded-elb-ip、x-forwarded-port、x-forwarded-elb-id、x-forwarded-elb-vip、x-real-ip、x-forwarded-proto、x-nuwa-trace-ne-in、x-nuwa-trace-ne-out。  取值范围：1-40个字符，字母a-z（不区分大小写）、数字，短划线-和下划线_。
    * valueType  参数解释：请求头参数类别。  取值范围：USER_DEFINED,REFERENCE_HEADER,SYSTEM_DEFINED。
    * value  参数解释：请求头参数的值。  约束限制：当value_type为SYSTEM_DEFINED时，value只可从CLIENT-PORT,CLIENT-IP, ELB-PROTOCOL, ELB-ID, ELB-PORT, ELB-EIP, ELB-VIP中取值。  取值范围：1-128个字符，支持ascii码值32<=ch<=127范围内可打印字符，*和英文问号?。不能以空格开头或结尾。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'valueType' => 'value_type',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  参数解释：请求头参数名。  约束限制：不能是以下字符： connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority、x-forwarded-host、x-forwarded-for、x-forwarded-for-port、x-forwarded-tls-certificate-id、x-forwarded-tls-protocol、x-forwarded-tls-cipher、x-forwarded-elb-ip、x-forwarded-port、x-forwarded-elb-id、x-forwarded-elb-vip、x-real-ip、x-forwarded-proto、x-nuwa-trace-ne-in、x-nuwa-trace-ne-out。  取值范围：1-40个字符，字母a-z（不区分大小写）、数字，短划线-和下划线_。
    * valueType  参数解释：请求头参数类别。  取值范围：USER_DEFINED,REFERENCE_HEADER,SYSTEM_DEFINED。
    * value  参数解释：请求头参数的值。  约束限制：当value_type为SYSTEM_DEFINED时，value只可从CLIENT-PORT,CLIENT-IP, ELB-PROTOCOL, ELB-ID, ELB-PORT, ELB-EIP, ELB-VIP中取值。  取值范围：1-128个字符，支持ascii码值32<=ch<=127范围内可打印字符，*和英文问号?。不能以空格开头或结尾。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'valueType' => 'setValueType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  参数解释：请求头参数名。  约束限制：不能是以下字符： connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority、x-forwarded-host、x-forwarded-for、x-forwarded-for-port、x-forwarded-tls-certificate-id、x-forwarded-tls-protocol、x-forwarded-tls-cipher、x-forwarded-elb-ip、x-forwarded-port、x-forwarded-elb-id、x-forwarded-elb-vip、x-real-ip、x-forwarded-proto、x-nuwa-trace-ne-in、x-nuwa-trace-ne-out。  取值范围：1-40个字符，字母a-z（不区分大小写）、数字，短划线-和下划线_。
    * valueType  参数解释：请求头参数类别。  取值范围：USER_DEFINED,REFERENCE_HEADER,SYSTEM_DEFINED。
    * value  参数解释：请求头参数的值。  约束限制：当value_type为SYSTEM_DEFINED时，value只可从CLIENT-PORT,CLIENT-IP, ELB-PROTOCOL, ELB-ID, ELB-PORT, ELB-EIP, ELB-VIP中取值。  取值范围：1-128个字符，支持ascii码值32<=ch<=127范围内可打印字符，*和英文问号?。不能以空格开头或结尾。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'valueType' => 'getValueType',
            'value' => 'getValue'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['valueType'] === null) {
            $invalidProperties[] = "'valueType' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets key
    *  参数解释：请求头参数名。  约束限制：不能是以下字符： connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority、x-forwarded-host、x-forwarded-for、x-forwarded-for-port、x-forwarded-tls-certificate-id、x-forwarded-tls-protocol、x-forwarded-tls-cipher、x-forwarded-elb-ip、x-forwarded-port、x-forwarded-elb-id、x-forwarded-elb-vip、x-real-ip、x-forwarded-proto、x-nuwa-trace-ne-in、x-nuwa-trace-ne-out。  取值范围：1-40个字符，字母a-z（不区分大小写）、数字，短划线-和下划线_。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 参数解释：请求头参数名。  约束限制：不能是以下字符： connection、upgrade、content-length、transfer-encoding、keep-alive、te、host、cookie、remoteip、authority、x-forwarded-host、x-forwarded-for、x-forwarded-for-port、x-forwarded-tls-certificate-id、x-forwarded-tls-protocol、x-forwarded-tls-cipher、x-forwarded-elb-ip、x-forwarded-port、x-forwarded-elb-id、x-forwarded-elb-vip、x-real-ip、x-forwarded-proto、x-nuwa-trace-ne-in、x-nuwa-trace-ne-out。  取值范围：1-40个字符，字母a-z（不区分大小写）、数字，短划线-和下划线_。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets valueType
    *  参数解释：请求头参数类别。  取值范围：USER_DEFINED,REFERENCE_HEADER,SYSTEM_DEFINED。
    *
    * @return string
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string $valueType 参数解释：请求头参数类别。  取值范围：USER_DEFINED,REFERENCE_HEADER,SYSTEM_DEFINED。
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets value
    *  参数解释：请求头参数的值。  约束限制：当value_type为SYSTEM_DEFINED时，value只可从CLIENT-PORT,CLIENT-IP, ELB-PROTOCOL, ELB-ID, ELB-PORT, ELB-EIP, ELB-VIP中取值。  取值范围：1-128个字符，支持ascii码值32<=ch<=127范围内可打印字符，*和英文问号?。不能以空格开头或结尾。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 参数解释：请求头参数的值。  约束限制：当value_type为SYSTEM_DEFINED时，value只可从CLIENT-PORT,CLIENT-IP, ELB-PROTOCOL, ELB-ID, ELB-PORT, ELB-EIP, ELB-VIP中取值。  取值范围：1-128个字符，支持ascii码值32<=ch<=127范围内可打印字符，*和英文问号?。不能以空格开头或结尾。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

