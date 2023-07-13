<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceCrossVpcIpReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceCrossVpcIpReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * advertisedIpContents  用户自定义的advertised_ip_contents键值对。  键是listeners IP。  值是advertised.listeners IP，或者域名。  > IP修改未修改项也需填上。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'advertisedIpContents' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * advertisedIpContents  用户自定义的advertised_ip_contents键值对。  键是listeners IP。  值是advertised.listeners IP，或者域名。  > IP修改未修改项也需填上。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'advertisedIpContents' => null
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
    * advertisedIpContents  用户自定义的advertised_ip_contents键值对。  键是listeners IP。  值是advertised.listeners IP，或者域名。  > IP修改未修改项也需填上。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'advertisedIpContents' => 'advertised_ip_contents'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * advertisedIpContents  用户自定义的advertised_ip_contents键值对。  键是listeners IP。  值是advertised.listeners IP，或者域名。  > IP修改未修改项也需填上。
    *
    * @var string[]
    */
    protected static $setters = [
            'advertisedIpContents' => 'setAdvertisedIpContents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * advertisedIpContents  用户自定义的advertised_ip_contents键值对。  键是listeners IP。  值是advertised.listeners IP，或者域名。  > IP修改未修改项也需填上。
    *
    * @var string[]
    */
    protected static $getters = [
            'advertisedIpContents' => 'getAdvertisedIpContents'
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
        $this->container['advertisedIpContents'] = isset($data['advertisedIpContents']) ? $data['advertisedIpContents'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['advertisedIpContents'] === null) {
            $invalidProperties[] = "'advertisedIpContents' can't be null";
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
    * Gets advertisedIpContents
    *  用户自定义的advertised_ip_contents键值对。  键是listeners IP。  值是advertised.listeners IP，或者域名。  > IP修改未修改项也需填上。
    *
    * @return map[string,string]
    */
    public function getAdvertisedIpContents()
    {
        return $this->container['advertisedIpContents'];
    }

    /**
    * Sets advertisedIpContents
    *
    * @param map[string,string] $advertisedIpContents 用户自定义的advertised_ip_contents键值对。  键是listeners IP。  值是advertised.listeners IP，或者域名。  > IP修改未修改项也需填上。
    *
    * @return $this
    */
    public function setAdvertisedIpContents($advertisedIpContents)
    {
        $this->container['advertisedIpContents'] = $advertisedIpContents;
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

