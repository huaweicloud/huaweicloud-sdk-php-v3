<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTenantDict implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTenantDict';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  - 功能说明：弹性公网IP的唯一标识
    * chargeMode  带宽的计费模式
    * minSize  该类型带宽可购买的最小size
    * maxSize  该类型带宽可购买的最大size
    * extLimit  extLimit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'chargeMode' => 'string',
            'minSize' => 'int',
            'maxSize' => 'int',
            'extLimit' => '\HuaweiCloud\SDK\Eip\V3\Model\ExtLimitPojo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  - 功能说明：弹性公网IP的唯一标识
    * chargeMode  带宽的计费模式
    * minSize  该类型带宽可购买的最小size
    * maxSize  该类型带宽可购买的最大size
    * extLimit  extLimit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'chargeMode' => null,
        'minSize' => null,
        'maxSize' => null,
        'extLimit' => null
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
    * id  - 功能说明：弹性公网IP的唯一标识
    * chargeMode  带宽的计费模式
    * minSize  该类型带宽可购买的最小size
    * maxSize  该类型带宽可购买的最大size
    * extLimit  extLimit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'chargeMode' => 'charge_mode',
            'minSize' => 'min_size',
            'maxSize' => 'max_size',
            'extLimit' => 'ext_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  - 功能说明：弹性公网IP的唯一标识
    * chargeMode  带宽的计费模式
    * minSize  该类型带宽可购买的最小size
    * maxSize  该类型带宽可购买的最大size
    * extLimit  extLimit
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'chargeMode' => 'setChargeMode',
            'minSize' => 'setMinSize',
            'maxSize' => 'setMaxSize',
            'extLimit' => 'setExtLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  - 功能说明：弹性公网IP的唯一标识
    * chargeMode  带宽的计费模式
    * minSize  该类型带宽可购买的最小size
    * maxSize  该类型带宽可购买的最大size
    * extLimit  extLimit
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'chargeMode' => 'getChargeMode',
            'minSize' => 'getMinSize',
            'maxSize' => 'getMaxSize',
            'extLimit' => 'getExtLimit'
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
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE_TRAFFIC = 'traffic';
    

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['minSize'] = isset($data['minSize']) ? $data['minSize'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
        $this->container['extLimit'] = isset($data['extLimit']) ? $data['extLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
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
    * Gets id
    *  - 功能说明：弹性公网IP的唯一标识
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
    * @param string|null $id - 功能说明：弹性公网IP的唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets chargeMode
    *  带宽的计费模式
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
    * @param string|null $chargeMode 带宽的计费模式
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets minSize
    *  该类型带宽可购买的最小size
    *
    * @return int|null
    */
    public function getMinSize()
    {
        return $this->container['minSize'];
    }

    /**
    * Sets minSize
    *
    * @param int|null $minSize 该类型带宽可购买的最小size
    *
    * @return $this
    */
    public function setMinSize($minSize)
    {
        $this->container['minSize'] = $minSize;
        return $this;
    }

    /**
    * Gets maxSize
    *  该类型带宽可购买的最大size
    *
    * @return int|null
    */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
    * Sets maxSize
    *
    * @param int|null $maxSize 该类型带宽可购买的最大size
    *
    * @return $this
    */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;
        return $this;
    }

    /**
    * Gets extLimit
    *  extLimit
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\ExtLimitPojo|null
    */
    public function getExtLimit()
    {
        return $this->container['extLimit'];
    }

    /**
    * Sets extLimit
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\ExtLimitPojo|null $extLimit extLimit
    *
    * @return $this
    */
    public function setExtLimit($extLimit)
    {
        $this->container['extLimit'] = $extLimit;
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

