<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllVersionByVersionIdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllVersionByVersionIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elements  查询结果集合。
    * totalElements  查询到的结果数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elements' => '\HuaweiCloud\SDK\Aom\V1\Model\ScriptVersion[]',
            'totalElements' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elements  查询结果集合。
    * totalElements  查询到的结果数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elements' => null,
        'totalElements' => 'int32'
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
    * elements  查询结果集合。
    * totalElements  查询到的结果数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elements' => 'elements',
            'totalElements' => 'total_elements'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elements  查询结果集合。
    * totalElements  查询到的结果数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'elements' => 'setElements',
            'totalElements' => 'setTotalElements'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elements  查询结果集合。
    * totalElements  查询到的结果数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'elements' => 'getElements',
            'totalElements' => 'getTotalElements'
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
        $this->container['elements'] = isset($data['elements']) ? $data['elements'] : null;
        $this->container['totalElements'] = isset($data['totalElements']) ? $data['totalElements'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalElements']) && ($this->container['totalElements'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'totalElements', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['totalElements']) && ($this->container['totalElements'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalElements', must be bigger than or equal to 0.";
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
    * Gets elements
    *  查询结果集合。
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\ScriptVersion[]|null
    */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
    * Sets elements
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\ScriptVersion[]|null $elements 查询结果集合。
    *
    * @return $this
    */
    public function setElements($elements)
    {
        $this->container['elements'] = $elements;
        return $this;
    }

    /**
    * Gets totalElements
    *  查询到的结果数量。
    *
    * @return int|null
    */
    public function getTotalElements()
    {
        return $this->container['totalElements'];
    }

    /**
    * Sets totalElements
    *
    * @param int|null $totalElements 查询到的结果数量。
    *
    * @return $this
    */
    public function setTotalElements($totalElements)
    {
        $this->container['totalElements'] = $totalElements;
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

