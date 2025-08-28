<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TimingRangeConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TimingRangeConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeRange  **参数解释**: 自动关闭防护的时间段范围 **取值范围**: 字符长度0-512位
    * description  **参数解释**: 自动关闭防护的时间段描述 **取值范围**: 字符长度0-512位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeRange' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeRange  **参数解释**: 自动关闭防护的时间段范围 **取值范围**: 字符长度0-512位
    * description  **参数解释**: 自动关闭防护的时间段描述 **取值范围**: 字符长度0-512位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeRange' => null,
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
    * timeRange  **参数解释**: 自动关闭防护的时间段范围 **取值范围**: 字符长度0-512位
    * description  **参数解释**: 自动关闭防护的时间段描述 **取值范围**: 字符长度0-512位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeRange' => 'time_range',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeRange  **参数解释**: 自动关闭防护的时间段范围 **取值范围**: 字符长度0-512位
    * description  **参数解释**: 自动关闭防护的时间段描述 **取值范围**: 字符长度0-512位
    *
    * @var string[]
    */
    protected static $setters = [
            'timeRange' => 'setTimeRange',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeRange  **参数解释**: 自动关闭防护的时间段范围 **取值范围**: 字符长度0-512位
    * description  **参数解释**: 自动关闭防护的时间段描述 **取值范围**: 字符长度0-512位
    *
    * @var string[]
    */
    protected static $getters = [
            'timeRange' => 'getTimeRange',
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
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
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
            if (!is_null($this->container['timeRange']) && (mb_strlen($this->container['timeRange']) > 512)) {
                $invalidProperties[] = "invalid value for 'timeRange', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['timeRange']) && (mb_strlen($this->container['timeRange']) < 0)) {
                $invalidProperties[] = "invalid value for 'timeRange', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
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
    * Gets timeRange
    *  **参数解释**: 自动关闭防护的时间段范围 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param string|null $timeRange **参数解释**: 自动关闭防护的时间段范围 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 自动关闭防护的时间段描述 **取值范围**: 字符长度0-512位
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
    * @param string|null $description **参数解释**: 自动关闭防护的时间段描述 **取值范围**: 字符长度0-512位
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

