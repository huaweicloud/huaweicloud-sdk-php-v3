<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorSpotOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorSpotOptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * longestSpotDurationHours  购买的竞价实例时长
    * largestSpotDurationCount  购买的“竞价实例时长”的个数。
    * interruptionPolicy  竞价实例中断策略。  - immediate：立即释放 - delay：延迟释放
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'longestSpotDurationHours' => 'int',
            'largestSpotDurationCount' => 'int',
            'interruptionPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * longestSpotDurationHours  购买的竞价实例时长
    * largestSpotDurationCount  购买的“竞价实例时长”的个数。
    * interruptionPolicy  竞价实例中断策略。  - immediate：立即释放 - delay：延迟释放
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'longestSpotDurationHours' => 'int32',
        'largestSpotDurationCount' => 'int32',
        'interruptionPolicy' => null
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
    * longestSpotDurationHours  购买的竞价实例时长
    * largestSpotDurationCount  购买的“竞价实例时长”的个数。
    * interruptionPolicy  竞价实例中断策略。  - immediate：立即释放 - delay：延迟释放
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'longestSpotDurationHours' => 'longest_spot_duration_hours',
            'largestSpotDurationCount' => 'largest_spot_duration_count',
            'interruptionPolicy' => 'interruption_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * longestSpotDurationHours  购买的竞价实例时长
    * largestSpotDurationCount  购买的“竞价实例时长”的个数。
    * interruptionPolicy  竞价实例中断策略。  - immediate：立即释放 - delay：延迟释放
    *
    * @var string[]
    */
    protected static $setters = [
            'longestSpotDurationHours' => 'setLongestSpotDurationHours',
            'largestSpotDurationCount' => 'setLargestSpotDurationCount',
            'interruptionPolicy' => 'setInterruptionPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * longestSpotDurationHours  购买的竞价实例时长
    * largestSpotDurationCount  购买的“竞价实例时长”的个数。
    * interruptionPolicy  竞价实例中断策略。  - immediate：立即释放 - delay：延迟释放
    *
    * @var string[]
    */
    protected static $getters = [
            'longestSpotDurationHours' => 'getLongestSpotDurationHours',
            'largestSpotDurationCount' => 'getLargestSpotDurationCount',
            'interruptionPolicy' => 'getInterruptionPolicy'
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
        $this->container['longestSpotDurationHours'] = isset($data['longestSpotDurationHours']) ? $data['longestSpotDurationHours'] : null;
        $this->container['largestSpotDurationCount'] = isset($data['largestSpotDurationCount']) ? $data['largestSpotDurationCount'] : null;
        $this->container['interruptionPolicy'] = isset($data['interruptionPolicy']) ? $data['interruptionPolicy'] : null;
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
    * Gets longestSpotDurationHours
    *  购买的竞价实例时长
    *
    * @return int|null
    */
    public function getLongestSpotDurationHours()
    {
        return $this->container['longestSpotDurationHours'];
    }

    /**
    * Sets longestSpotDurationHours
    *
    * @param int|null $longestSpotDurationHours 购买的竞价实例时长
    *
    * @return $this
    */
    public function setLongestSpotDurationHours($longestSpotDurationHours)
    {
        $this->container['longestSpotDurationHours'] = $longestSpotDurationHours;
        return $this;
    }

    /**
    * Gets largestSpotDurationCount
    *  购买的“竞价实例时长”的个数。
    *
    * @return int|null
    */
    public function getLargestSpotDurationCount()
    {
        return $this->container['largestSpotDurationCount'];
    }

    /**
    * Sets largestSpotDurationCount
    *
    * @param int|null $largestSpotDurationCount 购买的“竞价实例时长”的个数。
    *
    * @return $this
    */
    public function setLargestSpotDurationCount($largestSpotDurationCount)
    {
        $this->container['largestSpotDurationCount'] = $largestSpotDurationCount;
        return $this;
    }

    /**
    * Gets interruptionPolicy
    *  竞价实例中断策略。  - immediate：立即释放 - delay：延迟释放
    *
    * @return string|null
    */
    public function getInterruptionPolicy()
    {
        return $this->container['interruptionPolicy'];
    }

    /**
    * Sets interruptionPolicy
    *
    * @param string|null $interruptionPolicy 竞价实例中断策略。  - immediate：立即释放 - delay：延迟释放
    *
    * @return $this
    */
    public function setInterruptionPolicy($interruptionPolicy)
    {
        $this->container['interruptionPolicy'] = $interruptionPolicy;
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

