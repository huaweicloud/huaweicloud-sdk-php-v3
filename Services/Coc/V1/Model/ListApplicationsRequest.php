<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApplicationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApplicationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idList  id列表
    * parentId  parent id
    * nameLike  应用名称模糊匹配
    * code  应用code
    * marker  分页参数，上一页请求最后一个id
    * limit  最大的返回数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idList' => 'string[]',
            'parentId' => 'string',
            'nameLike' => 'string',
            'code' => 'string',
            'marker' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idList  id列表
    * parentId  parent id
    * nameLike  应用名称模糊匹配
    * code  应用code
    * marker  分页参数，上一页请求最后一个id
    * limit  最大的返回数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idList' => null,
        'parentId' => null,
        'nameLike' => null,
        'code' => null,
        'marker' => null,
        'limit' => 'int32'
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
    * idList  id列表
    * parentId  parent id
    * nameLike  应用名称模糊匹配
    * code  应用code
    * marker  分页参数，上一页请求最后一个id
    * limit  最大的返回数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idList' => 'id_list',
            'parentId' => 'parent_id',
            'nameLike' => 'name_like',
            'code' => 'code',
            'marker' => 'marker',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idList  id列表
    * parentId  parent id
    * nameLike  应用名称模糊匹配
    * code  应用code
    * marker  分页参数，上一页请求最后一个id
    * limit  最大的返回数量
    *
    * @var string[]
    */
    protected static $setters = [
            'idList' => 'setIdList',
            'parentId' => 'setParentId',
            'nameLike' => 'setNameLike',
            'code' => 'setCode',
            'marker' => 'setMarker',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idList  id列表
    * parentId  parent id
    * nameLike  应用名称模糊匹配
    * code  应用code
    * marker  分页参数，上一页请求最后一个id
    * limit  最大的返回数量
    *
    * @var string[]
    */
    protected static $getters = [
            'idList' => 'getIdList',
            'parentId' => 'getParentId',
            'nameLike' => 'getNameLike',
            'code' => 'getCode',
            'marker' => 'getMarker',
            'limit' => 'getLimit'
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
        $this->container['idList'] = isset($data['idList']) ? $data['idList'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['nameLike'] = isset($data['nameLike']) ? $data['nameLike'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nameLike']) && (mb_strlen($this->container['nameLike']) > 50)) {
                $invalidProperties[] = "invalid value for 'nameLike', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['nameLike']) && (mb_strlen($this->container['nameLike']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameLike', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 50)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 3)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 24)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 24)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 24.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 1)) {
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
    * Gets idList
    *  id列表
    *
    * @return string[]|null
    */
    public function getIdList()
    {
        return $this->container['idList'];
    }

    /**
    * Sets idList
    *
    * @param string[]|null $idList id列表
    *
    * @return $this
    */
    public function setIdList($idList)
    {
        $this->container['idList'] = $idList;
        return $this;
    }

    /**
    * Gets parentId
    *  parent id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId parent id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets nameLike
    *  应用名称模糊匹配
    *
    * @return string|null
    */
    public function getNameLike()
    {
        return $this->container['nameLike'];
    }

    /**
    * Sets nameLike
    *
    * @param string|null $nameLike 应用名称模糊匹配
    *
    * @return $this
    */
    public function setNameLike($nameLike)
    {
        $this->container['nameLike'] = $nameLike;
        return $this;
    }

    /**
    * Gets code
    *  应用code
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 应用code
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数，上一页请求最后一个id
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
    * @param string|null $marker 分页参数，上一页请求最后一个id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  最大的返回数量
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 最大的返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

