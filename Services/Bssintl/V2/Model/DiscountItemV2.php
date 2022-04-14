<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiscountItemV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiscountItemV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discountType  折扣类型： 200：促销产品折扣300：促销折扣券301：促销代金券302：促销现金券500：代理订购指定折扣501：代理订购指定减免502：代理订购指定一口价600：折扣返利合同601：渠道框架合同602：专款专用合同603：线下直签合同604：电销授权合同605：商务合同折扣606：渠道商务合同折扣607：合作伙伴授权折扣609：订单调价折扣610：免单金额700：促销折扣800：充值帐户折扣900：产品本身折扣901：基准价一口价的折扣
    * discountAmount  折扣金额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discountType' => 'string',
            'discountAmount' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discountType  折扣类型： 200：促销产品折扣300：促销折扣券301：促销代金券302：促销现金券500：代理订购指定折扣501：代理订购指定减免502：代理订购指定一口价600：折扣返利合同601：渠道框架合同602：专款专用合同603：线下直签合同604：电销授权合同605：商务合同折扣606：渠道商务合同折扣607：合作伙伴授权折扣609：订单调价折扣610：免单金额700：促销折扣800：充值帐户折扣900：产品本身折扣901：基准价一口价的折扣
    * discountAmount  折扣金额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discountType' => null,
        'discountAmount' => 'double'
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
    * discountType  折扣类型： 200：促销产品折扣300：促销折扣券301：促销代金券302：促销现金券500：代理订购指定折扣501：代理订购指定减免502：代理订购指定一口价600：折扣返利合同601：渠道框架合同602：专款专用合同603：线下直签合同604：电销授权合同605：商务合同折扣606：渠道商务合同折扣607：合作伙伴授权折扣609：订单调价折扣610：免单金额700：促销折扣800：充值帐户折扣900：产品本身折扣901：基准价一口价的折扣
    * discountAmount  折扣金额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discountType' => 'discount_type',
            'discountAmount' => 'discount_amount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discountType  折扣类型： 200：促销产品折扣300：促销折扣券301：促销代金券302：促销现金券500：代理订购指定折扣501：代理订购指定减免502：代理订购指定一口价600：折扣返利合同601：渠道框架合同602：专款专用合同603：线下直签合同604：电销授权合同605：商务合同折扣606：渠道商务合同折扣607：合作伙伴授权折扣609：订单调价折扣610：免单金额700：促销折扣800：充值帐户折扣900：产品本身折扣901：基准价一口价的折扣
    * discountAmount  折扣金额。
    *
    * @var string[]
    */
    protected static $setters = [
            'discountType' => 'setDiscountType',
            'discountAmount' => 'setDiscountAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discountType  折扣类型： 200：促销产品折扣300：促销折扣券301：促销代金券302：促销现金券500：代理订购指定折扣501：代理订购指定减免502：代理订购指定一口价600：折扣返利合同601：渠道框架合同602：专款专用合同603：线下直签合同604：电销授权合同605：商务合同折扣606：渠道商务合同折扣607：合作伙伴授权折扣609：订单调价折扣610：免单金额700：促销折扣800：充值帐户折扣900：产品本身折扣901：基准价一口价的折扣
    * discountAmount  折扣金额。
    *
    * @var string[]
    */
    protected static $getters = [
            'discountType' => 'getDiscountType',
            'discountAmount' => 'getDiscountAmount'
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
        $this->container['discountType'] = isset($data['discountType']) ? $data['discountType'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
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
    * Gets discountType
    *  折扣类型： 200：促销产品折扣300：促销折扣券301：促销代金券302：促销现金券500：代理订购指定折扣501：代理订购指定减免502：代理订购指定一口价600：折扣返利合同601：渠道框架合同602：专款专用合同603：线下直签合同604：电销授权合同605：商务合同折扣606：渠道商务合同折扣607：合作伙伴授权折扣609：订单调价折扣610：免单金额700：促销折扣800：充值帐户折扣900：产品本身折扣901：基准价一口价的折扣
    *
    * @return string|null
    */
    public function getDiscountType()
    {
        return $this->container['discountType'];
    }

    /**
    * Sets discountType
    *
    * @param string|null $discountType 折扣类型： 200：促销产品折扣300：促销折扣券301：促销代金券302：促销现金券500：代理订购指定折扣501：代理订购指定减免502：代理订购指定一口价600：折扣返利合同601：渠道框架合同602：专款专用合同603：线下直签合同604：电销授权合同605：商务合同折扣606：渠道商务合同折扣607：合作伙伴授权折扣609：订单调价折扣610：免单金额700：促销折扣800：充值帐户折扣900：产品本身折扣901：基准价一口价的折扣
    *
    * @return $this
    */
    public function setDiscountType($discountType)
    {
        $this->container['discountType'] = $discountType;
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

