<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSharedReposDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSharedReposDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * center  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * filter  应填写 center::{center}|name::{name}|limit::{limit}|offset::{offset}|namespace::{namespace}|order_column::{order_column}|order_type::{order_type} ,其中 {center}可选为self: 我共享的镜像。thirdparty: 他人共享给我的镜像，namespace为组织名称，name为镜像仓库名称， {limit}为返回条数,{offset}为起始索引,{order_column}为按列排序，可设置为name、updated_time、tag_count,{order_type}为排序类型，可设置为desc（降序）、asc（升序）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'name' => 'string',
            'center' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'orderColumn' => 'string',
            'orderType' => 'string',
            'filter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * center  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * filter  应填写 center::{center}|name::{name}|limit::{limit}|offset::{offset}|namespace::{namespace}|order_column::{order_column}|order_type::{order_type} ,其中 {center}可选为self: 我共享的镜像。thirdparty: 他人共享给我的镜像，namespace为组织名称，name为镜像仓库名称， {limit}为返回条数,{offset}为起始索引,{order_column}为按列排序，可设置为name、updated_time、tag_count,{order_type}为排序类型，可设置为desc（降序）、asc（升序）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'name' => null,
        'center' => null,
        'limit' => null,
        'offset' => null,
        'orderColumn' => null,
        'orderType' => null,
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
    * name  镜像仓库名称
    * center  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * filter  应填写 center::{center}|name::{name}|limit::{limit}|offset::{offset}|namespace::{namespace}|order_column::{order_column}|order_type::{order_type} ,其中 {center}可选为self: 我共享的镜像。thirdparty: 他人共享给我的镜像，namespace为组织名称，name为镜像仓库名称， {limit}为返回条数,{offset}为起始索引,{order_column}为按列排序，可设置为name、updated_time、tag_count,{order_type}为排序类型，可设置为desc（降序）、asc（升序）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'name' => 'name',
            'center' => 'center',
            'limit' => 'limit',
            'offset' => 'offset',
            'orderColumn' => 'order_column',
            'orderType' => 'order_type',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * center  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * filter  应填写 center::{center}|name::{name}|limit::{limit}|offset::{offset}|namespace::{namespace}|order_column::{order_column}|order_type::{order_type} ,其中 {center}可选为self: 我共享的镜像。thirdparty: 他人共享给我的镜像，namespace为组织名称，name为镜像仓库名称， {limit}为返回条数,{offset}为起始索引,{order_column}为按列排序，可设置为name、updated_time、tag_count,{order_type}为排序类型，可设置为desc（降序）、asc（升序）
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'name' => 'setName',
            'center' => 'setCenter',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'orderColumn' => 'setOrderColumn',
            'orderType' => 'setOrderType',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * center  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数。注意：offset和limit参数需要配套使用。
    * offset  起始索引。注意：offset和limit参数需要配套使用。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * filter  应填写 center::{center}|name::{name}|limit::{limit}|offset::{offset}|namespace::{namespace}|order_column::{order_column}|order_type::{order_type} ,其中 {center}可选为self: 我共享的镜像。thirdparty: 他人共享给我的镜像，namespace为组织名称，name为镜像仓库名称， {limit}为返回条数,{offset}为起始索引,{order_column}为按列排序，可设置为name、updated_time、tag_count,{order_type}为排序类型，可设置为desc（降序）、asc（升序）
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'name' => 'getName',
            'center' => 'getCenter',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'orderColumn' => 'getOrderColumn',
            'orderType' => 'getOrderType',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['center'] = isset($data['center']) ? $data['center'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['orderColumn'] = isset($data['orderColumn']) ? $data['orderColumn'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
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
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets name
    *  镜像仓库名称
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
    * @param string|null $name 镜像仓库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets center
    *  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    *
    * @return string|null
    */
    public function getCenter()
    {
        return $this->container['center'];
    }

    /**
    * Sets center
    *
    * @param string|null $center self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    *
    * @return $this
    */
    public function setCenter($center)
    {
        $this->container['center'] = $center;
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
    * Gets filter
    *  应填写 center::{center}|name::{name}|limit::{limit}|offset::{offset}|namespace::{namespace}|order_column::{order_column}|order_type::{order_type} ,其中 {center}可选为self: 我共享的镜像。thirdparty: 他人共享给我的镜像，namespace为组织名称，name为镜像仓库名称， {limit}为返回条数,{offset}为起始索引,{order_column}为按列排序，可设置为name、updated_time、tag_count,{order_type}为排序类型，可设置为desc（降序）、asc（升序）
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
    * @param string|null $filter 应填写 center::{center}|name::{name}|limit::{limit}|offset::{offset}|namespace::{namespace}|order_column::{order_column}|order_type::{order_type} ,其中 {center}可选为self: 我共享的镜像。thirdparty: 他人共享给我的镜像，namespace为组织名称，name为镜像仓库名称， {limit}为返回条数,{offset}为起始索引,{order_column}为按列排序，可设置为name、updated_time、tag_count,{order_type}为排序类型，可设置为desc（降序）、asc（升序）
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

