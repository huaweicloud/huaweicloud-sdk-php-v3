<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  cpu个数
    * memory  内存大小
    * gpu  gpu内存大小，单位为M
    * npu  使用npu加速卡个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'float',
            'memory' => 'float',
            'gpu' => 'float',
            'npu' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  cpu个数
    * memory  内存大小
    * gpu  gpu内存大小，单位为M
    * npu  使用npu加速卡个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => 'float',
        'memory' => 'float',
        'gpu' => 'float',
        'npu' => 'float'
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
    * cpu  cpu个数
    * memory  内存大小
    * gpu  gpu内存大小，单位为M
    * npu  使用npu加速卡个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'memory' => 'memory',
            'gpu' => 'gpu',
            'npu' => 'npu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  cpu个数
    * memory  内存大小
    * gpu  gpu内存大小，单位为M
    * npu  使用npu加速卡个数
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'gpu' => 'setGpu',
            'npu' => 'setNpu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  cpu个数
    * memory  内存大小
    * gpu  gpu内存大小，单位为M
    * npu  使用npu加速卡个数
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'gpu' => 'getGpu',
            'npu' => 'getNpu'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['npu'] = isset($data['npu']) ? $data['npu'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] > 1E+3)) {
                $invalidProperties[] = "invalid value for 'cpu', must be smaller than or equal to 1E+3.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] < 0.01)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.01.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] > 1.024E+6)) {
                $invalidProperties[] = "invalid value for 'memory', must be smaller than or equal to 1.024E+6.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] < 0.01)) {
                $invalidProperties[] = "invalid value for 'memory', must be bigger than or equal to 0.01.";
            }
            if (!is_null($this->container['gpu']) && ($this->container['gpu'] > 1.024E+6)) {
                $invalidProperties[] = "invalid value for 'gpu', must be smaller than or equal to 1.024E+6.";
            }
            if (!is_null($this->container['gpu']) && ($this->container['gpu'] < 0.01)) {
                $invalidProperties[] = "invalid value for 'gpu', must be bigger than or equal to 0.01.";
            }
            if (!is_null($this->container['npu']) && ($this->container['npu'] > 1E+3)) {
                $invalidProperties[] = "invalid value for 'npu', must be smaller than or equal to 1E+3.";
            }
            if (!is_null($this->container['npu']) && ($this->container['npu'] < 0.01)) {
                $invalidProperties[] = "invalid value for 'npu', must be bigger than or equal to 0.01.";
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
    * Gets cpu
    *  cpu个数
    *
    * @return float|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param float|null $cpu cpu个数
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
    *  内存大小
    *
    * @return float|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param float|null $memory 内存大小
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
    *  gpu内存大小，单位为M
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
    * @param float|null $gpu gpu内存大小，单位为M
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
    *  使用npu加速卡个数
    *
    * @return float|null
    */
    public function getNpu()
    {
        return $this->container['npu'];
    }

    /**
    * Sets npu
    *
    * @param float|null $npu 使用npu加速卡个数
    *
    * @return $this
    */
    public function setNpu($npu)
    {
        $this->container['npu'] = $npu;
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

