<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCostsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCostsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeCondition  timeCondition
    * groupby  查询维度，具体请参见表 GroupBy。
    * costType  成本类型。UNBLENDED_COST：原始成本AMORTIZED_COST：摊销成本
    * amountType  展示的金额类型。PAYMENT_AMOUNT：应付NET_AMOUNT：实付
    * offset  偏移量。从0开始，默认为0
    * limit  每次查询的记录数，默认为10
    * filters  过滤条件，具体请参见表 过滤条件。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeCondition' => '\HuaweiCloud\SDK\Bssintl\V2\Model\TimeCondition',
            'groupby' => '\HuaweiCloud\SDK\Bssintl\V2\Model\GroupBy[]',
            'costType' => 'string',
            'amountType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'filters' => '\HuaweiCloud\SDK\Bssintl\V2\Model\FilterV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeCondition  timeCondition
    * groupby  查询维度，具体请参见表 GroupBy。
    * costType  成本类型。UNBLENDED_COST：原始成本AMORTIZED_COST：摊销成本
    * amountType  展示的金额类型。PAYMENT_AMOUNT：应付NET_AMOUNT：实付
    * offset  偏移量。从0开始，默认为0
    * limit  每次查询的记录数，默认为10
    * filters  过滤条件，具体请参见表 过滤条件。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeCondition' => null,
        'groupby' => null,
        'costType' => null,
        'amountType' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'filters' => null
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
    * timeCondition  timeCondition
    * groupby  查询维度，具体请参见表 GroupBy。
    * costType  成本类型。UNBLENDED_COST：原始成本AMORTIZED_COST：摊销成本
    * amountType  展示的金额类型。PAYMENT_AMOUNT：应付NET_AMOUNT：实付
    * offset  偏移量。从0开始，默认为0
    * limit  每次查询的记录数，默认为10
    * filters  过滤条件，具体请参见表 过滤条件。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeCondition' => 'time_condition',
            'groupby' => 'groupby',
            'costType' => 'cost_type',
            'amountType' => 'amount_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'filters' => 'filters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeCondition  timeCondition
    * groupby  查询维度，具体请参见表 GroupBy。
    * costType  成本类型。UNBLENDED_COST：原始成本AMORTIZED_COST：摊销成本
    * amountType  展示的金额类型。PAYMENT_AMOUNT：应付NET_AMOUNT：实付
    * offset  偏移量。从0开始，默认为0
    * limit  每次查询的记录数，默认为10
    * filters  过滤条件，具体请参见表 过滤条件。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'timeCondition' => 'setTimeCondition',
            'groupby' => 'setGroupby',
            'costType' => 'setCostType',
            'amountType' => 'setAmountType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'filters' => 'setFilters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeCondition  timeCondition
    * groupby  查询维度，具体请参见表 GroupBy。
    * costType  成本类型。UNBLENDED_COST：原始成本AMORTIZED_COST：摊销成本
    * amountType  展示的金额类型。PAYMENT_AMOUNT：应付NET_AMOUNT：实付
    * offset  偏移量。从0开始，默认为0
    * limit  每次查询的记录数，默认为10
    * filters  过滤条件，具体请参见表 过滤条件。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'timeCondition' => 'getTimeCondition',
            'groupby' => 'getGroupby',
            'costType' => 'getCostType',
            'amountType' => 'getAmountType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'filters' => 'getFilters'
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
        $this->container['timeCondition'] = isset($data['timeCondition']) ? $data['timeCondition'] : null;
        $this->container['groupby'] = isset($data['groupby']) ? $data['groupby'] : null;
        $this->container['costType'] = isset($data['costType']) ? $data['costType'] : null;
        $this->container['amountType'] = isset($data['amountType']) ? $data['amountType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timeCondition'] === null) {
            $invalidProperties[] = "'timeCondition' can't be null";
        }
        if ($this->container['groupby'] === null) {
            $invalidProperties[] = "'groupby' can't be null";
        }
        if ($this->container['costType'] === null) {
            $invalidProperties[] = "'costType' can't be null";
        }
            if ((mb_strlen($this->container['costType']) > 256)) {
                $invalidProperties[] = "invalid value for 'costType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['costType']) < 1)) {
                $invalidProperties[] = "invalid value for 'costType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['amountType'] === null) {
            $invalidProperties[] = "'amountType' can't be null";
        }
            if ((mb_strlen($this->container['amountType']) > 256)) {
                $invalidProperties[] = "invalid value for 'amountType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['amountType']) < 1)) {
                $invalidProperties[] = "invalid value for 'amountType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 200000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets timeCondition
    *  timeCondition
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\TimeCondition
    */
    public function getTimeCondition()
    {
        return $this->container['timeCondition'];
    }

    /**
    * Sets timeCondition
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\TimeCondition $timeCondition timeCondition
    *
    * @return $this
    */
    public function setTimeCondition($timeCondition)
    {
        $this->container['timeCondition'] = $timeCondition;
        return $this;
    }

    /**
    * Gets groupby
    *  查询维度，具体请参见表 GroupBy。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\GroupBy[]
    */
    public function getGroupby()
    {
        return $this->container['groupby'];
    }

    /**
    * Sets groupby
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\GroupBy[] $groupby 查询维度，具体请参见表 GroupBy。
    *
    * @return $this
    */
    public function setGroupby($groupby)
    {
        $this->container['groupby'] = $groupby;
        return $this;
    }

    /**
    * Gets costType
    *  成本类型。UNBLENDED_COST：原始成本AMORTIZED_COST：摊销成本
    *
    * @return string
    */
    public function getCostType()
    {
        return $this->container['costType'];
    }

    /**
    * Sets costType
    *
    * @param string $costType 成本类型。UNBLENDED_COST：原始成本AMORTIZED_COST：摊销成本
    *
    * @return $this
    */
    public function setCostType($costType)
    {
        $this->container['costType'] = $costType;
        return $this;
    }

    /**
    * Gets amountType
    *  展示的金额类型。PAYMENT_AMOUNT：应付NET_AMOUNT：实付
    *
    * @return string
    */
    public function getAmountType()
    {
        return $this->container['amountType'];
    }

    /**
    * Sets amountType
    *
    * @param string $amountType 展示的金额类型。PAYMENT_AMOUNT：应付NET_AMOUNT：实付
    *
    * @return $this
    */
    public function setAmountType($amountType)
    {
        $this->container['amountType'] = $amountType;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量。从0开始，默认为0
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
    * @param int|null $offset 偏移量。从0开始，默认为0
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
    *  每次查询的记录数，默认为10
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
    * @param int|null $limit 每次查询的记录数，默认为10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets filters
    *  过滤条件，具体请参见表 过滤条件。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\FilterV2[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\FilterV2[]|null $filters 过滤条件，具体请参见表 过滤条件。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
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

