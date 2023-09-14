<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogStreamResBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogStreamResBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creationTime  创建时间 最小值：1577808000000 最大值：4102416000000
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * tag  日志流所属标签
    * filterCount  过滤器个数
    * isFavorite  是否收藏日志流。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creationTime' => 'int',
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'tag' => 'map[string,string]',
            'filterCount' => 'int',
            'isFavorite' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creationTime  创建时间 最小值：1577808000000 最大值：4102416000000
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * tag  日志流所属标签
    * filterCount  过滤器个数
    * isFavorite  是否收藏日志流。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creationTime' => 'int64',
        'logStreamId' => null,
        'logStreamName' => null,
        'tag' => null,
        'filterCount' => 'int32',
        'isFavorite' => null
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
    * creationTime  创建时间 最小值：1577808000000 最大值：4102416000000
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * tag  日志流所属标签
    * filterCount  过滤器个数
    * isFavorite  是否收藏日志流。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creationTime' => 'creation_time',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'tag' => 'tag',
            'filterCount' => 'filter_count',
            'isFavorite' => 'is_favorite'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creationTime  创建时间 最小值：1577808000000 最大值：4102416000000
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * tag  日志流所属标签
    * filterCount  过滤器个数
    * isFavorite  是否收藏日志流。
    *
    * @var string[]
    */
    protected static $setters = [
            'creationTime' => 'setCreationTime',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'tag' => 'setTag',
            'filterCount' => 'setFilterCount',
            'isFavorite' => 'setIsFavorite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creationTime  创建时间 最小值：1577808000000 最大值：4102416000000
    * logStreamId  日志流ID
    * logStreamName  日志流名称
    * tag  日志流所属标签
    * filterCount  过滤器个数
    * isFavorite  是否收藏日志流。
    *
    * @var string[]
    */
    protected static $getters = [
            'creationTime' => 'getCreationTime',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'tag' => 'getTag',
            'filterCount' => 'getFilterCount',
            'isFavorite' => 'getIsFavorite'
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
        $this->container['creationTime'] = isset($data['creationTime']) ? $data['creationTime'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['filterCount'] = isset($data['filterCount']) ? $data['filterCount'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filterCount']) && ($this->container['filterCount'] > 5)) {
                $invalidProperties[] = "invalid value for 'filterCount', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['filterCount']) && ($this->container['filterCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'filterCount', must be bigger than or equal to 0.";
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
    * Gets creationTime
    *  创建时间 最小值：1577808000000 最大值：4102416000000
    *
    * @return int|null
    */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
    * Sets creationTime
    *
    * @param int|null $creationTime 创建时间 最小值：1577808000000 最大值：4102416000000
    *
    * @return $this
    */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets tag
    *  日志流所属标签
    *
    * @return map[string,string]|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param map[string,string]|null $tag 日志流所属标签
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets filterCount
    *  过滤器个数
    *
    * @return int|null
    */
    public function getFilterCount()
    {
        return $this->container['filterCount'];
    }

    /**
    * Sets filterCount
    *
    * @param int|null $filterCount 过滤器个数
    *
    * @return $this
    */
    public function setFilterCount($filterCount)
    {
        $this->container['filterCount'] = $filterCount;
        return $this;
    }

    /**
    * Gets isFavorite
    *  是否收藏日志流。
    *
    * @return bool|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param bool|null $isFavorite 是否收藏日志流。
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
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

