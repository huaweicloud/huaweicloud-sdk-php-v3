<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryTagRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryTagRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数,默认返回100条，最多返回1000条数据。
    * marker  Start position of the cursor for querying the next page in pagination query.
    * tag  镜像版本名。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）或者tag（按照镜像版本排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * withManifest  是否返回镜像的manifest信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'repository' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'tag' => 'string',
            'orderColumn' => 'string',
            'orderType' => 'string',
            'withManifest' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数,默认返回100条，最多返回1000条数据。
    * marker  Start position of the cursor for querying the next page in pagination query.
    * tag  镜像版本名。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）或者tag（按照镜像版本排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * withManifest  是否返回镜像的manifest信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'repository' => null,
        'limit' => null,
        'marker' => null,
        'tag' => null,
        'orderColumn' => null,
        'orderType' => null,
        'withManifest' => null
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
    * limit  返回条数,默认返回100条，最多返回1000条数据。
    * marker  Start position of the cursor for querying the next page in pagination query.
    * tag  镜像版本名。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）或者tag（按照镜像版本排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * withManifest  是否返回镜像的manifest信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'repository' => 'repository',
            'limit' => 'limit',
            'marker' => 'marker',
            'tag' => 'tag',
            'orderColumn' => 'order_column',
            'orderType' => 'order_type',
            'withManifest' => 'with_manifest'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数,默认返回100条，最多返回1000条数据。
    * marker  Start position of the cursor for querying the next page in pagination query.
    * tag  镜像版本名。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）或者tag（按照镜像版本排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * withManifest  是否返回镜像的manifest信息
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'repository' => 'setRepository',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'tag' => 'setTag',
            'orderColumn' => 'setOrderColumn',
            'orderType' => 'setOrderType',
            'withManifest' => 'setWithManifest'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * repository  镜像仓库名称
    * limit  返回条数,默认返回100条，最多返回1000条数据。
    * marker  Start position of the cursor for querying the next page in pagination query.
    * tag  镜像版本名。
    * orderColumn  按列排序，可设置为updated_at（按更新时间排序）或者tag（按照镜像版本排序）。注意：order_column和order_type参数需要配套使用。
    * orderType  排序类型，可设置为desc（降序）、asc（升序）。注意：order_column和order_type参数需要配套使用。
    * withManifest  是否返回镜像的manifest信息
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'repository' => 'getRepository',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'tag' => 'getTag',
            'orderColumn' => 'getOrderColumn',
            'orderType' => 'getOrderType',
            'withManifest' => 'getWithManifest'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['orderColumn'] = isset($data['orderColumn']) ? $data['orderColumn'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['withManifest'] = isset($data['withManifest']) ? $data['withManifest'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
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
    *  返回条数,默认返回100条，最多返回1000条数据。
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
    * @param int|null $limit 返回条数,默认返回100条，最多返回1000条数据。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  Start position of the cursor for querying the next page in pagination query.
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker Start position of the cursor for querying the next page in pagination query.
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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
    * Gets orderColumn
    *  按列排序，可设置为updated_at（按更新时间排序）或者tag（按照镜像版本排序）。注意：order_column和order_type参数需要配套使用。
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
    * @param string|null $orderColumn 按列排序，可设置为updated_at（按更新时间排序）或者tag（按照镜像版本排序）。注意：order_column和order_type参数需要配套使用。
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
    * Gets withManifest
    *  是否返回镜像的manifest信息
    *
    * @return bool|null
    */
    public function getWithManifest()
    {
        return $this->container['withManifest'];
    }

    /**
    * Sets withManifest
    *
    * @param bool|null $withManifest 是否返回镜像的manifest信息
    *
    * @return $this
    */
    public function setWithManifest($withManifest)
    {
        $this->container['withManifest'] = $withManifest;
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

