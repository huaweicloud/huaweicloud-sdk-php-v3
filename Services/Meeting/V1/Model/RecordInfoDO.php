<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordInfoDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordInfoDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subject  会议主题
    * beginTime  会议录制开始时间
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    * segmentCount  录制段落总数
    * segmentList  录制人工启动/停止分段列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subject' => 'string',
            'beginTime' => 'string',
            'segmentOffset' => 'int',
            'segmentLimit' => 'int',
            'segmentCount' => 'int',
            'segmentList' => '\HuaweiCloud\SDK\Meeting\V1\Model\SegmentDO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subject  会议主题
    * beginTime  会议录制开始时间
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    * segmentCount  录制段落总数
    * segmentList  录制人工启动/停止分段列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subject' => null,
        'beginTime' => null,
        'segmentOffset' => null,
        'segmentLimit' => null,
        'segmentCount' => 'int64',
        'segmentList' => null
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
    * subject  会议主题
    * beginTime  会议录制开始时间
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    * segmentCount  录制段落总数
    * segmentList  录制人工启动/停止分段列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subject' => 'subject',
            'beginTime' => 'beginTime',
            'segmentOffset' => 'segmentOffset',
            'segmentLimit' => 'segmentLimit',
            'segmentCount' => 'segmentCount',
            'segmentList' => 'segmentList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subject  会议主题
    * beginTime  会议录制开始时间
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    * segmentCount  录制段落总数
    * segmentList  录制人工启动/停止分段列表
    *
    * @var string[]
    */
    protected static $setters = [
            'subject' => 'setSubject',
            'beginTime' => 'setBeginTime',
            'segmentOffset' => 'setSegmentOffset',
            'segmentLimit' => 'setSegmentLimit',
            'segmentCount' => 'setSegmentCount',
            'segmentList' => 'setSegmentList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subject  会议主题
    * beginTime  会议录制开始时间
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    * segmentCount  录制段落总数
    * segmentList  录制人工启动/停止分段列表
    *
    * @var string[]
    */
    protected static $getters = [
            'subject' => 'getSubject',
            'beginTime' => 'getBeginTime',
            'segmentOffset' => 'getSegmentOffset',
            'segmentLimit' => 'getSegmentLimit',
            'segmentCount' => 'getSegmentCount',
            'segmentList' => 'getSegmentList'
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['segmentOffset'] = isset($data['segmentOffset']) ? $data['segmentOffset'] : null;
        $this->container['segmentLimit'] = isset($data['segmentLimit']) ? $data['segmentLimit'] : null;
        $this->container['segmentCount'] = isset($data['segmentCount']) ? $data['segmentCount'] : null;
        $this->container['segmentList'] = isset($data['segmentList']) ? $data['segmentList'] : null;
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
    * Gets subject
    *  会议主题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 会议主题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets beginTime
    *  会议录制开始时间
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 会议录制开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets segmentOffset
    *  录制段落查询偏移量
    *
    * @return int|null
    */
    public function getSegmentOffset()
    {
        return $this->container['segmentOffset'];
    }

    /**
    * Sets segmentOffset
    *
    * @param int|null $segmentOffset 录制段落查询偏移量
    *
    * @return $this
    */
    public function setSegmentOffset($segmentOffset)
    {
        $this->container['segmentOffset'] = $segmentOffset;
        return $this;
    }

    /**
    * Gets segmentLimit
    *  录制段落查询数量
    *
    * @return int|null
    */
    public function getSegmentLimit()
    {
        return $this->container['segmentLimit'];
    }

    /**
    * Sets segmentLimit
    *
    * @param int|null $segmentLimit 录制段落查询数量
    *
    * @return $this
    */
    public function setSegmentLimit($segmentLimit)
    {
        $this->container['segmentLimit'] = $segmentLimit;
        return $this;
    }

    /**
    * Gets segmentCount
    *  录制段落总数
    *
    * @return int|null
    */
    public function getSegmentCount()
    {
        return $this->container['segmentCount'];
    }

    /**
    * Sets segmentCount
    *
    * @param int|null $segmentCount 录制段落总数
    *
    * @return $this
    */
    public function setSegmentCount($segmentCount)
    {
        $this->container['segmentCount'] = $segmentCount;
        return $this;
    }

    /**
    * Gets segmentList
    *  录制人工启动/停止分段列表
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\SegmentDO[]|null
    */
    public function getSegmentList()
    {
        return $this->container['segmentList'];
    }

    /**
    * Sets segmentList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\SegmentDO[]|null $segmentList 录制人工启动/停止分段列表
    *
    * @return $this
    */
    public function setSegmentList($segmentList)
    {
        $this->container['segmentList'] = $segmentList;
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

