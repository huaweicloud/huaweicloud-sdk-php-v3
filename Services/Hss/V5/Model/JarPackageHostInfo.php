<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JarPackageHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JarPackageHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  Agent ID
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * fileName  Jar包名称
    * name  Jar包名称(不带后缀)
    * catalogue  Jar包类型
    * fileType  Jar包后缀
    * version  Jar包版本
    * path  Jar包路径
    * hash  Jar包hash
    * size  Jar包大小
    * uid  uid
    * gid  gid
    * mode  文件权限
    * pid  进程id
    * procPath  进程可执行文件路径
    * containerId  容器实例id
    * containerName  容器名称
    * packagePath  包路径
    * isEmbedded  显示的是否是嵌套包
    * recordTime  扫描时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'fileName' => 'string',
            'name' => 'string',
            'catalogue' => 'string',
            'fileType' => 'string',
            'version' => 'string',
            'path' => 'string',
            'hash' => 'string',
            'size' => 'int',
            'uid' => 'int',
            'gid' => 'int',
            'mode' => 'string',
            'pid' => 'int',
            'procPath' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'packagePath' => 'string',
            'isEmbedded' => 'int',
            'recordTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  Agent ID
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * fileName  Jar包名称
    * name  Jar包名称(不带后缀)
    * catalogue  Jar包类型
    * fileType  Jar包后缀
    * version  Jar包版本
    * path  Jar包路径
    * hash  Jar包hash
    * size  Jar包大小
    * uid  uid
    * gid  gid
    * mode  文件权限
    * pid  进程id
    * procPath  进程可执行文件路径
    * containerId  容器实例id
    * containerName  容器名称
    * packagePath  包路径
    * isEmbedded  显示的是否是嵌套包
    * recordTime  扫描时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'fileName' => null,
        'name' => null,
        'catalogue' => null,
        'fileType' => null,
        'version' => null,
        'path' => null,
        'hash' => null,
        'size' => null,
        'uid' => null,
        'gid' => null,
        'mode' => null,
        'pid' => null,
        'procPath' => null,
        'containerId' => null,
        'containerName' => null,
        'packagePath' => null,
        'isEmbedded' => null,
        'recordTime' => 'int64'
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
    * agentId  Agent ID
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * fileName  Jar包名称
    * name  Jar包名称(不带后缀)
    * catalogue  Jar包类型
    * fileType  Jar包后缀
    * version  Jar包版本
    * path  Jar包路径
    * hash  Jar包hash
    * size  Jar包大小
    * uid  uid
    * gid  gid
    * mode  文件权限
    * pid  进程id
    * procPath  进程可执行文件路径
    * containerId  容器实例id
    * containerName  容器名称
    * packagePath  包路径
    * isEmbedded  显示的是否是嵌套包
    * recordTime  扫描时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'fileName' => 'file_name',
            'name' => 'name',
            'catalogue' => 'catalogue',
            'fileType' => 'file_type',
            'version' => 'version',
            'path' => 'path',
            'hash' => 'hash',
            'size' => 'size',
            'uid' => 'uid',
            'gid' => 'gid',
            'mode' => 'mode',
            'pid' => 'pid',
            'procPath' => 'proc_path',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'packagePath' => 'package_path',
            'isEmbedded' => 'is_embedded',
            'recordTime' => 'record_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  Agent ID
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * fileName  Jar包名称
    * name  Jar包名称(不带后缀)
    * catalogue  Jar包类型
    * fileType  Jar包后缀
    * version  Jar包版本
    * path  Jar包路径
    * hash  Jar包hash
    * size  Jar包大小
    * uid  uid
    * gid  gid
    * mode  文件权限
    * pid  进程id
    * procPath  进程可执行文件路径
    * containerId  容器实例id
    * containerName  容器名称
    * packagePath  包路径
    * isEmbedded  显示的是否是嵌套包
    * recordTime  扫描时间
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'fileName' => 'setFileName',
            'name' => 'setName',
            'catalogue' => 'setCatalogue',
            'fileType' => 'setFileType',
            'version' => 'setVersion',
            'path' => 'setPath',
            'hash' => 'setHash',
            'size' => 'setSize',
            'uid' => 'setUid',
            'gid' => 'setGid',
            'mode' => 'setMode',
            'pid' => 'setPid',
            'procPath' => 'setProcPath',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'packagePath' => 'setPackagePath',
            'isEmbedded' => 'setIsEmbedded',
            'recordTime' => 'setRecordTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  Agent ID
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * fileName  Jar包名称
    * name  Jar包名称(不带后缀)
    * catalogue  Jar包类型
    * fileType  Jar包后缀
    * version  Jar包版本
    * path  Jar包路径
    * hash  Jar包hash
    * size  Jar包大小
    * uid  uid
    * gid  gid
    * mode  文件权限
    * pid  进程id
    * procPath  进程可执行文件路径
    * containerId  容器实例id
    * containerName  容器名称
    * packagePath  包路径
    * isEmbedded  显示的是否是嵌套包
    * recordTime  扫描时间
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'fileName' => 'getFileName',
            'name' => 'getName',
            'catalogue' => 'getCatalogue',
            'fileType' => 'getFileType',
            'version' => 'getVersion',
            'path' => 'getPath',
            'hash' => 'getHash',
            'size' => 'getSize',
            'uid' => 'getUid',
            'gid' => 'getGid',
            'mode' => 'getMode',
            'pid' => 'getPid',
            'procPath' => 'getProcPath',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'packagePath' => 'getPackagePath',
            'isEmbedded' => 'getIsEmbedded',
            'recordTime' => 'getRecordTime'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['procPath'] = isset($data['procPath']) ? $data['procPath'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['packagePath'] = isset($data['packagePath']) ? $data['packagePath'] : null;
        $this->container['isEmbedded'] = isset($data['isEmbedded']) ? $data['isEmbedded'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['catalogue']) && (mb_strlen($this->container['catalogue']) > 32)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['catalogue']) && (mb_strlen($this->container['catalogue']) < 0)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 32)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 512)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 512)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 0)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uid']) && ($this->container['uid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'uid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['uid']) && ($this->container['uid'] < 0)) {
                $invalidProperties[] = "invalid value for 'uid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gid']) && ($this->container['gid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'gid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['gid']) && ($this->container['gid'] < 0)) {
                $invalidProperties[] = "invalid value for 'gid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 32)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] < 0)) {
                $invalidProperties[] = "invalid value for 'pid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['procPath']) && (mb_strlen($this->container['procPath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'procPath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['procPath']) && (mb_strlen($this->container['procPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'procPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
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
            if (!is_null($this->container['packagePath']) && (mb_strlen($this->container['packagePath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'packagePath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['packagePath']) && (mb_strlen($this->container['packagePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'packagePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isEmbedded']) && ($this->container['isEmbedded'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'isEmbedded', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['isEmbedded']) && ($this->container['isEmbedded'] < 0)) {
                $invalidProperties[] = "invalid value for 'isEmbedded', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordTime']) && ($this->container['recordTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'recordTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['recordTime']) && ($this->container['recordTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recordTime', must be bigger than or equal to 0.";
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
    *  Agent ID
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
    * @param string|null $agentId Agent ID
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
    * Gets hostName
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
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
    *  服务器ip
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
    * @param string|null $hostIp 服务器ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets fileName
    *  Jar包名称
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
    * @param string|null $fileName Jar包名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets name
    *  Jar包名称(不带后缀)
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
    * @param string|null $name Jar包名称(不带后缀)
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets catalogue
    *  Jar包类型
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
    * @param string|null $catalogue Jar包类型
    *
    * @return $this
    */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;
        return $this;
    }

    /**
    * Gets fileType
    *  Jar包后缀
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
    * @param string|null $fileType Jar包后缀
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets version
    *  Jar包版本
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
    * @param string|null $version Jar包版本
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
    *  Jar包路径
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
    * @param string|null $path Jar包路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets hash
    *  Jar包hash
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
    * @param string|null $hash Jar包hash
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets size
    *  Jar包大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size Jar包大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets uid
    *  uid
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
    * @param int|null $uid uid
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
    *  gid
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
    * @param int|null $gid gid
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
    *  文件权限
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
    * @param string|null $mode 文件权限
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
    *  进程id
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
    * @param int|null $pid 进程id
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
    *  进程可执行文件路径
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
    * @param string|null $procPath 进程可执行文件路径
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
    *  容器实例id
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
    * @param string|null $containerId 容器实例id
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
    *  容器名称
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
    * @param string|null $containerName 容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets packagePath
    *  包路径
    *
    * @return string|null
    */
    public function getPackagePath()
    {
        return $this->container['packagePath'];
    }

    /**
    * Sets packagePath
    *
    * @param string|null $packagePath 包路径
    *
    * @return $this
    */
    public function setPackagePath($packagePath)
    {
        $this->container['packagePath'] = $packagePath;
        return $this;
    }

    /**
    * Gets isEmbedded
    *  显示的是否是嵌套包
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
    * @param int|null $isEmbedded 显示的是否是嵌套包
    *
    * @return $this
    */
    public function setIsEmbedded($isEmbedded)
    {
        $this->container['isEmbedded'] = $isEmbedded;
        return $this;
    }

    /**
    * Gets recordTime
    *  扫描时间
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
    * @param int|null $recordTime 扫描时间
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
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

