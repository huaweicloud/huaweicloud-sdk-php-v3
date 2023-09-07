<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesResourceMetricsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesResourceMetricsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  引擎类型
    * searchField  搜索字段
    * offset  索引位置，偏移量
    * limit  查询数据条数
    * order  排序方式
    * sortField  排序字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'searchField' => 'string',
            'offset' => 'string',
            'limit' => 'string',
            'order' => 'string',
            'sortField' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  引擎类型
    * searchField  搜索字段
    * offset  索引位置，偏移量
    * limit  查询数据条数
    * order  排序方式
    * sortField  排序字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'searchField' => null,
        'offset' => null,
        'limit' => null,
        'order' => null,
        'sortField' => null
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
    * engine  引擎类型
    * searchField  搜索字段
    * offset  索引位置，偏移量
    * limit  查询数据条数
    * order  排序方式
    * sortField  排序字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'searchField' => 'search_field',
            'offset' => 'offset',
            'limit' => 'limit',
            'order' => 'order',
            'sortField' => 'sort_field'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  引擎类型
    * searchField  搜索字段
    * offset  索引位置，偏移量
    * limit  查询数据条数
    * order  排序方式
    * sortField  排序字段
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'searchField' => 'setSearchField',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'order' => 'setOrder',
            'sortField' => 'setSortField'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  引擎类型
    * searchField  搜索字段
    * offset  索引位置，偏移量
    * limit  查询数据条数
    * order  排序方式
    * sortField  排序字段
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'searchField' => 'getSearchField',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'order' => 'getOrder',
            'sortField' => 'getSortField'
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
    const ENGINE_MYSQL = 'mysql';
    const ENGINE_POSTGRESQL = 'postgresql';
    const ENGINE_SQLSERVER = 'sqlserver';
    const ORDER_DESC = 'DESC';
    const ORDER_ASC = 'ASC';
    const SORT_FIELD_INSTANCE_NAME = 'instance_name';
    const SORT_FIELD_STATUS = 'status';
    const SORT_FIELD_TYPE = 'type';
    const SORT_FIELD_CPU_USAGE = 'cpu_usage';
    const SORT_FIELD_MEMORY_USAGE = 'memory_usage';
    const SORT_FIELD_DISK_USAGE = 'disk_usage';
    const SORT_FIELD_TPS = 'tps';
    const SORT_FIELD_QPS = 'qps';
    const SORT_FIELD_IOPS = 'iops';
    const SORT_FIELD_ACTIVE_CONNECTIONS = 'active_connections';
    const SORT_FIELD_SLOW_SQL = 'slow_sql';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_MYSQL,
            self::ENGINE_POSTGRESQL,
            self::ENGINE_SQLSERVER,
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
            self::ORDER_DESC,
            self::ORDER_ASC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortFieldAllowableValues()
    {
        return [
            self::SORT_FIELD_INSTANCE_NAME,
            self::SORT_FIELD_STATUS,
            self::SORT_FIELD_TYPE,
            self::SORT_FIELD_CPU_USAGE,
            self::SORT_FIELD_MEMORY_USAGE,
            self::SORT_FIELD_DISK_USAGE,
            self::SORT_FIELD_TPS,
            self::SORT_FIELD_QPS,
            self::SORT_FIELD_IOPS,
            self::SORT_FIELD_ACTIVE_CONNECTIONS,
            self::SORT_FIELD_SLOW_SQL,
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['searchField'] = isset($data['searchField']) ? $data['searchField'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && (mb_strlen($this->container['offset']) < 0)) {
                $invalidProperties[] = "invalid value for 'offset', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 100)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 1)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortFieldAllowableValues();
                if (!is_null($this->container['sortField']) && !in_array($this->container['sortField'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortField', must be one of '%s'",
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
    * Gets engine
    *  引擎类型
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 引擎类型
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets searchField
    *  搜索字段
    *
    * @return string|null
    */
    public function getSearchField()
    {
        return $this->container['searchField'];
    }

    /**
    * Sets searchField
    *
    * @param string|null $searchField 搜索字段
    *
    * @return $this
    */
    public function setSearchField($searchField)
    {
        $this->container['searchField'] = $searchField;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 索引位置，偏移量
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
    *  查询数据条数
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 查询数据条数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets order
    *  排序方式
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
    * @param string|null $order 排序方式
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
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

