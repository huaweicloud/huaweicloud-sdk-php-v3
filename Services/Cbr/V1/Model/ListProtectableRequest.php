<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProtectableRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProtectableRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页显示的条目数量，每页最多支持50条
    * marker  上一次查询最后一条的ID
    * name  按名称过滤
    * offset  偏移值
    * protectableType  对象类型
    * status  资源的状态，如available，error 等
    * id  根据资源id过滤
    * serverId  根据该id过滤属于该服务器的所有磁盘，支持企业多项目的用户才能传入此参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'name' => 'string',
            'offset' => 'int',
            'protectableType' => 'string',
            'status' => 'string',
            'id' => 'string',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页显示的条目数量，每页最多支持50条
    * marker  上一次查询最后一条的ID
    * name  按名称过滤
    * offset  偏移值
    * protectableType  对象类型
    * status  资源的状态，如available，error 等
    * id  根据资源id过滤
    * serverId  根据该id过滤属于该服务器的所有磁盘，支持企业多项目的用户才能传入此参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'name' => null,
        'offset' => 'int32',
        'protectableType' => null,
        'status' => null,
        'id' => null,
        'serverId' => null
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
    * limit  每页显示的条目数量，每页最多支持50条
    * marker  上一次查询最后一条的ID
    * name  按名称过滤
    * offset  偏移值
    * protectableType  对象类型
    * status  资源的状态，如available，error 等
    * id  根据资源id过滤
    * serverId  根据该id过滤属于该服务器的所有磁盘，支持企业多项目的用户才能传入此参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'name' => 'name',
            'offset' => 'offset',
            'protectableType' => 'protectable_type',
            'status' => 'status',
            'id' => 'id',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页显示的条目数量，每页最多支持50条
    * marker  上一次查询最后一条的ID
    * name  按名称过滤
    * offset  偏移值
    * protectableType  对象类型
    * status  资源的状态，如available，error 等
    * id  根据资源id过滤
    * serverId  根据该id过滤属于该服务器的所有磁盘，支持企业多项目的用户才能传入此参数
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'name' => 'setName',
            'offset' => 'setOffset',
            'protectableType' => 'setProtectableType',
            'status' => 'setStatus',
            'id' => 'setId',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页显示的条目数量，每页最多支持50条
    * marker  上一次查询最后一条的ID
    * name  按名称过滤
    * offset  偏移值
    * protectableType  对象类型
    * status  资源的状态，如available，error 等
    * id  根据资源id过滤
    * serverId  根据该id过滤属于该服务器的所有磁盘，支持企业多项目的用户才能传入此参数
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'name' => 'getName',
            'offset' => 'getOffset',
            'protectableType' => 'getProtectableType',
            'status' => 'getStatus',
            'id' => 'getId',
            'serverId' => 'getServerId'
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
    const PROTECTABLE_TYPE_SERVER = 'server';
    const PROTECTABLE_TYPE_DISK = 'disk';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectableTypeAllowableValues()
    {
        return [
            self::PROTECTABLE_TYPE_SERVER,
            self::PROTECTABLE_TYPE_DISK,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['protectableType'] = isset($data['protectableType']) ? $data['protectableType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protectableType'] === null) {
            $invalidProperties[] = "'protectableType' can't be null";
        }
            $allowedValues = $this->getProtectableTypeAllowableValues();
                if (!is_null($this->container['protectableType']) && !in_array($this->container['protectableType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectableType', must be one of '%s'",
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
    * Gets limit
    *  每页显示的条目数量，每页最多支持50条
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
    * @param int|null $limit 每页显示的条目数量，每页最多支持50条
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
    *  上一次查询最后一条的ID
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
    * @param string|null $marker 上一次查询最后一条的ID
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets name
    *  按名称过滤
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
    * @param string|null $name 按名称过滤
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
    *  偏移值
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
    * @param int|null $offset 偏移值
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets protectableType
    *  对象类型
    *
    * @return string
    */
    public function getProtectableType()
    {
        return $this->container['protectableType'];
    }

    /**
    * Sets protectableType
    *
    * @param string $protectableType 对象类型
    *
    * @return $this
    */
    public function setProtectableType($protectableType)
    {
        $this->container['protectableType'] = $protectableType;
        return $this;
    }

    /**
    * Gets status
    *  资源的状态，如available，error 等
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
    * @param string|null $status 资源的状态，如available，error 等
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  根据资源id过滤
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 根据资源id过滤
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets serverId
    *  根据该id过滤属于该服务器的所有磁盘，支持企业多项目的用户才能传入此参数
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 根据该id过滤属于该服务器的所有磁盘，支持企业多项目的用户才能传入此参数
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

