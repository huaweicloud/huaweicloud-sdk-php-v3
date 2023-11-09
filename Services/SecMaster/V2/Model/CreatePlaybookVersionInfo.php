<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePlaybookVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePlaybookVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  描述
    * workspaceId  工作空间ID
    * playbookId  剧本ID
    * actions  关联流程列表
    * dataclassId  数据类ID
    * ruleEnable  过滤规则是否启用
    * ruleId  过滤规则ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'workspaceId' => 'string',
            'playbookId' => 'string',
            'actions' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ActionInfo[]',
            'dataclassId' => 'string',
            'ruleEnable' => 'bool',
            'ruleId' => 'string',
            'triggerType' => 'string',
            'dataobjectCreate' => 'bool',
            'dataobjectUpdate' => 'bool',
            'dataobjectDelete' => 'bool',
            'actionStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  描述
    * workspaceId  工作空间ID
    * playbookId  剧本ID
    * actions  关联流程列表
    * dataclassId  数据类ID
    * ruleEnable  过滤规则是否启用
    * ruleId  过滤规则ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'workspaceId' => null,
        'playbookId' => null,
        'actions' => null,
        'dataclassId' => null,
        'ruleEnable' => null,
        'ruleId' => null,
        'triggerType' => null,
        'dataobjectCreate' => null,
        'dataobjectUpdate' => null,
        'dataobjectDelete' => null,
        'actionStrategy' => null
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
    * description  描述
    * workspaceId  工作空间ID
    * playbookId  剧本ID
    * actions  关联流程列表
    * dataclassId  数据类ID
    * ruleEnable  过滤规则是否启用
    * ruleId  过滤规则ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'workspaceId' => 'workspace_id',
            'playbookId' => 'playbook_id',
            'actions' => 'actions',
            'dataclassId' => 'dataclass_id',
            'ruleEnable' => 'rule_enable',
            'ruleId' => 'rule_id',
            'triggerType' => 'trigger_type',
            'dataobjectCreate' => 'dataobject_create',
            'dataobjectUpdate' => 'dataobject_update',
            'dataobjectDelete' => 'dataobject_delete',
            'actionStrategy' => 'action_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  描述
    * workspaceId  工作空间ID
    * playbookId  剧本ID
    * actions  关联流程列表
    * dataclassId  数据类ID
    * ruleEnable  过滤规则是否启用
    * ruleId  过滤规则ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'workspaceId' => 'setWorkspaceId',
            'playbookId' => 'setPlaybookId',
            'actions' => 'setActions',
            'dataclassId' => 'setDataclassId',
            'ruleEnable' => 'setRuleEnable',
            'ruleId' => 'setRuleId',
            'triggerType' => 'setTriggerType',
            'dataobjectCreate' => 'setDataobjectCreate',
            'dataobjectUpdate' => 'setDataobjectUpdate',
            'dataobjectDelete' => 'setDataobjectDelete',
            'actionStrategy' => 'setActionStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  描述
    * workspaceId  工作空间ID
    * playbookId  剧本ID
    * actions  关联流程列表
    * dataclassId  数据类ID
    * ruleEnable  过滤规则是否启用
    * ruleId  过滤规则ID
    * triggerType  触发方式. EVENT--事件触发, TIMER--定时触发
    * dataobjectCreate  标识数据对象是否创建时触发剧本
    * dataobjectUpdate  标识数据对象是否更新时触发剧本
    * dataobjectDelete  标识数据对象是否删除时触发剧本
    * actionStrategy  执行策略. 目前仅支持异步并发执行，对应值为ASYNC
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'workspaceId' => 'getWorkspaceId',
            'playbookId' => 'getPlaybookId',
            'actions' => 'getActions',
            'dataclassId' => 'getDataclassId',
            'ruleEnable' => 'getRuleEnable',
            'ruleId' => 'getRuleId',
            'triggerType' => 'getTriggerType',
            'dataobjectCreate' => 'getDataobjectCreate',
            'dataobjectUpdate' => 'getDataobjectUpdate',
            'dataobjectDelete' => 'getDataobjectDelete',
            'actionStrategy' => 'getActionStrategy'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['playbookId'] = isset($data['playbookId']) ? $data['playbookId'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['ruleEnable'] = isset($data['ruleEnable']) ? $data['ruleEnable'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['dataobjectCreate'] = isset($data['dataobjectCreate']) ? $data['dataobjectCreate'] : null;
        $this->container['dataobjectUpdate'] = isset($data['dataobjectUpdate']) ? $data['dataobjectUpdate'] : null;
        $this->container['dataobjectDelete'] = isset($data['dataobjectDelete']) ? $data['dataobjectDelete'] : null;
        $this->container['actionStrategy'] = isset($data['actionStrategy']) ? $data['actionStrategy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) < 32)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionStrategy']) && (mb_strlen($this->container['actionStrategy']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionStrategy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionStrategy']) && (mb_strlen($this->container['actionStrategy']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionStrategy', the character length must be bigger than or equal to 1.";
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
    * Gets workspaceId
    *  工作空间ID
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
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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
    * Gets actions
    *  关联流程列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ActionInfo[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ActionInfo[]|null $actions 关联流程列表
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

