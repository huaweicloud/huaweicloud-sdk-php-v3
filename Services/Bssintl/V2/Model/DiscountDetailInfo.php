<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiscountDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiscountDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * promotionType  折扣类型。 500：代理订购指定折扣 501：代理订购指定减免 502：代理订购指定一口价 600：合同折扣返利 （商履折扣） 601：渠道框架合同折扣 602：专款专用合同折扣（特殊商务合同折扣） 603：线下直签合同折扣 604：电销授权合同折扣 605：商务合同折扣 606：渠道商务合同折扣 607：合作伙伴授权折扣 608：严选商品折扣 610：免单金额 700：促销折扣 （促销，只有包年/包月场景） 800：赠送奖励金
    * discountAmount  折扣金额。
    * promotionId  折扣类型对应的标识，可为合同ID或商务ID。
    * measureId  金额单位，1:元 3：分，默认3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'promotionType' => 'string',
            'discountAmount' => 'double',
            'promotionId' => 'string',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * promotionType  折扣类型。 500：代理订购指定折扣 501：代理订购指定减免 502：代理订购指定一口价 600：合同折扣返利 （商履折扣） 601：渠道框架合同折扣 602：专款专用合同折扣（特殊商务合同折扣） 603：线下直签合同折扣 604：电销授权合同折扣 605：商务合同折扣 606：渠道商务合同折扣 607：合作伙伴授权折扣 608：严选商品折扣 610：免单金额 700：促销折扣 （促销，只有包年/包月场景） 800：赠送奖励金
    * discountAmount  折扣金额。
    * promotionId  折扣类型对应的标识，可为合同ID或商务ID。
    * measureId  金额单位，1:元 3：分，默认3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'promotionType' => null,
        'discountAmount' => 'double',
        'promotionId' => null,
        'measureId' => 'int32'
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
    * promotionType  折扣类型。 500：代理订购指定折扣 501：代理订购指定减免 502：代理订购指定一口价 600：合同折扣返利 （商履折扣） 601：渠道框架合同折扣 602：专款专用合同折扣（特殊商务合同折扣） 603：线下直签合同折扣 604：电销授权合同折扣 605：商务合同折扣 606：渠道商务合同折扣 607：合作伙伴授权折扣 608：严选商品折扣 610：免单金额 700：促销折扣 （促销，只有包年/包月场景） 800：赠送奖励金
    * discountAmount  折扣金额。
    * promotionId  折扣类型对应的标识，可为合同ID或商务ID。
    * measureId  金额单位，1:元 3：分，默认3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'promotionType' => 'promotion_type',
            'discountAmount' => 'discount_amount',
            'promotionId' => 'promotion_id',
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * promotionType  折扣类型。 500：代理订购指定折扣 501：代理订购指定减免 502：代理订购指定一口价 600：合同折扣返利 （商履折扣） 601：渠道框架合同折扣 602：专款专用合同折扣（特殊商务合同折扣） 603：线下直签合同折扣 604：电销授权合同折扣 605：商务合同折扣 606：渠道商务合同折扣 607：合作伙伴授权折扣 608：严选商品折扣 610：免单金额 700：促销折扣 （促销，只有包年/包月场景） 800：赠送奖励金
    * discountAmount  折扣金额。
    * promotionId  折扣类型对应的标识，可为合同ID或商务ID。
    * measureId  金额单位，1:元 3：分，默认3
    *
    * @var string[]
    */
    protected static $setters = [
            'promotionType' => 'setPromotionType',
            'discountAmount' => 'setDiscountAmount',
            'promotionId' => 'setPromotionId',
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * promotionType  折扣类型。 500：代理订购指定折扣 501：代理订购指定减免 502：代理订购指定一口价 600：合同折扣返利 （商履折扣） 601：渠道框架合同折扣 602：专款专用合同折扣（特殊商务合同折扣） 603：线下直签合同折扣 604：电销授权合同折扣 605：商务合同折扣 606：渠道商务合同折扣 607：合作伙伴授权折扣 608：严选商品折扣 610：免单金额 700：促销折扣 （促销，只有包年/包月场景） 800：赠送奖励金
    * discountAmount  折扣金额。
    * promotionId  折扣类型对应的标识，可为合同ID或商务ID。
    * measureId  金额单位，1:元 3：分，默认3
    *
    * @var string[]
    */
    protected static $getters = [
            'promotionType' => 'getPromotionType',
            'discountAmount' => 'getDiscountAmount',
            'promotionId' => 'getPromotionId',
            'measureId' => 'getMeasureId'
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
        $this->container['promotionType'] = isset($data['promotionType']) ? $data['promotionType'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['promotionId'] = isset($data['promotionId']) ? $data['promotionId'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
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
    * Gets promotionType
    *  折扣类型。 500：代理订购指定折扣 501：代理订购指定减免 502：代理订购指定一口价 600：合同折扣返利 （商履折扣） 601：渠道框架合同折扣 602：专款专用合同折扣（特殊商务合同折扣） 603：线下直签合同折扣 604：电销授权合同折扣 605：商务合同折扣 606：渠道商务合同折扣 607：合作伙伴授权折扣 608：严选商品折扣 610：免单金额 700：促销折扣 （促销，只有包年/包月场景） 800：赠送奖励金
    *
    * @return string|null
    */
    public function getPromotionType()
    {
        return $this->container['promotionType'];
    }

    /**
    * Sets promotionType
    *
    * @param string|null $promotionType 折扣类型。 500：代理订购指定折扣 501：代理订购指定减免 502：代理订购指定一口价 600：合同折扣返利 （商履折扣） 601：渠道框架合同折扣 602：专款专用合同折扣（特殊商务合同折扣） 603：线下直签合同折扣 604：电销授权合同折扣 605：商务合同折扣 606：渠道商务合同折扣 607：合作伙伴授权折扣 608：严选商品折扣 610：免单金额 700：促销折扣 （促销，只有包年/包月场景） 800：赠送奖励金
    *
    * @return $this
    */
    public function setPromotionType($promotionType)
    {
        $this->container['promotionType'] = $promotionType;
        return $this;
    }

    /**
    * Gets discountAmount
    *  折扣金额。
    *
    * @return double|null
    */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
    * Sets discountAmount
    *
    * @param double|null $discountAmount 折扣金额。
    *
    * @return $this
    */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;
        return $this;
    }

    /**
    * Gets promotionId
    *  折扣类型对应的标识，可为合同ID或商务ID。
    *
    * @return string|null
    */
    public function getPromotionId()
    {
        return $this->container['promotionId'];
    }

    /**
    * Sets promotionId
    *
    * @param string|null $promotionId 折扣类型对应的标识，可为合同ID或商务ID。
    *
    * @return $this
    */
    public function setPromotionId($promotionId)
    {
        $this->container['promotionId'] = $promotionId;
        return $this;
    }

    /**
    * Gets measureId
    *  金额单位，1:元 3：分，默认3
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 金额单位，1:元 3：分，默认3
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
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

