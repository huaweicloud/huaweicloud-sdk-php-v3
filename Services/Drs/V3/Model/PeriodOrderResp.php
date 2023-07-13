<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodOrderResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodOrderResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  订单状态
    * orderId  订单ID
    * chargingMode  计费模式
    * periodType  订购包周期类型
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费
    * effTime  资源生效时间（即资源创建时间）
    * expTime  到期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'orderId' => 'string',
            'chargingMode' => 'int',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'int',
            'effTime' => 'string',
            'expTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  订单状态
    * orderId  订单ID
    * chargingMode  计费模式
    * periodType  订购包周期类型
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费
    * effTime  资源生效时间（即资源创建时间）
    * expTime  到期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'orderId' => null,
        'chargingMode' => 'int32',
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'isAutoRenew' => 'int32',
        'effTime' => null,
        'expTime' => null
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
    * status  订单状态
    * orderId  订单ID
    * chargingMode  计费模式
    * periodType  订购包周期类型
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费
    * effTime  资源生效时间（即资源创建时间）
    * expTime  到期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'orderId' => 'order_id',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'effTime' => 'eff_time',
            'expTime' => 'exp_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  订单状态
    * orderId  订单ID
    * chargingMode  计费模式
    * periodType  订购包周期类型
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费
    * effTime  资源生效时间（即资源创建时间）
    * expTime  到期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'orderId' => 'setOrderId',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'effTime' => 'setEffTime',
            'expTime' => 'setExpTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  订单状态
    * orderId  订单ID
    * chargingMode  计费模式
    * periodType  订购包周期类型
    * periodNum  订购周期数
    * isAutoRenew  是否自动续费
    * effTime  资源生效时间（即资源创建时间）
    * expTime  到期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'orderId' => 'getOrderId',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'effTime' => 'getEffTime',
            'expTime' => 'getExpTime'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['effTime'] = isset($data['effTime']) ? $data['effTime'] : null;
        $this->container['expTime'] = isset($data['expTime']) ? $data['expTime'] : null;
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
    * Gets status
    *  订单状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 订单状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID
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
    * @param string|null $orderId 订单ID
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 计费模式
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodType
    *  订购包周期类型
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 订购包周期类型
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 订购周期数
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续费
    *
    * @return int|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int|null $isAutoRenew 是否自动续费
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets effTime
    *  资源生效时间（即资源创建时间）
    *
    * @return string|null
    */
    public function getEffTime()
    {
        return $this->container['effTime'];
    }

    /**
    * Sets effTime
    *
    * @param string|null $effTime 资源生效时间（即资源创建时间）
    *
    * @return $this
    */
    public function setEffTime($effTime)
    {
        $this->container['effTime'] = $effTime;
        return $this;
    }

    /**
    * Gets expTime
    *  到期时间
    *
    * @return string|null
    */
    public function getExpTime()
    {
        return $this->container['expTime'];
    }

    /**
    * Sets expTime
    *
    * @param string|null $expTime 到期时间
    *
    * @return $this
    */
    public function setExpTime($expTime)
    {
        $this->container['expTime'] = $expTime;
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

