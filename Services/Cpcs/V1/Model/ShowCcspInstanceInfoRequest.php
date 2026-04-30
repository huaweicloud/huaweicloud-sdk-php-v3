<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCcspInstanceInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCcspInstanceInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  指定查询返回记录条数，默认值10
    * name  实例名称
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 实例创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    * clusterId  密码服务集群ID
    * status  实例的服务状态: - **enable** : 启用； - **disable** : 停用
    * isNormal  实例健康状态： - **true** : 正常； - **false** : 异常
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'name' => 'string',
            'offset' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'clusterId' => 'string',
            'status' => 'int',
            'isNormal' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  指定查询返回记录条数，默认值10
    * name  实例名称
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 实例创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    * clusterId  密码服务集群ID
    * status  实例的服务状态: - **enable** : 启用； - **disable** : 停用
    * isNormal  实例健康状态： - **true** : 正常； - **false** : 异常
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'name' => null,
        'offset' => 'int32',
        'sortKey' => null,
        'sortDir' => null,
        'clusterId' => null,
        'status' => null,
        'isNormal' => null
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
    * limit  指定查询返回记录条数，默认值10
    * name  实例名称
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 实例创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    * clusterId  密码服务集群ID
    * status  实例的服务状态: - **enable** : 启用； - **disable** : 停用
    * isNormal  实例健康状态： - **true** : 正常； - **false** : 异常
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'name' => 'name',
            'offset' => 'offset',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'clusterId' => 'cluster_id',
            'status' => 'status',
            'isNormal' => 'is_normal'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  指定查询返回记录条数，默认值10
    * name  实例名称
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 实例创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    * clusterId  密码服务集群ID
    * status  实例的服务状态: - **enable** : 启用； - **disable** : 停用
    * isNormal  实例健康状态： - **true** : 正常； - **false** : 异常
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'name' => 'setName',
            'offset' => 'setOffset',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'clusterId' => 'setClusterId',
            'status' => 'setStatus',
            'isNormal' => 'setIsNormal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  指定查询返回记录条数，默认值10
    * name  实例名称
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 实例创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    * clusterId  密码服务集群ID
    * status  实例的服务状态: - **enable** : 启用； - **disable** : 停用
    * isNormal  实例健康状态： - **true** : 正常； - **false** : 异常
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'name' => 'getName',
            'offset' => 'getOffset',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'clusterId' => 'getClusterId',
            'status' => 'getStatus',
            'isNormal' => 'getIsNormal'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isNormal'] = isset($data['isNormal']) ? $data['isNormal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 32)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 32.";
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
    * Gets limit
    *  指定查询返回记录条数，默认值10
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
    * @param int|null $limit 指定查询返回记录条数，默认值10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  实例名称
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
    * @param string|null $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，从offset指定的下一条数据开始查询默认值为0
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
    * @param int|null $offset 索引位置，从offset指定的下一条数据开始查询默认值为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序属性，目前支持以下属性： - **create_time** : 实例创建时间（默认）
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序属性，目前支持以下属性： - **create_time** : 实例创建时间（默认）
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets clusterId
    *  密码服务集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 密码服务集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets status
    *  实例的服务状态: - **enable** : 启用； - **disable** : 停用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 实例的服务状态: - **enable** : 启用； - **disable** : 停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isNormal
    *  实例健康状态： - **true** : 正常； - **false** : 异常
    *
    * @return bool|null
    */
    public function getIsNormal()
    {
        return $this->container['isNormal'];
    }

    /**
    * Sets isNormal
    *
    * @param bool|null $isNormal 实例健康状态： - **true** : 正常； - **false** : 异常
    *
    * @return $this
    */
    public function setIsNormal($isNormal)
    {
        $this->container['isNormal'] = $isNormal;
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

