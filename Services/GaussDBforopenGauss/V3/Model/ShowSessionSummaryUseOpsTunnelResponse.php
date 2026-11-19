<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSessionSummaryUseOpsTunnelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSessionSummaryUseOpsTunnelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activeCount  **参数解释**: 活跃会话数量。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 会话总数量。 **取值范围**: 不涉及。
    * maxQueryTimeCost  **参数解释**: 最大SQL执行时间。单位：秒。 **取值范围**: 不涉及。
    * maxTransactionTimeCost  **参数解释**: 最大事务执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activeCount' => 'int',
            'totalCount' => 'int',
            'maxQueryTimeCost' => 'int',
            'maxTransactionTimeCost' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activeCount  **参数解释**: 活跃会话数量。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 会话总数量。 **取值范围**: 不涉及。
    * maxQueryTimeCost  **参数解释**: 最大SQL执行时间。单位：秒。 **取值范围**: 不涉及。
    * maxTransactionTimeCost  **参数解释**: 最大事务执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activeCount' => null,
        'totalCount' => null,
        'maxQueryTimeCost' => null,
        'maxTransactionTimeCost' => null
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
    * activeCount  **参数解释**: 活跃会话数量。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 会话总数量。 **取值范围**: 不涉及。
    * maxQueryTimeCost  **参数解释**: 最大SQL执行时间。单位：秒。 **取值范围**: 不涉及。
    * maxTransactionTimeCost  **参数解释**: 最大事务执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activeCount' => 'active_count',
            'totalCount' => 'total_count',
            'maxQueryTimeCost' => 'max_query_time_cost',
            'maxTransactionTimeCost' => 'max_transaction_time_cost'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activeCount  **参数解释**: 活跃会话数量。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 会话总数量。 **取值范围**: 不涉及。
    * maxQueryTimeCost  **参数解释**: 最大SQL执行时间。单位：秒。 **取值范围**: 不涉及。
    * maxTransactionTimeCost  **参数解释**: 最大事务执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'activeCount' => 'setActiveCount',
            'totalCount' => 'setTotalCount',
            'maxQueryTimeCost' => 'setMaxQueryTimeCost',
            'maxTransactionTimeCost' => 'setMaxTransactionTimeCost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activeCount  **参数解释**: 活跃会话数量。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 会话总数量。 **取值范围**: 不涉及。
    * maxQueryTimeCost  **参数解释**: 最大SQL执行时间。单位：秒。 **取值范围**: 不涉及。
    * maxTransactionTimeCost  **参数解释**: 最大事务执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'activeCount' => 'getActiveCount',
            'totalCount' => 'getTotalCount',
            'maxQueryTimeCost' => 'getMaxQueryTimeCost',
            'maxTransactionTimeCost' => 'getMaxTransactionTimeCost'
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
        $this->container['activeCount'] = isset($data['activeCount']) ? $data['activeCount'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['maxQueryTimeCost'] = isset($data['maxQueryTimeCost']) ? $data['maxQueryTimeCost'] : null;
        $this->container['maxTransactionTimeCost'] = isset($data['maxTransactionTimeCost']) ? $data['maxTransactionTimeCost'] : null;
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
    * Gets activeCount
    *  **参数解释**: 活跃会话数量。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getActiveCount()
    {
        return $this->container['activeCount'];
    }

    /**
    * Sets activeCount
    *
    * @param int|null $activeCount **参数解释**: 活跃会话数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setActiveCount($activeCount)
    {
        $this->container['activeCount'] = $activeCount;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**: 会话总数量。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**: 会话总数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets maxQueryTimeCost
    *  **参数解释**: 最大SQL执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getMaxQueryTimeCost()
    {
        return $this->container['maxQueryTimeCost'];
    }

    /**
    * Sets maxQueryTimeCost
    *
    * @param int|null $maxQueryTimeCost **参数解释**: 最大SQL执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMaxQueryTimeCost($maxQueryTimeCost)
    {
        $this->container['maxQueryTimeCost'] = $maxQueryTimeCost;
        return $this;
    }

    /**
    * Gets maxTransactionTimeCost
    *  **参数解释**: 最大事务执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getMaxTransactionTimeCost()
    {
        return $this->container['maxTransactionTimeCost'];
    }

    /**
    * Sets maxTransactionTimeCost
    *
    * @param int|null $maxTransactionTimeCost **参数解释**: 最大事务执行时间。单位：秒。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMaxTransactionTimeCost($maxTransactionTimeCost)
    {
        $this->container['maxTransactionTimeCost'] = $maxTransactionTimeCost;
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

