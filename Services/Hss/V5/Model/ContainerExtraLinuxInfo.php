<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerExtraLinuxInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerExtraLinuxInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * os  操作系统: - ubt : ubuntu - centos : centos - debian - redhat - opensuse - kylin - uos - euleros
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'os' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * os  操作系统: - ubt : ubuntu - centos : centos - debian - redhat - opensuse - kylin - uos - euleros
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'os' => null
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
    * os  操作系统: - ubt : ubuntu - centos : centos - debian - redhat - opensuse - kylin - uos - euleros
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'os' => 'os'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * os  操作系统: - ubt : ubuntu - centos : centos - debian - redhat - opensuse - kylin - uos - euleros
    *
    * @var string[]
    */
    protected static $setters = [
            'os' => 'setOs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * os  操作系统: - ubt : ubuntu - centos : centos - debian - redhat - opensuse - kylin - uos - euleros
    *
    * @var string[]
    */
    protected static $getters = [
            'os' => 'getOs'
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['os']) && (mb_strlen($this->container['os']) > 128)) {
                $invalidProperties[] = "invalid value for 'os', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['os']) && (mb_strlen($this->container['os']) < 1)) {
                $invalidProperties[] = "invalid value for 'os', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['os']) && !preg_match("/^.*$/", $this->container['os'])) {
                $invalidProperties[] = "invalid value for 'os', must be conform to the pattern /^.*$/.";
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
    * Gets os
    *  操作系统: - ubt : ubuntu - centos : centos - debian - redhat - opensuse - kylin - uos - euleros
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统: - ubt : ubuntu - centos : centos - debian - redhat - opensuse - kylin - uos - euleros
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
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

