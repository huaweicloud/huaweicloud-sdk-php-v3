<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdjustCouponQuotasReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdjustCouponQuotasReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaId  华为云伙伴能力中心发放的代金券额度的ID。获取方法请参见查询优惠券额度。
    * indirectPartnerIds  精英服务商ID列表。
    * quotaAmount  华为云伙伴能力中心向精英服务商发放的代金券额度值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaId' => 'string',
            'indirectPartnerIds' => 'string[]',
            'quotaAmount' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaId  华为云伙伴能力中心发放的代金券额度的ID。获取方法请参见查询优惠券额度。
    * indirectPartnerIds  精英服务商ID列表。
    * quotaAmount  华为云伙伴能力中心向精英服务商发放的代金券额度值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaId' => null,
        'indirectPartnerIds' => null,
        'quotaAmount' => 'double'
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
    * quotaId  华为云伙伴能力中心发放的代金券额度的ID。获取方法请参见查询优惠券额度。
    * indirectPartnerIds  精英服务商ID列表。
    * quotaAmount  华为云伙伴能力中心向精英服务商发放的代金券额度值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaId' => 'quota_id',
            'indirectPartnerIds' => 'indirect_partner_ids',
            'quotaAmount' => 'quota_amount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaId  华为云伙伴能力中心发放的代金券额度的ID。获取方法请参见查询优惠券额度。
    * indirectPartnerIds  精英服务商ID列表。
    * quotaAmount  华为云伙伴能力中心向精英服务商发放的代金券额度值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaId' => 'setQuotaId',
            'indirectPartnerIds' => 'setIndirectPartnerIds',
            'quotaAmount' => 'setQuotaAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaId  华为云伙伴能力中心发放的代金券额度的ID。获取方法请参见查询优惠券额度。
    * indirectPartnerIds  精英服务商ID列表。
    * quotaAmount  华为云伙伴能力中心向精英服务商发放的代金券额度值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaId' => 'getQuotaId',
            'indirectPartnerIds' => 'getIndirectPartnerIds',
            'quotaAmount' => 'getQuotaAmount'
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
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['indirectPartnerIds'] = isset($data['indirectPartnerIds']) ? $data['indirectPartnerIds'] : null;
        $this->container['quotaAmount'] = isset($data['quotaAmount']) ? $data['quotaAmount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quotaId'] === null) {
            $invalidProperties[] = "'quotaId' can't be null";
        }
            if ((mb_strlen($this->container['quotaId']) > 64)) {
                $invalidProperties[] = "invalid value for 'quotaId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['quotaId']) < 1)) {
                $invalidProperties[] = "invalid value for 'quotaId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['indirectPartnerIds'] === null) {
            $invalidProperties[] = "'indirectPartnerIds' can't be null";
        }
        if ($this->container['quotaAmount'] === null) {
            $invalidProperties[] = "'quotaAmount' can't be null";
        }
            if (($this->container['quotaAmount'] > 1E+8)) {
                $invalidProperties[] = "invalid value for 'quotaAmount', must be smaller than or equal to 1E+8.";
            }
            if (($this->container['quotaAmount'] < 0.01)) {
                $invalidProperties[] = "invalid value for 'quotaAmount', must be bigger than or equal to 0.01.";
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
    * Gets quotaId
    *  华为云伙伴能力中心发放的代金券额度的ID。获取方法请参见查询优惠券额度。
    *
    * @return string
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string $quotaId 华为云伙伴能力中心发放的代金券额度的ID。获取方法请参见查询优惠券额度。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets indirectPartnerIds
    *  精英服务商ID列表。
    *
    * @return string[]
    */
    public function getIndirectPartnerIds()
    {
        return $this->container['indirectPartnerIds'];
    }

    /**
    * Sets indirectPartnerIds
    *
    * @param string[] $indirectPartnerIds 精英服务商ID列表。
    *
    * @return $this
    */
    public function setIndirectPartnerIds($indirectPartnerIds)
    {
        $this->container['indirectPartnerIds'] = $indirectPartnerIds;
        return $this;
    }

    /**
    * Gets quotaAmount
    *  华为云伙伴能力中心向精英服务商发放的代金券额度值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @return double
    */
    public function getQuotaAmount()
    {
        return $this->container['quotaAmount'];
    }

    /**
    * Sets quotaAmount
    *
    * @param double $quotaAmount 华为云伙伴能力中心向精英服务商发放的代金券额度值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @return $this
    */
    public function setQuotaAmount($quotaAmount)
    {
        $this->container['quotaAmount'] = $quotaAmount;
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

