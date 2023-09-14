<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunPipelineDTOParamsBuildParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunPipelineDTO_params_build_params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildType  分支还是tag触发
    * targetBranch  运行分支
    * tag  运行tag
    * eventType  触发事件类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildType' => 'string',
            'targetBranch' => 'string',
            'tag' => 'string',
            'eventType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildType  分支还是tag触发
    * targetBranch  运行分支
    * tag  运行tag
    * eventType  触发事件类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildType' => null,
        'targetBranch' => null,
        'tag' => null,
        'eventType' => null
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
    * buildType  分支还是tag触发
    * targetBranch  运行分支
    * tag  运行tag
    * eventType  触发事件类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildType' => 'build_type',
            'targetBranch' => 'target_branch',
            'tag' => 'tag',
            'eventType' => 'event_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildType  分支还是tag触发
    * targetBranch  运行分支
    * tag  运行tag
    * eventType  触发事件类型
    *
    * @var string[]
    */
    protected static $setters = [
            'buildType' => 'setBuildType',
            'targetBranch' => 'setTargetBranch',
            'tag' => 'setTag',
            'eventType' => 'setEventType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildType  分支还是tag触发
    * targetBranch  运行分支
    * tag  运行tag
    * eventType  触发事件类型
    *
    * @var string[]
    */
    protected static $getters = [
            'buildType' => 'getBuildType',
            'targetBranch' => 'getTargetBranch',
            'tag' => 'getTag',
            'eventType' => 'getEventType'
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
        $this->container['buildType'] = isset($data['buildType']) ? $data['buildType'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['buildType'] === null) {
            $invalidProperties[] = "'buildType' can't be null";
        }
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
    * Gets buildType
    *  分支还是tag触发
    *
    * @return string
    */
    public function getBuildType()
    {
        return $this->container['buildType'];
    }

    /**
    * Sets buildType
    *
    * @param string $buildType 分支还是tag触发
    *
    * @return $this
    */
    public function setBuildType($buildType)
    {
        $this->container['buildType'] = $buildType;
        return $this;
    }

    /**
    * Gets targetBranch
    *  运行分支
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch 运行分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets tag
    *  运行tag
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 运行tag
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets eventType
    *  触发事件类型
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 触发事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
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

