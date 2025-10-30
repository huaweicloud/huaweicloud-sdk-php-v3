<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebFrameworkHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebFrameworkHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    * name  **参数解释**: web框架名称 **取值范围**: 字符长度1-256
    * version  **参数解释**: web框架版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: web框架文件路径 **取值范围**: 字符长度1-512
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * catalogue  **参数解释**: 软件的类型 **取值范围**: 字符长度1-32
    * fileName  **参数解释**: web框架文件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: web框架文件类型 **取值范围**: 字符长度1-32
    * gid  **参数解释**: web框架进程gid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: web框架文件哈希 **取值范围**: 字符长度1-64
    * isEmbedded  **参数解释**: 是否是压缩的文件 **取值范围**: - 0：不是压缩文件 - 1：是压缩文件
    * mode  **参数解释**: web框架文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web框架进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web框架进程路径 **取值范围**: 字符长度1-1024
    * uid  **参数解释**: web框架进程uid **取值范围**: 最小值0，最大值2147483647
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'name' => 'string',
            'version' => 'string',
            'path' => 'string',
            'recordTime' => 'int',
            'catalogue' => 'string',
            'fileName' => 'string',
            'fileType' => 'string',
            'gid' => 'int',
            'hash' => 'string',
            'isEmbedded' => 'int',
            'mode' => 'string',
            'pid' => 'int',
            'procPath' => 'string',
            'uid' => 'int',
            'containerId' => 'string',
            'containerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    * name  **参数解释**: web框架名称 **取值范围**: 字符长度1-256
    * version  **参数解释**: web框架版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: web框架文件路径 **取值范围**: 字符长度1-512
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * catalogue  **参数解释**: 软件的类型 **取值范围**: 字符长度1-32
    * fileName  **参数解释**: web框架文件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: web框架文件类型 **取值范围**: 字符长度1-32
    * gid  **参数解释**: web框架进程gid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: web框架文件哈希 **取值范围**: 字符长度1-64
    * isEmbedded  **参数解释**: 是否是压缩的文件 **取值范围**: - 0：不是压缩文件 - 1：是压缩文件
    * mode  **参数解释**: web框架文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web框架进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web框架进程路径 **取值范围**: 字符长度1-1024
    * uid  **参数解释**: web框架进程uid **取值范围**: 最小值0，最大值2147483647
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'name' => null,
        'version' => null,
        'path' => null,
        'recordTime' => 'int64',
        'catalogue' => null,
        'fileName' => null,
        'fileType' => null,
        'gid' => 'int32',
        'hash' => null,
        'isEmbedded' => 'int32',
        'mode' => null,
        'pid' => 'int32',
        'procPath' => null,
        'uid' => 'int32',
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
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    * name  **参数解释**: web框架名称 **取值范围**: 字符长度1-256
    * version  **参数解释**: web框架版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: web框架文件路径 **取值范围**: 字符长度1-512
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * catalogue  **参数解释**: 软件的类型 **取值范围**: 字符长度1-32
    * fileName  **参数解释**: web框架文件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: web框架文件类型 **取值范围**: 字符长度1-32
    * gid  **参数解释**: web框架进程gid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: web框架文件哈希 **取值范围**: 字符长度1-64
    * isEmbedded  **参数解释**: 是否是压缩的文件 **取值范围**: - 0：不是压缩文件 - 1：是压缩文件
    * mode  **参数解释**: web框架文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web框架进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web框架进程路径 **取值范围**: 字符长度1-1024
    * uid  **参数解释**: web框架进程uid **取值范围**: 最小值0，最大值2147483647
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'name' => 'name',
            'version' => 'version',
            'path' => 'path',
            'recordTime' => 'record_time',
            'catalogue' => 'catalogue',
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'gid' => 'gid',
            'hash' => 'hash',
            'isEmbedded' => 'is_embedded',
            'mode' => 'mode',
            'pid' => 'pid',
            'procPath' => 'proc_path',
            'uid' => 'uid',
            'containerId' => 'container_id',
            'containerName' => 'container_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    * name  **参数解释**: web框架名称 **取值范围**: 字符长度1-256
    * version  **参数解释**: web框架版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: web框架文件路径 **取值范围**: 字符长度1-512
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * catalogue  **参数解释**: 软件的类型 **取值范围**: 字符长度1-32
    * fileName  **参数解释**: web框架文件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: web框架文件类型 **取值范围**: 字符长度1-32
    * gid  **参数解释**: web框架进程gid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: web框架文件哈希 **取值范围**: 字符长度1-64
    * isEmbedded  **参数解释**: 是否是压缩的文件 **取值范围**: - 0：不是压缩文件 - 1：是压缩文件
    * mode  **参数解释**: web框架文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web框架进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web框架进程路径 **取值范围**: 字符长度1-1024
    * uid  **参数解释**: web框架进程uid **取值范围**: 最小值0，最大值2147483647
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'name' => 'setName',
            'version' => 'setVersion',
            'path' => 'setPath',
            'recordTime' => 'setRecordTime',
            'catalogue' => 'setCatalogue',
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'gid' => 'setGid',
            'hash' => 'setHash',
            'isEmbedded' => 'setIsEmbedded',
            'mode' => 'setMode',
            'pid' => 'setPid',
            'procPath' => 'setProcPath',
            'uid' => 'setUid',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释** agent id **取值范围** 字符长度1-64
    * hostId  **参数解释** 主机id **取值范围** 字符长度1-64
    * hostName  **参数解释** 服务器名称 **取值范围** 字符长度1-64
    * hostIp  **参数解释** 服务器ip **取值范围** 字符长度1-64
    * name  **参数解释**: web框架名称 **取值范围**: 字符长度1-256
    * version  **参数解释**: web框架版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: web框架文件路径 **取值范围**: 字符长度1-512
    * recordTime  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * catalogue  **参数解释**: 软件的类型 **取值范围**: 字符长度1-32
    * fileName  **参数解释**: web框架文件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: web框架文件类型 **取值范围**: 字符长度1-32
    * gid  **参数解释**: web框架进程gid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: web框架文件哈希 **取值范围**: 字符长度1-64
    * isEmbedded  **参数解释**: 是否是压缩的文件 **取值范围**: - 0：不是压缩文件 - 1：是压缩文件
    * mode  **参数解释**: web框架文件权限 **取值范围**: 字符长度1-32
    * pid  **参数解释**: web框架进程pid **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: web框架进程路径 **取值范围**: 字符长度1-1024
    * uid  **参数解释**: web框架进程uid **取值范围**: 最小值0，最大值2147483647
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'name' => 'getName',
            'version' => 'getVersion',
            'path' => 'getPath',
            'recordTime' => 'getRecordTime',
            'catalogue' => 'getCatalogue',
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'gid' => 'getGid',
            'hash' => 'getHash',
            'isEmbedded' => 'getIsEmbedded',
            'mode' => 'getMode',
            'pid' => 'getPid',
            'procPath' => 'getProcPath',
            'uid' => 'getUid',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['isEmbedded'] = isset($data['isEmbedded']) ? $data['isEmbedded'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['procPath'] = isset($data['procPath']) ? $data['procPath'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
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
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 512)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 512)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['catalogue']) && (mb_strlen($this->container['catalogue']) > 32)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['catalogue']) && (mb_strlen($this->container['catalogue']) < 1)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 32)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 64)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 1)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 32)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 1)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['procPath']) && (mb_strlen($this->container['procPath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'procPath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['procPath']) && (mb_strlen($this->container['procPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'procPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  **参数解释**: web框架名称 **取值范围**: 字符长度1-256
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
    * @param string|null $name **参数解释**: web框架名称 **取值范围**: 字符长度1-256
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
    *  **参数解释**: web框架版本 **取值范围**: 字符长度1-512
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
    * @param string|null $version **参数解释**: web框架版本 **取值范围**: 字符长度1-512
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: web框架文件路径 **取值范围**: 字符长度1-512
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: web框架文件路径 **取值范围**: 字符长度1-512
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets recordTime
    *  **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
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
    * @param int|null $recordTime **参数解释**: web框架扫描时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets catalogue
    *  **参数解释**: 软件的类型 **取值范围**: 字符长度1-32
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
    * @param string|null $catalogue **参数解释**: 软件的类型 **取值范围**: 字符长度1-32
    *
    * @return $this
    */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**: web框架文件名称 **取值范围**: 字符长度1-256
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName **参数解释**: web框架文件名称 **取值范围**: 字符长度1-256
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileType
    *  **参数解释**: web框架文件类型 **取值范围**: 字符长度1-32
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType **参数解释**: web框架文件类型 **取值范围**: 字符长度1-32
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets gid
    *  **参数解释**: web框架进程gid **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $gid **参数解释**: web框架进程gid **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setGid($gid)
    {
        $this->container['gid'] = $gid;
        return $this;
    }

    /**
    * Gets hash
    *  **参数解释**: web框架文件哈希 **取值范围**: 字符长度1-64
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
    * @param string|null $hash **参数解释**: web框架文件哈希 **取值范围**: 字符长度1-64
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets isEmbedded
    *  **参数解释**: 是否是压缩的文件 **取值范围**: - 0：不是压缩文件 - 1：是压缩文件
    *
    * @return int|null
    */
    public function getIsEmbedded()
    {
        return $this->container['isEmbedded'];
    }

    /**
    * Sets isEmbedded
    *
    * @param int|null $isEmbedded **参数解释**: 是否是压缩的文件 **取值范围**: - 0：不是压缩文件 - 1：是压缩文件
    *
    * @return $this
    */
    public function setIsEmbedded($isEmbedded)
    {
        $this->container['isEmbedded'] = $isEmbedded;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**: web框架文件权限 **取值范围**: 字符长度1-32
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
    * @param string|null $mode **参数解释**: web框架文件权限 **取值范围**: 字符长度1-32
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**: web框架进程pid **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $pid **参数解释**: web框架进程pid **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: web框架进程路径 **取值范围**: 字符长度1-1024
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
    * @param string|null $procPath **参数解释**: web框架进程路径 **取值范围**: 字符长度1-1024
    *
    * @return $this
    */
    public function setProcPath($procPath)
    {
        $this->container['procPath'] = $procPath;
        return $this;
    }

    /**
    * Gets uid
    *  **参数解释**: web框架进程uid **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $uid **参数解释**: web框架进程uid **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器id **取值范围**: 字符长度1-128
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
    * @param string|null $containerId **参数解释**: 容器id **取值范围**: 字符长度1-128
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
    *  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
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
    * @param string|null $containerName **参数解释**: 容器名称 **取值范围**: 字符长度1-256
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

