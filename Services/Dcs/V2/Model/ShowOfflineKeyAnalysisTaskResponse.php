<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOfflineKeyAnalysisTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOfflineKeyAnalysisTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 任务执行记录ID（此ID对应“查询离线全量key分析详情”参数中的任务ID）。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * backupId  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * nodeIp  **参数解释**： 节点ipv4地址。 **取值范围**： 不涉及。
    * nodeIpv6  **参数解释**： 节点ipv6地址。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点类型。 **取值范围**： master：主节点 slave：从节点
    * analysisType  **参数解释**： 分析类型。 **取值范围**： new_backup：新建备份并分析。 old_backup：历史备份文件分析。
    * startedAt  **参数解释**： 分析任务开始时间。 **取值范围**： 不涉及。
    * finishedAt  **参数解释**： 分析任务结束时间。 **取值范围**： 不涉及。
    * largestKeyPrefixes  **参数解释**： 前缀Key列表。
    * largestKeys  **参数解释**： 大key列表。
    * totalBytes  **参数解释**： Key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * totalNum  **参数解释**： Key的总数。 **取值范围**： 不涉及。
    * typeBytes  **参数解释**： 每种类型key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * typeNum  **参数解释**： 每种类型key总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'nodeId' => 'string',
            'backupId' => 'string',
            'groupName' => 'string',
            'nodeIp' => 'string',
            'nodeIpv6' => 'string',
            'nodeType' => 'string',
            'analysisType' => 'string',
            'startedAt' => 'string',
            'finishedAt' => 'string',
            'largestKeyPrefixes' => '\HuaweiCloud\SDK\Dcs\V2\Model\LargestKeyPrefix[]',
            'largestKeys' => '\HuaweiCloud\SDK\Dcs\V2\Model\LargestKey[]',
            'totalBytes' => 'int',
            'totalNum' => 'int',
            'typeBytes' => '\HuaweiCloud\SDK\Dcs\V2\Model\KeyTypeByte[]',
            'typeNum' => '\HuaweiCloud\SDK\Dcs\V2\Model\KeyTypeNum[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 任务执行记录ID（此ID对应“查询离线全量key分析详情”参数中的任务ID）。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * backupId  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * nodeIp  **参数解释**： 节点ipv4地址。 **取值范围**： 不涉及。
    * nodeIpv6  **参数解释**： 节点ipv6地址。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点类型。 **取值范围**： master：主节点 slave：从节点
    * analysisType  **参数解释**： 分析类型。 **取值范围**： new_backup：新建备份并分析。 old_backup：历史备份文件分析。
    * startedAt  **参数解释**： 分析任务开始时间。 **取值范围**： 不涉及。
    * finishedAt  **参数解释**： 分析任务结束时间。 **取值范围**： 不涉及。
    * largestKeyPrefixes  **参数解释**： 前缀Key列表。
    * largestKeys  **参数解释**： 大key列表。
    * totalBytes  **参数解释**： Key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * totalNum  **参数解释**： Key的总数。 **取值范围**： 不涉及。
    * typeBytes  **参数解释**： 每种类型key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * typeNum  **参数解释**： 每种类型key总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'nodeId' => null,
        'backupId' => null,
        'groupName' => null,
        'nodeIp' => null,
        'nodeIpv6' => null,
        'nodeType' => null,
        'analysisType' => null,
        'startedAt' => null,
        'finishedAt' => null,
        'largestKeyPrefixes' => null,
        'largestKeys' => null,
        'totalBytes' => null,
        'totalNum' => null,
        'typeBytes' => null,
        'typeNum' => null
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
    * id  **参数解释**： 任务执行记录ID（此ID对应“查询离线全量key分析详情”参数中的任务ID）。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * backupId  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * nodeIp  **参数解释**： 节点ipv4地址。 **取值范围**： 不涉及。
    * nodeIpv6  **参数解释**： 节点ipv6地址。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点类型。 **取值范围**： master：主节点 slave：从节点
    * analysisType  **参数解释**： 分析类型。 **取值范围**： new_backup：新建备份并分析。 old_backup：历史备份文件分析。
    * startedAt  **参数解释**： 分析任务开始时间。 **取值范围**： 不涉及。
    * finishedAt  **参数解释**： 分析任务结束时间。 **取值范围**： 不涉及。
    * largestKeyPrefixes  **参数解释**： 前缀Key列表。
    * largestKeys  **参数解释**： 大key列表。
    * totalBytes  **参数解释**： Key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * totalNum  **参数解释**： Key的总数。 **取值范围**： 不涉及。
    * typeBytes  **参数解释**： 每种类型key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * typeNum  **参数解释**： 每种类型key总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'backupId' => 'backup_id',
            'groupName' => 'group_name',
            'nodeIp' => 'node_ip',
            'nodeIpv6' => 'node_ipv6',
            'nodeType' => 'node_type',
            'analysisType' => 'analysis_type',
            'startedAt' => 'started_at',
            'finishedAt' => 'finished_at',
            'largestKeyPrefixes' => 'largest_key_prefixes',
            'largestKeys' => 'largest_keys',
            'totalBytes' => 'total_bytes',
            'totalNum' => 'total_num',
            'typeBytes' => 'type_bytes',
            'typeNum' => 'type_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 任务执行记录ID（此ID对应“查询离线全量key分析详情”参数中的任务ID）。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * backupId  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * nodeIp  **参数解释**： 节点ipv4地址。 **取值范围**： 不涉及。
    * nodeIpv6  **参数解释**： 节点ipv6地址。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点类型。 **取值范围**： master：主节点 slave：从节点
    * analysisType  **参数解释**： 分析类型。 **取值范围**： new_backup：新建备份并分析。 old_backup：历史备份文件分析。
    * startedAt  **参数解释**： 分析任务开始时间。 **取值范围**： 不涉及。
    * finishedAt  **参数解释**： 分析任务结束时间。 **取值范围**： 不涉及。
    * largestKeyPrefixes  **参数解释**： 前缀Key列表。
    * largestKeys  **参数解释**： 大key列表。
    * totalBytes  **参数解释**： Key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * totalNum  **参数解释**： Key的总数。 **取值范围**： 不涉及。
    * typeBytes  **参数解释**： 每种类型key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * typeNum  **参数解释**： 每种类型key总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'backupId' => 'setBackupId',
            'groupName' => 'setGroupName',
            'nodeIp' => 'setNodeIp',
            'nodeIpv6' => 'setNodeIpv6',
            'nodeType' => 'setNodeType',
            'analysisType' => 'setAnalysisType',
            'startedAt' => 'setStartedAt',
            'finishedAt' => 'setFinishedAt',
            'largestKeyPrefixes' => 'setLargestKeyPrefixes',
            'largestKeys' => 'setLargestKeys',
            'totalBytes' => 'setTotalBytes',
            'totalNum' => 'setTotalNum',
            'typeBytes' => 'setTypeBytes',
            'typeNum' => 'setTypeNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 任务执行记录ID（此ID对应“查询离线全量key分析详情”参数中的任务ID）。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * backupId  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    * nodeIp  **参数解释**： 节点ipv4地址。 **取值范围**： 不涉及。
    * nodeIpv6  **参数解释**： 节点ipv6地址。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点类型。 **取值范围**： master：主节点 slave：从节点
    * analysisType  **参数解释**： 分析类型。 **取值范围**： new_backup：新建备份并分析。 old_backup：历史备份文件分析。
    * startedAt  **参数解释**： 分析任务开始时间。 **取值范围**： 不涉及。
    * finishedAt  **参数解释**： 分析任务结束时间。 **取值范围**： 不涉及。
    * largestKeyPrefixes  **参数解释**： 前缀Key列表。
    * largestKeys  **参数解释**： 大key列表。
    * totalBytes  **参数解释**： Key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * totalNum  **参数解释**： Key的总数。 **取值范围**： 不涉及。
    * typeBytes  **参数解释**： 每种类型key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    * typeNum  **参数解释**： 每种类型key总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'backupId' => 'getBackupId',
            'groupName' => 'getGroupName',
            'nodeIp' => 'getNodeIp',
            'nodeIpv6' => 'getNodeIpv6',
            'nodeType' => 'getNodeType',
            'analysisType' => 'getAnalysisType',
            'startedAt' => 'getStartedAt',
            'finishedAt' => 'getFinishedAt',
            'largestKeyPrefixes' => 'getLargestKeyPrefixes',
            'largestKeys' => 'getLargestKeys',
            'totalBytes' => 'getTotalBytes',
            'totalNum' => 'getTotalNum',
            'typeBytes' => 'getTypeBytes',
            'typeNum' => 'getTypeNum'
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
    const ANALYSIS_TYPE_NEW_BACKUP = 'new_backup';
    const ANALYSIS_TYPE_OLD_BACKUP = 'old_backup';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAnalysisTypeAllowableValues()
    {
        return [
            self::ANALYSIS_TYPE_NEW_BACKUP,
            self::ANALYSIS_TYPE_OLD_BACKUP,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['nodeIp'] = isset($data['nodeIp']) ? $data['nodeIp'] : null;
        $this->container['nodeIpv6'] = isset($data['nodeIpv6']) ? $data['nodeIpv6'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['analysisType'] = isset($data['analysisType']) ? $data['analysisType'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['largestKeyPrefixes'] = isset($data['largestKeyPrefixes']) ? $data['largestKeyPrefixes'] : null;
        $this->container['largestKeys'] = isset($data['largestKeys']) ? $data['largestKeys'] : null;
        $this->container['totalBytes'] = isset($data['totalBytes']) ? $data['totalBytes'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['typeBytes'] = isset($data['typeBytes']) ? $data['typeBytes'] : null;
        $this->container['typeNum'] = isset($data['typeNum']) ? $data['typeNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAnalysisTypeAllowableValues();
                if (!is_null($this->container['analysisType']) && !in_array($this->container['analysisType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'analysisType', must be one of '%s'",
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
    * Gets id
    *  **参数解释**： 任务执行记录ID（此ID对应“查询离线全量key分析详情”参数中的任务ID）。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 任务执行记录ID（此ID对应“查询离线全量key分析详情”参数中的任务ID）。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    * @param string|null $instanceId **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**： 节点ID。 **取值范围**： 不涉及。
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
    * @param string|null $nodeId **参数解释**： 节点ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets backupId
    *  **参数解释**： 备份ID。 **取值范围**： 不涉及。
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
    * @param string|null $backupId **参数解释**： 备份ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 分片名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**： 分片名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets nodeIp
    *  **参数解释**： 节点ipv4地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNodeIp()
    {
        return $this->container['nodeIp'];
    }

    /**
    * Sets nodeIp
    *
    * @param string|null $nodeIp **参数解释**： 节点ipv4地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeIp($nodeIp)
    {
        $this->container['nodeIp'] = $nodeIp;
        return $this;
    }

    /**
    * Gets nodeIpv6
    *  **参数解释**： 节点ipv6地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNodeIpv6()
    {
        return $this->container['nodeIpv6'];
    }

    /**
    * Sets nodeIpv6
    *
    * @param string|null $nodeIpv6 **参数解释**： 节点ipv6地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeIpv6($nodeIpv6)
    {
        $this->container['nodeIpv6'] = $nodeIpv6;
        return $this;
    }

    /**
    * Gets nodeType
    *  **参数解释**： 节点类型。 **取值范围**： master：主节点 slave：从节点
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType **参数解释**： 节点类型。 **取值范围**： master：主节点 slave：从节点
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets analysisType
    *  **参数解释**： 分析类型。 **取值范围**： new_backup：新建备份并分析。 old_backup：历史备份文件分析。
    *
    * @return string|null
    */
    public function getAnalysisType()
    {
        return $this->container['analysisType'];
    }

    /**
    * Sets analysisType
    *
    * @param string|null $analysisType **参数解释**： 分析类型。 **取值范围**： new_backup：新建备份并分析。 old_backup：历史备份文件分析。
    *
    * @return $this
    */
    public function setAnalysisType($analysisType)
    {
        $this->container['analysisType'] = $analysisType;
        return $this;
    }

    /**
    * Gets startedAt
    *  **参数解释**： 分析任务开始时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
    * Sets startedAt
    *
    * @param string|null $startedAt **参数解释**： 分析任务开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;
        return $this;
    }

    /**
    * Gets finishedAt
    *  **参数解释**： 分析任务结束时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
    * Sets finishedAt
    *
    * @param string|null $finishedAt **参数解释**： 分析任务结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
        return $this;
    }

    /**
    * Gets largestKeyPrefixes
    *  **参数解释**： 前缀Key列表。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\LargestKeyPrefix[]|null
    */
    public function getLargestKeyPrefixes()
    {
        return $this->container['largestKeyPrefixes'];
    }

    /**
    * Sets largestKeyPrefixes
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\LargestKeyPrefix[]|null $largestKeyPrefixes **参数解释**： 前缀Key列表。
    *
    * @return $this
    */
    public function setLargestKeyPrefixes($largestKeyPrefixes)
    {
        $this->container['largestKeyPrefixes'] = $largestKeyPrefixes;
        return $this;
    }

    /**
    * Gets largestKeys
    *  **参数解释**： 大key列表。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\LargestKey[]|null
    */
    public function getLargestKeys()
    {
        return $this->container['largestKeys'];
    }

    /**
    * Sets largestKeys
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\LargestKey[]|null $largestKeys **参数解释**： 大key列表。
    *
    * @return $this
    */
    public function setLargestKeys($largestKeys)
    {
        $this->container['largestKeys'] = $largestKeys;
        return $this;
    }

    /**
    * Gets totalBytes
    *  **参数解释**： Key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotalBytes()
    {
        return $this->container['totalBytes'];
    }

    /**
    * Sets totalBytes
    *
    * @param int|null $totalBytes **参数解释**： Key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotalBytes($totalBytes)
    {
        $this->container['totalBytes'] = $totalBytes;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释**： Key的总数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum **参数解释**： Key的总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets typeBytes
    *  **参数解释**： 每种类型key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\KeyTypeByte[]|null
    */
    public function getTypeBytes()
    {
        return $this->container['typeBytes'];
    }

    /**
    * Sets typeBytes
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\KeyTypeByte[]|null $typeBytes **参数解释**： 每种类型key的总大小，单位：Bytes。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTypeBytes($typeBytes)
    {
        $this->container['typeBytes'] = $typeBytes;
        return $this;
    }

    /**
    * Gets typeNum
    *  **参数解释**： 每种类型key总数。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\KeyTypeNum[]|null
    */
    public function getTypeNum()
    {
        return $this->container['typeNum'];
    }

    /**
    * Sets typeNum
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\KeyTypeNum[]|null $typeNum **参数解释**： 每种类型key总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTypeNum($typeNum)
    {
        $this->container['typeNum'] = $typeNum;
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

