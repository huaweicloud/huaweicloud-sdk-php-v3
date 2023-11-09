<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlaybookVersionListEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlaybookVersionListEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  剧本版本ID
    * description  描述
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * creatorId  创建者ID
    * modifierId  修改者ID
    * playbookId  剧本ID
    * version  版本号
    * enabled  是否激活
    * status  状态. (EDITING--编辑中, APPROVING--审核中, UNPASSED--审核不通过, PUBLISHED--审核通过)
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    * ruleEnable  过滤规则是否启用
    * dataclassId  数据类ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * versionType  版本类型
    * ruleId  过滤规则ID
    * dataclassName  数据类名称
    * approveName  审核者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'projectId' => 'string',
            'creatorId' => 'string',
            'modifierId' => 'string',
            'playbookId' => 'string',
            'version' => 'string',
            'enabled' => 'bool',
            'status' => 'string',
            'actionStrategy' => 'string',
            'ruleEnable' => 'bool',
            'dataclassId' => 'string',
            'triggerType' => 'string',
            'dataobjectCreate' => 'bool',
            'dataobjectUpdate' => 'bool',
            'dataobjectDelete' => 'bool',
            'versionType' => 'int',
            'ruleId' => 'string',
            'dataclassName' => 'string',
            'approveName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  剧本版本ID
    * description  描述
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * creatorId  创建者ID
    * modifierId  修改者ID
    * playbookId  剧本ID
    * version  版本号
    * enabled  是否激活
    * status  状态. (EDITING--编辑中, APPROVING--审核中, UNPASSED--审核不通过, PUBLISHED--审核通过)
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    * ruleEnable  过滤规则是否启用
    * dataclassId  数据类ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * versionType  版本类型
    * ruleId  过滤规则ID
    * dataclassName  数据类名称
    * approveName  审核者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'createTime' => null,
        'updateTime' => null,
        'projectId' => null,
        'creatorId' => null,
        'modifierId' => null,
        'playbookId' => null,
        'version' => null,
        'enabled' => null,
        'status' => null,
        'actionStrategy' => null,
        'ruleEnable' => null,
        'dataclassId' => null,
        'triggerType' => null,
        'dataobjectCreate' => null,
        'dataobjectUpdate' => null,
        'dataobjectDelete' => null,
        'versionType' => null,
        'ruleId' => null,
        'dataclassName' => null,
        'approveName' => null
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
    * id  剧本版本ID
    * description  描述
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * creatorId  创建者ID
    * modifierId  修改者ID
    * playbookId  剧本ID
    * version  版本号
    * enabled  是否激活
    * status  状态. (EDITING--编辑中, APPROVING--审核中, UNPASSED--审核不通过, PUBLISHED--审核通过)
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    * ruleEnable  过滤规则是否启用
    * dataclassId  数据类ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * versionType  版本类型
    * ruleId  过滤规则ID
    * dataclassName  数据类名称
    * approveName  审核者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'projectId' => 'project_id',
            'creatorId' => 'creator_id',
            'modifierId' => 'modifier_id',
            'playbookId' => 'playbook_id',
            'version' => 'version',
            'enabled' => 'enabled',
            'status' => 'status',
            'actionStrategy' => 'action_strategy',
            'ruleEnable' => 'rule_enable',
            'dataclassId' => 'dataclass_id',
            'triggerType' => 'trigger_type',
            'dataobjectCreate' => 'dataobject_create',
            'dataobjectUpdate' => 'dataobject_update',
            'dataobjectDelete' => 'dataobject_delete',
            'versionType' => 'version_type',
            'ruleId' => 'rule_id',
            'dataclassName' => 'dataclass_name',
            'approveName' => 'approve_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  剧本版本ID
    * description  描述
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * creatorId  创建者ID
    * modifierId  修改者ID
    * playbookId  剧本ID
    * version  版本号
    * enabled  是否激活
    * status  状态. (EDITING--编辑中, APPROVING--审核中, UNPASSED--审核不通过, PUBLISHED--审核通过)
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    * ruleEnable  过滤规则是否启用
    * dataclassId  数据类ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * versionType  版本类型
    * ruleId  过滤规则ID
    * dataclassName  数据类名称
    * approveName  审核者
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'projectId' => 'setProjectId',
            'creatorId' => 'setCreatorId',
            'modifierId' => 'setModifierId',
            'playbookId' => 'setPlaybookId',
            'version' => 'setVersion',
            'enabled' => 'setEnabled',
            'status' => 'setStatus',
            'actionStrategy' => 'setActionStrategy',
            'ruleEnable' => 'setRuleEnable',
            'dataclassId' => 'setDataclassId',
            'triggerType' => 'setTriggerType',
            'dataobjectCreate' => 'setDataobjectCreate',
            'dataobjectUpdate' => 'setDataobjectUpdate',
            'dataobjectDelete' => 'setDataobjectDelete',
            'versionType' => 'setVersionType',
            'ruleId' => 'setRuleId',
            'dataclassName' => 'setDataclassName',
            'approveName' => 'setApproveName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  剧本版本ID
    * description  描述
    * createTime  创建时间
    * updateTime  更新时间
    * projectId  项目ID
    * creatorId  创建者ID
    * modifierId  修改者ID
    * playbookId  剧本ID
    * version  版本号
    * enabled  是否激活
    * status  状态. (EDITING--编辑中, APPROVING--审核中, UNPASSED--审核不通过, PUBLISHED--审核通过)
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    * ruleEnable  过滤规则是否启用
    * dataclassId  数据类ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * versionType  版本类型
    * ruleId  过滤规则ID
    * dataclassName  数据类名称
    * approveName  审核者
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'projectId' => 'getProjectId',
            'creatorId' => 'getCreatorId',
            'modifierId' => 'getModifierId',
            'playbookId' => 'getPlaybookId',
            'version' => 'getVersion',
            'enabled' => 'getEnabled',
            'status' => 'getStatus',
            'actionStrategy' => 'getActionStrategy',
            'ruleEnable' => 'getRuleEnable',
            'dataclassId' => 'getDataclassId',
            'triggerType' => 'getTriggerType',
            'dataobjectCreate' => 'getDataobjectCreate',
            'dataobjectUpdate' => 'getDataobjectUpdate',
            'dataobjectDelete' => 'getDataobjectDelete',
            'versionType' => 'getVersionType',
            'ruleId' => 'getRuleId',
            'dataclassName' => 'getDataclassName',
            'approveName' => 'getApproveName'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['playbookId'] = isset($data['playbookId']) ? $data['playbookId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['actionStrategy'] = isset($data['actionStrategy']) ? $data['actionStrategy'] : null;
        $this->container['ruleEnable'] = isset($data['ruleEnable']) ? $data['ruleEnable'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['dataobjectCreate'] = isset($data['dataobjectCreate']) ? $data['dataobjectCreate'] : null;
        $this->container['dataobjectUpdate'] = isset($data['dataobjectUpdate']) ? $data['dataobjectUpdate'] : null;
        $this->container['dataobjectDelete'] = isset($data['dataobjectDelete']) ? $data['dataobjectDelete'] : null;
        $this->container['versionType'] = isset($data['versionType']) ? $data['versionType'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['approveName'] = isset($data['approveName']) ? $data['approveName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) < 32)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionStrategy']) && (mb_strlen($this->container['actionStrategy']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionStrategy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionStrategy']) && (mb_strlen($this->container['actionStrategy']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionStrategy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['versionType']) && ($this->container['versionType'] > 1)) {
                $invalidProperties[] = "invalid value for 'versionType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['versionType']) && ($this->container['versionType'] < 0)) {
                $invalidProperties[] = "invalid value for 'versionType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['approveName']) && (mb_strlen($this->container['approveName']) > 64)) {
                $invalidProperties[] = "invalid value for 'approveName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['approveName']) && (mb_strlen($this->container['approveName']) < 0)) {
                $invalidProperties[] = "invalid value for 'approveName', the character length must be bigger than or equal to 0.";
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
    *  剧本版本ID
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
    * @param string|null $id 剧本版本ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建者ID
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建者ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets modifierId
    *  修改者ID
    *
    * @return string|null
    */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
    * Sets modifierId
    *
    * @param string|null $modifierId 修改者ID
    *
    * @return $this
    */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;
        return $this;
    }

    /**
    * Gets playbookId
    *  剧本ID
    *
    * @return string|null
    */
    public function getPlaybookId()
    {
        return $this->container['playbookId'];
    }

    /**
    * Sets playbookId
    *
    * @param string|null $playbookId 剧本ID
    *
    * @return $this
    */
    public function setPlaybookId($playbookId)
    {
        $this->container['playbookId'] = $playbookId;
        return $this;
    }

    /**
    * Gets version
    *  版本号
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
    * @param string|null $version 版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets enabled
    *  是否激活
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否激活
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets status
    *  状态. (EDITING--编辑中, APPROVING--审核中, UNPASSED--审核不通过, PUBLISHED--审核通过)
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
    * @param string|null $status 状态. (EDITING--编辑中, APPROVING--审核中, UNPASSED--审核不通过, PUBLISHED--审核通过)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets actionStrategy
    *  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    *
    * @return string|null
    */
    public function getActionStrategy()
    {
        return $this->container['actionStrategy'];
    }

    /**
    * Sets actionStrategy
    *
    * @param string|null $actionStrategy 执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    *
    * @return $this
    */
    public function setActionStrategy($actionStrategy)
    {
        $this->container['actionStrategy'] = $actionStrategy;
        return $this;
    }

    /**
    * Gets ruleEnable
    *  过滤规则是否启用
    *
    * @return bool|null
    */
    public function getRuleEnable()
    {
        return $this->container['ruleEnable'];
    }

    /**
    * Sets ruleEnable
    *
    * @param bool|null $ruleEnable 过滤规则是否启用
    *
    * @return $this
    */
    public function setRuleEnable($ruleEnable)
    {
        $this->container['ruleEnable'] = $ruleEnable;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类ID
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 数据类ID
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发方式. EVENT--事件触发, TIMER--定时触发
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发方式. EVENT--事件触发, TIMER--定时触发
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets dataobjectCreate
    *  标识数据对象是否创建时触发剧本
    *
    * @return bool|null
    */
    public function getDataobjectCreate()
    {
        return $this->container['dataobjectCreate'];
    }

    /**
    * Sets dataobjectCreate
    *
    * @param bool|null $dataobjectCreate 标识数据对象是否创建时触发剧本
    *
    * @return $this
    */
    public function setDataobjectCreate($dataobjectCreate)
    {
        $this->container['dataobjectCreate'] = $dataobjectCreate;
        return $this;
    }

    /**
    * Gets dataobjectUpdate
    *  标识数据对象是否更新时触发剧本
    *
    * @return bool|null
    */
    public function getDataobjectUpdate()
    {
        return $this->container['dataobjectUpdate'];
    }

    /**
    * Sets dataobjectUpdate
    *
    * @param bool|null $dataobjectUpdate 标识数据对象是否更新时触发剧本
    *
    * @return $this
    */
    public function setDataobjectUpdate($dataobjectUpdate)
    {
        $this->container['dataobjectUpdate'] = $dataobjectUpdate;
        return $this;
    }

    /**
    * Gets dataobjectDelete
    *  标识数据对象是否删除时触发剧本
    *
    * @return bool|null
    */
    public function getDataobjectDelete()
    {
        return $this->container['dataobjectDelete'];
    }

    /**
    * Sets dataobjectDelete
    *
    * @param bool|null $dataobjectDelete 标识数据对象是否删除时触发剧本
    *
    * @return $this
    */
    public function setDataobjectDelete($dataobjectDelete)
    {
        $this->container['dataobjectDelete'] = $dataobjectDelete;
        return $this;
    }

    /**
    * Gets versionType
    *  版本类型
    *
    * @return int|null
    */
    public function getVersionType()
    {
        return $this->container['versionType'];
    }

    /**
    * Sets versionType
    *
    * @param int|null $versionType 版本类型
    *
    * @return $this
    */
    public function setVersionType($versionType)
    {
        $this->container['versionType'] = $versionType;
        return $this;
    }

    /**
    * Gets ruleId
    *  过滤规则ID
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 过滤规则ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets dataclassName
    *  数据类名称
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName 数据类名称
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets approveName
    *  审核者
    *
    * @return string|null
    */
    public function getApproveName()
    {
        return $this->container['approveName'];
    }

    /**
    * Sets approveName
    *
    * @param string|null $approveName 审核者
    *
    * @return $this
    */
    public function setApproveName($approveName)
    {
        $this->container['approveName'] = $approveName;
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

