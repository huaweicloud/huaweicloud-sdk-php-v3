<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * previousMarker  参数解释：分页查询结果中第一条记录的ID。通常用于配合page_reverse=true查询上一页。
    * nextMarker  参数解释：分页查询结果中最后一条记录的ID。通常用于查询下一页。
    * currentCount  参数解释：当前的记录数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'previousMarker' => 'string',
            'nextMarker' => 'string',
            'currentCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * previousMarker  参数解释：分页查询结果中第一条记录的ID。通常用于配合page_reverse=true查询上一页。
    * nextMarker  参数解释：分页查询结果中最后一条记录的ID。通常用于查询下一页。
    * currentCount  参数解释：当前的记录数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'previousMarker' => null,
        'nextMarker' => null,
        'currentCount' => 'int32'
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
    * previousMarker  参数解释：分页查询结果中第一条记录的ID。通常用于配合page_reverse=true查询上一页。
    * nextMarker  参数解释：分页查询结果中最后一条记录的ID。通常用于查询下一页。
    * currentCount  参数解释：当前的记录数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'previousMarker' => 'previous_marker',
            'nextMarker' => 'next_marker',
            'currentCount' => 'current_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * previousMarker  参数解释：分页查询结果中第一条记录的ID。通常用于配合page_reverse=true查询上一页。
    * nextMarker  参数解释：分页查询结果中最后一条记录的ID。通常用于查询下一页。
    * currentCount  参数解释：当前的记录数。
    *
    * @var string[]
    */
    protected static $setters = [
            'previousMarker' => 'setPreviousMarker',
            'nextMarker' => 'setNextMarker',
            'currentCount' => 'setCurrentCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * previousMarker  参数解释：分页查询结果中第一条记录的ID。通常用于配合page_reverse=true查询上一页。
    * nextMarker  参数解释：分页查询结果中最后一条记录的ID。通常用于查询下一页。
    * currentCount  参数解释：当前的记录数。
    *
    * @var string[]
    */
    protected static $getters = [
            'previousMarker' => 'getPreviousMarker',
            'nextMarker' => 'getNextMarker',
            'currentCount' => 'getCurrentCount'
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
        $this->container['previousMarker'] = isset($data['previousMarker']) ? $data['previousMarker'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['currentCount'] = isset($data['currentCount']) ? $data['currentCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['previousMarker'] === null) {
            $invalidProperties[] = "'previousMarker' can't be null";
        }
        if ($this->container['currentCount'] === null) {
            $invalidProperties[] = "'currentCount' can't be null";
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
    * Gets previousMarker
    *  参数解释：分页查询结果中第一条记录的ID。通常用于配合page_reverse=true查询上一页。
    *
    * @return string
    */
    public function getPreviousMarker()
    {
        return $this->container['previousMarker'];
    }

    /**
    * Sets previousMarker
    *
    * @param string $previousMarker 参数解释：分页查询结果中第一条记录的ID。通常用于配合page_reverse=true查询上一页。
    *
    * @return $this
    */
    public function setPreviousMarker($previousMarker)
    {
        $this->container['previousMarker'] = $previousMarker;
        return $this;
    }

    /**
    * Gets nextMarker
    *  参数解释：分页查询结果中最后一条记录的ID。通常用于查询下一页。
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 参数解释：分页查询结果中最后一条记录的ID。通常用于查询下一页。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets currentCount
    *  参数解释：当前的记录数。
    *
    * @return int
    */
    public function getCurrentCount()
    {
        return $this->container['currentCount'];
    }

    /**
    * Sets currentCount
    *
    * @param int $currentCount 参数解释：当前的记录数。
    *
    * @return $this
    */
    public function setCurrentCount($currentCount)
    {
        $this->container['currentCount'] = $currentCount;
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

