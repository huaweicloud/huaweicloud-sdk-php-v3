<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDirectConnectLocationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDirectConnectLocationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过滤实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string[]',
            'id' => 'string[]',
            'name' => 'string[]',
            'status' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过滤实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'sortKey' => null,
        'sortDir' => null,
        'id' => null,
        'name' => null,
        'status' => null
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
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过滤实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'id' => 'id',
            'name' => 'name',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过滤实例
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过滤实例
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus'
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
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 36)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
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
    *  每页返回的个数。 取值范围：1~2000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~2000。
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
    *  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
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
    * @param string|null $marker 上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段。
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
    * @param string|null $sortKey 排序字段。
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
    *  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    *
    * @return string[]|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string[]|null $sortDir 返回结果按照升序(asc)或降序(desc)排列，默认为asc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets id
    *  根据资源ID过滤实例
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 根据资源ID过滤实例
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  根据名字过滤查询，可查询多个名字。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 根据名字过滤查询，可查询多个名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  根椐资源状态过滤实例
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status 根椐资源状态过滤实例
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

