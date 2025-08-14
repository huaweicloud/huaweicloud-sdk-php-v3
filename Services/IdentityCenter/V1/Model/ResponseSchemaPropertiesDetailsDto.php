<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseSchemaPropertiesDetailsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseSchemaPropertiesDetailsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attrNameFormat  额外添加的属性的格式
    * include  是否包含额外属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attrNameFormat' => 'string',
            'include' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attrNameFormat  额外添加的属性的格式
    * include  是否包含额外属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attrNameFormat' => null,
        'include' => null
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
    * attrNameFormat  额外添加的属性的格式
    * include  是否包含额外属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attrNameFormat' => 'attr_name_format',
            'include' => 'include'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attrNameFormat  额外添加的属性的格式
    * include  是否包含额外属性
    *
    * @var string[]
    */
    protected static $setters = [
            'attrNameFormat' => 'setAttrNameFormat',
            'include' => 'setInclude'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attrNameFormat  额外添加的属性的格式
    * include  是否包含额外属性
    *
    * @var string[]
    */
    protected static $getters = [
            'attrNameFormat' => 'getAttrNameFormat',
            'include' => 'getInclude'
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
    const MODEL_INCLUDE_YES = 'YES';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIncludeAllowableValues()
    {
        return [
            self::MODEL_INCLUDE_YES,
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
        $this->container['attrNameFormat'] = isset($data['attrNameFormat']) ? $data['attrNameFormat'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['attrNameFormat'] === null) {
            $invalidProperties[] = "'attrNameFormat' can't be null";
        }
            if (!preg_match("/urn:oasis:names:tc:SAML:2\\.0:attrname-format:(unspecified|uri|basic)/", $this->container['attrNameFormat'])) {
                $invalidProperties[] = "invalid value for 'attrNameFormat', must be conform to the pattern /urn:oasis:names:tc:SAML:2\\.0:attrname-format:(unspecified|uri|basic)/.";
            }
        if ($this->container['include'] === null) {
            $invalidProperties[] = "'include' can't be null";
        }
            $allowedValues = $this->getIncludeAllowableValues();
                if (!is_null($this->container['include']) && !in_array($this->container['include'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'include', must be one of '%s'",
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
    * Gets attrNameFormat
    *  额外添加的属性的格式
    *
    * @return string
    */
    public function getAttrNameFormat()
    {
        return $this->container['attrNameFormat'];
    }

    /**
    * Sets attrNameFormat
    *
    * @param string $attrNameFormat 额外添加的属性的格式
    *
    * @return $this
    */
    public function setAttrNameFormat($attrNameFormat)
    {
        $this->container['attrNameFormat'] = $attrNameFormat;
        return $this;
    }

    /**
    * Gets include
    *  是否包含额外属性
    *
    * @return string
    */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
    * Sets include
    *
    * @param string $include 是否包含额外属性
    *
    * @return $this
    */
    public function setInclude($include)
    {
        $this->container['include'] = $include;
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

