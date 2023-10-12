<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiOpsRequestBodySummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiOpsRequestBody_summary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * high  检测项判定为高风险的数量。
    * medium  检测项判定为中风险的数量。
    * suggestion  检测项判定为建议的数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'high' => 'int',
            'medium' => 'int',
            'suggestion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * high  检测项判定为高风险的数量。
    * medium  检测项判定为中风险的数量。
    * suggestion  检测项判定为建议的数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'high' => null,
        'medium' => null,
        'suggestion' => null
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
    * high  检测项判定为高风险的数量。
    * medium  检测项判定为中风险的数量。
    * suggestion  检测项判定为建议的数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'high' => 'high',
            'medium' => 'medium',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * high  检测项判定为高风险的数量。
    * medium  检测项判定为中风险的数量。
    * suggestion  检测项判定为建议的数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'high' => 'setHigh',
            'medium' => 'setMedium',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * high  检测项判定为高风险的数量。
    * medium  检测项判定为中风险的数量。
    * suggestion  检测项判定为建议的数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'high' => 'getHigh',
            'medium' => 'getMedium',
            'suggestion' => 'getSuggestion'
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
        $this->container['high'] = isset($data['high']) ? $data['high'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
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
    * Gets high
    *  检测项判定为高风险的数量。
    *
    * @return int|null
    */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
    * Sets high
    *
    * @param int|null $high 检测项判定为高风险的数量。
    *
    * @return $this
    */
    public function setHigh($high)
    {
        $this->container['high'] = $high;
        return $this;
    }

    /**
    * Gets medium
    *  检测项判定为中风险的数量。
    *
    * @return int|null
    */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
    * Sets medium
    *
    * @param int|null $medium 检测项判定为中风险的数量。
    *
    * @return $this
    */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;
        return $this;
    }

    /**
    * Gets suggestion
    *  检测项判定为建议的数量。
    *
    * @return int|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param int|null $suggestion 检测项判定为建议的数量。
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

