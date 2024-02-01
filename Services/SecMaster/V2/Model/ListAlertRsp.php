<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  版本
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  Update time
    * lastObservedTime  Update time
    * createTime  Create time
    * arriveTime  Update time
    * title  The name, display only
    * description  The description, display only
    * sourceUrl  事件URL链接
    * count  事件发生次数
    * confidence  置信度
    * severity  严重性等级
    * criticality  关键性，是指事件涉及的资源的重要性级别。
    * alertType  事件分类
    * networkList  network_list
    * resourceList  network_list
    * remediation  remediation
    * verificationState  验证状态
    * handleStatus  事件处理状态
    * sla  sla
    * updateTime  Create time
    * closeTime  Create time
    * chopPhase  周期/处置阶段编号
    * ipdrrPhase  周期/处置阶段编号
    * ppdrPhase  周期/处置阶段编号
    * simulation  是否为调试事件.
    * actor  委托人
    * owner  The name, display only
    * creator  The name, display only
    * closeReason  关闭原因
    * closeComment  关闭原因
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  系统信息
    * id  Id value
    * workspaceId  workspace id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspEnvironment',
            'dataSource' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspDatasource',
            'firstObservedTime' => 'string',
            'lastObservedTime' => 'string',
            'createTime' => 'string',
            'arriveTime' => 'string',
            'title' => 'string',
            'description' => 'string',
            'sourceUrl' => 'string',
            'count' => 'int',
            'confidence' => 'int',
            'severity' => 'string',
            'criticality' => 'int',
            'alertType' => 'object',
            'networkList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRspNetworkList[]',
            'resourceList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspResourceList[]',
            'remediation' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspRemediation',
            'verificationState' => 'string',
            'handleStatus' => 'string',
            'sla' => 'string',
            'updateTime' => 'string',
            'closeTime' => 'string',
            'chopPhase' => 'string',
            'ipdrrPhase' => 'string',
            'ppdrPhase' => 'string',
            'simulation' => 'string',
            'actor' => 'string',
            'owner' => 'string',
            'creator' => 'string',
            'closeReason' => 'string',
            'closeComment' => 'string',
            'malware' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspMalware',
            'systemInfo' => 'object',
            'process' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRspProcess[]',
            'userInfo' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspUserInfo[]',
            'fileInfo' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspFileInfo[]',
            'systemAlertTable' => 'object',
            'id' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  版本
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  Update time
    * lastObservedTime  Update time
    * createTime  Create time
    * arriveTime  Update time
    * title  The name, display only
    * description  The description, display only
    * sourceUrl  事件URL链接
    * count  事件发生次数
    * confidence  置信度
    * severity  严重性等级
    * criticality  关键性，是指事件涉及的资源的重要性级别。
    * alertType  事件分类
    * networkList  network_list
    * resourceList  network_list
    * remediation  remediation
    * verificationState  验证状态
    * handleStatus  事件处理状态
    * sla  sla
    * updateTime  Create time
    * closeTime  Create time
    * chopPhase  周期/处置阶段编号
    * ipdrrPhase  周期/处置阶段编号
    * ppdrPhase  周期/处置阶段编号
    * simulation  是否为调试事件.
    * actor  委托人
    * owner  The name, display only
    * creator  The name, display only
    * closeReason  关闭原因
    * closeComment  关闭原因
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  系统信息
    * id  Id value
    * workspaceId  workspace id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'environment' => null,
        'dataSource' => null,
        'firstObservedTime' => null,
        'lastObservedTime' => null,
        'createTime' => null,
        'arriveTime' => null,
        'title' => null,
        'description' => null,
        'sourceUrl' => null,
        'count' => null,
        'confidence' => null,
        'severity' => null,
        'criticality' => null,
        'alertType' => null,
        'networkList' => null,
        'resourceList' => null,
        'remediation' => null,
        'verificationState' => null,
        'handleStatus' => null,
        'sla' => null,
        'updateTime' => null,
        'closeTime' => null,
        'chopPhase' => null,
        'ipdrrPhase' => null,
        'ppdrPhase' => null,
        'simulation' => null,
        'actor' => null,
        'owner' => null,
        'creator' => null,
        'closeReason' => null,
        'closeComment' => null,
        'malware' => null,
        'systemInfo' => null,
        'process' => null,
        'userInfo' => null,
        'fileInfo' => null,
        'systemAlertTable' => null,
        'id' => null,
        'workspaceId' => null
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
    * version  版本
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  Update time
    * lastObservedTime  Update time
    * createTime  Create time
    * arriveTime  Update time
    * title  The name, display only
    * description  The description, display only
    * sourceUrl  事件URL链接
    * count  事件发生次数
    * confidence  置信度
    * severity  严重性等级
    * criticality  关键性，是指事件涉及的资源的重要性级别。
    * alertType  事件分类
    * networkList  network_list
    * resourceList  network_list
    * remediation  remediation
    * verificationState  验证状态
    * handleStatus  事件处理状态
    * sla  sla
    * updateTime  Create time
    * closeTime  Create time
    * chopPhase  周期/处置阶段编号
    * ipdrrPhase  周期/处置阶段编号
    * ppdrPhase  周期/处置阶段编号
    * simulation  是否为调试事件.
    * actor  委托人
    * owner  The name, display only
    * creator  The name, display only
    * closeReason  关闭原因
    * closeComment  关闭原因
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  系统信息
    * id  Id value
    * workspaceId  workspace id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'environment' => 'environment',
            'dataSource' => 'data_source',
            'firstObservedTime' => 'first_observed_time',
            'lastObservedTime' => 'last_observed_time',
            'createTime' => 'create_time',
            'arriveTime' => 'arrive_time',
            'title' => 'title',
            'description' => 'description',
            'sourceUrl' => 'source_url',
            'count' => 'count',
            'confidence' => 'confidence',
            'severity' => 'severity',
            'criticality' => 'criticality',
            'alertType' => 'alert_type',
            'networkList' => 'network_list',
            'resourceList' => 'resource_list',
            'remediation' => 'remediation',
            'verificationState' => 'verification_state',
            'handleStatus' => 'handle_status',
            'sla' => 'sla',
            'updateTime' => 'update_time',
            'closeTime' => 'close_time',
            'chopPhase' => 'chop_phase',
            'ipdrrPhase' => 'ipdrr_phase',
            'ppdrPhase' => 'ppdr_phase',
            'simulation' => 'simulation',
            'actor' => 'actor',
            'owner' => 'owner',
            'creator' => 'creator',
            'closeReason' => 'close_reason',
            'closeComment' => 'close_comment',
            'malware' => 'malware',
            'systemInfo' => 'system_info',
            'process' => 'process',
            'userInfo' => 'user_info',
            'fileInfo' => 'file_info',
            'systemAlertTable' => 'system_alert_table',
            'id' => 'id',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  版本
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  Update time
    * lastObservedTime  Update time
    * createTime  Create time
    * arriveTime  Update time
    * title  The name, display only
    * description  The description, display only
    * sourceUrl  事件URL链接
    * count  事件发生次数
    * confidence  置信度
    * severity  严重性等级
    * criticality  关键性，是指事件涉及的资源的重要性级别。
    * alertType  事件分类
    * networkList  network_list
    * resourceList  network_list
    * remediation  remediation
    * verificationState  验证状态
    * handleStatus  事件处理状态
    * sla  sla
    * updateTime  Create time
    * closeTime  Create time
    * chopPhase  周期/处置阶段编号
    * ipdrrPhase  周期/处置阶段编号
    * ppdrPhase  周期/处置阶段编号
    * simulation  是否为调试事件.
    * actor  委托人
    * owner  The name, display only
    * creator  The name, display only
    * closeReason  关闭原因
    * closeComment  关闭原因
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  系统信息
    * id  Id value
    * workspaceId  workspace id
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'environment' => 'setEnvironment',
            'dataSource' => 'setDataSource',
            'firstObservedTime' => 'setFirstObservedTime',
            'lastObservedTime' => 'setLastObservedTime',
            'createTime' => 'setCreateTime',
            'arriveTime' => 'setArriveTime',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'sourceUrl' => 'setSourceUrl',
            'count' => 'setCount',
            'confidence' => 'setConfidence',
            'severity' => 'setSeverity',
            'criticality' => 'setCriticality',
            'alertType' => 'setAlertType',
            'networkList' => 'setNetworkList',
            'resourceList' => 'setResourceList',
            'remediation' => 'setRemediation',
            'verificationState' => 'setVerificationState',
            'handleStatus' => 'setHandleStatus',
            'sla' => 'setSla',
            'updateTime' => 'setUpdateTime',
            'closeTime' => 'setCloseTime',
            'chopPhase' => 'setChopPhase',
            'ipdrrPhase' => 'setIpdrrPhase',
            'ppdrPhase' => 'setPpdrPhase',
            'simulation' => 'setSimulation',
            'actor' => 'setActor',
            'owner' => 'setOwner',
            'creator' => 'setCreator',
            'closeReason' => 'setCloseReason',
            'closeComment' => 'setCloseComment',
            'malware' => 'setMalware',
            'systemInfo' => 'setSystemInfo',
            'process' => 'setProcess',
            'userInfo' => 'setUserInfo',
            'fileInfo' => 'setFileInfo',
            'systemAlertTable' => 'setSystemAlertTable',
            'id' => 'setId',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  版本
    * environment  environment
    * dataSource  dataSource
    * firstObservedTime  Update time
    * lastObservedTime  Update time
    * createTime  Create time
    * arriveTime  Update time
    * title  The name, display only
    * description  The description, display only
    * sourceUrl  事件URL链接
    * count  事件发生次数
    * confidence  置信度
    * severity  严重性等级
    * criticality  关键性，是指事件涉及的资源的重要性级别。
    * alertType  事件分类
    * networkList  network_list
    * resourceList  network_list
    * remediation  remediation
    * verificationState  验证状态
    * handleStatus  事件处理状态
    * sla  sla
    * updateTime  Create time
    * closeTime  Create time
    * chopPhase  周期/处置阶段编号
    * ipdrrPhase  周期/处置阶段编号
    * ppdrPhase  周期/处置阶段编号
    * simulation  是否为调试事件.
    * actor  委托人
    * owner  The name, display only
    * creator  The name, display only
    * closeReason  关闭原因
    * closeComment  关闭原因
    * malware  malware
    * systemInfo  系统信息
    * process  进程信息
    * userInfo  用户信息
    * fileInfo  文件信息
    * systemAlertTable  系统信息
    * id  Id value
    * workspaceId  workspace id
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'environment' => 'getEnvironment',
            'dataSource' => 'getDataSource',
            'firstObservedTime' => 'getFirstObservedTime',
            'lastObservedTime' => 'getLastObservedTime',
            'createTime' => 'getCreateTime',
            'arriveTime' => 'getArriveTime',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'sourceUrl' => 'getSourceUrl',
            'count' => 'getCount',
            'confidence' => 'getConfidence',
            'severity' => 'getSeverity',
            'criticality' => 'getCriticality',
            'alertType' => 'getAlertType',
            'networkList' => 'getNetworkList',
            'resourceList' => 'getResourceList',
            'remediation' => 'getRemediation',
            'verificationState' => 'getVerificationState',
            'handleStatus' => 'getHandleStatus',
            'sla' => 'getSla',
            'updateTime' => 'getUpdateTime',
            'closeTime' => 'getCloseTime',
            'chopPhase' => 'getChopPhase',
            'ipdrrPhase' => 'getIpdrrPhase',
            'ppdrPhase' => 'getPpdrPhase',
            'simulation' => 'getSimulation',
            'actor' => 'getActor',
            'owner' => 'getOwner',
            'creator' => 'getCreator',
            'closeReason' => 'getCloseReason',
            'closeComment' => 'getCloseComment',
            'malware' => 'getMalware',
            'systemInfo' => 'getSystemInfo',
            'process' => 'getProcess',
            'userInfo' => 'getUserInfo',
            'fileInfo' => 'getFileInfo',
            'systemAlertTable' => 'getSystemAlertTable',
            'id' => 'getId',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['firstObservedTime'] = isset($data['firstObservedTime']) ? $data['firstObservedTime'] : null;
        $this->container['lastObservedTime'] = isset($data['lastObservedTime']) ? $data['lastObservedTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['arriveTime'] = isset($data['arriveTime']) ? $data['arriveTime'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['criticality'] = isset($data['criticality']) ? $data['criticality'] : null;
        $this->container['alertType'] = isset($data['alertType']) ? $data['alertType'] : null;
        $this->container['networkList'] = isset($data['networkList']) ? $data['networkList'] : null;
        $this->container['resourceList'] = isset($data['resourceList']) ? $data['resourceList'] : null;
        $this->container['remediation'] = isset($data['remediation']) ? $data['remediation'] : null;
        $this->container['verificationState'] = isset($data['verificationState']) ? $data['verificationState'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['sla'] = isset($data['sla']) ? $data['sla'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['closeTime'] = isset($data['closeTime']) ? $data['closeTime'] : null;
        $this->container['chopPhase'] = isset($data['chopPhase']) ? $data['chopPhase'] : null;
        $this->container['ipdrrPhase'] = isset($data['ipdrrPhase']) ? $data['ipdrrPhase'] : null;
        $this->container['ppdrPhase'] = isset($data['ppdrPhase']) ? $data['ppdrPhase'] : null;
        $this->container['simulation'] = isset($data['simulation']) ? $data['simulation'] : null;
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['closeReason'] = isset($data['closeReason']) ? $data['closeReason'] : null;
        $this->container['closeComment'] = isset($data['closeComment']) ? $data['closeComment'] : null;
        $this->container['malware'] = isset($data['malware']) ? $data['malware'] : null;
        $this->container['systemInfo'] = isset($data['systemInfo']) ? $data['systemInfo'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['userInfo'] = isset($data['userInfo']) ? $data['userInfo'] : null;
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['systemAlertTable'] = isset($data['systemAlertTable']) ? $data['systemAlertTable'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['firstObservedTime']) && (mb_strlen($this->container['firstObservedTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'firstObservedTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['firstObservedTime']) && (mb_strlen($this->container['firstObservedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'firstObservedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastObservedTime']) && (mb_strlen($this->container['lastObservedTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastObservedTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastObservedTime']) && (mb_strlen($this->container['lastObservedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastObservedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['arriveTime']) && (mb_strlen($this->container['arriveTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'arriveTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['arriveTime']) && (mb_strlen($this->container['arriveTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'arriveTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1024)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 5)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 5)) {
                $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0)) {
                $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 64)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['criticality']) && ($this->container['criticality'] > 5)) {
                $invalidProperties[] = "invalid value for 'criticality', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['criticality']) && ($this->container['criticality'] < 0)) {
                $invalidProperties[] = "invalid value for 'criticality', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['verificationState']) && (mb_strlen($this->container['verificationState']) > 64)) {
                $invalidProperties[] = "invalid value for 'verificationState', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['verificationState']) && (mb_strlen($this->container['verificationState']) < 1)) {
                $invalidProperties[] = "invalid value for 'verificationState', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sla']) && (mb_strlen($this->container['sla']) > 64)) {
                $invalidProperties[] = "invalid value for 'sla', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sla']) && (mb_strlen($this->container['sla']) < 1)) {
                $invalidProperties[] = "invalid value for 'sla', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chopPhase']) && (mb_strlen($this->container['chopPhase']) > 64)) {
                $invalidProperties[] = "invalid value for 'chopPhase', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chopPhase']) && (mb_strlen($this->container['chopPhase']) < 4)) {
                $invalidProperties[] = "invalid value for 'chopPhase', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['ipdrrPhase']) && (mb_strlen($this->container['ipdrrPhase']) > 64)) {
                $invalidProperties[] = "invalid value for 'ipdrrPhase', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ipdrrPhase']) && (mb_strlen($this->container['ipdrrPhase']) < 4)) {
                $invalidProperties[] = "invalid value for 'ipdrrPhase', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['ppdrPhase']) && (mb_strlen($this->container['ppdrPhase']) > 64)) {
                $invalidProperties[] = "invalid value for 'ppdrPhase', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ppdrPhase']) && (mb_strlen($this->container['ppdrPhase']) < 4)) {
                $invalidProperties[] = "invalid value for 'ppdrPhase', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['simulation']) && (mb_strlen($this->container['simulation']) > 64)) {
                $invalidProperties[] = "invalid value for 'simulation', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['simulation']) && (mb_strlen($this->container['simulation']) < 0)) {
                $invalidProperties[] = "invalid value for 'simulation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actor']) && (mb_strlen($this->container['actor']) > 64)) {
                $invalidProperties[] = "invalid value for 'actor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actor']) && (mb_strlen($this->container['actor']) < 0)) {
                $invalidProperties[] = "invalid value for 'actor', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 1024)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 0)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 1024)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closeReason']) && (mb_strlen($this->container['closeReason']) > 64)) {
                $invalidProperties[] = "invalid value for 'closeReason', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['closeReason']) && (mb_strlen($this->container['closeReason']) < 32)) {
                $invalidProperties[] = "invalid value for 'closeReason', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['closeComment']) && (mb_strlen($this->container['closeComment']) > 64)) {
                $invalidProperties[] = "invalid value for 'closeComment', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['closeComment']) && (mb_strlen($this->container['closeComment']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeComment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
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
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspEnvironment|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspEnvironment|null $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets dataSource
    *  dataSource
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspDatasource|null
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspDatasource|null $dataSource dataSource
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets firstObservedTime
    *  Update time
    *
    * @return string|null
    */
    public function getFirstObservedTime()
    {
        return $this->container['firstObservedTime'];
    }

    /**
    * Sets firstObservedTime
    *
    * @param string|null $firstObservedTime Update time
    *
    * @return $this
    */
    public function setFirstObservedTime($firstObservedTime)
    {
        $this->container['firstObservedTime'] = $firstObservedTime;
        return $this;
    }

    /**
    * Gets lastObservedTime
    *  Update time
    *
    * @return string|null
    */
    public function getLastObservedTime()
    {
        return $this->container['lastObservedTime'];
    }

    /**
    * Sets lastObservedTime
    *
    * @param string|null $lastObservedTime Update time
    *
    * @return $this
    */
    public function setLastObservedTime($lastObservedTime)
    {
        $this->container['lastObservedTime'] = $lastObservedTime;
        return $this;
    }

    /**
    * Gets createTime
    *  Create time
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime Create time
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets arriveTime
    *  Update time
    *
    * @return string|null
    */
    public function getArriveTime()
    {
        return $this->container['arriveTime'];
    }

    /**
    * Sets arriveTime
    *
    * @param string|null $arriveTime Update time
    *
    * @return $this
    */
    public function setArriveTime($arriveTime)
    {
        $this->container['arriveTime'] = $arriveTime;
        return $this;
    }

    /**
    * Gets title
    *  The name, display only
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
    * @param string|null $title The name, display only
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  The description, display only
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
    * @param string|null $description The description, display only
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  事件URL链接
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl 事件URL链接
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets count
    *  事件发生次数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 事件发生次数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets confidence
    *  置信度
    *
    * @return int|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param int|null $confidence 置信度
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets severity
    *  严重性等级
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
    * @param string|null $severity 严重性等级
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets criticality
    *  关键性，是指事件涉及的资源的重要性级别。
    *
    * @return int|null
    */
    public function getCriticality()
    {
        return $this->container['criticality'];
    }

    /**
    * Sets criticality
    *
    * @param int|null $criticality 关键性，是指事件涉及的资源的重要性级别。
    *
    * @return $this
    */
    public function setCriticality($criticality)
    {
        $this->container['criticality'] = $criticality;
        return $this;
    }

    /**
    * Gets alertType
    *  事件分类
    *
    * @return object|null
    */
    public function getAlertType()
    {
        return $this->container['alertType'];
    }

    /**
    * Sets alertType
    *
    * @param object|null $alertType 事件分类
    *
    * @return $this
    */
    public function setAlertType($alertType)
    {
        $this->container['alertType'] = $alertType;
        return $this;
    }

    /**
    * Gets networkList
    *  network_list
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRspNetworkList[]|null
    */
    public function getNetworkList()
    {
        return $this->container['networkList'];
    }

    /**
    * Sets networkList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRspNetworkList[]|null $networkList network_list
    *
    * @return $this
    */
    public function setNetworkList($networkList)
    {
        $this->container['networkList'] = $networkList;
        return $this;
    }

    /**
    * Gets resourceList
    *  network_list
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspResourceList[]|null
    */
    public function getResourceList()
    {
        return $this->container['resourceList'];
    }

    /**
    * Sets resourceList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspResourceList[]|null $resourceList network_list
    *
    * @return $this
    */
    public function setResourceList($resourceList)
    {
        $this->container['resourceList'] = $resourceList;
        return $this;
    }

    /**
    * Gets remediation
    *  remediation
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspRemediation|null
    */
    public function getRemediation()
    {
        return $this->container['remediation'];
    }

    /**
    * Sets remediation
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspRemediation|null $remediation remediation
    *
    * @return $this
    */
    public function setRemediation($remediation)
    {
        $this->container['remediation'] = $remediation;
        return $this;
    }

    /**
    * Gets verificationState
    *  验证状态
    *
    * @return string|null
    */
    public function getVerificationState()
    {
        return $this->container['verificationState'];
    }

    /**
    * Sets verificationState
    *
    * @param string|null $verificationState 验证状态
    *
    * @return $this
    */
    public function setVerificationState($verificationState)
    {
        $this->container['verificationState'] = $verificationState;
        return $this;
    }

    /**
    * Gets handleStatus
    *  事件处理状态
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus 事件处理状态
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets sla
    *  sla
    *
    * @return string|null
    */
    public function getSla()
    {
        return $this->container['sla'];
    }

    /**
    * Sets sla
    *
    * @param string|null $sla sla
    *
    * @return $this
    */
    public function setSla($sla)
    {
        $this->container['sla'] = $sla;
        return $this;
    }

    /**
    * Gets updateTime
    *  Create time
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime Create time
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets closeTime
    *  Create time
    *
    * @return string|null
    */
    public function getCloseTime()
    {
        return $this->container['closeTime'];
    }

    /**
    * Sets closeTime
    *
    * @param string|null $closeTime Create time
    *
    * @return $this
    */
    public function setCloseTime($closeTime)
    {
        $this->container['closeTime'] = $closeTime;
        return $this;
    }

    /**
    * Gets chopPhase
    *  周期/处置阶段编号
    *
    * @return string|null
    */
    public function getChopPhase()
    {
        return $this->container['chopPhase'];
    }

    /**
    * Sets chopPhase
    *
    * @param string|null $chopPhase 周期/处置阶段编号
    *
    * @return $this
    */
    public function setChopPhase($chopPhase)
    {
        $this->container['chopPhase'] = $chopPhase;
        return $this;
    }

    /**
    * Gets ipdrrPhase
    *  周期/处置阶段编号
    *
    * @return string|null
    */
    public function getIpdrrPhase()
    {
        return $this->container['ipdrrPhase'];
    }

    /**
    * Sets ipdrrPhase
    *
    * @param string|null $ipdrrPhase 周期/处置阶段编号
    *
    * @return $this
    */
    public function setIpdrrPhase($ipdrrPhase)
    {
        $this->container['ipdrrPhase'] = $ipdrrPhase;
        return $this;
    }

    /**
    * Gets ppdrPhase
    *  周期/处置阶段编号
    *
    * @return string|null
    */
    public function getPpdrPhase()
    {
        return $this->container['ppdrPhase'];
    }

    /**
    * Sets ppdrPhase
    *
    * @param string|null $ppdrPhase 周期/处置阶段编号
    *
    * @return $this
    */
    public function setPpdrPhase($ppdrPhase)
    {
        $this->container['ppdrPhase'] = $ppdrPhase;
        return $this;
    }

    /**
    * Gets simulation
    *  是否为调试事件.
    *
    * @return string|null
    */
    public function getSimulation()
    {
        return $this->container['simulation'];
    }

    /**
    * Sets simulation
    *
    * @param string|null $simulation 是否为调试事件.
    *
    * @return $this
    */
    public function setSimulation($simulation)
    {
        $this->container['simulation'] = $simulation;
        return $this;
    }

    /**
    * Gets actor
    *  委托人
    *
    * @return string|null
    */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
    * Sets actor
    *
    * @param string|null $actor 委托人
    *
    * @return $this
    */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;
        return $this;
    }

    /**
    * Gets owner
    *  The name, display only
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner The name, display only
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets creator
    *  The name, display only
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator The name, display only
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets closeReason
    *  关闭原因
    *
    * @return string|null
    */
    public function getCloseReason()
    {
        return $this->container['closeReason'];
    }

    /**
    * Sets closeReason
    *
    * @param string|null $closeReason 关闭原因
    *
    * @return $this
    */
    public function setCloseReason($closeReason)
    {
        $this->container['closeReason'] = $closeReason;
        return $this;
    }

    /**
    * Gets closeComment
    *  关闭原因
    *
    * @return string|null
    */
    public function getCloseComment()
    {
        return $this->container['closeComment'];
    }

    /**
    * Sets closeComment
    *
    * @param string|null $closeComment 关闭原因
    *
    * @return $this
    */
    public function setCloseComment($closeComment)
    {
        $this->container['closeComment'] = $closeComment;
        return $this;
    }

    /**
    * Gets malware
    *  malware
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspMalware|null
    */
    public function getMalware()
    {
        return $this->container['malware'];
    }

    /**
    * Sets malware
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspMalware|null $malware malware
    *
    * @return $this
    */
    public function setMalware($malware)
    {
        $this->container['malware'] = $malware;
        return $this;
    }

    /**
    * Gets systemInfo
    *  系统信息
    *
    * @return object|null
    */
    public function getSystemInfo()
    {
        return $this->container['systemInfo'];
    }

    /**
    * Sets systemInfo
    *
    * @param object|null $systemInfo 系统信息
    *
    * @return $this
    */
    public function setSystemInfo($systemInfo)
    {
        $this->container['systemInfo'] = $systemInfo;
        return $this;
    }

    /**
    * Gets process
    *  进程信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRspProcess[]|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRspProcess[]|null $process 进程信息
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets userInfo
    *  用户信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspUserInfo[]|null
    */
    public function getUserInfo()
    {
        return $this->container['userInfo'];
    }

    /**
    * Sets userInfo
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspUserInfo[]|null $userInfo 用户信息
    *
    * @return $this
    */
    public function setUserInfo($userInfo)
    {
        $this->container['userInfo'] = $userInfo;
        return $this;
    }

    /**
    * Gets fileInfo
    *  文件信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspFileInfo[]|null
    */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /**
    * Sets fileInfo
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertRspFileInfo[]|null $fileInfo 文件信息
    *
    * @return $this
    */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;
        return $this;
    }

    /**
    * Gets systemAlertTable
    *  系统信息
    *
    * @return object|null
    */
    public function getSystemAlertTable()
    {
        return $this->container['systemAlertTable'];
    }

    /**
    * Sets systemAlertTable
    *
    * @param object|null $systemAlertTable 系统信息
    *
    * @return $this
    */
    public function setSystemAlertTable($systemAlertTable)
    {
        $this->container['systemAlertTable'] = $systemAlertTable;
        return $this;
    }

    /**
    * Gets id
    *  Id value
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
    * @param string|null $id Id value
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets workspaceId
    *  workspace id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId workspace id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

