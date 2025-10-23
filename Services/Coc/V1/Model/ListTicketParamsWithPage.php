<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTicketParamsWithPage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTicketParamsWithPage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    * page  当前页
    * perPage  每页数量
    * containAll  是否返回所有数据
    * containTotal  是否返回总数
    * containSubTicket  是否包含子单
    * ticketTypes  搜索的工单类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stringFilters' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter[]',
            'sortFilter' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter',
            'page' => 'int',
            'perPage' => 'int',
            'containAll' => 'bool',
            'containTotal' => 'bool',
            'containSubTicket' => 'bool',
            'ticketTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    * page  当前页
    * perPage  每页数量
    * containAll  是否返回所有数据
    * containTotal  是否返回总数
    * containSubTicket  是否包含子单
    * ticketTypes  搜索的工单类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stringFilters' => null,
        'sortFilter' => null,
        'page' => 'int32',
        'perPage' => 'int32',
        'containAll' => null,
        'containTotal' => null,
        'containSubTicket' => null,
        'ticketTypes' => null
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
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    * page  当前页
    * perPage  每页数量
    * containAll  是否返回所有数据
    * containTotal  是否返回总数
    * containSubTicket  是否包含子单
    * ticketTypes  搜索的工单类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stringFilters' => 'string_filters',
            'sortFilter' => 'sort_filter',
            'page' => 'page',
            'perPage' => 'per_page',
            'containAll' => 'contain_all',
            'containTotal' => 'contain_total',
            'containSubTicket' => 'contain_sub_ticket',
            'ticketTypes' => 'ticket_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    * page  当前页
    * perPage  每页数量
    * containAll  是否返回所有数据
    * containTotal  是否返回总数
    * containSubTicket  是否包含子单
    * ticketTypes  搜索的工单类型
    *
    * @var string[]
    */
    protected static $setters = [
            'stringFilters' => 'setStringFilters',
            'sortFilter' => 'setSortFilter',
            'page' => 'setPage',
            'perPage' => 'setPerPage',
            'containAll' => 'setContainAll',
            'containTotal' => 'setContainTotal',
            'containSubTicket' => 'setContainSubTicket',
            'ticketTypes' => 'setTicketTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    * page  当前页
    * perPage  每页数量
    * containAll  是否返回所有数据
    * containTotal  是否返回总数
    * containSubTicket  是否包含子单
    * ticketTypes  搜索的工单类型
    *
    * @var string[]
    */
    protected static $getters = [
            'stringFilters' => 'getStringFilters',
            'sortFilter' => 'getSortFilter',
            'page' => 'getPage',
            'perPage' => 'getPerPage',
            'containAll' => 'getContainAll',
            'containTotal' => 'getContainTotal',
            'containSubTicket' => 'getContainSubTicket',
            'ticketTypes' => 'getTicketTypes'
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
        $this->container['stringFilters'] = isset($data['stringFilters']) ? $data['stringFilters'] : null;
        $this->container['sortFilter'] = isset($data['sortFilter']) ? $data['sortFilter'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['containAll'] = isset($data['containAll']) ? $data['containAll'] : null;
        $this->container['containTotal'] = isset($data['containTotal']) ? $data['containTotal'] : null;
        $this->container['containSubTicket'] = isset($data['containSubTicket']) ? $data['containSubTicket'] : null;
        $this->container['ticketTypes'] = isset($data['ticketTypes']) ? $data['ticketTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['page']) && ($this->container['page'] > 1024000)) {
                $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 1024000.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] < 0)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] > 200)) {
                $invalidProperties[] = "invalid value for 'perPage', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] < 0)) {
                $invalidProperties[] = "invalid value for 'perPage', must be bigger than or equal to 0.";
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
    * Gets stringFilters
    *  字符串搜索条件，可根据该条件搜索到具体的工单。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter[]|null
    */
    public function getStringFilters()
    {
        return $this->container['stringFilters'];
    }

    /**
    * Sets stringFilters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter[]|null $stringFilters 字符串搜索条件，可根据该条件搜索到具体的工单。
    *
    * @return $this
    */
    public function setStringFilters($stringFilters)
    {
        $this->container['stringFilters'] = $stringFilters;
        return $this;
    }

    /**
    * Gets sortFilter
    *  sortFilter
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter|null
    */
    public function getSortFilter()
    {
        return $this->container['sortFilter'];
    }

    /**
    * Sets sortFilter
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter|null $sortFilter sortFilter
    *
    * @return $this
    */
    public function setSortFilter($sortFilter)
    {
        $this->container['sortFilter'] = $sortFilter;
        return $this;
    }

    /**
    * Gets page
    *  当前页
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 当前页
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets perPage
    *  每页数量
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage 每页数量
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets containAll
    *  是否返回所有数据
    *
    * @return bool|null
    */
    public function getContainAll()
    {
        return $this->container['containAll'];
    }

    /**
    * Sets containAll
    *
    * @param bool|null $containAll 是否返回所有数据
    *
    * @return $this
    */
    public function setContainAll($containAll)
    {
        $this->container['containAll'] = $containAll;
        return $this;
    }

    /**
    * Gets containTotal
    *  是否返回总数
    *
    * @return bool|null
    */
    public function getContainTotal()
    {
        return $this->container['containTotal'];
    }

    /**
    * Sets containTotal
    *
    * @param bool|null $containTotal 是否返回总数
    *
    * @return $this
    */
    public function setContainTotal($containTotal)
    {
        $this->container['containTotal'] = $containTotal;
        return $this;
    }

    /**
    * Gets containSubTicket
    *  是否包含子单
    *
    * @return bool|null
    */
    public function getContainSubTicket()
    {
        return $this->container['containSubTicket'];
    }

    /**
    * Sets containSubTicket
    *
    * @param bool|null $containSubTicket 是否包含子单
    *
    * @return $this
    */
    public function setContainSubTicket($containSubTicket)
    {
        $this->container['containSubTicket'] = $containSubTicket;
        return $this;
    }

    /**
    * Gets ticketTypes
    *  搜索的工单类型
    *
    * @return string[]|null
    */
    public function getTicketTypes()
    {
        return $this->container['ticketTypes'];
    }

    /**
    * Sets ticketTypes
    *
    * @param string[]|null $ticketTypes 搜索的工单类型
    *
    * @return $this
    */
    public function setTicketTypes($ticketTypes)
    {
        $this->container['ticketTypes'] = $ticketTypes;
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

