<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicCloudServiceOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicCloudServiceOrder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAutoPay  是否自动支付：下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付；  1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 0：否（需要客户手动去支付，客户可以选择折扣和优惠券）。 默认值为“0”。
    * periodType  订购周期类型： 2：月； 3：年； 6：一次性;
    * periodNum  订购周期数 取值大于0；小于等于0会报错
    * isAutoRenew  是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    * subscriptionNum  订购数量； 取值大于0
    * resourceSpecCode  用户购买云服务产品的资源规格，详见[资源类型](metastudio_02_0042.xml)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAutoPay' => 'int',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'int',
            'subscriptionNum' => 'int',
            'resourceSpecCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAutoPay  是否自动支付：下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付；  1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 0：否（需要客户手动去支付，客户可以选择折扣和优惠券）。 默认值为“0”。
    * periodType  订购周期类型： 2：月； 3：年； 6：一次性;
    * periodNum  订购周期数 取值大于0；小于等于0会报错
    * isAutoRenew  是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    * subscriptionNum  订购数量； 取值大于0
    * resourceSpecCode  用户购买云服务产品的资源规格，详见[资源类型](metastudio_02_0042.xml)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAutoPay' => null,
        'periodType' => null,
        'periodNum' => null,
        'isAutoRenew' => null,
        'subscriptionNum' => null,
        'resourceSpecCode' => null
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
    * isAutoPay  是否自动支付：下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付；  1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 0：否（需要客户手动去支付，客户可以选择折扣和优惠券）。 默认值为“0”。
    * periodType  订购周期类型： 2：月； 3：年； 6：一次性;
    * periodNum  订购周期数 取值大于0；小于等于0会报错
    * isAutoRenew  是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    * subscriptionNum  订购数量； 取值大于0
    * resourceSpecCode  用户购买云服务产品的资源规格，详见[资源类型](metastudio_02_0042.xml)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAutoPay' => 'is_auto_pay',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'subscriptionNum' => 'subscription_num',
            'resourceSpecCode' => 'resource_spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAutoPay  是否自动支付：下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付；  1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 0：否（需要客户手动去支付，客户可以选择折扣和优惠券）。 默认值为“0”。
    * periodType  订购周期类型： 2：月； 3：年； 6：一次性;
    * periodNum  订购周期数 取值大于0；小于等于0会报错
    * isAutoRenew  是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    * subscriptionNum  订购数量； 取值大于0
    * resourceSpecCode  用户购买云服务产品的资源规格，详见[资源类型](metastudio_02_0042.xml)。
    *
    * @var string[]
    */
    protected static $setters = [
            'isAutoPay' => 'setIsAutoPay',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'subscriptionNum' => 'setSubscriptionNum',
            'resourceSpecCode' => 'setResourceSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAutoPay  是否自动支付：下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付；  1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 0：否（需要客户手动去支付，客户可以选择折扣和优惠券）。 默认值为“0”。
    * periodType  订购周期类型： 2：月； 3：年； 6：一次性;
    * periodNum  订购周期数 取值大于0；小于等于0会报错
    * isAutoRenew  是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    * subscriptionNum  订购数量； 取值大于0
    * resourceSpecCode  用户购买云服务产品的资源规格，详见[资源类型](metastudio_02_0042.xml)。
    *
    * @var string[]
    */
    protected static $getters = [
            'isAutoPay' => 'getIsAutoPay',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'subscriptionNum' => 'getSubscriptionNum',
            'resourceSpecCode' => 'getResourceSpecCode'
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
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be bigger than or equal to 0.";
            }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if (($this->container['periodType'] > 100)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 100.";
            }
            if (($this->container['periodType'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 0.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] > 10)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be bigger than or equal to 0.";
            }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
            if (($this->container['subscriptionNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['subscriptionNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be bigger than or equal to 1.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 0.";
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
    * Gets isAutoPay
    *  是否自动支付：下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付；  1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 0：否（需要客户手动去支付，客户可以选择折扣和优惠券）。 默认值为“0”。
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay 是否自动支付：下单订购后，是否自动从客户的华为云账户中支付，而不需要客户手动去进行支付；  1：是（会自动选择折扣和优惠券进行优惠，然后自动从客户华为云账户中支付），自动支付失败后会生成订单成功(该订单应付金额是优惠后金额)、但订单状态为“待支付”，等待客户手动支付(手动支付时，客户还可以修改系统自动选择的折扣和优惠券)。 0：否（需要客户手动去支付，客户可以选择折扣和优惠券）。 默认值为“0”。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型： 2：月； 3：年； 6：一次性;
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType 订购周期类型： 2：月； 3：年； 6：一次性;
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
    *  订购周期数 取值大于0；小于等于0会报错
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 订购周期数 取值大于0；小于等于0会报错
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
    *  是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
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
    * @param int|null $isAutoRenew 是否自动续订，为空时表示不自动续订； 1：自动续订 0：不自动续订（默认）
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  订购数量； 取值大于0
    *
    * @return int
    */
    public function getSubscriptionNum()
    {
        return $this->container['subscriptionNum'];
    }

    /**
    * Sets subscriptionNum
    *
    * @param int $subscriptionNum 订购数量； 取值大于0
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  用户购买云服务产品的资源规格，详见[资源类型](metastudio_02_0042.xml)。
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 用户购买云服务产品的资源规格，详见[资源类型](metastudio_02_0042.xml)。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
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

