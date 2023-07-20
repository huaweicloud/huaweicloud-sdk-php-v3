<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogHistogramResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogHistogramResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * histogram  直方图结果
    * count  日志条数
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'histogram' => 'string',
            'count' => 'int',
            'isQueryComplete' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * histogram  直方图结果
    * count  日志条数
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'histogram' => null,
        'count' => 'int64',
        'isQueryComplete' => null
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
    * histogram  直方图结果
    * count  日志条数
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'histogram' => 'histogram',
            'count' => 'count',
            'isQueryComplete' => 'isQueryComplete'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * histogram  直方图结果
    * count  日志条数
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $setters = [
            'histogram' => 'setHistogram',
            'count' => 'setCount',
            'isQueryComplete' => 'setIsQueryComplete'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * histogram  直方图结果
    * count  日志条数
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $getters = [
            'histogram' => 'getHistogram',
            'count' => 'getCount',
            'isQueryComplete' => 'getIsQueryComplete'
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
        $this->container['histogram'] = isset($data['histogram']) ? $data['histogram'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['isQueryComplete'] = isset($data['isQueryComplete']) ? $data['isQueryComplete'] : null;
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
    * Gets histogram
    *  直方图结果
    *
    * @return string|null
    */
    public function getHistogram()
    {
        return $this->container['histogram'];
    }

    /**
    * Sets histogram
    *
    * @param string|null $histogram 直方图结果
    *
    * @return $this
    */
    public function setHistogram($histogram)
    {
        $this->container['histogram'] = $histogram;
        return $this;
    }

    /**
    * Gets count
    *  日志条数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 日志条数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets isQueryComplete
    *  是否查询完成。
    *
    * @return bool|null
    */
    public function getIsQueryComplete()
    {
        return $this->container['isQueryComplete'];
    }

    /**
    * Sets isQueryComplete
    *
    * @param bool|null $isQueryComplete 是否查询完成。
    *
    * @return $this
    */
    public function setIsQueryComplete($isQueryComplete)
    {
        $this->container['isQueryComplete'] = $isQueryComplete;
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

