<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddPostalReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddPostalReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recipient  收件人姓名。
    * province  省、自治区或直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花台区。
    * address  邮寄详细地址。
    * zipcode  邮寄地址所在邮编。 此参数不携带或携带值为null时，不赋值。
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recipient' => 'string',
            'province' => 'string',
            'city' => 'string',
            'district' => 'string',
            'address' => 'string',
            'zipcode' => 'string',
            'mobilePhone' => 'string',
            'isDefault' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recipient  收件人姓名。
    * province  省、自治区或直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花台区。
    * address  邮寄详细地址。
    * zipcode  邮寄地址所在邮编。 此参数不携带或携带值为null时，不赋值。
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recipient' => null,
        'province' => null,
        'city' => null,
        'district' => null,
        'address' => null,
        'zipcode' => null,
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
    * recipient  收件人姓名。
    * province  省、自治区或直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花台区。
    * address  邮寄详细地址。
    * zipcode  邮寄地址所在邮编。 此参数不携带或携带值为null时，不赋值。
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recipient' => 'recipient',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'address' => 'address',
            'zipcode' => 'zipcode',
            'mobilePhone' => 'mobile_phone',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recipient  收件人姓名。
    * province  省、自治区或直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花台区。
    * address  邮寄详细地址。
    * zipcode  邮寄地址所在邮编。 此参数不携带或携带值为null时，不赋值。
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $setters = [
            'recipient' => 'setRecipient',
            'province' => 'setProvince',
            'city' => 'setCity',
            'district' => 'setDistrict',
            'address' => 'setAddress',
            'zipcode' => 'setZipcode',
            'mobilePhone' => 'setMobilePhone',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recipient  收件人姓名。
    * province  省、自治区或直辖市。例如：江苏省。
    * city  市/区。例如：南京市。
    * district  区。例如：雨花台区。
    * address  邮寄详细地址。
    * zipcode  邮寄地址所在邮编。 此参数不携带或携带值为null时，不赋值。
    * mobilePhone  手机号码，不带国家码。
    * isDefault  是否默认地址，默认值为“0：非默认地址”。 1：默认地址0：非默认地址
    *
    * @var string[]
    */
    protected static $getters = [
            'recipient' => 'getRecipient',
            'province' => 'getProvince',
            'city' => 'getCity',
            'district' => 'getDistrict',
            'address' => 'getAddress',
            'zipcode' => 'getZipcode',
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
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
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
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
            if ((mb_strlen($this->container['recipient']) > 256)) {
                $invalidProperties[] = "invalid value for 'recipient', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['recipient']) < 1)) {
                $invalidProperties[] = "invalid value for 'recipient', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['province'] === null) {
            $invalidProperties[] = "'province' can't be null";
        }
            if ((mb_strlen($this->container['province']) > 64)) {
                $invalidProperties[] = "invalid value for 'province', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['province']) < 1)) {
                $invalidProperties[] = "invalid value for 'province', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
            if ((mb_strlen($this->container['city']) > 64)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['city']) < 1)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['district'] === null) {
            $invalidProperties[] = "'district' can't be null";
        }
            if ((mb_strlen($this->container['district']) > 64)) {
                $invalidProperties[] = "invalid value for 'district', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['district']) < 0)) {
                $invalidProperties[] = "invalid value for 'district', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
            if ((mb_strlen($this->container['address']) > 200)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 200.";
            }
            if ((mb_strlen($this->container['address']) < 1)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['zipcode']) && (mb_strlen($this->container['zipcode']) > 32)) {
                $invalidProperties[] = "invalid value for 'zipcode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['zipcode']) && (mb_strlen($this->container['zipcode']) < 1)) {
                $invalidProperties[] = "invalid value for 'zipcode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['mobilePhone'] === null) {
            $invalidProperties[] = "'mobilePhone' can't be null";
        }
            if ((mb_strlen($this->container['mobilePhone']) > 32)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['mobilePhone']) < 1)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[0-9]{1,32}/", $this->container['mobilePhone'])) {
                $invalidProperties[] = "invalid value for 'mobilePhone', must be conform to the pattern /[0-9]{1,32}/.";
            }
            if (!is_null($this->container['isDefault']) && ($this->container['isDefault'] > 1)) {
                $invalidProperties[] = "invalid value for 'isDefault', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isDefault']) && ($this->container['isDefault'] < 0)) {
                $invalidProperties[] = "invalid value for 'isDefault', must be bigger than or equal to 0.";
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
    * Gets recipient
    *  收件人姓名。
    *
    * @return string
    */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
    * Sets recipient
    *
    * @param string $recipient 收件人姓名。
    *
    * @return $this
    */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;
        return $this;
    }

    /**
    * Gets province
    *  省、自治区或直辖市。例如：江苏省。
    *
    * @return string
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string $province 省、自治区或直辖市。例如：江苏省。
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
    * @return string
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string $city 市/区。例如：南京市。
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
    *  区。例如：雨花台区。
    *
    * @return string
    */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
    * Sets district
    *
    * @param string $district 区。例如：雨花台区。
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
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 邮寄详细地址。
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
    *  邮寄地址所在邮编。 此参数不携带或携带值为null时，不赋值。
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
    * @param string|null $zipcode 邮寄地址所在邮编。 此参数不携带或携带值为null时，不赋值。
    *
    * @return $this
    */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;
        return $this;
    }

    /**
    * Gets mobilePhone
    *  手机号码，不带国家码。
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
    * @param string $mobilePhone 手机号码，不带国家码。
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

