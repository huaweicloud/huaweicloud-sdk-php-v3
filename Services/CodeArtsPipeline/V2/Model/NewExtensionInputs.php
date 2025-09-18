<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NewExtensionInputs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NewExtension_inputs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * label  **参数解释**： 标签。 **取值范围**： 不涉及。
    * description  **参数解释**： 说明。 **取值范围**： 不涉及。
    * defaultValue  **参数解释**： 默认值。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必填。 **取值范围**： - true：必填。 - false：非必填。
    * extendProp  extendProp
    * validation  validation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'label' => 'string',
            'description' => 'string',
            'defaultValue' => 'string',
            'required' => 'bool',
            'extendProp' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionExtendProp',
            'validation' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionValidation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * label  **参数解释**： 标签。 **取值范围**： 不涉及。
    * description  **参数解释**： 说明。 **取值范围**： 不涉及。
    * defaultValue  **参数解释**： 默认值。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必填。 **取值范围**： - true：必填。 - false：非必填。
    * extendProp  extendProp
    * validation  validation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'label' => null,
        'description' => null,
        'defaultValue' => null,
        'required' => null,
        'extendProp' => null,
        'validation' => null
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
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * label  **参数解释**： 标签。 **取值范围**： 不涉及。
    * description  **参数解释**： 说明。 **取值范围**： 不涉及。
    * defaultValue  **参数解释**： 默认值。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必填。 **取值范围**： - true：必填。 - false：非必填。
    * extendProp  extendProp
    * validation  validation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'label' => 'label',
            'description' => 'description',
            'defaultValue' => 'default_value',
            'required' => 'required',
            'extendProp' => 'extend_prop',
            'validation' => 'validation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * label  **参数解释**： 标签。 **取值范围**： 不涉及。
    * description  **参数解释**： 说明。 **取值范围**： 不涉及。
    * defaultValue  **参数解释**： 默认值。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必填。 **取值范围**： - true：必填。 - false：非必填。
    * extendProp  extendProp
    * validation  validation
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'label' => 'setLabel',
            'description' => 'setDescription',
            'defaultValue' => 'setDefaultValue',
            'required' => 'setRequired',
            'extendProp' => 'setExtendProp',
            'validation' => 'setValidation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： 不涉及。
    * label  **参数解释**： 标签。 **取值范围**： 不涉及。
    * description  **参数解释**： 说明。 **取值范围**： 不涉及。
    * defaultValue  **参数解释**： 默认值。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必填。 **取值范围**： - true：必填。 - false：非必填。
    * extendProp  extendProp
    * validation  validation
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'label' => 'getLabel',
            'description' => 'getDescription',
            'defaultValue' => 'getDefaultValue',
            'required' => 'getRequired',
            'extendProp' => 'getExtendProp',
            'validation' => 'getValidation'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['extendProp'] = isset($data['extendProp']) ? $data['extendProp'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
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
    * Gets name
    *  **参数解释**： 名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 类型。 **取值范围**： 不涉及。
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
    * @param string|null $type **参数解释**： 类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets label
    *  **参数解释**： 标签。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label **参数解释**： 标签。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 说明。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 说明。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets defaultValue
    *  **参数解释**： 默认值。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue **参数解释**： 默认值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets required
    *  **参数解释**： 是否必填。 **取值范围**： - true：必填。 - false：非必填。
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required **参数解释**： 是否必填。 **取值范围**： - true：必填。 - false：非必填。
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets extendProp
    *  extendProp
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionExtendProp|null
    */
    public function getExtendProp()
    {
        return $this->container['extendProp'];
    }

    /**
    * Sets extendProp
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionExtendProp|null $extendProp extendProp
    *
    * @return $this
    */
    public function setExtendProp($extendProp)
    {
        $this->container['extendProp'] = $extendProp;
        return $this;
    }

    /**
    * Gets validation
    *  validation
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionValidation|null
    */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
    * Sets validation
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionValidation|null $validation validation
    *
    * @return $this
    */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;
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

