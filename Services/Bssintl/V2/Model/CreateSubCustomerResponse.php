<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubCustomerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubCustomerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  |参数名称：客户ID| |参数的约束及描述：只有成功或客户向伙伴授权发生异常（CBC.5025）时才会返回，且只允许最大长度64的字符串|
    * domainName  |参数名称：用户登录名| |参数的约束及描述：只有成功的时候才会返回，且只允许最大长度64的字符串|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'domainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  |参数名称：客户ID| |参数的约束及描述：只有成功或客户向伙伴授权发生异常（CBC.5025）时才会返回，且只允许最大长度64的字符串|
    * domainName  |参数名称：用户登录名| |参数的约束及描述：只有成功的时候才会返回，且只允许最大长度64的字符串|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'domainName' => null
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
    * domainId  |参数名称：客户ID| |参数的约束及描述：只有成功或客户向伙伴授权发生异常（CBC.5025）时才会返回，且只允许最大长度64的字符串|
    * domainName  |参数名称：用户登录名| |参数的约束及描述：只有成功的时候才会返回，且只允许最大长度64的字符串|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'domainName' => 'domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  |参数名称：客户ID| |参数的约束及描述：只有成功或客户向伙伴授权发生异常（CBC.5025）时才会返回，且只允许最大长度64的字符串|
    * domainName  |参数名称：用户登录名| |参数的约束及描述：只有成功的时候才会返回，且只允许最大长度64的字符串|
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  |参数名称：客户ID| |参数的约束及描述：只有成功或客户向伙伴授权发生异常（CBC.5025）时才会返回，且只允许最大长度64的字符串|
    * domainName  |参数名称：用户登录名| |参数的约束及描述：只有成功的时候才会返回，且只允许最大长度64的字符串|
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
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
    * Gets domainId
    *  |参数名称：客户ID| |参数的约束及描述：只有成功或客户向伙伴授权发生异常（CBC.5025）时才会返回，且只允许最大长度64的字符串|
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId |参数名称：客户ID| |参数的约束及描述：只有成功或客户向伙伴授权发生异常（CBC.5025）时才会返回，且只允许最大长度64的字符串|
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  |参数名称：用户登录名| |参数的约束及描述：只有成功的时候才会返回，且只允许最大长度64的字符串|
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName |参数名称：用户登录名| |参数的约束及描述：只有成功的时候才会返回，且只允许最大长度64的字符串|
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
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

