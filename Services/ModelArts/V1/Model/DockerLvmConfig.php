<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DockerLvmConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DockerLvmConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dockerThinPool  **参数解释**： 资源池节点Docker盘占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * kubernetesLv  **参数解释**： 资源池节点上kubelet占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * dockerDiskType  **参数解释**： 磁盘类型。 **取值范围**： 可选值如下： - evs：云硬盘 - ssd：本地SSD硬盘
    * lvType  **参数解释**： LVM写入模式。 **取值范围**： 可选值如下： - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能 - linear：线性模式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dockerThinPool' => 'int',
            'kubernetesLv' => 'int',
            'dockerDiskType' => 'string',
            'lvType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dockerThinPool  **参数解释**： 资源池节点Docker盘占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * kubernetesLv  **参数解释**： 资源池节点上kubelet占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * dockerDiskType  **参数解释**： 磁盘类型。 **取值范围**： 可选值如下： - evs：云硬盘 - ssd：本地SSD硬盘
    * lvType  **参数解释**： LVM写入模式。 **取值范围**： 可选值如下： - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能 - linear：线性模式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dockerThinPool' => 'int32',
        'kubernetesLv' => 'int32',
        'dockerDiskType' => null,
        'lvType' => null
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
    * dockerThinPool  **参数解释**： 资源池节点Docker盘占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * kubernetesLv  **参数解释**： 资源池节点上kubelet占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * dockerDiskType  **参数解释**： 磁盘类型。 **取值范围**： 可选值如下： - evs：云硬盘 - ssd：本地SSD硬盘
    * lvType  **参数解释**： LVM写入模式。 **取值范围**： 可选值如下： - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能 - linear：线性模式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dockerThinPool' => 'dockerThinPool',
            'kubernetesLv' => 'kubernetesLV',
            'dockerDiskType' => 'dockerDiskType',
            'lvType' => 'lvType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dockerThinPool  **参数解释**： 资源池节点Docker盘占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * kubernetesLv  **参数解释**： 资源池节点上kubelet占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * dockerDiskType  **参数解释**： 磁盘类型。 **取值范围**： 可选值如下： - evs：云硬盘 - ssd：本地SSD硬盘
    * lvType  **参数解释**： LVM写入模式。 **取值范围**： 可选值如下： - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能 - linear：线性模式
    *
    * @var string[]
    */
    protected static $setters = [
            'dockerThinPool' => 'setDockerThinPool',
            'kubernetesLv' => 'setKubernetesLv',
            'dockerDiskType' => 'setDockerDiskType',
            'lvType' => 'setLvType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dockerThinPool  **参数解释**： 资源池节点Docker盘占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * kubernetesLv  **参数解释**： 资源池节点上kubelet占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    * dockerDiskType  **参数解释**： 磁盘类型。 **取值范围**： 可选值如下： - evs：云硬盘 - ssd：本地SSD硬盘
    * lvType  **参数解释**： LVM写入模式。 **取值范围**： 可选值如下： - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能 - linear：线性模式
    *
    * @var string[]
    */
    protected static $getters = [
            'dockerThinPool' => 'getDockerThinPool',
            'kubernetesLv' => 'getKubernetesLv',
            'dockerDiskType' => 'getDockerDiskType',
            'lvType' => 'getLvType'
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
        $this->container['dockerThinPool'] = isset($data['dockerThinPool']) ? $data['dockerThinPool'] : null;
        $this->container['kubernetesLv'] = isset($data['kubernetesLv']) ? $data['kubernetesLv'] : null;
        $this->container['dockerDiskType'] = isset($data['dockerDiskType']) ? $data['dockerDiskType'] : null;
        $this->container['lvType'] = isset($data['lvType']) ? $data['lvType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dockerThinPool'] === null) {
            $invalidProperties[] = "'dockerThinPool' can't be null";
        }
            if (($this->container['dockerThinPool'] < 10)) {
                $invalidProperties[] = "invalid value for 'dockerThinPool', must be bigger than or equal to 10.";
            }
        if ($this->container['kubernetesLv'] === null) {
            $invalidProperties[] = "'kubernetesLv' can't be null";
        }
            if (($this->container['kubernetesLv'] < 10)) {
                $invalidProperties[] = "invalid value for 'kubernetesLv', must be bigger than or equal to 10.";
            }
        if ($this->container['dockerDiskType'] === null) {
            $invalidProperties[] = "'dockerDiskType' can't be null";
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
    * Gets dockerThinPool
    *  **参数解释**： 资源池节点Docker盘占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getDockerThinPool()
    {
        return $this->container['dockerThinPool'];
    }

    /**
    * Sets dockerThinPool
    *
    * @param int $dockerThinPool **参数解释**： 资源池节点Docker盘占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDockerThinPool($dockerThinPool)
    {
        $this->container['dockerThinPool'] = $dockerThinPool;
        return $this;
    }

    /**
    * Gets kubernetesLv
    *  **参数解释**： 资源池节点上kubelet占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getKubernetesLv()
    {
        return $this->container['kubernetesLv'];
    }

    /**
    * Sets kubernetesLv
    *
    * @param int $kubernetesLv **参数解释**： 资源池节点上kubelet占数据盘的百分比。例如Docker盘大小占用数据盘20%，该参数值为20。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setKubernetesLv($kubernetesLv)
    {
        $this->container['kubernetesLv'] = $kubernetesLv;
        return $this;
    }

    /**
    * Gets dockerDiskType
    *  **参数解释**： 磁盘类型。 **取值范围**： 可选值如下： - evs：云硬盘 - ssd：本地SSD硬盘
    *
    * @return string
    */
    public function getDockerDiskType()
    {
        return $this->container['dockerDiskType'];
    }

    /**
    * Sets dockerDiskType
    *
    * @param string $dockerDiskType **参数解释**： 磁盘类型。 **取值范围**： 可选值如下： - evs：云硬盘 - ssd：本地SSD硬盘
    *
    * @return $this
    */
    public function setDockerDiskType($dockerDiskType)
    {
        $this->container['dockerDiskType'] = $dockerDiskType;
        return $this;
    }

    /**
    * Gets lvType
    *  **参数解释**： LVM写入模式。 **取值范围**： 可选值如下： - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能 - linear：线性模式
    *
    * @return string|null
    */
    public function getLvType()
    {
        return $this->container['lvType'];
    }

    /**
    * Sets lvType
    *
    * @param string|null $lvType **参数解释**： LVM写入模式。 **取值范围**： 可选值如下： - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能 - linear：线性模式
    *
    * @return $this
    */
    public function setLvType($lvType)
    {
        $this->container['lvType'] = $lvType;
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

