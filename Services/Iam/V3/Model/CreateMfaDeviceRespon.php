<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMfaDeviceRespon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMfaDeviceRespon';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serialNumber  MFA设备序列号。
    * base32StringSeed  密钥信息，用于第三方生成图片验证码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serialNumber' => 'string',
            'base32StringSeed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serialNumber  MFA设备序列号。
    * base32StringSeed  密钥信息，用于第三方生成图片验证码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serialNumber' => null,
        'base32StringSeed' => null
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
    * serialNumber  MFA设备序列号。
    * base32StringSeed  密钥信息，用于第三方生成图片验证码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serialNumber' => 'serial_number',
            'base32StringSeed' => 'base32_string_seed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serialNumber  MFA设备序列号。
    * base32StringSeed  密钥信息，用于第三方生成图片验证码。
    *
    * @var string[]
    */
    protected static $setters = [
            'serialNumber' => 'setSerialNumber',
            'base32StringSeed' => 'setBase32StringSeed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serialNumber  MFA设备序列号。
    * base32StringSeed  密钥信息，用于第三方生成图片验证码。
    *
    * @var string[]
    */
    protected static $getters = [
            'serialNumber' => 'getSerialNumber',
            'base32StringSeed' => 'getBase32StringSeed'
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
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['base32StringSeed'] = isset($data['base32StringSeed']) ? $data['base32StringSeed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serialNumber'] === null) {
            $invalidProperties[] = "'serialNumber' can't be null";
        }
        if ($this->container['base32StringSeed'] === null) {
            $invalidProperties[] = "'base32StringSeed' can't be null";
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
    * Gets serialNumber
    *  MFA设备序列号。
    *
    * @return string
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string $serialNumber MFA设备序列号。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets base32StringSeed
    *  密钥信息，用于第三方生成图片验证码。
    *
    * @return string
    */
    public function getBase32StringSeed()
    {
        return $this->container['base32StringSeed'];
    }

    /**
    * Sets base32StringSeed
    *
    * @param string $base32StringSeed 密钥信息，用于第三方生成图片验证码。
    *
    * @return $this
    */
    public function setBase32StringSeed($base32StringSeed)
    {
        $this->container['base32StringSeed'] = $base32StringSeed;
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

