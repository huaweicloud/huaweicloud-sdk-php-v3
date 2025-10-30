<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LocalImageContainerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LocalImageContainerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  Agent id
    * containerName  容器名称
    * containerId  容器ID
    * hostId  服务器ID
    * hostName  服务器名称
    * podId  pod id
    * podName  pod名称
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * entryPoint  启动命令
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'containerName' => 'string',
            'containerId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'podId' => 'string',
            'podName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'entryPoint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  Agent id
    * containerName  容器名称
    * containerId  容器ID
    * hostId  服务器ID
    * hostName  服务器名称
    * podId  pod id
    * podName  pod名称
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * entryPoint  启动命令
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'containerName' => null,
        'containerId' => null,
        'hostId' => null,
        'hostName' => null,
        'podId' => null,
        'podName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'entryPoint' => null
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
    * agentId  Agent id
    * containerName  容器名称
    * containerId  容器ID
    * hostId  服务器ID
    * hostName  服务器名称
    * podId  pod id
    * podName  pod名称
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * entryPoint  启动命令
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'containerName' => 'container_name',
            'containerId' => 'container_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'podId' => 'pod_id',
            'podName' => 'pod_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'entryPoint' => 'entry_point'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  Agent id
    * containerName  容器名称
    * containerId  容器ID
    * hostId  服务器ID
    * hostName  服务器名称
    * podId  pod id
    * podName  pod名称
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * entryPoint  启动命令
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'containerName' => 'setContainerName',
            'containerId' => 'setContainerId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'podId' => 'setPodId',
            'podName' => 'setPodName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'entryPoint' => 'setEntryPoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  Agent id
    * containerName  容器名称
    * containerId  容器ID
    * hostId  服务器ID
    * hostName  服务器名称
    * podId  pod id
    * podName  pod名称
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * entryPoint  启动命令
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'containerName' => 'getContainerName',
            'containerId' => 'getContainerId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'podId' => 'getPodId',
            'podName' => 'getPodName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'entryPoint' => 'getEntryPoint'
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
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['entryPoint'] = isset($data['entryPoint']) ? $data['entryPoint'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 256)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) > 128)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) < 0)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 128)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['entryPoint']) && (mb_strlen($this->container['entryPoint']) > 128)) {
                $invalidProperties[] = "invalid value for 'entryPoint', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['entryPoint']) && (mb_strlen($this->container['entryPoint']) < 0)) {
                $invalidProperties[] = "invalid value for 'entryPoint', the character length must be bigger than or equal to 0.";
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
    *  Agent id
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
    * @param string|null $agentId Agent id
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
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
    * Gets containerId
    *  容器ID
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
    * @param string|null $containerId 容器ID
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets hostId
    *  服务器ID
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
    * @param string|null $hostId 服务器ID
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
    * Gets podId
    *  pod id
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId pod id
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podName
    *  pod名称
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
    * @param string|null $podName pod名称
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有IP地址
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
    * @param string|null $privateIp 私有IP地址
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
    *  弹性公网IP地址
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
    * @param string|null $publicIp 弹性公网IP地址
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets entryPoint
    *  启动命令
    *
    * @return string|null
    */
    public function getEntryPoint()
    {
        return $this->container['entryPoint'];
    }

    /**
    * Sets entryPoint
    *
    * @param string|null $entryPoint 启动命令
    *
    * @return $this
    */
    public function setEntryPoint($entryPoint)
    {
        $this->container['entryPoint'] = $entryPoint;
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

