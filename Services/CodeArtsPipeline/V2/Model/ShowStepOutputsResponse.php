<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStepOutputsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStepOutputsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stepOutputs  **参数解释**： 步骤输出列表，记录每个步骤输出的ID和结果信息。 **约束限制**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stepOutputs' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OutputRespStepOutputs[]',
            'currentSystemTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stepOutputs  **参数解释**： 步骤输出列表，记录每个步骤输出的ID和结果信息。 **约束限制**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stepOutputs' => null,
        'currentSystemTime' => 'int64'
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
    * stepOutputs  **参数解释**： 步骤输出列表，记录每个步骤输出的ID和结果信息。 **约束限制**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stepOutputs' => 'step_outputs',
            'currentSystemTime' => 'current_system_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stepOutputs  **参数解释**： 步骤输出列表，记录每个步骤输出的ID和结果信息。 **约束限制**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'stepOutputs' => 'setStepOutputs',
            'currentSystemTime' => 'setCurrentSystemTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stepOutputs  **参数解释**： 步骤输出列表，记录每个步骤输出的ID和结果信息。 **约束限制**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'stepOutputs' => 'getStepOutputs',
            'currentSystemTime' => 'getCurrentSystemTime'
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
        $this->container['stepOutputs'] = isset($data['stepOutputs']) ? $data['stepOutputs'] : null;
        $this->container['currentSystemTime'] = isset($data['currentSystemTime']) ? $data['currentSystemTime'] : null;
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
    * Gets stepOutputs
    *  **参数解释**： 步骤输出列表，记录每个步骤输出的ID和结果信息。 **约束限制**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OutputRespStepOutputs[]|null
    */
    public function getStepOutputs()
    {
        return $this->container['stepOutputs'];
    }

    /**
    * Sets stepOutputs
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OutputRespStepOutputs[]|null $stepOutputs **参数解释**： 步骤输出列表，记录每个步骤输出的ID和结果信息。 **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setStepOutputs($stepOutputs)
    {
        $this->container['stepOutputs'] = $stepOutputs;
        return $this;
    }

    /**
    * Gets currentSystemTime
    *  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCurrentSystemTime()
    {
        return $this->container['currentSystemTime'];
    }

    /**
    * Sets currentSystemTime
    *
    * @param int|null $currentSystemTime **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrentSystemTime($currentSystemTime)
    {
        $this->container['currentSystemTime'] = $currentSystemTime;
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

