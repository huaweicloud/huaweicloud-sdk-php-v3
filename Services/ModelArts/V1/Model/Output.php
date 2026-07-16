<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Output implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Output';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据输出通道名称。
    * description  数据输出通道描述信息。
    * localDir  数据输出通道映射的容器本地路径。
    * accessMethod  **参数解释**：数据输出通道路径（local_dir）的下发方式。 **约束限制**：不涉及。 **取值范围**： - parameter：超参形式 - env：环境变量形式  **默认取值**：默认超参形式。
    * remote  remote
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'localDir' => 'string',
            'accessMethod' => 'string',
            'remote' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Remote'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据输出通道名称。
    * description  数据输出通道描述信息。
    * localDir  数据输出通道映射的容器本地路径。
    * accessMethod  **参数解释**：数据输出通道路径（local_dir）的下发方式。 **约束限制**：不涉及。 **取值范围**： - parameter：超参形式 - env：环境变量形式  **默认取值**：默认超参形式。
    * remote  remote
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'localDir' => null,
        'accessMethod' => null,
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
    * name  数据输出通道名称。
    * description  数据输出通道描述信息。
    * localDir  数据输出通道映射的容器本地路径。
    * accessMethod  **参数解释**：数据输出通道路径（local_dir）的下发方式。 **约束限制**：不涉及。 **取值范围**： - parameter：超参形式 - env：环境变量形式  **默认取值**：默认超参形式。
    * remote  remote
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'localDir' => 'local_dir',
            'accessMethod' => 'access_method',
            'remote' => 'remote'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据输出通道名称。
    * description  数据输出通道描述信息。
    * localDir  数据输出通道映射的容器本地路径。
    * accessMethod  **参数解释**：数据输出通道路径（local_dir）的下发方式。 **约束限制**：不涉及。 **取值范围**： - parameter：超参形式 - env：环境变量形式  **默认取值**：默认超参形式。
    * remote  remote
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'localDir' => 'setLocalDir',
            'accessMethod' => 'setAccessMethod',
            'remote' => 'setRemote'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据输出通道名称。
    * description  数据输出通道描述信息。
    * localDir  数据输出通道映射的容器本地路径。
    * accessMethod  **参数解释**：数据输出通道路径（local_dir）的下发方式。 **约束限制**：不涉及。 **取值范围**： - parameter：超参形式 - env：环境变量形式  **默认取值**：默认超参形式。
    * remote  remote
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'localDir' => 'getLocalDir',
            'accessMethod' => 'getAccessMethod',
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
        $this->container['accessMethod'] = isset($data['accessMethod']) ? $data['accessMethod'] : null;
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
    *  数据输出通道名称。
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
    * @param string $name 数据输出通道名称。
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
    *  数据输出通道描述信息。
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
    * @param string|null $description 数据输出通道描述信息。
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
    *  数据输出通道映射的容器本地路径。
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
    * @param string|null $localDir 数据输出通道映射的容器本地路径。
    *
    * @return $this
    */
    public function setLocalDir($localDir)
    {
        $this->container['localDir'] = $localDir;
        return $this;
    }

    /**
    * Gets accessMethod
    *  **参数解释**：数据输出通道路径（local_dir）的下发方式。 **约束限制**：不涉及。 **取值范围**： - parameter：超参形式 - env：环境变量形式  **默认取值**：默认超参形式。
    *
    * @return string|null
    */
    public function getAccessMethod()
    {
        return $this->container['accessMethod'];
    }

    /**
    * Sets accessMethod
    *
    * @param string|null $accessMethod **参数解释**：数据输出通道路径（local_dir）的下发方式。 **约束限制**：不涉及。 **取值范围**： - parameter：超参形式 - env：环境变量形式  **默认取值**：默认超参形式。
    *
    * @return $this
    */
    public function setAccessMethod($accessMethod)
    {
        $this->container['accessMethod'] = $accessMethod;
        return $this;
    }

    /**
    * Gets remote
    *  remote
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Remote
    */
    public function getRemote()
    {
        return $this->container['remote'];
    }

    /**
    * Sets remote
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Remote $remote remote
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

