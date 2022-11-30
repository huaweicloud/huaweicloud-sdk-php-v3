<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReclaimCouponQuotasReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReclaimCouponQuotasReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaIds  被回收的云经销商的代金券额度ID。获取方法请参见查询优惠券额度。
    * remark  回收时的备注。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaIds' => 'string[]',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaIds  被回收的云经销商的代金券额度ID。获取方法请参见查询优惠券额度。
    * remark  回收时的备注。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaIds' => null,
        'remark' => null
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
    * quotaIds  被回收的云经销商的代金券额度ID。获取方法请参见查询优惠券额度。
    * remark  回收时的备注。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaIds' => 'quota_ids',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaIds  被回收的云经销商的代金券额度ID。获取方法请参见查询优惠券额度。
    * remark  回收时的备注。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaIds' => 'setQuotaIds',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaIds  被回收的云经销商的代金券额度ID。获取方法请参见查询优惠券额度。
    * remark  回收时的备注。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaIds' => 'getQuotaIds',
            'remark' => 'getRemark'
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
        $this->container['quotaIds'] = isset($data['quotaIds']) ? $data['quotaIds'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quotaIds'] === null) {
            $invalidProperties[] = "'quotaIds' can't be null";
        }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 256)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
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
    * Gets quotaIds
    *  被回收的云经销商的代金券额度ID。获取方法请参见查询优惠券额度。
    *
    * @return string[]
    */
    public function getQuotaIds()
    {
        return $this->container['quotaIds'];
    }

    /**
    * Sets quotaIds
    *
    * @param string[] $quotaIds 被回收的云经销商的代金券额度ID。获取方法请参见查询优惠券额度。
    *
    * @return $this
    */
    public function setQuotaIds($quotaIds)
    {
        $this->container['quotaIds'] = $quotaIds;
        return $this;
    }

    /**
    * Gets remark
    *  回收时的备注。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 回收时的备注。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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

