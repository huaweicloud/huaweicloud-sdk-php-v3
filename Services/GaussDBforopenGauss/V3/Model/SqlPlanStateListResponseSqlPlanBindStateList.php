<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlPlanStateListResponseSqlPlanBindStateList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlPlanStateListResponse_sql_plan_bind_state_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * outline  **参数解释**: 当前计划的概览。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * cost  **参数解释**: SQL执行计划的开销。 **取值范围**: 不涉及。
    * status  **参数解释**: 绑定状态。 **取值范围**: - bind：绑定。 - drop：解绑。
    * sqlHash  **参数解释**: SQL文本的哈希值。 **取值范围**: 不涉及。
    * planId  **参数解释**: SQL执行计划ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'outline' => 'string',
            'cost' => 'string',
            'status' => 'string',
            'sqlHash' => 'string',
            'planId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * outline  **参数解释**: 当前计划的概览。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * cost  **参数解释**: SQL执行计划的开销。 **取值范围**: 不涉及。
    * status  **参数解释**: 绑定状态。 **取值范围**: - bind：绑定。 - drop：解绑。
    * sqlHash  **参数解释**: SQL文本的哈希值。 **取值范围**: 不涉及。
    * planId  **参数解释**: SQL执行计划ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'outline' => null,
        'cost' => null,
        'status' => null,
        'sqlHash' => null,
        'planId' => null
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
    * outline  **参数解释**: 当前计划的概览。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * cost  **参数解释**: SQL执行计划的开销。 **取值范围**: 不涉及。
    * status  **参数解释**: 绑定状态。 **取值范围**: - bind：绑定。 - drop：解绑。
    * sqlHash  **参数解释**: SQL文本的哈希值。 **取值范围**: 不涉及。
    * planId  **参数解释**: SQL执行计划ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'outline' => 'outline',
            'cost' => 'cost',
            'status' => 'status',
            'sqlHash' => 'sql_hash',
            'planId' => 'plan_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * outline  **参数解释**: 当前计划的概览。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * cost  **参数解释**: SQL执行计划的开销。 **取值范围**: 不涉及。
    * status  **参数解释**: 绑定状态。 **取值范围**: - bind：绑定。 - drop：解绑。
    * sqlHash  **参数解释**: SQL文本的哈希值。 **取值范围**: 不涉及。
    * planId  **参数解释**: SQL执行计划ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'outline' => 'setOutline',
            'cost' => 'setCost',
            'status' => 'setStatus',
            'sqlHash' => 'setSqlHash',
            'planId' => 'setPlanId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * outline  **参数解释**: 当前计划的概览。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * cost  **参数解释**: SQL执行计划的开销。 **取值范围**: 不涉及。
    * status  **参数解释**: 绑定状态。 **取值范围**: - bind：绑定。 - drop：解绑。
    * sqlHash  **参数解释**: SQL文本的哈希值。 **取值范围**: 不涉及。
    * planId  **参数解释**: SQL执行计划ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'outline' => 'getOutline',
            'cost' => 'getCost',
            'status' => 'getStatus',
            'sqlHash' => 'getSqlHash',
            'planId' => 'getPlanId'
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
        $this->container['outline'] = isset($data['outline']) ? $data['outline'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sqlHash'] = isset($data['sqlHash']) ? $data['sqlHash'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
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
    * Gets outline
    *  **参数解释**: 当前计划的概览。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getOutline()
    {
        return $this->container['outline'];
    }

    /**
    * Sets outline
    *
    * @param string|null $outline **参数解释**: 当前计划的概览。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setOutline($outline)
    {
        $this->container['outline'] = $outline;
        return $this;
    }

    /**
    * Gets cost
    *  **参数解释**: SQL执行计划的开销。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
    * Sets cost
    *
    * @param string|null $cost **参数解释**: SQL执行计划的开销。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 绑定状态。 **取值范围**: - bind：绑定。 - drop：解绑。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**: 绑定状态。 **取值范围**: - bind：绑定。 - drop：解绑。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sqlHash
    *  **参数解释**: SQL文本的哈希值。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlHash()
    {
        return $this->container['sqlHash'];
    }

    /**
    * Sets sqlHash
    *
    * @param string|null $sqlHash **参数解释**: SQL文本的哈希值。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlHash($sqlHash)
    {
        $this->container['sqlHash'] = $sqlHash;
        return $this;
    }

    /**
    * Gets planId
    *  **参数解释**: SQL执行计划ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId **参数解释**: SQL执行计划ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
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

