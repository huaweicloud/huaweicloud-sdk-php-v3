<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryIndirectPartnersReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryIndirectPartnersReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountName  云经销商伙伴的账号名。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * associatedOnBegin  云经销商关联华为云总经销商的开始时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * associatedOnEnd  云经销商关联华为云总经销商的结束时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。如果需要查询具体某个云经销商伙伴，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountName' => 'string',
            'associatedOnBegin' => 'string',
            'associatedOnEnd' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountName  云经销商伙伴的账号名。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * associatedOnBegin  云经销商关联华为云总经销商的开始时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * associatedOnEnd  云经销商关联华为云总经销商的结束时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。如果需要查询具体某个云经销商伙伴，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountName' => null,
        'associatedOnBegin' => null,
        'associatedOnEnd' => null,
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
    * accountName  云经销商伙伴的账号名。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * associatedOnBegin  云经销商关联华为云总经销商的开始时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * associatedOnEnd  云经销商关联华为云总经销商的结束时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。如果需要查询具体某个云经销商伙伴，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountName' => 'account_name',
            'associatedOnBegin' => 'associated_on_begin',
            'associatedOnEnd' => 'associated_on_end',
            'offset' => 'offset',
            'limit' => 'limit',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountName  云经销商伙伴的账号名。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * associatedOnBegin  云经销商关联华为云总经销商的开始时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * associatedOnEnd  云经销商关联华为云总经销商的结束时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。如果需要查询具体某个云经销商伙伴，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountName' => 'setAccountName',
            'associatedOnBegin' => 'setAssociatedOnBegin',
            'associatedOnEnd' => 'setAssociatedOnEnd',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountName  云经销商伙伴的账号名。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    * associatedOnBegin  云经销商关联华为云总经销商的开始时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * associatedOnEnd  云经销商关联华为云总经销商的结束时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    * indirectPartnerId  云经销商ID。如果需要查询具体某个云经销商伙伴，必须携带该字段。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountName' => 'getAccountName',
            'associatedOnBegin' => 'getAssociatedOnBegin',
            'associatedOnEnd' => 'getAssociatedOnEnd',
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['associatedOnBegin'] = isset($data['associatedOnBegin']) ? $data['associatedOnBegin'] : null;
        $this->container['associatedOnEnd'] = isset($data['associatedOnEnd']) ? $data['associatedOnEnd'] : null;
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
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) < 0)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedOnBegin']) && (mb_strlen($this->container['associatedOnBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'associatedOnBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['associatedOnBegin']) && (mb_strlen($this->container['associatedOnBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedOnBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedOnEnd']) && (mb_strlen($this->container['associatedOnEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'associatedOnEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['associatedOnEnd']) && (mb_strlen($this->container['associatedOnEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedOnEnd', the character length must be bigger than or equal to 0.";
            }
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
    * Gets accountName
    *  云经销商伙伴的账号名。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 云经销商伙伴的账号名。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets associatedOnBegin
    *  云经销商关联华为云总经销商的开始时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getAssociatedOnBegin()
    {
        return $this->container['associatedOnBegin'];
    }

    /**
    * Sets associatedOnBegin
    *
    * @param string|null $associatedOnBegin 云经销商关联华为云总经销商的开始时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setAssociatedOnBegin($associatedOnBegin)
    {
        $this->container['associatedOnBegin'] = $associatedOnBegin;
        return $this;
    }

    /**
    * Gets associatedOnEnd
    *  云经销商关联华为云总经销商的结束时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getAssociatedOnEnd()
    {
        return $this->container['associatedOnEnd'];
    }

    /**
    * Sets associatedOnEnd
    *
    * @param string|null $associatedOnEnd 云经销商关联华为云总经销商的结束时间。 UTC时间（包括时区），比如2016-03-28T00:00:00Z。 此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setAssociatedOnEnd($associatedOnEnd)
    {
        $this->container['associatedOnEnd'] = $associatedOnEnd;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    *  每次查询的数量限制。默认值为10。
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
    * @param int|null $limit 每次查询的数量限制。默认值为10。
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
    *  云经销商ID。如果需要查询具体某个云经销商伙伴，必须携带该字段。除此之外，此参数不做处理。
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
    * @param string|null $indirectPartnerId 云经销商ID。如果需要查询具体某个云经销商伙伴，必须携带该字段。除此之外，此参数不做处理。
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

