<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsapTableDisplaySettingDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsapTableDisplaySettingDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columns  表格列展示列表
    * format  **参数解释**: 表展示设置 - TABLE 表展示 - RAW 原始数据展示  **约束限制** 不涉及 **取值范围**: - TABLE - RAW  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columns' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDisplaySettingDto[]',
            'format' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columns  表格列展示列表
    * format  **参数解释**: 表展示设置 - TABLE 表展示 - RAW 原始数据展示  **约束限制** 不涉及 **取值范围**: - TABLE - RAW  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columns' => null,
        'format' => null
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
    * columns  表格列展示列表
    * format  **参数解释**: 表展示设置 - TABLE 表展示 - RAW 原始数据展示  **约束限制** 不涉及 **取值范围**: - TABLE - RAW  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columns' => 'columns',
            'format' => 'format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columns  表格列展示列表
    * format  **参数解释**: 表展示设置 - TABLE 表展示 - RAW 原始数据展示  **约束限制** 不涉及 **取值范围**: - TABLE - RAW  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'columns' => 'setColumns',
            'format' => 'setFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columns  表格列展示列表
    * format  **参数解释**: 表展示设置 - TABLE 表展示 - RAW 原始数据展示  **约束限制** 不涉及 **取值范围**: - TABLE - RAW  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'columns' => 'getColumns',
            'format' => 'getFormat'
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
    const FORMAT_TABLE = 'TABLE';
    const FORMAT_RAW = 'RAW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_TABLE,
            self::FORMAT_RAW,
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
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
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
    * Gets columns
    *  表格列展示列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDisplaySettingDto[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDisplaySettingDto[]|null $columns 表格列展示列表
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets format
    *  **参数解释**: 表展示设置 - TABLE 表展示 - RAW 原始数据展示  **约束限制** 不涉及 **取值范围**: - TABLE - RAW  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format **参数解释**: 表展示设置 - TABLE 表展示 - RAW 原始数据展示  **约束限制** 不涉及 **取值范围**: - TABLE - RAW  **默认值** 不涉及
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
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

