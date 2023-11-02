<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGlossaryListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGlossaryListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * type  标签类型 缺省值：all
    * name  标签名
    * createUser  标签创建用户
    * start  开始时间
    * end  结束时间
    * limit  分页参数:每页限定数量 缺省值：10
    * offset  分页参数：页数 缺省值：0
    * sortBy  排序字段 默认为createTime 缺省值：createTime
    * sortOrder  排序方式 默认排序字段为降序 缺省值：desc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'type' => 'string',
            'name' => 'string',
            'createUser' => 'string',
            'start' => 'string',
            'end' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'sortBy' => 'string',
            'sortOrder' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * type  标签类型 缺省值：all
    * name  标签名
    * createUser  标签创建用户
    * start  开始时间
    * end  结束时间
    * limit  分页参数:每页限定数量 缺省值：10
    * offset  分页参数：页数 缺省值：0
    * sortBy  排序字段 默认为createTime 缺省值：createTime
    * sortOrder  排序方式 默认排序字段为降序 缺省值：desc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'type' => null,
        'name' => null,
        'createUser' => null,
        'start' => null,
        'end' => null,
        'limit' => null,
        'offset' => null,
        'sortBy' => null,
        'sortOrder' => null
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
    * workspace  DataArts Studio工作空间ID
    * type  标签类型 缺省值：all
    * name  标签名
    * createUser  标签创建用户
    * start  开始时间
    * end  结束时间
    * limit  分页参数:每页限定数量 缺省值：10
    * offset  分页参数：页数 缺省值：0
    * sortBy  排序字段 默认为createTime 缺省值：createTime
    * sortOrder  排序方式 默认排序字段为降序 缺省值：desc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'type' => 'type',
            'name' => 'name',
            'createUser' => 'create_user',
            'start' => 'start',
            'end' => 'end',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'sortOrder' => 'sort_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * type  标签类型 缺省值：all
    * name  标签名
    * createUser  标签创建用户
    * start  开始时间
    * end  结束时间
    * limit  分页参数:每页限定数量 缺省值：10
    * offset  分页参数：页数 缺省值：0
    * sortBy  排序字段 默认为createTime 缺省值：createTime
    * sortOrder  排序方式 默认排序字段为降序 缺省值：desc
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'type' => 'setType',
            'name' => 'setName',
            'createUser' => 'setCreateUser',
            'start' => 'setStart',
            'end' => 'setEnd',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'sortOrder' => 'setSortOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * type  标签类型 缺省值：all
    * name  标签名
    * createUser  标签创建用户
    * start  开始时间
    * end  结束时间
    * limit  分页参数:每页限定数量 缺省值：10
    * offset  分页参数：页数 缺省值：0
    * sortBy  排序字段 默认为createTime 缺省值：createTime
    * sortOrder  排序方式 默认排序字段为降序 缺省值：desc
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'type' => 'getType',
            'name' => 'getName',
            'createUser' => 'getCreateUser',
            'start' => 'getStart',
            'end' => 'getEnd',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'sortOrder' => 'getSortOrder'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets type
    *  标签类型 缺省值：all
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
    * @param string|null $type 标签类型 缺省值：all
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  标签名
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
    * @param string|null $name 标签名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createUser
    *  标签创建用户
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 标签创建用户
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets start
    *  开始时间
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start 开始时间
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  结束时间
    *
    * @return string|null
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param string|null $end 结束时间
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数:每页限定数量 缺省值：10
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
    * @param string|null $limit 分页参数:每页限定数量 缺省值：10
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
    *  分页参数：页数 缺省值：0
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
    * @param string|null $offset 分页参数：页数 缺省值：0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序字段 默认为createTime 缺省值：createTime
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
    * @param string|null $sortBy 排序字段 默认为createTime 缺省值：createTime
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets sortOrder
    *  排序方式 默认排序字段为降序 缺省值：desc
    *
    * @return string|null
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string|null $sortOrder 排序方式 默认排序字段为降序 缺省值：desc
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
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

