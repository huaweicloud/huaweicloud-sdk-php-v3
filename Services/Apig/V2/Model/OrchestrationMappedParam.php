<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrchestrationMappedParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrchestrationMappedParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mappedParamName  编排后的请求参数名，只支持英文，数字，中划线，必须以英文开头，1-128个字符，不能与已有的参数重名，默认会透传到后端。
    * mappedParamType  编排后的参数类型，支持string和number。
    * mappedParamLocation  编排后的参数位置，支持query和header。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mappedParamName' => 'string',
            'mappedParamType' => 'string',
            'mappedParamLocation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mappedParamName  编排后的请求参数名，只支持英文，数字，中划线，必须以英文开头，1-128个字符，不能与已有的参数重名，默认会透传到后端。
    * mappedParamType  编排后的参数类型，支持string和number。
    * mappedParamLocation  编排后的参数位置，支持query和header。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mappedParamName' => null,
        'mappedParamType' => null,
        'mappedParamLocation' => null
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
    * mappedParamName  编排后的请求参数名，只支持英文，数字，中划线，必须以英文开头，1-128个字符，不能与已有的参数重名，默认会透传到后端。
    * mappedParamType  编排后的参数类型，支持string和number。
    * mappedParamLocation  编排后的参数位置，支持query和header。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mappedParamName' => 'mapped_param_name',
            'mappedParamType' => 'mapped_param_type',
            'mappedParamLocation' => 'mapped_param_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mappedParamName  编排后的请求参数名，只支持英文，数字，中划线，必须以英文开头，1-128个字符，不能与已有的参数重名，默认会透传到后端。
    * mappedParamType  编排后的参数类型，支持string和number。
    * mappedParamLocation  编排后的参数位置，支持query和header。
    *
    * @var string[]
    */
    protected static $setters = [
            'mappedParamName' => 'setMappedParamName',
            'mappedParamType' => 'setMappedParamType',
            'mappedParamLocation' => 'setMappedParamLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mappedParamName  编排后的请求参数名，只支持英文，数字，中划线，必须以英文开头，1-128个字符，不能与已有的参数重名，默认会透传到后端。
    * mappedParamType  编排后的参数类型，支持string和number。
    * mappedParamLocation  编排后的参数位置，支持query和header。
    *
    * @var string[]
    */
    protected static $getters = [
            'mappedParamName' => 'getMappedParamName',
            'mappedParamType' => 'getMappedParamType',
            'mappedParamLocation' => 'getMappedParamLocation'
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
    const MAPPED_PARAM_TYPE_STRING = 'string';
    const MAPPED_PARAM_TYPE_NUMBER = 'number';
    const MAPPED_PARAM_LOCATION_QUERY = 'query';
    const MAPPED_PARAM_LOCATION_HEADER = 'header';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMappedParamTypeAllowableValues()
    {
        return [
            self::MAPPED_PARAM_TYPE_STRING,
            self::MAPPED_PARAM_TYPE_NUMBER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMappedParamLocationAllowableValues()
    {
        return [
            self::MAPPED_PARAM_LOCATION_QUERY,
            self::MAPPED_PARAM_LOCATION_HEADER,
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
        $this->container['mappedParamName'] = isset($data['mappedParamName']) ? $data['mappedParamName'] : null;
        $this->container['mappedParamType'] = isset($data['mappedParamType']) ? $data['mappedParamType'] : null;
        $this->container['mappedParamLocation'] = isset($data['mappedParamLocation']) ? $data['mappedParamLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mappedParamName'] === null) {
            $invalidProperties[] = "'mappedParamName' can't be null";
        }
            if ((mb_strlen($this->container['mappedParamName']) > 128)) {
                $invalidProperties[] = "invalid value for 'mappedParamName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['mappedParamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'mappedParamName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9-]{0,127}$/", $this->container['mappedParamName'])) {
                $invalidProperties[] = "invalid value for 'mappedParamName', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9-]{0,127}$/.";
            }
        if ($this->container['mappedParamType'] === null) {
            $invalidProperties[] = "'mappedParamType' can't be null";
        }
            $allowedValues = $this->getMappedParamTypeAllowableValues();
                if (!is_null($this->container['mappedParamType']) && !in_array($this->container['mappedParamType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mappedParamType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['mappedParamLocation'] === null) {
            $invalidProperties[] = "'mappedParamLocation' can't be null";
        }
            $allowedValues = $this->getMappedParamLocationAllowableValues();
                if (!is_null($this->container['mappedParamLocation']) && !in_array($this->container['mappedParamLocation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mappedParamLocation', must be one of '%s'",
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
    * Gets mappedParamName
    *  编排后的请求参数名，只支持英文，数字，中划线，必须以英文开头，1-128个字符，不能与已有的参数重名，默认会透传到后端。
    *
    * @return string
    */
    public function getMappedParamName()
    {
        return $this->container['mappedParamName'];
    }

    /**
    * Sets mappedParamName
    *
    * @param string $mappedParamName 编排后的请求参数名，只支持英文，数字，中划线，必须以英文开头，1-128个字符，不能与已有的参数重名，默认会透传到后端。
    *
    * @return $this
    */
    public function setMappedParamName($mappedParamName)
    {
        $this->container['mappedParamName'] = $mappedParamName;
        return $this;
    }

    /**
    * Gets mappedParamType
    *  编排后的参数类型，支持string和number。
    *
    * @return string
    */
    public function getMappedParamType()
    {
        return $this->container['mappedParamType'];
    }

    /**
    * Sets mappedParamType
    *
    * @param string $mappedParamType 编排后的参数类型，支持string和number。
    *
    * @return $this
    */
    public function setMappedParamType($mappedParamType)
    {
        $this->container['mappedParamType'] = $mappedParamType;
        return $this;
    }

    /**
    * Gets mappedParamLocation
    *  编排后的参数位置，支持query和header。
    *
    * @return string
    */
    public function getMappedParamLocation()
    {
        return $this->container['mappedParamLocation'];
    }

    /**
    * Sets mappedParamLocation
    *
    * @param string $mappedParamLocation 编排后的参数位置，支持query和header。
    *
    * @return $this
    */
    public function setMappedParamLocation($mappedParamLocation)
    {
        $this->container['mappedParamLocation'] = $mappedParamLocation;
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

