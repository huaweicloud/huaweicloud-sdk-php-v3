<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Alert_process';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processName  进程名
    * processPath  进程执行文件路径
    * processPid  进程id
    * processUid  进程用户id
    * processCmdline  进程命令行
    * processParentName  父进程名称
    * processParentPath  父进程执行文件路径
    * processParentPid  父进程id
    * processParentUid  父进程用户id
    * processParentCmdline  父进程命令行
    * processChildName  子进程名称
    * processChildPath  子进程执行文件路径
    * processChildPid  子进程id
    * processChildUid  子进程用户id
    * processChildCmdline  子进程命令行
    * processLauncheTime  进程启动时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * processTerminateTime  进程结束时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processName' => 'string',
            'processPath' => 'string',
            'processPid' => 'int',
            'processUid' => 'int',
            'processCmdline' => 'string',
            'processParentName' => 'string',
            'processParentPath' => 'string',
            'processParentPid' => 'int',
            'processParentUid' => 'int',
            'processParentCmdline' => 'string',
            'processChildName' => 'string',
            'processChildPath' => 'string',
            'processChildPid' => 'int',
            'processChildUid' => 'int',
            'processChildCmdline' => 'string',
            'processLauncheTime' => 'string',
            'processTerminateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processName  进程名
    * processPath  进程执行文件路径
    * processPid  进程id
    * processUid  进程用户id
    * processCmdline  进程命令行
    * processParentName  父进程名称
    * processParentPath  父进程执行文件路径
    * processParentPid  父进程id
    * processParentUid  父进程用户id
    * processParentCmdline  父进程命令行
    * processChildName  子进程名称
    * processChildPath  子进程执行文件路径
    * processChildPid  子进程id
    * processChildUid  子进程用户id
    * processChildCmdline  子进程命令行
    * processLauncheTime  进程启动时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * processTerminateTime  进程结束时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processName' => null,
        'processPath' => null,
        'processPid' => null,
        'processUid' => null,
        'processCmdline' => null,
        'processParentName' => null,
        'processParentPath' => null,
        'processParentPid' => null,
        'processParentUid' => null,
        'processParentCmdline' => null,
        'processChildName' => null,
        'processChildPath' => null,
        'processChildPid' => null,
        'processChildUid' => null,
        'processChildCmdline' => null,
        'processLauncheTime' => null,
        'processTerminateTime' => null
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
    * processName  进程名
    * processPath  进程执行文件路径
    * processPid  进程id
    * processUid  进程用户id
    * processCmdline  进程命令行
    * processParentName  父进程名称
    * processParentPath  父进程执行文件路径
    * processParentPid  父进程id
    * processParentUid  父进程用户id
    * processParentCmdline  父进程命令行
    * processChildName  子进程名称
    * processChildPath  子进程执行文件路径
    * processChildPid  子进程id
    * processChildUid  子进程用户id
    * processChildCmdline  子进程命令行
    * processLauncheTime  进程启动时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * processTerminateTime  进程结束时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processName' => 'process_name',
            'processPath' => 'process_path',
            'processPid' => 'process_pid',
            'processUid' => 'process_uid',
            'processCmdline' => 'process_cmdline',
            'processParentName' => 'process_parent_name',
            'processParentPath' => 'process_parent_path',
            'processParentPid' => 'process_parent_pid',
            'processParentUid' => 'process_parent_uid',
            'processParentCmdline' => 'process_parent_cmdline',
            'processChildName' => 'process_child_name',
            'processChildPath' => 'process_child_path',
            'processChildPid' => 'process_child_pid',
            'processChildUid' => 'process_child_uid',
            'processChildCmdline' => 'process_child_cmdline',
            'processLauncheTime' => 'process_launche_time',
            'processTerminateTime' => 'process_terminate_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processName  进程名
    * processPath  进程执行文件路径
    * processPid  进程id
    * processUid  进程用户id
    * processCmdline  进程命令行
    * processParentName  父进程名称
    * processParentPath  父进程执行文件路径
    * processParentPid  父进程id
    * processParentUid  父进程用户id
    * processParentCmdline  父进程命令行
    * processChildName  子进程名称
    * processChildPath  子进程执行文件路径
    * processChildPid  子进程id
    * processChildUid  子进程用户id
    * processChildCmdline  子进程命令行
    * processLauncheTime  进程启动时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * processTerminateTime  进程结束时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @var string[]
    */
    protected static $setters = [
            'processName' => 'setProcessName',
            'processPath' => 'setProcessPath',
            'processPid' => 'setProcessPid',
            'processUid' => 'setProcessUid',
            'processCmdline' => 'setProcessCmdline',
            'processParentName' => 'setProcessParentName',
            'processParentPath' => 'setProcessParentPath',
            'processParentPid' => 'setProcessParentPid',
            'processParentUid' => 'setProcessParentUid',
            'processParentCmdline' => 'setProcessParentCmdline',
            'processChildName' => 'setProcessChildName',
            'processChildPath' => 'setProcessChildPath',
            'processChildPid' => 'setProcessChildPid',
            'processChildUid' => 'setProcessChildUid',
            'processChildCmdline' => 'setProcessChildCmdline',
            'processLauncheTime' => 'setProcessLauncheTime',
            'processTerminateTime' => 'setProcessTerminateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processName  进程名
    * processPath  进程执行文件路径
    * processPid  进程id
    * processUid  进程用户id
    * processCmdline  进程命令行
    * processParentName  父进程名称
    * processParentPath  父进程执行文件路径
    * processParentPid  父进程id
    * processParentUid  父进程用户id
    * processParentCmdline  父进程命令行
    * processChildName  子进程名称
    * processChildPath  子进程执行文件路径
    * processChildPid  子进程id
    * processChildUid  子进程用户id
    * processChildCmdline  子进程命令行
    * processLauncheTime  进程启动时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * processTerminateTime  进程结束时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @var string[]
    */
    protected static $getters = [
            'processName' => 'getProcessName',
            'processPath' => 'getProcessPath',
            'processPid' => 'getProcessPid',
            'processUid' => 'getProcessUid',
            'processCmdline' => 'getProcessCmdline',
            'processParentName' => 'getProcessParentName',
            'processParentPath' => 'getProcessParentPath',
            'processParentPid' => 'getProcessParentPid',
            'processParentUid' => 'getProcessParentUid',
            'processParentCmdline' => 'getProcessParentCmdline',
            'processChildName' => 'getProcessChildName',
            'processChildPath' => 'getProcessChildPath',
            'processChildPid' => 'getProcessChildPid',
            'processChildUid' => 'getProcessChildUid',
            'processChildCmdline' => 'getProcessChildCmdline',
            'processLauncheTime' => 'getProcessLauncheTime',
            'processTerminateTime' => 'getProcessTerminateTime'
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
        $this->container['processCmdline'] = isset($data['processCmdline']) ? $data['processCmdline'] : null;
        $this->container['processParentName'] = isset($data['processParentName']) ? $data['processParentName'] : null;
        $this->container['processParentPath'] = isset($data['processParentPath']) ? $data['processParentPath'] : null;
        $this->container['processParentPid'] = isset($data['processParentPid']) ? $data['processParentPid'] : null;
        $this->container['processParentUid'] = isset($data['processParentUid']) ? $data['processParentUid'] : null;
        $this->container['processParentCmdline'] = isset($data['processParentCmdline']) ? $data['processParentCmdline'] : null;
        $this->container['processChildName'] = isset($data['processChildName']) ? $data['processChildName'] : null;
        $this->container['processChildPath'] = isset($data['processChildPath']) ? $data['processChildPath'] : null;
        $this->container['processChildPid'] = isset($data['processChildPid']) ? $data['processChildPid'] : null;
        $this->container['processChildUid'] = isset($data['processChildUid']) ? $data['processChildUid'] : null;
        $this->container['processChildCmdline'] = isset($data['processChildCmdline']) ? $data['processChildCmdline'] : null;
        $this->container['processLauncheTime'] = isset($data['processLauncheTime']) ? $data['processLauncheTime'] : null;
        $this->container['processTerminateTime'] = isset($data['processTerminateTime']) ? $data['processTerminateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) > 64)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) < 0)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] > 65535)) {
                $invalidProperties[] = "invalid value for 'processPid', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processUid']) && ($this->container['processUid'] > 655350)) {
                $invalidProperties[] = "invalid value for 'processUid', must be smaller than or equal to 655350.";
            }
            if (!is_null($this->container['processUid']) && ($this->container['processUid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processUid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processCmdline']) && (mb_strlen($this->container['processCmdline']) > 128)) {
                $invalidProperties[] = "invalid value for 'processCmdline', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processCmdline']) && (mb_strlen($this->container['processCmdline']) < 0)) {
                $invalidProperties[] = "invalid value for 'processCmdline', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processParentName']) && (mb_strlen($this->container['processParentName']) > 64)) {
                $invalidProperties[] = "invalid value for 'processParentName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processParentName']) && (mb_strlen($this->container['processParentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'processParentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processParentPath']) && (mb_strlen($this->container['processParentPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'processParentPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['processParentPath']) && (mb_strlen($this->container['processParentPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'processParentPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processParentPid']) && ($this->container['processParentPid'] > 65535)) {
                $invalidProperties[] = "invalid value for 'processParentPid', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['processParentPid']) && ($this->container['processParentPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processParentPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processParentUid']) && ($this->container['processParentUid'] > 655350)) {
                $invalidProperties[] = "invalid value for 'processParentUid', must be smaller than or equal to 655350.";
            }
            if (!is_null($this->container['processParentUid']) && ($this->container['processParentUid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processParentUid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processParentCmdline']) && (mb_strlen($this->container['processParentCmdline']) > 128)) {
                $invalidProperties[] = "invalid value for 'processParentCmdline', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processParentCmdline']) && (mb_strlen($this->container['processParentCmdline']) < 0)) {
                $invalidProperties[] = "invalid value for 'processParentCmdline', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processChildName']) && (mb_strlen($this->container['processChildName']) > 64)) {
                $invalidProperties[] = "invalid value for 'processChildName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processChildName']) && (mb_strlen($this->container['processChildName']) < 0)) {
                $invalidProperties[] = "invalid value for 'processChildName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processChildPath']) && (mb_strlen($this->container['processChildPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'processChildPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['processChildPath']) && (mb_strlen($this->container['processChildPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'processChildPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processChildPid']) && ($this->container['processChildPid'] > 65535)) {
                $invalidProperties[] = "invalid value for 'processChildPid', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['processChildPid']) && ($this->container['processChildPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processChildPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processChildUid']) && ($this->container['processChildUid'] > 655350)) {
                $invalidProperties[] = "invalid value for 'processChildUid', must be smaller than or equal to 655350.";
            }
            if (!is_null($this->container['processChildUid']) && ($this->container['processChildUid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processChildUid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processChildCmdline']) && (mb_strlen($this->container['processChildCmdline']) > 128)) {
                $invalidProperties[] = "invalid value for 'processChildCmdline', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processChildCmdline']) && (mb_strlen($this->container['processChildCmdline']) < 0)) {
                $invalidProperties[] = "invalid value for 'processChildCmdline', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processLauncheTime']) && (mb_strlen($this->container['processLauncheTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'processLauncheTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['processLauncheTime']) && (mb_strlen($this->container['processLauncheTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'processLauncheTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processTerminateTime']) && (mb_strlen($this->container['processTerminateTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'processTerminateTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['processTerminateTime']) && (mb_strlen($this->container['processTerminateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'processTerminateTime', the character length must be bigger than or equal to 0.";
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
    *  进程名
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
    * @param string|null $processName 进程名
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
    *  进程执行文件路径
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
    * @param string|null $processPath 进程执行文件路径
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
    *  进程id
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
    * @param int|null $processPid 进程id
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
    *  进程用户id
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
    * @param int|null $processUid 进程用户id
    *
    * @return $this
    */
    public function setProcessUid($processUid)
    {
        $this->container['processUid'] = $processUid;
        return $this;
    }

    /**
    * Gets processCmdline
    *  进程命令行
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
    * @param string|null $processCmdline 进程命令行
    *
    * @return $this
    */
    public function setProcessCmdline($processCmdline)
    {
        $this->container['processCmdline'] = $processCmdline;
        return $this;
    }

    /**
    * Gets processParentName
    *  父进程名称
    *
    * @return string|null
    */
    public function getProcessParentName()
    {
        return $this->container['processParentName'];
    }

    /**
    * Sets processParentName
    *
    * @param string|null $processParentName 父进程名称
    *
    * @return $this
    */
    public function setProcessParentName($processParentName)
    {
        $this->container['processParentName'] = $processParentName;
        return $this;
    }

    /**
    * Gets processParentPath
    *  父进程执行文件路径
    *
    * @return string|null
    */
    public function getProcessParentPath()
    {
        return $this->container['processParentPath'];
    }

    /**
    * Sets processParentPath
    *
    * @param string|null $processParentPath 父进程执行文件路径
    *
    * @return $this
    */
    public function setProcessParentPath($processParentPath)
    {
        $this->container['processParentPath'] = $processParentPath;
        return $this;
    }

    /**
    * Gets processParentPid
    *  父进程id
    *
    * @return int|null
    */
    public function getProcessParentPid()
    {
        return $this->container['processParentPid'];
    }

    /**
    * Sets processParentPid
    *
    * @param int|null $processParentPid 父进程id
    *
    * @return $this
    */
    public function setProcessParentPid($processParentPid)
    {
        $this->container['processParentPid'] = $processParentPid;
        return $this;
    }

    /**
    * Gets processParentUid
    *  父进程用户id
    *
    * @return int|null
    */
    public function getProcessParentUid()
    {
        return $this->container['processParentUid'];
    }

    /**
    * Sets processParentUid
    *
    * @param int|null $processParentUid 父进程用户id
    *
    * @return $this
    */
    public function setProcessParentUid($processParentUid)
    {
        $this->container['processParentUid'] = $processParentUid;
        return $this;
    }

    /**
    * Gets processParentCmdline
    *  父进程命令行
    *
    * @return string|null
    */
    public function getProcessParentCmdline()
    {
        return $this->container['processParentCmdline'];
    }

    /**
    * Sets processParentCmdline
    *
    * @param string|null $processParentCmdline 父进程命令行
    *
    * @return $this
    */
    public function setProcessParentCmdline($processParentCmdline)
    {
        $this->container['processParentCmdline'] = $processParentCmdline;
        return $this;
    }

    /**
    * Gets processChildName
    *  子进程名称
    *
    * @return string|null
    */
    public function getProcessChildName()
    {
        return $this->container['processChildName'];
    }

    /**
    * Sets processChildName
    *
    * @param string|null $processChildName 子进程名称
    *
    * @return $this
    */
    public function setProcessChildName($processChildName)
    {
        $this->container['processChildName'] = $processChildName;
        return $this;
    }

    /**
    * Gets processChildPath
    *  子进程执行文件路径
    *
    * @return string|null
    */
    public function getProcessChildPath()
    {
        return $this->container['processChildPath'];
    }

    /**
    * Sets processChildPath
    *
    * @param string|null $processChildPath 子进程执行文件路径
    *
    * @return $this
    */
    public function setProcessChildPath($processChildPath)
    {
        $this->container['processChildPath'] = $processChildPath;
        return $this;
    }

    /**
    * Gets processChildPid
    *  子进程id
    *
    * @return int|null
    */
    public function getProcessChildPid()
    {
        return $this->container['processChildPid'];
    }

    /**
    * Sets processChildPid
    *
    * @param int|null $processChildPid 子进程id
    *
    * @return $this
    */
    public function setProcessChildPid($processChildPid)
    {
        $this->container['processChildPid'] = $processChildPid;
        return $this;
    }

    /**
    * Gets processChildUid
    *  子进程用户id
    *
    * @return int|null
    */
    public function getProcessChildUid()
    {
        return $this->container['processChildUid'];
    }

    /**
    * Sets processChildUid
    *
    * @param int|null $processChildUid 子进程用户id
    *
    * @return $this
    */
    public function setProcessChildUid($processChildUid)
    {
        $this->container['processChildUid'] = $processChildUid;
        return $this;
    }

    /**
    * Gets processChildCmdline
    *  子进程命令行
    *
    * @return string|null
    */
    public function getProcessChildCmdline()
    {
        return $this->container['processChildCmdline'];
    }

    /**
    * Sets processChildCmdline
    *
    * @param string|null $processChildCmdline 子进程命令行
    *
    * @return $this
    */
    public function setProcessChildCmdline($processChildCmdline)
    {
        $this->container['processChildCmdline'] = $processChildCmdline;
        return $this;
    }

    /**
    * Gets processLauncheTime
    *  进程启动时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return string|null
    */
    public function getProcessLauncheTime()
    {
        return $this->container['processLauncheTime'];
    }

    /**
    * Sets processLauncheTime
    *
    * @param string|null $processLauncheTime 进程启动时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setProcessLauncheTime($processLauncheTime)
    {
        $this->container['processLauncheTime'] = $processLauncheTime;
        return $this;
    }

    /**
    * Gets processTerminateTime
    *  进程结束时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return string|null
    */
    public function getProcessTerminateTime()
    {
        return $this->container['processTerminateTime'];
    }

    /**
    * Sets processTerminateTime
    *
    * @param string|null $processTerminateTime 进程结束时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setProcessTerminateTime($processTerminateTime)
    {
        $this->container['processTerminateTime'] = $processTerminateTime;
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

