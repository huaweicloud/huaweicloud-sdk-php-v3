<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LimitInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LimitInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * useLimitiInfoId  |参数名称：使用限制ID，主键。| |参数约束及描述：使用限制ID，主键。|
    * limitKey  |参数名称：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。| |参数约束及描述：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。|
    * value1  |参数名称：value1。| |参数约束及描述：value1。|
    * value2  |参数名称：value2。| |参数约束及描述：value2。|
    * valueUnit  |参数名称：value单位。| |参数约束及描述：value单位。|
    * limitType  |参数名称：限制类型。| |参数约束及描述：限制类型。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数约束及描述：促销计划ID。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'useLimitiInfoId' => 'string',
            'limitKey' => 'string',
            'value1' => 'string',
            'value2' => 'string',
            'valueUnit' => 'string',
            'limitType' => 'string',
            'promotionPlanId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * useLimitiInfoId  |参数名称：使用限制ID，主键。| |参数约束及描述：使用限制ID，主键。|
    * limitKey  |参数名称：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。| |参数约束及描述：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。|
    * value1  |参数名称：value1。| |参数约束及描述：value1。|
    * value2  |参数名称：value2。| |参数约束及描述：value2。|
    * valueUnit  |参数名称：value单位。| |参数约束及描述：value单位。|
    * limitType  |参数名称：限制类型。| |参数约束及描述：限制类型。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数约束及描述：促销计划ID。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'useLimitiInfoId' => null,
        'limitKey' => null,
        'value1' => null,
        'value2' => null,
        'valueUnit' => null,
        'limitType' => null,
        'promotionPlanId' => null
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
    * useLimitiInfoId  |参数名称：使用限制ID，主键。| |参数约束及描述：使用限制ID，主键。|
    * limitKey  |参数名称：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。| |参数约束及描述：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。|
    * value1  |参数名称：value1。| |参数约束及描述：value1。|
    * value2  |参数名称：value2。| |参数约束及描述：value2。|
    * valueUnit  |参数名称：value单位。| |参数约束及描述：value单位。|
    * limitType  |参数名称：限制类型。| |参数约束及描述：限制类型。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数约束及描述：促销计划ID。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'useLimitiInfoId' => 'use_limiti_info_id',
            'limitKey' => 'limit_key',
            'value1' => 'value1',
            'value2' => 'value2',
            'valueUnit' => 'value_unit',
            'limitType' => 'limit_type',
            'promotionPlanId' => 'promotion_plan_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * useLimitiInfoId  |参数名称：使用限制ID，主键。| |参数约束及描述：使用限制ID，主键。|
    * limitKey  |参数名称：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。| |参数约束及描述：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。|
    * value1  |参数名称：value1。| |参数约束及描述：value1。|
    * value2  |参数名称：value2。| |参数约束及描述：value2。|
    * valueUnit  |参数名称：value单位。| |参数约束及描述：value单位。|
    * limitType  |参数名称：限制类型。| |参数约束及描述：限制类型。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数约束及描述：促销计划ID。|
    *
    * @var string[]
    */
    protected static $setters = [
            'useLimitiInfoId' => 'setUseLimitiInfoId',
            'limitKey' => 'setLimitKey',
            'value1' => 'setValue1',
            'value2' => 'setValue2',
            'valueUnit' => 'setValueUnit',
            'limitType' => 'setLimitType',
            'promotionPlanId' => 'setPromotionPlanId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * useLimitiInfoId  |参数名称：使用限制ID，主键。| |参数约束及描述：使用限制ID，主键。|
    * limitKey  |参数名称：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。| |参数约束及描述：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。|
    * value1  |参数名称：value1。| |参数约束及描述：value1。|
    * value2  |参数名称：value2。| |参数约束及描述：value2。|
    * valueUnit  |参数名称：value单位。| |参数约束及描述：value单位。|
    * limitType  |参数名称：限制类型。| |参数约束及描述：限制类型。|
    * promotionPlanId  |参数名称：促销计划ID。| |参数约束及描述：促销计划ID。|
    *
    * @var string[]
    */
    protected static $getters = [
            'useLimitiInfoId' => 'getUseLimitiInfoId',
            'limitKey' => 'getLimitKey',
            'value1' => 'getValue1',
            'value2' => 'getValue2',
            'valueUnit' => 'getValueUnit',
            'limitType' => 'getLimitType',
            'promotionPlanId' => 'getPromotionPlanId'
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
        $this->container['useLimitiInfoId'] = isset($data['useLimitiInfoId']) ? $data['useLimitiInfoId'] : null;
        $this->container['limitKey'] = isset($data['limitKey']) ? $data['limitKey'] : null;
        $this->container['value1'] = isset($data['value1']) ? $data['value1'] : null;
        $this->container['value2'] = isset($data['value2']) ? $data['value2'] : null;
        $this->container['valueUnit'] = isset($data['valueUnit']) ? $data['valueUnit'] : null;
        $this->container['limitType'] = isset($data['limitType']) ? $data['limitType'] : null;
        $this->container['promotionPlanId'] = isset($data['promotionPlanId']) ? $data['promotionPlanId'] : null;
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
    * Gets useLimitiInfoId
    *  |参数名称：使用限制ID，主键。| |参数约束及描述：使用限制ID，主键。|
    *
    * @return string|null
    */
    public function getUseLimitiInfoId()
    {
        return $this->container['useLimitiInfoId'];
    }

    /**
    * Sets useLimitiInfoId
    *
    * @param string|null $useLimitiInfoId |参数名称：使用限制ID，主键。| |参数约束及描述：使用限制ID，主键。|
    *
    * @return $this
    */
    public function setUseLimitiInfoId($useLimitiInfoId)
    {
        $this->container['useLimitiInfoId'] = $useLimitiInfoId;
        return $this;
    }

    /**
    * Gets limitKey
    *  |参数名称：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。| |参数约束及描述：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。|
    *
    * @return string|null
    */
    public function getLimitKey()
    {
        return $this->container['limitKey'];
    }

    /**
    * Sets limitKey
    *
    * @param string|null $limitKey |参数名称：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。| |参数约束及描述：折扣限制，key的取值请参考表 ICouponUseLimitInfo的limit_key要求。|
    *
    * @return $this
    */
    public function setLimitKey($limitKey)
    {
        $this->container['limitKey'] = $limitKey;
        return $this;
    }

    /**
    * Gets value1
    *  |参数名称：value1。| |参数约束及描述：value1。|
    *
    * @return string|null
    */
    public function getValue1()
    {
        return $this->container['value1'];
    }

    /**
    * Sets value1
    *
    * @param string|null $value1 |参数名称：value1。| |参数约束及描述：value1。|
    *
    * @return $this
    */
    public function setValue1($value1)
    {
        $this->container['value1'] = $value1;
        return $this;
    }

    /**
    * Gets value2
    *  |参数名称：value2。| |参数约束及描述：value2。|
    *
    * @return string|null
    */
    public function getValue2()
    {
        return $this->container['value2'];
    }

    /**
    * Sets value2
    *
    * @param string|null $value2 |参数名称：value2。| |参数约束及描述：value2。|
    *
    * @return $this
    */
    public function setValue2($value2)
    {
        $this->container['value2'] = $value2;
        return $this;
    }

    /**
    * Gets valueUnit
    *  |参数名称：value单位。| |参数约束及描述：value单位。|
    *
    * @return string|null
    */
    public function getValueUnit()
    {
        return $this->container['valueUnit'];
    }

    /**
    * Sets valueUnit
    *
    * @param string|null $valueUnit |参数名称：value单位。| |参数约束及描述：value单位。|
    *
    * @return $this
    */
    public function setValueUnit($valueUnit)
    {
        $this->container['valueUnit'] = $valueUnit;
        return $this;
    }

    /**
    * Gets limitType
    *  |参数名称：限制类型。| |参数约束及描述：限制类型。|
    *
    * @return string|null
    */
    public function getLimitType()
    {
        return $this->container['limitType'];
    }

    /**
    * Sets limitType
    *
    * @param string|null $limitType |参数名称：限制类型。| |参数约束及描述：限制类型。|
    *
    * @return $this
    */
    public function setLimitType($limitType)
    {
        $this->container['limitType'] = $limitType;
        return $this;
    }

    /**
    * Gets promotionPlanId
    *  |参数名称：促销计划ID。| |参数约束及描述：促销计划ID。|
    *
    * @return string|null
    */
    public function getPromotionPlanId()
    {
        return $this->container['promotionPlanId'];
    }

    /**
    * Sets promotionPlanId
    *
    * @param string|null $promotionPlanId |参数名称：促销计划ID。| |参数约束及描述：促销计划ID。|
    *
    * @return $this
    */
    public function setPromotionPlanId($promotionPlanId)
    {
        $this->container['promotionPlanId'] = $promotionPlanId;
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

