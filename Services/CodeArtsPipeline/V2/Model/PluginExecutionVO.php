<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginExecutionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginExecutionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 插件执行脚本类型。 **取值范围**： - Shell：Shell类型脚本。 - Nodejs：Nodejs类型脚本。 - Java：Java类型脚本。 - Python：Python类型脚本。
    * target  **参数解释**： 插件执行脚本入口文件。 **取值范围**： 不涉及。
    * filePath  **参数解释**： 插件的OBS存放路径。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'target' => 'string',
            'filePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 插件执行脚本类型。 **取值范围**： - Shell：Shell类型脚本。 - Nodejs：Nodejs类型脚本。 - Java：Java类型脚本。 - Python：Python类型脚本。
    * target  **参数解释**： 插件执行脚本入口文件。 **取值范围**： 不涉及。
    * filePath  **参数解释**： 插件的OBS存放路径。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'target' => null,
        'filePath' => null
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
    * type  **参数解释**： 插件执行脚本类型。 **取值范围**： - Shell：Shell类型脚本。 - Nodejs：Nodejs类型脚本。 - Java：Java类型脚本。 - Python：Python类型脚本。
    * target  **参数解释**： 插件执行脚本入口文件。 **取值范围**： 不涉及。
    * filePath  **参数解释**： 插件的OBS存放路径。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'target' => 'target',
            'filePath' => 'file_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 插件执行脚本类型。 **取值范围**： - Shell：Shell类型脚本。 - Nodejs：Nodejs类型脚本。 - Java：Java类型脚本。 - Python：Python类型脚本。
    * target  **参数解释**： 插件执行脚本入口文件。 **取值范围**： 不涉及。
    * filePath  **参数解释**： 插件的OBS存放路径。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'target' => 'setTarget',
            'filePath' => 'setFilePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 插件执行脚本类型。 **取值范围**： - Shell：Shell类型脚本。 - Nodejs：Nodejs类型脚本。 - Java：Java类型脚本。 - Python：Python类型脚本。
    * target  **参数解释**： 插件执行脚本入口文件。 **取值范围**： 不涉及。
    * filePath  **参数解释**： 插件的OBS存放路径。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'target' => 'getTarget',
            'filePath' => 'getFilePath'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
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
    * Gets type
    *  **参数解释**： 插件执行脚本类型。 **取值范围**： - Shell：Shell类型脚本。 - Nodejs：Nodejs类型脚本。 - Java：Java类型脚本。 - Python：Python类型脚本。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 插件执行脚本类型。 **取值范围**： - Shell：Shell类型脚本。 - Nodejs：Nodejs类型脚本。 - Java：Java类型脚本。 - Python：Python类型脚本。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets target
    *  **参数解释**： 插件执行脚本入口文件。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target **参数解释**： 插件执行脚本入口文件。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 插件的OBS存放路径。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**： 插件的OBS存放路径。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
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

