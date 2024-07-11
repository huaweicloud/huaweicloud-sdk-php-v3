<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentHostDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeploymentHostDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  主机集群id
    * hostName  主机名称
    * ip  IP，请输入弹性ip格式：161.17.101.12
    * port  ssh端口，如：22
    * os  操作系统：windows|linux，需要和主机集群保持一致
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * authorization  authorization
    * installIcagent  免费启用应用运维服务（AOM），提供指标监控、日志查询、告警功能（自动安装数据采集器 ICAgent，仅支持华为云linux主机）
    * hostId  主机id
    * proxyHost  proxyHost
    * groupName  主机集群名
    * projectId  项目id
    * projectName  项目名称
    * permission  permission
    * updateTime  更新时间
    * lastestConnectionTime  最后连接时间
    * connectionStatus  连接状态
    * ownerName  拥有者名称
    * updatorId  维护者id
    * createTime  创建时间
    * nickName  昵称
    * ownerId  拥有者id
    * updatorName  维护者名称
    * connectionResult  连接结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'hostName' => 'string',
            'ip' => 'string',
            'port' => 'int',
            'os' => 'string',
            'asProxy' => 'bool',
            'proxyHostId' => 'string',
            'authorization' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostAuthorizationBody',
            'installIcagent' => 'bool',
            'hostId' => 'string',
            'proxyHost' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostDetail',
            'groupName' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'permission' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionHostDetail',
            'updateTime' => 'string',
            'lastestConnectionTime' => 'string',
            'connectionStatus' => 'string',
            'ownerName' => 'string',
            'updatorId' => 'string',
            'createTime' => 'string',
            'nickName' => 'string',
            'ownerId' => 'string',
            'updatorName' => 'string',
            'connectionResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  主机集群id
    * hostName  主机名称
    * ip  IP，请输入弹性ip格式：161.17.101.12
    * port  ssh端口，如：22
    * os  操作系统：windows|linux，需要和主机集群保持一致
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * authorization  authorization
    * installIcagent  免费启用应用运维服务（AOM），提供指标监控、日志查询、告警功能（自动安装数据采集器 ICAgent，仅支持华为云linux主机）
    * hostId  主机id
    * proxyHost  proxyHost
    * groupName  主机集群名
    * projectId  项目id
    * projectName  项目名称
    * permission  permission
    * updateTime  更新时间
    * lastestConnectionTime  最后连接时间
    * connectionStatus  连接状态
    * ownerName  拥有者名称
    * updatorId  维护者id
    * createTime  创建时间
    * nickName  昵称
    * ownerId  拥有者id
    * updatorName  维护者名称
    * connectionResult  连接结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'hostName' => null,
        'ip' => null,
        'port' => 'int32',
        'os' => null,
        'asProxy' => null,
        'proxyHostId' => null,
        'authorization' => null,
        'installIcagent' => null,
        'hostId' => null,
        'proxyHost' => null,
        'groupName' => null,
        'projectId' => null,
        'projectName' => null,
        'permission' => null,
        'updateTime' => null,
        'lastestConnectionTime' => null,
        'connectionStatus' => null,
        'ownerName' => null,
        'updatorId' => null,
        'createTime' => null,
        'nickName' => null,
        'ownerId' => null,
        'updatorName' => null,
        'connectionResult' => null
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
    * groupId  主机集群id
    * hostName  主机名称
    * ip  IP，请输入弹性ip格式：161.17.101.12
    * port  ssh端口，如：22
    * os  操作系统：windows|linux，需要和主机集群保持一致
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * authorization  authorization
    * installIcagent  免费启用应用运维服务（AOM），提供指标监控、日志查询、告警功能（自动安装数据采集器 ICAgent，仅支持华为云linux主机）
    * hostId  主机id
    * proxyHost  proxyHost
    * groupName  主机集群名
    * projectId  项目id
    * projectName  项目名称
    * permission  permission
    * updateTime  更新时间
    * lastestConnectionTime  最后连接时间
    * connectionStatus  连接状态
    * ownerName  拥有者名称
    * updatorId  维护者id
    * createTime  创建时间
    * nickName  昵称
    * ownerId  拥有者id
    * updatorName  维护者名称
    * connectionResult  连接结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'hostName' => 'host_name',
            'ip' => 'ip',
            'port' => 'port',
            'os' => 'os',
            'asProxy' => 'as_proxy',
            'proxyHostId' => 'proxy_host_id',
            'authorization' => 'authorization',
            'installIcagent' => 'install_icagent',
            'hostId' => 'host_id',
            'proxyHost' => 'proxy_host',
            'groupName' => 'group_name',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'permission' => 'permission',
            'updateTime' => 'update_time',
            'lastestConnectionTime' => 'lastest_connection_time',
            'connectionStatus' => 'connection_status',
            'ownerName' => 'owner_name',
            'updatorId' => 'updator_id',
            'createTime' => 'create_time',
            'nickName' => 'nick_name',
            'ownerId' => 'owner_id',
            'updatorName' => 'updator_name',
            'connectionResult' => 'connection_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  主机集群id
    * hostName  主机名称
    * ip  IP，请输入弹性ip格式：161.17.101.12
    * port  ssh端口，如：22
    * os  操作系统：windows|linux，需要和主机集群保持一致
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * authorization  authorization
    * installIcagent  免费启用应用运维服务（AOM），提供指标监控、日志查询、告警功能（自动安装数据采集器 ICAgent，仅支持华为云linux主机）
    * hostId  主机id
    * proxyHost  proxyHost
    * groupName  主机集群名
    * projectId  项目id
    * projectName  项目名称
    * permission  permission
    * updateTime  更新时间
    * lastestConnectionTime  最后连接时间
    * connectionStatus  连接状态
    * ownerName  拥有者名称
    * updatorId  维护者id
    * createTime  创建时间
    * nickName  昵称
    * ownerId  拥有者id
    * updatorName  维护者名称
    * connectionResult  连接结果
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'hostName' => 'setHostName',
            'ip' => 'setIp',
            'port' => 'setPort',
            'os' => 'setOs',
            'asProxy' => 'setAsProxy',
            'proxyHostId' => 'setProxyHostId',
            'authorization' => 'setAuthorization',
            'installIcagent' => 'setInstallIcagent',
            'hostId' => 'setHostId',
            'proxyHost' => 'setProxyHost',
            'groupName' => 'setGroupName',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'permission' => 'setPermission',
            'updateTime' => 'setUpdateTime',
            'lastestConnectionTime' => 'setLastestConnectionTime',
            'connectionStatus' => 'setConnectionStatus',
            'ownerName' => 'setOwnerName',
            'updatorId' => 'setUpdatorId',
            'createTime' => 'setCreateTime',
            'nickName' => 'setNickName',
            'ownerId' => 'setOwnerId',
            'updatorName' => 'setUpdatorName',
            'connectionResult' => 'setConnectionResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  主机集群id
    * hostName  主机名称
    * ip  IP，请输入弹性ip格式：161.17.101.12
    * port  ssh端口，如：22
    * os  操作系统：windows|linux，需要和主机集群保持一致
    * asProxy  是否为代理机
    * proxyHostId  代理机id
    * authorization  authorization
    * installIcagent  免费启用应用运维服务（AOM），提供指标监控、日志查询、告警功能（自动安装数据采集器 ICAgent，仅支持华为云linux主机）
    * hostId  主机id
    * proxyHost  proxyHost
    * groupName  主机集群名
    * projectId  项目id
    * projectName  项目名称
    * permission  permission
    * updateTime  更新时间
    * lastestConnectionTime  最后连接时间
    * connectionStatus  连接状态
    * ownerName  拥有者名称
    * updatorId  维护者id
    * createTime  创建时间
    * nickName  昵称
    * ownerId  拥有者id
    * updatorName  维护者名称
    * connectionResult  连接结果
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'hostName' => 'getHostName',
            'ip' => 'getIp',
            'port' => 'getPort',
            'os' => 'getOs',
            'asProxy' => 'getAsProxy',
            'proxyHostId' => 'getProxyHostId',
            'authorization' => 'getAuthorization',
            'installIcagent' => 'getInstallIcagent',
            'hostId' => 'getHostId',
            'proxyHost' => 'getProxyHost',
            'groupName' => 'getGroupName',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'permission' => 'getPermission',
            'updateTime' => 'getUpdateTime',
            'lastestConnectionTime' => 'getLastestConnectionTime',
            'connectionStatus' => 'getConnectionStatus',
            'ownerName' => 'getOwnerName',
            'updatorId' => 'getUpdatorId',
            'createTime' => 'getCreateTime',
            'nickName' => 'getNickName',
            'ownerId' => 'getOwnerId',
            'updatorName' => 'getUpdatorName',
            'connectionResult' => 'getConnectionResult'
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
    const OS_WINDOWS = 'windows';
    const OS_LINUX = 'linux';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsAllowableValues()
    {
        return [
            self::OS_WINDOWS,
            self::OS_LINUX,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['asProxy'] = isset($data['asProxy']) ? $data['asProxy'] : null;
        $this->container['proxyHostId'] = isset($data['proxyHostId']) ? $data['proxyHostId'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['installIcagent'] = isset($data['installIcagent']) ? $data['installIcagent'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['proxyHost'] = isset($data['proxyHost']) ? $data['proxyHost'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['lastestConnectionTime'] = isset($data['lastestConnectionTime']) ? $data['lastestConnectionTime'] : null;
        $this->container['connectionStatus'] = isset($data['connectionStatus']) ? $data['connectionStatus'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['updatorId'] = isset($data['updatorId']) ? $data['updatorId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['updatorName'] = isset($data['updatorName']) ? $data['updatorName'] : null;
        $this->container['connectionResult'] = isset($data['connectionResult']) ? $data['connectionResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 32)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['groupId']) < 32)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9A-Za-z]{32}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^[0-9A-Za-z]{32}$/.";
            }
        if ($this->container['hostName'] === null) {
            $invalidProperties[] = "'hostName' can't be null";
        }
            if ((mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['hostName']) < 3)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/.";
            }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if (!preg_match("/^([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])$/", $this->container['ip'])) {
                $invalidProperties[] = "invalid value for 'ip', must be conform to the pattern /^([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]{1,2}|1[0-9][0-9]|2[0-4][0-9]|25[0-5])$/.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
            $allowedValues = $this->getOsAllowableValues();
                if (!is_null($this->container['os']) && !in_array($this->container['os'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'os', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['asProxy'] === null) {
            $invalidProperties[] = "'asProxy' can't be null";
        }
            if (!is_null($this->container['proxyHostId']) && !preg_match("/^[0-9A-Za-z]{32}$/", $this->container['proxyHostId'])) {
                $invalidProperties[] = "invalid value for 'proxyHostId', must be conform to the pattern /^[0-9A-Za-z]{32}$/.";
            }
        if ($this->container['authorization'] === null) {
            $invalidProperties[] = "'authorization' can't be null";
        }
            if (!is_null($this->container['hostId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 3)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 3)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 3.";
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
    * Gets groupId
    *  主机集群id
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 主机集群id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets ip
    *  IP，请输入弹性ip格式：161.17.101.12
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip IP，请输入弹性ip格式：161.17.101.12
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets port
    *  ssh端口，如：22
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port ssh端口，如：22
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets os
    *  操作系统：windows|linux，需要和主机集群保持一致
    *
    * @return string
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string $os 操作系统：windows|linux，需要和主机集群保持一致
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets asProxy
    *  是否为代理机
    *
    * @return bool
    */
    public function getAsProxy()
    {
        return $this->container['asProxy'];
    }

    /**
    * Sets asProxy
    *
    * @param bool $asProxy 是否为代理机
    *
    * @return $this
    */
    public function setAsProxy($asProxy)
    {
        $this->container['asProxy'] = $asProxy;
        return $this;
    }

    /**
    * Gets proxyHostId
    *  代理机id
    *
    * @return string|null
    */
    public function getProxyHostId()
    {
        return $this->container['proxyHostId'];
    }

    /**
    * Sets proxyHostId
    *
    * @param string|null $proxyHostId 代理机id
    *
    * @return $this
    */
    public function setProxyHostId($proxyHostId)
    {
        $this->container['proxyHostId'] = $proxyHostId;
        return $this;
    }

    /**
    * Gets authorization
    *  authorization
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostAuthorizationBody
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostAuthorizationBody $authorization authorization
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets installIcagent
    *  免费启用应用运维服务（AOM），提供指标监控、日志查询、告警功能（自动安装数据采集器 ICAgent，仅支持华为云linux主机）
    *
    * @return bool|null
    */
    public function getInstallIcagent()
    {
        return $this->container['installIcagent'];
    }

    /**
    * Sets installIcagent
    *
    * @param bool|null $installIcagent 免费启用应用运维服务（AOM），提供指标监控、日志查询、告警功能（自动安装数据采集器 ICAgent，仅支持华为云linux主机）
    *
    * @return $this
    */
    public function setInstallIcagent($installIcagent)
    {
        $this->container['installIcagent'] = $installIcagent;
        return $this;
    }

    /**
    * Gets hostId
    *  主机id
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
    * @param string|null $hostId 主机id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets proxyHost
    *  proxyHost
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostDetail|null
    */
    public function getProxyHost()
    {
        return $this->container['proxyHost'];
    }

    /**
    * Sets proxyHost
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostDetail|null $proxyHost proxyHost
    *
    * @return $this
    */
    public function setProxyHost($proxyHost)
    {
        $this->container['proxyHost'] = $proxyHost;
        return $this;
    }

    /**
    * Gets groupName
    *  主机集群名
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 主机集群名
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets permission
    *  permission
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionHostDetail|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionHostDetail|null $permission permission
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets lastestConnectionTime
    *  最后连接时间
    *
    * @return string|null
    */
    public function getLastestConnectionTime()
    {
        return $this->container['lastestConnectionTime'];
    }

    /**
    * Sets lastestConnectionTime
    *
    * @param string|null $lastestConnectionTime 最后连接时间
    *
    * @return $this
    */
    public function setLastestConnectionTime($lastestConnectionTime)
    {
        $this->container['lastestConnectionTime'] = $lastestConnectionTime;
        return $this;
    }

    /**
    * Gets connectionStatus
    *  连接状态
    *
    * @return string|null
    */
    public function getConnectionStatus()
    {
        return $this->container['connectionStatus'];
    }

    /**
    * Sets connectionStatus
    *
    * @param string|null $connectionStatus 连接状态
    *
    * @return $this
    */
    public function setConnectionStatus($connectionStatus)
    {
        $this->container['connectionStatus'] = $connectionStatus;
        return $this;
    }

    /**
    * Gets ownerName
    *  拥有者名称
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 拥有者名称
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets updatorId
    *  维护者id
    *
    * @return string|null
    */
    public function getUpdatorId()
    {
        return $this->container['updatorId'];
    }

    /**
    * Sets updatorId
    *
    * @param string|null $updatorId 维护者id
    *
    * @return $this
    */
    public function setUpdatorId($updatorId)
    {
        $this->container['updatorId'] = $updatorId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets nickName
    *  昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets ownerId
    *  拥有者id
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 拥有者id
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets updatorName
    *  维护者名称
    *
    * @return string|null
    */
    public function getUpdatorName()
    {
        return $this->container['updatorName'];
    }

    /**
    * Sets updatorName
    *
    * @param string|null $updatorName 维护者名称
    *
    * @return $this
    */
    public function setUpdatorName($updatorName)
    {
        $this->container['updatorName'] = $updatorName;
        return $this;
    }

    /**
    * Gets connectionResult
    *  连接结果
    *
    * @return string|null
    */
    public function getConnectionResult()
    {
        return $this->container['connectionResult'];
    }

    /**
    * Sets connectionResult
    *
    * @param string|null $connectionResult 连接结果
    *
    * @return $this
    */
    public function setConnectionResult($connectionResult)
    {
        $this->container['connectionResult'] = $connectionResult;
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

