<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InspectionVpcInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InspectionVpcInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inspectionVpcId  **参数解释**： 引流VPC  **取值范围**： 不涉及
    * name  **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inspectionVpcId' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inspectionVpcId  **参数解释**： 引流VPC  **取值范围**： 不涉及
    * name  **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inspectionVpcId' => null,
        'name' => null
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
    * inspectionVpcId  **参数解释**： 引流VPC  **取值范围**： 不涉及
    * name  **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inspectionVpcId' => 'inspection_vpc_id',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inspectionVpcId  **参数解释**： 引流VPC  **取值范围**： 不涉及
    * name  **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'inspectionVpcId' => 'setInspectionVpcId',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inspectionVpcId  **参数解释**： 引流VPC  **取值范围**： 不涉及
    * name  **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'inspectionVpcId' => 'getInspectionVpcId',
            'name' => 'getName'
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
        $this->container['inspectionVpcId'] = isset($data['inspectionVpcId']) ? $data['inspectionVpcId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
    * Gets inspectionVpcId
    *  **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getInspectionVpcId()
    {
        return $this->container['inspectionVpcId'];
    }

    /**
    * Sets inspectionVpcId
    *
    * @param string|null $inspectionVpcId **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setInspectionVpcId($inspectionVpcId)
    {
        $this->container['inspectionVpcId'] = $inspectionVpcId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 引流VPC  **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

