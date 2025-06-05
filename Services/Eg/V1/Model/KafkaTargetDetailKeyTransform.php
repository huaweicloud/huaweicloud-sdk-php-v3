<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaTargetDetailKeyTransform implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaTargetDetail_keyTransform';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  键值规则类型
    * value  键值规则，键值规则为VARIABLE，CONSTANT时必填
    * template  键值规则模板，键值规则为VARIABLE时必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'string',
            'template' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  键值规则类型
    * value  键值规则，键值规则为VARIABLE，CONSTANT时必填
    * template  键值规则模板，键值规则为VARIABLE时必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => null,
        'template' => null
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
    * type  键值规则类型
    * value  键值规则，键值规则为VARIABLE，CONSTANT时必填
    * template  键值规则模板，键值规则为VARIABLE时必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value',
            'template' => 'template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  键值规则类型
    * value  键值规则，键值规则为VARIABLE，CONSTANT时必填
    * template  键值规则模板，键值规则为VARIABLE时必填
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue',
            'template' => 'setTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  键值规则类型
    * value  键值规则，键值规则为VARIABLE，CONSTANT时必填
    * template  键值规则模板，键值规则为VARIABLE时必填
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue',
            'template' => 'getTemplate'
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
    const TYPE_NONE = 'NONE';
    const TYPE_VARIABLE = 'VARIABLE';
    const TYPE_CONSTANT = 'CONSTANT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NONE,
            self::TYPE_VARIABLE,
            self::TYPE_CONSTANT,
        ];
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  键值规则类型
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
    * @param string|null $type 键值规则类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  键值规则，键值规则为VARIABLE，CONSTANT时必填
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 键值规则，键值规则为VARIABLE，CONSTANT时必填
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets template
    *  键值规则模板，键值规则为VARIABLE时必填
    *
    * @return string|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string|null $template 键值规则模板，键值规则为VARIABLE时必填
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
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

