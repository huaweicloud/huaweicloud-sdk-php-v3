<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWaitEventRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWaitEventRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**: 节点ID，仅支持包含有CN或DN（主、备）组件的节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * system  **参数解释**: 是否查询系统用户。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不能为负数。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 不涉及。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * orderFields  **参数解释**: 排序字段列表，内部List<String>。 **约束限制**: 不涉及。
    * waitEventQueryInfo  waitEventQueryInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'system' => 'bool',
            'limit' => 'int',
            'offset' => 'int',
            'orderFields' => 'string[][]',
            'waitEventQueryInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WaitEventQueryInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**: 节点ID，仅支持包含有CN或DN（主、备）组件的节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * system  **参数解释**: 是否查询系统用户。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不能为负数。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 不涉及。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * orderFields  **参数解释**: 排序字段列表，内部List<String>。 **约束限制**: 不涉及。
    * waitEventQueryInfo  waitEventQueryInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'system' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'orderFields' => null,
        'waitEventQueryInfo' => null
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
    * nodeId  **参数解释**: 节点ID，仅支持包含有CN或DN（主、备）组件的节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * system  **参数解释**: 是否查询系统用户。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不能为负数。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 不涉及。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * orderFields  **参数解释**: 排序字段列表，内部List<String>。 **约束限制**: 不涉及。
    * waitEventQueryInfo  waitEventQueryInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'system' => 'system',
            'limit' => 'limit',
            'offset' => 'offset',
            'orderFields' => 'order_fields',
            'waitEventQueryInfo' => 'wait_event_query_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**: 节点ID，仅支持包含有CN或DN（主、备）组件的节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * system  **参数解释**: 是否查询系统用户。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不能为负数。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 不涉及。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * orderFields  **参数解释**: 排序字段列表，内部List<String>。 **约束限制**: 不涉及。
    * waitEventQueryInfo  waitEventQueryInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'system' => 'setSystem',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'orderFields' => 'setOrderFields',
            'waitEventQueryInfo' => 'setWaitEventQueryInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**: 节点ID，仅支持包含有CN或DN（主、备）组件的节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * system  **参数解释**: 是否查询系统用户。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数。 **约束限制**: 不能为负数。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 不涉及。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * orderFields  **参数解释**: 排序字段列表，内部List<String>。 **约束限制**: 不涉及。
    * waitEventQueryInfo  waitEventQueryInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'system' => 'getSystem',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'orderFields' => 'getOrderFields',
            'waitEventQueryInfo' => 'getWaitEventQueryInfo'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['orderFields'] = isset($data['orderFields']) ? $data['orderFields'] : null;
        $this->container['waitEventQueryInfo'] = isset($data['waitEventQueryInfo']) ? $data['waitEventQueryInfo'] : null;
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
    * Gets nodeId
    *  **参数解释**: 节点ID，仅支持包含有CN或DN（主、备）组件的节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId **参数解释**: 节点ID，仅支持包含有CN或DN（主、备）组件的节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets system
    *  **参数解释**: 是否查询系统用户。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return bool|null
    */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
    * Sets system
    *
    * @param bool|null $system **参数解释**: 是否查询系统用户。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSystem($system)
    {
        $this->container['system'] = $system;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 查询记录数。 **约束限制**: 不能为负数。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
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
    * @param int|null $limit **参数解释**: 查询记录数。 **约束限制**: 不能为负数。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
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
    *  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 不涉及。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
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
    * @param int|null $offset **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 不涉及。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets orderFields
    *  **参数解释**: 排序字段列表，内部List<String>。 **约束限制**: 不涉及。
    *
    * @return string[][]|null
    */
    public function getOrderFields()
    {
        return $this->container['orderFields'];
    }

    /**
    * Sets orderFields
    *
    * @param string[][]|null $orderFields **参数解释**: 排序字段列表，内部List<String>。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setOrderFields($orderFields)
    {
        $this->container['orderFields'] = $orderFields;
        return $this;
    }

    /**
    * Gets waitEventQueryInfo
    *  waitEventQueryInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WaitEventQueryInfo|null
    */
    public function getWaitEventQueryInfo()
    {
        return $this->container['waitEventQueryInfo'];
    }

    /**
    * Sets waitEventQueryInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WaitEventQueryInfo|null $waitEventQueryInfo waitEventQueryInfo
    *
    * @return $this
    */
    public function setWaitEventQueryInfo($waitEventQueryInfo)
    {
        $this->container['waitEventQueryInfo'] = $waitEventQueryInfo;
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

