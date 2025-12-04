<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExpandPhoneDataVolumeSizeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExpandPhoneDataVolumeSizeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phones' => '\HuaweiCloud\SDK\Cph\V1\Model\PhoneDataVolumeSize[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phones' => null
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
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phones' => 'phones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'phones' => 'setPhones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'phones' => 'getPhones'
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
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['phones'] === null) {
            $invalidProperties[] = "'phones' can't be null";
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
    * Gets phones
    *  云手机列表。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\PhoneDataVolumeSize[]
    */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
    * Sets phones
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\PhoneDataVolumeSize[] $phones 云手机列表。
    *
    * @return $this
    */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;
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

