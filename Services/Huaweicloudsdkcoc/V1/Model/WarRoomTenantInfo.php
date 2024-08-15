<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WarRoomTenantInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WarRoomTenantInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键
    * title  标题
    * admin  WarRoom管理员
    * recoverMember  恢复成员
    * recoverLeader  主恢复责任人
    * incident  incident
    * source  事件来源
    * regions  影响的Region
    * changeNum  变更单号
    * occurTime  开始时间
    * recoverTime  故障恢复时间
    * faultCause  故障原因
    * createTime  添加时间
    * firstReportTime  首次通报时间
    * recoveryNotificationTime  恢复通报时间
    * faultImpact  故障影响
    * description  WarRoom描述
    * circularLevel  通报级别 租户区同事件级别
    * warRoomStatus  warRoomStatus
    * impactedApplication  影响应用
    * processingDuration  处理时长(分钟)
    * restorationDuration  恢复时长(分钟)
    * warRoomNum  WarRoom单号
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'title' => 'string',
            'admin' => 'string',
            'recoverMember' => 'string[]',
            'recoverLeader' => 'string[]',
            'incident' => '\HuaweiCloud\SDK\Coc\V1\Model\WarRoomIncident',
            'source' => 'string',
            'regions' => '\HuaweiCloud\SDK\Coc\V1\Model\WarRoomTenantInfoRegions[]',
            'changeNum' => 'string',
            'occurTime' => 'int',
            'recoverTime' => 'int',
            'faultCause' => 'string',
            'createTime' => 'int',
            'firstReportTime' => 'int',
            'recoveryNotificationTime' => 'int',
            'faultImpact' => 'string',
            'description' => 'string',
            'circularLevel' => 'string',
            'warRoomStatus' => '\HuaweiCloud\SDK\Coc\V1\Model\WarRoomEnumeration',
            'impactedApplication' => '\HuaweiCloud\SDK\Coc\V1\Model\WarRoomTenantInfoImpactedApplication[]',
            'processingDuration' => 'int',
            'restorationDuration' => 'int',
            'warRoomNum' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键
    * title  标题
    * admin  WarRoom管理员
    * recoverMember  恢复成员
    * recoverLeader  主恢复责任人
    * incident  incident
    * source  事件来源
    * regions  影响的Region
    * changeNum  变更单号
    * occurTime  开始时间
    * recoverTime  故障恢复时间
    * faultCause  故障原因
    * createTime  添加时间
    * firstReportTime  首次通报时间
    * recoveryNotificationTime  恢复通报时间
    * faultImpact  故障影响
    * description  WarRoom描述
    * circularLevel  通报级别 租户区同事件级别
    * warRoomStatus  warRoomStatus
    * impactedApplication  影响应用
    * processingDuration  处理时长(分钟)
    * restorationDuration  恢复时长(分钟)
    * warRoomNum  WarRoom单号
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'admin' => null,
        'recoverMember' => null,
        'recoverLeader' => null,
        'incident' => null,
        'source' => null,
        'regions' => null,
        'changeNum' => null,
        'occurTime' => 'int64',
        'recoverTime' => 'int64',
        'faultCause' => null,
        'createTime' => 'int64',
        'firstReportTime' => 'int64',
        'recoveryNotificationTime' => 'int64',
        'faultImpact' => null,
        'description' => null,
        'circularLevel' => null,
        'warRoomStatus' => null,
        'impactedApplication' => null,
        'processingDuration' => 'int64',
        'restorationDuration' => 'int64',
        'warRoomNum' => null,
        'enterpriseProjectId' => null
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
    * id  主键
    * title  标题
    * admin  WarRoom管理员
    * recoverMember  恢复成员
    * recoverLeader  主恢复责任人
    * incident  incident
    * source  事件来源
    * regions  影响的Region
    * changeNum  变更单号
    * occurTime  开始时间
    * recoverTime  故障恢复时间
    * faultCause  故障原因
    * createTime  添加时间
    * firstReportTime  首次通报时间
    * recoveryNotificationTime  恢复通报时间
    * faultImpact  故障影响
    * description  WarRoom描述
    * circularLevel  通报级别 租户区同事件级别
    * warRoomStatus  warRoomStatus
    * impactedApplication  影响应用
    * processingDuration  处理时长(分钟)
    * restorationDuration  恢复时长(分钟)
    * warRoomNum  WarRoom单号
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'title' => 'title',
            'admin' => 'admin',
            'recoverMember' => 'recover_member',
            'recoverLeader' => 'recover_leader',
            'incident' => 'incident',
            'source' => 'source',
            'regions' => 'regions',
            'changeNum' => 'change_num',
            'occurTime' => 'occur_time',
            'recoverTime' => 'recover_time',
            'faultCause' => 'fault_cause',
            'createTime' => 'create_time',
            'firstReportTime' => 'first_report_time',
            'recoveryNotificationTime' => 'recovery_notification_time',
            'faultImpact' => 'fault_impact',
            'description' => 'description',
            'circularLevel' => 'circular_level',
            'warRoomStatus' => 'war_room_status',
            'impactedApplication' => 'impacted_application',
            'processingDuration' => 'processing_duration',
            'restorationDuration' => 'restoration_duration',
            'warRoomNum' => 'war_room_num',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键
    * title  标题
    * admin  WarRoom管理员
    * recoverMember  恢复成员
    * recoverLeader  主恢复责任人
    * incident  incident
    * source  事件来源
    * regions  影响的Region
    * changeNum  变更单号
    * occurTime  开始时间
    * recoverTime  故障恢复时间
    * faultCause  故障原因
    * createTime  添加时间
    * firstReportTime  首次通报时间
    * recoveryNotificationTime  恢复通报时间
    * faultImpact  故障影响
    * description  WarRoom描述
    * circularLevel  通报级别 租户区同事件级别
    * warRoomStatus  warRoomStatus
    * impactedApplication  影响应用
    * processingDuration  处理时长(分钟)
    * restorationDuration  恢复时长(分钟)
    * warRoomNum  WarRoom单号
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'title' => 'setTitle',
            'admin' => 'setAdmin',
            'recoverMember' => 'setRecoverMember',
            'recoverLeader' => 'setRecoverLeader',
            'incident' => 'setIncident',
            'source' => 'setSource',
            'regions' => 'setRegions',
            'changeNum' => 'setChangeNum',
            'occurTime' => 'setOccurTime',
            'recoverTime' => 'setRecoverTime',
            'faultCause' => 'setFaultCause',
            'createTime' => 'setCreateTime',
            'firstReportTime' => 'setFirstReportTime',
            'recoveryNotificationTime' => 'setRecoveryNotificationTime',
            'faultImpact' => 'setFaultImpact',
            'description' => 'setDescription',
            'circularLevel' => 'setCircularLevel',
            'warRoomStatus' => 'setWarRoomStatus',
            'impactedApplication' => 'setImpactedApplication',
            'processingDuration' => 'setProcessingDuration',
            'restorationDuration' => 'setRestorationDuration',
            'warRoomNum' => 'setWarRoomNum',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键
    * title  标题
    * admin  WarRoom管理员
    * recoverMember  恢复成员
    * recoverLeader  主恢复责任人
    * incident  incident
    * source  事件来源
    * regions  影响的Region
    * changeNum  变更单号
    * occurTime  开始时间
    * recoverTime  故障恢复时间
    * faultCause  故障原因
    * createTime  添加时间
    * firstReportTime  首次通报时间
    * recoveryNotificationTime  恢复通报时间
    * faultImpact  故障影响
    * description  WarRoom描述
    * circularLevel  通报级别 租户区同事件级别
    * warRoomStatus  warRoomStatus
    * impactedApplication  影响应用
    * processingDuration  处理时长(分钟)
    * restorationDuration  恢复时长(分钟)
    * warRoomNum  WarRoom单号
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'title' => 'getTitle',
            'admin' => 'getAdmin',
            'recoverMember' => 'getRecoverMember',
            'recoverLeader' => 'getRecoverLeader',
            'incident' => 'getIncident',
            'source' => 'getSource',
            'regions' => 'getRegions',
            'changeNum' => 'getChangeNum',
            'occurTime' => 'getOccurTime',
            'recoverTime' => 'getRecoverTime',
            'faultCause' => 'getFaultCause',
            'createTime' => 'getCreateTime',
            'firstReportTime' => 'getFirstReportTime',
            'recoveryNotificationTime' => 'getRecoveryNotificationTime',
            'faultImpact' => 'getFaultImpact',
            'description' => 'getDescription',
            'circularLevel' => 'getCircularLevel',
            'warRoomStatus' => 'getWarRoomStatus',
            'impactedApplication' => 'getImpactedApplication',
            'processingDuration' => 'getProcessingDuration',
            'restorationDuration' => 'getRestorationDuration',
            'warRoomNum' => 'getWarRoomNum',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['recoverMember'] = isset($data['recoverMember']) ? $data['recoverMember'] : null;
        $this->container['recoverLeader'] = isset($data['recoverLeader']) ? $data['recoverLeader'] : null;
        $this->container['incident'] = isset($data['incident']) ? $data['incident'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['changeNum'] = isset($data['changeNum']) ? $data['changeNum'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['recoverTime'] = isset($data['recoverTime']) ? $data['recoverTime'] : null;
        $this->container['faultCause'] = isset($data['faultCause']) ? $data['faultCause'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['firstReportTime'] = isset($data['firstReportTime']) ? $data['firstReportTime'] : null;
        $this->container['recoveryNotificationTime'] = isset($data['recoveryNotificationTime']) ? $data['recoveryNotificationTime'] : null;
        $this->container['faultImpact'] = isset($data['faultImpact']) ? $data['faultImpact'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['circularLevel'] = isset($data['circularLevel']) ? $data['circularLevel'] : null;
        $this->container['warRoomStatus'] = isset($data['warRoomStatus']) ? $data['warRoomStatus'] : null;
        $this->container['impactedApplication'] = isset($data['impactedApplication']) ? $data['impactedApplication'] : null;
        $this->container['processingDuration'] = isset($data['processingDuration']) ? $data['processingDuration'] : null;
        $this->container['restorationDuration'] = isset($data['restorationDuration']) ? $data['restorationDuration'] : null;
        $this->container['warRoomNum'] = isset($data['warRoomNum']) ? $data['warRoomNum'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 100)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['admin']) && (mb_strlen($this->container['admin']) > 255)) {
                $invalidProperties[] = "invalid value for 'admin', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['admin']) && (mb_strlen($this->container['admin']) < 0)) {
                $invalidProperties[] = "invalid value for 'admin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 255)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 0)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeNum']) && (mb_strlen($this->container['changeNum']) > 255)) {
                $invalidProperties[] = "invalid value for 'changeNum', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['changeNum']) && (mb_strlen($this->container['changeNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeNum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recoverTime']) && ($this->container['recoverTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'recoverTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['recoverTime']) && ($this->container['recoverTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recoverTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['faultCause']) && (mb_strlen($this->container['faultCause']) > 255)) {
                $invalidProperties[] = "invalid value for 'faultCause', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['faultCause']) && (mb_strlen($this->container['faultCause']) < 0)) {
                $invalidProperties[] = "invalid value for 'faultCause', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstReportTime']) && ($this->container['firstReportTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstReportTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstReportTime']) && ($this->container['firstReportTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstReportTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recoveryNotificationTime']) && ($this->container['recoveryNotificationTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'recoveryNotificationTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['recoveryNotificationTime']) && ($this->container['recoveryNotificationTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recoveryNotificationTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['faultImpact']) && (mb_strlen($this->container['faultImpact']) > 255)) {
                $invalidProperties[] = "invalid value for 'faultImpact', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['faultImpact']) && (mb_strlen($this->container['faultImpact']) < 0)) {
                $invalidProperties[] = "invalid value for 'faultImpact', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['circularLevel']) && (mb_strlen($this->container['circularLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'circularLevel', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['circularLevel']) && (mb_strlen($this->container['circularLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'circularLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processingDuration']) && ($this->container['processingDuration'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'processingDuration', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['processingDuration']) && ($this->container['processingDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'processingDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['restorationDuration']) && ($this->container['restorationDuration'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'restorationDuration', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['restorationDuration']) && ($this->container['restorationDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'restorationDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['warRoomNum']) && (mb_strlen($this->container['warRoomNum']) > 255)) {
                $invalidProperties[] = "invalid value for 'warRoomNum', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['warRoomNum']) && (mb_strlen($this->container['warRoomNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'warRoomNum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    *  主键
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
    * @param string|null $id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets title
    *  标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets admin
    *  WarRoom管理员
    *
    * @return string|null
    */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
    * Sets admin
    *
    * @param string|null $admin WarRoom管理员
    *
    * @return $this
    */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;
        return $this;
    }

    /**
    * Gets recoverMember
    *  恢复成员
    *
    * @return string[]|null
    */
    public function getRecoverMember()
    {
        return $this->container['recoverMember'];
    }

    /**
    * Sets recoverMember
    *
    * @param string[]|null $recoverMember 恢复成员
    *
    * @return $this
    */
    public function setRecoverMember($recoverMember)
    {
        $this->container['recoverMember'] = $recoverMember;
        return $this;
    }

    /**
    * Gets recoverLeader
    *  主恢复责任人
    *
    * @return string[]|null
    */
    public function getRecoverLeader()
    {
        return $this->container['recoverLeader'];
    }

    /**
    * Sets recoverLeader
    *
    * @param string[]|null $recoverLeader 主恢复责任人
    *
    * @return $this
    */
    public function setRecoverLeader($recoverLeader)
    {
        $this->container['recoverLeader'] = $recoverLeader;
        return $this;
    }

    /**
    * Gets incident
    *  incident
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\WarRoomIncident|null
    */
    public function getIncident()
    {
        return $this->container['incident'];
    }

    /**
    * Sets incident
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\WarRoomIncident|null $incident incident
    *
    * @return $this
    */
    public function setIncident($incident)
    {
        $this->container['incident'] = $incident;
        return $this;
    }

    /**
    * Gets source
    *  事件来源
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 事件来源
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets regions
    *  影响的Region
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\WarRoomTenantInfoRegions[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\WarRoomTenantInfoRegions[]|null $regions 影响的Region
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets changeNum
    *  变更单号
    *
    * @return string|null
    */
    public function getChangeNum()
    {
        return $this->container['changeNum'];
    }

    /**
    * Sets changeNum
    *
    * @param string|null $changeNum 变更单号
    *
    * @return $this
    */
    public function setChangeNum($changeNum)
    {
        $this->container['changeNum'] = $changeNum;
        return $this;
    }

    /**
    * Gets occurTime
    *  开始时间
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
    * @param int|null $occurTime 开始时间
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets recoverTime
    *  故障恢复时间
    *
    * @return int|null
    */
    public function getRecoverTime()
    {
        return $this->container['recoverTime'];
    }

    /**
    * Sets recoverTime
    *
    * @param int|null $recoverTime 故障恢复时间
    *
    * @return $this
    */
    public function setRecoverTime($recoverTime)
    {
        $this->container['recoverTime'] = $recoverTime;
        return $this;
    }

    /**
    * Gets faultCause
    *  故障原因
    *
    * @return string|null
    */
    public function getFaultCause()
    {
        return $this->container['faultCause'];
    }

    /**
    * Sets faultCause
    *
    * @param string|null $faultCause 故障原因
    *
    * @return $this
    */
    public function setFaultCause($faultCause)
    {
        $this->container['faultCause'] = $faultCause;
        return $this;
    }

    /**
    * Gets createTime
    *  添加时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 添加时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets firstReportTime
    *  首次通报时间
    *
    * @return int|null
    */
    public function getFirstReportTime()
    {
        return $this->container['firstReportTime'];
    }

    /**
    * Sets firstReportTime
    *
    * @param int|null $firstReportTime 首次通报时间
    *
    * @return $this
    */
    public function setFirstReportTime($firstReportTime)
    {
        $this->container['firstReportTime'] = $firstReportTime;
        return $this;
    }

    /**
    * Gets recoveryNotificationTime
    *  恢复通报时间
    *
    * @return int|null
    */
    public function getRecoveryNotificationTime()
    {
        return $this->container['recoveryNotificationTime'];
    }

    /**
    * Sets recoveryNotificationTime
    *
    * @param int|null $recoveryNotificationTime 恢复通报时间
    *
    * @return $this
    */
    public function setRecoveryNotificationTime($recoveryNotificationTime)
    {
        $this->container['recoveryNotificationTime'] = $recoveryNotificationTime;
        return $this;
    }

    /**
    * Gets faultImpact
    *  故障影响
    *
    * @return string|null
    */
    public function getFaultImpact()
    {
        return $this->container['faultImpact'];
    }

    /**
    * Sets faultImpact
    *
    * @param string|null $faultImpact 故障影响
    *
    * @return $this
    */
    public function setFaultImpact($faultImpact)
    {
        $this->container['faultImpact'] = $faultImpact;
        return $this;
    }

    /**
    * Gets description
    *  WarRoom描述
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
    * @param string|null $description WarRoom描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets circularLevel
    *  通报级别 租户区同事件级别
    *
    * @return string|null
    */
    public function getCircularLevel()
    {
        return $this->container['circularLevel'];
    }

    /**
    * Sets circularLevel
    *
    * @param string|null $circularLevel 通报级别 租户区同事件级别
    *
    * @return $this
    */
    public function setCircularLevel($circularLevel)
    {
        $this->container['circularLevel'] = $circularLevel;
        return $this;
    }

    /**
    * Gets warRoomStatus
    *  warRoomStatus
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\WarRoomEnumeration|null
    */
    public function getWarRoomStatus()
    {
        return $this->container['warRoomStatus'];
    }

    /**
    * Sets warRoomStatus
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\WarRoomEnumeration|null $warRoomStatus warRoomStatus
    *
    * @return $this
    */
    public function setWarRoomStatus($warRoomStatus)
    {
        $this->container['warRoomStatus'] = $warRoomStatus;
        return $this;
    }

    /**
    * Gets impactedApplication
    *  影响应用
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\WarRoomTenantInfoImpactedApplication[]|null
    */
    public function getImpactedApplication()
    {
        return $this->container['impactedApplication'];
    }

    /**
    * Sets impactedApplication
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\WarRoomTenantInfoImpactedApplication[]|null $impactedApplication 影响应用
    *
    * @return $this
    */
    public function setImpactedApplication($impactedApplication)
    {
        $this->container['impactedApplication'] = $impactedApplication;
        return $this;
    }

    /**
    * Gets processingDuration
    *  处理时长(分钟)
    *
    * @return int|null
    */
    public function getProcessingDuration()
    {
        return $this->container['processingDuration'];
    }

    /**
    * Sets processingDuration
    *
    * @param int|null $processingDuration 处理时长(分钟)
    *
    * @return $this
    */
    public function setProcessingDuration($processingDuration)
    {
        $this->container['processingDuration'] = $processingDuration;
        return $this;
    }

    /**
    * Gets restorationDuration
    *  恢复时长(分钟)
    *
    * @return int|null
    */
    public function getRestorationDuration()
    {
        return $this->container['restorationDuration'];
    }

    /**
    * Sets restorationDuration
    *
    * @param int|null $restorationDuration 恢复时长(分钟)
    *
    * @return $this
    */
    public function setRestorationDuration($restorationDuration)
    {
        $this->container['restorationDuration'] = $restorationDuration;
        return $this;
    }

    /**
    * Gets warRoomNum
    *  WarRoom单号
    *
    * @return string|null
    */
    public function getWarRoomNum()
    {
        return $this->container['warRoomNum'];
    }

    /**
    * Sets warRoomNum
    *
    * @param string|null $warRoomNum WarRoom单号
    *
    * @return $this
    */
    public function setWarRoomNum($warRoomNum)
    {
        $this->container['warRoomNum'] = $warRoomNum;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

