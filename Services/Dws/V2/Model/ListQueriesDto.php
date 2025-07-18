<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQueriesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQueriesDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 采集时间。 **取值范围**： 不涉及。
    * pid  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * instName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * waiting  **参数解释**： 如果后台当前正等待锁则为true。 **取值范围**： 不涉及。
    * enqueue  **参数解释**： 资源状态。 **取值范围**： 不涉及。
    * warning  **参数解释**： 主要显示如下几类告警信息以及sql自诊断调优相关告警。 **取值范围**： 不涉及。
    * query  **参数解释**： 查询语句。 **取值范围**： 不涉及。
    * lane  **参数解释**： 快慢车道。 **取值范围**： fast：快车道。 slow：慢车道。
    * dbName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * priority  **参数解释**： 任务在资源池中的优先级。 **取值范围**： 1：最高。 2：高。 4：中。 8：低。
    * queryId  **参数解释**： 语句执行使用的内部查询ID。 **取值范围**： 不涉及。
    * queryBand  **参数解释**： 用于标示作业类型，可通过guc参数query_band进行设置，默认为空字符串。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 该值是从query_band的字段中取出来的，位置0。 **取值范围**： 不涉及。
    * jobInst  **参数解释**： 该值是从query_band的字段中取出来的，位置1。 **取值范围**： 不涉及。
    * userName  **参数解释**： 连接到后端的用户名。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 连接到后端的应用名。 **取值范围**： 不涉及。
    * clientAddress  **参数解释**： 连接到后端的客户端的IP地址。 **取值范围**： 不涉及。
    * clientHostname  **参数解释**： 客户端的主机名。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后端通讯的tcp端口号。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * blockTime  **参数解释**： 语句执行前的阻塞时间，单位ms。 **取值范围**： 不涉及。
    * duration  **参数解释**： 语句已经执行的时间，单位ms。 **取值范围**： 不涉及。
    * estimateTotalTime  **参数解释**： 语句执行预估总时间，单位ms。 **取值范围**： 不涉及。
    * estimateLeftTime  **参数解释**： 语句执行预估剩余时间，单位ms。 **取值范围**： 不涉及。
    * resourcePool  **参数解释**： 用户使用的资源池。 **取值范围**： 不涉及。
    * controlGroup  **参数解释**： 语句所使用的cgroup。 **取值范围**： 不涉及。
    * minPeakMemory  **参数解释**： 语句在所有dn上的最小内存峰值，单位mb。 **取值范围**： 不涉及。
    * maxPeakMemory  **参数解释**： 语句在所有dn上的最大内存峰值，单位mb。 **取值范围**： 不涉及。
    * averagePeakMemory  **参数解释**： 语句执行过程中的内存使用平均值，单位mb。 **取值范围**： 不涉及。
    * memorySkewPercent  **参数解释**： 语句在各dn间的内存使用倾斜率。 **取值范围**： 不涉及。
    * estimateMemory  **参数解释**： 语句预估使用内存，单位mb。 **取值范围**： 不涉及。
    * spillInfo  **参数解释**： 语句在所有dn上的下盘信息。 **取值范围**： 不涉及。
    * minSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最小数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * maxSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最大数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * averageSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的平均数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * spillSkewPercent  **参数解释**： 若发生下盘，dn间下盘倾斜率。 **取值范围**： 不涉及。
    * minDnTime  **参数解释**： 语句在所有dn上的最小执行时间，单位ms。 **取值范围**： 不涉及。
    * maxDnTime  **参数解释**： 语句在所有dn上的最大执行时间，单位ms。 **取值范围**： 不涉及。
    * averageDnTime  **参数解释**： 语句在所有dn上的平均执行时间，单位ms。 **取值范围**： 不涉及。
    * dntimeSkewPercent  **参数解释**： 语句在各dn间的执行时间倾斜率。 **取值范围**： 不涉及。
    * minCpuTime  **参数解释**： 语句在所有dn上的最小cpu时间，单位ms。 **取值范围**： 不涉及。
    * maxCpuTime  **参数解释**： 语句在所有dn上的最大cpu时间，单位ms。 **取值范围**： 不涉及。
    * totalCpuTime  **参数解释**： 语句在所有dn上的cpu总时间，单位ms。 **取值范围**： 不涉及。
    * cpuSkewPercent  **参数解释**： 语句在各dn间的cpu时间倾斜率。 **取值范围**： 不涉及。
    * averagePeakIops  **参数解释**： 语句在所有dn上的每秒平均io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * iopsSkewPercent  **参数解释**： 语句在dn间的io倾斜率。 **取值范围**： 不涉及。
    * maxPeakIops  **参数解释**： 语句在所有dn上的每秒最大io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * minPeakIops  **参数解释**： 语句在所有dn上的每秒最小io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * queryPlan  **参数解释**： 查询计划。 **取值范围**： 不涉及。
    * queryStatus  **参数解释**： 当前查询语句的实时运行状态。 **取值范围**： active、idle、idle in transaction、idle in transaction(aborted)、fastpath function call、disabled。
    * wlmStatus  **参数解释**： 当前查询语句在资源池上的运行状态。 **取值范围**： pending：待生效。 running：运行中。 finished：结束。 aborted：终止。 active：正常。 unknown：未知。
    * wlmAttrib  **参数解释**： 语句的属性。 **取值范围**： ordinary：普通。 simple：简单。 complicated：复杂。 internal：内部。
    * systemQuery  **参数解释**： 是否系统查询。 **取值范围**： 不涉及。
    * backendStart  **参数解释**： 该过程开始的时间，即当客户端连接服务器时。 **取值范围**： 不涉及。
    * elapsedTime  **参数解释**： 到目前为止的执行时间。 **取值范围**： 不涉及。
    * currXactStart  **参数解释**： 启动当前事务的时间，如果没有事务是活跃的，则为null。如果当前查询是首个事务，则这列等同于query_start列。 **取值范围**： 不涉及。
    * stateChange  **参数解释**： 上次状态改变的时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * queryElapsedTime  **参数解释**： 语句当前为止的实际执行时间。单位：秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'virtualClusterId' => 'int',
            'ctime' => 'int',
            'pid' => 'string',
            'instName' => 'string',
            'waiting' => 'bool',
            'enqueue' => 'string',
            'warning' => 'string',
            'query' => 'string',
            'lane' => 'string',
            'dbName' => 'string',
            'priority' => 'string',
            'queryId' => 'string',
            'queryBand' => 'string',
            'jobName' => 'string',
            'jobInst' => 'string',
            'userName' => 'string',
            'applicationName' => 'string',
            'clientAddress' => 'string',
            'clientHostname' => 'string',
            'clientPort' => 'string',
            'startTime' => 'int',
            'blockTime' => 'int',
            'duration' => 'int',
            'estimateTotalTime' => 'int',
            'estimateLeftTime' => 'int',
            'resourcePool' => 'string',
            'controlGroup' => 'string',
            'minPeakMemory' => 'int',
            'maxPeakMemory' => 'int',
            'averagePeakMemory' => 'int',
            'memorySkewPercent' => 'int',
            'estimateMemory' => 'int',
            'spillInfo' => 'string',
            'minSpillSize' => 'int',
            'maxSpillSize' => 'int',
            'averageSpillSize' => 'int',
            'spillSkewPercent' => 'int',
            'minDnTime' => 'int',
            'maxDnTime' => 'int',
            'averageDnTime' => 'int',
            'dntimeSkewPercent' => 'int',
            'minCpuTime' => 'int',
            'maxCpuTime' => 'int',
            'totalCpuTime' => 'int',
            'cpuSkewPercent' => 'int',
            'averagePeakIops' => 'int',
            'iopsSkewPercent' => 'int',
            'maxPeakIops' => 'int',
            'minPeakIops' => 'int',
            'queryPlan' => 'string',
            'queryStatus' => 'string',
            'wlmStatus' => 'string',
            'wlmAttrib' => 'string',
            'systemQuery' => 'bool',
            'backendStart' => 'int',
            'elapsedTime' => 'int',
            'currXactStart' => 'int',
            'stateChange' => 'int',
            'queryStart' => 'int',
            'queryElapsedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 采集时间。 **取值范围**： 不涉及。
    * pid  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * instName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * waiting  **参数解释**： 如果后台当前正等待锁则为true。 **取值范围**： 不涉及。
    * enqueue  **参数解释**： 资源状态。 **取值范围**： 不涉及。
    * warning  **参数解释**： 主要显示如下几类告警信息以及sql自诊断调优相关告警。 **取值范围**： 不涉及。
    * query  **参数解释**： 查询语句。 **取值范围**： 不涉及。
    * lane  **参数解释**： 快慢车道。 **取值范围**： fast：快车道。 slow：慢车道。
    * dbName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * priority  **参数解释**： 任务在资源池中的优先级。 **取值范围**： 1：最高。 2：高。 4：中。 8：低。
    * queryId  **参数解释**： 语句执行使用的内部查询ID。 **取值范围**： 不涉及。
    * queryBand  **参数解释**： 用于标示作业类型，可通过guc参数query_band进行设置，默认为空字符串。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 该值是从query_band的字段中取出来的，位置0。 **取值范围**： 不涉及。
    * jobInst  **参数解释**： 该值是从query_band的字段中取出来的，位置1。 **取值范围**： 不涉及。
    * userName  **参数解释**： 连接到后端的用户名。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 连接到后端的应用名。 **取值范围**： 不涉及。
    * clientAddress  **参数解释**： 连接到后端的客户端的IP地址。 **取值范围**： 不涉及。
    * clientHostname  **参数解释**： 客户端的主机名。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后端通讯的tcp端口号。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * blockTime  **参数解释**： 语句执行前的阻塞时间，单位ms。 **取值范围**： 不涉及。
    * duration  **参数解释**： 语句已经执行的时间，单位ms。 **取值范围**： 不涉及。
    * estimateTotalTime  **参数解释**： 语句执行预估总时间，单位ms。 **取值范围**： 不涉及。
    * estimateLeftTime  **参数解释**： 语句执行预估剩余时间，单位ms。 **取值范围**： 不涉及。
    * resourcePool  **参数解释**： 用户使用的资源池。 **取值范围**： 不涉及。
    * controlGroup  **参数解释**： 语句所使用的cgroup。 **取值范围**： 不涉及。
    * minPeakMemory  **参数解释**： 语句在所有dn上的最小内存峰值，单位mb。 **取值范围**： 不涉及。
    * maxPeakMemory  **参数解释**： 语句在所有dn上的最大内存峰值，单位mb。 **取值范围**： 不涉及。
    * averagePeakMemory  **参数解释**： 语句执行过程中的内存使用平均值，单位mb。 **取值范围**： 不涉及。
    * memorySkewPercent  **参数解释**： 语句在各dn间的内存使用倾斜率。 **取值范围**： 不涉及。
    * estimateMemory  **参数解释**： 语句预估使用内存，单位mb。 **取值范围**： 不涉及。
    * spillInfo  **参数解释**： 语句在所有dn上的下盘信息。 **取值范围**： 不涉及。
    * minSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最小数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * maxSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最大数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * averageSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的平均数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * spillSkewPercent  **参数解释**： 若发生下盘，dn间下盘倾斜率。 **取值范围**： 不涉及。
    * minDnTime  **参数解释**： 语句在所有dn上的最小执行时间，单位ms。 **取值范围**： 不涉及。
    * maxDnTime  **参数解释**： 语句在所有dn上的最大执行时间，单位ms。 **取值范围**： 不涉及。
    * averageDnTime  **参数解释**： 语句在所有dn上的平均执行时间，单位ms。 **取值范围**： 不涉及。
    * dntimeSkewPercent  **参数解释**： 语句在各dn间的执行时间倾斜率。 **取值范围**： 不涉及。
    * minCpuTime  **参数解释**： 语句在所有dn上的最小cpu时间，单位ms。 **取值范围**： 不涉及。
    * maxCpuTime  **参数解释**： 语句在所有dn上的最大cpu时间，单位ms。 **取值范围**： 不涉及。
    * totalCpuTime  **参数解释**： 语句在所有dn上的cpu总时间，单位ms。 **取值范围**： 不涉及。
    * cpuSkewPercent  **参数解释**： 语句在各dn间的cpu时间倾斜率。 **取值范围**： 不涉及。
    * averagePeakIops  **参数解释**： 语句在所有dn上的每秒平均io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * iopsSkewPercent  **参数解释**： 语句在dn间的io倾斜率。 **取值范围**： 不涉及。
    * maxPeakIops  **参数解释**： 语句在所有dn上的每秒最大io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * minPeakIops  **参数解释**： 语句在所有dn上的每秒最小io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * queryPlan  **参数解释**： 查询计划。 **取值范围**： 不涉及。
    * queryStatus  **参数解释**： 当前查询语句的实时运行状态。 **取值范围**： active、idle、idle in transaction、idle in transaction(aborted)、fastpath function call、disabled。
    * wlmStatus  **参数解释**： 当前查询语句在资源池上的运行状态。 **取值范围**： pending：待生效。 running：运行中。 finished：结束。 aborted：终止。 active：正常。 unknown：未知。
    * wlmAttrib  **参数解释**： 语句的属性。 **取值范围**： ordinary：普通。 simple：简单。 complicated：复杂。 internal：内部。
    * systemQuery  **参数解释**： 是否系统查询。 **取值范围**： 不涉及。
    * backendStart  **参数解释**： 该过程开始的时间，即当客户端连接服务器时。 **取值范围**： 不涉及。
    * elapsedTime  **参数解释**： 到目前为止的执行时间。 **取值范围**： 不涉及。
    * currXactStart  **参数解释**： 启动当前事务的时间，如果没有事务是活跃的，则为null。如果当前查询是首个事务，则这列等同于query_start列。 **取值范围**： 不涉及。
    * stateChange  **参数解释**： 上次状态改变的时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * queryElapsedTime  **参数解释**： 语句当前为止的实际执行时间。单位：秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'virtualClusterId' => 'int32',
        'ctime' => 'int64',
        'pid' => null,
        'instName' => null,
        'waiting' => null,
        'enqueue' => null,
        'warning' => null,
        'query' => null,
        'lane' => null,
        'dbName' => null,
        'priority' => null,
        'queryId' => null,
        'queryBand' => null,
        'jobName' => null,
        'jobInst' => null,
        'userName' => null,
        'applicationName' => null,
        'clientAddress' => null,
        'clientHostname' => null,
        'clientPort' => null,
        'startTime' => 'int64',
        'blockTime' => 'int64',
        'duration' => 'int64',
        'estimateTotalTime' => 'int64',
        'estimateLeftTime' => 'int64',
        'resourcePool' => null,
        'controlGroup' => null,
        'minPeakMemory' => 'int32',
        'maxPeakMemory' => 'int32',
        'averagePeakMemory' => 'int32',
        'memorySkewPercent' => 'int32',
        'estimateMemory' => 'int32',
        'spillInfo' => null,
        'minSpillSize' => 'int32',
        'maxSpillSize' => 'int32',
        'averageSpillSize' => 'int32',
        'spillSkewPercent' => 'int32',
        'minDnTime' => 'int64',
        'maxDnTime' => 'int64',
        'averageDnTime' => 'int64',
        'dntimeSkewPercent' => 'int32',
        'minCpuTime' => 'int64',
        'maxCpuTime' => 'int64',
        'totalCpuTime' => 'int64',
        'cpuSkewPercent' => 'int32',
        'averagePeakIops' => 'int32',
        'iopsSkewPercent' => 'int32',
        'maxPeakIops' => 'int32',
        'minPeakIops' => 'int32',
        'queryPlan' => null,
        'queryStatus' => null,
        'wlmStatus' => null,
        'wlmAttrib' => null,
        'systemQuery' => null,
        'backendStart' => 'int64',
        'elapsedTime' => 'int64',
        'currXactStart' => 'int64',
        'stateChange' => 'int64',
        'queryStart' => 'int64',
        'queryElapsedTime' => 'int64'
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
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 采集时间。 **取值范围**： 不涉及。
    * pid  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * instName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * waiting  **参数解释**： 如果后台当前正等待锁则为true。 **取值范围**： 不涉及。
    * enqueue  **参数解释**： 资源状态。 **取值范围**： 不涉及。
    * warning  **参数解释**： 主要显示如下几类告警信息以及sql自诊断调优相关告警。 **取值范围**： 不涉及。
    * query  **参数解释**： 查询语句。 **取值范围**： 不涉及。
    * lane  **参数解释**： 快慢车道。 **取值范围**： fast：快车道。 slow：慢车道。
    * dbName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * priority  **参数解释**： 任务在资源池中的优先级。 **取值范围**： 1：最高。 2：高。 4：中。 8：低。
    * queryId  **参数解释**： 语句执行使用的内部查询ID。 **取值范围**： 不涉及。
    * queryBand  **参数解释**： 用于标示作业类型，可通过guc参数query_band进行设置，默认为空字符串。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 该值是从query_band的字段中取出来的，位置0。 **取值范围**： 不涉及。
    * jobInst  **参数解释**： 该值是从query_band的字段中取出来的，位置1。 **取值范围**： 不涉及。
    * userName  **参数解释**： 连接到后端的用户名。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 连接到后端的应用名。 **取值范围**： 不涉及。
    * clientAddress  **参数解释**： 连接到后端的客户端的IP地址。 **取值范围**： 不涉及。
    * clientHostname  **参数解释**： 客户端的主机名。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后端通讯的tcp端口号。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * blockTime  **参数解释**： 语句执行前的阻塞时间，单位ms。 **取值范围**： 不涉及。
    * duration  **参数解释**： 语句已经执行的时间，单位ms。 **取值范围**： 不涉及。
    * estimateTotalTime  **参数解释**： 语句执行预估总时间，单位ms。 **取值范围**： 不涉及。
    * estimateLeftTime  **参数解释**： 语句执行预估剩余时间，单位ms。 **取值范围**： 不涉及。
    * resourcePool  **参数解释**： 用户使用的资源池。 **取值范围**： 不涉及。
    * controlGroup  **参数解释**： 语句所使用的cgroup。 **取值范围**： 不涉及。
    * minPeakMemory  **参数解释**： 语句在所有dn上的最小内存峰值，单位mb。 **取值范围**： 不涉及。
    * maxPeakMemory  **参数解释**： 语句在所有dn上的最大内存峰值，单位mb。 **取值范围**： 不涉及。
    * averagePeakMemory  **参数解释**： 语句执行过程中的内存使用平均值，单位mb。 **取值范围**： 不涉及。
    * memorySkewPercent  **参数解释**： 语句在各dn间的内存使用倾斜率。 **取值范围**： 不涉及。
    * estimateMemory  **参数解释**： 语句预估使用内存，单位mb。 **取值范围**： 不涉及。
    * spillInfo  **参数解释**： 语句在所有dn上的下盘信息。 **取值范围**： 不涉及。
    * minSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最小数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * maxSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最大数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * averageSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的平均数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * spillSkewPercent  **参数解释**： 若发生下盘，dn间下盘倾斜率。 **取值范围**： 不涉及。
    * minDnTime  **参数解释**： 语句在所有dn上的最小执行时间，单位ms。 **取值范围**： 不涉及。
    * maxDnTime  **参数解释**： 语句在所有dn上的最大执行时间，单位ms。 **取值范围**： 不涉及。
    * averageDnTime  **参数解释**： 语句在所有dn上的平均执行时间，单位ms。 **取值范围**： 不涉及。
    * dntimeSkewPercent  **参数解释**： 语句在各dn间的执行时间倾斜率。 **取值范围**： 不涉及。
    * minCpuTime  **参数解释**： 语句在所有dn上的最小cpu时间，单位ms。 **取值范围**： 不涉及。
    * maxCpuTime  **参数解释**： 语句在所有dn上的最大cpu时间，单位ms。 **取值范围**： 不涉及。
    * totalCpuTime  **参数解释**： 语句在所有dn上的cpu总时间，单位ms。 **取值范围**： 不涉及。
    * cpuSkewPercent  **参数解释**： 语句在各dn间的cpu时间倾斜率。 **取值范围**： 不涉及。
    * averagePeakIops  **参数解释**： 语句在所有dn上的每秒平均io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * iopsSkewPercent  **参数解释**： 语句在dn间的io倾斜率。 **取值范围**： 不涉及。
    * maxPeakIops  **参数解释**： 语句在所有dn上的每秒最大io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * minPeakIops  **参数解释**： 语句在所有dn上的每秒最小io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * queryPlan  **参数解释**： 查询计划。 **取值范围**： 不涉及。
    * queryStatus  **参数解释**： 当前查询语句的实时运行状态。 **取值范围**： active、idle、idle in transaction、idle in transaction(aborted)、fastpath function call、disabled。
    * wlmStatus  **参数解释**： 当前查询语句在资源池上的运行状态。 **取值范围**： pending：待生效。 running：运行中。 finished：结束。 aborted：终止。 active：正常。 unknown：未知。
    * wlmAttrib  **参数解释**： 语句的属性。 **取值范围**： ordinary：普通。 simple：简单。 complicated：复杂。 internal：内部。
    * systemQuery  **参数解释**： 是否系统查询。 **取值范围**： 不涉及。
    * backendStart  **参数解释**： 该过程开始的时间，即当客户端连接服务器时。 **取值范围**： 不涉及。
    * elapsedTime  **参数解释**： 到目前为止的执行时间。 **取值范围**： 不涉及。
    * currXactStart  **参数解释**： 启动当前事务的时间，如果没有事务是活跃的，则为null。如果当前查询是首个事务，则这列等同于query_start列。 **取值范围**： 不涉及。
    * stateChange  **参数解释**： 上次状态改变的时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * queryElapsedTime  **参数解释**： 语句当前为止的实际执行时间。单位：秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'virtualClusterId' => 'virtual_cluster_id',
            'ctime' => 'ctime',
            'pid' => 'pid',
            'instName' => 'inst_name',
            'waiting' => 'waiting',
            'enqueue' => 'enqueue',
            'warning' => 'warning',
            'query' => 'query',
            'lane' => 'lane',
            'dbName' => 'db_name',
            'priority' => 'priority',
            'queryId' => 'query_id',
            'queryBand' => 'query_band',
            'jobName' => 'job_name',
            'jobInst' => 'job_inst',
            'userName' => 'user_name',
            'applicationName' => 'application_name',
            'clientAddress' => 'client_address',
            'clientHostname' => 'client_hostname',
            'clientPort' => 'client_port',
            'startTime' => 'start_time',
            'blockTime' => 'block_time',
            'duration' => 'duration',
            'estimateTotalTime' => 'estimate_total_time',
            'estimateLeftTime' => 'estimate_left_time',
            'resourcePool' => 'resource_pool',
            'controlGroup' => 'control_group',
            'minPeakMemory' => 'min_peak_memory',
            'maxPeakMemory' => 'max_peak_memory',
            'averagePeakMemory' => 'average_peak_memory',
            'memorySkewPercent' => 'memory_skew_percent',
            'estimateMemory' => 'estimate_memory',
            'spillInfo' => 'spill_info',
            'minSpillSize' => 'min_spill_size',
            'maxSpillSize' => 'max_spill_size',
            'averageSpillSize' => 'average_spill_size',
            'spillSkewPercent' => 'spill_skew_percent',
            'minDnTime' => 'min_dn_time',
            'maxDnTime' => 'max_dn_time',
            'averageDnTime' => 'average_dn_time',
            'dntimeSkewPercent' => 'dntime_skew_percent',
            'minCpuTime' => 'min_cpu_time',
            'maxCpuTime' => 'max_cpu_time',
            'totalCpuTime' => 'total_cpu_time',
            'cpuSkewPercent' => 'cpu_skew_percent',
            'averagePeakIops' => 'average_peak_iops',
            'iopsSkewPercent' => 'iops_skew_percent',
            'maxPeakIops' => 'max_peak_iops',
            'minPeakIops' => 'min_peak_iops',
            'queryPlan' => 'query_plan',
            'queryStatus' => 'query_status',
            'wlmStatus' => 'wlm_status',
            'wlmAttrib' => 'wlm_attrib',
            'systemQuery' => 'system_query',
            'backendStart' => 'backend_start',
            'elapsedTime' => 'elapsed_time',
            'currXactStart' => 'curr_xact_start',
            'stateChange' => 'state_change',
            'queryStart' => 'query_start',
            'queryElapsedTime' => 'query_elapsed_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 采集时间。 **取值范围**： 不涉及。
    * pid  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * instName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * waiting  **参数解释**： 如果后台当前正等待锁则为true。 **取值范围**： 不涉及。
    * enqueue  **参数解释**： 资源状态。 **取值范围**： 不涉及。
    * warning  **参数解释**： 主要显示如下几类告警信息以及sql自诊断调优相关告警。 **取值范围**： 不涉及。
    * query  **参数解释**： 查询语句。 **取值范围**： 不涉及。
    * lane  **参数解释**： 快慢车道。 **取值范围**： fast：快车道。 slow：慢车道。
    * dbName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * priority  **参数解释**： 任务在资源池中的优先级。 **取值范围**： 1：最高。 2：高。 4：中。 8：低。
    * queryId  **参数解释**： 语句执行使用的内部查询ID。 **取值范围**： 不涉及。
    * queryBand  **参数解释**： 用于标示作业类型，可通过guc参数query_band进行设置，默认为空字符串。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 该值是从query_band的字段中取出来的，位置0。 **取值范围**： 不涉及。
    * jobInst  **参数解释**： 该值是从query_band的字段中取出来的，位置1。 **取值范围**： 不涉及。
    * userName  **参数解释**： 连接到后端的用户名。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 连接到后端的应用名。 **取值范围**： 不涉及。
    * clientAddress  **参数解释**： 连接到后端的客户端的IP地址。 **取值范围**： 不涉及。
    * clientHostname  **参数解释**： 客户端的主机名。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后端通讯的tcp端口号。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * blockTime  **参数解释**： 语句执行前的阻塞时间，单位ms。 **取值范围**： 不涉及。
    * duration  **参数解释**： 语句已经执行的时间，单位ms。 **取值范围**： 不涉及。
    * estimateTotalTime  **参数解释**： 语句执行预估总时间，单位ms。 **取值范围**： 不涉及。
    * estimateLeftTime  **参数解释**： 语句执行预估剩余时间，单位ms。 **取值范围**： 不涉及。
    * resourcePool  **参数解释**： 用户使用的资源池。 **取值范围**： 不涉及。
    * controlGroup  **参数解释**： 语句所使用的cgroup。 **取值范围**： 不涉及。
    * minPeakMemory  **参数解释**： 语句在所有dn上的最小内存峰值，单位mb。 **取值范围**： 不涉及。
    * maxPeakMemory  **参数解释**： 语句在所有dn上的最大内存峰值，单位mb。 **取值范围**： 不涉及。
    * averagePeakMemory  **参数解释**： 语句执行过程中的内存使用平均值，单位mb。 **取值范围**： 不涉及。
    * memorySkewPercent  **参数解释**： 语句在各dn间的内存使用倾斜率。 **取值范围**： 不涉及。
    * estimateMemory  **参数解释**： 语句预估使用内存，单位mb。 **取值范围**： 不涉及。
    * spillInfo  **参数解释**： 语句在所有dn上的下盘信息。 **取值范围**： 不涉及。
    * minSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最小数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * maxSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最大数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * averageSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的平均数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * spillSkewPercent  **参数解释**： 若发生下盘，dn间下盘倾斜率。 **取值范围**： 不涉及。
    * minDnTime  **参数解释**： 语句在所有dn上的最小执行时间，单位ms。 **取值范围**： 不涉及。
    * maxDnTime  **参数解释**： 语句在所有dn上的最大执行时间，单位ms。 **取值范围**： 不涉及。
    * averageDnTime  **参数解释**： 语句在所有dn上的平均执行时间，单位ms。 **取值范围**： 不涉及。
    * dntimeSkewPercent  **参数解释**： 语句在各dn间的执行时间倾斜率。 **取值范围**： 不涉及。
    * minCpuTime  **参数解释**： 语句在所有dn上的最小cpu时间，单位ms。 **取值范围**： 不涉及。
    * maxCpuTime  **参数解释**： 语句在所有dn上的最大cpu时间，单位ms。 **取值范围**： 不涉及。
    * totalCpuTime  **参数解释**： 语句在所有dn上的cpu总时间，单位ms。 **取值范围**： 不涉及。
    * cpuSkewPercent  **参数解释**： 语句在各dn间的cpu时间倾斜率。 **取值范围**： 不涉及。
    * averagePeakIops  **参数解释**： 语句在所有dn上的每秒平均io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * iopsSkewPercent  **参数解释**： 语句在dn间的io倾斜率。 **取值范围**： 不涉及。
    * maxPeakIops  **参数解释**： 语句在所有dn上的每秒最大io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * minPeakIops  **参数解释**： 语句在所有dn上的每秒最小io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * queryPlan  **参数解释**： 查询计划。 **取值范围**： 不涉及。
    * queryStatus  **参数解释**： 当前查询语句的实时运行状态。 **取值范围**： active、idle、idle in transaction、idle in transaction(aborted)、fastpath function call、disabled。
    * wlmStatus  **参数解释**： 当前查询语句在资源池上的运行状态。 **取值范围**： pending：待生效。 running：运行中。 finished：结束。 aborted：终止。 active：正常。 unknown：未知。
    * wlmAttrib  **参数解释**： 语句的属性。 **取值范围**： ordinary：普通。 simple：简单。 complicated：复杂。 internal：内部。
    * systemQuery  **参数解释**： 是否系统查询。 **取值范围**： 不涉及。
    * backendStart  **参数解释**： 该过程开始的时间，即当客户端连接服务器时。 **取值范围**： 不涉及。
    * elapsedTime  **参数解释**： 到目前为止的执行时间。 **取值范围**： 不涉及。
    * currXactStart  **参数解释**： 启动当前事务的时间，如果没有事务是活跃的，则为null。如果当前查询是首个事务，则这列等同于query_start列。 **取值范围**： 不涉及。
    * stateChange  **参数解释**： 上次状态改变的时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * queryElapsedTime  **参数解释**： 语句当前为止的实际执行时间。单位：秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'virtualClusterId' => 'setVirtualClusterId',
            'ctime' => 'setCtime',
            'pid' => 'setPid',
            'instName' => 'setInstName',
            'waiting' => 'setWaiting',
            'enqueue' => 'setEnqueue',
            'warning' => 'setWarning',
            'query' => 'setQuery',
            'lane' => 'setLane',
            'dbName' => 'setDbName',
            'priority' => 'setPriority',
            'queryId' => 'setQueryId',
            'queryBand' => 'setQueryBand',
            'jobName' => 'setJobName',
            'jobInst' => 'setJobInst',
            'userName' => 'setUserName',
            'applicationName' => 'setApplicationName',
            'clientAddress' => 'setClientAddress',
            'clientHostname' => 'setClientHostname',
            'clientPort' => 'setClientPort',
            'startTime' => 'setStartTime',
            'blockTime' => 'setBlockTime',
            'duration' => 'setDuration',
            'estimateTotalTime' => 'setEstimateTotalTime',
            'estimateLeftTime' => 'setEstimateLeftTime',
            'resourcePool' => 'setResourcePool',
            'controlGroup' => 'setControlGroup',
            'minPeakMemory' => 'setMinPeakMemory',
            'maxPeakMemory' => 'setMaxPeakMemory',
            'averagePeakMemory' => 'setAveragePeakMemory',
            'memorySkewPercent' => 'setMemorySkewPercent',
            'estimateMemory' => 'setEstimateMemory',
            'spillInfo' => 'setSpillInfo',
            'minSpillSize' => 'setMinSpillSize',
            'maxSpillSize' => 'setMaxSpillSize',
            'averageSpillSize' => 'setAverageSpillSize',
            'spillSkewPercent' => 'setSpillSkewPercent',
            'minDnTime' => 'setMinDnTime',
            'maxDnTime' => 'setMaxDnTime',
            'averageDnTime' => 'setAverageDnTime',
            'dntimeSkewPercent' => 'setDntimeSkewPercent',
            'minCpuTime' => 'setMinCpuTime',
            'maxCpuTime' => 'setMaxCpuTime',
            'totalCpuTime' => 'setTotalCpuTime',
            'cpuSkewPercent' => 'setCpuSkewPercent',
            'averagePeakIops' => 'setAveragePeakIops',
            'iopsSkewPercent' => 'setIopsSkewPercent',
            'maxPeakIops' => 'setMaxPeakIops',
            'minPeakIops' => 'setMinPeakIops',
            'queryPlan' => 'setQueryPlan',
            'queryStatus' => 'setQueryStatus',
            'wlmStatus' => 'setWlmStatus',
            'wlmAttrib' => 'setWlmAttrib',
            'systemQuery' => 'setSystemQuery',
            'backendStart' => 'setBackendStart',
            'elapsedTime' => 'setElapsedTime',
            'currXactStart' => 'setCurrXactStart',
            'stateChange' => 'setStateChange',
            'queryStart' => 'setQueryStart',
            'queryElapsedTime' => 'setQueryElapsedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 采集时间。 **取值范围**： 不涉及。
    * pid  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    * instName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * waiting  **参数解释**： 如果后台当前正等待锁则为true。 **取值范围**： 不涉及。
    * enqueue  **参数解释**： 资源状态。 **取值范围**： 不涉及。
    * warning  **参数解释**： 主要显示如下几类告警信息以及sql自诊断调优相关告警。 **取值范围**： 不涉及。
    * query  **参数解释**： 查询语句。 **取值范围**： 不涉及。
    * lane  **参数解释**： 快慢车道。 **取值范围**： fast：快车道。 slow：慢车道。
    * dbName  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * priority  **参数解释**： 任务在资源池中的优先级。 **取值范围**： 1：最高。 2：高。 4：中。 8：低。
    * queryId  **参数解释**： 语句执行使用的内部查询ID。 **取值范围**： 不涉及。
    * queryBand  **参数解释**： 用于标示作业类型，可通过guc参数query_band进行设置，默认为空字符串。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 该值是从query_band的字段中取出来的，位置0。 **取值范围**： 不涉及。
    * jobInst  **参数解释**： 该值是从query_band的字段中取出来的，位置1。 **取值范围**： 不涉及。
    * userName  **参数解释**： 连接到后端的用户名。 **取值范围**： 不涉及。
    * applicationName  **参数解释**： 连接到后端的应用名。 **取值范围**： 不涉及。
    * clientAddress  **参数解释**： 连接到后端的客户端的IP地址。 **取值范围**： 不涉及。
    * clientHostname  **参数解释**： 客户端的主机名。 **取值范围**： 不涉及。
    * clientPort  **参数解释**： 客户端用于与后端通讯的tcp端口号。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * blockTime  **参数解释**： 语句执行前的阻塞时间，单位ms。 **取值范围**： 不涉及。
    * duration  **参数解释**： 语句已经执行的时间，单位ms。 **取值范围**： 不涉及。
    * estimateTotalTime  **参数解释**： 语句执行预估总时间，单位ms。 **取值范围**： 不涉及。
    * estimateLeftTime  **参数解释**： 语句执行预估剩余时间，单位ms。 **取值范围**： 不涉及。
    * resourcePool  **参数解释**： 用户使用的资源池。 **取值范围**： 不涉及。
    * controlGroup  **参数解释**： 语句所使用的cgroup。 **取值范围**： 不涉及。
    * minPeakMemory  **参数解释**： 语句在所有dn上的最小内存峰值，单位mb。 **取值范围**： 不涉及。
    * maxPeakMemory  **参数解释**： 语句在所有dn上的最大内存峰值，单位mb。 **取值范围**： 不涉及。
    * averagePeakMemory  **参数解释**： 语句执行过程中的内存使用平均值，单位mb。 **取值范围**： 不涉及。
    * memorySkewPercent  **参数解释**： 语句在各dn间的内存使用倾斜率。 **取值范围**： 不涉及。
    * estimateMemory  **参数解释**： 语句预估使用内存，单位mb。 **取值范围**： 不涉及。
    * spillInfo  **参数解释**： 语句在所有dn上的下盘信息。 **取值范围**： 不涉及。
    * minSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最小数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * maxSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的最大数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * averageSpillSize  **参数解释**： 若发生下盘，所有dn上下盘的平均数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    * spillSkewPercent  **参数解释**： 若发生下盘，dn间下盘倾斜率。 **取值范围**： 不涉及。
    * minDnTime  **参数解释**： 语句在所有dn上的最小执行时间，单位ms。 **取值范围**： 不涉及。
    * maxDnTime  **参数解释**： 语句在所有dn上的最大执行时间，单位ms。 **取值范围**： 不涉及。
    * averageDnTime  **参数解释**： 语句在所有dn上的平均执行时间，单位ms。 **取值范围**： 不涉及。
    * dntimeSkewPercent  **参数解释**： 语句在各dn间的执行时间倾斜率。 **取值范围**： 不涉及。
    * minCpuTime  **参数解释**： 语句在所有dn上的最小cpu时间，单位ms。 **取值范围**： 不涉及。
    * maxCpuTime  **参数解释**： 语句在所有dn上的最大cpu时间，单位ms。 **取值范围**： 不涉及。
    * totalCpuTime  **参数解释**： 语句在所有dn上的cpu总时间，单位ms。 **取值范围**： 不涉及。
    * cpuSkewPercent  **参数解释**： 语句在各dn间的cpu时间倾斜率。 **取值范围**： 不涉及。
    * averagePeakIops  **参数解释**： 语句在所有dn上的每秒平均io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * iopsSkewPercent  **参数解释**： 语句在dn间的io倾斜率。 **取值范围**： 不涉及。
    * maxPeakIops  **参数解释**： 语句在所有dn上的每秒最大io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * minPeakIops  **参数解释**： 语句在所有dn上的每秒最小io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    * queryPlan  **参数解释**： 查询计划。 **取值范围**： 不涉及。
    * queryStatus  **参数解释**： 当前查询语句的实时运行状态。 **取值范围**： active、idle、idle in transaction、idle in transaction(aborted)、fastpath function call、disabled。
    * wlmStatus  **参数解释**： 当前查询语句在资源池上的运行状态。 **取值范围**： pending：待生效。 running：运行中。 finished：结束。 aborted：终止。 active：正常。 unknown：未知。
    * wlmAttrib  **参数解释**： 语句的属性。 **取值范围**： ordinary：普通。 simple：简单。 complicated：复杂。 internal：内部。
    * systemQuery  **参数解释**： 是否系统查询。 **取值范围**： 不涉及。
    * backendStart  **参数解释**： 该过程开始的时间，即当客户端连接服务器时。 **取值范围**： 不涉及。
    * elapsedTime  **参数解释**： 到目前为止的执行时间。 **取值范围**： 不涉及。
    * currXactStart  **参数解释**： 启动当前事务的时间，如果没有事务是活跃的，则为null。如果当前查询是首个事务，则这列等同于query_start列。 **取值范围**： 不涉及。
    * stateChange  **参数解释**： 上次状态改变的时间。 **取值范围**： 不涉及。
    * queryStart  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    * queryElapsedTime  **参数解释**： 语句当前为止的实际执行时间。单位：秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'virtualClusterId' => 'getVirtualClusterId',
            'ctime' => 'getCtime',
            'pid' => 'getPid',
            'instName' => 'getInstName',
            'waiting' => 'getWaiting',
            'enqueue' => 'getEnqueue',
            'warning' => 'getWarning',
            'query' => 'getQuery',
            'lane' => 'getLane',
            'dbName' => 'getDbName',
            'priority' => 'getPriority',
            'queryId' => 'getQueryId',
            'queryBand' => 'getQueryBand',
            'jobName' => 'getJobName',
            'jobInst' => 'getJobInst',
            'userName' => 'getUserName',
            'applicationName' => 'getApplicationName',
            'clientAddress' => 'getClientAddress',
            'clientHostname' => 'getClientHostname',
            'clientPort' => 'getClientPort',
            'startTime' => 'getStartTime',
            'blockTime' => 'getBlockTime',
            'duration' => 'getDuration',
            'estimateTotalTime' => 'getEstimateTotalTime',
            'estimateLeftTime' => 'getEstimateLeftTime',
            'resourcePool' => 'getResourcePool',
            'controlGroup' => 'getControlGroup',
            'minPeakMemory' => 'getMinPeakMemory',
            'maxPeakMemory' => 'getMaxPeakMemory',
            'averagePeakMemory' => 'getAveragePeakMemory',
            'memorySkewPercent' => 'getMemorySkewPercent',
            'estimateMemory' => 'getEstimateMemory',
            'spillInfo' => 'getSpillInfo',
            'minSpillSize' => 'getMinSpillSize',
            'maxSpillSize' => 'getMaxSpillSize',
            'averageSpillSize' => 'getAverageSpillSize',
            'spillSkewPercent' => 'getSpillSkewPercent',
            'minDnTime' => 'getMinDnTime',
            'maxDnTime' => 'getMaxDnTime',
            'averageDnTime' => 'getAverageDnTime',
            'dntimeSkewPercent' => 'getDntimeSkewPercent',
            'minCpuTime' => 'getMinCpuTime',
            'maxCpuTime' => 'getMaxCpuTime',
            'totalCpuTime' => 'getTotalCpuTime',
            'cpuSkewPercent' => 'getCpuSkewPercent',
            'averagePeakIops' => 'getAveragePeakIops',
            'iopsSkewPercent' => 'getIopsSkewPercent',
            'maxPeakIops' => 'getMaxPeakIops',
            'minPeakIops' => 'getMinPeakIops',
            'queryPlan' => 'getQueryPlan',
            'queryStatus' => 'getQueryStatus',
            'wlmStatus' => 'getWlmStatus',
            'wlmAttrib' => 'getWlmAttrib',
            'systemQuery' => 'getSystemQuery',
            'backendStart' => 'getBackendStart',
            'elapsedTime' => 'getElapsedTime',
            'currXactStart' => 'getCurrXactStart',
            'stateChange' => 'getStateChange',
            'queryStart' => 'getQueryStart',
            'queryElapsedTime' => 'getQueryElapsedTime'
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
        $this->container['virtualClusterId'] = isset($data['virtualClusterId']) ? $data['virtualClusterId'] : null;
        $this->container['ctime'] = isset($data['ctime']) ? $data['ctime'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['instName'] = isset($data['instName']) ? $data['instName'] : null;
        $this->container['waiting'] = isset($data['waiting']) ? $data['waiting'] : null;
        $this->container['enqueue'] = isset($data['enqueue']) ? $data['enqueue'] : null;
        $this->container['warning'] = isset($data['warning']) ? $data['warning'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['lane'] = isset($data['lane']) ? $data['lane'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['queryBand'] = isset($data['queryBand']) ? $data['queryBand'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobInst'] = isset($data['jobInst']) ? $data['jobInst'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['clientAddress'] = isset($data['clientAddress']) ? $data['clientAddress'] : null;
        $this->container['clientHostname'] = isset($data['clientHostname']) ? $data['clientHostname'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['blockTime'] = isset($data['blockTime']) ? $data['blockTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['estimateTotalTime'] = isset($data['estimateTotalTime']) ? $data['estimateTotalTime'] : null;
        $this->container['estimateLeftTime'] = isset($data['estimateLeftTime']) ? $data['estimateLeftTime'] : null;
        $this->container['resourcePool'] = isset($data['resourcePool']) ? $data['resourcePool'] : null;
        $this->container['controlGroup'] = isset($data['controlGroup']) ? $data['controlGroup'] : null;
        $this->container['minPeakMemory'] = isset($data['minPeakMemory']) ? $data['minPeakMemory'] : null;
        $this->container['maxPeakMemory'] = isset($data['maxPeakMemory']) ? $data['maxPeakMemory'] : null;
        $this->container['averagePeakMemory'] = isset($data['averagePeakMemory']) ? $data['averagePeakMemory'] : null;
        $this->container['memorySkewPercent'] = isset($data['memorySkewPercent']) ? $data['memorySkewPercent'] : null;
        $this->container['estimateMemory'] = isset($data['estimateMemory']) ? $data['estimateMemory'] : null;
        $this->container['spillInfo'] = isset($data['spillInfo']) ? $data['spillInfo'] : null;
        $this->container['minSpillSize'] = isset($data['minSpillSize']) ? $data['minSpillSize'] : null;
        $this->container['maxSpillSize'] = isset($data['maxSpillSize']) ? $data['maxSpillSize'] : null;
        $this->container['averageSpillSize'] = isset($data['averageSpillSize']) ? $data['averageSpillSize'] : null;
        $this->container['spillSkewPercent'] = isset($data['spillSkewPercent']) ? $data['spillSkewPercent'] : null;
        $this->container['minDnTime'] = isset($data['minDnTime']) ? $data['minDnTime'] : null;
        $this->container['maxDnTime'] = isset($data['maxDnTime']) ? $data['maxDnTime'] : null;
        $this->container['averageDnTime'] = isset($data['averageDnTime']) ? $data['averageDnTime'] : null;
        $this->container['dntimeSkewPercent'] = isset($data['dntimeSkewPercent']) ? $data['dntimeSkewPercent'] : null;
        $this->container['minCpuTime'] = isset($data['minCpuTime']) ? $data['minCpuTime'] : null;
        $this->container['maxCpuTime'] = isset($data['maxCpuTime']) ? $data['maxCpuTime'] : null;
        $this->container['totalCpuTime'] = isset($data['totalCpuTime']) ? $data['totalCpuTime'] : null;
        $this->container['cpuSkewPercent'] = isset($data['cpuSkewPercent']) ? $data['cpuSkewPercent'] : null;
        $this->container['averagePeakIops'] = isset($data['averagePeakIops']) ? $data['averagePeakIops'] : null;
        $this->container['iopsSkewPercent'] = isset($data['iopsSkewPercent']) ? $data['iopsSkewPercent'] : null;
        $this->container['maxPeakIops'] = isset($data['maxPeakIops']) ? $data['maxPeakIops'] : null;
        $this->container['minPeakIops'] = isset($data['minPeakIops']) ? $data['minPeakIops'] : null;
        $this->container['queryPlan'] = isset($data['queryPlan']) ? $data['queryPlan'] : null;
        $this->container['queryStatus'] = isset($data['queryStatus']) ? $data['queryStatus'] : null;
        $this->container['wlmStatus'] = isset($data['wlmStatus']) ? $data['wlmStatus'] : null;
        $this->container['wlmAttrib'] = isset($data['wlmAttrib']) ? $data['wlmAttrib'] : null;
        $this->container['systemQuery'] = isset($data['systemQuery']) ? $data['systemQuery'] : null;
        $this->container['backendStart'] = isset($data['backendStart']) ? $data['backendStart'] : null;
        $this->container['elapsedTime'] = isset($data['elapsedTime']) ? $data['elapsedTime'] : null;
        $this->container['currXactStart'] = isset($data['currXactStart']) ? $data['currXactStart'] : null;
        $this->container['stateChange'] = isset($data['stateChange']) ? $data['stateChange'] : null;
        $this->container['queryStart'] = isset($data['queryStart']) ? $data['queryStart'] : null;
        $this->container['queryElapsedTime'] = isset($data['queryElapsedTime']) ? $data['queryElapsedTime'] : null;
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
    * Gets virtualClusterId
    *  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getVirtualClusterId()
    {
        return $this->container['virtualClusterId'];
    }

    /**
    * Sets virtualClusterId
    *
    * @param int|null $virtualClusterId **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVirtualClusterId($virtualClusterId)
    {
        $this->container['virtualClusterId'] = $virtualClusterId;
        return $this;
    }

    /**
    * Gets ctime
    *  **参数解释**： 采集时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCtime()
    {
        return $this->container['ctime'];
    }

    /**
    * Sets ctime
    *
    * @param int|null $ctime **参数解释**： 采集时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCtime($ctime)
    {
        $this->container['ctime'] = $ctime;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**： 会话ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param string|null $pid **参数解释**： 会话ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets instName
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInstName()
    {
        return $this->container['instName'];
    }

    /**
    * Sets instName
    *
    * @param string|null $instName **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstName($instName)
    {
        $this->container['instName'] = $instName;
        return $this;
    }

    /**
    * Gets waiting
    *  **参数解释**： 如果后台当前正等待锁则为true。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getWaiting()
    {
        return $this->container['waiting'];
    }

    /**
    * Sets waiting
    *
    * @param bool|null $waiting **参数解释**： 如果后台当前正等待锁则为true。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWaiting($waiting)
    {
        $this->container['waiting'] = $waiting;
        return $this;
    }

    /**
    * Gets enqueue
    *  **参数解释**： 资源状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEnqueue()
    {
        return $this->container['enqueue'];
    }

    /**
    * Sets enqueue
    *
    * @param string|null $enqueue **参数解释**： 资源状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEnqueue($enqueue)
    {
        $this->container['enqueue'] = $enqueue;
        return $this;
    }

    /**
    * Gets warning
    *  **参数解释**： 主要显示如下几类告警信息以及sql自诊断调优相关告警。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
    * Sets warning
    *
    * @param string|null $warning **参数解释**： 主要显示如下几类告警信息以及sql自诊断调优相关告警。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;
        return $this;
    }

    /**
    * Gets query
    *  **参数解释**： 查询语句。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query **参数解释**： 查询语句。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets lane
    *  **参数解释**： 快慢车道。 **取值范围**： fast：快车道。 slow：慢车道。
    *
    * @return string|null
    */
    public function getLane()
    {
        return $this->container['lane'];
    }

    /**
    * Sets lane
    *
    * @param string|null $lane **参数解释**： 快慢车道。 **取值范围**： fast：快车道。 slow：慢车道。
    *
    * @return $this
    */
    public function setLane($lane)
    {
        $this->container['lane'] = $lane;
        return $this;
    }

    /**
    * Gets dbName
    *  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释**： 任务在资源池中的优先级。 **取值范围**： 1：最高。 2：高。 4：中。 8：低。
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority **参数解释**： 任务在资源池中的优先级。 **取值范围**： 1：最高。 2：高。 4：中。 8：低。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets queryId
    *  **参数解释**： 语句执行使用的内部查询ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId **参数解释**： 语句执行使用的内部查询ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets queryBand
    *  **参数解释**： 用于标示作业类型，可通过guc参数query_band进行设置，默认为空字符串。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getQueryBand()
    {
        return $this->container['queryBand'];
    }

    /**
    * Sets queryBand
    *
    * @param string|null $queryBand **参数解释**： 用于标示作业类型，可通过guc参数query_band进行设置，默认为空字符串。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryBand($queryBand)
    {
        $this->container['queryBand'] = $queryBand;
        return $this;
    }

    /**
    * Gets jobName
    *  **参数解释**： 该值是从query_band的字段中取出来的，位置0。 **取值范围**： 不涉及。
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
    * @param string|null $jobName **参数解释**： 该值是从query_band的字段中取出来的，位置0。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobInst
    *  **参数解释**： 该值是从query_band的字段中取出来的，位置1。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getJobInst()
    {
        return $this->container['jobInst'];
    }

    /**
    * Sets jobInst
    *
    * @param string|null $jobInst **参数解释**： 该值是从query_band的字段中取出来的，位置1。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobInst($jobInst)
    {
        $this->container['jobInst'] = $jobInst;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： 连接到后端的用户名。 **取值范围**： 不涉及。
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
    * @param string|null $userName **参数解释**： 连接到后端的用户名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets applicationName
    *  **参数解释**： 连接到后端的应用名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName **参数解释**： 连接到后端的应用名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets clientAddress
    *  **参数解释**： 连接到后端的客户端的IP地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClientAddress()
    {
        return $this->container['clientAddress'];
    }

    /**
    * Sets clientAddress
    *
    * @param string|null $clientAddress **参数解释**： 连接到后端的客户端的IP地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClientAddress($clientAddress)
    {
        $this->container['clientAddress'] = $clientAddress;
        return $this;
    }

    /**
    * Gets clientHostname
    *  **参数解释**： 客户端的主机名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClientHostname()
    {
        return $this->container['clientHostname'];
    }

    /**
    * Sets clientHostname
    *
    * @param string|null $clientHostname **参数解释**： 客户端的主机名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClientHostname($clientHostname)
    {
        $this->container['clientHostname'] = $clientHostname;
        return $this;
    }

    /**
    * Gets clientPort
    *  **参数解释**： 客户端用于与后端通讯的tcp端口号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param string|null $clientPort **参数解释**： 客户端用于与后端通讯的tcp端口号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets blockTime
    *  **参数解释**： 语句执行前的阻塞时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBlockTime()
    {
        return $this->container['blockTime'];
    }

    /**
    * Sets blockTime
    *
    * @param int|null $blockTime **参数解释**： 语句执行前的阻塞时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBlockTime($blockTime)
    {
        $this->container['blockTime'] = $blockTime;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**： 语句已经执行的时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**： 语句已经执行的时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets estimateTotalTime
    *  **参数解释**： 语句执行预估总时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getEstimateTotalTime()
    {
        return $this->container['estimateTotalTime'];
    }

    /**
    * Sets estimateTotalTime
    *
    * @param int|null $estimateTotalTime **参数解释**： 语句执行预估总时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEstimateTotalTime($estimateTotalTime)
    {
        $this->container['estimateTotalTime'] = $estimateTotalTime;
        return $this;
    }

    /**
    * Gets estimateLeftTime
    *  **参数解释**： 语句执行预估剩余时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getEstimateLeftTime()
    {
        return $this->container['estimateLeftTime'];
    }

    /**
    * Sets estimateLeftTime
    *
    * @param int|null $estimateLeftTime **参数解释**： 语句执行预估剩余时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEstimateLeftTime($estimateLeftTime)
    {
        $this->container['estimateLeftTime'] = $estimateLeftTime;
        return $this;
    }

    /**
    * Gets resourcePool
    *  **参数解释**： 用户使用的资源池。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getResourcePool()
    {
        return $this->container['resourcePool'];
    }

    /**
    * Sets resourcePool
    *
    * @param string|null $resourcePool **参数解释**： 用户使用的资源池。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setResourcePool($resourcePool)
    {
        $this->container['resourcePool'] = $resourcePool;
        return $this;
    }

    /**
    * Gets controlGroup
    *  **参数解释**： 语句所使用的cgroup。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getControlGroup()
    {
        return $this->container['controlGroup'];
    }

    /**
    * Sets controlGroup
    *
    * @param string|null $controlGroup **参数解释**： 语句所使用的cgroup。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setControlGroup($controlGroup)
    {
        $this->container['controlGroup'] = $controlGroup;
        return $this;
    }

    /**
    * Gets minPeakMemory
    *  **参数解释**： 语句在所有dn上的最小内存峰值，单位mb。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinPeakMemory()
    {
        return $this->container['minPeakMemory'];
    }

    /**
    * Sets minPeakMemory
    *
    * @param int|null $minPeakMemory **参数解释**： 语句在所有dn上的最小内存峰值，单位mb。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinPeakMemory($minPeakMemory)
    {
        $this->container['minPeakMemory'] = $minPeakMemory;
        return $this;
    }

    /**
    * Gets maxPeakMemory
    *  **参数解释**： 语句在所有dn上的最大内存峰值，单位mb。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxPeakMemory()
    {
        return $this->container['maxPeakMemory'];
    }

    /**
    * Sets maxPeakMemory
    *
    * @param int|null $maxPeakMemory **参数解释**： 语句在所有dn上的最大内存峰值，单位mb。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxPeakMemory($maxPeakMemory)
    {
        $this->container['maxPeakMemory'] = $maxPeakMemory;
        return $this;
    }

    /**
    * Gets averagePeakMemory
    *  **参数解释**： 语句执行过程中的内存使用平均值，单位mb。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAveragePeakMemory()
    {
        return $this->container['averagePeakMemory'];
    }

    /**
    * Sets averagePeakMemory
    *
    * @param int|null $averagePeakMemory **参数解释**： 语句执行过程中的内存使用平均值，单位mb。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAveragePeakMemory($averagePeakMemory)
    {
        $this->container['averagePeakMemory'] = $averagePeakMemory;
        return $this;
    }

    /**
    * Gets memorySkewPercent
    *  **参数解释**： 语句在各dn间的内存使用倾斜率。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMemorySkewPercent()
    {
        return $this->container['memorySkewPercent'];
    }

    /**
    * Sets memorySkewPercent
    *
    * @param int|null $memorySkewPercent **参数解释**： 语句在各dn间的内存使用倾斜率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMemorySkewPercent($memorySkewPercent)
    {
        $this->container['memorySkewPercent'] = $memorySkewPercent;
        return $this;
    }

    /**
    * Gets estimateMemory
    *  **参数解释**： 语句预估使用内存，单位mb。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getEstimateMemory()
    {
        return $this->container['estimateMemory'];
    }

    /**
    * Sets estimateMemory
    *
    * @param int|null $estimateMemory **参数解释**： 语句预估使用内存，单位mb。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEstimateMemory($estimateMemory)
    {
        $this->container['estimateMemory'] = $estimateMemory;
        return $this;
    }

    /**
    * Gets spillInfo
    *  **参数解释**： 语句在所有dn上的下盘信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSpillInfo()
    {
        return $this->container['spillInfo'];
    }

    /**
    * Sets spillInfo
    *
    * @param string|null $spillInfo **参数解释**： 语句在所有dn上的下盘信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSpillInfo($spillInfo)
    {
        $this->container['spillInfo'] = $spillInfo;
        return $this;
    }

    /**
    * Gets minSpillSize
    *  **参数解释**： 若发生下盘，所有dn上下盘的最小数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinSpillSize()
    {
        return $this->container['minSpillSize'];
    }

    /**
    * Sets minSpillSize
    *
    * @param int|null $minSpillSize **参数解释**： 若发生下盘，所有dn上下盘的最小数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinSpillSize($minSpillSize)
    {
        $this->container['minSpillSize'] = $minSpillSize;
        return $this;
    }

    /**
    * Gets maxSpillSize
    *  **参数解释**： 若发生下盘，所有dn上下盘的最大数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxSpillSize()
    {
        return $this->container['maxSpillSize'];
    }

    /**
    * Sets maxSpillSize
    *
    * @param int|null $maxSpillSize **参数解释**： 若发生下盘，所有dn上下盘的最大数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxSpillSize($maxSpillSize)
    {
        $this->container['maxSpillSize'] = $maxSpillSize;
        return $this;
    }

    /**
    * Gets averageSpillSize
    *  **参数解释**： 若发生下盘，所有dn上下盘的平均数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAverageSpillSize()
    {
        return $this->container['averageSpillSize'];
    }

    /**
    * Sets averageSpillSize
    *
    * @param int|null $averageSpillSize **参数解释**： 若发生下盘，所有dn上下盘的平均数据量 (单位mb) 默认为0。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAverageSpillSize($averageSpillSize)
    {
        $this->container['averageSpillSize'] = $averageSpillSize;
        return $this;
    }

    /**
    * Gets spillSkewPercent
    *  **参数解释**： 若发生下盘，dn间下盘倾斜率。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSpillSkewPercent()
    {
        return $this->container['spillSkewPercent'];
    }

    /**
    * Sets spillSkewPercent
    *
    * @param int|null $spillSkewPercent **参数解释**： 若发生下盘，dn间下盘倾斜率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSpillSkewPercent($spillSkewPercent)
    {
        $this->container['spillSkewPercent'] = $spillSkewPercent;
        return $this;
    }

    /**
    * Gets minDnTime
    *  **参数解释**： 语句在所有dn上的最小执行时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinDnTime()
    {
        return $this->container['minDnTime'];
    }

    /**
    * Sets minDnTime
    *
    * @param int|null $minDnTime **参数解释**： 语句在所有dn上的最小执行时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinDnTime($minDnTime)
    {
        $this->container['minDnTime'] = $minDnTime;
        return $this;
    }

    /**
    * Gets maxDnTime
    *  **参数解释**： 语句在所有dn上的最大执行时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxDnTime()
    {
        return $this->container['maxDnTime'];
    }

    /**
    * Sets maxDnTime
    *
    * @param int|null $maxDnTime **参数解释**： 语句在所有dn上的最大执行时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxDnTime($maxDnTime)
    {
        $this->container['maxDnTime'] = $maxDnTime;
        return $this;
    }

    /**
    * Gets averageDnTime
    *  **参数解释**： 语句在所有dn上的平均执行时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAverageDnTime()
    {
        return $this->container['averageDnTime'];
    }

    /**
    * Sets averageDnTime
    *
    * @param int|null $averageDnTime **参数解释**： 语句在所有dn上的平均执行时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAverageDnTime($averageDnTime)
    {
        $this->container['averageDnTime'] = $averageDnTime;
        return $this;
    }

    /**
    * Gets dntimeSkewPercent
    *  **参数解释**： 语句在各dn间的执行时间倾斜率。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getDntimeSkewPercent()
    {
        return $this->container['dntimeSkewPercent'];
    }

    /**
    * Sets dntimeSkewPercent
    *
    * @param int|null $dntimeSkewPercent **参数解释**： 语句在各dn间的执行时间倾斜率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDntimeSkewPercent($dntimeSkewPercent)
    {
        $this->container['dntimeSkewPercent'] = $dntimeSkewPercent;
        return $this;
    }

    /**
    * Gets minCpuTime
    *  **参数解释**： 语句在所有dn上的最小cpu时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinCpuTime()
    {
        return $this->container['minCpuTime'];
    }

    /**
    * Sets minCpuTime
    *
    * @param int|null $minCpuTime **参数解释**： 语句在所有dn上的最小cpu时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinCpuTime($minCpuTime)
    {
        $this->container['minCpuTime'] = $minCpuTime;
        return $this;
    }

    /**
    * Gets maxCpuTime
    *  **参数解释**： 语句在所有dn上的最大cpu时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxCpuTime()
    {
        return $this->container['maxCpuTime'];
    }

    /**
    * Sets maxCpuTime
    *
    * @param int|null $maxCpuTime **参数解释**： 语句在所有dn上的最大cpu时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxCpuTime($maxCpuTime)
    {
        $this->container['maxCpuTime'] = $maxCpuTime;
        return $this;
    }

    /**
    * Gets totalCpuTime
    *  **参数解释**： 语句在所有dn上的cpu总时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotalCpuTime()
    {
        return $this->container['totalCpuTime'];
    }

    /**
    * Sets totalCpuTime
    *
    * @param int|null $totalCpuTime **参数解释**： 语句在所有dn上的cpu总时间，单位ms。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotalCpuTime($totalCpuTime)
    {
        $this->container['totalCpuTime'] = $totalCpuTime;
        return $this;
    }

    /**
    * Gets cpuSkewPercent
    *  **参数解释**： 语句在各dn间的cpu时间倾斜率。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCpuSkewPercent()
    {
        return $this->container['cpuSkewPercent'];
    }

    /**
    * Sets cpuSkewPercent
    *
    * @param int|null $cpuSkewPercent **参数解释**： 语句在各dn间的cpu时间倾斜率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCpuSkewPercent($cpuSkewPercent)
    {
        $this->container['cpuSkewPercent'] = $cpuSkewPercent;
        return $this;
    }

    /**
    * Gets averagePeakIops
    *  **参数解释**： 语句在所有dn上的每秒平均io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAveragePeakIops()
    {
        return $this->container['averagePeakIops'];
    }

    /**
    * Sets averagePeakIops
    *
    * @param int|null $averagePeakIops **参数解释**： 语句在所有dn上的每秒平均io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAveragePeakIops($averagePeakIops)
    {
        $this->container['averagePeakIops'] = $averagePeakIops;
        return $this;
    }

    /**
    * Gets iopsSkewPercent
    *  **参数解释**： 语句在dn间的io倾斜率。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getIopsSkewPercent()
    {
        return $this->container['iopsSkewPercent'];
    }

    /**
    * Sets iopsSkewPercent
    *
    * @param int|null $iopsSkewPercent **参数解释**： 语句在dn间的io倾斜率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIopsSkewPercent($iopsSkewPercent)
    {
        $this->container['iopsSkewPercent'] = $iopsSkewPercent;
        return $this;
    }

    /**
    * Gets maxPeakIops
    *  **参数解释**： 语句在所有dn上的每秒最大io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxPeakIops()
    {
        return $this->container['maxPeakIops'];
    }

    /**
    * Sets maxPeakIops
    *
    * @param int|null $maxPeakIops **参数解释**： 语句在所有dn上的每秒最大io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxPeakIops($maxPeakIops)
    {
        $this->container['maxPeakIops'] = $maxPeakIops;
        return $this;
    }

    /**
    * Gets minPeakIops
    *  **参数解释**： 语句在所有dn上的每秒最小io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinPeakIops()
    {
        return $this->container['minPeakIops'];
    }

    /**
    * Sets minPeakIops
    *
    * @param int|null $minPeakIops **参数解释**： 语句在所有dn上的每秒最小io峰值（列存单位是次/s，行存单位是万次/s）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinPeakIops($minPeakIops)
    {
        $this->container['minPeakIops'] = $minPeakIops;
        return $this;
    }

    /**
    * Gets queryPlan
    *  **参数解释**： 查询计划。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getQueryPlan()
    {
        return $this->container['queryPlan'];
    }

    /**
    * Sets queryPlan
    *
    * @param string|null $queryPlan **参数解释**： 查询计划。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryPlan($queryPlan)
    {
        $this->container['queryPlan'] = $queryPlan;
        return $this;
    }

    /**
    * Gets queryStatus
    *  **参数解释**： 当前查询语句的实时运行状态。 **取值范围**： active、idle、idle in transaction、idle in transaction(aborted)、fastpath function call、disabled。
    *
    * @return string|null
    */
    public function getQueryStatus()
    {
        return $this->container['queryStatus'];
    }

    /**
    * Sets queryStatus
    *
    * @param string|null $queryStatus **参数解释**： 当前查询语句的实时运行状态。 **取值范围**： active、idle、idle in transaction、idle in transaction(aborted)、fastpath function call、disabled。
    *
    * @return $this
    */
    public function setQueryStatus($queryStatus)
    {
        $this->container['queryStatus'] = $queryStatus;
        return $this;
    }

    /**
    * Gets wlmStatus
    *  **参数解释**： 当前查询语句在资源池上的运行状态。 **取值范围**： pending：待生效。 running：运行中。 finished：结束。 aborted：终止。 active：正常。 unknown：未知。
    *
    * @return string|null
    */
    public function getWlmStatus()
    {
        return $this->container['wlmStatus'];
    }

    /**
    * Sets wlmStatus
    *
    * @param string|null $wlmStatus **参数解释**： 当前查询语句在资源池上的运行状态。 **取值范围**： pending：待生效。 running：运行中。 finished：结束。 aborted：终止。 active：正常。 unknown：未知。
    *
    * @return $this
    */
    public function setWlmStatus($wlmStatus)
    {
        $this->container['wlmStatus'] = $wlmStatus;
        return $this;
    }

    /**
    * Gets wlmAttrib
    *  **参数解释**： 语句的属性。 **取值范围**： ordinary：普通。 simple：简单。 complicated：复杂。 internal：内部。
    *
    * @return string|null
    */
    public function getWlmAttrib()
    {
        return $this->container['wlmAttrib'];
    }

    /**
    * Sets wlmAttrib
    *
    * @param string|null $wlmAttrib **参数解释**： 语句的属性。 **取值范围**： ordinary：普通。 simple：简单。 complicated：复杂。 internal：内部。
    *
    * @return $this
    */
    public function setWlmAttrib($wlmAttrib)
    {
        $this->container['wlmAttrib'] = $wlmAttrib;
        return $this;
    }

    /**
    * Gets systemQuery
    *  **参数解释**： 是否系统查询。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getSystemQuery()
    {
        return $this->container['systemQuery'];
    }

    /**
    * Sets systemQuery
    *
    * @param bool|null $systemQuery **参数解释**： 是否系统查询。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSystemQuery($systemQuery)
    {
        $this->container['systemQuery'] = $systemQuery;
        return $this;
    }

    /**
    * Gets backendStart
    *  **参数解释**： 该过程开始的时间，即当客户端连接服务器时。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBackendStart()
    {
        return $this->container['backendStart'];
    }

    /**
    * Sets backendStart
    *
    * @param int|null $backendStart **参数解释**： 该过程开始的时间，即当客户端连接服务器时。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackendStart($backendStart)
    {
        $this->container['backendStart'] = $backendStart;
        return $this;
    }

    /**
    * Gets elapsedTime
    *  **参数解释**： 到目前为止的执行时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getElapsedTime()
    {
        return $this->container['elapsedTime'];
    }

    /**
    * Sets elapsedTime
    *
    * @param int|null $elapsedTime **参数解释**： 到目前为止的执行时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setElapsedTime($elapsedTime)
    {
        $this->container['elapsedTime'] = $elapsedTime;
        return $this;
    }

    /**
    * Gets currXactStart
    *  **参数解释**： 启动当前事务的时间，如果没有事务是活跃的，则为null。如果当前查询是首个事务，则这列等同于query_start列。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCurrXactStart()
    {
        return $this->container['currXactStart'];
    }

    /**
    * Sets currXactStart
    *
    * @param int|null $currXactStart **参数解释**： 启动当前事务的时间，如果没有事务是活跃的，则为null。如果当前查询是首个事务，则这列等同于query_start列。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrXactStart($currXactStart)
    {
        $this->container['currXactStart'] = $currXactStart;
        return $this;
    }

    /**
    * Gets stateChange
    *  **参数解释**： 上次状态改变的时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStateChange()
    {
        return $this->container['stateChange'];
    }

    /**
    * Sets stateChange
    *
    * @param int|null $stateChange **参数解释**： 上次状态改变的时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStateChange($stateChange)
    {
        $this->container['stateChange'] = $stateChange;
        return $this;
    }

    /**
    * Gets queryStart
    *  **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getQueryStart()
    {
        return $this->container['queryStart'];
    }

    /**
    * Sets queryStart
    *
    * @param int|null $queryStart **参数解释**： 语句执行的开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryStart($queryStart)
    {
        $this->container['queryStart'] = $queryStart;
        return $this;
    }

    /**
    * Gets queryElapsedTime
    *  **参数解释**： 语句当前为止的实际执行时间。单位：秒。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getQueryElapsedTime()
    {
        return $this->container['queryElapsedTime'];
    }

    /**
    * Sets queryElapsedTime
    *
    * @param int|null $queryElapsedTime **参数解释**： 语句当前为止的实际执行时间。单位：秒。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueryElapsedTime($queryElapsedTime)
    {
        $this->container['queryElapsedTime'] = $queryElapsedTime;
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

