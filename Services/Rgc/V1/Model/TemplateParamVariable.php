<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateParamVariable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateParamVariable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * default  变量默认值。
    * name  变量名称。
    * description  变量描述。
    * nullable  变量是否可以为空。
    * sensitive  变量是否为敏感字段。
    * type  变量类型。
    * validations  validations
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'default' => 'object',
            'name' => 'string',
            'description' => 'string',
            'nullable' => 'bool',
            'sensitive' => 'bool',
            'type' => 'string',
            'validations' => '\HuaweiCloud\SDK\Rgc\V1\Model\TemplateParamVariableValidation[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * default  变量默认值。
    * name  变量名称。
    * description  变量描述。
    * nullable  变量是否可以为空。
    * sensitive  变量是否为敏感字段。
    * type  变量类型。
    * validations  validations
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'default' => null,
        'name' => null,
        'description' => null,
        'nullable' => null,
        'sensitive' => null,
        'type' => null,
        'validations' => null
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
    * default  变量默认值。
    * name  变量名称。
    * description  变量描述。
    * nullable  变量是否可以为空。
    * sensitive  变量是否为敏感字段。
    * type  变量类型。
    * validations  validations
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'default' => 'default',
            'name' => 'name',
            'description' => 'description',
            'nullable' => 'nullable',
            'sensitive' => 'sensitive',
            'type' => 'type',
            'validations' => 'validations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * default  变量默认值。
    * name  变量名称。
    * description  变量描述。
    * nullable  变量是否可以为空。
    * sensitive  变量是否为敏感字段。
    * type  变量类型。
    * validations  validations
    *
    * @var string[]
    */
    protected static $setters = [
            'default' => 'setDefault',
            'name' => 'setName',
            'description' => 'setDescription',
            'nullable' => 'setNullable',
            'sensitive' => 'setSensitive',
            'type' => 'setType',
            'validations' => 'setValidations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * default  变量默认值。
    * name  变量名称。
    * description  变量描述。
    * nullable  变量是否可以为空。
    * sensitive  变量是否为敏感字段。
    * type  变量类型。
    * validations  validations
    *
    * @var string[]
    */
    protected static $getters = [
            'default' => 'getDefault',
            'name' => 'getName',
            'description' => 'getDescription',
            'nullable' => 'getNullable',
            'sensitive' => 'getSensitive',
            'type' => 'getType',
            'validations' => 'getValidations'
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
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['nullable'] = isset($data['nullable']) ? $data['nullable'] : null;
        $this->container['sensitive'] = isset($data['sensitive']) ? $data['sensitive'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['validations'] = isset($data['validations']) ? $data['validations'] : null;
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
    * Gets default
    *  变量默认值。
    *
    * @return object|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param object|null $default 变量默认值。
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets name
    *  变量名称。
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
    * @param string|null $name 变量名称。
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
    *  变量描述。
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
    * @param string|null $description 变量描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets nullable
    *  变量是否可以为空。
    *
    * @return bool|null
    */
    public function getNullable()
    {
        return $this->container['nullable'];
    }

    /**
    * Sets nullable
    *
    * @param bool|null $nullable 变量是否可以为空。
    *
    * @return $this
    */
    public function setNullable($nullable)
    {
        $this->container['nullable'] = $nullable;
        return $this;
    }

    /**
    * Gets sensitive
    *  变量是否为敏感字段。
    *
    * @return bool|null
    */
    public function getSensitive()
    {
        return $this->container['sensitive'];
    }

    /**
    * Sets sensitive
    *
    * @param bool|null $sensitive 变量是否为敏感字段。
    *
    * @return $this
    */
    public function setSensitive($sensitive)
    {
        $this->container['sensitive'] = $sensitive;
        return $this;
    }

    /**
    * Gets type
    *  变量类型。
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
    * @param string|null $type 变量类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets validations
    *  validations
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\TemplateParamVariableValidation[]|null
    */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
    * Sets validations
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\TemplateParamVariableValidation[]|null $validations validations
    *
    * @return $this
    */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;
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

