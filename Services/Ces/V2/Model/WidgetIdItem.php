<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WidgetIdItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WidgetIdItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * widgetId  **参数解释** 视图id **取值范围** 字符串必须以wg开头，后跟22个字母和数字，总长度为24个字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'widgetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * widgetId  **参数解释** 视图id **取值范围** 字符串必须以wg开头，后跟22个字母和数字，总长度为24个字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'widgetId' => null
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
    * widgetId  **参数解释** 视图id **取值范围** 字符串必须以wg开头，后跟22个字母和数字，总长度为24个字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'widgetId' => 'widget_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * widgetId  **参数解释** 视图id **取值范围** 字符串必须以wg开头，后跟22个字母和数字，总长度为24个字符
    *
    * @var string[]
    */
    protected static $setters = [
            'widgetId' => 'setWidgetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * widgetId  **参数解释** 视图id **取值范围** 字符串必须以wg开头，后跟22个字母和数字，总长度为24个字符
    *
    * @var string[]
    */
    protected static $getters = [
            'widgetId' => 'getWidgetId'
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
        $this->container['widgetId'] = isset($data['widgetId']) ? $data['widgetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['widgetId']) && !preg_match("/^wg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['widgetId'])) {
                $invalidProperties[] = "invalid value for 'widgetId', must be conform to the pattern /^wg([a-z]|[A-Z]|[0-9]){22}$/.";
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
    * Gets widgetId
    *  **参数解释** 视图id **取值范围** 字符串必须以wg开头，后跟22个字母和数字，总长度为24个字符
    *
    * @return string|null
    */
    public function getWidgetId()
    {
        return $this->container['widgetId'];
    }

    /**
    * Sets widgetId
    *
    * @param string|null $widgetId **参数解释** 视图id **取值范围** 字符串必须以wg开头，后跟22个字母和数字，总长度为24个字符
    *
    * @return $this
    */
    public function setWidgetId($widgetId)
    {
        $this->container['widgetId'] = $widgetId;
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

