<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

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
    * currentCount  当前页中的项数。
    * nextMarker  如果存在更多可用的输出，那么该值表示可用输出比当前响应中包含的更多。在后续调用此操作时，您可以在标记请求参数中使用此值，以获取输出的下一部分。您应该重复这个过程，直到next_marker返回为null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentCount' => 'int',
            'nextMarker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentCount  当前页中的项数。
    * nextMarker  如果存在更多可用的输出，那么该值表示可用输出比当前响应中包含的更多。在后续调用此操作时，您可以在标记请求参数中使用此值，以获取输出的下一部分。您应该重复这个过程，直到next_marker返回为null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentCount' => 'int32',
        'nextMarker' => null
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
    * currentCount  当前页中的项数。
    * nextMarker  如果存在更多可用的输出，那么该值表示可用输出比当前响应中包含的更多。在后续调用此操作时，您可以在标记请求参数中使用此值，以获取输出的下一部分。您应该重复这个过程，直到next_marker返回为null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentCount' => 'current_count',
            'nextMarker' => 'next_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentCount  当前页中的项数。
    * nextMarker  如果存在更多可用的输出，那么该值表示可用输出比当前响应中包含的更多。在后续调用此操作时，您可以在标记请求参数中使用此值，以获取输出的下一部分。您应该重复这个过程，直到next_marker返回为null。
    *
    * @var string[]
    */
    protected static $setters = [
            'currentCount' => 'setCurrentCount',
            'nextMarker' => 'setNextMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentCount  当前页中的项数。
    * nextMarker  如果存在更多可用的输出，那么该值表示可用输出比当前响应中包含的更多。在后续调用此操作时，您可以在标记请求参数中使用此值，以获取输出的下一部分。您应该重复这个过程，直到next_marker返回为null。
    *
    * @var string[]
    */
    protected static $getters = [
            'currentCount' => 'getCurrentCount',
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
        $this->container['currentCount'] = isset($data['currentCount']) ? $data['currentCount'] : null;
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
        if ($this->container['currentCount'] === null) {
            $invalidProperties[] = "'currentCount' can't be null";
        }
            if (!is_null($this->container['nextMarker']) && !preg_match("/^[A-Za-z0-9+\/=\\-_]+$/", $this->container['nextMarker'])) {
                $invalidProperties[] = "invalid value for 'nextMarker', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_]+$/.";
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
    * Gets currentCount
    *  当前页中的项数。
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
    * @param int $currentCount 当前页中的项数。
    *
    * @return $this
    */
    public function setCurrentCount($currentCount)
    {
        $this->container['currentCount'] = $currentCount;
        return $this;
    }

    /**
    * Gets nextMarker
    *  如果存在更多可用的输出，那么该值表示可用输出比当前响应中包含的更多。在后续调用此操作时，您可以在标记请求参数中使用此值，以获取输出的下一部分。您应该重复这个过程，直到next_marker返回为null。
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
    * @param string|null $nextMarker 如果存在更多可用的输出，那么该值表示可用输出比当前响应中包含的更多。在后续调用此操作时，您可以在标记请求参数中使用此值，以获取输出的下一部分。您应该重复这个过程，直到next_marker返回为null。
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

