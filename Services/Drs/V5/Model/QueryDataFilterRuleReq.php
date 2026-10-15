<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDataFilterRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDataFilterRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filterType  数据过滤类型，取值分别是common、config。common表示简单条件过滤， config表示关联表过滤
    * isAllRules  标记是否查询全部过滤规则（含已同步和未下发的），即 true（查询所有）、false（仅查询已同步）
    * limit  查询返回记录的数量限制。
    * offset  偏移量，表示查询该偏移量后面的记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filterType' => 'string',
            'isAllRules' => 'bool',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filterType  数据过滤类型，取值分别是common、config。common表示简单条件过滤， config表示关联表过滤
    * isAllRules  标记是否查询全部过滤规则（含已同步和未下发的），即 true（查询所有）、false（仅查询已同步）
    * limit  查询返回记录的数量限制。
    * offset  偏移量，表示查询该偏移量后面的记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filterType' => null,
        'isAllRules' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * filterType  数据过滤类型，取值分别是common、config。common表示简单条件过滤， config表示关联表过滤
    * isAllRules  标记是否查询全部过滤规则（含已同步和未下发的），即 true（查询所有）、false（仅查询已同步）
    * limit  查询返回记录的数量限制。
    * offset  偏移量，表示查询该偏移量后面的记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filterType' => 'filter_type',
            'isAllRules' => 'is_all_rules',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filterType  数据过滤类型，取值分别是common、config。common表示简单条件过滤， config表示关联表过滤
    * isAllRules  标记是否查询全部过滤规则（含已同步和未下发的），即 true（查询所有）、false（仅查询已同步）
    * limit  查询返回记录的数量限制。
    * offset  偏移量，表示查询该偏移量后面的记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'filterType' => 'setFilterType',
            'isAllRules' => 'setIsAllRules',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filterType  数据过滤类型，取值分别是common、config。common表示简单条件过滤， config表示关联表过滤
    * isAllRules  标记是否查询全部过滤规则（含已同步和未下发的），即 true（查询所有）、false（仅查询已同步）
    * limit  查询返回记录的数量限制。
    * offset  偏移量，表示查询该偏移量后面的记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'filterType' => 'getFilterType',
            'isAllRules' => 'getIsAllRules',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['filterType'] = isset($data['filterType']) ? $data['filterType'] : null;
        $this->container['isAllRules'] = isset($data['isAllRules']) ? $data['isAllRules'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['filterType'] === null) {
            $invalidProperties[] = "'filterType' can't be null";
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
    * Gets filterType
    *  数据过滤类型，取值分别是common、config。common表示简单条件过滤， config表示关联表过滤
    *
    * @return string
    */
    public function getFilterType()
    {
        return $this->container['filterType'];
    }

    /**
    * Sets filterType
    *
    * @param string $filterType 数据过滤类型，取值分别是common、config。common表示简单条件过滤， config表示关联表过滤
    *
    * @return $this
    */
    public function setFilterType($filterType)
    {
        $this->container['filterType'] = $filterType;
        return $this;
    }

    /**
    * Gets isAllRules
    *  标记是否查询全部过滤规则（含已同步和未下发的），即 true（查询所有）、false（仅查询已同步）
    *
    * @return bool|null
    */
    public function getIsAllRules()
    {
        return $this->container['isAllRules'];
    }

    /**
    * Sets isAllRules
    *
    * @param bool|null $isAllRules 标记是否查询全部过滤规则（含已同步和未下发的），即 true（查询所有）、false（仅查询已同步）
    *
    * @return $this
    */
    public function setIsAllRules($isAllRules)
    {
        $this->container['isAllRules'] = $isAllRules;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回记录的数量限制。
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
    * @param int|null $limit 查询返回记录的数量限制。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示查询该偏移量后面的记录。
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
    * @param int|null $offset 偏移量，表示查询该偏移量后面的记录。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

