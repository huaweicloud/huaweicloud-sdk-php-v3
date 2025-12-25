<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**： 事件类别。 **取值范围**： 不涉及。
    * description  **参数解释**： 事件描述。 **取值范围**： 不涉及。
    * eventId  **参数解释**： 事件ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 事件定义名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 事件显示名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * severity  **参数解释**： 事件级别。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： 事件源类别。 **取值范围**： - cluster：集群。 - backup：快照。 - disaster-recovery：容灾。 - data.migration：数据迁移。 - dws.ingestion：DwsIngestion。
    * occurTime  **参数解释**： 时间。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 租户凭证ID。 **取值范围**： 不涉及。
    * sourceId  **参数解释**： 事件源ID。 **取值范围**： 不涉及。
    * sourceName  **参数解释**： 事件源名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： - 1：已保存。 - 2：已处理。
    * subject  **参数解释**： 事件主题。 **取值范围**： 不涉及。
    * context  **参数解释**： 事件信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'description' => 'string',
            'eventId' => 'string',
            'name' => 'string',
            'displayName' => 'string',
            'nameSpace' => 'string',
            'severity' => 'string',
            'sourceType' => 'string',
            'occurTime' => 'int',
            'projectId' => 'string',
            'sourceId' => 'string',
            'sourceName' => 'string',
            'status' => 'int',
            'subject' => 'string',
            'context' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**： 事件类别。 **取值范围**： 不涉及。
    * description  **参数解释**： 事件描述。 **取值范围**： 不涉及。
    * eventId  **参数解释**： 事件ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 事件定义名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 事件显示名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * severity  **参数解释**： 事件级别。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： 事件源类别。 **取值范围**： - cluster：集群。 - backup：快照。 - disaster-recovery：容灾。 - data.migration：数据迁移。 - dws.ingestion：DwsIngestion。
    * occurTime  **参数解释**： 时间。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 租户凭证ID。 **取值范围**： 不涉及。
    * sourceId  **参数解释**： 事件源ID。 **取值范围**： 不涉及。
    * sourceName  **参数解释**： 事件源名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： - 1：已保存。 - 2：已处理。
    * subject  **参数解释**： 事件主题。 **取值范围**： 不涉及。
    * context  **参数解释**： 事件信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'description' => null,
        'eventId' => null,
        'name' => null,
        'displayName' => null,
        'nameSpace' => null,
        'severity' => null,
        'sourceType' => null,
        'occurTime' => 'int64',
        'projectId' => null,
        'sourceId' => null,
        'sourceName' => null,
        'status' => 'int32',
        'subject' => null,
        'context' => null
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
    * category  **参数解释**： 事件类别。 **取值范围**： 不涉及。
    * description  **参数解释**： 事件描述。 **取值范围**： 不涉及。
    * eventId  **参数解释**： 事件ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 事件定义名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 事件显示名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * severity  **参数解释**： 事件级别。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： 事件源类别。 **取值范围**： - cluster：集群。 - backup：快照。 - disaster-recovery：容灾。 - data.migration：数据迁移。 - dws.ingestion：DwsIngestion。
    * occurTime  **参数解释**： 时间。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 租户凭证ID。 **取值范围**： 不涉及。
    * sourceId  **参数解释**： 事件源ID。 **取值范围**： 不涉及。
    * sourceName  **参数解释**： 事件源名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： - 1：已保存。 - 2：已处理。
    * subject  **参数解释**： 事件主题。 **取值范围**： 不涉及。
    * context  **参数解释**： 事件信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'description' => 'description',
            'eventId' => 'event_id',
            'name' => 'name',
            'displayName' => 'display_name',
            'nameSpace' => 'name_space',
            'severity' => 'severity',
            'sourceType' => 'source_type',
            'occurTime' => 'occur_time',
            'projectId' => 'project_id',
            'sourceId' => 'source_id',
            'sourceName' => 'source_name',
            'status' => 'status',
            'subject' => 'subject',
            'context' => 'context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**： 事件类别。 **取值范围**： 不涉及。
    * description  **参数解释**： 事件描述。 **取值范围**： 不涉及。
    * eventId  **参数解释**： 事件ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 事件定义名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 事件显示名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * severity  **参数解释**： 事件级别。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： 事件源类别。 **取值范围**： - cluster：集群。 - backup：快照。 - disaster-recovery：容灾。 - data.migration：数据迁移。 - dws.ingestion：DwsIngestion。
    * occurTime  **参数解释**： 时间。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 租户凭证ID。 **取值范围**： 不涉及。
    * sourceId  **参数解释**： 事件源ID。 **取值范围**： 不涉及。
    * sourceName  **参数解释**： 事件源名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： - 1：已保存。 - 2：已处理。
    * subject  **参数解释**： 事件主题。 **取值范围**： 不涉及。
    * context  **参数解释**： 事件信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'description' => 'setDescription',
            'eventId' => 'setEventId',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'nameSpace' => 'setNameSpace',
            'severity' => 'setSeverity',
            'sourceType' => 'setSourceType',
            'occurTime' => 'setOccurTime',
            'projectId' => 'setProjectId',
            'sourceId' => 'setSourceId',
            'sourceName' => 'setSourceName',
            'status' => 'setStatus',
            'subject' => 'setSubject',
            'context' => 'setContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**： 事件类别。 **取值范围**： 不涉及。
    * description  **参数解释**： 事件描述。 **取值范围**： 不涉及。
    * eventId  **参数解释**： 事件ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 事件定义名称。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 事件显示名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * severity  **参数解释**： 事件级别。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： 事件源类别。 **取值范围**： - cluster：集群。 - backup：快照。 - disaster-recovery：容灾。 - data.migration：数据迁移。 - dws.ingestion：DwsIngestion。
    * occurTime  **参数解释**： 时间。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 租户凭证ID。 **取值范围**： 不涉及。
    * sourceId  **参数解释**： 事件源ID。 **取值范围**： 不涉及。
    * sourceName  **参数解释**： 事件源名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： - 1：已保存。 - 2：已处理。
    * subject  **参数解释**： 事件主题。 **取值范围**： 不涉及。
    * context  **参数解释**： 事件信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'description' => 'getDescription',
            'eventId' => 'getEventId',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'nameSpace' => 'getNameSpace',
            'severity' => 'getSeverity',
            'sourceType' => 'getSourceType',
            'occurTime' => 'getOccurTime',
            'projectId' => 'getProjectId',
            'sourceId' => 'getSourceId',
            'sourceName' => 'getSourceName',
            'status' => 'getStatus',
            'subject' => 'getSubject',
            'context' => 'getContext'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['nameSpace'] = isset($data['nameSpace']) ? $data['nameSpace'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
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
    * Gets category
    *  **参数解释**： 事件类别。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 事件类别。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 事件描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 事件描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets eventId
    *  **参数解释**： 事件ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId **参数解释**： 事件ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 事件定义名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 事件定义名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**： 事件显示名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释**： 事件显示名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets nameSpace
    *  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNameSpace()
    {
        return $this->container['nameSpace'];
    }

    /**
    * Sets nameSpace
    *
    * @param string|null $nameSpace **参数解释**： 所属服务。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNameSpace($nameSpace)
    {
        $this->container['nameSpace'] = $nameSpace;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 事件级别。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 事件级别。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets sourceType
    *  **参数解释**： 事件源类别。 **取值范围**： - cluster：集群。 - backup：快照。 - disaster-recovery：容灾。 - data.migration：数据迁移。 - dws.ingestion：DwsIngestion。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType **参数解释**： 事件源类别。 **取值范围**： - cluster：集群。 - backup：快照。 - disaster-recovery：容灾。 - data.migration：数据迁移。 - dws.ingestion：DwsIngestion。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets occurTime
    *  **参数解释**： 时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int|null $occurTime **参数解释**： 时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 租户凭证ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： 租户凭证ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets sourceId
    *  **参数解释**： 事件源ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId **参数解释**： 事件源ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceName
    *  **参数解释**： 事件源名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName **参数解释**： 事件源名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 状态。 **取值范围**： - 1：已保存。 - 2：已处理。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： 状态。 **取值范围**： - 1：已保存。 - 2：已处理。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subject
    *  **参数解释**： 事件主题。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject **参数解释**： 事件主题。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets context
    *  **参数解释**： 事件信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
    * Sets context
    *
    * @param string|null $context **参数解释**： 事件信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setContext($context)
    {
        $this->container['context'] = $context;
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

