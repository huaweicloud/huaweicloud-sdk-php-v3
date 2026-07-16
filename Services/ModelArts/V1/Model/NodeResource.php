<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  **参数解释**：节点的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：节点的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：节点的GPU卡数。 **取值范围**：不涉及。
    * huaweiComAscendSnt3  **参数解释**：节点的snt3型NPU卡数量。 **取值范围**：不涉及。
    * huaweiComAscendSnt9  **参数解释**：节点的snt9型NPU卡数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'string',
            'memory' => 'string',
            'nvidiaComGpu' => 'string',
            'huaweiComAscendSnt3' => 'string',
            'huaweiComAscendSnt9' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  **参数解释**：节点的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：节点的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：节点的GPU卡数。 **取值范围**：不涉及。
    * huaweiComAscendSnt3  **参数解释**：节点的snt3型NPU卡数量。 **取值范围**：不涉及。
    * huaweiComAscendSnt9  **参数解释**：节点的snt9型NPU卡数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => null,
        'memory' => null,
        'nvidiaComGpu' => null,
        'huaweiComAscendSnt3' => null,
        'huaweiComAscendSnt9' => null
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
    * cpu  **参数解释**：节点的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：节点的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：节点的GPU卡数。 **取值范围**：不涉及。
    * huaweiComAscendSnt3  **参数解释**：节点的snt3型NPU卡数量。 **取值范围**：不涉及。
    * huaweiComAscendSnt9  **参数解释**：节点的snt9型NPU卡数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'memory' => 'memory',
            'nvidiaComGpu' => 'nvidia.com/gpu',
            'huaweiComAscendSnt3' => 'huawei.com/ascend-snt3',
            'huaweiComAscendSnt9' => 'huawei.com/ascend-snt9'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  **参数解释**：节点的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：节点的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：节点的GPU卡数。 **取值范围**：不涉及。
    * huaweiComAscendSnt3  **参数解释**：节点的snt3型NPU卡数量。 **取值范围**：不涉及。
    * huaweiComAscendSnt9  **参数解释**：节点的snt9型NPU卡数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'nvidiaComGpu' => 'setNvidiaComGpu',
            'huaweiComAscendSnt3' => 'setHuaweiComAscendSnt3',
            'huaweiComAscendSnt9' => 'setHuaweiComAscendSnt9'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  **参数解释**：节点的CPU核心数量。 **取值范围**：不涉及。
    * memory  **参数解释**：节点的内存大小。以Gi为单位。 **取值范围**：不涉及。
    * nvidiaComGpu  **参数解释**：节点的GPU卡数。 **取值范围**：不涉及。
    * huaweiComAscendSnt3  **参数解释**：节点的snt3型NPU卡数量。 **取值范围**：不涉及。
    * huaweiComAscendSnt9  **参数解释**：节点的snt9型NPU卡数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'nvidiaComGpu' => 'getNvidiaComGpu',
            'huaweiComAscendSnt3' => 'getHuaweiComAscendSnt3',
            'huaweiComAscendSnt9' => 'getHuaweiComAscendSnt9'
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
        $this->container['huaweiComAscendSnt3'] = isset($data['huaweiComAscendSnt3']) ? $data['huaweiComAscendSnt3'] : null;
        $this->container['huaweiComAscendSnt9'] = isset($data['huaweiComAscendSnt9']) ? $data['huaweiComAscendSnt9'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
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
    *  **参数解释**：节点的CPU核心数量。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string $cpu **参数解释**：节点的CPU核心数量。 **取值范围**：不涉及。
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
    *  **参数解释**：节点的内存大小。以Gi为单位。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string $memory **参数解释**：节点的内存大小。以Gi为单位。 **取值范围**：不涉及。
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
    *  **参数解释**：节点的GPU卡数。 **取值范围**：不涉及。
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
    * @param string|null $nvidiaComGpu **参数解释**：节点的GPU卡数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNvidiaComGpu($nvidiaComGpu)
    {
        $this->container['nvidiaComGpu'] = $nvidiaComGpu;
        return $this;
    }

    /**
    * Gets huaweiComAscendSnt3
    *  **参数解释**：节点的snt3型NPU卡数量。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getHuaweiComAscendSnt3()
    {
        return $this->container['huaweiComAscendSnt3'];
    }

    /**
    * Sets huaweiComAscendSnt3
    *
    * @param string|null $huaweiComAscendSnt3 **参数解释**：节点的snt3型NPU卡数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setHuaweiComAscendSnt3($huaweiComAscendSnt3)
    {
        $this->container['huaweiComAscendSnt3'] = $huaweiComAscendSnt3;
        return $this;
    }

    /**
    * Gets huaweiComAscendSnt9
    *  **参数解释**：节点的snt9型NPU卡数量。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getHuaweiComAscendSnt9()
    {
        return $this->container['huaweiComAscendSnt9'];
    }

    /**
    * Sets huaweiComAscendSnt9
    *
    * @param string|null $huaweiComAscendSnt9 **参数解释**：节点的snt9型NPU卡数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setHuaweiComAscendSnt9($huaweiComAscendSnt9)
    {
        $this->container['huaweiComAscendSnt9'] = $huaweiComAscendSnt9;
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

