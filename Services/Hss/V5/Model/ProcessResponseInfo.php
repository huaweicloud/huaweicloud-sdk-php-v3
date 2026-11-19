<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * launchParams  **参数解释** 进程启动参数 **取值范围** 字符长度1-256位
    * launchTime  **参数解释**: 进程启动时间 **取值范围**: 最小值0，最大值9223372036854775807
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * runPermission  **参数解释** 运行权限，对应mode **取值范围** 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessPid  **参数解释**: 父进程id **取值范围**: 最小值0，最大值2147483647
    * parentProcessName  **参数解释** 父进程名称 **取值范围** 字符长度1-256位
    * hash  **参数解释** 文件hash **取值范围** 字符长度1-256位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称 **取值范围**： 字符长度1-256位
    * podId  **参数解释** Pod ID **取值范围** 字符长度1-128位
    * podName  **参数解释** Pod名称 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'processPath' => 'string',
            'launchParams' => 'string',
            'launchTime' => 'int',
            'userName' => 'string',
            'runPermission' => 'string',
            'processPid' => 'int',
            'parentProcessPid' => 'int',
            'parentProcessName' => 'string',
            'hash' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'podId' => 'string',
            'podName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * launchParams  **参数解释** 进程启动参数 **取值范围** 字符长度1-256位
    * launchTime  **参数解释**: 进程启动时间 **取值范围**: 最小值0，最大值9223372036854775807
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * runPermission  **参数解释** 运行权限，对应mode **取值范围** 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessPid  **参数解释**: 父进程id **取值范围**: 最小值0，最大值2147483647
    * parentProcessName  **参数解释** 父进程名称 **取值范围** 字符长度1-256位
    * hash  **参数解释** 文件hash **取值范围** 字符长度1-256位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称 **取值范围**： 字符长度1-256位
    * podId  **参数解释** Pod ID **取值范围** 字符长度1-128位
    * podName  **参数解释** Pod名称 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'processPath' => null,
        'launchParams' => null,
        'launchTime' => 'int64',
        'userName' => null,
        'runPermission' => null,
        'processPid' => 'int32',
        'parentProcessPid' => 'int32',
        'parentProcessName' => null,
        'hash' => null,
        'containerId' => null,
        'containerName' => null,
        'podId' => null,
        'podName' => null
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
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * launchParams  **参数解释** 进程启动参数 **取值范围** 字符长度1-256位
    * launchTime  **参数解释**: 进程启动时间 **取值范围**: 最小值0，最大值9223372036854775807
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * runPermission  **参数解释** 运行权限，对应mode **取值范围** 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessPid  **参数解释**: 父进程id **取值范围**: 最小值0，最大值2147483647
    * parentProcessName  **参数解释** 父进程名称 **取值范围** 字符长度1-256位
    * hash  **参数解释** 文件hash **取值范围** 字符长度1-256位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称 **取值范围**： 字符长度1-256位
    * podId  **参数解释** Pod ID **取值范围** 字符长度1-128位
    * podName  **参数解释** Pod名称 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'processPath' => 'process_path',
            'launchParams' => 'launch_params',
            'launchTime' => 'launch_time',
            'userName' => 'user_name',
            'runPermission' => 'run_permission',
            'processPid' => 'process_pid',
            'parentProcessPid' => 'parent_process_pid',
            'parentProcessName' => 'parent_process_name',
            'hash' => 'hash',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'podId' => 'pod_id',
            'podName' => 'pod_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * launchParams  **参数解释** 进程启动参数 **取值范围** 字符长度1-256位
    * launchTime  **参数解释**: 进程启动时间 **取值范围**: 最小值0，最大值9223372036854775807
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * runPermission  **参数解释** 运行权限，对应mode **取值范围** 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessPid  **参数解释**: 父进程id **取值范围**: 最小值0，最大值2147483647
    * parentProcessName  **参数解释** 父进程名称 **取值范围** 字符长度1-256位
    * hash  **参数解释** 文件hash **取值范围** 字符长度1-256位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称 **取值范围**： 字符长度1-256位
    * podId  **参数解释** Pod ID **取值范围** 字符长度1-128位
    * podName  **参数解释** Pod名称 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'processPath' => 'setProcessPath',
            'launchParams' => 'setLaunchParams',
            'launchTime' => 'setLaunchTime',
            'userName' => 'setUserName',
            'runPermission' => 'setRunPermission',
            'processPid' => 'setProcessPid',
            'parentProcessPid' => 'setParentProcessPid',
            'parentProcessName' => 'setParentProcessName',
            'hash' => 'setHash',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'podId' => 'setPodId',
            'podName' => 'setPodName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * launchParams  **参数解释** 进程启动参数 **取值范围** 字符长度1-256位
    * launchTime  **参数解释**: 进程启动时间 **取值范围**: 最小值0，最大值9223372036854775807
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * runPermission  **参数解释** 运行权限，对应mode **取值范围** 字符长度1-256位
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * parentProcessPid  **参数解释**: 父进程id **取值范围**: 最小值0，最大值2147483647
    * parentProcessName  **参数解释** 父进程名称 **取值范围** 字符长度1-256位
    * hash  **参数解释** 文件hash **取值范围** 字符长度1-256位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称 **取值范围**： 字符长度1-256位
    * podId  **参数解释** Pod ID **取值范围** 字符长度1-128位
    * podName  **参数解释** Pod名称 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'processPath' => 'getProcessPath',
            'launchParams' => 'getLaunchParams',
            'launchTime' => 'getLaunchTime',
            'userName' => 'getUserName',
            'runPermission' => 'getRunPermission',
            'processPid' => 'getProcessPid',
            'parentProcessPid' => 'getParentProcessPid',
            'parentProcessName' => 'getParentProcessName',
            'hash' => 'getHash',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'podId' => 'getPodId',
            'podName' => 'getPodName'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['launchParams'] = isset($data['launchParams']) ? $data['launchParams'] : null;
        $this->container['launchTime'] = isset($data['launchTime']) ? $data['launchTime'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['runPermission'] = isset($data['runPermission']) ? $data['runPermission'] : null;
        $this->container['processPid'] = isset($data['processPid']) ? $data['processPid'] : null;
        $this->container['parentProcessPid'] = isset($data['parentProcessPid']) ? $data['parentProcessPid'] : null;
        $this->container['parentProcessName'] = isset($data['parentProcessName']) ? $data['parentProcessName'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['launchParams']) && (mb_strlen($this->container['launchParams']) > 256)) {
                $invalidProperties[] = "invalid value for 'launchParams', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['launchParams']) && (mb_strlen($this->container['launchParams']) < 1)) {
                $invalidProperties[] = "invalid value for 'launchParams', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['launchTime']) && ($this->container['launchTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'launchTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['launchTime']) && ($this->container['launchTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'launchTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && !preg_match("/^.*$/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['runPermission']) && (mb_strlen($this->container['runPermission']) > 256)) {
                $invalidProperties[] = "invalid value for 'runPermission', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['runPermission']) && (mb_strlen($this->container['runPermission']) < 1)) {
                $invalidProperties[] = "invalid value for 'runPermission', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processPid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentProcessPid']) && ($this->container['parentProcessPid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentProcessPid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentProcessPid']) && ($this->container['parentProcessPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'parentProcessPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentProcessName']) && (mb_strlen($this->container['parentProcessName']) > 256)) {
                $invalidProperties[] = "invalid value for 'parentProcessName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['parentProcessName']) && (mb_strlen($this->container['parentProcessName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentProcessName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 256)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 1)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) > 128)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) < 1)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 256)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 1)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 1.";
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
    * Gets agentId
    *  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets processPath
    *  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
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
    * @param string|null $processPath **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessPath($processPath)
    {
        $this->container['processPath'] = $processPath;
        return $this;
    }

    /**
    * Gets launchParams
    *  **参数解释** 进程启动参数 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getLaunchParams()
    {
        return $this->container['launchParams'];
    }

    /**
    * Sets launchParams
    *
    * @param string|null $launchParams **参数解释** 进程启动参数 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setLaunchParams($launchParams)
    {
        $this->container['launchParams'] = $launchParams;
        return $this;
    }

    /**
    * Gets launchTime
    *  **参数解释**: 进程启动时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getLaunchTime()
    {
        return $this->container['launchTime'];
    }

    /**
    * Sets launchTime
    *
    * @param int|null $launchTime **参数解释**: 进程启动时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setLaunchTime($launchTime)
    {
        $this->container['launchTime'] = $launchTime;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
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
    * @param string|null $userName **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets runPermission
    *  **参数解释** 运行权限，对应mode **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getRunPermission()
    {
        return $this->container['runPermission'];
    }

    /**
    * Sets runPermission
    *
    * @param string|null $runPermission **参数解释** 运行权限，对应mode **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setRunPermission($runPermission)
    {
        $this->container['runPermission'] = $runPermission;
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
    * Gets parentProcessPid
    *  **参数解释**: 父进程id **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $parentProcessPid **参数解释**: 父进程id **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setParentProcessPid($parentProcessPid)
    {
        $this->container['parentProcessPid'] = $parentProcessPid;
        return $this;
    }

    /**
    * Gets parentProcessName
    *  **参数解释** 父进程名称 **取值范围** 字符长度1-256位
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
    * @param string|null $parentProcessName **参数解释** 父进程名称 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setParentProcessName($parentProcessName)
    {
        $this->container['parentProcessName'] = $parentProcessName;
        return $this;
    }

    /**
    * Gets hash
    *  **参数解释** 文件hash **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash **参数解释** 文件hash **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器实例名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName **参数解释**： 容器实例名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets podId
    *  **参数解释** Pod ID **取值范围** 字符长度1-128位
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId **参数解释** Pod ID **取值范围** 字符长度1-128位
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释** Pod名称 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName **参数解释** Pod名称 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
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

