<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShrinkLogicalClusterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShrinkLogicalClusterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterRings  **参数解释**： 缩容主机环信息。  **约束限制**：  不涉及。 **取值范围**：  不涉及。 **默认取值**：  不涉及。
    * parallelJobs  **参数解释**： 重分布并发配置数。  **约束限制**：  不涉及。 **取值范围**：  1~200。 **默认取值**：  4。
    * mode  **参数解释**：  缩容模式。 **约束限制**：  不涉及。 **取值范围**：  read-only：离线模式 insert：在线模式 **默认取值**：  insert
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterRings' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]',
            'parallelJobs' => 'int',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterRings  **参数解释**： 缩容主机环信息。  **约束限制**：  不涉及。 **取值范围**：  不涉及。 **默认取值**：  不涉及。
    * parallelJobs  **参数解释**： 重分布并发配置数。  **约束限制**：  不涉及。 **取值范围**：  1~200。 **默认取值**：  4。
    * mode  **参数解释**：  缩容模式。 **约束限制**：  不涉及。 **取值范围**：  read-only：离线模式 insert：在线模式 **默认取值**：  insert
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterRings' => null,
        'parallelJobs' => 'int32',
        'mode' => null
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
    * clusterRings  **参数解释**： 缩容主机环信息。  **约束限制**：  不涉及。 **取值范围**：  不涉及。 **默认取值**：  不涉及。
    * parallelJobs  **参数解释**： 重分布并发配置数。  **约束限制**：  不涉及。 **取值范围**：  1~200。 **默认取值**：  4。
    * mode  **参数解释**：  缩容模式。 **约束限制**：  不涉及。 **取值范围**：  read-only：离线模式 insert：在线模式 **默认取值**：  insert
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterRings' => 'cluster_rings',
            'parallelJobs' => 'parallel_jobs',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterRings  **参数解释**： 缩容主机环信息。  **约束限制**：  不涉及。 **取值范围**：  不涉及。 **默认取值**：  不涉及。
    * parallelJobs  **参数解释**： 重分布并发配置数。  **约束限制**：  不涉及。 **取值范围**：  1~200。 **默认取值**：  4。
    * mode  **参数解释**：  缩容模式。 **约束限制**：  不涉及。 **取值范围**：  read-only：离线模式 insert：在线模式 **默认取值**：  insert
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterRings' => 'setClusterRings',
            'parallelJobs' => 'setParallelJobs',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterRings  **参数解释**： 缩容主机环信息。  **约束限制**：  不涉及。 **取值范围**：  不涉及。 **默认取值**：  不涉及。
    * parallelJobs  **参数解释**： 重分布并发配置数。  **约束限制**：  不涉及。 **取值范围**：  1~200。 **默认取值**：  4。
    * mode  **参数解释**：  缩容模式。 **约束限制**：  不涉及。 **取值范围**：  read-only：离线模式 insert：在线模式 **默认取值**：  insert
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterRings' => 'getClusterRings',
            'parallelJobs' => 'getParallelJobs',
            'mode' => 'getMode'
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
        $this->container['clusterRings'] = isset($data['clusterRings']) ? $data['clusterRings'] : null;
        $this->container['parallelJobs'] = isset($data['parallelJobs']) ? $data['parallelJobs'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterRings'] === null) {
            $invalidProperties[] = "'clusterRings' can't be null";
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
    * Gets clusterRings
    *  **参数解释**： 缩容主机环信息。  **约束限制**：  不涉及。 **取值范围**：  不涉及。 **默认取值**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]
    */
    public function getClusterRings()
    {
        return $this->container['clusterRings'];
    }

    /**
    * Sets clusterRings
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[] $clusterRings **参数解释**： 缩容主机环信息。  **约束限制**：  不涉及。 **取值范围**：  不涉及。 **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setClusterRings($clusterRings)
    {
        $this->container['clusterRings'] = $clusterRings;
        return $this;
    }

    /**
    * Gets parallelJobs
    *  **参数解释**： 重分布并发配置数。  **约束限制**：  不涉及。 **取值范围**：  1~200。 **默认取值**：  4。
    *
    * @return int|null
    */
    public function getParallelJobs()
    {
        return $this->container['parallelJobs'];
    }

    /**
    * Sets parallelJobs
    *
    * @param int|null $parallelJobs **参数解释**： 重分布并发配置数。  **约束限制**：  不涉及。 **取值范围**：  1~200。 **默认取值**：  4。
    *
    * @return $this
    */
    public function setParallelJobs($parallelJobs)
    {
        $this->container['parallelJobs'] = $parallelJobs;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**：  缩容模式。 **约束限制**：  不涉及。 **取值范围**：  read-only：离线模式 insert：在线模式 **默认取值**：  insert
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**：  缩容模式。 **约束限制**：  不涉及。 **取值范围**：  read-only：离线模式 insert：在线模式 **默认取值**：  insert
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

