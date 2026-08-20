<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionParameterValidation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionParameterValidation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isRequired  是否必填
    * pattern  正则校验
    * patternDescription  校验说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isRequired' => 'bool',
            'pattern' => 'string',
            'patternDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isRequired  是否必填
    * pattern  正则校验
    * patternDescription  校验说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isRequired' => null,
        'pattern' => null,
        'patternDescription' => null
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
    * isRequired  是否必填
    * pattern  正则校验
    * patternDescription  校验说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isRequired' => 'isRequired',
            'pattern' => 'pattern',
            'patternDescription' => 'patternDescription'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isRequired  是否必填
    * pattern  正则校验
    * patternDescription  校验说明
    *
    * @var string[]
    */
    protected static $setters = [
            'isRequired' => 'setIsRequired',
            'pattern' => 'setPattern',
            'patternDescription' => 'setPatternDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isRequired  是否必填
    * pattern  正则校验
    * patternDescription  校验说明
    *
    * @var string[]
    */
    protected static $getters = [
            'isRequired' => 'getIsRequired',
            'pattern' => 'getPattern',
            'patternDescription' => 'getPatternDescription'
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
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['patternDescription'] = isset($data['patternDescription']) ? $data['patternDescription'] : null;
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
    * Gets isRequired
    *  是否必填
    *
    * @return bool|null
    */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
    * Sets isRequired
    *
    * @param bool|null $isRequired 是否必填
    *
    * @return $this
    */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;
        return $this;
    }

    /**
    * Gets pattern
    *  正则校验
    *
    * @return string|null
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string|null $pattern 正则校验
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets patternDescription
    *  校验说明
    *
    * @return string|null
    */
    public function getPatternDescription()
    {
        return $this->container['patternDescription'];
    }

    /**
    * Sets patternDescription
    *
    * @param string|null $patternDescription 校验说明
    *
    * @return $this
    */
    public function setPatternDescription($patternDescription)
    {
        $this->container['patternDescription'] = $patternDescription;
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

