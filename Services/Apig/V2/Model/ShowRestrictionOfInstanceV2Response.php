<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRestrictionOfInstanceV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRestrictionOfInstanceV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * restrictCidrs  受限的IP网段的CIDR列表。
    * resourceSubnetCidr  资源租户的IP网段的CIDR。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'restrictCidrs' => 'string[]',
            'resourceSubnetCidr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * restrictCidrs  受限的IP网段的CIDR列表。
    * resourceSubnetCidr  资源租户的IP网段的CIDR。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'restrictCidrs' => null,
        'resourceSubnetCidr' => null
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
    * restrictCidrs  受限的IP网段的CIDR列表。
    * resourceSubnetCidr  资源租户的IP网段的CIDR。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'restrictCidrs' => 'restrict_cidrs',
            'resourceSubnetCidr' => 'resource_subnet_cidr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * restrictCidrs  受限的IP网段的CIDR列表。
    * resourceSubnetCidr  资源租户的IP网段的CIDR。
    *
    * @var string[]
    */
    protected static $setters = [
            'restrictCidrs' => 'setRestrictCidrs',
            'resourceSubnetCidr' => 'setResourceSubnetCidr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * restrictCidrs  受限的IP网段的CIDR列表。
    * resourceSubnetCidr  资源租户的IP网段的CIDR。
    *
    * @var string[]
    */
    protected static $getters = [
            'restrictCidrs' => 'getRestrictCidrs',
            'resourceSubnetCidr' => 'getResourceSubnetCidr'
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
        $this->container['restrictCidrs'] = isset($data['restrictCidrs']) ? $data['restrictCidrs'] : null;
        $this->container['resourceSubnetCidr'] = isset($data['resourceSubnetCidr']) ? $data['resourceSubnetCidr'] : null;
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
    * Gets restrictCidrs
    *  受限的IP网段的CIDR列表。
    *
    * @return string[]|null
    */
    public function getRestrictCidrs()
    {
        return $this->container['restrictCidrs'];
    }

    /**
    * Sets restrictCidrs
    *
    * @param string[]|null $restrictCidrs 受限的IP网段的CIDR列表。
    *
    * @return $this
    */
    public function setRestrictCidrs($restrictCidrs)
    {
        $this->container['restrictCidrs'] = $restrictCidrs;
        return $this;
    }

    /**
    * Gets resourceSubnetCidr
    *  资源租户的IP网段的CIDR。
    *
    * @return string|null
    */
    public function getResourceSubnetCidr()
    {
        return $this->container['resourceSubnetCidr'];
    }

    /**
    * Sets resourceSubnetCidr
    *
    * @param string|null $resourceSubnetCidr 资源租户的IP网段的CIDR。
    *
    * @return $this
    */
    public function setResourceSubnetCidr($resourceSubnetCidr)
    {
        $this->container['resourceSubnetCidr'] = $resourceSubnetCidr;
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

