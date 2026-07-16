<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MainContainerAllocatedResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MainContainerAllocatedResources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuArch  **参数解释**： cpu架构。 **取值范围**： 不涉及。
    * cpuCoreNum  **参数解释**： 核数。 **取值范围**： 不涉及。
    * memSize  **参数解释**： 内存信息。 **取值范围**： 不涉及。
    * acceleratorNum  **参数解释**： 加速卡卡数。 **取值范围**： 不涉及。
    * acceleratorType  **参数解释**： 加速卡类型。如：ascend-Snt9b，ascend-snt9c等 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuArch' => 'string',
            'cpuCoreNum' => 'float',
            'memSize' => 'float',
            'acceleratorNum' => 'float',
            'acceleratorType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuArch  **参数解释**： cpu架构。 **取值范围**： 不涉及。
    * cpuCoreNum  **参数解释**： 核数。 **取值范围**： 不涉及。
    * memSize  **参数解释**： 内存信息。 **取值范围**： 不涉及。
    * acceleratorNum  **参数解释**： 加速卡卡数。 **取值范围**： 不涉及。
    * acceleratorType  **参数解释**： 加速卡类型。如：ascend-Snt9b，ascend-snt9c等 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuArch' => null,
        'cpuCoreNum' => 'float',
        'memSize' => 'float',
        'acceleratorNum' => 'float',
        'acceleratorType' => null
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
    * cpuArch  **参数解释**： cpu架构。 **取值范围**： 不涉及。
    * cpuCoreNum  **参数解释**： 核数。 **取值范围**： 不涉及。
    * memSize  **参数解释**： 内存信息。 **取值范围**： 不涉及。
    * acceleratorNum  **参数解释**： 加速卡卡数。 **取值范围**： 不涉及。
    * acceleratorType  **参数解释**： 加速卡类型。如：ascend-Snt9b，ascend-snt9c等 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuArch' => 'cpu_arch',
            'cpuCoreNum' => 'cpu_core_num',
            'memSize' => 'mem_size',
            'acceleratorNum' => 'accelerator_num',
            'acceleratorType' => 'accelerator_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuArch  **参数解释**： cpu架构。 **取值范围**： 不涉及。
    * cpuCoreNum  **参数解释**： 核数。 **取值范围**： 不涉及。
    * memSize  **参数解释**： 内存信息。 **取值范围**： 不涉及。
    * acceleratorNum  **参数解释**： 加速卡卡数。 **取值范围**： 不涉及。
    * acceleratorType  **参数解释**： 加速卡类型。如：ascend-Snt9b，ascend-snt9c等 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuArch' => 'setCpuArch',
            'cpuCoreNum' => 'setCpuCoreNum',
            'memSize' => 'setMemSize',
            'acceleratorNum' => 'setAcceleratorNum',
            'acceleratorType' => 'setAcceleratorType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuArch  **参数解释**： cpu架构。 **取值范围**： 不涉及。
    * cpuCoreNum  **参数解释**： 核数。 **取值范围**： 不涉及。
    * memSize  **参数解释**： 内存信息。 **取值范围**： 不涉及。
    * acceleratorNum  **参数解释**： 加速卡卡数。 **取值范围**： 不涉及。
    * acceleratorType  **参数解释**： 加速卡类型。如：ascend-Snt9b，ascend-snt9c等 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuArch' => 'getCpuArch',
            'cpuCoreNum' => 'getCpuCoreNum',
            'memSize' => 'getMemSize',
            'acceleratorNum' => 'getAcceleratorNum',
            'acceleratorType' => 'getAcceleratorType'
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
        $this->container['cpuArch'] = isset($data['cpuArch']) ? $data['cpuArch'] : null;
        $this->container['cpuCoreNum'] = isset($data['cpuCoreNum']) ? $data['cpuCoreNum'] : null;
        $this->container['memSize'] = isset($data['memSize']) ? $data['memSize'] : null;
        $this->container['acceleratorNum'] = isset($data['acceleratorNum']) ? $data['acceleratorNum'] : null;
        $this->container['acceleratorType'] = isset($data['acceleratorType']) ? $data['acceleratorType'] : null;
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
    * Gets cpuArch
    *  **参数解释**： cpu架构。 **取值范围**： 不涉及。
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
    * @param string|null $cpuArch **参数解释**： cpu架构。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCpuArch($cpuArch)
    {
        $this->container['cpuArch'] = $cpuArch;
        return $this;
    }

    /**
    * Gets cpuCoreNum
    *  **参数解释**： 核数。 **取值范围**： 不涉及。
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
    * @param float|null $cpuCoreNum **参数解释**： 核数。 **取值范围**： 不涉及。
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
    *  **参数解释**： 内存信息。 **取值范围**： 不涉及。
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
    * @param float|null $memSize **参数解释**： 内存信息。 **取值范围**： 不涉及。
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
    *  **参数解释**： 加速卡卡数。 **取值范围**： 不涉及。
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
    * @param float|null $acceleratorNum **参数解释**： 加速卡卡数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAcceleratorNum($acceleratorNum)
    {
        $this->container['acceleratorNum'] = $acceleratorNum;
        return $this;
    }

    /**
    * Gets acceleratorType
    *  **参数解释**： 加速卡类型。如：ascend-Snt9b，ascend-snt9c等 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAcceleratorType()
    {
        return $this->container['acceleratorType'];
    }

    /**
    * Sets acceleratorType
    *
    * @param string|null $acceleratorType **参数解释**： 加速卡类型。如：ascend-Snt9b，ascend-snt9c等 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAcceleratorType($acceleratorType)
    {
        $this->container['acceleratorType'] = $acceleratorType;
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

