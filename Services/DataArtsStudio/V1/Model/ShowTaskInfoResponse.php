<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务id
    * name  任务名称
    * description  任务描述
    * userId  用户id
    * createTime  创建时间
    * projectId  产品id
    * dirId  目录id
    * scheduleConfig  scheduleConfig
    * parameterConfig  自定义元数据信息
    * updateTime  修改时间
    * userName  用户名
    * path  路径
    * lastRunTime  最后一次执行时间
    * startTime  开始时间
    * endTime  结束时间
    * nextRunTime  下一次执行时间
    * dutyPerson  责任人
    * updateType  修改类型
    * dataSourceType  数据来源类型
    * taskConfig  任务信息Map<String, Object>
    * dataSourceWorkspaceId  数据来源工作空间id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'userId' => 'string',
            'createTime' => 'string',
            'projectId' => 'string',
            'dirId' => 'string',
            'scheduleConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SchedulerInfo',
            'parameterConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CustomMetadata[]',
            'updateTime' => 'string',
            'userName' => 'string',
            'path' => 'string',
            'lastRunTime' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'nextRunTime' => 'string',
            'dutyPerson' => 'string',
            'updateType' => 'string',
            'dataSourceType' => 'string',
            'taskConfig' => 'object',
            'dataSourceWorkspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务id
    * name  任务名称
    * description  任务描述
    * userId  用户id
    * createTime  创建时间
    * projectId  产品id
    * dirId  目录id
    * scheduleConfig  scheduleConfig
    * parameterConfig  自定义元数据信息
    * updateTime  修改时间
    * userName  用户名
    * path  路径
    * lastRunTime  最后一次执行时间
    * startTime  开始时间
    * endTime  结束时间
    * nextRunTime  下一次执行时间
    * dutyPerson  责任人
    * updateType  修改类型
    * dataSourceType  数据来源类型
    * taskConfig  任务信息Map<String, Object>
    * dataSourceWorkspaceId  数据来源工作空间id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'userId' => null,
        'createTime' => null,
        'projectId' => null,
        'dirId' => null,
        'scheduleConfig' => null,
        'parameterConfig' => null,
        'updateTime' => null,
        'userName' => null,
        'path' => null,
        'lastRunTime' => null,
        'startTime' => null,
        'endTime' => null,
        'nextRunTime' => null,
        'dutyPerson' => null,
        'updateType' => null,
        'dataSourceType' => null,
        'taskConfig' => null,
        'dataSourceWorkspaceId' => null
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
    * id  任务id
    * name  任务名称
    * description  任务描述
    * userId  用户id
    * createTime  创建时间
    * projectId  产品id
    * dirId  目录id
    * scheduleConfig  scheduleConfig
    * parameterConfig  自定义元数据信息
    * updateTime  修改时间
    * userName  用户名
    * path  路径
    * lastRunTime  最后一次执行时间
    * startTime  开始时间
    * endTime  结束时间
    * nextRunTime  下一次执行时间
    * dutyPerson  责任人
    * updateType  修改类型
    * dataSourceType  数据来源类型
    * taskConfig  任务信息Map<String, Object>
    * dataSourceWorkspaceId  数据来源工作空间id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'userId' => 'user_id',
            'createTime' => 'create_time',
            'projectId' => 'project_id',
            'dirId' => 'dir_id',
            'scheduleConfig' => 'schedule_config',
            'parameterConfig' => 'parameter_config',
            'updateTime' => 'update_time',
            'userName' => 'user_name',
            'path' => 'path',
            'lastRunTime' => 'last_run_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'nextRunTime' => 'next_run_time',
            'dutyPerson' => 'duty_person',
            'updateType' => 'update_type',
            'dataSourceType' => 'data_source_type',
            'taskConfig' => 'task_config',
            'dataSourceWorkspaceId' => 'data_source_workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务id
    * name  任务名称
    * description  任务描述
    * userId  用户id
    * createTime  创建时间
    * projectId  产品id
    * dirId  目录id
    * scheduleConfig  scheduleConfig
    * parameterConfig  自定义元数据信息
    * updateTime  修改时间
    * userName  用户名
    * path  路径
    * lastRunTime  最后一次执行时间
    * startTime  开始时间
    * endTime  结束时间
    * nextRunTime  下一次执行时间
    * dutyPerson  责任人
    * updateType  修改类型
    * dataSourceType  数据来源类型
    * taskConfig  任务信息Map<String, Object>
    * dataSourceWorkspaceId  数据来源工作空间id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'userId' => 'setUserId',
            'createTime' => 'setCreateTime',
            'projectId' => 'setProjectId',
            'dirId' => 'setDirId',
            'scheduleConfig' => 'setScheduleConfig',
            'parameterConfig' => 'setParameterConfig',
            'updateTime' => 'setUpdateTime',
            'userName' => 'setUserName',
            'path' => 'setPath',
            'lastRunTime' => 'setLastRunTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'nextRunTime' => 'setNextRunTime',
            'dutyPerson' => 'setDutyPerson',
            'updateType' => 'setUpdateType',
            'dataSourceType' => 'setDataSourceType',
            'taskConfig' => 'setTaskConfig',
            'dataSourceWorkspaceId' => 'setDataSourceWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务id
    * name  任务名称
    * description  任务描述
    * userId  用户id
    * createTime  创建时间
    * projectId  产品id
    * dirId  目录id
    * scheduleConfig  scheduleConfig
    * parameterConfig  自定义元数据信息
    * updateTime  修改时间
    * userName  用户名
    * path  路径
    * lastRunTime  最后一次执行时间
    * startTime  开始时间
    * endTime  结束时间
    * nextRunTime  下一次执行时间
    * dutyPerson  责任人
    * updateType  修改类型
    * dataSourceType  数据来源类型
    * taskConfig  任务信息Map<String, Object>
    * dataSourceWorkspaceId  数据来源工作空间id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'userId' => 'getUserId',
            'createTime' => 'getCreateTime',
            'projectId' => 'getProjectId',
            'dirId' => 'getDirId',
            'scheduleConfig' => 'getScheduleConfig',
            'parameterConfig' => 'getParameterConfig',
            'updateTime' => 'getUpdateTime',
            'userName' => 'getUserName',
            'path' => 'getPath',
            'lastRunTime' => 'getLastRunTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'nextRunTime' => 'getNextRunTime',
            'dutyPerson' => 'getDutyPerson',
            'updateType' => 'getUpdateType',
            'dataSourceType' => 'getDataSourceType',
            'taskConfig' => 'getTaskConfig',
            'dataSourceWorkspaceId' => 'getDataSourceWorkspaceId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['dirId'] = isset($data['dirId']) ? $data['dirId'] : null;
        $this->container['scheduleConfig'] = isset($data['scheduleConfig']) ? $data['scheduleConfig'] : null;
        $this->container['parameterConfig'] = isset($data['parameterConfig']) ? $data['parameterConfig'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['lastRunTime'] = isset($data['lastRunTime']) ? $data['lastRunTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['nextRunTime'] = isset($data['nextRunTime']) ? $data['nextRunTime'] : null;
        $this->container['dutyPerson'] = isset($data['dutyPerson']) ? $data['dutyPerson'] : null;
        $this->container['updateType'] = isset($data['updateType']) ? $data['updateType'] : null;
        $this->container['dataSourceType'] = isset($data['dataSourceType']) ? $data['dataSourceType'] : null;
        $this->container['taskConfig'] = isset($data['taskConfig']) ? $data['taskConfig'] : null;
        $this->container['dataSourceWorkspaceId'] = isset($data['dataSourceWorkspaceId']) ? $data['dataSourceWorkspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  任务id
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
    * @param string|null $id 任务id
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
    *  任务名称
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
    * @param string|null $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  任务描述
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
    * @param string|null $description 任务描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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
    * Gets projectId
    *  产品id
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
    * @param string|null $projectId 产品id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets dirId
    *  目录id
    *
    * @return string|null
    */
    public function getDirId()
    {
        return $this->container['dirId'];
    }

    /**
    * Sets dirId
    *
    * @param string|null $dirId 目录id
    *
    * @return $this
    */
    public function setDirId($dirId)
    {
        $this->container['dirId'] = $dirId;
        return $this;
    }

    /**
    * Gets scheduleConfig
    *  scheduleConfig
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SchedulerInfo|null
    */
    public function getScheduleConfig()
    {
        return $this->container['scheduleConfig'];
    }

    /**
    * Sets scheduleConfig
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SchedulerInfo|null $scheduleConfig scheduleConfig
    *
    * @return $this
    */
    public function setScheduleConfig($scheduleConfig)
    {
        $this->container['scheduleConfig'] = $scheduleConfig;
        return $this;
    }

    /**
    * Gets parameterConfig
    *  自定义元数据信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CustomMetadata[]|null
    */
    public function getParameterConfig()
    {
        return $this->container['parameterConfig'];
    }

    /**
    * Sets parameterConfig
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CustomMetadata[]|null $parameterConfig 自定义元数据信息
    *
    * @return $this
    */
    public function setParameterConfig($parameterConfig)
    {
        $this->container['parameterConfig'] = $parameterConfig;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
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
    * @param string|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets path
    *  路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets lastRunTime
    *  最后一次执行时间
    *
    * @return string|null
    */
    public function getLastRunTime()
    {
        return $this->container['lastRunTime'];
    }

    /**
    * Sets lastRunTime
    *
    * @param string|null $lastRunTime 最后一次执行时间
    *
    * @return $this
    */
    public function setLastRunTime($lastRunTime)
    {
        $this->container['lastRunTime'] = $lastRunTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets nextRunTime
    *  下一次执行时间
    *
    * @return string|null
    */
    public function getNextRunTime()
    {
        return $this->container['nextRunTime'];
    }

    /**
    * Sets nextRunTime
    *
    * @param string|null $nextRunTime 下一次执行时间
    *
    * @return $this
    */
    public function setNextRunTime($nextRunTime)
    {
        $this->container['nextRunTime'] = $nextRunTime;
        return $this;
    }

    /**
    * Gets dutyPerson
    *  责任人
    *
    * @return string|null
    */
    public function getDutyPerson()
    {
        return $this->container['dutyPerson'];
    }

    /**
    * Sets dutyPerson
    *
    * @param string|null $dutyPerson 责任人
    *
    * @return $this
    */
    public function setDutyPerson($dutyPerson)
    {
        $this->container['dutyPerson'] = $dutyPerson;
        return $this;
    }

    /**
    * Gets updateType
    *  修改类型
    *
    * @return string|null
    */
    public function getUpdateType()
    {
        return $this->container['updateType'];
    }

    /**
    * Sets updateType
    *
    * @param string|null $updateType 修改类型
    *
    * @return $this
    */
    public function setUpdateType($updateType)
    {
        $this->container['updateType'] = $updateType;
        return $this;
    }

    /**
    * Gets dataSourceType
    *  数据来源类型
    *
    * @return string|null
    */
    public function getDataSourceType()
    {
        return $this->container['dataSourceType'];
    }

    /**
    * Sets dataSourceType
    *
    * @param string|null $dataSourceType 数据来源类型
    *
    * @return $this
    */
    public function setDataSourceType($dataSourceType)
    {
        $this->container['dataSourceType'] = $dataSourceType;
        return $this;
    }

    /**
    * Gets taskConfig
    *  任务信息Map<String, Object>
    *
    * @return object|null
    */
    public function getTaskConfig()
    {
        return $this->container['taskConfig'];
    }

    /**
    * Sets taskConfig
    *
    * @param object|null $taskConfig 任务信息Map<String, Object>
    *
    * @return $this
    */
    public function setTaskConfig($taskConfig)
    {
        $this->container['taskConfig'] = $taskConfig;
        return $this;
    }

    /**
    * Gets dataSourceWorkspaceId
    *  数据来源工作空间id
    *
    * @return string|null
    */
    public function getDataSourceWorkspaceId()
    {
        return $this->container['dataSourceWorkspaceId'];
    }

    /**
    * Sets dataSourceWorkspaceId
    *
    * @param string|null $dataSourceWorkspaceId 数据来源工作空间id
    *
    * @return $this
    */
    public function setDataSourceWorkspaceId($dataSourceWorkspaceId)
    {
        $this->container['dataSourceWorkspaceId'] = $dataSourceWorkspaceId;
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

