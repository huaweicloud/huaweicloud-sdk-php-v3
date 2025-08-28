<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSecurityCheckPortInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSecurityCheckPortInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * port  **参数解释**： 端口号 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * path  **参数解释**： 程序文件 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * laddr  **参数解释**： 监听IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'port' => 'int',
            'containerId' => 'string',
            'containerName' => 'string',
            'podName' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'path' => 'string',
            'pid' => 'int',
            'laddr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * port  **参数解释**： 端口号 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * path  **参数解释**： 程序文件 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * laddr  **参数解释**： 监听IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'port' => 'int32',
        'containerId' => null,
        'containerName' => null,
        'podName' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'path' => null,
        'pid' => 'int32',
        'laddr' => null
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
    * port  **参数解释**： 端口号 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * path  **参数解释**： 程序文件 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * laddr  **参数解释**： 监听IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'port' => 'port',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'podName' => 'pod_name',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'path' => 'path',
            'pid' => 'pid',
            'laddr' => 'laddr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * port  **参数解释**： 端口号 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * path  **参数解释**： 程序文件 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * laddr  **参数解释**： 监听IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'port' => 'setPort',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'podName' => 'setPodName',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'path' => 'setPath',
            'pid' => 'setPid',
            'laddr' => 'setLaddr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * port  **参数解释**： 端口号 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * path  **参数解释**： 程序文件 **取值范围**： 不涉及
    * pid  **参数解释**： 进程PID **取值范围**： 不涉及
    * laddr  **参数解释**： 监听IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'port' => 'getPort',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'podName' => 'getPodName',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'path' => 'getPath',
            'pid' => 'getPid',
            'laddr' => 'getLaddr'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['laddr'] = isset($data['laddr']) ? $data['laddr'] : null;
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
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 64)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 512)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['laddr']) && (mb_strlen($this->container['laddr']) > 256)) {
                $invalidProperties[] = "invalid value for 'laddr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['laddr']) && (mb_strlen($this->container['laddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'laddr', the character length must be bigger than or equal to 1.";
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
    * Gets port
    *  **参数解释**： 端口号 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**： 端口号 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
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
    * Gets podName
    *  **参数解释**： pod名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName **参数解释**： pod名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
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
    * Gets path
    *  **参数解释**： 程序文件 **取值范围**： 不涉及
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
    * @param string|null $path **参数解释**： 程序文件 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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
    * Gets laddr
    *  **参数解释**： 监听IP **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getLaddr()
    {
        return $this->container['laddr'];
    }

    /**
    * Sets laddr
    *
    * @param string|null $laddr **参数解释**： 监听IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLaddr($laddr)
    {
        $this->container['laddr'] = $laddr;
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

