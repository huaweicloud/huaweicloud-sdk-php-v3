<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Runtime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Runtime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  容器运行时，默认场景： - v1.25以下集群：默认为\"docker\" - v1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为EulerOS 2.5[、EulerOS 2.8](tag:hws,hws_hk)的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    * runtimeClass  **参数解释**： 容器运行时子类别。 **约束限制**： 仅CCE Turbo集群下弹性云服务器-物理机类型节点且上级运行时为containerd场景支持使用安全运行时。 **取值范围**： - runc: 普通运行时。 - kata: 安全运行时，需配套c6、c7系列弹性云服务器-物理机，支持的操作系统为EulerOS 2.10。 - kuasar-vmm: 安全运行时v2，支持kc2、ki2、c7、ac8h系列弹性服务器-物理机，配套操作系统为HCE 2.0，集群版本需为v1.28.15-r70、v1.29.15-r30、v1.30.14-r30、v1.31.10-r30、v1.32.6-r30、v1.33.5-r20或以上版本。  **默认取值**： runc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'runtimeClass' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  容器运行时，默认场景： - v1.25以下集群：默认为\"docker\" - v1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为EulerOS 2.5[、EulerOS 2.8](tag:hws,hws_hk)的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    * runtimeClass  **参数解释**： 容器运行时子类别。 **约束限制**： 仅CCE Turbo集群下弹性云服务器-物理机类型节点且上级运行时为containerd场景支持使用安全运行时。 **取值范围**： - runc: 普通运行时。 - kata: 安全运行时，需配套c6、c7系列弹性云服务器-物理机，支持的操作系统为EulerOS 2.10。 - kuasar-vmm: 安全运行时v2，支持kc2、ki2、c7、ac8h系列弹性服务器-物理机，配套操作系统为HCE 2.0，集群版本需为v1.28.15-r70、v1.29.15-r30、v1.30.14-r30、v1.31.10-r30、v1.32.6-r30、v1.33.5-r20或以上版本。  **默认取值**： runc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'runtimeClass' => null
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
    * name  容器运行时，默认场景： - v1.25以下集群：默认为\"docker\" - v1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为EulerOS 2.5[、EulerOS 2.8](tag:hws,hws_hk)的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    * runtimeClass  **参数解释**： 容器运行时子类别。 **约束限制**： 仅CCE Turbo集群下弹性云服务器-物理机类型节点且上级运行时为containerd场景支持使用安全运行时。 **取值范围**： - runc: 普通运行时。 - kata: 安全运行时，需配套c6、c7系列弹性云服务器-物理机，支持的操作系统为EulerOS 2.10。 - kuasar-vmm: 安全运行时v2，支持kc2、ki2、c7、ac8h系列弹性服务器-物理机，配套操作系统为HCE 2.0，集群版本需为v1.28.15-r70、v1.29.15-r30、v1.30.14-r30、v1.31.10-r30、v1.32.6-r30、v1.33.5-r20或以上版本。  **默认取值**： runc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'runtimeClass' => 'runtimeClass'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  容器运行时，默认场景： - v1.25以下集群：默认为\"docker\" - v1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为EulerOS 2.5[、EulerOS 2.8](tag:hws,hws_hk)的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    * runtimeClass  **参数解释**： 容器运行时子类别。 **约束限制**： 仅CCE Turbo集群下弹性云服务器-物理机类型节点且上级运行时为containerd场景支持使用安全运行时。 **取值范围**： - runc: 普通运行时。 - kata: 安全运行时，需配套c6、c7系列弹性云服务器-物理机，支持的操作系统为EulerOS 2.10。 - kuasar-vmm: 安全运行时v2，支持kc2、ki2、c7、ac8h系列弹性服务器-物理机，配套操作系统为HCE 2.0，集群版本需为v1.28.15-r70、v1.29.15-r30、v1.30.14-r30、v1.31.10-r30、v1.32.6-r30、v1.33.5-r20或以上版本。  **默认取值**： runc
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'runtimeClass' => 'setRuntimeClass'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  容器运行时，默认场景： - v1.25以下集群：默认为\"docker\" - v1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为EulerOS 2.5[、EulerOS 2.8](tag:hws,hws_hk)的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    * runtimeClass  **参数解释**： 容器运行时子类别。 **约束限制**： 仅CCE Turbo集群下弹性云服务器-物理机类型节点且上级运行时为containerd场景支持使用安全运行时。 **取值范围**： - runc: 普通运行时。 - kata: 安全运行时，需配套c6、c7系列弹性云服务器-物理机，支持的操作系统为EulerOS 2.10。 - kuasar-vmm: 安全运行时v2，支持kc2、ki2、c7、ac8h系列弹性服务器-物理机，配套操作系统为HCE 2.0，集群版本需为v1.28.15-r70、v1.29.15-r30、v1.30.14-r30、v1.31.10-r30、v1.32.6-r30、v1.33.5-r20或以上版本。  **默认取值**： runc
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'runtimeClass' => 'getRuntimeClass'
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
    const NAME_DOCKER = 'docker';
    const NAME_CONTAINERD = 'containerd';
    const RUNTIME_CLASS_RUNC = 'runc';
    const RUNTIME_CLASS_KATA = 'kata';
    const RUNTIME_CLASS_KUASAR_VMM = 'kuasar-vmm';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_DOCKER,
            self::NAME_CONTAINERD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuntimeClassAllowableValues()
    {
        return [
            self::RUNTIME_CLASS_RUNC,
            self::RUNTIME_CLASS_KATA,
            self::RUNTIME_CLASS_KUASAR_VMM,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['runtimeClass'] = isset($data['runtimeClass']) ? $data['runtimeClass'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRuntimeClassAllowableValues();
                if (!is_null($this->container['runtimeClass']) && !in_array($this->container['runtimeClass'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runtimeClass', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  容器运行时，默认场景： - v1.25以下集群：默认为\"docker\" - v1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为EulerOS 2.5[、EulerOS 2.8](tag:hws,hws_hk)的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
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
    * @param string|null $name 容器运行时，默认场景： - v1.25以下集群：默认为\"docker\" - v1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为EulerOS 2.5[、EulerOS 2.8](tag:hws,hws_hk)的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets runtimeClass
    *  **参数解释**： 容器运行时子类别。 **约束限制**： 仅CCE Turbo集群下弹性云服务器-物理机类型节点且上级运行时为containerd场景支持使用安全运行时。 **取值范围**： - runc: 普通运行时。 - kata: 安全运行时，需配套c6、c7系列弹性云服务器-物理机，支持的操作系统为EulerOS 2.10。 - kuasar-vmm: 安全运行时v2，支持kc2、ki2、c7、ac8h系列弹性服务器-物理机，配套操作系统为HCE 2.0，集群版本需为v1.28.15-r70、v1.29.15-r30、v1.30.14-r30、v1.31.10-r30、v1.32.6-r30、v1.33.5-r20或以上版本。  **默认取值**： runc
    *
    * @return string|null
    */
    public function getRuntimeClass()
    {
        return $this->container['runtimeClass'];
    }

    /**
    * Sets runtimeClass
    *
    * @param string|null $runtimeClass **参数解释**： 容器运行时子类别。 **约束限制**： 仅CCE Turbo集群下弹性云服务器-物理机类型节点且上级运行时为containerd场景支持使用安全运行时。 **取值范围**： - runc: 普通运行时。 - kata: 安全运行时，需配套c6、c7系列弹性云服务器-物理机，支持的操作系统为EulerOS 2.10。 - kuasar-vmm: 安全运行时v2，支持kc2、ki2、c7、ac8h系列弹性服务器-物理机，配套操作系统为HCE 2.0，集群版本需为v1.28.15-r70、v1.29.15-r30、v1.30.14-r30、v1.31.10-r30、v1.32.6-r30、v1.33.5-r20或以上版本。  **默认取值**： runc
    *
    * @return $this
    */
    public function setRuntimeClass($runtimeClass)
    {
        $this->container['runtimeClass'] = $runtimeClass;
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

