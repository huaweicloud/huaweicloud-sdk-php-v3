<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddressItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddressItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * formatted  包含要显示的地址的格式化版本的字符串
    * streetAddress  街道
    * locality  地址位置
    * region  区域
    * postalCode  邮政编码
    * country  国家或地区
    * type  表示地址类型的字符串
    * primary  一个布尔值，表示这是否是用户的主地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'formatted' => 'string',
            'streetAddress' => 'string',
            'locality' => 'string',
            'region' => 'string',
            'postalCode' => 'string',
            'country' => 'string',
            'type' => 'string',
            'primary' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * formatted  包含要显示的地址的格式化版本的字符串
    * streetAddress  街道
    * locality  地址位置
    * region  区域
    * postalCode  邮政编码
    * country  国家或地区
    * type  表示地址类型的字符串
    * primary  一个布尔值，表示这是否是用户的主地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'formatted' => null,
        'streetAddress' => null,
        'locality' => null,
        'region' => null,
        'postalCode' => null,
        'country' => null,
        'type' => null,
        'primary' => null
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
    * formatted  包含要显示的地址的格式化版本的字符串
    * streetAddress  街道
    * locality  地址位置
    * region  区域
    * postalCode  邮政编码
    * country  国家或地区
    * type  表示地址类型的字符串
    * primary  一个布尔值，表示这是否是用户的主地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'formatted' => 'formatted',
            'streetAddress' => 'streetAddress',
            'locality' => 'locality',
            'region' => 'region',
            'postalCode' => 'postalCode',
            'country' => 'country',
            'type' => 'type',
            'primary' => 'primary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * formatted  包含要显示的地址的格式化版本的字符串
    * streetAddress  街道
    * locality  地址位置
    * region  区域
    * postalCode  邮政编码
    * country  国家或地区
    * type  表示地址类型的字符串
    * primary  一个布尔值，表示这是否是用户的主地址
    *
    * @var string[]
    */
    protected static $setters = [
            'formatted' => 'setFormatted',
            'streetAddress' => 'setStreetAddress',
            'locality' => 'setLocality',
            'region' => 'setRegion',
            'postalCode' => 'setPostalCode',
            'country' => 'setCountry',
            'type' => 'setType',
            'primary' => 'setPrimary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * formatted  包含要显示的地址的格式化版本的字符串
    * streetAddress  街道
    * locality  地址位置
    * region  区域
    * postalCode  邮政编码
    * country  国家或地区
    * type  表示地址类型的字符串
    * primary  一个布尔值，表示这是否是用户的主地址
    *
    * @var string[]
    */
    protected static $getters = [
            'formatted' => 'getFormatted',
            'streetAddress' => 'getStreetAddress',
            'locality' => 'getLocality',
            'region' => 'getRegion',
            'postalCode' => 'getPostalCode',
            'country' => 'getCountry',
            'type' => 'getType',
            'primary' => 'getPrimary'
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
        $this->container['formatted'] = isset($data['formatted']) ? $data['formatted'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
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
    * Gets formatted
    *  包含要显示的地址的格式化版本的字符串
    *
    * @return string|null
    */
    public function getFormatted()
    {
        return $this->container['formatted'];
    }

    /**
    * Sets formatted
    *
    * @param string|null $formatted 包含要显示的地址的格式化版本的字符串
    *
    * @return $this
    */
    public function setFormatted($formatted)
    {
        $this->container['formatted'] = $formatted;
        return $this;
    }

    /**
    * Gets streetAddress
    *  街道
    *
    * @return string|null
    */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
    * Sets streetAddress
    *
    * @param string|null $streetAddress 街道
    *
    * @return $this
    */
    public function setStreetAddress($streetAddress)
    {
        $this->container['streetAddress'] = $streetAddress;
        return $this;
    }

    /**
    * Gets locality
    *  地址位置
    *
    * @return string|null
    */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
    * Sets locality
    *
    * @param string|null $locality 地址位置
    *
    * @return $this
    */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets postalCode
    *  邮政编码
    *
    * @return string|null
    */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
    * Sets postalCode
    *
    * @param string|null $postalCode 邮政编码
    *
    * @return $this
    */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;
        return $this;
    }

    /**
    * Gets country
    *  国家或地区
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country 国家或地区
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets type
    *  表示地址类型的字符串
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 表示地址类型的字符串
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets primary
    *  一个布尔值，表示这是否是用户的主地址
    *
    * @return bool|null
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param bool|null $primary 一个布尔值，表示这是否是用户的主地址
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
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

