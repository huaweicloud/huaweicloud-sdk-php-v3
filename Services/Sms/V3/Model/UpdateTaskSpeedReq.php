<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTaskSpeedReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTaskSpeedReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subtaskName  当前上报进度的子任务名称，子任务名称包括： 创建虚拟机 CREATE_CLOUD_SERVER 配置安全通道 SSL_CONFIG 挂载代理镜像 ATTACH_AGENT_IMAGE 卸载载代理镜像 DETTACH_AGENT_IMAGE Linux分区格式化 FORMAT_DISK_LINUX Linux分区格式化(文件级级） FORMAT_DISK_LINUX_FILE Linux分区格式化(块级） FORMAT_DISK_LINUX_BLOCK Windows分区格式化 FORMAT_DISK_WINDOWS Linux文件级数据迁移 MIGRATE_LINUX_FILE, Linux块级数据迁移 MIGRATE_LINUX_BLOCK Windows块级数据迁移 MIGRATE_WINDOWS_BLOCK 克隆一个虚拟机 CLONE_VM Linux文件级数据同步 SYNC_LINUX_FILE Linux块级数据同步 SYNC_LINUX_BLOCK Windows块级数据同步 SYNC_WINDOWS_BLOCK Linux配置修改 CONFIGURE_LINUX Linux配置修改(块级）CONFIGURE_LINUX_BLOCK Linux配置修改（文件级） CONFIGURE_LINUX_FILE Windows配置修改 CONFIGURE_WINDOWS
    * progress  当前上报的子任务的最新百分比进度
    * replicatesize  当前任务已经复制的数据量大小（B）
    * totalsize  当前任务的总迁移数据大小
    * processTrace  迁移或同步时，具体的迁移详情
    * migrateSpeed  实施迁移速率，单位Mb/s
    * compressRate  实施文件压缩率
    * remainTime  剩余时间
    * totalCpuUsage  主机的CPU使用率，0到100，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，0到100，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * agentTime  Agent的当前时间，用于超速检测，因为限速值是可以分时间段设置的
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subtaskName' => 'string',
            'progress' => 'int',
            'replicatesize' => 'int',
            'totalsize' => 'int',
            'processTrace' => 'string',
            'migrateSpeed' => 'double',
            'compressRate' => 'double',
            'remainTime' => 'int',
            'totalCpuUsage' => 'double',
            'agentCpuUsage' => 'double',
            'totalMemUsage' => 'double',
            'agentMemUsage' => 'double',
            'totalDiskIo' => 'double',
            'agentDiskIo' => 'double',
            'agentTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subtaskName  当前上报进度的子任务名称，子任务名称包括： 创建虚拟机 CREATE_CLOUD_SERVER 配置安全通道 SSL_CONFIG 挂载代理镜像 ATTACH_AGENT_IMAGE 卸载载代理镜像 DETTACH_AGENT_IMAGE Linux分区格式化 FORMAT_DISK_LINUX Linux分区格式化(文件级级） FORMAT_DISK_LINUX_FILE Linux分区格式化(块级） FORMAT_DISK_LINUX_BLOCK Windows分区格式化 FORMAT_DISK_WINDOWS Linux文件级数据迁移 MIGRATE_LINUX_FILE, Linux块级数据迁移 MIGRATE_LINUX_BLOCK Windows块级数据迁移 MIGRATE_WINDOWS_BLOCK 克隆一个虚拟机 CLONE_VM Linux文件级数据同步 SYNC_LINUX_FILE Linux块级数据同步 SYNC_LINUX_BLOCK Windows块级数据同步 SYNC_WINDOWS_BLOCK Linux配置修改 CONFIGURE_LINUX Linux配置修改(块级）CONFIGURE_LINUX_BLOCK Linux配置修改（文件级） CONFIGURE_LINUX_FILE Windows配置修改 CONFIGURE_WINDOWS
    * progress  当前上报的子任务的最新百分比进度
    * replicatesize  当前任务已经复制的数据量大小（B）
    * totalsize  当前任务的总迁移数据大小
    * processTrace  迁移或同步时，具体的迁移详情
    * migrateSpeed  实施迁移速率，单位Mb/s
    * compressRate  实施文件压缩率
    * remainTime  剩余时间
    * totalCpuUsage  主机的CPU使用率，0到100，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，0到100，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * agentTime  Agent的当前时间，用于超速检测，因为限速值是可以分时间段设置的
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subtaskName' => null,
        'progress' => 'int32',
        'replicatesize' => 'int64',
        'totalsize' => 'int64',
        'processTrace' => null,
        'migrateSpeed' => 'double',
        'compressRate' => 'double',
        'remainTime' => 'int64',
        'totalCpuUsage' => 'double',
        'agentCpuUsage' => 'double',
        'totalMemUsage' => 'double',
        'agentMemUsage' => 'double',
        'totalDiskIo' => 'double',
        'agentDiskIo' => 'double',
        'agentTime' => null
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
    * subtaskName  当前上报进度的子任务名称，子任务名称包括： 创建虚拟机 CREATE_CLOUD_SERVER 配置安全通道 SSL_CONFIG 挂载代理镜像 ATTACH_AGENT_IMAGE 卸载载代理镜像 DETTACH_AGENT_IMAGE Linux分区格式化 FORMAT_DISK_LINUX Linux分区格式化(文件级级） FORMAT_DISK_LINUX_FILE Linux分区格式化(块级） FORMAT_DISK_LINUX_BLOCK Windows分区格式化 FORMAT_DISK_WINDOWS Linux文件级数据迁移 MIGRATE_LINUX_FILE, Linux块级数据迁移 MIGRATE_LINUX_BLOCK Windows块级数据迁移 MIGRATE_WINDOWS_BLOCK 克隆一个虚拟机 CLONE_VM Linux文件级数据同步 SYNC_LINUX_FILE Linux块级数据同步 SYNC_LINUX_BLOCK Windows块级数据同步 SYNC_WINDOWS_BLOCK Linux配置修改 CONFIGURE_LINUX Linux配置修改(块级）CONFIGURE_LINUX_BLOCK Linux配置修改（文件级） CONFIGURE_LINUX_FILE Windows配置修改 CONFIGURE_WINDOWS
    * progress  当前上报的子任务的最新百分比进度
    * replicatesize  当前任务已经复制的数据量大小（B）
    * totalsize  当前任务的总迁移数据大小
    * processTrace  迁移或同步时，具体的迁移详情
    * migrateSpeed  实施迁移速率，单位Mb/s
    * compressRate  实施文件压缩率
    * remainTime  剩余时间
    * totalCpuUsage  主机的CPU使用率，0到100，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，0到100，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * agentTime  Agent的当前时间，用于超速检测，因为限速值是可以分时间段设置的
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subtaskName' => 'subtask_name',
            'progress' => 'progress',
            'replicatesize' => 'replicatesize',
            'totalsize' => 'totalsize',
            'processTrace' => 'process_trace',
            'migrateSpeed' => 'migrate_speed',
            'compressRate' => 'compress_rate',
            'remainTime' => 'remain_time',
            'totalCpuUsage' => 'total_cpu_usage',
            'agentCpuUsage' => 'agent_cpu_usage',
            'totalMemUsage' => 'total_mem_usage',
            'agentMemUsage' => 'agent_mem_usage',
            'totalDiskIo' => 'total_disk_io',
            'agentDiskIo' => 'agent_disk_io',
            'agentTime' => 'agent_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subtaskName  当前上报进度的子任务名称，子任务名称包括： 创建虚拟机 CREATE_CLOUD_SERVER 配置安全通道 SSL_CONFIG 挂载代理镜像 ATTACH_AGENT_IMAGE 卸载载代理镜像 DETTACH_AGENT_IMAGE Linux分区格式化 FORMAT_DISK_LINUX Linux分区格式化(文件级级） FORMAT_DISK_LINUX_FILE Linux分区格式化(块级） FORMAT_DISK_LINUX_BLOCK Windows分区格式化 FORMAT_DISK_WINDOWS Linux文件级数据迁移 MIGRATE_LINUX_FILE, Linux块级数据迁移 MIGRATE_LINUX_BLOCK Windows块级数据迁移 MIGRATE_WINDOWS_BLOCK 克隆一个虚拟机 CLONE_VM Linux文件级数据同步 SYNC_LINUX_FILE Linux块级数据同步 SYNC_LINUX_BLOCK Windows块级数据同步 SYNC_WINDOWS_BLOCK Linux配置修改 CONFIGURE_LINUX Linux配置修改(块级）CONFIGURE_LINUX_BLOCK Linux配置修改（文件级） CONFIGURE_LINUX_FILE Windows配置修改 CONFIGURE_WINDOWS
    * progress  当前上报的子任务的最新百分比进度
    * replicatesize  当前任务已经复制的数据量大小（B）
    * totalsize  当前任务的总迁移数据大小
    * processTrace  迁移或同步时，具体的迁移详情
    * migrateSpeed  实施迁移速率，单位Mb/s
    * compressRate  实施文件压缩率
    * remainTime  剩余时间
    * totalCpuUsage  主机的CPU使用率，0到100，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，0到100，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * agentTime  Agent的当前时间，用于超速检测，因为限速值是可以分时间段设置的
    *
    * @var string[]
    */
    protected static $setters = [
            'subtaskName' => 'setSubtaskName',
            'progress' => 'setProgress',
            'replicatesize' => 'setReplicatesize',
            'totalsize' => 'setTotalsize',
            'processTrace' => 'setProcessTrace',
            'migrateSpeed' => 'setMigrateSpeed',
            'compressRate' => 'setCompressRate',
            'remainTime' => 'setRemainTime',
            'totalCpuUsage' => 'setTotalCpuUsage',
            'agentCpuUsage' => 'setAgentCpuUsage',
            'totalMemUsage' => 'setTotalMemUsage',
            'agentMemUsage' => 'setAgentMemUsage',
            'totalDiskIo' => 'setTotalDiskIo',
            'agentDiskIo' => 'setAgentDiskIo',
            'agentTime' => 'setAgentTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subtaskName  当前上报进度的子任务名称，子任务名称包括： 创建虚拟机 CREATE_CLOUD_SERVER 配置安全通道 SSL_CONFIG 挂载代理镜像 ATTACH_AGENT_IMAGE 卸载载代理镜像 DETTACH_AGENT_IMAGE Linux分区格式化 FORMAT_DISK_LINUX Linux分区格式化(文件级级） FORMAT_DISK_LINUX_FILE Linux分区格式化(块级） FORMAT_DISK_LINUX_BLOCK Windows分区格式化 FORMAT_DISK_WINDOWS Linux文件级数据迁移 MIGRATE_LINUX_FILE, Linux块级数据迁移 MIGRATE_LINUX_BLOCK Windows块级数据迁移 MIGRATE_WINDOWS_BLOCK 克隆一个虚拟机 CLONE_VM Linux文件级数据同步 SYNC_LINUX_FILE Linux块级数据同步 SYNC_LINUX_BLOCK Windows块级数据同步 SYNC_WINDOWS_BLOCK Linux配置修改 CONFIGURE_LINUX Linux配置修改(块级）CONFIGURE_LINUX_BLOCK Linux配置修改（文件级） CONFIGURE_LINUX_FILE Windows配置修改 CONFIGURE_WINDOWS
    * progress  当前上报的子任务的最新百分比进度
    * replicatesize  当前任务已经复制的数据量大小（B）
    * totalsize  当前任务的总迁移数据大小
    * processTrace  迁移或同步时，具体的迁移详情
    * migrateSpeed  实施迁移速率，单位Mb/s
    * compressRate  实施文件压缩率
    * remainTime  剩余时间
    * totalCpuUsage  主机的CPU使用率，0到100，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，0到100，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * agentTime  Agent的当前时间，用于超速检测，因为限速值是可以分时间段设置的
    *
    * @var string[]
    */
    protected static $getters = [
            'subtaskName' => 'getSubtaskName',
            'progress' => 'getProgress',
            'replicatesize' => 'getReplicatesize',
            'totalsize' => 'getTotalsize',
            'processTrace' => 'getProcessTrace',
            'migrateSpeed' => 'getMigrateSpeed',
            'compressRate' => 'getCompressRate',
            'remainTime' => 'getRemainTime',
            'totalCpuUsage' => 'getTotalCpuUsage',
            'agentCpuUsage' => 'getAgentCpuUsage',
            'totalMemUsage' => 'getTotalMemUsage',
            'agentMemUsage' => 'getAgentMemUsage',
            'totalDiskIo' => 'getTotalDiskIo',
            'agentDiskIo' => 'getAgentDiskIo',
            'agentTime' => 'getAgentTime'
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
    const SUBTASK_NAME_CREATE_CLOUD_SERVER = 'CREATE_CLOUD_SERVER';
    const SUBTASK_NAME_SSL_CONFIG = 'SSL_CONFIG';
    const SUBTASK_NAME_ATTACH_AGENT_IMAGE = 'ATTACH_AGENT_IMAGE';
    const SUBTASK_NAME_DETTACH_AGENT_IMAGE = 'DETTACH_AGENT_IMAGE';
    const SUBTASK_NAME_FORMAT_DISK_LINUX = 'FORMAT_DISK_LINUX';
    const SUBTASK_NAME_FORMAT_DISK_LINUX_FILE = 'FORMAT_DISK_LINUX_FILE';
    const SUBTASK_NAME_FORMAT_DISK_LINUX_BLOCK = 'FORMAT_DISK_LINUX_BLOCK';
    const SUBTASK_NAME_FORMAT_DISK_WINDOWS = 'FORMAT_DISK_WINDOWS';
    const SUBTASK_NAME_MIGRATE_LINUX_FILE = 'MIGRATE_LINUX_FILE';
    const SUBTASK_NAME_MIGRATE_LINUX_BLOCK = 'MIGRATE_LINUX_BLOCK';
    const SUBTASK_NAME_MIGRATE_WINDOWS_BLOCK = 'MIGRATE_WINDOWS_BLOCK';
    const SUBTASK_NAME_CLONE_VM = 'CLONE_VM';
    const SUBTASK_NAME_SYNC_LINUX_FILE = 'SYNC_LINUX_FILE';
    const SUBTASK_NAME_SYNC_LINUX_BLOCK = 'SYNC_LINUX_BLOCK';
    const SUBTASK_NAME_SYNC_WINDOWS_BLOCK = 'SYNC_WINDOWS_BLOCK';
    const SUBTASK_NAME_CONFIGURE_LINUX = 'CONFIGURE_LINUX';
    const SUBTASK_NAME_CONFIGURE_LINUX_BLOCK = 'CONFIGURE_LINUX_BLOCK';
    const SUBTASK_NAME_CONFIGURE_LINUX_FILE = 'CONFIGURE_LINUX_FILE';
    const SUBTASK_NAME_CONFIGURE_WINDOWS = 'CONFIGURE_WINDOWS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubtaskNameAllowableValues()
    {
        return [
            self::SUBTASK_NAME_CREATE_CLOUD_SERVER,
            self::SUBTASK_NAME_SSL_CONFIG,
            self::SUBTASK_NAME_ATTACH_AGENT_IMAGE,
            self::SUBTASK_NAME_DETTACH_AGENT_IMAGE,
            self::SUBTASK_NAME_FORMAT_DISK_LINUX,
            self::SUBTASK_NAME_FORMAT_DISK_LINUX_FILE,
            self::SUBTASK_NAME_FORMAT_DISK_LINUX_BLOCK,
            self::SUBTASK_NAME_FORMAT_DISK_WINDOWS,
            self::SUBTASK_NAME_MIGRATE_LINUX_FILE,
            self::SUBTASK_NAME_MIGRATE_LINUX_BLOCK,
            self::SUBTASK_NAME_MIGRATE_WINDOWS_BLOCK,
            self::SUBTASK_NAME_CLONE_VM,
            self::SUBTASK_NAME_SYNC_LINUX_FILE,
            self::SUBTASK_NAME_SYNC_LINUX_BLOCK,
            self::SUBTASK_NAME_SYNC_WINDOWS_BLOCK,
            self::SUBTASK_NAME_CONFIGURE_LINUX,
            self::SUBTASK_NAME_CONFIGURE_LINUX_BLOCK,
            self::SUBTASK_NAME_CONFIGURE_LINUX_FILE,
            self::SUBTASK_NAME_CONFIGURE_WINDOWS,
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
        $this->container['subtaskName'] = isset($data['subtaskName']) ? $data['subtaskName'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['replicatesize'] = isset($data['replicatesize']) ? $data['replicatesize'] : null;
        $this->container['totalsize'] = isset($data['totalsize']) ? $data['totalsize'] : null;
        $this->container['processTrace'] = isset($data['processTrace']) ? $data['processTrace'] : null;
        $this->container['migrateSpeed'] = isset($data['migrateSpeed']) ? $data['migrateSpeed'] : null;
        $this->container['compressRate'] = isset($data['compressRate']) ? $data['compressRate'] : null;
        $this->container['remainTime'] = isset($data['remainTime']) ? $data['remainTime'] : null;
        $this->container['totalCpuUsage'] = isset($data['totalCpuUsage']) ? $data['totalCpuUsage'] : null;
        $this->container['agentCpuUsage'] = isset($data['agentCpuUsage']) ? $data['agentCpuUsage'] : null;
        $this->container['totalMemUsage'] = isset($data['totalMemUsage']) ? $data['totalMemUsage'] : null;
        $this->container['agentMemUsage'] = isset($data['agentMemUsage']) ? $data['agentMemUsage'] : null;
        $this->container['totalDiskIo'] = isset($data['totalDiskIo']) ? $data['totalDiskIo'] : null;
        $this->container['agentDiskIo'] = isset($data['agentDiskIo']) ? $data['agentDiskIo'] : null;
        $this->container['agentTime'] = isset($data['agentTime']) ? $data['agentTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subtaskName'] === null) {
            $invalidProperties[] = "'subtaskName' can't be null";
        }
            $allowedValues = $this->getSubtaskNameAllowableValues();
                if (!is_null($this->container['subtaskName']) && !in_array($this->container['subtaskName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subtaskName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['subtaskName']) > 255)) {
                $invalidProperties[] = "invalid value for 'subtaskName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['subtaskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'subtaskName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
            if (($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
        if ($this->container['replicatesize'] === null) {
            $invalidProperties[] = "'replicatesize' can't be null";
        }
            if (($this->container['replicatesize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'replicatesize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['replicatesize'] < 0)) {
                $invalidProperties[] = "invalid value for 'replicatesize', must be bigger than or equal to 0.";
            }
        if ($this->container['totalsize'] === null) {
            $invalidProperties[] = "'totalsize' can't be null";
        }
            if (($this->container['totalsize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalsize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['totalsize'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalsize', must be bigger than or equal to 0.";
            }
        if ($this->container['processTrace'] === null) {
            $invalidProperties[] = "'processTrace' can't be null";
        }
            if ((mb_strlen($this->container['processTrace']) > 2048)) {
                $invalidProperties[] = "invalid value for 'processTrace', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['processTrace']) < 0)) {
                $invalidProperties[] = "invalid value for 'processTrace', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['remainTime']) && ($this->container['remainTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'remainTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['remainTime']) && ($this->container['remainTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'remainTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalCpuUsage']) && ($this->container['totalCpuUsage'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'totalCpuUsage', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['totalCpuUsage']) && ($this->container['totalCpuUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCpuUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentCpuUsage']) && ($this->container['agentCpuUsage'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'agentCpuUsage', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['agentCpuUsage']) && ($this->container['agentCpuUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentCpuUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalMemUsage']) && ($this->container['totalMemUsage'] > 1048576)) {
                $invalidProperties[] = "invalid value for 'totalMemUsage', must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['totalMemUsage']) && ($this->container['totalMemUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalMemUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentMemUsage']) && ($this->container['agentMemUsage'] > 1048576)) {
                $invalidProperties[] = "invalid value for 'agentMemUsage', must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['agentMemUsage']) && ($this->container['agentMemUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentMemUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalDiskIo']) && ($this->container['totalDiskIo'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'totalDiskIo', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['totalDiskIo']) && ($this->container['totalDiskIo'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalDiskIo', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentDiskIo']) && ($this->container['agentDiskIo'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'agentDiskIo', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['agentDiskIo']) && ($this->container['agentDiskIo'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentDiskIo', must be bigger than or equal to 0.";
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
    * Gets subtaskName
    *  当前上报进度的子任务名称，子任务名称包括： 创建虚拟机 CREATE_CLOUD_SERVER 配置安全通道 SSL_CONFIG 挂载代理镜像 ATTACH_AGENT_IMAGE 卸载载代理镜像 DETTACH_AGENT_IMAGE Linux分区格式化 FORMAT_DISK_LINUX Linux分区格式化(文件级级） FORMAT_DISK_LINUX_FILE Linux分区格式化(块级） FORMAT_DISK_LINUX_BLOCK Windows分区格式化 FORMAT_DISK_WINDOWS Linux文件级数据迁移 MIGRATE_LINUX_FILE, Linux块级数据迁移 MIGRATE_LINUX_BLOCK Windows块级数据迁移 MIGRATE_WINDOWS_BLOCK 克隆一个虚拟机 CLONE_VM Linux文件级数据同步 SYNC_LINUX_FILE Linux块级数据同步 SYNC_LINUX_BLOCK Windows块级数据同步 SYNC_WINDOWS_BLOCK Linux配置修改 CONFIGURE_LINUX Linux配置修改(块级）CONFIGURE_LINUX_BLOCK Linux配置修改（文件级） CONFIGURE_LINUX_FILE Windows配置修改 CONFIGURE_WINDOWS
    *
    * @return string
    */
    public function getSubtaskName()
    {
        return $this->container['subtaskName'];
    }

    /**
    * Sets subtaskName
    *
    * @param string $subtaskName 当前上报进度的子任务名称，子任务名称包括： 创建虚拟机 CREATE_CLOUD_SERVER 配置安全通道 SSL_CONFIG 挂载代理镜像 ATTACH_AGENT_IMAGE 卸载载代理镜像 DETTACH_AGENT_IMAGE Linux分区格式化 FORMAT_DISK_LINUX Linux分区格式化(文件级级） FORMAT_DISK_LINUX_FILE Linux分区格式化(块级） FORMAT_DISK_LINUX_BLOCK Windows分区格式化 FORMAT_DISK_WINDOWS Linux文件级数据迁移 MIGRATE_LINUX_FILE, Linux块级数据迁移 MIGRATE_LINUX_BLOCK Windows块级数据迁移 MIGRATE_WINDOWS_BLOCK 克隆一个虚拟机 CLONE_VM Linux文件级数据同步 SYNC_LINUX_FILE Linux块级数据同步 SYNC_LINUX_BLOCK Windows块级数据同步 SYNC_WINDOWS_BLOCK Linux配置修改 CONFIGURE_LINUX Linux配置修改(块级）CONFIGURE_LINUX_BLOCK Linux配置修改（文件级） CONFIGURE_LINUX_FILE Windows配置修改 CONFIGURE_WINDOWS
    *
    * @return $this
    */
    public function setSubtaskName($subtaskName)
    {
        $this->container['subtaskName'] = $subtaskName;
        return $this;
    }

    /**
    * Gets progress
    *  当前上报的子任务的最新百分比进度
    *
    * @return int
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int $progress 当前上报的子任务的最新百分比进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets replicatesize
    *  当前任务已经复制的数据量大小（B）
    *
    * @return int
    */
    public function getReplicatesize()
    {
        return $this->container['replicatesize'];
    }

    /**
    * Sets replicatesize
    *
    * @param int $replicatesize 当前任务已经复制的数据量大小（B）
    *
    * @return $this
    */
    public function setReplicatesize($replicatesize)
    {
        $this->container['replicatesize'] = $replicatesize;
        return $this;
    }

    /**
    * Gets totalsize
    *  当前任务的总迁移数据大小
    *
    * @return int
    */
    public function getTotalsize()
    {
        return $this->container['totalsize'];
    }

    /**
    * Sets totalsize
    *
    * @param int $totalsize 当前任务的总迁移数据大小
    *
    * @return $this
    */
    public function setTotalsize($totalsize)
    {
        $this->container['totalsize'] = $totalsize;
        return $this;
    }

    /**
    * Gets processTrace
    *  迁移或同步时，具体的迁移详情
    *
    * @return string
    */
    public function getProcessTrace()
    {
        return $this->container['processTrace'];
    }

    /**
    * Sets processTrace
    *
    * @param string $processTrace 迁移或同步时，具体的迁移详情
    *
    * @return $this
    */
    public function setProcessTrace($processTrace)
    {
        $this->container['processTrace'] = $processTrace;
        return $this;
    }

    /**
    * Gets migrateSpeed
    *  实施迁移速率，单位Mb/s
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
    * @param double|null $migrateSpeed 实施迁移速率，单位Mb/s
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
    *  实施文件压缩率
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
    * @param double|null $compressRate 实施文件压缩率
    *
    * @return $this
    */
    public function setCompressRate($compressRate)
    {
        $this->container['compressRate'] = $compressRate;
        return $this;
    }

    /**
    * Gets remainTime
    *  剩余时间
    *
    * @return int|null
    */
    public function getRemainTime()
    {
        return $this->container['remainTime'];
    }

    /**
    * Sets remainTime
    *
    * @param int|null $remainTime 剩余时间
    *
    * @return $this
    */
    public function setRemainTime($remainTime)
    {
        $this->container['remainTime'] = $remainTime;
        return $this;
    }

    /**
    * Gets totalCpuUsage
    *  主机的CPU使用率，0到100，单位是百分比
    *
    * @return double|null
    */
    public function getTotalCpuUsage()
    {
        return $this->container['totalCpuUsage'];
    }

    /**
    * Sets totalCpuUsage
    *
    * @param double|null $totalCpuUsage 主机的CPU使用率，0到100，单位是百分比
    *
    * @return $this
    */
    public function setTotalCpuUsage($totalCpuUsage)
    {
        $this->container['totalCpuUsage'] = $totalCpuUsage;
        return $this;
    }

    /**
    * Gets agentCpuUsage
    *  Agent的CPU使用率，0到100，单位是百分比
    *
    * @return double|null
    */
    public function getAgentCpuUsage()
    {
        return $this->container['agentCpuUsage'];
    }

    /**
    * Sets agentCpuUsage
    *
    * @param double|null $agentCpuUsage Agent的CPU使用率，0到100，单位是百分比
    *
    * @return $this
    */
    public function setAgentCpuUsage($agentCpuUsage)
    {
        $this->container['agentCpuUsage'] = $agentCpuUsage;
        return $this;
    }

    /**
    * Gets totalMemUsage
    *  主机的内存使用值，单位是MB
    *
    * @return double|null
    */
    public function getTotalMemUsage()
    {
        return $this->container['totalMemUsage'];
    }

    /**
    * Sets totalMemUsage
    *
    * @param double|null $totalMemUsage 主机的内存使用值，单位是MB
    *
    * @return $this
    */
    public function setTotalMemUsage($totalMemUsage)
    {
        $this->container['totalMemUsage'] = $totalMemUsage;
        return $this;
    }

    /**
    * Gets agentMemUsage
    *  Agent的内存使用值，单位是MB
    *
    * @return double|null
    */
    public function getAgentMemUsage()
    {
        return $this->container['agentMemUsage'];
    }

    /**
    * Sets agentMemUsage
    *
    * @param double|null $agentMemUsage Agent的内存使用值，单位是MB
    *
    * @return $this
    */
    public function setAgentMemUsage($agentMemUsage)
    {
        $this->container['agentMemUsage'] = $agentMemUsage;
        return $this;
    }

    /**
    * Gets totalDiskIo
    *  主机的磁盘I/O值，单位是MB/s
    *
    * @return double|null
    */
    public function getTotalDiskIo()
    {
        return $this->container['totalDiskIo'];
    }

    /**
    * Sets totalDiskIo
    *
    * @param double|null $totalDiskIo 主机的磁盘I/O值，单位是MB/s
    *
    * @return $this
    */
    public function setTotalDiskIo($totalDiskIo)
    {
        $this->container['totalDiskIo'] = $totalDiskIo;
        return $this;
    }

    /**
    * Gets agentDiskIo
    *  Agent的磁盘I/O值，单位是MB/s
    *
    * @return double|null
    */
    public function getAgentDiskIo()
    {
        return $this->container['agentDiskIo'];
    }

    /**
    * Sets agentDiskIo
    *
    * @param double|null $agentDiskIo Agent的磁盘I/O值，单位是MB/s
    *
    * @return $this
    */
    public function setAgentDiskIo($agentDiskIo)
    {
        $this->container['agentDiskIo'] = $agentDiskIo;
        return $this;
    }

    /**
    * Gets agentTime
    *  Agent的当前时间，用于超速检测，因为限速值是可以分时间段设置的
    *
    * @return string|null
    */
    public function getAgentTime()
    {
        return $this->container['agentTime'];
    }

    /**
    * Sets agentTime
    *
    * @param string|null $agentTime Agent的当前时间，用于超速检测，因为限速值是可以分时间段设置的
    *
    * @return $this
    */
    public function setAgentTime($agentTime)
    {
        $this->container['agentTime'] = $agentTime;
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

