<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PopUpInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'popUpInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * popup  是否弹窗
    * timeLimit  包周期计费时长上限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'popup' => 'bool',
            'timeLimit' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * popup  是否弹窗
    * timeLimit  包周期计费时长上限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'popup' => null,
        'timeLimit' => null
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
    * popup  是否弹窗
    * timeLimit  包周期计费时长上限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'popup' => 'popup',
            'timeLimit' => 'time_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * popup  是否弹窗
    * timeLimit  包周期计费时长上限
    *
    * @var string[]
    */
    protected static $setters = [
            'popup' => 'setPopup',
            'timeLimit' => 'setTimeLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * popup  是否弹窗
    * timeLimit  包周期计费时长上限
    *
    * @var string[]
    */
    protected static $getters = [
            'popup' => 'getPopup',
            'timeLimit' => 'getTimeLimit'
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
        $this->container['popup'] = isset($data['popup']) ? $data['popup'] : null;
        $this->container['timeLimit'] = isset($data['timeLimit']) ? $data['timeLimit'] : null;
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
    * Gets popup
    *  是否弹窗
    *
    * @return bool|null
    */
    public function getPopup()
    {
        return $this->container['popup'];
    }

    /**
    * Sets popup
    *
    * @param bool|null $popup 是否弹窗
    *
    * @return $this
    */
    public function setPopup($popup)
    {
        $this->container['popup'] = $popup;
        return $this;
    }

    /**
    * Gets timeLimit
    *  包周期计费时长上限
    *
    * @return object|null
    */
    public function getTimeLimit()
    {
        return $this->container['timeLimit'];
    }

    /**
    * Sets timeLimit
    *
    * @param object|null $timeLimit 包周期计费时长上限
    *
    * @return $this
    */
    public function setTimeLimit($timeLimit)
    {
        $this->container['timeLimit'] = $timeLimit;
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

