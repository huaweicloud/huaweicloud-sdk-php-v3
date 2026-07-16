<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlgorithmResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlgorithmResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metadata  metadata
    * jobConfig  jobConfig
    * resourceRequirements  算法资源约束，可不设置。设置后，在算法使用于训练作业时，控制台会过滤可用的公共资源池。
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metadata' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseMetadata',
            'jobConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseJobConfig',
            'resourceRequirements' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseResourceRequirements[]',
            'advancedConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseAdvancedConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metadata  metadata
    * jobConfig  jobConfig
    * resourceRequirements  算法资源约束，可不设置。设置后，在算法使用于训练作业时，控制台会过滤可用的公共资源池。
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metadata' => null,
        'jobConfig' => null,
        'resourceRequirements' => null,
        'advancedConfig' => null
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
    * metadata  metadata
    * jobConfig  jobConfig
    * resourceRequirements  算法资源约束，可不设置。设置后，在算法使用于训练作业时，控制台会过滤可用的公共资源池。
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metadata' => 'metadata',
            'jobConfig' => 'job_config',
            'resourceRequirements' => 'resource_requirements',
            'advancedConfig' => 'advanced_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metadata  metadata
    * jobConfig  jobConfig
    * resourceRequirements  算法资源约束，可不设置。设置后，在算法使用于训练作业时，控制台会过滤可用的公共资源池。
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'metadata' => 'setMetadata',
            'jobConfig' => 'setJobConfig',
            'resourceRequirements' => 'setResourceRequirements',
            'advancedConfig' => 'setAdvancedConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metadata  metadata
    * jobConfig  jobConfig
    * resourceRequirements  算法资源约束，可不设置。设置后，在算法使用于训练作业时，控制台会过滤可用的公共资源池。
    * advancedConfig  advancedConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'metadata' => 'getMetadata',
            'jobConfig' => 'getJobConfig',
            'resourceRequirements' => 'getResourceRequirements',
            'advancedConfig' => 'getAdvancedConfig'
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
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['jobConfig'] = isset($data['jobConfig']) ? $data['jobConfig'] : null;
        $this->container['resourceRequirements'] = isset($data['resourceRequirements']) ? $data['resourceRequirements'] : null;
        $this->container['advancedConfig'] = isset($data['advancedConfig']) ? $data['advancedConfig'] : null;
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
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets jobConfig
    *  jobConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseJobConfig|null
    */
    public function getJobConfig()
    {
        return $this->container['jobConfig'];
    }

    /**
    * Sets jobConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseJobConfig|null $jobConfig jobConfig
    *
    * @return $this
    */
    public function setJobConfig($jobConfig)
    {
        $this->container['jobConfig'] = $jobConfig;
        return $this;
    }

    /**
    * Gets resourceRequirements
    *  算法资源约束，可不设置。设置后，在算法使用于训练作业时，控制台会过滤可用的公共资源池。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseResourceRequirements[]|null
    */
    public function getResourceRequirements()
    {
        return $this->container['resourceRequirements'];
    }

    /**
    * Sets resourceRequirements
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseResourceRequirements[]|null $resourceRequirements 算法资源约束，可不设置。设置后，在算法使用于训练作业时，控制台会过滤可用的公共资源池。
    *
    * @return $this
    */
    public function setResourceRequirements($resourceRequirements)
    {
        $this->container['resourceRequirements'] = $resourceRequirements;
        return $this;
    }

    /**
    * Gets advancedConfig
    *  advancedConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseAdvancedConfig|null
    */
    public function getAdvancedConfig()
    {
        return $this->container['advancedConfig'];
    }

    /**
    * Sets advancedConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmResponseAdvancedConfig|null $advancedConfig advancedConfig
    *
    * @return $this
    */
    public function setAdvancedConfig($advancedConfig)
    {
        $this->container['advancedConfig'] = $advancedConfig;
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

