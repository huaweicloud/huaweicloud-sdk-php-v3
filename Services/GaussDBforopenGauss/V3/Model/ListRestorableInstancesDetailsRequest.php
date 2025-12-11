<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRestorableInstancesDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRestorableInstancesDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * sourceInstanceId  源实例id，需要恢复的实例ID。
    * backupId  实例备份信息ID，根据备份ID查询实例拓扑信息，过滤查询出来的实例，包含节点数，副本数等。参数为空时，根据restore_time查询。。
    * restoreTime  恢复点，当备份ID为空时，通过此参数查询实例拓扑信息，过滤实例列表。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * backupRestoreType  **参数解释**: 查备份恢复的粒度。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE   - DATABASE **默认取值**: INSTANCE
    * sourceBackupSchema  **参数解释**: 源实例的备份类型。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE **默认取值**: INSTANCE
    * targetInstanceId  **参数解释**: 目标实例ID，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 目标实例名称，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'sourceInstanceId' => 'string',
            'backupId' => 'string',
            'restoreTime' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'backupRestoreType' => 'string',
            'sourceBackupSchema' => 'string',
            'targetInstanceId' => 'string',
            'instanceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * sourceInstanceId  源实例id，需要恢复的实例ID。
    * backupId  实例备份信息ID，根据备份ID查询实例拓扑信息，过滤查询出来的实例，包含节点数，副本数等。参数为空时，根据restore_time查询。。
    * restoreTime  恢复点，当备份ID为空时，通过此参数查询实例拓扑信息，过滤实例列表。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * backupRestoreType  **参数解释**: 查备份恢复的粒度。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE   - DATABASE **默认取值**: INSTANCE
    * sourceBackupSchema  **参数解释**: 源实例的备份类型。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE **默认取值**: INSTANCE
    * targetInstanceId  **参数解释**: 目标实例ID，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 目标实例名称，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'sourceInstanceId' => null,
        'backupId' => null,
        'restoreTime' => null,
        'offset' => null,
        'limit' => null,
        'backupRestoreType' => null,
        'sourceBackupSchema' => null,
        'targetInstanceId' => null,
        'instanceName' => null
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
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * sourceInstanceId  源实例id，需要恢复的实例ID。
    * backupId  实例备份信息ID，根据备份ID查询实例拓扑信息，过滤查询出来的实例，包含节点数，副本数等。参数为空时，根据restore_time查询。。
    * restoreTime  恢复点，当备份ID为空时，通过此参数查询实例拓扑信息，过滤实例列表。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * backupRestoreType  **参数解释**: 查备份恢复的粒度。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE   - DATABASE **默认取值**: INSTANCE
    * sourceBackupSchema  **参数解释**: 源实例的备份类型。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE **默认取值**: INSTANCE
    * targetInstanceId  **参数解释**: 目标实例ID，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 目标实例名称，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'sourceInstanceId' => 'source_instance_id',
            'backupId' => 'backup_id',
            'restoreTime' => 'restore_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'backupRestoreType' => 'backup_restore_type',
            'sourceBackupSchema' => 'source_backup_schema',
            'targetInstanceId' => 'target_instance_id',
            'instanceName' => 'instance_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * sourceInstanceId  源实例id，需要恢复的实例ID。
    * backupId  实例备份信息ID，根据备份ID查询实例拓扑信息，过滤查询出来的实例，包含节点数，副本数等。参数为空时，根据restore_time查询。。
    * restoreTime  恢复点，当备份ID为空时，通过此参数查询实例拓扑信息，过滤实例列表。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * backupRestoreType  **参数解释**: 查备份恢复的粒度。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE   - DATABASE **默认取值**: INSTANCE
    * sourceBackupSchema  **参数解释**: 源实例的备份类型。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE **默认取值**: INSTANCE
    * targetInstanceId  **参数解释**: 目标实例ID，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 目标实例名称，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'sourceInstanceId' => 'setSourceInstanceId',
            'backupId' => 'setBackupId',
            'restoreTime' => 'setRestoreTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'backupRestoreType' => 'setBackupRestoreType',
            'sourceBackupSchema' => 'setSourceBackupSchema',
            'targetInstanceId' => 'setTargetInstanceId',
            'instanceName' => 'setInstanceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * sourceInstanceId  源实例id，需要恢复的实例ID。
    * backupId  实例备份信息ID，根据备份ID查询实例拓扑信息，过滤查询出来的实例，包含节点数，副本数等。参数为空时，根据restore_time查询。。
    * restoreTime  恢复点，当备份ID为空时，通过此参数查询实例拓扑信息，过滤实例列表。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * backupRestoreType  **参数解释**: 查备份恢复的粒度。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE   - DATABASE **默认取值**: INSTANCE
    * sourceBackupSchema  **参数解释**: 源实例的备份类型。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE **默认取值**: INSTANCE
    * targetInstanceId  **参数解释**: 目标实例ID，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 目标实例名称，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'sourceInstanceId' => 'getSourceInstanceId',
            'backupId' => 'getBackupId',
            'restoreTime' => 'getRestoreTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'backupRestoreType' => 'getBackupRestoreType',
            'sourceBackupSchema' => 'getSourceBackupSchema',
            'targetInstanceId' => 'getTargetInstanceId',
            'instanceName' => 'getInstanceName'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['backupRestoreType'] = isset($data['backupRestoreType']) ? $data['backupRestoreType'] : null;
        $this->container['sourceBackupSchema'] = isset($data['sourceBackupSchema']) ? $data['sourceBackupSchema'] : null;
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceInstanceId'] === null) {
            $invalidProperties[] = "'sourceInstanceId' can't be null";
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
    * Gets xLanguage
    *  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets sourceInstanceId
    *  源实例id，需要恢复的实例ID。
    *
    * @return string
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string $sourceInstanceId 源实例id，需要恢复的实例ID。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
    }

    /**
    * Gets backupId
    *  实例备份信息ID，根据备份ID查询实例拓扑信息，过滤查询出来的实例，包含节点数，副本数等。参数为空时，根据restore_time查询。。
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 实例备份信息ID，根据备份ID查询实例拓扑信息，过滤查询出来的实例，包含节点数，副本数等。参数为空时，根据restore_time查询。。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets restoreTime
    *  恢复点，当备份ID为空时，通过此参数查询实例拓扑信息，过滤实例列表。
    *
    * @return string|null
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param string|null $restoreTime 恢复点，当备份ID为空时，通过此参数查询实例拓扑信息，过滤实例列表。
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    *  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
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
    * @param int|null $limit 查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets backupRestoreType
    *  **参数解释**: 查备份恢复的粒度。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE   - DATABASE **默认取值**: INSTANCE
    *
    * @return string|null
    */
    public function getBackupRestoreType()
    {
        return $this->container['backupRestoreType'];
    }

    /**
    * Sets backupRestoreType
    *
    * @param string|null $backupRestoreType **参数解释**: 查备份恢复的粒度。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE   - DATABASE **默认取值**: INSTANCE
    *
    * @return $this
    */
    public function setBackupRestoreType($backupRestoreType)
    {
        $this->container['backupRestoreType'] = $backupRestoreType;
        return $this;
    }

    /**
    * Gets sourceBackupSchema
    *  **参数解释**: 源实例的备份类型。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE **默认取值**: INSTANCE
    *
    * @return string|null
    */
    public function getSourceBackupSchema()
    {
        return $this->container['sourceBackupSchema'];
    }

    /**
    * Sets sourceBackupSchema
    *
    * @param string|null $sourceBackupSchema **参数解释**: 源实例的备份类型。 **约束限制**: 不涉及。 **取值范围**:   - INSTANCE   - DATABASE_TABLE **默认取值**: INSTANCE
    *
    * @return $this
    */
    public function setSourceBackupSchema($sourceBackupSchema)
    {
        $this->container['sourceBackupSchema'] = $sourceBackupSchema;
        return $this;
    }

    /**
    * Gets targetInstanceId
    *  **参数解释**: 目标实例ID，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string|null $targetInstanceId **参数解释**: 目标实例ID，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**: 目标实例名称，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**: 目标实例名称，通过此参数过滤实例列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
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

