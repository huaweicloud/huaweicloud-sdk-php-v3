<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  带宽（Mbit/s）。
    * shareType  带宽的共享类型。共享类型枚举：PER，表示独享。目前只支持独享。
    * chargingMode  带宽的计费类型。字段值为“bandwidth”，表示按带宽计费。字段值为“traffic”，表示按流量计费。
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时指定的共享带宽。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'shareType' => 'string',
            'chargingMode' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  带宽（Mbit/s）。
    * shareType  带宽的共享类型。共享类型枚举：PER，表示独享。目前只支持独享。
    * chargingMode  带宽的计费类型。字段值为“bandwidth”，表示按带宽计费。字段值为“traffic”，表示按流量计费。
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时指定的共享带宽。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => null,
        'shareType' => null,
        'chargingMode' => null,
        'id' => null
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
    * size  带宽（Mbit/s）。
    * shareType  带宽的共享类型。共享类型枚举：PER，表示独享。目前只支持独享。
    * chargingMode  带宽的计费类型。字段值为“bandwidth”，表示按带宽计费。字段值为“traffic”，表示按流量计费。
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时指定的共享带宽。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'shareType' => 'share_type',
            'chargingMode' => 'charging_mode',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  带宽（Mbit/s）。
    * shareType  带宽的共享类型。共享类型枚举：PER，表示独享。目前只支持独享。
    * chargingMode  带宽的计费类型。字段值为“bandwidth”，表示按带宽计费。字段值为“traffic”，表示按流量计费。
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时指定的共享带宽。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'shareType' => 'setShareType',
            'chargingMode' => 'setChargingMode',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  带宽（Mbit/s）。
    * shareType  带宽的共享类型。共享类型枚举：PER，表示独享。目前只支持独享。
    * chargingMode  带宽的计费类型。字段值为“bandwidth”，表示按带宽计费。字段值为“traffic”，表示按流量计费。
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时指定的共享带宽。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'shareType' => 'getShareType',
            'chargingMode' => 'getChargingMode',
            'id' => 'getId'
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
    const SHARE_TYPE_PER = 'PER';
    const SHARE_TYPE_WHOLE = 'WHOLE';
    const CHARGING_MODE_BANDWIDTH = 'bandwidth';
    const CHARGING_MODE_TRAFFIC = 'traffic';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getShareTypeAllowableValues()
    {
        return [
            self::SHARE_TYPE_PER,
            self::SHARE_TYPE_WHOLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_BANDWIDTH,
            self::CHARGING_MODE_TRAFFIC,
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['size']) && ($this->container['size'] > 300)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getShareTypeAllowableValues();
                if (!is_null($this->container['shareType']) && !in_array($this->container['shareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'shareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['id']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets size
    *  带宽（Mbit/s）。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 带宽（Mbit/s）。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets shareType
    *  带宽的共享类型。共享类型枚举：PER，表示独享。目前只支持独享。
    *
    * @return string|null
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string|null $shareType 带宽的共享类型。共享类型枚举：PER，表示独享。目前只支持独享。
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets chargingMode
    *  带宽的计费类型。字段值为“bandwidth”，表示按带宽计费。字段值为“traffic”，表示按流量计费。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 带宽的计费类型。字段值为“bandwidth”，表示按带宽计费。字段值为“traffic”，表示按流量计费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets id
    *  带宽ID，创建WHOLE类型带宽的弹性IP时指定的共享带宽。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 带宽ID，创建WHOLE类型带宽的弹性IP时指定的共享带宽。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

