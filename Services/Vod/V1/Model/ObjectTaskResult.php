<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectTaskResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectTaskResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskType  工作流中任务类型
    * transcodeTask  transcodeTask
    * thumbnailTask  thumbnailTask
    * imageSpriteTask  imageSpriteTask
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskType' => 'string',
            'transcodeTask' => '\HuaweiCloud\SDK\Vod\V1\Model\TranscodeTask',
            'thumbnailTask' => '\HuaweiCloud\SDK\Vod\V1\Model\ThumbnailTask',
            'imageSpriteTask' => '\HuaweiCloud\SDK\Vod\V1\Model\ImageSpriteTask'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskType  工作流中任务类型
    * transcodeTask  transcodeTask
    * thumbnailTask  thumbnailTask
    * imageSpriteTask  imageSpriteTask
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskType' => null,
        'transcodeTask' => null,
        'thumbnailTask' => null,
        'imageSpriteTask' => null
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
    * taskType  工作流中任务类型
    * transcodeTask  transcodeTask
    * thumbnailTask  thumbnailTask
    * imageSpriteTask  imageSpriteTask
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskType' => 'task_type',
            'transcodeTask' => 'transcode_task',
            'thumbnailTask' => 'thumbnail_task',
            'imageSpriteTask' => 'image_sprite_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskType  工作流中任务类型
    * transcodeTask  transcodeTask
    * thumbnailTask  thumbnailTask
    * imageSpriteTask  imageSpriteTask
    *
    * @var string[]
    */
    protected static $setters = [
            'taskType' => 'setTaskType',
            'transcodeTask' => 'setTranscodeTask',
            'thumbnailTask' => 'setThumbnailTask',
            'imageSpriteTask' => 'setImageSpriteTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskType  工作流中任务类型
    * transcodeTask  transcodeTask
    * thumbnailTask  thumbnailTask
    * imageSpriteTask  imageSpriteTask
    *
    * @var string[]
    */
    protected static $getters = [
            'taskType' => 'getTaskType',
            'transcodeTask' => 'getTranscodeTask',
            'thumbnailTask' => 'getThumbnailTask',
            'imageSpriteTask' => 'getImageSpriteTask'
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['transcodeTask'] = isset($data['transcodeTask']) ? $data['transcodeTask'] : null;
        $this->container['thumbnailTask'] = isset($data['thumbnailTask']) ? $data['thumbnailTask'] : null;
        $this->container['imageSpriteTask'] = isset($data['imageSpriteTask']) ? $data['imageSpriteTask'] : null;
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
    * Gets taskType
    *  工作流中任务类型
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 工作流中任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets transcodeTask
    *  transcodeTask
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\TranscodeTask|null
    */
    public function getTranscodeTask()
    {
        return $this->container['transcodeTask'];
    }

    /**
    * Sets transcodeTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\TranscodeTask|null $transcodeTask transcodeTask
    *
    * @return $this
    */
    public function setTranscodeTask($transcodeTask)
    {
        $this->container['transcodeTask'] = $transcodeTask;
        return $this;
    }

    /**
    * Gets thumbnailTask
    *  thumbnailTask
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailTask|null
    */
    public function getThumbnailTask()
    {
        return $this->container['thumbnailTask'];
    }

    /**
    * Sets thumbnailTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailTask|null $thumbnailTask thumbnailTask
    *
    * @return $this
    */
    public function setThumbnailTask($thumbnailTask)
    {
        $this->container['thumbnailTask'] = $thumbnailTask;
        return $this;
    }

    /**
    * Gets imageSpriteTask
    *  imageSpriteTask
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ImageSpriteTask|null
    */
    public function getImageSpriteTask()
    {
        return $this->container['imageSpriteTask'];
    }

    /**
    * Sets imageSpriteTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ImageSpriteTask|null $imageSpriteTask imageSpriteTask
    *
    * @return $this
    */
    public function setImageSpriteTask($imageSpriteTask)
    {
        $this->container['imageSpriteTask'] = $imageSpriteTask;
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

