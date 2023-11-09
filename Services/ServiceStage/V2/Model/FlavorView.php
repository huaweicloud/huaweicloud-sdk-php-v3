<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorId  flavorId
    * storageSize  存储大小。
    * numCpu  CPU限制。
    * numCpuInit  CPU初始。
    * memorySize  内存限制。
    * memorySizeInit  内存初始。
    * label  展示标签。
    * custom  是否是自定义资源规格。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorId' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId',
            'storageSize' => 'string',
            'numCpu' => 'string',
            'numCpuInit' => 'string',
            'memorySize' => 'string',
            'memorySizeInit' => 'string',
            'label' => 'string',
            'custom' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorId  flavorId
    * storageSize  存储大小。
    * numCpu  CPU限制。
    * numCpuInit  CPU初始。
    * memorySize  内存限制。
    * memorySizeInit  内存初始。
    * label  展示标签。
    * custom  是否是自定义资源规格。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorId' => null,
        'storageSize' => null,
        'numCpu' => null,
        'numCpuInit' => null,
        'memorySize' => null,
        'memorySizeInit' => null,
        'label' => null,
        'custom' => null
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
    * flavorId  flavorId
    * storageSize  存储大小。
    * numCpu  CPU限制。
    * numCpuInit  CPU初始。
    * memorySize  内存限制。
    * memorySizeInit  内存初始。
    * label  展示标签。
    * custom  是否是自定义资源规格。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorId' => 'flavor_id',
            'storageSize' => 'storage_size',
            'numCpu' => 'num_cpu',
            'numCpuInit' => 'num_cpu_init',
            'memorySize' => 'memory_size',
            'memorySizeInit' => 'memory_size_init',
            'label' => 'label',
            'custom' => 'custom'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorId  flavorId
    * storageSize  存储大小。
    * numCpu  CPU限制。
    * numCpuInit  CPU初始。
    * memorySize  内存限制。
    * memorySizeInit  内存初始。
    * label  展示标签。
    * custom  是否是自定义资源规格。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorId' => 'setFlavorId',
            'storageSize' => 'setStorageSize',
            'numCpu' => 'setNumCpu',
            'numCpuInit' => 'setNumCpuInit',
            'memorySize' => 'setMemorySize',
            'memorySizeInit' => 'setMemorySizeInit',
            'label' => 'setLabel',
            'custom' => 'setCustom'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorId  flavorId
    * storageSize  存储大小。
    * numCpu  CPU限制。
    * numCpuInit  CPU初始。
    * memorySize  内存限制。
    * memorySizeInit  内存初始。
    * label  展示标签。
    * custom  是否是自定义资源规格。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorId' => 'getFlavorId',
            'storageSize' => 'getStorageSize',
            'numCpu' => 'getNumCpu',
            'numCpuInit' => 'getNumCpuInit',
            'memorySize' => 'getMemorySize',
            'memorySizeInit' => 'getMemorySizeInit',
            'label' => 'getLabel',
            'custom' => 'getCustom'
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
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['storageSize'] = isset($data['storageSize']) ? $data['storageSize'] : null;
        $this->container['numCpu'] = isset($data['numCpu']) ? $data['numCpu'] : null;
        $this->container['numCpuInit'] = isset($data['numCpuInit']) ? $data['numCpuInit'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['memorySizeInit'] = isset($data['memorySizeInit']) ? $data['memorySizeInit'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
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
    * Gets flavorId
    *  flavorId
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId|null $flavorId flavorId
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets storageSize
    *  存储大小。
    *
    * @return string|null
    */
    public function getStorageSize()
    {
        return $this->container['storageSize'];
    }

    /**
    * Sets storageSize
    *
    * @param string|null $storageSize 存储大小。
    *
    * @return $this
    */
    public function setStorageSize($storageSize)
    {
        $this->container['storageSize'] = $storageSize;
        return $this;
    }

    /**
    * Gets numCpu
    *  CPU限制。
    *
    * @return string|null
    */
    public function getNumCpu()
    {
        return $this->container['numCpu'];
    }

    /**
    * Sets numCpu
    *
    * @param string|null $numCpu CPU限制。
    *
    * @return $this
    */
    public function setNumCpu($numCpu)
    {
        $this->container['numCpu'] = $numCpu;
        return $this;
    }

    /**
    * Gets numCpuInit
    *  CPU初始。
    *
    * @return string|null
    */
    public function getNumCpuInit()
    {
        return $this->container['numCpuInit'];
    }

    /**
    * Sets numCpuInit
    *
    * @param string|null $numCpuInit CPU初始。
    *
    * @return $this
    */
    public function setNumCpuInit($numCpuInit)
    {
        $this->container['numCpuInit'] = $numCpuInit;
        return $this;
    }

    /**
    * Gets memorySize
    *  内存限制。
    *
    * @return string|null
    */
    public function getMemorySize()
    {
        return $this->container['memorySize'];
    }

    /**
    * Sets memorySize
    *
    * @param string|null $memorySize 内存限制。
    *
    * @return $this
    */
    public function setMemorySize($memorySize)
    {
        $this->container['memorySize'] = $memorySize;
        return $this;
    }

    /**
    * Gets memorySizeInit
    *  内存初始。
    *
    * @return string|null
    */
    public function getMemorySizeInit()
    {
        return $this->container['memorySizeInit'];
    }

    /**
    * Sets memorySizeInit
    *
    * @param string|null $memorySizeInit 内存初始。
    *
    * @return $this
    */
    public function setMemorySizeInit($memorySizeInit)
    {
        $this->container['memorySizeInit'] = $memorySizeInit;
        return $this;
    }

    /**
    * Gets label
    *  展示标签。
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 展示标签。
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets custom
    *  是否是自定义资源规格。
    *
    * @return bool|null
    */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
    * Sets custom
    *
    * @param bool|null $custom 是否是自定义资源规格。
    *
    * @return $this
    */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;
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

