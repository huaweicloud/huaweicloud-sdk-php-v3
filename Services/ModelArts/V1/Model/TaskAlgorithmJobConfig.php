<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskAlgorithmJobConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Task_algorithm_job_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameters  **参数解释**：算法的运行参数。 **约束限制**：不涉及。
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * engine  engine
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Parameter[]',
            'inputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Input[]',
            'outputs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Output[]',
            'engine' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmJobConfigEngine'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameters  **参数解释**：算法的运行参数。 **约束限制**：不涉及。
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * engine  engine
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameters' => null,
        'inputs' => null,
        'outputs' => null,
        'engine' => null
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
    * parameters  **参数解释**：算法的运行参数。 **约束限制**：不涉及。
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * engine  engine
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameters' => 'parameters',
            'inputs' => 'inputs',
            'outputs' => 'outputs',
            'engine' => 'engine'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameters  **参数解释**：算法的运行参数。 **约束限制**：不涉及。
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * engine  engine
    *
    * @var string[]
    */
    protected static $setters = [
            'parameters' => 'setParameters',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs',
            'engine' => 'setEngine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameters  **参数解释**：算法的运行参数。 **约束限制**：不涉及。
    * inputs  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    * outputs  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    * engine  engine
    *
    * @var string[]
    */
    protected static $getters = [
            'parameters' => 'getParameters',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs',
            'engine' => 'getEngine'
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
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
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
    * Gets parameters
    *  **参数解释**：算法的运行参数。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Parameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Parameter[]|null $parameters **参数解释**：算法的运行参数。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets inputs
    *  **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Input[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Input[]|null $inputs **参数解释**：算法的数据输入。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets outputs
    *  **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Output[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Output[]|null $outputs **参数解释**：算法的数据输出。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
        return $this;
    }

    /**
    * Gets engine
    *  engine
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmJobConfigEngine|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithmJobConfigEngine|null $engine engine
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
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

