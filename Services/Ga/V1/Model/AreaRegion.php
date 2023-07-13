<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AreaRegion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AreaRegion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * regions  区域ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'area' => 'string',
            'regions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * regions  区域ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'area' => null,
        'regions' => null
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
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * regions  区域ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'area' => 'area',
            'regions' => 'regions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * regions  区域ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'area' => 'setArea',
            'regions' => 'setRegions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * regions  区域ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'area' => 'getArea',
            'regions' => 'getRegions'
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
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
    * Gets area
    *  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    *
    * @return string|null
    */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
    * Sets area
    *
    * @param string|null $area 区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    *
    * @return $this
    */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
    * Gets regions
    *  区域ID列表。
    *
    * @return string[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string[]|null $regions 区域ID列表。
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
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

