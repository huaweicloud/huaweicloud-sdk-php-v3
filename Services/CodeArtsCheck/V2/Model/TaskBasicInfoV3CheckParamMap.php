<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskBasicInfoV3CheckParamMap implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskBasicInfoV3_checkParamMap';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * param1  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    * param2  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'param1' => 'string',
            'param2' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * param1  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    * param2  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'param1' => null,
        'param2' => null
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
    * param1  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    * param2  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'param1' => 'param1',
            'param2' => 'param2'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * param1  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    * param2  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'param1' => 'setParam1',
            'param2' => 'setParam2'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * param1  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    * param2  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'param1' => 'getParam1',
            'param2' => 'getParam2'
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
        $this->container['param1'] = isset($data['param1']) ? $data['param1'] : null;
        $this->container['param2'] = isset($data['param2']) ? $data['param2'] : null;
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
    * Gets param1
    *  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @return string|null
    */
    public function getParam1()
    {
        return $this->container['param1'];
    }

    /**
    * Sets param1
    *
    * @param string|null $param1 **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @return $this
    */
    public function setParam1($param1)
    {
        $this->container['param1'] = $param1;
        return $this;
    }

    /**
    * Gets param2
    *  **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @return string|null
    */
    public function getParam2()
    {
        return $this->container['param2'];
    }

    /**
    * Sets param2
    *
    * @param string|null $param2 **参数解释：** 字段的name为自定义参数的Key，字段的值为自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @return $this
    */
    public function setParam2($param2)
    {
        $this->container['param2'] = $param2;
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

