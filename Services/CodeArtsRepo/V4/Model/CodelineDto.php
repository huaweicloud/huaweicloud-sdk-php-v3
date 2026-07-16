<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CodelineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CodelineDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * additions  **参数解释：** 增加行数。 **取值范围：** 最小0 **默认取值：** 0
    * deletions  **参数解释：** 删除行数。 **取值范围：** 最小0 **默认取值：** 0
    * date  **参数解释：** 日期，格式'yyyyMMdd',举例：20251030。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'additions' => 'int',
            'deletions' => 'int',
            'date' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * additions  **参数解释：** 增加行数。 **取值范围：** 最小0 **默认取值：** 0
    * deletions  **参数解释：** 删除行数。 **取值范围：** 最小0 **默认取值：** 0
    * date  **参数解释：** 日期，格式'yyyyMMdd',举例：20251030。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'additions' => 'int32',
        'deletions' => 'int32',
        'date' => null
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
    * additions  **参数解释：** 增加行数。 **取值范围：** 最小0 **默认取值：** 0
    * deletions  **参数解释：** 删除行数。 **取值范围：** 最小0 **默认取值：** 0
    * date  **参数解释：** 日期，格式'yyyyMMdd',举例：20251030。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'additions' => 'additions',
            'deletions' => 'deletions',
            'date' => 'date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * additions  **参数解释：** 增加行数。 **取值范围：** 最小0 **默认取值：** 0
    * deletions  **参数解释：** 删除行数。 **取值范围：** 最小0 **默认取值：** 0
    * date  **参数解释：** 日期，格式'yyyyMMdd',举例：20251030。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'additions' => 'setAdditions',
            'deletions' => 'setDeletions',
            'date' => 'setDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * additions  **参数解释：** 增加行数。 **取值范围：** 最小0 **默认取值：** 0
    * deletions  **参数解释：** 删除行数。 **取值范围：** 最小0 **默认取值：** 0
    * date  **参数解释：** 日期，格式'yyyyMMdd',举例：20251030。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'additions' => 'getAdditions',
            'deletions' => 'getDeletions',
            'date' => 'getDate'
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
        $this->container['additions'] = isset($data['additions']) ? $data['additions'] : null;
        $this->container['deletions'] = isset($data['deletions']) ? $data['deletions'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['additions']) && ($this->container['additions'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'additions', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['additions']) && ($this->container['additions'] < 0)) {
                $invalidProperties[] = "invalid value for 'additions', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deletions']) && ($this->container['deletions'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'deletions', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['deletions']) && ($this->container['deletions'] < 0)) {
                $invalidProperties[] = "invalid value for 'deletions', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) > 100)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) < 0)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 0.";
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
    * Gets additions
    *  **参数解释：** 增加行数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getAdditions()
    {
        return $this->container['additions'];
    }

    /**
    * Sets additions
    *
    * @param int|null $additions **参数解释：** 增加行数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return $this
    */
    public function setAdditions($additions)
    {
        $this->container['additions'] = $additions;
        return $this;
    }

    /**
    * Gets deletions
    *  **参数解释：** 删除行数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getDeletions()
    {
        return $this->container['deletions'];
    }

    /**
    * Sets deletions
    *
    * @param int|null $deletions **参数解释：** 删除行数。 **取值范围：** 最小0 **默认取值：** 0
    *
    * @return $this
    */
    public function setDeletions($deletions)
    {
        $this->container['deletions'] = $deletions;
        return $this;
    }

    /**
    * Gets date
    *  **参数解释：** 日期，格式'yyyyMMdd',举例：20251030。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date **参数解释：** 日期，格式'yyyyMMdd',举例：20251030。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
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

