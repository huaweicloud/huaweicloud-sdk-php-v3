<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQosThresholdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQosThresholdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * thresholdType  阈值类型。 * AUDIO：音频告警阈值 * VIDEO：视频告警阈值 * SCREEN：屏幕共享告警阈值 * CPU：CPU告警阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'thresholdType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * thresholdType  阈值类型。 * AUDIO：音频告警阈值 * VIDEO：视频告警阈值 * SCREEN：屏幕共享告警阈值 * CPU：CPU告警阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'thresholdType' => null
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
    * thresholdType  阈值类型。 * AUDIO：音频告警阈值 * VIDEO：视频告警阈值 * SCREEN：屏幕共享告警阈值 * CPU：CPU告警阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'thresholdType' => 'thresholdType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * thresholdType  阈值类型。 * AUDIO：音频告警阈值 * VIDEO：视频告警阈值 * SCREEN：屏幕共享告警阈值 * CPU：CPU告警阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'thresholdType' => 'setThresholdType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * thresholdType  阈值类型。 * AUDIO：音频告警阈值 * VIDEO：视频告警阈值 * SCREEN：屏幕共享告警阈值 * CPU：CPU告警阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'thresholdType' => 'getThresholdType'
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
    const THRESHOLD_TYPE_AUDIO = 'AUDIO';
    const THRESHOLD_TYPE_VIDEO = 'VIDEO';
    const THRESHOLD_TYPE_SCREEN = 'SCREEN';
    const THRESHOLD_TYPE_CPU = 'CPU';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getThresholdTypeAllowableValues()
    {
        return [
            self::THRESHOLD_TYPE_AUDIO,
            self::THRESHOLD_TYPE_VIDEO,
            self::THRESHOLD_TYPE_SCREEN,
            self::THRESHOLD_TYPE_CPU,
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
        $this->container['thresholdType'] = isset($data['thresholdType']) ? $data['thresholdType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['thresholdType'] === null) {
            $invalidProperties[] = "'thresholdType' can't be null";
        }
            $allowedValues = $this->getThresholdTypeAllowableValues();
                if (!is_null($this->container['thresholdType']) && !in_array($this->container['thresholdType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'thresholdType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['thresholdType']) > 16)) {
                $invalidProperties[] = "invalid value for 'thresholdType', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['thresholdType']) < 1)) {
                $invalidProperties[] = "invalid value for 'thresholdType', the character length must be bigger than or equal to 1.";
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
    * Gets thresholdType
    *  阈值类型。 * AUDIO：音频告警阈值 * VIDEO：视频告警阈值 * SCREEN：屏幕共享告警阈值 * CPU：CPU告警阈值
    *
    * @return string
    */
    public function getThresholdType()
    {
        return $this->container['thresholdType'];
    }

    /**
    * Sets thresholdType
    *
    * @param string $thresholdType 阈值类型。 * AUDIO：音频告警阈值 * VIDEO：视频告警阈值 * SCREEN：屏幕共享告警阈值 * CPU：CPU告警阈值
    *
    * @return $this
    */
    public function setThresholdType($thresholdType)
    {
        $this->container['thresholdType'] = $thresholdType;
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

