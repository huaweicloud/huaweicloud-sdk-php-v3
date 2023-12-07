<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVideoMotionCaptureJobsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVideoMotionCaptureJobsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  视频驱动任务总数。
    * videoMotionCaptureJobs  视频驱动任务列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'videoMotionCaptureJobs' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoMotionCaptureInfo[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  视频驱动任务总数。
    * videoMotionCaptureJobs  视频驱动任务列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'videoMotionCaptureJobs' => null,
        'xRequestId' => null
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
    * total  视频驱动任务总数。
    * videoMotionCaptureJobs  视频驱动任务列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'videoMotionCaptureJobs' => 'video_motion_capture_jobs',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  视频驱动任务总数。
    * videoMotionCaptureJobs  视频驱动任务列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'videoMotionCaptureJobs' => 'setVideoMotionCaptureJobs',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  视频驱动任务总数。
    * videoMotionCaptureJobs  视频驱动任务列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'videoMotionCaptureJobs' => 'getVideoMotionCaptureJobs',
            'xRequestId' => 'getXRequestId'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['videoMotionCaptureJobs'] = isset($data['videoMotionCaptureJobs']) ? $data['videoMotionCaptureJobs'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets total
    *  视频驱动任务总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 视频驱动任务总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets videoMotionCaptureJobs
    *  视频驱动任务列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoMotionCaptureInfo[]|null
    */
    public function getVideoMotionCaptureJobs()
    {
        return $this->container['videoMotionCaptureJobs'];
    }

    /**
    * Sets videoMotionCaptureJobs
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoMotionCaptureInfo[]|null $videoMotionCaptureJobs 视频驱动任务列表。
    *
    * @return $this
    */
    public function setVideoMotionCaptureJobs($videoMotionCaptureJobs)
    {
        $this->container['videoMotionCaptureJobs'] = $videoMotionCaptureJobs;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

