<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BotRequestTimeline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BotRequestTimeline';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datetime  **参数解释：** 时间点（如2023-10-01 00:00:00） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * normalRequestCount  **参数解释：** 该时间点的正常请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * knownBotMatchedCount  **参数解释：** 该时间点匹配已知bot的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * transparentMatchedCount  **参数解释：** 该时间点透明检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * behaviorMatchedCount  **参数解释：** 该时间点行为检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datetime' => 'int',
            'normalRequestCount' => 'int',
            'knownBotMatchedCount' => 'int',
            'transparentMatchedCount' => 'int',
            'behaviorMatchedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datetime  **参数解释：** 时间点（如2023-10-01 00:00:00） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * normalRequestCount  **参数解释：** 该时间点的正常请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * knownBotMatchedCount  **参数解释：** 该时间点匹配已知bot的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * transparentMatchedCount  **参数解释：** 该时间点透明检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * behaviorMatchedCount  **参数解释：** 该时间点行为检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datetime' => 'int64',
        'normalRequestCount' => null,
        'knownBotMatchedCount' => null,
        'transparentMatchedCount' => null,
        'behaviorMatchedCount' => null
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
    * datetime  **参数解释：** 时间点（如2023-10-01 00:00:00） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * normalRequestCount  **参数解释：** 该时间点的正常请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * knownBotMatchedCount  **参数解释：** 该时间点匹配已知bot的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * transparentMatchedCount  **参数解释：** 该时间点透明检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * behaviorMatchedCount  **参数解释：** 该时间点行为检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datetime' => 'datetime',
            'normalRequestCount' => 'normal_request_count',
            'knownBotMatchedCount' => 'known_bot_matched_count',
            'transparentMatchedCount' => 'transparent_matched_count',
            'behaviorMatchedCount' => 'behavior_matched_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datetime  **参数解释：** 时间点（如2023-10-01 00:00:00） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * normalRequestCount  **参数解释：** 该时间点的正常请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * knownBotMatchedCount  **参数解释：** 该时间点匹配已知bot的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * transparentMatchedCount  **参数解释：** 该时间点透明检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * behaviorMatchedCount  **参数解释：** 该时间点行为检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $setters = [
            'datetime' => 'setDatetime',
            'normalRequestCount' => 'setNormalRequestCount',
            'knownBotMatchedCount' => 'setKnownBotMatchedCount',
            'transparentMatchedCount' => 'setTransparentMatchedCount',
            'behaviorMatchedCount' => 'setBehaviorMatchedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datetime  **参数解释：** 时间点（如2023-10-01 00:00:00） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * normalRequestCount  **参数解释：** 该时间点的正常请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * knownBotMatchedCount  **参数解释：** 该时间点匹配已知bot的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * transparentMatchedCount  **参数解释：** 该时间点透明检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    * behaviorMatchedCount  **参数解释：** 该时间点行为检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @var string[]
    */
    protected static $getters = [
            'datetime' => 'getDatetime',
            'normalRequestCount' => 'getNormalRequestCount',
            'knownBotMatchedCount' => 'getKnownBotMatchedCount',
            'transparentMatchedCount' => 'getTransparentMatchedCount',
            'behaviorMatchedCount' => 'getBehaviorMatchedCount'
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
        $this->container['datetime'] = isset($data['datetime']) ? $data['datetime'] : null;
        $this->container['normalRequestCount'] = isset($data['normalRequestCount']) ? $data['normalRequestCount'] : null;
        $this->container['knownBotMatchedCount'] = isset($data['knownBotMatchedCount']) ? $data['knownBotMatchedCount'] : null;
        $this->container['transparentMatchedCount'] = isset($data['transparentMatchedCount']) ? $data['transparentMatchedCount'] : null;
        $this->container['behaviorMatchedCount'] = isset($data['behaviorMatchedCount']) ? $data['behaviorMatchedCount'] : null;
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
    * Gets datetime
    *  **参数解释：** 时间点（如2023-10-01 00:00:00） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
    * Sets datetime
    *
    * @param int|null $datetime **参数解释：** 时间点（如2023-10-01 00:00:00） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDatetime($datetime)
    {
        $this->container['datetime'] = $datetime;
        return $this;
    }

    /**
    * Gets normalRequestCount
    *  **参数解释：** 该时间点的正常请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getNormalRequestCount()
    {
        return $this->container['normalRequestCount'];
    }

    /**
    * Sets normalRequestCount
    *
    * @param int|null $normalRequestCount **参数解释：** 该时间点的正常请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return $this
    */
    public function setNormalRequestCount($normalRequestCount)
    {
        $this->container['normalRequestCount'] = $normalRequestCount;
        return $this;
    }

    /**
    * Gets knownBotMatchedCount
    *  **参数解释：** 该时间点匹配已知bot的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getKnownBotMatchedCount()
    {
        return $this->container['knownBotMatchedCount'];
    }

    /**
    * Sets knownBotMatchedCount
    *
    * @param int|null $knownBotMatchedCount **参数解释：** 该时间点匹配已知bot的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return $this
    */
    public function setKnownBotMatchedCount($knownBotMatchedCount)
    {
        $this->container['knownBotMatchedCount'] = $knownBotMatchedCount;
        return $this;
    }

    /**
    * Gets transparentMatchedCount
    *  **参数解释：** 该时间点透明检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getTransparentMatchedCount()
    {
        return $this->container['transparentMatchedCount'];
    }

    /**
    * Sets transparentMatchedCount
    *
    * @param int|null $transparentMatchedCount **参数解释：** 该时间点透明检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return $this
    */
    public function setTransparentMatchedCount($transparentMatchedCount)
    {
        $this->container['transparentMatchedCount'] = $transparentMatchedCount;
        return $this;
    }

    /**
    * Gets behaviorMatchedCount
    *  **参数解释：** 该时间点行为检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getBehaviorMatchedCount()
    {
        return $this->container['behaviorMatchedCount'];
    }

    /**
    * Sets behaviorMatchedCount
    *
    * @param int|null $behaviorMatchedCount **参数解释：** 该时间点行为检测的请求数量 **约束限制：** 不涉及 **取值范围：** ≥0 **默认取值：** 0
    *
    * @return $this
    */
    public function setBehaviorMatchedCount($behaviorMatchedCount)
    {
        $this->container['behaviorMatchedCount'] = $behaviorMatchedCount;
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

