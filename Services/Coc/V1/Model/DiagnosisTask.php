<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * code  code
    * domainId  诊断记录所属租户ID
    * projectId  被诊断实例所属项目ID
    * userId  诊断记录所属用户ID
    * userName  诊断记录所属用户名称
    * progress  诊断进度
    * workOrderId  诊断任务工单ID
    * instanceId  被诊断的实例ID
    * instanceName  被诊断的实例名称
    * type  被诊断实例类别，ECS、RDS等
    * status  诊断任务状态执行状态
    * startTime  创建时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * endTime  结束时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * instanceNum  被诊断实例的数量
    * osType  被诊断实例的操作系统类型
    * region  被诊断实例所在区域
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'code' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'progress' => 'int',
            'workOrderId' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'type' => 'string',
            'status' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'instanceNum' => 'int',
            'osType' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * code  code
    * domainId  诊断记录所属租户ID
    * projectId  被诊断实例所属项目ID
    * userId  诊断记录所属用户ID
    * userName  诊断记录所属用户名称
    * progress  诊断进度
    * workOrderId  诊断任务工单ID
    * instanceId  被诊断的实例ID
    * instanceName  被诊断的实例名称
    * type  被诊断实例类别，ECS、RDS等
    * status  诊断任务状态执行状态
    * startTime  创建时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * endTime  结束时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * instanceNum  被诊断实例的数量
    * osType  被诊断实例的操作系统类型
    * region  被诊断实例所在区域
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'code' => null,
        'domainId' => null,
        'projectId' => null,
        'userId' => null,
        'userName' => null,
        'progress' => 'int32',
        'workOrderId' => null,
        'instanceId' => null,
        'instanceName' => null,
        'type' => null,
        'status' => null,
        'startTime' => null,
        'endTime' => null,
        'instanceNum' => 'int32',
        'osType' => null,
        'region' => null
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
    * id  id
    * code  code
    * domainId  诊断记录所属租户ID
    * projectId  被诊断实例所属项目ID
    * userId  诊断记录所属用户ID
    * userName  诊断记录所属用户名称
    * progress  诊断进度
    * workOrderId  诊断任务工单ID
    * instanceId  被诊断的实例ID
    * instanceName  被诊断的实例名称
    * type  被诊断实例类别，ECS、RDS等
    * status  诊断任务状态执行状态
    * startTime  创建时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * endTime  结束时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * instanceNum  被诊断实例的数量
    * osType  被诊断实例的操作系统类型
    * region  被诊断实例所在区域
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'code' => 'code',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'progress' => 'progress',
            'workOrderId' => 'work_order_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'type' => 'type',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'instanceNum' => 'instance_num',
            'osType' => 'os_type',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * code  code
    * domainId  诊断记录所属租户ID
    * projectId  被诊断实例所属项目ID
    * userId  诊断记录所属用户ID
    * userName  诊断记录所属用户名称
    * progress  诊断进度
    * workOrderId  诊断任务工单ID
    * instanceId  被诊断的实例ID
    * instanceName  被诊断的实例名称
    * type  被诊断实例类别，ECS、RDS等
    * status  诊断任务状态执行状态
    * startTime  创建时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * endTime  结束时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * instanceNum  被诊断实例的数量
    * osType  被诊断实例的操作系统类型
    * region  被诊断实例所在区域
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'code' => 'setCode',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'progress' => 'setProgress',
            'workOrderId' => 'setWorkOrderId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'type' => 'setType',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'instanceNum' => 'setInstanceNum',
            'osType' => 'setOsType',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * code  code
    * domainId  诊断记录所属租户ID
    * projectId  被诊断实例所属项目ID
    * userId  诊断记录所属用户ID
    * userName  诊断记录所属用户名称
    * progress  诊断进度
    * workOrderId  诊断任务工单ID
    * instanceId  被诊断的实例ID
    * instanceName  被诊断的实例名称
    * type  被诊断实例类别，ECS、RDS等
    * status  诊断任务状态执行状态
    * startTime  创建时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * endTime  结束时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    * instanceNum  被诊断实例的数量
    * osType  被诊断实例的操作系统类型
    * region  被诊断实例所在区域
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'code' => 'getCode',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'progress' => 'getProgress',
            'workOrderId' => 'getWorkOrderId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'type' => 'getType',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'instanceNum' => 'getInstanceNum',
            'osType' => 'getOsType',
            'region' => 'getRegion'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['workOrderId'] = isset($data['workOrderId']) ? $data['workOrderId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 64)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 0)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 128)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workOrderId']) && (mb_strlen($this->container['workOrderId']) > 128)) {
                $invalidProperties[] = "invalid value for 'workOrderId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workOrderId']) && (mb_strlen($this->container['workOrderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workOrderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceNum']) && ($this->container['instanceNum'] > 200)) {
                $invalidProperties[] = "invalid value for 'instanceNum', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['instanceNum']) && ($this->container['instanceNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'instanceNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 16)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  code
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code code
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets domainId
    *  诊断记录所属租户ID
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
    * @param string|null $domainId 诊断记录所属租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  被诊断实例所属项目ID
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
    * @param string|null $projectId 被诊断实例所属项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets userId
    *  诊断记录所属用户ID
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
    * @param string|null $userId 诊断记录所属用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  诊断记录所属用户名称
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
    * @param string|null $userName 诊断记录所属用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets progress
    *  诊断进度
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 诊断进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets workOrderId
    *  诊断任务工单ID
    *
    * @return string|null
    */
    public function getWorkOrderId()
    {
        return $this->container['workOrderId'];
    }

    /**
    * Sets workOrderId
    *
    * @param string|null $workOrderId 诊断任务工单ID
    *
    * @return $this
    */
    public function setWorkOrderId($workOrderId)
    {
        $this->container['workOrderId'] = $workOrderId;
        return $this;
    }

    /**
    * Gets instanceId
    *  被诊断的实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 被诊断的实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  被诊断的实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 被诊断的实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets type
    *  被诊断实例类别，ECS、RDS等
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
    * @param string|null $type 被诊断实例类别，ECS、RDS等
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  诊断任务状态执行状态
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
    * @param string|null $status 诊断任务状态执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  创建时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
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
    * @param string|null $startTime 创建时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
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
    *  结束时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
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
    * @param string|null $endTime 结束时间，遵循RFC3339规范，精确到秒 示例：2020-09-01T18:50:20Z
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets instanceNum
    *  被诊断实例的数量
    *
    * @return int|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int|null $instanceNum 被诊断实例的数量
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets osType
    *  被诊断实例的操作系统类型
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 被诊断实例的操作系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets region
    *  被诊断实例所在区域
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
    * @param string|null $region 被诊断实例所在区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

