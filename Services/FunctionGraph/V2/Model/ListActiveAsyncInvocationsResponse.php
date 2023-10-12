<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListActiveAsyncInvocationsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListActiveAsyncInvocationsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * invocations  异步调用记录列表。
    * count  查询数据总条数
    * nextMarker  查询下一页的起始位置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'invocations' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\ListFunctionAsyncInvocationsResult[]',
            'count' => 'int',
            'nextMarker' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * invocations  异步调用记录列表。
    * count  查询数据总条数
    * nextMarker  查询下一页的起始位置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'invocations' => null,
        'count' => 'int32',
        'nextMarker' => 'int32'
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
    * invocations  异步调用记录列表。
    * count  查询数据总条数
    * nextMarker  查询下一页的起始位置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'invocations' => 'invocations',
            'count' => 'count',
            'nextMarker' => 'next_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * invocations  异步调用记录列表。
    * count  查询数据总条数
    * nextMarker  查询下一页的起始位置
    *
    * @var string[]
    */
    protected static $setters = [
            'invocations' => 'setInvocations',
            'count' => 'setCount',
            'nextMarker' => 'setNextMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * invocations  异步调用记录列表。
    * count  查询数据总条数
    * nextMarker  查询下一页的起始位置
    *
    * @var string[]
    */
    protected static $getters = [
            'invocations' => 'getInvocations',
            'count' => 'getCount',
            'nextMarker' => 'getNextMarker'
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
        $this->container['invocations'] = isset($data['invocations']) ? $data['invocations'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
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
    * Gets invocations
    *  异步调用记录列表。
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\ListFunctionAsyncInvocationsResult[]|null
    */
    public function getInvocations()
    {
        return $this->container['invocations'];
    }

    /**
    * Sets invocations
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\ListFunctionAsyncInvocationsResult[]|null $invocations 异步调用记录列表。
    *
    * @return $this
    */
    public function setInvocations($invocations)
    {
        $this->container['invocations'] = $invocations;
        return $this;
    }

    /**
    * Gets count
    *  查询数据总条数
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
    * @param int|null $count 查询数据总条数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets nextMarker
    *  查询下一页的起始位置
    *
    * @return int|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param int|null $nextMarker 查询下一页的起始位置
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
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

