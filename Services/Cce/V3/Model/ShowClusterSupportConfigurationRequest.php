<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterSupportConfigurationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterSupportConfigurationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterType  **参数解释**： 该参数用于过滤集群架构 **约束限制**： 不涉及 **取值范围**： - ARM64: 仅获取鲲鹏集群支持的配置项  **默认取值**： 不涉及
    * clusterVersion  **参数解释**： 该参数用于获取指定集群版本支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterId  **参数解释**： 该参数用于获取指定集群支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * networkMode  **参数解释**： 该参数用于过滤掉集群网络模型相关配置项 **约束限制**： 不涉及 **取值范围**： - eni: 过滤掉云原生网络2.0模型相关配置  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterType' => 'string',
            'clusterVersion' => 'string',
            'clusterId' => 'string',
            'networkMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterType  **参数解释**： 该参数用于过滤集群架构 **约束限制**： 不涉及 **取值范围**： - ARM64: 仅获取鲲鹏集群支持的配置项  **默认取值**： 不涉及
    * clusterVersion  **参数解释**： 该参数用于获取指定集群版本支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterId  **参数解释**： 该参数用于获取指定集群支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * networkMode  **参数解释**： 该参数用于过滤掉集群网络模型相关配置项 **约束限制**： 不涉及 **取值范围**： - eni: 过滤掉云原生网络2.0模型相关配置  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterType' => null,
        'clusterVersion' => null,
        'clusterId' => null,
        'networkMode' => null
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
    * clusterType  **参数解释**： 该参数用于过滤集群架构 **约束限制**： 不涉及 **取值范围**： - ARM64: 仅获取鲲鹏集群支持的配置项  **默认取值**： 不涉及
    * clusterVersion  **参数解释**： 该参数用于获取指定集群版本支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterId  **参数解释**： 该参数用于获取指定集群支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * networkMode  **参数解释**： 该参数用于过滤掉集群网络模型相关配置项 **约束限制**： 不涉及 **取值范围**： - eni: 过滤掉云原生网络2.0模型相关配置  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterType' => 'clusterType',
            'clusterVersion' => 'clusterVersion',
            'clusterId' => 'clusterID',
            'networkMode' => 'networkMode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterType  **参数解释**： 该参数用于过滤集群架构 **约束限制**： 不涉及 **取值范围**： - ARM64: 仅获取鲲鹏集群支持的配置项  **默认取值**： 不涉及
    * clusterVersion  **参数解释**： 该参数用于获取指定集群版本支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterId  **参数解释**： 该参数用于获取指定集群支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * networkMode  **参数解释**： 该参数用于过滤掉集群网络模型相关配置项 **约束限制**： 不涉及 **取值范围**： - eni: 过滤掉云原生网络2.0模型相关配置  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterType' => 'setClusterType',
            'clusterVersion' => 'setClusterVersion',
            'clusterId' => 'setClusterId',
            'networkMode' => 'setNetworkMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterType  **参数解释**： 该参数用于过滤集群架构 **约束限制**： 不涉及 **取值范围**： - ARM64: 仅获取鲲鹏集群支持的配置项  **默认取值**： 不涉及
    * clusterVersion  **参数解释**： 该参数用于获取指定集群版本支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterId  **参数解释**： 该参数用于获取指定集群支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * networkMode  **参数解释**： 该参数用于过滤掉集群网络模型相关配置项 **约束限制**： 不涉及 **取值范围**： - eni: 过滤掉云原生网络2.0模型相关配置  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterType' => 'getClusterType',
            'clusterVersion' => 'getClusterVersion',
            'clusterId' => 'getClusterId',
            'networkMode' => 'getNetworkMode'
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
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['networkMode'] = isset($data['networkMode']) ? $data['networkMode'] : null;
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
    * Gets clusterType
    *  **参数解释**： 该参数用于过滤集群架构 **约束限制**： 不涉及 **取值范围**： - ARM64: 仅获取鲲鹏集群支持的配置项  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType **参数解释**： 该参数用于过滤集群架构 **约束限制**： 不涉及 **取值范围**： - ARM64: 仅获取鲲鹏集群支持的配置项  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  **参数解释**： 该参数用于获取指定集群版本支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string|null $clusterVersion **参数解释**： 该参数用于获取指定集群版本支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 该参数用于获取指定集群支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**： 该参数用于获取指定集群支持的配置项 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets networkMode
    *  **参数解释**： 该参数用于过滤掉集群网络模型相关配置项 **约束限制**： 不涉及 **取值范围**： - eni: 过滤掉云原生网络2.0模型相关配置  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getNetworkMode()
    {
        return $this->container['networkMode'];
    }

    /**
    * Sets networkMode
    *
    * @param string|null $networkMode **参数解释**： 该参数用于过滤掉集群网络模型相关配置项 **约束限制**： 不涉及 **取值范围**： - eni: 过滤掉云原生网络2.0模型相关配置  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNetworkMode($networkMode)
    {
        $this->container['networkMode'] = $networkMode;
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

