<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlLimitTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlLimitTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskScope  **参数解释**: 限流任务范围。 **约束限制**: 不涉及。 **取值范围**: 目前支持SQL、SESSION。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: 支持SQL_ID、SQL_TYPE、SESSION_ACTIVE_MAX_COUNT类型。 **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~19字符，且只能包含大小写字母、数字和_。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~100字符，只能包含大小写字母、数字、-、_和$。 **默认取值**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围**: 0 - 10000 **默认取值**: 0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不涉及。 **取值范围**: 不能为负数，最小值为1，最大值为100。 **默认取值**: 10
    * sqlId  **参数解释**: 限流任务SQL_ID。 **约束限制**: 不涉及。 **取值范围**: 1 到 19 位的正整数（首位不为 0）。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 限流任务NodeID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskScope' => 'string',
            'limitType' => 'string',
            'limitTypeValue' => 'string',
            'taskName' => 'string',
            'ruleName' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sqlId' => 'string',
            'nodeIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskScope  **参数解释**: 限流任务范围。 **约束限制**: 不涉及。 **取值范围**: 目前支持SQL、SESSION。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: 支持SQL_ID、SQL_TYPE、SESSION_ACTIVE_MAX_COUNT类型。 **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~19字符，且只能包含大小写字母、数字和_。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~100字符，只能包含大小写字母、数字、-、_和$。 **默认取值**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围**: 0 - 10000 **默认取值**: 0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不涉及。 **取值范围**: 不能为负数，最小值为1，最大值为100。 **默认取值**: 10
    * sqlId  **参数解释**: 限流任务SQL_ID。 **约束限制**: 不涉及。 **取值范围**: 1 到 19 位的正整数（首位不为 0）。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 限流任务NodeID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskScope' => null,
        'limitType' => null,
        'limitTypeValue' => null,
        'taskName' => null,
        'ruleName' => null,
        'offset' => null,
        'limit' => null,
        'sqlId' => null,
        'nodeIds' => null
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
    * taskScope  **参数解释**: 限流任务范围。 **约束限制**: 不涉及。 **取值范围**: 目前支持SQL、SESSION。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: 支持SQL_ID、SQL_TYPE、SESSION_ACTIVE_MAX_COUNT类型。 **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~19字符，且只能包含大小写字母、数字和_。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~100字符，只能包含大小写字母、数字、-、_和$。 **默认取值**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围**: 0 - 10000 **默认取值**: 0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不涉及。 **取值范围**: 不能为负数，最小值为1，最大值为100。 **默认取值**: 10
    * sqlId  **参数解释**: 限流任务SQL_ID。 **约束限制**: 不涉及。 **取值范围**: 1 到 19 位的正整数（首位不为 0）。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 限流任务NodeID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskScope' => 'task_scope',
            'limitType' => 'limit_type',
            'limitTypeValue' => 'limit_type_value',
            'taskName' => 'task_name',
            'ruleName' => 'rule_name',
            'offset' => 'offset',
            'limit' => 'limit',
            'sqlId' => 'sql_id',
            'nodeIds' => 'node_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskScope  **参数解释**: 限流任务范围。 **约束限制**: 不涉及。 **取值范围**: 目前支持SQL、SESSION。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: 支持SQL_ID、SQL_TYPE、SESSION_ACTIVE_MAX_COUNT类型。 **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~19字符，且只能包含大小写字母、数字和_。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~100字符，只能包含大小写字母、数字、-、_和$。 **默认取值**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围**: 0 - 10000 **默认取值**: 0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不涉及。 **取值范围**: 不能为负数，最小值为1，最大值为100。 **默认取值**: 10
    * sqlId  **参数解释**: 限流任务SQL_ID。 **约束限制**: 不涉及。 **取值范围**: 1 到 19 位的正整数（首位不为 0）。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 限流任务NodeID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskScope' => 'setTaskScope',
            'limitType' => 'setLimitType',
            'limitTypeValue' => 'setLimitTypeValue',
            'taskName' => 'setTaskName',
            'ruleName' => 'setRuleName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sqlId' => 'setSqlId',
            'nodeIds' => 'setNodeIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskScope  **参数解释**: 限流任务范围。 **约束限制**: 不涉及。 **取值范围**: 目前支持SQL、SESSION。 **默认取值**: 不涉及。
    * limitType  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: 支持SQL_ID、SQL_TYPE、SESSION_ACTIVE_MAX_COUNT类型。 **默认取值**: 不涉及。
    * limitTypeValue  **参数解释**: 限流类型值，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~19字符，且只能包含大小写字母、数字和_。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~100字符，只能包含大小写字母、数字、-、_和$。 **默认取值**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围**: 0 - 10000 **默认取值**: 0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不涉及。 **取值范围**: 不能为负数，最小值为1，最大值为100。 **默认取值**: 10
    * sqlId  **参数解释**: 限流任务SQL_ID。 **约束限制**: 不涉及。 **取值范围**: 1 到 19 位的正整数（首位不为 0）。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 限流任务NodeID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskScope' => 'getTaskScope',
            'limitType' => 'getLimitType',
            'limitTypeValue' => 'getLimitTypeValue',
            'taskName' => 'getTaskName',
            'ruleName' => 'getRuleName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sqlId' => 'getSqlId',
            'nodeIds' => 'getNodeIds'
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
        $this->container['taskScope'] = isset($data['taskScope']) ? $data['taskScope'] : null;
        $this->container['limitType'] = isset($data['limitType']) ? $data['limitType'] : null;
        $this->container['limitTypeValue'] = isset($data['limitTypeValue']) ? $data['limitTypeValue'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
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
    * Gets taskScope
    *  **参数解释**: 限流任务范围。 **约束限制**: 不涉及。 **取值范围**: 目前支持SQL、SESSION。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getTaskScope()
    {
        return $this->container['taskScope'];
    }

    /**
    * Sets taskScope
    *
    * @param string|null $taskScope **参数解释**: 限流任务范围。 **约束限制**: 不涉及。 **取值范围**: 目前支持SQL、SESSION。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTaskScope($taskScope)
    {
        $this->container['taskScope'] = $taskScope;
        return $this;
    }

    /**
    * Gets limitType
    *  **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: 支持SQL_ID、SQL_TYPE、SESSION_ACTIVE_MAX_COUNT类型。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getLimitType()
    {
        return $this->container['limitType'];
    }

    /**
    * Sets limitType
    *
    * @param string|null $limitType **参数解释**: 限流类型。 **约束限制**: 不涉及。 **取值范围**: 支持SQL_ID、SQL_TYPE、SESSION_ACTIVE_MAX_COUNT类型。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setLimitType($limitType)
    {
        $this->container['limitType'] = $limitType;
        return $this;
    }

    /**
    * Gets limitTypeValue
    *  **参数解释**: 限流类型值，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~19字符，且只能包含大小写字母、数字和_。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getLimitTypeValue()
    {
        return $this->container['limitTypeValue'];
    }

    /**
    * Sets limitTypeValue
    *
    * @param string|null $limitTypeValue **参数解释**: 限流类型值，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~19字符，且只能包含大小写字母、数字和_。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setLimitTypeValue($limitTypeValue)
    {
        $this->container['limitTypeValue'] = $limitTypeValue;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**: 限流任务名，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~100字符，只能包含大小写字母、数字、-、_和$。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**: 限流任务名，支持模糊匹配。 **约束限制**: 不涉及。 **取值范围**: 长度为1~100字符，只能包含大小写字母、数字、-、_和$。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets ruleName
    *  **参数解释**: 规则名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName **参数解释**: 规则名。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围**: 0 - 10000 **默认取值**: 0（偏移0条数据，表示从第一条数据开始查询）。
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
    * @param int|null $offset **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 不涉及。 **取值范围**: 0 - 10000 **默认取值**: 0（偏移0条数据，表示从第一条数据开始查询）。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 查询记录数。 **约束限制**: 不涉及。 **取值范围**: 不能为负数，最小值为1，最大值为100。 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 查询记录数。 **约束限制**: 不涉及。 **取值范围**: 不能为负数，最小值为1，最大值为100。 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: 限流任务SQL_ID。 **约束限制**: 不涉及。 **取值范围**: 1 到 19 位的正整数（首位不为 0）。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string|null $sqlId **参数解释**: 限流任务SQL_ID。 **约束限制**: 不涉及。 **取值范围**: 1 到 19 位的正整数（首位不为 0）。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets nodeIds
    *  **参数解释**: 限流任务NodeID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string[]|null
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[]|null $nodeIds **参数解释**: 限流任务NodeID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
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

