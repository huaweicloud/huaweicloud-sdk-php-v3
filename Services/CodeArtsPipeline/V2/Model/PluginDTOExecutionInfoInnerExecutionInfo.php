<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginDTOExecutionInfoInnerExecutionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginDTO_execution_info_inner_execution_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionType  **参数解释**： 插件类型。 **约束限制**： 不涉及。 **取值范围**： CONTAINER, ZIP, SHELL, COMPOSITE。 **默认取值**： 不涉及。
    * steps  steps
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionType' => 'string',
            'steps' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOExecutionInfoInnerExecutionInfoSteps[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionType  **参数解释**： 插件类型。 **约束限制**： 不涉及。 **取值范围**： CONTAINER, ZIP, SHELL, COMPOSITE。 **默认取值**： 不涉及。
    * steps  steps
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionType' => null,
        'steps' => null
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
    * executionType  **参数解释**： 插件类型。 **约束限制**： 不涉及。 **取值范围**： CONTAINER, ZIP, SHELL, COMPOSITE。 **默认取值**： 不涉及。
    * steps  steps
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionType' => 'execution_type',
            'steps' => 'steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionType  **参数解释**： 插件类型。 **约束限制**： 不涉及。 **取值范围**： CONTAINER, ZIP, SHELL, COMPOSITE。 **默认取值**： 不涉及。
    * steps  steps
    *
    * @var string[]
    */
    protected static $setters = [
            'executionType' => 'setExecutionType',
            'steps' => 'setSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionType  **参数解释**： 插件类型。 **约束限制**： 不涉及。 **取值范围**： CONTAINER, ZIP, SHELL, COMPOSITE。 **默认取值**： 不涉及。
    * steps  steps
    *
    * @var string[]
    */
    protected static $getters = [
            'executionType' => 'getExecutionType',
            'steps' => 'getSteps'
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
        $this->container['executionType'] = isset($data['executionType']) ? $data['executionType'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
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
    * Gets executionType
    *  **参数解释**： 插件类型。 **约束限制**： 不涉及。 **取值范围**： CONTAINER, ZIP, SHELL, COMPOSITE。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getExecutionType()
    {
        return $this->container['executionType'];
    }

    /**
    * Sets executionType
    *
    * @param string|null $executionType **参数解释**： 插件类型。 **约束限制**： 不涉及。 **取值范围**： CONTAINER, ZIP, SHELL, COMPOSITE。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExecutionType($executionType)
    {
        $this->container['executionType'] = $executionType;
        return $this;
    }

    /**
    * Gets steps
    *  steps
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOExecutionInfoInnerExecutionInfoSteps[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOExecutionInfoInnerExecutionInfoSteps[]|null $steps steps
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
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

