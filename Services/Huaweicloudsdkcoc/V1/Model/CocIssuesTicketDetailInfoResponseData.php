<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocIssuesTicketDetailInfoResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocIssuesTicketDetailInfoResponseData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketType  问题类型
    * level  问题等级
    * impactedCloudServices  影响服务
    * rootCauseCloudService  责任服务
    * rootCauseType  根因类型
    * rootCauseComment  根因分析
    * solution  解决方案
    * issueContactPerson  问题接口人id
    * reproduceProbability  重现概率
    * issueVersion  发现问题的版本号
    * title  问题标题
    * virtualScheduleType  排班类型
    * regions  区域
    * description  描述
    * fountTime  发现时间
    * isCommonIssue  是否共性问题
    * isNeedChange  是否需要变更
    * creator  创建人
    * operator  操作人
    * ticketId  问题单id
    * assignee  责任人
    * workFlowStatus  问题单状态
    * phase  阶段
    * updateTime  更新时间
    * createTime  创建时间
    * isDeleted  是否删除
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketType' => 'string',
            'level' => 'string',
            'impactedCloudServices' => 'string',
            'rootCauseCloudService' => 'string',
            'rootCauseType' => 'string',
            'rootCauseComment' => 'string',
            'solution' => 'string',
            'issueContactPerson' => 'string',
            'reproduceProbability' => 'string',
            'issueVersion' => 'string',
            'title' => 'string',
            'virtualScheduleType' => 'string',
            'regions' => 'string',
            'description' => 'string',
            'fountTime' => 'int',
            'isCommonIssue' => 'bool',
            'isNeedChange' => 'bool',
            'creator' => 'string',
            'operator' => 'string',
            'ticketId' => 'string',
            'assignee' => 'string',
            'workFlowStatus' => 'string',
            'phase' => 'string',
            'updateTime' => 'int',
            'createTime' => 'int',
            'isDeleted' => 'bool',
            'enumDataList' => '\HuaweiCloud\SDK\Coc\V1\Model\TicketInfoEnumData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketType  问题类型
    * level  问题等级
    * impactedCloudServices  影响服务
    * rootCauseCloudService  责任服务
    * rootCauseType  根因类型
    * rootCauseComment  根因分析
    * solution  解决方案
    * issueContactPerson  问题接口人id
    * reproduceProbability  重现概率
    * issueVersion  发现问题的版本号
    * title  问题标题
    * virtualScheduleType  排班类型
    * regions  区域
    * description  描述
    * fountTime  发现时间
    * isCommonIssue  是否共性问题
    * isNeedChange  是否需要变更
    * creator  创建人
    * operator  操作人
    * ticketId  问题单id
    * assignee  责任人
    * workFlowStatus  问题单状态
    * phase  阶段
    * updateTime  更新时间
    * createTime  创建时间
    * isDeleted  是否删除
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketType' => null,
        'level' => null,
        'impactedCloudServices' => null,
        'rootCauseCloudService' => null,
        'rootCauseType' => null,
        'rootCauseComment' => null,
        'solution' => null,
        'issueContactPerson' => null,
        'reproduceProbability' => null,
        'issueVersion' => null,
        'title' => null,
        'virtualScheduleType' => null,
        'regions' => null,
        'description' => null,
        'fountTime' => 'int64',
        'isCommonIssue' => null,
        'isNeedChange' => null,
        'creator' => null,
        'operator' => null,
        'ticketId' => null,
        'assignee' => null,
        'workFlowStatus' => null,
        'phase' => null,
        'updateTime' => 'int64',
        'createTime' => 'int64',
        'isDeleted' => null,
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
    * ticketType  问题类型
    * level  问题等级
    * impactedCloudServices  影响服务
    * rootCauseCloudService  责任服务
    * rootCauseType  根因类型
    * rootCauseComment  根因分析
    * solution  解决方案
    * issueContactPerson  问题接口人id
    * reproduceProbability  重现概率
    * issueVersion  发现问题的版本号
    * title  问题标题
    * virtualScheduleType  排班类型
    * regions  区域
    * description  描述
    * fountTime  发现时间
    * isCommonIssue  是否共性问题
    * isNeedChange  是否需要变更
    * creator  创建人
    * operator  操作人
    * ticketId  问题单id
    * assignee  责任人
    * workFlowStatus  问题单状态
    * phase  阶段
    * updateTime  更新时间
    * createTime  创建时间
    * isDeleted  是否删除
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketType' => 'ticket_type',
            'level' => 'level',
            'impactedCloudServices' => 'impacted_cloud_services',
            'rootCauseCloudService' => 'root_cause_cloud_service',
            'rootCauseType' => 'root_cause_type',
            'rootCauseComment' => 'root_cause_comment',
            'solution' => 'solution',
            'issueContactPerson' => 'issue_contact_person',
            'reproduceProbability' => 'reproduce_probability',
            'issueVersion' => 'issue_version',
            'title' => 'title',
            'virtualScheduleType' => 'virtual_schedule_type',
            'regions' => 'regions',
            'description' => 'description',
            'fountTime' => 'fount_time',
            'isCommonIssue' => 'is_common_issue',
            'isNeedChange' => 'is_need_change',
            'creator' => 'creator',
            'operator' => 'operator',
            'ticketId' => 'ticket_id',
            'assignee' => 'assignee',
            'workFlowStatus' => 'work_flow_status',
            'phase' => 'phase',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'isDeleted' => 'is_deleted',
            'enumDataList' => 'enum_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketType  问题类型
    * level  问题等级
    * impactedCloudServices  影响服务
    * rootCauseCloudService  责任服务
    * rootCauseType  根因类型
    * rootCauseComment  根因分析
    * solution  解决方案
    * issueContactPerson  问题接口人id
    * reproduceProbability  重现概率
    * issueVersion  发现问题的版本号
    * title  问题标题
    * virtualScheduleType  排班类型
    * regions  区域
    * description  描述
    * fountTime  发现时间
    * isCommonIssue  是否共性问题
    * isNeedChange  是否需要变更
    * creator  创建人
    * operator  操作人
    * ticketId  问题单id
    * assignee  责任人
    * workFlowStatus  问题单状态
    * phase  阶段
    * updateTime  更新时间
    * createTime  创建时间
    * isDeleted  是否删除
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketType' => 'setTicketType',
            'level' => 'setLevel',
            'impactedCloudServices' => 'setImpactedCloudServices',
            'rootCauseCloudService' => 'setRootCauseCloudService',
            'rootCauseType' => 'setRootCauseType',
            'rootCauseComment' => 'setRootCauseComment',
            'solution' => 'setSolution',
            'issueContactPerson' => 'setIssueContactPerson',
            'reproduceProbability' => 'setReproduceProbability',
            'issueVersion' => 'setIssueVersion',
            'title' => 'setTitle',
            'virtualScheduleType' => 'setVirtualScheduleType',
            'regions' => 'setRegions',
            'description' => 'setDescription',
            'fountTime' => 'setFountTime',
            'isCommonIssue' => 'setIsCommonIssue',
            'isNeedChange' => 'setIsNeedChange',
            'creator' => 'setCreator',
            'operator' => 'setOperator',
            'ticketId' => 'setTicketId',
            'assignee' => 'setAssignee',
            'workFlowStatus' => 'setWorkFlowStatus',
            'phase' => 'setPhase',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'isDeleted' => 'setIsDeleted',
            'enumDataList' => 'setEnumDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketType  问题类型
    * level  问题等级
    * impactedCloudServices  影响服务
    * rootCauseCloudService  责任服务
    * rootCauseType  根因类型
    * rootCauseComment  根因分析
    * solution  解决方案
    * issueContactPerson  问题接口人id
    * reproduceProbability  重现概率
    * issueVersion  发现问题的版本号
    * title  问题标题
    * virtualScheduleType  排班类型
    * regions  区域
    * description  描述
    * fountTime  发现时间
    * isCommonIssue  是否共性问题
    * isNeedChange  是否需要变更
    * creator  创建人
    * operator  操作人
    * ticketId  问题单id
    * assignee  责任人
    * workFlowStatus  问题单状态
    * phase  阶段
    * updateTime  更新时间
    * createTime  创建时间
    * isDeleted  是否删除
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketType' => 'getTicketType',
            'level' => 'getLevel',
            'impactedCloudServices' => 'getImpactedCloudServices',
            'rootCauseCloudService' => 'getRootCauseCloudService',
            'rootCauseType' => 'getRootCauseType',
            'rootCauseComment' => 'getRootCauseComment',
            'solution' => 'getSolution',
            'issueContactPerson' => 'getIssueContactPerson',
            'reproduceProbability' => 'getReproduceProbability',
            'issueVersion' => 'getIssueVersion',
            'title' => 'getTitle',
            'virtualScheduleType' => 'getVirtualScheduleType',
            'regions' => 'getRegions',
            'description' => 'getDescription',
            'fountTime' => 'getFountTime',
            'isCommonIssue' => 'getIsCommonIssue',
            'isNeedChange' => 'getIsNeedChange',
            'creator' => 'getCreator',
            'operator' => 'getOperator',
            'ticketId' => 'getTicketId',
            'assignee' => 'getAssignee',
            'workFlowStatus' => 'getWorkFlowStatus',
            'phase' => 'getPhase',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'isDeleted' => 'getIsDeleted',
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
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['impactedCloudServices'] = isset($data['impactedCloudServices']) ? $data['impactedCloudServices'] : null;
        $this->container['rootCauseCloudService'] = isset($data['rootCauseCloudService']) ? $data['rootCauseCloudService'] : null;
        $this->container['rootCauseType'] = isset($data['rootCauseType']) ? $data['rootCauseType'] : null;
        $this->container['rootCauseComment'] = isset($data['rootCauseComment']) ? $data['rootCauseComment'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['issueContactPerson'] = isset($data['issueContactPerson']) ? $data['issueContactPerson'] : null;
        $this->container['reproduceProbability'] = isset($data['reproduceProbability']) ? $data['reproduceProbability'] : null;
        $this->container['issueVersion'] = isset($data['issueVersion']) ? $data['issueVersion'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['virtualScheduleType'] = isset($data['virtualScheduleType']) ? $data['virtualScheduleType'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fountTime'] = isset($data['fountTime']) ? $data['fountTime'] : null;
        $this->container['isCommonIssue'] = isset($data['isCommonIssue']) ? $data['isCommonIssue'] : null;
        $this->container['isNeedChange'] = isset($data['isNeedChange']) ? $data['isNeedChange'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['workFlowStatus'] = isset($data['workFlowStatus']) ? $data['workFlowStatus'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
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
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 255)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['impactedCloudServices']) && (mb_strlen($this->container['impactedCloudServices']) > 1024)) {
                $invalidProperties[] = "invalid value for 'impactedCloudServices', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['impactedCloudServices']) && (mb_strlen($this->container['impactedCloudServices']) < 0)) {
                $invalidProperties[] = "invalid value for 'impactedCloudServices', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootCauseCloudService']) && (mb_strlen($this->container['rootCauseCloudService']) > 255)) {
                $invalidProperties[] = "invalid value for 'rootCauseCloudService', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rootCauseCloudService']) && (mb_strlen($this->container['rootCauseCloudService']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootCauseCloudService', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootCauseType']) && (mb_strlen($this->container['rootCauseType']) > 255)) {
                $invalidProperties[] = "invalid value for 'rootCauseType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rootCauseType']) && (mb_strlen($this->container['rootCauseType']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootCauseType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootCauseComment']) && (mb_strlen($this->container['rootCauseComment']) > 255)) {
                $invalidProperties[] = "invalid value for 'rootCauseComment', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rootCauseComment']) && (mb_strlen($this->container['rootCauseComment']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootCauseComment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) > 255)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) < 0)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) > 255)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reproduceProbability']) && (mb_strlen($this->container['reproduceProbability']) > 255)) {
                $invalidProperties[] = "invalid value for 'reproduceProbability', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['reproduceProbability']) && (mb_strlen($this->container['reproduceProbability']) < 0)) {
                $invalidProperties[] = "invalid value for 'reproduceProbability', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueVersion']) && (mb_strlen($this->container['issueVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'issueVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['issueVersion']) && (mb_strlen($this->container['issueVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['virtualScheduleType']) && (mb_strlen($this->container['virtualScheduleType']) > 255)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['virtualScheduleType']) && (mb_strlen($this->container['virtualScheduleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regions']) && (mb_strlen($this->container['regions']) > 255)) {
                $invalidProperties[] = "invalid value for 'regions', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regions']) && (mb_strlen($this->container['regions']) < 0)) {
                $invalidProperties[] = "invalid value for 'regions', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 255)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) > 255)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) < 0)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) > 255)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) < 0)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1.";
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
    * Gets ticketType
    *  问题类型
    *
    * @return string|null
    */
    public function getTicketType()
    {
        return $this->container['ticketType'];
    }

    /**
    * Sets ticketType
    *
    * @param string|null $ticketType 问题类型
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets level
    *  问题等级
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 问题等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets impactedCloudServices
    *  影响服务
    *
    * @return string|null
    */
    public function getImpactedCloudServices()
    {
        return $this->container['impactedCloudServices'];
    }

    /**
    * Sets impactedCloudServices
    *
    * @param string|null $impactedCloudServices 影响服务
    *
    * @return $this
    */
    public function setImpactedCloudServices($impactedCloudServices)
    {
        $this->container['impactedCloudServices'] = $impactedCloudServices;
        return $this;
    }

    /**
    * Gets rootCauseCloudService
    *  责任服务
    *
    * @return string|null
    */
    public function getRootCauseCloudService()
    {
        return $this->container['rootCauseCloudService'];
    }

    /**
    * Sets rootCauseCloudService
    *
    * @param string|null $rootCauseCloudService 责任服务
    *
    * @return $this
    */
    public function setRootCauseCloudService($rootCauseCloudService)
    {
        $this->container['rootCauseCloudService'] = $rootCauseCloudService;
        return $this;
    }

    /**
    * Gets rootCauseType
    *  根因类型
    *
    * @return string|null
    */
    public function getRootCauseType()
    {
        return $this->container['rootCauseType'];
    }

    /**
    * Sets rootCauseType
    *
    * @param string|null $rootCauseType 根因类型
    *
    * @return $this
    */
    public function setRootCauseType($rootCauseType)
    {
        $this->container['rootCauseType'] = $rootCauseType;
        return $this;
    }

    /**
    * Gets rootCauseComment
    *  根因分析
    *
    * @return string|null
    */
    public function getRootCauseComment()
    {
        return $this->container['rootCauseComment'];
    }

    /**
    * Sets rootCauseComment
    *
    * @param string|null $rootCauseComment 根因分析
    *
    * @return $this
    */
    public function setRootCauseComment($rootCauseComment)
    {
        $this->container['rootCauseComment'] = $rootCauseComment;
        return $this;
    }

    /**
    * Gets solution
    *  解决方案
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution 解决方案
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets issueContactPerson
    *  问题接口人id
    *
    * @return string|null
    */
    public function getIssueContactPerson()
    {
        return $this->container['issueContactPerson'];
    }

    /**
    * Sets issueContactPerson
    *
    * @param string|null $issueContactPerson 问题接口人id
    *
    * @return $this
    */
    public function setIssueContactPerson($issueContactPerson)
    {
        $this->container['issueContactPerson'] = $issueContactPerson;
        return $this;
    }

    /**
    * Gets reproduceProbability
    *  重现概率
    *
    * @return string|null
    */
    public function getReproduceProbability()
    {
        return $this->container['reproduceProbability'];
    }

    /**
    * Sets reproduceProbability
    *
    * @param string|null $reproduceProbability 重现概率
    *
    * @return $this
    */
    public function setReproduceProbability($reproduceProbability)
    {
        $this->container['reproduceProbability'] = $reproduceProbability;
        return $this;
    }

    /**
    * Gets issueVersion
    *  发现问题的版本号
    *
    * @return string|null
    */
    public function getIssueVersion()
    {
        return $this->container['issueVersion'];
    }

    /**
    * Sets issueVersion
    *
    * @param string|null $issueVersion 发现问题的版本号
    *
    * @return $this
    */
    public function setIssueVersion($issueVersion)
    {
        $this->container['issueVersion'] = $issueVersion;
        return $this;
    }

    /**
    * Gets title
    *  问题标题
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
    * @param string|null $title 问题标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets virtualScheduleType
    *  排班类型
    *
    * @return string|null
    */
    public function getVirtualScheduleType()
    {
        return $this->container['virtualScheduleType'];
    }

    /**
    * Sets virtualScheduleType
    *
    * @param string|null $virtualScheduleType 排班类型
    *
    * @return $this
    */
    public function setVirtualScheduleType($virtualScheduleType)
    {
        $this->container['virtualScheduleType'] = $virtualScheduleType;
        return $this;
    }

    /**
    * Gets regions
    *  区域
    *
    * @return string|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string|null $regions 区域
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets fountTime
    *  发现时间
    *
    * @return int|null
    */
    public function getFountTime()
    {
        return $this->container['fountTime'];
    }

    /**
    * Sets fountTime
    *
    * @param int|null $fountTime 发现时间
    *
    * @return $this
    */
    public function setFountTime($fountTime)
    {
        $this->container['fountTime'] = $fountTime;
        return $this;
    }

    /**
    * Gets isCommonIssue
    *  是否共性问题
    *
    * @return bool|null
    */
    public function getIsCommonIssue()
    {
        return $this->container['isCommonIssue'];
    }

    /**
    * Sets isCommonIssue
    *
    * @param bool|null $isCommonIssue 是否共性问题
    *
    * @return $this
    */
    public function setIsCommonIssue($isCommonIssue)
    {
        $this->container['isCommonIssue'] = $isCommonIssue;
        return $this;
    }

    /**
    * Gets isNeedChange
    *  是否需要变更
    *
    * @return bool|null
    */
    public function getIsNeedChange()
    {
        return $this->container['isNeedChange'];
    }

    /**
    * Sets isNeedChange
    *
    * @param bool|null $isNeedChange 是否需要变更
    *
    * @return $this
    */
    public function setIsNeedChange($isNeedChange)
    {
        $this->container['isNeedChange'] = $isNeedChange;
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
    *  操作人
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
    * @param string|null $operator 操作人
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets ticketId
    *  问题单id
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
    * @param string|null $ticketId 问题单id
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
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
    * Gets workFlowStatus
    *  问题单状态
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
    * @param string|null $workFlowStatus 问题单状态
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
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
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
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否删除
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted 是否删除
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets enumDataList
    *  枚举列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TicketInfoEnumData[]|null
    */
    public function getEnumDataList()
    {
        return $this->container['enumDataList'];
    }

    /**
    * Sets enumDataList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TicketInfoEnumData[]|null $enumDataList 枚举列表
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

