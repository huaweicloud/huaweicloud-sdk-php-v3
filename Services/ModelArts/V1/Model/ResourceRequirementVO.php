<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceRequirementVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceRequirementVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  **参数解释**：作业的运行使用的CPU资源量。 **取值范围**：不涉及。
    * memory  **参数解释**：作业的运行使用的内存资源量。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：作业的运行使用的GPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend310  **参数解释**：作业的运行使用的snt3类型NPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend1980  **参数解释**：作业的运行使用的snt9类型NPU资源量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'string',
            'memory' => 'string',
            'nvidiaComGpu' => 'string',
            'huaweiComAscend310' => 'string',
            'huaweiComAscend1980' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  **参数解释**：作业的运行使用的CPU资源量。 **取值范围**：不涉及。
    * memory  **参数解释**：作业的运行使用的内存资源量。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：作业的运行使用的GPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend310  **参数解释**：作业的运行使用的snt3类型NPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend1980  **参数解释**：作业的运行使用的snt9类型NPU资源量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => null,
        'memory' => null,
        'nvidiaComGpu' => null,
        'huaweiComAscend310' => null,
        'huaweiComAscend1980' => null
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
    * cpu  **参数解释**：作业的运行使用的CPU资源量。 **取值范围**：不涉及。
    * memory  **参数解释**：作业的运行使用的内存资源量。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：作业的运行使用的GPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend310  **参数解释**：作业的运行使用的snt3类型NPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend1980  **参数解释**：作业的运行使用的snt9类型NPU资源量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'memory' => 'memory',
            'nvidiaComGpu' => 'nvidia.com/gpu',
            'huaweiComAscend310' => 'huawei.com/ascend-310',
            'huaweiComAscend1980' => 'huawei.com/ascend-1980'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  **参数解释**：作业的运行使用的CPU资源量。 **取值范围**：不涉及。
    * memory  **参数解释**：作业的运行使用的内存资源量。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：作业的运行使用的GPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend310  **参数解释**：作业的运行使用的snt3类型NPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend1980  **参数解释**：作业的运行使用的snt9类型NPU资源量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'nvidiaComGpu' => 'setNvidiaComGpu',
            'huaweiComAscend310' => 'setHuaweiComAscend310',
            'huaweiComAscend1980' => 'setHuaweiComAscend1980'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  **参数解释**：作业的运行使用的CPU资源量。 **取值范围**：不涉及。
    * memory  **参数解释**：作业的运行使用的内存资源量。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：作业的运行使用的GPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend310  **参数解释**：作业的运行使用的snt3类型NPU资源量。 **取值范围**：不涉及。
    * huaweiComAscend1980  **参数解释**：作业的运行使用的snt9类型NPU资源量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'nvidiaComGpu' => 'getNvidiaComGpu',
            'huaweiComAscend310' => 'getHuaweiComAscend310',
            'huaweiComAscend1980' => 'getHuaweiComAscend1980'
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
        $this->container['nvidiaComGpu'] = isset($data['nvidiaComGpu']) ? $data['nvidiaComGpu'] : null;
        $this->container['huaweiComAscend310'] = isset($data['huaweiComAscend310']) ? $data['huaweiComAscend310'] : null;
        $this->container['huaweiComAscend1980'] = isset($data['huaweiComAscend1980']) ? $data['huaweiComAscend1980'] : null;
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
    * Gets cpu
    *  **参数解释**：作业的运行使用的CPU资源量。 **取值范围**：不涉及。
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
    * @param string|null $cpu **参数解释**：作业的运行使用的CPU资源量。 **取值范围**：不涉及。
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
    *  **参数解释**：作业的运行使用的内存资源量。 **取值范围**：不涉及。
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
    * @param string|null $memory **参数解释**：作业的运行使用的内存资源量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets nvidiaComGpu
    *  **参数解释**：作业的运行使用的GPU资源量。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getNvidiaComGpu()
    {
        return $this->container['nvidiaComGpu'];
    }

    /**
    * Sets nvidiaComGpu
    *
    * @param string|null $nvidiaComGpu **参数解释**：作业的运行使用的GPU资源量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNvidiaComGpu($nvidiaComGpu)
    {
        $this->container['nvidiaComGpu'] = $nvidiaComGpu;
        return $this;
    }

    /**
    * Gets huaweiComAscend310
    *  **参数解释**：作业的运行使用的snt3类型NPU资源量。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getHuaweiComAscend310()
    {
        return $this->container['huaweiComAscend310'];
    }

    /**
    * Sets huaweiComAscend310
    *
    * @param string|null $huaweiComAscend310 **参数解释**：作业的运行使用的snt3类型NPU资源量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setHuaweiComAscend310($huaweiComAscend310)
    {
        $this->container['huaweiComAscend310'] = $huaweiComAscend310;
        return $this;
    }

    /**
    * Gets huaweiComAscend1980
    *  **参数解释**：作业的运行使用的snt9类型NPU资源量。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getHuaweiComAscend1980()
    {
        return $this->container['huaweiComAscend1980'];
    }

    /**
    * Sets huaweiComAscend1980
    *
    * @param string|null $huaweiComAscend1980 **参数解释**：作业的运行使用的snt9类型NPU资源量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setHuaweiComAscend1980($huaweiComAscend1980)
    {
        $this->container['huaweiComAscend1980'] = $huaweiComAscend1980;
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

