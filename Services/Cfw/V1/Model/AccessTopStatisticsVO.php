<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessTopStatisticsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessTopStatisticsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * denyAccessTopCounts  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * permitAccessTopCounts  **参数解释**： 放行数量 **取值范围**： 不涉及
    * totalAccessTopCounts  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggTime' => 'int',
            'denyAccessTopCounts' => 'int',
            'permitAccessTopCounts' => 'int',
            'totalAccessTopCounts' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * denyAccessTopCounts  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * permitAccessTopCounts  **参数解释**： 放行数量 **取值范围**： 不涉及
    * totalAccessTopCounts  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggTime' => 'int64',
        'denyAccessTopCounts' => 'int64',
        'permitAccessTopCounts' => 'int64',
        'totalAccessTopCounts' => 'int64'
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
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * denyAccessTopCounts  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * permitAccessTopCounts  **参数解释**： 放行数量 **取值范围**： 不涉及
    * totalAccessTopCounts  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggTime' => 'agg_time',
            'denyAccessTopCounts' => 'deny_access_top_counts',
            'permitAccessTopCounts' => 'permit_access_top_counts',
            'totalAccessTopCounts' => 'total_access_top_counts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * denyAccessTopCounts  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * permitAccessTopCounts  **参数解释**： 放行数量 **取值范围**： 不涉及
    * totalAccessTopCounts  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'aggTime' => 'setAggTime',
            'denyAccessTopCounts' => 'setDenyAccessTopCounts',
            'permitAccessTopCounts' => 'setPermitAccessTopCounts',
            'totalAccessTopCounts' => 'setTotalAccessTopCounts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * denyAccessTopCounts  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * permitAccessTopCounts  **参数解释**： 放行数量 **取值范围**： 不涉及
    * totalAccessTopCounts  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'aggTime' => 'getAggTime',
            'denyAccessTopCounts' => 'getDenyAccessTopCounts',
            'permitAccessTopCounts' => 'getPermitAccessTopCounts',
            'totalAccessTopCounts' => 'getTotalAccessTopCounts'
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
        $this->container['aggTime'] = isset($data['aggTime']) ? $data['aggTime'] : null;
        $this->container['denyAccessTopCounts'] = isset($data['denyAccessTopCounts']) ? $data['denyAccessTopCounts'] : null;
        $this->container['permitAccessTopCounts'] = isset($data['permitAccessTopCounts']) ? $data['permitAccessTopCounts'] : null;
        $this->container['totalAccessTopCounts'] = isset($data['totalAccessTopCounts']) ? $data['totalAccessTopCounts'] : null;
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
    * Gets aggTime
    *  **参数解释**： 聚合时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAggTime()
    {
        return $this->container['aggTime'];
    }

    /**
    * Sets aggTime
    *
    * @param int|null $aggTime **参数解释**： 聚合时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAggTime($aggTime)
    {
        $this->container['aggTime'] = $aggTime;
        return $this;
    }

    /**
    * Gets denyAccessTopCounts
    *  **参数解释**： 阻断数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDenyAccessTopCounts()
    {
        return $this->container['denyAccessTopCounts'];
    }

    /**
    * Sets denyAccessTopCounts
    *
    * @param int|null $denyAccessTopCounts **参数解释**： 阻断数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDenyAccessTopCounts($denyAccessTopCounts)
    {
        $this->container['denyAccessTopCounts'] = $denyAccessTopCounts;
        return $this;
    }

    /**
    * Gets permitAccessTopCounts
    *  **参数解释**： 放行数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPermitAccessTopCounts()
    {
        return $this->container['permitAccessTopCounts'];
    }

    /**
    * Sets permitAccessTopCounts
    *
    * @param int|null $permitAccessTopCounts **参数解释**： 放行数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPermitAccessTopCounts($permitAccessTopCounts)
    {
        $this->container['permitAccessTopCounts'] = $permitAccessTopCounts;
        return $this;
    }

    /**
    * Gets totalAccessTopCounts
    *  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getTotalAccessTopCounts()
    {
        return $this->container['totalAccessTopCounts'];
    }

    /**
    * Sets totalAccessTopCounts
    *
    * @param int|null $totalAccessTopCounts **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTotalAccessTopCounts($totalAccessTopCounts)
    {
        $this->container['totalAccessTopCounts'] = $totalAccessTopCounts;
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

