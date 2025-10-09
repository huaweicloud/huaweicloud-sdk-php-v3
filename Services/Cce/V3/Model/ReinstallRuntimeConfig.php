<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReinstallRuntimeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReinstallRuntimeConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。  不配置该值或值为0时将使用默认值，Devicemapper模式下默认值为10；OverlayFS模式默认不限制单容器可用空间大小，且dockerBaseSize设置仅在新版本集群的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * containerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小，单位G。  不配置该值或值为0时将使用默认值，OverlayFS模式默认不限制单容器可用空间大小；Devicemapper模式下默认值为10，且containerBaseSize设置仅在新版本集群（v1.23.14-r0/v1.25.9-r0/v1.27.6-r0/v1.28.4-r0及以上）的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议containerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替；Devicemapper模式在新版中仅有共池裸机使用，已逐步废弃。  **约束限制**: > 更新节点池时，不支持更新此参数  **取值范围**: 不涉及 **默认取值**: 不涉及
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dockerBaseSize' => 'int',
            'containerBaseSize' => 'int',
            'runtime' => '\HuaweiCloud\SDK\Cce\V3\Model\Runtime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。  不配置该值或值为0时将使用默认值，Devicemapper模式下默认值为10；OverlayFS模式默认不限制单容器可用空间大小，且dockerBaseSize设置仅在新版本集群的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * containerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小，单位G。  不配置该值或值为0时将使用默认值，OverlayFS模式默认不限制单容器可用空间大小；Devicemapper模式下默认值为10，且containerBaseSize设置仅在新版本集群（v1.23.14-r0/v1.25.9-r0/v1.27.6-r0/v1.28.4-r0及以上）的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议containerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替；Devicemapper模式在新版中仅有共池裸机使用，已逐步废弃。  **约束限制**: > 更新节点池时，不支持更新此参数  **取值范围**: 不涉及 **默认取值**: 不涉及
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dockerBaseSize' => 'int32',
        'containerBaseSize' => null,
        'runtime' => null
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
    * dockerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。  不配置该值或值为0时将使用默认值，Devicemapper模式下默认值为10；OverlayFS模式默认不限制单容器可用空间大小，且dockerBaseSize设置仅在新版本集群的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * containerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小，单位G。  不配置该值或值为0时将使用默认值，OverlayFS模式默认不限制单容器可用空间大小；Devicemapper模式下默认值为10，且containerBaseSize设置仅在新版本集群（v1.23.14-r0/v1.25.9-r0/v1.27.6-r0/v1.28.4-r0及以上）的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议containerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替；Devicemapper模式在新版中仅有共池裸机使用，已逐步废弃。  **约束限制**: > 更新节点池时，不支持更新此参数  **取值范围**: 不涉及 **默认取值**: 不涉及
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dockerBaseSize' => 'dockerBaseSize',
            'containerBaseSize' => 'containerBaseSize',
            'runtime' => 'runtime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dockerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。  不配置该值或值为0时将使用默认值，Devicemapper模式下默认值为10；OverlayFS模式默认不限制单容器可用空间大小，且dockerBaseSize设置仅在新版本集群的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * containerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小，单位G。  不配置该值或值为0时将使用默认值，OverlayFS模式默认不限制单容器可用空间大小；Devicemapper模式下默认值为10，且containerBaseSize设置仅在新版本集群（v1.23.14-r0/v1.25.9-r0/v1.27.6-r0/v1.28.4-r0及以上）的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议containerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替；Devicemapper模式在新版中仅有共池裸机使用，已逐步废弃。  **约束限制**: > 更新节点池时，不支持更新此参数  **取值范围**: 不涉及 **默认取值**: 不涉及
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $setters = [
            'dockerBaseSize' => 'setDockerBaseSize',
            'containerBaseSize' => 'setContainerBaseSize',
            'runtime' => 'setRuntime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dockerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。  不配置该值或值为0时将使用默认值，Devicemapper模式下默认值为10；OverlayFS模式默认不限制单容器可用空间大小，且dockerBaseSize设置仅在新版本集群的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * containerBaseSize  **参数解释**: 节点上单容器的可用磁盘空间大小，单位G。  不配置该值或值为0时将使用默认值，OverlayFS模式默认不限制单容器可用空间大小；Devicemapper模式下默认值为10，且containerBaseSize设置仅在新版本集群（v1.23.14-r0/v1.25.9-r0/v1.27.6-r0/v1.28.4-r0及以上）的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议containerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替；Devicemapper模式在新版中仅有共池裸机使用，已逐步废弃。  **约束限制**: > 更新节点池时，不支持更新此参数  **取值范围**: 不涉及 **默认取值**: 不涉及
    * runtime  runtime
    *
    * @var string[]
    */
    protected static $getters = [
            'dockerBaseSize' => 'getDockerBaseSize',
            'containerBaseSize' => 'getContainerBaseSize',
            'runtime' => 'getRuntime'
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
        $this->container['dockerBaseSize'] = isset($data['dockerBaseSize']) ? $data['dockerBaseSize'] : null;
        $this->container['containerBaseSize'] = isset($data['containerBaseSize']) ? $data['containerBaseSize'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dockerBaseSize']) && ($this->container['dockerBaseSize'] > 500)) {
                $invalidProperties[] = "invalid value for 'dockerBaseSize', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['dockerBaseSize']) && ($this->container['dockerBaseSize'] < 10)) {
                $invalidProperties[] = "invalid value for 'dockerBaseSize', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['containerBaseSize']) && ($this->container['containerBaseSize'] > 500)) {
                $invalidProperties[] = "invalid value for 'containerBaseSize', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['containerBaseSize']) && ($this->container['containerBaseSize'] < 10)) {
                $invalidProperties[] = "invalid value for 'containerBaseSize', must be bigger than or equal to 10.";
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
    * Gets dockerBaseSize
    *  **参数解释**: 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。  不配置该值或值为0时将使用默认值，Devicemapper模式下默认值为10；OverlayFS模式默认不限制单容器可用空间大小，且dockerBaseSize设置仅在新版本集群的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getDockerBaseSize()
    {
        return $this->container['dockerBaseSize'];
    }

    /**
    * Sets dockerBaseSize
    *
    * @param int|null $dockerBaseSize **参数解释**: 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。  不配置该值或值为0时将使用默认值，Devicemapper模式下默认值为10；OverlayFS模式默认不限制单容器可用空间大小，且dockerBaseSize设置仅在新版本集群的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDockerBaseSize($dockerBaseSize)
    {
        $this->container['dockerBaseSize'] = $dockerBaseSize;
        return $this;
    }

    /**
    * Gets containerBaseSize
    *  **参数解释**: 节点上单容器的可用磁盘空间大小，单位G。  不配置该值或值为0时将使用默认值，OverlayFS模式默认不限制单容器可用空间大小；Devicemapper模式下默认值为10，且containerBaseSize设置仅在新版本集群（v1.23.14-r0/v1.25.9-r0/v1.27.6-r0/v1.28.4-r0及以上）的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议containerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替；Devicemapper模式在新版中仅有共池裸机使用，已逐步废弃。  **约束限制**: > 更新节点池时，不支持更新此参数  **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getContainerBaseSize()
    {
        return $this->container['containerBaseSize'];
    }

    /**
    * Sets containerBaseSize
    *
    * @param int|null $containerBaseSize **参数解释**: 节点上单容器的可用磁盘空间大小，单位G。  不配置该值或值为0时将使用默认值，OverlayFS模式默认不限制单容器可用空间大小；Devicemapper模式下默认值为10，且containerBaseSize设置仅在新版本集群（v1.23.14-r0/v1.25.9-r0/v1.27.6-r0/v1.28.4-r0及以上）的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。  Devicemapper模式下建议containerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替；Devicemapper模式在新版中仅有共池裸机使用，已逐步废弃。  **约束限制**: > 更新节点池时，不支持更新此参数  **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setContainerBaseSize($containerBaseSize)
    {
        $this->container['containerBaseSize'] = $containerBaseSize;
        return $this;
    }

    /**
    * Gets runtime
    *  runtime
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null $runtime runtime
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
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

