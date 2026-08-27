<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TxnProgressRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TxnProgressRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**： 指定查询的事务动作类型。  **约束限制**：  不涉及。 **取值范围**：  rollback：查询事务的回滚进度。  **默认取值**：   rollback。
    * transactionIds  **参数解释**：   事务唯一标识列表。   - 列表为空/不传：将执行全量查询，并根据limit和offset分页参数返回当前所有处于执行中的事务信息。   - 列表不为空：将精确匹配并返回transaction_ids中指定的事务信息，此时分页参数（limit/offset）无效。 **约束限制**：   单次查询最多支持100个事务ID。 **取值范围**：   符合事务ID格式的字符串列表。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'transactionIds' => 'string[]',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**： 指定查询的事务动作类型。  **约束限制**：  不涉及。 **取值范围**：  rollback：查询事务的回滚进度。  **默认取值**：   rollback。
    * transactionIds  **参数解释**：   事务唯一标识列表。   - 列表为空/不传：将执行全量查询，并根据limit和offset分页参数返回当前所有处于执行中的事务信息。   - 列表不为空：将精确匹配并返回transaction_ids中指定的事务信息，此时分页参数（limit/offset）无效。 **约束限制**：   单次查询最多支持100个事务ID。 **取值范围**：   符合事务ID格式的字符串列表。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'transactionIds' => null,
        'limit' => null,
        'offset' => null
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
    * action  **参数解释**： 指定查询的事务动作类型。  **约束限制**：  不涉及。 **取值范围**：  rollback：查询事务的回滚进度。  **默认取值**：   rollback。
    * transactionIds  **参数解释**：   事务唯一标识列表。   - 列表为空/不传：将执行全量查询，并根据limit和offset分页参数返回当前所有处于执行中的事务信息。   - 列表不为空：将精确匹配并返回transaction_ids中指定的事务信息，此时分页参数（limit/offset）无效。 **约束限制**：   单次查询最多支持100个事务ID。 **取值范围**：   符合事务ID格式的字符串列表。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'transactionIds' => 'transaction_ids',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**： 指定查询的事务动作类型。  **约束限制**：  不涉及。 **取值范围**：  rollback：查询事务的回滚进度。  **默认取值**：   rollback。
    * transactionIds  **参数解释**：   事务唯一标识列表。   - 列表为空/不传：将执行全量查询，并根据limit和offset分页参数返回当前所有处于执行中的事务信息。   - 列表不为空：将精确匹配并返回transaction_ids中指定的事务信息，此时分页参数（limit/offset）无效。 **约束限制**：   单次查询最多支持100个事务ID。 **取值范围**：   符合事务ID格式的字符串列表。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'transactionIds' => 'setTransactionIds',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**： 指定查询的事务动作类型。  **约束限制**：  不涉及。 **取值范围**：  rollback：查询事务的回滚进度。  **默认取值**：   rollback。
    * transactionIds  **参数解释**：   事务唯一标识列表。   - 列表为空/不传：将执行全量查询，并根据limit和offset分页参数返回当前所有处于执行中的事务信息。   - 列表不为空：将精确匹配并返回transaction_ids中指定的事务信息，此时分页参数（limit/offset）无效。 **约束限制**：   单次查询最多支持100个事务ID。 **取值范围**：   符合事务ID格式的字符串列表。
    * limit  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    * offset  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'transactionIds' => 'getTransactionIds',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    const ACTION_ROLLBACK = 'rollback';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ROLLBACK,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['transactionIds'] = isset($data['transactionIds']) ? $data['transactionIds'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets action
    *  **参数解释**： 指定查询的事务动作类型。  **约束限制**：  不涉及。 **取值范围**：  rollback：查询事务的回滚进度。  **默认取值**：   rollback。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**： 指定查询的事务动作类型。  **约束限制**：  不涉及。 **取值范围**：  rollback：查询事务的回滚进度。  **默认取值**：   rollback。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets transactionIds
    *  **参数解释**：   事务唯一标识列表。   - 列表为空/不传：将执行全量查询，并根据limit和offset分页参数返回当前所有处于执行中的事务信息。   - 列表不为空：将精确匹配并返回transaction_ids中指定的事务信息，此时分页参数（limit/offset）无效。 **约束限制**：   单次查询最多支持100个事务ID。 **取值范围**：   符合事务ID格式的字符串列表。
    *
    * @return string[]|null
    */
    public function getTransactionIds()
    {
        return $this->container['transactionIds'];
    }

    /**
    * Sets transactionIds
    *
    * @param string[]|null $transactionIds **参数解释**：   事务唯一标识列表。   - 列表为空/不传：将执行全量查询，并根据limit和offset分页参数返回当前所有处于执行中的事务信息。   - 列表不为空：将精确匹配并返回transaction_ids中指定的事务信息，此时分页参数（limit/offset）无效。 **约束限制**：   单次查询最多支持100个事务ID。 **取值范围**：   符合事务ID格式的字符串列表。
    *
    * @return $this
    */
    public function setTransactionIds($transactionIds)
    {
        $this->container['transactionIds'] = $transactionIds;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：  查询记录数。  **约束限制**：  必须为整数，不能为负数。  **取值范围**：  1-100。  **默认取值**：  100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**：    索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。    **约束限制**：    必须为整数，不能为负数。    **取值范围**：    ≥0。  **默认取值**：    0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

