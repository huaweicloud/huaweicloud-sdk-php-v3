<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcDomainContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcDomainContact';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * email  邮箱地址
    * register  域名所有者
    * contactName  联系人
    * phoneNum  联系电话
    * province  省份
    * city  城市
    * address  通讯地址
    * zipCode  邮编
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'email' => 'string',
            'register' => 'string',
            'contactName' => 'string',
            'phoneNum' => 'string',
            'province' => 'string',
            'city' => 'string',
            'address' => 'string',
            'zipCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * email  邮箱地址
    * register  域名所有者
    * contactName  联系人
    * phoneNum  联系电话
    * province  省份
    * city  城市
    * address  通讯地址
    * zipCode  邮编
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'email' => null,
        'register' => null,
        'contactName' => null,
        'phoneNum' => null,
        'province' => null,
        'city' => null,
        'address' => null,
        'zipCode' => null
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
    * email  邮箱地址
    * register  域名所有者
    * contactName  联系人
    * phoneNum  联系电话
    * province  省份
    * city  城市
    * address  通讯地址
    * zipCode  邮编
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'email' => 'email',
            'register' => 'register',
            'contactName' => 'contact_name',
            'phoneNum' => 'phone_num',
            'province' => 'province',
            'city' => 'city',
            'address' => 'address',
            'zipCode' => 'zip_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * email  邮箱地址
    * register  域名所有者
    * contactName  联系人
    * phoneNum  联系电话
    * province  省份
    * city  城市
    * address  通讯地址
    * zipCode  邮编
    *
    * @var string[]
    */
    protected static $setters = [
            'email' => 'setEmail',
            'register' => 'setRegister',
            'contactName' => 'setContactName',
            'phoneNum' => 'setPhoneNum',
            'province' => 'setProvince',
            'city' => 'setCity',
            'address' => 'setAddress',
            'zipCode' => 'setZipCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * email  邮箱地址
    * register  域名所有者
    * contactName  联系人
    * phoneNum  联系电话
    * province  省份
    * city  城市
    * address  通讯地址
    * zipCode  邮编
    *
    * @var string[]
    */
    protected static $getters = [
            'email' => 'getEmail',
            'register' => 'getRegister',
            'contactName' => 'getContactName',
            'phoneNum' => 'getPhoneNum',
            'province' => 'getProvince',
            'city' => 'getCity',
            'address' => 'getAddress',
            'zipCode' => 'getZipCode'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['register'] = isset($data['register']) ? $data['register'] : null;
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['phoneNum'] = isset($data['phoneNum']) ? $data['phoneNum'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['zipCode'] = isset($data['zipCode']) ? $data['zipCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
            if ((mb_strlen($this->container['email']) > 256)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['register'] === null) {
            $invalidProperties[] = "'register' can't be null";
        }
            if ((mb_strlen($this->container['register']) > 128)) {
                $invalidProperties[] = "invalid value for 'register', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['register']) < 0)) {
                $invalidProperties[] = "invalid value for 'register', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['contactName'] === null) {
            $invalidProperties[] = "'contactName' can't be null";
        }
            if ((mb_strlen($this->container['contactName']) > 128)) {
                $invalidProperties[] = "invalid value for 'contactName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['contactName']) < 0)) {
                $invalidProperties[] = "invalid value for 'contactName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['phoneNum'] === null) {
            $invalidProperties[] = "'phoneNum' can't be null";
        }
            if ((mb_strlen($this->container['phoneNum']) > 128)) {
                $invalidProperties[] = "invalid value for 'phoneNum', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['phoneNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneNum', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['province'] === null) {
            $invalidProperties[] = "'province' can't be null";
        }
            if ((mb_strlen($this->container['province']) > 256)) {
                $invalidProperties[] = "invalid value for 'province', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['province']) < 0)) {
                $invalidProperties[] = "invalid value for 'province', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
            if ((mb_strlen($this->container['city']) > 256)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['city']) < 0)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
            if ((mb_strlen($this->container['address']) > 512)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['address']) < 0)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['zipCode'] === null) {
            $invalidProperties[] = "'zipCode' can't be null";
        }
            if ((mb_strlen($this->container['zipCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'zipCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['zipCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'zipCode', the character length must be bigger than or equal to 0.";
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
    * Gets email
    *  邮箱地址
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
    * @param string $email 邮箱地址
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets register
    *  域名所有者
    *
    * @return string
    */
    public function getRegister()
    {
        return $this->container['register'];
    }

    /**
    * Sets register
    *
    * @param string $register 域名所有者
    *
    * @return $this
    */
    public function setRegister($register)
    {
        $this->container['register'] = $register;
        return $this;
    }

    /**
    * Gets contactName
    *  联系人
    *
    * @return string
    */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
    * Sets contactName
    *
    * @param string $contactName 联系人
    *
    * @return $this
    */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;
        return $this;
    }

    /**
    * Gets phoneNum
    *  联系电话
    *
    * @return string
    */
    public function getPhoneNum()
    {
        return $this->container['phoneNum'];
    }

    /**
    * Sets phoneNum
    *
    * @param string $phoneNum 联系电话
    *
    * @return $this
    */
    public function setPhoneNum($phoneNum)
    {
        $this->container['phoneNum'] = $phoneNum;
        return $this;
    }

    /**
    * Gets province
    *  省份
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
    * @param string $province 省份
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
    *  城市
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
    * @param string $city 城市
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets address
    *  通讯地址
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
    * @param string $address 通讯地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets zipCode
    *  邮编
    *
    * @return string
    */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
    * Sets zipCode
    *
    * @param string $zipCode 邮编
    *
    * @return $this
    */
    public function setZipCode($zipCode)
    {
        $this->container['zipCode'] = $zipCode;
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

