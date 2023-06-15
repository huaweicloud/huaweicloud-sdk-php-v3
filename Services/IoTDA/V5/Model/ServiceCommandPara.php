<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceCommandPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceCommandPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paraName  **参数说明**：参数的名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * dataType  **参数说明**：参数的数据类型。 **取值范围**：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
    * required  **参数说明**：参数是否必选。默认为false。
    * enumList  **参数说明**：参数的枚举值列表。
    * min  **参数说明**：参数的最小值。 **取值范围**：长度1-16。
    * max  **参数说明**：参数的最大值。 **取值范围**：长度1-16。
    * maxLength  **参数说明**：参数的最大长度。
    * step  **参数说明**：参数的步长。
    * unit  **参数说明**：参数的单位。 **取值范围**：长度不超过16。
    * description  **参数说明**：参数的描述。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paraName' => 'string',
            'dataType' => 'string',
            'required' => 'bool',
            'enumList' => 'string[]',
            'min' => 'string',
            'max' => 'string',
            'maxLength' => 'int',
            'step' => 'double',
            'unit' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paraName  **参数说明**：参数的名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * dataType  **参数说明**：参数的数据类型。 **取值范围**：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
    * required  **参数说明**：参数是否必选。默认为false。
    * enumList  **参数说明**：参数的枚举值列表。
    * min  **参数说明**：参数的最小值。 **取值范围**：长度1-16。
    * max  **参数说明**：参数的最大值。 **取值范围**：长度1-16。
    * maxLength  **参数说明**：参数的最大长度。
    * step  **参数说明**：参数的步长。
    * unit  **参数说明**：参数的单位。 **取值范围**：长度不超过16。
    * description  **参数说明**：参数的描述。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paraName' => null,
        'dataType' => null,
        'required' => null,
        'enumList' => null,
        'min' => null,
        'max' => null,
        'maxLength' => 'int32',
        'step' => 'double',
        'unit' => null,
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
    * paraName  **参数说明**：参数的名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * dataType  **参数说明**：参数的数据类型。 **取值范围**：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
    * required  **参数说明**：参数是否必选。默认为false。
    * enumList  **参数说明**：参数的枚举值列表。
    * min  **参数说明**：参数的最小值。 **取值范围**：长度1-16。
    * max  **参数说明**：参数的最大值。 **取值范围**：长度1-16。
    * maxLength  **参数说明**：参数的最大长度。
    * step  **参数说明**：参数的步长。
    * unit  **参数说明**：参数的单位。 **取值范围**：长度不超过16。
    * description  **参数说明**：参数的描述。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paraName' => 'para_name',
            'dataType' => 'data_type',
            'required' => 'required',
            'enumList' => 'enum_list',
            'min' => 'min',
            'max' => 'max',
            'maxLength' => 'max_length',
            'step' => 'step',
            'unit' => 'unit',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paraName  **参数说明**：参数的名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * dataType  **参数说明**：参数的数据类型。 **取值范围**：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
    * required  **参数说明**：参数是否必选。默认为false。
    * enumList  **参数说明**：参数的枚举值列表。
    * min  **参数说明**：参数的最小值。 **取值范围**：长度1-16。
    * max  **参数说明**：参数的最大值。 **取值范围**：长度1-16。
    * maxLength  **参数说明**：参数的最大长度。
    * step  **参数说明**：参数的步长。
    * unit  **参数说明**：参数的单位。 **取值范围**：长度不超过16。
    * description  **参数说明**：参数的描述。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'paraName' => 'setParaName',
            'dataType' => 'setDataType',
            'required' => 'setRequired',
            'enumList' => 'setEnumList',
            'min' => 'setMin',
            'max' => 'setMax',
            'maxLength' => 'setMaxLength',
            'step' => 'setStep',
            'unit' => 'setUnit',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paraName  **参数说明**：参数的名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * dataType  **参数说明**：参数的数据类型。 **取值范围**：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
    * required  **参数说明**：参数是否必选。默认为false。
    * enumList  **参数说明**：参数的枚举值列表。
    * min  **参数说明**：参数的最小值。 **取值范围**：长度1-16。
    * max  **参数说明**：参数的最大值。 **取值范围**：长度1-16。
    * maxLength  **参数说明**：参数的最大长度。
    * step  **参数说明**：参数的步长。
    * unit  **参数说明**：参数的单位。 **取值范围**：长度不超过16。
    * description  **参数说明**：参数的描述。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'paraName' => 'getParaName',
            'dataType' => 'getDataType',
            'required' => 'getRequired',
            'enumList' => 'getEnumList',
            'min' => 'getMin',
            'max' => 'getMax',
            'maxLength' => 'getMaxLength',
            'step' => 'getStep',
            'unit' => 'getUnit',
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
        $this->container['paraName'] = isset($data['paraName']) ? $data['paraName'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : false;
        $this->container['enumList'] = isset($data['enumList']) ? $data['enumList'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
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
        if ($this->container['paraName'] === null) {
            $invalidProperties[] = "'paraName' can't be null";
        }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/", $this->container['paraName'])) {
                $invalidProperties[] = "invalid value for 'paraName', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/.";
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
            if (!is_null($this->container['description']) && !preg_match("/^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。￥$！【】’‘“”（）？…~\/]{1,128}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。￥$！【】’‘“”（）？…~\/]{1,128}$/.";
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
    * Gets paraName
    *  **参数说明**：参数的名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    *
    * @return string
    */
    public function getParaName()
    {
        return $this->container['paraName'];
    }

    /**
    * Sets paraName
    *
    * @param string $paraName **参数说明**：参数的名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    *
    * @return $this
    */
    public function setParaName($paraName)
    {
        $this->container['paraName'] = $paraName;
        return $this;
    }

    /**
    * Gets dataType
    *  **参数说明**：参数的数据类型。 **取值范围**：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
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
    * @param string $dataType **参数说明**：参数的数据类型。 **取值范围**：int，long，decimal，string，DateTime，jsonObject，enum，boolean，string list。
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
    *  **参数说明**：参数是否必选。默认为false。
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
    * @param bool|null $required **参数说明**：参数是否必选。默认为false。
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
    *  **参数说明**：参数的枚举值列表。
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
    * @param string[]|null $enumList **参数说明**：参数的枚举值列表。
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
    *  **参数说明**：参数的最小值。 **取值范围**：长度1-16。
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
    * @param string|null $min **参数说明**：参数的最小值。 **取值范围**：长度1-16。
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
    *  **参数说明**：参数的最大值。 **取值范围**：长度1-16。
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
    * @param string|null $max **参数说明**：参数的最大值。 **取值范围**：长度1-16。
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
    *  **参数说明**：参数的最大长度。
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
    * @param int|null $maxLength **参数说明**：参数的最大长度。
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
    *  **参数说明**：参数的步长。
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
    * @param double|null $step **参数说明**：参数的步长。
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
    *  **参数说明**：参数的单位。 **取值范围**：长度不超过16。
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
    * @param string|null $unit **参数说明**：参数的单位。 **取值范围**：长度不超过16。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：参数的描述。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
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
    * @param string|null $description **参数说明**：参数的描述。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
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

