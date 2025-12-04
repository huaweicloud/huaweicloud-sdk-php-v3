<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduleEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduleEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态  **约束限制**：  不涉及。  **取值范围**：  枚举值：WAITING 等待中；INQUIRING 待授权; SCHEDULED 待执行; EXECUTING 执行中; COMPLETED 已完成; FAILED 失败; CANCELED 已取消。
    * type  **参数解释**：  事件类型  **约束限制**：  不涉及。  **取值范围**：  枚举值：RESTAT_NODE 重启实例节点。
    * level  **参数解释**：  事件级别  **约束限制**：  不涉及。  **取值范围**：  CRITICAL 紧急；MAJOR 重要；MINOR 一般；INFO 提示。
    * sortField  **参数解释**：  排序字段，支持planned_execution_time、created_time、latest_execution_time。  **约束限制**：  不涉及。
    * order  **参数解释**：  排序顺序  **约束限制**：  不涉及。  **取值范围**：  DESC 降序；ASC升序   **默认取值**：  DESC 降序
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'type' => 'string',
            'level' => 'string',
            'sortField' => 'string',
            'order' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态  **约束限制**：  不涉及。  **取值范围**：  枚举值：WAITING 等待中；INQUIRING 待授权; SCHEDULED 待执行; EXECUTING 执行中; COMPLETED 已完成; FAILED 失败; CANCELED 已取消。
    * type  **参数解释**：  事件类型  **约束限制**：  不涉及。  **取值范围**：  枚举值：RESTAT_NODE 重启实例节点。
    * level  **参数解释**：  事件级别  **约束限制**：  不涉及。  **取值范围**：  CRITICAL 紧急；MAJOR 重要；MINOR 一般；INFO 提示。
    * sortField  **参数解释**：  排序字段，支持planned_execution_time、created_time、latest_execution_time。  **约束限制**：  不涉及。
    * order  **参数解释**：  排序顺序  **约束限制**：  不涉及。  **取值范围**：  DESC 降序；ASC升序   **默认取值**：  DESC 降序
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'status' => null,
        'type' => null,
        'level' => null,
        'sortField' => null,
        'order' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态  **约束限制**：  不涉及。  **取值范围**：  枚举值：WAITING 等待中；INQUIRING 待授权; SCHEDULED 待执行; EXECUTING 执行中; COMPLETED 已完成; FAILED 失败; CANCELED 已取消。
    * type  **参数解释**：  事件类型  **约束限制**：  不涉及。  **取值范围**：  枚举值：RESTAT_NODE 重启实例节点。
    * level  **参数解释**：  事件级别  **约束限制**：  不涉及。  **取值范围**：  CRITICAL 紧急；MAJOR 重要；MINOR 一般；INFO 提示。
    * sortField  **参数解释**：  排序字段，支持planned_execution_time、created_time、latest_execution_time。  **约束限制**：  不涉及。
    * order  **参数解释**：  排序顺序  **约束限制**：  不涉及。  **取值范围**：  DESC 降序；ASC升序   **默认取值**：  DESC 降序
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'type' => 'type',
            'level' => 'level',
            'sortField' => 'sort_field',
            'order' => 'order',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态  **约束限制**：  不涉及。  **取值范围**：  枚举值：WAITING 等待中；INQUIRING 待授权; SCHEDULED 待执行; EXECUTING 执行中; COMPLETED 已完成; FAILED 失败; CANCELED 已取消。
    * type  **参数解释**：  事件类型  **约束限制**：  不涉及。  **取值范围**：  枚举值：RESTAT_NODE 重启实例节点。
    * level  **参数解释**：  事件级别  **约束限制**：  不涉及。  **取值范围**：  CRITICAL 紧急；MAJOR 重要；MINOR 一般；INFO 提示。
    * sortField  **参数解释**：  排序字段，支持planned_execution_time、created_time、latest_execution_time。  **约束限制**：  不涉及。
    * order  **参数解释**：  排序顺序  **约束限制**：  不涉及。  **取值范围**：  DESC 降序；ASC升序   **默认取值**：  DESC 降序
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  10
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'type' => 'setType',
            'level' => 'setLevel',
            'sortField' => 'setSortField',
            'order' => 'setOrder',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    * status  **参数解释**：  事件状态  **约束限制**：  不涉及。  **取值范围**：  枚举值：WAITING 等待中；INQUIRING 待授权; SCHEDULED 待执行; EXECUTING 执行中; COMPLETED 已完成; FAILED 失败; CANCELED 已取消。
    * type  **参数解释**：  事件类型  **约束限制**：  不涉及。  **取值范围**：  枚举值：RESTAT_NODE 重启实例节点。
    * level  **参数解释**：  事件级别  **约束限制**：  不涉及。  **取值范围**：  CRITICAL 紧急；MAJOR 重要；MINOR 一般；INFO 提示。
    * sortField  **参数解释**：  排序字段，支持planned_execution_time、created_time、latest_execution_time。  **约束限制**：  不涉及。
    * order  **参数解释**：  排序顺序  **约束限制**：  不涉及。  **取值范围**：  DESC 降序；ASC升序   **默认取值**：  DESC 降序
    * offset  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  0
    * limit  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  10
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'type' => 'getType',
            'level' => 'getLevel',
            'sortField' => 'getSortField',
            'order' => 'getOrder',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
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
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释**：  事件ID。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：  事件ID。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  实例ID。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  事件状态  **约束限制**：  不涉及。  **取值范围**：  枚举值：WAITING 等待中；INQUIRING 待授权; SCHEDULED 待执行; EXECUTING 执行中; COMPLETED 已完成; FAILED 失败; CANCELED 已取消。
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
    * @param string|null $status **参数解释**：  事件状态  **约束限制**：  不涉及。  **取值范围**：  枚举值：WAITING 等待中；INQUIRING 待授权; SCHEDULED 待执行; EXECUTING 执行中; COMPLETED 已完成; FAILED 失败; CANCELED 已取消。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  事件类型  **约束限制**：  不涉及。  **取值范围**：  枚举值：RESTAT_NODE 重启实例节点。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：  事件类型  **约束限制**：  不涉及。  **取值范围**：  枚举值：RESTAT_NODE 重启实例节点。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**：  事件级别  **约束限制**：  不涉及。  **取值范围**：  CRITICAL 紧急；MAJOR 重要；MINOR 一般；INFO 提示。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**：  事件级别  **约束限制**：  不涉及。  **取值范围**：  CRITICAL 紧急；MAJOR 重要；MINOR 一般；INFO 提示。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets sortField
    *  **参数解释**：  排序字段，支持planned_execution_time、created_time、latest_execution_time。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField **参数解释**：  排序字段，支持planned_execution_time、created_time、latest_execution_time。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释**：  排序顺序  **约束限制**：  不涉及。  **取值范围**：  DESC 降序；ASC升序   **默认取值**：  DESC 降序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order **参数解释**：  排序顺序  **约束限制**：  不涉及。  **取值范围**：  DESC 降序；ASC升序   **默认取值**：  DESC 降序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  0
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
    * @param int|null $offset **参数解释**：  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  0
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
    *  **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  10
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
    * @param int|null $limit **参数解释**：  查询记录数。默认为10，不能为负数，最小值为1，最大值为100。  **约束限制**：  不涉及。  **取值范围**：  不涉及  **默认取值**：  10
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

