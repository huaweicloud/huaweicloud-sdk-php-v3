<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotebookCustomSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotebookCustomSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gpu  **参数描述**：实例申请的GPU卡数。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpu  **参数描述**：实例申请的CPU核数大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：整数部分最多10位，小数部分最多2位，且数值不得小于0.4。 **默认取值**：不涉及。
    * memory  **参数描述**：实例申请的内存大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：必须是整数，整数部分最多10位，且数值不得小于513。 **默认取值**：不涉及。
    * gpuType  **参数描述**：实例申请的GPU加速卡类型。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景下必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arch  **参数描述**：实例申请的CPU架构。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - X86_64：x86架构 - AARCH64：ARM架构  **默认取值**：不涉及。
    * category  **参数描述**：实例申请的规格类型。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - CPU：CPU规格。 - GPU：GPU规格。  **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：实例选择的目标资源池节点实例规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gpu' => 'float',
            'cpu' => 'float',
            'memory' => 'float',
            'gpuType' => 'string',
            'arch' => 'string',
            'category' => 'string',
            'resourceFlavor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gpu  **参数描述**：实例申请的GPU卡数。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpu  **参数描述**：实例申请的CPU核数大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：整数部分最多10位，小数部分最多2位，且数值不得小于0.4。 **默认取值**：不涉及。
    * memory  **参数描述**：实例申请的内存大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：必须是整数，整数部分最多10位，且数值不得小于513。 **默认取值**：不涉及。
    * gpuType  **参数描述**：实例申请的GPU加速卡类型。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景下必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arch  **参数描述**：实例申请的CPU架构。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - X86_64：x86架构 - AARCH64：ARM架构  **默认取值**：不涉及。
    * category  **参数描述**：实例申请的规格类型。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - CPU：CPU规格。 - GPU：GPU规格。  **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：实例选择的目标资源池节点实例规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gpu' => 'float',
        'cpu' => 'float',
        'memory' => 'float',
        'gpuType' => null,
        'arch' => null,
        'category' => null,
        'resourceFlavor' => null
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
    * gpu  **参数描述**：实例申请的GPU卡数。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpu  **参数描述**：实例申请的CPU核数大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：整数部分最多10位，小数部分最多2位，且数值不得小于0.4。 **默认取值**：不涉及。
    * memory  **参数描述**：实例申请的内存大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：必须是整数，整数部分最多10位，且数值不得小于513。 **默认取值**：不涉及。
    * gpuType  **参数描述**：实例申请的GPU加速卡类型。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景下必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arch  **参数描述**：实例申请的CPU架构。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - X86_64：x86架构 - AARCH64：ARM架构  **默认取值**：不涉及。
    * category  **参数描述**：实例申请的规格类型。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - CPU：CPU规格。 - GPU：GPU规格。  **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：实例选择的目标资源池节点实例规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gpu' => 'gpu',
            'cpu' => 'cpu',
            'memory' => 'memory',
            'gpuType' => 'gpu_type',
            'arch' => 'arch',
            'category' => 'category',
            'resourceFlavor' => 'resource_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gpu  **参数描述**：实例申请的GPU卡数。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpu  **参数描述**：实例申请的CPU核数大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：整数部分最多10位，小数部分最多2位，且数值不得小于0.4。 **默认取值**：不涉及。
    * memory  **参数描述**：实例申请的内存大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：必须是整数，整数部分最多10位，且数值不得小于513。 **默认取值**：不涉及。
    * gpuType  **参数描述**：实例申请的GPU加速卡类型。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景下必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arch  **参数描述**：实例申请的CPU架构。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - X86_64：x86架构 - AARCH64：ARM架构  **默认取值**：不涉及。
    * category  **参数描述**：实例申请的规格类型。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - CPU：CPU规格。 - GPU：GPU规格。  **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：实例选择的目标资源池节点实例规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'gpu' => 'setGpu',
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'gpuType' => 'setGpuType',
            'arch' => 'setArch',
            'category' => 'setCategory',
            'resourceFlavor' => 'setResourceFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gpu  **参数描述**：实例申请的GPU卡数。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpu  **参数描述**：实例申请的CPU核数大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：整数部分最多10位，小数部分最多2位，且数值不得小于0.4。 **默认取值**：不涉及。
    * memory  **参数描述**：实例申请的内存大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：必须是整数，整数部分最多10位，且数值不得小于513。 **默认取值**：不涉及。
    * gpuType  **参数描述**：实例申请的GPU加速卡类型。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景下必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arch  **参数描述**：实例申请的CPU架构。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - X86_64：x86架构 - AARCH64：ARM架构  **默认取值**：不涉及。
    * category  **参数描述**：实例申请的规格类型。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - CPU：CPU规格。 - GPU：GPU规格。  **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：实例选择的目标资源池节点实例规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'gpu' => 'getGpu',
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'gpuType' => 'getGpuType',
            'arch' => 'getArch',
            'category' => 'getCategory',
            'resourceFlavor' => 'getResourceFlavor'
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
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['gpuType'] = isset($data['gpuType']) ? $data['gpuType'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['resourceFlavor'] = isset($data['resourceFlavor']) ? $data['resourceFlavor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['gpu']) && ($this->container['gpu'] >= 8)) {
                $invalidProperties[] = "invalid value for 'gpu', must be smaller than 8.";
            }
            if (!is_null($this->container['gpu']) && ($this->container['gpu'] < 0)) {
                $invalidProperties[] = "invalid value for 'gpu', must be bigger than or equal to 0.";
            }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
            if (($this->container['cpu'] <= 0.3)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than 0.3.";
            }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
            if (($this->container['memory'] <= 512)) {
                $invalidProperties[] = "invalid value for 'memory', must be bigger than 512.";
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
    * Gets gpu
    *  **参数描述**：实例申请的GPU卡数。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return float|null
    */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
    * Sets gpu
    *
    * @param float|null $gpu **参数描述**：实例申请的GPU卡数。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;
        return $this;
    }

    /**
    * Gets cpu
    *  **参数描述**：实例申请的CPU核数大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：整数部分最多10位，小数部分最多2位，且数值不得小于0.4。 **默认取值**：不涉及。
    *
    * @return float
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param float $cpu **参数描述**：实例申请的CPU核数大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：整数部分最多10位，小数部分最多2位，且数值不得小于0.4。 **默认取值**：不涉及。
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
    *  **参数描述**：实例申请的内存大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：必须是整数，整数部分最多10位，且数值不得小于513。 **默认取值**：不涉及。
    *
    * @return float
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param float $memory **参数描述**：实例申请的内存大小。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：必须是整数，整数部分最多10位，且数值不得小于513。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets gpuType
    *  **参数描述**：实例申请的GPU加速卡类型。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景下必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getGpuType()
    {
        return $this->container['gpuType'];
    }

    /**
    * Sets gpuType
    *
    * @param string|null $gpuType **参数描述**：实例申请的GPU加速卡类型。 **约束限制**：CPU专属池场景下无此字段，GPU专属池场景下必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setGpuType($gpuType)
    {
        $this->container['gpuType'] = $gpuType;
        return $this;
    }

    /**
    * Gets arch
    *  **参数描述**：实例申请的CPU架构。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - X86_64：x86架构 - AARCH64：ARM架构  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数描述**：实例申请的CPU架构。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - X86_64：x86架构 - AARCH64：ARM架构  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets category
    *  **参数描述**：实例申请的规格类型。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - CPU：CPU规格。 - GPU：GPU规格。  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数描述**：实例申请的规格类型。 **约束限制**：CPU/GPU专属池场景下自定义规格必填。 **取值范围**：枚举类型，取值如下： - CPU：CPU规格。 - GPU：GPU规格。  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets resourceFlavor
    *  **参数解释**：实例选择的目标资源池节点实例规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getResourceFlavor()
    {
        return $this->container['resourceFlavor'];
    }

    /**
    * Sets resourceFlavor
    *
    * @param string|null $resourceFlavor **参数解释**：实例选择的目标资源池节点实例规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setResourceFlavor($resourceFlavor)
    {
        $this->container['resourceFlavor'] = $resourceFlavor;
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

