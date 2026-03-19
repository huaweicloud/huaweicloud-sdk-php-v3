<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqAllocateDehExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqAllocateDeh_extend_param';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  专属主机计费模式，不传该参数时默认为postPaid。 - prePaid：包周期 - postPaid：按需
    * periodType  订购周期类型。 - month：包月 - year：包年
    * periodNum  订购周期数，大于0的整数，当charging_mode为prePaid时生效，且该字段必选。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoPay' => 'bool',
            'isAutoRenew' => 'bool',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  专属主机计费模式，不传该参数时默认为postPaid。 - prePaid：包周期 - postPaid：按需
    * periodType  订购周期类型。 - month：包月 - year：包年
    * periodNum  订购周期数，大于0的整数，当charging_mode为prePaid时生效，且该字段必选。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => null,
        'periodType' => null,
        'periodNum' => null,
        'isAutoPay' => null,
        'isAutoRenew' => null,
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
    * chargingMode  专属主机计费模式，不传该参数时默认为postPaid。 - prePaid：包周期 - postPaid：按需
    * periodType  订购周期类型。 - month：包月 - year：包年
    * periodNum  订购周期数，大于0的整数，当charging_mode为prePaid时生效，且该字段必选。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoPay' => 'is_auto_pay',
            'isAutoRenew' => 'is_auto_renew',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  专属主机计费模式，不传该参数时默认为postPaid。 - prePaid：包周期 - postPaid：按需
    * periodType  订购周期类型。 - month：包月 - year：包年
    * periodNum  订购周期数，大于0的整数，当charging_mode为prePaid时生效，且该字段必选。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoPay' => 'setIsAutoPay',
            'isAutoRenew' => 'setIsAutoRenew',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  专属主机计费模式，不传该参数时默认为postPaid。 - prePaid：包周期 - postPaid：按需
    * periodType  订购周期类型。 - month：包月 - year：包年
    * periodNum  订购周期数，大于0的整数，当charging_mode为prePaid时生效，且该字段必选。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoPay' => 'getIsAutoPay',
            'isAutoRenew' => 'getIsAutoRenew',
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
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
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
    *  专属主机计费模式，不传该参数时默认为postPaid。 - prePaid：包周期 - postPaid：按需
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
    * @param string|null $chargingMode 专属主机计费模式，不传该参数时默认为postPaid。 - prePaid：包周期 - postPaid：按需
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
    *  订购周期类型。 - month：包月 - year：包年
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
    * @param string|null $periodType 订购周期类型。 - month：包月 - year：包年
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
    *  订购周期数，大于0的整数，当charging_mode为prePaid时生效，且该字段必选。
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
    * @param int|null $periodNum 订购周期数，大于0的整数，当charging_mode为prePaid时生效，且该字段必选。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付。
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
    * @param bool|null $isAutoPay 是否自动支付。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续费。
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
    * @param bool|null $isAutoRenew 是否自动续费。
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
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

