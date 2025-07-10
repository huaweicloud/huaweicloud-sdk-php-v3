<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmInfoDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识ID
    * name  名称
    * importance  严重类型，urgent（紧急）、major（重要）、minor（次要）、warn（提示）
    * comeFrom  数据源
    * comeFromEn  数据源英文名
    * transferRule  流转规则id
    * transferRuleName  流转规则名
    * app  应用
    * status  状态，告警中alarming，已解决resolved
    * owner  责任人id
    * ownerName  责任人姓名
    * ownerAlias  责任人别名
    * convergeCount  收敛量
    * associateEventId  关联事件id
    * domainId  租户账号
    * creator  创建人id
    * creatorName  创建人姓名
    * createTime  创建时间
    * updateTime  更新时间
    * remarks  备注
    * region  区域regionId
    * taskType  任务类型 ：SCRIPT脚本，RUNBOOK作业
    * associatedTaskType  任务类型分类 CUSTOMIZATION自定义，COMMUNAL公共
    * associatedTaskId  脚本或作业id
    * associatedTaskName  脚本或作业名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'importance' => 'string',
            'comeFrom' => 'string',
            'comeFromEn' => 'string',
            'transferRule' => 'string',
            'transferRuleName' => 'string',
            'app' => 'string',
            'status' => 'string',
            'owner' => 'string',
            'ownerName' => 'string',
            'ownerAlias' => 'string',
            'convergeCount' => 'int',
            'associateEventId' => 'string',
            'domainId' => 'string',
            'creator' => 'string',
            'creatorName' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'remarks' => 'string',
            'region' => 'string',
            'taskType' => 'string',
            'associatedTaskType' => 'string',
            'associatedTaskId' => 'string',
            'associatedTaskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识ID
    * name  名称
    * importance  严重类型，urgent（紧急）、major（重要）、minor（次要）、warn（提示）
    * comeFrom  数据源
    * comeFromEn  数据源英文名
    * transferRule  流转规则id
    * transferRuleName  流转规则名
    * app  应用
    * status  状态，告警中alarming，已解决resolved
    * owner  责任人id
    * ownerName  责任人姓名
    * ownerAlias  责任人别名
    * convergeCount  收敛量
    * associateEventId  关联事件id
    * domainId  租户账号
    * creator  创建人id
    * creatorName  创建人姓名
    * createTime  创建时间
    * updateTime  更新时间
    * remarks  备注
    * region  区域regionId
    * taskType  任务类型 ：SCRIPT脚本，RUNBOOK作业
    * associatedTaskType  任务类型分类 CUSTOMIZATION自定义，COMMUNAL公共
    * associatedTaskId  脚本或作业id
    * associatedTaskName  脚本或作业名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'importance' => null,
        'comeFrom' => null,
        'comeFromEn' => null,
        'transferRule' => null,
        'transferRuleName' => null,
        'app' => null,
        'status' => null,
        'owner' => null,
        'ownerName' => null,
        'ownerAlias' => null,
        'convergeCount' => 'int32',
        'associateEventId' => null,
        'domainId' => null,
        'creator' => null,
        'creatorName' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'remarks' => null,
        'region' => null,
        'taskType' => null,
        'associatedTaskType' => null,
        'associatedTaskId' => null,
        'associatedTaskName' => null
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
    * id  唯一标识ID
    * name  名称
    * importance  严重类型，urgent（紧急）、major（重要）、minor（次要）、warn（提示）
    * comeFrom  数据源
    * comeFromEn  数据源英文名
    * transferRule  流转规则id
    * transferRuleName  流转规则名
    * app  应用
    * status  状态，告警中alarming，已解决resolved
    * owner  责任人id
    * ownerName  责任人姓名
    * ownerAlias  责任人别名
    * convergeCount  收敛量
    * associateEventId  关联事件id
    * domainId  租户账号
    * creator  创建人id
    * creatorName  创建人姓名
    * createTime  创建时间
    * updateTime  更新时间
    * remarks  备注
    * region  区域regionId
    * taskType  任务类型 ：SCRIPT脚本，RUNBOOK作业
    * associatedTaskType  任务类型分类 CUSTOMIZATION自定义，COMMUNAL公共
    * associatedTaskId  脚本或作业id
    * associatedTaskName  脚本或作业名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'importance' => 'importance',
            'comeFrom' => 'come_from',
            'comeFromEn' => 'come_from_en',
            'transferRule' => 'transfer_rule',
            'transferRuleName' => 'transfer_rule_name',
            'app' => 'app',
            'status' => 'status',
            'owner' => 'owner',
            'ownerName' => 'owner_name',
            'ownerAlias' => 'owner_alias',
            'convergeCount' => 'converge_count',
            'associateEventId' => 'associate_event_id',
            'domainId' => 'domain_id',
            'creator' => 'creator',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'remarks' => 'remarks',
            'region' => 'region',
            'taskType' => 'task_type',
            'associatedTaskType' => 'associated_task_type',
            'associatedTaskId' => 'associated_task_id',
            'associatedTaskName' => 'associated_task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识ID
    * name  名称
    * importance  严重类型，urgent（紧急）、major（重要）、minor（次要）、warn（提示）
    * comeFrom  数据源
    * comeFromEn  数据源英文名
    * transferRule  流转规则id
    * transferRuleName  流转规则名
    * app  应用
    * status  状态，告警中alarming，已解决resolved
    * owner  责任人id
    * ownerName  责任人姓名
    * ownerAlias  责任人别名
    * convergeCount  收敛量
    * associateEventId  关联事件id
    * domainId  租户账号
    * creator  创建人id
    * creatorName  创建人姓名
    * createTime  创建时间
    * updateTime  更新时间
    * remarks  备注
    * region  区域regionId
    * taskType  任务类型 ：SCRIPT脚本，RUNBOOK作业
    * associatedTaskType  任务类型分类 CUSTOMIZATION自定义，COMMUNAL公共
    * associatedTaskId  脚本或作业id
    * associatedTaskName  脚本或作业名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'importance' => 'setImportance',
            'comeFrom' => 'setComeFrom',
            'comeFromEn' => 'setComeFromEn',
            'transferRule' => 'setTransferRule',
            'transferRuleName' => 'setTransferRuleName',
            'app' => 'setApp',
            'status' => 'setStatus',
            'owner' => 'setOwner',
            'ownerName' => 'setOwnerName',
            'ownerAlias' => 'setOwnerAlias',
            'convergeCount' => 'setConvergeCount',
            'associateEventId' => 'setAssociateEventId',
            'domainId' => 'setDomainId',
            'creator' => 'setCreator',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'remarks' => 'setRemarks',
            'region' => 'setRegion',
            'taskType' => 'setTaskType',
            'associatedTaskType' => 'setAssociatedTaskType',
            'associatedTaskId' => 'setAssociatedTaskId',
            'associatedTaskName' => 'setAssociatedTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识ID
    * name  名称
    * importance  严重类型，urgent（紧急）、major（重要）、minor（次要）、warn（提示）
    * comeFrom  数据源
    * comeFromEn  数据源英文名
    * transferRule  流转规则id
    * transferRuleName  流转规则名
    * app  应用
    * status  状态，告警中alarming，已解决resolved
    * owner  责任人id
    * ownerName  责任人姓名
    * ownerAlias  责任人别名
    * convergeCount  收敛量
    * associateEventId  关联事件id
    * domainId  租户账号
    * creator  创建人id
    * creatorName  创建人姓名
    * createTime  创建时间
    * updateTime  更新时间
    * remarks  备注
    * region  区域regionId
    * taskType  任务类型 ：SCRIPT脚本，RUNBOOK作业
    * associatedTaskType  任务类型分类 CUSTOMIZATION自定义，COMMUNAL公共
    * associatedTaskId  脚本或作业id
    * associatedTaskName  脚本或作业名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'importance' => 'getImportance',
            'comeFrom' => 'getComeFrom',
            'comeFromEn' => 'getComeFromEn',
            'transferRule' => 'getTransferRule',
            'transferRuleName' => 'getTransferRuleName',
            'app' => 'getApp',
            'status' => 'getStatus',
            'owner' => 'getOwner',
            'ownerName' => 'getOwnerName',
            'ownerAlias' => 'getOwnerAlias',
            'convergeCount' => 'getConvergeCount',
            'associateEventId' => 'getAssociateEventId',
            'domainId' => 'getDomainId',
            'creator' => 'getCreator',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'remarks' => 'getRemarks',
            'region' => 'getRegion',
            'taskType' => 'getTaskType',
            'associatedTaskType' => 'getAssociatedTaskType',
            'associatedTaskId' => 'getAssociatedTaskId',
            'associatedTaskName' => 'getAssociatedTaskName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['importance'] = isset($data['importance']) ? $data['importance'] : null;
        $this->container['comeFrom'] = isset($data['comeFrom']) ? $data['comeFrom'] : null;
        $this->container['comeFromEn'] = isset($data['comeFromEn']) ? $data['comeFromEn'] : null;
        $this->container['transferRule'] = isset($data['transferRule']) ? $data['transferRule'] : null;
        $this->container['transferRuleName'] = isset($data['transferRuleName']) ? $data['transferRuleName'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['ownerAlias'] = isset($data['ownerAlias']) ? $data['ownerAlias'] : null;
        $this->container['convergeCount'] = isset($data['convergeCount']) ? $data['convergeCount'] : null;
        $this->container['associateEventId'] = isset($data['associateEventId']) ? $data['associateEventId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['associatedTaskType'] = isset($data['associatedTaskType']) ? $data['associatedTaskType'] : null;
        $this->container['associatedTaskId'] = isset($data['associatedTaskId']) ? $data['associatedTaskId'] : null;
        $this->container['associatedTaskName'] = isset($data['associatedTaskName']) ? $data['associatedTaskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['importance']) && (mb_strlen($this->container['importance']) > 32)) {
                $invalidProperties[] = "invalid value for 'importance', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['importance']) && (mb_strlen($this->container['importance']) < 0)) {
                $invalidProperties[] = "invalid value for 'importance', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['comeFrom']) && (mb_strlen($this->container['comeFrom']) > 255)) {
                $invalidProperties[] = "invalid value for 'comeFrom', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['comeFrom']) && (mb_strlen($this->container['comeFrom']) < 0)) {
                $invalidProperties[] = "invalid value for 'comeFrom', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['comeFromEn']) && (mb_strlen($this->container['comeFromEn']) > 255)) {
                $invalidProperties[] = "invalid value for 'comeFromEn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['comeFromEn']) && (mb_strlen($this->container['comeFromEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'comeFromEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['transferRule']) && (mb_strlen($this->container['transferRule']) > 255)) {
                $invalidProperties[] = "invalid value for 'transferRule', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['transferRule']) && (mb_strlen($this->container['transferRule']) < 0)) {
                $invalidProperties[] = "invalid value for 'transferRule', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['transferRuleName']) && (mb_strlen($this->container['transferRuleName']) > 255)) {
                $invalidProperties[] = "invalid value for 'transferRuleName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['transferRuleName']) && (mb_strlen($this->container['transferRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'transferRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 255)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 0)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 255)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 0)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ownerAlias']) && (mb_strlen($this->container['ownerAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'ownerAlias', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ownerAlias']) && (mb_strlen($this->container['ownerAlias']) < 0)) {
                $invalidProperties[] = "invalid value for 'ownerAlias', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['convergeCount']) && ($this->container['convergeCount'] > 100000)) {
                $invalidProperties[] = "invalid value for 'convergeCount', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['convergeCount']) && ($this->container['convergeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'convergeCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associateEventId']) && (mb_strlen($this->container['associateEventId']) > 255)) {
                $invalidProperties[] = "invalid value for 'associateEventId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['associateEventId']) && (mb_strlen($this->container['associateEventId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associateEventId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 100000000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 100000000000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 100000000000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 100000000000000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) > 255)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) < 0)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) > 255)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedTaskType']) && (mb_strlen($this->container['associatedTaskType']) > 255)) {
                $invalidProperties[] = "invalid value for 'associatedTaskType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['associatedTaskType']) && (mb_strlen($this->container['associatedTaskType']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedTaskId']) && (mb_strlen($this->container['associatedTaskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'associatedTaskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['associatedTaskId']) && (mb_strlen($this->container['associatedTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedTaskName']) && (mb_strlen($this->container['associatedTaskName']) > 255)) {
                $invalidProperties[] = "invalid value for 'associatedTaskName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['associatedTaskName']) && (mb_strlen($this->container['associatedTaskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskName', the character length must be bigger than or equal to 0.";
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
    *  唯一标识ID
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
    * @param string|null $id 唯一标识ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets importance
    *  严重类型，urgent（紧急）、major（重要）、minor（次要）、warn（提示）
    *
    * @return string|null
    */
    public function getImportance()
    {
        return $this->container['importance'];
    }

    /**
    * Sets importance
    *
    * @param string|null $importance 严重类型，urgent（紧急）、major（重要）、minor（次要）、warn（提示）
    *
    * @return $this
    */
    public function setImportance($importance)
    {
        $this->container['importance'] = $importance;
        return $this;
    }

    /**
    * Gets comeFrom
    *  数据源
    *
    * @return string|null
    */
    public function getComeFrom()
    {
        return $this->container['comeFrom'];
    }

    /**
    * Sets comeFrom
    *
    * @param string|null $comeFrom 数据源
    *
    * @return $this
    */
    public function setComeFrom($comeFrom)
    {
        $this->container['comeFrom'] = $comeFrom;
        return $this;
    }

    /**
    * Gets comeFromEn
    *  数据源英文名
    *
    * @return string|null
    */
    public function getComeFromEn()
    {
        return $this->container['comeFromEn'];
    }

    /**
    * Sets comeFromEn
    *
    * @param string|null $comeFromEn 数据源英文名
    *
    * @return $this
    */
    public function setComeFromEn($comeFromEn)
    {
        $this->container['comeFromEn'] = $comeFromEn;
        return $this;
    }

    /**
    * Gets transferRule
    *  流转规则id
    *
    * @return string|null
    */
    public function getTransferRule()
    {
        return $this->container['transferRule'];
    }

    /**
    * Sets transferRule
    *
    * @param string|null $transferRule 流转规则id
    *
    * @return $this
    */
    public function setTransferRule($transferRule)
    {
        $this->container['transferRule'] = $transferRule;
        return $this;
    }

    /**
    * Gets transferRuleName
    *  流转规则名
    *
    * @return string|null
    */
    public function getTransferRuleName()
    {
        return $this->container['transferRuleName'];
    }

    /**
    * Sets transferRuleName
    *
    * @param string|null $transferRuleName 流转规则名
    *
    * @return $this
    */
    public function setTransferRuleName($transferRuleName)
    {
        $this->container['transferRuleName'] = $transferRuleName;
        return $this;
    }

    /**
    * Gets app
    *  应用
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 应用
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets status
    *  状态，告警中alarming，已解决resolved
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态，告警中alarming，已解决resolved
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets owner
    *  责任人id
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
    * @param string|null $owner 责任人id
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人姓名
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 责任人姓名
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets ownerAlias
    *  责任人别名
    *
    * @return string|null
    */
    public function getOwnerAlias()
    {
        return $this->container['ownerAlias'];
    }

    /**
    * Sets ownerAlias
    *
    * @param string|null $ownerAlias 责任人别名
    *
    * @return $this
    */
    public function setOwnerAlias($ownerAlias)
    {
        $this->container['ownerAlias'] = $ownerAlias;
        return $this;
    }

    /**
    * Gets convergeCount
    *  收敛量
    *
    * @return int|null
    */
    public function getConvergeCount()
    {
        return $this->container['convergeCount'];
    }

    /**
    * Sets convergeCount
    *
    * @param int|null $convergeCount 收敛量
    *
    * @return $this
    */
    public function setConvergeCount($convergeCount)
    {
        $this->container['convergeCount'] = $convergeCount;
        return $this;
    }

    /**
    * Gets associateEventId
    *  关联事件id
    *
    * @return string|null
    */
    public function getAssociateEventId()
    {
        return $this->container['associateEventId'];
    }

    /**
    * Sets associateEventId
    *
    * @param string|null $associateEventId 关联事件id
    *
    * @return $this
    */
    public function setAssociateEventId($associateEventId)
    {
        $this->container['associateEventId'] = $associateEventId;
        return $this;
    }

    /**
    * Gets domainId
    *  租户账号
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户账号
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
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
    * Gets creatorName
    *  创建人姓名
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人姓名
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
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
    * Gets remarks
    *  备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets region
    *  区域regionId
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域regionId
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型 ：SCRIPT脚本，RUNBOOK作业
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型 ：SCRIPT脚本，RUNBOOK作业
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets associatedTaskType
    *  任务类型分类 CUSTOMIZATION自定义，COMMUNAL公共
    *
    * @return string|null
    */
    public function getAssociatedTaskType()
    {
        return $this->container['associatedTaskType'];
    }

    /**
    * Sets associatedTaskType
    *
    * @param string|null $associatedTaskType 任务类型分类 CUSTOMIZATION自定义，COMMUNAL公共
    *
    * @return $this
    */
    public function setAssociatedTaskType($associatedTaskType)
    {
        $this->container['associatedTaskType'] = $associatedTaskType;
        return $this;
    }

    /**
    * Gets associatedTaskId
    *  脚本或作业id
    *
    * @return string|null
    */
    public function getAssociatedTaskId()
    {
        return $this->container['associatedTaskId'];
    }

    /**
    * Sets associatedTaskId
    *
    * @param string|null $associatedTaskId 脚本或作业id
    *
    * @return $this
    */
    public function setAssociatedTaskId($associatedTaskId)
    {
        $this->container['associatedTaskId'] = $associatedTaskId;
        return $this;
    }

    /**
    * Gets associatedTaskName
    *  脚本或作业名称
    *
    * @return string|null
    */
    public function getAssociatedTaskName()
    {
        return $this->container['associatedTaskName'];
    }

    /**
    * Sets associatedTaskName
    *
    * @param string|null $associatedTaskName 脚本或作业名称
    *
    * @return $this
    */
    public function setAssociatedTaskName($associatedTaskName)
    {
        $this->container['associatedTaskName'] = $associatedTaskName;
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

