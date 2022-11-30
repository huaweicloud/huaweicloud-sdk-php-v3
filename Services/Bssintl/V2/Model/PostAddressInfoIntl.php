<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostAddressInfoIntl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostAddressInfoIntl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  收件人地址。
    * recipients  收件人。
    * zipCode  收件所在地邮政编码。
    * mobilePhone  收件人手机号码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => 'string',
            'recipients' => 'string',
            'zipCode' => 'string',
            'mobilePhone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  收件人地址。
    * recipients  收件人。
    * zipCode  收件所在地邮政编码。
    * mobilePhone  收件人手机号码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'recipients' => null,
        'zipCode' => null,
        'mobilePhone' => null
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
    * address  收件人地址。
    * recipients  收件人。
    * zipCode  收件所在地邮政编码。
    * mobilePhone  收件人手机号码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'recipients' => 'recipients',
            'zipCode' => 'zipCode',
            'mobilePhone' => 'mobilePhone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  收件人地址。
    * recipients  收件人。
    * zipCode  收件所在地邮政编码。
    * mobilePhone  收件人手机号码。
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'recipients' => 'setRecipients',
            'zipCode' => 'setZipCode',
            'mobilePhone' => 'setMobilePhone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  收件人地址。
    * recipients  收件人。
    * zipCode  收件所在地邮政编码。
    * mobilePhone  收件人手机号码。
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'recipients' => 'getRecipients',
            'zipCode' => 'getZipCode',
            'mobilePhone' => 'getMobilePhone'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['zipCode'] = isset($data['zipCode']) ? $data['zipCode'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 1024)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) < 0)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recipients']) && (mb_strlen($this->container['recipients']) > 1024)) {
                $invalidProperties[] = "invalid value for 'recipients', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['recipients']) && (mb_strlen($this->container['recipients']) < 0)) {
                $invalidProperties[] = "invalid value for 'recipients', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['zipCode']) && (mb_strlen($this->container['zipCode']) > 256)) {
                $invalidProperties[] = "invalid value for 'zipCode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['zipCode']) && (mb_strlen($this->container['zipCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'zipCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) > 256)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be bigger than or equal to 0.";
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
    * Gets address
    *  收件人地址。
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
    * @param string|null $address 收件人地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets recipients
    *  收件人。
    *
    * @return string|null
    */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
    * Sets recipients
    *
    * @param string|null $recipients 收件人。
    *
    * @return $this
    */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;
        return $this;
    }

    /**
    * Gets zipCode
    *  收件所在地邮政编码。
    *
    * @return string|null
    */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
    * Sets zipCode
    *
    * @param string|null $zipCode 收件所在地邮政编码。
    *
    * @return $this
    */
    public function setZipCode($zipCode)
    {
        $this->container['zipCode'] = $zipCode;
        return $this;
    }

    /**
    * Gets mobilePhone
    *  收件人手机号码。
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
    * @param string|null $mobilePhone 收件人手机号码。
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
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

