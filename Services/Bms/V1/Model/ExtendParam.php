<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  计费模式。取值范围：prePaid：预付费，即包年包月。默认值是prePaid。
    * regionId  裸金属服务器所在区域ID。请参考地区和终端节点获取。
    * periodType  订购周期类型。取值范围：month：月year：年 说明：chargingMode为prePaid时生效，且为必选值。
    * periodNum  订购周期数。取值范围：periodType=month（周期类型为月）时，取值为[1-9]。periodType=year（周期类型为年）时，取值为1。 说明：chargingMode为prePaid时生效，且为必选值。
    * isAutoRenew  是否自动续订。true：自动续订false：不自动续订 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为不自动续订。
    * isAutoPay  下单订购后，是否自动从客户的帐户中支付，而不需要客户手动去支付。true：是（自动支付）false：否（需要客户手动支付） 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为客户手动支付。
    * enterpriseProjectId  企业项目ID。该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。 说明：关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理API参考》。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'string',
            'regionId' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'string',
            'isAutoPay' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  计费模式。取值范围：prePaid：预付费，即包年包月。默认值是prePaid。
    * regionId  裸金属服务器所在区域ID。请参考地区和终端节点获取。
    * periodType  订购周期类型。取值范围：month：月year：年 说明：chargingMode为prePaid时生效，且为必选值。
    * periodNum  订购周期数。取值范围：periodType=month（周期类型为月）时，取值为[1-9]。periodType=year（周期类型为年）时，取值为1。 说明：chargingMode为prePaid时生效，且为必选值。
    * isAutoRenew  是否自动续订。true：自动续订false：不自动续订 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为不自动续订。
    * isAutoPay  下单订购后，是否自动从客户的帐户中支付，而不需要客户手动去支付。true：是（自动支付）false：否（需要客户手动支付） 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为客户手动支付。
    * enterpriseProjectId  企业项目ID。该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。 说明：关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理API参考》。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => null,
        'regionId' => null,
        'periodType' => null,
        'periodNum' => 'int32',
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'enterpriseProjectId' => null
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
    * chargingMode  计费模式。取值范围：prePaid：预付费，即包年包月。默认值是prePaid。
    * regionId  裸金属服务器所在区域ID。请参考地区和终端节点获取。
    * periodType  订购周期类型。取值范围：month：月year：年 说明：chargingMode为prePaid时生效，且为必选值。
    * periodNum  订购周期数。取值范围：periodType=month（周期类型为月）时，取值为[1-9]。periodType=year（周期类型为年）时，取值为1。 说明：chargingMode为prePaid时生效，且为必选值。
    * isAutoRenew  是否自动续订。true：自动续订false：不自动续订 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为不自动续订。
    * isAutoPay  下单订购后，是否自动从客户的帐户中支付，而不需要客户手动去支付。true：是（自动支付）false：否（需要客户手动支付） 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为客户手动支付。
    * enterpriseProjectId  企业项目ID。该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。 说明：关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理API参考》。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'chargingMode',
            'regionId' => 'regionID',
            'periodType' => 'periodType',
            'periodNum' => 'periodNum',
            'isAutoRenew' => 'isAutoRenew',
            'isAutoPay' => 'isAutoPay',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  计费模式。取值范围：prePaid：预付费，即包年包月。默认值是prePaid。
    * regionId  裸金属服务器所在区域ID。请参考地区和终端节点获取。
    * periodType  订购周期类型。取值范围：month：月year：年 说明：chargingMode为prePaid时生效，且为必选值。
    * periodNum  订购周期数。取值范围：periodType=month（周期类型为月）时，取值为[1-9]。periodType=year（周期类型为年）时，取值为1。 说明：chargingMode为prePaid时生效，且为必选值。
    * isAutoRenew  是否自动续订。true：自动续订false：不自动续订 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为不自动续订。
    * isAutoPay  下单订购后，是否自动从客户的帐户中支付，而不需要客户手动去支付。true：是（自动支付）false：否（需要客户手动支付） 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为客户手动支付。
    * enterpriseProjectId  企业项目ID。该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。 说明：关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理API参考》。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'regionId' => 'setRegionId',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  计费模式。取值范围：prePaid：预付费，即包年包月。默认值是prePaid。
    * regionId  裸金属服务器所在区域ID。请参考地区和终端节点获取。
    * periodType  订购周期类型。取值范围：month：月year：年 说明：chargingMode为prePaid时生效，且为必选值。
    * periodNum  订购周期数。取值范围：periodType=month（周期类型为月）时，取值为[1-9]。periodType=year（周期类型为年）时，取值为1。 说明：chargingMode为prePaid时生效，且为必选值。
    * isAutoRenew  是否自动续订。true：自动续订false：不自动续订 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为不自动续订。
    * isAutoPay  下单订购后，是否自动从客户的帐户中支付，而不需要客户手动去支付。true：是（自动支付）false：否（需要客户手动支付） 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为客户手动支付。
    * enterpriseProjectId  企业项目ID。该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。 说明：关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理API参考》。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'regionId' => 'getRegionId',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const CHARGING_MODE_PRE_PAID = 'prePaid';
    const PERIOD_TYPE_MONTH = 'month';
    const PERIOD_TYPE_YEAR = 'year';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PRE_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_MONTH,
            self::PERIOD_TYPE_YEAR,
        ];
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
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets chargingMode
    *  计费模式。取值范围：prePaid：预付费，即包年包月。默认值是prePaid。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 计费模式。取值范围：prePaid：预付费，即包年包月。默认值是prePaid。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets regionId
    *  裸金属服务器所在区域ID。请参考地区和终端节点获取。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 裸金属服务器所在区域ID。请参考地区和终端节点获取。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型。取值范围：month：月year：年 说明：chargingMode为prePaid时生效，且为必选值。
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType 订购周期类型。取值范围：month：月year：年 说明：chargingMode为prePaid时生效，且为必选值。
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
    *  订购周期数。取值范围：periodType=month（周期类型为月）时，取值为[1-9]。periodType=year（周期类型为年）时，取值为1。 说明：chargingMode为prePaid时生效，且为必选值。
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
    * @param int|null $periodNum 订购周期数。取值范围：periodType=month（周期类型为月）时，取值为[1-9]。periodType=year（周期类型为年）时，取值为1。 说明：chargingMode为prePaid时生效，且为必选值。
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
    *  是否自动续订。true：自动续订false：不自动续订 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为不自动续订。
    *
    * @return string|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param string|null $isAutoRenew 是否自动续订。true：自动续订false：不自动续订 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为不自动续订。
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
    *  下单订购后，是否自动从客户的帐户中支付，而不需要客户手动去支付。true：是（自动支付）false：否（需要客户手动支付） 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为客户手动支付。
    *
    * @return string|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param string|null $isAutoPay 下单订购后，是否自动从客户的帐户中支付，而不需要客户手动去支付。true：是（自动支付）false：否（需要客户手动支付） 说明：chargingMode为prePaid时生效，不指定该参数或者该参数值为空时默认为客户手动支付。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。 说明：关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理API参考》。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。 说明：关于企业项目ID的获取及企业项目特性的详细信息，请参见《企业管理API参考》。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

