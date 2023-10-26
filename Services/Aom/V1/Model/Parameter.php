<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Parameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Parameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    * id  参数id。
    * encryption  是否加密。
    * hint  参数提示。
    * quoteParam  是否从参数库选择。
    * required  是否为必填参数。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramName' => 'string',
            'paramType' => 'string',
            'paramGroup' => 'string',
            'defaultValue' => 'string',
            'id' => 'string',
            'encryption' => 'bool',
            'hint' => 'string',
            'quoteParam' => 'bool',
            'required' => 'bool',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    * id  参数id。
    * encryption  是否加密。
    * hint  参数提示。
    * quoteParam  是否从参数库选择。
    * required  是否为必填参数。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramName' => null,
        'paramType' => null,
        'paramGroup' => null,
        'defaultValue' => null,
        'id' => null,
        'encryption' => null,
        'hint' => null,
        'quoteParam' => null,
        'required' => null,
        'description' => null
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
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    * id  参数id。
    * encryption  是否加密。
    * hint  参数提示。
    * quoteParam  是否从参数库选择。
    * required  是否为必填参数。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramName' => 'param_name',
            'paramType' => 'param_type',
            'paramGroup' => 'param_group',
            'defaultValue' => 'default_value',
            'id' => 'id',
            'encryption' => 'encryption',
            'hint' => 'hint',
            'quoteParam' => 'quote_param',
            'required' => 'required',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    * id  参数id。
    * encryption  是否加密。
    * hint  参数提示。
    * quoteParam  是否从参数库选择。
    * required  是否为必填参数。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramName' => 'setParamName',
            'paramType' => 'setParamType',
            'paramGroup' => 'setParamGroup',
            'defaultValue' => 'setDefaultValue',
            'id' => 'setId',
            'encryption' => 'setEncryption',
            'hint' => 'setHint',
            'quoteParam' => 'setQuoteParam',
            'required' => 'setRequired',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    * id  参数id。
    * encryption  是否加密。
    * hint  参数提示。
    * quoteParam  是否从参数库选择。
    * required  是否为必填参数。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramName' => 'getParamName',
            'paramType' => 'getParamType',
            'paramGroup' => 'getParamGroup',
            'defaultValue' => 'getDefaultValue',
            'id' => 'getId',
            'encryption' => 'getEncryption',
            'hint' => 'getHint',
            'quoteParam' => 'getQuoteParam',
            'required' => 'getRequired',
            'description' => 'getDescription'
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
        $this->container['paramName'] = isset($data['paramName']) ? $data['paramName'] : null;
        $this->container['paramType'] = isset($data['paramType']) ? $data['paramType'] : null;
        $this->container['paramGroup'] = isset($data['paramGroup']) ? $data['paramGroup'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
        $this->container['quoteParam'] = isset($data['quoteParam']) ? $data['quoteParam'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['paramName'] === null) {
            $invalidProperties[] = "'paramName' can't be null";
        }
            if (!preg_match("/[^\\>+<;#\";&?%=']{1,64}/", $this->container['paramName'])) {
                $invalidProperties[] = "invalid value for 'paramName', must be conform to the pattern /[^\\>+<;#\";&?%=']{1,64}/.";
            }
            if (!is_null($this->container['paramType']) && (mb_strlen($this->container['paramType']) > 16)) {
                $invalidProperties[] = "invalid value for 'paramType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['paramType']) && (mb_strlen($this->container['paramType']) < 1)) {
                $invalidProperties[] = "invalid value for 'paramType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['paramGroup']) && (mb_strlen($this->container['paramGroup']) > 32)) {
                $invalidProperties[] = "invalid value for 'paramGroup', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['paramGroup']) && (mb_strlen($this->container['paramGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'paramGroup', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 40960)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 40960.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['encryption'] === null) {
            $invalidProperties[] = "'encryption' can't be null";
        }
            if (!is_null($this->container['hint']) && (mb_strlen($this->container['hint']) > 1000)) {
                $invalidProperties[] = "invalid value for 'hint', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['hint']) && (mb_strlen($this->container['hint']) < 1)) {
                $invalidProperties[] = "invalid value for 'hint', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['quoteParam'] === null) {
            $invalidProperties[] = "'quoteParam' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets paramName
    *  参数名称。
    *
    * @return string
    */
    public function getParamName()
    {
        return $this->container['paramName'];
    }

    /**
    * Sets paramName
    *
    * @param string $paramName 参数名称。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets paramType
    *  参数类型。
    *
    * @return string|null
    */
    public function getParamType()
    {
        return $this->container['paramType'];
    }

    /**
    * Sets paramType
    *
    * @param string|null $paramType 参数类型。
    *
    * @return $this
    */
    public function setParamType($paramType)
    {
        $this->container['paramType'] = $paramType;
        return $this;
    }

    /**
    * Gets paramGroup
    *  参数分组。
    *
    * @return string|null
    */
    public function getParamGroup()
    {
        return $this->container['paramGroup'];
    }

    /**
    * Sets paramGroup
    *
    * @param string|null $paramGroup 参数分组。
    *
    * @return $this
    */
    public function setParamGroup($paramGroup)
    {
        $this->container['paramGroup'] = $paramGroup;
        return $this;
    }

    /**
    * Gets defaultValue
    *  参数初始值。
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
    * @param string|null $defaultValue 参数初始值。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets id
    *  参数id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 参数id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets encryption
    *  是否加密。
    *
    * @return bool
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param bool $encryption 是否加密。
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
        return $this;
    }

    /**
    * Gets hint
    *  参数提示。
    *
    * @return string|null
    */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
    * Sets hint
    *
    * @param string|null $hint 参数提示。
    *
    * @return $this
    */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;
        return $this;
    }

    /**
    * Gets quoteParam
    *  是否从参数库选择。
    *
    * @return bool
    */
    public function getQuoteParam()
    {
        return $this->container['quoteParam'];
    }

    /**
    * Sets quoteParam
    *
    * @param bool $quoteParam 是否从参数库选择。
    *
    * @return $this
    */
    public function setQuoteParam($quoteParam)
    {
        $this->container['quoteParam'] = $quoteParam;
        return $this;
    }

    /**
    * Gets required
    *  是否为必填参数。
    *
    * @return bool
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool $required 是否为必填参数。
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets description
    *  参数描述。
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
    * @param string|null $description 参数描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

