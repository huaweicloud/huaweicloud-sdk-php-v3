<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerPostalAddressV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerPostalAddressV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addressId  邮寄地址ID。
    * recipient  收件人姓名。
    * nationality  国家。例如：中国
    * province  省/自治区/直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花区。
    * address  邮寄详细地址。
    * zipcode  邮编。
    * areacode  国家码。例如： 中国：0086
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addressId' => 'string',
            'recipient' => 'string',
            'nationality' => 'string',
            'province' => 'string',
            'city' => 'string',
            'district' => 'string',
            'address' => 'string',
            'zipcode' => 'string',
            'areacode' => 'string',
            'mobilePhone' => 'string',
            'isDefault' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addressId  邮寄地址ID。
    * recipient  收件人姓名。
    * nationality  国家。例如：中国
    * province  省/自治区/直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花区。
    * address  邮寄详细地址。
    * zipcode  邮编。
    * areacode  国家码。例如： 中国：0086
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addressId' => null,
        'recipient' => null,
        'nationality' => null,
        'province' => null,
        'city' => null,
        'district' => null,
        'address' => null,
        'zipcode' => null,
        'areacode' => null,
        'mobilePhone' => null,
        'isDefault' => 'int32'
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
    * addressId  邮寄地址ID。
    * recipient  收件人姓名。
    * nationality  国家。例如：中国
    * province  省/自治区/直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花区。
    * address  邮寄详细地址。
    * zipcode  邮编。
    * areacode  国家码。例如： 中国：0086
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addressId' => 'address_id',
            'recipient' => 'recipient',
            'nationality' => 'nationality',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'address' => 'address',
            'zipcode' => 'zipcode',
            'areacode' => 'areacode',
            'mobilePhone' => 'mobile_phone',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addressId  邮寄地址ID。
    * recipient  收件人姓名。
    * nationality  国家。例如：中国
    * province  省/自治区/直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花区。
    * address  邮寄详细地址。
    * zipcode  邮编。
    * areacode  国家码。例如： 中国：0086
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $setters = [
            'addressId' => 'setAddressId',
            'recipient' => 'setRecipient',
            'nationality' => 'setNationality',
            'province' => 'setProvince',
            'city' => 'setCity',
            'district' => 'setDistrict',
            'address' => 'setAddress',
            'zipcode' => 'setZipcode',
            'areacode' => 'setAreacode',
            'mobilePhone' => 'setMobilePhone',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addressId  邮寄地址ID。
    * recipient  收件人姓名。
    * nationality  国家。例如：中国
    * province  省/自治区/直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花区。
    * address  邮寄详细地址。
    * zipcode  邮编。
    * areacode  国家码。例如： 中国：0086
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $getters = [
            'addressId' => 'getAddressId',
            'recipient' => 'getRecipient',
            'nationality' => 'getNationality',
            'province' => 'getProvince',
            'city' => 'getCity',
            'district' => 'getDistrict',
            'address' => 'getAddress',
            'zipcode' => 'getZipcode',
            'areacode' => 'getAreacode',
            'mobilePhone' => 'getMobilePhone',
            'isDefault' => 'getIsDefault'
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
        $this->container['addressId'] = isset($data['addressId']) ? $data['addressId'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['areacode'] = isset($data['areacode']) ? $data['areacode'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
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
    * Gets addressId
    *  邮寄地址ID。
    *
    * @return string|null
    */
    public function getAddressId()
    {
        return $this->container['addressId'];
    }

    /**
    * Sets addressId
    *
    * @param string|null $addressId 邮寄地址ID。
    *
    * @return $this
    */
    public function setAddressId($addressId)
    {
        $this->container['addressId'] = $addressId;
        return $this;
    }

    /**
    * Gets recipient
    *  收件人姓名。
    *
    * @return string|null
    */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
    * Sets recipient
    *
    * @param string|null $recipient 收件人姓名。
    *
    * @return $this
    */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;
        return $this;
    }

    /**
    * Gets nationality
    *  国家。例如：中国
    *
    * @return string|null
    */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
    * Sets nationality
    *
    * @param string|null $nationality 国家。例如：中国
    *
    * @return $this
    */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;
        return $this;
    }

    /**
    * Gets province
    *  省/自治区/直辖市。例如：江苏省。
    *
    * @return string|null
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string|null $province 省/自治区/直辖市。例如：江苏省。
    *
    * @return $this
    */
    public function setProvince($province)
    {
        $this->container['province'] = $province;
        return $this;
    }

    /**
    * Gets city
    *  市/区。例如：南京市。
    *
    * @return string|null
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string|null $city 市/区。例如：南京市。
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets district
    *  区。例如：雨花区。
    *
    * @return string|null
    */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
    * Sets district
    *
    * @param string|null $district 区。例如：雨花区。
    *
    * @return $this
    */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;
        return $this;
    }

    /**
    * Gets address
    *  邮寄详细地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 邮寄详细地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets zipcode
    *  邮编。
    *
    * @return string|null
    */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
    * Sets zipcode
    *
    * @param string|null $zipcode 邮编。
    *
    * @return $this
    */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;
        return $this;
    }

    /**
    * Gets areacode
    *  国家码。例如： 中国：0086
    *
    * @return string|null
    */
    public function getAreacode()
    {
        return $this->container['areacode'];
    }

    /**
    * Sets areacode
    *
    * @param string|null $areacode 国家码。例如： 中国：0086
    *
    * @return $this
    */
    public function setAreacode($areacode)
    {
        $this->container['areacode'] = $areacode;
        return $this;
    }

    /**
    * Gets mobilePhone
    *  手机号码，不带国家码。
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
    * @param string|null $mobilePhone 手机号码，不带国家码。
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @return int|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param int|null $isDefault 是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
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

