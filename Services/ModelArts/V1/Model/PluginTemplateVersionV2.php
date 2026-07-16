<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginTemplateVersionV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginTemplateVersionV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  **参数解释**：插件模板的版本号。 **取值范围**：不涉及。
    * creationTimestamp  **参数解释**：创建时间。 **取值范围**：不涉及。
    * inputs  **参数解释**：插件安装参数。
    * translate  **参数解释**：供界面使用的翻译信息。
    * description  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    * detail  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'creationTimestamp' => 'string',
            'inputs' => 'object',
            'translate' => 'object',
            'description' => 'string',
            'detail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  **参数解释**：插件模板的版本号。 **取值范围**：不涉及。
    * creationTimestamp  **参数解释**：创建时间。 **取值范围**：不涉及。
    * inputs  **参数解释**：插件安装参数。
    * translate  **参数解释**：供界面使用的翻译信息。
    * description  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    * detail  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'creationTimestamp' => null,
        'inputs' => null,
        'translate' => null,
        'description' => null,
        'detail' => null
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
    * version  **参数解释**：插件模板的版本号。 **取值范围**：不涉及。
    * creationTimestamp  **参数解释**：创建时间。 **取值范围**：不涉及。
    * inputs  **参数解释**：插件安装参数。
    * translate  **参数解释**：供界面使用的翻译信息。
    * description  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    * detail  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'creationTimestamp' => 'creationTimestamp',
            'inputs' => 'inputs',
            'translate' => 'translate',
            'description' => 'description',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  **参数解释**：插件模板的版本号。 **取值范围**：不涉及。
    * creationTimestamp  **参数解释**：创建时间。 **取值范围**：不涉及。
    * inputs  **参数解释**：插件安装参数。
    * translate  **参数解释**：供界面使用的翻译信息。
    * description  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    * detail  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'creationTimestamp' => 'setCreationTimestamp',
            'inputs' => 'setInputs',
            'translate' => 'setTranslate',
            'description' => 'setDescription',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  **参数解释**：插件模板的版本号。 **取值范围**：不涉及。
    * creationTimestamp  **参数解释**：创建时间。 **取值范围**：不涉及。
    * inputs  **参数解释**：插件安装参数。
    * translate  **参数解释**：供界面使用的翻译信息。
    * description  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    * detail  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'creationTimestamp' => 'getCreationTimestamp',
            'inputs' => 'getInputs',
            'translate' => 'getTranslate',
            'description' => 'getDescription',
            'detail' => 'getDetail'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['translate'] = isset($data['translate']) ? $data['translate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    * Gets version
    *  **参数解释**：插件模板的版本号。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version **参数解释**：插件模板的版本号。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string|null $creationTimestamp **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets inputs
    *  **参数解释**：插件安装参数。
    *
    * @return object|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param object|null $inputs **参数解释**：插件安装参数。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets translate
    *  **参数解释**：供界面使用的翻译信息。
    *
    * @return object|null
    */
    public function getTranslate()
    {
        return $this->container['translate'];
    }

    /**
    * Sets translate
    *
    * @param object|null $translate **参数解释**：供界面使用的翻译信息。
    *
    * @return $this
    */
    public function setTranslate($translate)
    {
        $this->container['translate'] = $translate;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：版本描述信息。 **取值范围**：不涉及。
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
    * @param string|null $description **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets detail
    *  **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail **参数解释**：版本描述信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

