<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunPipelineDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunPipelineDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sources  **参数解释**： 代码源信息列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线运行描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * variables  **参数解释**： 使用的自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseJobs  **参数解释**： 流水线运行时选择的流水线任务。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseStages  **参数解释**： 选择的流水线阶段。优先级高于choose_jobs，即stage未选择时，无视choose_jobs中该stage下的job。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sources' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOSources[]',
            'description' => 'string',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOVariables[]',
            'chooseJobs' => 'string[]',
            'chooseStages' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sources  **参数解释**： 代码源信息列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线运行描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * variables  **参数解释**： 使用的自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseJobs  **参数解释**： 流水线运行时选择的流水线任务。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseStages  **参数解释**： 选择的流水线阶段。优先级高于choose_jobs，即stage未选择时，无视choose_jobs中该stage下的job。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sources' => null,
        'description' => null,
        'variables' => null,
        'chooseJobs' => null,
        'chooseStages' => null
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
    * sources  **参数解释**： 代码源信息列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线运行描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * variables  **参数解释**： 使用的自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseJobs  **参数解释**： 流水线运行时选择的流水线任务。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseStages  **参数解释**： 选择的流水线阶段。优先级高于choose_jobs，即stage未选择时，无视choose_jobs中该stage下的job。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sources' => 'sources',
            'description' => 'description',
            'variables' => 'variables',
            'chooseJobs' => 'choose_jobs',
            'chooseStages' => 'choose_stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sources  **参数解释**： 代码源信息列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线运行描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * variables  **参数解释**： 使用的自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseJobs  **参数解释**： 流水线运行时选择的流水线任务。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseStages  **参数解释**： 选择的流水线阶段。优先级高于choose_jobs，即stage未选择时，无视choose_jobs中该stage下的job。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sources' => 'setSources',
            'description' => 'setDescription',
            'variables' => 'setVariables',
            'chooseJobs' => 'setChooseJobs',
            'chooseStages' => 'setChooseStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sources  **参数解释**： 代码源信息列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 流水线运行描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    * variables  **参数解释**： 使用的自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseJobs  **参数解释**： 流水线运行时选择的流水线任务。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * chooseStages  **参数解释**： 选择的流水线阶段。优先级高于choose_jobs，即stage未选择时，无视choose_jobs中该stage下的job。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sources' => 'getSources',
            'description' => 'getDescription',
            'variables' => 'getVariables',
            'chooseJobs' => 'getChooseJobs',
            'chooseStages' => 'getChooseStages'
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
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['chooseJobs'] = isset($data['chooseJobs']) ? $data['chooseJobs'] : null;
        $this->container['chooseStages'] = isset($data['chooseStages']) ? $data['chooseStages'] : null;
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
    * Gets sources
    *  **参数解释**： 代码源信息列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOSources[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOSources[]|null $sources **参数解释**： 代码源信息列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 流水线运行描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 流水线运行描述。 **约束限制**： 不涉及。 **取值范围**： 不超过1024字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets variables
    *  **参数解释**： 使用的自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOVariables[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOVariables[]|null $variables **参数解释**： 使用的自定义参数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets chooseJobs
    *  **参数解释**： 流水线运行时选择的流水线任务。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getChooseJobs()
    {
        return $this->container['chooseJobs'];
    }

    /**
    * Sets chooseJobs
    *
    * @param string[]|null $chooseJobs **参数解释**： 流水线运行时选择的流水线任务。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setChooseJobs($chooseJobs)
    {
        $this->container['chooseJobs'] = $chooseJobs;
        return $this;
    }

    /**
    * Gets chooseStages
    *  **参数解释**： 选择的流水线阶段。优先级高于choose_jobs，即stage未选择时，无视choose_jobs中该stage下的job。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getChooseStages()
    {
        return $this->container['chooseStages'];
    }

    /**
    * Sets chooseStages
    *
    * @param string[]|null $chooseStages **参数解释**： 选择的流水线阶段。优先级高于choose_jobs，即stage未选择时，无视choose_jobs中该stage下的job。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setChooseStages($chooseStages)
    {
        $this->container['chooseStages'] = $chooseStages;
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

