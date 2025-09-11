<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchedulerBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchedulerBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbIds  数据库ID
    * format  文件类型,默认ZIP
    * frequency  周期
    * id  模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbIds' => 'string',
            'format' => 'string',
            'frequency' => 'string',
            'id' => 'string',
            'mode' => 'string',
            'notice' => 'string',
            'startTime' => 'string',
            'status' => 'string',
            'topicUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbIds  数据库ID
    * format  文件类型,默认ZIP
    * frequency  周期
    * id  模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbIds' => null,
        'format' => null,
        'frequency' => null,
        'id' => null,
        'mode' => null,
        'notice' => null,
        'startTime' => null,
        'status' => null,
        'topicUrn' => null
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
    * dbIds  数据库ID
    * format  文件类型,默认ZIP
    * frequency  周期
    * id  模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbIds' => 'db_ids',
            'format' => 'format',
            'frequency' => 'frequency',
            'id' => 'id',
            'mode' => 'mode',
            'notice' => 'notice',
            'startTime' => 'start_time',
            'status' => 'status',
            'topicUrn' => 'topic_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbIds  数据库ID
    * format  文件类型,默认ZIP
    * frequency  周期
    * id  模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $setters = [
            'dbIds' => 'setDbIds',
            'format' => 'setFormat',
            'frequency' => 'setFrequency',
            'id' => 'setId',
            'mode' => 'setMode',
            'notice' => 'setNotice',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'topicUrn' => 'setTopicUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbIds  数据库ID
    * format  文件类型,默认ZIP
    * frequency  周期
    * id  模板ID
    * mode  调度方式
    * notice  是否通知  - OFF：不通知  - ON：通知
    * startTime  开始时间
    * status  模板状态
    * topicUrn  主题URN
    *
    * @var string[]
    */
    protected static $getters = [
            'dbIds' => 'getDbIds',
            'format' => 'getFormat',
            'frequency' => 'getFrequency',
            'id' => 'getId',
            'mode' => 'getMode',
            'notice' => 'getNotice',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'topicUrn' => 'getTopicUrn'
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
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['notice'] = isset($data['notice']) ? $data['notice'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['notice'] === null) {
            $invalidProperties[] = "'notice' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
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
    * Gets dbIds
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string|null $dbIds 数据库ID
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets format
    *  文件类型,默认ZIP
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 文件类型,默认ZIP
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets frequency
    *  周期
    *
    * @return string
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string $frequency 周期
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets id
    *  模板ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 模板ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mode
    *  调度方式
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 调度方式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets notice
    *  是否通知  - OFF：不通知  - ON：通知
    *
    * @return string
    */
    public function getNotice()
    {
        return $this->container['notice'];
    }

    /**
    * Sets notice
    *
    * @param string $notice 是否通知  - OFF：不通知  - ON：通知
    *
    * @return $this
    */
    public function setNotice($notice)
    {
        $this->container['notice'] = $notice;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  模板状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 模板状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题URN
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn 主题URN
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
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

