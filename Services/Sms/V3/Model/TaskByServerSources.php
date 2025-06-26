<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskByServerSources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskByServerSources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * estimateCompleteTime  预估结束时间
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * compressRate  压缩率
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
    * remainSeconds  已迁移时长
    * logBucket  上传日志指定桶名称
    * logExpire  分享链接有效期
    * logUploadTime  日志上传时间
    * logShareUrl  分享链接url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'state' => 'string',
            'estimateCompleteTime' => 'int',
            'startDate' => 'int',
            'speedLimit' => 'int',
            'migrateSpeed' => 'double',
            'compressRate' => 'double',
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
            'remainSeconds' => 'int',
            'logBucket' => 'string',
            'logExpire' => 'int',
            'logUploadTime' => 'int',
            'logShareUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * estimateCompleteTime  预估结束时间
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * compressRate  压缩率
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
    * remainSeconds  已迁移时长
    * logBucket  上传日志指定桶名称
    * logExpire  分享链接有效期
    * logUploadTime  日志上传时间
    * logShareUrl  分享链接url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'state' => null,
        'estimateCompleteTime' => 'int64',
        'startDate' => 'int64',
        'speedLimit' => 'int32',
        'migrateSpeed' => 'double',
        'compressRate' => 'double',
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
        'remainSeconds' => 'int64',
        'logBucket' => null,
        'logExpire' => 'int64',
        'logUploadTime' => 'int64',
        'logShareUrl' => null
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
    * estimateCompleteTime  预估结束时间
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * compressRate  压缩率
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
    * remainSeconds  已迁移时长
    * logBucket  上传日志指定桶名称
    * logExpire  分享链接有效期
    * logUploadTime  日志上传时间
    * logShareUrl  分享链接url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'state' => 'state',
            'estimateCompleteTime' => 'estimate_complete_time',
            'startDate' => 'start_date',
            'speedLimit' => 'speed_limit',
            'migrateSpeed' => 'migrate_speed',
            'compressRate' => 'compress_rate',
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
            'remainSeconds' => 'remain_seconds',
            'logBucket' => 'log_bucket',
            'logExpire' => 'log_expire',
            'logUploadTime' => 'log_upload_time',
            'logShareUrl' => 'log_share_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * estimateCompleteTime  预估结束时间
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * compressRate  压缩率
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
    * remainSeconds  已迁移时长
    * logBucket  上传日志指定桶名称
    * logExpire  分享链接有效期
    * logUploadTime  日志上传时间
    * logShareUrl  分享链接url
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'state' => 'setState',
            'estimateCompleteTime' => 'setEstimateCompleteTime',
            'startDate' => 'setStartDate',
            'speedLimit' => 'setSpeedLimit',
            'migrateSpeed' => 'setMigrateSpeed',
            'compressRate' => 'setCompressRate',
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
            'remainSeconds' => 'setRemainSeconds',
            'logBucket' => 'setLogBucket',
            'logExpire' => 'setLogExpire',
            'logUploadTime' => 'setLogUploadTime',
            'logShareUrl' => 'setLogShareUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * name  任务名称
    * type  任务类型
    * state  任务状态
    * estimateCompleteTime  预估结束时间
    * startDate  开始时间
    * speedLimit  限速
    * migrateSpeed  迁移速率
    * compressRate  压缩率
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
    * remainSeconds  已迁移时长
    * logBucket  上传日志指定桶名称
    * logExpire  分享链接有效期
    * logUploadTime  日志上传时间
    * logShareUrl  分享链接url
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'state' => 'getState',
            'estimateCompleteTime' => 'getEstimateCompleteTime',
            'startDate' => 'getStartDate',
            'speedLimit' => 'getSpeedLimit',
            'migrateSpeed' => 'getMigrateSpeed',
            'compressRate' => 'getCompressRate',
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
            'remainSeconds' => 'getRemainSeconds',
            'logBucket' => 'getLogBucket',
            'logExpire' => 'getLogExpire',
            'logUploadTime' => 'getLogUploadTime',
            'logShareUrl' => 'getLogShareUrl'
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
        $this->container['estimateCompleteTime'] = isset($data['estimateCompleteTime']) ? $data['estimateCompleteTime'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['migrateSpeed'] = isset($data['migrateSpeed']) ? $data['migrateSpeed'] : null;
        $this->container['compressRate'] = isset($data['compressRate']) ? $data['compressRate'] : null;
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
        $this->container['remainSeconds'] = isset($data['remainSeconds']) ? $data['remainSeconds'] : null;
        $this->container['logBucket'] = isset($data['logBucket']) ? $data['logBucket'] : null;
        $this->container['logExpire'] = isset($data['logExpire']) ? $data['logExpire'] : null;
        $this->container['logUploadTime'] = isset($data['logUploadTime']) ? $data['logUploadTime'] : null;
        $this->container['logShareUrl'] = isset($data['logShareUrl']) ? $data['logShareUrl'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['estimateCompleteTime']) && ($this->container['estimateCompleteTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'estimateCompleteTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['estimateCompleteTime']) && ($this->container['estimateCompleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'estimateCompleteTime', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['compressRate']) && ($this->container['compressRate'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'compressRate', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['compressRate']) && ($this->container['compressRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'compressRate', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['remainSeconds']) && ($this->container['remainSeconds'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'remainSeconds', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['remainSeconds']) && ($this->container['remainSeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'remainSeconds', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logBucket']) && (mb_strlen($this->container['logBucket']) > 255)) {
                $invalidProperties[] = "invalid value for 'logBucket', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logBucket']) && (mb_strlen($this->container['logBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'logBucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logExpire']) && ($this->container['logExpire'] > 64800)) {
                $invalidProperties[] = "invalid value for 'logExpire', must be smaller than or equal to 64800.";
            }
            if (!is_null($this->container['logExpire']) && ($this->container['logExpire'] < 300)) {
                $invalidProperties[] = "invalid value for 'logExpire', must be bigger than or equal to 300.";
            }
            if (!is_null($this->container['logUploadTime']) && ($this->container['logUploadTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'logUploadTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['logUploadTime']) && ($this->container['logUploadTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'logUploadTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logShareUrl']) && (mb_strlen($this->container['logShareUrl']) > 65535)) {
                $invalidProperties[] = "invalid value for 'logShareUrl', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['logShareUrl']) && (mb_strlen($this->container['logShareUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'logShareUrl', the character length must be bigger than or equal to 0.";
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
    * Gets estimateCompleteTime
    *  预估结束时间
    *
    * @return int|null
    */
    public function getEstimateCompleteTime()
    {
        return $this->container['estimateCompleteTime'];
    }

    /**
    * Sets estimateCompleteTime
    *
    * @param int|null $estimateCompleteTime 预估结束时间
    *
    * @return $this
    */
    public function setEstimateCompleteTime($estimateCompleteTime)
    {
        $this->container['estimateCompleteTime'] = $estimateCompleteTime;
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
    * Gets compressRate
    *  压缩率
    *
    * @return double|null
    */
    public function getCompressRate()
    {
        return $this->container['compressRate'];
    }

    /**
    * Sets compressRate
    *
    * @param double|null $compressRate 压缩率
    *
    * @return $this
    */
    public function setCompressRate($compressRate)
    {
        $this->container['compressRate'] = $compressRate;
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
    * Gets remainSeconds
    *  已迁移时长
    *
    * @return int|null
    */
    public function getRemainSeconds()
    {
        return $this->container['remainSeconds'];
    }

    /**
    * Sets remainSeconds
    *
    * @param int|null $remainSeconds 已迁移时长
    *
    * @return $this
    */
    public function setRemainSeconds($remainSeconds)
    {
        $this->container['remainSeconds'] = $remainSeconds;
        return $this;
    }

    /**
    * Gets logBucket
    *  上传日志指定桶名称
    *
    * @return string|null
    */
    public function getLogBucket()
    {
        return $this->container['logBucket'];
    }

    /**
    * Sets logBucket
    *
    * @param string|null $logBucket 上传日志指定桶名称
    *
    * @return $this
    */
    public function setLogBucket($logBucket)
    {
        $this->container['logBucket'] = $logBucket;
        return $this;
    }

    /**
    * Gets logExpire
    *  分享链接有效期
    *
    * @return int|null
    */
    public function getLogExpire()
    {
        return $this->container['logExpire'];
    }

    /**
    * Sets logExpire
    *
    * @param int|null $logExpire 分享链接有效期
    *
    * @return $this
    */
    public function setLogExpire($logExpire)
    {
        $this->container['logExpire'] = $logExpire;
        return $this;
    }

    /**
    * Gets logUploadTime
    *  日志上传时间
    *
    * @return int|null
    */
    public function getLogUploadTime()
    {
        return $this->container['logUploadTime'];
    }

    /**
    * Sets logUploadTime
    *
    * @param int|null $logUploadTime 日志上传时间
    *
    * @return $this
    */
    public function setLogUploadTime($logUploadTime)
    {
        $this->container['logUploadTime'] = $logUploadTime;
        return $this;
    }

    /**
    * Gets logShareUrl
    *  分享链接url
    *
    * @return string|null
    */
    public function getLogShareUrl()
    {
        return $this->container['logShareUrl'];
    }

    /**
    * Sets logShareUrl
    *
    * @param string|null $logShareUrl 分享链接url
    *
    * @return $this
    */
    public function setLogShareUrl($logShareUrl)
    {
        $this->container['logShareUrl'] = $logShareUrl;
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

