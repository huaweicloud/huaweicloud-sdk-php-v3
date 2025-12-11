<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesByTagsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesByTagsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释：** 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值必须为数字，不能为负数。 **取值范围：** 不涉及。 **默认取值：** 默认取0值，表示从第一条数据开始查询。
    * limit  **参数解释：** 查询记录数。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值范围：1~100。不传该参数时，默认查询前100条实例信息。 **取值范围：** 1~100 **默认取值：** 不涉及。
    * action  **参数解释：** 操作标识。 **约束限制：** - 取值为“count”，表示仅返回总记录数，禁止返回其他字段。 - 取值为“filter”，表示根据标签过滤条件查询实例。 **取值范围：** count和filter **默认取值：** 不涉及。
    * matches  **参数解释：** 搜索字段。 **约束限制：**   - 该字段值为空，表示不按照实例名称或实例ID查询。   - 该字段值不为空， **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tags  **参数解释：** 包含标签。 **约束限制：** 最多包含10个key。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'string',
            'limit' => 'string',
            'action' => 'string',
            'matches' => '\HuaweiCloud\SDK\Dds\V3\Model\QueryMatchItem[]',
            'tags' => '\HuaweiCloud\SDK\Dds\V3\Model\QueryTagItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释：** 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值必须为数字，不能为负数。 **取值范围：** 不涉及。 **默认取值：** 默认取0值，表示从第一条数据开始查询。
    * limit  **参数解释：** 查询记录数。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值范围：1~100。不传该参数时，默认查询前100条实例信息。 **取值范围：** 1~100 **默认取值：** 不涉及。
    * action  **参数解释：** 操作标识。 **约束限制：** - 取值为“count”，表示仅返回总记录数，禁止返回其他字段。 - 取值为“filter”，表示根据标签过滤条件查询实例。 **取值范围：** count和filter **默认取值：** 不涉及。
    * matches  **参数解释：** 搜索字段。 **约束限制：**   - 该字段值为空，表示不按照实例名称或实例ID查询。   - 该字段值不为空， **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tags  **参数解释：** 包含标签。 **约束限制：** 最多包含10个key。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'action' => null,
        'matches' => null,
        'tags' => null
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
    * offset  **参数解释：** 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值必须为数字，不能为负数。 **取值范围：** 不涉及。 **默认取值：** 默认取0值，表示从第一条数据开始查询。
    * limit  **参数解释：** 查询记录数。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值范围：1~100。不传该参数时，默认查询前100条实例信息。 **取值范围：** 1~100 **默认取值：** 不涉及。
    * action  **参数解释：** 操作标识。 **约束限制：** - 取值为“count”，表示仅返回总记录数，禁止返回其他字段。 - 取值为“filter”，表示根据标签过滤条件查询实例。 **取值范围：** count和filter **默认取值：** 不涉及。
    * matches  **参数解释：** 搜索字段。 **约束限制：**   - 该字段值为空，表示不按照实例名称或实例ID查询。   - 该字段值不为空， **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tags  **参数解释：** 包含标签。 **约束限制：** 最多包含10个key。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'action' => 'action',
            'matches' => 'matches',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释：** 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值必须为数字，不能为负数。 **取值范围：** 不涉及。 **默认取值：** 默认取0值，表示从第一条数据开始查询。
    * limit  **参数解释：** 查询记录数。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值范围：1~100。不传该参数时，默认查询前100条实例信息。 **取值范围：** 1~100 **默认取值：** 不涉及。
    * action  **参数解释：** 操作标识。 **约束限制：** - 取值为“count”，表示仅返回总记录数，禁止返回其他字段。 - 取值为“filter”，表示根据标签过滤条件查询实例。 **取值范围：** count和filter **默认取值：** 不涉及。
    * matches  **参数解释：** 搜索字段。 **约束限制：**   - 该字段值为空，表示不按照实例名称或实例ID查询。   - 该字段值不为空， **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tags  **参数解释：** 包含标签。 **约束限制：** 最多包含10个key。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'action' => 'setAction',
            'matches' => 'setMatches',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释：** 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值必须为数字，不能为负数。 **取值范围：** 不涉及。 **默认取值：** 默认取0值，表示从第一条数据开始查询。
    * limit  **参数解释：** 查询记录数。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值范围：1~100。不传该参数时，默认查询前100条实例信息。 **取值范围：** 1~100 **默认取值：** 不涉及。
    * action  **参数解释：** 操作标识。 **约束限制：** - 取值为“count”，表示仅返回总记录数，禁止返回其他字段。 - 取值为“filter”，表示根据标签过滤条件查询实例。 **取值范围：** count和filter **默认取值：** 不涉及。
    * matches  **参数解释：** 搜索字段。 **约束限制：**   - 该字段值为空，表示不按照实例名称或实例ID查询。   - 该字段值不为空， **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tags  **参数解释：** 包含标签。 **约束限制：** 最多包含10个key。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'action' => 'getAction',
            'matches' => 'getMatches',
            'tags' => 'getTags'
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
    const ACTION_COUNT = 'count';
    const ACTION_FILTER = 'filter';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_COUNT,
            self::ACTION_FILTER,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets offset
    *  **参数解释：** 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值必须为数字，不能为负数。 **取值范围：** 不涉及。 **默认取值：** 默认取0值，表示从第一条数据开始查询。
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
    * @param string|null $offset **参数解释：** 索引位置偏移量，表示从第一条数据偏移offset条数据后开始查询。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值必须为数字，不能为负数。 **取值范围：** 不涉及。 **默认取值：** 默认取0值，表示从第一条数据开始查询。
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
    *  **参数解释：** 查询记录数。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值范围：1~100。不传该参数时，默认查询前100条实例信息。 **取值范围：** 1~100 **默认取值：** 不涉及。
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
    * @param string|null $limit **参数解释：** 查询记录数。 **约束限制：**   - “action”值为“count”时，不传该参数。   - “action”值为“filter”时，取值范围：1~100。不传该参数时，默认查询前100条实例信息。 **取值范围：** 1~100 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释：** 操作标识。 **约束限制：** - 取值为“count”，表示仅返回总记录数，禁止返回其他字段。 - 取值为“filter”，表示根据标签过滤条件查询实例。 **取值范围：** count和filter **默认取值：** 不涉及。
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
    * @param string $action **参数解释：** 操作标识。 **约束限制：** - 取值为“count”，表示仅返回总记录数，禁止返回其他字段。 - 取值为“filter”，表示根据标签过滤条件查询实例。 **取值范围：** count和filter **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets matches
    *  **参数解释：** 搜索字段。 **约束限制：**   - 该字段值为空，表示不按照实例名称或实例ID查询。   - 该字段值不为空， **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\QueryMatchItem[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\QueryMatchItem[]|null $matches **参数解释：** 搜索字段。 **约束限制：**   - 该字段值为空，表示不按照实例名称或实例ID查询。   - 该字段值不为空， **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 包含标签。 **约束限制：** 最多包含10个key。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\QueryTagItem[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\QueryTagItem[]|null $tags **参数解释：** 包含标签。 **约束限制：** 最多包含10个key。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

