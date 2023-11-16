<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBlockStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBlockStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalUnblockingTimes  总解封次数
    * manualUnblockingTimes  人工解封次数
    * automaticUnblockingTimes  自动解封次数
    * currentBlockedIpNumbers  当前封堵Ip数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalUnblockingTimes' => 'int',
            'manualUnblockingTimes' => 'int',
            'automaticUnblockingTimes' => 'int',
            'currentBlockedIpNumbers' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalUnblockingTimes  总解封次数
    * manualUnblockingTimes  人工解封次数
    * automaticUnblockingTimes  自动解封次数
    * currentBlockedIpNumbers  当前封堵Ip数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalUnblockingTimes' => 'int32',
        'manualUnblockingTimes' => 'int32',
        'automaticUnblockingTimes' => 'int32',
        'currentBlockedIpNumbers' => 'int32'
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
    * totalUnblockingTimes  总解封次数
    * manualUnblockingTimes  人工解封次数
    * automaticUnblockingTimes  自动解封次数
    * currentBlockedIpNumbers  当前封堵Ip数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalUnblockingTimes' => 'total_unblocking_times',
            'manualUnblockingTimes' => 'manual_unblocking_times',
            'automaticUnblockingTimes' => 'automatic_unblocking_times',
            'currentBlockedIpNumbers' => 'current_blocked_ip_numbers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalUnblockingTimes  总解封次数
    * manualUnblockingTimes  人工解封次数
    * automaticUnblockingTimes  自动解封次数
    * currentBlockedIpNumbers  当前封堵Ip数
    *
    * @var string[]
    */
    protected static $setters = [
            'totalUnblockingTimes' => 'setTotalUnblockingTimes',
            'manualUnblockingTimes' => 'setManualUnblockingTimes',
            'automaticUnblockingTimes' => 'setAutomaticUnblockingTimes',
            'currentBlockedIpNumbers' => 'setCurrentBlockedIpNumbers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalUnblockingTimes  总解封次数
    * manualUnblockingTimes  人工解封次数
    * automaticUnblockingTimes  自动解封次数
    * currentBlockedIpNumbers  当前封堵Ip数
    *
    * @var string[]
    */
    protected static $getters = [
            'totalUnblockingTimes' => 'getTotalUnblockingTimes',
            'manualUnblockingTimes' => 'getManualUnblockingTimes',
            'automaticUnblockingTimes' => 'getAutomaticUnblockingTimes',
            'currentBlockedIpNumbers' => 'getCurrentBlockedIpNumbers'
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
        $this->container['totalUnblockingTimes'] = isset($data['totalUnblockingTimes']) ? $data['totalUnblockingTimes'] : null;
        $this->container['manualUnblockingTimes'] = isset($data['manualUnblockingTimes']) ? $data['manualUnblockingTimes'] : null;
        $this->container['automaticUnblockingTimes'] = isset($data['automaticUnblockingTimes']) ? $data['automaticUnblockingTimes'] : null;
        $this->container['currentBlockedIpNumbers'] = isset($data['currentBlockedIpNumbers']) ? $data['currentBlockedIpNumbers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalUnblockingTimes']) && ($this->container['totalUnblockingTimes'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'totalUnblockingTimes', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['totalUnblockingTimes']) && ($this->container['totalUnblockingTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalUnblockingTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['manualUnblockingTimes']) && ($this->container['manualUnblockingTimes'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'manualUnblockingTimes', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['manualUnblockingTimes']) && ($this->container['manualUnblockingTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'manualUnblockingTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['automaticUnblockingTimes']) && ($this->container['automaticUnblockingTimes'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'automaticUnblockingTimes', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['automaticUnblockingTimes']) && ($this->container['automaticUnblockingTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'automaticUnblockingTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentBlockedIpNumbers']) && ($this->container['currentBlockedIpNumbers'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'currentBlockedIpNumbers', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['currentBlockedIpNumbers']) && ($this->container['currentBlockedIpNumbers'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentBlockedIpNumbers', must be bigger than or equal to 0.";
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
    * Gets totalUnblockingTimes
    *  总解封次数
    *
    * @return int|null
    */
    public function getTotalUnblockingTimes()
    {
        return $this->container['totalUnblockingTimes'];
    }

    /**
    * Sets totalUnblockingTimes
    *
    * @param int|null $totalUnblockingTimes 总解封次数
    *
    * @return $this
    */
    public function setTotalUnblockingTimes($totalUnblockingTimes)
    {
        $this->container['totalUnblockingTimes'] = $totalUnblockingTimes;
        return $this;
    }

    /**
    * Gets manualUnblockingTimes
    *  人工解封次数
    *
    * @return int|null
    */
    public function getManualUnblockingTimes()
    {
        return $this->container['manualUnblockingTimes'];
    }

    /**
    * Sets manualUnblockingTimes
    *
    * @param int|null $manualUnblockingTimes 人工解封次数
    *
    * @return $this
    */
    public function setManualUnblockingTimes($manualUnblockingTimes)
    {
        $this->container['manualUnblockingTimes'] = $manualUnblockingTimes;
        return $this;
    }

    /**
    * Gets automaticUnblockingTimes
    *  自动解封次数
    *
    * @return int|null
    */
    public function getAutomaticUnblockingTimes()
    {
        return $this->container['automaticUnblockingTimes'];
    }

    /**
    * Sets automaticUnblockingTimes
    *
    * @param int|null $automaticUnblockingTimes 自动解封次数
    *
    * @return $this
    */
    public function setAutomaticUnblockingTimes($automaticUnblockingTimes)
    {
        $this->container['automaticUnblockingTimes'] = $automaticUnblockingTimes;
        return $this;
    }

    /**
    * Gets currentBlockedIpNumbers
    *  当前封堵Ip数
    *
    * @return int|null
    */
    public function getCurrentBlockedIpNumbers()
    {
        return $this->container['currentBlockedIpNumbers'];
    }

    /**
    * Sets currentBlockedIpNumbers
    *
    * @param int|null $currentBlockedIpNumbers 当前封堵Ip数
    *
    * @return $this
    */
    public function setCurrentBlockedIpNumbers($currentBlockedIpNumbers)
    {
        $this->container['currentBlockedIpNumbers'] = $currentBlockedIpNumbers;
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

