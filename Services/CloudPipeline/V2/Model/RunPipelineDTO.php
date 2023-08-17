<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

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
    * sources  使用的源
    * description  运行描述
    * variables  使用的自定义参数
    * chooseJobs  选择的任务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sources' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\RunPipelineDTOSources[]',
            'description' => 'string',
            'variables' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\RunPipelineDTOVariables[]',
            'chooseJobs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sources  使用的源
    * description  运行描述
    * variables  使用的自定义参数
    * chooseJobs  选择的任务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sources' => null,
        'description' => null,
        'variables' => null,
        'chooseJobs' => null
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
    * sources  使用的源
    * description  运行描述
    * variables  使用的自定义参数
    * chooseJobs  选择的任务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sources' => 'sources',
            'description' => 'description',
            'variables' => 'variables',
            'chooseJobs' => 'choose_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sources  使用的源
    * description  运行描述
    * variables  使用的自定义参数
    * chooseJobs  选择的任务
    *
    * @var string[]
    */
    protected static $setters = [
            'sources' => 'setSources',
            'description' => 'setDescription',
            'variables' => 'setVariables',
            'chooseJobs' => 'setChooseJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sources  使用的源
    * description  运行描述
    * variables  使用的自定义参数
    * chooseJobs  选择的任务
    *
    * @var string[]
    */
    protected static $getters = [
            'sources' => 'getSources',
            'description' => 'getDescription',
            'variables' => 'getVariables',
            'chooseJobs' => 'getChooseJobs'
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
    *  使用的源
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\RunPipelineDTOSources[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\RunPipelineDTOSources[]|null $sources 使用的源
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
    *  运行描述
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
    * @param string|null $description 运行描述
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
    *  使用的自定义参数
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\RunPipelineDTOVariables[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\RunPipelineDTOVariables[]|null $variables 使用的自定义参数
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
    *  选择的任务
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
    * @param string[]|null $chooseJobs 选择的任务
    *
    * @return $this
    */
    public function setChooseJobs($chooseJobs)
    {
        $this->container['chooseJobs'] = $chooseJobs;
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

