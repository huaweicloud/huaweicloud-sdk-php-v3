<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebAppAndServiceResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebAppAndServiceResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * catalogue  **参数解释**: web应用、web服务、数据库资产指纹种类 **取值范围**: 字符长度0-64
    * name  **参数解释**: 资产指纹名字 **取值范围**: 字符长度0-64
    * version  **参数解释**: 资产指纹版本 **取值范围**: 字符长度0-64
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * installPath  **参数解释** 安装路径 **取值范围** 字符长度0-256
    * configPath  **参数解释** 配置文件路径 **取值范围** 字符长度0-256
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: 资产指纹文件权限 **取值范围**: 字符长度1-32
    * ctime  **参数解释**: 资产指纹文件最近状态改变时间 **取值范围**: 最小值0，最大值2^63-1
    * mtime  **参数解释**: 资产指纹文件最近修改时间 **取值范围**: 最小值0，最大值2^63-1
    * atime  **参数解释**: 资产指纹文件最近访问时间 **取值范围**: 最小值0，最大值2^63-1
    * pid  **参数解释**: pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 资产指纹进程路径 **取值范围**: 字符长度0-256
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度0-256
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-256
    * recordTime  **参数解释**: 资产指纹扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'catalogue' => 'string',
            'name' => 'string',
            'version' => 'string',
            'agentId' => 'string',
            'installPath' => 'string',
            'configPath' => 'string',
            'uid' => 'int',
            'gid' => 'int',
            'mode' => 'string',
            'ctime' => 'int',
            'mtime' => 'int',
            'atime' => 'int',
            'pid' => 'int',
            'procPath' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'recordTime' => 'int',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalogue  **参数解释**: web应用、web服务、数据库资产指纹种类 **取值范围**: 字符长度0-64
    * name  **参数解释**: 资产指纹名字 **取值范围**: 字符长度0-64
    * version  **参数解释**: 资产指纹版本 **取值范围**: 字符长度0-64
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * installPath  **参数解释** 安装路径 **取值范围** 字符长度0-256
    * configPath  **参数解释** 配置文件路径 **取值范围** 字符长度0-256
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: 资产指纹文件权限 **取值范围**: 字符长度1-32
    * ctime  **参数解释**: 资产指纹文件最近状态改变时间 **取值范围**: 最小值0，最大值2^63-1
    * mtime  **参数解释**: 资产指纹文件最近修改时间 **取值范围**: 最小值0，最大值2^63-1
    * atime  **参数解释**: 资产指纹文件最近访问时间 **取值范围**: 最小值0，最大值2^63-1
    * pid  **参数解释**: pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 资产指纹进程路径 **取值范围**: 字符长度0-256
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度0-256
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-256
    * recordTime  **参数解释**: 资产指纹扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'catalogue' => null,
        'name' => null,
        'version' => null,
        'agentId' => null,
        'installPath' => null,
        'configPath' => null,
        'uid' => 'int32',
        'gid' => 'int32',
        'mode' => null,
        'ctime' => 'int64',
        'mtime' => 'int64',
        'atime' => 'int64',
        'pid' => 'int32',
        'procPath' => null,
        'containerId' => null,
        'containerName' => null,
        'recordTime' => 'int64',
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null
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
    * catalogue  **参数解释**: web应用、web服务、数据库资产指纹种类 **取值范围**: 字符长度0-64
    * name  **参数解释**: 资产指纹名字 **取值范围**: 字符长度0-64
    * version  **参数解释**: 资产指纹版本 **取值范围**: 字符长度0-64
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * installPath  **参数解释** 安装路径 **取值范围** 字符长度0-256
    * configPath  **参数解释** 配置文件路径 **取值范围** 字符长度0-256
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: 资产指纹文件权限 **取值范围**: 字符长度1-32
    * ctime  **参数解释**: 资产指纹文件最近状态改变时间 **取值范围**: 最小值0，最大值2^63-1
    * mtime  **参数解释**: 资产指纹文件最近修改时间 **取值范围**: 最小值0，最大值2^63-1
    * atime  **参数解释**: 资产指纹文件最近访问时间 **取值范围**: 最小值0，最大值2^63-1
    * pid  **参数解释**: pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 资产指纹进程路径 **取值范围**: 字符长度0-256
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度0-256
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-256
    * recordTime  **参数解释**: 资产指纹扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'catalogue' => 'catalogue',
            'name' => 'name',
            'version' => 'version',
            'agentId' => 'agent_id',
            'installPath' => 'install_path',
            'configPath' => 'config_path',
            'uid' => 'uid',
            'gid' => 'gid',
            'mode' => 'mode',
            'ctime' => 'ctime',
            'mtime' => 'mtime',
            'atime' => 'atime',
            'pid' => 'pid',
            'procPath' => 'proc_path',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'recordTime' => 'record_time',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalogue  **参数解释**: web应用、web服务、数据库资产指纹种类 **取值范围**: 字符长度0-64
    * name  **参数解释**: 资产指纹名字 **取值范围**: 字符长度0-64
    * version  **参数解释**: 资产指纹版本 **取值范围**: 字符长度0-64
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * installPath  **参数解释** 安装路径 **取值范围** 字符长度0-256
    * configPath  **参数解释** 配置文件路径 **取值范围** 字符长度0-256
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: 资产指纹文件权限 **取值范围**: 字符长度1-32
    * ctime  **参数解释**: 资产指纹文件最近状态改变时间 **取值范围**: 最小值0，最大值2^63-1
    * mtime  **参数解释**: 资产指纹文件最近修改时间 **取值范围**: 最小值0，最大值2^63-1
    * atime  **参数解释**: 资产指纹文件最近访问时间 **取值范围**: 最小值0，最大值2^63-1
    * pid  **参数解释**: pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 资产指纹进程路径 **取值范围**: 字符长度0-256
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度0-256
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-256
    * recordTime  **参数解释**: 资产指纹扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    *
    * @var string[]
    */
    protected static $setters = [
            'catalogue' => 'setCatalogue',
            'name' => 'setName',
            'version' => 'setVersion',
            'agentId' => 'setAgentId',
            'installPath' => 'setInstallPath',
            'configPath' => 'setConfigPath',
            'uid' => 'setUid',
            'gid' => 'setGid',
            'mode' => 'setMode',
            'ctime' => 'setCtime',
            'mtime' => 'setMtime',
            'atime' => 'setAtime',
            'pid' => 'setPid',
            'procPath' => 'setProcPath',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'recordTime' => 'setRecordTime',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalogue  **参数解释**: web应用、web服务、数据库资产指纹种类 **取值范围**: 字符长度0-64
    * name  **参数解释**: 资产指纹名字 **取值范围**: 字符长度0-64
    * version  **参数解释**: 资产指纹版本 **取值范围**: 字符长度0-64
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * installPath  **参数解释** 安装路径 **取值范围** 字符长度0-256
    * configPath  **参数解释** 配置文件路径 **取值范围** 字符长度0-256
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * gid  **参数解释**: gid **取值范围**: 最小值0，最大值2147483647
    * mode  **参数解释**: 资产指纹文件权限 **取值范围**: 字符长度1-32
    * ctime  **参数解释**: 资产指纹文件最近状态改变时间 **取值范围**: 最小值0，最大值2^63-1
    * mtime  **参数解释**: 资产指纹文件最近修改时间 **取值范围**: 最小值0，最大值2^63-1
    * atime  **参数解释**: 资产指纹文件最近访问时间 **取值范围**: 最小值0，最大值2^63-1
    * pid  **参数解释**: pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 资产指纹进程路径 **取值范围**: 字符长度0-256
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度0-256
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-256
    * recordTime  **参数解释**: 资产指纹扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    *
    * @var string[]
    */
    protected static $getters = [
            'catalogue' => 'getCatalogue',
            'name' => 'getName',
            'version' => 'getVersion',
            'agentId' => 'getAgentId',
            'installPath' => 'getInstallPath',
            'configPath' => 'getConfigPath',
            'uid' => 'getUid',
            'gid' => 'getGid',
            'mode' => 'getMode',
            'ctime' => 'getCtime',
            'mtime' => 'getMtime',
            'atime' => 'getAtime',
            'pid' => 'getPid',
            'procPath' => 'getProcPath',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'recordTime' => 'getRecordTime',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp'
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
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['installPath'] = isset($data['installPath']) ? $data['installPath'] : null;
        $this->container['configPath'] = isset($data['configPath']) ? $data['configPath'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['ctime'] = isset($data['ctime']) ? $data['ctime'] : null;
        $this->container['mtime'] = isset($data['mtime']) ? $data['mtime'] : null;
        $this->container['atime'] = isset($data['atime']) ? $data['atime'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['procPath'] = isset($data['procPath']) ? $data['procPath'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['catalogue']) && (mb_strlen($this->container['catalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['catalogue']) && (mb_strlen($this->container['catalogue']) < 0)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['installPath']) && (mb_strlen($this->container['installPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'installPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['installPath']) && (mb_strlen($this->container['installPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'installPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['configPath']) && (mb_strlen($this->container['configPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'configPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['configPath']) && (mb_strlen($this->container['configPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'configPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 32)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 1)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['procPath']) && (mb_strlen($this->container['procPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'procPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['procPath']) && (mb_strlen($this->container['procPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'procPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
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
    * Gets catalogue
    *  **参数解释**: web应用、web服务、数据库资产指纹种类 **取值范围**: 字符长度0-64
    *
    * @return string|null
    */
    public function getCatalogue()
    {
        return $this->container['catalogue'];
    }

    /**
    * Sets catalogue
    *
    * @param string|null $catalogue **参数解释**: web应用、web服务、数据库资产指纹种类 **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 资产指纹名字 **取值范围**: 字符长度0-64
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**: 资产指纹名字 **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 资产指纹版本 **取值范围**: 字符长度0-64
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 资产指纹版本 **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释** agent id **取值范围** 字符长度1-64
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
    * @param string|null $agentId **参数解释** agent id **取值范围** 字符长度1-64
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets installPath
    *  **参数解释** 安装路径 **取值范围** 字符长度0-256
    *
    * @return string|null
    */
    public function getInstallPath()
    {
        return $this->container['installPath'];
    }

    /**
    * Sets installPath
    *
    * @param string|null $installPath **参数解释** 安装路径 **取值范围** 字符长度0-256
    *
    * @return $this
    */
    public function setInstallPath($installPath)
    {
        $this->container['installPath'] = $installPath;
        return $this;
    }

    /**
    * Gets configPath
    *  **参数解释** 配置文件路径 **取值范围** 字符长度0-256
    *
    * @return string|null
    */
    public function getConfigPath()
    {
        return $this->container['configPath'];
    }

    /**
    * Sets configPath
    *
    * @param string|null $configPath **参数解释** 配置文件路径 **取值范围** 字符长度0-256
    *
    * @return $this
    */
    public function setConfigPath($configPath)
    {
        $this->container['configPath'] = $configPath;
        return $this;
    }

    /**
    * Gets uid
    *  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param int|null $uid **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets gid
    *  **参数解释**: gid **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getGid()
    {
        return $this->container['gid'];
    }

    /**
    * Sets gid
    *
    * @param int|null $gid **参数解释**: gid **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setGid($gid)
    {
        $this->container['gid'] = $gid;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**: 资产指纹文件权限 **取值范围**: 字符长度1-32
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**: 资产指纹文件权限 **取值范围**: 字符长度1-32
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets ctime
    *  **参数解释**: 资产指纹文件最近状态改变时间 **取值范围**: 最小值0，最大值2^63-1
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
    * @param int|null $ctime **参数解释**: 资产指纹文件最近状态改变时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setCtime($ctime)
    {
        $this->container['ctime'] = $ctime;
        return $this;
    }

    /**
    * Gets mtime
    *  **参数解释**: 资产指纹文件最近修改时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return int|null
    */
    public function getMtime()
    {
        return $this->container['mtime'];
    }

    /**
    * Sets mtime
    *
    * @param int|null $mtime **参数解释**: 资产指纹文件最近修改时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setMtime($mtime)
    {
        $this->container['mtime'] = $mtime;
        return $this;
    }

    /**
    * Gets atime
    *  **参数解释**: 资产指纹文件最近访问时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return int|null
    */
    public function getAtime()
    {
        return $this->container['atime'];
    }

    /**
    * Sets atime
    *
    * @param int|null $atime **参数解释**: 资产指纹文件最近访问时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setAtime($atime)
    {
        $this->container['atime'] = $atime;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**: pid **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param int|null $pid **参数解释**: pid **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets procPath
    *  **参数解释**: 资产指纹进程路径 **取值范围**: 字符长度0-256
    *
    * @return string|null
    */
    public function getProcPath()
    {
        return $this->container['procPath'];
    }

    /**
    * Sets procPath
    *
    * @param string|null $procPath **参数解释**: 资产指纹进程路径 **取值范围**: 字符长度0-256
    *
    * @return $this
    */
    public function setProcPath($procPath)
    {
        $this->container['procPath'] = $procPath;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器id **取值范围**: 字符长度0-256
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
    * @param string|null $containerId **参数解释**: 容器id **取值范围**: 字符长度0-256
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
    *  **参数解释**: 容器名称 **取值范围**: 字符长度0-256
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
    * @param string|null $containerName **参数解释**: 容器名称 **取值范围**: 字符长度0-256
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets recordTime
    *  **参数解释**: 资产指纹扫描时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return int|null
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param int|null $recordTime **参数解释**: 资产指纹扫描时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释** 主机id **取值范围** 字符长度1-64
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
    * @param string|null $hostId **参数解释** 主机id **取值范围** 字符长度1-64
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
    *  **参数解释** 服务器名称 **取值范围** 字符长度1-64
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
    * @param string|null $hostName **参数解释** 服务器名称 **取值范围** 字符长度1-64
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
    *  **参数解释** 服务器ip **取值范围** 字符长度1-64
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
    * @param string|null $hostIp **参数解释** 服务器ip **取值范围** 字符长度1-64
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
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

