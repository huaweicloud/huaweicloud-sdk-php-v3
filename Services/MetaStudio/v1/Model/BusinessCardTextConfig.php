<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessCardTextConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessCardTextConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名。
    * company  企业或组织名称。
    * title  职位名称。
    * mobilePhone  手机号码。
    * phone  固话号码。
    * mail  电子邮件地址。
    * address  地址。
    * other1  其他信息1。可填写一些公司广告语等
    * other2  其他信息1。可填写一些公司广告语等
    * other3  其他信息1。可填写一些公司广告语等
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'company' => 'string',
            'title' => 'string',
            'mobilePhone' => 'string',
            'phone' => 'string',
            'mail' => 'string',
            'address' => 'string',
            'other1' => 'string',
            'other2' => 'string',
            'other3' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名。
    * company  企业或组织名称。
    * title  职位名称。
    * mobilePhone  手机号码。
    * phone  固话号码。
    * mail  电子邮件地址。
    * address  地址。
    * other1  其他信息1。可填写一些公司广告语等
    * other2  其他信息1。可填写一些公司广告语等
    * other3  其他信息1。可填写一些公司广告语等
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'company' => null,
        'title' => null,
        'mobilePhone' => null,
        'phone' => null,
        'mail' => null,
        'address' => null,
        'other1' => null,
        'other2' => null,
        'other3' => null
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
    * name  姓名。
    * company  企业或组织名称。
    * title  职位名称。
    * mobilePhone  手机号码。
    * phone  固话号码。
    * mail  电子邮件地址。
    * address  地址。
    * other1  其他信息1。可填写一些公司广告语等
    * other2  其他信息1。可填写一些公司广告语等
    * other3  其他信息1。可填写一些公司广告语等
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'company' => 'company',
            'title' => 'title',
            'mobilePhone' => 'mobile_phone',
            'phone' => 'phone',
            'mail' => 'mail',
            'address' => 'address',
            'other1' => 'other1',
            'other2' => 'other2',
            'other3' => 'other3'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名。
    * company  企业或组织名称。
    * title  职位名称。
    * mobilePhone  手机号码。
    * phone  固话号码。
    * mail  电子邮件地址。
    * address  地址。
    * other1  其他信息1。可填写一些公司广告语等
    * other2  其他信息1。可填写一些公司广告语等
    * other3  其他信息1。可填写一些公司广告语等
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'company' => 'setCompany',
            'title' => 'setTitle',
            'mobilePhone' => 'setMobilePhone',
            'phone' => 'setPhone',
            'mail' => 'setMail',
            'address' => 'setAddress',
            'other1' => 'setOther1',
            'other2' => 'setOther2',
            'other3' => 'setOther3'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名。
    * company  企业或组织名称。
    * title  职位名称。
    * mobilePhone  手机号码。
    * phone  固话号码。
    * mail  电子邮件地址。
    * address  地址。
    * other1  其他信息1。可填写一些公司广告语等
    * other2  其他信息1。可填写一些公司广告语等
    * other3  其他信息1。可填写一些公司广告语等
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'company' => 'getCompany',
            'title' => 'getTitle',
            'mobilePhone' => 'getMobilePhone',
            'phone' => 'getPhone',
            'mail' => 'getMail',
            'address' => 'getAddress',
            'other1' => 'getOther1',
            'other2' => 'getOther2',
            'other3' => 'getOther3'
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
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['other1'] = isset($data['other1']) ? $data['other1'] : null;
        $this->container['other2'] = isset($data['other2']) ? $data['other2'] : null;
        $this->container['other3'] = isset($data['other3']) ? $data['other3'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 256)) {
                $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) < 1)) {
                $invalidProperties[] = "invalid value for 'company', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) > 32)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) < 1)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 32)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 1)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mail']) && (mb_strlen($this->container['mail']) > 64)) {
                $invalidProperties[] = "invalid value for 'mail', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mail']) && (mb_strlen($this->container['mail']) < 1)) {
                $invalidProperties[] = "invalid value for 'mail', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 256)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) < 1)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['other1']) && (mb_strlen($this->container['other1']) > 256)) {
                $invalidProperties[] = "invalid value for 'other1', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['other1']) && (mb_strlen($this->container['other1']) < 1)) {
                $invalidProperties[] = "invalid value for 'other1', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['other2']) && (mb_strlen($this->container['other2']) > 256)) {
                $invalidProperties[] = "invalid value for 'other2', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['other2']) && (mb_strlen($this->container['other2']) < 1)) {
                $invalidProperties[] = "invalid value for 'other2', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['other3']) && (mb_strlen($this->container['other3']) > 256)) {
                $invalidProperties[] = "invalid value for 'other3', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['other3']) && (mb_strlen($this->container['other3']) < 1)) {
                $invalidProperties[] = "invalid value for 'other3', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  姓名。
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
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets company
    *  企业或组织名称。
    *
    * @return string|null
    */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
    * Sets company
    *
    * @param string|null $company 企业或组织名称。
    *
    * @return $this
    */
    public function setCompany($company)
    {
        $this->container['company'] = $company;
        return $this;
    }

    /**
    * Gets title
    *  职位名称。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 职位名称。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets mobilePhone
    *  手机号码。
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
    * @param string|null $mobilePhone 手机号码。
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
        return $this;
    }

    /**
    * Gets phone
    *  固话号码。
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
    * @param string|null $phone 固话号码。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets mail
    *  电子邮件地址。
    *
    * @return string|null
    */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
    * Sets mail
    *
    * @param string|null $mail 电子邮件地址。
    *
    * @return $this
    */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;
        return $this;
    }

    /**
    * Gets address
    *  地址。
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
    * @param string|null $address 地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets other1
    *  其他信息1。可填写一些公司广告语等
    *
    * @return string|null
    */
    public function getOther1()
    {
        return $this->container['other1'];
    }

    /**
    * Sets other1
    *
    * @param string|null $other1 其他信息1。可填写一些公司广告语等
    *
    * @return $this
    */
    public function setOther1($other1)
    {
        $this->container['other1'] = $other1;
        return $this;
    }

    /**
    * Gets other2
    *  其他信息1。可填写一些公司广告语等
    *
    * @return string|null
    */
    public function getOther2()
    {
        return $this->container['other2'];
    }

    /**
    * Sets other2
    *
    * @param string|null $other2 其他信息1。可填写一些公司广告语等
    *
    * @return $this
    */
    public function setOther2($other2)
    {
        $this->container['other2'] = $other2;
        return $this;
    }

    /**
    * Gets other3
    *  其他信息1。可填写一些公司广告语等
    *
    * @return string|null
    */
    public function getOther3()
    {
        return $this->container['other3'];
    }

    /**
    * Sets other3
    *
    * @param string|null $other3 其他信息1。可填写一些公司广告语等
    *
    * @return $this
    */
    public function setOther3($other3)
    {
        $this->container['other3'] = $other3;
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

