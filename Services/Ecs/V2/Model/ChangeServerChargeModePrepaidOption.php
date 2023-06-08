<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeServerChargeModePrepaidOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeServerChargeModePrepaidOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * includeDataDisks  是否连同支持的按需数据盘一起转为包周期。 当参数为true，包括按需非共享的数据盘，不包括共享云硬盘，DSS和DESS硬盘 默认值为false
    * includePublicips  是否连同弹性公网IP一起转为包周期 只有“独享”、“按带宽计费”的弹性公网IP才可以转换为包周期计费模式 默认值为false
    * periodType  订购周期类型，取值范围： month-月 year-年
    * periodNum  订购周期的周期数。 取值范围： period_type=month时，取值范围为[1,9]。 period_type=year时，取值范围为[1,3]。
    * autoPay  是否自动支付。 true：自动支付，需要确保账户余额充足，如果余额不足则会生成异常订单，只能作废此订单 false：只生成订单不扣费 默认值为false
    * autoRenew  是否自动续费。默认值：false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'includeDataDisks' => 'bool',
            'includePublicips' => 'bool',
            'periodType' => 'string',
            'periodNum' => 'string',
            'autoPay' => 'bool',
            'autoRenew' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * includeDataDisks  是否连同支持的按需数据盘一起转为包周期。 当参数为true，包括按需非共享的数据盘，不包括共享云硬盘，DSS和DESS硬盘 默认值为false
    * includePublicips  是否连同弹性公网IP一起转为包周期 只有“独享”、“按带宽计费”的弹性公网IP才可以转换为包周期计费模式 默认值为false
    * periodType  订购周期类型，取值范围： month-月 year-年
    * periodNum  订购周期的周期数。 取值范围： period_type=month时，取值范围为[1,9]。 period_type=year时，取值范围为[1,3]。
    * autoPay  是否自动支付。 true：自动支付，需要确保账户余额充足，如果余额不足则会生成异常订单，只能作废此订单 false：只生成订单不扣费 默认值为false
    * autoRenew  是否自动续费。默认值：false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'includeDataDisks' => null,
        'includePublicips' => null,
        'periodType' => null,
        'periodNum' => null,
        'autoPay' => null,
        'autoRenew' => null
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
    * includeDataDisks  是否连同支持的按需数据盘一起转为包周期。 当参数为true，包括按需非共享的数据盘，不包括共享云硬盘，DSS和DESS硬盘 默认值为false
    * includePublicips  是否连同弹性公网IP一起转为包周期 只有“独享”、“按带宽计费”的弹性公网IP才可以转换为包周期计费模式 默认值为false
    * periodType  订购周期类型，取值范围： month-月 year-年
    * periodNum  订购周期的周期数。 取值范围： period_type=month时，取值范围为[1,9]。 period_type=year时，取值范围为[1,3]。
    * autoPay  是否自动支付。 true：自动支付，需要确保账户余额充足，如果余额不足则会生成异常订单，只能作废此订单 false：只生成订单不扣费 默认值为false
    * autoRenew  是否自动续费。默认值：false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'includeDataDisks' => 'include_data_disks',
            'includePublicips' => 'include_publicips',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'autoPay' => 'auto_pay',
            'autoRenew' => 'auto_renew'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * includeDataDisks  是否连同支持的按需数据盘一起转为包周期。 当参数为true，包括按需非共享的数据盘，不包括共享云硬盘，DSS和DESS硬盘 默认值为false
    * includePublicips  是否连同弹性公网IP一起转为包周期 只有“独享”、“按带宽计费”的弹性公网IP才可以转换为包周期计费模式 默认值为false
    * periodType  订购周期类型，取值范围： month-月 year-年
    * periodNum  订购周期的周期数。 取值范围： period_type=month时，取值范围为[1,9]。 period_type=year时，取值范围为[1,3]。
    * autoPay  是否自动支付。 true：自动支付，需要确保账户余额充足，如果余额不足则会生成异常订单，只能作废此订单 false：只生成订单不扣费 默认值为false
    * autoRenew  是否自动续费。默认值：false
    *
    * @var string[]
    */
    protected static $setters = [
            'includeDataDisks' => 'setIncludeDataDisks',
            'includePublicips' => 'setIncludePublicips',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'autoPay' => 'setAutoPay',
            'autoRenew' => 'setAutoRenew'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * includeDataDisks  是否连同支持的按需数据盘一起转为包周期。 当参数为true，包括按需非共享的数据盘，不包括共享云硬盘，DSS和DESS硬盘 默认值为false
    * includePublicips  是否连同弹性公网IP一起转为包周期 只有“独享”、“按带宽计费”的弹性公网IP才可以转换为包周期计费模式 默认值为false
    * periodType  订购周期类型，取值范围： month-月 year-年
    * periodNum  订购周期的周期数。 取值范围： period_type=month时，取值范围为[1,9]。 period_type=year时，取值范围为[1,3]。
    * autoPay  是否自动支付。 true：自动支付，需要确保账户余额充足，如果余额不足则会生成异常订单，只能作废此订单 false：只生成订单不扣费 默认值为false
    * autoRenew  是否自动续费。默认值：false
    *
    * @var string[]
    */
    protected static $getters = [
            'includeDataDisks' => 'getIncludeDataDisks',
            'includePublicips' => 'getIncludePublicips',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'autoPay' => 'getAutoPay',
            'autoRenew' => 'getAutoRenew'
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
        $this->container['includeDataDisks'] = isset($data['includeDataDisks']) ? $data['includeDataDisks'] : null;
        $this->container['includePublicips'] = isset($data['includePublicips']) ? $data['includePublicips'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['autoPay'] = isset($data['autoPay']) ? $data['autoPay'] : null;
        $this->container['autoRenew'] = isset($data['autoRenew']) ? $data['autoRenew'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
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
    * Gets includeDataDisks
    *  是否连同支持的按需数据盘一起转为包周期。 当参数为true，包括按需非共享的数据盘，不包括共享云硬盘，DSS和DESS硬盘 默认值为false
    *
    * @return bool|null
    */
    public function getIncludeDataDisks()
    {
        return $this->container['includeDataDisks'];
    }

    /**
    * Sets includeDataDisks
    *
    * @param bool|null $includeDataDisks 是否连同支持的按需数据盘一起转为包周期。 当参数为true，包括按需非共享的数据盘，不包括共享云硬盘，DSS和DESS硬盘 默认值为false
    *
    * @return $this
    */
    public function setIncludeDataDisks($includeDataDisks)
    {
        $this->container['includeDataDisks'] = $includeDataDisks;
        return $this;
    }

    /**
    * Gets includePublicips
    *  是否连同弹性公网IP一起转为包周期 只有“独享”、“按带宽计费”的弹性公网IP才可以转换为包周期计费模式 默认值为false
    *
    * @return bool|null
    */
    public function getIncludePublicips()
    {
        return $this->container['includePublicips'];
    }

    /**
    * Sets includePublicips
    *
    * @param bool|null $includePublicips 是否连同弹性公网IP一起转为包周期 只有“独享”、“按带宽计费”的弹性公网IP才可以转换为包周期计费模式 默认值为false
    *
    * @return $this
    */
    public function setIncludePublicips($includePublicips)
    {
        $this->container['includePublicips'] = $includePublicips;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型，取值范围： month-月 year-年
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType 订购周期类型，取值范围： month-月 year-年
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
    *  订购周期的周期数。 取值范围： period_type=month时，取值范围为[1,9]。 period_type=year时，取值范围为[1,3]。
    *
    * @return string
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param string $periodNum 订购周期的周期数。 取值范围： period_type=month时，取值范围为[1,9]。 period_type=year时，取值范围为[1,3]。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets autoPay
    *  是否自动支付。 true：自动支付，需要确保账户余额充足，如果余额不足则会生成异常订单，只能作废此订单 false：只生成订单不扣费 默认值为false
    *
    * @return bool|null
    */
    public function getAutoPay()
    {
        return $this->container['autoPay'];
    }

    /**
    * Sets autoPay
    *
    * @param bool|null $autoPay 是否自动支付。 true：自动支付，需要确保账户余额充足，如果余额不足则会生成异常订单，只能作废此订单 false：只生成订单不扣费 默认值为false
    *
    * @return $this
    */
    public function setAutoPay($autoPay)
    {
        $this->container['autoPay'] = $autoPay;
        return $this;
    }

    /**
    * Gets autoRenew
    *  是否自动续费。默认值：false
    *
    * @return bool|null
    */
    public function getAutoRenew()
    {
        return $this->container['autoRenew'];
    }

    /**
    * Sets autoRenew
    *
    * @param bool|null $autoRenew 是否自动续费。默认值：false
    *
    * @return $this
    */
    public function setAutoRenew($autoRenew)
    {
        $this->container['autoRenew'] = $autoRenew;
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

