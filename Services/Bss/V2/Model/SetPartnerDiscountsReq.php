<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetPartnerDiscountsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetPartnerDiscountsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indirectPartnerId  精英服务商（二级经销商）ID。 精英服务商（二级经销商）给子客户设置折扣时需要携带这个字段。
    * subCustomerDiscounts  客户折扣信息列表，最大支持10个。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indirectPartnerId' => 'string',
            'subCustomerDiscounts' => '\HuaweiCloud\SDK\Bss\V2\Model\SetSubCustomerDiscountV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indirectPartnerId  精英服务商（二级经销商）ID。 精英服务商（二级经销商）给子客户设置折扣时需要携带这个字段。
    * subCustomerDiscounts  客户折扣信息列表，最大支持10个。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indirectPartnerId' => null,
        'subCustomerDiscounts' => null
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
    * indirectPartnerId  精英服务商（二级经销商）ID。 精英服务商（二级经销商）给子客户设置折扣时需要携带这个字段。
    * subCustomerDiscounts  客户折扣信息列表，最大支持10个。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indirectPartnerId' => 'indirect_partner_id',
            'subCustomerDiscounts' => 'sub_customer_discounts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indirectPartnerId  精英服务商（二级经销商）ID。 精英服务商（二级经销商）给子客户设置折扣时需要携带这个字段。
    * subCustomerDiscounts  客户折扣信息列表，最大支持10个。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $setters = [
            'indirectPartnerId' => 'setIndirectPartnerId',
            'subCustomerDiscounts' => 'setSubCustomerDiscounts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indirectPartnerId  精英服务商（二级经销商）ID。 精英服务商（二级经销商）给子客户设置折扣时需要携带这个字段。
    * subCustomerDiscounts  客户折扣信息列表，最大支持10个。 具体请参见表1。
    *
    * @var string[]
    */
    protected static $getters = [
            'indirectPartnerId' => 'getIndirectPartnerId',
            'subCustomerDiscounts' => 'getSubCustomerDiscounts'
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
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['subCustomerDiscounts'] = isset($data['subCustomerDiscounts']) ? $data['subCustomerDiscounts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subCustomerDiscounts'] === null) {
            $invalidProperties[] = "'subCustomerDiscounts' can't be null";
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
    * Gets indirectPartnerId
    *  精英服务商（二级经销商）ID。 精英服务商（二级经销商）给子客户设置折扣时需要携带这个字段。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 精英服务商（二级经销商）ID。 精英服务商（二级经销商）给子客户设置折扣时需要携带这个字段。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets subCustomerDiscounts
    *  客户折扣信息列表，最大支持10个。 具体请参见表1。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\SetSubCustomerDiscountV2[]
    */
    public function getSubCustomerDiscounts()
    {
        return $this->container['subCustomerDiscounts'];
    }

    /**
    * Sets subCustomerDiscounts
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\SetSubCustomerDiscountV2[] $subCustomerDiscounts 客户折扣信息列表，最大支持10个。 具体请参见表1。
    *
    * @return $this
    */
    public function setSubCustomerDiscounts($subCustomerDiscounts)
    {
        $this->container['subCustomerDiscounts'] = $subCustomerDiscounts;
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

