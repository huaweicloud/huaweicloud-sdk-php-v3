<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepositoryStatisticsStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepositoryStatisticsStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canStatistics  **参数解释：** 是否能被统计。 **取值范围：** - true，可以被统计。 - false，不可被统计。
    * reason  **参数解释：** 是否能被统计。 **取值范围：** - 0，表示用户次数和仓库次数都没用完。 - 1，表示仓库次数用完。 - 2，表示用户次数用完。 - 3, 表示仓库次数和用户次数都用完
    * event  event
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canStatistics' => 'bool',
            'reason' => 'int',
            'event' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticEventsDto',
            'xTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canStatistics  **参数解释：** 是否能被统计。 **取值范围：** - true，可以被统计。 - false，不可被统计。
    * reason  **参数解释：** 是否能被统计。 **取值范围：** - 0，表示用户次数和仓库次数都没用完。 - 1，表示仓库次数用完。 - 2，表示用户次数用完。 - 3, 表示仓库次数和用户次数都用完
    * event  event
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canStatistics' => null,
        'reason' => null,
        'event' => null,
        'xTotal' => null
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
    * canStatistics  **参数解释：** 是否能被统计。 **取值范围：** - true，可以被统计。 - false，不可被统计。
    * reason  **参数解释：** 是否能被统计。 **取值范围：** - 0，表示用户次数和仓库次数都没用完。 - 1，表示仓库次数用完。 - 2，表示用户次数用完。 - 3, 表示仓库次数和用户次数都用完
    * event  event
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canStatistics' => 'can_statistics',
            'reason' => 'reason',
            'event' => 'event',
            'xTotal' => 'X-Total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canStatistics  **参数解释：** 是否能被统计。 **取值范围：** - true，可以被统计。 - false，不可被统计。
    * reason  **参数解释：** 是否能被统计。 **取值范围：** - 0，表示用户次数和仓库次数都没用完。 - 1，表示仓库次数用完。 - 2，表示用户次数用完。 - 3, 表示仓库次数和用户次数都用完
    * event  event
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $setters = [
            'canStatistics' => 'setCanStatistics',
            'reason' => 'setReason',
            'event' => 'setEvent',
            'xTotal' => 'setXTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canStatistics  **参数解释：** 是否能被统计。 **取值范围：** - true，可以被统计。 - false，不可被统计。
    * reason  **参数解释：** 是否能被统计。 **取值范围：** - 0，表示用户次数和仓库次数都没用完。 - 1，表示仓库次数用完。 - 2，表示用户次数用完。 - 3, 表示仓库次数和用户次数都用完
    * event  event
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $getters = [
            'canStatistics' => 'getCanStatistics',
            'reason' => 'getReason',
            'event' => 'getEvent',
            'xTotal' => 'getXTotal'
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
    const REASON_0 = 0;
    const REASON_1 = 1;
    const REASON_2 = 2;
    const REASON_3 = 3;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_0,
            self::REASON_1,
            self::REASON_2,
            self::REASON_3,
        ];
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
        $this->container['canStatistics'] = isset($data['canStatistics']) ? $data['canStatistics'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['xTotal'] = isset($data['xTotal']) ? $data['xTotal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getReasonAllowableValues();
                if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets canStatistics
    *  **参数解释：** 是否能被统计。 **取值范围：** - true，可以被统计。 - false，不可被统计。
    *
    * @return bool|null
    */
    public function getCanStatistics()
    {
        return $this->container['canStatistics'];
    }

    /**
    * Sets canStatistics
    *
    * @param bool|null $canStatistics **参数解释：** 是否能被统计。 **取值范围：** - true，可以被统计。 - false，不可被统计。
    *
    * @return $this
    */
    public function setCanStatistics($canStatistics)
    {
        $this->container['canStatistics'] = $canStatistics;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释：** 是否能被统计。 **取值范围：** - 0，表示用户次数和仓库次数都没用完。 - 1，表示仓库次数用完。 - 2，表示用户次数用完。 - 3, 表示仓库次数和用户次数都用完
    *
    * @return int|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param int|null $reason **参数解释：** 是否能被统计。 **取值范围：** - 0，表示用户次数和仓库次数都没用完。 - 1，表示仓库次数用完。 - 2，表示用户次数用完。 - 3, 表示仓库次数和用户次数都用完
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets event
    *  event
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticEventsDto|null
    */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
    * Sets event
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\StatisticEventsDto|null $event event
    *
    * @return $this
    */
    public function setEvent($event)
    {
        $this->container['event'] = $event;
        return $this;
    }

    /**
    * Gets xTotal
    *  xTotal
    *
    * @return string|null
    */
    public function getXTotal()
    {
        return $this->container['xTotal'];
    }

    /**
    * Sets xTotal
    *
    * @param string|null $xTotal xTotal
    *
    * @return $this
    */
    public function setXTotal($xTotal)
    {
        $this->container['xTotal'] = $xTotal;
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

