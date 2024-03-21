<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateQuotasOrderRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateQuotasOrderRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceSpecCode  资源规格   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * periodType  订购周期类型   - 2 : 月   - 3 : 年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续订，true表示自动续订，false表示不自动续订，默认值为false
    * isAutoPay  是否支持自动支付，true表示支持，false表示不支持，默认值为false
    * subscriptionNum  订购数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceSpecCode' => 'string',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'bool',
            'isAutoPay' => 'bool',
            'subscriptionNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceSpecCode  资源规格   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * periodType  订购周期类型   - 2 : 月   - 3 : 年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续订，true表示自动续订，false表示不自动续订，默认值为false
    * isAutoPay  是否支持自动支付，true表示支持，false表示不支持，默认值为false
    * subscriptionNum  订购数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceSpecCode' => null,
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'subscriptionNum' => 'int32'
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
    * resourceSpecCode  资源规格   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * periodType  订购周期类型   - 2 : 月   - 3 : 年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续订，true表示自动续订，false表示不自动续订，默认值为false
    * isAutoPay  是否支持自动支付，true表示支持，false表示不支持，默认值为false
    * subscriptionNum  订购数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceSpecCode' => 'resource_spec_code',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'isAutoPay' => 'is_auto_pay',
            'subscriptionNum' => 'subscription_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceSpecCode  资源规格   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * periodType  订购周期类型   - 2 : 月   - 3 : 年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续订，true表示自动续订，false表示不自动续订，默认值为false
    * isAutoPay  是否支持自动支付，true表示支持，false表示不支持，默认值为false
    * subscriptionNum  订购数量
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceSpecCode' => 'setResourceSpecCode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'subscriptionNum' => 'setSubscriptionNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceSpecCode  资源规格   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * periodType  订购周期类型   - 2 : 月   - 3 : 年
    * periodNum  订购周期数
    * isAutoRenew  是否支持自动续订，true表示自动续订，false表示不自动续订，默认值为false
    * isAutoPay  是否支持自动支付，true表示支持，false表示不支持，默认值为false
    * subscriptionNum  订购数量
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceSpecCode' => 'getResourceSpecCode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'subscriptionNum' => 'getSubscriptionNum'
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
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 0.";
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
            if (($this->container['periodNum'] > 1000)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 1000.";
            }
            if (($this->container['periodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 0.";
            }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
            if (($this->container['subscriptionNum'] > 500)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be smaller than or equal to 500.";
            }
            if (($this->container['subscriptionNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be bigger than or equal to 0.";
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
    * Gets resourceSpecCode
    *  资源规格   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
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
    * @param string $resourceSpecCode 资源规格   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型   - 2 : 月   - 3 : 年
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
    * @param int $periodType 订购周期类型   - 2 : 月   - 3 : 年
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
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 订购周期数
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
    *  是否支持自动续订，true表示自动续订，false表示不自动续订，默认值为false
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew 是否支持自动续订，true表示自动续订，false表示不自动续订，默认值为false
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否支持自动支付，true表示支持，false表示不支持，默认值为false
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 是否支持自动支付，true表示支持，false表示不支持，默认值为false
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  订购数量
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
    * @param int $subscriptionNum 订购数量
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
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

