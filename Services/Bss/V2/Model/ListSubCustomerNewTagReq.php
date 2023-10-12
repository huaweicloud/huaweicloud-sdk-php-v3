<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerNewTagReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerNewTagReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerIds  客户ID列表。单个客户ID最大长度：64。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 示例1，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。 示例2，查询总数20条，期望每页返回10条数据，则获取第一页数据，入参offset填写0，limit填写10；获取第二页数据，入参offset填写10，limit填写10。
    * limit  每次查询的客户数量。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的客户新客标签，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerIds' => 'string[]',
            'offset' => 'int',
            'limit' => 'int',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerIds  客户ID列表。单个客户ID最大长度：64。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 示例1，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。 示例2，查询总数20条，期望每页返回10条数据，则获取第一页数据，入参offset填写0，limit填写10；获取第二页数据，入参offset填写10，limit填写10。
    * limit  每次查询的客户数量。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的客户新客标签，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerIds' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'indirectPartnerId' => null
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
    * customerIds  客户ID列表。单个客户ID最大长度：64。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 示例1，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。 示例2，查询总数20条，期望每页返回10条数据，则获取第一页数据，入参offset填写0，limit填写10；获取第二页数据，入参offset填写10，limit填写10。
    * limit  每次查询的客户数量。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的客户新客标签，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerIds' => 'customer_ids',
            'offset' => 'offset',
            'limit' => 'limit',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerIds  客户ID列表。单个客户ID最大长度：64。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 示例1，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。 示例2，查询总数20条，期望每页返回10条数据，则获取第一页数据，入参offset填写0，limit填写10；获取第二页数据，入参offset填写10，limit填写10。
    * limit  每次查询的客户数量。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的客户新客标签，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerIds' => 'setCustomerIds',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerIds  客户ID列表。单个客户ID最大长度：64。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 示例1，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。 示例2，查询总数20条，期望每页返回10条数据，则获取第一页数据，入参offset填写0，limit填写10；获取第二页数据，入参offset填写10，limit填写10。
    * limit  每次查询的客户数量。默认值为10。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的客户新客标签，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerIds' => 'getCustomerIds',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['customerIds'] = isset($data['customerIds']) ? $data['customerIds'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
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
    * Gets customerIds
    *  客户ID列表。单个客户ID最大长度：64。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return string[]|null
    */
    public function getCustomerIds()
    {
        return $this->container['customerIds'];
    }

    /**
    * Sets customerIds
    *
    * @param string[]|null $customerIds 客户ID列表。单个客户ID最大长度：64。 此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setCustomerIds($customerIds)
    {
        $this->container['customerIds'] = $customerIds;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 示例1，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。 示例2，查询总数20条，期望每页返回10条数据，则获取第一页数据，入参offset填写0，limit填写10；获取第二页数据，入参offset填写10，limit填写10。
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
    * @param int|null $offset 偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 示例1，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。 示例2，查询总数20条，期望每页返回10条数据，则获取第一页数据，入参offset填写0，limit填写10；获取第二页数据，入参offset填写10，limit填写10。
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
    *  每次查询的客户数量。默认值为10。
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
    * @param int|null $limit 每次查询的客户数量。默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的客户新客标签，必须携带该字段。除此之外，此参数不做处理。
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
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的客户新客标签，必须携带该字段。除此之外，此参数不做处理。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

