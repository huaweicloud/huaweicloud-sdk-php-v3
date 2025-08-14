<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskByServerSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskByServerSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * startTargetServer  是否启动虚拟机
    * vmTemplateId  虚拟机模板ID
    * regionId  region_id
    * projectName  项目名称
    * projectId  项目ID
    * targetServer  targetServer
    * logCollectStatus  日志收集状态
    * existServer  是否使用已有虚拟机
    * usePublicIp  是否使用公网IP
    * cloneServer  cloneServer
    * subtaskInfo  当前子任务及进度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'state' => 'string',
            'startDate' => 'int',
            'speedLimit' => 'int',
            'migrateSpeed' => 'double',
            'startTargetServer' => 'bool',
            'vmTemplateId' => 'string',
            'regionId' => 'string',
            'projectName' => 'string',
            'projectId' => 'string',
            'targetServer' => '\HuaweiCloud\SDK\Sms\V3\Model\TargetServerById',
            'logCollectStatus' => 'string',
            'existServer' => 'bool',
            'usePublicIp' => 'bool',
            'cloneServer' => '\HuaweiCloud\SDK\Sms\V3\Model\CloneServer',
            'subtaskInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * startTargetServer  是否启动虚拟机
    * vmTemplateId  虚拟机模板ID
    * regionId  region_id
    * projectName  项目名称
    * projectId  项目ID
    * targetServer  targetServer
    * logCollectStatus  日志收集状态
    * existServer  是否使用已有虚拟机
    * usePublicIp  是否使用公网IP
    * cloneServer  cloneServer
    * subtaskInfo  当前子任务及进度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'state' => null,
        'startDate' => 'int64',
        'speedLimit' => 'int32',
        'migrateSpeed' => 'double',
        'startTargetServer' => null,
        'vmTemplateId' => null,
        'regionId' => null,
        'projectName' => null,
        'projectId' => null,
        'targetServer' => null,
        'logCollectStatus' => null,
        'existServer' => null,
        'usePublicIp' => null,
        'cloneServer' => null,
        'subtaskInfo' => null
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
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * startTargetServer  是否启动虚拟机
    * vmTemplateId  虚拟机模板ID
    * regionId  region_id
    * projectName  项目名称
    * projectId  项目ID
    * targetServer  targetServer
    * logCollectStatus  日志收集状态
    * existServer  是否使用已有虚拟机
    * usePublicIp  是否使用公网IP
    * cloneServer  cloneServer
    * subtaskInfo  当前子任务及进度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'state' => 'state',
            'startDate' => 'start_date',
            'speedLimit' => 'speed_limit',
            'migrateSpeed' => 'migrate_speed',
            'startTargetServer' => 'start_target_server',
            'vmTemplateId' => 'vm_template_id',
            'regionId' => 'region_id',
            'projectName' => 'project_name',
            'projectId' => 'project_id',
            'targetServer' => 'target_server',
            'logCollectStatus' => 'log_collect_status',
            'existServer' => 'exist_server',
            'usePublicIp' => 'use_public_ip',
            'cloneServer' => 'clone_server',
            'subtaskInfo' => 'subtask_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * startTargetServer  是否启动虚拟机
    * vmTemplateId  虚拟机模板ID
    * regionId  region_id
    * projectName  项目名称
    * projectId  项目ID
    * targetServer  targetServer
    * logCollectStatus  日志收集状态
    * existServer  是否使用已有虚拟机
    * usePublicIp  是否使用公网IP
    * cloneServer  cloneServer
    * subtaskInfo  当前子任务及进度
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'state' => 'setState',
            'startDate' => 'setStartDate',
            'speedLimit' => 'setSpeedLimit',
            'migrateSpeed' => 'setMigrateSpeed',
            'startTargetServer' => 'setStartTargetServer',
            'vmTemplateId' => 'setVmTemplateId',
            'regionId' => 'setRegionId',
            'projectName' => 'setProjectName',
            'projectId' => 'setProjectId',
            'targetServer' => 'setTargetServer',
            'logCollectStatus' => 'setLogCollectStatus',
            'existServer' => 'setExistServer',
            'usePublicIp' => 'setUsePublicIp',
            'cloneServer' => 'setCloneServer',
            'subtaskInfo' => 'setSubtaskInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * startTargetServer  是否启动虚拟机
    * vmTemplateId  虚拟机模板ID
    * regionId  region_id
    * projectName  项目名称
    * projectId  项目ID
    * targetServer  targetServer
    * logCollectStatus  日志收集状态
    * existServer  是否使用已有虚拟机
    * usePublicIp  是否使用公网IP
    * cloneServer  cloneServer
    * subtaskInfo  当前子任务及进度
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'state' => 'getState',
            'startDate' => 'getStartDate',
            'speedLimit' => 'getSpeedLimit',
            'migrateSpeed' => 'getMigrateSpeed',
            'startTargetServer' => 'getStartTargetServer',
            'vmTemplateId' => 'getVmTemplateId',
            'regionId' => 'getRegionId',
            'projectName' => 'getProjectName',
            'projectId' => 'getProjectId',
            'targetServer' => 'getTargetServer',
            'logCollectStatus' => 'getLogCollectStatus',
            'existServer' => 'getExistServer',
            'usePublicIp' => 'getUsePublicIp',
            'cloneServer' => 'getCloneServer',
            'subtaskInfo' => 'getSubtaskInfo'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['migrateSpeed'] = isset($data['migrateSpeed']) ? $data['migrateSpeed'] : null;
        $this->container['startTargetServer'] = isset($data['startTargetServer']) ? $data['startTargetServer'] : null;
        $this->container['vmTemplateId'] = isset($data['vmTemplateId']) ? $data['vmTemplateId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['targetServer'] = isset($data['targetServer']) ? $data['targetServer'] : null;
        $this->container['logCollectStatus'] = isset($data['logCollectStatus']) ? $data['logCollectStatus'] : null;
        $this->container['existServer'] = isset($data['existServer']) ? $data['existServer'] : null;
        $this->container['usePublicIp'] = isset($data['usePublicIp']) ? $data['usePublicIp'] : null;
        $this->container['cloneServer'] = isset($data['cloneServer']) ? $data['cloneServer'] : null;
        $this->container['subtaskInfo'] = isset($data['subtaskInfo']) ? $data['subtaskInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 255)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startDate']) && ($this->container['startDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startDate']) && ($this->container['startDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'startDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] > 10000)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['migrateSpeed']) && ($this->container['migrateSpeed'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'migrateSpeed', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['migrateSpeed']) && ($this->container['migrateSpeed'] < 0)) {
                $invalidProperties[] = "invalid value for 'migrateSpeed', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) > 255)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logCollectStatus']) && (mb_strlen($this->container['logCollectStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'logCollectStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logCollectStatus']) && (mb_strlen($this->container['logCollectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'logCollectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subtaskInfo']) && (mb_strlen($this->container['subtaskInfo']) > 255)) {
                $invalidProperties[] = "invalid value for 'subtaskInfo', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['subtaskInfo']) && (mb_strlen($this->container['subtaskInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'subtaskInfo', the character length must be bigger than or equal to 0.";
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
    *  任务ID
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
    * @param string|null $id 任务ID
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
    * Gets type
    *  任务类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets state
    *  任务状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets startDate
    *  开始时间
    *
    * @return int|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param int|null $startDate 开始时间
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets speedLimit
    *  限速
    *
    * @return int|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param int|null $speedLimit 限速
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets migrateSpeed
    *  迁移速率
    *
    * @return double|null
    */
    public function getMigrateSpeed()
    {
        return $this->container['migrateSpeed'];
    }

    /**
    * Sets migrateSpeed
    *
    * @param double|null $migrateSpeed 迁移速率
    *
    * @return $this
    */
    public function setMigrateSpeed($migrateSpeed)
    {
        $this->container['migrateSpeed'] = $migrateSpeed;
        return $this;
    }

    /**
    * Gets startTargetServer
    *  是否启动虚拟机
    *
    * @return bool|null
    */
    public function getStartTargetServer()
    {
        return $this->container['startTargetServer'];
    }

    /**
    * Sets startTargetServer
    *
    * @param bool|null $startTargetServer 是否启动虚拟机
    *
    * @return $this
    */
    public function setStartTargetServer($startTargetServer)
    {
        $this->container['startTargetServer'] = $startTargetServer;
        return $this;
    }

    /**
    * Gets vmTemplateId
    *  虚拟机模板ID
    *
    * @return string|null
    */
    public function getVmTemplateId()
    {
        return $this->container['vmTemplateId'];
    }

    /**
    * Sets vmTemplateId
    *
    * @param string|null $vmTemplateId 虚拟机模板ID
    *
    * @return $this
    */
    public function setVmTemplateId($vmTemplateId)
    {
        $this->container['vmTemplateId'] = $vmTemplateId;
        return $this;
    }

    /**
    * Gets regionId
    *  region_id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId region_id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
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
    * Gets targetServer
    *  targetServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TargetServerById|null
    */
    public function getTargetServer()
    {
        return $this->container['targetServer'];
    }

    /**
    * Sets targetServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TargetServerById|null $targetServer targetServer
    *
    * @return $this
    */
    public function setTargetServer($targetServer)
    {
        $this->container['targetServer'] = $targetServer;
        return $this;
    }

    /**
    * Gets logCollectStatus
    *  日志收集状态
    *
    * @return string|null
    */
    public function getLogCollectStatus()
    {
        return $this->container['logCollectStatus'];
    }

    /**
    * Sets logCollectStatus
    *
    * @param string|null $logCollectStatus 日志收集状态
    *
    * @return $this
    */
    public function setLogCollectStatus($logCollectStatus)
    {
        $this->container['logCollectStatus'] = $logCollectStatus;
        return $this;
    }

    /**
    * Gets existServer
    *  是否使用已有虚拟机
    *
    * @return bool|null
    */
    public function getExistServer()
    {
        return $this->container['existServer'];
    }

    /**
    * Sets existServer
    *
    * @param bool|null $existServer 是否使用已有虚拟机
    *
    * @return $this
    */
    public function setExistServer($existServer)
    {
        $this->container['existServer'] = $existServer;
        return $this;
    }

    /**
    * Gets usePublicIp
    *  是否使用公网IP
    *
    * @return bool|null
    */
    public function getUsePublicIp()
    {
        return $this->container['usePublicIp'];
    }

    /**
    * Sets usePublicIp
    *
    * @param bool|null $usePublicIp 是否使用公网IP
    *
    * @return $this
    */
    public function setUsePublicIp($usePublicIp)
    {
        $this->container['usePublicIp'] = $usePublicIp;
        return $this;
    }

    /**
    * Gets cloneServer
    *  cloneServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\CloneServer|null
    */
    public function getCloneServer()
    {
        return $this->container['cloneServer'];
    }

    /**
    * Sets cloneServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\CloneServer|null $cloneServer cloneServer
    *
    * @return $this
    */
    public function setCloneServer($cloneServer)
    {
        $this->container['cloneServer'] = $cloneServer;
        return $this;
    }

    /**
    * Gets subtaskInfo
    *  当前子任务及进度
    *
    * @return string|null
    */
    public function getSubtaskInfo()
    {
        return $this->container['subtaskInfo'];
    }

    /**
    * Sets subtaskInfo
    *
    * @param string|null $subtaskInfo 当前子任务及进度
    *
    * @return $this
    */
    public function setSubtaskInfo($subtaskInfo)
    {
        $this->container['subtaskInfo'] = $subtaskInfo;
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

