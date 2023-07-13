<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebImageContactInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebImageContactInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'phone' => 'string',
            'province' => 'string',
            'city' => 'string',
            'district' => 'string',
            'detailAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'phone' => null,
        'province' => null,
        'city' => null,
        'district' => null,
        'detailAddress' => null
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
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'phone' => 'phone',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'detailAddress' => 'detail_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'phone' => 'setPhone',
            'province' => 'setProvince',
            'city' => 'setCity',
            'district' => 'setDistrict',
            'detailAddress' => 'setDetailAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'phone' => 'getPhone',
            'province' => 'getProvince',
            'city' => 'getCity',
            'district' => 'getDistrict',
            'detailAddress' => 'getDetailAddress'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['detailAddress'] = isset($data['detailAddress']) ? $data['detailAddress'] : null;
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
    * Gets name
    *  传入contact_info时的返回，为姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 传入contact_info时的返回，为姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets phone
    *  传入contact_info时的返回，联系电话。
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
    * @param string|null $phone 传入contact_info时的返回，联系电话。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets province
    *  传入contact_info时的返回，省。
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
    * @param string|null $province 传入contact_info时的返回，省。
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
    *  传入contact_info时的返回，市。
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
    * @param string|null $city 传入contact_info时的返回，市。
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
    *  传入contact_info时的返回，县区。
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
    * @param string|null $district 传入contact_info时的返回，县区。
    *
    * @return $this
    */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;
        return $this;
    }

    /**
    * Gets detailAddress
    *  传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @return string|null
    */
    public function getDetailAddress()
    {
        return $this->container['detailAddress'];
    }

    /**
    * Sets detailAddress
    *
    * @param string|null $detailAddress 传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @return $this
    */
    public function setDetailAddress($detailAddress)
    {
        $this->container['detailAddress'] = $detailAddress;
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

