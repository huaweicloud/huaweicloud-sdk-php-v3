<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlTypeRangeConfigResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlTypeRangeConfigResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isOpen' => 'bool',
            'beginTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isOpen' => null,
        'beginTime' => null
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
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isOpen' => 'is_open',
            'beginTime' => 'begin_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'isOpen' => 'setIsOpen',
            'beginTime' => 'setBeginTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isOpen  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    * beginTime  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'isOpen' => 'getIsOpen',
            'beginTime' => 'getBeginTime'
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
        $this->container['isOpen'] = isset($data['isOpen']) ? $data['isOpen'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
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
    * Gets isOpen
    *  **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    *
    * @return bool|null
    */
    public function getIsOpen()
    {
        return $this->container['isOpen'];
    }

    /**
    * Sets isOpen
    *
    * @param bool|null $isOpen **参数解释**: 是否开启全量SQL。 **取值范围**: - true：已开启。 - false：已关闭。
    *
    * @return $this
    */
    public function setIsOpen($isOpen)
    {
        $this->container['isOpen'] = $isOpen;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**: 开关状态持续的开始时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
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

