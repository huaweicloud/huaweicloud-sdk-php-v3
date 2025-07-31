<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentDimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentDimension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 维度名称。 **取值范围**： 枚举类型，mount_point:挂载点，disk:磁盘，proc:进程，gpu:显卡，raid:RAID控制器。
    * value  **参数解释**： 维度值。 **取值范围**： 字符串长度为32。
    * originValue  **参数解释**： 实际维度信息。 **取值范围** 字符串长度在 1 到 1024 之间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'originValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 维度名称。 **取值范围**： 枚举类型，mount_point:挂载点，disk:磁盘，proc:进程，gpu:显卡，raid:RAID控制器。
    * value  **参数解释**： 维度值。 **取值范围**： 字符串长度为32。
    * originValue  **参数解释**： 实际维度信息。 **取值范围** 字符串长度在 1 到 1024 之间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'originValue' => null
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
    * name  **参数解释**： 维度名称。 **取值范围**： 枚举类型，mount_point:挂载点，disk:磁盘，proc:进程，gpu:显卡，raid:RAID控制器。
    * value  **参数解释**： 维度值。 **取值范围**： 字符串长度为32。
    * originValue  **参数解释**： 实际维度信息。 **取值范围** 字符串长度在 1 到 1024 之间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'originValue' => 'origin_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 维度名称。 **取值范围**： 枚举类型，mount_point:挂载点，disk:磁盘，proc:进程，gpu:显卡，raid:RAID控制器。
    * value  **参数解释**： 维度值。 **取值范围**： 字符串长度为32。
    * originValue  **参数解释**： 实际维度信息。 **取值范围** 字符串长度在 1 到 1024 之间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'originValue' => 'setOriginValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 维度名称。 **取值范围**： 枚举类型，mount_point:挂载点，disk:磁盘，proc:进程，gpu:显卡，raid:RAID控制器。
    * value  **参数解释**： 维度值。 **取值范围**： 字符串长度为32。
    * originValue  **参数解释**： 实际维度信息。 **取值范围** 字符串长度在 1 到 1024 之间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'originValue' => 'getOriginValue'
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
    const NAME_MOUNT_POINT = 'mount_point';
    const NAME_DISK = 'disk';
    const NAME_PROC = 'proc';
    const NAME_GPU = 'gpu';
    const NAME_RAID = 'raid';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_MOUNT_POINT,
            self::NAME_DISK,
            self::NAME_PROC,
            self::NAME_GPU,
            self::NAME_RAID,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['originValue'] = isset($data['originValue']) ? $data['originValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 32)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 32)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['originValue']) && (mb_strlen($this->container['originValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'originValue', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['originValue']) && (mb_strlen($this->container['originValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'originValue', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  **参数解释**： 维度名称。 **取值范围**： 枚举类型，mount_point:挂载点，disk:磁盘，proc:进程，gpu:显卡，raid:RAID控制器。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 维度名称。 **取值范围**： 枚举类型，mount_point:挂载点，disk:磁盘，proc:进程，gpu:显卡，raid:RAID控制器。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 维度值。 **取值范围**： 字符串长度为32。
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
    * @param string|null $value **参数解释**： 维度值。 **取值范围**： 字符串长度为32。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets originValue
    *  **参数解释**： 实际维度信息。 **取值范围** 字符串长度在 1 到 1024 之间。
    *
    * @return string|null
    */
    public function getOriginValue()
    {
        return $this->container['originValue'];
    }

    /**
    * Sets originValue
    *
    * @param string|null $originValue **参数解释**： 实际维度信息。 **取值范围** 字符串长度在 1 到 1024 之间。
    *
    * @return $this
    */
    public function setOriginValue($originValue)
    {
        $this->container['originValue'] = $originValue;
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

