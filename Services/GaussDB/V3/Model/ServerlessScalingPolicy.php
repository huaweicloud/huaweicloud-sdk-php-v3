<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerlessScalingPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerlessScalingPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enlargeStepSize  **参数描述**：  自定义扩容步长。  **约束限制**：  不涉及。  **取值范围**：  2-算力上限的一半。  **默认取值**：  不涉及。
    * customScalingConfig  customScalingConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enlargeStepSize' => 'string',
            'customScalingConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CustomScalingConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enlargeStepSize  **参数描述**：  自定义扩容步长。  **约束限制**：  不涉及。  **取值范围**：  2-算力上限的一半。  **默认取值**：  不涉及。
    * customScalingConfig  customScalingConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enlargeStepSize' => null,
        'customScalingConfig' => null
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
    * enlargeStepSize  **参数描述**：  自定义扩容步长。  **约束限制**：  不涉及。  **取值范围**：  2-算力上限的一半。  **默认取值**：  不涉及。
    * customScalingConfig  customScalingConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enlargeStepSize' => 'enlarge_step_size',
            'customScalingConfig' => 'custom_scaling_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enlargeStepSize  **参数描述**：  自定义扩容步长。  **约束限制**：  不涉及。  **取值范围**：  2-算力上限的一半。  **默认取值**：  不涉及。
    * customScalingConfig  customScalingConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'enlargeStepSize' => 'setEnlargeStepSize',
            'customScalingConfig' => 'setCustomScalingConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enlargeStepSize  **参数描述**：  自定义扩容步长。  **约束限制**：  不涉及。  **取值范围**：  2-算力上限的一半。  **默认取值**：  不涉及。
    * customScalingConfig  customScalingConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'enlargeStepSize' => 'getEnlargeStepSize',
            'customScalingConfig' => 'getCustomScalingConfig'
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
        $this->container['enlargeStepSize'] = isset($data['enlargeStepSize']) ? $data['enlargeStepSize'] : null;
        $this->container['customScalingConfig'] = isset($data['customScalingConfig']) ? $data['customScalingConfig'] : null;
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
    * Gets enlargeStepSize
    *  **参数描述**：  自定义扩容步长。  **约束限制**：  不涉及。  **取值范围**：  2-算力上限的一半。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getEnlargeStepSize()
    {
        return $this->container['enlargeStepSize'];
    }

    /**
    * Sets enlargeStepSize
    *
    * @param string|null $enlargeStepSize **参数描述**：  自定义扩容步长。  **约束限制**：  不涉及。  **取值范围**：  2-算力上限的一半。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setEnlargeStepSize($enlargeStepSize)
    {
        $this->container['enlargeStepSize'] = $enlargeStepSize;
        return $this;
    }

    /**
    * Gets customScalingConfig
    *  customScalingConfig
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CustomScalingConfig|null
    */
    public function getCustomScalingConfig()
    {
        return $this->container['customScalingConfig'];
    }

    /**
    * Sets customScalingConfig
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CustomScalingConfig|null $customScalingConfig customScalingConfig
    *
    * @return $this
    */
    public function setCustomScalingConfig($customScalingConfig)
    {
        $this->container['customScalingConfig'] = $customScalingConfig;
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

