<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostOverviewResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * hostStat  **参数解释**： 主机状态。 **取值范围**： 不涉及。
    * workIp  **参数解释**： IP地址。 **取值范围**： 不涉及。
    * memFree  **参数解释**： 系统中未使用的内存(GB)。 **取值范围**： 不涉及。
    * memTotal  **参数解释**： 总内存(GB)。 **取值范围**： 不涉及。
    * memUsage  **参数解释**： 内存使用率(GB)。 **取值范围**： 不涉及。
    * memCached  **参数解释**： 缓存内存(GB)。 **取值范围**： 不涉及。
    * memBuffer  **参数解释**： 缓冲内存(MB)。 **取值范围**： 不涉及。
    * swapFree  **参数解释**： ram暂存在swap中的大小(GB)。 **取值范围**： 不涉及。
    * swapTotal  **参数解释**： 交换空间总和(GB)。 **取值范围**： 不涉及。
    * cpuUsage  **参数解释**： CPU使用率(%)。 **取值范围**： 不涉及。
    * cpuUsageSys  **参数解释**： 系统CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuUsageUsr  **参数解释**： 用户CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIdle  **参数解释**： 空闲CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIowait  **参数解释**： IO等待(%)。 **取值范围**： 不涉及。
    * diskUsageAvg  **参数解释**： 磁盘平均使用率(%)。 **取值范围**： 不涉及。
    * diskTotal  **参数解释**： 磁盘总容量(GB)。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 磁盘使用容量(GB)。 **取值范围**： 不涉及。
    * diskAvailable  **参数解释**： 磁盘可用容量(GB)。 **取值范围**： 不涉及。
    * diskIo  **参数解释**： 磁盘IO(KB/s)。 **取值范围**： 不涉及。
    * diskIoRead  **参数解释**： 磁盘读速率(KB/s)。 **取值范围**： 不涉及。
    * diskIoWrite  **参数解释**： 磁盘写速率(KB/s)。 **取值范围**： 不涉及。
    * tcpResendRate  **参数解释**： TCP协议栈重传率(%)。 **取值范围**： 不涉及。
    * netIo  **参数解释**： 网络IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'hostName' => 'string',
            'hostStat' => 'string',
            'workIp' => 'string',
            'memFree' => 'double',
            'memTotal' => 'double',
            'memUsage' => 'double',
            'memCached' => 'double',
            'memBuffer' => 'double',
            'swapFree' => 'double',
            'swapTotal' => 'double',
            'cpuUsage' => 'double',
            'cpuUsageSys' => 'double',
            'cpuUsageUsr' => 'double',
            'cpuIdle' => 'double',
            'cpuIowait' => 'double',
            'diskUsageAvg' => 'double',
            'diskTotal' => 'double',
            'diskUsed' => 'double',
            'diskAvailable' => 'double',
            'diskIo' => 'double',
            'diskIoRead' => 'double',
            'diskIoWrite' => 'double',
            'tcpResendRate' => 'double',
            'netIo' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * hostStat  **参数解释**： 主机状态。 **取值范围**： 不涉及。
    * workIp  **参数解释**： IP地址。 **取值范围**： 不涉及。
    * memFree  **参数解释**： 系统中未使用的内存(GB)。 **取值范围**： 不涉及。
    * memTotal  **参数解释**： 总内存(GB)。 **取值范围**： 不涉及。
    * memUsage  **参数解释**： 内存使用率(GB)。 **取值范围**： 不涉及。
    * memCached  **参数解释**： 缓存内存(GB)。 **取值范围**： 不涉及。
    * memBuffer  **参数解释**： 缓冲内存(MB)。 **取值范围**： 不涉及。
    * swapFree  **参数解释**： ram暂存在swap中的大小(GB)。 **取值范围**： 不涉及。
    * swapTotal  **参数解释**： 交换空间总和(GB)。 **取值范围**： 不涉及。
    * cpuUsage  **参数解释**： CPU使用率(%)。 **取值范围**： 不涉及。
    * cpuUsageSys  **参数解释**： 系统CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuUsageUsr  **参数解释**： 用户CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIdle  **参数解释**： 空闲CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIowait  **参数解释**： IO等待(%)。 **取值范围**： 不涉及。
    * diskUsageAvg  **参数解释**： 磁盘平均使用率(%)。 **取值范围**： 不涉及。
    * diskTotal  **参数解释**： 磁盘总容量(GB)。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 磁盘使用容量(GB)。 **取值范围**： 不涉及。
    * diskAvailable  **参数解释**： 磁盘可用容量(GB)。 **取值范围**： 不涉及。
    * diskIo  **参数解释**： 磁盘IO(KB/s)。 **取值范围**： 不涉及。
    * diskIoRead  **参数解释**： 磁盘读速率(KB/s)。 **取值范围**： 不涉及。
    * diskIoWrite  **参数解释**： 磁盘写速率(KB/s)。 **取值范围**： 不涉及。
    * tcpResendRate  **参数解释**： TCP协议栈重传率(%)。 **取值范围**： 不涉及。
    * netIo  **参数解释**： 网络IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'hostName' => null,
        'hostStat' => null,
        'workIp' => null,
        'memFree' => 'double',
        'memTotal' => 'double',
        'memUsage' => 'double',
        'memCached' => 'double',
        'memBuffer' => 'double',
        'swapFree' => 'double',
        'swapTotal' => 'double',
        'cpuUsage' => 'double',
        'cpuUsageSys' => 'double',
        'cpuUsageUsr' => 'double',
        'cpuIdle' => 'double',
        'cpuIowait' => 'double',
        'diskUsageAvg' => 'double',
        'diskTotal' => 'double',
        'diskUsed' => 'double',
        'diskAvailable' => 'double',
        'diskIo' => 'double',
        'diskIoRead' => 'double',
        'diskIoWrite' => 'double',
        'tcpResendRate' => 'double',
        'netIo' => 'double'
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
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * hostStat  **参数解释**： 主机状态。 **取值范围**： 不涉及。
    * workIp  **参数解释**： IP地址。 **取值范围**： 不涉及。
    * memFree  **参数解释**： 系统中未使用的内存(GB)。 **取值范围**： 不涉及。
    * memTotal  **参数解释**： 总内存(GB)。 **取值范围**： 不涉及。
    * memUsage  **参数解释**： 内存使用率(GB)。 **取值范围**： 不涉及。
    * memCached  **参数解释**： 缓存内存(GB)。 **取值范围**： 不涉及。
    * memBuffer  **参数解释**： 缓冲内存(MB)。 **取值范围**： 不涉及。
    * swapFree  **参数解释**： ram暂存在swap中的大小(GB)。 **取值范围**： 不涉及。
    * swapTotal  **参数解释**： 交换空间总和(GB)。 **取值范围**： 不涉及。
    * cpuUsage  **参数解释**： CPU使用率(%)。 **取值范围**： 不涉及。
    * cpuUsageSys  **参数解释**： 系统CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuUsageUsr  **参数解释**： 用户CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIdle  **参数解释**： 空闲CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIowait  **参数解释**： IO等待(%)。 **取值范围**： 不涉及。
    * diskUsageAvg  **参数解释**： 磁盘平均使用率(%)。 **取值范围**： 不涉及。
    * diskTotal  **参数解释**： 磁盘总容量(GB)。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 磁盘使用容量(GB)。 **取值范围**： 不涉及。
    * diskAvailable  **参数解释**： 磁盘可用容量(GB)。 **取值范围**： 不涉及。
    * diskIo  **参数解释**： 磁盘IO(KB/s)。 **取值范围**： 不涉及。
    * diskIoRead  **参数解释**： 磁盘读速率(KB/s)。 **取值范围**： 不涉及。
    * diskIoWrite  **参数解释**： 磁盘写速率(KB/s)。 **取值范围**： 不涉及。
    * tcpResendRate  **参数解释**： TCP协议栈重传率(%)。 **取值范围**： 不涉及。
    * netIo  **参数解释**： 网络IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'hostName' => 'host_name',
            'hostStat' => 'host_stat',
            'workIp' => 'work_ip',
            'memFree' => 'mem_free',
            'memTotal' => 'mem_total',
            'memUsage' => 'mem_usage',
            'memCached' => 'mem_cached',
            'memBuffer' => 'mem_buffer',
            'swapFree' => 'swap_free',
            'swapTotal' => 'swap_total',
            'cpuUsage' => 'cpu_usage',
            'cpuUsageSys' => 'cpu_usage_sys',
            'cpuUsageUsr' => 'cpu_usage_usr',
            'cpuIdle' => 'cpu_idle',
            'cpuIowait' => 'cpu_iowait',
            'diskUsageAvg' => 'disk_usage_avg',
            'diskTotal' => 'disk_total',
            'diskUsed' => 'disk_used',
            'diskAvailable' => 'disk_available',
            'diskIo' => 'disk_io',
            'diskIoRead' => 'disk_io_read',
            'diskIoWrite' => 'disk_io_write',
            'tcpResendRate' => 'tcp_resend_rate',
            'netIo' => 'net_io'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * hostStat  **参数解释**： 主机状态。 **取值范围**： 不涉及。
    * workIp  **参数解释**： IP地址。 **取值范围**： 不涉及。
    * memFree  **参数解释**： 系统中未使用的内存(GB)。 **取值范围**： 不涉及。
    * memTotal  **参数解释**： 总内存(GB)。 **取值范围**： 不涉及。
    * memUsage  **参数解释**： 内存使用率(GB)。 **取值范围**： 不涉及。
    * memCached  **参数解释**： 缓存内存(GB)。 **取值范围**： 不涉及。
    * memBuffer  **参数解释**： 缓冲内存(MB)。 **取值范围**： 不涉及。
    * swapFree  **参数解释**： ram暂存在swap中的大小(GB)。 **取值范围**： 不涉及。
    * swapTotal  **参数解释**： 交换空间总和(GB)。 **取值范围**： 不涉及。
    * cpuUsage  **参数解释**： CPU使用率(%)。 **取值范围**： 不涉及。
    * cpuUsageSys  **参数解释**： 系统CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuUsageUsr  **参数解释**： 用户CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIdle  **参数解释**： 空闲CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIowait  **参数解释**： IO等待(%)。 **取值范围**： 不涉及。
    * diskUsageAvg  **参数解释**： 磁盘平均使用率(%)。 **取值范围**： 不涉及。
    * diskTotal  **参数解释**： 磁盘总容量(GB)。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 磁盘使用容量(GB)。 **取值范围**： 不涉及。
    * diskAvailable  **参数解释**： 磁盘可用容量(GB)。 **取值范围**： 不涉及。
    * diskIo  **参数解释**： 磁盘IO(KB/s)。 **取值范围**： 不涉及。
    * diskIoRead  **参数解释**： 磁盘读速率(KB/s)。 **取值范围**： 不涉及。
    * diskIoWrite  **参数解释**： 磁盘写速率(KB/s)。 **取值范围**： 不涉及。
    * tcpResendRate  **参数解释**： TCP协议栈重传率(%)。 **取值范围**： 不涉及。
    * netIo  **参数解释**： 网络IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'hostName' => 'setHostName',
            'hostStat' => 'setHostStat',
            'workIp' => 'setWorkIp',
            'memFree' => 'setMemFree',
            'memTotal' => 'setMemTotal',
            'memUsage' => 'setMemUsage',
            'memCached' => 'setMemCached',
            'memBuffer' => 'setMemBuffer',
            'swapFree' => 'setSwapFree',
            'swapTotal' => 'setSwapTotal',
            'cpuUsage' => 'setCpuUsage',
            'cpuUsageSys' => 'setCpuUsageSys',
            'cpuUsageUsr' => 'setCpuUsageUsr',
            'cpuIdle' => 'setCpuIdle',
            'cpuIowait' => 'setCpuIowait',
            'diskUsageAvg' => 'setDiskUsageAvg',
            'diskTotal' => 'setDiskTotal',
            'diskUsed' => 'setDiskUsed',
            'diskAvailable' => 'setDiskAvailable',
            'diskIo' => 'setDiskIo',
            'diskIoRead' => 'setDiskIoRead',
            'diskIoWrite' => 'setDiskIoWrite',
            'tcpResendRate' => 'setTcpResendRate',
            'netIo' => 'setNetIo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * hostStat  **参数解释**： 主机状态。 **取值范围**： 不涉及。
    * workIp  **参数解释**： IP地址。 **取值范围**： 不涉及。
    * memFree  **参数解释**： 系统中未使用的内存(GB)。 **取值范围**： 不涉及。
    * memTotal  **参数解释**： 总内存(GB)。 **取值范围**： 不涉及。
    * memUsage  **参数解释**： 内存使用率(GB)。 **取值范围**： 不涉及。
    * memCached  **参数解释**： 缓存内存(GB)。 **取值范围**： 不涉及。
    * memBuffer  **参数解释**： 缓冲内存(MB)。 **取值范围**： 不涉及。
    * swapFree  **参数解释**： ram暂存在swap中的大小(GB)。 **取值范围**： 不涉及。
    * swapTotal  **参数解释**： 交换空间总和(GB)。 **取值范围**： 不涉及。
    * cpuUsage  **参数解释**： CPU使用率(%)。 **取值范围**： 不涉及。
    * cpuUsageSys  **参数解释**： 系统CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuUsageUsr  **参数解释**： 用户CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIdle  **参数解释**： 空闲CPU占用率(%)。 **取值范围**： 不涉及。
    * cpuIowait  **参数解释**： IO等待(%)。 **取值范围**： 不涉及。
    * diskUsageAvg  **参数解释**： 磁盘平均使用率(%)。 **取值范围**： 不涉及。
    * diskTotal  **参数解释**： 磁盘总容量(GB)。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 磁盘使用容量(GB)。 **取值范围**： 不涉及。
    * diskAvailable  **参数解释**： 磁盘可用容量(GB)。 **取值范围**： 不涉及。
    * diskIo  **参数解释**： 磁盘IO(KB/s)。 **取值范围**： 不涉及。
    * diskIoRead  **参数解释**： 磁盘读速率(KB/s)。 **取值范围**： 不涉及。
    * diskIoWrite  **参数解释**： 磁盘写速率(KB/s)。 **取值范围**： 不涉及。
    * tcpResendRate  **参数解释**： TCP协议栈重传率(%)。 **取值范围**： 不涉及。
    * netIo  **参数解释**： 网络IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'hostName' => 'getHostName',
            'hostStat' => 'getHostStat',
            'workIp' => 'getWorkIp',
            'memFree' => 'getMemFree',
            'memTotal' => 'getMemTotal',
            'memUsage' => 'getMemUsage',
            'memCached' => 'getMemCached',
            'memBuffer' => 'getMemBuffer',
            'swapFree' => 'getSwapFree',
            'swapTotal' => 'getSwapTotal',
            'cpuUsage' => 'getCpuUsage',
            'cpuUsageSys' => 'getCpuUsageSys',
            'cpuUsageUsr' => 'getCpuUsageUsr',
            'cpuIdle' => 'getCpuIdle',
            'cpuIowait' => 'getCpuIowait',
            'diskUsageAvg' => 'getDiskUsageAvg',
            'diskTotal' => 'getDiskTotal',
            'diskUsed' => 'getDiskUsed',
            'diskAvailable' => 'getDiskAvailable',
            'diskIo' => 'getDiskIo',
            'diskIoRead' => 'getDiskIoRead',
            'diskIoWrite' => 'getDiskIoWrite',
            'tcpResendRate' => 'getTcpResendRate',
            'netIo' => 'getNetIo'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostStat'] = isset($data['hostStat']) ? $data['hostStat'] : null;
        $this->container['workIp'] = isset($data['workIp']) ? $data['workIp'] : null;
        $this->container['memFree'] = isset($data['memFree']) ? $data['memFree'] : null;
        $this->container['memTotal'] = isset($data['memTotal']) ? $data['memTotal'] : null;
        $this->container['memUsage'] = isset($data['memUsage']) ? $data['memUsage'] : null;
        $this->container['memCached'] = isset($data['memCached']) ? $data['memCached'] : null;
        $this->container['memBuffer'] = isset($data['memBuffer']) ? $data['memBuffer'] : null;
        $this->container['swapFree'] = isset($data['swapFree']) ? $data['swapFree'] : null;
        $this->container['swapTotal'] = isset($data['swapTotal']) ? $data['swapTotal'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['cpuUsageSys'] = isset($data['cpuUsageSys']) ? $data['cpuUsageSys'] : null;
        $this->container['cpuUsageUsr'] = isset($data['cpuUsageUsr']) ? $data['cpuUsageUsr'] : null;
        $this->container['cpuIdle'] = isset($data['cpuIdle']) ? $data['cpuIdle'] : null;
        $this->container['cpuIowait'] = isset($data['cpuIowait']) ? $data['cpuIowait'] : null;
        $this->container['diskUsageAvg'] = isset($data['diskUsageAvg']) ? $data['diskUsageAvg'] : null;
        $this->container['diskTotal'] = isset($data['diskTotal']) ? $data['diskTotal'] : null;
        $this->container['diskUsed'] = isset($data['diskUsed']) ? $data['diskUsed'] : null;
        $this->container['diskAvailable'] = isset($data['diskAvailable']) ? $data['diskAvailable'] : null;
        $this->container['diskIo'] = isset($data['diskIo']) ? $data['diskIo'] : null;
        $this->container['diskIoRead'] = isset($data['diskIoRead']) ? $data['diskIoRead'] : null;
        $this->container['diskIoWrite'] = isset($data['diskIoWrite']) ? $data['diskIoWrite'] : null;
        $this->container['tcpResendRate'] = isset($data['tcpResendRate']) ? $data['tcpResendRate'] : null;
        $this->container['netIo'] = isset($data['netIo']) ? $data['netIo'] : null;
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
    * Gets instanceName
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
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
    * @param string|null $instanceName **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**： 主机名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostStat
    *  **参数解释**： 主机状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getHostStat()
    {
        return $this->container['hostStat'];
    }

    /**
    * Sets hostStat
    *
    * @param string|null $hostStat **参数解释**： 主机状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setHostStat($hostStat)
    {
        $this->container['hostStat'] = $hostStat;
        return $this;
    }

    /**
    * Gets workIp
    *  **参数解释**： IP地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWorkIp()
    {
        return $this->container['workIp'];
    }

    /**
    * Sets workIp
    *
    * @param string|null $workIp **参数解释**： IP地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkIp($workIp)
    {
        $this->container['workIp'] = $workIp;
        return $this;
    }

    /**
    * Gets memFree
    *  **参数解释**： 系统中未使用的内存(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getMemFree()
    {
        return $this->container['memFree'];
    }

    /**
    * Sets memFree
    *
    * @param double|null $memFree **参数解释**： 系统中未使用的内存(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMemFree($memFree)
    {
        $this->container['memFree'] = $memFree;
        return $this;
    }

    /**
    * Gets memTotal
    *  **参数解释**： 总内存(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getMemTotal()
    {
        return $this->container['memTotal'];
    }

    /**
    * Sets memTotal
    *
    * @param double|null $memTotal **参数解释**： 总内存(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMemTotal($memTotal)
    {
        $this->container['memTotal'] = $memTotal;
        return $this;
    }

    /**
    * Gets memUsage
    *  **参数解释**： 内存使用率(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getMemUsage()
    {
        return $this->container['memUsage'];
    }

    /**
    * Sets memUsage
    *
    * @param double|null $memUsage **参数解释**： 内存使用率(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMemUsage($memUsage)
    {
        $this->container['memUsage'] = $memUsage;
        return $this;
    }

    /**
    * Gets memCached
    *  **参数解释**： 缓存内存(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getMemCached()
    {
        return $this->container['memCached'];
    }

    /**
    * Sets memCached
    *
    * @param double|null $memCached **参数解释**： 缓存内存(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMemCached($memCached)
    {
        $this->container['memCached'] = $memCached;
        return $this;
    }

    /**
    * Gets memBuffer
    *  **参数解释**： 缓冲内存(MB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getMemBuffer()
    {
        return $this->container['memBuffer'];
    }

    /**
    * Sets memBuffer
    *
    * @param double|null $memBuffer **参数解释**： 缓冲内存(MB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMemBuffer($memBuffer)
    {
        $this->container['memBuffer'] = $memBuffer;
        return $this;
    }

    /**
    * Gets swapFree
    *  **参数解释**： ram暂存在swap中的大小(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getSwapFree()
    {
        return $this->container['swapFree'];
    }

    /**
    * Sets swapFree
    *
    * @param double|null $swapFree **参数解释**： ram暂存在swap中的大小(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSwapFree($swapFree)
    {
        $this->container['swapFree'] = $swapFree;
        return $this;
    }

    /**
    * Gets swapTotal
    *  **参数解释**： 交换空间总和(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getSwapTotal()
    {
        return $this->container['swapTotal'];
    }

    /**
    * Sets swapTotal
    *
    * @param double|null $swapTotal **参数解释**： 交换空间总和(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSwapTotal($swapTotal)
    {
        $this->container['swapTotal'] = $swapTotal;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  **参数解释**： CPU使用率(%)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param double|null $cpuUsage **参数解释**： CPU使用率(%)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets cpuUsageSys
    *  **参数解释**： 系统CPU占用率(%)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getCpuUsageSys()
    {
        return $this->container['cpuUsageSys'];
    }

    /**
    * Sets cpuUsageSys
    *
    * @param double|null $cpuUsageSys **参数解释**： 系统CPU占用率(%)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCpuUsageSys($cpuUsageSys)
    {
        $this->container['cpuUsageSys'] = $cpuUsageSys;
        return $this;
    }

    /**
    * Gets cpuUsageUsr
    *  **参数解释**： 用户CPU占用率(%)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getCpuUsageUsr()
    {
        return $this->container['cpuUsageUsr'];
    }

    /**
    * Sets cpuUsageUsr
    *
    * @param double|null $cpuUsageUsr **参数解释**： 用户CPU占用率(%)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCpuUsageUsr($cpuUsageUsr)
    {
        $this->container['cpuUsageUsr'] = $cpuUsageUsr;
        return $this;
    }

    /**
    * Gets cpuIdle
    *  **参数解释**： 空闲CPU占用率(%)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getCpuIdle()
    {
        return $this->container['cpuIdle'];
    }

    /**
    * Sets cpuIdle
    *
    * @param double|null $cpuIdle **参数解释**： 空闲CPU占用率(%)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCpuIdle($cpuIdle)
    {
        $this->container['cpuIdle'] = $cpuIdle;
        return $this;
    }

    /**
    * Gets cpuIowait
    *  **参数解释**： IO等待(%)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getCpuIowait()
    {
        return $this->container['cpuIowait'];
    }

    /**
    * Sets cpuIowait
    *
    * @param double|null $cpuIowait **参数解释**： IO等待(%)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCpuIowait($cpuIowait)
    {
        $this->container['cpuIowait'] = $cpuIowait;
        return $this;
    }

    /**
    * Gets diskUsageAvg
    *  **参数解释**： 磁盘平均使用率(%)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getDiskUsageAvg()
    {
        return $this->container['diskUsageAvg'];
    }

    /**
    * Sets diskUsageAvg
    *
    * @param double|null $diskUsageAvg **参数解释**： 磁盘平均使用率(%)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskUsageAvg($diskUsageAvg)
    {
        $this->container['diskUsageAvg'] = $diskUsageAvg;
        return $this;
    }

    /**
    * Gets diskTotal
    *  **参数解释**： 磁盘总容量(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getDiskTotal()
    {
        return $this->container['diskTotal'];
    }

    /**
    * Sets diskTotal
    *
    * @param double|null $diskTotal **参数解释**： 磁盘总容量(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskTotal($diskTotal)
    {
        $this->container['diskTotal'] = $diskTotal;
        return $this;
    }

    /**
    * Gets diskUsed
    *  **参数解释**： 磁盘使用容量(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getDiskUsed()
    {
        return $this->container['diskUsed'];
    }

    /**
    * Sets diskUsed
    *
    * @param double|null $diskUsed **参数解释**： 磁盘使用容量(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskUsed($diskUsed)
    {
        $this->container['diskUsed'] = $diskUsed;
        return $this;
    }

    /**
    * Gets diskAvailable
    *  **参数解释**： 磁盘可用容量(GB)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getDiskAvailable()
    {
        return $this->container['diskAvailable'];
    }

    /**
    * Sets diskAvailable
    *
    * @param double|null $diskAvailable **参数解释**： 磁盘可用容量(GB)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskAvailable($diskAvailable)
    {
        $this->container['diskAvailable'] = $diskAvailable;
        return $this;
    }

    /**
    * Gets diskIo
    *  **参数解释**： 磁盘IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getDiskIo()
    {
        return $this->container['diskIo'];
    }

    /**
    * Sets diskIo
    *
    * @param double|null $diskIo **参数解释**： 磁盘IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskIo($diskIo)
    {
        $this->container['diskIo'] = $diskIo;
        return $this;
    }

    /**
    * Gets diskIoRead
    *  **参数解释**： 磁盘读速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getDiskIoRead()
    {
        return $this->container['diskIoRead'];
    }

    /**
    * Sets diskIoRead
    *
    * @param double|null $diskIoRead **参数解释**： 磁盘读速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskIoRead($diskIoRead)
    {
        $this->container['diskIoRead'] = $diskIoRead;
        return $this;
    }

    /**
    * Gets diskIoWrite
    *  **参数解释**： 磁盘写速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getDiskIoWrite()
    {
        return $this->container['diskIoWrite'];
    }

    /**
    * Sets diskIoWrite
    *
    * @param double|null $diskIoWrite **参数解释**： 磁盘写速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskIoWrite($diskIoWrite)
    {
        $this->container['diskIoWrite'] = $diskIoWrite;
        return $this;
    }

    /**
    * Gets tcpResendRate
    *  **参数解释**： TCP协议栈重传率(%)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getTcpResendRate()
    {
        return $this->container['tcpResendRate'];
    }

    /**
    * Sets tcpResendRate
    *
    * @param double|null $tcpResendRate **参数解释**： TCP协议栈重传率(%)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTcpResendRate($tcpResendRate)
    {
        $this->container['tcpResendRate'] = $tcpResendRate;
        return $this;
    }

    /**
    * Gets netIo
    *  **参数解释**： 网络IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getNetIo()
    {
        return $this->container['netIo'];
    }

    /**
    * Sets netIo
    *
    * @param double|null $netIo **参数解释**： 网络IO(KB/s)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNetIo($netIo)
    {
        $this->container['netIo'] = $netIo;
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

