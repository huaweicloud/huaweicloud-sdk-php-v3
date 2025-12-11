<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * loginPermission  **参数解释**: 是否允许登录 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * rootPermission  **参数解释**： 管理员权限 **取值范围**： - true：是 - false：否
    * userGroupName  **参数解释**： 用户组 **取值范围**： 字符长度1-128位
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 字符长度1-256位
    * shell  **参数解释**: 用户启动shell **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'userName' => 'string',
            'loginPermission' => 'bool',
            'rootPermission' => 'bool',
            'userGroupName' => 'string',
            'userHomeDir' => 'string',
            'shell' => 'string',
            'recentScanTime' => 'int',
            'firstScanTime' => 'int',
            'containerId' => 'string',
            'containerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * loginPermission  **参数解释**: 是否允许登录 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * rootPermission  **参数解释**： 管理员权限 **取值范围**： - true：是 - false：否
    * userGroupName  **参数解释**： 用户组 **取值范围**： 字符长度1-128位
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 字符长度1-256位
    * shell  **参数解释**: 用户启动shell **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'userName' => null,
        'loginPermission' => null,
        'rootPermission' => null,
        'userGroupName' => null,
        'userHomeDir' => null,
        'shell' => null,
        'recentScanTime' => 'int64',
        'firstScanTime' => 'int64',
        'containerId' => null,
        'containerName' => null
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
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * loginPermission  **参数解释**: 是否允许登录 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * rootPermission  **参数解释**： 管理员权限 **取值范围**： - true：是 - false：否
    * userGroupName  **参数解释**： 用户组 **取值范围**： 字符长度1-128位
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 字符长度1-256位
    * shell  **参数解释**: 用户启动shell **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'userName' => 'user_name',
            'loginPermission' => 'login_permission',
            'rootPermission' => 'root_permission',
            'userGroupName' => 'user_group_name',
            'userHomeDir' => 'user_home_dir',
            'shell' => 'shell',
            'recentScanTime' => 'recent_scan_time',
            'firstScanTime' => 'first_scan_time',
            'containerId' => 'container_id',
            'containerName' => 'container_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * loginPermission  **参数解释**: 是否允许登录 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * rootPermission  **参数解释**： 管理员权限 **取值范围**： - true：是 - false：否
    * userGroupName  **参数解释**： 用户组 **取值范围**： 字符长度1-128位
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 字符长度1-256位
    * shell  **参数解释**: 用户启动shell **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'userName' => 'setUserName',
            'loginPermission' => 'setLoginPermission',
            'rootPermission' => 'setRootPermission',
            'userGroupName' => 'setUserGroupName',
            'userHomeDir' => 'setUserHomeDir',
            'shell' => 'setShell',
            'recentScanTime' => 'setRecentScanTime',
            'firstScanTime' => 'setFirstScanTime',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * userName  **参数解释**: 用户名 **取值范围**: 字符长度1-64位
    * loginPermission  **参数解释**: 是否允许登录 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    * rootPermission  **参数解释**： 管理员权限 **取值范围**： - true：是 - false：否
    * userGroupName  **参数解释**： 用户组 **取值范围**： 字符长度1-128位
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 字符长度1-256位
    * shell  **参数解释**: 用户启动shell **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * containerName  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'userName' => 'getUserName',
            'loginPermission' => 'getLoginPermission',
            'rootPermission' => 'getRootPermission',
            'userGroupName' => 'getUserGroupName',
            'userHomeDir' => 'getUserHomeDir',
            'shell' => 'getShell',
            'recentScanTime' => 'getRecentScanTime',
            'firstScanTime' => 'getFirstScanTime',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['loginPermission'] = isset($data['loginPermission']) ? $data['loginPermission'] : null;
        $this->container['rootPermission'] = isset($data['rootPermission']) ? $data['rootPermission'] : null;
        $this->container['userGroupName'] = isset($data['userGroupName']) ? $data['userGroupName'] : null;
        $this->container['userHomeDir'] = isset($data['userHomeDir']) ? $data['userHomeDir'] : null;
        $this->container['shell'] = isset($data['shell']) ? $data['shell'] : null;
        $this->container['recentScanTime'] = isset($data['recentScanTime']) ? $data['recentScanTime'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
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
            if (!is_null($this->container['userName']) && !preg_match("/^.*$/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['userGroupName']) && !preg_match("/^.*$/", $this->container['userGroupName'])) {
                $invalidProperties[] = "invalid value for 'userGroupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['userHomeDir']) && !preg_match("/^.*$/", $this->container['userHomeDir'])) {
                $invalidProperties[] = "invalid value for 'userHomeDir', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['shell']) && (mb_strlen($this->container['shell']) > 128)) {
                $invalidProperties[] = "invalid value for 'shell', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['shell']) && (mb_strlen($this->container['shell']) < 1)) {
                $invalidProperties[] = "invalid value for 'shell', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['recentScanTime']) && ($this->container['recentScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'recentScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['recentScanTime']) && ($this->container['recentScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recentScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
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
    *  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
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
    * @param string|null $agentId **参数解释**: Agent ID **取值范围**: 字符长度1-64位
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
    * Gets loginPermission
    *  **参数解释**: 是否允许登录 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getLoginPermission()
    {
        return $this->container['loginPermission'];
    }

    /**
    * Sets loginPermission
    *
    * @param bool|null $loginPermission **参数解释**: 是否允许登录 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginPermission($loginPermission)
    {
        $this->container['loginPermission'] = $loginPermission;
        return $this;
    }

    /**
    * Gets rootPermission
    *  **参数解释**： 管理员权限 **取值范围**： - true：是 - false：否
    *
    * @return bool|null
    */
    public function getRootPermission()
    {
        return $this->container['rootPermission'];
    }

    /**
    * Sets rootPermission
    *
    * @param bool|null $rootPermission **参数解释**： 管理员权限 **取值范围**： - true：是 - false：否
    *
    * @return $this
    */
    public function setRootPermission($rootPermission)
    {
        $this->container['rootPermission'] = $rootPermission;
        return $this;
    }

    /**
    * Gets userGroupName
    *  **参数解释**： 用户组 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getUserGroupName()
    {
        return $this->container['userGroupName'];
    }

    /**
    * Sets userGroupName
    *
    * @param string|null $userGroupName **参数解释**： 用户组 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setUserGroupName($userGroupName)
    {
        $this->container['userGroupName'] = $userGroupName;
        return $this;
    }

    /**
    * Gets userHomeDir
    *  **参数解释**： 用户目录 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getUserHomeDir()
    {
        return $this->container['userHomeDir'];
    }

    /**
    * Sets userHomeDir
    *
    * @param string|null $userHomeDir **参数解释**： 用户目录 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setUserHomeDir($userHomeDir)
    {
        $this->container['userHomeDir'] = $userHomeDir;
        return $this;
    }

    /**
    * Gets shell
    *  **参数解释**: 用户启动shell **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getShell()
    {
        return $this->container['shell'];
    }

    /**
    * Sets shell
    *
    * @param string|null $shell **参数解释**: 用户启动shell **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setShell($shell)
    {
        $this->container['shell'] = $shell;
        return $this;
    }

    /**
    * Gets recentScanTime
    *  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getRecentScanTime()
    {
        return $this->container['recentScanTime'];
    }

    /**
    * Sets recentScanTime
    *
    * @param int|null $recentScanTime **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setRecentScanTime($recentScanTime)
    {
        $this->container['recentScanTime'] = $recentScanTime;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param int|null $firstScanTime **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
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
    *  **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
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
    * @param string|null $containerName **参数解释**： 容器实例名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
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

