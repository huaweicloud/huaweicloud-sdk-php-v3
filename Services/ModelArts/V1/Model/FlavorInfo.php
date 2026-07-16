<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxNum  可以选择的最大节点数量（max_num，为1代表不支持分布式）。
    * cpu  cpu
    * gpu  gpu
    * npu  npu
    * memory  memory
    * disk  disk
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxNum' => 'int',
            'cpu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Cpu',
            'gpu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Gpu',
            'npu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Npu',
            'memory' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Memory',
            'disk' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Disk'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxNum  可以选择的最大节点数量（max_num，为1代表不支持分布式）。
    * cpu  cpu
    * gpu  gpu
    * npu  npu
    * memory  memory
    * disk  disk
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxNum' => 'int32',
        'cpu' => null,
        'gpu' => null,
        'npu' => null,
        'memory' => null,
        'disk' => null
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
    * maxNum  可以选择的最大节点数量（max_num，为1代表不支持分布式）。
    * cpu  cpu
    * gpu  gpu
    * npu  npu
    * memory  memory
    * disk  disk
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxNum' => 'max_num',
            'cpu' => 'cpu',
            'gpu' => 'gpu',
            'npu' => 'npu',
            'memory' => 'memory',
            'disk' => 'disk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxNum  可以选择的最大节点数量（max_num，为1代表不支持分布式）。
    * cpu  cpu
    * gpu  gpu
    * npu  npu
    * memory  memory
    * disk  disk
    *
    * @var string[]
    */
    protected static $setters = [
            'maxNum' => 'setMaxNum',
            'cpu' => 'setCpu',
            'gpu' => 'setGpu',
            'npu' => 'setNpu',
            'memory' => 'setMemory',
            'disk' => 'setDisk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxNum  可以选择的最大节点数量（max_num，为1代表不支持分布式）。
    * cpu  cpu
    * gpu  gpu
    * npu  npu
    * memory  memory
    * disk  disk
    *
    * @var string[]
    */
    protected static $getters = [
            'maxNum' => 'getMaxNum',
            'cpu' => 'getCpu',
            'gpu' => 'getGpu',
            'npu' => 'getNpu',
            'memory' => 'getMemory',
            'disk' => 'getDisk'
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
        $this->container['maxNum'] = isset($data['maxNum']) ? $data['maxNum'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['npu'] = isset($data['npu']) ? $data['npu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
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
    * Gets maxNum
    *  可以选择的最大节点数量（max_num，为1代表不支持分布式）。
    *
    * @return int|null
    */
    public function getMaxNum()
    {
        return $this->container['maxNum'];
    }

    /**
    * Sets maxNum
    *
    * @param int|null $maxNum 可以选择的最大节点数量（max_num，为1代表不支持分布式）。
    *
    * @return $this
    */
    public function setMaxNum($maxNum)
    {
        $this->container['maxNum'] = $maxNum;
        return $this;
    }

    /**
    * Gets cpu
    *  cpu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Cpu|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Cpu|null $cpu cpu
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets gpu
    *  gpu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Gpu|null
    */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
    * Sets gpu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Gpu|null $gpu gpu
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Npu|null
    */
    public function getNpu()
    {
        return $this->container['npu'];
    }

    /**
    * Sets npu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Npu|null $npu npu
    *
    * @return $this
    */
    public function setNpu($npu)
    {
        $this->container['npu'] = $npu;
        return $this;
    }

    /**
    * Gets memory
    *  memory
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Memory|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Memory|null $memory memory
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets disk
    *  disk
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Disk|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Disk|null $disk disk
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
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

