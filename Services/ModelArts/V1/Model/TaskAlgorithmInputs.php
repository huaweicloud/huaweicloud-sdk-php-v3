<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskAlgorithmInputs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Task_algorithm_inputs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：数据输入通道名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：数据输入通道描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * localDir  **参数解释**：数据输入通道映射的容器本地路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * remote  remote
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'localDir' => 'string',
            'remote' => '\HuaweiCloud\SDK\ModelArts\V1\Model\InputDataInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：数据输入通道名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：数据输入通道描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * localDir  **参数解释**：数据输入通道映射的容器本地路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * remote  remote
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'localDir' => null,
        'remote' => null
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
    * name  **参数解释**：数据输入通道名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：数据输入通道描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * localDir  **参数解释**：数据输入通道映射的容器本地路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * remote  remote
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'localDir' => 'local_dir',
            'remote' => 'remote'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：数据输入通道名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：数据输入通道描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * localDir  **参数解释**：数据输入通道映射的容器本地路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * remote  remote
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'localDir' => 'setLocalDir',
            'remote' => 'setRemote'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：数据输入通道名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：数据输入通道描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * localDir  **参数解释**：数据输入通道映射的容器本地路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * remote  remote
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'localDir' => 'getLocalDir',
            'remote' => 'getRemote'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['localDir'] = isset($data['localDir']) ? $data['localDir'] : null;
        $this->container['remote'] = isset($data['remote']) ? $data['remote'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['remote'] === null) {
            $invalidProperties[] = "'remote' can't be null";
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
    * Gets name
    *  **参数解释**：数据输入通道名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：数据输入通道名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：数据输入通道描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：数据输入通道描述信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets localDir
    *  **参数解释**：数据输入通道映射的容器本地路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getLocalDir()
    {
        return $this->container['localDir'];
    }

    /**
    * Sets localDir
    *
    * @param string|null $localDir **参数解释**：数据输入通道映射的容器本地路径。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setLocalDir($localDir)
    {
        $this->container['localDir'] = $localDir;
        return $this;
    }

    /**
    * Gets remote
    *  remote
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\InputDataInfo
    */
    public function getRemote()
    {
        return $this->container['remote'];
    }

    /**
    * Sets remote
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\InputDataInfo $remote remote
    *
    * @return $this
    */
    public function setRemote($remote)
    {
        $this->container['remote'] = $remote;
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

