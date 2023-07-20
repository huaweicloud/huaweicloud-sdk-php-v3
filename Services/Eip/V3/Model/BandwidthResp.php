<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  - 功能说明：带宽ID
    * size  - 功能说明：带宽大小
    * shareType  - 功能说明：类型  \"WHOLE\"为共享带宽，\"PER\"为独占带宽
    * chargeMode  - 功能说明：带宽计费模式
    * name  - 功能说明：带宽名称
    * billingInfo  - 功能说明：带宽的订单信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'size' => 'int',
            'shareType' => 'string',
            'chargeMode' => 'string',
            'name' => 'string',
            'billingInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  - 功能说明：带宽ID
    * size  - 功能说明：带宽大小
    * shareType  - 功能说明：类型  \"WHOLE\"为共享带宽，\"PER\"为独占带宽
    * chargeMode  - 功能说明：带宽计费模式
    * name  - 功能说明：带宽名称
    * billingInfo  - 功能说明：带宽的订单信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'size' => null,
        'shareType' => null,
        'chargeMode' => null,
        'name' => null,
        'billingInfo' => null
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
    * id  - 功能说明：带宽ID
    * size  - 功能说明：带宽大小
    * shareType  - 功能说明：类型  \"WHOLE\"为共享带宽，\"PER\"为独占带宽
    * chargeMode  - 功能说明：带宽计费模式
    * name  - 功能说明：带宽名称
    * billingInfo  - 功能说明：带宽的订单信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'size' => 'size',
            'shareType' => 'share_type',
            'chargeMode' => 'charge_mode',
            'name' => 'name',
            'billingInfo' => 'billing_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  - 功能说明：带宽ID
    * size  - 功能说明：带宽大小
    * shareType  - 功能说明：类型  \"WHOLE\"为共享带宽，\"PER\"为独占带宽
    * chargeMode  - 功能说明：带宽计费模式
    * name  - 功能说明：带宽名称
    * billingInfo  - 功能说明：带宽的订单信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'size' => 'setSize',
            'shareType' => 'setShareType',
            'chargeMode' => 'setChargeMode',
            'name' => 'setName',
            'billingInfo' => 'setBillingInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  - 功能说明：带宽ID
    * size  - 功能说明：带宽大小
    * shareType  - 功能说明：类型  \"WHOLE\"为共享带宽，\"PER\"为独占带宽
    * chargeMode  - 功能说明：带宽计费模式
    * name  - 功能说明：带宽名称
    * billingInfo  - 功能说明：带宽的订单信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'size' => 'getSize',
            'shareType' => 'getShareType',
            'chargeMode' => 'getChargeMode',
            'name' => 'getName',
            'billingInfo' => 'getBillingInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
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
            if (!is_null($this->container['size']) && ($this->container['size'] > 2000)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shareType']) && (mb_strlen($this->container['shareType']) > 36)) {
                $invalidProperties[] = "invalid value for 'shareType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['shareType']) && (mb_strlen($this->container['shareType']) < 0)) {
                $invalidProperties[] = "invalid value for 'shareType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 0.";
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
    *  - 功能说明：带宽ID
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
    * @param string|null $id - 功能说明：带宽ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets size
    *  - 功能说明：带宽大小
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
    * @param int|null $size - 功能说明：带宽大小
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
    *  - 功能说明：类型  \"WHOLE\"为共享带宽，\"PER\"为独占带宽
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
    * @param string|null $shareType - 功能说明：类型  \"WHOLE\"为共享带宽，\"PER\"为独占带宽
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets chargeMode
    *  - 功能说明：带宽计费模式
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
    * @param string|null $chargeMode - 功能说明：带宽计费模式
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets name
    *  - 功能说明：带宽名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name - 功能说明：带宽名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets billingInfo
    *  - 功能说明：带宽的订单信息
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo - 功能说明：带宽的订单信息
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
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

