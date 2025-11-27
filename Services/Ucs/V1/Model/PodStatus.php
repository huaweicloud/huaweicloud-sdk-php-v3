<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PodStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PodStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  表示Pod的生命周期状态，有 5 种取值： - Pending：Pod 已被接受但尚未完全就绪 - Running：Pod 已绑定到节点且至少有一个容器在运行 - Succeeded：Pod 中所有容器都已成功终止，且不会被重启 - Failed：Pod 中至少一个容器失败终止 - Unknown：无法获取 Pod 状态
    * hostIp  Pod所在主机的IP地址
    * startTime  记录Pod被Kubelet认可的时间
    * containerStatuses  容器的状态列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'hostIp' => 'string',
            'startTime' => 'string',
            'containerStatuses' => '\HuaweiCloud\SDK\Ucs\V1\Model\ContainerStatus[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  表示Pod的生命周期状态，有 5 种取值： - Pending：Pod 已被接受但尚未完全就绪 - Running：Pod 已绑定到节点且至少有一个容器在运行 - Succeeded：Pod 中所有容器都已成功终止，且不会被重启 - Failed：Pod 中至少一个容器失败终止 - Unknown：无法获取 Pod 状态
    * hostIp  Pod所在主机的IP地址
    * startTime  记录Pod被Kubelet认可的时间
    * containerStatuses  容器的状态列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'hostIp' => null,
        'startTime' => null,
        'containerStatuses' => null
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
    * phase  表示Pod的生命周期状态，有 5 种取值： - Pending：Pod 已被接受但尚未完全就绪 - Running：Pod 已绑定到节点且至少有一个容器在运行 - Succeeded：Pod 中所有容器都已成功终止，且不会被重启 - Failed：Pod 中至少一个容器失败终止 - Unknown：无法获取 Pod 状态
    * hostIp  Pod所在主机的IP地址
    * startTime  记录Pod被Kubelet认可的时间
    * containerStatuses  容器的状态列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'hostIp' => 'hostIP',
            'startTime' => 'startTime',
            'containerStatuses' => 'containerStatuses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  表示Pod的生命周期状态，有 5 种取值： - Pending：Pod 已被接受但尚未完全就绪 - Running：Pod 已绑定到节点且至少有一个容器在运行 - Succeeded：Pod 中所有容器都已成功终止，且不会被重启 - Failed：Pod 中至少一个容器失败终止 - Unknown：无法获取 Pod 状态
    * hostIp  Pod所在主机的IP地址
    * startTime  记录Pod被Kubelet认可的时间
    * containerStatuses  容器的状态列表
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'hostIp' => 'setHostIp',
            'startTime' => 'setStartTime',
            'containerStatuses' => 'setContainerStatuses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  表示Pod的生命周期状态，有 5 种取值： - Pending：Pod 已被接受但尚未完全就绪 - Running：Pod 已绑定到节点且至少有一个容器在运行 - Succeeded：Pod 中所有容器都已成功终止，且不会被重启 - Failed：Pod 中至少一个容器失败终止 - Unknown：无法获取 Pod 状态
    * hostIp  Pod所在主机的IP地址
    * startTime  记录Pod被Kubelet认可的时间
    * containerStatuses  容器的状态列表
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'hostIp' => 'getHostIp',
            'startTime' => 'getStartTime',
            'containerStatuses' => 'getContainerStatuses'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['containerStatuses'] = isset($data['containerStatuses']) ? $data['containerStatuses'] : null;
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
    * Gets phase
    *  表示Pod的生命周期状态，有 5 种取值： - Pending：Pod 已被接受但尚未完全就绪 - Running：Pod 已绑定到节点且至少有一个容器在运行 - Succeeded：Pod 中所有容器都已成功终止，且不会被重启 - Failed：Pod 中至少一个容器失败终止 - Unknown：无法获取 Pod 状态
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 表示Pod的生命周期状态，有 5 种取值： - Pending：Pod 已被接受但尚未完全就绪 - Running：Pod 已绑定到节点且至少有一个容器在运行 - Succeeded：Pod 中所有容器都已成功终止，且不会被重启 - Failed：Pod 中至少一个容器失败终止 - Unknown：无法获取 Pod 状态
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets hostIp
    *  Pod所在主机的IP地址
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
    * @param string|null $hostIp Pod所在主机的IP地址
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets startTime
    *  记录Pod被Kubelet认可的时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 记录Pod被Kubelet认可的时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets containerStatuses
    *  容器的状态列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ContainerStatus[]|null
    */
    public function getContainerStatuses()
    {
        return $this->container['containerStatuses'];
    }

    /**
    * Sets containerStatuses
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ContainerStatus[]|null $containerStatuses 容器的状态列表
    *
    * @return $this
    */
    public function setContainerStatuses($containerStatuses)
    {
        $this->container['containerStatuses'] = $containerStatuses;
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

