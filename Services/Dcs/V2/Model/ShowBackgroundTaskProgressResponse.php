<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackgroundTaskProgressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackgroundTaskProgressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progress  总体进度,百分比
    * remainTime  剩余时间(单位秒)
    * stepDetails  任务详情列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progress' => 'int',
            'remainTime' => 'int',
            'stepDetails' => '\HuaweiCloud\SDK\Dcs\V2\Model\StepDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progress  总体进度,百分比
    * remainTime  剩余时间(单位秒)
    * stepDetails  任务详情列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progress' => null,
        'remainTime' => null,
        'stepDetails' => null
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
    * progress  总体进度,百分比
    * remainTime  剩余时间(单位秒)
    * stepDetails  任务详情列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progress' => 'progress',
            'remainTime' => 'remain_time',
            'stepDetails' => 'step_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progress  总体进度,百分比
    * remainTime  剩余时间(单位秒)
    * stepDetails  任务详情列表
    *
    * @var string[]
    */
    protected static $setters = [
            'progress' => 'setProgress',
            'remainTime' => 'setRemainTime',
            'stepDetails' => 'setStepDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progress  总体进度,百分比
    * remainTime  剩余时间(单位秒)
    * stepDetails  任务详情列表
    *
    * @var string[]
    */
    protected static $getters = [
            'progress' => 'getProgress',
            'remainTime' => 'getRemainTime',
            'stepDetails' => 'getStepDetails'
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['remainTime'] = isset($data['remainTime']) ? $data['remainTime'] : null;
        $this->container['stepDetails'] = isset($data['stepDetails']) ? $data['stepDetails'] : null;
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
    * Gets progress
    *  总体进度,百分比
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 总体进度,百分比
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets remainTime
    *  剩余时间(单位秒)
    *
    * @return int|null
    */
    public function getRemainTime()
    {
        return $this->container['remainTime'];
    }

    /**
    * Sets remainTime
    *
    * @param int|null $remainTime 剩余时间(单位秒)
    *
    * @return $this
    */
    public function setRemainTime($remainTime)
    {
        $this->container['remainTime'] = $remainTime;
        return $this;
    }

    /**
    * Gets stepDetails
    *  任务详情列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\StepDetail[]|null
    */
    public function getStepDetails()
    {
        return $this->container['stepDetails'];
    }

    /**
    * Sets stepDetails
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\StepDetail[]|null $stepDetails 任务详情列表
    *
    * @return $this
    */
    public function setStepDetails($stepDetails)
    {
        $this->container['stepDetails'] = $stepDetails;
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

