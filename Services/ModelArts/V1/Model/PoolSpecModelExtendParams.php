<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolSpecModelExtendParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolSpecModel_extendParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**：资源池创建的节点的容器引擎空间大小。值为0时表示不限制大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * volumeGroup  **参数描述**：磁盘分组名称。 **取值范围**：不涉及。
    * runtime  **参数描述**：模型运行时环境。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dockerBaseSize' => 'string',
            'volumeGroup' => 'string',
            'runtime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dockerBaseSize  **参数解释**：资源池创建的节点的容器引擎空间大小。值为0时表示不限制大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * volumeGroup  **参数描述**：磁盘分组名称。 **取值范围**：不涉及。
    * runtime  **参数描述**：模型运行时环境。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dockerBaseSize' => null,
        'volumeGroup' => null,
        'runtime' => null
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
    * dockerBaseSize  **参数解释**：资源池创建的节点的容器引擎空间大小。值为0时表示不限制大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * volumeGroup  **参数描述**：磁盘分组名称。 **取值范围**：不涉及。
    * runtime  **参数描述**：模型运行时环境。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dockerBaseSize' => 'dockerBaseSize',
            'volumeGroup' => 'volumeGroup',
            'runtime' => 'runtime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dockerBaseSize  **参数解释**：资源池创建的节点的容器引擎空间大小。值为0时表示不限制大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * volumeGroup  **参数描述**：磁盘分组名称。 **取值范围**：不涉及。
    * runtime  **参数描述**：模型运行时环境。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dockerBaseSize' => 'setDockerBaseSize',
            'volumeGroup' => 'setVolumeGroup',
            'runtime' => 'setRuntime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dockerBaseSize  **参数解释**：资源池创建的节点的容器引擎空间大小。值为0时表示不限制大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * volumeGroup  **参数描述**：磁盘分组名称。 **取值范围**：不涉及。
    * runtime  **参数描述**：模型运行时环境。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dockerBaseSize' => 'getDockerBaseSize',
            'volumeGroup' => 'getVolumeGroup',
            'runtime' => 'getRuntime'
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
        $this->container['dockerBaseSize'] = isset($data['dockerBaseSize']) ? $data['dockerBaseSize'] : null;
        $this->container['volumeGroup'] = isset($data['volumeGroup']) ? $data['volumeGroup'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
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
    * Gets dockerBaseSize
    *  **参数解释**：资源池创建的节点的容器引擎空间大小。值为0时表示不限制大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDockerBaseSize()
    {
        return $this->container['dockerBaseSize'];
    }

    /**
    * Sets dockerBaseSize
    *
    * @param string|null $dockerBaseSize **参数解释**：资源池创建的节点的容器引擎空间大小。值为0时表示不限制大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDockerBaseSize($dockerBaseSize)
    {
        $this->container['dockerBaseSize'] = $dockerBaseSize;
        return $this;
    }

    /**
    * Gets volumeGroup
    *  **参数描述**：磁盘分组名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getVolumeGroup()
    {
        return $this->container['volumeGroup'];
    }

    /**
    * Sets volumeGroup
    *
    * @param string|null $volumeGroup **参数描述**：磁盘分组名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVolumeGroup($volumeGroup)
    {
        $this->container['volumeGroup'] = $volumeGroup;
        return $this;
    }

    /**
    * Gets runtime
    *  **参数描述**：模型运行时环境。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime **参数描述**：模型运行时环境。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
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

