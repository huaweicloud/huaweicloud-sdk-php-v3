<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiCloudClusterConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiCloudClusterConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  apiserver的地址
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => 'string',
            'certificateExpirationDate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  apiserver的地址
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'certificateExpirationDate' => 'int64'
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
    * address  apiserver的地址
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'certificateExpirationDate' => 'certificate_expiration_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  apiserver的地址
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'certificateExpirationDate' => 'setCertificateExpirationDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  apiserver的地址
    * certificateExpirationDate  证书有效期结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'certificateExpirationDate' => 'getCertificateExpirationDate'
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
        $this->container['certificateExpirationDate'] = isset($data['certificateExpirationDate']) ? $data['certificateExpirationDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 128)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) < 1)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['certificateExpirationDate']) && ($this->container['certificateExpirationDate'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationDate', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['certificateExpirationDate']) && ($this->container['certificateExpirationDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'certificateExpirationDate', must be bigger than or equal to 0.";
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
    *  apiserver的地址
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
    * @param string|null $address apiserver的地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets certificateExpirationDate
    *  证书有效期结束时间
    *
    * @return int|null
    */
    public function getCertificateExpirationDate()
    {
        return $this->container['certificateExpirationDate'];
    }

    /**
    * Sets certificateExpirationDate
    *
    * @param int|null $certificateExpirationDate 证书有效期结束时间
    *
    * @return $this
    */
    public function setCertificateExpirationDate($certificateExpirationDate)
    {
        $this->container['certificateExpirationDate'] = $certificateExpirationDate;
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

