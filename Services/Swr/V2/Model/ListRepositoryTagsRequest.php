<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * tag  镜像版本名。
    * filter  应填写 offset::{offset}|limit::{limit}|order_column::{order_column}|order_type::{order_type}|tag::{tag} ,其中{limit}为返回条数,{offset}为起始索引,注意：offset和limit参数需要配套使用。 {order_column}为按列排序，可设置为updated_at（按更新时间排序）,{order_type}为排序类型，可设置为desc（降序）、asc（升序），{tag}为镜像版本名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'repository' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'orderColumn' => 'string',
            'orderType' => 'string',
            'tag' => 'string',
            'filter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * tag  镜像版本名。
    * filter  应填写 offset::{offset}|limit::{limit}|order_column::{order_column}|order_type::{order_type}|tag::{tag} ,其中{limit}为返回条数,{offset}为起始索引,注意：offset和limit参数需要配套使用。 {order_column}为按列排序，可设置为updated_at（按更新时间排序）,{order_type}为排序类型，可设置为desc（降序）、asc（升序），{tag}为镜像版本名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'repository' => null,
        'limit' => null,
        'offset' => null,
        'orderColumn' => null,
        'orderType' => null,
        'tag' => null,
        'filter' => null
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
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * tag  镜像版本名。
    * filter  应填写 offset::{offset}|limit::{limit}|order_column::{order_column}|order_type::{order_type}|tag::{tag} ,其中{limit}为返回条数,{offset}为起始索引,注意：offset和limit参数需要配套使用。 {order_column}为按列排序，可设置为updated_at（按更新时间排序）,{order_type}为排序类型，可设置为desc（降序）、asc（升序），{tag}为镜像版本名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'repository' => 'repository',
            'limit' => 'limit',
            'offset' => 'offset',
            'orderColumn' => 'order_column',
            'orderType' => 'order_type',
            'tag' => 'tag',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * tag  镜像版本名。
    * filter  应填写 offset::{offset}|limit::{limit}|order_column::{order_column}|order_type::{order_type}|tag::{tag} ,其中{limit}为返回条数,{offset}为起始索引,注意：offset和limit参数需要配套使用。 {order_column}为按列排序，可设置为updated_at（按更新时间排序）,{order_type}为排序类型，可设置为desc（降序）、asc（升序），{tag}为镜像版本名。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'repository' => 'setRepository',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'orderColumn' => 'setOrderColumn',
            'orderType' => 'setOrderType',
            'tag' => 'setTag',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * tag  镜像版本名。
    * filter  应填写 offset::{offset}|limit::{limit}|order_column::{order_column}|order_type::{order_type}|tag::{tag} ,其中{limit}为返回条数,{offset}为起始索引,注意：offset和limit参数需要配套使用。 {order_column}为按列排序，可设置为updated_at（按更新时间排序）,{order_type}为排序类型，可设置为desc（降序）、asc（升序），{tag}为镜像版本名。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'repository' => 'getRepository',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'orderColumn' => 'getOrderColumn',
            'orderType' => 'getOrderType',
            'tag' => 'getTag',
            'filter' => 'getFilter'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['orderColumn'] = isset($data['orderColumn']) ? $data['orderColumn'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['repository'] === null) {
            $invalidProperties[] = "'repository' can't be null";
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
    * Gets namespace
    *  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets repository
    *  镜像仓库名称
    *
    * @return string
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param string $repository 镜像仓库名称
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets limit
    *  返回条数。注意：offset和limit参数需要配套使用。
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
    * @param string|null $limit 返回条数。注意：offset和limit参数需要配套使用。
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
    *  起始索引。注意：offset和limit参数需要配套使用。
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
    * @param string|null $offset 起始索引。注意：offset和limit参数需要配套使用。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets orderColumn
    *  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    *
    * @return string|null
    */
    public function getOrderColumn()
    {
        return $this->container['orderColumn'];
    }

    /**
    * Sets orderColumn
    *
    * @param string|null $orderColumn 按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    *
    * @return $this
    */
    public function setOrderColumn($orderColumn)
    {
        $this->container['orderColumn'] = $orderColumn;
        return $this;
    }

    /**
    * Gets orderType
    *  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    *
    * @return string|null
    */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
    * Sets orderType
    *
    * @param string|null $orderType 排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    *
    * @return $this
    */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;
        return $this;
    }

    /**
    * Gets tag
    *  镜像版本名。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 镜像版本名。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets filter
    *  应填写 offset::{offset}|limit::{limit}|order_column::{order_column}|order_type::{order_type}|tag::{tag} ,其中{limit}为返回条数,{offset}为起始索引,注意：offset和limit参数需要配套使用。 {order_column}为按列排序，可设置为updated_at（按更新时间排序）,{order_type}为排序类型，可设置为desc（降序）、asc（升序），{tag}为镜像版本名。
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 应填写 offset::{offset}|limit::{limit}|order_column::{order_column}|order_type::{order_type}|tag::{tag} ,其中{limit}为返回条数,{offset}为起始索引,注意：offset和limit参数需要配套使用。 {order_column}为按列排序，可设置为updated_at（按更新时间排序）,{order_type}为排序类型，可设置为desc（降序）、asc（升序），{tag}为镜像版本名。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
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

