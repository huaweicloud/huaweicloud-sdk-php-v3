<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogCounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogCounts';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * num  **参数解释：** 子时间区间的日志条数。 **取值范围：** 不涉及。
    * startTime  **参数解释：** 子时间区间的起始时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 子时间区间的结束时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'num' => 'int',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * num  **参数解释：** 子时间区间的日志条数。 **取值范围：** 不涉及。
    * startTime  **参数解释：** 子时间区间的起始时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 子时间区间的结束时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'num' => 'int32',
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * num  **参数解释：** 子时间区间的日志条数。 **取值范围：** 不涉及。
    * startTime  **参数解释：** 子时间区间的起始时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 子时间区间的结束时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'num' => 'num',
            'startTime' => 'startTime',
            'endTime' => 'endTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * num  **参数解释：** 子时间区间的日志条数。 **取值范围：** 不涉及。
    * startTime  **参数解释：** 子时间区间的起始时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 子时间区间的结束时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'num' => 'setNum',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * num  **参数解释：** 子时间区间的日志条数。 **取值范围：** 不涉及。
    * startTime  **参数解释：** 子时间区间的起始时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 子时间区间的结束时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'num' => 'getNum',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets num
    *  **参数解释：** 子时间区间的日志条数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num **参数解释：** 子时间区间的日志条数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释：** 子时间区间的起始时间。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释：** 子时间区间的起始时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释：** 子时间区间的结束时间。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释：** 子时间区间的结束时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

