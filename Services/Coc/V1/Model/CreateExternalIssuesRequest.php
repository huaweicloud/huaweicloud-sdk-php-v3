<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExternalIssuesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExternalIssuesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creator  创建人id
    * title  标题
    * description  描述
    * regions  区域Code,最大100个
    * enterpriseProject  企业项目id
    * source  问题来源 issues_source_1000 事件 issues_source_2000 Warroom issues_source_3000 告警
    * sourceId  问题来源id
    * fountTime  发现时间
    * impactedCloudServices  影响应用ID，最多10条
    * level  问题级别 issues_level_1000 致命 issues_level_2000 严重 issues_level_3000 一般
    * ticketType  问题类型 issues_type_1000  功能性问题 issues_type_2000  性能问题 issues_type_3000  可靠性问题 issues_type_4000  兼容性问题 issues_type_5000  用户体验问题 issues_type_6000  可维护性问题 issues_type_7000  变更类问题 issues_type_8000  安全问题 issues_type_9000  工程实施类 issues_type_10000 交付部署问题 issues_type_11000 LLD规划问题 issues_type_12000 供用商问题 issues_type_13000 咨询类问题 issues_type_14000 需求类问题 issues_type_15000 其他问题
    * reproduceProbability  重现概率 issues_reproduce_probability_1000 有条件必现 issues_reproduce_probability_2000 有条件概率重现 issues_reproduce_probability_3000 无规律重现 issues_reproduce_probability_4000 很难重现
    * rootCauseCloudService  责任应用ID，必填,限1条
    * virtualScheduleType  排班类型 参考：枚举 issues_mgmt_virtual_schedule_type_1000 排班,schedule_scenes排班场景,virtual_schedule_role排班角色必填,指定排班 issues_mgmt_virtual_schedule_type_2000 个人,issue_contact_person字段必填,指定责任人
    * scheduleScenes  排班场景id
    * virtualScheduleRole  排班角色id
    * issueContactPerson  问题责任人id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creator' => 'string',
            'title' => 'string',
            'description' => 'string',
            'regions' => 'string[]',
            'enterpriseProject' => 'string',
            'source' => 'string',
            'sourceId' => 'string',
            'fountTime' => 'int',
            'impactedCloudServices' => 'string[]',
            'level' => 'string',
            'ticketType' => 'string',
            'reproduceProbability' => 'string',
            'rootCauseCloudService' => 'string[]',
            'virtualScheduleType' => 'string',
            'scheduleScenes' => 'string',
            'virtualScheduleRole' => 'string',
            'issueContactPerson' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creator  创建人id
    * title  标题
    * description  描述
    * regions  区域Code,最大100个
    * enterpriseProject  企业项目id
    * source  问题来源 issues_source_1000 事件 issues_source_2000 Warroom issues_source_3000 告警
    * sourceId  问题来源id
    * fountTime  发现时间
    * impactedCloudServices  影响应用ID，最多10条
    * level  问题级别 issues_level_1000 致命 issues_level_2000 严重 issues_level_3000 一般
    * ticketType  问题类型 issues_type_1000  功能性问题 issues_type_2000  性能问题 issues_type_3000  可靠性问题 issues_type_4000  兼容性问题 issues_type_5000  用户体验问题 issues_type_6000  可维护性问题 issues_type_7000  变更类问题 issues_type_8000  安全问题 issues_type_9000  工程实施类 issues_type_10000 交付部署问题 issues_type_11000 LLD规划问题 issues_type_12000 供用商问题 issues_type_13000 咨询类问题 issues_type_14000 需求类问题 issues_type_15000 其他问题
    * reproduceProbability  重现概率 issues_reproduce_probability_1000 有条件必现 issues_reproduce_probability_2000 有条件概率重现 issues_reproduce_probability_3000 无规律重现 issues_reproduce_probability_4000 很难重现
    * rootCauseCloudService  责任应用ID，必填,限1条
    * virtualScheduleType  排班类型 参考：枚举 issues_mgmt_virtual_schedule_type_1000 排班,schedule_scenes排班场景,virtual_schedule_role排班角色必填,指定排班 issues_mgmt_virtual_schedule_type_2000 个人,issue_contact_person字段必填,指定责任人
    * scheduleScenes  排班场景id
    * virtualScheduleRole  排班角色id
    * issueContactPerson  问题责任人id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creator' => null,
        'title' => null,
        'description' => null,
        'regions' => null,
        'enterpriseProject' => null,
        'source' => null,
        'sourceId' => null,
        'fountTime' => 'int64',
        'impactedCloudServices' => null,
        'level' => null,
        'ticketType' => null,
        'reproduceProbability' => null,
        'rootCauseCloudService' => null,
        'virtualScheduleType' => null,
        'scheduleScenes' => null,
        'virtualScheduleRole' => null,
        'issueContactPerson' => null
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
    * creator  创建人id
    * title  标题
    * description  描述
    * regions  区域Code,最大100个
    * enterpriseProject  企业项目id
    * source  问题来源 issues_source_1000 事件 issues_source_2000 Warroom issues_source_3000 告警
    * sourceId  问题来源id
    * fountTime  发现时间
    * impactedCloudServices  影响应用ID，最多10条
    * level  问题级别 issues_level_1000 致命 issues_level_2000 严重 issues_level_3000 一般
    * ticketType  问题类型 issues_type_1000  功能性问题 issues_type_2000  性能问题 issues_type_3000  可靠性问题 issues_type_4000  兼容性问题 issues_type_5000  用户体验问题 issues_type_6000  可维护性问题 issues_type_7000  变更类问题 issues_type_8000  安全问题 issues_type_9000  工程实施类 issues_type_10000 交付部署问题 issues_type_11000 LLD规划问题 issues_type_12000 供用商问题 issues_type_13000 咨询类问题 issues_type_14000 需求类问题 issues_type_15000 其他问题
    * reproduceProbability  重现概率 issues_reproduce_probability_1000 有条件必现 issues_reproduce_probability_2000 有条件概率重现 issues_reproduce_probability_3000 无规律重现 issues_reproduce_probability_4000 很难重现
    * rootCauseCloudService  责任应用ID，必填,限1条
    * virtualScheduleType  排班类型 参考：枚举 issues_mgmt_virtual_schedule_type_1000 排班,schedule_scenes排班场景,virtual_schedule_role排班角色必填,指定排班 issues_mgmt_virtual_schedule_type_2000 个人,issue_contact_person字段必填,指定责任人
    * scheduleScenes  排班场景id
    * virtualScheduleRole  排班角色id
    * issueContactPerson  问题责任人id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creator' => 'creator',
            'title' => 'title',
            'description' => 'description',
            'regions' => 'regions',
            'enterpriseProject' => 'enterprise_project',
            'source' => 'source',
            'sourceId' => 'source_id',
            'fountTime' => 'fount_time',
            'impactedCloudServices' => 'impacted_cloud_services',
            'level' => 'level',
            'ticketType' => 'ticket_type',
            'reproduceProbability' => 'reproduce_probability',
            'rootCauseCloudService' => 'root_cause_cloud_service',
            'virtualScheduleType' => 'virtual_schedule_type',
            'scheduleScenes' => 'schedule_scenes',
            'virtualScheduleRole' => 'virtual_schedule_role',
            'issueContactPerson' => 'issue_contact_person'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creator  创建人id
    * title  标题
    * description  描述
    * regions  区域Code,最大100个
    * enterpriseProject  企业项目id
    * source  问题来源 issues_source_1000 事件 issues_source_2000 Warroom issues_source_3000 告警
    * sourceId  问题来源id
    * fountTime  发现时间
    * impactedCloudServices  影响应用ID，最多10条
    * level  问题级别 issues_level_1000 致命 issues_level_2000 严重 issues_level_3000 一般
    * ticketType  问题类型 issues_type_1000  功能性问题 issues_type_2000  性能问题 issues_type_3000  可靠性问题 issues_type_4000  兼容性问题 issues_type_5000  用户体验问题 issues_type_6000  可维护性问题 issues_type_7000  变更类问题 issues_type_8000  安全问题 issues_type_9000  工程实施类 issues_type_10000 交付部署问题 issues_type_11000 LLD规划问题 issues_type_12000 供用商问题 issues_type_13000 咨询类问题 issues_type_14000 需求类问题 issues_type_15000 其他问题
    * reproduceProbability  重现概率 issues_reproduce_probability_1000 有条件必现 issues_reproduce_probability_2000 有条件概率重现 issues_reproduce_probability_3000 无规律重现 issues_reproduce_probability_4000 很难重现
    * rootCauseCloudService  责任应用ID，必填,限1条
    * virtualScheduleType  排班类型 参考：枚举 issues_mgmt_virtual_schedule_type_1000 排班,schedule_scenes排班场景,virtual_schedule_role排班角色必填,指定排班 issues_mgmt_virtual_schedule_type_2000 个人,issue_contact_person字段必填,指定责任人
    * scheduleScenes  排班场景id
    * virtualScheduleRole  排班角色id
    * issueContactPerson  问题责任人id
    *
    * @var string[]
    */
    protected static $setters = [
            'creator' => 'setCreator',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'regions' => 'setRegions',
            'enterpriseProject' => 'setEnterpriseProject',
            'source' => 'setSource',
            'sourceId' => 'setSourceId',
            'fountTime' => 'setFountTime',
            'impactedCloudServices' => 'setImpactedCloudServices',
            'level' => 'setLevel',
            'ticketType' => 'setTicketType',
            'reproduceProbability' => 'setReproduceProbability',
            'rootCauseCloudService' => 'setRootCauseCloudService',
            'virtualScheduleType' => 'setVirtualScheduleType',
            'scheduleScenes' => 'setScheduleScenes',
            'virtualScheduleRole' => 'setVirtualScheduleRole',
            'issueContactPerson' => 'setIssueContactPerson'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creator  创建人id
    * title  标题
    * description  描述
    * regions  区域Code,最大100个
    * enterpriseProject  企业项目id
    * source  问题来源 issues_source_1000 事件 issues_source_2000 Warroom issues_source_3000 告警
    * sourceId  问题来源id
    * fountTime  发现时间
    * impactedCloudServices  影响应用ID，最多10条
    * level  问题级别 issues_level_1000 致命 issues_level_2000 严重 issues_level_3000 一般
    * ticketType  问题类型 issues_type_1000  功能性问题 issues_type_2000  性能问题 issues_type_3000  可靠性问题 issues_type_4000  兼容性问题 issues_type_5000  用户体验问题 issues_type_6000  可维护性问题 issues_type_7000  变更类问题 issues_type_8000  安全问题 issues_type_9000  工程实施类 issues_type_10000 交付部署问题 issues_type_11000 LLD规划问题 issues_type_12000 供用商问题 issues_type_13000 咨询类问题 issues_type_14000 需求类问题 issues_type_15000 其他问题
    * reproduceProbability  重现概率 issues_reproduce_probability_1000 有条件必现 issues_reproduce_probability_2000 有条件概率重现 issues_reproduce_probability_3000 无规律重现 issues_reproduce_probability_4000 很难重现
    * rootCauseCloudService  责任应用ID，必填,限1条
    * virtualScheduleType  排班类型 参考：枚举 issues_mgmt_virtual_schedule_type_1000 排班,schedule_scenes排班场景,virtual_schedule_role排班角色必填,指定排班 issues_mgmt_virtual_schedule_type_2000 个人,issue_contact_person字段必填,指定责任人
    * scheduleScenes  排班场景id
    * virtualScheduleRole  排班角色id
    * issueContactPerson  问题责任人id
    *
    * @var string[]
    */
    protected static $getters = [
            'creator' => 'getCreator',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'regions' => 'getRegions',
            'enterpriseProject' => 'getEnterpriseProject',
            'source' => 'getSource',
            'sourceId' => 'getSourceId',
            'fountTime' => 'getFountTime',
            'impactedCloudServices' => 'getImpactedCloudServices',
            'level' => 'getLevel',
            'ticketType' => 'getTicketType',
            'reproduceProbability' => 'getReproduceProbability',
            'rootCauseCloudService' => 'getRootCauseCloudService',
            'virtualScheduleType' => 'getVirtualScheduleType',
            'scheduleScenes' => 'getScheduleScenes',
            'virtualScheduleRole' => 'getVirtualScheduleRole',
            'issueContactPerson' => 'getIssueContactPerson'
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
    const LEVEL_ISSUES_LEVEL_1000 = 'issues_level_1000';
    const LEVEL_ISSUES_LEVEL_2000 = 'issues_level_2000';
    const LEVEL_ISSUES_LEVEL_3000 = 'issues_level_3000';
    const TICKET_TYPE_ISSUES_TYPE_1000 = 'issues_type_1000';
    const TICKET_TYPE_ISSUES_TYPE_2000 = 'issues_type_2000';
    const TICKET_TYPE_ISSUES_TYPE_3000 = 'issues_type_3000';
    const TICKET_TYPE_ISSUES_TYPE_4000 = 'issues_type_4000';
    const TICKET_TYPE_ISSUES_TYPE_5000 = 'issues_type_5000';
    const TICKET_TYPE_ISSUES_TYPE_6000 = 'issues_type_6000';
    const TICKET_TYPE_ISSUES_TYPE_7000 = 'issues_type_7000';
    const TICKET_TYPE_ISSUES_TYPE_8000 = 'issues_type_8000';
    const TICKET_TYPE_ISSUES_TYPE_9000 = 'issues_type_9000';
    const TICKET_TYPE_ISSUES_TYPE_10000 = 'issues_type_10000';
    const TICKET_TYPE_ISSUES_TYPE_11000 = 'issues_type_11000';
    const TICKET_TYPE_ISSUES_TYPE_12000 = 'issues_type_12000';
    const TICKET_TYPE_ISSUES_TYPE_13000 = 'issues_type_13000';
    const TICKET_TYPE_ISSUES_TYPE_14000 = 'issues_type_14000';
    const TICKET_TYPE_ISSUES_TYPE_15000 = 'issues_type_15000';
    const REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_1000 = 'issues_reproduce_probability_1000';
    const REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_2000 = 'issues_reproduce_probability_2000';
    const REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_3000 = 'issues_reproduce_probability_3000';
    const REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_4000 = 'issues_reproduce_probability_4000';
    const VIRTUAL_SCHEDULE_TYPE_ISSUES_MGMT_VIRTUAL_SCHEDULE_TYPE_1000 = 'issues_mgmt_virtual_schedule_type_1000';
    const VIRTUAL_SCHEDULE_TYPE_ISSUES_MGMT_VIRTUAL_SCHEDULE_TYPE_2000 = 'issues_mgmt_virtual_schedule_type_2000';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_ISSUES_LEVEL_1000,
            self::LEVEL_ISSUES_LEVEL_2000,
            self::LEVEL_ISSUES_LEVEL_3000,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTicketTypeAllowableValues()
    {
        return [
            self::TICKET_TYPE_ISSUES_TYPE_1000,
            self::TICKET_TYPE_ISSUES_TYPE_2000,
            self::TICKET_TYPE_ISSUES_TYPE_3000,
            self::TICKET_TYPE_ISSUES_TYPE_4000,
            self::TICKET_TYPE_ISSUES_TYPE_5000,
            self::TICKET_TYPE_ISSUES_TYPE_6000,
            self::TICKET_TYPE_ISSUES_TYPE_7000,
            self::TICKET_TYPE_ISSUES_TYPE_8000,
            self::TICKET_TYPE_ISSUES_TYPE_9000,
            self::TICKET_TYPE_ISSUES_TYPE_10000,
            self::TICKET_TYPE_ISSUES_TYPE_11000,
            self::TICKET_TYPE_ISSUES_TYPE_12000,
            self::TICKET_TYPE_ISSUES_TYPE_13000,
            self::TICKET_TYPE_ISSUES_TYPE_14000,
            self::TICKET_TYPE_ISSUES_TYPE_15000,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReproduceProbabilityAllowableValues()
    {
        return [
            self::REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_1000,
            self::REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_2000,
            self::REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_3000,
            self::REPRODUCE_PROBABILITY_ISSUES_REPRODUCE_PROBABILITY_4000,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVirtualScheduleTypeAllowableValues()
    {
        return [
            self::VIRTUAL_SCHEDULE_TYPE_ISSUES_MGMT_VIRTUAL_SCHEDULE_TYPE_1000,
            self::VIRTUAL_SCHEDULE_TYPE_ISSUES_MGMT_VIRTUAL_SCHEDULE_TYPE_2000,
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
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['fountTime'] = isset($data['fountTime']) ? $data['fountTime'] : null;
        $this->container['impactedCloudServices'] = isset($data['impactedCloudServices']) ? $data['impactedCloudServices'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['reproduceProbability'] = isset($data['reproduceProbability']) ? $data['reproduceProbability'] : null;
        $this->container['rootCauseCloudService'] = isset($data['rootCauseCloudService']) ? $data['rootCauseCloudService'] : null;
        $this->container['virtualScheduleType'] = isset($data['virtualScheduleType']) ? $data['virtualScheduleType'] : null;
        $this->container['scheduleScenes'] = isset($data['scheduleScenes']) ? $data['scheduleScenes'] : null;
        $this->container['virtualScheduleRole'] = isset($data['virtualScheduleRole']) ? $data['virtualScheduleRole'] : null;
        $this->container['issueContactPerson'] = isset($data['issueContactPerson']) ? $data['issueContactPerson'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 255)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 0)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['fountTime']) && ($this->container['fountTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'fountTime', must be bigger than or equal to 1.";
            }
        if ($this->container['impactedCloudServices'] === null) {
            $invalidProperties[] = "'impactedCloudServices' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['level']) > 255)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ticketType'] === null) {
            $invalidProperties[] = "'ticketType' can't be null";
        }
            $allowedValues = $this->getTicketTypeAllowableValues();
                if (!is_null($this->container['ticketType']) && !in_array($this->container['ticketType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ticketType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['ticketType']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ticketType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['reproduceProbability'] === null) {
            $invalidProperties[] = "'reproduceProbability' can't be null";
        }
            $allowedValues = $this->getReproduceProbabilityAllowableValues();
                if (!is_null($this->container['reproduceProbability']) && !in_array($this->container['reproduceProbability'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reproduceProbability', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['reproduceProbability']) > 255)) {
                $invalidProperties[] = "invalid value for 'reproduceProbability', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['reproduceProbability']) < 0)) {
                $invalidProperties[] = "invalid value for 'reproduceProbability', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['rootCauseCloudService'] === null) {
            $invalidProperties[] = "'rootCauseCloudService' can't be null";
        }
        if ($this->container['virtualScheduleType'] === null) {
            $invalidProperties[] = "'virtualScheduleType' can't be null";
        }
            $allowedValues = $this->getVirtualScheduleTypeAllowableValues();
                if (!is_null($this->container['virtualScheduleType']) && !in_array($this->container['virtualScheduleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'virtualScheduleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['virtualScheduleType']) > 255)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['virtualScheduleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleScenes']) && (mb_strlen($this->container['scheduleScenes']) > 255)) {
                $invalidProperties[] = "invalid value for 'scheduleScenes', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['scheduleScenes']) && (mb_strlen($this->container['scheduleScenes']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleScenes', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['virtualScheduleRole']) && (mb_strlen($this->container['virtualScheduleRole']) > 255)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleRole', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['virtualScheduleRole']) && (mb_strlen($this->container['virtualScheduleRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualScheduleRole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) > 255)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['issueContactPerson']) && (mb_strlen($this->container['issueContactPerson']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueContactPerson', the character length must be bigger than or equal to 0.";
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
    * Gets creator
    *  创建人id
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
    * @param string|null $creator 创建人id
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets title
    *  标题
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title 标题
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
    *  描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets regions
    *  区域Code,最大100个
    *
    * @return string[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string[]|null $regions 区域Code,最大100个
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param string|null $enterpriseProject 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets source
    *  问题来源 issues_source_1000 事件 issues_source_2000 Warroom issues_source_3000 告警
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
    * @param string|null $source 问题来源 issues_source_1000 事件 issues_source_2000 Warroom issues_source_3000 告警
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets sourceId
    *  问题来源id
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
    * @param string|null $sourceId 问题来源id
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
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
    * Gets impactedCloudServices
    *  影响应用ID，最多10条
    *
    * @return string[]
    */
    public function getImpactedCloudServices()
    {
        return $this->container['impactedCloudServices'];
    }

    /**
    * Sets impactedCloudServices
    *
    * @param string[] $impactedCloudServices 影响应用ID，最多10条
    *
    * @return $this
    */
    public function setImpactedCloudServices($impactedCloudServices)
    {
        $this->container['impactedCloudServices'] = $impactedCloudServices;
        return $this;
    }

    /**
    * Gets level
    *  问题级别 issues_level_1000 致命 issues_level_2000 严重 issues_level_3000 一般
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level 问题级别 issues_level_1000 致命 issues_level_2000 严重 issues_level_3000 一般
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets ticketType
    *  问题类型 issues_type_1000  功能性问题 issues_type_2000  性能问题 issues_type_3000  可靠性问题 issues_type_4000  兼容性问题 issues_type_5000  用户体验问题 issues_type_6000  可维护性问题 issues_type_7000  变更类问题 issues_type_8000  安全问题 issues_type_9000  工程实施类 issues_type_10000 交付部署问题 issues_type_11000 LLD规划问题 issues_type_12000 供用商问题 issues_type_13000 咨询类问题 issues_type_14000 需求类问题 issues_type_15000 其他问题
    *
    * @return string
    */
    public function getTicketType()
    {
        return $this->container['ticketType'];
    }

    /**
    * Sets ticketType
    *
    * @param string $ticketType 问题类型 issues_type_1000  功能性问题 issues_type_2000  性能问题 issues_type_3000  可靠性问题 issues_type_4000  兼容性问题 issues_type_5000  用户体验问题 issues_type_6000  可维护性问题 issues_type_7000  变更类问题 issues_type_8000  安全问题 issues_type_9000  工程实施类 issues_type_10000 交付部署问题 issues_type_11000 LLD规划问题 issues_type_12000 供用商问题 issues_type_13000 咨询类问题 issues_type_14000 需求类问题 issues_type_15000 其他问题
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets reproduceProbability
    *  重现概率 issues_reproduce_probability_1000 有条件必现 issues_reproduce_probability_2000 有条件概率重现 issues_reproduce_probability_3000 无规律重现 issues_reproduce_probability_4000 很难重现
    *
    * @return string
    */
    public function getReproduceProbability()
    {
        return $this->container['reproduceProbability'];
    }

    /**
    * Sets reproduceProbability
    *
    * @param string $reproduceProbability 重现概率 issues_reproduce_probability_1000 有条件必现 issues_reproduce_probability_2000 有条件概率重现 issues_reproduce_probability_3000 无规律重现 issues_reproduce_probability_4000 很难重现
    *
    * @return $this
    */
    public function setReproduceProbability($reproduceProbability)
    {
        $this->container['reproduceProbability'] = $reproduceProbability;
        return $this;
    }

    /**
    * Gets rootCauseCloudService
    *  责任应用ID，必填,限1条
    *
    * @return string[]
    */
    public function getRootCauseCloudService()
    {
        return $this->container['rootCauseCloudService'];
    }

    /**
    * Sets rootCauseCloudService
    *
    * @param string[] $rootCauseCloudService 责任应用ID，必填,限1条
    *
    * @return $this
    */
    public function setRootCauseCloudService($rootCauseCloudService)
    {
        $this->container['rootCauseCloudService'] = $rootCauseCloudService;
        return $this;
    }

    /**
    * Gets virtualScheduleType
    *  排班类型 参考：枚举 issues_mgmt_virtual_schedule_type_1000 排班,schedule_scenes排班场景,virtual_schedule_role排班角色必填,指定排班 issues_mgmt_virtual_schedule_type_2000 个人,issue_contact_person字段必填,指定责任人
    *
    * @return string
    */
    public function getVirtualScheduleType()
    {
        return $this->container['virtualScheduleType'];
    }

    /**
    * Sets virtualScheduleType
    *
    * @param string $virtualScheduleType 排班类型 参考：枚举 issues_mgmt_virtual_schedule_type_1000 排班,schedule_scenes排班场景,virtual_schedule_role排班角色必填,指定排班 issues_mgmt_virtual_schedule_type_2000 个人,issue_contact_person字段必填,指定责任人
    *
    * @return $this
    */
    public function setVirtualScheduleType($virtualScheduleType)
    {
        $this->container['virtualScheduleType'] = $virtualScheduleType;
        return $this;
    }

    /**
    * Gets scheduleScenes
    *  排班场景id
    *
    * @return string|null
    */
    public function getScheduleScenes()
    {
        return $this->container['scheduleScenes'];
    }

    /**
    * Sets scheduleScenes
    *
    * @param string|null $scheduleScenes 排班场景id
    *
    * @return $this
    */
    public function setScheduleScenes($scheduleScenes)
    {
        $this->container['scheduleScenes'] = $scheduleScenes;
        return $this;
    }

    /**
    * Gets virtualScheduleRole
    *  排班角色id
    *
    * @return string|null
    */
    public function getVirtualScheduleRole()
    {
        return $this->container['virtualScheduleRole'];
    }

    /**
    * Sets virtualScheduleRole
    *
    * @param string|null $virtualScheduleRole 排班角色id
    *
    * @return $this
    */
    public function setVirtualScheduleRole($virtualScheduleRole)
    {
        $this->container['virtualScheduleRole'] = $virtualScheduleRole;
        return $this;
    }

    /**
    * Gets issueContactPerson
    *  问题责任人id
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
    * @param string|null $issueContactPerson 问题责任人id
    *
    * @return $this
    */
    public function setIssueContactPerson($issueContactPerson)
    {
        $this->container['issueContactPerson'] = $issueContactPerson;
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

