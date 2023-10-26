<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaDataSeries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaDataSeries';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  当前返回结果条数。
    * offset  下一个开始的标记，用于分页，null表示无更多数据。
    * total  总条数。
    * nextToken  偏移量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'offset' => 'int',
            'total' => 'int',
            'nextToken' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  当前返回结果条数。
    * offset  下一个开始的标记，用于分页，null表示无更多数据。
    * total  总条数。
    * nextToken  偏移量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'offset' => null,
        'total' => 'int32',
        'nextToken' => 'int32'
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
    * count  当前返回结果条数。
    * offset  下一个开始的标记，用于分页，null表示无更多数据。
    * total  总条数。
    * nextToken  偏移量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'offset' => 'offset',
            'total' => 'total',
            'nextToken' => 'nextToken'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  当前返回结果条数。
    * offset  下一个开始的标记，用于分页，null表示无更多数据。
    * total  总条数。
    * nextToken  偏移量。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'offset' => 'setOffset',
            'total' => 'setTotal',
            'nextToken' => 'setNextToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  当前返回结果条数。
    * offset  下一个开始的标记，用于分页，null表示无更多数据。
    * total  总条数。
    * nextToken  偏移量。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'offset' => 'getOffset',
            'total' => 'getTotal',
            'nextToken' => 'getNextToken'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['nextToken'] = isset($data['nextToken']) ? $data['nextToken'] : null;
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
    * Gets count
    *  当前返回结果条数。
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
    * @param int|null $count 当前返回结果条数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets offset
    *  下一个开始的标记，用于分页，null表示无更多数据。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 下一个开始的标记，用于分页，null表示无更多数据。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets total
    *  总条数。
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
    * @param int|null $total 总条数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets nextToken
    *  偏移量。
    *
    * @return int|null
    */
    public function getNextToken()
    {
        return $this->container['nextToken'];
    }

    /**
    * Sets nextToken
    *
    * @param int|null $nextToken 偏移量。
    *
    * @return $this
    */
    public function setNextToken($nextToken)
    {
        $this->container['nextToken'] = $nextToken;
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

