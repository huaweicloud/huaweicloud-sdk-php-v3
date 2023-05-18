<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModCorpBasicDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModCorpBasicDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  企业名称，格式必须满足^[^#%&'+;<>=\\\"'？?\\\\\\\\……/]*$。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时“country”参数必填，手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * fax  传真号码,格式必须满足(^$|^[+]?[0-9]+$)。
    * email  邮箱地址,格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * address  地址。
    * description  备注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'phone' => 'string',
            'country' => 'string',
            'fax' => 'string',
            'email' => 'string',
            'address' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  企业名称，格式必须满足^[^#%&'+;<>=\\\"'？?\\\\\\\\……/]*$。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时“country”参数必填，手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * fax  传真号码,格式必须满足(^$|^[+]?[0-9]+$)。
    * email  邮箱地址,格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * address  地址。
    * description  备注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'phone' => null,
        'country' => null,
        'fax' => null,
        'email' => null,
        'address' => null,
        'description' => null
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
    * name  企业名称，格式必须满足^[^#%&'+;<>=\\\"'？?\\\\\\\\……/]*$。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时“country”参数必填，手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * fax  传真号码,格式必须满足(^$|^[+]?[0-9]+$)。
    * email  邮箱地址,格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * address  地址。
    * description  备注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'phone' => 'phone',
            'country' => 'country',
            'fax' => 'fax',
            'email' => 'email',
            'address' => 'address',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  企业名称，格式必须满足^[^#%&'+;<>=\\\"'？?\\\\\\\\……/]*$。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时“country”参数必填，手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * fax  传真号码,格式必须满足(^$|^[+]?[0-9]+$)。
    * email  邮箱地址,格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * address  地址。
    * description  备注。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'phone' => 'setPhone',
            'country' => 'setCountry',
            'fax' => 'setFax',
            'email' => 'setEmail',
            'address' => 'setAddress',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  企业名称，格式必须满足^[^#%&'+;<>=\\\"'？?\\\\\\\\……/]*$。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时“country”参数必填，手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * fax  传真号码,格式必须满足(^$|^[+]?[0-9]+$)。
    * email  邮箱地址,格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * address  地址。
    * description  备注。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'phone' => 'getPhone',
            'country' => 'getCountry',
            'fax' => 'getFax',
            'email' => 'getEmail',
            'address' => 'getAddress',
            'description' => 'getDescription'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 32)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 255)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) > 32)) {
                $invalidProperties[] = "invalid value for 'fax', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 255)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 255)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
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
    *  企业名称，格式必须满足^[^#%&'+;<>=\\\"'？?\\\\\\\\……/]*$。
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
    * @param string|null $name 企业名称，格式必须满足^[^#%&'+;<>=\\\"'？?\\\\\\\\……/]*$。
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
    *  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时“country”参数必填，手机格式必须满足(^$|^[+]?[0-9]+$)。
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
    * @param string|null $phone 手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时“country”参数必填，手机格式必须满足(^$|^[+]?[0-9]+$)。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets country
    *  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
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
    * @param string|null $country [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets fax
    *  传真号码,格式必须满足(^$|^[+]?[0-9]+$)。
    *
    * @return string|null
    */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
    * Sets fax
    *
    * @param string|null $fax 传真号码,格式必须满足(^$|^[+]?[0-9]+$)。
    *
    * @return $this
    */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;
        return $this;
    }

    /**
    * Gets email
    *  邮箱地址,格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
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
    * @param string|null $email 邮箱地址,格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
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
    * Gets description
    *  备注。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 备注。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

