<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOpenApiCalledRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOpenApiCalledRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页大小，默认1000，最大2000。
    * calledUrl  需要查询调用记录的URL，例如：/v1/{project_id}/sdg/database/watermark/embed
    * startTime  开始时间（Unix timestamp），单位：毫秒，例如：0
    * endTime  结束时间（Unix timestamp），单位：毫秒，例如：1638515803572
    * marker  指定一个标识符。获取第一页时不用赋值，获取下一页时取上页查询结果的返回值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'calledUrl' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页大小，默认1000，最大2000。
    * calledUrl  需要查询调用记录的URL，例如：/v1/{project_id}/sdg/database/watermark/embed
    * startTime  开始时间（Unix timestamp），单位：毫秒，例如：0
    * endTime  结束时间（Unix timestamp），单位：毫秒，例如：1638515803572
    * marker  指定一个标识符。获取第一页时不用赋值，获取下一页时取上页查询结果的返回值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'calledUrl' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'marker' => null
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
    * limit  分页大小，默认1000，最大2000。
    * calledUrl  需要查询调用记录的URL，例如：/v1/{project_id}/sdg/database/watermark/embed
    * startTime  开始时间（Unix timestamp），单位：毫秒，例如：0
    * endTime  结束时间（Unix timestamp），单位：毫秒，例如：1638515803572
    * marker  指定一个标识符。获取第一页时不用赋值，获取下一页时取上页查询结果的返回值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'calledUrl' => 'called_url',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页大小，默认1000，最大2000。
    * calledUrl  需要查询调用记录的URL，例如：/v1/{project_id}/sdg/database/watermark/embed
    * startTime  开始时间（Unix timestamp），单位：毫秒，例如：0
    * endTime  结束时间（Unix timestamp），单位：毫秒，例如：1638515803572
    * marker  指定一个标识符。获取第一页时不用赋值，获取下一页时取上页查询结果的返回值。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'calledUrl' => 'setCalledUrl',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页大小，默认1000，最大2000。
    * calledUrl  需要查询调用记录的URL，例如：/v1/{project_id}/sdg/database/watermark/embed
    * startTime  开始时间（Unix timestamp），单位：毫秒，例如：0
    * endTime  结束时间（Unix timestamp），单位：毫秒，例如：1638515803572
    * marker  指定一个标识符。获取第一页时不用赋值，获取下一页时取上页查询结果的返回值。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'calledUrl' => 'getCalledUrl',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'marker' => 'getMarker'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['calledUrl'] = isset($data['calledUrl']) ? $data['calledUrl'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets limit
    *  分页大小，默认1000，最大2000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页大小，默认1000，最大2000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets calledUrl
    *  需要查询调用记录的URL，例如：/v1/{project_id}/sdg/database/watermark/embed
    *
    * @return string|null
    */
    public function getCalledUrl()
    {
        return $this->container['calledUrl'];
    }

    /**
    * Sets calledUrl
    *
    * @param string|null $calledUrl 需要查询调用记录的URL，例如：/v1/{project_id}/sdg/database/watermark/embed
    *
    * @return $this
    */
    public function setCalledUrl($calledUrl)
    {
        $this->container['calledUrl'] = $calledUrl;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间（Unix timestamp），单位：毫秒，例如：0
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间（Unix timestamp），单位：毫秒，例如：0
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
    *  结束时间（Unix timestamp），单位：毫秒，例如：1638515803572
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间（Unix timestamp），单位：毫秒，例如：1638515803572
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets marker
    *  指定一个标识符。获取第一页时不用赋值，获取下一页时取上页查询结果的返回值。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 指定一个标识符。获取第一页时不用赋值，获取下一页时取上页查询结果的返回值。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

