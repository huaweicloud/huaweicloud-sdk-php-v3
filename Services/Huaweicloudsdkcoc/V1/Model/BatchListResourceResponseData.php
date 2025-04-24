<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListResourceResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListResourceResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  CMDB分配的资源ID
    * resourceId  云服务分配的资源ID
    * domainId  租户ID
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * projectId  Openstack中的项目ID
    * regionId  region ID
    * epId  企业项目ID
    * tags  资源标签
    * agentId  uniAgent唯一id
    * agentState  uniAgent状态
    * properties  资源详细属性
    * ingestProperties  采集属性
    * isDelegated  是否已托管
    * operable  用户定义资源是否可运维实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'resourceId' => 'string',
            'domainId' => 'string',
            'name' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'epId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Coc\V1\Model\Tag[]',
            'agentId' => 'string',
            'agentState' => 'string',
            'properties' => 'map[string,object]',
            'ingestProperties' => 'map[string,string]',
            'isDelegated' => 'bool',
            'operable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  CMDB分配的资源ID
    * resourceId  云服务分配的资源ID
    * domainId  租户ID
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * projectId  Openstack中的项目ID
    * regionId  region ID
    * epId  企业项目ID
    * tags  资源标签
    * agentId  uniAgent唯一id
    * agentState  uniAgent状态
    * properties  资源详细属性
    * ingestProperties  采集属性
    * isDelegated  是否已托管
    * operable  用户定义资源是否可运维实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'resourceId' => null,
        'domainId' => null,
        'name' => null,
        'provider' => null,
        'type' => null,
        'projectId' => null,
        'regionId' => null,
        'epId' => null,
        'tags' => null,
        'agentId' => null,
        'agentState' => null,
        'properties' => null,
        'ingestProperties' => null,
        'isDelegated' => null,
        'operable' => null
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
    * id  CMDB分配的资源ID
    * resourceId  云服务分配的资源ID
    * domainId  租户ID
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * projectId  Openstack中的项目ID
    * regionId  region ID
    * epId  企业项目ID
    * tags  资源标签
    * agentId  uniAgent唯一id
    * agentState  uniAgent状态
    * properties  资源详细属性
    * ingestProperties  采集属性
    * isDelegated  是否已托管
    * operable  用户定义资源是否可运维实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'resourceId' => 'resource_id',
            'domainId' => 'domain_id',
            'name' => 'name',
            'provider' => 'provider',
            'type' => 'type',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'epId' => 'ep_id',
            'tags' => 'tags',
            'agentId' => 'agent_id',
            'agentState' => 'agent_state',
            'properties' => 'properties',
            'ingestProperties' => 'ingest_properties',
            'isDelegated' => 'is_delegated',
            'operable' => 'operable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  CMDB分配的资源ID
    * resourceId  云服务分配的资源ID
    * domainId  租户ID
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * projectId  Openstack中的项目ID
    * regionId  region ID
    * epId  企业项目ID
    * tags  资源标签
    * agentId  uniAgent唯一id
    * agentState  uniAgent状态
    * properties  资源详细属性
    * ingestProperties  采集属性
    * isDelegated  是否已托管
    * operable  用户定义资源是否可运维实例
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'resourceId' => 'setResourceId',
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'provider' => 'setProvider',
            'type' => 'setType',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'epId' => 'setEpId',
            'tags' => 'setTags',
            'agentId' => 'setAgentId',
            'agentState' => 'setAgentState',
            'properties' => 'setProperties',
            'ingestProperties' => 'setIngestProperties',
            'isDelegated' => 'setIsDelegated',
            'operable' => 'setOperable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  CMDB分配的资源ID
    * resourceId  云服务分配的资源ID
    * domainId  租户ID
    * name  资源名称
    * provider  云服务名称
    * type  资源类型
    * projectId  Openstack中的项目ID
    * regionId  region ID
    * epId  企业项目ID
    * tags  资源标签
    * agentId  uniAgent唯一id
    * agentState  uniAgent状态
    * properties  资源详细属性
    * ingestProperties  采集属性
    * isDelegated  是否已托管
    * operable  用户定义资源是否可运维实例
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'resourceId' => 'getResourceId',
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'provider' => 'getProvider',
            'type' => 'getType',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'epId' => 'getEpId',
            'tags' => 'getTags',
            'agentId' => 'getAgentId',
            'agentState' => 'getAgentState',
            'properties' => 'getProperties',
            'ingestProperties' => 'getIngestProperties',
            'isDelegated' => 'getIsDelegated',
            'operable' => 'getOperable'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['ingestProperties'] = isset($data['ingestProperties']) ? $data['ingestProperties'] : null;
        $this->container['isDelegated'] = isset($data['isDelegated']) ? $data['isDelegated'] : null;
        $this->container['operable'] = isset($data['operable']) ? $data['operable'] : null;
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
    *  CMDB分配的资源ID
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
    * @param string|null $id CMDB分配的资源ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets resourceId
    *  云服务分配的资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 云服务分配的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  资源名称
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
    * @param string|null $name 资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets provider
    *  云服务名称
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 云服务名称
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  资源类型
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
    * @param string|null $type 资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets projectId
    *  Openstack中的项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId Openstack中的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regionId
    *  region ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId region ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets epId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId 企业项目ID
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\Tag[]|null $tags 资源标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets agentId
    *  uniAgent唯一id
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId uniAgent唯一id
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentState
    *  uniAgent状态
    *
    * @return string|null
    */
    public function getAgentState()
    {
        return $this->container['agentState'];
    }

    /**
    * Sets agentState
    *
    * @param string|null $agentState uniAgent状态
    *
    * @return $this
    */
    public function setAgentState($agentState)
    {
        $this->container['agentState'] = $agentState;
        return $this;
    }

    /**
    * Gets properties
    *  资源详细属性
    *
    * @return map[string,object]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,object]|null $properties 资源详细属性
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets ingestProperties
    *  采集属性
    *
    * @return map[string,string]|null
    */
    public function getIngestProperties()
    {
        return $this->container['ingestProperties'];
    }

    /**
    * Sets ingestProperties
    *
    * @param map[string,string]|null $ingestProperties 采集属性
    *
    * @return $this
    */
    public function setIngestProperties($ingestProperties)
    {
        $this->container['ingestProperties'] = $ingestProperties;
        return $this;
    }

    /**
    * Gets isDelegated
    *  是否已托管
    *
    * @return bool|null
    */
    public function getIsDelegated()
    {
        return $this->container['isDelegated'];
    }

    /**
    * Sets isDelegated
    *
    * @param bool|null $isDelegated 是否已托管
    *
    * @return $this
    */
    public function setIsDelegated($isDelegated)
    {
        $this->container['isDelegated'] = $isDelegated;
        return $this;
    }

    /**
    * Gets operable
    *  用户定义资源是否可运维实例
    *
    * @return string|null
    */
    public function getOperable()
    {
        return $this->container['operable'];
    }

    /**
    * Sets operable
    *
    * @param string|null $operable 用户定义资源是否可运维实例
    *
    * @return $this
    */
    public function setOperable($operable)
    {
        $this->container['operable'] = $operable;
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

