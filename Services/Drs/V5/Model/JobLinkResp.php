<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobLinkResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobLinkResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * sourceEndpointType  源数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * targetEndpointType  目标数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * taskTypes  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * clusterModes  引擎实例模式。取值： - Single：单机模式。 - Ha：主备模式。 - Cluster：集群模式。 - Sharding：分片模式。 - Independent：GaussDB独立部署模式。
    * description  链路描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'string',
            'engineType' => 'string',
            'sourceEndpointType' => 'string',
            'targetEndpointType' => 'string',
            'jobDirection' => 'string',
            'netType' => 'string',
            'taskTypes' => 'string[]',
            'clusterModes' => 'string[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * sourceEndpointType  源数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * targetEndpointType  目标数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * taskTypes  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * clusterModes  引擎实例模式。取值： - Single：单机模式。 - Ha：主备模式。 - Cluster：集群模式。 - Sharding：分片模式。 - Independent：GaussDB独立部署模式。
    * description  链路描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'engineType' => null,
        'sourceEndpointType' => null,
        'targetEndpointType' => null,
        'jobDirection' => null,
        'netType' => null,
        'taskTypes' => null,
        'clusterModes' => null,
        'description' => null
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
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * sourceEndpointType  源数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * targetEndpointType  目标数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * taskTypes  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * clusterModes  引擎实例模式。取值： - Single：单机模式。 - Ha：主备模式。 - Cluster：集群模式。 - Sharding：分片模式。 - Independent：GaussDB独立部署模式。
    * description  链路描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'engineType' => 'engine_type',
            'sourceEndpointType' => 'source_endpoint_type',
            'targetEndpointType' => 'target_endpoint_type',
            'jobDirection' => 'job_direction',
            'netType' => 'net_type',
            'taskTypes' => 'task_types',
            'clusterModes' => 'cluster_modes',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * sourceEndpointType  源数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * targetEndpointType  目标数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * taskTypes  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * clusterModes  引擎实例模式。取值： - Single：单机模式。 - Ha：主备模式。 - Cluster：集群模式。 - Sharding：分片模式。 - Independent：GaussDB独立部署模式。
    * description  链路描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'engineType' => 'setEngineType',
            'sourceEndpointType' => 'setSourceEndpointType',
            'targetEndpointType' => 'setTargetEndpointType',
            'jobDirection' => 'setJobDirection',
            'netType' => 'setNetType',
            'taskTypes' => 'setTaskTypes',
            'clusterModes' => 'setClusterModes',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    * sourceEndpointType  源数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * targetEndpointType  目标数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * taskTypes  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * clusterModes  引擎实例模式。取值： - Single：单机模式。 - Ha：主备模式。 - Cluster：集群模式。 - Sharding：分片模式。 - Independent：GaussDB独立部署模式。
    * description  链路描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'engineType' => 'getEngineType',
            'sourceEndpointType' => 'getSourceEndpointType',
            'targetEndpointType' => 'getTargetEndpointType',
            'jobDirection' => 'getJobDirection',
            'netType' => 'getNetType',
            'taskTypes' => 'getTaskTypes',
            'clusterModes' => 'getClusterModes',
            'description' => 'getDescription'
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
    const JOB_TYPE_MIGRATION = 'migration';
    const JOB_TYPE_SYNC = 'sync';
    const JOB_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const ENGINE_TYPE_ORACLE_TO_GAUSSDBV5 = 'oracle-to-gaussdbv5';
    const SOURCE_ENDPOINT_TYPE_OFFLINE = 'offline';
    const SOURCE_ENDPOINT_TYPE_ECS = 'ecs';
    const SOURCE_ENDPOINT_TYPE_CLOUD = 'cloud';
    const TARGET_ENDPOINT_TYPE_OFFLINE = 'offline';
    const TARGET_ENDPOINT_TYPE_ECS = 'ecs';
    const TARGET_ENDPOINT_TYPE_CLOUD = 'cloud';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    const NET_TYPE_EIP = 'eip';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    const TASK_TYPES_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPES_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_TYPES_INCR_TRANS = 'INCR_TRANS';
    const CLUSTER_MODES_SINGLE = 'Single';
    const CLUSTER_MODES_HA = 'Ha';
    const CLUSTER_MODES_CLUSTER = 'Cluster';
    const CLUSTER_MODES_SHARDING = 'Sharding';
    const CLUSTER_MODES_INDEPENDENT = 'Independent';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_MIGRATION,
            self::JOB_TYPE_SYNC,
            self::JOB_TYPE_CLOUD_DATA_GUARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_ORACLE_TO_GAUSSDBV5,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceEndpointTypeAllowableValues()
    {
        return [
            self::SOURCE_ENDPOINT_TYPE_OFFLINE,
            self::SOURCE_ENDPOINT_TYPE_ECS,
            self::SOURCE_ENDPOINT_TYPE_CLOUD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetEndpointTypeAllowableValues()
    {
        return [
            self::TARGET_ENDPOINT_TYPE_OFFLINE,
            self::TARGET_ENDPOINT_TYPE_ECS,
            self::TARGET_ENDPOINT_TYPE_CLOUD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_EIP,
            self::NET_TYPE_VPC,
            self::NET_TYPE_VPN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypesAllowableValues()
    {
        return [
            self::TASK_TYPES_FULL_TRANS,
            self::TASK_TYPES_FULL_INCR_TRANS,
            self::TASK_TYPES_INCR_TRANS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterModesAllowableValues()
    {
        return [
            self::CLUSTER_MODES_SINGLE,
            self::CLUSTER_MODES_HA,
            self::CLUSTER_MODES_CLUSTER,
            self::CLUSTER_MODES_SHARDING,
            self::CLUSTER_MODES_INDEPENDENT,
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['sourceEndpointType'] = isset($data['sourceEndpointType']) ? $data['sourceEndpointType'] : null;
        $this->container['targetEndpointType'] = isset($data['targetEndpointType']) ? $data['targetEndpointType'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['taskTypes'] = isset($data['taskTypes']) ? $data['taskTypes'] : null;
        $this->container['clusterModes'] = isset($data['clusterModes']) ? $data['clusterModes'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sourceEndpointType'] === null) {
            $invalidProperties[] = "'sourceEndpointType' can't be null";
        }
            $allowedValues = $this->getSourceEndpointTypeAllowableValues();
                if (!is_null($this->container['sourceEndpointType']) && !in_array($this->container['sourceEndpointType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceEndpointType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetEndpointType'] === null) {
            $invalidProperties[] = "'targetEndpointType' can't be null";
        }
            $allowedValues = $this->getTargetEndpointTypeAllowableValues();
                if (!is_null($this->container['targetEndpointType']) && !in_array($this->container['targetEndpointType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetEndpointType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobDirection'] === null) {
            $invalidProperties[] = "'jobDirection' can't be null";
        }
            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['netType'] === null) {
            $invalidProperties[] = "'netType' can't be null";
        }
            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['taskTypes'] === null) {
            $invalidProperties[] = "'taskTypes' can't be null";
        }
        if ($this->container['clusterModes'] === null) {
            $invalidProperties[] = "'clusterModes' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
    * Gets jobType
    *  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets sourceEndpointType
    *  源数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    *
    * @return string
    */
    public function getSourceEndpointType()
    {
        return $this->container['sourceEndpointType'];
    }

    /**
    * Sets sourceEndpointType
    *
    * @param string $sourceEndpointType 源数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    *
    * @return $this
    */
    public function setSourceEndpointType($sourceEndpointType)
    {
        $this->container['sourceEndpointType'] = $sourceEndpointType;
        return $this;
    }

    /**
    * Gets targetEndpointType
    *  目标数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    *
    * @return string
    */
    public function getTargetEndpointType()
    {
        return $this->container['targetEndpointType'];
    }

    /**
    * Sets targetEndpointType
    *
    * @param string $targetEndpointType 目标数据库实例类型。取值： - offline：自建数据库。 - ecs：华为云ECS自建数据库。 - cloud：华为云数据库。
    *
    * @return $this
    */
    public function setTargetEndpointType($targetEndpointType)
    {
        $this->container['targetEndpointType'] = $targetEndpointType;
        return $this;
    }

    /**
    * Gets jobDirection
    *  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return string
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string $jobDirection 迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    *
    * @return string
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string $netType 网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets taskTypes
    *  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    *
    * @return string[]
    */
    public function getTaskTypes()
    {
        return $this->container['taskTypes'];
    }

    /**
    * Sets taskTypes
    *
    * @param string[] $taskTypes 迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    *
    * @return $this
    */
    public function setTaskTypes($taskTypes)
    {
        $this->container['taskTypes'] = $taskTypes;
        return $this;
    }

    /**
    * Gets clusterModes
    *  引擎实例模式。取值： - Single：单机模式。 - Ha：主备模式。 - Cluster：集群模式。 - Sharding：分片模式。 - Independent：GaussDB独立部署模式。
    *
    * @return string[]
    */
    public function getClusterModes()
    {
        return $this->container['clusterModes'];
    }

    /**
    * Sets clusterModes
    *
    * @param string[] $clusterModes 引擎实例模式。取值： - Single：单机模式。 - Ha：主备模式。 - Cluster：集群模式。 - Sharding：分片模式。 - Independent：GaussDB独立部署模式。
    *
    * @return $this
    */
    public function setClusterModes($clusterModes)
    {
        $this->container['clusterModes'] = $clusterModes;
        return $this;
    }

    /**
    * Gets description
    *  链路描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 链路描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

