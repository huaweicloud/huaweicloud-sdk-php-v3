<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventProcessResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventProcessResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-256位
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * processUid  **参数解释**： 进程用户ID **取值范围**： 最小值0，最大值2147483647
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 字符长度1-256位
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 字符长度1-256位
    * processFilename  **参数解释**： 进程文件名 **取值范围**： 字符长度1-256位
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * processGid  **参数解释**： 进程组ID **取值范围**： 最小值0，最大值2147483647
    * processEgid  **参数解释**： 进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * processEuid  **参数解释**： 进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessPath  **参数解释**： 祖父进程文件路径 **取值范围**： 字符长度1-256位
    * ancestorProcessPid  **参数解释**： 祖父进程ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessCmdline  **参数解释**： 祖父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessName  **参数解释**： 父进程名称 **取值范围**： 字符长度1-256位
    * parentProcessPath  **参数解释**： 父进程文件路径 **取值范围**： 字符长度1-256位
    * parentProcessPid  **参数解释**： 父进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessUid  **参数解释**： 父进程用户ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessCmdline  **参数解释**： 父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessFilename  **参数解释**： 父进程文件名 **取值范围**： 字符长度1-256位
    * parentProcessStartTime  **参数解释**： 父进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * parentProcessGid  **参数解释**： 父进程组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEgid  **参数解释**： 父进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEuid  **参数解释**： 父进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * childProcessName  **参数解释**： 子进程名称 **取值范围**： 字符长度1-256位
    * childProcessPath  **参数解释**： 子进程文件路径 **取值范围**： 字符长度1-256位
    * childProcessPid  **参数解释**： 子进程id **取值范围**： 最小值0，最大值2147483647
    * childProcessUid  **参数解释**： 子进程用户id **取值范围**： 最小值0，最大值2147483647
    * childProcessCmdline  **参数解释**： 子进程文件命令行 **取值范围**： 字符长度1-256位
    * childProcessFilename  **参数解释**： 子进程文件名 **取值范围**： 字符长度1-256位
    * childProcessStartTime  **参数解释**： 子进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * childProcessGid  **参数解释**： 子进程组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEgid  **参数解释**： 子进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEuid  **参数解释**： 子进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * virtCmd  **参数解释**： 虚拟化命令 **取值范围**： 字符长度1-256位
    * virtProcessName  **参数解释**： 虚拟化进程名称 **取值范围**： 字符长度1-256位
    * escapeMode  **参数解释**： 逃逸方式 **取值范围**： 字符长度1-256位
    * escapeCmd  **参数解释**： 逃逸后执行的命令 **取值范围**： 字符长度1-256位
    * processHash  **参数解释**： 进程启动文件hash **取值范围**： 字符长度1-256位
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 字符长度1-256位
    * parentProcessFileHash  **参数解释**： 父进程文件hash **取值范围**： 字符长度1-256位
    * block  是否阻断成功，1阻断成功 0阻断失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processName' => 'string',
            'processPath' => 'string',
            'processPid' => 'int',
            'processUid' => 'int',
            'processUsername' => 'string',
            'processCmdline' => 'string',
            'processFilename' => 'string',
            'processStartTime' => 'int',
            'processGid' => 'int',
            'processEgid' => 'int',
            'processEuid' => 'int',
            'ancestorProcessPath' => 'string',
            'ancestorProcessPid' => 'int',
            'ancestorProcessCmdline' => 'string',
            'parentProcessName' => 'string',
            'parentProcessPath' => 'string',
            'parentProcessPid' => 'int',
            'parentProcessUid' => 'int',
            'parentProcessCmdline' => 'string',
            'parentProcessFilename' => 'string',
            'parentProcessStartTime' => 'int',
            'parentProcessGid' => 'int',
            'parentProcessEgid' => 'int',
            'parentProcessEuid' => 'int',
            'childProcessName' => 'string',
            'childProcessPath' => 'string',
            'childProcessPid' => 'int',
            'childProcessUid' => 'int',
            'childProcessCmdline' => 'string',
            'childProcessFilename' => 'string',
            'childProcessStartTime' => 'int',
            'childProcessGid' => 'int',
            'childProcessEgid' => 'int',
            'childProcessEuid' => 'int',
            'virtCmd' => 'string',
            'virtProcessName' => 'string',
            'escapeMode' => 'string',
            'escapeCmd' => 'string',
            'processHash' => 'string',
            'processFileHash' => 'string',
            'parentProcessFileHash' => 'string',
            'block' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-256位
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * processUid  **参数解释**： 进程用户ID **取值范围**： 最小值0，最大值2147483647
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 字符长度1-256位
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 字符长度1-256位
    * processFilename  **参数解释**： 进程文件名 **取值范围**： 字符长度1-256位
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * processGid  **参数解释**： 进程组ID **取值范围**： 最小值0，最大值2147483647
    * processEgid  **参数解释**： 进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * processEuid  **参数解释**： 进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessPath  **参数解释**： 祖父进程文件路径 **取值范围**： 字符长度1-256位
    * ancestorProcessPid  **参数解释**： 祖父进程ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessCmdline  **参数解释**： 祖父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessName  **参数解释**： 父进程名称 **取值范围**： 字符长度1-256位
    * parentProcessPath  **参数解释**： 父进程文件路径 **取值范围**： 字符长度1-256位
    * parentProcessPid  **参数解释**： 父进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessUid  **参数解释**： 父进程用户ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessCmdline  **参数解释**： 父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessFilename  **参数解释**： 父进程文件名 **取值范围**： 字符长度1-256位
    * parentProcessStartTime  **参数解释**： 父进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * parentProcessGid  **参数解释**： 父进程组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEgid  **参数解释**： 父进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEuid  **参数解释**： 父进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * childProcessName  **参数解释**： 子进程名称 **取值范围**： 字符长度1-256位
    * childProcessPath  **参数解释**： 子进程文件路径 **取值范围**： 字符长度1-256位
    * childProcessPid  **参数解释**： 子进程id **取值范围**： 最小值0，最大值2147483647
    * childProcessUid  **参数解释**： 子进程用户id **取值范围**： 最小值0，最大值2147483647
    * childProcessCmdline  **参数解释**： 子进程文件命令行 **取值范围**： 字符长度1-256位
    * childProcessFilename  **参数解释**： 子进程文件名 **取值范围**： 字符长度1-256位
    * childProcessStartTime  **参数解释**： 子进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * childProcessGid  **参数解释**： 子进程组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEgid  **参数解释**： 子进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEuid  **参数解释**： 子进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * virtCmd  **参数解释**： 虚拟化命令 **取值范围**： 字符长度1-256位
    * virtProcessName  **参数解释**： 虚拟化进程名称 **取值范围**： 字符长度1-256位
    * escapeMode  **参数解释**： 逃逸方式 **取值范围**： 字符长度1-256位
    * escapeCmd  **参数解释**： 逃逸后执行的命令 **取值范围**： 字符长度1-256位
    * processHash  **参数解释**： 进程启动文件hash **取值范围**： 字符长度1-256位
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 字符长度1-256位
    * parentProcessFileHash  **参数解释**： 父进程文件hash **取值范围**： 字符长度1-256位
    * block  是否阻断成功，1阻断成功 0阻断失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processName' => null,
        'processPath' => null,
        'processPid' => 'int32',
        'processUid' => 'int32',
        'processUsername' => null,
        'processCmdline' => null,
        'processFilename' => null,
        'processStartTime' => 'int64',
        'processGid' => 'int32',
        'processEgid' => 'int32',
        'processEuid' => 'int32',
        'ancestorProcessPath' => null,
        'ancestorProcessPid' => 'int32',
        'ancestorProcessCmdline' => null,
        'parentProcessName' => null,
        'parentProcessPath' => null,
        'parentProcessPid' => 'int32',
        'parentProcessUid' => 'int32',
        'parentProcessCmdline' => null,
        'parentProcessFilename' => null,
        'parentProcessStartTime' => 'int64',
        'parentProcessGid' => 'int32',
        'parentProcessEgid' => 'int32',
        'parentProcessEuid' => 'int32',
        'childProcessName' => null,
        'childProcessPath' => null,
        'childProcessPid' => 'int32',
        'childProcessUid' => 'int32',
        'childProcessCmdline' => null,
        'childProcessFilename' => null,
        'childProcessStartTime' => 'int64',
        'childProcessGid' => 'int32',
        'childProcessEgid' => 'int32',
        'childProcessEuid' => 'int32',
        'virtCmd' => null,
        'virtProcessName' => null,
        'escapeMode' => null,
        'escapeCmd' => null,
        'processHash' => null,
        'processFileHash' => null,
        'parentProcessFileHash' => null,
        'block' => 'int32'
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
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-256位
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * processUid  **参数解释**： 进程用户ID **取值范围**： 最小值0，最大值2147483647
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 字符长度1-256位
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 字符长度1-256位
    * processFilename  **参数解释**： 进程文件名 **取值范围**： 字符长度1-256位
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * processGid  **参数解释**： 进程组ID **取值范围**： 最小值0，最大值2147483647
    * processEgid  **参数解释**： 进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * processEuid  **参数解释**： 进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessPath  **参数解释**： 祖父进程文件路径 **取值范围**： 字符长度1-256位
    * ancestorProcessPid  **参数解释**： 祖父进程ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessCmdline  **参数解释**： 祖父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessName  **参数解释**： 父进程名称 **取值范围**： 字符长度1-256位
    * parentProcessPath  **参数解释**： 父进程文件路径 **取值范围**： 字符长度1-256位
    * parentProcessPid  **参数解释**： 父进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessUid  **参数解释**： 父进程用户ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessCmdline  **参数解释**： 父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessFilename  **参数解释**： 父进程文件名 **取值范围**： 字符长度1-256位
    * parentProcessStartTime  **参数解释**： 父进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * parentProcessGid  **参数解释**： 父进程组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEgid  **参数解释**： 父进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEuid  **参数解释**： 父进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * childProcessName  **参数解释**： 子进程名称 **取值范围**： 字符长度1-256位
    * childProcessPath  **参数解释**： 子进程文件路径 **取值范围**： 字符长度1-256位
    * childProcessPid  **参数解释**： 子进程id **取值范围**： 最小值0，最大值2147483647
    * childProcessUid  **参数解释**： 子进程用户id **取值范围**： 最小值0，最大值2147483647
    * childProcessCmdline  **参数解释**： 子进程文件命令行 **取值范围**： 字符长度1-256位
    * childProcessFilename  **参数解释**： 子进程文件名 **取值范围**： 字符长度1-256位
    * childProcessStartTime  **参数解释**： 子进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * childProcessGid  **参数解释**： 子进程组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEgid  **参数解释**： 子进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEuid  **参数解释**： 子进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * virtCmd  **参数解释**： 虚拟化命令 **取值范围**： 字符长度1-256位
    * virtProcessName  **参数解释**： 虚拟化进程名称 **取值范围**： 字符长度1-256位
    * escapeMode  **参数解释**： 逃逸方式 **取值范围**： 字符长度1-256位
    * escapeCmd  **参数解释**： 逃逸后执行的命令 **取值范围**： 字符长度1-256位
    * processHash  **参数解释**： 进程启动文件hash **取值范围**： 字符长度1-256位
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 字符长度1-256位
    * parentProcessFileHash  **参数解释**： 父进程文件hash **取值范围**： 字符长度1-256位
    * block  是否阻断成功，1阻断成功 0阻断失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processName' => 'process_name',
            'processPath' => 'process_path',
            'processPid' => 'process_pid',
            'processUid' => 'process_uid',
            'processUsername' => 'process_username',
            'processCmdline' => 'process_cmdline',
            'processFilename' => 'process_filename',
            'processStartTime' => 'process_start_time',
            'processGid' => 'process_gid',
            'processEgid' => 'process_egid',
            'processEuid' => 'process_euid',
            'ancestorProcessPath' => 'ancestor_process_path',
            'ancestorProcessPid' => 'ancestor_process_pid',
            'ancestorProcessCmdline' => 'ancestor_process_cmdline',
            'parentProcessName' => 'parent_process_name',
            'parentProcessPath' => 'parent_process_path',
            'parentProcessPid' => 'parent_process_pid',
            'parentProcessUid' => 'parent_process_uid',
            'parentProcessCmdline' => 'parent_process_cmdline',
            'parentProcessFilename' => 'parent_process_filename',
            'parentProcessStartTime' => 'parent_process_start_time',
            'parentProcessGid' => 'parent_process_gid',
            'parentProcessEgid' => 'parent_process_egid',
            'parentProcessEuid' => 'parent_process_euid',
            'childProcessName' => 'child_process_name',
            'childProcessPath' => 'child_process_path',
            'childProcessPid' => 'child_process_pid',
            'childProcessUid' => 'child_process_uid',
            'childProcessCmdline' => 'child_process_cmdline',
            'childProcessFilename' => 'child_process_filename',
            'childProcessStartTime' => 'child_process_start_time',
            'childProcessGid' => 'child_process_gid',
            'childProcessEgid' => 'child_process_egid',
            'childProcessEuid' => 'child_process_euid',
            'virtCmd' => 'virt_cmd',
            'virtProcessName' => 'virt_process_name',
            'escapeMode' => 'escape_mode',
            'escapeCmd' => 'escape_cmd',
            'processHash' => 'process_hash',
            'processFileHash' => 'process_file_hash',
            'parentProcessFileHash' => 'parent_process_file_hash',
            'block' => 'block'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-256位
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * processUid  **参数解释**： 进程用户ID **取值范围**： 最小值0，最大值2147483647
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 字符长度1-256位
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 字符长度1-256位
    * processFilename  **参数解释**： 进程文件名 **取值范围**： 字符长度1-256位
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * processGid  **参数解释**： 进程组ID **取值范围**： 最小值0，最大值2147483647
    * processEgid  **参数解释**： 进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * processEuid  **参数解释**： 进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessPath  **参数解释**： 祖父进程文件路径 **取值范围**： 字符长度1-256位
    * ancestorProcessPid  **参数解释**： 祖父进程ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessCmdline  **参数解释**： 祖父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessName  **参数解释**： 父进程名称 **取值范围**： 字符长度1-256位
    * parentProcessPath  **参数解释**： 父进程文件路径 **取值范围**： 字符长度1-256位
    * parentProcessPid  **参数解释**： 父进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessUid  **参数解释**： 父进程用户ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessCmdline  **参数解释**： 父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessFilename  **参数解释**： 父进程文件名 **取值范围**： 字符长度1-256位
    * parentProcessStartTime  **参数解释**： 父进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * parentProcessGid  **参数解释**： 父进程组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEgid  **参数解释**： 父进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEuid  **参数解释**： 父进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * childProcessName  **参数解释**： 子进程名称 **取值范围**： 字符长度1-256位
    * childProcessPath  **参数解释**： 子进程文件路径 **取值范围**： 字符长度1-256位
    * childProcessPid  **参数解释**： 子进程id **取值范围**： 最小值0，最大值2147483647
    * childProcessUid  **参数解释**： 子进程用户id **取值范围**： 最小值0，最大值2147483647
    * childProcessCmdline  **参数解释**： 子进程文件命令行 **取值范围**： 字符长度1-256位
    * childProcessFilename  **参数解释**： 子进程文件名 **取值范围**： 字符长度1-256位
    * childProcessStartTime  **参数解释**： 子进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * childProcessGid  **参数解释**： 子进程组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEgid  **参数解释**： 子进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEuid  **参数解释**： 子进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * virtCmd  **参数解释**： 虚拟化命令 **取值范围**： 字符长度1-256位
    * virtProcessName  **参数解释**： 虚拟化进程名称 **取值范围**： 字符长度1-256位
    * escapeMode  **参数解释**： 逃逸方式 **取值范围**： 字符长度1-256位
    * escapeCmd  **参数解释**： 逃逸后执行的命令 **取值范围**： 字符长度1-256位
    * processHash  **参数解释**： 进程启动文件hash **取值范围**： 字符长度1-256位
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 字符长度1-256位
    * parentProcessFileHash  **参数解释**： 父进程文件hash **取值范围**： 字符长度1-256位
    * block  是否阻断成功，1阻断成功 0阻断失败
    *
    * @var string[]
    */
    protected static $setters = [
            'processName' => 'setProcessName',
            'processPath' => 'setProcessPath',
            'processPid' => 'setProcessPid',
            'processUid' => 'setProcessUid',
            'processUsername' => 'setProcessUsername',
            'processCmdline' => 'setProcessCmdline',
            'processFilename' => 'setProcessFilename',
            'processStartTime' => 'setProcessStartTime',
            'processGid' => 'setProcessGid',
            'processEgid' => 'setProcessEgid',
            'processEuid' => 'setProcessEuid',
            'ancestorProcessPath' => 'setAncestorProcessPath',
            'ancestorProcessPid' => 'setAncestorProcessPid',
            'ancestorProcessCmdline' => 'setAncestorProcessCmdline',
            'parentProcessName' => 'setParentProcessName',
            'parentProcessPath' => 'setParentProcessPath',
            'parentProcessPid' => 'setParentProcessPid',
            'parentProcessUid' => 'setParentProcessUid',
            'parentProcessCmdline' => 'setParentProcessCmdline',
            'parentProcessFilename' => 'setParentProcessFilename',
            'parentProcessStartTime' => 'setParentProcessStartTime',
            'parentProcessGid' => 'setParentProcessGid',
            'parentProcessEgid' => 'setParentProcessEgid',
            'parentProcessEuid' => 'setParentProcessEuid',
            'childProcessName' => 'setChildProcessName',
            'childProcessPath' => 'setChildProcessPath',
            'childProcessPid' => 'setChildProcessPid',
            'childProcessUid' => 'setChildProcessUid',
            'childProcessCmdline' => 'setChildProcessCmdline',
            'childProcessFilename' => 'setChildProcessFilename',
            'childProcessStartTime' => 'setChildProcessStartTime',
            'childProcessGid' => 'setChildProcessGid',
            'childProcessEgid' => 'setChildProcessEgid',
            'childProcessEuid' => 'setChildProcessEuid',
            'virtCmd' => 'setVirtCmd',
            'virtProcessName' => 'setVirtProcessName',
            'escapeMode' => 'setEscapeMode',
            'escapeCmd' => 'setEscapeCmd',
            'processHash' => 'setProcessHash',
            'processFileHash' => 'setProcessFileHash',
            'parentProcessFileHash' => 'setParentProcessFileHash',
            'block' => 'setBlock'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-256位
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * processUid  **参数解释**： 进程用户ID **取值范围**： 最小值0，最大值2147483647
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 字符长度1-256位
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 字符长度1-256位
    * processFilename  **参数解释**： 进程文件名 **取值范围**： 字符长度1-256位
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * processGid  **参数解释**： 进程组ID **取值范围**： 最小值0，最大值2147483647
    * processEgid  **参数解释**： 进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * processEuid  **参数解释**： 进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessPath  **参数解释**： 祖父进程文件路径 **取值范围**： 字符长度1-256位
    * ancestorProcessPid  **参数解释**： 祖父进程ID **取值范围**： 最小值0，最大值2147483647
    * ancestorProcessCmdline  **参数解释**： 祖父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessName  **参数解释**： 父进程名称 **取值范围**： 字符长度1-256位
    * parentProcessPath  **参数解释**： 父进程文件路径 **取值范围**： 字符长度1-256位
    * parentProcessPid  **参数解释**： 父进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessUid  **参数解释**： 父进程用户ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessCmdline  **参数解释**： 父进程文件命令行 **取值范围**： 字符长度1-512位
    * parentProcessFilename  **参数解释**： 父进程文件名 **取值范围**： 字符长度1-256位
    * parentProcessStartTime  **参数解释**： 父进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * parentProcessGid  **参数解释**： 父进程组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEgid  **参数解释**： 父进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessEuid  **参数解释**： 父进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * childProcessName  **参数解释**： 子进程名称 **取值范围**： 字符长度1-256位
    * childProcessPath  **参数解释**： 子进程文件路径 **取值范围**： 字符长度1-256位
    * childProcessPid  **参数解释**： 子进程id **取值范围**： 最小值0，最大值2147483647
    * childProcessUid  **参数解释**： 子进程用户id **取值范围**： 最小值0，最大值2147483647
    * childProcessCmdline  **参数解释**： 子进程文件命令行 **取值范围**： 字符长度1-256位
    * childProcessFilename  **参数解释**： 子进程文件名 **取值范围**： 字符长度1-256位
    * childProcessStartTime  **参数解释**： 子进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    * childProcessGid  **参数解释**： 子进程组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEgid  **参数解释**： 子进程有效组ID **取值范围**： 最小值0，最大值2147483647
    * childProcessEuid  **参数解释**： 子进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    * virtCmd  **参数解释**： 虚拟化命令 **取值范围**： 字符长度1-256位
    * virtProcessName  **参数解释**： 虚拟化进程名称 **取值范围**： 字符长度1-256位
    * escapeMode  **参数解释**： 逃逸方式 **取值范围**： 字符长度1-256位
    * escapeCmd  **参数解释**： 逃逸后执行的命令 **取值范围**： 字符长度1-256位
    * processHash  **参数解释**： 进程启动文件hash **取值范围**： 字符长度1-256位
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 字符长度1-256位
    * parentProcessFileHash  **参数解释**： 父进程文件hash **取值范围**： 字符长度1-256位
    * block  是否阻断成功，1阻断成功 0阻断失败
    *
    * @var string[]
    */
    protected static $getters = [
            'processName' => 'getProcessName',
            'processPath' => 'getProcessPath',
            'processPid' => 'getProcessPid',
            'processUid' => 'getProcessUid',
            'processUsername' => 'getProcessUsername',
            'processCmdline' => 'getProcessCmdline',
            'processFilename' => 'getProcessFilename',
            'processStartTime' => 'getProcessStartTime',
            'processGid' => 'getProcessGid',
            'processEgid' => 'getProcessEgid',
            'processEuid' => 'getProcessEuid',
            'ancestorProcessPath' => 'getAncestorProcessPath',
            'ancestorProcessPid' => 'getAncestorProcessPid',
            'ancestorProcessCmdline' => 'getAncestorProcessCmdline',
            'parentProcessName' => 'getParentProcessName',
            'parentProcessPath' => 'getParentProcessPath',
            'parentProcessPid' => 'getParentProcessPid',
            'parentProcessUid' => 'getParentProcessUid',
            'parentProcessCmdline' => 'getParentProcessCmdline',
            'parentProcessFilename' => 'getParentProcessFilename',
            'parentProcessStartTime' => 'getParentProcessStartTime',
            'parentProcessGid' => 'getParentProcessGid',
            'parentProcessEgid' => 'getParentProcessEgid',
            'parentProcessEuid' => 'getParentProcessEuid',
            'childProcessName' => 'getChildProcessName',
            'childProcessPath' => 'getChildProcessPath',
            'childProcessPid' => 'getChildProcessPid',
            'childProcessUid' => 'getChildProcessUid',
            'childProcessCmdline' => 'getChildProcessCmdline',
            'childProcessFilename' => 'getChildProcessFilename',
            'childProcessStartTime' => 'getChildProcessStartTime',
            'childProcessGid' => 'getChildProcessGid',
            'childProcessEgid' => 'getChildProcessEgid',
            'childProcessEuid' => 'getChildProcessEuid',
            'virtCmd' => 'getVirtCmd',
            'virtProcessName' => 'getVirtProcessName',
            'escapeMode' => 'getEscapeMode',
            'escapeCmd' => 'getEscapeCmd',
            'processHash' => 'getProcessHash',
            'processFileHash' => 'getProcessFileHash',
            'parentProcessFileHash' => 'getParentProcessFileHash',
            'block' => 'getBlock'
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
        $this->container['processName'] = isset($data['processName']) ? $data['processName'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['processPid'] = isset($data['processPid']) ? $data['processPid'] : null;
        $this->container['processUid'] = isset($data['processUid']) ? $data['processUid'] : null;
        $this->container['processUsername'] = isset($data['processUsername']) ? $data['processUsername'] : null;
        $this->container['processCmdline'] = isset($data['processCmdline']) ? $data['processCmdline'] : null;
        $this->container['processFilename'] = isset($data['processFilename']) ? $data['processFilename'] : null;
        $this->container['processStartTime'] = isset($data['processStartTime']) ? $data['processStartTime'] : null;
        $this->container['processGid'] = isset($data['processGid']) ? $data['processGid'] : null;
        $this->container['processEgid'] = isset($data['processEgid']) ? $data['processEgid'] : null;
        $this->container['processEuid'] = isset($data['processEuid']) ? $data['processEuid'] : null;
        $this->container['ancestorProcessPath'] = isset($data['ancestorProcessPath']) ? $data['ancestorProcessPath'] : null;
        $this->container['ancestorProcessPid'] = isset($data['ancestorProcessPid']) ? $data['ancestorProcessPid'] : null;
        $this->container['ancestorProcessCmdline'] = isset($data['ancestorProcessCmdline']) ? $data['ancestorProcessCmdline'] : null;
        $this->container['parentProcessName'] = isset($data['parentProcessName']) ? $data['parentProcessName'] : null;
        $this->container['parentProcessPath'] = isset($data['parentProcessPath']) ? $data['parentProcessPath'] : null;
        $this->container['parentProcessPid'] = isset($data['parentProcessPid']) ? $data['parentProcessPid'] : null;
        $this->container['parentProcessUid'] = isset($data['parentProcessUid']) ? $data['parentProcessUid'] : null;
        $this->container['parentProcessCmdline'] = isset($data['parentProcessCmdline']) ? $data['parentProcessCmdline'] : null;
        $this->container['parentProcessFilename'] = isset($data['parentProcessFilename']) ? $data['parentProcessFilename'] : null;
        $this->container['parentProcessStartTime'] = isset($data['parentProcessStartTime']) ? $data['parentProcessStartTime'] : null;
        $this->container['parentProcessGid'] = isset($data['parentProcessGid']) ? $data['parentProcessGid'] : null;
        $this->container['parentProcessEgid'] = isset($data['parentProcessEgid']) ? $data['parentProcessEgid'] : null;
        $this->container['parentProcessEuid'] = isset($data['parentProcessEuid']) ? $data['parentProcessEuid'] : null;
        $this->container['childProcessName'] = isset($data['childProcessName']) ? $data['childProcessName'] : null;
        $this->container['childProcessPath'] = isset($data['childProcessPath']) ? $data['childProcessPath'] : null;
        $this->container['childProcessPid'] = isset($data['childProcessPid']) ? $data['childProcessPid'] : null;
        $this->container['childProcessUid'] = isset($data['childProcessUid']) ? $data['childProcessUid'] : null;
        $this->container['childProcessCmdline'] = isset($data['childProcessCmdline']) ? $data['childProcessCmdline'] : null;
        $this->container['childProcessFilename'] = isset($data['childProcessFilename']) ? $data['childProcessFilename'] : null;
        $this->container['childProcessStartTime'] = isset($data['childProcessStartTime']) ? $data['childProcessStartTime'] : null;
        $this->container['childProcessGid'] = isset($data['childProcessGid']) ? $data['childProcessGid'] : null;
        $this->container['childProcessEgid'] = isset($data['childProcessEgid']) ? $data['childProcessEgid'] : null;
        $this->container['childProcessEuid'] = isset($data['childProcessEuid']) ? $data['childProcessEuid'] : null;
        $this->container['virtCmd'] = isset($data['virtCmd']) ? $data['virtCmd'] : null;
        $this->container['virtProcessName'] = isset($data['virtProcessName']) ? $data['virtProcessName'] : null;
        $this->container['escapeMode'] = isset($data['escapeMode']) ? $data['escapeMode'] : null;
        $this->container['escapeCmd'] = isset($data['escapeCmd']) ? $data['escapeCmd'] : null;
        $this->container['processHash'] = isset($data['processHash']) ? $data['processHash'] : null;
        $this->container['processFileHash'] = isset($data['processFileHash']) ? $data['processFileHash'] : null;
        $this->container['parentProcessFileHash'] = isset($data['parentProcessFileHash']) ? $data['parentProcessFileHash'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['processName']) && !preg_match("/^.*$/", $this->container['processName'])) {
                $invalidProperties[] = "invalid value for 'processName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processPath']) && !preg_match("/^.*$/", $this->container['processPath'])) {
                $invalidProperties[] = "invalid value for 'processPath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processPid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processUid']) && ($this->container['processUid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processUid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processUid']) && ($this->container['processUid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processUid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processUsername']) && !preg_match("/^.*$/", $this->container['processUsername'])) {
                $invalidProperties[] = "invalid value for 'processUsername', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processCmdline']) && !preg_match("/^.*$/", $this->container['processCmdline'])) {
                $invalidProperties[] = "invalid value for 'processCmdline', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processFilename']) && !preg_match("/^.*$/", $this->container['processFilename'])) {
                $invalidProperties[] = "invalid value for 'processFilename', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processStartTime']) && ($this->container['processStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'processStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['processStartTime']) && ($this->container['processStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'processStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processGid']) && ($this->container['processGid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processGid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processGid']) && ($this->container['processGid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processGid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processEgid']) && ($this->container['processEgid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processEgid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processEgid']) && ($this->container['processEgid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processEgid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processEuid']) && ($this->container['processEuid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processEuid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processEuid']) && ($this->container['processEuid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processEuid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ancestorProcessPath']) && !preg_match("/^.*$/", $this->container['ancestorProcessPath'])) {
                $invalidProperties[] = "invalid value for 'ancestorProcessPath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['ancestorProcessPid']) && ($this->container['ancestorProcessPid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ancestorProcessPid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ancestorProcessPid']) && ($this->container['ancestorProcessPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'ancestorProcessPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ancestorProcessCmdline']) && !preg_match("/^.*$/", $this->container['ancestorProcessCmdline'])) {
                $invalidProperties[] = "invalid value for 'ancestorProcessCmdline', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['parentProcessName']) && !preg_match("/^.*$/", $this->container['parentProcessName'])) {
                $invalidProperties[] = "invalid value for 'parentProcessName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['parentProcessPath']) && !preg_match("/^.*$/", $this->container['parentProcessPath'])) {
                $invalidProperties[] = "invalid value for 'parentProcessPath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['parentProcessPid']) && ($this->container['parentProcessPid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentProcessPid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentProcessPid']) && ($this->container['parentProcessPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'parentProcessPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentProcessUid']) && ($this->container['parentProcessUid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentProcessUid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentProcessUid']) && ($this->container['parentProcessUid'] < 0)) {
                $invalidProperties[] = "invalid value for 'parentProcessUid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentProcessCmdline']) && !preg_match("/^.*$/", $this->container['parentProcessCmdline'])) {
                $invalidProperties[] = "invalid value for 'parentProcessCmdline', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['parentProcessFilename']) && !preg_match("/^.*$/", $this->container['parentProcessFilename'])) {
                $invalidProperties[] = "invalid value for 'parentProcessFilename', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['parentProcessStartTime']) && ($this->container['parentProcessStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'parentProcessStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['parentProcessStartTime']) && ($this->container['parentProcessStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'parentProcessStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentProcessGid']) && ($this->container['parentProcessGid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentProcessGid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentProcessGid']) && ($this->container['parentProcessGid'] < 0)) {
                $invalidProperties[] = "invalid value for 'parentProcessGid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentProcessEgid']) && ($this->container['parentProcessEgid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentProcessEgid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentProcessEgid']) && ($this->container['parentProcessEgid'] < 0)) {
                $invalidProperties[] = "invalid value for 'parentProcessEgid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentProcessEuid']) && ($this->container['parentProcessEuid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentProcessEuid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentProcessEuid']) && ($this->container['parentProcessEuid'] < 0)) {
                $invalidProperties[] = "invalid value for 'parentProcessEuid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['childProcessName']) && !preg_match("/^.*$/", $this->container['childProcessName'])) {
                $invalidProperties[] = "invalid value for 'childProcessName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['childProcessPath']) && !preg_match("/^.*$/", $this->container['childProcessPath'])) {
                $invalidProperties[] = "invalid value for 'childProcessPath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['childProcessPid']) && ($this->container['childProcessPid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'childProcessPid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['childProcessPid']) && ($this->container['childProcessPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'childProcessPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['childProcessUid']) && ($this->container['childProcessUid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'childProcessUid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['childProcessUid']) && ($this->container['childProcessUid'] < 0)) {
                $invalidProperties[] = "invalid value for 'childProcessUid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['childProcessCmdline']) && !preg_match("/^.*$/", $this->container['childProcessCmdline'])) {
                $invalidProperties[] = "invalid value for 'childProcessCmdline', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['childProcessFilename']) && !preg_match("/^.*$/", $this->container['childProcessFilename'])) {
                $invalidProperties[] = "invalid value for 'childProcessFilename', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['childProcessStartTime']) && ($this->container['childProcessStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'childProcessStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['childProcessStartTime']) && ($this->container['childProcessStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'childProcessStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['childProcessGid']) && ($this->container['childProcessGid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'childProcessGid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['childProcessGid']) && ($this->container['childProcessGid'] < 0)) {
                $invalidProperties[] = "invalid value for 'childProcessGid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['childProcessEgid']) && ($this->container['childProcessEgid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'childProcessEgid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['childProcessEgid']) && ($this->container['childProcessEgid'] < 0)) {
                $invalidProperties[] = "invalid value for 'childProcessEgid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['childProcessEuid']) && ($this->container['childProcessEuid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'childProcessEuid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['childProcessEuid']) && ($this->container['childProcessEuid'] < 0)) {
                $invalidProperties[] = "invalid value for 'childProcessEuid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['virtCmd']) && !preg_match("/^.*$/", $this->container['virtCmd'])) {
                $invalidProperties[] = "invalid value for 'virtCmd', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['virtProcessName']) && !preg_match("/^.*$/", $this->container['virtProcessName'])) {
                $invalidProperties[] = "invalid value for 'virtProcessName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['escapeMode']) && !preg_match("/^.*$/", $this->container['escapeMode'])) {
                $invalidProperties[] = "invalid value for 'escapeMode', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['escapeCmd']) && !preg_match("/^.*$/", $this->container['escapeCmd'])) {
                $invalidProperties[] = "invalid value for 'escapeCmd', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processHash']) && !preg_match("/^.*$/", $this->container['processHash'])) {
                $invalidProperties[] = "invalid value for 'processHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processFileHash']) && !preg_match("/^.*$/", $this->container['processFileHash'])) {
                $invalidProperties[] = "invalid value for 'processFileHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['parentProcessFileHash']) && !preg_match("/^.*$/", $this->container['parentProcessFileHash'])) {
                $invalidProperties[] = "invalid value for 'parentProcessFileHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['block']) && ($this->container['block'] > 1)) {
                $invalidProperties[] = "invalid value for 'block', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['block']) && ($this->container['block'] < 0)) {
                $invalidProperties[] = "invalid value for 'block', must be bigger than or equal to 0.";
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
    * Gets processName
    *  **参数解释**： 进程名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessName()
    {
        return $this->container['processName'];
    }

    /**
    * Sets processName
    *
    * @param string|null $processName **参数解释**： 进程名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessName($processName)
    {
        $this->container['processName'] = $processName;
        return $this;
    }

    /**
    * Gets processPath
    *  **参数解释**： 进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessPath()
    {
        return $this->container['processPath'];
    }

    /**
    * Sets processPath
    *
    * @param string|null $processPath **参数解释**： 进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessPath($processPath)
    {
        $this->container['processPath'] = $processPath;
        return $this;
    }

    /**
    * Gets processPid
    *  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessPid()
    {
        return $this->container['processPid'];
    }

    /**
    * Sets processPid
    *
    * @param int|null $processPid **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessPid($processPid)
    {
        $this->container['processPid'] = $processPid;
        return $this;
    }

    /**
    * Gets processUid
    *  **参数解释**： 进程用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessUid()
    {
        return $this->container['processUid'];
    }

    /**
    * Sets processUid
    *
    * @param int|null $processUid **参数解释**： 进程用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessUid($processUid)
    {
        $this->container['processUid'] = $processUid;
        return $this;
    }

    /**
    * Gets processUsername
    *  **参数解释**： 运行进程的用户名 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessUsername()
    {
        return $this->container['processUsername'];
    }

    /**
    * Sets processUsername
    *
    * @param string|null $processUsername **参数解释**： 运行进程的用户名 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessUsername($processUsername)
    {
        $this->container['processUsername'] = $processUsername;
        return $this;
    }

    /**
    * Gets processCmdline
    *  **参数解释**： 进程文件命令行 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessCmdline()
    {
        return $this->container['processCmdline'];
    }

    /**
    * Sets processCmdline
    *
    * @param string|null $processCmdline **参数解释**： 进程文件命令行 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessCmdline($processCmdline)
    {
        $this->container['processCmdline'] = $processCmdline;
        return $this;
    }

    /**
    * Gets processFilename
    *  **参数解释**： 进程文件名 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessFilename()
    {
        return $this->container['processFilename'];
    }

    /**
    * Sets processFilename
    *
    * @param string|null $processFilename **参数解释**： 进程文件名 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessFilename($processFilename)
    {
        $this->container['processFilename'] = $processFilename;
        return $this;
    }

    /**
    * Gets processStartTime
    *  **参数解释**： 进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getProcessStartTime()
    {
        return $this->container['processStartTime'];
    }

    /**
    * Sets processStartTime
    *
    * @param int|null $processStartTime **参数解释**： 进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setProcessStartTime($processStartTime)
    {
        $this->container['processStartTime'] = $processStartTime;
        return $this;
    }

    /**
    * Gets processGid
    *  **参数解释**： 进程组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessGid()
    {
        return $this->container['processGid'];
    }

    /**
    * Sets processGid
    *
    * @param int|null $processGid **参数解释**： 进程组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessGid($processGid)
    {
        $this->container['processGid'] = $processGid;
        return $this;
    }

    /**
    * Gets processEgid
    *  **参数解释**： 进程有效组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessEgid()
    {
        return $this->container['processEgid'];
    }

    /**
    * Sets processEgid
    *
    * @param int|null $processEgid **参数解释**： 进程有效组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessEgid($processEgid)
    {
        $this->container['processEgid'] = $processEgid;
        return $this;
    }

    /**
    * Gets processEuid
    *  **参数解释**： 进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessEuid()
    {
        return $this->container['processEuid'];
    }

    /**
    * Sets processEuid
    *
    * @param int|null $processEuid **参数解释**： 进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessEuid($processEuid)
    {
        $this->container['processEuid'] = $processEuid;
        return $this;
    }

    /**
    * Gets ancestorProcessPath
    *  **参数解释**： 祖父进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getAncestorProcessPath()
    {
        return $this->container['ancestorProcessPath'];
    }

    /**
    * Sets ancestorProcessPath
    *
    * @param string|null $ancestorProcessPath **参数解释**： 祖父进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setAncestorProcessPath($ancestorProcessPath)
    {
        $this->container['ancestorProcessPath'] = $ancestorProcessPath;
        return $this;
    }

    /**
    * Gets ancestorProcessPid
    *  **参数解释**： 祖父进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAncestorProcessPid()
    {
        return $this->container['ancestorProcessPid'];
    }

    /**
    * Sets ancestorProcessPid
    *
    * @param int|null $ancestorProcessPid **参数解释**： 祖父进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAncestorProcessPid($ancestorProcessPid)
    {
        $this->container['ancestorProcessPid'] = $ancestorProcessPid;
        return $this;
    }

    /**
    * Gets ancestorProcessCmdline
    *  **参数解释**： 祖父进程文件命令行 **取值范围**： 字符长度1-512位
    *
    * @return string|null
    */
    public function getAncestorProcessCmdline()
    {
        return $this->container['ancestorProcessCmdline'];
    }

    /**
    * Sets ancestorProcessCmdline
    *
    * @param string|null $ancestorProcessCmdline **参数解释**： 祖父进程文件命令行 **取值范围**： 字符长度1-512位
    *
    * @return $this
    */
    public function setAncestorProcessCmdline($ancestorProcessCmdline)
    {
        $this->container['ancestorProcessCmdline'] = $ancestorProcessCmdline;
        return $this;
    }

    /**
    * Gets parentProcessName
    *  **参数解释**： 父进程名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getParentProcessName()
    {
        return $this->container['parentProcessName'];
    }

    /**
    * Sets parentProcessName
    *
    * @param string|null $parentProcessName **参数解释**： 父进程名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setParentProcessName($parentProcessName)
    {
        $this->container['parentProcessName'] = $parentProcessName;
        return $this;
    }

    /**
    * Gets parentProcessPath
    *  **参数解释**： 父进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getParentProcessPath()
    {
        return $this->container['parentProcessPath'];
    }

    /**
    * Sets parentProcessPath
    *
    * @param string|null $parentProcessPath **参数解释**： 父进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setParentProcessPath($parentProcessPath)
    {
        $this->container['parentProcessPath'] = $parentProcessPath;
        return $this;
    }

    /**
    * Gets parentProcessPid
    *  **参数解释**： 父进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getParentProcessPid()
    {
        return $this->container['parentProcessPid'];
    }

    /**
    * Sets parentProcessPid
    *
    * @param int|null $parentProcessPid **参数解释**： 父进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setParentProcessPid($parentProcessPid)
    {
        $this->container['parentProcessPid'] = $parentProcessPid;
        return $this;
    }

    /**
    * Gets parentProcessUid
    *  **参数解释**： 父进程用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getParentProcessUid()
    {
        return $this->container['parentProcessUid'];
    }

    /**
    * Sets parentProcessUid
    *
    * @param int|null $parentProcessUid **参数解释**： 父进程用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setParentProcessUid($parentProcessUid)
    {
        $this->container['parentProcessUid'] = $parentProcessUid;
        return $this;
    }

    /**
    * Gets parentProcessCmdline
    *  **参数解释**： 父进程文件命令行 **取值范围**： 字符长度1-512位
    *
    * @return string|null
    */
    public function getParentProcessCmdline()
    {
        return $this->container['parentProcessCmdline'];
    }

    /**
    * Sets parentProcessCmdline
    *
    * @param string|null $parentProcessCmdline **参数解释**： 父进程文件命令行 **取值范围**： 字符长度1-512位
    *
    * @return $this
    */
    public function setParentProcessCmdline($parentProcessCmdline)
    {
        $this->container['parentProcessCmdline'] = $parentProcessCmdline;
        return $this;
    }

    /**
    * Gets parentProcessFilename
    *  **参数解释**： 父进程文件名 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getParentProcessFilename()
    {
        return $this->container['parentProcessFilename'];
    }

    /**
    * Sets parentProcessFilename
    *
    * @param string|null $parentProcessFilename **参数解释**： 父进程文件名 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setParentProcessFilename($parentProcessFilename)
    {
        $this->container['parentProcessFilename'] = $parentProcessFilename;
        return $this;
    }

    /**
    * Gets parentProcessStartTime
    *  **参数解释**： 父进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getParentProcessStartTime()
    {
        return $this->container['parentProcessStartTime'];
    }

    /**
    * Sets parentProcessStartTime
    *
    * @param int|null $parentProcessStartTime **参数解释**： 父进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setParentProcessStartTime($parentProcessStartTime)
    {
        $this->container['parentProcessStartTime'] = $parentProcessStartTime;
        return $this;
    }

    /**
    * Gets parentProcessGid
    *  **参数解释**： 父进程组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getParentProcessGid()
    {
        return $this->container['parentProcessGid'];
    }

    /**
    * Sets parentProcessGid
    *
    * @param int|null $parentProcessGid **参数解释**： 父进程组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setParentProcessGid($parentProcessGid)
    {
        $this->container['parentProcessGid'] = $parentProcessGid;
        return $this;
    }

    /**
    * Gets parentProcessEgid
    *  **参数解释**： 父进程有效组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getParentProcessEgid()
    {
        return $this->container['parentProcessEgid'];
    }

    /**
    * Sets parentProcessEgid
    *
    * @param int|null $parentProcessEgid **参数解释**： 父进程有效组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setParentProcessEgid($parentProcessEgid)
    {
        $this->container['parentProcessEgid'] = $parentProcessEgid;
        return $this;
    }

    /**
    * Gets parentProcessEuid
    *  **参数解释**： 父进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getParentProcessEuid()
    {
        return $this->container['parentProcessEuid'];
    }

    /**
    * Sets parentProcessEuid
    *
    * @param int|null $parentProcessEuid **参数解释**： 父进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setParentProcessEuid($parentProcessEuid)
    {
        $this->container['parentProcessEuid'] = $parentProcessEuid;
        return $this;
    }

    /**
    * Gets childProcessName
    *  **参数解释**： 子进程名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getChildProcessName()
    {
        return $this->container['childProcessName'];
    }

    /**
    * Sets childProcessName
    *
    * @param string|null $childProcessName **参数解释**： 子进程名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setChildProcessName($childProcessName)
    {
        $this->container['childProcessName'] = $childProcessName;
        return $this;
    }

    /**
    * Gets childProcessPath
    *  **参数解释**： 子进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getChildProcessPath()
    {
        return $this->container['childProcessPath'];
    }

    /**
    * Sets childProcessPath
    *
    * @param string|null $childProcessPath **参数解释**： 子进程文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setChildProcessPath($childProcessPath)
    {
        $this->container['childProcessPath'] = $childProcessPath;
        return $this;
    }

    /**
    * Gets childProcessPid
    *  **参数解释**： 子进程id **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChildProcessPid()
    {
        return $this->container['childProcessPid'];
    }

    /**
    * Sets childProcessPid
    *
    * @param int|null $childProcessPid **参数解释**： 子进程id **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChildProcessPid($childProcessPid)
    {
        $this->container['childProcessPid'] = $childProcessPid;
        return $this;
    }

    /**
    * Gets childProcessUid
    *  **参数解释**： 子进程用户id **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChildProcessUid()
    {
        return $this->container['childProcessUid'];
    }

    /**
    * Sets childProcessUid
    *
    * @param int|null $childProcessUid **参数解释**： 子进程用户id **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChildProcessUid($childProcessUid)
    {
        $this->container['childProcessUid'] = $childProcessUid;
        return $this;
    }

    /**
    * Gets childProcessCmdline
    *  **参数解释**： 子进程文件命令行 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getChildProcessCmdline()
    {
        return $this->container['childProcessCmdline'];
    }

    /**
    * Sets childProcessCmdline
    *
    * @param string|null $childProcessCmdline **参数解释**： 子进程文件命令行 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setChildProcessCmdline($childProcessCmdline)
    {
        $this->container['childProcessCmdline'] = $childProcessCmdline;
        return $this;
    }

    /**
    * Gets childProcessFilename
    *  **参数解释**： 子进程文件名 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getChildProcessFilename()
    {
        return $this->container['childProcessFilename'];
    }

    /**
    * Sets childProcessFilename
    *
    * @param string|null $childProcessFilename **参数解释**： 子进程文件名 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setChildProcessFilename($childProcessFilename)
    {
        $this->container['childProcessFilename'] = $childProcessFilename;
        return $this;
    }

    /**
    * Gets childProcessStartTime
    *  **参数解释**： 子进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getChildProcessStartTime()
    {
        return $this->container['childProcessStartTime'];
    }

    /**
    * Sets childProcessStartTime
    *
    * @param int|null $childProcessStartTime **参数解释**： 子进程启动时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setChildProcessStartTime($childProcessStartTime)
    {
        $this->container['childProcessStartTime'] = $childProcessStartTime;
        return $this;
    }

    /**
    * Gets childProcessGid
    *  **参数解释**： 子进程组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChildProcessGid()
    {
        return $this->container['childProcessGid'];
    }

    /**
    * Sets childProcessGid
    *
    * @param int|null $childProcessGid **参数解释**： 子进程组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChildProcessGid($childProcessGid)
    {
        $this->container['childProcessGid'] = $childProcessGid;
        return $this;
    }

    /**
    * Gets childProcessEgid
    *  **参数解释**： 子进程有效组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChildProcessEgid()
    {
        return $this->container['childProcessEgid'];
    }

    /**
    * Sets childProcessEgid
    *
    * @param int|null $childProcessEgid **参数解释**： 子进程有效组ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChildProcessEgid($childProcessEgid)
    {
        $this->container['childProcessEgid'] = $childProcessEgid;
        return $this;
    }

    /**
    * Gets childProcessEuid
    *  **参数解释**： 子进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChildProcessEuid()
    {
        return $this->container['childProcessEuid'];
    }

    /**
    * Sets childProcessEuid
    *
    * @param int|null $childProcessEuid **参数解释**： 子进程有效用户ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChildProcessEuid($childProcessEuid)
    {
        $this->container['childProcessEuid'] = $childProcessEuid;
        return $this;
    }

    /**
    * Gets virtCmd
    *  **参数解释**： 虚拟化命令 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getVirtCmd()
    {
        return $this->container['virtCmd'];
    }

    /**
    * Sets virtCmd
    *
    * @param string|null $virtCmd **参数解释**： 虚拟化命令 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setVirtCmd($virtCmd)
    {
        $this->container['virtCmd'] = $virtCmd;
        return $this;
    }

    /**
    * Gets virtProcessName
    *  **参数解释**： 虚拟化进程名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getVirtProcessName()
    {
        return $this->container['virtProcessName'];
    }

    /**
    * Sets virtProcessName
    *
    * @param string|null $virtProcessName **参数解释**： 虚拟化进程名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setVirtProcessName($virtProcessName)
    {
        $this->container['virtProcessName'] = $virtProcessName;
        return $this;
    }

    /**
    * Gets escapeMode
    *  **参数解释**： 逃逸方式 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getEscapeMode()
    {
        return $this->container['escapeMode'];
    }

    /**
    * Sets escapeMode
    *
    * @param string|null $escapeMode **参数解释**： 逃逸方式 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setEscapeMode($escapeMode)
    {
        $this->container['escapeMode'] = $escapeMode;
        return $this;
    }

    /**
    * Gets escapeCmd
    *  **参数解释**： 逃逸后执行的命令 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getEscapeCmd()
    {
        return $this->container['escapeCmd'];
    }

    /**
    * Sets escapeCmd
    *
    * @param string|null $escapeCmd **参数解释**： 逃逸后执行的命令 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setEscapeCmd($escapeCmd)
    {
        $this->container['escapeCmd'] = $escapeCmd;
        return $this;
    }

    /**
    * Gets processHash
    *  **参数解释**： 进程启动文件hash **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessHash()
    {
        return $this->container['processHash'];
    }

    /**
    * Sets processHash
    *
    * @param string|null $processHash **参数解释**： 进程启动文件hash **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessHash($processHash)
    {
        $this->container['processHash'] = $processHash;
        return $this;
    }

    /**
    * Gets processFileHash
    *  **参数解释**： 进程文件hash **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessFileHash()
    {
        return $this->container['processFileHash'];
    }

    /**
    * Sets processFileHash
    *
    * @param string|null $processFileHash **参数解释**： 进程文件hash **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessFileHash($processFileHash)
    {
        $this->container['processFileHash'] = $processFileHash;
        return $this;
    }

    /**
    * Gets parentProcessFileHash
    *  **参数解释**： 父进程文件hash **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getParentProcessFileHash()
    {
        return $this->container['parentProcessFileHash'];
    }

    /**
    * Sets parentProcessFileHash
    *
    * @param string|null $parentProcessFileHash **参数解释**： 父进程文件hash **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setParentProcessFileHash($parentProcessFileHash)
    {
        $this->container['parentProcessFileHash'] = $parentProcessFileHash;
        return $this;
    }

    /**
    * Gets block
    *  是否阻断成功，1阻断成功 0阻断失败
    *
    * @return int|null
    */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
    * Sets block
    *
    * @param int|null $block 是否阻断成功，1阻断成功 0阻断失败
    *
    * @return $this
    */
    public function setBlock($block)
    {
        $this->container['block'] = $block;
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

