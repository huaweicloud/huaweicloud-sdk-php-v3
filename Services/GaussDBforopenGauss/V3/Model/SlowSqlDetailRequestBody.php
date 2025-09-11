<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowSqlDetailRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowSqlDetailRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  **参数解释**: 起始日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID数组。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'instanceId' => 'string',
            'multiQueries' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\MultiQueryConditionOption[]',
            'sqlId' => 'string',
            'nodeIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  **参数解释**: 起始日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID数组。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'instanceId' => null,
        'multiQueries' => null,
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
    * startTime  **参数解释**: 起始日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID数组。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'instanceId' => 'instance_id',
            'multiQueries' => 'multi_queries',
            'sqlId' => 'sql_id',
            'nodeIds' => 'node_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  **参数解释**: 起始日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID数组。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'instanceId' => 'setInstanceId',
            'multiQueries' => 'setMultiQueries',
            'sqlId' => 'setSqlId',
            'nodeIds' => 'setNodeIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  **参数解释**: 起始日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * multiQueries  **参数解释**: 字符型组合过滤多条件查询列表。 **约束限制**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID数组。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'instanceId' => 'getInstanceId',
            'multiQueries' => 'getMultiQueries',
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['multiQueries'] = isset($data['multiQueries']) ? $data['multiQueries'] : null;
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
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['instanceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['sqlId'] === null) {
            $invalidProperties[] = "'sqlId' can't be null";
        }
        if ($this->container['nodeIds'] === null) {
            $invalidProperties[] = "'nodeIds' can't be null";
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
    * Gets startTime
    *  **参数解释**: 起始日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param int $startTime **参数解释**: 起始日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: 结束日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param int $endTime **参数解释**: 结束日期。 **约束限制**: 格式:13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
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
    * Gets sqlId
    *  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string $sqlId **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: 节点ID数组。 **约束限制**: 不涉及。
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
    * @param string[] $nodeIds **参数解释**: 节点ID数组。 **约束限制**: 不涉及。
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

