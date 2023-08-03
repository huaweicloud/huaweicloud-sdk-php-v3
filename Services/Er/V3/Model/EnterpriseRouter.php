<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnterpriseRouter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnterpriseRouter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  企业路由器实例的ID
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * state  运行状态
    * tags  标签信息
    * chargeMode  计费模式 按需
    * createdAt  创建时间
    * updatedAt  更新时间
    * enterpriseProjectId  企业项目ID
    * projectId  项目ID
    * asn  企业路由器实例的BGP AS号
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * defaultPropagationRouteTableId  默认传播路由表id
    * defaultAssociationRouteTableId  默认关联路由表id
    * availabilityZoneIds  企业路由器所在可用区信息
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'state' => 'string',
            'tags' => '\HuaweiCloud\SDK\Er\V3\Model\Tag[]',
            'chargeMode' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'asn' => 'int',
            'enableDefaultPropagation' => 'bool',
            'enableDefaultAssociation' => 'bool',
            'defaultPropagationRouteTableId' => 'string',
            'defaultAssociationRouteTableId' => 'string',
            'availabilityZoneIds' => 'string[]',
            'autoAcceptSharedAttachments' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  企业路由器实例的ID
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * state  运行状态
    * tags  标签信息
    * chargeMode  计费模式 按需
    * createdAt  创建时间
    * updatedAt  更新时间
    * enterpriseProjectId  企业项目ID
    * projectId  项目ID
    * asn  企业路由器实例的BGP AS号
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * defaultPropagationRouteTableId  默认传播路由表id
    * defaultAssociationRouteTableId  默认关联路由表id
    * availabilityZoneIds  企业路由器所在可用区信息
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'state' => null,
        'tags' => null,
        'chargeMode' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'enterpriseProjectId' => null,
        'projectId' => null,
        'asn' => 'int64',
        'enableDefaultPropagation' => null,
        'enableDefaultAssociation' => null,
        'defaultPropagationRouteTableId' => null,
        'defaultAssociationRouteTableId' => null,
        'availabilityZoneIds' => null,
        'autoAcceptSharedAttachments' => null
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
    * id  企业路由器实例的ID
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * state  运行状态
    * tags  标签信息
    * chargeMode  计费模式 按需
    * createdAt  创建时间
    * updatedAt  更新时间
    * enterpriseProjectId  企业项目ID
    * projectId  项目ID
    * asn  企业路由器实例的BGP AS号
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * defaultPropagationRouteTableId  默认传播路由表id
    * defaultAssociationRouteTableId  默认关联路由表id
    * availabilityZoneIds  企业路由器所在可用区信息
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'state' => 'state',
            'tags' => 'tags',
            'chargeMode' => 'charge_mode',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'asn' => 'asn',
            'enableDefaultPropagation' => 'enable_default_propagation',
            'enableDefaultAssociation' => 'enable_default_association',
            'defaultPropagationRouteTableId' => 'default_propagation_route_table_id',
            'defaultAssociationRouteTableId' => 'default_association_route_table_id',
            'availabilityZoneIds' => 'availability_zone_ids',
            'autoAcceptSharedAttachments' => 'auto_accept_shared_attachments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  企业路由器实例的ID
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * state  运行状态
    * tags  标签信息
    * chargeMode  计费模式 按需
    * createdAt  创建时间
    * updatedAt  更新时间
    * enterpriseProjectId  企业项目ID
    * projectId  项目ID
    * asn  企业路由器实例的BGP AS号
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * defaultPropagationRouteTableId  默认传播路由表id
    * defaultAssociationRouteTableId  默认关联路由表id
    * availabilityZoneIds  企业路由器所在可用区信息
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'state' => 'setState',
            'tags' => 'setTags',
            'chargeMode' => 'setChargeMode',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'asn' => 'setAsn',
            'enableDefaultPropagation' => 'setEnableDefaultPropagation',
            'enableDefaultAssociation' => 'setEnableDefaultAssociation',
            'defaultPropagationRouteTableId' => 'setDefaultPropagationRouteTableId',
            'defaultAssociationRouteTableId' => 'setDefaultAssociationRouteTableId',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'autoAcceptSharedAttachments' => 'setAutoAcceptSharedAttachments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  企业路由器实例的ID
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * state  运行状态
    * tags  标签信息
    * chargeMode  计费模式 按需
    * createdAt  创建时间
    * updatedAt  更新时间
    * enterpriseProjectId  企业项目ID
    * projectId  项目ID
    * asn  企业路由器实例的BGP AS号
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * defaultPropagationRouteTableId  默认传播路由表id
    * defaultAssociationRouteTableId  默认关联路由表id
    * availabilityZoneIds  企业路由器所在可用区信息
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'state' => 'getState',
            'tags' => 'getTags',
            'chargeMode' => 'getChargeMode',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'asn' => 'getAsn',
            'enableDefaultPropagation' => 'getEnableDefaultPropagation',
            'enableDefaultAssociation' => 'getEnableDefaultAssociation',
            'defaultPropagationRouteTableId' => 'getDefaultPropagationRouteTableId',
            'defaultAssociationRouteTableId' => 'getDefaultAssociationRouteTableId',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'autoAcceptSharedAttachments' => 'getAutoAcceptSharedAttachments'
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['asn'] = isset($data['asn']) ? $data['asn'] : null;
        $this->container['enableDefaultPropagation'] = isset($data['enableDefaultPropagation']) ? $data['enableDefaultPropagation'] : null;
        $this->container['enableDefaultAssociation'] = isset($data['enableDefaultAssociation']) ? $data['enableDefaultAssociation'] : null;
        $this->container['defaultPropagationRouteTableId'] = isset($data['defaultPropagationRouteTableId']) ? $data['defaultPropagationRouteTableId'] : null;
        $this->container['defaultAssociationRouteTableId'] = isset($data['defaultAssociationRouteTableId']) ? $data['defaultAssociationRouteTableId'] : null;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['autoAcceptSharedAttachments'] = isset($data['autoAcceptSharedAttachments']) ? $data['autoAcceptSharedAttachments'] : null;
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
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['asn'] === null) {
            $invalidProperties[] = "'asn' can't be null";
        }
        if ($this->container['enableDefaultPropagation'] === null) {
            $invalidProperties[] = "'enableDefaultPropagation' can't be null";
        }
        if ($this->container['enableDefaultAssociation'] === null) {
            $invalidProperties[] = "'enableDefaultAssociation' can't be null";
        }
        if ($this->container['availabilityZoneIds'] === null) {
            $invalidProperties[] = "'availabilityZoneIds' can't be null";
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
    *  企业路由器实例的ID
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
    * @param string $id 企业路由器实例的ID
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
    *  企业路由器实例名称
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
    * @param string $name 企业路由器实例名称
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
    *  企业路由器实例描述信息
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
    * @param string|null $description 企业路由器实例描述信息
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
    *  运行状态
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
    * @param string $state 运行状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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
    * Gets chargeMode
    *  计费模式 按需
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 计费模式 按需
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
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
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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
    * Gets asn
    *  企业路由器实例的BGP AS号
    *
    * @return int
    */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
    * Sets asn
    *
    * @param int $asn 企业路由器实例的BGP AS号
    *
    * @return $this
    */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;
        return $this;
    }

    /**
    * Gets enableDefaultPropagation
    *  是否开启默认路由表传播，默认false不开启
    *
    * @return bool
    */
    public function getEnableDefaultPropagation()
    {
        return $this->container['enableDefaultPropagation'];
    }

    /**
    * Sets enableDefaultPropagation
    *
    * @param bool $enableDefaultPropagation 是否开启默认路由表传播，默认false不开启
    *
    * @return $this
    */
    public function setEnableDefaultPropagation($enableDefaultPropagation)
    {
        $this->container['enableDefaultPropagation'] = $enableDefaultPropagation;
        return $this;
    }

    /**
    * Gets enableDefaultAssociation
    *  是否开启默认路由表关联，默认false不开启
    *
    * @return bool
    */
    public function getEnableDefaultAssociation()
    {
        return $this->container['enableDefaultAssociation'];
    }

    /**
    * Sets enableDefaultAssociation
    *
    * @param bool $enableDefaultAssociation 是否开启默认路由表关联，默认false不开启
    *
    * @return $this
    */
    public function setEnableDefaultAssociation($enableDefaultAssociation)
    {
        $this->container['enableDefaultAssociation'] = $enableDefaultAssociation;
        return $this;
    }

    /**
    * Gets defaultPropagationRouteTableId
    *  默认传播路由表id
    *
    * @return string|null
    */
    public function getDefaultPropagationRouteTableId()
    {
        return $this->container['defaultPropagationRouteTableId'];
    }

    /**
    * Sets defaultPropagationRouteTableId
    *
    * @param string|null $defaultPropagationRouteTableId 默认传播路由表id
    *
    * @return $this
    */
    public function setDefaultPropagationRouteTableId($defaultPropagationRouteTableId)
    {
        $this->container['defaultPropagationRouteTableId'] = $defaultPropagationRouteTableId;
        return $this;
    }

    /**
    * Gets defaultAssociationRouteTableId
    *  默认关联路由表id
    *
    * @return string|null
    */
    public function getDefaultAssociationRouteTableId()
    {
        return $this->container['defaultAssociationRouteTableId'];
    }

    /**
    * Sets defaultAssociationRouteTableId
    *
    * @param string|null $defaultAssociationRouteTableId 默认关联路由表id
    *
    * @return $this
    */
    public function setDefaultAssociationRouteTableId($defaultAssociationRouteTableId)
    {
        $this->container['defaultAssociationRouteTableId'] = $defaultAssociationRouteTableId;
        return $this;
    }

    /**
    * Gets availabilityZoneIds
    *  企业路由器所在可用区信息
    *
    * @return string[]
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string[] $availabilityZoneIds 企业路由器所在可用区信息
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets autoAcceptSharedAttachments
    *  是否自动接受共享连接创建，默认false不开启
    *
    * @return bool|null
    */
    public function getAutoAcceptSharedAttachments()
    {
        return $this->container['autoAcceptSharedAttachments'];
    }

    /**
    * Sets autoAcceptSharedAttachments
    *
    * @param bool|null $autoAcceptSharedAttachments 是否自动接受共享连接创建，默认false不开启
    *
    * @return $this
    */
    public function setAutoAcceptSharedAttachments($autoAcceptSharedAttachments)
    {
        $this->container['autoAcceptSharedAttachments'] = $autoAcceptSharedAttachments;
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

