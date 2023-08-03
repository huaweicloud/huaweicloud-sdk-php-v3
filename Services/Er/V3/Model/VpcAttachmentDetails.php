<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcAttachmentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcAttachmentDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  VPC连接ID
    * name  VPC连接名称
    * vpcId  VPC id
    * virsubnetId  VPC子网id
    * autoCreateVpcRoutes  默认为false,当设置true时，会自动为VPC配置10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16三条路由，下一跳指向企业路由器。
    * state  VPC连接状态:pending|available|modifying|deleting|deleted|failed|initiating_request|rejected|pending_acceptance|freezed
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签信息
    * description  VPC连接描述信息
    * projectId  项目ID
    * vpcProjectId  vpc所属项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'vpcId' => 'string',
            'virsubnetId' => 'string',
            'autoCreateVpcRoutes' => 'bool',
            'state' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'tags' => '\HuaweiCloud\SDK\Er\V3\Model\Tag[]',
            'description' => 'string',
            'projectId' => 'string',
            'vpcProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  VPC连接ID
    * name  VPC连接名称
    * vpcId  VPC id
    * virsubnetId  VPC子网id
    * autoCreateVpcRoutes  默认为false,当设置true时，会自动为VPC配置10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16三条路由，下一跳指向企业路由器。
    * state  VPC连接状态:pending|available|modifying|deleting|deleted|failed|initiating_request|rejected|pending_acceptance|freezed
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签信息
    * description  VPC连接描述信息
    * projectId  项目ID
    * vpcProjectId  vpc所属项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'vpcId' => null,
        'virsubnetId' => null,
        'autoCreateVpcRoutes' => null,
        'state' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'tags' => null,
        'description' => null,
        'projectId' => null,
        'vpcProjectId' => null
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
    * id  VPC连接ID
    * name  VPC连接名称
    * vpcId  VPC id
    * virsubnetId  VPC子网id
    * autoCreateVpcRoutes  默认为false,当设置true时，会自动为VPC配置10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16三条路由，下一跳指向企业路由器。
    * state  VPC连接状态:pending|available|modifying|deleting|deleted|failed|initiating_request|rejected|pending_acceptance|freezed
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签信息
    * description  VPC连接描述信息
    * projectId  项目ID
    * vpcProjectId  vpc所属项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'vpcId' => 'vpc_id',
            'virsubnetId' => 'virsubnet_id',
            'autoCreateVpcRoutes' => 'auto_create_vpc_routes',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'tags' => 'tags',
            'description' => 'description',
            'projectId' => 'project_id',
            'vpcProjectId' => 'vpc_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  VPC连接ID
    * name  VPC连接名称
    * vpcId  VPC id
    * virsubnetId  VPC子网id
    * autoCreateVpcRoutes  默认为false,当设置true时，会自动为VPC配置10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16三条路由，下一跳指向企业路由器。
    * state  VPC连接状态:pending|available|modifying|deleting|deleted|failed|initiating_request|rejected|pending_acceptance|freezed
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签信息
    * description  VPC连接描述信息
    * projectId  项目ID
    * vpcProjectId  vpc所属项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'vpcId' => 'setVpcId',
            'virsubnetId' => 'setVirsubnetId',
            'autoCreateVpcRoutes' => 'setAutoCreateVpcRoutes',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'tags' => 'setTags',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'vpcProjectId' => 'setVpcProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  VPC连接ID
    * name  VPC连接名称
    * vpcId  VPC id
    * virsubnetId  VPC子网id
    * autoCreateVpcRoutes  默认为false,当设置true时，会自动为VPC配置10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16三条路由，下一跳指向企业路由器。
    * state  VPC连接状态:pending|available|modifying|deleting|deleted|failed|initiating_request|rejected|pending_acceptance|freezed
    * createdAt  创建时间
    * updatedAt  更新时间
    * tags  标签信息
    * description  VPC连接描述信息
    * projectId  项目ID
    * vpcProjectId  vpc所属项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'vpcId' => 'getVpcId',
            'virsubnetId' => 'getVirsubnetId',
            'autoCreateVpcRoutes' => 'getAutoCreateVpcRoutes',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'tags' => 'getTags',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'vpcProjectId' => 'getVpcProjectId'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['autoCreateVpcRoutes'] = isset($data['autoCreateVpcRoutes']) ? $data['autoCreateVpcRoutes'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vpcProjectId'] = isset($data['vpcProjectId']) ? $data['vpcProjectId'] : null;
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
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
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
    * Gets id
    *  VPC连接ID
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
    * @param string $id VPC连接ID
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
    *  VPC连接名称
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
    * @param string $name VPC连接名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC id
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId VPC id
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  VPC子网id
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId VPC子网id
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets autoCreateVpcRoutes
    *  默认为false,当设置true时，会自动为VPC配置10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16三条路由，下一跳指向企业路由器。
    *
    * @return bool|null
    */
    public function getAutoCreateVpcRoutes()
    {
        return $this->container['autoCreateVpcRoutes'];
    }

    /**
    * Sets autoCreateVpcRoutes
    *
    * @param bool|null $autoCreateVpcRoutes 默认为false,当设置true时，会自动为VPC配置10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16三条路由，下一跳指向企业路由器。
    *
    * @return $this
    */
    public function setAutoCreateVpcRoutes($autoCreateVpcRoutes)
    {
        $this->container['autoCreateVpcRoutes'] = $autoCreateVpcRoutes;
        return $this;
    }

    /**
    * Gets state
    *  VPC连接状态:pending|available|modifying|deleting|deleted|failed|initiating_request|rejected|pending_acceptance|freezed
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state VPC连接状态:pending|available|modifying|deleting|deleted|failed|initiating_request|rejected|pending_acceptance|freezed
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
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 创建时间
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
    *  标签信息
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
    * @param \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets description
    *  VPC连接描述信息
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
    * @param string|null $description VPC连接描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets vpcProjectId
    *  vpc所属项目ID
    *
    * @return string|null
    */
    public function getVpcProjectId()
    {
        return $this->container['vpcProjectId'];
    }

    /**
    * Sets vpcProjectId
    *
    * @param string|null $vpcProjectId vpc所属项目ID
    *
    * @return $this
    */
    public function setVpcProjectId($vpcProjectId)
    {
        $this->container['vpcProjectId'] = $vpcProjectId;
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

