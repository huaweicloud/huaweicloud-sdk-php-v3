<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNetworkInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNetworkInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询时，每页返回的个数。
    * marker  分页查询时，上一页最后一条记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * id  根据ID过滤网络实例列表。
    * name  根据名称过滤网络实例列表。
    * description  根据描述过滤网络实例列表。
    * status  根据状态过滤网络实例列表。ACTIVE：表示状态可用。
    * type  根据类型过滤网络实例列表。
    * cloudConnectionId  根据云连接实例ID过滤网络实例列表。
    * instanceId  根据网络实例ID过滤网络实例列表。
    * regionId  根据网络实例所在的Region过滤网络实例列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'status' => 'string[]',
            'type' => 'string[]',
            'cloudConnectionId' => 'string[]',
            'instanceId' => 'string[]',
            'regionId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询时，每页返回的个数。
    * marker  分页查询时，上一页最后一条记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * id  根据ID过滤网络实例列表。
    * name  根据名称过滤网络实例列表。
    * description  根据描述过滤网络实例列表。
    * status  根据状态过滤网络实例列表。ACTIVE：表示状态可用。
    * type  根据类型过滤网络实例列表。
    * cloudConnectionId  根据云连接实例ID过滤网络实例列表。
    * instanceId  根据网络实例ID过滤网络实例列表。
    * regionId  根据网络实例所在的Region过滤网络实例列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'type' => null,
        'cloudConnectionId' => null,
        'instanceId' => null,
        'regionId' => null
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
    * limit  分页查询时，每页返回的个数。
    * marker  分页查询时，上一页最后一条记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * id  根据ID过滤网络实例列表。
    * name  根据名称过滤网络实例列表。
    * description  根据描述过滤网络实例列表。
    * status  根据状态过滤网络实例列表。ACTIVE：表示状态可用。
    * type  根据类型过滤网络实例列表。
    * cloudConnectionId  根据云连接实例ID过滤网络实例列表。
    * instanceId  根据网络实例ID过滤网络实例列表。
    * regionId  根据网络实例所在的Region过滤网络实例列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'type' => 'type',
            'cloudConnectionId' => 'cloud_connection_id',
            'instanceId' => 'instance_id',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询时，每页返回的个数。
    * marker  分页查询时，上一页最后一条记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * id  根据ID过滤网络实例列表。
    * name  根据名称过滤网络实例列表。
    * description  根据描述过滤网络实例列表。
    * status  根据状态过滤网络实例列表。ACTIVE：表示状态可用。
    * type  根据类型过滤网络实例列表。
    * cloudConnectionId  根据云连接实例ID过滤网络实例列表。
    * instanceId  根据网络实例ID过滤网络实例列表。
    * regionId  根据网络实例所在的Region过滤网络实例列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'type' => 'setType',
            'cloudConnectionId' => 'setCloudConnectionId',
            'instanceId' => 'setInstanceId',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询时，每页返回的个数。
    * marker  分页查询时，上一页最后一条记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * id  根据ID过滤网络实例列表。
    * name  根据名称过滤网络实例列表。
    * description  根据描述过滤网络实例列表。
    * status  根据状态过滤网络实例列表。ACTIVE：表示状态可用。
    * type  根据类型过滤网络实例列表。
    * cloudConnectionId  根据云连接实例ID过滤网络实例列表。
    * instanceId  根据网络实例ID过滤网络实例列表。
    * regionId  根据网络实例所在的Region过滤网络实例列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'type' => 'getType',
            'cloudConnectionId' => 'getCloudConnectionId',
            'instanceId' => 'getInstanceId',
            'regionId' => 'getRegionId'
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
    const STATUS_ACTIVE = 'ACTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
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
    *  分页查询时，每页返回的个数。
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
    * @param int|null $limit 分页查询时，每页返回的个数。
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
    *  分页查询时，上一页最后一条记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
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
    * @param string|null $marker 分页查询时，上一页最后一条记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  根据ID过滤网络实例列表。
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
    * @param string[]|null $id 根据ID过滤网络实例列表。
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
    *  根据名称过滤网络实例列表。
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
    * @param string[]|null $name 根据名称过滤网络实例列表。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  根据描述过滤网络实例列表。
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description 根据描述过滤网络实例列表。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  根据状态过滤网络实例列表。ACTIVE：表示状态可用。
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
    * @param string[]|null $status 根据状态过滤网络实例列表。ACTIVE：表示状态可用。
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
    *  根据类型过滤网络实例列表。
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 根据类型过滤网络实例列表。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  根据云连接实例ID过滤网络实例列表。
    *
    * @return string[]|null
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string[]|null $cloudConnectionId 根据云连接实例ID过滤网络实例列表。
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
        return $this;
    }

    /**
    * Gets instanceId
    *  根据网络实例ID过滤网络实例列表。
    *
    * @return string[]|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string[]|null $instanceId 根据网络实例ID过滤网络实例列表。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets regionId
    *  根据网络实例所在的Region过滤网络实例列表。
    *
    * @return string[]|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string[]|null $regionId 根据网络实例所在的Region过滤网络实例列表。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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

