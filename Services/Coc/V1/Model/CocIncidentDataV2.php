<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocIncidentDataV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocIncidentDataV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentCloudServiceId  云服务
    * levelId  事件等级
    * mtmRegion  区域Region
    * sourceId  事件来源
    * forwardRuleId  转发规则
    * enterpriseProjectId  企业应用
    * mtmType  事件类别
    * title  事件标题
    * description  事件描述
    * ticketId  事件单号
    * isServiceInterrupt  服务是否中断
    * workFlowStatus  流程状态
    * phase  阶段
    * assignee  责任人
    * creator  创建人
    * operator  创建人
    * updateTime  更新时间
    * createTime  创建时间
    * startTime  故障开始时间
    * handleTime  最近一次处理时间
    * incidentOwnership  事件归属
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentCloudServiceId' => 'string',
            'levelId' => 'string',
            'mtmRegion' => 'string',
            'sourceId' => 'string',
            'forwardRuleId' => 'string',
            'enterpriseProjectId' => 'string',
            'mtmType' => 'string',
            'title' => 'string',
            'description' => 'string',
            'ticketId' => 'string',
            'isServiceInterrupt' => 'string',
            'workFlowStatus' => 'string',
            'phase' => 'string',
            'assignee' => 'string',
            'creator' => 'string',
            'operator' => 'string',
            'updateTime' => 'string',
            'createTime' => 'string',
            'startTime' => 'string',
            'handleTime' => 'string',
            'incidentOwnership' => 'string',
            'enumDataList' => '\HuaweiCloud\SDK\Coc\V1\Model\CocTicketInfoEnumDataV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentCloudServiceId  云服务
    * levelId  事件等级
    * mtmRegion  区域Region
    * sourceId  事件来源
    * forwardRuleId  转发规则
    * enterpriseProjectId  企业应用
    * mtmType  事件类别
    * title  事件标题
    * description  事件描述
    * ticketId  事件单号
    * isServiceInterrupt  服务是否中断
    * workFlowStatus  流程状态
    * phase  阶段
    * assignee  责任人
    * creator  创建人
    * operator  创建人
    * updateTime  更新时间
    * createTime  创建时间
    * startTime  故障开始时间
    * handleTime  最近一次处理时间
    * incidentOwnership  事件归属
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentCloudServiceId' => null,
        'levelId' => null,
        'mtmRegion' => null,
        'sourceId' => null,
        'forwardRuleId' => null,
        'enterpriseProjectId' => null,
        'mtmType' => null,
        'title' => null,
        'description' => null,
        'ticketId' => null,
        'isServiceInterrupt' => null,
        'workFlowStatus' => null,
        'phase' => null,
        'assignee' => null,
        'creator' => null,
        'operator' => null,
        'updateTime' => null,
        'createTime' => null,
        'startTime' => null,
        'handleTime' => null,
        'incidentOwnership' => null,
        'enumDataList' => null
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
    * currentCloudServiceId  云服务
    * levelId  事件等级
    * mtmRegion  区域Region
    * sourceId  事件来源
    * forwardRuleId  转发规则
    * enterpriseProjectId  企业应用
    * mtmType  事件类别
    * title  事件标题
    * description  事件描述
    * ticketId  事件单号
    * isServiceInterrupt  服务是否中断
    * workFlowStatus  流程状态
    * phase  阶段
    * assignee  责任人
    * creator  创建人
    * operator  创建人
    * updateTime  更新时间
    * createTime  创建时间
    * startTime  故障开始时间
    * handleTime  最近一次处理时间
    * incidentOwnership  事件归属
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentCloudServiceId' => 'current_cloud_service_id',
            'levelId' => 'level_id',
            'mtmRegion' => 'mtm_region',
            'sourceId' => 'source_id',
            'forwardRuleId' => 'forward_rule_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'mtmType' => 'mtm_type',
            'title' => 'title',
            'description' => 'description',
            'ticketId' => 'ticket_id',
            'isServiceInterrupt' => 'is_service_interrupt',
            'workFlowStatus' => 'work_flow_status',
            'phase' => 'phase',
            'assignee' => 'assignee',
            'creator' => 'creator',
            'operator' => 'operator',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'handleTime' => 'handle_time',
            'incidentOwnership' => 'incident_ownership',
            'enumDataList' => 'enum_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentCloudServiceId  云服务
    * levelId  事件等级
    * mtmRegion  区域Region
    * sourceId  事件来源
    * forwardRuleId  转发规则
    * enterpriseProjectId  企业应用
    * mtmType  事件类别
    * title  事件标题
    * description  事件描述
    * ticketId  事件单号
    * isServiceInterrupt  服务是否中断
    * workFlowStatus  流程状态
    * phase  阶段
    * assignee  责任人
    * creator  创建人
    * operator  创建人
    * updateTime  更新时间
    * createTime  创建时间
    * startTime  故障开始时间
    * handleTime  最近一次处理时间
    * incidentOwnership  事件归属
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $setters = [
            'currentCloudServiceId' => 'setCurrentCloudServiceId',
            'levelId' => 'setLevelId',
            'mtmRegion' => 'setMtmRegion',
            'sourceId' => 'setSourceId',
            'forwardRuleId' => 'setForwardRuleId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'mtmType' => 'setMtmType',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'ticketId' => 'setTicketId',
            'isServiceInterrupt' => 'setIsServiceInterrupt',
            'workFlowStatus' => 'setWorkFlowStatus',
            'phase' => 'setPhase',
            'assignee' => 'setAssignee',
            'creator' => 'setCreator',
            'operator' => 'setOperator',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'handleTime' => 'setHandleTime',
            'incidentOwnership' => 'setIncidentOwnership',
            'enumDataList' => 'setEnumDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentCloudServiceId  云服务
    * levelId  事件等级
    * mtmRegion  区域Region
    * sourceId  事件来源
    * forwardRuleId  转发规则
    * enterpriseProjectId  企业应用
    * mtmType  事件类别
    * title  事件标题
    * description  事件描述
    * ticketId  事件单号
    * isServiceInterrupt  服务是否中断
    * workFlowStatus  流程状态
    * phase  阶段
    * assignee  责任人
    * creator  创建人
    * operator  创建人
    * updateTime  更新时间
    * createTime  创建时间
    * startTime  故障开始时间
    * handleTime  最近一次处理时间
    * incidentOwnership  事件归属
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $getters = [
            'currentCloudServiceId' => 'getCurrentCloudServiceId',
            'levelId' => 'getLevelId',
            'mtmRegion' => 'getMtmRegion',
            'sourceId' => 'getSourceId',
            'forwardRuleId' => 'getForwardRuleId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'mtmType' => 'getMtmType',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'ticketId' => 'getTicketId',
            'isServiceInterrupt' => 'getIsServiceInterrupt',
            'workFlowStatus' => 'getWorkFlowStatus',
            'phase' => 'getPhase',
            'assignee' => 'getAssignee',
            'creator' => 'getCreator',
            'operator' => 'getOperator',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'handleTime' => 'getHandleTime',
            'incidentOwnership' => 'getIncidentOwnership',
            'enumDataList' => 'getEnumDataList'
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
        $this->container['currentCloudServiceId'] = isset($data['currentCloudServiceId']) ? $data['currentCloudServiceId'] : null;
        $this->container['levelId'] = isset($data['levelId']) ? $data['levelId'] : null;
        $this->container['mtmRegion'] = isset($data['mtmRegion']) ? $data['mtmRegion'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['forwardRuleId'] = isset($data['forwardRuleId']) ? $data['forwardRuleId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['mtmType'] = isset($data['mtmType']) ? $data['mtmType'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['isServiceInterrupt'] = isset($data['isServiceInterrupt']) ? $data['isServiceInterrupt'] : null;
        $this->container['workFlowStatus'] = isset($data['workFlowStatus']) ? $data['workFlowStatus'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
        $this->container['incidentOwnership'] = isset($data['incidentOwnership']) ? $data['incidentOwnership'] : null;
        $this->container['enumDataList'] = isset($data['enumDataList']) ? $data['enumDataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) > 255)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) > 255)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) < 1)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['forwardRuleId']) && (mb_strlen($this->container['forwardRuleId']) > 255)) {
                $invalidProperties[] = "invalid value for 'forwardRuleId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['forwardRuleId']) && (mb_strlen($this->container['forwardRuleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'forwardRuleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) > 255)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) < 1)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isServiceInterrupt']) && (mb_strlen($this->container['isServiceInterrupt']) > 50)) {
                $invalidProperties[] = "invalid value for 'isServiceInterrupt', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['isServiceInterrupt']) && (mb_strlen($this->container['isServiceInterrupt']) < 1)) {
                $invalidProperties[] = "invalid value for 'isServiceInterrupt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) > 50)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) > 50)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) < 1)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) > 50)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) < 1)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 50)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 50)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 1)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 50)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 50)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 50)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleTime']) && (mb_strlen($this->container['handleTime']) > 50)) {
                $invalidProperties[] = "invalid value for 'handleTime', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['handleTime']) && (mb_strlen($this->container['handleTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['incidentOwnership']) && (mb_strlen($this->container['incidentOwnership']) > 50)) {
                $invalidProperties[] = "invalid value for 'incidentOwnership', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['incidentOwnership']) && (mb_strlen($this->container['incidentOwnership']) < 1)) {
                $invalidProperties[] = "invalid value for 'incidentOwnership', the character length must be bigger than or equal to 1.";
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
    * Gets currentCloudServiceId
    *  云服务
    *
    * @return string|null
    */
    public function getCurrentCloudServiceId()
    {
        return $this->container['currentCloudServiceId'];
    }

    /**
    * Sets currentCloudServiceId
    *
    * @param string|null $currentCloudServiceId 云服务
    *
    * @return $this
    */
    public function setCurrentCloudServiceId($currentCloudServiceId)
    {
        $this->container['currentCloudServiceId'] = $currentCloudServiceId;
        return $this;
    }

    /**
    * Gets levelId
    *  事件等级
    *
    * @return string|null
    */
    public function getLevelId()
    {
        return $this->container['levelId'];
    }

    /**
    * Sets levelId
    *
    * @param string|null $levelId 事件等级
    *
    * @return $this
    */
    public function setLevelId($levelId)
    {
        $this->container['levelId'] = $levelId;
        return $this;
    }

    /**
    * Gets mtmRegion
    *  区域Region
    *
    * @return string|null
    */
    public function getMtmRegion()
    {
        return $this->container['mtmRegion'];
    }

    /**
    * Sets mtmRegion
    *
    * @param string|null $mtmRegion 区域Region
    *
    * @return $this
    */
    public function setMtmRegion($mtmRegion)
    {
        $this->container['mtmRegion'] = $mtmRegion;
        return $this;
    }

    /**
    * Gets sourceId
    *  事件来源
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
    * @param string|null $sourceId 事件来源
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets forwardRuleId
    *  转发规则
    *
    * @return string|null
    */
    public function getForwardRuleId()
    {
        return $this->container['forwardRuleId'];
    }

    /**
    * Sets forwardRuleId
    *
    * @param string|null $forwardRuleId 转发规则
    *
    * @return $this
    */
    public function setForwardRuleId($forwardRuleId)
    {
        $this->container['forwardRuleId'] = $forwardRuleId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业应用
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
    * @param string|null $enterpriseProjectId 企业应用
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets mtmType
    *  事件类别
    *
    * @return string|null
    */
    public function getMtmType()
    {
        return $this->container['mtmType'];
    }

    /**
    * Sets mtmType
    *
    * @param string|null $mtmType 事件类别
    *
    * @return $this
    */
    public function setMtmType($mtmType)
    {
        $this->container['mtmType'] = $mtmType;
        return $this;
    }

    /**
    * Gets title
    *  事件标题
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
    * @param string|null $title 事件标题
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
    *  事件描述
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
    * @param string|null $description 事件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ticketId
    *  事件单号
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 事件单号
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets isServiceInterrupt
    *  服务是否中断
    *
    * @return string|null
    */
    public function getIsServiceInterrupt()
    {
        return $this->container['isServiceInterrupt'];
    }

    /**
    * Sets isServiceInterrupt
    *
    * @param string|null $isServiceInterrupt 服务是否中断
    *
    * @return $this
    */
    public function setIsServiceInterrupt($isServiceInterrupt)
    {
        $this->container['isServiceInterrupt'] = $isServiceInterrupt;
        return $this;
    }

    /**
    * Gets workFlowStatus
    *  流程状态
    *
    * @return string|null
    */
    public function getWorkFlowStatus()
    {
        return $this->container['workFlowStatus'];
    }

    /**
    * Sets workFlowStatus
    *
    * @param string|null $workFlowStatus 流程状态
    *
    * @return $this
    */
    public function setWorkFlowStatus($workFlowStatus)
    {
        $this->container['workFlowStatus'] = $workFlowStatus;
        return $this;
    }

    /**
    * Gets phase
    *  阶段
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 阶段
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets assignee
    *  责任人
    *
    * @return string|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param string|null $assignee 责任人
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
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
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets operator
    *  创建人
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 创建人
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  故障开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 故障开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets handleTime
    *  最近一次处理时间
    *
    * @return string|null
    */
    public function getHandleTime()
    {
        return $this->container['handleTime'];
    }

    /**
    * Sets handleTime
    *
    * @param string|null $handleTime 最近一次处理时间
    *
    * @return $this
    */
    public function setHandleTime($handleTime)
    {
        $this->container['handleTime'] = $handleTime;
        return $this;
    }

    /**
    * Gets incidentOwnership
    *  事件归属
    *
    * @return string|null
    */
    public function getIncidentOwnership()
    {
        return $this->container['incidentOwnership'];
    }

    /**
    * Sets incidentOwnership
    *
    * @param string|null $incidentOwnership 事件归属
    *
    * @return $this
    */
    public function setIncidentOwnership($incidentOwnership)
    {
        $this->container['incidentOwnership'] = $incidentOwnership;
        return $this;
    }

    /**
    * Gets enumDataList
    *  枚举列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CocTicketInfoEnumDataV2[]|null
    */
    public function getEnumDataList()
    {
        return $this->container['enumDataList'];
    }

    /**
    * Sets enumDataList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CocTicketInfoEnumDataV2[]|null $enumDataList 枚举列表
    *
    * @return $this
    */
    public function setEnumDataList($enumDataList)
    {
        $this->container['enumDataList'] = $enumDataList;
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

