<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleOut';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  **参数解释**： 扩容节点数。 **取值范围**： 大于等于3。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 同VPC下有效的子网ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'subnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  **参数解释**： 扩容节点数。 **取值范围**： 大于等于3。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 同VPC下有效的子网ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'subnetId' => null
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
    * count  **参数解释**： 扩容节点数。 **取值范围**： 大于等于3。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 同VPC下有效的子网ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'subnetId' => 'subnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  **参数解释**： 扩容节点数。 **取值范围**： 大于等于3。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 同VPC下有效的子网ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'subnetId' => 'setSubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  **参数解释**： 扩容节点数。 **取值范围**： 大于等于3。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 同VPC下有效的子网ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'subnetId' => 'getSubnetId'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
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
    * Gets count
    *  **参数解释**： 扩容节点数。 **取值范围**： 大于等于3。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count **参数解释**： 扩容节点数。 **取值范围**： 大于等于3。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数解释**： 子网ID。 **取值范围**： 同VPC下有效的子网ID。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId **参数解释**： 子网ID。 **取值范围**： 同VPC下有效的子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
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

