<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceProperty';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'propertyName' => 'string',
            'dataType' => 'string',
            'required' => 'bool',
            'enumList' => 'string[]',
            'min' => 'string',
            'max' => 'string',
            'maxLength' => 'int',
            'step' => 'double',
            'unit' => 'string',
            'method' => 'string',
            'description' => 'string',
            'defaultValue' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'propertyName' => null,
        'dataType' => null,
        'required' => null,
        'enumList' => null,
        'min' => null,
        'max' => null,
        'maxLength' => 'int32',
        'step' => 'double',
        'unit' => null,
        'method' => null,
        'description' => null,
        'defaultValue' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'propertyName' => 'property_name',
            'dataType' => 'data_type',
            'required' => 'required',
            'enumList' => 'enum_list',
            'min' => 'min',
            'max' => 'max',
            'maxLength' => 'max_length',
            'step' => 'step',
            'unit' => 'unit',
            'method' => 'method',
            'description' => 'description',
            'defaultValue' => 'default_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'propertyName' => 'setPropertyName',
            'dataType' => 'setDataType',
            'required' => 'setRequired',
            'enumList' => 'setEnumList',
            'min' => 'setMin',
            'max' => 'setMax',
            'maxLength' => 'setMaxLength',
            'step' => 'setStep',
            'unit' => 'setUnit',
            'method' => 'setMethod',
            'description' => 'setDescription',
            'defaultValue' => 'setDefaultValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'propertyName' => 'getPropertyName',
            'dataType' => 'getDataType',
            'required' => 'getRequired',
            'enumList' => 'getEnumList',
            'min' => 'getMin',
            'max' => 'getMax',
            'maxLength' => 'getMaxLength',
            'step' => 'getStep',
            'unit' => 'getUnit',
            'method' => 'getMethod',
            'description' => 'getDescription',
            'defaultValue' => 'getDefaultValue'
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
        $this->container['propertyName'] = isset($data['propertyName']) ? $data['propertyName'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : false;
        $this->container['enumList'] = isset($data['enumList']) ? $data['enumList'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['propertyName'] === null) {
            $invalidProperties[] = "'propertyName' can't be null";
        }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/", $this->container['propertyName'])) {
                $invalidProperties[] = "invalid value for 'propertyName', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/.";
            }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
            if (!preg_match("/(int|long|decimal|string|DateTime|jsonObject|enum|boolean|string list)/", $this->container['dataType'])) {
                $invalidProperties[] = "invalid value for 'dataType', must be conform to the pattern /(int|long|decimal|string|DateTime|jsonObject|enum|boolean|string list)/.";
            }
            if (!is_null($this->container['min']) && (mb_strlen($this->container['min']) > 16)) {
                $invalidProperties[] = "invalid value for 'min', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['min']) && (mb_strlen($this->container['min']) < 1)) {
                $invalidProperties[] = "invalid value for 'min', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['max']) && (mb_strlen($this->container['max']) > 16)) {
                $invalidProperties[] = "invalid value for 'max', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['max']) && (mb_strlen($this->container['max']) < 1)) {
                $invalidProperties[] = "invalid value for 'max', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 16)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 16.";
            }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
            if (!preg_match("/(RWE|RW|RE|WE|E|W|R)/", $this->container['method'])) {
                $invalidProperties[] = "invalid value for 'method', must be conform to the pattern /(RWE|RW|RE|WE|E|W|R)/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。\/]{1,128}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。\/]{1,128}$/.";
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
    * Gets propertyName
    *
    * @return string
    */
    public function getPropertyName()
    {
        return $this->container['propertyName'];
    }

    /**
    * Sets propertyName
    *
    * @param string $propertyName 设备属性名称。
    *
    * @return $this
    */
    public function setPropertyName($propertyName)
    {
        $this->container['propertyName'] = $propertyName;
        return $this;
    }

    /**
    * Gets dataType
    *
    * @return string
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string $dataType 设备属性的数据类型。取值范围：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets required
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
    * @param bool|null $required 设备属性是否必选。默认为false。
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets enumList
    *
    * @return string[]|null
    */
    public function getEnumList()
    {
        return $this->container['enumList'];
    }

    /**
    * Sets enumList
    *
    * @param string[]|null $enumList 设备属性的枚举值列表。
    *
    * @return $this
    */
    public function setEnumList($enumList)
    {
        $this->container['enumList'] = $enumList;
        return $this;
    }

    /**
    * Gets min
    *
    * @return string|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param string|null $min 设备属性的最小值。
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *
    * @return string|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param string|null $max 设备属性的最大值。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets maxLength
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength 设备属性的最大长度。
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
        return $this;
    }

    /**
    * Gets step
    *
    * @return double|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param double|null $step 设备属性的步长。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets unit
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 设备属性的单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets method
    *
    * @return string
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string $method 设备属性的访问模式。取值范围：RWE，RW，RE，WE，E，W，R。 - R：属性值可读 - W：属性值可写 - E：属性值可订阅，即属性值变化时上报事件
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets description
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
    * @param string|null $description 设备属性的描述。
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
    *
    * @return object|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param object|null $defaultValue 设备属性的默认值。如果设置了默认值，使用该产品创建设备时，会将该属性的默认值写入到该设备的设备影子预期数据中，待设备上线时将该属性默认值下发给设备。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
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

