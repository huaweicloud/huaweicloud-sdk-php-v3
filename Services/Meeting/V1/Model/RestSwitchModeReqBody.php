<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestSwitchModeReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestSwitchModeReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchMode  会议显示策略。 - Fixed: 固定广播与会者 - VAS: 声控切换
    * imageType  画面类型。单画面设置只针对声控模式。 - 0: 单画面 - 1: 多画面
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchMode' => 'string',
            'imageType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchMode  会议显示策略。 - Fixed: 固定广播与会者 - VAS: 声控切换
    * imageType  画面类型。单画面设置只针对声控模式。 - 0: 单画面 - 1: 多画面
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchMode' => null,
        'imageType' => 'int32'
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
    * switchMode  会议显示策略。 - Fixed: 固定广播与会者 - VAS: 声控切换
    * imageType  画面类型。单画面设置只针对声控模式。 - 0: 单画面 - 1: 多画面
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchMode' => 'switchMode',
            'imageType' => 'imageType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchMode  会议显示策略。 - Fixed: 固定广播与会者 - VAS: 声控切换
    * imageType  画面类型。单画面设置只针对声控模式。 - 0: 单画面 - 1: 多画面
    *
    * @var string[]
    */
    protected static $setters = [
            'switchMode' => 'setSwitchMode',
            'imageType' => 'setImageType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchMode  会议显示策略。 - Fixed: 固定广播与会者 - VAS: 声控切换
    * imageType  画面类型。单画面设置只针对声控模式。 - 0: 单画面 - 1: 多画面
    *
    * @var string[]
    */
    protected static $getters = [
            'switchMode' => 'getSwitchMode',
            'imageType' => 'getImageType'
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
        $this->container['switchMode'] = isset($data['switchMode']) ? $data['switchMode'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['switchMode'] === null) {
            $invalidProperties[] = "'switchMode' can't be null";
        }
        if ($this->container['imageType'] === null) {
            $invalidProperties[] = "'imageType' can't be null";
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
    * Gets switchMode
    *  会议显示策略。 - Fixed: 固定广播与会者 - VAS: 声控切换
    *
    * @return string
    */
    public function getSwitchMode()
    {
        return $this->container['switchMode'];
    }

    /**
    * Sets switchMode
    *
    * @param string $switchMode 会议显示策略。 - Fixed: 固定广播与会者 - VAS: 声控切换
    *
    * @return $this
    */
    public function setSwitchMode($switchMode)
    {
        $this->container['switchMode'] = $switchMode;
        return $this;
    }

    /**
    * Gets imageType
    *  画面类型。单画面设置只针对声控模式。 - 0: 单画面 - 1: 多画面
    *
    * @return int
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param int $imageType 画面类型。单画面设置只针对声控模式。 - 0: 单画面 - 1: 多画面
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
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

