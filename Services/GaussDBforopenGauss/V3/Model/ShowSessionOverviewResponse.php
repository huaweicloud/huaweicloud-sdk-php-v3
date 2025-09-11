<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSessionOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSessionOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activeNum  **参数解释**: 实时会话的活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 实时会话的总会话数。 **取值范围**: 不涉及。
    * slowSqlNum  **参数解释**: 实时会话中的慢SQL数量。 **取值范围**: 不涉及。
    * lockNum  **参数解释**: 实时会话中的锁等会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activeNum' => 'string',
            'totalNum' => 'string',
            'slowSqlNum' => 'string',
            'lockNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activeNum  **参数解释**: 实时会话的活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 实时会话的总会话数。 **取值范围**: 不涉及。
    * slowSqlNum  **参数解释**: 实时会话中的慢SQL数量。 **取值范围**: 不涉及。
    * lockNum  **参数解释**: 实时会话中的锁等会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activeNum' => null,
        'totalNum' => null,
        'slowSqlNum' => null,
        'lockNum' => null
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
    * activeNum  **参数解释**: 实时会话的活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 实时会话的总会话数。 **取值范围**: 不涉及。
    * slowSqlNum  **参数解释**: 实时会话中的慢SQL数量。 **取值范围**: 不涉及。
    * lockNum  **参数解释**: 实时会话中的锁等会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activeNum' => 'active_num',
            'totalNum' => 'total_num',
            'slowSqlNum' => 'slow_sql_num',
            'lockNum' => 'lock_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activeNum  **参数解释**: 实时会话的活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 实时会话的总会话数。 **取值范围**: 不涉及。
    * slowSqlNum  **参数解释**: 实时会话中的慢SQL数量。 **取值范围**: 不涉及。
    * lockNum  **参数解释**: 实时会话中的锁等会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'activeNum' => 'setActiveNum',
            'totalNum' => 'setTotalNum',
            'slowSqlNum' => 'setSlowSqlNum',
            'lockNum' => 'setLockNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activeNum  **参数解释**: 实时会话的活跃会话数。 **取值范围**: 不涉及。
    * totalNum  **参数解释**: 实时会话的总会话数。 **取值范围**: 不涉及。
    * slowSqlNum  **参数解释**: 实时会话中的慢SQL数量。 **取值范围**: 不涉及。
    * lockNum  **参数解释**: 实时会话中的锁等会话数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'activeNum' => 'getActiveNum',
            'totalNum' => 'getTotalNum',
            'slowSqlNum' => 'getSlowSqlNum',
            'lockNum' => 'getLockNum'
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
        $this->container['activeNum'] = isset($data['activeNum']) ? $data['activeNum'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['slowSqlNum'] = isset($data['slowSqlNum']) ? $data['slowSqlNum'] : null;
        $this->container['lockNum'] = isset($data['lockNum']) ? $data['lockNum'] : null;
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
    * Gets activeNum
    *  **参数解释**: 实时会话的活跃会话数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getActiveNum()
    {
        return $this->container['activeNum'];
    }

    /**
    * Sets activeNum
    *
    * @param string|null $activeNum **参数解释**: 实时会话的活跃会话数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setActiveNum($activeNum)
    {
        $this->container['activeNum'] = $activeNum;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释**: 实时会话的总会话数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param string|null $totalNum **参数解释**: 实时会话的总会话数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets slowSqlNum
    *  **参数解释**: 实时会话中的慢SQL数量。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSlowSqlNum()
    {
        return $this->container['slowSqlNum'];
    }

    /**
    * Sets slowSqlNum
    *
    * @param string|null $slowSqlNum **参数解释**: 实时会话中的慢SQL数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSlowSqlNum($slowSqlNum)
    {
        $this->container['slowSqlNum'] = $slowSqlNum;
        return $this;
    }

    /**
    * Gets lockNum
    *  **参数解释**: 实时会话中的锁等会话数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getLockNum()
    {
        return $this->container['lockNum'];
    }

    /**
    * Sets lockNum
    *
    * @param string|null $lockNum **参数解释**: 实时会话中的锁等会话数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockNum($lockNum)
    {
        $this->container['lockNum'] = $lockNum;
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

