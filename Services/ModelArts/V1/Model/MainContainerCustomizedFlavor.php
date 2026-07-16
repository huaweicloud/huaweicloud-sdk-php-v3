<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MainContainerCustomizedFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MainContainerCustomizedFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuCoreNum  **参数解释**：cpu核数。 **取值范围**：大于零。
    * memSize  **参数解释**：内存大小。 **取值范围**：大于零。
    * acceleratorNum  **参数解释**：加速卡卡数。 **取值范围**：大于等于零。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuCoreNum' => 'float',
            'memSize' => 'float',
            'acceleratorNum' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuCoreNum  **参数解释**：cpu核数。 **取值范围**：大于零。
    * memSize  **参数解释**：内存大小。 **取值范围**：大于零。
    * acceleratorNum  **参数解释**：加速卡卡数。 **取值范围**：大于等于零。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuCoreNum' => 'float',
        'memSize' => 'float',
        'acceleratorNum' => 'float'
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
    * cpuCoreNum  **参数解释**：cpu核数。 **取值范围**：大于零。
    * memSize  **参数解释**：内存大小。 **取值范围**：大于零。
    * acceleratorNum  **参数解释**：加速卡卡数。 **取值范围**：大于等于零。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuCoreNum' => 'cpu_core_num',
            'memSize' => 'mem_size',
            'acceleratorNum' => 'accelerator_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuCoreNum  **参数解释**：cpu核数。 **取值范围**：大于零。
    * memSize  **参数解释**：内存大小。 **取值范围**：大于零。
    * acceleratorNum  **参数解释**：加速卡卡数。 **取值范围**：大于等于零。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuCoreNum' => 'setCpuCoreNum',
            'memSize' => 'setMemSize',
            'acceleratorNum' => 'setAcceleratorNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuCoreNum  **参数解释**：cpu核数。 **取值范围**：大于零。
    * memSize  **参数解释**：内存大小。 **取值范围**：大于零。
    * acceleratorNum  **参数解释**：加速卡卡数。 **取值范围**：大于等于零。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuCoreNum' => 'getCpuCoreNum',
            'memSize' => 'getMemSize',
            'acceleratorNum' => 'getAcceleratorNum'
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
        $this->container['cpuCoreNum'] = isset($data['cpuCoreNum']) ? $data['cpuCoreNum'] : null;
        $this->container['memSize'] = isset($data['memSize']) ? $data['memSize'] : null;
        $this->container['acceleratorNum'] = isset($data['acceleratorNum']) ? $data['acceleratorNum'] : null;
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
    * Gets cpuCoreNum
    *  **参数解释**：cpu核数。 **取值范围**：大于零。
    *
    * @return float|null
    */
    public function getCpuCoreNum()
    {
        return $this->container['cpuCoreNum'];
    }

    /**
    * Sets cpuCoreNum
    *
    * @param float|null $cpuCoreNum **参数解释**：cpu核数。 **取值范围**：大于零。
    *
    * @return $this
    */
    public function setCpuCoreNum($cpuCoreNum)
    {
        $this->container['cpuCoreNum'] = $cpuCoreNum;
        return $this;
    }

    /**
    * Gets memSize
    *  **参数解释**：内存大小。 **取值范围**：大于零。
    *
    * @return float|null
    */
    public function getMemSize()
    {
        return $this->container['memSize'];
    }

    /**
    * Sets memSize
    *
    * @param float|null $memSize **参数解释**：内存大小。 **取值范围**：大于零。
    *
    * @return $this
    */
    public function setMemSize($memSize)
    {
        $this->container['memSize'] = $memSize;
        return $this;
    }

    /**
    * Gets acceleratorNum
    *  **参数解释**：加速卡卡数。 **取值范围**：大于等于零。
    *
    * @return float|null
    */
    public function getAcceleratorNum()
    {
        return $this->container['acceleratorNum'];
    }

    /**
    * Sets acceleratorNum
    *
    * @param float|null $acceleratorNum **参数解释**：加速卡卡数。 **取值范围**：大于等于零。
    *
    * @return $this
    */
    public function setAcceleratorNum($acceleratorNum)
    {
        $this->container['acceleratorNum'] = $acceleratorNum;
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

