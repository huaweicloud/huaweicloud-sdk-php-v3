<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSecurityCheckPrivilegedContainerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSecurityCheckPrivilegedContainerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： - running：运行中 - terminated：已结束
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * eventAbstract  **参数解释**： 事件摘要 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerName' => 'string',
            'containerId' => 'string',
            'containerStatus' => 'string',
            'podName' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'eventAbstract' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： - running：运行中 - terminated：已结束
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * eventAbstract  **参数解释**： 事件摘要 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerName' => null,
        'containerId' => null,
        'containerStatus' => null,
        'podName' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'eventAbstract' => null
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
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： - running：运行中 - terminated：已结束
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * eventAbstract  **参数解释**： 事件摘要 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerName' => 'container_name',
            'containerId' => 'container_id',
            'containerStatus' => 'container_status',
            'podName' => 'pod_name',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'eventAbstract' => 'event_abstract'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： - running：运行中 - terminated：已结束
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * eventAbstract  **参数解释**： 事件摘要 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'containerName' => 'setContainerName',
            'containerId' => 'setContainerId',
            'containerStatus' => 'setContainerStatus',
            'podName' => 'setPodName',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'eventAbstract' => 'setEventAbstract'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： - running：运行中 - terminated：已结束
    * podName  **参数解释**： pod名称 **取值范围**： 不涉及
    * hostName  **参数解释**： 节点名称 **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公有IP地址 **取值范围**： 不涉及
    * eventAbstract  **参数解释**： 事件摘要 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'containerName' => 'getContainerName',
            'containerId' => 'getContainerId',
            'containerStatus' => 'getContainerStatus',
            'podName' => 'getPodName',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'eventAbstract' => 'getEventAbstract'
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
    const CONTAINER_STATUS_RUNNING = 'running';
    const CONTAINER_STATUS_TERMINATED = 'terminated';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getContainerStatusAllowableValues()
    {
        return [
            self::CONTAINER_STATUS_RUNNING,
            self::CONTAINER_STATUS_TERMINATED,
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
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerStatus'] = isset($data['containerStatus']) ? $data['containerStatus'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['eventAbstract'] = isset($data['eventAbstract']) ? $data['eventAbstract'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getContainerStatusAllowableValues();
                if (!is_null($this->container['containerStatus']) && !in_array($this->container['containerStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'containerStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
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
    * Gets containerStatus
    *  **参数解释**： 容器状态 **取值范围**： - running：运行中 - terminated：已结束
    *
    * @return string|null
    */
    public function getContainerStatus()
    {
        return $this->container['containerStatus'];
    }

    /**
    * Sets containerStatus
    *
    * @param string|null $containerStatus **参数解释**： 容器状态 **取值范围**： - running：运行中 - terminated：已结束
    *
    * @return $this
    */
    public function setContainerStatus($containerStatus)
    {
        $this->container['containerStatus'] = $containerStatus;
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
    * Gets eventAbstract
    *  **参数解释**： 事件摘要 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getEventAbstract()
    {
        return $this->container['eventAbstract'];
    }

    /**
    * Sets eventAbstract
    *
    * @param string|null $eventAbstract **参数解释**： 事件摘要 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEventAbstract($eventAbstract)
    {
        $this->container['eventAbstract'] = $eventAbstract;
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

