<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerConfigsDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerConfigsDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privileged  开启容器特权模式
    * hostNetwork  是否使用主机网络模式
    * restartPolicy  重启策略，容器执行健康检查后失败后的策略
    * containerPortList  容器端口映射值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privileged' => 'bool',
            'hostNetwork' => 'bool',
            'restartPolicy' => 'string',
            'containerPortList' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerPortDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privileged  开启容器特权模式
    * hostNetwork  是否使用主机网络模式
    * restartPolicy  重启策略，容器执行健康检查后失败后的策略
    * containerPortList  容器端口映射值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privileged' => null,
        'hostNetwork' => null,
        'restartPolicy' => null,
        'containerPortList' => null
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
    * privileged  开启容器特权模式
    * hostNetwork  是否使用主机网络模式
    * restartPolicy  重启策略，容器执行健康检查后失败后的策略
    * containerPortList  容器端口映射值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privileged' => 'privileged',
            'hostNetwork' => 'host_network',
            'restartPolicy' => 'restart_policy',
            'containerPortList' => 'container_port_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privileged  开启容器特权模式
    * hostNetwork  是否使用主机网络模式
    * restartPolicy  重启策略，容器执行健康检查后失败后的策略
    * containerPortList  容器端口映射值
    *
    * @var string[]
    */
    protected static $setters = [
            'privileged' => 'setPrivileged',
            'hostNetwork' => 'setHostNetwork',
            'restartPolicy' => 'setRestartPolicy',
            'containerPortList' => 'setContainerPortList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privileged  开启容器特权模式
    * hostNetwork  是否使用主机网络模式
    * restartPolicy  重启策略，容器执行健康检查后失败后的策略
    * containerPortList  容器端口映射值
    *
    * @var string[]
    */
    protected static $getters = [
            'privileged' => 'getPrivileged',
            'hostNetwork' => 'getHostNetwork',
            'restartPolicy' => 'getRestartPolicy',
            'containerPortList' => 'getContainerPortList'
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
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : null;
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['restartPolicy'] = isset($data['restartPolicy']) ? $data['restartPolicy'] : null;
        $this->container['containerPortList'] = isset($data['containerPortList']) ? $data['containerPortList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['restartPolicy'] === null) {
            $invalidProperties[] = "'restartPolicy' can't be null";
        }
            if ((mb_strlen($this->container['restartPolicy']) > 256)) {
                $invalidProperties[] = "invalid value for 'restartPolicy', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['restartPolicy']) < 1)) {
                $invalidProperties[] = "invalid value for 'restartPolicy', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/Always|OnFailure|Never/", $this->container['restartPolicy'])) {
                $invalidProperties[] = "invalid value for 'restartPolicy', must be conform to the pattern /Always|OnFailure|Never/.";
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
    * Gets privileged
    *  开启容器特权模式
    *
    * @return bool|null
    */
    public function getPrivileged()
    {
        return $this->container['privileged'];
    }

    /**
    * Sets privileged
    *
    * @param bool|null $privileged 开启容器特权模式
    *
    * @return $this
    */
    public function setPrivileged($privileged)
    {
        $this->container['privileged'] = $privileged;
        return $this;
    }

    /**
    * Gets hostNetwork
    *  是否使用主机网络模式
    *
    * @return bool|null
    */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
    * Sets hostNetwork
    *
    * @param bool|null $hostNetwork 是否使用主机网络模式
    *
    * @return $this
    */
    public function setHostNetwork($hostNetwork)
    {
        $this->container['hostNetwork'] = $hostNetwork;
        return $this;
    }

    /**
    * Gets restartPolicy
    *  重启策略，容器执行健康检查后失败后的策略
    *
    * @return string
    */
    public function getRestartPolicy()
    {
        return $this->container['restartPolicy'];
    }

    /**
    * Sets restartPolicy
    *
    * @param string $restartPolicy 重启策略，容器执行健康检查后失败后的策略
    *
    * @return $this
    */
    public function setRestartPolicy($restartPolicy)
    {
        $this->container['restartPolicy'] = $restartPolicy;
        return $this;
    }

    /**
    * Gets containerPortList
    *  容器端口映射值
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerPortDTO[]|null
    */
    public function getContainerPortList()
    {
        return $this->container['containerPortList'];
    }

    /**
    * Sets containerPortList
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerPortDTO[]|null $containerPortList 容器端口映射值
    *
    * @return $this
    */
    public function setContainerPortList($containerPortList)
    {
        $this->container['containerPortList'] = $containerPortList;
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

