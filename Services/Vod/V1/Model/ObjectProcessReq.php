<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectProcessReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectProcessReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * input  input
    * output  output
    * transcodeTask  转码任务列表
    * videoProcess  videoProcess
    * watermarks  水印设置
    * thumbnailTask  转码任务列表
    * imageSpriteTask  转码任务列表
    * callbackUrl  回调url
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'input' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'output' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'transcodeTask' => '\HuaweiCloud\SDK\Vod\V1\Model\ObjectTranscodeTask[]',
            'videoProcess' => '\HuaweiCloud\SDK\Vod\V1\Model\VideoProcess',
            'watermarks' => '\HuaweiCloud\SDK\Vod\V1\Model\WatermarkRequest[]',
            'thumbnailTask' => '\HuaweiCloud\SDK\Vod\V1\Model\ObjectThumbnailTask[]',
            'imageSpriteTask' => '\HuaweiCloud\SDK\Vod\V1\Model\ObjectImageSpriteTask[]',
            'callbackUrl' => 'string',
            'sessionContext' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * input  input
    * output  output
    * transcodeTask  转码任务列表
    * videoProcess  videoProcess
    * watermarks  水印设置
    * thumbnailTask  转码任务列表
    * imageSpriteTask  转码任务列表
    * callbackUrl  回调url
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'input' => null,
        'output' => null,
        'transcodeTask' => null,
        'videoProcess' => null,
        'watermarks' => null,
        'thumbnailTask' => null,
        'imageSpriteTask' => null,
        'callbackUrl' => null,
        'sessionContext' => null
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
    * input  input
    * output  output
    * transcodeTask  转码任务列表
    * videoProcess  videoProcess
    * watermarks  水印设置
    * thumbnailTask  转码任务列表
    * imageSpriteTask  转码任务列表
    * callbackUrl  回调url
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'input' => 'input',
            'output' => 'output',
            'transcodeTask' => 'transcode_task',
            'videoProcess' => 'video_process',
            'watermarks' => 'watermarks',
            'thumbnailTask' => 'thumbnail_task',
            'imageSpriteTask' => 'image_sprite_task',
            'callbackUrl' => 'callback_url',
            'sessionContext' => 'session_context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * input  input
    * output  output
    * transcodeTask  转码任务列表
    * videoProcess  videoProcess
    * watermarks  水印设置
    * thumbnailTask  转码任务列表
    * imageSpriteTask  转码任务列表
    * callbackUrl  回调url
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $setters = [
            'input' => 'setInput',
            'output' => 'setOutput',
            'transcodeTask' => 'setTranscodeTask',
            'videoProcess' => 'setVideoProcess',
            'watermarks' => 'setWatermarks',
            'thumbnailTask' => 'setThumbnailTask',
            'imageSpriteTask' => 'setImageSpriteTask',
            'callbackUrl' => 'setCallbackUrl',
            'sessionContext' => 'setSessionContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * input  input
    * output  output
    * transcodeTask  转码任务列表
    * videoProcess  videoProcess
    * watermarks  水印设置
    * thumbnailTask  转码任务列表
    * imageSpriteTask  转码任务列表
    * callbackUrl  回调url
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $getters = [
            'input' => 'getInput',
            'output' => 'getOutput',
            'transcodeTask' => 'getTranscodeTask',
            'videoProcess' => 'getVideoProcess',
            'watermarks' => 'getWatermarks',
            'thumbnailTask' => 'getThumbnailTask',
            'imageSpriteTask' => 'getImageSpriteTask',
            'callbackUrl' => 'getCallbackUrl',
            'sessionContext' => 'getSessionContext'
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['transcodeTask'] = isset($data['transcodeTask']) ? $data['transcodeTask'] : null;
        $this->container['videoProcess'] = isset($data['videoProcess']) ? $data['videoProcess'] : null;
        $this->container['watermarks'] = isset($data['watermarks']) ? $data['watermarks'] : null;
        $this->container['thumbnailTask'] = isset($data['thumbnailTask']) ? $data['thumbnailTask'] : null;
        $this->container['imageSpriteTask'] = isset($data['imageSpriteTask']) ? $data['imageSpriteTask'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['sessionContext'] = isset($data['sessionContext']) ? $data['sessionContext'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ($this->container['output'] === null) {
            $invalidProperties[] = "'output' can't be null";
        }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) < 0)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be bigger than or equal to 0.";
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
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets transcodeTask
    *  转码任务列表
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObjectTranscodeTask[]|null
    */
    public function getTranscodeTask()
    {
        return $this->container['transcodeTask'];
    }

    /**
    * Sets transcodeTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObjectTranscodeTask[]|null $transcodeTask 转码任务列表
    *
    * @return $this
    */
    public function setTranscodeTask($transcodeTask)
    {
        $this->container['transcodeTask'] = $transcodeTask;
        return $this;
    }

    /**
    * Gets videoProcess
    *  videoProcess
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\VideoProcess|null
    */
    public function getVideoProcess()
    {
        return $this->container['videoProcess'];
    }

    /**
    * Sets videoProcess
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\VideoProcess|null $videoProcess videoProcess
    *
    * @return $this
    */
    public function setVideoProcess($videoProcess)
    {
        $this->container['videoProcess'] = $videoProcess;
        return $this;
    }

    /**
    * Gets watermarks
    *  水印设置
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\WatermarkRequest[]|null
    */
    public function getWatermarks()
    {
        return $this->container['watermarks'];
    }

    /**
    * Sets watermarks
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\WatermarkRequest[]|null $watermarks 水印设置
    *
    * @return $this
    */
    public function setWatermarks($watermarks)
    {
        $this->container['watermarks'] = $watermarks;
        return $this;
    }

    /**
    * Gets thumbnailTask
    *  转码任务列表
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObjectThumbnailTask[]|null
    */
    public function getThumbnailTask()
    {
        return $this->container['thumbnailTask'];
    }

    /**
    * Sets thumbnailTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObjectThumbnailTask[]|null $thumbnailTask 转码任务列表
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
    *  转码任务列表
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObjectImageSpriteTask[]|null
    */
    public function getImageSpriteTask()
    {
        return $this->container['imageSpriteTask'];
    }

    /**
    * Sets imageSpriteTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObjectImageSpriteTask[]|null $imageSpriteTask 转码任务列表
    *
    * @return $this
    */
    public function setImageSpriteTask($imageSpriteTask)
    {
        $this->container['imageSpriteTask'] = $imageSpriteTask;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  回调url
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 回调url
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets sessionContext
    *  自定义上下文，回调时会回调给用户，透传信息
    *
    * @return string|null
    */
    public function getSessionContext()
    {
        return $this->container['sessionContext'];
    }

    /**
    * Sets sessionContext
    *
    * @param string|null $sessionContext 自定义上下文，回调时会回调给用户，透传信息
    *
    * @return $this
    */
    public function setSessionContext($sessionContext)
    {
        $this->container['sessionContext'] = $sessionContext;
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

