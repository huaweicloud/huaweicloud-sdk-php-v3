<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WdrSnapshotGroupResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WdrSnapshotGroupResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  **参数解释**: 快照总记录数。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 分组开始时间。对应该分组下的第一个快照的开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 分组结束时间。对应该分组下的最后一个快照的结束时间。 **取值范围**: 不涉及。
    * snapshots  **参数解释**: 分组内快照列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'beginTime' => 'int',
            'endTime' => 'int',
            'snapshots' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WdrSnapshotRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  **参数解释**: 快照总记录数。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 分组开始时间。对应该分组下的第一个快照的开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 分组结束时间。对应该分组下的最后一个快照的结束时间。 **取值范围**: 不涉及。
    * snapshots  **参数解释**: 分组内快照列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int64',
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'snapshots' => null
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
    * totalCount  **参数解释**: 快照总记录数。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 分组开始时间。对应该分组下的第一个快照的开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 分组结束时间。对应该分组下的最后一个快照的结束时间。 **取值范围**: 不涉及。
    * snapshots  **参数解释**: 分组内快照列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'snapshots' => 'snapshots'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  **参数解释**: 快照总记录数。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 分组开始时间。对应该分组下的第一个快照的开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 分组结束时间。对应该分组下的最后一个快照的结束时间。 **取值范围**: 不涉及。
    * snapshots  **参数解释**: 分组内快照列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'snapshots' => 'setSnapshots'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  **参数解释**: 快照总记录数。 **取值范围**: 不涉及。
    * beginTime  **参数解释**: 分组开始时间。对应该分组下的第一个快照的开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 分组结束时间。对应该分组下的最后一个快照的结束时间。 **取值范围**: 不涉及。
    * snapshots  **参数解释**: 分组内快照列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'snapshots' => 'getSnapshots'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['snapshots'] = isset($data['snapshots']) ? $data['snapshots'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['totalCount'] === null) {
            $invalidProperties[] = "'totalCount' can't be null";
        }
            if (($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
            }
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['snapshots'] === null) {
            $invalidProperties[] = "'snapshots' can't be null";
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
    * Gets totalCount
    *  **参数解释**: 快照总记录数。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int $totalCount **参数解释**: 快照总记录数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**: 分组开始时间。对应该分组下的第一个快照的开始时间。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int $beginTime **参数解释**: 分组开始时间。对应该分组下的第一个快照的开始时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 分组结束时间。对应该分组下的最后一个快照的结束时间。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime **参数解释**: 分组结束时间。对应该分组下的最后一个快照的结束时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets snapshots
    *  **参数解释**: 分组内快照列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WdrSnapshotRecord[]
    */
    public function getSnapshots()
    {
        return $this->container['snapshots'];
    }

    /**
    * Sets snapshots
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WdrSnapshotRecord[] $snapshots **参数解释**: 分组内快照列表。
    *
    * @return $this
    */
    public function setSnapshots($snapshots)
    {
        $this->container['snapshots'] = $snapshots;
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

