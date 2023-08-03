<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MasterEIPResponseStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MasterEIPResponse_status';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privateEndpoint  集群访问的PrivateIP(HA集群返回VIP)
    * publicEndpoint  集群访问的PublicIP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateEndpoint' => 'string',
            'publicEndpoint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateEndpoint  集群访问的PrivateIP(HA集群返回VIP)
    * publicEndpoint  集群访问的PublicIP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateEndpoint' => null,
        'publicEndpoint' => null
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
    * privateEndpoint  集群访问的PrivateIP(HA集群返回VIP)
    * publicEndpoint  集群访问的PublicIP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateEndpoint' => 'privateEndpoint',
            'publicEndpoint' => 'publicEndpoint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateEndpoint  集群访问的PrivateIP(HA集群返回VIP)
    * publicEndpoint  集群访问的PublicIP
    *
    * @var string[]
    */
    protected static $setters = [
            'privateEndpoint' => 'setPrivateEndpoint',
            'publicEndpoint' => 'setPublicEndpoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateEndpoint  集群访问的PrivateIP(HA集群返回VIP)
    * publicEndpoint  集群访问的PublicIP
    *
    * @var string[]
    */
    protected static $getters = [
            'privateEndpoint' => 'getPrivateEndpoint',
            'publicEndpoint' => 'getPublicEndpoint'
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
        $this->container['privateEndpoint'] = isset($data['privateEndpoint']) ? $data['privateEndpoint'] : null;
        $this->container['publicEndpoint'] = isset($data['publicEndpoint']) ? $data['publicEndpoint'] : null;
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
    * Gets privateEndpoint
    *  集群访问的PrivateIP(HA集群返回VIP)
    *
    * @return string|null
    */
    public function getPrivateEndpoint()
    {
        return $this->container['privateEndpoint'];
    }

    /**
    * Sets privateEndpoint
    *
    * @param string|null $privateEndpoint 集群访问的PrivateIP(HA集群返回VIP)
    *
    * @return $this
    */
    public function setPrivateEndpoint($privateEndpoint)
    {
        $this->container['privateEndpoint'] = $privateEndpoint;
        return $this;
    }

    /**
    * Gets publicEndpoint
    *  集群访问的PublicIP
    *
    * @return string|null
    */
    public function getPublicEndpoint()
    {
        return $this->container['publicEndpoint'];
    }

    /**
    * Sets publicEndpoint
    *
    * @param string|null $publicEndpoint 集群访问的PublicIP
    *
    * @return $this
    */
    public function setPublicEndpoint($publicEndpoint)
    {
        $this->container['publicEndpoint'] = $publicEndpoint;
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

