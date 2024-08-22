<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * multiWrite  灾备类型是否双主灾备。说明： - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，multi_write取值true, 否则为false。 - job_type 是其他类型时，multi_write是非必选参数。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。 - mysql-to-mysql：MySQL同步到MySQL，实时同步场景使用。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * taskType  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式，默认按需。取值： - period：包周期。 - on_demand：按需。
    * enterpriseProjectId  企业项目ID。 缺省值：\"0\"，表示\"default\"企业项目。
    * description  任务描述。 约束：任务描述不能超过256位，且不能包含!<>&'\"\\特殊字符。
    * startTime  任务定时启动时间。
    * expiredDays  任务处于异常状态一段时间后，将会自动结束。单位为天。(范围14-100)，不传默认为14天。
    * tags  标签信息，最多添加10个标签。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'jobType' => 'string',
            'multiWrite' => 'bool',
            'engineType' => 'string',
            'jobDirection' => 'string',
            'taskType' => 'string',
            'netType' => 'string',
            'chargingMode' => 'string',
            'enterpriseProjectId' => 'string',
            'description' => 'string',
            'startTime' => 'string',
            'expiredDays' => 'string',
            'tags' => '\HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]',
            'isOpenFastClean' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * multiWrite  灾备类型是否双主灾备。说明： - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，multi_write取值true, 否则为false。 - job_type 是其他类型时，multi_write是非必选参数。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。 - mysql-to-mysql：MySQL同步到MySQL，实时同步场景使用。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * taskType  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式，默认按需。取值： - period：包周期。 - on_demand：按需。
    * enterpriseProjectId  企业项目ID。 缺省值：\"0\"，表示\"default\"企业项目。
    * description  任务描述。 约束：任务描述不能超过256位，且不能包含!<>&'\"\\特殊字符。
    * startTime  任务定时启动时间。
    * expiredDays  任务处于异常状态一段时间后，将会自动结束。单位为天。(范围14-100)，不传默认为14天。
    * tags  标签信息，最多添加10个标签。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'jobType' => null,
        'multiWrite' => null,
        'engineType' => null,
        'jobDirection' => null,
        'taskType' => null,
        'netType' => null,
        'chargingMode' => null,
        'enterpriseProjectId' => null,
        'description' => null,
        'startTime' => null,
        'expiredDays' => null,
        'tags' => null,
        'isOpenFastClean' => null
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
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * multiWrite  灾备类型是否双主灾备。说明： - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，multi_write取值true, 否则为false。 - job_type 是其他类型时，multi_write是非必选参数。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。 - mysql-to-mysql：MySQL同步到MySQL，实时同步场景使用。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * taskType  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式，默认按需。取值： - period：包周期。 - on_demand：按需。
    * enterpriseProjectId  企业项目ID。 缺省值：\"0\"，表示\"default\"企业项目。
    * description  任务描述。 约束：任务描述不能超过256位，且不能包含!<>&'\"\\特殊字符。
    * startTime  任务定时启动时间。
    * expiredDays  任务处于异常状态一段时间后，将会自动结束。单位为天。(范围14-100)，不传默认为14天。
    * tags  标签信息，最多添加10个标签。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'jobType' => 'job_type',
            'multiWrite' => 'multi_write',
            'engineType' => 'engine_type',
            'jobDirection' => 'job_direction',
            'taskType' => 'task_type',
            'netType' => 'net_type',
            'chargingMode' => 'charging_mode',
            'enterpriseProjectId' => 'enterprise_project_id',
            'description' => 'description',
            'startTime' => 'start_time',
            'expiredDays' => 'expired_days',
            'tags' => 'tags',
            'isOpenFastClean' => 'is_open_fast_clean'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * multiWrite  灾备类型是否双主灾备。说明： - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，multi_write取值true, 否则为false。 - job_type 是其他类型时，multi_write是非必选参数。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。 - mysql-to-mysql：MySQL同步到MySQL，实时同步场景使用。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * taskType  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式，默认按需。取值： - period：包周期。 - on_demand：按需。
    * enterpriseProjectId  企业项目ID。 缺省值：\"0\"，表示\"default\"企业项目。
    * description  任务描述。 约束：任务描述不能超过256位，且不能包含!<>&'\"\\特殊字符。
    * startTime  任务定时启动时间。
    * expiredDays  任务处于异常状态一段时间后，将会自动结束。单位为天。(范围14-100)，不传默认为14天。
    * tags  标签信息，最多添加10个标签。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'jobType' => 'setJobType',
            'multiWrite' => 'setMultiWrite',
            'engineType' => 'setEngineType',
            'jobDirection' => 'setJobDirection',
            'taskType' => 'setTaskType',
            'netType' => 'setNetType',
            'chargingMode' => 'setChargingMode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'description' => 'setDescription',
            'startTime' => 'setStartTime',
            'expiredDays' => 'setExpiredDays',
            'tags' => 'setTags',
            'isOpenFastClean' => 'setIsOpenFastClean'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * multiWrite  灾备类型是否双主灾备。说明： - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，multi_write取值true, 否则为false。 - job_type 是其他类型时，multi_write是非必选参数。
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。 - mysql-to-mysql：MySQL同步到MySQL，实时同步场景使用。
    * jobDirection  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    * taskType  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    * chargingMode  计费模式，默认按需。取值： - period：包周期。 - on_demand：按需。
    * enterpriseProjectId  企业项目ID。 缺省值：\"0\"，表示\"default\"企业项目。
    * description  任务描述。 约束：任务描述不能超过256位，且不能包含!<>&'\"\\特殊字符。
    * startTime  任务定时启动时间。
    * expiredDays  任务处于异常状态一段时间后，将会自动结束。单位为天。(范围14-100)，不传默认为14天。
    * tags  标签信息，最多添加10个标签。
    * isOpenFastClean  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'jobType' => 'getJobType',
            'multiWrite' => 'getMultiWrite',
            'engineType' => 'getEngineType',
            'jobDirection' => 'getJobDirection',
            'taskType' => 'getTaskType',
            'netType' => 'getNetType',
            'chargingMode' => 'getChargingMode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'description' => 'getDescription',
            'startTime' => 'getStartTime',
            'expiredDays' => 'getExpiredDays',
            'tags' => 'getTags',
            'isOpenFastClean' => 'getIsOpenFastClean'
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
    const ENGINE_TYPE_REDIS_TO_GAUSSREDIS = 'redis-to-gaussredis';
    const ENGINE_TYPE_REDISCLUSTER_TO_GAUSSREDIS = 'rediscluster-to-gaussredis';
    const ENGINE_TYPE_MYSQL_TO_MYSQL = 'mysql-to-mysql';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    const TASK_TYPE_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_TYPE_INCR_TRANS = 'INCR_TRANS';
    const NET_TYPE_EIP = 'eip';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    const CHARGING_MODE_PERIOD = 'period';
    const CHARGING_MODE_ON_DEMAND = 'on_demand';
    

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
            self::ENGINE_TYPE_REDIS_TO_GAUSSREDIS,
            self::ENGINE_TYPE_REDISCLUSTER_TO_GAUSSREDIS,
            self::ENGINE_TYPE_MYSQL_TO_MYSQL,
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
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_FULL_TRANS,
            self::TASK_TYPE_FULL_INCR_TRANS,
            self::TASK_TYPE_INCR_TRANS,
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
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PERIOD,
            self::CHARGING_MODE_ON_DEMAND,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['multiWrite'] = isset($data['multiWrite']) ? $data['multiWrite'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['expiredDays'] = isset($data['expiredDays']) ? $data['expiredDays'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['isOpenFastClean'] = isset($data['isOpenFastClean']) ? $data['isOpenFastClean'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
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
    * @param string|null $name 任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets jobType
    *  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets multiWrite
    *  灾备类型是否双主灾备。说明： - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，multi_write取值true, 否则为false。 - job_type 是其他类型时，multi_write是非必选参数。
    *
    * @return bool|null
    */
    public function getMultiWrite()
    {
        return $this->container['multiWrite'];
    }

    /**
    * Sets multiWrite
    *
    * @param bool|null $multiWrite 灾备类型是否双主灾备。说明： - job_type 是cloudDataGuard时，必填，灾备类型是双主灾备时，multi_write取值true, 否则为false。 - job_type 是其他类型时，multi_write是非必选参数。
    *
    * @return $this
    */
    public function setMultiWrite($multiWrite)
    {
        $this->container['multiWrite'] = $multiWrite;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。 - mysql-to-mysql：MySQL同步到MySQL，实时同步场景使用。
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。 - mysql-to-mysql：MySQL同步到MySQL，实时同步场景使用。
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets jobDirection
    *  迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection 迁移方向。取值： - up：入云 ，灾备场景时对应本云为备。 - down：出云，灾备场景时对应本云为主。 - non-dbs：自建。
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets taskType
    *  迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 迁移模式。取值： - FULL_TRANS ：全量。 - FULL_INCR_TRANS：全量+增量。 - INCR_TRANS：增量。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType 网络类型。取值： - eip：公网网络。 - vpc：VPC网络，灾备场景不支持选择VPC网络。 - vpn：VPN、专线网络。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式，默认按需。取值： - period：包周期。 - on_demand：按需。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 计费模式，默认按需。取值： - period：包周期。 - on_demand：按需。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 缺省值：\"0\"，表示\"default\"企业项目。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。 缺省值：\"0\"，表示\"default\"企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets description
    *  任务描述。 约束：任务描述不能超过256位，且不能包含!<>&'\"\\特殊字符。
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
    * @param string|null $description 任务描述。 约束：任务描述不能超过256位，且不能包含!<>&'\"\\特殊字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets startTime
    *  任务定时启动时间。
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
    * @param string|null $startTime 任务定时启动时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets expiredDays
    *  任务处于异常状态一段时间后，将会自动结束。单位为天。(范围14-100)，不传默认为14天。
    *
    * @return string|null
    */
    public function getExpiredDays()
    {
        return $this->container['expiredDays'];
    }

    /**
    * Sets expiredDays
    *
    * @param string|null $expiredDays 任务处于异常状态一段时间后，将会自动结束。单位为天。(范围14-100)，不传默认为14天。
    *
    * @return $this
    */
    public function setExpiredDays($expiredDays)
    {
        $this->container['expiredDays'] = $expiredDays;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息，最多添加10个标签。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]|null $tags 标签信息，最多添加10个标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets isOpenFastClean
    *  是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @return bool|null
    */
    public function getIsOpenFastClean()
    {
        return $this->container['isOpenFastClean'];
    }

    /**
    * Sets isOpenFastClean
    *
    * @param bool|null $isOpenFastClean 是否开启云数据库RDS for MySQL/MariaDB的binlog快速清理。
    *
    * @return $this
    */
    public function setIsOpenFastClean($isOpenFastClean)
    {
        $this->container['isOpenFastClean'] = $isOpenFastClean;
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

