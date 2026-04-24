<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

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
    * nextMarker  如果存在，则表示还有后续的条目未显示在当前返回体中。请使用该值作为下一次请求的分页标记参数以获得下一页信息。请反复调用该接口直至该字段不存在。
    * currentCount  本页返回条目数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nextMarker' => 'string',
            'currentCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nextMarker  如果存在，则表示还有后续的条目未显示在当前返回体中。请使用该值作为下一次请求的分页标记参数以获得下一页信息。请反复调用该接口直至该字段不存在。
    * currentCount  本页返回条目数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * nextMarker  如果存在，则表示还有后续的条目未显示在当前返回体中。请使用该值作为下一次请求的分页标记参数以获得下一页信息。请反复调用该接口直至该字段不存在。
    * currentCount  本页返回条目数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nextMarker' => 'next_marker',
            'currentCount' => 'current_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nextMarker  如果存在，则表示还有后续的条目未显示在当前返回体中。请使用该值作为下一次请求的分页标记参数以获得下一页信息。请反复调用该接口直至该字段不存在。
    * currentCount  本页返回条目数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'nextMarker' => 'setNextMarker',
            'currentCount' => 'setCurrentCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nextMarker  如果存在，则表示还有后续的条目未显示在当前返回体中。请使用该值作为下一次请求的分页标记参数以获得下一页信息。请反复调用该接口直至该字段不存在。
    * currentCount  本页返回条目数量。
    *
    * @var string[]
    */
    protected static $getters = [
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
            if (!is_null($this->container['nextMarker']) && !preg_match("/^[A-Za-z0-9+\/=\\-_]+$/", $this->container['nextMarker'])) {
                $invalidProperties[] = "invalid value for 'nextMarker', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_]+$/.";
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
    * Gets nextMarker
    *  如果存在，则表示还有后续的条目未显示在当前返回体中。请使用该值作为下一次请求的分页标记参数以获得下一页信息。请反复调用该接口直至该字段不存在。
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
    * @param string|null $nextMarker 如果存在，则表示还有后续的条目未显示在当前返回体中。请使用该值作为下一次请求的分页标记参数以获得下一页信息。请反复调用该接口直至该字段不存在。
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
    *  本页返回条目数量。
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
    * @param int $currentCount 本页返回条目数量。
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

