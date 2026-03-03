<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCertificateAuthorityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCertificateAuthorityRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  指定查询返回记录条数，默认值10。
    * name  CA证书名称（CN）过滤值，用于获取名称中带有特定值的CA证书集合。
    * offset  索引位置，从offset指定的下一条数据开始查询。默认值为0。
    * status  CA证书状态，通过状态过滤证书集合： - **PENDING** : 待激活，此状态下，不可用于签发证书； - **ACTIVED** : 已激活，此状态下，可用于签发证书； - **DISABLED** : 已禁用，此状态下，不可用于签发证书； - **DELETED** : 计划删除，此状态下，不可用于签发证书； - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * type  CA证书类型： - **ROOT** : 根CA证书 - **SUBORDINATE** : 从属CA证书
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 证书创建时间（默认） - **common_name** : 证书名称 - **type** : CA证书类型 - **not_after** : 证书到期时间
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'name' => 'string',
            'offset' => 'int',
            'status' => 'string',
            'type' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  指定查询返回记录条数，默认值10。
    * name  CA证书名称（CN）过滤值，用于获取名称中带有特定值的CA证书集合。
    * offset  索引位置，从offset指定的下一条数据开始查询。默认值为0。
    * status  CA证书状态，通过状态过滤证书集合： - **PENDING** : 待激活，此状态下，不可用于签发证书； - **ACTIVED** : 已激活，此状态下，可用于签发证书； - **DISABLED** : 已禁用，此状态下，不可用于签发证书； - **DELETED** : 计划删除，此状态下，不可用于签发证书； - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * type  CA证书类型： - **ROOT** : 根CA证书 - **SUBORDINATE** : 从属CA证书
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 证书创建时间（默认） - **common_name** : 证书名称 - **type** : CA证书类型 - **not_after** : 证书到期时间
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'name' => null,
        'offset' => 'int32',
        'status' => null,
        'type' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * limit  指定查询返回记录条数，默认值10。
    * name  CA证书名称（CN）过滤值，用于获取名称中带有特定值的CA证书集合。
    * offset  索引位置，从offset指定的下一条数据开始查询。默认值为0。
    * status  CA证书状态，通过状态过滤证书集合： - **PENDING** : 待激活，此状态下，不可用于签发证书； - **ACTIVED** : 已激活，此状态下，可用于签发证书； - **DISABLED** : 已禁用，此状态下，不可用于签发证书； - **DELETED** : 计划删除，此状态下，不可用于签发证书； - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * type  CA证书类型： - **ROOT** : 根CA证书 - **SUBORDINATE** : 从属CA证书
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 证书创建时间（默认） - **common_name** : 证书名称 - **type** : CA证书类型 - **not_after** : 证书到期时间
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'name' => 'name',
            'offset' => 'offset',
            'status' => 'status',
            'type' => 'type',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  指定查询返回记录条数，默认值10。
    * name  CA证书名称（CN）过滤值，用于获取名称中带有特定值的CA证书集合。
    * offset  索引位置，从offset指定的下一条数据开始查询。默认值为0。
    * status  CA证书状态，通过状态过滤证书集合： - **PENDING** : 待激活，此状态下，不可用于签发证书； - **ACTIVED** : 已激活，此状态下，可用于签发证书； - **DISABLED** : 已禁用，此状态下，不可用于签发证书； - **DELETED** : 计划删除，此状态下，不可用于签发证书； - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * type  CA证书类型： - **ROOT** : 根CA证书 - **SUBORDINATE** : 从属CA证书
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 证书创建时间（默认） - **common_name** : 证书名称 - **type** : CA证书类型 - **not_after** : 证书到期时间
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'name' => 'setName',
            'offset' => 'setOffset',
            'status' => 'setStatus',
            'type' => 'setType',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  指定查询返回记录条数，默认值10。
    * name  CA证书名称（CN）过滤值，用于获取名称中带有特定值的CA证书集合。
    * offset  索引位置，从offset指定的下一条数据开始查询。默认值为0。
    * status  CA证书状态，通过状态过滤证书集合： - **PENDING** : 待激活，此状态下，不可用于签发证书； - **ACTIVED** : 已激活，此状态下，可用于签发证书； - **DISABLED** : 已禁用，此状态下，不可用于签发证书； - **DELETED** : 计划删除，此状态下，不可用于签发证书； - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * type  CA证书类型： - **ROOT** : 根CA证书 - **SUBORDINATE** : 从属CA证书
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 证书创建时间（默认） - **common_name** : 证书名称 - **type** : CA证书类型 - **not_after** : 证书到期时间
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'name' => 'getName',
            'offset' => 'getOffset',
            'status' => 'getStatus',
            'type' => 'getType',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    *  指定查询返回记录条数，默认值10。
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
    * @param int|null $limit 指定查询返回记录条数，默认值10。
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
    *  CA证书名称（CN）过滤值，用于获取名称中带有特定值的CA证书集合。
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
    * @param string|null $name CA证书名称（CN）过滤值，用于获取名称中带有特定值的CA证书集合。
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
    *  索引位置，从offset指定的下一条数据开始查询。默认值为0。
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
    * @param int|null $offset 索引位置，从offset指定的下一条数据开始查询。默认值为0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets status
    *  CA证书状态，通过状态过滤证书集合： - **PENDING** : 待激活，此状态下，不可用于签发证书； - **ACTIVED** : 已激活，此状态下，可用于签发证书； - **DISABLED** : 已禁用，此状态下，不可用于签发证书； - **DELETED** : 计划删除，此状态下，不可用于签发证书； - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status CA证书状态，通过状态过滤证书集合： - **PENDING** : 待激活，此状态下，不可用于签发证书； - **ACTIVED** : 已激活，此状态下，可用于签发证书； - **DISABLED** : 已禁用，此状态下，不可用于签发证书； - **DELETED** : 计划删除，此状态下，不可用于签发证书； - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  CA证书类型： - **ROOT** : 根CA证书 - **SUBORDINATE** : 从属CA证书
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type CA证书类型： - **ROOT** : 根CA证书 - **SUBORDINATE** : 从属CA证书
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序属性，目前支持以下属性： - **create_time** : 证书创建时间（默认） - **common_name** : 证书名称 - **type** : CA证书类型 - **not_after** : 证书到期时间
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
    * @param string|null $sortKey 排序属性，目前支持以下属性： - **create_time** : 证书创建时间（默认） - **common_name** : 证书名称 - **type** : CA证书类型 - **not_after** : 证书到期时间
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

