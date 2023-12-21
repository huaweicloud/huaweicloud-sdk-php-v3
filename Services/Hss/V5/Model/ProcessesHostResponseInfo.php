<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessesHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessesHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hash  文件hash
    * hostIp  主机ip
    * hostName  主机名称
    * launchParams  启动参数
    * launchTime  启动时间
    * processPath  进程路径
    * processPid  进程pid
    * runPermission  文件权限
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hash' => 'string',
            'hostIp' => 'string',
            'hostName' => 'string',
            'launchParams' => 'string',
            'launchTime' => 'int',
            'processPath' => 'string',
            'processPid' => 'int',
            'runPermission' => 'string',
            'containerId' => 'string',
            'containerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hash  文件hash
    * hostIp  主机ip
    * hostName  主机名称
    * launchParams  启动参数
    * launchTime  启动时间
    * processPath  进程路径
    * processPid  进程pid
    * runPermission  文件权限
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hash' => null,
        'hostIp' => null,
        'hostName' => null,
        'launchParams' => null,
        'launchTime' => 'int64',
        'processPath' => null,
        'processPid' => 'int32',
        'runPermission' => null,
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
    * hash  文件hash
    * hostIp  主机ip
    * hostName  主机名称
    * launchParams  启动参数
    * launchTime  启动时间
    * processPath  进程路径
    * processPid  进程pid
    * runPermission  文件权限
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hash' => 'hash',
            'hostIp' => 'host_ip',
            'hostName' => 'host_name',
            'launchParams' => 'launch_params',
            'launchTime' => 'launch_time',
            'processPath' => 'process_path',
            'processPid' => 'process_pid',
            'runPermission' => 'run_permission',
            'containerId' => 'container_id',
            'containerName' => 'container_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hash  文件hash
    * hostIp  主机ip
    * hostName  主机名称
    * launchParams  启动参数
    * launchTime  启动时间
    * processPath  进程路径
    * processPid  进程pid
    * runPermission  文件权限
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $setters = [
            'hash' => 'setHash',
            'hostIp' => 'setHostIp',
            'hostName' => 'setHostName',
            'launchParams' => 'setLaunchParams',
            'launchTime' => 'setLaunchTime',
            'processPath' => 'setProcessPath',
            'processPid' => 'setProcessPid',
            'runPermission' => 'setRunPermission',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hash  文件hash
    * hostIp  主机ip
    * hostName  主机名称
    * launchParams  启动参数
    * launchTime  启动时间
    * processPath  进程路径
    * processPid  进程pid
    * runPermission  文件权限
    * containerId  容器id
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $getters = [
            'hash' => 'getHash',
            'hostIp' => 'getHostIp',
            'hostName' => 'getHostName',
            'launchParams' => 'getLaunchParams',
            'launchTime' => 'getLaunchTime',
            'processPath' => 'getProcessPath',
            'processPid' => 'getProcessPid',
            'runPermission' => 'getRunPermission',
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
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['launchParams'] = isset($data['launchParams']) ? $data['launchParams'] : null;
        $this->container['launchTime'] = isset($data['launchTime']) ? $data['launchTime'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['processPid'] = isset($data['processPid']) ? $data['processPid'] : null;
        $this->container['runPermission'] = isset($data['runPermission']) ? $data['runPermission'] : null;
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
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 256)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 1)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['launchParams']) && (mb_strlen($this->container['launchParams']) > 256)) {
                $invalidProperties[] = "invalid value for 'launchParams', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['launchParams']) && (mb_strlen($this->container['launchParams']) < 1)) {
                $invalidProperties[] = "invalid value for 'launchParams', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['launchTime']) && ($this->container['launchTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'launchTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['launchTime']) && ($this->container['launchTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'launchTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] > 65535)) {
                $invalidProperties[] = "invalid value for 'processPid', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runPermission']) && (mb_strlen($this->container['runPermission']) > 256)) {
                $invalidProperties[] = "invalid value for 'runPermission', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['runPermission']) && (mb_strlen($this->container['runPermission']) < 1)) {
                $invalidProperties[] = "invalid value for 'runPermission', the character length must be bigger than or equal to 1.";
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
    * Gets hash
    *  文件hash
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
    * @param string|null $hash 文件hash
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets hostIp
    *  主机ip
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
    * @param string|null $hostIp 主机ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
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
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets launchParams
    *  启动参数
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
    * @param string|null $launchParams 启动参数
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
    *  启动时间
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
    * @param int|null $launchTime 启动时间
    *
    * @return $this
    */
    public function setLaunchTime($launchTime)
    {
        $this->container['launchTime'] = $launchTime;
        return $this;
    }

    /**
    * Gets processPath
    *  进程路径
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
    * @param string|null $processPath 进程路径
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
    *  进程pid
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
    * @param int|null $processPid 进程pid
    *
    * @return $this
    */
    public function setProcessPid($processPid)
    {
        $this->container['processPid'] = $processPid;
        return $this;
    }

    /**
    * Gets runPermission
    *  文件权限
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
    * @param string|null $runPermission 文件权限
    *
    * @return $this
    */
    public function setRunPermission($runPermission)
    {
        $this->container['runPermission'] = $runPermission;
        return $this;
    }

    /**
    * Gets containerId
    *  容器id
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
    * @param string|null $containerId 容器id
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

