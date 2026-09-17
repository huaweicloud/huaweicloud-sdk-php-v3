<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dateType  **参数解释**： 日期类型，如每月1号执行则为1th。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateStart  **参数解释**： 开始时间，如：04:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateEnd  **参数解释**： 结束时间，如：08:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dateType' => 'string',
            'dateStart' => 'string',
            'dateEnd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dateType  **参数解释**： 日期类型，如每月1号执行则为1th。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateStart  **参数解释**： 开始时间，如：04:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateEnd  **参数解释**： 结束时间，如：08:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dateType' => null,
        'dateStart' => null,
        'dateEnd' => null
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
    * dateType  **参数解释**： 日期类型，如每月1号执行则为1th。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateStart  **参数解释**： 开始时间，如：04:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateEnd  **参数解释**： 结束时间，如：08:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dateType' => 'date_type',
            'dateStart' => 'date_start',
            'dateEnd' => 'date_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dateType  **参数解释**： 日期类型，如每月1号执行则为1th。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateStart  **参数解释**： 开始时间，如：04:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateEnd  **参数解释**： 结束时间，如：08:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dateType' => 'setDateType',
            'dateStart' => 'setDateStart',
            'dateEnd' => 'setDateEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dateType  **参数解释**： 日期类型，如每月1号执行则为1th。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateStart  **参数解释**： 开始时间，如：04:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dateEnd  **参数解释**： 结束时间，如：08:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dateType' => 'getDateType',
            'dateStart' => 'getDateStart',
            'dateEnd' => 'getDateEnd'
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
        $this->container['dateType'] = isset($data['dateType']) ? $data['dateType'] : null;
        $this->container['dateStart'] = isset($data['dateStart']) ? $data['dateStart'] : null;
        $this->container['dateEnd'] = isset($data['dateEnd']) ? $data['dateEnd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets dateType
    *  **参数解释**： 日期类型，如每月1号执行则为1th。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDateType()
    {
        return $this->container['dateType'];
    }

    /**
    * Sets dateType
    *
    * @param string|null $dateType **参数解释**： 日期类型，如每月1号执行则为1th。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDateType($dateType)
    {
        $this->container['dateType'] = $dateType;
        return $this;
    }

    /**
    * Gets dateStart
    *  **参数解释**： 开始时间，如：04:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDateStart()
    {
        return $this->container['dateStart'];
    }

    /**
    * Sets dateStart
    *
    * @param string|null $dateStart **参数解释**： 开始时间，如：04:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDateStart($dateStart)
    {
        $this->container['dateStart'] = $dateStart;
        return $this;
    }

    /**
    * Gets dateEnd
    *  **参数解释**： 结束时间，如：08:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDateEnd()
    {
        return $this->container['dateEnd'];
    }

    /**
    * Sets dateEnd
    *
    * @param string|null $dateEnd **参数解释**： 结束时间，如：08:00:00。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDateEnd($dateEnd)
    {
        $this->container['dateEnd'] = $dateEnd;
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

