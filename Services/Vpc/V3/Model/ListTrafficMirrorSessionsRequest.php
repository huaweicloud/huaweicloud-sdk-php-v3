<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTrafficMirrorSessionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTrafficMirrorSessionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * id  使用镜像会话ID过滤或排序
    * name  使用镜像会话名称过滤或排序
    * description  使用镜像会话描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * trafficMirrorTargetId  使用镜像目的ID过滤
    * trafficMirrorTargetType  使用镜像目的类型过滤
    * virtualNetworkId  使用VNI过滤
    * packetLength  使用最大传输单元MTU过滤
    * priority  使用镜像会话优先级过滤
    * enabled  使用enabled过滤
    * type  使用镜像源类型过滤
    * createdAt  使用创建时间戳排序
    * updatedAt  使用更新时间戳排序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'trafficMirrorFilterId' => 'string',
            'trafficMirrorTargetId' => 'string',
            'trafficMirrorTargetType' => 'string',
            'virtualNetworkId' => 'string',
            'packetLength' => 'string',
            'priority' => 'string',
            'enabled' => 'string',
            'type' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * id  使用镜像会话ID过滤或排序
    * name  使用镜像会话名称过滤或排序
    * description  使用镜像会话描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * trafficMirrorTargetId  使用镜像目的ID过滤
    * trafficMirrorTargetType  使用镜像目的类型过滤
    * virtualNetworkId  使用VNI过滤
    * packetLength  使用最大传输单元MTU过滤
    * priority  使用镜像会话优先级过滤
    * enabled  使用enabled过滤
    * type  使用镜像源类型过滤
    * createdAt  使用创建时间戳排序
    * updatedAt  使用更新时间戳排序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'trafficMirrorFilterId' => null,
        'trafficMirrorTargetId' => null,
        'trafficMirrorTargetType' => null,
        'virtualNetworkId' => null,
        'packetLength' => null,
        'priority' => null,
        'enabled' => null,
        'type' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * projectId  项目ID
    * id  使用镜像会话ID过滤或排序
    * name  使用镜像会话名称过滤或排序
    * description  使用镜像会话描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * trafficMirrorTargetId  使用镜像目的ID过滤
    * trafficMirrorTargetType  使用镜像目的类型过滤
    * virtualNetworkId  使用VNI过滤
    * packetLength  使用最大传输单元MTU过滤
    * priority  使用镜像会话优先级过滤
    * enabled  使用enabled过滤
    * type  使用镜像源类型过滤
    * createdAt  使用创建时间戳排序
    * updatedAt  使用更新时间戳排序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'trafficMirrorFilterId' => 'traffic_mirror_filter_id',
            'trafficMirrorTargetId' => 'traffic_mirror_target_id',
            'trafficMirrorTargetType' => 'traffic_mirror_target_type',
            'virtualNetworkId' => 'virtual_network_id',
            'packetLength' => 'packet_length',
            'priority' => 'priority',
            'enabled' => 'enabled',
            'type' => 'type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * id  使用镜像会话ID过滤或排序
    * name  使用镜像会话名称过滤或排序
    * description  使用镜像会话描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * trafficMirrorTargetId  使用镜像目的ID过滤
    * trafficMirrorTargetType  使用镜像目的类型过滤
    * virtualNetworkId  使用VNI过滤
    * packetLength  使用最大传输单元MTU过滤
    * priority  使用镜像会话优先级过滤
    * enabled  使用enabled过滤
    * type  使用镜像源类型过滤
    * createdAt  使用创建时间戳排序
    * updatedAt  使用更新时间戳排序
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'trafficMirrorFilterId' => 'setTrafficMirrorFilterId',
            'trafficMirrorTargetId' => 'setTrafficMirrorTargetId',
            'trafficMirrorTargetType' => 'setTrafficMirrorTargetType',
            'virtualNetworkId' => 'setVirtualNetworkId',
            'packetLength' => 'setPacketLength',
            'priority' => 'setPriority',
            'enabled' => 'setEnabled',
            'type' => 'setType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * id  使用镜像会话ID过滤或排序
    * name  使用镜像会话名称过滤或排序
    * description  使用镜像会话描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * trafficMirrorTargetId  使用镜像目的ID过滤
    * trafficMirrorTargetType  使用镜像目的类型过滤
    * virtualNetworkId  使用VNI过滤
    * packetLength  使用最大传输单元MTU过滤
    * priority  使用镜像会话优先级过滤
    * enabled  使用enabled过滤
    * type  使用镜像源类型过滤
    * createdAt  使用创建时间戳排序
    * updatedAt  使用更新时间戳排序
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'trafficMirrorFilterId' => 'getTrafficMirrorFilterId',
            'trafficMirrorTargetId' => 'getTrafficMirrorTargetId',
            'trafficMirrorTargetType' => 'getTrafficMirrorTargetType',
            'virtualNetworkId' => 'getVirtualNetworkId',
            'packetLength' => 'getPacketLength',
            'priority' => 'getPriority',
            'enabled' => 'getEnabled',
            'type' => 'getType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['trafficMirrorFilterId'] = isset($data['trafficMirrorFilterId']) ? $data['trafficMirrorFilterId'] : null;
        $this->container['trafficMirrorTargetId'] = isset($data['trafficMirrorTargetId']) ? $data['trafficMirrorTargetId'] : null;
        $this->container['trafficMirrorTargetType'] = isset($data['trafficMirrorTargetType']) ? $data['trafficMirrorTargetType'] : null;
        $this->container['virtualNetworkId'] = isset($data['virtualNetworkId']) ? $data['virtualNetworkId'] : null;
        $this->container['packetLength'] = isset($data['packetLength']) ? $data['packetLength'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  使用镜像会话ID过滤或排序
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
    * @param string|null $id 使用镜像会话ID过滤或排序
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
    *  使用镜像会话名称过滤或排序
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
    * @param string|null $name 使用镜像会话名称过滤或排序
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
    *  使用镜像会话描述过滤
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 使用镜像会话描述过滤
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets trafficMirrorFilterId
    *  使用筛选条件ID过滤
    *
    * @return string|null
    */
    public function getTrafficMirrorFilterId()
    {
        return $this->container['trafficMirrorFilterId'];
    }

    /**
    * Sets trafficMirrorFilterId
    *
    * @param string|null $trafficMirrorFilterId 使用筛选条件ID过滤
    *
    * @return $this
    */
    public function setTrafficMirrorFilterId($trafficMirrorFilterId)
    {
        $this->container['trafficMirrorFilterId'] = $trafficMirrorFilterId;
        return $this;
    }

    /**
    * Gets trafficMirrorTargetId
    *  使用镜像目的ID过滤
    *
    * @return string|null
    */
    public function getTrafficMirrorTargetId()
    {
        return $this->container['trafficMirrorTargetId'];
    }

    /**
    * Sets trafficMirrorTargetId
    *
    * @param string|null $trafficMirrorTargetId 使用镜像目的ID过滤
    *
    * @return $this
    */
    public function setTrafficMirrorTargetId($trafficMirrorTargetId)
    {
        $this->container['trafficMirrorTargetId'] = $trafficMirrorTargetId;
        return $this;
    }

    /**
    * Gets trafficMirrorTargetType
    *  使用镜像目的类型过滤
    *
    * @return string|null
    */
    public function getTrafficMirrorTargetType()
    {
        return $this->container['trafficMirrorTargetType'];
    }

    /**
    * Sets trafficMirrorTargetType
    *
    * @param string|null $trafficMirrorTargetType 使用镜像目的类型过滤
    *
    * @return $this
    */
    public function setTrafficMirrorTargetType($trafficMirrorTargetType)
    {
        $this->container['trafficMirrorTargetType'] = $trafficMirrorTargetType;
        return $this;
    }

    /**
    * Gets virtualNetworkId
    *  使用VNI过滤
    *
    * @return string|null
    */
    public function getVirtualNetworkId()
    {
        return $this->container['virtualNetworkId'];
    }

    /**
    * Sets virtualNetworkId
    *
    * @param string|null $virtualNetworkId 使用VNI过滤
    *
    * @return $this
    */
    public function setVirtualNetworkId($virtualNetworkId)
    {
        $this->container['virtualNetworkId'] = $virtualNetworkId;
        return $this;
    }

    /**
    * Gets packetLength
    *  使用最大传输单元MTU过滤
    *
    * @return string|null
    */
    public function getPacketLength()
    {
        return $this->container['packetLength'];
    }

    /**
    * Sets packetLength
    *
    * @param string|null $packetLength 使用最大传输单元MTU过滤
    *
    * @return $this
    */
    public function setPacketLength($packetLength)
    {
        $this->container['packetLength'] = $packetLength;
        return $this;
    }

    /**
    * Gets priority
    *  使用镜像会话优先级过滤
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 使用镜像会话优先级过滤
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets enabled
    *  使用enabled过滤
    *
    * @return string|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string|null $enabled 使用enabled过滤
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets type
    *  使用镜像源类型过滤
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
    * @param string|null $type 使用镜像源类型过滤
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createdAt
    *  使用创建时间戳排序
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 使用创建时间戳排序
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  使用更新时间戳排序
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 使用更新时间戳排序
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

