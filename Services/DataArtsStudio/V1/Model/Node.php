<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Node implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Node';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  节点名称。只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。同一个作业中节点名称不能重复。
    * type  节点类型： - HiveSQL：执行Hive SQL脚本 - SparkSQL：执行Spark SQL脚本 - DWSSQL：执行DWS SQL脚本 - DLISQL：执行DLI SQL脚本 - RDSSQL：执行RDS SQL脚本 - Shell：执行Shell脚本 - Python：执行Python脚本 - DISTransferTask：创建DIS转储任务 - CDMJob：执行CDM作业 - OBSManager：执行OBS相关操作 - Dummy：虚拟节点 - RESTAPI：执行Rest API调用 - DLISpark：执行DLI Spark作业 - SMN：执行SMN通知 - MRSSpark：执行MRS Spark作业 - MapReduce：执行MapReduce作业 - MRSFlink：执行MRS服务的FLlink作业 - MRSFlinkJob：执行MRS服务的FlinkJob作业 - MRSHetuEngine: 执行MRS服务的HetuEngine作业
    * location  location
    * preNodeNames  本节点依赖的前面的节点名称列表。
    * conditions  节点执行条件，如果配置此参数，本节点是否执行由condition的字段expression所保存的EL表达式计算结果决定
    * properties  节点的属性。
    * pollingInterval  轮询节点执行结果时间间隔。单位：秒。
    * execTimeOutRetry  节点是否超时重试
    * maxExecutionTime  节点最大执行时间，如果节点在最大执行时间内还未执行完成，会把节点置为失败状态。单位：分钟。
    * retryTimes  节点失败重试次数。0代表不重试。
    * retryInterval  失败重试时间间隔。单位：秒。
    * failPolicy  作业失败策略： - FAIL：终止当前作业执行计划 - IGNORE：继续执行下一个节点 - SUSPEND：挂起当前作业执行计划 - FAIL_CHILD： 终止后续节点执行计划
    * eventTrigger  eventTrigger
    * cronTrigger  cronTrigger
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'location' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Location',
            'preNodeNames' => 'string[]',
            'conditions' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Condition[]',
            'properties' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Property[]',
            'pollingInterval' => 'int',
            'execTimeOutRetry' => 'string',
            'maxExecutionTime' => 'int',
            'retryTimes' => 'int',
            'retryInterval' => 'int',
            'failPolicy' => 'string',
            'eventTrigger' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Event',
            'cronTrigger' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Cron'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  节点名称。只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。同一个作业中节点名称不能重复。
    * type  节点类型： - HiveSQL：执行Hive SQL脚本 - SparkSQL：执行Spark SQL脚本 - DWSSQL：执行DWS SQL脚本 - DLISQL：执行DLI SQL脚本 - RDSSQL：执行RDS SQL脚本 - Shell：执行Shell脚本 - Python：执行Python脚本 - DISTransferTask：创建DIS转储任务 - CDMJob：执行CDM作业 - OBSManager：执行OBS相关操作 - Dummy：虚拟节点 - RESTAPI：执行Rest API调用 - DLISpark：执行DLI Spark作业 - SMN：执行SMN通知 - MRSSpark：执行MRS Spark作业 - MapReduce：执行MapReduce作业 - MRSFlink：执行MRS服务的FLlink作业 - MRSFlinkJob：执行MRS服务的FlinkJob作业 - MRSHetuEngine: 执行MRS服务的HetuEngine作业
    * location  location
    * preNodeNames  本节点依赖的前面的节点名称列表。
    * conditions  节点执行条件，如果配置此参数，本节点是否执行由condition的字段expression所保存的EL表达式计算结果决定
    * properties  节点的属性。
    * pollingInterval  轮询节点执行结果时间间隔。单位：秒。
    * execTimeOutRetry  节点是否超时重试
    * maxExecutionTime  节点最大执行时间，如果节点在最大执行时间内还未执行完成，会把节点置为失败状态。单位：分钟。
    * retryTimes  节点失败重试次数。0代表不重试。
    * retryInterval  失败重试时间间隔。单位：秒。
    * failPolicy  作业失败策略： - FAIL：终止当前作业执行计划 - IGNORE：继续执行下一个节点 - SUSPEND：挂起当前作业执行计划 - FAIL_CHILD： 终止后续节点执行计划
    * eventTrigger  eventTrigger
    * cronTrigger  cronTrigger
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'location' => null,
        'preNodeNames' => null,
        'conditions' => null,
        'properties' => null,
        'pollingInterval' => 'int32',
        'execTimeOutRetry' => null,
        'maxExecutionTime' => 'int32',
        'retryTimes' => 'int32',
        'retryInterval' => 'int32',
        'failPolicy' => null,
        'eventTrigger' => null,
        'cronTrigger' => null
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
    * name  节点名称。只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。同一个作业中节点名称不能重复。
    * type  节点类型： - HiveSQL：执行Hive SQL脚本 - SparkSQL：执行Spark SQL脚本 - DWSSQL：执行DWS SQL脚本 - DLISQL：执行DLI SQL脚本 - RDSSQL：执行RDS SQL脚本 - Shell：执行Shell脚本 - Python：执行Python脚本 - DISTransferTask：创建DIS转储任务 - CDMJob：执行CDM作业 - OBSManager：执行OBS相关操作 - Dummy：虚拟节点 - RESTAPI：执行Rest API调用 - DLISpark：执行DLI Spark作业 - SMN：执行SMN通知 - MRSSpark：执行MRS Spark作业 - MapReduce：执行MapReduce作业 - MRSFlink：执行MRS服务的FLlink作业 - MRSFlinkJob：执行MRS服务的FlinkJob作业 - MRSHetuEngine: 执行MRS服务的HetuEngine作业
    * location  location
    * preNodeNames  本节点依赖的前面的节点名称列表。
    * conditions  节点执行条件，如果配置此参数，本节点是否执行由condition的字段expression所保存的EL表达式计算结果决定
    * properties  节点的属性。
    * pollingInterval  轮询节点执行结果时间间隔。单位：秒。
    * execTimeOutRetry  节点是否超时重试
    * maxExecutionTime  节点最大执行时间，如果节点在最大执行时间内还未执行完成，会把节点置为失败状态。单位：分钟。
    * retryTimes  节点失败重试次数。0代表不重试。
    * retryInterval  失败重试时间间隔。单位：秒。
    * failPolicy  作业失败策略： - FAIL：终止当前作业执行计划 - IGNORE：继续执行下一个节点 - SUSPEND：挂起当前作业执行计划 - FAIL_CHILD： 终止后续节点执行计划
    * eventTrigger  eventTrigger
    * cronTrigger  cronTrigger
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'location' => 'location',
            'preNodeNames' => 'pre_node_names',
            'conditions' => 'conditions',
            'properties' => 'properties',
            'pollingInterval' => 'polling_interval',
            'execTimeOutRetry' => 'exec_time_out_retry',
            'maxExecutionTime' => 'max_execution_time',
            'retryTimes' => 'retry_times',
            'retryInterval' => 'retry_interval',
            'failPolicy' => 'fail_policy',
            'eventTrigger' => 'event_trigger',
            'cronTrigger' => 'cron_trigger'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  节点名称。只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。同一个作业中节点名称不能重复。
    * type  节点类型： - HiveSQL：执行Hive SQL脚本 - SparkSQL：执行Spark SQL脚本 - DWSSQL：执行DWS SQL脚本 - DLISQL：执行DLI SQL脚本 - RDSSQL：执行RDS SQL脚本 - Shell：执行Shell脚本 - Python：执行Python脚本 - DISTransferTask：创建DIS转储任务 - CDMJob：执行CDM作业 - OBSManager：执行OBS相关操作 - Dummy：虚拟节点 - RESTAPI：执行Rest API调用 - DLISpark：执行DLI Spark作业 - SMN：执行SMN通知 - MRSSpark：执行MRS Spark作业 - MapReduce：执行MapReduce作业 - MRSFlink：执行MRS服务的FLlink作业 - MRSFlinkJob：执行MRS服务的FlinkJob作业 - MRSHetuEngine: 执行MRS服务的HetuEngine作业
    * location  location
    * preNodeNames  本节点依赖的前面的节点名称列表。
    * conditions  节点执行条件，如果配置此参数，本节点是否执行由condition的字段expression所保存的EL表达式计算结果决定
    * properties  节点的属性。
    * pollingInterval  轮询节点执行结果时间间隔。单位：秒。
    * execTimeOutRetry  节点是否超时重试
    * maxExecutionTime  节点最大执行时间，如果节点在最大执行时间内还未执行完成，会把节点置为失败状态。单位：分钟。
    * retryTimes  节点失败重试次数。0代表不重试。
    * retryInterval  失败重试时间间隔。单位：秒。
    * failPolicy  作业失败策略： - FAIL：终止当前作业执行计划 - IGNORE：继续执行下一个节点 - SUSPEND：挂起当前作业执行计划 - FAIL_CHILD： 终止后续节点执行计划
    * eventTrigger  eventTrigger
    * cronTrigger  cronTrigger
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'location' => 'setLocation',
            'preNodeNames' => 'setPreNodeNames',
            'conditions' => 'setConditions',
            'properties' => 'setProperties',
            'pollingInterval' => 'setPollingInterval',
            'execTimeOutRetry' => 'setExecTimeOutRetry',
            'maxExecutionTime' => 'setMaxExecutionTime',
            'retryTimes' => 'setRetryTimes',
            'retryInterval' => 'setRetryInterval',
            'failPolicy' => 'setFailPolicy',
            'eventTrigger' => 'setEventTrigger',
            'cronTrigger' => 'setCronTrigger'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  节点名称。只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。同一个作业中节点名称不能重复。
    * type  节点类型： - HiveSQL：执行Hive SQL脚本 - SparkSQL：执行Spark SQL脚本 - DWSSQL：执行DWS SQL脚本 - DLISQL：执行DLI SQL脚本 - RDSSQL：执行RDS SQL脚本 - Shell：执行Shell脚本 - Python：执行Python脚本 - DISTransferTask：创建DIS转储任务 - CDMJob：执行CDM作业 - OBSManager：执行OBS相关操作 - Dummy：虚拟节点 - RESTAPI：执行Rest API调用 - DLISpark：执行DLI Spark作业 - SMN：执行SMN通知 - MRSSpark：执行MRS Spark作业 - MapReduce：执行MapReduce作业 - MRSFlink：执行MRS服务的FLlink作业 - MRSFlinkJob：执行MRS服务的FlinkJob作业 - MRSHetuEngine: 执行MRS服务的HetuEngine作业
    * location  location
    * preNodeNames  本节点依赖的前面的节点名称列表。
    * conditions  节点执行条件，如果配置此参数，本节点是否执行由condition的字段expression所保存的EL表达式计算结果决定
    * properties  节点的属性。
    * pollingInterval  轮询节点执行结果时间间隔。单位：秒。
    * execTimeOutRetry  节点是否超时重试
    * maxExecutionTime  节点最大执行时间，如果节点在最大执行时间内还未执行完成，会把节点置为失败状态。单位：分钟。
    * retryTimes  节点失败重试次数。0代表不重试。
    * retryInterval  失败重试时间间隔。单位：秒。
    * failPolicy  作业失败策略： - FAIL：终止当前作业执行计划 - IGNORE：继续执行下一个节点 - SUSPEND：挂起当前作业执行计划 - FAIL_CHILD： 终止后续节点执行计划
    * eventTrigger  eventTrigger
    * cronTrigger  cronTrigger
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'location' => 'getLocation',
            'preNodeNames' => 'getPreNodeNames',
            'conditions' => 'getConditions',
            'properties' => 'getProperties',
            'pollingInterval' => 'getPollingInterval',
            'execTimeOutRetry' => 'getExecTimeOutRetry',
            'maxExecutionTime' => 'getMaxExecutionTime',
            'retryTimes' => 'getRetryTimes',
            'retryInterval' => 'getRetryInterval',
            'failPolicy' => 'getFailPolicy',
            'eventTrigger' => 'getEventTrigger',
            'cronTrigger' => 'getCronTrigger'
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
    const TYPE_HIVE_SQL = 'HiveSQL';
    const TYPE_SPARK_SQL = 'SparkSQL';
    const TYPE_DWSSQL = 'DWSSQL';
    const TYPE_DLISQL = 'DLISQL';
    const TYPE_RDSSQL = 'RDSSQL';
    const TYPE_SHELL = 'Shell';
    const TYPE_PYTHON = 'Python';
    const TYPE_DIS_TRANSFER_TASK = 'DISTransferTask';
    const TYPE_CDM_JOB = 'CDMJob';
    const TYPE_OBS_MANAGER = 'OBSManager';
    const TYPE_DUMMY = 'Dummy';
    const TYPE_RESTAPI = 'RESTAPI';
    const TYPE_DLI_SPARK = 'DLISpark';
    const TYPE_SMN = 'SMN';
    const TYPE_MRS_SPARK = 'MRSSpark';
    const TYPE_MAP_REDUCE = 'MapReduce';
    const TYPE_MRS_FLINK = 'MRSFlink';
    const TYPE_MRS_FLINK_JOB = 'MRSFlinkJob';
    const TYPE_MRS_HETU_ENGINE = 'MRSHetuEngine';
    const FAIL_POLICY_FAIL = 'FAIL';
    const FAIL_POLICY_IGNORE = 'IGNORE';
    const FAIL_POLICY_SUSPEND = 'SUSPEND';
    const FAIL_POLICY_FAIL_CHILD = 'FAIL_CHILD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HIVE_SQL,
            self::TYPE_SPARK_SQL,
            self::TYPE_DWSSQL,
            self::TYPE_DLISQL,
            self::TYPE_RDSSQL,
            self::TYPE_SHELL,
            self::TYPE_PYTHON,
            self::TYPE_DIS_TRANSFER_TASK,
            self::TYPE_CDM_JOB,
            self::TYPE_OBS_MANAGER,
            self::TYPE_DUMMY,
            self::TYPE_RESTAPI,
            self::TYPE_DLI_SPARK,
            self::TYPE_SMN,
            self::TYPE_MRS_SPARK,
            self::TYPE_MAP_REDUCE,
            self::TYPE_MRS_FLINK,
            self::TYPE_MRS_FLINK_JOB,
            self::TYPE_MRS_HETU_ENGINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFailPolicyAllowableValues()
    {
        return [
            self::FAIL_POLICY_FAIL,
            self::FAIL_POLICY_IGNORE,
            self::FAIL_POLICY_SUSPEND,
            self::FAIL_POLICY_FAIL_CHILD,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['preNodeNames'] = isset($data['preNodeNames']) ? $data['preNodeNames'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['pollingInterval'] = isset($data['pollingInterval']) ? $data['pollingInterval'] : null;
        $this->container['execTimeOutRetry'] = isset($data['execTimeOutRetry']) ? $data['execTimeOutRetry'] : null;
        $this->container['maxExecutionTime'] = isset($data['maxExecutionTime']) ? $data['maxExecutionTime'] : null;
        $this->container['retryTimes'] = isset($data['retryTimes']) ? $data['retryTimes'] : null;
        $this->container['retryInterval'] = isset($data['retryInterval']) ? $data['retryInterval'] : null;
        $this->container['failPolicy'] = isset($data['failPolicy']) ? $data['failPolicy'] : null;
        $this->container['eventTrigger'] = isset($data['eventTrigger']) ? $data['eventTrigger'] : null;
        $this->container['cronTrigger'] = isset($data['cronTrigger']) ? $data['cronTrigger'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
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

        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
            if (!is_null($this->container['pollingInterval']) && ($this->container['pollingInterval'] > 60)) {
                $invalidProperties[] = "invalid value for 'pollingInterval', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['pollingInterval']) && ($this->container['pollingInterval'] < 1)) {
                $invalidProperties[] = "invalid value for 'pollingInterval', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxExecutionTime']) && ($this->container['maxExecutionTime'] > 1440)) {
                $invalidProperties[] = "invalid value for 'maxExecutionTime', must be smaller than or equal to 1440.";
            }
            if (!is_null($this->container['maxExecutionTime']) && ($this->container['maxExecutionTime'] < 5)) {
                $invalidProperties[] = "invalid value for 'maxExecutionTime', must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['retryTimes']) && ($this->container['retryTimes'] > 5)) {
                $invalidProperties[] = "invalid value for 'retryTimes', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['retryTimes']) && ($this->container['retryTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'retryTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['retryInterval']) && ($this->container['retryInterval'] > 120)) {
                $invalidProperties[] = "invalid value for 'retryInterval', must be smaller than or equal to 120.";
            }
            if (!is_null($this->container['retryInterval']) && ($this->container['retryInterval'] < 5)) {
                $invalidProperties[] = "invalid value for 'retryInterval', must be bigger than or equal to 5.";
            }
            $allowedValues = $this->getFailPolicyAllowableValues();
                if (!is_null($this->container['failPolicy']) && !in_array($this->container['failPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'failPolicy', must be one of '%s'",
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
    * Gets name
    *  节点名称。只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。同一个作业中节点名称不能重复。
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
    * @param string $name 节点名称。只能包含六种字符：英文字母、数字、中文、中划线、下划线和点号。同一个作业中节点名称不能重复。
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
    *  节点类型： - HiveSQL：执行Hive SQL脚本 - SparkSQL：执行Spark SQL脚本 - DWSSQL：执行DWS SQL脚本 - DLISQL：执行DLI SQL脚本 - RDSSQL：执行RDS SQL脚本 - Shell：执行Shell脚本 - Python：执行Python脚本 - DISTransferTask：创建DIS转储任务 - CDMJob：执行CDM作业 - OBSManager：执行OBS相关操作 - Dummy：虚拟节点 - RESTAPI：执行Rest API调用 - DLISpark：执行DLI Spark作业 - SMN：执行SMN通知 - MRSSpark：执行MRS Spark作业 - MapReduce：执行MapReduce作业 - MRSFlink：执行MRS服务的FLlink作业 - MRSFlinkJob：执行MRS服务的FlinkJob作业 - MRSHetuEngine: 执行MRS服务的HetuEngine作业
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
    * @param string $type 节点类型： - HiveSQL：执行Hive SQL脚本 - SparkSQL：执行Spark SQL脚本 - DWSSQL：执行DWS SQL脚本 - DLISQL：执行DLI SQL脚本 - RDSSQL：执行RDS SQL脚本 - Shell：执行Shell脚本 - Python：执行Python脚本 - DISTransferTask：创建DIS转储任务 - CDMJob：执行CDM作业 - OBSManager：执行OBS相关操作 - Dummy：虚拟节点 - RESTAPI：执行Rest API调用 - DLISpark：执行DLI Spark作业 - SMN：执行SMN通知 - MRSSpark：执行MRS Spark作业 - MapReduce：执行MapReduce作业 - MRSFlink：执行MRS服务的FLlink作业 - MRSFlinkJob：执行MRS服务的FlinkJob作业 - MRSHetuEngine: 执行MRS服务的HetuEngine作业
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets location
    *  location
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Location
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Location $location location
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets preNodeNames
    *  本节点依赖的前面的节点名称列表。
    *
    * @return string[]|null
    */
    public function getPreNodeNames()
    {
        return $this->container['preNodeNames'];
    }

    /**
    * Sets preNodeNames
    *
    * @param string[]|null $preNodeNames 本节点依赖的前面的节点名称列表。
    *
    * @return $this
    */
    public function setPreNodeNames($preNodeNames)
    {
        $this->container['preNodeNames'] = $preNodeNames;
        return $this;
    }

    /**
    * Gets conditions
    *  节点执行条件，如果配置此参数，本节点是否执行由condition的字段expression所保存的EL表达式计算结果决定
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Condition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Condition[]|null $conditions 节点执行条件，如果配置此参数，本节点是否执行由condition的字段expression所保存的EL表达式计算结果决定
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets properties
    *  节点的属性。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Property[]
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Property[] $properties 节点的属性。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets pollingInterval
    *  轮询节点执行结果时间间隔。单位：秒。
    *
    * @return int|null
    */
    public function getPollingInterval()
    {
        return $this->container['pollingInterval'];
    }

    /**
    * Sets pollingInterval
    *
    * @param int|null $pollingInterval 轮询节点执行结果时间间隔。单位：秒。
    *
    * @return $this
    */
    public function setPollingInterval($pollingInterval)
    {
        $this->container['pollingInterval'] = $pollingInterval;
        return $this;
    }

    /**
    * Gets execTimeOutRetry
    *  节点是否超时重试
    *
    * @return string|null
    */
    public function getExecTimeOutRetry()
    {
        return $this->container['execTimeOutRetry'];
    }

    /**
    * Sets execTimeOutRetry
    *
    * @param string|null $execTimeOutRetry 节点是否超时重试
    *
    * @return $this
    */
    public function setExecTimeOutRetry($execTimeOutRetry)
    {
        $this->container['execTimeOutRetry'] = $execTimeOutRetry;
        return $this;
    }

    /**
    * Gets maxExecutionTime
    *  节点最大执行时间，如果节点在最大执行时间内还未执行完成，会把节点置为失败状态。单位：分钟。
    *
    * @return int|null
    */
    public function getMaxExecutionTime()
    {
        return $this->container['maxExecutionTime'];
    }

    /**
    * Sets maxExecutionTime
    *
    * @param int|null $maxExecutionTime 节点最大执行时间，如果节点在最大执行时间内还未执行完成，会把节点置为失败状态。单位：分钟。
    *
    * @return $this
    */
    public function setMaxExecutionTime($maxExecutionTime)
    {
        $this->container['maxExecutionTime'] = $maxExecutionTime;
        return $this;
    }

    /**
    * Gets retryTimes
    *  节点失败重试次数。0代表不重试。
    *
    * @return int|null
    */
    public function getRetryTimes()
    {
        return $this->container['retryTimes'];
    }

    /**
    * Sets retryTimes
    *
    * @param int|null $retryTimes 节点失败重试次数。0代表不重试。
    *
    * @return $this
    */
    public function setRetryTimes($retryTimes)
    {
        $this->container['retryTimes'] = $retryTimes;
        return $this;
    }

    /**
    * Gets retryInterval
    *  失败重试时间间隔。单位：秒。
    *
    * @return int|null
    */
    public function getRetryInterval()
    {
        return $this->container['retryInterval'];
    }

    /**
    * Sets retryInterval
    *
    * @param int|null $retryInterval 失败重试时间间隔。单位：秒。
    *
    * @return $this
    */
    public function setRetryInterval($retryInterval)
    {
        $this->container['retryInterval'] = $retryInterval;
        return $this;
    }

    /**
    * Gets failPolicy
    *  作业失败策略： - FAIL：终止当前作业执行计划 - IGNORE：继续执行下一个节点 - SUSPEND：挂起当前作业执行计划 - FAIL_CHILD： 终止后续节点执行计划
    *
    * @return string|null
    */
    public function getFailPolicy()
    {
        return $this->container['failPolicy'];
    }

    /**
    * Sets failPolicy
    *
    * @param string|null $failPolicy 作业失败策略： - FAIL：终止当前作业执行计划 - IGNORE：继续执行下一个节点 - SUSPEND：挂起当前作业执行计划 - FAIL_CHILD： 终止后续节点执行计划
    *
    * @return $this
    */
    public function setFailPolicy($failPolicy)
    {
        $this->container['failPolicy'] = $failPolicy;
        return $this;
    }

    /**
    * Gets eventTrigger
    *  eventTrigger
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Event|null
    */
    public function getEventTrigger()
    {
        return $this->container['eventTrigger'];
    }

    /**
    * Sets eventTrigger
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Event|null $eventTrigger eventTrigger
    *
    * @return $this
    */
    public function setEventTrigger($eventTrigger)
    {
        $this->container['eventTrigger'] = $eventTrigger;
        return $this;
    }

    /**
    * Gets cronTrigger
    *  cronTrigger
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Cron|null
    */
    public function getCronTrigger()
    {
        return $this->container['cronTrigger'];
    }

    /**
    * Sets cronTrigger
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Cron|null $cronTrigger cronTrigger
    *
    * @return $this
    */
    public function setCronTrigger($cronTrigger)
    {
        $this->container['cronTrigger'] = $cronTrigger;
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

