<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEwAssociatedVpcRespData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEwAssociatedVpcResp_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inspectionVpcList  **参数解释**： 使用引流VPC列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inspectionVpcList' => '\HuaweiCloud\SDK\Cfw\V1\Model\InspectionVpcInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inspectionVpcList  **参数解释**： 使用引流VPC列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inspectionVpcList' => null
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
    * inspectionVpcList  **参数解释**： 使用引流VPC列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inspectionVpcList' => 'inspection_vpc_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inspectionVpcList  **参数解释**： 使用引流VPC列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'inspectionVpcList' => 'setInspectionVpcList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inspectionVpcList  **参数解释**： 使用引流VPC列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'inspectionVpcList' => 'getInspectionVpcList'
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
        $this->container['inspectionVpcList'] = isset($data['inspectionVpcList']) ? $data['inspectionVpcList'] : null;
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
    * Gets inspectionVpcList
    *  **参数解释**： 使用引流VPC列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\InspectionVpcInfo[]|null
    */
    public function getInspectionVpcList()
    {
        return $this->container['inspectionVpcList'];
    }

    /**
    * Sets inspectionVpcList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\InspectionVpcInfo[]|null $inspectionVpcList **参数解释**： 使用引流VPC列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setInspectionVpcList($inspectionVpcList)
    {
        $this->container['inspectionVpcList'] = $inspectionVpcList;
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

