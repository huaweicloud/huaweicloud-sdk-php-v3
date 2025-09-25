<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserChangeHistoryResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserChangeHistoryResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释** agent标识 **取值范围** 长度1-128
    * changeType  **参数解释** 变更类型 **取值范围** - ADD ：添加 - DELETE ：删除 - MODIFY ： 修改
    * hostId  **参数解释** 主机ID **取值范围** 长度1-128
    * hostName  **参数解释** 服务器名称 **取值范围** 长度1-128
    * privateIp  **参数解释** 服务器私有IP **取值范围** 长度1-128
    * loginPermission  **参数解释** 是否有登录权限 **取值范围** true: 具有登录权限 false: 不具有登录权限
    * rootPermission  **参数解释** 是否有root权限 **取值范围** true: 具有root权限 false: 不具有root权限
    * userGroupName  **参数解释** 用户组名称 **取值范围** 长度1-128
    * userHomeDir  **参数解释** 用户目录 **取值范围** 长度1-128
    * shell  **参数解释** 用户启动shell **取值范围** 长度1-128
    * userName  **参数解释** 用户名称 **取值范围** 长度1-128
    * expireTime  **参数解释** 到期时间，采用时间戳，默认毫秒 **取值范围** 长度0-4070880000000
    * recentScanTime  **参数解释** 账号增加、修改、删除等操作的变更时间 **取值范围** 长度0-4070880000000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'changeType' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'loginPermission' => 'bool',
            'rootPermission' => 'bool',
            'userGroupName' => 'string',
            'userHomeDir' => 'string',
            'shell' => 'string',
            'userName' => 'string',
            'expireTime' => 'int',
            'recentScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释** agent标识 **取值范围** 长度1-128
    * changeType  **参数解释** 变更类型 **取值范围** - ADD ：添加 - DELETE ：删除 - MODIFY ： 修改
    * hostId  **参数解释** 主机ID **取值范围** 长度1-128
    * hostName  **参数解释** 服务器名称 **取值范围** 长度1-128
    * privateIp  **参数解释** 服务器私有IP **取值范围** 长度1-128
    * loginPermission  **参数解释** 是否有登录权限 **取值范围** true: 具有登录权限 false: 不具有登录权限
    * rootPermission  **参数解释** 是否有root权限 **取值范围** true: 具有root权限 false: 不具有root权限
    * userGroupName  **参数解释** 用户组名称 **取值范围** 长度1-128
    * userHomeDir  **参数解释** 用户目录 **取值范围** 长度1-128
    * shell  **参数解释** 用户启动shell **取值范围** 长度1-128
    * userName  **参数解释** 用户名称 **取值范围** 长度1-128
    * expireTime  **参数解释** 到期时间，采用时间戳，默认毫秒 **取值范围** 长度0-4070880000000
    * recentScanTime  **参数解释** 账号增加、修改、删除等操作的变更时间 **取值范围** 长度0-4070880000000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'changeType' => null,
        'hostId' => null,
        'hostName' => null,
        'privateIp' => null,
        'loginPermission' => null,
        'rootPermission' => null,
        'userGroupName' => null,
        'userHomeDir' => null,
        'shell' => null,
        'userName' => null,
        'expireTime' => 'int64',
        'recentScanTime' => 'int64'
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
    * agentId  **参数解释** agent标识 **取值范围** 长度1-128
    * changeType  **参数解释** 变更类型 **取值范围** - ADD ：添加 - DELETE ：删除 - MODIFY ： 修改
    * hostId  **参数解释** 主机ID **取值范围** 长度1-128
    * hostName  **参数解释** 服务器名称 **取值范围** 长度1-128
    * privateIp  **参数解释** 服务器私有IP **取值范围** 长度1-128
    * loginPermission  **参数解释** 是否有登录权限 **取值范围** true: 具有登录权限 false: 不具有登录权限
    * rootPermission  **参数解释** 是否有root权限 **取值范围** true: 具有root权限 false: 不具有root权限
    * userGroupName  **参数解释** 用户组名称 **取值范围** 长度1-128
    * userHomeDir  **参数解释** 用户目录 **取值范围** 长度1-128
    * shell  **参数解释** 用户启动shell **取值范围** 长度1-128
    * userName  **参数解释** 用户名称 **取值范围** 长度1-128
    * expireTime  **参数解释** 到期时间，采用时间戳，默认毫秒 **取值范围** 长度0-4070880000000
    * recentScanTime  **参数解释** 账号增加、修改、删除等操作的变更时间 **取值范围** 长度0-4070880000000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'changeType' => 'change_type',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'loginPermission' => 'login_permission',
            'rootPermission' => 'root_permission',
            'userGroupName' => 'user_group_name',
            'userHomeDir' => 'user_home_dir',
            'shell' => 'shell',
            'userName' => 'user_name',
            'expireTime' => 'expire_time',
            'recentScanTime' => 'recent_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释** agent标识 **取值范围** 长度1-128
    * changeType  **参数解释** 变更类型 **取值范围** - ADD ：添加 - DELETE ：删除 - MODIFY ： 修改
    * hostId  **参数解释** 主机ID **取值范围** 长度1-128
    * hostName  **参数解释** 服务器名称 **取值范围** 长度1-128
    * privateIp  **参数解释** 服务器私有IP **取值范围** 长度1-128
    * loginPermission  **参数解释** 是否有登录权限 **取值范围** true: 具有登录权限 false: 不具有登录权限
    * rootPermission  **参数解释** 是否有root权限 **取值范围** true: 具有root权限 false: 不具有root权限
    * userGroupName  **参数解释** 用户组名称 **取值范围** 长度1-128
    * userHomeDir  **参数解释** 用户目录 **取值范围** 长度1-128
    * shell  **参数解释** 用户启动shell **取值范围** 长度1-128
    * userName  **参数解释** 用户名称 **取值范围** 长度1-128
    * expireTime  **参数解释** 到期时间，采用时间戳，默认毫秒 **取值范围** 长度0-4070880000000
    * recentScanTime  **参数解释** 账号增加、修改、删除等操作的变更时间 **取值范围** 长度0-4070880000000
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'changeType' => 'setChangeType',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'loginPermission' => 'setLoginPermission',
            'rootPermission' => 'setRootPermission',
            'userGroupName' => 'setUserGroupName',
            'userHomeDir' => 'setUserHomeDir',
            'shell' => 'setShell',
            'userName' => 'setUserName',
            'expireTime' => 'setExpireTime',
            'recentScanTime' => 'setRecentScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释** agent标识 **取值范围** 长度1-128
    * changeType  **参数解释** 变更类型 **取值范围** - ADD ：添加 - DELETE ：删除 - MODIFY ： 修改
    * hostId  **参数解释** 主机ID **取值范围** 长度1-128
    * hostName  **参数解释** 服务器名称 **取值范围** 长度1-128
    * privateIp  **参数解释** 服务器私有IP **取值范围** 长度1-128
    * loginPermission  **参数解释** 是否有登录权限 **取值范围** true: 具有登录权限 false: 不具有登录权限
    * rootPermission  **参数解释** 是否有root权限 **取值范围** true: 具有root权限 false: 不具有root权限
    * userGroupName  **参数解释** 用户组名称 **取值范围** 长度1-128
    * userHomeDir  **参数解释** 用户目录 **取值范围** 长度1-128
    * shell  **参数解释** 用户启动shell **取值范围** 长度1-128
    * userName  **参数解释** 用户名称 **取值范围** 长度1-128
    * expireTime  **参数解释** 到期时间，采用时间戳，默认毫秒 **取值范围** 长度0-4070880000000
    * recentScanTime  **参数解释** 账号增加、修改、删除等操作的变更时间 **取值范围** 长度0-4070880000000
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'changeType' => 'getChangeType',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'loginPermission' => 'getLoginPermission',
            'rootPermission' => 'getRootPermission',
            'userGroupName' => 'getUserGroupName',
            'userHomeDir' => 'getUserHomeDir',
            'shell' => 'getShell',
            'userName' => 'getUserName',
            'expireTime' => 'getExpireTime',
            'recentScanTime' => 'getRecentScanTime'
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
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['loginPermission'] = isset($data['loginPermission']) ? $data['loginPermission'] : null;
        $this->container['rootPermission'] = isset($data['rootPermission']) ? $data['rootPermission'] : null;
        $this->container['userGroupName'] = isset($data['userGroupName']) ? $data['userGroupName'] : null;
        $this->container['userHomeDir'] = isset($data['userHomeDir']) ? $data['userHomeDir'] : null;
        $this->container['shell'] = isset($data['shell']) ? $data['shell'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['recentScanTime'] = isset($data['recentScanTime']) ? $data['recentScanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['changeType']) && (mb_strlen($this->container['changeType']) > 128)) {
                $invalidProperties[] = "invalid value for 'changeType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['changeType']) && (mb_strlen($this->container['changeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'changeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userGroupName']) && (mb_strlen($this->container['userGroupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userGroupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userGroupName']) && (mb_strlen($this->container['userGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userHomeDir']) && (mb_strlen($this->container['userHomeDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'userHomeDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userHomeDir']) && (mb_strlen($this->container['userHomeDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'userHomeDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['shell']) && (mb_strlen($this->container['shell']) > 128)) {
                $invalidProperties[] = "invalid value for 'shell', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['shell']) && (mb_strlen($this->container['shell']) < 1)) {
                $invalidProperties[] = "invalid value for 'shell', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recentScanTime']) && ($this->container['recentScanTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'recentScanTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['recentScanTime']) && ($this->container['recentScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recentScanTime', must be bigger than or equal to 0.";
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
    *  **参数解释** agent标识 **取值范围** 长度1-128
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
    * @param string|null $agentId **参数解释** agent标识 **取值范围** 长度1-128
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets changeType
    *  **参数解释** 变更类型 **取值范围** - ADD ：添加 - DELETE ：删除 - MODIFY ： 修改
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType **参数解释** 变更类型 **取值范围** - ADD ：添加 - DELETE ：删除 - MODIFY ： 修改
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释** 主机ID **取值范围** 长度1-128
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
    * @param string|null $hostId **参数解释** 主机ID **取值范围** 长度1-128
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
    *  **参数解释** 服务器名称 **取值范围** 长度1-128
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
    * @param string|null $hostName **参数解释** 服务器名称 **取值范围** 长度1-128
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释** 服务器私有IP **取值范围** 长度1-128
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释** 服务器私有IP **取值范围** 长度1-128
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets loginPermission
    *  **参数解释** 是否有登录权限 **取值范围** true: 具有登录权限 false: 不具有登录权限
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
    * @param bool|null $loginPermission **参数解释** 是否有登录权限 **取值范围** true: 具有登录权限 false: 不具有登录权限
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
    *  **参数解释** 是否有root权限 **取值范围** true: 具有root权限 false: 不具有root权限
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
    * @param bool|null $rootPermission **参数解释** 是否有root权限 **取值范围** true: 具有root权限 false: 不具有root权限
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
    *  **参数解释** 用户组名称 **取值范围** 长度1-128
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
    * @param string|null $userGroupName **参数解释** 用户组名称 **取值范围** 长度1-128
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
    *  **参数解释** 用户目录 **取值范围** 长度1-128
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
    * @param string|null $userHomeDir **参数解释** 用户目录 **取值范围** 长度1-128
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
    *  **参数解释** 用户启动shell **取值范围** 长度1-128
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
    * @param string|null $shell **参数解释** 用户启动shell **取值范围** 长度1-128
    *
    * @return $this
    */
    public function setShell($shell)
    {
        $this->container['shell'] = $shell;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释** 用户名称 **取值范围** 长度1-128
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
    * @param string|null $userName **参数解释** 用户名称 **取值范围** 长度1-128
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释** 到期时间，采用时间戳，默认毫秒 **取值范围** 长度0-4070880000000
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime **参数解释** 到期时间，采用时间戳，默认毫秒 **取值范围** 长度0-4070880000000
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets recentScanTime
    *  **参数解释** 账号增加、修改、删除等操作的变更时间 **取值范围** 长度0-4070880000000
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
    * @param int|null $recentScanTime **参数解释** 账号增加、修改、删除等操作的变更时间 **取值范围** 长度0-4070880000000
    *
    * @return $this
    */
    public function setRecentScanTime($recentScanTime)
    {
        $this->container['recentScanTime'] = $recentScanTime;
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

