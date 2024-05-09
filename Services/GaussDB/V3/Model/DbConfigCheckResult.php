<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbConfigCheckResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbConfigCheckResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramName  参数名。
    * value  参数值。
    * checkResult  校验结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramName' => 'string',
            'value' => 'string',
            'checkResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramName  参数名。
    * value  参数值。
    * checkResult  校验结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramName' => null,
        'value' => null,
        'checkResult' => null
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
    * paramName  参数名。
    * value  参数值。
    * checkResult  校验结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramName' => 'param_name',
            'value' => 'value',
            'checkResult' => 'check_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramName  参数名。
    * value  参数值。
    * checkResult  校验结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramName' => 'setParamName',
            'value' => 'setValue',
            'checkResult' => 'setCheckResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramName  参数名。
    * value  参数值。
    * checkResult  校验结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramName' => 'getParamName',
            'value' => 'getValue',
            'checkResult' => 'getCheckResult'
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
    const CHECK_RESULT_SUCCESS = 'success';
    const CHECK_RESULT_FAIL = 'fail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCheckResultAllowableValues()
    {
        return [
            self::CHECK_RESULT_SUCCESS,
            self::CHECK_RESULT_FAIL,
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
        $this->container['paramName'] = isset($data['paramName']) ? $data['paramName'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['checkResult'] = isset($data['checkResult']) ? $data['checkResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['paramName']) && (mb_strlen($this->container['paramName']) > 128)) {
                $invalidProperties[] = "invalid value for 'paramName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['paramName']) && (mb_strlen($this->container['paramName']) < 2)) {
                $invalidProperties[] = "invalid value for 'paramName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 64)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getCheckResultAllowableValues();
                if (!is_null($this->container['checkResult']) && !in_array($this->container['checkResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'checkResult', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['checkResult']) && (mb_strlen($this->container['checkResult']) > 1024)) {
                $invalidProperties[] = "invalid value for 'checkResult', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['checkResult']) && (mb_strlen($this->container['checkResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'checkResult', the character length must be bigger than or equal to 1.";
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
    *  参数名。
    *
    * @return string|null
    */
    public function getParamName()
    {
        return $this->container['paramName'];
    }

    /**
    * Sets paramName
    *
    * @param string|null $paramName 参数名。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets value
    *  参数值。
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
    * @param string|null $value 参数值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets checkResult
    *  校验结果。
    *
    * @return string|null
    */
    public function getCheckResult()
    {
        return $this->container['checkResult'];
    }

    /**
    * Sets checkResult
    *
    * @param string|null $checkResult 校验结果。
    *
    * @return $this
    */
    public function setCheckResult($checkResult)
    {
        $this->container['checkResult'] = $checkResult;
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

