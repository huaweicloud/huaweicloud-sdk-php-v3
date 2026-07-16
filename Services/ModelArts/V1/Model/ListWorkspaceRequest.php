<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkspaceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkspaceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  分页列表的起始页，默认为'0'。
    * limit  指定每一页返回的最大条目数，默认为'1000'。
    * sortBy  指定排序字段，可选'name'、'update_time'、'status'，默认是'name'。
    * order  可选值。'asc'为递增排序。'desc'为递减排序，默认为'desc'。
    * enterpriseProjectId  企业项目id，指定此参数会只返回该企业项目id下的工作空间。默认显示所有工作空间。
    * name  工作空间名称查询参数，指定此参数会模糊查询该名称的工作空间。默认显示所有工作空间。
    * filterAccessible  该参数用于筛选可访问的工作空间。指定该参数为true，则会筛选掉当前用户无权限访问的工作空间。该参数默认为false，即为显示所有工作空间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'sortBy' => 'string',
            'order' => 'string',
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'filterAccessible' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  分页列表的起始页，默认为'0'。
    * limit  指定每一页返回的最大条目数，默认为'1000'。
    * sortBy  指定排序字段，可选'name'、'update_time'、'status'，默认是'name'。
    * order  可选值。'asc'为递增排序。'desc'为递减排序，默认为'desc'。
    * enterpriseProjectId  企业项目id，指定此参数会只返回该企业项目id下的工作空间。默认显示所有工作空间。
    * name  工作空间名称查询参数，指定此参数会模糊查询该名称的工作空间。默认显示所有工作空间。
    * filterAccessible  该参数用于筛选可访问的工作空间。指定该参数为true，则会筛选掉当前用户无权限访问的工作空间。该参数默认为false，即为显示所有工作空间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'sortBy' => null,
        'order' => null,
        'enterpriseProjectId' => null,
        'name' => null,
        'filterAccessible' => null
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
    * offset  分页列表的起始页，默认为'0'。
    * limit  指定每一页返回的最大条目数，默认为'1000'。
    * sortBy  指定排序字段，可选'name'、'update_time'、'status'，默认是'name'。
    * order  可选值。'asc'为递增排序。'desc'为递减排序，默认为'desc'。
    * enterpriseProjectId  企业项目id，指定此参数会只返回该企业项目id下的工作空间。默认显示所有工作空间。
    * name  工作空间名称查询参数，指定此参数会模糊查询该名称的工作空间。默认显示所有工作空间。
    * filterAccessible  该参数用于筛选可访问的工作空间。指定该参数为true，则会筛选掉当前用户无权限访问的工作空间。该参数默认为false，即为显示所有工作空间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'sortBy' => 'sort_by',
            'order' => 'order',
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'filterAccessible' => 'filter_accessible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  分页列表的起始页，默认为'0'。
    * limit  指定每一页返回的最大条目数，默认为'1000'。
    * sortBy  指定排序字段，可选'name'、'update_time'、'status'，默认是'name'。
    * order  可选值。'asc'为递增排序。'desc'为递减排序，默认为'desc'。
    * enterpriseProjectId  企业项目id，指定此参数会只返回该企业项目id下的工作空间。默认显示所有工作空间。
    * name  工作空间名称查询参数，指定此参数会模糊查询该名称的工作空间。默认显示所有工作空间。
    * filterAccessible  该参数用于筛选可访问的工作空间。指定该参数为true，则会筛选掉当前用户无权限访问的工作空间。该参数默认为false，即为显示所有工作空间。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'filterAccessible' => 'setFilterAccessible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  分页列表的起始页，默认为'0'。
    * limit  指定每一页返回的最大条目数，默认为'1000'。
    * sortBy  指定排序字段，可选'name'、'update_time'、'status'，默认是'name'。
    * order  可选值。'asc'为递增排序。'desc'为递减排序，默认为'desc'。
    * enterpriseProjectId  企业项目id，指定此参数会只返回该企业项目id下的工作空间。默认显示所有工作空间。
    * name  工作空间名称查询参数，指定此参数会模糊查询该名称的工作空间。默认显示所有工作空间。
    * filterAccessible  该参数用于筛选可访问的工作空间。指定该参数为true，则会筛选掉当前用户无权限访问的工作空间。该参数默认为false，即为显示所有工作空间。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'filterAccessible' => 'getFilterAccessible'
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
    const SORT_BY_NAME = 'name';
    const SORT_BY_UPDATE_TIME = 'update_time';
    const SORT_BY_STATUS = 'status';
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortByAllowableValues()
    {
        return [
            self::SORT_BY_NAME,
            self::SORT_BY_UPDATE_TIME,
            self::SORT_BY_STATUS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
        ];
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filterAccessible'] = isset($data['filterAccessible']) ? $data['filterAccessible'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortByAllowableValues();
                if (!is_null($this->container['sortBy']) && !in_array($this->container['sortBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets offset
    *  分页列表的起始页，默认为'0'。
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
    * @param int|null $offset 分页列表的起始页，默认为'0'。
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
    *  指定每一页返回的最大条目数，默认为'1000'。
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
    * @param int|null $limit 指定每一页返回的最大条目数，默认为'1000'。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortBy
    *  指定排序字段，可选'name'、'update_time'、'status'，默认是'name'。
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 指定排序字段，可选'name'、'update_time'、'status'，默认是'name'。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets order
    *  可选值。'asc'为递增排序。'desc'为递减排序，默认为'desc'。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 可选值。'asc'为递增排序。'desc'为递减排序，默认为'desc'。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id，指定此参数会只返回该企业项目id下的工作空间。默认显示所有工作空间。
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
    * @param string|null $enterpriseProjectId 企业项目id，指定此参数会只返回该企业项目id下的工作空间。默认显示所有工作空间。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets name
    *  工作空间名称查询参数，指定此参数会模糊查询该名称的工作空间。默认显示所有工作空间。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 工作空间名称查询参数，指定此参数会模糊查询该名称的工作空间。默认显示所有工作空间。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets filterAccessible
    *  该参数用于筛选可访问的工作空间。指定该参数为true，则会筛选掉当前用户无权限访问的工作空间。该参数默认为false，即为显示所有工作空间。
    *
    * @return bool|null
    */
    public function getFilterAccessible()
    {
        return $this->container['filterAccessible'];
    }

    /**
    * Sets filterAccessible
    *
    * @param bool|null $filterAccessible 该参数用于筛选可访问的工作空间。指定该参数为true，则会筛选掉当前用户无权限访问的工作空间。该参数默认为false，即为显示所有工作空间。
    *
    * @return $this
    */
    public function setFilterAccessible($filterAccessible)
    {
        $this->container['filterAccessible'] = $filterAccessible;
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

