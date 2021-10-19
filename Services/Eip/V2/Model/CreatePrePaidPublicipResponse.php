<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrePaidPublicipResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrePaidPublicipResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicip  publicip
    * orderId  订单号（预付费场景返回该字段）
    * publicipId  弹性公网IP的ID（预付费场景返回该字段）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicip' => '\HuaweiCloud\SDK\Eip\V2\Model\PublicipCreateResp',
            'orderId' => 'string',
            'publicipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicip  publicip
    * orderId  订单号（预付费场景返回该字段）
    * publicipId  弹性公网IP的ID（预付费场景返回该字段）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicip' => null,
        'orderId' => null,
        'publicipId' => null
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
    * publicip  publicip
    * orderId  订单号（预付费场景返回该字段）
    * publicipId  弹性公网IP的ID（预付费场景返回该字段）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicip' => 'publicip',
            'orderId' => 'order_id',
            'publicipId' => 'publicip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicip  publicip
    * orderId  订单号（预付费场景返回该字段）
    * publicipId  弹性公网IP的ID（预付费场景返回该字段）
    *
    * @var string[]
    */
    protected static $setters = [
            'publicip' => 'setPublicip',
            'orderId' => 'setOrderId',
            'publicipId' => 'setPublicipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicip  publicip
    * orderId  订单号（预付费场景返回该字段）
    * publicipId  弹性公网IP的ID（预付费场景返回该字段）
    *
    * @var string[]
    */
    protected static $getters = [
            'publicip' => 'getPublicip',
            'orderId' => 'getOrderId',
            'publicipId' => 'getPublicipId'
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
        $this->container['publicip'] = isset($data['publicip']) ? $data['publicip'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 36)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicipId']) && (mb_strlen($this->container['publicipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicipId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicipId']) && (mb_strlen($this->container['publicipId']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicipId', the character length must be bigger than or equal to 0.";
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
    * Gets publicip
    *  publicip
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\PublicipCreateResp|null
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\PublicipCreateResp|null $publicip publicip
    *
    * @return $this
    */
    public function setPublicip($publicip)
    {
        $this->container['publicip'] = $publicip;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号（预付费场景返回该字段）
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单号（预付费场景返回该字段）
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets publicipId
    *  弹性公网IP的ID（预付费场景返回该字段）
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId 弹性公网IP的ID（预付费场景返回该字段）
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
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

