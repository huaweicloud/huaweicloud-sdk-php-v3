<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAiOpsDetectorResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAiOpsDetectorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fullDetection  **参数解释**： 全量检测项，返回所有可用检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    * unavailabilityDetection  **参数解释**： 集群不可用检测项，返回所有集群不可用分类的检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fullDetection' => '\HuaweiCloud\SDK\Css\V1\Model\AiOpsDetector[]',
            'unavailabilityDetection' => '\HuaweiCloud\SDK\Css\V1\Model\AiOpsDetector[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fullDetection  **参数解释**： 全量检测项，返回所有可用检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    * unavailabilityDetection  **参数解释**： 集群不可用检测项，返回所有集群不可用分类的检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fullDetection' => null,
        'unavailabilityDetection' => null
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
    * fullDetection  **参数解释**： 全量检测项，返回所有可用检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    * unavailabilityDetection  **参数解释**： 集群不可用检测项，返回所有集群不可用分类的检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fullDetection' => 'full_detection',
            'unavailabilityDetection' => 'unavailability_detection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fullDetection  **参数解释**： 全量检测项，返回所有可用检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    * unavailabilityDetection  **参数解释**： 集群不可用检测项，返回所有集群不可用分类的检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'fullDetection' => 'setFullDetection',
            'unavailabilityDetection' => 'setUnavailabilityDetection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fullDetection  **参数解释**： 全量检测项，返回所有可用检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    * unavailabilityDetection  **参数解释**： 集群不可用检测项，返回所有集群不可用分类的检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'fullDetection' => 'getFullDetection',
            'unavailabilityDetection' => 'getUnavailabilityDetection'
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
        $this->container['fullDetection'] = isset($data['fullDetection']) ? $data['fullDetection'] : null;
        $this->container['unavailabilityDetection'] = isset($data['unavailabilityDetection']) ? $data['unavailabilityDetection'] : null;
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
    * Gets fullDetection
    *  **参数解释**： 全量检测项，返回所有可用检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\AiOpsDetector[]|null
    */
    public function getFullDetection()
    {
        return $this->container['fullDetection'];
    }

    /**
    * Sets fullDetection
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\AiOpsDetector[]|null $fullDetection **参数解释**： 全量检测项，返回所有可用检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFullDetection($fullDetection)
    {
        $this->container['fullDetection'] = $fullDetection;
        return $this;
    }

    /**
    * Gets unavailabilityDetection
    *  **参数解释**： 集群不可用检测项，返回所有集群不可用分类的检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\AiOpsDetector[]|null
    */
    public function getUnavailabilityDetection()
    {
        return $this->container['unavailabilityDetection'];
    }

    /**
    * Sets unavailabilityDetection
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\AiOpsDetector[]|null $unavailabilityDetection **参数解释**： 集群不可用检测项，返回所有集群不可用分类的检测项ID、名称，以及检测描述。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUnavailabilityDetection($unavailabilityDetection)
    {
        $this->container['unavailabilityDetection'] = $unavailabilityDetection;
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

