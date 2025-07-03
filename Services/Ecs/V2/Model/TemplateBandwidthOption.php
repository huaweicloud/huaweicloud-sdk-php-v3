<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateBandwidthOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateBandwidthOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shareType  带宽类型
    * size  带宽大小
    * chargeMode  计费类型
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时可以指定之前的共享带宽创建
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shareType' => 'string',
            'size' => 'int',
            'chargeMode' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shareType  带宽类型
    * size  带宽大小
    * chargeMode  计费类型
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时可以指定之前的共享带宽创建
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shareType' => null,
        'size' => null,
        'chargeMode' => null,
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
    * shareType  带宽类型
    * size  带宽大小
    * chargeMode  计费类型
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时可以指定之前的共享带宽创建
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shareType' => 'share_type',
            'size' => 'size',
            'chargeMode' => 'charge_mode',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shareType  带宽类型
    * size  带宽大小
    * chargeMode  计费类型
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时可以指定之前的共享带宽创建
    *
    * @var string[]
    */
    protected static $setters = [
            'shareType' => 'setShareType',
            'size' => 'setSize',
            'chargeMode' => 'setChargeMode',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shareType  带宽类型
    * size  带宽大小
    * chargeMode  计费类型
    * id  带宽ID，创建WHOLE类型带宽的弹性IP时可以指定之前的共享带宽创建
    *
    * @var string[]
    */
    protected static $getters = [
            'shareType' => 'getShareType',
            'size' => 'getSize',
            'chargeMode' => 'getChargeMode',
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
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE_TRAFFIC = 'traffic';
    

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
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
            self::CHARGE_MODE_TRAFFIC,
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
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
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
            $allowedValues = $this->getShareTypeAllowableValues();
                if (!is_null($this->container['shareType']) && !in_array($this->container['shareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'shareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets shareType
    *  带宽类型
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
    * @param string|null $shareType 带宽类型
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets size
    *  带宽大小
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
    * @param int|null $size 带宽大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费类型
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 计费类型
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets id
    *  带宽ID，创建WHOLE类型带宽的弹性IP时可以指定之前的共享带宽创建
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
    * @param string|null $id 带宽ID，创建WHOLE类型带宽的弹性IP时可以指定之前的共享带宽创建
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

