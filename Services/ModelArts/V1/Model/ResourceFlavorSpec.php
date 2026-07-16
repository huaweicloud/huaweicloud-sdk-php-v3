<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceFlavorSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceFlavorSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：资源规格类型。 **取值范围**：可选值如下： - Dedicate：物理资源规格。物理资源规格可以创建节点资源。 [- Logical：逻辑资源规格。](tag:hcso)
    * cpuArch  **参数解释**：资源规格实例的计算架构。 **取值范围**：可选值如下： - x86：x86架构。 - arm64：ARM架构。
    * cpu  **参数解释**：资源规格实例的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：资源规格实例的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * gpu  gpu
    * npu  npu
    * dataVolume  **参数解释**：资源规格实例的存储资源信息。
    * billingModes  **参数解释**：资源规格支持的计费模式。
    * billingCode  **参数解释**：资源规格计费码。 **取值范围**：不涉及。
    * jobFlavors  **参数解释**：资源规格支持的作业类型列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'cpuArch' => 'string',
            'cpu' => 'string',
            'memory' => 'string',
            'gpu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecGpu',
            'npu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecNpu',
            'dataVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecDataVolume[]',
            'billingModes' => 'int[]',
            'billingCode' => 'string',
            'jobFlavors' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：资源规格类型。 **取值范围**：可选值如下： - Dedicate：物理资源规格。物理资源规格可以创建节点资源。 [- Logical：逻辑资源规格。](tag:hcso)
    * cpuArch  **参数解释**：资源规格实例的计算架构。 **取值范围**：可选值如下： - x86：x86架构。 - arm64：ARM架构。
    * cpu  **参数解释**：资源规格实例的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：资源规格实例的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * gpu  gpu
    * npu  npu
    * dataVolume  **参数解释**：资源规格实例的存储资源信息。
    * billingModes  **参数解释**：资源规格支持的计费模式。
    * billingCode  **参数解释**：资源规格计费码。 **取值范围**：不涉及。
    * jobFlavors  **参数解释**：资源规格支持的作业类型列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'cpuArch' => null,
        'cpu' => null,
        'memory' => null,
        'gpu' => null,
        'npu' => null,
        'dataVolume' => null,
        'billingModes' => 'int32',
        'billingCode' => null,
        'jobFlavors' => null
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
    * type  **参数解释**：资源规格类型。 **取值范围**：可选值如下： - Dedicate：物理资源规格。物理资源规格可以创建节点资源。 [- Logical：逻辑资源规格。](tag:hcso)
    * cpuArch  **参数解释**：资源规格实例的计算架构。 **取值范围**：可选值如下： - x86：x86架构。 - arm64：ARM架构。
    * cpu  **参数解释**：资源规格实例的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：资源规格实例的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * gpu  gpu
    * npu  npu
    * dataVolume  **参数解释**：资源规格实例的存储资源信息。
    * billingModes  **参数解释**：资源规格支持的计费模式。
    * billingCode  **参数解释**：资源规格计费码。 **取值范围**：不涉及。
    * jobFlavors  **参数解释**：资源规格支持的作业类型列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'cpuArch' => 'cpuArch',
            'cpu' => 'cpu',
            'memory' => 'memory',
            'gpu' => 'gpu',
            'npu' => 'npu',
            'dataVolume' => 'dataVolume',
            'billingModes' => 'billingModes',
            'billingCode' => 'billingCode',
            'jobFlavors' => 'jobFlavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：资源规格类型。 **取值范围**：可选值如下： - Dedicate：物理资源规格。物理资源规格可以创建节点资源。 [- Logical：逻辑资源规格。](tag:hcso)
    * cpuArch  **参数解释**：资源规格实例的计算架构。 **取值范围**：可选值如下： - x86：x86架构。 - arm64：ARM架构。
    * cpu  **参数解释**：资源规格实例的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：资源规格实例的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * gpu  gpu
    * npu  npu
    * dataVolume  **参数解释**：资源规格实例的存储资源信息。
    * billingModes  **参数解释**：资源规格支持的计费模式。
    * billingCode  **参数解释**：资源规格计费码。 **取值范围**：不涉及。
    * jobFlavors  **参数解释**：资源规格支持的作业类型列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'cpuArch' => 'setCpuArch',
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'gpu' => 'setGpu',
            'npu' => 'setNpu',
            'dataVolume' => 'setDataVolume',
            'billingModes' => 'setBillingModes',
            'billingCode' => 'setBillingCode',
            'jobFlavors' => 'setJobFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：资源规格类型。 **取值范围**：可选值如下： - Dedicate：物理资源规格。物理资源规格可以创建节点资源。 [- Logical：逻辑资源规格。](tag:hcso)
    * cpuArch  **参数解释**：资源规格实例的计算架构。 **取值范围**：可选值如下： - x86：x86架构。 - arm64：ARM架构。
    * cpu  **参数解释**：资源规格实例的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：资源规格实例的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * gpu  gpu
    * npu  npu
    * dataVolume  **参数解释**：资源规格实例的存储资源信息。
    * billingModes  **参数解释**：资源规格支持的计费模式。
    * billingCode  **参数解释**：资源规格计费码。 **取值范围**：不涉及。
    * jobFlavors  **参数解释**：资源规格支持的作业类型列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'cpuArch' => 'getCpuArch',
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'gpu' => 'getGpu',
            'npu' => 'getNpu',
            'dataVolume' => 'getDataVolume',
            'billingModes' => 'getBillingModes',
            'billingCode' => 'getBillingCode',
            'jobFlavors' => 'getJobFlavors'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cpuArch'] = isset($data['cpuArch']) ? $data['cpuArch'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['npu'] = isset($data['npu']) ? $data['npu'] : null;
        $this->container['dataVolume'] = isset($data['dataVolume']) ? $data['dataVolume'] : null;
        $this->container['billingModes'] = isset($data['billingModes']) ? $data['billingModes'] : null;
        $this->container['billingCode'] = isset($data['billingCode']) ? $data['billingCode'] : null;
        $this->container['jobFlavors'] = isset($data['jobFlavors']) ? $data['jobFlavors'] : null;
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
    * Gets type
    *  **参数解释**：资源规格类型。 **取值范围**：可选值如下： - Dedicate：物理资源规格。物理资源规格可以创建节点资源。 [- Logical：逻辑资源规格。](tag:hcso)
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：资源规格类型。 **取值范围**：可选值如下： - Dedicate：物理资源规格。物理资源规格可以创建节点资源。 [- Logical：逻辑资源规格。](tag:hcso)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cpuArch
    *  **参数解释**：资源规格实例的计算架构。 **取值范围**：可选值如下： - x86：x86架构。 - arm64：ARM架构。
    *
    * @return string|null
    */
    public function getCpuArch()
    {
        return $this->container['cpuArch'];
    }

    /**
    * Sets cpuArch
    *
    * @param string|null $cpuArch **参数解释**：资源规格实例的计算架构。 **取值范围**：可选值如下： - x86：x86架构。 - arm64：ARM架构。
    *
    * @return $this
    */
    public function setCpuArch($cpuArch)
    {
        $this->container['cpuArch'] = $cpuArch;
        return $this;
    }

    /**
    * Gets cpu
    *  **参数解释**：资源规格实例的CPU核心数量。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu **参数解释**：资源规格实例的CPU核心数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets memory
    *  **参数解释**：资源规格实例的内存大小。以Gi为单位。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string|null $memory **参数解释**：资源规格实例的内存大小。以Gi为单位。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets gpu
    *  gpu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecGpu|null
    */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
    * Sets gpu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecGpu|null $gpu gpu
    *
    * @return $this
    */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;
        return $this;
    }

    /**
    * Gets npu
    *  npu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecNpu|null
    */
    public function getNpu()
    {
        return $this->container['npu'];
    }

    /**
    * Sets npu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecNpu|null $npu npu
    *
    * @return $this
    */
    public function setNpu($npu)
    {
        $this->container['npu'] = $npu;
        return $this;
    }

    /**
    * Gets dataVolume
    *  **参数解释**：资源规格实例的存储资源信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecDataVolume[]|null
    */
    public function getDataVolume()
    {
        return $this->container['dataVolume'];
    }

    /**
    * Sets dataVolume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceFlavorSpecDataVolume[]|null $dataVolume **参数解释**：资源规格实例的存储资源信息。
    *
    * @return $this
    */
    public function setDataVolume($dataVolume)
    {
        $this->container['dataVolume'] = $dataVolume;
        return $this;
    }

    /**
    * Gets billingModes
    *  **参数解释**：资源规格支持的计费模式。
    *
    * @return int[]|null
    */
    public function getBillingModes()
    {
        return $this->container['billingModes'];
    }

    /**
    * Sets billingModes
    *
    * @param int[]|null $billingModes **参数解释**：资源规格支持的计费模式。
    *
    * @return $this
    */
    public function setBillingModes($billingModes)
    {
        $this->container['billingModes'] = $billingModes;
        return $this;
    }

    /**
    * Gets billingCode
    *  **参数解释**：资源规格计费码。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getBillingCode()
    {
        return $this->container['billingCode'];
    }

    /**
    * Sets billingCode
    *
    * @param string|null $billingCode **参数解释**：资源规格计费码。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setBillingCode($billingCode)
    {
        $this->container['billingCode'] = $billingCode;
        return $this;
    }

    /**
    * Gets jobFlavors
    *  **参数解释**：资源规格支持的作业类型列表。
    *
    * @return string[]|null
    */
    public function getJobFlavors()
    {
        return $this->container['jobFlavors'];
    }

    /**
    * Sets jobFlavors
    *
    * @param string[]|null $jobFlavors **参数解释**：资源规格支持的作业类型列表。
    *
    * @return $this
    */
    public function setJobFlavors($jobFlavors)
    {
        $this->container['jobFlavors'] = $jobFlavors;
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

