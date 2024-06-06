<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComputeDimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComputeDimension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeInstanceId  节点实例ID
    * name  节点名称或脚本名称
    * type  类型,用于区分节点实例和脚本
    * nodeType  节点类型
    * jobId  作业id
    * jobInstanceId  作业实例id
    * jobName  作业名称
    * startTimeMs  节点实例启动时间,单位毫秒
    * endTimeMs  节点实例结束时间,单位毫秒
    * executeTimeMs  节点实例执行时长,单位毫秒
    * status  节点实例状态
    * lastStartTimeMs  节点实例上次执行开始时间,单位毫秒
    * lastEndTimeMs  节点实例上次执行结束时间,单位毫秒
    * cpuResourceConsumptionValue  cpu消耗值
    * cpuUnit  cpu消耗单位
    * memoryResourceConsumptionValue  内存消耗值
    * memoryUnit  内存消耗单位
    * lastCpuResourceConsumptionValue  上次cpu消耗值
    * lastCpuUnit  上次cpu消耗单位
    * lastMemoryResourceConsumptionValue  上次内存消耗值
    * lastMemoryUnit  上次内存消耗单位
    * creator  节点实例创建者name
    * warehouseTimeMs  数据入库时间,单位毫秒
    * extendedFields  扩展字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeInstanceId' => 'string',
            'name' => 'string',
            'type' => 'int',
            'nodeType' => 'string',
            'jobId' => 'int',
            'jobInstanceId' => 'int',
            'jobName' => 'string',
            'startTimeMs' => 'int',
            'endTimeMs' => 'int',
            'executeTimeMs' => 'int',
            'status' => 'string',
            'lastStartTimeMs' => 'int',
            'lastEndTimeMs' => 'int',
            'cpuResourceConsumptionValue' => 'int',
            'cpuUnit' => 'string',
            'memoryResourceConsumptionValue' => 'int',
            'memoryUnit' => 'string',
            'lastCpuResourceConsumptionValue' => 'int',
            'lastCpuUnit' => 'string',
            'lastMemoryResourceConsumptionValue' => 'int',
            'lastMemoryUnit' => 'string',
            'creator' => 'string',
            'warehouseTimeMs' => 'int',
            'extendedFields' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeInstanceId  节点实例ID
    * name  节点名称或脚本名称
    * type  类型,用于区分节点实例和脚本
    * nodeType  节点类型
    * jobId  作业id
    * jobInstanceId  作业实例id
    * jobName  作业名称
    * startTimeMs  节点实例启动时间,单位毫秒
    * endTimeMs  节点实例结束时间,单位毫秒
    * executeTimeMs  节点实例执行时长,单位毫秒
    * status  节点实例状态
    * lastStartTimeMs  节点实例上次执行开始时间,单位毫秒
    * lastEndTimeMs  节点实例上次执行结束时间,单位毫秒
    * cpuResourceConsumptionValue  cpu消耗值
    * cpuUnit  cpu消耗单位
    * memoryResourceConsumptionValue  内存消耗值
    * memoryUnit  内存消耗单位
    * lastCpuResourceConsumptionValue  上次cpu消耗值
    * lastCpuUnit  上次cpu消耗单位
    * lastMemoryResourceConsumptionValue  上次内存消耗值
    * lastMemoryUnit  上次内存消耗单位
    * creator  节点实例创建者name
    * warehouseTimeMs  数据入库时间,单位毫秒
    * extendedFields  扩展字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeInstanceId' => null,
        'name' => null,
        'type' => 'int32',
        'nodeType' => null,
        'jobId' => 'int64',
        'jobInstanceId' => 'int64',
        'jobName' => null,
        'startTimeMs' => 'int64',
        'endTimeMs' => 'int64',
        'executeTimeMs' => 'int64',
        'status' => null,
        'lastStartTimeMs' => 'int64',
        'lastEndTimeMs' => 'int64',
        'cpuResourceConsumptionValue' => 'int64',
        'cpuUnit' => null,
        'memoryResourceConsumptionValue' => 'int64',
        'memoryUnit' => null,
        'lastCpuResourceConsumptionValue' => 'int64',
        'lastCpuUnit' => null,
        'lastMemoryResourceConsumptionValue' => 'int64',
        'lastMemoryUnit' => null,
        'creator' => null,
        'warehouseTimeMs' => 'int64',
        'extendedFields' => null
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
    * nodeInstanceId  节点实例ID
    * name  节点名称或脚本名称
    * type  类型,用于区分节点实例和脚本
    * nodeType  节点类型
    * jobId  作业id
    * jobInstanceId  作业实例id
    * jobName  作业名称
    * startTimeMs  节点实例启动时间,单位毫秒
    * endTimeMs  节点实例结束时间,单位毫秒
    * executeTimeMs  节点实例执行时长,单位毫秒
    * status  节点实例状态
    * lastStartTimeMs  节点实例上次执行开始时间,单位毫秒
    * lastEndTimeMs  节点实例上次执行结束时间,单位毫秒
    * cpuResourceConsumptionValue  cpu消耗值
    * cpuUnit  cpu消耗单位
    * memoryResourceConsumptionValue  内存消耗值
    * memoryUnit  内存消耗单位
    * lastCpuResourceConsumptionValue  上次cpu消耗值
    * lastCpuUnit  上次cpu消耗单位
    * lastMemoryResourceConsumptionValue  上次内存消耗值
    * lastMemoryUnit  上次内存消耗单位
    * creator  节点实例创建者name
    * warehouseTimeMs  数据入库时间,单位毫秒
    * extendedFields  扩展字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeInstanceId' => 'node_instance_id',
            'name' => 'name',
            'type' => 'type',
            'nodeType' => 'node_type',
            'jobId' => 'job_id',
            'jobInstanceId' => 'job_instance_id',
            'jobName' => 'job_name',
            'startTimeMs' => 'start_time_ms',
            'endTimeMs' => 'end_time_ms',
            'executeTimeMs' => 'execute_time_ms',
            'status' => 'status',
            'lastStartTimeMs' => 'last_start_time_ms',
            'lastEndTimeMs' => 'last_end_time_ms',
            'cpuResourceConsumptionValue' => 'cpu_resource_consumption_value',
            'cpuUnit' => 'cpu_unit',
            'memoryResourceConsumptionValue' => 'memory_resource_consumption_value',
            'memoryUnit' => 'memory_unit',
            'lastCpuResourceConsumptionValue' => 'last_cpu_resource_consumption_value',
            'lastCpuUnit' => 'last_cpu_unit',
            'lastMemoryResourceConsumptionValue' => 'last_memory_resource_consumption_value',
            'lastMemoryUnit' => 'last_memory_unit',
            'creator' => 'creator',
            'warehouseTimeMs' => 'warehouse_time_ms',
            'extendedFields' => 'extended_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeInstanceId  节点实例ID
    * name  节点名称或脚本名称
    * type  类型,用于区分节点实例和脚本
    * nodeType  节点类型
    * jobId  作业id
    * jobInstanceId  作业实例id
    * jobName  作业名称
    * startTimeMs  节点实例启动时间,单位毫秒
    * endTimeMs  节点实例结束时间,单位毫秒
    * executeTimeMs  节点实例执行时长,单位毫秒
    * status  节点实例状态
    * lastStartTimeMs  节点实例上次执行开始时间,单位毫秒
    * lastEndTimeMs  节点实例上次执行结束时间,单位毫秒
    * cpuResourceConsumptionValue  cpu消耗值
    * cpuUnit  cpu消耗单位
    * memoryResourceConsumptionValue  内存消耗值
    * memoryUnit  内存消耗单位
    * lastCpuResourceConsumptionValue  上次cpu消耗值
    * lastCpuUnit  上次cpu消耗单位
    * lastMemoryResourceConsumptionValue  上次内存消耗值
    * lastMemoryUnit  上次内存消耗单位
    * creator  节点实例创建者name
    * warehouseTimeMs  数据入库时间,单位毫秒
    * extendedFields  扩展字段
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeInstanceId' => 'setNodeInstanceId',
            'name' => 'setName',
            'type' => 'setType',
            'nodeType' => 'setNodeType',
            'jobId' => 'setJobId',
            'jobInstanceId' => 'setJobInstanceId',
            'jobName' => 'setJobName',
            'startTimeMs' => 'setStartTimeMs',
            'endTimeMs' => 'setEndTimeMs',
            'executeTimeMs' => 'setExecuteTimeMs',
            'status' => 'setStatus',
            'lastStartTimeMs' => 'setLastStartTimeMs',
            'lastEndTimeMs' => 'setLastEndTimeMs',
            'cpuResourceConsumptionValue' => 'setCpuResourceConsumptionValue',
            'cpuUnit' => 'setCpuUnit',
            'memoryResourceConsumptionValue' => 'setMemoryResourceConsumptionValue',
            'memoryUnit' => 'setMemoryUnit',
            'lastCpuResourceConsumptionValue' => 'setLastCpuResourceConsumptionValue',
            'lastCpuUnit' => 'setLastCpuUnit',
            'lastMemoryResourceConsumptionValue' => 'setLastMemoryResourceConsumptionValue',
            'lastMemoryUnit' => 'setLastMemoryUnit',
            'creator' => 'setCreator',
            'warehouseTimeMs' => 'setWarehouseTimeMs',
            'extendedFields' => 'setExtendedFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeInstanceId  节点实例ID
    * name  节点名称或脚本名称
    * type  类型,用于区分节点实例和脚本
    * nodeType  节点类型
    * jobId  作业id
    * jobInstanceId  作业实例id
    * jobName  作业名称
    * startTimeMs  节点实例启动时间,单位毫秒
    * endTimeMs  节点实例结束时间,单位毫秒
    * executeTimeMs  节点实例执行时长,单位毫秒
    * status  节点实例状态
    * lastStartTimeMs  节点实例上次执行开始时间,单位毫秒
    * lastEndTimeMs  节点实例上次执行结束时间,单位毫秒
    * cpuResourceConsumptionValue  cpu消耗值
    * cpuUnit  cpu消耗单位
    * memoryResourceConsumptionValue  内存消耗值
    * memoryUnit  内存消耗单位
    * lastCpuResourceConsumptionValue  上次cpu消耗值
    * lastCpuUnit  上次cpu消耗单位
    * lastMemoryResourceConsumptionValue  上次内存消耗值
    * lastMemoryUnit  上次内存消耗单位
    * creator  节点实例创建者name
    * warehouseTimeMs  数据入库时间,单位毫秒
    * extendedFields  扩展字段
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeInstanceId' => 'getNodeInstanceId',
            'name' => 'getName',
            'type' => 'getType',
            'nodeType' => 'getNodeType',
            'jobId' => 'getJobId',
            'jobInstanceId' => 'getJobInstanceId',
            'jobName' => 'getJobName',
            'startTimeMs' => 'getStartTimeMs',
            'endTimeMs' => 'getEndTimeMs',
            'executeTimeMs' => 'getExecuteTimeMs',
            'status' => 'getStatus',
            'lastStartTimeMs' => 'getLastStartTimeMs',
            'lastEndTimeMs' => 'getLastEndTimeMs',
            'cpuResourceConsumptionValue' => 'getCpuResourceConsumptionValue',
            'cpuUnit' => 'getCpuUnit',
            'memoryResourceConsumptionValue' => 'getMemoryResourceConsumptionValue',
            'memoryUnit' => 'getMemoryUnit',
            'lastCpuResourceConsumptionValue' => 'getLastCpuResourceConsumptionValue',
            'lastCpuUnit' => 'getLastCpuUnit',
            'lastMemoryResourceConsumptionValue' => 'getLastMemoryResourceConsumptionValue',
            'lastMemoryUnit' => 'getLastMemoryUnit',
            'creator' => 'getCreator',
            'warehouseTimeMs' => 'getWarehouseTimeMs',
            'extendedFields' => 'getExtendedFields'
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
        $this->container['nodeInstanceId'] = isset($data['nodeInstanceId']) ? $data['nodeInstanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobInstanceId'] = isset($data['jobInstanceId']) ? $data['jobInstanceId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['startTimeMs'] = isset($data['startTimeMs']) ? $data['startTimeMs'] : null;
        $this->container['endTimeMs'] = isset($data['endTimeMs']) ? $data['endTimeMs'] : null;
        $this->container['executeTimeMs'] = isset($data['executeTimeMs']) ? $data['executeTimeMs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastStartTimeMs'] = isset($data['lastStartTimeMs']) ? $data['lastStartTimeMs'] : null;
        $this->container['lastEndTimeMs'] = isset($data['lastEndTimeMs']) ? $data['lastEndTimeMs'] : null;
        $this->container['cpuResourceConsumptionValue'] = isset($data['cpuResourceConsumptionValue']) ? $data['cpuResourceConsumptionValue'] : null;
        $this->container['cpuUnit'] = isset($data['cpuUnit']) ? $data['cpuUnit'] : null;
        $this->container['memoryResourceConsumptionValue'] = isset($data['memoryResourceConsumptionValue']) ? $data['memoryResourceConsumptionValue'] : null;
        $this->container['memoryUnit'] = isset($data['memoryUnit']) ? $data['memoryUnit'] : null;
        $this->container['lastCpuResourceConsumptionValue'] = isset($data['lastCpuResourceConsumptionValue']) ? $data['lastCpuResourceConsumptionValue'] : null;
        $this->container['lastCpuUnit'] = isset($data['lastCpuUnit']) ? $data['lastCpuUnit'] : null;
        $this->container['lastMemoryResourceConsumptionValue'] = isset($data['lastMemoryResourceConsumptionValue']) ? $data['lastMemoryResourceConsumptionValue'] : null;
        $this->container['lastMemoryUnit'] = isset($data['lastMemoryUnit']) ? $data['lastMemoryUnit'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['warehouseTimeMs'] = isset($data['warehouseTimeMs']) ? $data['warehouseTimeMs'] : null;
        $this->container['extendedFields'] = isset($data['extendedFields']) ? $data['extendedFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeInstanceId']) && (mb_strlen($this->container['nodeInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nodeInstanceId']) && (mb_strlen($this->container['nodeInstanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeInstanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nodeType']) && (mb_strlen($this->container['nodeType']) > 256)) {
                $invalidProperties[] = "invalid value for 'nodeType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nodeType']) && (mb_strlen($this->container['nodeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 256)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 50)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cpuUnit']) && (mb_strlen($this->container['cpuUnit']) > 256)) {
                $invalidProperties[] = "invalid value for 'cpuUnit', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cpuUnit']) && (mb_strlen($this->container['cpuUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'cpuUnit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memoryUnit']) && (mb_strlen($this->container['memoryUnit']) > 256)) {
                $invalidProperties[] = "invalid value for 'memoryUnit', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['memoryUnit']) && (mb_strlen($this->container['memoryUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'memoryUnit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastCpuUnit']) && (mb_strlen($this->container['lastCpuUnit']) > 256)) {
                $invalidProperties[] = "invalid value for 'lastCpuUnit', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['lastCpuUnit']) && (mb_strlen($this->container['lastCpuUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastCpuUnit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastMemoryUnit']) && (mb_strlen($this->container['lastMemoryUnit']) > 256)) {
                $invalidProperties[] = "invalid value for 'lastMemoryUnit', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['lastMemoryUnit']) && (mb_strlen($this->container['lastMemoryUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastMemoryUnit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 256)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
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
    * Gets nodeInstanceId
    *  节点实例ID
    *
    * @return string|null
    */
    public function getNodeInstanceId()
    {
        return $this->container['nodeInstanceId'];
    }

    /**
    * Sets nodeInstanceId
    *
    * @param string|null $nodeInstanceId 节点实例ID
    *
    * @return $this
    */
    public function setNodeInstanceId($nodeInstanceId)
    {
        $this->container['nodeInstanceId'] = $nodeInstanceId;
        return $this;
    }

    /**
    * Gets name
    *  节点名称或脚本名称
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
    * @param string|null $name 节点名称或脚本名称
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
    *  类型,用于区分节点实例和脚本
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 类型,用于区分节点实例和脚本
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobInstanceId
    *  作业实例id
    *
    * @return int|null
    */
    public function getJobInstanceId()
    {
        return $this->container['jobInstanceId'];
    }

    /**
    * Sets jobInstanceId
    *
    * @param int|null $jobInstanceId 作业实例id
    *
    * @return $this
    */
    public function setJobInstanceId($jobInstanceId)
    {
        $this->container['jobInstanceId'] = $jobInstanceId;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets startTimeMs
    *  节点实例启动时间,单位毫秒
    *
    * @return int|null
    */
    public function getStartTimeMs()
    {
        return $this->container['startTimeMs'];
    }

    /**
    * Sets startTimeMs
    *
    * @param int|null $startTimeMs 节点实例启动时间,单位毫秒
    *
    * @return $this
    */
    public function setStartTimeMs($startTimeMs)
    {
        $this->container['startTimeMs'] = $startTimeMs;
        return $this;
    }

    /**
    * Gets endTimeMs
    *  节点实例结束时间,单位毫秒
    *
    * @return int|null
    */
    public function getEndTimeMs()
    {
        return $this->container['endTimeMs'];
    }

    /**
    * Sets endTimeMs
    *
    * @param int|null $endTimeMs 节点实例结束时间,单位毫秒
    *
    * @return $this
    */
    public function setEndTimeMs($endTimeMs)
    {
        $this->container['endTimeMs'] = $endTimeMs;
        return $this;
    }

    /**
    * Gets executeTimeMs
    *  节点实例执行时长,单位毫秒
    *
    * @return int|null
    */
    public function getExecuteTimeMs()
    {
        return $this->container['executeTimeMs'];
    }

    /**
    * Sets executeTimeMs
    *
    * @param int|null $executeTimeMs 节点实例执行时长,单位毫秒
    *
    * @return $this
    */
    public function setExecuteTimeMs($executeTimeMs)
    {
        $this->container['executeTimeMs'] = $executeTimeMs;
        return $this;
    }

    /**
    * Gets status
    *  节点实例状态
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
    * @param string|null $status 节点实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastStartTimeMs
    *  节点实例上次执行开始时间,单位毫秒
    *
    * @return int|null
    */
    public function getLastStartTimeMs()
    {
        return $this->container['lastStartTimeMs'];
    }

    /**
    * Sets lastStartTimeMs
    *
    * @param int|null $lastStartTimeMs 节点实例上次执行开始时间,单位毫秒
    *
    * @return $this
    */
    public function setLastStartTimeMs($lastStartTimeMs)
    {
        $this->container['lastStartTimeMs'] = $lastStartTimeMs;
        return $this;
    }

    /**
    * Gets lastEndTimeMs
    *  节点实例上次执行结束时间,单位毫秒
    *
    * @return int|null
    */
    public function getLastEndTimeMs()
    {
        return $this->container['lastEndTimeMs'];
    }

    /**
    * Sets lastEndTimeMs
    *
    * @param int|null $lastEndTimeMs 节点实例上次执行结束时间,单位毫秒
    *
    * @return $this
    */
    public function setLastEndTimeMs($lastEndTimeMs)
    {
        $this->container['lastEndTimeMs'] = $lastEndTimeMs;
        return $this;
    }

    /**
    * Gets cpuResourceConsumptionValue
    *  cpu消耗值
    *
    * @return int|null
    */
    public function getCpuResourceConsumptionValue()
    {
        return $this->container['cpuResourceConsumptionValue'];
    }

    /**
    * Sets cpuResourceConsumptionValue
    *
    * @param int|null $cpuResourceConsumptionValue cpu消耗值
    *
    * @return $this
    */
    public function setCpuResourceConsumptionValue($cpuResourceConsumptionValue)
    {
        $this->container['cpuResourceConsumptionValue'] = $cpuResourceConsumptionValue;
        return $this;
    }

    /**
    * Gets cpuUnit
    *  cpu消耗单位
    *
    * @return string|null
    */
    public function getCpuUnit()
    {
        return $this->container['cpuUnit'];
    }

    /**
    * Sets cpuUnit
    *
    * @param string|null $cpuUnit cpu消耗单位
    *
    * @return $this
    */
    public function setCpuUnit($cpuUnit)
    {
        $this->container['cpuUnit'] = $cpuUnit;
        return $this;
    }

    /**
    * Gets memoryResourceConsumptionValue
    *  内存消耗值
    *
    * @return int|null
    */
    public function getMemoryResourceConsumptionValue()
    {
        return $this->container['memoryResourceConsumptionValue'];
    }

    /**
    * Sets memoryResourceConsumptionValue
    *
    * @param int|null $memoryResourceConsumptionValue 内存消耗值
    *
    * @return $this
    */
    public function setMemoryResourceConsumptionValue($memoryResourceConsumptionValue)
    {
        $this->container['memoryResourceConsumptionValue'] = $memoryResourceConsumptionValue;
        return $this;
    }

    /**
    * Gets memoryUnit
    *  内存消耗单位
    *
    * @return string|null
    */
    public function getMemoryUnit()
    {
        return $this->container['memoryUnit'];
    }

    /**
    * Sets memoryUnit
    *
    * @param string|null $memoryUnit 内存消耗单位
    *
    * @return $this
    */
    public function setMemoryUnit($memoryUnit)
    {
        $this->container['memoryUnit'] = $memoryUnit;
        return $this;
    }

    /**
    * Gets lastCpuResourceConsumptionValue
    *  上次cpu消耗值
    *
    * @return int|null
    */
    public function getLastCpuResourceConsumptionValue()
    {
        return $this->container['lastCpuResourceConsumptionValue'];
    }

    /**
    * Sets lastCpuResourceConsumptionValue
    *
    * @param int|null $lastCpuResourceConsumptionValue 上次cpu消耗值
    *
    * @return $this
    */
    public function setLastCpuResourceConsumptionValue($lastCpuResourceConsumptionValue)
    {
        $this->container['lastCpuResourceConsumptionValue'] = $lastCpuResourceConsumptionValue;
        return $this;
    }

    /**
    * Gets lastCpuUnit
    *  上次cpu消耗单位
    *
    * @return string|null
    */
    public function getLastCpuUnit()
    {
        return $this->container['lastCpuUnit'];
    }

    /**
    * Sets lastCpuUnit
    *
    * @param string|null $lastCpuUnit 上次cpu消耗单位
    *
    * @return $this
    */
    public function setLastCpuUnit($lastCpuUnit)
    {
        $this->container['lastCpuUnit'] = $lastCpuUnit;
        return $this;
    }

    /**
    * Gets lastMemoryResourceConsumptionValue
    *  上次内存消耗值
    *
    * @return int|null
    */
    public function getLastMemoryResourceConsumptionValue()
    {
        return $this->container['lastMemoryResourceConsumptionValue'];
    }

    /**
    * Sets lastMemoryResourceConsumptionValue
    *
    * @param int|null $lastMemoryResourceConsumptionValue 上次内存消耗值
    *
    * @return $this
    */
    public function setLastMemoryResourceConsumptionValue($lastMemoryResourceConsumptionValue)
    {
        $this->container['lastMemoryResourceConsumptionValue'] = $lastMemoryResourceConsumptionValue;
        return $this;
    }

    /**
    * Gets lastMemoryUnit
    *  上次内存消耗单位
    *
    * @return string|null
    */
    public function getLastMemoryUnit()
    {
        return $this->container['lastMemoryUnit'];
    }

    /**
    * Sets lastMemoryUnit
    *
    * @param string|null $lastMemoryUnit 上次内存消耗单位
    *
    * @return $this
    */
    public function setLastMemoryUnit($lastMemoryUnit)
    {
        $this->container['lastMemoryUnit'] = $lastMemoryUnit;
        return $this;
    }

    /**
    * Gets creator
    *  节点实例创建者name
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
    * @param string|null $creator 节点实例创建者name
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets warehouseTimeMs
    *  数据入库时间,单位毫秒
    *
    * @return int|null
    */
    public function getWarehouseTimeMs()
    {
        return $this->container['warehouseTimeMs'];
    }

    /**
    * Sets warehouseTimeMs
    *
    * @param int|null $warehouseTimeMs 数据入库时间,单位毫秒
    *
    * @return $this
    */
    public function setWarehouseTimeMs($warehouseTimeMs)
    {
        $this->container['warehouseTimeMs'] = $warehouseTimeMs;
        return $this;
    }

    /**
    * Gets extendedFields
    *  扩展字段
    *
    * @return string|null
    */
    public function getExtendedFields()
    {
        return $this->container['extendedFields'];
    }

    /**
    * Sets extendedFields
    *
    * @param string|null $extendedFields 扩展字段
    *
    * @return $this
    */
    public function setExtendedFields($extendedFields)
    {
        $this->container['extendedFields'] = $extendedFields;
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

