<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSlowSqlsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSlowSqlsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * startTime  **参数解释** 起始日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释** 结束日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的sql_id，可按照sql_id过滤查询。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * threshold  **参数解释**: 阈值。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeIds' => 'string[]',
            'startTime' => 'int',
            'endTime' => 'int',
            'sqlId' => 'string',
            'threshold' => 'int',
            'multiQueries' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\MultiQueryConditionOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * startTime  **参数解释** 起始日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释** 结束日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的sql_id，可按照sql_id过滤查询。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * threshold  **参数解释**: 阈值。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeIds' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'sqlId' => null,
        'threshold' => null,
        'multiQueries' => null
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
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * startTime  **参数解释** 起始日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释** 结束日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的sql_id，可按照sql_id过滤查询。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * threshold  **参数解释**: 阈值。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeIds' => 'node_ids',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'sqlId' => 'sql_id',
            'threshold' => 'threshold',
            'multiQueries' => 'multi_queries'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * startTime  **参数解释** 起始日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释** 结束日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的sql_id，可按照sql_id过滤查询。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * threshold  **参数解释**: 阈值。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeIds' => 'setNodeIds',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'sqlId' => 'setSqlId',
            'threshold' => 'setThreshold',
            'multiQueries' => 'setMultiQueries'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * startTime  **参数解释** 起始日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释** 结束日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的sql_id，可按照sql_id过滤查询。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * threshold  **参数解释**: 阈值。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeIds' => 'getNodeIds',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'sqlId' => 'getSqlId',
            'threshold' => 'getThreshold',
            'multiQueries' => 'getMultiQueries'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['multiQueries'] = isset($data['multiQueries']) ? $data['multiQueries'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['nodeIds'] === null) {
            $invalidProperties[] = "'nodeIds' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['threshold'] === null) {
            $invalidProperties[] = "'threshold' can't be null";
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
    * Gets instanceId
    *  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeIds
    *  **参数解释**: 节点ID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string[]
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[] $nodeIds **参数解释**: 节点ID列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释** 起始日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime **参数解释** 起始日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释** 结束日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime **参数解释** 结束日期。 **约束限制** 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: 慢SQL的sql_id，可按照sql_id过滤查询。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $sqlId **参数解释**: 慢SQL的sql_id，可按照sql_id过滤查询。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets threshold
    *  **参数解释**: 阈值。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return int
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int $threshold **参数解释**: 阈值。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets multiQueries
    *  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\MultiQueryConditionOption[]|null
    */
    public function getMultiQueries()
    {
        return $this->container['multiQueries'];
    }

    /**
    * Sets multiQueries
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\MultiQueryConditionOption[]|null $multiQueries **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setMultiQueries($multiQueries)
    {
        $this->container['multiQueries'] = $multiQueries;
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

