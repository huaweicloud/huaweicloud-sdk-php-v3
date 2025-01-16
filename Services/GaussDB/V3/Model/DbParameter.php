<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramName  参数名称。
    * dataType  参数类型。
    * defaultValue  参数默认值。
    * valueRange  参数取值范围。
    * description  参数描述。
    * isModifiable  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramName' => 'string',
            'dataType' => 'string',
            'defaultValue' => 'string',
            'valueRange' => 'string',
            'description' => 'string',
            'isModifiable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramName  参数名称。
    * dataType  参数类型。
    * defaultValue  参数默认值。
    * valueRange  参数取值范围。
    * description  参数描述。
    * isModifiable  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramName' => null,
        'dataType' => null,
        'defaultValue' => null,
        'valueRange' => null,
        'description' => null,
        'isModifiable' => null
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
    * dataType  参数类型。
    * defaultValue  参数默认值。
    * valueRange  参数取值范围。
    * description  参数描述。
    * isModifiable  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramName' => 'param_name',
            'dataType' => 'data_type',
            'defaultValue' => 'default_value',
            'valueRange' => 'value_range',
            'description' => 'description',
            'isModifiable' => 'is_modifiable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramName  参数名称。
    * dataType  参数类型。
    * defaultValue  参数默认值。
    * valueRange  参数取值范围。
    * description  参数描述。
    * isModifiable  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramName' => 'setParamName',
            'dataType' => 'setDataType',
            'defaultValue' => 'setDefaultValue',
            'valueRange' => 'setValueRange',
            'description' => 'setDescription',
            'isModifiable' => 'setIsModifiable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramName  参数名称。
    * dataType  参数类型。
    * defaultValue  参数默认值。
    * valueRange  参数取值范围。
    * description  参数描述。
    * isModifiable  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramName' => 'getParamName',
            'dataType' => 'getDataType',
            'defaultValue' => 'getDefaultValue',
            'valueRange' => 'getValueRange',
            'description' => 'getDescription',
            'isModifiable' => 'getIsModifiable'
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
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isModifiable'] = isset($data['isModifiable']) ? $data['isModifiable'] : null;
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
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) > 10)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) < 2)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['valueRange']) && (mb_strlen($this->container['valueRange']) > 130)) {
                $invalidProperties[] = "invalid value for 'valueRange', the character length must be smaller than or equal to 130.";
            }
            if (!is_null($this->container['valueRange']) && (mb_strlen($this->container['valueRange']) < 0)) {
                $invalidProperties[] = "invalid value for 'valueRange', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * @return string|null
    */
    public function getParamName()
    {
        return $this->container['paramName'];
    }

    /**
    * Sets paramName
    *
    * @param string|null $paramName 参数名称。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets dataType
    *  参数类型。
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 参数类型。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets defaultValue
    *  参数默认值。
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
    * @param string|null $defaultValue 参数默认值。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets valueRange
    *  参数取值范围。
    *
    * @return string|null
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string|null $valueRange 参数取值范围。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
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
    * Gets isModifiable
    *  **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getIsModifiable()
    {
        return $this->container['isModifiable'];
    }

    /**
    * Sets isModifiable
    *
    * @param string|null $isModifiable **参数解释**：  新增子任务的场景，用于区分库参数是否支持修改。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setIsModifiable($isModifiable)
    {
        $this->container['isModifiable'] = $isModifiable;
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

