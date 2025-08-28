<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSecurityCheckProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSecurityCheckProcessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * startTime  **参数解释**： 启动时间 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * permission  **参数解释**： 文件权限 **取值范围**： 不涉及
    * userName  **参数解释**： 运行用户 **取值范围**： 不涉及
    * launchParams  **参数解释**： 启动参数 **取值范围**： 不涉及
    * hash  **参数解释**： 文件hash **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerId' => 'string',
            'containerName' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'startTime' => 'int',
            'pid' => 'int',
            'permission' => 'string',
            'userName' => 'string',
            'launchParams' => 'string',
            'hash' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * startTime  **参数解释**： 启动时间 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * permission  **参数解释**： 文件权限 **取值范围**： 不涉及
    * userName  **参数解释**： 运行用户 **取值范围**： 不涉及
    * launchParams  **参数解释**： 启动参数 **取值范围**： 不涉及
    * hash  **参数解释**： 文件hash **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerId' => null,
        'containerName' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'startTime' => 'int64',
        'pid' => 'int32',
        'permission' => null,
        'userName' => null,
        'launchParams' => null,
        'hash' => null
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
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * startTime  **参数解释**： 启动时间 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * permission  **参数解释**： 文件权限 **取值范围**： 不涉及
    * userName  **参数解释**： 运行用户 **取值范围**： 不涉及
    * launchParams  **参数解释**： 启动参数 **取值范围**： 不涉及
    * hash  **参数解释**： 文件hash **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'startTime' => 'start_time',
            'pid' => 'pid',
            'permission' => 'permission',
            'userName' => 'user_name',
            'launchParams' => 'launch_params',
            'hash' => 'hash'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * startTime  **参数解释**： 启动时间 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * permission  **参数解释**： 文件权限 **取值范围**： 不涉及
    * userName  **参数解释**： 运行用户 **取值范围**： 不涉及
    * launchParams  **参数解释**： 启动参数 **取值范围**： 不涉及
    * hash  **参数解释**： 文件hash **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'startTime' => 'setStartTime',
            'pid' => 'setPid',
            'permission' => 'setPermission',
            'userName' => 'setUserName',
            'launchParams' => 'setLaunchParams',
            'hash' => 'setHash'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * startTime  **参数解释**： 启动时间 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * permission  **参数解释**： 文件权限 **取值范围**： 不涉及
    * userName  **参数解释**： 运行用户 **取值范围**： 不涉及
    * launchParams  **参数解释**： 启动参数 **取值范围**： 不涉及
    * hash  **参数解释**： 文件hash **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'startTime' => 'getStartTime',
            'pid' => 'getPid',
            'permission' => 'getPermission',
            'userName' => 'getUserName',
            'launchParams' => 'getLaunchParams',
            'hash' => 'getHash'
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
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['launchParams'] = isset($data['launchParams']) ? $data['launchParams'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
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
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['permission']) && (mb_strlen($this->container['permission']) > 128)) {
                $invalidProperties[] = "invalid value for 'permission', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permission']) && (mb_strlen($this->container['permission']) < 0)) {
                $invalidProperties[] = "invalid value for 'permission', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['launchParams']) && (mb_strlen($this->container['launchParams']) > 512)) {
                $invalidProperties[] = "invalid value for 'launchParams', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['launchParams']) && (mb_strlen($this->container['launchParams']) < 0)) {
                $invalidProperties[] = "invalid value for 'launchParams', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 128)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 1)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 1.";
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
    * Gets containerId
    *  **参数解释**： 容器ID **取值范围**： 不涉及
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
    * @param string|null $containerId **参数解释**： 容器ID **取值范围**： 不涉及
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
    *  **参数解释**： 容器名称 **取值范围**： 不涉及
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
    * @param string|null $containerName **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 节点名称 **取值范围**： 不涉及
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
    * @param string|null $hostName **参数解释**： 节点名称 **取值范围**： 不涉及
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
    *  **参数解释**： 私有IP地址 **取值范围**： 不涉及
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
    * @param string|null $privateIp **参数解释**： 私有IP地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**： 公有IP地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 启动时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 启动时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**： 进程PID **取值范围**： 不涉及
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
    * @param int|null $pid **参数解释**： 进程PID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets permission
    *  **参数解释**： 文件权限 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission **参数解释**： 文件权限 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： 运行用户 **取值范围**： 不涉及
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
    * @param string|null $userName **参数解释**： 运行用户 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets launchParams
    *  **参数解释**： 启动参数 **取值范围**： 不涉及
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
    * @param string|null $launchParams **参数解释**： 启动参数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLaunchParams($launchParams)
    {
        $this->container['launchParams'] = $launchParams;
        return $this;
    }

    /**
    * Gets hash
    *  **参数解释**： 文件hash **取值范围**： 不涉及
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
    * @param string|null $hash **参数解释**： 文件hash **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
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

