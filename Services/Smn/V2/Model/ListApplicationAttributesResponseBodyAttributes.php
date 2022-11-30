<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApplicationAttributesResponseBodyAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApplicationAttributesResponseBody_attributes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间，APNS、APNS_SANDBOX平台特有属性 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'string',
            'appleCertificateExpirationDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间，APNS、APNS_SANDBOX平台特有属性 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'appleCertificateExpirationDate' => null
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
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间，APNS、APNS_SANDBOX平台特有属性 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'appleCertificateExpirationDate' => 'apple_certificate_expiration_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间，APNS、APNS_SANDBOX平台特有属性 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'appleCertificateExpirationDate' => 'setAppleCertificateExpirationDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  应用平台是否启用。
    * appleCertificateExpirationDate  苹果证书过期时间，APNS、APNS_SANDBOX平台特有属性 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'appleCertificateExpirationDate' => 'getAppleCertificateExpirationDate'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['appleCertificateExpirationDate'] = isset($data['appleCertificateExpirationDate']) ? $data['appleCertificateExpirationDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    * Gets enabled
    *  应用平台是否启用。
    *
    * @return string
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string $enabled 应用平台是否启用。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets appleCertificateExpirationDate
    *  苹果证书过期时间，APNS、APNS_SANDBOX平台特有属性 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getAppleCertificateExpirationDate()
    {
        return $this->container['appleCertificateExpirationDate'];
    }

    /**
    * Sets appleCertificateExpirationDate
    *
    * @param string|null $appleCertificateExpirationDate 苹果证书过期时间，APNS、APNS_SANDBOX平台特有属性 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setAppleCertificateExpirationDate($appleCertificateExpirationDate)
    {
        $this->container['appleCertificateExpirationDate'] = $appleCertificateExpirationDate;
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

