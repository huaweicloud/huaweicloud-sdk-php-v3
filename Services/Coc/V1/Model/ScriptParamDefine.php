<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptParamDefine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptParamDefine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramName  参数名仅支持字母、数字以及下划线
    * paramValue  1.参数长度为1-4096位 2.可以包含大写字母、小写字母、数字及特殊字符(_-/.* ?:\",=+@#\\[{]}) 3.禁止出现连续'.'
    * paramDescription  参数描述
    * paramOrder  该参数已废弃，传入该参数不会生效。
    * sensitive  是否是敏感参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramName' => 'string',
            'paramValue' => 'string',
            'paramDescription' => 'string',
            'paramOrder' => 'int',
            'sensitive' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramName  参数名仅支持字母、数字以及下划线
    * paramValue  1.参数长度为1-4096位 2.可以包含大写字母、小写字母、数字及特殊字符(_-/.* ?:\",=+@#\\[{]}) 3.禁止出现连续'.'
    * paramDescription  参数描述
    * paramOrder  该参数已废弃，传入该参数不会生效。
    * sensitive  是否是敏感参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramName' => null,
        'paramValue' => null,
        'paramDescription' => null,
        'paramOrder' => 'int32',
        'sensitive' => null
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
    * paramName  参数名仅支持字母、数字以及下划线
    * paramValue  1.参数长度为1-4096位 2.可以包含大写字母、小写字母、数字及特殊字符(_-/.* ?:\",=+@#\\[{]}) 3.禁止出现连续'.'
    * paramDescription  参数描述
    * paramOrder  该参数已废弃，传入该参数不会生效。
    * sensitive  是否是敏感参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramName' => 'param_name',
            'paramValue' => 'param_value',
            'paramDescription' => 'param_description',
            'paramOrder' => 'param_order',
            'sensitive' => 'sensitive'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramName  参数名仅支持字母、数字以及下划线
    * paramValue  1.参数长度为1-4096位 2.可以包含大写字母、小写字母、数字及特殊字符(_-/.* ?:\",=+@#\\[{]}) 3.禁止出现连续'.'
    * paramDescription  参数描述
    * paramOrder  该参数已废弃，传入该参数不会生效。
    * sensitive  是否是敏感参数
    *
    * @var string[]
    */
    protected static $setters = [
            'paramName' => 'setParamName',
            'paramValue' => 'setParamValue',
            'paramDescription' => 'setParamDescription',
            'paramOrder' => 'setParamOrder',
            'sensitive' => 'setSensitive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramName  参数名仅支持字母、数字以及下划线
    * paramValue  1.参数长度为1-4096位 2.可以包含大写字母、小写字母、数字及特殊字符(_-/.* ?:\",=+@#\\[{]}) 3.禁止出现连续'.'
    * paramDescription  参数描述
    * paramOrder  该参数已废弃，传入该参数不会生效。
    * sensitive  是否是敏感参数
    *
    * @var string[]
    */
    protected static $getters = [
            'paramName' => 'getParamName',
            'paramValue' => 'getParamValue',
            'paramDescription' => 'getParamDescription',
            'paramOrder' => 'getParamOrder',
            'sensitive' => 'getSensitive'
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
        $this->container['paramValue'] = isset($data['paramValue']) ? $data['paramValue'] : null;
        $this->container['paramDescription'] = isset($data['paramDescription']) ? $data['paramDescription'] : null;
        $this->container['paramOrder'] = isset($data['paramOrder']) ? $data['paramOrder'] : null;
        $this->container['sensitive'] = isset($data['sensitive']) ? $data['sensitive'] : null;
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
            if ((mb_strlen($this->container['paramName']) > 64)) {
                $invalidProperties[] = "invalid value for 'paramName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['paramName']) < 1)) {
                $invalidProperties[] = "invalid value for 'paramName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['paramValue'] === null) {
            $invalidProperties[] = "'paramValue' can't be null";
        }
            if ((mb_strlen($this->container['paramValue']) > 4096)) {
                $invalidProperties[] = "invalid value for 'paramValue', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['paramValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'paramValue', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['paramDescription'] === null) {
            $invalidProperties[] = "'paramDescription' can't be null";
        }
            if ((mb_strlen($this->container['paramDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'paramDescription', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['paramDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'paramDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['paramOrder'] === null) {
            $invalidProperties[] = "'paramOrder' can't be null";
        }
        if ($this->container['sensitive'] === null) {
            $invalidProperties[] = "'sensitive' can't be null";
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
    *  参数名仅支持字母、数字以及下划线
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
    * @param string $paramName 参数名仅支持字母、数字以及下划线
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets paramValue
    *  1.参数长度为1-4096位 2.可以包含大写字母、小写字母、数字及特殊字符(_-/.* ?:\",=+@#\\[{]}) 3.禁止出现连续'.'
    *
    * @return string
    */
    public function getParamValue()
    {
        return $this->container['paramValue'];
    }

    /**
    * Sets paramValue
    *
    * @param string $paramValue 1.参数长度为1-4096位 2.可以包含大写字母、小写字母、数字及特殊字符(_-/.* ?:\",=+@#\\[{]}) 3.禁止出现连续'.'
    *
    * @return $this
    */
    public function setParamValue($paramValue)
    {
        $this->container['paramValue'] = $paramValue;
        return $this;
    }

    /**
    * Gets paramDescription
    *  参数描述
    *
    * @return string
    */
    public function getParamDescription()
    {
        return $this->container['paramDescription'];
    }

    /**
    * Sets paramDescription
    *
    * @param string $paramDescription 参数描述
    *
    * @return $this
    */
    public function setParamDescription($paramDescription)
    {
        $this->container['paramDescription'] = $paramDescription;
        return $this;
    }

    /**
    * Gets paramOrder
    *  该参数已废弃，传入该参数不会生效。
    *
    * @return int
    */
    public function getParamOrder()
    {
        return $this->container['paramOrder'];
    }

    /**
    * Sets paramOrder
    *
    * @param int $paramOrder 该参数已废弃，传入该参数不会生效。
    *
    * @return $this
    */
    public function setParamOrder($paramOrder)
    {
        $this->container['paramOrder'] = $paramOrder;
        return $this;
    }

    /**
    * Gets sensitive
    *  是否是敏感参数
    *
    * @return bool
    */
    public function getSensitive()
    {
        return $this->container['sensitive'];
    }

    /**
    * Sets sensitive
    *
    * @param bool $sensitive 是否是敏感参数
    *
    * @return $this
    */
    public function setSensitive($sensitive)
    {
        $this->container['sensitive'] = $sensitive;
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

