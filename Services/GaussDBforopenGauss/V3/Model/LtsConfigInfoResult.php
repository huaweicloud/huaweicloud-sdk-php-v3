<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsConfigInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsConfigInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupName  **参数解释**: LTS日志组名称。 **取值范围**: 不涉及。
    * logGroupId  **参数解释**: LTS日志组ID。 **取值范围**: 不涉及。
    * groupLogType  **参数解释**: LTS日志组类别。 **取值范围**: 通常为asp_log，标识为智能运维专用日志组。
    * groupTtlInDays  **参数解释**: LTS日志组中数据最大保留天数。 **取值范围**: [1,30]
    * logStreamName  **参数解释**: LTS日志流名称。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。
    * logStreamId  **参数解释**: LTS日志流ID。 **取值范围**: 不涉及。
    * streamLogType  **参数解释**: LTS日志流类别。 **取值范围**: 通常为full_sql，标识为全量SQL专用日志流。
    * streamTtlInDays  **参数解释**: LTS日志流中数据最大保留天数。 **取值范围**: [1,30]
    * streamStructureConfigId  **参数解释**: LTS日志流结构化配置ID。 **取值范围**: 不涉及。
    * streamIndexConfigId  **参数解释**: LTS日志流索引配置ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupName' => 'string',
            'logGroupId' => 'string',
            'groupLogType' => 'string',
            'groupTtlInDays' => 'int',
            'logStreamName' => 'string',
            'logStreamId' => 'string',
            'streamLogType' => 'string',
            'streamTtlInDays' => 'int',
            'streamStructureConfigId' => 'string',
            'streamIndexConfigId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupName  **参数解释**: LTS日志组名称。 **取值范围**: 不涉及。
    * logGroupId  **参数解释**: LTS日志组ID。 **取值范围**: 不涉及。
    * groupLogType  **参数解释**: LTS日志组类别。 **取值范围**: 通常为asp_log，标识为智能运维专用日志组。
    * groupTtlInDays  **参数解释**: LTS日志组中数据最大保留天数。 **取值范围**: [1,30]
    * logStreamName  **参数解释**: LTS日志流名称。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。
    * logStreamId  **参数解释**: LTS日志流ID。 **取值范围**: 不涉及。
    * streamLogType  **参数解释**: LTS日志流类别。 **取值范围**: 通常为full_sql，标识为全量SQL专用日志流。
    * streamTtlInDays  **参数解释**: LTS日志流中数据最大保留天数。 **取值范围**: [1,30]
    * streamStructureConfigId  **参数解释**: LTS日志流结构化配置ID。 **取值范围**: 不涉及。
    * streamIndexConfigId  **参数解释**: LTS日志流索引配置ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupName' => null,
        'logGroupId' => null,
        'groupLogType' => null,
        'groupTtlInDays' => 'int32',
        'logStreamName' => null,
        'logStreamId' => null,
        'streamLogType' => null,
        'streamTtlInDays' => 'int32',
        'streamStructureConfigId' => null,
        'streamIndexConfigId' => null
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
    * logGroupName  **参数解释**: LTS日志组名称。 **取值范围**: 不涉及。
    * logGroupId  **参数解释**: LTS日志组ID。 **取值范围**: 不涉及。
    * groupLogType  **参数解释**: LTS日志组类别。 **取值范围**: 通常为asp_log，标识为智能运维专用日志组。
    * groupTtlInDays  **参数解释**: LTS日志组中数据最大保留天数。 **取值范围**: [1,30]
    * logStreamName  **参数解释**: LTS日志流名称。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。
    * logStreamId  **参数解释**: LTS日志流ID。 **取值范围**: 不涉及。
    * streamLogType  **参数解释**: LTS日志流类别。 **取值范围**: 通常为full_sql，标识为全量SQL专用日志流。
    * streamTtlInDays  **参数解释**: LTS日志流中数据最大保留天数。 **取值范围**: [1,30]
    * streamStructureConfigId  **参数解释**: LTS日志流结构化配置ID。 **取值范围**: 不涉及。
    * streamIndexConfigId  **参数解释**: LTS日志流索引配置ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupName' => 'log_group_name',
            'logGroupId' => 'log_group_id',
            'groupLogType' => 'group_log_type',
            'groupTtlInDays' => 'group_ttl_in_days',
            'logStreamName' => 'log_stream_name',
            'logStreamId' => 'log_stream_id',
            'streamLogType' => 'stream_log_type',
            'streamTtlInDays' => 'stream_ttl_in_days',
            'streamStructureConfigId' => 'stream_structure_config_id',
            'streamIndexConfigId' => 'stream_index_config_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupName  **参数解释**: LTS日志组名称。 **取值范围**: 不涉及。
    * logGroupId  **参数解释**: LTS日志组ID。 **取值范围**: 不涉及。
    * groupLogType  **参数解释**: LTS日志组类别。 **取值范围**: 通常为asp_log，标识为智能运维专用日志组。
    * groupTtlInDays  **参数解释**: LTS日志组中数据最大保留天数。 **取值范围**: [1,30]
    * logStreamName  **参数解释**: LTS日志流名称。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。
    * logStreamId  **参数解释**: LTS日志流ID。 **取值范围**: 不涉及。
    * streamLogType  **参数解释**: LTS日志流类别。 **取值范围**: 通常为full_sql，标识为全量SQL专用日志流。
    * streamTtlInDays  **参数解释**: LTS日志流中数据最大保留天数。 **取值范围**: [1,30]
    * streamStructureConfigId  **参数解释**: LTS日志流结构化配置ID。 **取值范围**: 不涉及。
    * streamIndexConfigId  **参数解释**: LTS日志流索引配置ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupName' => 'setLogGroupName',
            'logGroupId' => 'setLogGroupId',
            'groupLogType' => 'setGroupLogType',
            'groupTtlInDays' => 'setGroupTtlInDays',
            'logStreamName' => 'setLogStreamName',
            'logStreamId' => 'setLogStreamId',
            'streamLogType' => 'setStreamLogType',
            'streamTtlInDays' => 'setStreamTtlInDays',
            'streamStructureConfigId' => 'setStreamStructureConfigId',
            'streamIndexConfigId' => 'setStreamIndexConfigId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupName  **参数解释**: LTS日志组名称。 **取值范围**: 不涉及。
    * logGroupId  **参数解释**: LTS日志组ID。 **取值范围**: 不涉及。
    * groupLogType  **参数解释**: LTS日志组类别。 **取值范围**: 通常为asp_log，标识为智能运维专用日志组。
    * groupTtlInDays  **参数解释**: LTS日志组中数据最大保留天数。 **取值范围**: [1,30]
    * logStreamName  **参数解释**: LTS日志流名称。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。
    * logStreamId  **参数解释**: LTS日志流ID。 **取值范围**: 不涉及。
    * streamLogType  **参数解释**: LTS日志流类别。 **取值范围**: 通常为full_sql，标识为全量SQL专用日志流。
    * streamTtlInDays  **参数解释**: LTS日志流中数据最大保留天数。 **取值范围**: [1,30]
    * streamStructureConfigId  **参数解释**: LTS日志流结构化配置ID。 **取值范围**: 不涉及。
    * streamIndexConfigId  **参数解释**: LTS日志流索引配置ID。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupName' => 'getLogGroupName',
            'logGroupId' => 'getLogGroupId',
            'groupLogType' => 'getGroupLogType',
            'groupTtlInDays' => 'getGroupTtlInDays',
            'logStreamName' => 'getLogStreamName',
            'logStreamId' => 'getLogStreamId',
            'streamLogType' => 'getStreamLogType',
            'streamTtlInDays' => 'getStreamTtlInDays',
            'streamStructureConfigId' => 'getStreamStructureConfigId',
            'streamIndexConfigId' => 'getStreamIndexConfigId'
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
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['groupLogType'] = isset($data['groupLogType']) ? $data['groupLogType'] : null;
        $this->container['groupTtlInDays'] = isset($data['groupTtlInDays']) ? $data['groupTtlInDays'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['streamLogType'] = isset($data['streamLogType']) ? $data['streamLogType'] : null;
        $this->container['streamTtlInDays'] = isset($data['streamTtlInDays']) ? $data['streamTtlInDays'] : null;
        $this->container['streamStructureConfigId'] = isset($data['streamStructureConfigId']) ? $data['streamStructureConfigId'] : null;
        $this->container['streamIndexConfigId'] = isset($data['streamIndexConfigId']) ? $data['streamIndexConfigId'] : null;
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
    * Gets logGroupName
    *  **参数解释**: LTS日志组名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName **参数解释**: LTS日志组名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logGroupId
    *  **参数解释**: LTS日志组ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId **参数解释**: LTS日志组ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets groupLogType
    *  **参数解释**: LTS日志组类别。 **取值范围**: 通常为asp_log，标识为智能运维专用日志组。
    *
    * @return string|null
    */
    public function getGroupLogType()
    {
        return $this->container['groupLogType'];
    }

    /**
    * Sets groupLogType
    *
    * @param string|null $groupLogType **参数解释**: LTS日志组类别。 **取值范围**: 通常为asp_log，标识为智能运维专用日志组。
    *
    * @return $this
    */
    public function setGroupLogType($groupLogType)
    {
        $this->container['groupLogType'] = $groupLogType;
        return $this;
    }

    /**
    * Gets groupTtlInDays
    *  **参数解释**: LTS日志组中数据最大保留天数。 **取值范围**: [1,30]
    *
    * @return int|null
    */
    public function getGroupTtlInDays()
    {
        return $this->container['groupTtlInDays'];
    }

    /**
    * Sets groupTtlInDays
    *
    * @param int|null $groupTtlInDays **参数解释**: LTS日志组中数据最大保留天数。 **取值范围**: [1,30]
    *
    * @return $this
    */
    public function setGroupTtlInDays($groupTtlInDays)
    {
        $this->container['groupTtlInDays'] = $groupTtlInDays;
        return $this;
    }

    /**
    * Gets logStreamName
    *  **参数解释**: LTS日志流名称。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName **参数解释**: LTS日志流名称。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets logStreamId
    *  **参数解释**: LTS日志流ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId **参数解释**: LTS日志流ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets streamLogType
    *  **参数解释**: LTS日志流类别。 **取值范围**: 通常为full_sql，标识为全量SQL专用日志流。
    *
    * @return string|null
    */
    public function getStreamLogType()
    {
        return $this->container['streamLogType'];
    }

    /**
    * Sets streamLogType
    *
    * @param string|null $streamLogType **参数解释**: LTS日志流类别。 **取值范围**: 通常为full_sql，标识为全量SQL专用日志流。
    *
    * @return $this
    */
    public function setStreamLogType($streamLogType)
    {
        $this->container['streamLogType'] = $streamLogType;
        return $this;
    }

    /**
    * Gets streamTtlInDays
    *  **参数解释**: LTS日志流中数据最大保留天数。 **取值范围**: [1,30]
    *
    * @return int|null
    */
    public function getStreamTtlInDays()
    {
        return $this->container['streamTtlInDays'];
    }

    /**
    * Sets streamTtlInDays
    *
    * @param int|null $streamTtlInDays **参数解释**: LTS日志流中数据最大保留天数。 **取值范围**: [1,30]
    *
    * @return $this
    */
    public function setStreamTtlInDays($streamTtlInDays)
    {
        $this->container['streamTtlInDays'] = $streamTtlInDays;
        return $this;
    }

    /**
    * Gets streamStructureConfigId
    *  **参数解释**: LTS日志流结构化配置ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getStreamStructureConfigId()
    {
        return $this->container['streamStructureConfigId'];
    }

    /**
    * Sets streamStructureConfigId
    *
    * @param string|null $streamStructureConfigId **参数解释**: LTS日志流结构化配置ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setStreamStructureConfigId($streamStructureConfigId)
    {
        $this->container['streamStructureConfigId'] = $streamStructureConfigId;
        return $this;
    }

    /**
    * Gets streamIndexConfigId
    *  **参数解释**: LTS日志流索引配置ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getStreamIndexConfigId()
    {
        return $this->container['streamIndexConfigId'];
    }

    /**
    * Sets streamIndexConfigId
    *
    * @param string|null $streamIndexConfigId **参数解释**: LTS日志流索引配置ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setStreamIndexConfigId($streamIndexConfigId)
    {
        $this->container['streamIndexConfigId'] = $streamIndexConfigId;
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

