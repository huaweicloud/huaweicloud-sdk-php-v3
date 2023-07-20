<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Computes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Computes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupType  群组类型。  - X86：X86架构。 - ARM：ARM架构。
    * computeFlavors  计算规格信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupType' => 'string',
            'computeFlavors' => '\HuaweiCloud\SDK\Rds\V3\Model\ScaleFlavors[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupType  群组类型。  - X86：X86架构。 - ARM：ARM架构。
    * computeFlavors  计算规格信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupType' => null,
        'computeFlavors' => null
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
    * groupType  群组类型。  - X86：X86架构。 - ARM：ARM架构。
    * computeFlavors  计算规格信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupType' => 'group_type',
            'computeFlavors' => 'compute_flavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupType  群组类型。  - X86：X86架构。 - ARM：ARM架构。
    * computeFlavors  计算规格信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupType' => 'setGroupType',
            'computeFlavors' => 'setComputeFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupType  群组类型。  - X86：X86架构。 - ARM：ARM架构。
    * computeFlavors  计算规格信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupType' => 'getGroupType',
            'computeFlavors' => 'getComputeFlavors'
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
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['computeFlavors'] = isset($data['computeFlavors']) ? $data['computeFlavors'] : null;
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
    * Gets groupType
    *  群组类型。  - X86：X86架构。 - ARM：ARM架构。
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType 群组类型。  - X86：X86架构。 - ARM：ARM架构。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets computeFlavors
    *  计算规格信息。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ScaleFlavors[]|null
    */
    public function getComputeFlavors()
    {
        return $this->container['computeFlavors'];
    }

    /**
    * Sets computeFlavors
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ScaleFlavors[]|null $computeFlavors 计算规格信息。
    *
    * @return $this
    */
    public function setComputeFlavors($computeFlavors)
    {
        $this->container['computeFlavors'] = $computeFlavors;
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

