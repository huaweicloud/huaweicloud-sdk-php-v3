<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTransactionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTransactionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**: 节点ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询结果的事务最大个数。 **约束限制**: 不涉及。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 查询结果的事务起始页码。 **约束限制**: 不涉及。 **取值范围**: [0，2^31-1]。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * transactionQueryInfo  transactionQueryInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'componentId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'transactionQueryInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListTransactionRequestBodyTransactionQueryInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**: 节点ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询结果的事务最大个数。 **约束限制**: 不涉及。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 查询结果的事务起始页码。 **约束限制**: 不涉及。 **取值范围**: [0，2^31-1]。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * transactionQueryInfo  transactionQueryInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'componentId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'transactionQueryInfo' => null
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
    * nodeId  **参数解释**: 节点ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询结果的事务最大个数。 **约束限制**: 不涉及。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 查询结果的事务起始页码。 **约束限制**: 不涉及。 **取值范围**: [0，2^31-1]。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * transactionQueryInfo  transactionQueryInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'componentId' => 'component_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'transactionQueryInfo' => 'transaction_query_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**: 节点ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询结果的事务最大个数。 **约束限制**: 不涉及。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 查询结果的事务起始页码。 **约束限制**: 不涉及。 **取值范围**: [0，2^31-1]。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * transactionQueryInfo  transactionQueryInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'componentId' => 'setComponentId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'transactionQueryInfo' => 'setTransactionQueryInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**: 节点ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询结果的事务最大个数。 **约束限制**: 不涉及。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
    * offset  **参数解释**: 查询结果的事务起始页码。 **约束限制**: 不涉及。 **取值范围**: [0，2^31-1]。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * transactionQueryInfo  transactionQueryInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'componentId' => 'getComponentId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'transactionQueryInfo' => 'getTransactionQueryInfo'
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['transactionQueryInfo'] = isset($data['transactionQueryInfo']) ? $data['transactionQueryInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
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
    * Gets nodeId
    *  **参数解释**: 节点ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**: 节点ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释**: 组件ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId **参数解释**: 组件ID，仅支持非日志类型的CN或DN节点。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 查询结果的事务最大个数。 **约束限制**: 不涉及。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
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
    * @param int|null $limit **参数解释**: 查询结果的事务最大个数。 **约束限制**: 不涉及。 **取值范围**: [1，100]。 **默认取值**: 默认为10。
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
    *  **参数解释**: 查询结果的事务起始页码。 **约束限制**: 不涉及。 **取值范围**: [0，2^31-1]。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
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
    * @param int|null $offset **参数解释**: 查询结果的事务起始页码。 **约束限制**: 不涉及。 **取值范围**: [0，2^31-1]。 **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets transactionQueryInfo
    *  transactionQueryInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListTransactionRequestBodyTransactionQueryInfo|null
    */
    public function getTransactionQueryInfo()
    {
        return $this->container['transactionQueryInfo'];
    }

    /**
    * Sets transactionQueryInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListTransactionRequestBodyTransactionQueryInfo|null $transactionQueryInfo transactionQueryInfo
    *
    * @return $this
    */
    public function setTransactionQueryInfo($transactionQueryInfo)
    {
        $this->container['transactionQueryInfo'] = $transactionQueryInfo;
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

