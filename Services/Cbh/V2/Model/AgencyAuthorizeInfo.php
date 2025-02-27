<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyAuthorizeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyAuthorizeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csms  凭据管理权限信息。
    * kms  密钥管理权限信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csms' => 'bool',
            'kms' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csms  凭据管理权限信息。
    * kms  密钥管理权限信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csms' => null,
        'kms' => null
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
    * csms  凭据管理权限信息。
    * kms  密钥管理权限信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csms' => 'csms',
            'kms' => 'kms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csms  凭据管理权限信息。
    * kms  密钥管理权限信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'csms' => 'setCsms',
            'kms' => 'setKms'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csms  凭据管理权限信息。
    * kms  密钥管理权限信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'csms' => 'getCsms',
            'kms' => 'getKms'
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
        $this->container['csms'] = isset($data['csms']) ? $data['csms'] : null;
        $this->container['kms'] = isset($data['kms']) ? $data['kms'] : null;
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
    * Gets csms
    *  凭据管理权限信息。
    *
    * @return bool|null
    */
    public function getCsms()
    {
        return $this->container['csms'];
    }

    /**
    * Sets csms
    *
    * @param bool|null $csms 凭据管理权限信息。
    *
    * @return $this
    */
    public function setCsms($csms)
    {
        $this->container['csms'] = $csms;
        return $this;
    }

    /**
    * Gets kms
    *  密钥管理权限信息。
    *
    * @return bool|null
    */
    public function getKms()
    {
        return $this->container['kms'];
    }

    /**
    * Sets kms
    *
    * @param bool|null $kms 密钥管理权限信息。
    *
    * @return $this
    */
    public function setKms($kms)
    {
        $this->container['kms'] = $kms;
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

