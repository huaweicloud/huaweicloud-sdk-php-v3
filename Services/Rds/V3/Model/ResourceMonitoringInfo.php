<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceMonitoringInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceMonitoringInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例id
    * name  实例名称
    * instanceState  instanceState
    * type  实例类型
    * cpu  cpu大小
    * mem  内存大小（单位：GB）
    * engineName  引擎名称
    * engineVersion  引擎版本
    * cpuUsage  cpu使用率
    * memoryUsage  内存使用率
    * diskUsage  磁盘使用率
    * tps  tps
    * qps  qps
    * iops  iops
    * activeConnections  活跃连接数
    * slowSql  慢SQL
    * readonlyInstanceResourceMonitoringInfo  只读实例资源监控指标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'instanceState' => '\HuaweiCloud\SDK\Rds\V3\Model\InstanceState',
            'type' => 'string',
            'cpu' => 'string',
            'mem' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'cpuUsage' => 'double',
            'memoryUsage' => 'double',
            'diskUsage' => 'double',
            'tps' => 'double',
            'qps' => 'double',
            'iops' => 'double',
            'activeConnections' => 'int',
            'slowSql' => 'double',
            'readonlyInstanceResourceMonitoringInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ResourceMonitoringInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例id
    * name  实例名称
    * instanceState  instanceState
    * type  实例类型
    * cpu  cpu大小
    * mem  内存大小（单位：GB）
    * engineName  引擎名称
    * engineVersion  引擎版本
    * cpuUsage  cpu使用率
    * memoryUsage  内存使用率
    * diskUsage  磁盘使用率
    * tps  tps
    * qps  qps
    * iops  iops
    * activeConnections  活跃连接数
    * slowSql  慢SQL
    * readonlyInstanceResourceMonitoringInfo  只读实例资源监控指标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'instanceState' => null,
        'type' => null,
        'cpu' => null,
        'mem' => null,
        'engineName' => null,
        'engineVersion' => null,
        'cpuUsage' => 'double',
        'memoryUsage' => 'double',
        'diskUsage' => 'double',
        'tps' => 'double',
        'qps' => 'double',
        'iops' => 'double',
        'activeConnections' => 'int32',
        'slowSql' => 'double',
        'readonlyInstanceResourceMonitoringInfo' => null
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
    * id  实例id
    * name  实例名称
    * instanceState  instanceState
    * type  实例类型
    * cpu  cpu大小
    * mem  内存大小（单位：GB）
    * engineName  引擎名称
    * engineVersion  引擎版本
    * cpuUsage  cpu使用率
    * memoryUsage  内存使用率
    * diskUsage  磁盘使用率
    * tps  tps
    * qps  qps
    * iops  iops
    * activeConnections  活跃连接数
    * slowSql  慢SQL
    * readonlyInstanceResourceMonitoringInfo  只读实例资源监控指标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'instanceState' => 'instance_state',
            'type' => 'type',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'cpuUsage' => 'cpu_usage',
            'memoryUsage' => 'memory_usage',
            'diskUsage' => 'disk_usage',
            'tps' => 'tps',
            'qps' => 'qps',
            'iops' => 'iops',
            'activeConnections' => 'active_connections',
            'slowSql' => 'slow_sql',
            'readonlyInstanceResourceMonitoringInfo' => 'readonly_instance_resource_monitoring_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例id
    * name  实例名称
    * instanceState  instanceState
    * type  实例类型
    * cpu  cpu大小
    * mem  内存大小（单位：GB）
    * engineName  引擎名称
    * engineVersion  引擎版本
    * cpuUsage  cpu使用率
    * memoryUsage  内存使用率
    * diskUsage  磁盘使用率
    * tps  tps
    * qps  qps
    * iops  iops
    * activeConnections  活跃连接数
    * slowSql  慢SQL
    * readonlyInstanceResourceMonitoringInfo  只读实例资源监控指标
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'instanceState' => 'setInstanceState',
            'type' => 'setType',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'cpuUsage' => 'setCpuUsage',
            'memoryUsage' => 'setMemoryUsage',
            'diskUsage' => 'setDiskUsage',
            'tps' => 'setTps',
            'qps' => 'setQps',
            'iops' => 'setIops',
            'activeConnections' => 'setActiveConnections',
            'slowSql' => 'setSlowSql',
            'readonlyInstanceResourceMonitoringInfo' => 'setReadonlyInstanceResourceMonitoringInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例id
    * name  实例名称
    * instanceState  instanceState
    * type  实例类型
    * cpu  cpu大小
    * mem  内存大小（单位：GB）
    * engineName  引擎名称
    * engineVersion  引擎版本
    * cpuUsage  cpu使用率
    * memoryUsage  内存使用率
    * diskUsage  磁盘使用率
    * tps  tps
    * qps  qps
    * iops  iops
    * activeConnections  活跃连接数
    * slowSql  慢SQL
    * readonlyInstanceResourceMonitoringInfo  只读实例资源监控指标
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'instanceState' => 'getInstanceState',
            'type' => 'getType',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'cpuUsage' => 'getCpuUsage',
            'memoryUsage' => 'getMemoryUsage',
            'diskUsage' => 'getDiskUsage',
            'tps' => 'getTps',
            'qps' => 'getQps',
            'iops' => 'getIops',
            'activeConnections' => 'getActiveConnections',
            'slowSql' => 'getSlowSql',
            'readonlyInstanceResourceMonitoringInfo' => 'getReadonlyInstanceResourceMonitoringInfo'
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
    const TYPE_SINGLE = 'Single';
    const TYPE_HA = 'Ha';
    const TYPE_REPLICA = 'Replica';
    const TYPE_ENTERPRISE = 'Enterprise';
    const ENGINE_NAME_MYSQL = 'mysql';
    const ENGINE_NAME_POSTGRESQL = 'postgresql';
    const ENGINE_NAME_SQLSERVER = 'sqlserver';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SINGLE,
            self::TYPE_HA,
            self::TYPE_REPLICA,
            self::TYPE_ENTERPRISE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineNameAllowableValues()
    {
        return [
            self::ENGINE_NAME_MYSQL,
            self::ENGINE_NAME_POSTGRESQL,
            self::ENGINE_NAME_SQLSERVER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceState'] = isset($data['instanceState']) ? $data['instanceState'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['memoryUsage'] = isset($data['memoryUsage']) ? $data['memoryUsage'] : null;
        $this->container['diskUsage'] = isset($data['diskUsage']) ? $data['diskUsage'] : null;
        $this->container['tps'] = isset($data['tps']) ? $data['tps'] : null;
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
        $this->container['iops'] = isset($data['iops']) ? $data['iops'] : null;
        $this->container['activeConnections'] = isset($data['activeConnections']) ? $data['activeConnections'] : null;
        $this->container['slowSql'] = isset($data['slowSql']) ? $data['slowSql'] : null;
        $this->container['readonlyInstanceResourceMonitoringInfo'] = isset($data['readonlyInstanceResourceMonitoringInfo']) ? $data['readonlyInstanceResourceMonitoringInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['instanceState'] === null) {
            $invalidProperties[] = "'instanceState' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['mem'] === null) {
            $invalidProperties[] = "'mem' can't be null";
        }
        if ($this->container['engineName'] === null) {
            $invalidProperties[] = "'engineName' can't be null";
        }
            $allowedValues = $this->getEngineNameAllowableValues();
                if (!is_null($this->container['engineName']) && !in_array($this->container['engineName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
        if ($this->container['cpuUsage'] === null) {
            $invalidProperties[] = "'cpuUsage' can't be null";
        }
        if ($this->container['memoryUsage'] === null) {
            $invalidProperties[] = "'memoryUsage' can't be null";
        }
        if ($this->container['diskUsage'] === null) {
            $invalidProperties[] = "'diskUsage' can't be null";
        }
        if ($this->container['tps'] === null) {
            $invalidProperties[] = "'tps' can't be null";
        }
        if ($this->container['iops'] === null) {
            $invalidProperties[] = "'iops' can't be null";
        }
        if ($this->container['activeConnections'] === null) {
            $invalidProperties[] = "'activeConnections' can't be null";
        }
        if ($this->container['readonlyInstanceResourceMonitoringInfo'] === null) {
            $invalidProperties[] = "'readonlyInstanceResourceMonitoringInfo' can't be null";
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
    *  实例id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例id
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
    *  实例名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instanceState
    *  instanceState
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\InstanceState
    */
    public function getInstanceState()
    {
        return $this->container['instanceState'];
    }

    /**
    * Sets instanceState
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\InstanceState $instanceState instanceState
    *
    * @return $this
    */
    public function setInstanceState($instanceState)
    {
        $this->container['instanceState'] = $instanceState;
        return $this;
    }

    /**
    * Gets type
    *  实例类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 实例类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cpu
    *  cpu大小
    *
    * @return string
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string $cpu cpu大小
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  内存大小（单位：GB）
    *
    * @return string
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string $mem 内存大小（单位：GB）
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称
    *
    * @return string
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string $engineName 引擎名称
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  cpu使用率
    *
    * @return double
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param double $cpuUsage cpu使用率
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets memoryUsage
    *  内存使用率
    *
    * @return double
    */
    public function getMemoryUsage()
    {
        return $this->container['memoryUsage'];
    }

    /**
    * Sets memoryUsage
    *
    * @param double $memoryUsage 内存使用率
    *
    * @return $this
    */
    public function setMemoryUsage($memoryUsage)
    {
        $this->container['memoryUsage'] = $memoryUsage;
        return $this;
    }

    /**
    * Gets diskUsage
    *  磁盘使用率
    *
    * @return double
    */
    public function getDiskUsage()
    {
        return $this->container['diskUsage'];
    }

    /**
    * Sets diskUsage
    *
    * @param double $diskUsage 磁盘使用率
    *
    * @return $this
    */
    public function setDiskUsage($diskUsage)
    {
        $this->container['diskUsage'] = $diskUsage;
        return $this;
    }

    /**
    * Gets tps
    *  tps
    *
    * @return double
    */
    public function getTps()
    {
        return $this->container['tps'];
    }

    /**
    * Sets tps
    *
    * @param double $tps tps
    *
    * @return $this
    */
    public function setTps($tps)
    {
        $this->container['tps'] = $tps;
        return $this;
    }

    /**
    * Gets qps
    *  qps
    *
    * @return double|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param double|null $qps qps
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
        return $this;
    }

    /**
    * Gets iops
    *  iops
    *
    * @return double
    */
    public function getIops()
    {
        return $this->container['iops'];
    }

    /**
    * Sets iops
    *
    * @param double $iops iops
    *
    * @return $this
    */
    public function setIops($iops)
    {
        $this->container['iops'] = $iops;
        return $this;
    }

    /**
    * Gets activeConnections
    *  活跃连接数
    *
    * @return int
    */
    public function getActiveConnections()
    {
        return $this->container['activeConnections'];
    }

    /**
    * Sets activeConnections
    *
    * @param int $activeConnections 活跃连接数
    *
    * @return $this
    */
    public function setActiveConnections($activeConnections)
    {
        $this->container['activeConnections'] = $activeConnections;
        return $this;
    }

    /**
    * Gets slowSql
    *  慢SQL
    *
    * @return double|null
    */
    public function getSlowSql()
    {
        return $this->container['slowSql'];
    }

    /**
    * Sets slowSql
    *
    * @param double|null $slowSql 慢SQL
    *
    * @return $this
    */
    public function setSlowSql($slowSql)
    {
        $this->container['slowSql'] = $slowSql;
        return $this;
    }

    /**
    * Gets readonlyInstanceResourceMonitoringInfo
    *  只读实例资源监控指标
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ResourceMonitoringInfo[]
    */
    public function getReadonlyInstanceResourceMonitoringInfo()
    {
        return $this->container['readonlyInstanceResourceMonitoringInfo'];
    }

    /**
    * Sets readonlyInstanceResourceMonitoringInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ResourceMonitoringInfo[] $readonlyInstanceResourceMonitoringInfo 只读实例资源监控指标
    *
    * @return $this
    */
    public function setReadonlyInstanceResourceMonitoringInfo($readonlyInstanceResourceMonitoringInfo)
    {
        $this->container['readonlyInstanceResourceMonitoringInfo'] = $readonlyInstanceResourceMonitoringInfo;
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

