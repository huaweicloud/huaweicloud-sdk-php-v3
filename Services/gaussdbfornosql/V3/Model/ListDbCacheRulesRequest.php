<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDbCacheRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDbCacheRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbcacheMappingId  内存加速映射ID。
    * ruleId  内存加速规则ID。
    * ruleName  内存加速规则名称。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbSchema  源端数据库名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbTable  源端数据表名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）。 取值必须为数字，不能为负数。
    * limit  查询个数上限值。取值范围：1~100。不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbcacheMappingId' => 'string',
            'ruleId' => 'string',
            'ruleName' => 'string',
            'sourceDbSchema' => 'string',
            'sourceDbTable' => 'string',
            'offset' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbcacheMappingId  内存加速映射ID。
    * ruleId  内存加速规则ID。
    * ruleName  内存加速规则名称。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbSchema  源端数据库名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbTable  源端数据表名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）。 取值必须为数字，不能为负数。
    * limit  查询个数上限值。取值范围：1~100。不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbcacheMappingId' => null,
        'ruleId' => null,
        'ruleName' => null,
        'sourceDbSchema' => null,
        'sourceDbTable' => null,
        'offset' => null,
        'limit' => null
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
    * dbcacheMappingId  内存加速映射ID。
    * ruleId  内存加速规则ID。
    * ruleName  内存加速规则名称。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbSchema  源端数据库名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbTable  源端数据表名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）。 取值必须为数字，不能为负数。
    * limit  查询个数上限值。取值范围：1~100。不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbcacheMappingId' => 'dbcache_mapping_id',
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'sourceDbSchema' => 'source_db_schema',
            'sourceDbTable' => 'source_db_table',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbcacheMappingId  内存加速映射ID。
    * ruleId  内存加速规则ID。
    * ruleName  内存加速规则名称。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbSchema  源端数据库名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbTable  源端数据表名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）。 取值必须为数字，不能为负数。
    * limit  查询个数上限值。取值范围：1~100。不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbcacheMappingId' => 'setDbcacheMappingId',
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'sourceDbSchema' => 'setSourceDbSchema',
            'sourceDbTable' => 'setSourceDbTable',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbcacheMappingId  内存加速映射ID。
    * ruleId  内存加速规则ID。
    * ruleName  内存加速规则名称。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbSchema  源端数据库名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * sourceDbTable  源端数据表名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    * offset  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）。 取值必须为数字，不能为负数。
    * limit  查询个数上限值。取值范围：1~100。不传该参数时，默认查询前100条信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbcacheMappingId' => 'getDbcacheMappingId',
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'sourceDbSchema' => 'getSourceDbSchema',
            'sourceDbTable' => 'getSourceDbTable',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['dbcacheMappingId'] = isset($data['dbcacheMappingId']) ? $data['dbcacheMappingId'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['sourceDbSchema'] = isset($data['sourceDbSchema']) ? $data['sourceDbSchema'] : null;
        $this->container['sourceDbTable'] = isset($data['sourceDbTable']) ? $data['sourceDbTable'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbcacheMappingId'] === null) {
            $invalidProperties[] = "'dbcacheMappingId' can't be null";
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
    * Gets dbcacheMappingId
    *  内存加速映射ID。
    *
    * @return string
    */
    public function getDbcacheMappingId()
    {
        return $this->container['dbcacheMappingId'];
    }

    /**
    * Sets dbcacheMappingId
    *
    * @param string $dbcacheMappingId 内存加速映射ID。
    *
    * @return $this
    */
    public function setDbcacheMappingId($dbcacheMappingId)
    {
        $this->container['dbcacheMappingId'] = $dbcacheMappingId;
        return $this;
    }

    /**
    * Gets ruleId
    *  内存加速规则ID。
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 内存加速规则ID。
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleName
    *  内存加速规则名称。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
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
    * @param string|null $ruleName 内存加速规则名称。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets sourceDbSchema
    *  源端数据库名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    *
    * @return string|null
    */
    public function getSourceDbSchema()
    {
        return $this->container['sourceDbSchema'];
    }

    /**
    * Sets sourceDbSchema
    *
    * @param string|null $sourceDbSchema 源端数据库名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    *
    * @return $this
    */
    public function setSourceDbSchema($sourceDbSchema)
    {
        $this->container['sourceDbSchema'] = $sourceDbSchema;
        return $this;
    }

    /**
    * Gets sourceDbTable
    *  源端数据表名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    *
    * @return string|null
    */
    public function getSourceDbTable()
    {
        return $this->container['sourceDbTable'];
    }

    /**
    * Sets sourceDbTable
    *
    * @param string|null $sourceDbTable 源端数据表名。名称以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的名称精确匹配查询。
    *
    * @return $this
    */
    public function setSourceDbTable($sourceDbTable)
    {
        $this->container['sourceDbTable'] = $sourceDbTable;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）。 取值必须为数字，不能为负数。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 索引位置，偏移量。 从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询）。 取值必须为数字，不能为负数。
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
    *  查询个数上限值。取值范围：1~100。不传该参数时，默认查询前100条信息。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 查询个数上限值。取值范围：1~100。不传该参数时，默认查询前100条信息。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

