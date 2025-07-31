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
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * name  名称
    * version  版本
    * path  路径
    * fileSize  大小
    * recordTime  扫描时间
    * bindIpList  绑定的ip列表
    * catalogue  软件的类型
    * connectedIpList  连接的ip列表
    * connectedNumber  连接数
    * embedderDir  压缩的目录
    * fileName  文件名称
    * fileType  文件类型
    * gid  用户组id
    * hash  文件哈希值
    * isEmbedded  是否是压缩的文件
    * listenPortList  监听的端口列表
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * uid  用户id
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
            'fileSize' => 'int',
            'recordTime' => 'int',
            'bindIpList' => 'string',
            'catalogue' => 'string',
            'connectedIpList' => 'string',
            'connectedNumber' => 'string',
            'embedderDir' => 'string',
            'fileName' => 'string',
            'fileType' => 'string',
            'gid' => 'int',
            'hash' => 'string',
            'isEmbedded' => 'int',
            'listenPortList' => 'string',
            'mode' => 'string',
            'pid' => 'int',
            'procPath' => 'string',
            'uid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * name  名称
    * version  版本
    * path  路径
    * fileSize  大小
    * recordTime  扫描时间
    * bindIpList  绑定的ip列表
    * catalogue  软件的类型
    * connectedIpList  连接的ip列表
    * connectedNumber  连接数
    * embedderDir  压缩的目录
    * fileName  文件名称
    * fileType  文件类型
    * gid  用户组id
    * hash  文件哈希值
    * isEmbedded  是否是压缩的文件
    * listenPortList  监听的端口列表
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * uid  用户id
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
        'fileSize' => null,
        'recordTime' => 'int64',
        'bindIpList' => null,
        'catalogue' => null,
        'connectedIpList' => null,
        'connectedNumber' => null,
        'embedderDir' => null,
        'fileName' => null,
        'fileType' => null,
        'gid' => null,
        'hash' => null,
        'isEmbedded' => null,
        'listenPortList' => null,
        'mode' => null,
        'pid' => null,
        'procPath' => null,
        'uid' => null
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
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * name  名称
    * version  版本
    * path  路径
    * fileSize  大小
    * recordTime  扫描时间
    * bindIpList  绑定的ip列表
    * catalogue  软件的类型
    * connectedIpList  连接的ip列表
    * connectedNumber  连接数
    * embedderDir  压缩的目录
    * fileName  文件名称
    * fileType  文件类型
    * gid  用户组id
    * hash  文件哈希值
    * isEmbedded  是否是压缩的文件
    * listenPortList  监听的端口列表
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * uid  用户id
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
            'fileSize' => 'file_size',
            'recordTime' => 'record_time',
            'bindIpList' => 'bind_ip_list',
            'catalogue' => 'catalogue',
            'connectedIpList' => 'connected_ip_list',
            'connectedNumber' => 'connected_number',
            'embedderDir' => 'embedder_dir',
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'gid' => 'gid',
            'hash' => 'hash',
            'isEmbedded' => 'is_embedded',
            'listenPortList' => 'listen_port_list',
            'mode' => 'mode',
            'pid' => 'pid',
            'procPath' => 'proc_path',
            'uid' => 'uid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * name  名称
    * version  版本
    * path  路径
    * fileSize  大小
    * recordTime  扫描时间
    * bindIpList  绑定的ip列表
    * catalogue  软件的类型
    * connectedIpList  连接的ip列表
    * connectedNumber  连接数
    * embedderDir  压缩的目录
    * fileName  文件名称
    * fileType  文件类型
    * gid  用户组id
    * hash  文件哈希值
    * isEmbedded  是否是压缩的文件
    * listenPortList  监听的端口列表
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * uid  用户id
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
            'fileSize' => 'setFileSize',
            'recordTime' => 'setRecordTime',
            'bindIpList' => 'setBindIpList',
            'catalogue' => 'setCatalogue',
            'connectedIpList' => 'setConnectedIpList',
            'connectedNumber' => 'setConnectedNumber',
            'embedderDir' => 'setEmbedderDir',
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'gid' => 'setGid',
            'hash' => 'setHash',
            'isEmbedded' => 'setIsEmbedded',
            'listenPortList' => 'setListenPortList',
            'mode' => 'setMode',
            'pid' => 'setPid',
            'procPath' => 'setProcPath',
            'uid' => 'setUid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  agent_id
    * hostId  主机id
    * hostName  服务器名称
    * hostIp  服务器ip
    * name  名称
    * version  版本
    * path  路径
    * fileSize  大小
    * recordTime  扫描时间
    * bindIpList  绑定的ip列表
    * catalogue  软件的类型
    * connectedIpList  连接的ip列表
    * connectedNumber  连接数
    * embedderDir  压缩的目录
    * fileName  文件名称
    * fileType  文件类型
    * gid  用户组id
    * hash  文件哈希值
    * isEmbedded  是否是压缩的文件
    * listenPortList  监听的端口列表
    * mode  文件权限
    * pid  进程id
    * procPath  进程路径
    * uid  用户id
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
            'fileSize' => 'getFileSize',
            'recordTime' => 'getRecordTime',
            'bindIpList' => 'getBindIpList',
            'catalogue' => 'getCatalogue',
            'connectedIpList' => 'getConnectedIpList',
            'connectedNumber' => 'getConnectedNumber',
            'embedderDir' => 'getEmbedderDir',
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'gid' => 'getGid',
            'hash' => 'getHash',
            'isEmbedded' => 'getIsEmbedded',
            'listenPortList' => 'getListenPortList',
            'mode' => 'getMode',
            'pid' => 'getPid',
            'procPath' => 'getProcPath',
            'uid' => 'getUid'
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
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['bindIpList'] = isset($data['bindIpList']) ? $data['bindIpList'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
        $this->container['connectedIpList'] = isset($data['connectedIpList']) ? $data['connectedIpList'] : null;
        $this->container['connectedNumber'] = isset($data['connectedNumber']) ? $data['connectedNumber'] : null;
        $this->container['embedderDir'] = isset($data['embedderDir']) ? $data['embedderDir'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['isEmbedded'] = isset($data['isEmbedded']) ? $data['isEmbedded'] : null;
        $this->container['listenPortList'] = isset($data['listenPortList']) ? $data['listenPortList'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['procPath'] = isset($data['procPath']) ? $data['procPath'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  agent_id
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
    * @param string|null $agentId agent_id
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
    * Gets name
    *  名称
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
    * @param string|null $name 名称
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
    *  版本
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
    * @param string|null $version 版本
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
    *  路径
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
    * @param string|null $path 路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets fileSize
    *  大小
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize 大小
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
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
    * Gets bindIpList
    *  绑定的ip列表
    *
    * @return string|null
    */
    public function getBindIpList()
    {
        return $this->container['bindIpList'];
    }

    /**
    * Sets bindIpList
    *
    * @param string|null $bindIpList 绑定的ip列表
    *
    * @return $this
    */
    public function setBindIpList($bindIpList)
    {
        $this->container['bindIpList'] = $bindIpList;
        return $this;
    }

    /**
    * Gets catalogue
    *  软件的类型
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
    * @param string|null $catalogue 软件的类型
    *
    * @return $this
    */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;
        return $this;
    }

    /**
    * Gets connectedIpList
    *  连接的ip列表
    *
    * @return string|null
    */
    public function getConnectedIpList()
    {
        return $this->container['connectedIpList'];
    }

    /**
    * Sets connectedIpList
    *
    * @param string|null $connectedIpList 连接的ip列表
    *
    * @return $this
    */
    public function setConnectedIpList($connectedIpList)
    {
        $this->container['connectedIpList'] = $connectedIpList;
        return $this;
    }

    /**
    * Gets connectedNumber
    *  连接数
    *
    * @return string|null
    */
    public function getConnectedNumber()
    {
        return $this->container['connectedNumber'];
    }

    /**
    * Sets connectedNumber
    *
    * @param string|null $connectedNumber 连接数
    *
    * @return $this
    */
    public function setConnectedNumber($connectedNumber)
    {
        $this->container['connectedNumber'] = $connectedNumber;
        return $this;
    }

    /**
    * Gets embedderDir
    *  压缩的目录
    *
    * @return string|null
    */
    public function getEmbedderDir()
    {
        return $this->container['embedderDir'];
    }

    /**
    * Sets embedderDir
    *
    * @param string|null $embedderDir 压缩的目录
    *
    * @return $this
    */
    public function setEmbedderDir($embedderDir)
    {
        $this->container['embedderDir'] = $embedderDir;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
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
    * @param string|null $fileName 文件名称
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
    *  文件类型
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
    * @param string|null $fileType 文件类型
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
    *  用户组id
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
    * @param int|null $gid 用户组id
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
    *  文件哈希值
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
    * @param string|null $hash 文件哈希值
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
    *  是否是压缩的文件
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
    * @param int|null $isEmbedded 是否是压缩的文件
    *
    * @return $this
    */
    public function setIsEmbedded($isEmbedded)
    {
        $this->container['isEmbedded'] = $isEmbedded;
        return $this;
    }

    /**
    * Gets listenPortList
    *  监听的端口列表
    *
    * @return string|null
    */
    public function getListenPortList()
    {
        return $this->container['listenPortList'];
    }

    /**
    * Sets listenPortList
    *
    * @param string|null $listenPortList 监听的端口列表
    *
    * @return $this
    */
    public function setListenPortList($listenPortList)
    {
        $this->container['listenPortList'] = $listenPortList;
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
    *  进程路径
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
    * @param string|null $procPath 进程路径
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
    *  用户id
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 用户id
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
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

