<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaShowFlavorExtraSpecsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaShowFlavorExtraSpecsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * extraSpecs  描述弹性云服务器规格的键值对。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'extraSpecs' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * extraSpecs  描述弹性云服务器规格的键值对。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'extraSpecs' => null
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
    * extraSpecs  描述弹性云服务器规格的键值对。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'extraSpecs' => 'extra_specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * extraSpecs  描述弹性云服务器规格的键值对。
    *
    * @var string[]
    */
    protected static $setters = [
            'extraSpecs' => 'setExtraSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * extraSpecs  描述弹性云服务器规格的键值对。
    *
    * @var string[]
    */
    protected static $getters = [
            'extraSpecs' => 'getExtraSpecs'
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
        $this->container['extraSpecs'] = isset($data['extraSpecs']) ? $data['extraSpecs'] : null;
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
    * Gets extraSpecs
    *  描述弹性云服务器规格的键值对。
    *
    * @return map[string,string]|null
    */
    public function getExtraSpecs()
    {
        return $this->container['extraSpecs'];
    }

    /**
    * Sets extraSpecs
    *
    * @param map[string,string]|null $extraSpecs 描述弹性云服务器规格的键值对。
    *
    * @return $this
    */
    public function setExtraSpecs($extraSpecs)
    {
        $this->container['extraSpecs'] = $extraSpecs;
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

