<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserChargeTypeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserChargeType_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  套餐类型
    * chargeType  计费类型
    * mainResourceList  计费类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'chargeType' => 'string',
            'mainResourceList' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserChargeTypeResultMainResourceList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  套餐类型
    * chargeType  计费类型
    * mainResourceList  计费类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'chargeType' => null,
        'mainResourceList' => null
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
    * type  套餐类型
    * chargeType  计费类型
    * mainResourceList  计费类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'chargeType' => 'charge_type',
            'mainResourceList' => 'main_resource_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  套餐类型
    * chargeType  计费类型
    * mainResourceList  计费类型
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'chargeType' => 'setChargeType',
            'mainResourceList' => 'setMainResourceList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  套餐类型
    * chargeType  计费类型
    * mainResourceList  计费类型
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'chargeType' => 'getChargeType',
            'mainResourceList' => 'getMainResourceList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['chargeType'] = isset($data['chargeType']) ? $data['chargeType'] : null;
        $this->container['mainResourceList'] = isset($data['mainResourceList']) ? $data['mainResourceList'] : null;
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
    * Gets type
    *  套餐类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 套餐类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets chargeType
    *  计费类型
    *
    * @return string|null
    */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
    * Sets chargeType
    *
    * @param string|null $chargeType 计费类型
    *
    * @return $this
    */
    public function setChargeType($chargeType)
    {
        $this->container['chargeType'] = $chargeType;
        return $this;
    }

    /**
    * Gets mainResourceList
    *  计费类型
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserChargeTypeResultMainResourceList[]|null
    */
    public function getMainResourceList()
    {
        return $this->container['mainResourceList'];
    }

    /**
    * Sets mainResourceList
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\ShowUserChargeTypeResultMainResourceList[]|null $mainResourceList 计费类型
    *
    * @return $this
    */
    public function setMainResourceList($mainResourceList)
    {
        $this->container['mainResourceList'] = $mainResourceList;
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

