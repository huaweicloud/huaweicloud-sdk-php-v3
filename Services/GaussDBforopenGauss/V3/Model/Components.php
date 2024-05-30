<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Components implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Components';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  组件id，当组件类型为DN，组件id为6001，则对应的值为dn_6001。
    * role  节点类型，取值为“master”、“slave”，分别对应于主节点、备节点。
    * status  组件状态。 Primary：该组件为主。 Normal：该组件状态正常。 Down：该组件处于宕机状态。 Standby：该组件为备。 StateFollower：该ETCD为备。 StateLeader：该ETCD为主。 StateCandidate：该ETCD为仲裁。
    * distributedId  分组id，只有dn组件有分组id，用于区分是否是同一个分片下的组件。其他组件为空字符串。
    * type  节点类型，包括：DN, CN, GTM, CM, ETCD。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'role' => 'string',
            'status' => 'string',
            'distributedId' => 'string',
            'type' => 'string',
            'detail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  组件id，当组件类型为DN，组件id为6001，则对应的值为dn_6001。
    * role  节点类型，取值为“master”、“slave”，分别对应于主节点、备节点。
    * status  组件状态。 Primary：该组件为主。 Normal：该组件状态正常。 Down：该组件处于宕机状态。 Standby：该组件为备。 StateFollower：该ETCD为备。 StateLeader：该ETCD为主。 StateCandidate：该ETCD为仲裁。
    * distributedId  分组id，只有dn组件有分组id，用于区分是否是同一个分片下的组件。其他组件为空字符串。
    * type  节点类型，包括：DN, CN, GTM, CM, ETCD。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'role' => null,
        'status' => null,
        'distributedId' => null,
        'type' => null,
        'detail' => null
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
    * id  组件id，当组件类型为DN，组件id为6001，则对应的值为dn_6001。
    * role  节点类型，取值为“master”、“slave”，分别对应于主节点、备节点。
    * status  组件状态。 Primary：该组件为主。 Normal：该组件状态正常。 Down：该组件处于宕机状态。 Standby：该组件为备。 StateFollower：该ETCD为备。 StateLeader：该ETCD为主。 StateCandidate：该ETCD为仲裁。
    * distributedId  分组id，只有dn组件有分组id，用于区分是否是同一个分片下的组件。其他组件为空字符串。
    * type  节点类型，包括：DN, CN, GTM, CM, ETCD。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'role' => 'role',
            'status' => 'status',
            'distributedId' => 'distributed_id',
            'type' => 'type',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  组件id，当组件类型为DN，组件id为6001，则对应的值为dn_6001。
    * role  节点类型，取值为“master”、“slave”，分别对应于主节点、备节点。
    * status  组件状态。 Primary：该组件为主。 Normal：该组件状态正常。 Down：该组件处于宕机状态。 Standby：该组件为备。 StateFollower：该ETCD为备。 StateLeader：该ETCD为主。 StateCandidate：该ETCD为仲裁。
    * distributedId  分组id，只有dn组件有分组id，用于区分是否是同一个分片下的组件。其他组件为空字符串。
    * type  节点类型，包括：DN, CN, GTM, CM, ETCD。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'role' => 'setRole',
            'status' => 'setStatus',
            'distributedId' => 'setDistributedId',
            'type' => 'setType',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  组件id，当组件类型为DN，组件id为6001，则对应的值为dn_6001。
    * role  节点类型，取值为“master”、“slave”，分别对应于主节点、备节点。
    * status  组件状态。 Primary：该组件为主。 Normal：该组件状态正常。 Down：该组件处于宕机状态。 Standby：该组件为备。 StateFollower：该ETCD为备。 StateLeader：该ETCD为主。 StateCandidate：该ETCD为仲裁。
    * distributedId  分组id，只有dn组件有分组id，用于区分是否是同一个分片下的组件。其他组件为空字符串。
    * type  节点类型，包括：DN, CN, GTM, CM, ETCD。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'role' => 'getRole',
            'status' => 'getStatus',
            'distributedId' => 'getDistributedId',
            'type' => 'getType',
            'detail' => 'getDetail'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['distributedId'] = isset($data['distributedId']) ? $data['distributedId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
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
    * Gets id
    *  组件id，当组件类型为DN，组件id为6001，则对应的值为dn_6001。
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
    * @param string|null $id 组件id，当组件类型为DN，组件id为6001，则对应的值为dn_6001。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets role
    *  节点类型，取值为“master”、“slave”，分别对应于主节点、备节点。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 节点类型，取值为“master”、“slave”，分别对应于主节点、备节点。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets status
    *  组件状态。 Primary：该组件为主。 Normal：该组件状态正常。 Down：该组件处于宕机状态。 Standby：该组件为备。 StateFollower：该ETCD为备。 StateLeader：该ETCD为主。 StateCandidate：该ETCD为仲裁。
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
    * @param string|null $status 组件状态。 Primary：该组件为主。 Normal：该组件状态正常。 Down：该组件处于宕机状态。 Standby：该组件为备。 StateFollower：该ETCD为备。 StateLeader：该ETCD为主。 StateCandidate：该ETCD为仲裁。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets distributedId
    *  分组id，只有dn组件有分组id，用于区分是否是同一个分片下的组件。其他组件为空字符串。
    *
    * @return string|null
    */
    public function getDistributedId()
    {
        return $this->container['distributedId'];
    }

    /**
    * Sets distributedId
    *
    * @param string|null $distributedId 分组id，只有dn组件有分组id，用于区分是否是同一个分片下的组件。其他组件为空字符串。
    *
    * @return $this
    */
    public function setDistributedId($distributedId)
    {
        $this->container['distributedId'] = $distributedId;
        return $this;
    }

    /**
    * Gets type
    *  节点类型，包括：DN, CN, GTM, CM, ETCD。
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
    * @param string|null $type 节点类型，包括：DN, CN, GTM, CM, ETCD。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets detail
    *  详情。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

