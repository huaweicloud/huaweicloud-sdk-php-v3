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
    * catalogue  资产指纹种类
    * name  资产指纹名字
    * version  资产指纹-数据库-版本
    * agentId  agent_id
    * installPath  install_path
    * configPath  config_path 配置文件路径
    * uid  uid
    * gid  gid
    * mode  mode
    * ctime  ctime
    * mtime  mtime
    * atime  atime
    * pid  pid
    * procPath  proc_path
    * containerId  container_id
    * containerName  container_name
    * recordTime  record_time
    * hostName  host_name
    * hostId  host_id
    * hostIp  host_ip
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
            'hostName' => 'string',
            'hostId' => 'string',
            'hostIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalogue  资产指纹种类
    * name  资产指纹名字
    * version  资产指纹-数据库-版本
    * agentId  agent_id
    * installPath  install_path
    * configPath  config_path 配置文件路径
    * uid  uid
    * gid  gid
    * mode  mode
    * ctime  ctime
    * mtime  mtime
    * atime  atime
    * pid  pid
    * procPath  proc_path
    * containerId  container_id
    * containerName  container_name
    * recordTime  record_time
    * hostName  host_name
    * hostId  host_id
    * hostIp  host_ip
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
        'hostName' => null,
        'hostId' => null,
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
    * catalogue  资产指纹种类
    * name  资产指纹名字
    * version  资产指纹-数据库-版本
    * agentId  agent_id
    * installPath  install_path
    * configPath  config_path 配置文件路径
    * uid  uid
    * gid  gid
    * mode  mode
    * ctime  ctime
    * mtime  mtime
    * atime  atime
    * pid  pid
    * procPath  proc_path
    * containerId  container_id
    * containerName  container_name
    * recordTime  record_time
    * hostName  host_name
    * hostId  host_id
    * hostIp  host_ip
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
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'hostIp' => 'host_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalogue  资产指纹种类
    * name  资产指纹名字
    * version  资产指纹-数据库-版本
    * agentId  agent_id
    * installPath  install_path
    * configPath  config_path 配置文件路径
    * uid  uid
    * gid  gid
    * mode  mode
    * ctime  ctime
    * mtime  mtime
    * atime  atime
    * pid  pid
    * procPath  proc_path
    * containerId  container_id
    * containerName  container_name
    * recordTime  record_time
    * hostName  host_name
    * hostId  host_id
    * hostIp  host_ip
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
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'hostIp' => 'setHostIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalogue  资产指纹种类
    * name  资产指纹名字
    * version  资产指纹-数据库-版本
    * agentId  agent_id
    * installPath  install_path
    * configPath  config_path 配置文件路径
    * uid  uid
    * gid  gid
    * mode  mode
    * ctime  ctime
    * mtime  mtime
    * atime  atime
    * pid  pid
    * procPath  proc_path
    * containerId  container_id
    * containerName  container_name
    * recordTime  record_time
    * hostName  host_name
    * hostId  host_id
    * hostIp  host_ip
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
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
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
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 256)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
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
    *  资产指纹种类
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
    * @param string|null $catalogue 资产指纹种类
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
    *  资产指纹名字
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
    * @param string|null $name 资产指纹名字
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
    *  资产指纹-数据库-版本
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
    * @param string|null $version 资产指纹-数据库-版本
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
    * Gets installPath
    *  install_path
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
    * @param string|null $installPath install_path
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
    *  config_path 配置文件路径
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
    * @param string|null $configPath config_path 配置文件路径
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
    *  mode
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
    * @param string|null $mode mode
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
    *  ctime
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
    * @param int|null $ctime ctime
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
    *  mtime
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
    * @param int|null $mtime mtime
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
    *  atime
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
    * @param int|null $atime atime
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
    *  pid
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
    * @param int|null $pid pid
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
    *  proc_path
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
    * @param string|null $procPath proc_path
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
    *  container_id
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
    * @param string|null $containerId container_id
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
    *  container_name
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
    * @param string|null $containerName container_name
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
    *  record_time
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
    * @param int|null $recordTime record_time
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets hostName
    *  host_name
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
    * @param string|null $hostName host_name
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  host_id
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
    * @param string|null $hostId host_id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIp
    *  host_ip
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
    * @param string|null $hostIp host_ip
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

