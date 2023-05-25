<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  自定义函数的urn
    * authType  自定义合规规则调用function方式
    * authValue  method参数值，method为agency时，为{\"agency_name\":rms_fg_agency}, rms_fg_agency为授权RMS调用FunctionGraph接口的委托名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'authType' => 'string',
            'authValue' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  自定义函数的urn
    * authType  自定义合规规则调用function方式
    * authValue  method参数值，method为agency时，为{\"agency_name\":rms_fg_agency}, rms_fg_agency为授权RMS调用FunctionGraph接口的委托名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'authType' => null,
        'authValue' => null
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
    * functionUrn  自定义函数的urn
    * authType  自定义合规规则调用function方式
    * authValue  method参数值，method为agency时，为{\"agency_name\":rms_fg_agency}, rms_fg_agency为授权RMS调用FunctionGraph接口的委托名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'authType' => 'auth_type',
            'authValue' => 'auth_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  自定义函数的urn
    * authType  自定义合规规则调用function方式
    * authValue  method参数值，method为agency时，为{\"agency_name\":rms_fg_agency}, rms_fg_agency为授权RMS调用FunctionGraph接口的委托名称
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'authType' => 'setAuthType',
            'authValue' => 'setAuthValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  自定义函数的urn
    * authType  自定义合规规则调用function方式
    * authValue  method参数值，method为agency时，为{\"agency_name\":rms_fg_agency}, rms_fg_agency为授权RMS调用FunctionGraph接口的委托名称
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'authType' => 'getAuthType',
            'authValue' => 'getAuthValue'
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
    const AUTH_TYPE_AGENCY = 'agency';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_AGENCY,
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['authValue'] = isset($data['authValue']) ? $data['authValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['functionUrn'] === null) {
            $invalidProperties[] = "'functionUrn' can't be null";
        }
            if ((mb_strlen($this->container['functionUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'functionUrn', the character length must be smaller than or equal to 1024.";
            }
        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
        }
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
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
    * Gets functionUrn
    *  自定义函数的urn
    *
    * @return string
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string $functionUrn 自定义函数的urn
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets authType
    *  自定义合规规则调用function方式
    *
    * @return string
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string $authType 自定义合规规则调用function方式
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets authValue
    *  method参数值，method为agency时，为{\"agency_name\":rms_fg_agency}, rms_fg_agency为授权RMS调用FunctionGraph接口的委托名称
    *
    * @return map[string,object]|null
    */
    public function getAuthValue()
    {
        return $this->container['authValue'];
    }

    /**
    * Sets authValue
    *
    * @param map[string,object]|null $authValue method参数值，method为agency时，为{\"agency_name\":rms_fg_agency}, rms_fg_agency为授权RMS调用FunctionGraph接口的委托名称
    *
    * @return $this
    */
    public function setAuthValue($authValue)
    {
        $this->container['authValue'] = $authValue;
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

