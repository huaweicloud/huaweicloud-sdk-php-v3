<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRtcAbnormalEventDimensionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRtcAbnormalEventDimensionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * app  应用ID
    * roomId  房间ID
    * dimension  分组类型，支持同时指定两种类型 - abnormal_type：异常类型 - abnormal_factor：异常因素
    * startTime  查询起始时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T06:00:00Z，不填写则默认读取过去1小时数据数据。
    * endTime  查询结束时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T07:00:00Z，不填写则默认为当前时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'app' => 'string',
            'roomId' => 'string',
            'dimension' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * app  应用ID
    * roomId  房间ID
    * dimension  分组类型，支持同时指定两种类型 - abnormal_type：异常类型 - abnormal_factor：异常因素
    * startTime  查询起始时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T06:00:00Z，不填写则默认读取过去1小时数据数据。
    * endTime  查询结束时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T07:00:00Z，不填写则默认为当前时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'app' => null,
        'roomId' => null,
        'dimension' => null,
        'startTime' => null,
        'endTime' => null
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
    * app  应用ID
    * roomId  房间ID
    * dimension  分组类型，支持同时指定两种类型 - abnormal_type：异常类型 - abnormal_factor：异常因素
    * startTime  查询起始时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T06:00:00Z，不填写则默认读取过去1小时数据数据。
    * endTime  查询结束时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T07:00:00Z，不填写则默认为当前时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'app' => 'app',
            'roomId' => 'room_id',
            'dimension' => 'dimension',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * app  应用ID
    * roomId  房间ID
    * dimension  分组类型，支持同时指定两种类型 - abnormal_type：异常类型 - abnormal_factor：异常因素
    * startTime  查询起始时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T06:00:00Z，不填写则默认读取过去1小时数据数据。
    * endTime  查询结束时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T07:00:00Z，不填写则默认为当前时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'app' => 'setApp',
            'roomId' => 'setRoomId',
            'dimension' => 'setDimension',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * app  应用ID
    * roomId  房间ID
    * dimension  分组类型，支持同时指定两种类型 - abnormal_type：异常类型 - abnormal_factor：异常因素
    * startTime  查询起始时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T06:00:00Z，不填写则默认读取过去1小时数据数据。
    * endTime  查询结束时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T07:00:00Z，不填写则默认为当前时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'app' => 'getApp',
            'roomId' => 'getRoomId',
            'dimension' => 'getDimension',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
    const DIMENSION_ABNORMAL_TYPE = 'abnormal_type';
    const DIMENSION_ABNORMAL_FACTOR = 'abnormal_factor';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDimensionAllowableValues()
    {
        return [
            self::DIMENSION_ABNORMAL_TYPE,
            self::DIMENSION_ABNORMAL_FACTOR,
        ];
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : 'abnormal_factor';
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 256)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDimensionAllowableValues();
                if (!is_null($this->container['dimension']) && !in_array($this->container['dimension'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dimension', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dimension']) && (mb_strlen($this->container['dimension']) > 256)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['dimension']) && (mb_strlen($this->container['dimension']) < 1)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
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
    * Gets app
    *  应用ID
    *
    * @return string
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string $app 应用ID
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets roomId
    *  房间ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 房间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets dimension
    *  分组类型，支持同时指定两种类型 - abnormal_type：异常类型 - abnormal_factor：异常因素
    *
    * @return string|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string|null $dimension 分组类型，支持同时指定两种类型 - abnormal_type：异常类型 - abnormal_factor：异常因素
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets startTime
    *  查询起始时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T06:00:00Z，不填写则默认读取过去1小时数据数据。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 查询起始时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T06:00:00Z，不填写则默认读取过去1小时数据数据。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询结束时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T07:00:00Z，不填写则默认为当前时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 查询结束时间。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ，如2020-04-23T07:00:00Z，不填写则默认为当前时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

