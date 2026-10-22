<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBotMRuleDefenseStrategyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBotMRuleDefenseStrategyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * low  low
    * medium  medium
    * high  high
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'low' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel',
            'medium' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel',
            'high' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * low  low
    * medium  medium
    * high  high
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'low' => null,
        'medium' => null,
        'high' => null
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
    * low  low
    * medium  medium
    * high  high
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'low' => 'low',
            'medium' => 'medium',
            'high' => 'high'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * low  low
    * medium  medium
    * high  high
    *
    * @var string[]
    */
    protected static $setters = [
            'low' => 'setLow',
            'medium' => 'setMedium',
            'high' => 'setHigh'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * low  low
    * medium  medium
    * high  high
    *
    * @var string[]
    */
    protected static $getters = [
            'low' => 'getLow',
            'medium' => 'getMedium',
            'high' => 'getHigh'
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
        $this->container['low'] = isset($data['low']) ? $data['low'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['high'] = isset($data['high']) ? $data['high'] : null;
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
    * Gets low
    *  low
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel|null
    */
    public function getLow()
    {
        return $this->container['low'];
    }

    /**
    * Sets low
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel|null $low low
    *
    * @return $this
    */
    public function setLow($low)
    {
        $this->container['low'] = $low;
        return $this;
    }

    /**
    * Gets medium
    *  medium
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel|null
    */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
    * Sets medium
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel|null $medium medium
    *
    * @return $this
    */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;
        return $this;
    }

    /**
    * Gets high
    *  high
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel|null
    */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
    * Sets high
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseLevel|null $high high
    *
    * @return $this
    */
    public function setHigh($high)
    {
        $this->container['high'] = $high;
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

