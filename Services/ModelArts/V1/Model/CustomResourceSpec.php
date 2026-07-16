<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomResourceSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomResourceSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gpu  **参数解释：** GPU个数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * memory  **参数解释：** 内存，单位为MB。 **约束限制：** 不涉及。 **取值范围：** 仅支持整数。 **默认取值：** 不涉及。
    * cpu  **参数解释：** CPU核数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0.01（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * ascend  **参数解释：** Ascend芯片个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * arch  **参数解释：** 架构类型。 **约束限制：** 不涉及。 **取值范围：** 枚举值：x86 | arm64。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gpu' => 'float',
            'memory' => 'int',
            'cpu' => 'float',
            'ascend' => 'int',
            'arch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gpu  **参数解释：** GPU个数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * memory  **参数解释：** 内存，单位为MB。 **约束限制：** 不涉及。 **取值范围：** 仅支持整数。 **默认取值：** 不涉及。
    * cpu  **参数解释：** CPU核数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0.01（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * ascend  **参数解释：** Ascend芯片个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * arch  **参数解释：** 架构类型。 **约束限制：** 不涉及。 **取值范围：** 枚举值：x86 | arm64。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gpu' => 'float',
        'memory' => 'int32',
        'cpu' => 'float',
        'ascend' => 'int32',
        'arch' => null
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
    * gpu  **参数解释：** GPU个数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * memory  **参数解释：** 内存，单位为MB。 **约束限制：** 不涉及。 **取值范围：** 仅支持整数。 **默认取值：** 不涉及。
    * cpu  **参数解释：** CPU核数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0.01（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * ascend  **参数解释：** Ascend芯片个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * arch  **参数解释：** 架构类型。 **约束限制：** 不涉及。 **取值范围：** 枚举值：x86 | arm64。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gpu' => 'gpu',
            'memory' => 'memory',
            'cpu' => 'cpu',
            'ascend' => 'ascend',
            'arch' => 'arch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gpu  **参数解释：** GPU个数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * memory  **参数解释：** 内存，单位为MB。 **约束限制：** 不涉及。 **取值范围：** 仅支持整数。 **默认取值：** 不涉及。
    * cpu  **参数解释：** CPU核数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0.01（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * ascend  **参数解释：** Ascend芯片个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * arch  **参数解释：** 架构类型。 **约束限制：** 不涉及。 **取值范围：** 枚举值：x86 | arm64。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'gpu' => 'setGpu',
            'memory' => 'setMemory',
            'cpu' => 'setCpu',
            'ascend' => 'setAscend',
            'arch' => 'setArch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gpu  **参数解释：** GPU个数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * memory  **参数解释：** 内存，单位为MB。 **约束限制：** 不涉及。 **取值范围：** 仅支持整数。 **默认取值：** 不涉及。
    * cpu  **参数解释：** CPU核数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0.01（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    * ascend  **参数解释：** Ascend芯片个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * arch  **参数解释：** 架构类型。 **约束限制：** 不涉及。 **取值范围：** 枚举值：x86 | arm64。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'gpu' => 'getGpu',
            'memory' => 'getMemory',
            'cpu' => 'getCpu',
            'ascend' => 'getAscend',
            'arch' => 'getArch'
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
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['ascend'] = isset($data['ascend']) ? $data['ascend'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
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
    * Gets gpu
    *  **参数解释：** GPU个数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
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
    * @param float|null $gpu **参数解释：** GPU个数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;
        return $this;
    }

    /**
    * Gets memory
    *  **参数解释：** 内存，单位为MB。 **约束限制：** 不涉及。 **取值范围：** 仅支持整数。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int|null $memory **参数解释：** 内存，单位为MB。 **约束限制：** 不涉及。 **取值范围：** 仅支持整数。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets cpu
    *  **参数解释：** CPU核数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0.01（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
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
    * @param float|null $cpu **参数解释：** CPU核数。 **约束限制：** 不涉及。 **取值范围：** 支持配置小数，输入值不能小于0.01（最多支持2位小数，小数点后第3位做四舍五入处理）。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets ascend
    *  **参数解释：** Ascend芯片个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getAscend()
    {
        return $this->container['ascend'];
    }

    /**
    * Sets ascend
    *
    * @param int|null $ascend **参数解释：** Ascend芯片个数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAscend($ascend)
    {
        $this->container['ascend'] = $ascend;
        return $this;
    }

    /**
    * Gets arch
    *  **参数解释：** 架构类型。 **约束限制：** 不涉及。 **取值范围：** 枚举值：x86 | arm64。 **默认取值：** 不涉及。
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
    * @param string|null $arch **参数解释：** 架构类型。 **约束限制：** 不涉及。 **取值范围：** 枚举值：x86 | arm64。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
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

