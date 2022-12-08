<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetStackMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetStackMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackId  栈的唯一Id
    * stackName  栈的名字
    * description  栈的描述，此描述为用户在创建资源栈时指定
    * varsStructure  参数列表
    * varsUriContent  vars文件中的内容
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * createTime  栈的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  由于栈可以被更新，此处为上次更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * enableDeletionProtection  资源栈删除保护的目标状态
    * enableAutoRollback  资源栈是否开启自动回滚的标识位
    * status  资源栈的执行状态     * `DEPLOYMENT_IN_PROGRESS` - 正在部署     * `DEPLOYMENT_FAILED` - 部署失败。请于StatusMessage见更多详情     * `DEPLOYMENT_COMPLETE ` - 部署结束     * `ROLLBACK_IN_PROGRESS` - 正在回滚     * `ROLLBACK_FAILED` - 回滚失败。请于StatusMessage见更多详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除     * `DELETION_FAILED` - 删除失败     * `CREATION_COMPLETE` - 生成完成，并没有任何部署
    * statusMessage  展示更多细节的信息
    * agencies  委托授权的信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackId' => 'string',
            'stackName' => 'string',
            'description' => 'string',
            'varsStructure' => '\HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]',
            'varsUriContent' => 'string',
            'varsBody' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'enableDeletionProtection' => 'bool',
            'enableAutoRollback' => 'bool',
            'status' => 'string',
            'statusMessage' => 'string',
            'agencies' => '\HuaweiCloud\SDK\Aos\V1\Model\Agency[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackId  栈的唯一Id
    * stackName  栈的名字
    * description  栈的描述，此描述为用户在创建资源栈时指定
    * varsStructure  参数列表
    * varsUriContent  vars文件中的内容
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * createTime  栈的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  由于栈可以被更新，此处为上次更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * enableDeletionProtection  资源栈删除保护的目标状态
    * enableAutoRollback  资源栈是否开启自动回滚的标识位
    * status  资源栈的执行状态     * `DEPLOYMENT_IN_PROGRESS` - 正在部署     * `DEPLOYMENT_FAILED` - 部署失败。请于StatusMessage见更多详情     * `DEPLOYMENT_COMPLETE ` - 部署结束     * `ROLLBACK_IN_PROGRESS` - 正在回滚     * `ROLLBACK_FAILED` - 回滚失败。请于StatusMessage见更多详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除     * `DELETION_FAILED` - 删除失败     * `CREATION_COMPLETE` - 生成完成，并没有任何部署
    * statusMessage  展示更多细节的信息
    * agencies  委托授权的信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackId' => null,
        'stackName' => null,
        'description' => null,
        'varsStructure' => null,
        'varsUriContent' => null,
        'varsBody' => null,
        'createTime' => null,
        'updateTime' => null,
        'enableDeletionProtection' => null,
        'enableAutoRollback' => null,
        'status' => null,
        'statusMessage' => null,
        'agencies' => null
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
    * stackId  栈的唯一Id
    * stackName  栈的名字
    * description  栈的描述，此描述为用户在创建资源栈时指定
    * varsStructure  参数列表
    * varsUriContent  vars文件中的内容
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * createTime  栈的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  由于栈可以被更新，此处为上次更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * enableDeletionProtection  资源栈删除保护的目标状态
    * enableAutoRollback  资源栈是否开启自动回滚的标识位
    * status  资源栈的执行状态     * `DEPLOYMENT_IN_PROGRESS` - 正在部署     * `DEPLOYMENT_FAILED` - 部署失败。请于StatusMessage见更多详情     * `DEPLOYMENT_COMPLETE ` - 部署结束     * `ROLLBACK_IN_PROGRESS` - 正在回滚     * `ROLLBACK_FAILED` - 回滚失败。请于StatusMessage见更多详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除     * `DELETION_FAILED` - 删除失败     * `CREATION_COMPLETE` - 生成完成，并没有任何部署
    * statusMessage  展示更多细节的信息
    * agencies  委托授权的信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackId' => 'stack_id',
            'stackName' => 'stack_name',
            'description' => 'description',
            'varsStructure' => 'vars_structure',
            'varsUriContent' => 'vars_uri_content',
            'varsBody' => 'vars_body',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'enableDeletionProtection' => 'enable_deletion_protection',
            'enableAutoRollback' => 'enable_auto_rollback',
            'status' => 'status',
            'statusMessage' => 'status_message',
            'agencies' => 'agencies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackId  栈的唯一Id
    * stackName  栈的名字
    * description  栈的描述，此描述为用户在创建资源栈时指定
    * varsStructure  参数列表
    * varsUriContent  vars文件中的内容
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * createTime  栈的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  由于栈可以被更新，此处为上次更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * enableDeletionProtection  资源栈删除保护的目标状态
    * enableAutoRollback  资源栈是否开启自动回滚的标识位
    * status  资源栈的执行状态     * `DEPLOYMENT_IN_PROGRESS` - 正在部署     * `DEPLOYMENT_FAILED` - 部署失败。请于StatusMessage见更多详情     * `DEPLOYMENT_COMPLETE ` - 部署结束     * `ROLLBACK_IN_PROGRESS` - 正在回滚     * `ROLLBACK_FAILED` - 回滚失败。请于StatusMessage见更多详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除     * `DELETION_FAILED` - 删除失败     * `CREATION_COMPLETE` - 生成完成，并没有任何部署
    * statusMessage  展示更多细节的信息
    * agencies  委托授权的信息
    *
    * @var string[]
    */
    protected static $setters = [
            'stackId' => 'setStackId',
            'stackName' => 'setStackName',
            'description' => 'setDescription',
            'varsStructure' => 'setVarsStructure',
            'varsUriContent' => 'setVarsUriContent',
            'varsBody' => 'setVarsBody',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'enableDeletionProtection' => 'setEnableDeletionProtection',
            'enableAutoRollback' => 'setEnableAutoRollback',
            'status' => 'setStatus',
            'statusMessage' => 'setStatusMessage',
            'agencies' => 'setAgencies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackId  栈的唯一Id
    * stackName  栈的名字
    * description  栈的描述，此描述为用户在创建资源栈时指定
    * varsStructure  参数列表
    * varsUriContent  vars文件中的内容
    * varsBody  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    * createTime  栈的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  由于栈可以被更新，此处为上次更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * enableDeletionProtection  资源栈删除保护的目标状态
    * enableAutoRollback  资源栈是否开启自动回滚的标识位
    * status  资源栈的执行状态     * `DEPLOYMENT_IN_PROGRESS` - 正在部署     * `DEPLOYMENT_FAILED` - 部署失败。请于StatusMessage见更多详情     * `DEPLOYMENT_COMPLETE ` - 部署结束     * `ROLLBACK_IN_PROGRESS` - 正在回滚     * `ROLLBACK_FAILED` - 回滚失败。请于StatusMessage见更多详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除     * `DELETION_FAILED` - 删除失败     * `CREATION_COMPLETE` - 生成完成，并没有任何部署
    * statusMessage  展示更多细节的信息
    * agencies  委托授权的信息
    *
    * @var string[]
    */
    protected static $getters = [
            'stackId' => 'getStackId',
            'stackName' => 'getStackName',
            'description' => 'getDescription',
            'varsStructure' => 'getVarsStructure',
            'varsUriContent' => 'getVarsUriContent',
            'varsBody' => 'getVarsBody',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'enableDeletionProtection' => 'getEnableDeletionProtection',
            'enableAutoRollback' => 'getEnableAutoRollback',
            'status' => 'getStatus',
            'statusMessage' => 'getStatusMessage',
            'agencies' => 'getAgencies'
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
    const STATUS_DEPLOYMENT_IN_PROGRESS = 'DEPLOYMENT_IN_PROGRESS';
    const STATUS_DEPLOYMENT_FAILED = 'DEPLOYMENT_FAILED';
    const STATUS_DEPLOYMENT_COMPLETE = 'DEPLOYMENT_COMPLETE';
    const STATUS_ROLLBACK_IN_PROGRESS = 'ROLLBACK_IN_PROGRESS';
    const STATUS_ROLLBACK_FAILED = 'ROLLBACK_FAILED';
    const STATUS_ROLLBACK_COMPLETE = 'ROLLBACK_COMPLETE';
    const STATUS_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const STATUS_DELETION_FAILED = 'DELETION_FAILED';
    const STATUS_CREATION_COMPLETE = 'CREATION_COMPLETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DEPLOYMENT_IN_PROGRESS,
            self::STATUS_DEPLOYMENT_FAILED,
            self::STATUS_DEPLOYMENT_COMPLETE,
            self::STATUS_ROLLBACK_IN_PROGRESS,
            self::STATUS_ROLLBACK_FAILED,
            self::STATUS_ROLLBACK_COMPLETE,
            self::STATUS_DELETION_IN_PROGRESS,
            self::STATUS_DELETION_FAILED,
            self::STATUS_CREATION_COMPLETE,
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
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['varsStructure'] = isset($data['varsStructure']) ? $data['varsStructure'] : null;
        $this->container['varsUriContent'] = isset($data['varsUriContent']) ? $data['varsUriContent'] : null;
        $this->container['varsBody'] = isset($data['varsBody']) ? $data['varsBody'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enableDeletionProtection'] = isset($data['enableDeletionProtection']) ? $data['enableDeletionProtection'] : null;
        $this->container['enableAutoRollback'] = isset($data['enableAutoRollback']) ? $data['enableAutoRollback'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['agencies'] = isset($data['agencies']) ? $data['agencies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 36.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets stackId
    *  栈的唯一Id
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 栈的唯一Id
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets stackName
    *  栈的名字
    *
    * @return string|null
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string|null $stackName 栈的名字
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets description
    *  栈的描述，此描述为用户在创建资源栈时指定
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
    * @param string|null $description 栈的描述，此描述为用户在创建资源栈时指定
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets varsStructure
    *  参数列表
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]|null
    */
    public function getVarsStructure()
    {
        return $this->container['varsStructure'];
    }

    /**
    * Sets varsStructure
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\VarsStructure[]|null $varsStructure 参数列表
    *
    * @return $this
    */
    public function setVarsStructure($varsStructure)
    {
        $this->container['varsStructure'] = $varsStructure;
        return $this;
    }

    /**
    * Gets varsUriContent
    *  vars文件中的内容
    *
    * @return string|null
    */
    public function getVarsUriContent()
    {
        return $this->container['varsUriContent'];
    }

    /**
    * Sets varsUriContent
    *
    * @param string|null $varsUriContent vars文件中的内容
    *
    * @return $this
    */
    public function setVarsUriContent($varsUriContent)
    {
        $this->container['varsUriContent'] = $varsUriContent;
        return $this;
    }

    /**
    * Gets varsBody
    *  terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    *
    * @return string|null
    */
    public function getVarsBody()
    {
        return $this->container['varsBody'];
    }

    /**
    * Sets varsBody
    *
    * @param string|null $varsBody terraform支持参数，即，同一个模板可以给予不同的参数而达到不同的效果。vars_body用于接收用户直接提交的tfvars文件内容
    *
    * @return $this
    */
    public function setVarsBody($varsBody)
    {
        $this->container['varsBody'] = $varsBody;
        return $this;
    }

    /**
    * Gets createTime
    *  栈的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
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
    * @param string|null $createTime 栈的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
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
    *  由于栈可以被更新，此处为上次更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
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
    * @param string|null $updateTime 由于栈可以被更新，此处为上次更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets enableDeletionProtection
    *  资源栈删除保护的目标状态
    *
    * @return bool|null
    */
    public function getEnableDeletionProtection()
    {
        return $this->container['enableDeletionProtection'];
    }

    /**
    * Sets enableDeletionProtection
    *
    * @param bool|null $enableDeletionProtection 资源栈删除保护的目标状态
    *
    * @return $this
    */
    public function setEnableDeletionProtection($enableDeletionProtection)
    {
        $this->container['enableDeletionProtection'] = $enableDeletionProtection;
        return $this;
    }

    /**
    * Gets enableAutoRollback
    *  资源栈是否开启自动回滚的标识位
    *
    * @return bool|null
    */
    public function getEnableAutoRollback()
    {
        return $this->container['enableAutoRollback'];
    }

    /**
    * Sets enableAutoRollback
    *
    * @param bool|null $enableAutoRollback 资源栈是否开启自动回滚的标识位
    *
    * @return $this
    */
    public function setEnableAutoRollback($enableAutoRollback)
    {
        $this->container['enableAutoRollback'] = $enableAutoRollback;
        return $this;
    }

    /**
    * Gets status
    *  资源栈的执行状态     * `DEPLOYMENT_IN_PROGRESS` - 正在部署     * `DEPLOYMENT_FAILED` - 部署失败。请于StatusMessage见更多详情     * `DEPLOYMENT_COMPLETE ` - 部署结束     * `ROLLBACK_IN_PROGRESS` - 正在回滚     * `ROLLBACK_FAILED` - 回滚失败。请于StatusMessage见更多详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除     * `DELETION_FAILED` - 删除失败     * `CREATION_COMPLETE` - 生成完成，并没有任何部署
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
    * @param string|null $status 资源栈的执行状态     * `DEPLOYMENT_IN_PROGRESS` - 正在部署     * `DEPLOYMENT_FAILED` - 部署失败。请于StatusMessage见更多详情     * `DEPLOYMENT_COMPLETE ` - 部署结束     * `ROLLBACK_IN_PROGRESS` - 正在回滚     * `ROLLBACK_FAILED` - 回滚失败。请于StatusMessage见更多详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除     * `DELETION_FAILED` - 删除失败     * `CREATION_COMPLETE` - 生成完成，并没有任何部署
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusMessage
    *  展示更多细节的信息
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 展示更多细节的信息
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets agencies
    *  委托授权的信息
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null
    */
    public function getAgencies()
    {
        return $this->container['agencies'];
    }

    /**
    * Sets agencies
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\Agency[]|null $agencies 委托授权的信息
    *
    * @return $this
    */
    public function setAgencies($agencies)
    {
        $this->container['agencies'] = $agencies;
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

