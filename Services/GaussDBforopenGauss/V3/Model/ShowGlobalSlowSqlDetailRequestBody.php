<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGlobalSlowSqlDetailRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGlobalSlowSqlDetailRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 节点ID数组不能为空。
    * startTime  **参数解释**: 起始日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentType  **参数解释**: 组件类型。 **约束限制**: 不涉及。 **取值范围**: - cn：CN组件类型。 - dn：DN组件类型。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeIds' => 'string[]',
            'startTime' => 'int',
            'endTime' => 'int',
            'sqlId' => 'string',
            'componentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 节点ID数组不能为空。
    * startTime  **参数解释**: 起始日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentType  **参数解释**: 组件类型。 **约束限制**: 不涉及。 **取值范围**: - cn：CN组件类型。 - dn：DN组件类型。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeIds' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'sqlId' => null,
        'componentType' => null
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
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 节点ID数组不能为空。
    * startTime  **参数解释**: 起始日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentType  **参数解释**: 组件类型。 **约束限制**: 不涉及。 **取值范围**: - cn：CN组件类型。 - dn：DN组件类型。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeIds' => 'node_ids',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'sqlId' => 'sql_id',
            'componentType' => 'component_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 节点ID数组不能为空。
    * startTime  **参数解释**: 起始日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentType  **参数解释**: 组件类型。 **约束限制**: 不涉及。 **取值范围**: - cn：CN组件类型。 - dn：DN组件类型。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeIds' => 'setNodeIds',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'sqlId' => 'setSqlId',
            'componentType' => 'setComponentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeIds  **参数解释**: 节点ID列表。 **约束限制**: 节点ID数组不能为空。
    * startTime  **参数解释**: 起始日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 结束日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sqlId  **参数解释**: 慢SQL的SQL ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentType  **参数解释**: 组件类型。 **约束限制**: 不涉及。 **取值范围**: - cn：CN组件类型。 - dn：DN组件类型。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeIds' => 'getNodeIds',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'sqlId' => 'getSqlId',
            'componentType' => 'getComponentType'
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
    const COMPONENT_TYPE_CN = 'cn';
    const COMPONENT_TYPE_DN = 'dn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getComponentTypeAllowableValues()
    {
        return [
            self::COMPONENT_TYPE_CN,
            self::COMPONENT_TYPE_DN,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['componentType'] = isset($data['componentType']) ? $data['componentType'] : null;
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
        if ($this->container['sqlId'] === null) {
            $invalidProperties[] = "'sqlId' can't be null";
        }
        if ($this->container['componentType'] === null) {
            $invalidProperties[] = "'componentType' can't be null";
        }
            $allowedValues = $this->getComponentTypeAllowableValues();
                if (!is_null($this->container['componentType']) && !in_array($this->container['componentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'componentType', must be one of '%s'",
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
    *  **参数解释**: 节点ID列表。 **约束限制**: 节点ID数组不能为空。
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
    * @param string[] $nodeIds **参数解释**: 节点ID列表。 **约束限制**: 节点ID数组不能为空。
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
    *  **参数解释**: 起始日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param int $startTime **参数解释**: 起始日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: 结束日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param int $endTime **参数解释**: 结束日期。 **约束限制**: 13位UNIX时间戳格式，单位是毫秒，时区是UTC。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * Gets componentType
    *  **参数解释**: 组件类型。 **约束限制**: 不涉及。 **取值范围**: - cn：CN组件类型。 - dn：DN组件类型。  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getComponentType()
    {
        return $this->container['componentType'];
    }

    /**
    * Sets componentType
    *
    * @param string $componentType **参数解释**: 组件类型。 **约束限制**: 不涉及。 **取值范围**: - cn：CN组件类型。 - dn：DN组件类型。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setComponentType($componentType)
    {
        $this->container['componentType'] = $componentType;
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

