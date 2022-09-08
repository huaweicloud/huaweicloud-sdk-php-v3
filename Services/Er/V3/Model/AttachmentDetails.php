<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  连接ID
    * name  连接名字
    * description  描述信息
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  企业路由器关联tag
    * projectId  项目ID
    * erId  er id
    * resourceId  内部连接关联的资源ID
    * resourceType  - vgw：云专线的虚拟网关 - vpn：vpn网关 - gdgw：下一代专线网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 - can：智能云接入网关
    * resourceProjectId  资源所属项目ID
    * associated  表示此连接是否被关联
    * routeTableId  关联路由表id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'state' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\Er\V3\Model\Tag[]',
            'projectId' => 'string',
            'erId' => 'string',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'resourceProjectId' => 'string',
            'associated' => 'bool',
            'routeTableId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  连接ID
    * name  连接名字
    * description  描述信息
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  企业路由器关联tag
    * projectId  项目ID
    * erId  er id
    * resourceId  内部连接关联的资源ID
    * resourceType  - vgw：云专线的虚拟网关 - vpn：vpn网关 - gdgw：下一代专线网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 - can：智能云接入网关
    * resourceProjectId  资源所属项目ID
    * associated  表示此连接是否被关联
    * routeTableId  关联路由表id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'state' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'tags' => null,
        'projectId' => null,
        'erId' => null,
        'resourceId' => null,
        'resourceType' => null,
        'resourceProjectId' => null,
        'associated' => null,
        'routeTableId' => null
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
    * id  连接ID
    * name  连接名字
    * description  描述信息
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  企业路由器关联tag
    * projectId  项目ID
    * erId  er id
    * resourceId  内部连接关联的资源ID
    * resourceType  - vgw：云专线的虚拟网关 - vpn：vpn网关 - gdgw：下一代专线网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 - can：智能云接入网关
    * resourceProjectId  资源所属项目ID
    * associated  表示此连接是否被关联
    * routeTableId  关联路由表id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'tags' => 'tags',
            'projectId' => 'project_id',
            'erId' => 'er_id',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'resourceProjectId' => 'resource_project_id',
            'associated' => 'associated',
            'routeTableId' => 'route_table_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  连接ID
    * name  连接名字
    * description  描述信息
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  企业路由器关联tag
    * projectId  项目ID
    * erId  er id
    * resourceId  内部连接关联的资源ID
    * resourceType  - vgw：云专线的虚拟网关 - vpn：vpn网关 - gdgw：下一代专线网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 - can：智能云接入网关
    * resourceProjectId  资源所属项目ID
    * associated  表示此连接是否被关联
    * routeTableId  关联路由表id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'tags' => 'setTags',
            'projectId' => 'setProjectId',
            'erId' => 'setErId',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'resourceProjectId' => 'setResourceProjectId',
            'associated' => 'setAssociated',
            'routeTableId' => 'setRouteTableId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  连接ID
    * name  连接名字
    * description  描述信息
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  企业路由器关联tag
    * projectId  项目ID
    * erId  er id
    * resourceId  内部连接关联的资源ID
    * resourceType  - vgw：云专线的虚拟网关 - vpn：vpn网关 - gdgw：下一代专线网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 - can：智能云接入网关
    * resourceProjectId  资源所属项目ID
    * associated  表示此连接是否被关联
    * routeTableId  关联路由表id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'tags' => 'getTags',
            'projectId' => 'getProjectId',
            'erId' => 'getErId',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'resourceProjectId' => 'getResourceProjectId',
            'associated' => 'getAssociated',
            'routeTableId' => 'getRouteTableId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceProjectId'] = isset($data['resourceProjectId']) ? $data['resourceProjectId'] : null;
        $this->container['associated'] = isset($data['associated']) ? $data['associated'] : null;
        $this->container['routeTableId'] = isset($data['routeTableId']) ? $data['routeTableId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
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
    * Gets id
    *  连接ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 连接ID
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
    *  连接名字
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 连接名字
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
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets state
    *  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
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
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets tags
    *  企业路由器关联tag
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null $tags 企业路由器关联tag
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
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
    * Gets erId
    *  er id
    *
    * @return string|null
    */
    public function getErId()
    {
        return $this->container['erId'];
    }

    /**
    * Sets erId
    *
    * @param string|null $erId er id
    *
    * @return $this
    */
    public function setErId($erId)
    {
        $this->container['erId'] = $erId;
        return $this;
    }

    /**
    * Gets resourceId
    *  内部连接关联的资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 内部连接关联的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  - vgw：云专线的虚拟网关 - vpn：vpn网关 - gdgw：下一代专线网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 - can：智能云接入网关
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType - vgw：云专线的虚拟网关 - vpn：vpn网关 - gdgw：下一代专线网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 - can：智能云接入网关
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceProjectId
    *  资源所属项目ID
    *
    * @return string|null
    */
    public function getResourceProjectId()
    {
        return $this->container['resourceProjectId'];
    }

    /**
    * Sets resourceProjectId
    *
    * @param string|null $resourceProjectId 资源所属项目ID
    *
    * @return $this
    */
    public function setResourceProjectId($resourceProjectId)
    {
        $this->container['resourceProjectId'] = $resourceProjectId;
        return $this;
    }

    /**
    * Gets associated
    *  表示此连接是否被关联
    *
    * @return bool|null
    */
    public function getAssociated()
    {
        return $this->container['associated'];
    }

    /**
    * Sets associated
    *
    * @param bool|null $associated 表示此连接是否被关联
    *
    * @return $this
    */
    public function setAssociated($associated)
    {
        $this->container['associated'] = $associated;
        return $this;
    }

    /**
    * Gets routeTableId
    *  关联路由表id
    *
    * @return string|null
    */
    public function getRouteTableId()
    {
        return $this->container['routeTableId'];
    }

    /**
    * Sets routeTableId
    *
    * @param string|null $routeTableId 关联路由表id
    *
    * @return $this
    */
    public function setRouteTableId($routeTableId)
    {
        $this->container['routeTableId'] = $routeTableId;
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

