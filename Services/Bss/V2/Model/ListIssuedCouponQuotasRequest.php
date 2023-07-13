<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIssuedCouponQuotasRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIssuedCouponQuotasRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaId  云经销商的代金券额度ID。获取方法请参见查询优惠券额度。此参数不携带或携带值为空时，不作为筛选条件。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。如果需要查询云经销商伙伴的代金券额度，必须携带该字段。除此之外，此参数不做处理。
    * parentQuotaId  父额度ID，即华为云总经销商用于发放给云经销商代金券额度的额度ID。此参数不携带时，不作为筛选条件；携带值为空或携带值为空串时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaId' => 'string',
            'indirectPartnerId' => 'string',
            'parentQuotaId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaId  云经销商的代金券额度ID。获取方法请参见查询优惠券额度。此参数不携带或携带值为空时，不作为筛选条件。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。如果需要查询云经销商伙伴的代金券额度，必须携带该字段。除此之外，此参数不做处理。
    * parentQuotaId  父额度ID，即华为云总经销商用于发放给云经销商代金券额度的额度ID。此参数不携带时，不作为筛选条件；携带值为空或携带值为空串时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaId' => null,
        'indirectPartnerId' => null,
        'parentQuotaId' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * quotaId  云经销商的代金券额度ID。获取方法请参见查询优惠券额度。此参数不携带或携带值为空时，不作为筛选条件。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。如果需要查询云经销商伙伴的代金券额度，必须携带该字段。除此之外，此参数不做处理。
    * parentQuotaId  父额度ID，即华为云总经销商用于发放给云经销商代金券额度的额度ID。此参数不携带时，不作为筛选条件；携带值为空或携带值为空串时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaId' => 'quota_id',
            'indirectPartnerId' => 'indirect_partner_id',
            'parentQuotaId' => 'parent_quota_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaId  云经销商的代金券额度ID。获取方法请参见查询优惠券额度。此参数不携带或携带值为空时，不作为筛选条件。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。如果需要查询云经销商伙伴的代金券额度，必须携带该字段。除此之外，此参数不做处理。
    * parentQuotaId  父额度ID，即华为云总经销商用于发放给云经销商代金券额度的额度ID。此参数不携带时，不作为筛选条件；携带值为空或携带值为空串时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaId' => 'setQuotaId',
            'indirectPartnerId' => 'setIndirectPartnerId',
            'parentQuotaId' => 'setParentQuotaId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaId  云经销商的代金券额度ID。获取方法请参见查询优惠券额度。此参数不携带或携带值为空时，不作为筛选条件。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。如果需要查询云经销商伙伴的代金券额度，必须携带该字段。除此之外，此参数不做处理。
    * parentQuotaId  父额度ID，即华为云总经销商用于发放给云经销商代金券额度的额度ID。此参数不携带时，不作为筛选条件；携带值为空或携带值为空串时，作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数。默认值为10。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaId' => 'getQuotaId',
            'indirectPartnerId' => 'getIndirectPartnerId',
            'parentQuotaId' => 'getParentQuotaId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['parentQuotaId'] = isset($data['parentQuotaId']) ? $data['parentQuotaId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    *  云经销商的代金券额度ID。获取方法请参见查询优惠券额度。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string|null $quotaId 云经销商的代金券额度ID。获取方法请参见查询优惠券额度。此参数不携带或携带值为空时，不作为筛选条件。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。如果需要查询云经销商伙伴的代金券额度，必须携带该字段。除此之外，此参数不做处理。
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
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。如果需要查询云经销商伙伴的代金券额度，必须携带该字段。除此之外，此参数不做处理。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets parentQuotaId
    *  父额度ID，即华为云总经销商用于发放给云经销商代金券额度的额度ID。此参数不携带时，不作为筛选条件；携带值为空或携带值为空串时，作为筛选条件。
    *
    * @return string|null
    */
    public function getParentQuotaId()
    {
        return $this->container['parentQuotaId'];
    }

    /**
    * Sets parentQuotaId
    *
    * @param string|null $parentQuotaId 父额度ID，即华为云总经销商用于发放给云经销商代金券额度的额度ID。此参数不携带时，不作为筛选条件；携带值为空或携带值为空串时，作为筛选条件。
    *
    * @return $this
    */
    public function setParentQuotaId($parentQuotaId)
    {
        $this->container['parentQuotaId'] = $parentQuotaId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每次查询记录数。默认值为10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每次查询记录数。默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

