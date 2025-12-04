<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNet2CloudPhoneServerRequestBodyExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNet2CloudPhoneServerRequestBody_extend_param';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  计费类型。  [- 0：包周期](tag:hws,hws_hk,cmcc,ctc) [- 1：按需](tag:fcs)
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 当订购周期为月时，取值范围[1, 9]。 当订购周期为年时，取值范围[1,10]。
    * isAutoPay  是否自动付款。默认不自动付款。 - 1：自动付款 - 0：不自动付款
    * isAutoRenew  是否自动续订。默认不自动续订。 - 1：自动续订 - 0：不自动续订
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'int',
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoPay' => 'int',
            'isAutoRenew' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  计费类型。  [- 0：包周期](tag:hws,hws_hk,cmcc,ctc) [- 1：按需](tag:fcs)
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 当订购周期为月时，取值范围[1, 9]。 当订购周期为年时，取值范围[1,10]。
    * isAutoPay  是否自动付款。默认不自动付款。 - 1：自动付款 - 0：不自动付款
    * isAutoRenew  是否自动续订。默认不自动续订。 - 1：自动续订 - 0：不自动续订
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => 'int32',
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'isAutoPay' => 'int32',
        'isAutoRenew' => 'int32',
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
    * chargingMode  计费类型。  [- 0：包周期](tag:hws,hws_hk,cmcc,ctc) [- 1：按需](tag:fcs)
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 当订购周期为月时，取值范围[1, 9]。 当订购周期为年时，取值范围[1,10]。
    * isAutoPay  是否自动付款。默认不自动付款。 - 1：自动付款 - 0：不自动付款
    * isAutoRenew  是否自动续订。默认不自动续订。 - 1：自动续订 - 0：不自动续订
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
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
    * chargingMode  计费类型。  [- 0：包周期](tag:hws,hws_hk,cmcc,ctc) [- 1：按需](tag:fcs)
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 当订购周期为月时，取值范围[1, 9]。 当订购周期为年时，取值范围[1,10]。
    * isAutoPay  是否自动付款。默认不自动付款。 - 1：自动付款 - 0：不自动付款
    * isAutoRenew  是否自动续订。默认不自动续订。 - 1：自动续订 - 0：不自动续订
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
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
    * chargingMode  计费类型。  [- 0：包周期](tag:hws,hws_hk,cmcc,ctc) [- 1：按需](tag:fcs)
    * periodType  订购周期类型。 - 2：月 - 3：年
    * periodNum  订购周期数。 当订购周期为月时，取值范围[1, 9]。 当订购周期为年时，取值范围[1,10]。
    * isAutoPay  是否自动付款。默认不自动付款。 - 1：自动付款 - 0：不自动付款
    * isAutoRenew  是否自动续订。默认不自动续订。 - 1：自动续订 - 0：不自动续订
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
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
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            if (($this->container['chargingMode'] > 128)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be smaller than or equal to 128.";
            }
            if (($this->container['chargingMode'] < -128)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be bigger than or equal to -128.";
            }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if (($this->container['periodType'] > 128)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 128.";
            }
            if (($this->container['periodType'] < -128)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to -128.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 128)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 128.";
            }
            if (($this->container['periodNum'] < -128)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] > 128)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['isAutoPay']) && ($this->container['isAutoPay'] < -128)) {
                $invalidProperties[] = "invalid value for 'isAutoPay', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] > 128)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['isAutoRenew']) && ($this->container['isAutoRenew'] < -128)) {
                $invalidProperties[] = "invalid value for 'isAutoRenew', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    *  计费类型。  [- 0：包周期](tag:hws,hws_hk,cmcc,ctc) [- 1：按需](tag:fcs)
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费类型。  [- 0：包周期](tag:hws,hws_hk,cmcc,ctc) [- 1：按需](tag:fcs)
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
    *  订购周期类型。 - 2：月 - 3：年
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
    * @param int $periodType 订购周期类型。 - 2：月 - 3：年
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
    *  订购周期数。 当订购周期为月时，取值范围[1, 9]。 当订购周期为年时，取值范围[1,10]。
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
    * @param int $periodNum 订购周期数。 当订购周期为月时，取值范围[1, 9]。 当订购周期为年时，取值范围[1,10]。
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
    *  是否自动付款。默认不自动付款。 - 1：自动付款 - 0：不自动付款
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
    * @param int|null $isAutoPay 是否自动付款。默认不自动付款。 - 1：自动付款 - 0：不自动付款
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
    *  是否自动续订。默认不自动续订。 - 1：自动续订 - 0：不自动续订
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
    * @param int|null $isAutoRenew 是否自动续订。默认不自动续订。 - 1：自动续订 - 0：不自动续订
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
    *  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
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

