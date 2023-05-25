<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAggregateResourceConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAggregateResourceConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID。
    * aggregatorId  聚合器ID。
    * aggregatorDomainId  聚合器帐号。
    * domainId  聚合资源所属帐号的ID。
    * epId  企业项目ID。
    * provider  云服务名称。
    * type  资源类型。
    * name  资源名称。
    * regionId  区域ID。
    * projectId  Openstack中的项目ID。
    * created  资源创建时间。
    * updated  资源更新时间。
    * tags  资源标签。
    * properties  资源详细属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'aggregatorId' => 'string',
            'aggregatorDomainId' => 'string',
            'domainId' => 'string',
            'epId' => 'string',
            'provider' => 'string',
            'type' => 'string',
            'name' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'tags' => 'map[string,string]',
            'properties' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID。
    * aggregatorId  聚合器ID。
    * aggregatorDomainId  聚合器帐号。
    * domainId  聚合资源所属帐号的ID。
    * epId  企业项目ID。
    * provider  云服务名称。
    * type  资源类型。
    * name  资源名称。
    * regionId  区域ID。
    * projectId  Openstack中的项目ID。
    * created  资源创建时间。
    * updated  资源更新时间。
    * tags  资源标签。
    * properties  资源详细属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'aggregatorId' => null,
        'aggregatorDomainId' => null,
        'domainId' => null,
        'epId' => null,
        'provider' => null,
        'type' => null,
        'name' => null,
        'regionId' => null,
        'projectId' => null,
        'created' => null,
        'updated' => null,
        'tags' => null,
        'properties' => null
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
    * resourceId  资源ID。
    * aggregatorId  聚合器ID。
    * aggregatorDomainId  聚合器帐号。
    * domainId  聚合资源所属帐号的ID。
    * epId  企业项目ID。
    * provider  云服务名称。
    * type  资源类型。
    * name  资源名称。
    * regionId  区域ID。
    * projectId  Openstack中的项目ID。
    * created  资源创建时间。
    * updated  资源更新时间。
    * tags  资源标签。
    * properties  资源详细属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'aggregatorId' => 'aggregator_id',
            'aggregatorDomainId' => 'aggregator_domain_id',
            'domainId' => 'domain_id',
            'epId' => 'ep_id',
            'provider' => 'provider',
            'type' => 'type',
            'name' => 'name',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'created' => 'created',
            'updated' => 'updated',
            'tags' => 'tags',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID。
    * aggregatorId  聚合器ID。
    * aggregatorDomainId  聚合器帐号。
    * domainId  聚合资源所属帐号的ID。
    * epId  企业项目ID。
    * provider  云服务名称。
    * type  资源类型。
    * name  资源名称。
    * regionId  区域ID。
    * projectId  Openstack中的项目ID。
    * created  资源创建时间。
    * updated  资源更新时间。
    * tags  资源标签。
    * properties  资源详细属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'aggregatorId' => 'setAggregatorId',
            'aggregatorDomainId' => 'setAggregatorDomainId',
            'domainId' => 'setDomainId',
            'epId' => 'setEpId',
            'provider' => 'setProvider',
            'type' => 'setType',
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'tags' => 'setTags',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID。
    * aggregatorId  聚合器ID。
    * aggregatorDomainId  聚合器帐号。
    * domainId  聚合资源所属帐号的ID。
    * epId  企业项目ID。
    * provider  云服务名称。
    * type  资源类型。
    * name  资源名称。
    * regionId  区域ID。
    * projectId  Openstack中的项目ID。
    * created  资源创建时间。
    * updated  资源更新时间。
    * tags  资源标签。
    * properties  资源详细属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'aggregatorId' => 'getAggregatorId',
            'aggregatorDomainId' => 'getAggregatorDomainId',
            'domainId' => 'getDomainId',
            'epId' => 'getEpId',
            'provider' => 'getProvider',
            'type' => 'getType',
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'tags' => 'getTags',
            'properties' => 'getProperties'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['aggregatorId'] = isset($data['aggregatorId']) ? $data['aggregatorId'] : null;
        $this->container['aggregatorDomainId'] = isset($data['aggregatorDomainId']) ? $data['aggregatorDomainId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
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
    * Gets resourceId
    *  资源ID。
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
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets aggregatorId
    *  聚合器ID。
    *
    * @return string|null
    */
    public function getAggregatorId()
    {
        return $this->container['aggregatorId'];
    }

    /**
    * Sets aggregatorId
    *
    * @param string|null $aggregatorId 聚合器ID。
    *
    * @return $this
    */
    public function setAggregatorId($aggregatorId)
    {
        $this->container['aggregatorId'] = $aggregatorId;
        return $this;
    }

    /**
    * Gets aggregatorDomainId
    *  聚合器帐号。
    *
    * @return string|null
    */
    public function getAggregatorDomainId()
    {
        return $this->container['aggregatorDomainId'];
    }

    /**
    * Sets aggregatorDomainId
    *
    * @param string|null $aggregatorDomainId 聚合器帐号。
    *
    * @return $this
    */
    public function setAggregatorDomainId($aggregatorDomainId)
    {
        $this->container['aggregatorDomainId'] = $aggregatorDomainId;
        return $this;
    }

    /**
    * Gets domainId
    *  聚合资源所属帐号的ID。
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
    * @param string|null $domainId 聚合资源所属帐号的ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets epId
    *  企业项目ID。
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
    * @param string|null $epId 企业项目ID。
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets provider
    *  云服务名称。
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
    * @param string|null $provider 云服务名称。
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
    *  资源类型。
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
    * @param string|null $type 资源类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  资源名称。
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
    * @param string|null $name 资源名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID。
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
    * @param string|null $regionId 区域ID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  Openstack中的项目ID。
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
    * @param string|null $projectId Openstack中的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets created
    *  资源创建时间。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 资源创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  资源更新时间。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 资源更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签。
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags 资源标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets properties
    *  资源详细属性。
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
    * @param map[string,object]|null $properties 资源详细属性。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

