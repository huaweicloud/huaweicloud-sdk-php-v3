<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessForensicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessForensicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 不涉及
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 不涉及
    * processPid  **参数解释**： 进程id **取值范围**： 不涉及
    * processUid  **参数解释**： 进程用户id **取值范围**： 不涉及
    * processGid  **参数解释**： 进程组id **取值范围**： 不涉及
    * processEgid  **参数解释**： 进程有效组id **取值范围**： 不涉及
    * processEuid  **参数解释**： 进程有效用户id **取值范围**： 不涉及
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 不涉及
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 不涉及
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 不涉及
    * ancestorProcessPid  **参数解释**： 祖父进程id **取值范围**： 不涉及
    * ancestorProcessCmdline  **参数解释**： 祖父进程命令行 **取值范围**： 不涉及
    * ancestorProcessPath  **参数解释**： 祖父进程路径 **取值范围**： 不涉及
    * sessionId  **参数解释**： 会话id **取值范围**： 不涉及
    * eventNum  **参数解释**： 威胁事件数 **取值范围**： 不涉及
    * type  **参数解释**： 节点类型 **取值范围**： - 0：进程 - 1：注册表 - 2：文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processName' => 'string',
            'processPath' => 'string',
            'processPid' => 'int',
            'processUid' => 'int',
            'processGid' => 'int',
            'processEgid' => 'int',
            'processEuid' => 'int',
            'processUsername' => 'string',
            'processCmdline' => 'string',
            'processStartTime' => 'int',
            'processFileHash' => 'string',
            'ancestorProcessPid' => 'int',
            'ancestorProcessCmdline' => 'string',
            'ancestorProcessPath' => 'string',
            'sessionId' => 'int',
            'eventNum' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 不涉及
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 不涉及
    * processPid  **参数解释**： 进程id **取值范围**： 不涉及
    * processUid  **参数解释**： 进程用户id **取值范围**： 不涉及
    * processGid  **参数解释**： 进程组id **取值范围**： 不涉及
    * processEgid  **参数解释**： 进程有效组id **取值范围**： 不涉及
    * processEuid  **参数解释**： 进程有效用户id **取值范围**： 不涉及
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 不涉及
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 不涉及
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 不涉及
    * ancestorProcessPid  **参数解释**： 祖父进程id **取值范围**： 不涉及
    * ancestorProcessCmdline  **参数解释**： 祖父进程命令行 **取值范围**： 不涉及
    * ancestorProcessPath  **参数解释**： 祖父进程路径 **取值范围**： 不涉及
    * sessionId  **参数解释**： 会话id **取值范围**： 不涉及
    * eventNum  **参数解释**： 威胁事件数 **取值范围**： 不涉及
    * type  **参数解释**： 节点类型 **取值范围**： - 0：进程 - 1：注册表 - 2：文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processName' => null,
        'processPath' => null,
        'processPid' => null,
        'processUid' => null,
        'processGid' => null,
        'processEgid' => null,
        'processEuid' => null,
        'processUsername' => null,
        'processCmdline' => null,
        'processStartTime' => 'int64',
        'processFileHash' => null,
        'ancestorProcessPid' => null,
        'ancestorProcessCmdline' => null,
        'ancestorProcessPath' => null,
        'sessionId' => null,
        'eventNum' => null,
        'type' => null
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
    * processName  **参数解释**： 进程名称 **取值范围**： 不涉及
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 不涉及
    * processPid  **参数解释**： 进程id **取值范围**： 不涉及
    * processUid  **参数解释**： 进程用户id **取值范围**： 不涉及
    * processGid  **参数解释**： 进程组id **取值范围**： 不涉及
    * processEgid  **参数解释**： 进程有效组id **取值范围**： 不涉及
    * processEuid  **参数解释**： 进程有效用户id **取值范围**： 不涉及
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 不涉及
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 不涉及
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 不涉及
    * ancestorProcessPid  **参数解释**： 祖父进程id **取值范围**： 不涉及
    * ancestorProcessCmdline  **参数解释**： 祖父进程命令行 **取值范围**： 不涉及
    * ancestorProcessPath  **参数解释**： 祖父进程路径 **取值范围**： 不涉及
    * sessionId  **参数解释**： 会话id **取值范围**： 不涉及
    * eventNum  **参数解释**： 威胁事件数 **取值范围**： 不涉及
    * type  **参数解释**： 节点类型 **取值范围**： - 0：进程 - 1：注册表 - 2：文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processName' => 'process_name',
            'processPath' => 'process_path',
            'processPid' => 'process_pid',
            'processUid' => 'process_uid',
            'processGid' => 'process_gid',
            'processEgid' => 'process_egid',
            'processEuid' => 'process_euid',
            'processUsername' => 'process_username',
            'processCmdline' => 'process_cmdline',
            'processStartTime' => 'process_start_time',
            'processFileHash' => 'process_file_hash',
            'ancestorProcessPid' => 'ancestor_process_pid',
            'ancestorProcessCmdline' => 'ancestor_process_cmdline',
            'ancestorProcessPath' => 'ancestor_process_path',
            'sessionId' => 'session_id',
            'eventNum' => 'event_num',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processName  **参数解释**： 进程名称 **取值范围**： 不涉及
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 不涉及
    * processPid  **参数解释**： 进程id **取值范围**： 不涉及
    * processUid  **参数解释**： 进程用户id **取值范围**： 不涉及
    * processGid  **参数解释**： 进程组id **取值范围**： 不涉及
    * processEgid  **参数解释**： 进程有效组id **取值范围**： 不涉及
    * processEuid  **参数解释**： 进程有效用户id **取值范围**： 不涉及
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 不涉及
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 不涉及
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 不涉及
    * ancestorProcessPid  **参数解释**： 祖父进程id **取值范围**： 不涉及
    * ancestorProcessCmdline  **参数解释**： 祖父进程命令行 **取值范围**： 不涉及
    * ancestorProcessPath  **参数解释**： 祖父进程路径 **取值范围**： 不涉及
    * sessionId  **参数解释**： 会话id **取值范围**： 不涉及
    * eventNum  **参数解释**： 威胁事件数 **取值范围**： 不涉及
    * type  **参数解释**： 节点类型 **取值范围**： - 0：进程 - 1：注册表 - 2：文件
    *
    * @var string[]
    */
    protected static $setters = [
            'processName' => 'setProcessName',
            'processPath' => 'setProcessPath',
            'processPid' => 'setProcessPid',
            'processUid' => 'setProcessUid',
            'processGid' => 'setProcessGid',
            'processEgid' => 'setProcessEgid',
            'processEuid' => 'setProcessEuid',
            'processUsername' => 'setProcessUsername',
            'processCmdline' => 'setProcessCmdline',
            'processStartTime' => 'setProcessStartTime',
            'processFileHash' => 'setProcessFileHash',
            'ancestorProcessPid' => 'setAncestorProcessPid',
            'ancestorProcessCmdline' => 'setAncestorProcessCmdline',
            'ancestorProcessPath' => 'setAncestorProcessPath',
            'sessionId' => 'setSessionId',
            'eventNum' => 'setEventNum',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processName  **参数解释**： 进程名称 **取值范围**： 不涉及
    * processPath  **参数解释**： 进程文件路径 **取值范围**： 不涉及
    * processPid  **参数解释**： 进程id **取值范围**： 不涉及
    * processUid  **参数解释**： 进程用户id **取值范围**： 不涉及
    * processGid  **参数解释**： 进程组id **取值范围**： 不涉及
    * processEgid  **参数解释**： 进程有效组id **取值范围**： 不涉及
    * processEuid  **参数解释**： 进程有效用户id **取值范围**： 不涉及
    * processUsername  **参数解释**： 运行进程的用户名 **取值范围**： 不涉及
    * processCmdline  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    * processStartTime  **参数解释**： 进程启动时间 **取值范围**： 不涉及
    * processFileHash  **参数解释**： 进程文件hash **取值范围**： 不涉及
    * ancestorProcessPid  **参数解释**： 祖父进程id **取值范围**： 不涉及
    * ancestorProcessCmdline  **参数解释**： 祖父进程命令行 **取值范围**： 不涉及
    * ancestorProcessPath  **参数解释**： 祖父进程路径 **取值范围**： 不涉及
    * sessionId  **参数解释**： 会话id **取值范围**： 不涉及
    * eventNum  **参数解释**： 威胁事件数 **取值范围**： 不涉及
    * type  **参数解释**： 节点类型 **取值范围**： - 0：进程 - 1：注册表 - 2：文件
    *
    * @var string[]
    */
    protected static $getters = [
            'processName' => 'getProcessName',
            'processPath' => 'getProcessPath',
            'processPid' => 'getProcessPid',
            'processUid' => 'getProcessUid',
            'processGid' => 'getProcessGid',
            'processEgid' => 'getProcessEgid',
            'processEuid' => 'getProcessEuid',
            'processUsername' => 'getProcessUsername',
            'processCmdline' => 'getProcessCmdline',
            'processStartTime' => 'getProcessStartTime',
            'processFileHash' => 'getProcessFileHash',
            'ancestorProcessPid' => 'getAncestorProcessPid',
            'ancestorProcessCmdline' => 'getAncestorProcessCmdline',
            'ancestorProcessPath' => 'getAncestorProcessPath',
            'sessionId' => 'getSessionId',
            'eventNum' => 'getEventNum',
            'type' => 'getType'
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
        $this->container['processGid'] = isset($data['processGid']) ? $data['processGid'] : null;
        $this->container['processEgid'] = isset($data['processEgid']) ? $data['processEgid'] : null;
        $this->container['processEuid'] = isset($data['processEuid']) ? $data['processEuid'] : null;
        $this->container['processUsername'] = isset($data['processUsername']) ? $data['processUsername'] : null;
        $this->container['processCmdline'] = isset($data['processCmdline']) ? $data['processCmdline'] : null;
        $this->container['processStartTime'] = isset($data['processStartTime']) ? $data['processStartTime'] : null;
        $this->container['processFileHash'] = isset($data['processFileHash']) ? $data['processFileHash'] : null;
        $this->container['ancestorProcessPid'] = isset($data['ancestorProcessPid']) ? $data['ancestorProcessPid'] : null;
        $this->container['ancestorProcessCmdline'] = isset($data['ancestorProcessCmdline']) ? $data['ancestorProcessCmdline'] : null;
        $this->container['ancestorProcessPath'] = isset($data['ancestorProcessPath']) ? $data['ancestorProcessPath'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['eventNum'] = isset($data['eventNum']) ? $data['eventNum'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
            if (!is_null($this->container['processUsername']) && !preg_match("/^.*$/", $this->container['processUsername'])) {
                $invalidProperties[] = "invalid value for 'processUsername', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processCmdline']) && !preg_match("/^.*$/", $this->container['processCmdline'])) {
                $invalidProperties[] = "invalid value for 'processCmdline', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processStartTime']) && ($this->container['processStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'processStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['processStartTime']) && ($this->container['processStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'processStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processFileHash']) && !preg_match("/^.*$/", $this->container['processFileHash'])) {
                $invalidProperties[] = "invalid value for 'processFileHash', must be conform to the pattern /^.*$/.";
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
    *  **参数解释**： 进程名称 **取值范围**： 不涉及
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
    * @param string|null $processName **参数解释**： 进程名称 **取值范围**： 不涉及
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
    *  **参数解释**： 进程文件路径 **取值范围**： 不涉及
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
    * @param string|null $processPath **参数解释**： 进程文件路径 **取值范围**： 不涉及
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
    *  **参数解释**： 进程id **取值范围**： 不涉及
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
    * @param int|null $processPid **参数解释**： 进程id **取值范围**： 不涉及
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
    *  **参数解释**： 进程用户id **取值范围**： 不涉及
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
    * @param int|null $processUid **参数解释**： 进程用户id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessUid($processUid)
    {
        $this->container['processUid'] = $processUid;
        return $this;
    }

    /**
    * Gets processGid
    *  **参数解释**： 进程组id **取值范围**： 不涉及
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
    * @param int|null $processGid **参数解释**： 进程组id **取值范围**： 不涉及
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
    *  **参数解释**： 进程有效组id **取值范围**： 不涉及
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
    * @param int|null $processEgid **参数解释**： 进程有效组id **取值范围**： 不涉及
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
    *  **参数解释**： 进程有效用户id **取值范围**： 不涉及
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
    * @param int|null $processEuid **参数解释**： 进程有效用户id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessEuid($processEuid)
    {
        $this->container['processEuid'] = $processEuid;
        return $this;
    }

    /**
    * Gets processUsername
    *  **参数解释**： 运行进程的用户名 **取值范围**： 不涉及
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
    * @param string|null $processUsername **参数解释**： 运行进程的用户名 **取值范围**： 不涉及
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
    *  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
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
    * @param string|null $processCmdline **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessCmdline($processCmdline)
    {
        $this->container['processCmdline'] = $processCmdline;
        return $this;
    }

    /**
    * Gets processStartTime
    *  **参数解释**： 进程启动时间 **取值范围**： 不涉及
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
    * @param int|null $processStartTime **参数解释**： 进程启动时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessStartTime($processStartTime)
    {
        $this->container['processStartTime'] = $processStartTime;
        return $this;
    }

    /**
    * Gets processFileHash
    *  **参数解释**： 进程文件hash **取值范围**： 不涉及
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
    * @param string|null $processFileHash **参数解释**： 进程文件hash **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProcessFileHash($processFileHash)
    {
        $this->container['processFileHash'] = $processFileHash;
        return $this;
    }

    /**
    * Gets ancestorProcessPid
    *  **参数解释**： 祖父进程id **取值范围**： 不涉及
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
    * @param int|null $ancestorProcessPid **参数解释**： 祖父进程id **取值范围**： 不涉及
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
    *  **参数解释**： 祖父进程命令行 **取值范围**： 不涉及
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
    * @param string|null $ancestorProcessCmdline **参数解释**： 祖父进程命令行 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAncestorProcessCmdline($ancestorProcessCmdline)
    {
        $this->container['ancestorProcessCmdline'] = $ancestorProcessCmdline;
        return $this;
    }

    /**
    * Gets ancestorProcessPath
    *  **参数解释**： 祖父进程路径 **取值范围**： 不涉及
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
    * @param string|null $ancestorProcessPath **参数解释**： 祖父进程路径 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAncestorProcessPath($ancestorProcessPath)
    {
        $this->container['ancestorProcessPath'] = $ancestorProcessPath;
        return $this;
    }

    /**
    * Gets sessionId
    *  **参数解释**： 会话id **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param int|null $sessionId **参数解释**： 会话id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets eventNum
    *  **参数解释**： 威胁事件数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEventNum()
    {
        return $this->container['eventNum'];
    }

    /**
    * Sets eventNum
    *
    * @param int|null $eventNum **参数解释**： 威胁事件数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEventNum($eventNum)
    {
        $this->container['eventNum'] = $eventNum;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 节点类型 **取值范围**： - 0：进程 - 1：注册表 - 2：文件
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 节点类型 **取值范围**： - 0：进程 - 1：注册表 - 2：文件
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

