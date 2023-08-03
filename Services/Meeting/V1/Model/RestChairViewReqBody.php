<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestChairViewReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestChairViewReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * viewType  主持人观看的画面类型。 - 0: 主持人轮询 - 1: 主持人观看多画面 - 2: 主持人选看会场
    * participantId  被主持人选看的会场。 当为主持人选看会场时为必填参数。
    * switchTime  轮询间隔，单位：秒。 主持人轮询时，必填字段。 范围:[10-120]，默认值：10。
    * status  启动/停止轮询。 主持人轮询时，必填字段。 - 0: 停止轮询 - 1: 启动轮询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'viewType' => 'int',
            'participantId' => 'string',
            'switchTime' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * viewType  主持人观看的画面类型。 - 0: 主持人轮询 - 1: 主持人观看多画面 - 2: 主持人选看会场
    * participantId  被主持人选看的会场。 当为主持人选看会场时为必填参数。
    * switchTime  轮询间隔，单位：秒。 主持人轮询时，必填字段。 范围:[10-120]，默认值：10。
    * status  启动/停止轮询。 主持人轮询时，必填字段。 - 0: 停止轮询 - 1: 启动轮询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'viewType' => 'int32',
        'participantId' => null,
        'switchTime' => 'int32',
        'status' => 'int32'
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
    * viewType  主持人观看的画面类型。 - 0: 主持人轮询 - 1: 主持人观看多画面 - 2: 主持人选看会场
    * participantId  被主持人选看的会场。 当为主持人选看会场时为必填参数。
    * switchTime  轮询间隔，单位：秒。 主持人轮询时，必填字段。 范围:[10-120]，默认值：10。
    * status  启动/停止轮询。 主持人轮询时，必填字段。 - 0: 停止轮询 - 1: 启动轮询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'viewType' => 'viewType',
            'participantId' => 'participantID',
            'switchTime' => 'switchTime',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * viewType  主持人观看的画面类型。 - 0: 主持人轮询 - 1: 主持人观看多画面 - 2: 主持人选看会场
    * participantId  被主持人选看的会场。 当为主持人选看会场时为必填参数。
    * switchTime  轮询间隔，单位：秒。 主持人轮询时，必填字段。 范围:[10-120]，默认值：10。
    * status  启动/停止轮询。 主持人轮询时，必填字段。 - 0: 停止轮询 - 1: 启动轮询
    *
    * @var string[]
    */
    protected static $setters = [
            'viewType' => 'setViewType',
            'participantId' => 'setParticipantId',
            'switchTime' => 'setSwitchTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * viewType  主持人观看的画面类型。 - 0: 主持人轮询 - 1: 主持人观看多画面 - 2: 主持人选看会场
    * participantId  被主持人选看的会场。 当为主持人选看会场时为必填参数。
    * switchTime  轮询间隔，单位：秒。 主持人轮询时，必填字段。 范围:[10-120]，默认值：10。
    * status  启动/停止轮询。 主持人轮询时，必填字段。 - 0: 停止轮询 - 1: 启动轮询
    *
    * @var string[]
    */
    protected static $getters = [
            'viewType' => 'getViewType',
            'participantId' => 'getParticipantId',
            'switchTime' => 'getSwitchTime',
            'status' => 'getStatus'
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
        $this->container['viewType'] = isset($data['viewType']) ? $data['viewType'] : null;
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['switchTime'] = isset($data['switchTime']) ? $data['switchTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['viewType'] === null) {
            $invalidProperties[] = "'viewType' can't be null";
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
    * Gets viewType
    *  主持人观看的画面类型。 - 0: 主持人轮询 - 1: 主持人观看多画面 - 2: 主持人选看会场
    *
    * @return int
    */
    public function getViewType()
    {
        return $this->container['viewType'];
    }

    /**
    * Sets viewType
    *
    * @param int $viewType 主持人观看的画面类型。 - 0: 主持人轮询 - 1: 主持人观看多画面 - 2: 主持人选看会场
    *
    * @return $this
    */
    public function setViewType($viewType)
    {
        $this->container['viewType'] = $viewType;
        return $this;
    }

    /**
    * Gets participantId
    *  被主持人选看的会场。 当为主持人选看会场时为必填参数。
    *
    * @return string|null
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string|null $participantId 被主持人选看的会场。 当为主持人选看会场时为必填参数。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets switchTime
    *  轮询间隔，单位：秒。 主持人轮询时，必填字段。 范围:[10-120]，默认值：10。
    *
    * @return int|null
    */
    public function getSwitchTime()
    {
        return $this->container['switchTime'];
    }

    /**
    * Sets switchTime
    *
    * @param int|null $switchTime 轮询间隔，单位：秒。 主持人轮询时，必填字段。 范围:[10-120]，默认值：10。
    *
    * @return $this
    */
    public function setSwitchTime($switchTime)
    {
        $this->container['switchTime'] = $switchTime;
        return $this;
    }

    /**
    * Gets status
    *  启动/停止轮询。 主持人轮询时，必填字段。 - 0: 停止轮询 - 1: 启动轮询
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 启动/停止轮询。 主持人轮询时，必填字段。 - 0: 停止轮询 - 1: 启动轮询
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

