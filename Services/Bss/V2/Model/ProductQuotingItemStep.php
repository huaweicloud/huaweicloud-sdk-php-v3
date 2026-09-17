<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductQuotingItemStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductQuotingItemStep';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stepId  阶梯ID
    * stepNo  阶梯编号
    * stepStart  阶梯起始值
    * startMeasureId  起始值度量单位
    * stepEnd  阶梯结束值
    * endMeasureId  结束值度量单位（1：元/美元）
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stepId' => 'string',
            'stepNo' => 'string',
            'stepStart' => 'float',
            'startMeasureId' => 'int',
            'stepEnd' => 'float',
            'endMeasureId' => 'int',
            'preferentialType' => 'int',
            'salesPrice' => 'float',
            'discountRatio' => 'float',
            'pricingBasis' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stepId  阶梯ID
    * stepNo  阶梯编号
    * stepStart  阶梯起始值
    * startMeasureId  起始值度量单位
    * stepEnd  阶梯结束值
    * endMeasureId  结束值度量单位（1：元/美元）
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stepId' => null,
        'stepNo' => null,
        'stepStart' => 'bigdecimal',
        'startMeasureId' => 'int32',
        'stepEnd' => 'bigdecimal',
        'endMeasureId' => 'int32',
        'preferentialType' => 'int32',
        'salesPrice' => 'bigdecimal',
        'discountRatio' => 'bigdecimal',
        'pricingBasis' => null
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
    * stepId  阶梯ID
    * stepNo  阶梯编号
    * stepStart  阶梯起始值
    * startMeasureId  起始值度量单位
    * stepEnd  阶梯结束值
    * endMeasureId  结束值度量单位（1：元/美元）
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stepId' => 'step_id',
            'stepNo' => 'step_no',
            'stepStart' => 'step_start',
            'startMeasureId' => 'start_measure_id',
            'stepEnd' => 'step_end',
            'endMeasureId' => 'end_measure_id',
            'preferentialType' => 'preferential_type',
            'salesPrice' => 'sales_price',
            'discountRatio' => 'discount_ratio',
            'pricingBasis' => 'pricing_basis'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stepId  阶梯ID
    * stepNo  阶梯编号
    * stepStart  阶梯起始值
    * startMeasureId  起始值度量单位
    * stepEnd  阶梯结束值
    * endMeasureId  结束值度量单位（1：元/美元）
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    *
    * @var string[]
    */
    protected static $setters = [
            'stepId' => 'setStepId',
            'stepNo' => 'setStepNo',
            'stepStart' => 'setStepStart',
            'startMeasureId' => 'setStartMeasureId',
            'stepEnd' => 'setStepEnd',
            'endMeasureId' => 'setEndMeasureId',
            'preferentialType' => 'setPreferentialType',
            'salesPrice' => 'setSalesPrice',
            'discountRatio' => 'setDiscountRatio',
            'pricingBasis' => 'setPricingBasis'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stepId  阶梯ID
    * stepNo  阶梯编号
    * stepStart  阶梯起始值
    * startMeasureId  起始值度量单位
    * stepEnd  阶梯结束值
    * endMeasureId  结束值度量单位（1：元/美元）
    * preferentialType  优惠方式：0：产品折扣，1：固定单价
    * salesPrice  固定单价（preferential_type=1固定单价时有值）
    * discountRatio  折扣率（preferential_type=0产品折扣时有值）
    * pricingBasis  计费单位
    *
    * @var string[]
    */
    protected static $getters = [
            'stepId' => 'getStepId',
            'stepNo' => 'getStepNo',
            'stepStart' => 'getStepStart',
            'startMeasureId' => 'getStartMeasureId',
            'stepEnd' => 'getStepEnd',
            'endMeasureId' => 'getEndMeasureId',
            'preferentialType' => 'getPreferentialType',
            'salesPrice' => 'getSalesPrice',
            'discountRatio' => 'getDiscountRatio',
            'pricingBasis' => 'getPricingBasis'
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
        $this->container['stepId'] = isset($data['stepId']) ? $data['stepId'] : null;
        $this->container['stepNo'] = isset($data['stepNo']) ? $data['stepNo'] : null;
        $this->container['stepStart'] = isset($data['stepStart']) ? $data['stepStart'] : null;
        $this->container['startMeasureId'] = isset($data['startMeasureId']) ? $data['startMeasureId'] : null;
        $this->container['stepEnd'] = isset($data['stepEnd']) ? $data['stepEnd'] : null;
        $this->container['endMeasureId'] = isset($data['endMeasureId']) ? $data['endMeasureId'] : null;
        $this->container['preferentialType'] = isset($data['preferentialType']) ? $data['preferentialType'] : null;
        $this->container['salesPrice'] = isset($data['salesPrice']) ? $data['salesPrice'] : null;
        $this->container['discountRatio'] = isset($data['discountRatio']) ? $data['discountRatio'] : null;
        $this->container['pricingBasis'] = isset($data['pricingBasis']) ? $data['pricingBasis'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stepId']) && (mb_strlen($this->container['stepId']) > 64)) {
                $invalidProperties[] = "invalid value for 'stepId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stepId']) && (mb_strlen($this->container['stepId']) < 0)) {
                $invalidProperties[] = "invalid value for 'stepId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stepNo']) && (mb_strlen($this->container['stepNo']) > 64)) {
                $invalidProperties[] = "invalid value for 'stepNo', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stepNo']) && (mb_strlen($this->container['stepNo']) < 0)) {
                $invalidProperties[] = "invalid value for 'stepNo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pricingBasis']) && (mb_strlen($this->container['pricingBasis']) > 64)) {
                $invalidProperties[] = "invalid value for 'pricingBasis', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pricingBasis']) && (mb_strlen($this->container['pricingBasis']) < 0)) {
                $invalidProperties[] = "invalid value for 'pricingBasis', the character length must be bigger than or equal to 0.";
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
    * Gets stepId
    *  阶梯ID
    *
    * @return string|null
    */
    public function getStepId()
    {
        return $this->container['stepId'];
    }

    /**
    * Sets stepId
    *
    * @param string|null $stepId 阶梯ID
    *
    * @return $this
    */
    public function setStepId($stepId)
    {
        $this->container['stepId'] = $stepId;
        return $this;
    }

    /**
    * Gets stepNo
    *  阶梯编号
    *
    * @return string|null
    */
    public function getStepNo()
    {
        return $this->container['stepNo'];
    }

    /**
    * Sets stepNo
    *
    * @param string|null $stepNo 阶梯编号
    *
    * @return $this
    */
    public function setStepNo($stepNo)
    {
        $this->container['stepNo'] = $stepNo;
        return $this;
    }

    /**
    * Gets stepStart
    *  阶梯起始值
    *
    * @return float|null
    */
    public function getStepStart()
    {
        return $this->container['stepStart'];
    }

    /**
    * Sets stepStart
    *
    * @param float|null $stepStart 阶梯起始值
    *
    * @return $this
    */
    public function setStepStart($stepStart)
    {
        $this->container['stepStart'] = $stepStart;
        return $this;
    }

    /**
    * Gets startMeasureId
    *  起始值度量单位
    *
    * @return int|null
    */
    public function getStartMeasureId()
    {
        return $this->container['startMeasureId'];
    }

    /**
    * Sets startMeasureId
    *
    * @param int|null $startMeasureId 起始值度量单位
    *
    * @return $this
    */
    public function setStartMeasureId($startMeasureId)
    {
        $this->container['startMeasureId'] = $startMeasureId;
        return $this;
    }

    /**
    * Gets stepEnd
    *  阶梯结束值
    *
    * @return float|null
    */
    public function getStepEnd()
    {
        return $this->container['stepEnd'];
    }

    /**
    * Sets stepEnd
    *
    * @param float|null $stepEnd 阶梯结束值
    *
    * @return $this
    */
    public function setStepEnd($stepEnd)
    {
        $this->container['stepEnd'] = $stepEnd;
        return $this;
    }

    /**
    * Gets endMeasureId
    *  结束值度量单位（1：元/美元）
    *
    * @return int|null
    */
    public function getEndMeasureId()
    {
        return $this->container['endMeasureId'];
    }

    /**
    * Sets endMeasureId
    *
    * @param int|null $endMeasureId 结束值度量单位（1：元/美元）
    *
    * @return $this
    */
    public function setEndMeasureId($endMeasureId)
    {
        $this->container['endMeasureId'] = $endMeasureId;
        return $this;
    }

    /**
    * Gets preferentialType
    *  优惠方式：0：产品折扣，1：固定单价
    *
    * @return int|null
    */
    public function getPreferentialType()
    {
        return $this->container['preferentialType'];
    }

    /**
    * Sets preferentialType
    *
    * @param int|null $preferentialType 优惠方式：0：产品折扣，1：固定单价
    *
    * @return $this
    */
    public function setPreferentialType($preferentialType)
    {
        $this->container['preferentialType'] = $preferentialType;
        return $this;
    }

    /**
    * Gets salesPrice
    *  固定单价（preferential_type=1固定单价时有值）
    *
    * @return float|null
    */
    public function getSalesPrice()
    {
        return $this->container['salesPrice'];
    }

    /**
    * Sets salesPrice
    *
    * @param float|null $salesPrice 固定单价（preferential_type=1固定单价时有值）
    *
    * @return $this
    */
    public function setSalesPrice($salesPrice)
    {
        $this->container['salesPrice'] = $salesPrice;
        return $this;
    }

    /**
    * Gets discountRatio
    *  折扣率（preferential_type=0产品折扣时有值）
    *
    * @return float|null
    */
    public function getDiscountRatio()
    {
        return $this->container['discountRatio'];
    }

    /**
    * Sets discountRatio
    *
    * @param float|null $discountRatio 折扣率（preferential_type=0产品折扣时有值）
    *
    * @return $this
    */
    public function setDiscountRatio($discountRatio)
    {
        $this->container['discountRatio'] = $discountRatio;
        return $this;
    }

    /**
    * Gets pricingBasis
    *  计费单位
    *
    * @return string|null
    */
    public function getPricingBasis()
    {
        return $this->container['pricingBasis'];
    }

    /**
    * Sets pricingBasis
    *
    * @param string|null $pricingBasis 计费单位
    *
    * @return $this
    */
    public function setPricingBasis($pricingBasis)
    {
        $this->container['pricingBasis'] = $pricingBasis;
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

